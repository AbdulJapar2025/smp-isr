<?php
require_once __DIR__ . '/includes/config.php'; 
include 'includes/header.php'; 

// Ambil berita terbaru
require_once __DIR__ . '/models/Berita.php';
$beritaModel = new Berita();
$latestBerita = $beritaModel->getLatest(6);
?>

<style>
  .berita-section-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
    transition: all 0.4s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .berita-section-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 50px rgba(34, 139, 34, 0.2);
  }

  .berita-section-card-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
    position: relative;
  }

  .berita-section-card-body {
    padding: 1.5rem;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .berita-section-category {
    display: inline-flex;
    align-items: center;
    padding: 6px 14px;
    background: rgba(34, 139, 34, 0.1);
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 700;
    color: #228B22;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
    width: fit-content;
  }

  .berita-section-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.85rem;
    color: #666;
    margin-top: auto;
    padding-top: 1rem;
    border-top: 1px solid #f0f0f0;
  }

  .berita-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    backdrop-filter: blur(8px);
    z-index: 99999;
    overflow-y: auto;
    padding: 2rem;
  }

  .berita-modal.active {
    display: flex;
    align-items: flex-start;
    justify-content: center;
  }

  .berita-modal-content {
    background: white;
    border-radius: 24px;
    max-width: 900px;
    width: 100%;
    margin: 2rem auto;
    position: relative;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5);
    overflow: hidden;
  }

  .berita-modal-close {
    position: absolute;
    top: 1.5rem;
    right: 1.5rem;
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.95);
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  }

  .berita-modal-close:hover {
    background: #ff4444;
    transform: rotate(90deg) scale(1.1);
  }

  .berita-modal-close svg {
    width: 24px;
    height: 24px;
    stroke: #333;
    transition: stroke 0.3s ease;
  }

  .berita-modal-close:hover svg {
    stroke: white;
  }

  .berita-modal-header-img {
    width: 100%;
    height: 400px;
    object-fit: cover;
  }

  .berita-modal-body {
    padding: 2rem 3rem 3rem;
    max-height: 70vh;
    overflow-y: auto;
  }

  .berita-modal-body::-webkit-scrollbar {
    width: 8px;
  }

  .berita-modal-body::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  .berita-modal-body::-webkit-scrollbar-thumb {
    background: #228B22;
    border-radius: 4px;
  }

  .berita-modal-body::-webkit-scrollbar-thumb:hover {
    background: #1a6b1a;
  }

  .berita-content {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #333;
  }

  .berita-content p {
    margin-bottom: 1rem;
  }

  @media (max-width: 768px) {
    .berita-modal-content {
      margin: 1rem;
    }
    
    .berita-modal-header-img {
      height: 250px;
    }

    .berita-modal-body {
      padding: 1.5rem;
    }

    .berita-modal-close {
      top: 1rem;
      right: 1rem;
      width: 40px;
      height: 40px;
    }
  }

  /* Custom Animations */
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }

  @keyframes slideInLeft {
    from { opacity: 0; transform: translateX(-50px); }
    to { opacity: 1; transform: translateX(0); }
  }

  @keyframes slideInRight {
    from { opacity: 0; transform: translateX(50px); }
    to { opacity: 1; transform: translateX(0); }
  }

  @keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
  }

  .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
  .animate-float { animation: float 3s ease-in-out infinite; }
  .animate-slide-in-left { animation: slideInLeft 0.8s ease-out forwards; }
  .animate-slide-in-right { animation: slideInRight 0.8s ease-out forwards; }
  .animate-pulse { animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; }

  /* PMB Popup Overlay */
  .pmb-popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(8px);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s ease;
  }

  .pmb-popup-overlay.active {
    opacity: 1;
    visibility: visible;
  }

  .pmb-popup-container {
    position: relative;
    max-width: 95vw;
    max-height: 95vh;
    width: auto;
    height: auto;
    background: white;
    border-radius: 20px;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5);
    overflow: hidden;
    transform: scale(0.9);
    transition: transform 0.4s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .pmb-popup-overlay.active .pmb-popup-container {
    transform: scale(1);
  }

  .pmb-close-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.95);
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  }

  .pmb-close-btn:hover {
    background: #ff4444;
    transform: rotate(90deg) scale(1.1);
  }

  .pmb-close-btn svg {
    width: 24px;
    height: 24px;
    stroke: #333;
    transition: stroke 0.3s ease;
  }

  .pmb-close-btn:hover svg {
    stroke: white;
  }

  .pmb-popup-content {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: auto;
    max-height: 95vh;
  }

  .pmb-popup-content img {
    max-width: 100%;
    max-height: 95vh;
    width: auto;
    height: auto;
    object-fit: contain;
    display: block;
  }

  .pmb-floating-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
    border-radius: 15px;
    cursor: pointer;
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9998;
    box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
    transition: all 0.3s ease;
    overflow: hidden;
  }

  .pmb-floating-btn.active {
    display: flex;
  }

  .pmb-floating-btn:hover {
    transform: scale(1.1) translateY(-5px);
    box-shadow: 0 12px 35px rgba(255, 107, 53, 0.6);
  }

  .pmb-floating-btn img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  @keyframes pulseRing {
    0% {
      transform: scale(1);
      opacity: 1;
    }
    100% {
      transform: scale(1.5);
      opacity: 0;
    }
  }

  .pmb-floating-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 15px;
    border: 3px solid #FF6B35;
    animation: pulseRing 2s infinite;
  }

  @media (max-width: 768px) {
    .pmb-popup-container {
      max-width: 98vw;
      max-height: 98vh;
      border-radius: 15px;
    }

    .pmb-popup-content img {
      max-height: 98vh;
    }

    .pmb-close-btn {
      width: 40px;
      height: 40px;
      top: 10px;
      right: 10px;
    }

    .pmb-floating-btn {
      width: 60px;
      height: 60px;
      bottom: 20px;
      right: 20px;
      border-radius: 12px;
    }

    .pmb-floating-btn::before {
      border-radius: 12px;
    }
  }

  .pmb-popup-content::-webkit-scrollbar {
    width: 8px;
    height: 8px;
  }

  .pmb-popup-content::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  .pmb-popup-content::-webkit-scrollbar-thumb {
    background: #FF6B35;
    border-radius: 4px;
  }

  .pmb-popup-content::-webkit-scrollbar-thumb:hover {
    background: #F7931E;
  }

  .video-hero {
    position: relative;
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    height: 85vh;
    min-height: 600px;
    max-height: 900px;
    overflow: hidden;
  }

  .video-hero video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    object-fit: cover;
  }

  .video-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(34, 139, 34, 0.6) 100%);
    z-index: 1;
  }

  .video-content {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .gradient-text {
    background: linear-gradient(90deg, #228B22, #FFD700);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .welcome-bg {
    background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
    border-radius: 30px;
    position: relative;
    overflow: hidden;
  }

  .welcome-bg::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    animation: float 6s ease-in-out infinite;
  }

  .welcome-bg::after {
    content: '';
    position: absolute;
    bottom: -50%;
    left: -50%;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
    animation: float 8s ease-in-out infinite reverse;
  }

  .timeline-item {
    position: relative;
    padding-left: 50px;
    margin-bottom: 2.5rem;
  }

  .timeline-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 5px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: linear-gradient(135deg, #228B22, #FFD700);
    box-shadow: 0 0 0 6px rgba(34, 139, 34, 0.15);
  }

  .timeline-item::after {
    content: '';
    position: absolute;
    left: 8px;
    top: 25px;
    width: 2px;
    height: calc(100% + 15px);
    background: linear-gradient(180deg, #228B22, transparent);
  }

  .timeline-item:last-child::after {
    display: none;
  }

  .modern-card {
    background: white;
    border-radius: 24px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(34, 139, 34, 0.1);
  }

  .modern-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, #228B22, #FFD700);
    transform: scaleX(0);
    transition: transform 0.4s ease;
  }

  .modern-card:hover::before {
    transform: scaleX(1);
  }

  .modern-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(34, 139, 34, 0.2);
    border-color: rgba(34, 139, 34, 0.3);
  }

  .stat-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    border-radius: 20px;
    padding: 32px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }

  .stat-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
  }

  .stat-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }

  .section-spacing {
    padding: 5rem 1rem;
  }

  @media (max-width: 768px) {
    .section-spacing {
      padding: 3rem 1rem;
    }
    .video-hero {
      height: 70vh;
      min-height: 500px;
    }
  }

  .announcement-card {
    background: white;
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
    display: flex;
    gap: 24px;
    align-items: start;
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }

  .announcement-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 45px rgba(34, 139, 34, 0.15);
    border-color: rgba(34, 139, 34, 0.2);
  }

  .announcement-icon {
    flex-shrink: 0;
    width: 72px;
    height: 72px;
    border-radius: 50%;
    overflow: hidden;
    background: linear-gradient(135deg, #f0fff0, #e0ffe0);
    padding: 4px;
    border: 2px solid rgba(34, 139, 34, 0.1);
  }

  .announcement-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
  }

  .partner-logo {
    filter: grayscale(100%);
    opacity: 0.6;
    transition: all 0.3s ease;
  }

  .partner-logo:hover {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.08);
  }

  .history-card {
    background: white;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
  }

  .scroll-reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
  }

  .scroll-reveal.active {
    opacity: 1;
    transform: translateY(0);
  }

  .cta-btn {
    position: relative;
    overflow: hidden;
  }

  .cta-btn::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
  }

  .cta-btn:hover::after {
    width: 300px;
    height: 300px;
  }

  .video-wrapper {
    position: relative;
    background: #000;
  }

  .badge-modern {
    display: inline-flex;
    align-items: center;
    padding: 8px 20px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
  }

  .pmb-banner {
    background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
    border-radius: 25px;
    padding: 40px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(255, 107, 53, 0.3);
  }

  .pmb-banner::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.15) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite;
  }

  .pmb-banner::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -10%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite reverse;
  }

  .pmb-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    padding: 10px 25px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.9rem;
    letter-spacing: 1px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    animation: pulse 2s ease-in-out infinite;
  }

  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-slide-up {
    animation: slideUp 0.8s ease-out forwards;
  }

