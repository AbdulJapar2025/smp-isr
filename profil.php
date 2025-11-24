<?php
require_once __DIR__ . '/includes/config.php';
// profil.php - Halaman Profil Sekolah SD ISR Resinda Karawang
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sejarah Singkat - SD Ignatius Slamet Riyadi Resinda Karawang</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>" />

  <style>
    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial;
    }
    
    .timeline-item {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.6s ease forwards;
    }
    
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .timeline-item:nth-child(1) { animation-delay: 0.1s; }
    .timeline-item:nth-child(2) { animation-delay: 0.2s; }
    .timeline-item:nth-child(3) { animation-delay: 0.3s; }
    .timeline-item:nth-child(4) { animation-delay: 0.4s; }
    
    .hero-gradient {
      background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
    }
    
    .card-hover {
      transition: all 0.3s ease;
    }
    
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    .school-img-container {
      position: relative;
      overflow: hidden;
      border-radius: 1rem;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    .school-img-container img {
      transition: transform 0.5s ease;
    }
    
    .school-img-container:hover img {
      transform: scale(1.05);
    }
    
    .img-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, transparent 100%);
    }
    
    .img-content {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 2rem;
      color: white;
      z-index: 10;
    }
  </style>
</head>
<body class="bg-gray-50">

  <!-- Header -->
  <?php include 'includes/header.php'; ?>

  <!-- Main Content -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
      
      <!-- School Image Section -->
      <div class="mb-12">
        <div class="school-img-container card-hover">
          <img src="<?= asset('assets/img/school.png') ?>" alt="SD Ignatius Slamet Riyadi Resinda Karawang" class="w-full h-96 object-cover">
          <div class="img-overlay"></div>
          <div class="img-content">
            <h3 class="text-3xl md:text-4xl font-bold mb-2">SD Ignatius Slamet Riyadi</h3>
            <p class="text-lg md:text-xl text-gray-200">Resinda Karawang - Membangun Generasi Beriman, Berilmu, dan Berprestasi</p>
            <div class="flex items-center gap-4 mt-4">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm">Karawang, Jawa Barat</span>
              </div>
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm">Sejak 1997</span>
              </div>
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                  <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm">Akreditasi A</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Introduction Card -->
      <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 mb-12 card-hover">
        <div class="flex items-start gap-4 mb-6">
          <div class="bg-blue-100 rounded-full p-3">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
          </div>
          <div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Sejarah Singkat</h2>
            <div class="h-1 w-20 bg-gradient-to-r from-blue-600 to-purple-400 rounded-full"></div>
          </div>
        </div>
        
        <div class="prose prose-lg max-w-none">
          <p class="text-gray-700 leading-relaxed mb-4">
            <strong class="text-gray-900">SD Ignatius Slamet Riyadi Resinda Karawang</strong> adalah Sekolah Dasar Katolik yang berdiri di bawah naungan <strong class="text-blue-600">Yayasan Salib Suci</strong>, berlokasi di <strong class="text-gray-900">Perumahan Resinda, Purwadana, Kecamatan Telukjambe Timur, Kabupaten Karawang, Jawa Barat</strong>.
          </p>
          
          <p class="text-gray-700 leading-relaxed mb-4">
            Didirikan pada tahun <strong class="text-gray-900">1997</strong>, sekolah kami telah menapaki perjalanan lebih dari dua dekade dalam mengabdikan diri untuk dunia pendidikan. Sejak awal berdirinya, SD Ignatius Slamet Riyadi Resinda Karawang telah menerapkan sistem <strong class="text-blue-600">Full Day School</strong> atau sekolah sehari penuh dengan <strong class="text-gray-900">5 hari pembelajaran</strong>, sebuah komitmen yang memastikan bahwa setiap waktu belajar tidak hanya digunakan untuk mendalami kurikulum akademik, tetapi juga untuk penanaman nilai-nilai Kristiani, pembiasaan budi pekerti luhur, serta pengembangan minat dan bakat melalui beragam kegiatan ekstrakurikuler terstruktur.
          </p>

          <p class="text-gray-700 leading-relaxed mb-4">
            Dengan status <strong class="text-gray-900">Akreditasi A</strong>, sekolah kami terus berkomitmen memberikan pendidikan berkualitas tinggi yang mengintegrasikan keunggulan akademik dengan pembentukan karakter berbasis nilai-nilai Katolik.
          </p>
        </div>
      </div>

      <!-- Vision Mission Section -->
      <div class="grid md:grid-cols-2 gap-8 mb-12">
        <!-- Visi -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 card-hover">
          <div class="flex items-center gap-3 mb-6">
            <div class="bg-blue-600 rounded-full p-3">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">Visi Sekolah</h3>
          </div>
          <p class="text-gray-700 leading-relaxed">
            "Terwujudnya Peserta Didik SD yang Berbudi Pekerti Luhur dan Cerdas, melalui Pendidikan Berbasis Nilai-nilai Katolik yang Mengembangkan Hati Nurani, Semangat Belas Kasih, dan Tanggung Jawab Sejak Usia Dini."
          </p>
        </div>

        <!-- Leadership -->
        <div class="bg-white rounded-2xl shadow-lg p-8 card-hover">
          <div class="flex items-center gap-3 mb-6">
            <div class="bg-purple-600 rounded-full p-3">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">Kepemimpinan</h3>
          </div>
          <div class="space-y-4">
            <div>
              <p class="text-sm text-gray-500 mb-1">Kepala Sekolah</p>
              <p class="text-lg font-bold text-gray-900">Nina Suhastuti, S.Pd</p>
            </div>
            <div>
              <p class="text-sm text-gray-500 mb-1">NPSN</p>
              <p class="text-lg font-semibold text-gray-900">20237074</p>
            </div>
            <div>
              <p class="text-sm text-gray-500 mb-1">Kurikulum</p>
              <p class="text-lg font-semibold text-gray-900">Kurikulum Merdeka</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Timeline Section -->
      <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 mb-12">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">Perjalanan Kami</h3>
        
        <div class="relative">
          <!-- Timeline Line -->
          <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-600 via-indigo-500 to-purple-500"></div>
          
          <!-- Timeline Items -->
          <div class="space-y-12">
            
            <!-- 1997 -->
            <div class="timeline-item relative">
              <div class="md:flex items-center">
                <div class="md:w-1/2 md:pr-12 md:text-right">
                  <div class="bg-blue-50 rounded-xl p-6 card-hover">
                    <span class="inline-block bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">1997</span>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Pendirian Sekolah</h4>
                    <p class="text-gray-600">SD Ignatius Slamet Riyadi Resinda Karawang resmi berdiri sebagai sekolah Full Day School, melayani masyarakat Karawang dengan pendidikan berkualitas berbasis nilai-nilai Kristiani.</p>
                  </div>
                </div>
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 border-4 border-white rounded-full"></div>
                <div class="md:w-1/2 md:pl-12"></div>
              </div>
            </div>
            
            <!-- Sistem Full Day -->
            <div class="timeline-item relative">
              <div class="md:flex items-center">
                <div class="md:w-1/2 md:pr-12"></div>
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-indigo-600 border-4 border-white rounded-full"></div>
                <div class="md:w-1/2 md:pl-12">
                  <div class="bg-indigo-50 rounded-xl p-6 card-hover">
                    <span class="inline-block bg-indigo-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">Inovasi Pendidikan</span>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Full Day School</h4>
                    <p class="text-gray-600 mb-3">Menerapkan sistem pembelajaran sehari penuh yang seimbang antara akademik dan pengembangan karakter:</p>
                    <ul class="space-y-2 text-gray-600">
                      <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-indigo-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Pembelajaran akademik berbasis Kurikulum Merdeka</span>
                      </li>
                      <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-indigo-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Penanaman nilai-nilai Kristiani dan budi pekerti</span>
                      </li>
                      <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-indigo-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Kegiatan ekstrakurikuler terstruktur</span>
                      </li>
                      <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-indigo-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Pengembangan minat dan bakat siswa</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Akreditasi A -->
            <div class="timeline-item relative">
              <div class="md:flex items-center">
                <div class="md:w-1/2 md:pr-12 md:text-right">
                  <div class="bg-purple-50 rounded-xl p-6 card-hover">
                    <span class="inline-block bg-purple-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">Pencapaian</span>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Akreditasi A</h4>
                    <p class="text-gray-600">Meraih status Akreditasi A sebagai bukti komitmen terhadap kualitas pendidikan dan menjadi SD terbaik dan terdepan di Karawang.</p>
                  </div>
                </div>
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-purple-600 border-4 border-white rounded-full"></div>
                <div class="md:w-1/2 md:pl-12"></div>
              </div>
            </div>

            <!-- Prestasi -->
            <div class="timeline-item relative">
              <div class="md:flex items-center">
                <div class="md:w-1/2 md:pr-12"></div>
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-yellow-500 border-4 border-white rounded-full"></div>
                <div class="md:w-1/2 md:pl-12">
                  <div class="bg-yellow-50 rounded-xl p-6 card-hover">
                    <span class="inline-block bg-yellow-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">Prestasi Gemilang</span>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Konsistensi Prestasi</h4>
                    <p class="text-gray-600">Siswa-siswi kami terus menorehkan prestasi gemilang baik di bidang akademik maupun non-akademik, membuktikan keberhasilan program pendidikan holistik kami.</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <!-- Three Pillars -->
      <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 md:p-12 mb-12">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Tiga Pilar Pendidikan Kami</h3>
        
        <div class="grid md:grid-cols-3 gap-6">
          <div class="bg-white rounded-xl p-6 card-hover text-center">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
              </svg>
            </div>
            <h4 class="font-bold text-gray-900 mb-2 text-xl">Beriman</h4>
            <p class="text-gray-600">Mengembangkan kehidupan rohani dan karakter berdasarkan nilai-nilai Kristiani</p>
          </div>
          
          <div class="bg-white rounded-xl p-6 card-hover text-center">
            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
              </svg>
            </div>
            <h4 class="font-bold text-gray-900 mb-2 text-xl">Berilmu</h4>
            <p class="text-gray-600">Menguasai pengetahuan dan keterampilan yang diperlukan di era modern</p>
          </div>
          
          <div class="bg-white rounded-xl p-6 card-hover text-center">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
              </svg>
            </div>
            <h4 class="font-bold text-gray-900 mb-2 text-xl">Berprestasi</h4>
            <p class="text-gray-600">Menggali dan mengasah bakat serta potensi diri di berbagai bidang</p>
          </div>
        </div>
      </div>

      <!-- Facilities Section -->
      <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 mb-12">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">Fasilitas Pendukung</h3>
        
        <div class="grid md:grid-cols-4 gap-4">
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <span class="text-gray-700 text-sm">Ruang Kelas Representatif</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            <span class="text-gray-700 text-sm">Perpustakaan</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span class="text-gray-700 text-sm">Ruang Makan</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
            <span class="text-gray-700 text-sm">Ruang UKS</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
            </svg>
            <span class="text-gray-700 text-sm">Ruang Seni Musik</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-gray-700 text-sm">Ruang Seni Tari</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="text-gray-700 text-sm">Lab Komputer</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
            </svg>
            <span class="text-gray-700 text-sm">Ruang Audio Visual</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-gray-700 text-sm">Lapangan Basket</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
            </svg>
            <span class="text-gray-700 text-sm">Lapangan Upacara</span>
          </div>
          
          <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 card-hover">
            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-gray-700 text-sm">Lapangan Futsal</span>
          </div>
        </div>
      </div>

      <!-- Quote Section -->
      <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 md:p-12 text-white text-center">
        <svg class="w-12 h-12 mx-auto mb-6 opacity-50" fill="currentColor" viewBox="0 0 24 24">
          <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
        </svg>
        <blockquote class="text-xl md:text-2xl font-medium mb-4">
          "Didukung oleh tenaga pendidik yang kompeten, berdedikasi, dan melayani dengan hati, kami berkomitmen mencetak lulusan yang berkarakter luhur, berintegritas tinggi, dan memiliki keunggulan akademik"
        </blockquote>
        <p class="text-blue-200">SD Ignatius Slamet Riyadi Resinda Karawang</p>
      </div>

      <!-- Commitment Section -->
      <div class="mt-12 bg-white rounded-2xl shadow-lg p-8 md:p-12">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 text-center">Komitmen Kami</h3>
        <div class="prose prose-lg max-w-none text-center">
          <p class="text-gray-700 leading-relaxed mb-4">
            Kami percaya bahwa dengan menanamkan nilai-nilai kebaikan, kemandirian, dan cinta lingkungan sejak dini, lulusan SD Ignatius Slamet Riyadi akan menjadi pribadi-pribadi yang utuh, cerdas, dan siap menjadi agen perubahan yang positif bagi masyarakat.
          </p>
          <p class="text-gray-700 leading-relaxed">
            Konsistensi prestasi gemilang yang diraih siswa-siswi kami, baik di bidang akademik maupun non-akademik, menjadi bukti nyata keberhasilan program kami, sekaligus menempatkan <strong class="text-blue-600">SD Ignatius Slamet Riyadi sebagai Sekolah Dasar terbaik dan terdepan di Karawang</strong> dalam mewujudkan potensi utuh setiap anak.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>