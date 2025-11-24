<?php
require_once __DIR__ . '/includes/config.php';
// team.php - Halaman Tim & Pengajar Sekolah ISR
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tim Kami - Ignatius Slamet Riyadi</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>" />

  <style>
    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
      position: relative;
      overflow: hidden;
    }
    
    .hero-gradient::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></svg>');
      opacity: 0.3;
    }
    
    .team-card {
      position: relative;
      overflow: hidden;
      border-radius: 0.75rem;
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      background: white;
      border: 1px solid #e5e7eb;
    }
    
    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
      border-color: #667eea;
    }
    
    .team-img-wrapper {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }
    
    .team-img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      object-position: center;
      transition: transform 0.6s ease;
      padding: 10px;
    }
    
    .team-card:hover .team-img {
      transform: scale(1.05);
    }
    
    .team-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 40%, transparent 100%);
      opacity: 0;
      transition: opacity 0.5s ease;
    }
    
    .team-card:hover .team-overlay {
      opacity: 1;
    }
    
    .team-info {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 2rem;
      color: white;
      transform: translateY(100%);
      transition: transform 0.5s ease;
    }
    
    .team-card:hover .team-info {
      transform: translateY(0);
    }
    
    .badge {
      display: inline-block;
      padding: 0.5rem 1rem;
      font-size: 0.75rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      border-radius: 0.25rem;
    }
    
    .badge-primary {
      background: #1e293b;
      color: white;
    }
    
    .badge-secondary {
      background: #f1f5f9;
      color: #334155;
      border: 1px solid #e2e8f0;
    }
    
    .stats-card {
      background: white;
      border-radius: 0.75rem;
      padding: 2.5rem 2rem;
      text-align: center;
      transition: all 0.3s ease;
      border: 1px solid #e5e7eb;
    }
    
    .stats-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
      border-color: #667eea;
    }
    
    .stats-number {
      font-size: 3rem;
      font-weight: 800;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .animate-fade-in {
      animation: fadeIn 0.8s ease forwards;
      opacity: 0;
    }
    
    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }
    
    .animate-fade-in:nth-child(1) { animation-delay: 0.2s; }
    .animate-fade-in:nth-child(2) { animation-delay: 0.3s; }
    .animate-fade-in:nth-child(3) { animation-delay: 0.4s; }
    .animate-fade-in:nth-child(4) { animation-delay: 0.5s; }
    .animate-fade-in:nth-child(5) { animation-delay: 0.6s; }
    .animate-fade-in:nth-child(6) { animation-delay: 0.7s; }
    
    .section-divider {
      height: 3px;
      width: 60px;
      background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
      margin: 1.5rem auto;
    }
    
    .contact-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.75rem 1.5rem;
      background: white;
      color: #1e293b;
      border: 2px solid #e5e7eb;
      border-radius: 0.5rem;
      font-weight: 600;
      font-size: 0.875rem;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    
    .contact-btn:hover {
      background: #1e293b;
      color: white;
      border-color: #1e293b;
      transform: translateX(5px);
    }
    
    .profile-detail {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 1rem;
      background: #f8fafc;
      border-radius: 0.5rem;
      margin-bottom: 0.75rem;
      transition: all 0.3s ease;
    }
    
    .profile-detail:hover {
      background: #f1f5f9;
    }
    
    .profile-icon {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: white;
      border-radius: 0.5rem;
      color: #667eea;
      flex-shrink: 0;
    }
    
    .title-section {
      text-align: center;
      margin-bottom: 4rem;
    }
    
    .subtitle {
      display: inline-block;
      padding: 0.5rem 1.25rem;
      background: #f1f5f9;
      color: #475569;
      border-radius: 9999px;
      font-size: 0.875rem;
      font-weight: 600;
      letter-spacing: 0.05em;
      margin-bottom: 1rem;
    }
    
    .team-grid-large {
      max-width: 1000px;
      margin: 0 auto;
    }
    
    .team-grid-small {
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .expertise-tag {
      display: inline-block;
      padding: 0.5rem 1rem;
      background: white;
      color: #64748b;
      border: 1px solid #e2e8f0;
      border-radius: 9999px;
      font-size: 0.813rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .expertise-tag:hover {
      background: #667eea;
      color: white;
      border-color: #667eea;
    }

    .team-img-wrapper-small {
      position: relative;
      width: 100%;
      height: 350px;
      overflow: hidden;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }
  </style>
</head>
<body class="bg-gray-50">

  <!-- Header -->
  <?php include 'includes/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-gradient py-24">
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
      <div class="animate-fade-in">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
          Tim Pengajar Profesional
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
          Tenaga pendidik berdedikasi tinggi yang berkomitmen membimbing dan mengembangkan potensi setiap siswa dengan penuh kasih dan profesionalisme
        </p>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-16 -mt-12">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid md:grid-cols-3 gap-6">
        <div class="stats-card animate-fade-in">
          <div class="stats-number">1</div>
          <div class="text-base font-semibold text-gray-900 mb-1">Kepala Sekolah</div>
          <div class="text-sm text-gray-600">Pemimpin Berpengalaman</div>
        </div>
        <div class="stats-card animate-fade-in">
          <div class="stats-number">35+</div>
          <div class="text-base font-semibold text-gray-900 mb-1">Tenaga Pendidik</div>
          <div class="text-sm text-gray-600">Profesional Tersertifikasi</div>
        </div>
        <div class="stats-card animate-fade-in">
          <div class="stats-number">150+</div>
          <div class="text-base font-semibold text-gray-900 mb-1">Tahun Pengalaman</div>
          <div class="text-sm text-gray-600">Gabungan Seluruh Tim</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kepala Sekolah Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
      <div class="title-section">
        <div class="subtitle">PIMPINAN SEKOLAH</div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kepala Sekolah SD</h2>
        <div class="section-divider"></div>
      </div>

      <div class="team-grid-large">
        <div class="team-card animate-fade-in">
          <div class="grid md:grid-cols-5 gap-0">
            <div class="md:col-span-2">
              <div class="team-img-wrapper h-full">
                <img src="<?= asset('assets/img/guru/sd/NINA SUHASTUTI ., S.Pd_Kepala Sekolah.webp') ?>" alt="Nina Suhastuti, S.Pd" class="team-img">
                <div class="team-overlay"></div>
                <div class="team-info">
                  <div class="badge badge-primary mb-3">KEPALA SEKOLAH</div>
                  <p class="text-sm text-gray-200 leading-relaxed">
                    Memimpin dengan visi untuk menciptakan lingkungan belajar yang inspiratif dan memberdayakan setiap potensi siswa.
                  </p>
                </div>
              </div>
            </div>
            <div class="md:col-span-3 p-8 md:p-10">
              <div class="mb-6">
                <span class="badge badge-secondary mb-4">KEPALA SEKOLAH SD</span>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">
                  Nina Suhastuti, S.Pd
                </h3>
                <p class="text-lg text-gray-600 font-medium">
                  Kepala Sekolah SD
                </p>
              </div>
              
              <div class="mb-6">
                <p class="text-gray-700 leading-relaxed mb-4">
                  Berdedikasi dalam mengembangkan potensi setiap siswa melalui pendekatan holistik dan inovatif. Dengan pengalaman bertahun-tahun di bidang pendidikan, beliau memahami kebutuhan perkembangan karakter dan akademik siswa secara menyeluruh.
                </p>
              </div>

              <div class="space-y-3 mb-6">
                <div class="profile-detail">
                  <div class="profile-icon">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <div class="text-xs text-gray-500 font-medium uppercase tracking-wide">Bidang</div>
                    <div class="text-sm font-semibold text-gray-900">Manajemen Sekolah & Pendidikan</div>
                  </div>
                </div>
                
                <div class="profile-detail">
                  <div class="profile-icon">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <div class="text-xs text-gray-500 font-medium uppercase tracking-wide">Pendidikan</div>
                    <div class="text-sm font-semibold text-gray-900">S.Pd - Sarjana Pendidikan</div>
                  </div>
                </div>
              </div>
              
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Kepemimpinan</span>
                <span class="expertise-tag">Manajemen Pendidikan</span>
                <span class="expertise-tag">Pengembangan Kurikulum</span>
                <span class="expertise-tag">Pembinaan Guru</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wakil Kepala Sekolah Section -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <div class="title-section">
        <div class="subtitle">WAKIL KEPALA SEKOLAH</div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Wakil Kepala Bidang Kurikulum</h2>
        <div class="section-divider"></div>
      </div>

      <div class="team-grid-large">
        <div class="team-card animate-fade-in">
          <div class="grid md:grid-cols-5 gap-0">
            <div class="md:col-span-2">
              <div class="team-img-wrapper h-full">
                <img src="<?= asset('assets/img/guru/sd/AGUSTINA PRASETIYAWATI, S.Pd.SD_Waka Kurikulum_Wali Kelas 2A.webp') ?>" alt="Agustina Prasetiyawati, S.Pd.SD" class="team-img">
                <div class="team-overlay"></div>
                <div class="team-info">
                  <div class="badge badge-primary mb-3">WAKIL KEPALA SEKOLAH</div>
                  <p class="text-sm text-gray-200 leading-relaxed">
                    Mengawasi dan mengembangkan kurikulum untuk menciptakan pembelajaran yang efektif dan bermakna bagi siswa.
                  </p>
                </div>
              </div>
            </div>
            <div class="md:col-span-3 p-8 md:p-10">
              <div class="mb-6">
                <span class="badge badge-secondary mb-4">WAKA KURIKULUM</span>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">
                  Agustina Prasetiyawati, S.Pd.SD
                </h3>
                <p class="text-lg text-gray-600 font-medium">
                  Wakil Kepala Bidang Kurikulum & Wali Kelas 2A
                </p>
              </div>
              
              <div class="mb-6">
                <p class="text-gray-700 leading-relaxed mb-4">
                  Bertanggung jawab dalam pengembangan dan implementasi kurikulum yang inovatif dan sesuai dengan kebutuhan perkembangan siswa. Berpengalaman dalam merancang program pembelajaran yang efektif.
                </p>
              </div>

              <div class="space-y-3 mb-6">
                <div class="profile-detail">
                  <div class="profile-icon">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <div class="text-xs text-gray-500 font-medium uppercase tracking-wide">Bidang</div>
                    <div class="text-sm font-semibold text-gray-900">Kurikulum & Pembelajaran SD</div>
                  </div>
                </div>
                
                <div class="profile-detail">
                  <div class="profile-icon">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <div class="text-xs text-gray-500 font-medium uppercase tracking-wide">Pendidikan</div>
                    <div class="text-sm font-semibold text-gray-900">S.Pd.SD - Sarjana Pendidikan Sekolah Dasar</div>
                  </div>
                </div>
              </div>
              
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Pengembangan Kurikulum</span>
                <span class="expertise-tag">Manajemen Pembelajaran</span>
                <span class="expertise-tag">Wali Kelas</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wali Kelas Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
      <div class="title-section">
        <div class="subtitle">WALI KELAS</div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Guru & Wali Kelas</h2>
        <div class="section-divider"></div>
        <p class="text-gray-600 max-w-2xl mx-auto text-base">
          Guru-guru berdedikasi yang membimbing dan mendampingi siswa dalam perjalanan belajar mereka
        </p>
      </div>

      <div class="team-grid-small">
        <div class="grid md:grid-cols-3 gap-6">
          
          <!-- Oktaviana Gebe Tokan -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/OKTAVIANA GEBE TOKAN,S.Pd_Wali Kelas 1A.webp') ?>" alt="Oktaviana Gebe Tokan, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 1A</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Oktaviana Gebe Tokan, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 1A
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Aloysia Sri Wahyuni Candra Dewi -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/ALOYSIA SRI WAHYUNI CANDRA DEWI,S.Pd_Wali Kelas 1B.webp') ?>" alt="Aloysia Sri Wahyuni Candra Dewi, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 1B</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Aloysia Sri Wahyuni C.D, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 1B
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Rufina Rumi H -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/RUFINA RUMI H., S.Pd.SD_Wali Kelas 1C.webp') ?>" alt="Rufina Rumi H., S.Pd.SD" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 1C</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Rufina Rumi H., S.Pd.SD
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 1C
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Magdalena Carolina -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/MAGDALENA CAROLINA,S.Pd_Wali Kelas 2B.webp') ?>" alt="Magdalena Carolina, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 2B</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Magdalena Carolina, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 2B
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Bernadeta Lalita Nareswari -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/BERNADETA LALITA NARESWARI, S.Pd_Wali Kelas 2C.webp') ?>" alt="Bernadeta Lalita Nareswari, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 2C</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Bernadeta Lalita N., S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 2C
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Andrie Suryanto -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/ANDRIE SURYANTO,S.Pd_Wali Kelas 3A.webp') ?>" alt="Andrie Suryanto, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 3A</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Andrie Suryanto, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 3A
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Fransisca Dwi Hartati -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/FRANSISCA DWI HARTATI,S.Pd_Wali Kelas 3B.webp') ?>" alt="Fransisca Dwi Hartati, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 3B</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Fransisca Dwi Hartati, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 3B
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Widya Abigail BR. Simarmata -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/WIDYA ABIGAIL BR. SIMARMATA, S.Pd_Wali Kelas 3C.webp') ?>" alt="Widya Abigail BR. Simarmata, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 3C</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Widya Abigail BR. S., S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 3C
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- E. Cinta Satriarini -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/E.  CINTA SATRIARINI.,  S.Pd_Wali Kelas 4A.webp') ?>" alt="E. Cinta Satriarini, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 4A</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                E. Cinta Satriarini, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 4A
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Gregorius Satya Agung P -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/GREGORIUS SATYA AGUNG P.,S.Pd_Wali Kelas 4B.webp') ?>" alt="Gregorius Satya Agung P., S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 4B</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Gregorius Satya Agung P., S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 4B
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Benedicta Aryningtyas J -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/BENEDICTA ARYNINGTYAS J.,S.Pd_Wali Kelas 5A.webp') ?>" alt="Benedicta Aryningtyas J., S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 5A</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Benedicta Aryningtyas J., S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 5A
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Elisabeth Elinawati Waruwu -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/ELISABETH ELINAWATI WARUWU, S.Pd_Wali Kelas 5B.webp') ?>" alt="Elisabeth Elinawati Waruwu, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 5B</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Elisabeth Elinawati W., S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 5B
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Jojo Suparjo -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/JOJO SUPARJO, A.Ma_Wali Kelas 5C.webp') ?>" alt="Jojo Suparjo, A.Ma" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 5C</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Jojo Suparjo, A.Ma
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 5C
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Threeska J.F Hutabarat -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/THREESKA J.F  HUTABARAT,  S.Pd_Wali Kelas 6A.webp') ?>" alt="Threeska J.F Hutabarat, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 6A</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Threeska J.F Hutabarat, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 6A
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Angela Nucifera H -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/ANGELA NUCIFERA H., S.Pd_wali Kelas 6B.webp') ?>" alt="Angela Nucifera H., S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 6B</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Angela Nucifera H., S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 6B
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

          <!-- Robertus Iwa J -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/ROBERTUS IWA J.,  S. Pd_Wali Kelas 6C.webp') ?>" alt="Robertus Iwa J., S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">WALI KELAS 6C</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Robertus Iwa J., S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Wali Kelas 6C
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Guru Kelas</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Guru Mata Pelajaran Section -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <div class="title-section">
        <div class="subtitle">GURU MATA PELAJARAN</div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Guru Spesialis</h2>
        <div class="section-divider"></div>
        <p class="text-gray-600 max-w-2xl mx-auto text-base">
          Guru dengan keahlian khusus di berbagai bidang mata pelajaran
        </p>
      </div>

      <div class="team-grid-small">
        <div class="grid md:grid-cols-3 gap-6">
          
          <!-- Agung Prabowo -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/AGUNG PRABOWO, S.KOM_Guru Informatika.webp') ?>" alt="Agung Prabowo, S.Kom" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU INFORMATIKA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Agung Prabowo, S.Kom
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru Informatika
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Komputer</span>
                <span class="expertise-tag">Teknologi</span>
              </div>
            </div>
          </div>

          <!-- Startika Dewi -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/STARTIKA DEWI, S.S_Guru Bahasa Inggris.webp') ?>" alt="Startika Dewi, S.S" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU BAHASA INGGRIS</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Startika Dewi, S.S
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru Bahasa Inggris
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Bahasa Inggris</span>
              </div>
            </div>
          </div>

          <!-- Dania Irawati -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/DANIA IRAWATI, S.Pd_Guru Bahasa Inggris.webp') ?>" alt="Dania Irawati, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU BAHASA INGGRIS</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Dania Irawati, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru Bahasa Inggris
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Bahasa Inggris</span>
              </div>
            </div>
          </div>

          <!-- Dwitya Oktaviani -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/DWITYA OKTAVIANI_Guru Bahasa Mandarin.webp') ?>" alt="Dwitya Oktaviani" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU BAHASA MANDARIN</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Dwitya Oktaviani
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru Bahasa Mandarin
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Bahasa Mandarin</span>
              </div>
            </div>
          </div>

          <!-- Ign. Sigit -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/IGN.SIGIT_Guru Seni Lukis.webp') ?>" alt="Ign. Sigit" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU SENI LUKIS</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Ign. Sigit
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru Seni Lukis
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Seni Rupa</span>
                <span class="expertise-tag">Seni Lukis</span>
              </div>
            </div>
          </div>

          <!-- Linus Agung Pracoyo -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/LINUS AGUNG PRACOYO_Guru Seni Musik.webp') ?>" alt="Linus Agung Pracoyo" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU SENI MUSIK</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Linus Agung Pracoyo
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru Seni Musik
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Seni Musik</span>
              </div>
            </div>
          </div>

          <!-- Jian Ponce Enrille -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/JIAN PONCE ENRILLE, S.Pd_Guru PJOK.webp') ?>" alt="Jian Ponce Enrille, S.Pd" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU PJOK</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Jian Ponce Enrille, S.Pd
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru PJOK
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Olahraga</span>
                <span class="expertise-tag">Kesehatan</span>
              </div>
            </div>
          </div>

          <!-- Yohana Wibyesti -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/YOHANA WIBYESTI.S.Ag_Guru Agama Katolik.jpeg') ?>" alt="Yohana Wibyesti, S.Ag" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU AGAMA KATOLIK</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Yohana Wibyesti, S.Ag
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru Agama Katolik
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Agama Katolik</span>
              </div>
            </div>
          </div>

          <!-- Febriani Sisca Manurung -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/FEBRIANI SISCA MANURUNG,S.Psi_Guru BK.webp') ?>" alt="Febriani Sisca Manurung, S.Psi" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">GURU BK</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Febriani Sisca Manurung, S.Psi
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Guru BK
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Bimbingan Konseling</span>
                <span class="expertise-tag">Psikologi</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Staf Pendukung Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
      <div class="title-section">
        <div class="subtitle">STAF PENDUKUNG</div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tim Administrasi & Tenaga Kependidikan</h2>
        <div class="section-divider"></div>
        <p class="text-gray-600 max-w-2xl mx-auto text-base">
          Tim pendukung yang memastikan kelancaran operasional sekolah
        </p>
      </div>

      <div class="team-grid-small">
        <div class="grid md:grid-cols-3 gap-6">
          
          <!-- Alexandra Evangelista -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/ALEXANDRA EVANGELISTA, A.Md_Tata Usaha.webp') ?>" alt="Alexandra Evangelista, A.Md" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">TATA USAHA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Alexandra Evangelista, A.Md
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Tata Usaha
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Administrasi</span>
              </div>
            </div>
          </div>

          <!-- Yohanes Juarsa -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/YOHANES JUARSA_Tata Usaha.webp') ?>" alt="Yohanes Juarsa" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">TATA USAHA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Yohanes Juarsa
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Tata Usaha
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Administrasi</span>
              </div>
            </div>
          </div>

          <!-- Catharina Suhaeti -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/CATHARINA SUHAETI_Pustakawati.webp') ?>" alt="Catharina Suhaeti" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">PUSTAKAWATI</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Catharina Suhaeti
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Pustakawati
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Perpustakaan</span>
              </div>
            </div>
          </div>

          <!-- Agung Nuryadi Pratama -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/AGUNG NURYADI PRATAMA_Pekarya.webp') ?>" alt="Agung Nuryadi Pratama" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">PEKARYA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Agung Nuryadi Pratama
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Pekarya
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Operasional</span>
              </div>
            </div>
          </div>

          <!-- Sumarna -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/SUMARNA_Pekarya.webp') ?>" alt="Sumarna" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">PEKARYA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Sumarna
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Pekarya
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Operasional</span>
              </div>
            </div>
          </div>

          <!-- Muhidin -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/MUHIDIN_Pekarya.webp') ?>" alt="Muhidin" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">PEKARYA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Muhidin
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Pekarya
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Operasional</span>
              </div>
            </div>
          </div>

          <!-- Nanang -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/NANANG_Pekarya.webp') ?>" alt="Nanang" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">PEKARYA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Nanang
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Pekarya
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Operasional</span>
              </div>
            </div>
          </div>

          <!-- Wanti -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/WANTI_Pekarya.webp') ?>" alt="Wanti" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">PEKARYA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Wanti
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Pekarya
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Operasional</span>
              </div>
            </div>
          </div>

          <!-- Windi -->
          <div class="team-card animate-fade-in">
            <div class="team-img-wrapper-small">
              <img src="<?= asset('assets/img/guru/sd/WINDI_Pekarya.webp') ?>" alt="Windi" class="team-img">
              <div class="team-overlay"></div>
              <div class="team-info">
                <div class="badge badge-primary mb-2">PEKARYA</div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-bold text-gray-900 mb-1">
                Windi
              </h3>
              <p class="text-sm text-gray-600 font-medium mb-3">
                Pekarya
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="expertise-tag">Operasional</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 bg-gradient-to-br from-indigo-600 to-purple-700">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
          Bergabunglah Bersama Kami
        </h2>
        <p class="text-xl text-indigo-100 mb-8 leading-relaxed">
          Mari bergabung dengan keluarga besar SD Ignatius Slamet Riyadi dan rasakan pengalaman pendidikan berkualitas dengan guru-guru profesional
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="<?= url('contact.php') ?>" class="inline-flex items-center justify-center px-8 py-4 bg-white text-indigo-600 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-300 hover:shadow-xl">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Hubungi Kami
          </a>
          <a href="<?= url('about.php') ?>" class="inline-flex items-center justify-center px-8 py-4 bg-transparent text-white font-semibold rounded-lg border-2 border-white hover:bg-white hover:text-indigo-600 transition-all duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Tentang Kami
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script>
    // Smooth scroll animation on page load
    document.addEventListener('DOMContentLoaded', function() {
      // Intersection Observer for fade-in animations
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };

      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);

      // Observe all team cards
      document.querySelectorAll('.team-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        observer.observe(card);
      });

      // Smooth scroll for anchor links
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
    });
  </script>

</body>
</html>