@media (max-width: 640px){
  .video-hero { height: 78vh; min-height: 480px; }
  .section-spacing { padding: 3.5rem 1rem; }
}
@media (max-width: 480px){
  .video-hero { height: 72vh; min-height: 420px; }
}
</style>

<!-- PMB Popup Overlay -->
<div class="pmb-popup-overlay" id="pmbPopup">
  <div class="pmb-popup-container">
    <button class="pmb-close-btn" id="closePmbPopup" aria-label="Close">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
    <div class="pmb-popup-content">
      <img src="<?= asset('assets/img/pmb.webp') ?>" alt="Brosur Penerimaan Murid Baru 2025/2026" loading="eager">
    </div>
  </div>
</div>

<!-- PMB Floating Button -->
<div class="pmb-floating-btn" id="pmbFloatingBtn">
  <img src="<?= asset('assets/img/pmb.webp') ?>" alt="PMB">
</div>

<!-- Full Width Image Hero Section -->
<section class="relative w-full min-h-screen overflow-hidden">

  <!-- Background Image -->
  <img 
    src="<?= asset('assets/img/Heroimage.webp') ?>" 
    alt="Hero Background"
    class="absolute inset-0 w-full h-full object-cover object-center md:object-[50%_30%]"
  />

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Gradient bawah agar teks lebih jelas -->
  <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-black/50 to-transparent"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-5xl mx-auto md:pt-40 md:pb-48 text-center text-white">


    <!-- Badge -->
    <div class="inline-flex items-center mb-6 bg-gray-300/20 backdrop-blur-md px-4 py-2 rounded-full shadow-lg">
      <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
      </svg>
      Terakreditasi A
    </div>


    <!-- Title -->
    <h1 class="text-3xl md:text-5xl lg:text-7xl font-extrabold mb-6 leading-tight tracking-tight">
      SMP Ignatius Slamet Riyadi
    </h1>

    <p class="text-xl md:text-3xl font-bold opacity-95 mb-3">
      Yayasan Salib Suci
    </p>

    <p class="text-xl md:text-2xl mb-8 opacity-90 font-medium">
      Resinda Karawang — Sekolah Menengah Pertama
    </p>

    <!-- Tagline -->
    <p class="text-base md:text-lg mb-12 opacity-90 max-w-3xl mx-auto leading-relaxed">
      Shaping Talent, Nurturing Character, Empowering Future Leaders.
    </p>

    <!-- CTA Buttons -->
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="#tentang" 
         class="inline-flex items-center px-10 py-5 rounded-full text-lg font-bold bg-green-500 text-white hover:bg-green-400 transition-all transform hover:scale-105 shadow-2xl">
        Jelajahi Sekolah Kami
      </a>

      <a href="#daftar" 
         class="text-white inline-flex items-center px-10 py-5 rounded-full text-lg font-bold border-2 border-white hover:bg-white hover:text-green-600 transition-all backdrop-blur-sm bg-white/10">
        Daftar Sekarang
      </a>
    </div>

  </div>

  <!-- Scroll Down Icon -->
  <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 animate-bounce">
    <svg class="w-8 h-8 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
    </svg>
  </div>

