<?php
require_once __DIR__ . '/includes/config.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<main class="min-h-screen">
  <!-- HERO SECTION -->
  <section class="relative rounded-2xl overflow-hidden border border-gray-200 shadow-lg mb-12">
    <div class="h-80 md:h-96 relative">
      <img src="<?= asset('assets/img/banner.jpg') ?>" alt="PPDB SD ISR Resinda"
           class="absolute inset-0 w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 to-indigo-900/90"></div>

      <div class="absolute inset-0 z-10 flex flex-col items-center justify-center text-center p-6 md:p-10 text-white">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-500 text-black font-semibold mb-4">
          <i class="fas fa-graduation-cap mr-2"></i>
          Pendaftaran Dibuka
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
          PMB SEKOLAH DASAR
        </h1>
        <h2 class="text-2xl md:text-3xl font-bold mb-4">
          Tahun Ajaran 2025/2026
        </h2>
        <p class="mt-3 md:mt-4 text-lg md:text-xl opacity-95 max-w-3xl">
          Wujudkan masa depan gemilang putra-putri Anda bersama SD ISR Resinda
        </p>
        <div class="mt-6 flex flex-col sm:flex-row gap-4">
          <a href="#daftar-sekarang"
             class="inline-flex items-center justify-center px-6 py-3 rounded-xl text-base font-bold bg-yellow-500 text-black hover:bg-yellow-400 shadow-lg transition transform hover:scale-105">
            <i class="fas fa-edit mr-2"></i>
            Daftar Sekarang
          </a>
          <a href="#video-profil"
             class="inline-flex items-center justify-center px-6 py-3 rounded-xl text-base font-bold bg-white text-purple-900 hover:bg-gray-100 shadow-lg transition transform hover:scale-105">
            <i class="fas fa-play-circle mr-2"></i>
            Lihat Video Profil
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- INFO PENDAFTARAN -->
    <section class="mb-12">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Informasi Pendaftaran SD</h2>
        <p class="text-lg text-gray-600">Jadwal dan persyaratan pendaftaran siswa baru Sekolah Dasar</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-6 text-white shadow-lg">
          <div class="text-4xl mb-3"><i class="fas fa-calendar-alt"></i></div>
          <h3 class="text-xl font-bold mb-2">Gelombang 1</h3>
          <p class="text-sm opacity-90">Januari - Maret 2025</p>
        </div>

        <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl p-6 text-white shadow-lg">
          <div class="text-4xl mb-3"><i class="fas fa-calendar-check"></i></div>
          <h3 class="text-xl font-bold mb-2">Gelombang 2</h3>
          <p class="text-sm opacity-90">April - Mei 2025</p>
        </div>

        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-6 text-white shadow-lg">
          <div class="text-4xl mb-3"><i class="fas fa-calendar-plus"></i></div>
          <h3 class="text-xl font-bold mb-2">Gelombang 3</h3>
          <p class="text-sm opacity-90">Juni - Juli 2025</p>
        </div>

        <div class="bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-6 text-white shadow-lg">
          <div class="text-4xl mb-3"><i class="fas fa-school"></i></div>
          <h3 class="text-xl font-bold mb-2">Tahun Ajaran</h3>
          <p class="text-sm opacity-90">Juli 2025</p>
        </div>
      </div>

      <!-- PROGRAM SD -->
      <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-200">
        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Program Unggulan SD ISR Resinda</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl border border-blue-200 hover:shadow-md transition">
            <div class="text-5xl mb-3">📚</div>
            <h4 class="text-xl font-bold text-gray-900 mb-2">Kelas 1-6</h4>
            <p class="text-sm text-gray-600">Kurikulum Merdeka & Pembelajaran Aktif</p>
          </div>

          <div class="text-center p-6 bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200 hover:shadow-md transition">
            <div class="text-5xl mb-3">💻</div>
            <h4 class="text-xl font-bold text-gray-900 mb-2">Digital Learning</h4>
            <p class="text-sm text-gray-600">Pembelajaran Berbasis Teknologi</p>
          </div>

          <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-violet-50 rounded-xl border border-purple-200 hover:shadow-md transition">
            <div class="text-5xl mb-3">🎨</div>
            <h4 class="text-xl font-bold text-gray-900 mb-2">Karakter & Bakat</h4>
            <p class="text-sm text-gray-600">Pengembangan Minat & Karakter</p>
          </div>

          <div class="text-center p-6 bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl border border-pink-200 hover:shadow-md transition">
            <div class="text-5xl mb-3">🏃</div>
            <h4 class="text-xl font-bold text-gray-900 mb-2">Olahraga & Seni</h4>
            <p class="text-sm text-gray-600">Ekstrakurikuler Beragam</p>
          </div>
        </div>
      </div>
    </section>

    <!-- VIDEO PROFIL SEKOLAH -->
    <section id="video-profil" class="mb-12">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Video Profil SD ISR Resinda</h2>
        <p class="text-lg text-gray-600">Kenali lebih dekat lingkungan belajar Sekolah Dasar ISR Resinda</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Video 1 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition">
          <div class="aspect-video bg-gray-900">
            <iframe 
              src="https://drive.google.com/file/d/12_7P-qmb7l0KrlVs7KD1BfIWlMptpIWM/preview" 
              class="w-full h-full" 
              allow="autoplay"
              allowfullscreen>
            </iframe>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-gray-900 mb-2">Profil SD ISR Resinda</h3>
            <p class="text-sm text-gray-600">Mengenal lebih dekat Sekolah Dasar ISR Resinda</p>
          </div>
        </div>

        <!-- Video 2 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition">
          <div class="aspect-video bg-gray-900">
            <iframe 
              src="https://drive.google.com/file/d/1-yRRyTNpNQQYIoU24_HcqrseYqJuEjzb/preview" 
              class="w-full h-full" 
              allow="autoplay"
              allowfullscreen>
            </iframe>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-gray-900 mb-2">Fasilitas & Kegiatan SD</h3>
            <p class="text-sm text-gray-600">Fasilitas lengkap dan kegiatan siswa SD yang beragam</p>
          </div>
        </div>

        <!-- Video 3 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition">
          <div class="aspect-video bg-gray-900">
            <iframe 
              src="https://drive.google.com/file/d/1aVUM6nNq79bpDr9_qLKY1Dg6utf26ico/preview" 
              class="w-full h-full" 
              allow="autoplay"
              allowfullscreen>
            </iframe>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-gray-900 mb-2">Prestasi Siswa SD</h3>
            <p class="text-sm text-gray-600">Prestasi membanggakan siswa-siswi SD ISR Resinda</p>
          </div>
        </div>
      </div>
    </section>

    <!-- BROSUR PMB -->
    <section class="mb-12">
      <div class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-2xl p-8 md:p-12 shadow-2xl text-white">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
          <div class="flex-1">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-400 text-black font-semibold mb-4">
              <i class="fas fa-file-pdf mr-2"></i>
              Dokumen Penting
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Brosur PMB SD</h2>
            <p class="text-lg opacity-90">Download brosur resmi PMB SD untuk informasi lengkap tentang program pendidikan, fasilitas, dan biaya pendaftaran Sekolah Dasar</p>
          </div>
          <div class="flex-shrink-0">
            <a href="https://drive.google.com/file/d/1iVy0EeQwidOcB5pn66SVJTqgohgqVo_B/view?usp=drive_link" 
               target="_blank"
               class="inline-flex items-center px-8 py-4 rounded-xl text-lg font-bold bg-white text-purple-600 hover:bg-gray-100 shadow-lg transition transform hover:scale-105">
              <i class="fas fa-download mr-3 text-xl"></i>
              Download Brosur SD
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- PROSEDUR & BIAYA -->
    <section class="mb-12">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Prosedur & Biaya Administrasi SD</h2>
        <p class="text-lg text-gray-600">Panduan lengkap proses pendaftaran dan informasi biaya Sekolah Dasar</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Prosedur Pendaftaran -->
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-200">
          <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-purple-100 text-purple-600 mb-4">
              <i class="fas fa-clipboard-list text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">Prosedur Pendaftaran SD</h3>
          </div>

          <div class="space-y-4">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold">1</div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Pendaftaran Online/Offline</h4>
                <p class="text-sm text-gray-600">Hubungi kami via WhatsApp/telepon atau datang langsung ke sekolah</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold">2</div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Verifikasi Berkas</h4>
                <p class="text-sm text-gray-600">Submit dokumen persyaratan untuk calon siswa SD</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold">3</div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Tes Masuk SD</h4>
                <p class="text-sm text-gray-600">Mengikuti tes kemampuan dasar, psikotes, dan wawancara</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold">4</div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Pengumuman Hasil</h4>
                <p class="text-sm text-gray-600">Pengumuman hasil seleksi melalui website, WhatsApp, atau email</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold">5</div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Daftar Ulang</h4>
                <p class="text-sm text-gray-600">Melakukan daftar ulang dan pembayaran biaya masuk SD</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Download Prosedur -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-200 flex flex-col justify-center">
          <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-500 text-white mb-4">
              <i class="fas fa-file-download text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Dokumen Lengkap SD</h3>
            <p class="text-gray-600 mb-6">Download panduan lengkap prosedur pendaftaran dan rincian biaya administrasi Sekolah Dasar</p>
          </div>

          <div class="bg-white rounded-xl p-6 shadow-md mb-6">
            <div class="flex items-center gap-4 mb-4">
              <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                <i class="fas fa-file-pdf text-red-600 text-xl"></i>
              </div>
              <div class="flex-1">
                <h4 class="font-bold text-gray-900">Prosedur & Biaya PMB SD</h4>
                <p class="text-sm text-gray-600">PDF - Panduan Lengkap Sekolah Dasar</p>
              </div>
            </div>
            <a href="https://drive.google.com/file/d/1YmsOkV1w_v1dfIq4PZZEd-37I2jPlVD1/view?usp=drive_link" 
               target="_blank"
               class="block w-full text-center px-6 py-3 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-700 transition">
              <i class="fas fa-download mr-2"></i>
              Download Sekarang
            </a>
          </div>

          <div class="text-center">
            <p class="text-sm text-gray-600">
              <i class="fas fa-info-circle mr-1"></i>
              Dokumen mencakup persyaratan, jadwal, dan rincian biaya lengkap untuk SD
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- PERSYARATAN -->
    <section class="mb-12">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Persyaratan Pendaftaran SD</h2>
        <p class="text-lg text-gray-600">Dokumen yang harus disiapkan untuk mendaftar Sekolah Dasar</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl p-6 shadow-md border border-gray-200 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center text-purple-600 mb-4">
            <i class="fas fa-id-card text-xl"></i>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Identitas Calon Siswa</h3>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Fotokopi Kartu Keluarga</span>
            </li>
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Fotokopi Akta Kelahiran</span>
            </li>
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Fotokopi KTP Orang Tua/Wali</span>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-md border border-gray-200 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600 mb-4">
            <i class="fas fa-camera text-xl"></i>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Foto Calon Siswa</h3>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Pas foto 3x4 (4 lembar)</span>
            </li>
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Pas foto 4x6 (2 lembar)</span>
            </li>
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Background merah, berseragam rapi</span>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-md border border-gray-200 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center text-green-600 mb-4">
            <i class="fas fa-graduation-cap text-xl"></i>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Dokumen Pendidikan</h3>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Ijazah/Surat Keterangan TK (jika ada)</span>
            </li>
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Surat Keterangan Pindah (jika pindahan)</span>
            </li>
            <li class="flex items-start gap-2">
              <i class="fas fa-check text-green-500 mt-1"></i>
              <span>Kartu NISN (jika ada)</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Syarat Usia -->
      <div class="mt-8 bg-yellow-50 rounded-xl p-6 border-2 border-yellow-300">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-yellow-400 flex items-center justify-center">
            <i class="fas fa-exclamation-triangle text-white text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Persyaratan Usia Calon Siswa SD</h3>
            <p class="text-gray-700 mb-2">Calon siswa yang mendaftar di Kelas 1 SD harus memenuhi persyaratan usia:</p>
            <ul class="space-y-1 text-sm text-gray-700">
              <li class="flex items-start gap-2">
                <i class="fas fa-check-circle text-green-600 mt-0.5"></i>
                <span><strong>Minimal 6 tahun</strong> pada tanggal 1 Juli tahun ajaran baru</span>
              </li>
              <li class="flex items-start gap-2">
                <i class="fas fa-check-circle text-green-600 mt-0.5"></i>
                <span>Atau <strong>minimal 5 tahun 6 bulan</strong> dengan rekomendasi khusus dari psikolog</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- KEUNGGULAN -->
    <section class="mb-12">
      <div class="bg-gradient-to-br from-purple-900 to-indigo-900 rounded-2xl p-8 md:p-12 text-white shadow-2xl">
        <div class="text-center mb-10">
          <h2 class="text-3xl md:text-4xl font-bold mb-3">Mengapa Memilih SD ISR Resinda?</h2>
          <p class="text-lg opacity-90">Keunggulan yang membuat Sekolah Dasar kami berbeda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-yellow-400 text-purple-900 mb-4">
              <i class="fas fa-chalkboard-teacher text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Guru SD Berpengalaman</h3>
            <p class="text-sm opacity-90">Tenaga pengajar SD yang profesional dan berdedikasi</p>
          </div>

          <div class="text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-yellow-400 text-purple-900 mb-4">
              <i class="fas fa-building text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Fasilitas SD Lengkap</h3>
            <p class="text-sm opacity-90">Ruang kelas AC, lab komputer, perpustakaan, dan playground</p>
          </div>

          <div class="text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-yellow-400 text-purple-900 mb-4">
              <i class="fas fa-book-reader text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Kurikulum Merdeka</h3>
            <p class="text-sm opacity-90">Pembelajaran aktif, kreatif, dan menyenangkan</p>
          </div>

          <div class="text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-yellow-400 text-purple-900 mb-4">
              <i class="fas fa-heart text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Pendidikan Karakter</h3>
            <p class="text-sm opacity-90">Pembentukan karakter dan akhlak mulia sejak dini</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FORM DAFTAR SEKARANG -->
    <section id="daftar-sekarang" class="mb-12">
      <div class="bg-white rounded-2xl p-8 md:p-12 shadow-2xl border border-gray-200">
        <div class="text-center mb-10">
          <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-400 text-black font-semibold mb-4">
            <i class="fas fa-rocket mr-2"></i>
            Langkah Awal Masa Depan Gemilang
          </div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Daftar SD Sekarang</h2>
          <p class="text-lg text-gray-600">Hubungi kami untuk informasi lebih lanjut tentang PMB SD atau langsung mendaftar</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Kontak Langsung -->
          <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Hubungi Kami</h3>
            <div class="space-y-4">
              <a href="https://api.whatsapp.com/send/?phone=623815432987&text=Halo,%20saya%20ingin%20bertanya%20tentang%20PMB%20SD%20ISR%20Resinda&type=phone_number&app_absent=0" 
                 target="_blank"
                 class="flex items-center gap-4 p-4 bg-green-50 rounded-xl border border-green-200 hover:bg-green-100 transition group">
                <div class="flex-shrink-0 w-14 h-14 rounded-full bg-green-500 flex items-center justify-center text-white">
                  <i class="fab fa-whatsapp text-2xl"></i>
                </div>
                <div class="flex-1">
                  <h4 class="font-bold text-gray-900 group-hover:text-green-600">WhatsApp - PMB SD</h4>
                  <p class="text-sm text-gray-600">+62 381 543 2987</p>
                </div>
                <i class="fas fa-arrow-right text-green-600"></i>
              </a>

              <a href="tel:+623815432987" 
                 class="flex items-center gap-4 p-4 bg-blue-50 rounded-xl border border-blue-200 hover:bg-blue-100 transition group">
                <div class="flex-shrink-0 w-14 h-14 rounded-full bg-blue-500 flex items-center justify-center text-white">
                  <i class="fas fa-phone text-2xl"></i>
                </div>
                <div class="flex-1">
                  <h4 class="font-bold text-gray-900 group-hover:text-blue-600">Telepon Sekolah</h4>
                  <p class="text-sm text-gray-600">+62 381 543 2987</p>
                </div>
                <i class="fas fa-arrow-right text-blue-600"></i>
              </a>

              <a href="mailto:info@isrresinda.sch.id" 
                 class="flex items-center gap-4 p-4 bg-purple-50 rounded-xl border border-purple-200 hover:bg-purple-100 transition group">
                <div class="flex-shrink-0 w-14 h-14 rounded-full bg-purple-500 flex items-center justify-center text-white">
                  <i class="fas fa-envelope text-2xl"></i>
                </div>
                <div class="flex-1">
                  <h4 class="font-bold text-gray-900 group-hover:text-purple-600">Email</h4>
                  <p class="text-sm text-gray-600">info@isrresinda.sch.id</p>
                </div>
                <i class="fas fa-arrow-right text-purple-600"></i>
              </a>

              <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                <div class="flex-shrink-0 w-14 h-14 rounded-full bg-gray-500 flex items-center justify-center text-white">
                  <i class="fas fa-map-marker-alt text-2xl"></i>
                </div>
                <div class="flex-1">
                  <h4 class="font-bold text-gray-900">Alamat Sekolah</h4>
                  <p class="text-sm text-gray-600">Jl. Pendidikan No. 123, Jakarta Selatan, DKI Jakarta 12345</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Jam Operasional -->
          <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Jam Pelayanan PMB SD</h3>
            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl p-6 border border-purple-200 mb-6">
              <div class="space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-purple-200">
                  <span class="font-semibold text-gray-900">Senin - Jumat</span>
                  <span class="text-purple-600 font-bold">07:00 - 16:00</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-purple-200">
                  <span class="font-semibold text-gray-900">Sabtu</span>
                  <span class="text-purple-600 font-bold">07:00 - 14:00</span>
                </div>
                <div class="flex justify-between items-center py-2">
                  <span class="font-semibold text-gray-900">Minggu</span>
                  <span class="text-red-600 font-bold">Tutup</span>
                </div>
              </div>
            </div>

            <div class="bg-yellow-50 rounded-xl p-6 border border-yellow-200">
              <div class="flex items-start gap-3 mb-4">
                <i class="fas fa-lightbulb text-yellow-600 text-2xl"></i>
                <div>
                  <h4 class="font-bold text-gray-900 mb-2">Tips Pendaftaran SD</h4>
                  <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start gap-2">
                      <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                      <span>Siapkan dokumen persyaratan lengkap untuk SD</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                      <span>Daftar lebih awal untuk mendapat gelombang 1</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                      <span>Pastikan usia anak memenuhi syarat</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                      <span>Konsultasi langsung untuk info beasiswa SD</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
          <a href="https://api.whatsapp.com/send/?phone=623815432987&text=Halo,%20saya%20ingin%20mendaftar%20SD%20di%20ISR%20Resinda&type=phone_number&app_absent=0" 
             target="_blank"
             class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-lg font-bold bg-green-500 text-white hover:bg-green-600 shadow-lg transition transform hover:scale-105">
            <i class="fab fa-whatsapp mr-3 text-xl"></i>
            Daftar SD via WhatsApp
          </a>
          <a href="<?= url('kontak.php') ?>" 
             class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-lg font-bold bg-purple-600 text-white hover:bg-purple-700 shadow-lg transition transform hover:scale-105">
            <i class="fas fa-paper-plane mr-3 text-xl"></i>
            Formulir Kontak
          </a>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="mb-12">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Pertanyaan yang Sering Diajukan</h2>
        <p class="text-lg text-gray-600">Jawaban untuk pertanyaan umum seputar PMB SD</p>
      </div>

      <div class="max-w-4xl mx-auto space-y-4">
        <details class="bg-white rounded-xl p-6 shadow-md border border-gray-200 group">
          <summary class="font-bold text-gray-900 cursor-pointer flex items-center justify-between">
            <span>Kapan pendaftaran SD dibuka?</span>
            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
          </summary>
          <p class="mt-4 text-gray-600">Pendaftaran SD dibuka mulai Januari 2025 hingga Juli 2025 dalam 3 gelombang. Gelombang 1 (Januari-Maret), Gelombang 2 (April-Mei), dan Gelombang 3 (Juni-Juli).</p>
        </details>

        <details class="bg-white rounded-xl p-6 shadow-md border border-gray-200 group">
          <summary class="font-bold text-gray-900 cursor-pointer flex items-center justify-between">
            <span>Berapa usia minimal untuk masuk SD?</span>
            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
          </summary>
          <p class="mt-4 text-gray-600">Calon siswa SD harus berusia minimal 6 tahun pada tanggal 1 Juli tahun ajaran baru. Atau minimal 5 tahun 6 bulan dengan rekomendasi khusus dari psikolog.</p>
        </details>

        <details class="bg-white rounded-xl p-6 shadow-md border border-gray-200 group">
          <summary class="font-bold text-gray-900 cursor-pointer flex items-center justify-between">
            <span>Apakah ada tes masuk untuk SD?</span>
            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
          </summary>
          <p class="mt-4 text-gray-600">Ya, calon siswa SD akan mengikuti tes kemampuan dasar (membaca, menulis, berhitung), psikotes, dan wawancara bersama orang tua.</p>
        </details>

        <details class="bg-white rounded-xl p-6 shadow-md border border-gray-200 group">
          <summary class="font-bold text-gray-900 cursor-pointer flex items-center justify-between">
            <span>Berapa biaya pendaftaran SD?</span>
            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
          </summary>
          <p class="mt-4 text-gray-600">Informasi lengkap mengenai biaya pendaftaran dan administrasi SD dapat diunduh pada dokumen "Prosedur & Biaya Administrasi SD" di halaman ini atau hubungi admin untuk konsultasi.</p>
        </details>

        <details class="bg-white rounded-xl p-6 shadow-md border border-gray-200 group">
          <summary class="font-bold text-gray-900 cursor-pointer flex items-center justify-between">
            <span>Apakah tersedia program beasiswa untuk SD?</span>
            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
          </summary>
          <p class="mt-4 text-gray-600">Ya, kami menyediakan beasiswa untuk siswa SD berprestasi dan kurang mampu. Silakan hubungi bagian administrasi untuk informasi lebih lanjut tentang syarat dan ketentuan beasiswa SD.</p>
        </details>

        <details class="bg-white rounded-xl p-6 shadow-md border border-gray-200 group">
          <summary class="font-bold text-gray-900 cursor-pointer flex items-center justify-between">
            <span>Apa saja program unggulan di SD ISR Resinda?</span>
            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
          </summary>
          <p class="mt-4 text-gray-600">SD ISR Resinda memiliki program unggulan seperti: Kurikulum Merdeka, pembelajaran berbasis teknologi (digital learning), pengembangan karakter dan bakat, serta berbagai ekstrakurikuler olahraga dan seni.</p>
        </details>

        <details class="bg-white rounded-xl p-6 shadow-md border border-gray-200 group">
          <summary class="font-bold text-gray-900 cursor-pointer flex items-center justify-between">
            <span>Bagaimana cara mendaftar SD secara online?</span>
            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
          </summary>
          <p class="mt-4 text-gray-600">Anda dapat menghubungi kami melalui WhatsApp di +62 381 543 2987, telepon, atau email. Tim kami akan membantu proses pendaftaran SD dan memberikan panduan lengkap.</p>
        </details>
      </div>
    </section>

  </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>