</section>


<!-- Welcome Section -->
<section class="section-spacing scroll-reveal" id="welcome">
  <div class="welcome-bg text-white p-6 md:p-12 relative">

    <div class="relative z-10 max-w-5xl mx-auto">

      <!-- Content Box -->
      <div class="bg-gray-900/40 backdrop-blur-md rounded-3xl p-6 md:p-12 shadow-2xl">

        <!-- Title -->
        <h2 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight text-white">
          SELAMAT DATANG DI WEBSITE<br>SMP IGNATIUS SLAMET RIYADI
        </h2>

        <h3 class="text-xl md:text-2xl font-bold mb-10 opacity-90 text-white">
          RESINDA KARAWANG
        </h3>

        <!-- Text Content -->
        <div class="space-y-6 text-base md:text-lg leading-relaxed opacity-95">

          <p class="font-semibold text-yellow-300">
            Salam Sejahtera Bagi Kita Semua,
          </p>

          <p>
            Puji dan syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas rahmat dan karunia-Nya, sehingga kita senantiasa diberikan kekuatan untuk berkarya di dunia pendidikan.
          </p>

          <p>
            Selamat datang di situs web resmi SMP Ignatius Slamet Riyadi Resinda. Suatu kebanggaan bagi kami dapat menyambut Anda — para orang tua, calon siswa, siswa-siswi, para alumni, maupun masyarakat luas — untuk mengenal lebih dekat keluarga besar kami melalui jendela digital ini.
          </p>

          <p>
            SMP Ignatius Slamet Riyadi Resinda adalah komunitas pembelajar yang berlandaskan pada empat nilai utama Igyakni:
            <strong class="text-yellow-300">
              berhati nurani, berbelas kasih, kepemimpinan, dan profesional (Conscience, Compassion, Leadership, dan Profesional).
            </strong>
            Kami tidak hanya fokus pada keunggulan akademis, tetapi juga membentuk setiap siswa menjadi pribadi yang utuh, cerdas, berkarakter mulia, dan peduli terhadap sesama serta bangsa.
          </p>

          <p>
            Website ini kami hadirkan sebagai sarana komunikasi dan sumber informasi utama mengenai kegiatan, program akademik, prestasi siswa, dan agenda sekolah. Jelajahi setiap halamannya untuk melihat bagaimana kami berupaya mewujudkan visi dan misi pendidikan setiap hari.
          </p>

          <p>
            Terima kasih atas kunjungan Anda. Kiranya kita dapat terus menjalin kerja sama yang baik dalam mengantarkan putra-putri kita menuju masa depan yang gemilang.
          </p>

          <p>
            Tuhan memberkati kita semua.
          </p>

          <p class="pt-4">Hormat kami,</p>

          <p class="font-semibold text-yellow-300 text-lg">
            Fransisca Dwi Sariasmara, ST, MM
          </p>

          <p>
            Kepala SMP Ignatius Slamet Riyadi Resinda
          </p>

        </div>

      </div>

    </div>

  </div>
</section>






<!-- Tentang Sekolah -->
<section id="tentang" class="section-spacing bg-white rounded-3xl scroll-reveal">
  <div class="max-w-6xl mx-auto px-6">

    <div class="mb-12 text-center">
      <div class="inline-block px-6 py-2 bg-green-50 rounded-full text-green-600 font-semibold mb-4">
        Profil Sekolah
      </div>
      <h2 class="text-2xl md:text-4xl font-extrabold mb-6">
        Tentang <span class="gradient-text">Sekolah</span>
      </h2>
    </div>

    <!-- Grid Kiri-Kanan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:items-stretch">

      <!-- Video (Full Height) -->
      <div class="rounded-3xl overflow-hidden shadow-xl h-full min-h-[320px] flex">
        <iframe 
          class="w-full h-full object-cover"
          src="https://www.youtube.com/embed/eJ_fSu1bGu4?rel=0&modestbranding=1"
          title="Profil Sekolah"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      </div>

      <!-- Teks -->
      <div class="flex flex-col justify-center">
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
          Dengan semangat <strong>“Shaping Talent, Nurturing Character, Empowering Future Leaders”</strong>,
          SMP Ignatius Slamet Riyadi membentuk peserta didik yang bertalenta, berkarakter, dan siap menjadi
          pemimpin masa depan dengan <strong>great attitude</strong> dan <strong>good leadership</strong>.
        </p>

        <p class="text-lg text-gray-700 leading-relaxed">
          Program unggulan kami meliputi 
          <strong>Talent Development</strong>, 
          <strong>English Program</strong>, 
          <strong>Good Relationship</strong>, dan 
          <strong>Character & Leadership Building</strong>, 
          sebagai fondasi pengembangan akademik dan karakter siswa secara menyeluruh.
        </p>
      </div>

    </div>

  </div>
</section>



 <!-- Program Unggulan SMP -->
<section id="program" class="section-spacing scroll-reveal">
  <div class="text-center mb-20">
    <div class="inline-block px-6 py-2 bg-green-50 rounded-full text-green-600 font-semibold mb-4">
      Program Unggulan
    </div>
    <h2 class="text-4xl md:text-6xl font-extrabold mb-6">
      <span class="gradient-text">Program Unggulan</span> 
    </h2>
    <p class="text-xl text-gray-600">
      Membangun Talenta, Memperkuat Karakter, Melahirkan Pemimpin Masa Depan
    </p>
  </div>

  <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">

    <!-- Talent Development -->
    <div class="announcement-card">
      <div class="announcement-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
</svg>


      </div>
      <div>
        <h5 class="text-xl font-bold mb-3 text-gray-900">Talent Development</h5>
        <p class="text-gray-600 leading-relaxed">
          Program pengembangan bakat yang membantu siswa menemukan, mengasah, dan mengekspresikan potensi terbaiknya dalam berbagai bidang.
        </p>
      </div>
    </div>

    <!-- English Program -->
    <div class="announcement-card">
      <div class="announcement-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
</svg>


      </div>
      <div>
        <h5 class="text-xl font-bold mb-3 text-gray-900">English Program</h5>
        <p class="text-gray-600 leading-relaxed">
          Pembelajaran Bahasa Inggris berstandar modern untuk meningkatkan kemampuan komunikasi global siswa secara aktif dan percaya diri.
        </p>
      </div>
    </div>

    <!-- Good Relationship -->
    <div class="announcement-card">
      <div class="announcement-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
</svg>


      </div>
      <div>
        <h5 class="text-xl font-bold mb-3 text-gray-900">Good Relationship</h5>
        <p class="text-gray-600 leading-relaxed">
          Penguatan keterampilan sosial, empati, komunikasi, dan kerja sama untuk membangun relasi positif antar siswa dan lingkungan sekolah.
        </p>
      </div>
    </div>

    <!-- Character & Leadership Building -->
    <div class="announcement-card">
      <div class="announcement-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>

      </div>
      <div>
        <h5 class="text-xl font-bold mb-3 text-gray-900">Character & Leadership Building</h5>
        <p class="text-gray-600 leading-relaxed">
          Program pembinaan karakter dan kepemimpinan untuk membentuk siswa yang berintegritas, berinisiatif, dan siap menjadi pemimpin masa depan.
        </p>
      </div>
    </div>

  </div>
</section>


  <!-- Statistics -->
  <!--<section class="section-spacing bg-white rounded-3xl scroll-reveal" id="prestasi">-->
  <!--  <div class="text-center mb-20">-->
  <!--    <div class="inline-block px-6 py-2 bg-green-50 rounded-full text-green-600 font-semibold mb-4">-->
  <!--      Pencapaian Kami-->
  <!--    </div>-->
  <!--    <h2 class="text-2xl md:text-4xl lg:text-5xl font-extrabold mb-6">-->
  <!--      Prestasi & <span class="gradient-text">Pencapaian</span>-->
  <!--    </h2>-->
  <!--    <p class="text-xl text-gray-600 max-w-3xl mx-auto">-->
  <!--      Angka-angka yang menunjukkan komitmen kami dalam memberikan layanan terbaik-->
  <!--    </p>-->
  <!--  </div>-->

  <!--  <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">-->
  <!--    <div class="stat-card">-->
  <!--      <div class="stat-icon bg-gradient-to-br from-pink-400 to-pink-600">-->
  <!--        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">-->
  <!--          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>-->
  <!--        </svg>-->
  <!--      </div>-->
  <!--      <div class="text-5xl font-extrabold text-gray-900 mb-3 counter" data-count="3472">0</div>-->
  <!--      <div class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Happy Customers</div>-->
  <!--    </div>-->

  <!--    <div class="stat-card">-->
  <!--      <div class="stat-icon bg-gradient-to-br from-green-400 to-green-600">-->
  <!--        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">-->
  <!--          <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>-->
  <!--        </svg>-->
  <!--      </div>-->
  <!--      <div class="text-5xl font-extrabold text-gray-900 mb-3 counter" data-count="4537">0</div>-->
  <!--      <div class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Expert Employees</div>-->
  <!--    </div>-->

  <!--    <div class="stat-card">-->
  <!--      <div class="stat-icon bg-gradient-to-br from-blue-400 to-blue-600">-->
  <!--        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">-->
  <!--          <path d="M17 3H7v3H3v3c0 3.31 2.69 6 6 6h6c3.31 0 6-2.69 6-6V6h-4V3zM8 21h8v-2H8v2z"/>-->
  <!--        </svg>-->
  <!--      </div>-->
  <!--      <div class="text-5xl font-extrabold text-gray-900 mb-3 counter" data-count="2654">0</div>-->
  <!--      <div class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Awards Won</div>-->
  <!--    </div>-->

  <!--    <div class="stat-card">-->
  <!--      <div class="stat-icon bg-gradient-to-br from-yellow-400 to-yellow-600">-->
  <!--        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">-->
  <!--          <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM3.18 12.4L1 13.5 12 19l3.5-1.86V15L12 18 3.18 12.4z"/>-->
  <!--        </svg>-->
  <!--      </div>-->
  <!--      <div class="text-5xl font-extrabold text-gray-900 mb-3 counter" data-count="1789">0</div>-->
  <!--      <div class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Graduated Students</div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->

  <!-- Berita Terkini Section -->
  <section class="section-spacing scroll-reveal" id="berita">
    <div class="text-center mb-20">
      <div class="inline-block px-6 py-2 bg-green-50 rounded-full text-green-600 font-semibold mb-4">
        Berita & Informasi
      </div>
      <h2 class="text-2xl md:text-4xl lg:text-5xl font-extrabold mb-6">
        <span class="gradient-text">Berita</span> Terkini
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Update terbaru tentang kegiatan, prestasi, dan pencapaian SMP Ignatius Slamet Riyadi
      </p>
    </div>

    <?php if (empty($latestBerita)): ?>
      <div class="text-center py-16">
        <div class="text-6xl mb-4">📭</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Berita</h3>
        <p class="text-gray-600">Berita akan segera hadir. Stay tuned!</p>
      </div>
    <?php else: ?>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($latestBerita as $berita): ?>
          <article class="berita-section-card">
            <div class="relative overflow-hidden">
              <?php if (!empty($berita['image_path'])): ?>
                <img src="<?= asset($berita['image_path']) ?>" 
                     alt="<?= htmlspecialchars($berita['title']) ?>" 
                     class="berita-section-card-image">
              <?php else: ?>
                <div class="berita-section-card-image bg-gradient-to-br from-green-400 to-green-600"></div>
              <?php endif; ?>
              <div class="absolute top-4 left-4">
                <span class="berita-section-category">
                  <?php
                    $catIcons = [
                      'akademik' => '📚 Akademik',
                      'prestasi' => '🏆 Prestasi',
                      'kegiatan' => '🎉 Kegiatan',
                      'pengumuman' => '📢 Pengumuman'
                    ];
                    echo $catIcons[$berita['category']] ?? '📰 Berita';
                  ?>
                </span>
              </div>
            </div>
            
            <div class="berita-section-card-body">
              <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                <?= htmlspecialchars($berita['title']) ?>
              </h3>
              
              <?php if (!empty($berita['excerpt'])): ?>
                <p class="text-gray-600 mb-4 line-clamp-3 flex-1">
                  <?= htmlspecialchars($berita['excerpt']) ?>
                </p>
              <?php endif; ?>
              
              <div class="berita-section-meta">
                <span>
                  <i class="far fa-calendar mr-1"></i> 
                  <?= date('d M Y', strtotime($berita['created_at'])) ?>
                </span>
                <span>
                  <i class="far fa-eye mr-1"></i> 
                  <?= number_format($berita['views']) ?>
                </span>
              </div>
              
              <button onclick="openBeritaModal(<?= $berita['id'] ?>)" 
                      class="mt-4 inline-flex items-center text-green-600 font-semibold hover:text-green-700 transition-colors">
                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
              </button>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      
      <div class="text-center mt-12">
        <a href="<?= url('berita.php') ?>" class="inline-flex items-center px-8 py-4 bg-green-600 text-white rounded-full font-bold hover:bg-green-700 transition-all transform hover:scale-105 shadow-lg">
          Lihat Semua Berita
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
    <?php endif; ?>
  </section>

  <!-- Modal untuk Detail Berita -->
  <div id="beritaModal" class="berita-modal">
    <div class="berita-modal-content">
      <button class="berita-modal-close" onclick="closeBeritaModal()">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
      <div id="beritaModalContent"></div>
    </div>
  </div>



  <!-- CTA Section -->
  <section class="section-spacing scroll-reveal" id="daftar">
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-green-600 via-green-500 to-emerald-500 p-16 md:p-24 text-center text-white shadow-2xl">
      <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full -mr-48 -mt-48"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-white opacity-5 rounded-full -ml-40 -mb-40"></div>
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full">
        <div class="absolute top-0 left-1/4 w-2 h-2 bg-white rounded-full animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-3 h-3 bg-white rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
      </div>
      <div class="relative z-10">
        <div class="inline-block px-6 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white font-semibold mb-6">
          Pendaftaran Terbuka
        </div>
        <h2 class="text-2xl md:text-4xl lg:text-5xl font-extrabold mb-8 leading-tight">
          Siap Bergabung dengan Kami?
        </h2>
        <p class="text-xl md:text-2xl mb-12 opacity-95 max-w-3xl mx-auto leading-relaxed">
          Daftarkan putra-putri Anda sekarang dan jadilah bagian dari keluarga besar ISR Resinda
        </p>
       <div class="flex flex-wrap gap-5 justify-center">
            <a href="<?= url('kontak.php#daftar') ?>" class="cta-btn inline-flex items-center px-12 py-5 rounded-full text-lg font-bold bg-white text-green-600 hover:bg-gray-100 transition-all transform hover:scale-105 shadow-2xl">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
              </svg>
              Daftar Sekarang
            </a>
            <a href="<?=url('kontak.php') ?>" class="cta-btn inline-flex items-center px-12 py-5 rounded-full text-lg font-bold border-2 border-white hover:bg-white hover:text-green-600 transition-all backdrop-blur-sm bg-white/10">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              Hubungi Kami
            </a>
          </div>
      </div>
    </div>
  </section>
 
  
</div>

<?php include 'includes/footer.php'; ?>
<!-- JavaScript -->
<script>
// Data berita untuk modal
const beritaData = {
  <?php foreach ($latestBerita as $index => $berita): ?>
    <?= $berita['id'] ?>: {
      id: <?= $berita['id'] ?>,
      slug: <?= json_encode($berita['slug'] ?? '') ?>,
      title: <?= json_encode($berita['title']) ?>,
      category: <?= json_encode($berita['category']) ?>,
      image: <?= json_encode($berita['image_path'] ?? '') ?>,
      excerpt: <?= json_encode($berita['excerpt'] ?? '') ?>,
      content: <?= json_encode($berita['content'] ?? '') ?>,
      author: <?= json_encode($berita['author_name'] ?? 'Admin') ?>,
      date: <?= json_encode(date('d F Y', strtotime($berita['created_at']))) ?>,
      views: <?= (int)$berita['views'] ?>
    }<?= $index < count($latestBerita) - 1 ? ',' : '' ?>
  <?php endforeach; ?>
};

// Fungsi untuk membuka modal berita
function openBeritaModal(id) {
  const berita = beritaData[id];
  if (!berita) return;

  const modal = document.getElementById('beritaModal');
  const content = document.getElementById('beritaModalContent');
  
  const catIcons = {
    'akademik': '📚 Akademik',
    'prestasi': '🏆 Prestasi',
    'kegiatan': '🎉 Kegiatan',
    'pengumuman': '📢 Pengumuman'
  };
  
  const categoryLabel = catIcons[berita.category] || '📰 Berita';
  
  // Konversi line break menjadi paragraf
  const contentParagraphs = berita.content
    .split('\n')
    .filter(p => p.trim())
    .map(p => `<p>${p}</p>`)
    .join('');
  
  // Gunakan slug jika tersedia, fallback ke id
  const detailUrl = berita.slug 
    ? `berita-detail.php?slug=${encodeURIComponent(berita.slug)}`
    : `berita-detail.php?id=${berita.id}`;
  
  content.innerHTML = `
    ${berita.image ? `<img src="<?= url('') ?>${berita.image}" alt="${berita.title}" class="berita-modal-header-img">` : '<div class="berita-modal-header-img bg-gradient-to-br from-green-400 to-green-600"></div>'}
    <div class="berita-modal-body">
      <div class="mb-4">
        <span class="berita-section-category">${categoryLabel}</span>
      </div>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 leading-tight">
        ${berita.title}
      </h2>
      <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6 pb-6 border-b-2 border-gray-100">
        <span><i class="fas fa-user mr-2"></i>${berita.author}</span>
        <span><i class="fas fa-calendar mr-2"></i>${berita.date}</span>
        <span><i class="fas fa-eye mr-2"></i>${berita.views.toLocaleString()} views</span>
      </div>
      
      ${berita.excerpt ? `
        <div class="text-xl text-gray-700 font-medium mb-6 pb-6 border-b-2 border-gray-100">
          ${berita.excerpt}
        </div>
      ` : ''}
      
      <div class="berita-content">
        ${contentParagraphs}
      </div>
      
      <div class="mt-8 pt-8 border-t-2 border-gray-100">
        <a href="${detailUrl}" class="inline-flex items-center px-8 py-4 bg-green-600 text-white rounded-full font-bold hover:bg-green-700 transition-all transform hover:scale-105 shadow-lg">
          Lihat Detail Lengkap
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
    </div>
  `;
  
  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
  
  // Increment view count
  incrementBeritaView(id);
}

// Fungsi untuk menutup modal berita
function closeBeritaModal() {
  const modal = document.getElementById('beritaModal');
  modal.classList.remove('active');
  document.body.style.overflow = '';
}

// Fungsi untuk increment view count
function incrementBeritaView(id) {
  fetch('<?= url('api/berita-view.php') ?>?id=' + id, {
    method: 'POST'
  }).catch(() => {});
}

// Close modal ketika klik di luar content
document.getElementById('beritaModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeBeritaModal();
  }
});

// Close modal dengan ESC key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeBeritaModal();
  }
});

// PMB Popup Management
document.addEventListener("DOMContentLoaded", () => {
  const pmbPopup = document.getElementById('pmbPopup');
  const closePmbPopup = document.getElementById('closePmbPopup');
  const pmbFloatingBtn = document.getElementById('pmbFloatingBtn');
  
  // Show popup on page load with delay
  setTimeout(() => {
    pmbPopup.classList.add('active');
    document.body.style.overflow = 'hidden';
  }, 1000);
  
  // Close popup function
  const closePopup = () => {
    pmbPopup.classList.remove('active');
    document.body.style.overflow = '';
    pmbFloatingBtn.classList.add('active');
  };
  
  // Close button click
  closePmbPopup.addEventListener('click', closePopup);
  
  // Close when clicking outside
  pmbPopup.addEventListener('click', (e) => {
    if (e.target === pmbPopup) {
      closePopup();
    }
  });
  
  // Close with ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && pmbPopup.classList.contains('active')) {
      closePopup();
    }
  });
  
  // Reopen popup from floating button
  pmbFloatingBtn.addEventListener('click', () => {
    pmbPopup.classList.add('active');
    pmbFloatingBtn.classList.remove('active');
    document.body.style.overflow = 'hidden';
  });
});

// Counter Animation
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");
  const options = { threshold: 0.6 };

  const animateCounter = (el) => {
    const target = parseInt(el.dataset.count);
    let current = 0;
    const increment = Math.max(1, Math.floor(target / 100));
    
    const updateCounter = () => {
      current += increment;
      if (current >= target) {
        el.textContent = target.toLocaleString();
      } else {
        el.textContent = current.toLocaleString();
        requestAnimationFrame(updateCounter);
      }
    };
    updateCounter();
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, options);

  counters.forEach(counter => observer.observe(counter));
});

// Scroll Reveal Animation
const scrollReveal = () => {
  const reveals = document.querySelectorAll('.scroll-reveal');
  
  reveals.forEach(element => {
    const windowHeight = window.innerHeight;
    const elementTop = element.getBoundingClientRect().top;
    const elementVisible = 150;
    
    if (elementTop < windowHeight - elementVisible) {
      element.classList.add('active');
    }
  });
};

window.addEventListener('scroll', scrollReveal);
scrollReveal(); // Initial check

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});
</script>
