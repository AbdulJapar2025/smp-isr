<?php include '../includes/header.php'; ?>

<section class="relative py-20 overflow-hidden">
  <!-- Animated Background -->
  <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <div class="absolute inset-0 opacity-30">
      <div class="absolute top-20 left-20 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
      <div class="absolute top-40 right-20 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
      <div class="absolute bottom-20 left-40 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>
  </div>

  <div class="relative max-w-7xl mx-auto px-4">
    
    <!-- Hero Section -->
    <div class="text-center mb-16 animate-fade-in-up">
      <div class="inline-flex items-center gap-2 px-6 py-3 bg-white/80 backdrop-blur-sm rounded-full shadow-lg mb-6">
        <span class="relative flex h-3 w-3">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-indigo-600"></span>
        </span>
        <span class="text-indigo-700 font-semibold text-sm">Program Ekstrakurikuler Terbaik</span>
      </div>
      <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
        Temukan <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">Passionmu</span>
      </h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Lebih dari sekadar kegiatan, ini adalah perjalanan menemukan bakat, membangun karakter, dan meraih prestasi gemilang
      </p>
    </div>

    <!-- Quick Stats with Animation -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-20">
      <div class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
        <div class="text-5xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 text-transparent bg-clip-text mb-2 group-hover:scale-110 transition-transform">25+</div>
        <p class="text-gray-600 font-medium">Program Ekskul</p>
      </div>
      <div class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
        <div class="text-5xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 text-transparent bg-clip-text mb-2 group-hover:scale-110 transition-transform">50+</div>
        <p class="text-gray-600 font-medium">Pembina Ahli</p>
      </div>
      <div class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
        <div class="text-5xl font-bold bg-gradient-to-r from-pink-600 to-orange-600 text-transparent bg-clip-text mb-2 group-hover:scale-110 transition-transform">800+</div>
        <p class="text-gray-600 font-medium">Siswa Aktif</p>
      </div>
      <div class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
        <div class="text-5xl font-bold bg-gradient-to-r from-orange-600 to-red-600 text-transparent bg-clip-text mb-2 group-hover:scale-110 transition-transform">100+</div>
        <p class="text-gray-600 font-medium">Prestasi</p>
      </div>
    </div>

    <!-- Category Navigation dengan Smooth Animation -->
    <div class="mb-16 sticky top-20 z-40 bg-white/80 backdrop-blur-xl rounded-2xl shadow-lg p-4">
      <div class="flex flex-wrap justify-center gap-3">
        <button onclick="filterCategory('all')" class="filter-btn active px-6 py-3 rounded-xl font-semibold transition-all duration-300 bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg hover:shadow-xl transform hover:scale-105">
          ✨ Semua
        </button>
        <button onclick="filterCategory('sports')" class="filter-btn px-6 py-3 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-gradient-to-r hover:from-green-500 hover:to-emerald-500 hover:text-white shadow hover:shadow-lg transform hover:scale-105">
          ⚽ Olahraga
        </button>
        <button onclick="filterCategory('arts')" class="filter-btn px-6 py-3 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-gradient-to-r hover:from-pink-500 hover:to-rose-500 hover:text-white shadow hover:shadow-lg transform hover:scale-105">
          🎭 Seni & Budaya
        </button>
        <button onclick="filterCategory('tech')" class="filter-btn px-6 py-3 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-gradient-to-r hover:from-blue-500 hover:to-cyan-500 hover:text-white shadow hover:shadow-lg transform hover:scale-105">
          💻 Teknologi
        </button>
        <button onclick="filterCategory('academic')" class="filter-btn px-6 py-3 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-gradient-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-white shadow hover:shadow-lg transform hover:scale-105">
          📚 Akademik
        </button>
      </div>
    </div>

    <!-- OLAHRAGA SECTION -->
    <div class="mb-24 category-section" data-category="sports">
      <div class="text-center mb-12">
        <div class="inline-block px-6 py-2 bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-full font-semibold mb-4 shadow-lg">
          ⚽ Olahraga
        </div>
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Bentuk Tubuh & Karakter Juara</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Latihan terstruktur dengan pelatih berlisensi dan fasilitas modern</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Futsal Kelas Besar -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Futsal Kelas Besar.webp') ?>" alt="Futsal Kelas Besar" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-yellow-400 text-gray-900 text-xs font-bold rounded-full shadow-lg animate-pulse">
              🏆 POPULER
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">⚽</span>
                <h3 class="text-2xl font-bold text-white">Futsal Kelas Besar</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 4-6</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Program futsal dengan strategi permainan modern, mental kompetitif, dan teamwork solid untuk tingkat lanjut</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-green-100 to-emerald-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Selasa & Kamis, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-green-100 to-emerald-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">35 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Juara 1 Futsal Competition 2024</li>
                <li>• Best Team Regional Championship</li>
                <li>• 3x Finalis Turnamen Antar Sekolah</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Futsal Kelas Kecil -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Futsal Kelas Kecil.webp') ?>" alt="Futsal Kelas Kecil" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">⚽</span>
                <h3 class="text-2xl font-bold text-white">Futsal Kelas Kecil</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 1-3</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Pengenalan dasar futsal dengan metode fun learning, melatih koordinasi dan kecintaan terhadap olahraga sejak dini</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-green-100 to-emerald-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Senin & Rabu, 14:00 - 15:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-green-100 to-emerald-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">30 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border-l-4 border-blue-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">⭐</span> Program Unggulan
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Fun Games Method</li>
                <li>• Basic Skill Development</li>
                <li>• Character Building Activities</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Basket Kelas Besar -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Basket Kelas Besar.webp') ?>" alt="Basket Kelas Besar" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-orange-400 text-white text-xs font-bold rounded-full shadow-lg">
              🔥 TRENDING
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🏀</span>
                <h3 class="text-2xl font-bold text-white">Basket Kelas Besar</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 4-6</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Program basket kompetitif dengan teknik modern, strategi tim, dan persiapan turnamen tingkat nasional</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-orange-100 to-red-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Senin, Rabu & Jumat, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-orange-100 to-red-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">32 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Juara 1 DBL Regional 2024</li>
                <li>• Best Defensive Team Award</li>
                <li>• Finalis Kompetisi Nasional</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Basket Kelas Kecil -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Basket Kelas Kecil.webp') ?>" alt="Basket Kelas Kecil" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🏀</span>
                <h3 class="text-2xl font-bold text-white">Basket Kelas Kecil</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 1-3</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Fundamental basket untuk pemula dengan pendekatan bermain sambil belajar, melatih motorik dan kerja sama tim</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-orange-100 to-red-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Selasa & Kamis, 14:00 - 15:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-orange-100 to-red-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">28 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border-l-4 border-blue-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">⭐</span> Program Unggulan
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Mini Basketball Games</li>
                <li>• Dribbling & Shooting Basics</li>
                <li>• Fun Team Building</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Karate -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Karate.webp') ?>" alt="Karate" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🥋</span>
                <h3 class="text-2xl font-bold text-white">Karate</h3>
              </div>
              <p class="text-white/90 text-sm">Semua Tingkat</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Seni bela diri tradisional Jepang dengan fokus pada disiplin, karakter, dan teknik pertahanan diri yang efektif</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-red-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Rabu & Sabtu, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-red-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">40 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Juara 1 Kejurda Karate 2024</li>
                <li>• 5 Medali Emas Kejurprov</li>
                <li>• Sabuk Hitam Achievement</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Pencak Silat -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Pencak Silat.webp') ?>" alt="Pencak Silat" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-red-500 text-white text-xs font-bold rounded-full shadow-lg">
              🇮🇩 BUDAYA
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🥊</span>
                <h3 class="text-2xl font-bold text-white">Pencak Silat</h3>
              </div>
              <p class="text-white/90 text-sm">Semua Tingkat</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Warisan budaya Indonesia yang mengajarkan seni bela diri, nilai-nilai luhur, dan jati diri bangsa</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-red-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Selasa & Jumat, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-red-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">38 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Juara 2 Kejurnas Pencak Silat</li>
                <li>• Best Technique Award</li>
                <li>• Pelatih Bersertifikat IPSI</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- SENI & BUDAYA SECTION -->
    <div class="mb-24 category-section" data-category="arts">
      <div class="text-center mb-12">
        <div class="inline-block px-6 py-2 bg-gradient-to-r from-pink-500 to-rose-500 text-white rounded-full font-semibold mb-4 shadow-lg">
          🎭 Seni & Budaya
        </div>
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Ekspresikan Kreativitasmu</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Dari musik hingga tari, dari teater hingga seni visual</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Paduan Suara -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Paduan Suara.webp') ?>" alt="Paduan Suara" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-purple-500 text-white text-xs font-bold rounded-full shadow-lg">
              🎶 HARMONI
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🎵</span>
                <h3 class="text-2xl font-bold text-white">Paduan Suara</h3>
              </div>
              <p class="text-white/90 text-sm">Semua Tingkat</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Latihan vokal group dengan repertoar klasik hingga modern, melatih harmoni dan kepercayaan diri tampil di panggung</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-purple-100 to-pink-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Senin & Rabu, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-purple-100 to-pink-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">45 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Juara 1 Choir Competition 2024</li>
                <li>• Best Performance Award</li>
                <li>• 10+ Konser Nasional</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Mini Orkestra -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Mini Orkestra.webp') ?>" alt="Mini Orkestra" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-indigo-500 text-white text-xs font-bold rounded-full shadow-lg">
              🎼 KLASIK
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🎻</span>
                <h3 class="text-2xl font-bold text-white">Mini Orkestra</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 3-6</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Ensemble musik klasik dengan berbagai instrumen string, wind, dan percussion untuk menciptakan harmoni sempurna</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-indigo-100 to-purple-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Selasa & Kamis, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-indigo-100 to-purple-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">30 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border-l-4 border-blue-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">⭐</span> Program Unggulan
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Classical Music Training</li>
                <li>• Multi-Instrument Learning</li>
                <li>• Concert Performance</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Ansemble Tatalu -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Ansemble Tatalu.webp') ?>" alt="Ansemble Tatalu" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-amber-500 text-white text-xs font-bold rounded-full shadow-lg">
              🥁 TRADISI
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🥁</span>
                <h3 class="text-2xl font-bold text-white">Ansemble Tatalu</h3>
              </div>
              <p class="text-white/90 text-sm">Semua Tingkat</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Musik perkusi tradisional Nusantara dengan alat musik autentik, melestarikan warisan budaya Indonesia</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-amber-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Rabu & Jumat, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-amber-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">25 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Juara 2 Festival Musik Tradisional</li>
                <li>• Best Cultural Performance</li>
                <li>• Tampil di Istana Negara</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Balet (Video) -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <video autoplay loop muted playsinline class="w-full h-full object-cover">
              <source src="<?= asset('assets/img/eskul/Balet.mp4') ?>" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-pink-500 text-white text-xs font-bold rounded-full shadow-lg animate-pulse">
              🎬 VIDEO
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🩰</span>
                <h3 class="text-2xl font-bold text-white">Balet</h3>
              </div>
              <p class="text-white/90 text-sm">Semua Tingkat</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Tari klasik dengan teknik balet murni, melatih postur, keanggunan, dan fleksibilitas tubuh</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-pink-100 to-rose-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Senin & Kamis, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-pink-100 to-rose-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">28 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border-l-4 border-blue-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">⭐</span> Program Unggulan
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Classical Ballet Technique</li>
                <li>• Professional Instructor</li>
                <li>• Annual Recital Performance</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Modeling (Video) -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <video autoplay loop muted playsinline class="w-full h-full object-cover">
              <source src="<?= asset('assets/img/eskul/Modeling.mp4') ?>" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-purple-500 text-white text-xs font-bold rounded-full shadow-lg animate-pulse">
              🎬 VIDEO
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">👗</span>
                <h3 class="text-2xl font-bold text-white">Modeling</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 4-6</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Catwalk training, posing, dan public speaking untuk membangun kepercayaan diri dan profesionalisme</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-purple-100 to-pink-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Selasa & Jumat, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-purple-100 to-pink-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">20 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Best Young Model 2024</li>
                <li>• Fashion Show Performance</li>
                <li>• Professional Photoshoot</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kriya Anyam -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Kriya Anyam 1.webp') ?>" alt="Kriya Anyam" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-teal-500 text-white text-xs font-bold rounded-full shadow-lg">
              ✋ HANDMADE
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🧶</span>
                <h3 class="text-2xl font-bold text-white">Kriya Anyam</h3>
              </div>
              <p class="text-white/90 text-sm">Semua Tingkat</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Seni kerajinan tangan anyaman dengan berbagai teknik dan bahan alami untuk menghasilkan karya unik</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-teal-100 to-cyan-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Kamis, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-teal-100 to-cyan-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">22 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border-l-4 border-blue-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">⭐</span> Program Unggulan
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Traditional Weaving Technique</li>
                <li>• Creative Product Design</li>
                <li>• Exhibition & Market</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- TEKNOLOGI SECTION -->
    <div class="mb-24 category-section" data-category="tech">
      <div class="text-center mb-12">
        <div class="inline-block px-6 py-2 bg-gradient-to-r from-blue-500 to-cyan-500 text-white rounded-full font-semibold mb-4 shadow-lg">
          💻 Teknologi
        </div>
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Kuasai Teknologi Masa Depan</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Coding, desain, dan inovasi digital untuk generasi tech-savvy</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Komunitas Komputer Kreatif Kelas Besar -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Komunitas Komputer Kreatif Kelas Besar.webp') ?>" alt="Komunitas Komputer Kreatif Kelas Besar" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-cyan-400 text-gray-900 text-xs font-bold rounded-full shadow-lg animate-pulse">
              💡 INOVASI
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">💻</span>
                <h3 class="text-2xl font-bold text-white">Komunitas Komputer Kreatif Kelas Besar</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 4-6</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Program coding lanjutan: web development, app development, game programming, dan computational thinking</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-100 to-cyan-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Rabu & Jumat, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-100 to-cyan-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">30 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Juara 1 Coding Competition 2024</li>
                <li>• Best Innovation Award</li>
                <li>• 10+ Apps Published</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Komunitas Komputer Kreatif Kelas Kecil -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Komunitas Komputer Kreatif (K3) Kelas kecil.webp') ?>" alt="Komunitas Komputer Kreatif Kelas Kecil" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-blue-400 text-white text-xs font-bold rounded-full shadow-lg">
              🚀 BASIC
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🖥️</span>
                <h3 class="text-2xl font-bold text-white">Komunitas Komputer Kreatif Kelas Kecil</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 1-3</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Pengenalan coding untuk pemula: Scratch, block programming, digital literacy, dan logic training</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-100 to-cyan-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Selasa & Kamis, 14:00 - 15:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-100 to-cyan-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">25 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border-l-4 border-blue-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">⭐</span> Program Unggulan
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Scratch Programming</li>
                <li>• Game Design Basics</li>
                <li>• Digital Storytelling</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- AKADEMIK SECTION -->
    <div class="mb-24 category-section" data-category="academic">
      <div class="text-center mb-12">
        <div class="inline-block px-6 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 text-white rounded-full font-semibold mb-4 shadow-lg">
          📚 Akademik
        </div>
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Raih Prestasi Akademik Gemilang</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Program pengembangan akademik untuk olimpiade dan kompetisi</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Math Club -->
        <div class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="relative h-72 overflow-hidden">
            <img src="<?= asset('assets/img/eskul/Math Club.webp') ?>" alt="Math Club" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute top-4 right-4 px-4 py-2 bg-yellow-400 text-gray-900 text-xs font-bold rounded-full shadow-lg">
              🧮 OLIMPIADE
            </div>
            <div class="absolute bottom-4 left-4 right-4">
              <div class="flex items-center gap-3 mb-2">
                <span class="text-4xl">🔢</span>
                <h3 class="text-2xl font-bold text-white">Math Club</h3>
              </div>
              <p class="text-white/90 text-sm">Kelas 4-6</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4 leading-relaxed">Persiapan olimpiade matematika dengan soal-soal challenging, problem solving, dan strategi kompetisi</p>
            
            <div class="space-y-3 mb-4">
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-yellow-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Jadwal Latihan</p>
                  <p class="text-gray-600">Senin & Kamis, 15:30 - 17:30</p>
                </div>
              </div>
              <div class="flex items-center gap-3 text-sm">
                <div class="w-10 h-10 bg-gradient-to-r from-yellow-100 to-orange-100 rounded-xl flex items-center justify-center">
                  <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-gray-900">Kapasitas</p>
                  <p class="text-gray-600">35 Siswa Aktif</p>
                </div>
              </div>
            </div>

            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 rounded-lg p-4">
              <p class="text-sm font-bold text-gray-900 mb-2 flex items-center gap-2">
                <span class="text-lg">🏆</span> Prestasi Gemilang
              </p>
              <ul class="space-y-1 text-sm text-gray-700">
                <li>• Medali Perak OSN Matematika 2024</li>
                <li>• Juara 1 Math Competition</li>
                <li>• 10+ Finalis Olimpiade</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Benefits Section dengan Animasi -->
    <div class="mb-24">
      <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 rounded-3xl p-12 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
          <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl animate-blob"></div>
          <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>
        
        <div class="relative">
          <h2 class="text-4xl font-bold mb-4 text-center">Mengapa Harus Ikut Ekstrakurikuler?</h2>
          <p class="text-center text-white/90 mb-12 text-lg max-w-2xl mx-auto">Lebih dari sekadar kegiatan tambahan, ini adalah investasi untuk masa depanmu</p>
          
          <div class="grid md:grid-cols-4 gap-6">
            
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center transform hover:scale-105 transition-all duration-300">
              <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform">
                <span class="text-4xl">🎯</span>
              </div>
              <h3 class="text-xl font-bold mb-2">Temukan Passionmu</h3>
              <p class="text-sm text-white/80">Eksplorasi minat dan bakat terpendam untuk masa depan cerah</p>
            </div>

            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center transform hover:scale-105 transition-all duration-300">
              <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform">
                <span class="text-4xl">🤝</span>
              </div>
              <h3 class="text-xl font-bold mb-2">Networking Luas</h3>
              <p class="text-sm text-white/80">Bangun relasi dengan teman, mentor, dan profesional</p>
            </div>

            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center transform hover:scale-105 transition-all duration-300">
              <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform">
                <span class="text-4xl">🏆</span>
              </div>
              <h3 class="text-xl font-bold mb-2">Raih Prestasi</h3>
              <p class="text-sm text-white/80">Kompetisi tingkat nasional dan internasional menanti</p>
            </div>

            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center transform hover:scale-105 transition-all duration-300">
              <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform">
                <span class="text-4xl">💪</span>
              </div>
              <h3 class="text-xl font-bold mb-2">Karakter Kuat</h3>
              <p class="text-sm text-white/80">Leadership, teamwork, dan soft skills terasah</p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Achievement Highlights -->
    <div class="mb-24">
      <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center">Prestasi Membanggakan 2024</h2>
      <div class="grid md:grid-cols-3 gap-8">
        
        <div class="group bg-gradient-to-br from-yellow-400 via-orange-500 to-red-500 rounded-3xl p-8 text-white transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
          <div class="text-7xl mb-4 transform group-hover:scale-110 transition-transform">🏆</div>
          <h3 class="text-3xl font-bold mb-3">50+ Juara</h3>
          <p class="text-white/90 leading-relaxed">Kompetisi regional, nasional, hingga internasional di berbagai bidang prestasi</p>
          <div class="mt-6 pt-6 border-t border-white/20">
            <p class="text-sm font-semibold">📊 20% increase from 2023</p>
          </div>
        </div>

        <div class="group bg-gradient-to-br from-blue-500 via-indigo-600 to-purple-600 rounded-3xl p-8 text-white transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
          <div class="text-7xl mb-4 transform group-hover:scale-110 transition-transform">🎓</div>
          <h3 class="text-3xl font-bold mb-3">100% Aktif</h3>
          <p class="text-white/90 leading-relaxed">Seluruh siswa berpartisipasi aktif minimal 1 ekstrakurikuler untuk pengembangan karakter</p>
          <div class="mt-6 pt-6 border-t border-white/20">
            <p class="text-sm font-semibold">✨ Highest participation rate</p>
          </div>
        </div>

        <div class="group bg-gradient-to-br from-purple-500 via-pink-600 to-rose-600 rounded-3xl p-8 text-white transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
          <div class="text-7xl mb-4 transform group-hover:scale-110 transition-transform">⭐</div>
          <h3 class="text-3xl font-bold mb-3">4.9/5.0</h3>
          <p class="text-white/90 leading-relaxed">Tingkat kepuasan siswa dan orang tua terhadap kualitas program ekstrakurikuler</p>
          <div class="mt-6 pt-6 border-t border-white/20">
            <p class="text-sm font-semibold">💯 Excellence in education</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Gallery dengan Hover Effects -->
    <div class="mb-24">
      <h2 class="text-4xl font-bold text-gray-900 mb-4 text-center">Momen Kegiatan Ekstrakurikuler</h2>
      <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Tangkapan momen seru, prestasi membanggakan, dan kebersamaan dalam setiap kegiatan</p>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        
        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Futsal Kelas Besar.webp') ?>" alt="Gallery 1" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Futsal Championship 2024</p>
              <p class="text-white/80 text-xs">Tim Juara Regional</p>
            </div>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Basket Kelas Besar.webp') ?>" alt="Gallery 2" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Basket Tournament</p>
              <p class="text-white/80 text-xs">DBL Regional Winner</p>
            </div>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Paduan Suara.webp') ?>" alt="Gallery 3" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Paduan Suara Performance</p>
              <p class="text-white/80 text-xs">Choir Competition Champion</p>
            </div>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Karate.webp') ?>" alt="Gallery 4" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Karate Championship</p>
              <p class="text-white/80 text-xs">Medali Emas Kejurda</p>
            </div>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Komunitas Komputer Kreatif Kelas Besar.webp') ?>" alt="Gallery 5" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Coding Workshop</p>
              <p class="text-white/80 text-xs">Innovation Lab Session</p>
            </div>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Mini Orkestra.webp') ?>" alt="Gallery 6" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Orchestra Concert</p>
              <p class="text-white/80 text-xs">Annual Performance</p>
            </div>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Ansemble Tatalu.webp') ?>" alt="Gallery 7" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Traditional Music</p>
              <p class="text-white/80 text-xs">Cultural Festival</p>
            </div>
          </div>
        </div>

        <div class="relative group overflow-hidden rounded-2xl shadow-lg aspect-square">
          <img src="<?= asset('assets/img/eskul/Kriya Anyam 2.webp') ?>" alt="Gallery 8" class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-4 left-4 right-4">
              <p class="text-white font-bold text-sm">Kriya Workshop</p>
              <p class="text-white/80 text-xs">Handcraft Exhibition</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Testimonials dengan Modern Design -->
    <div class="mb-24">
      <h2 class="text-4xl font-bold text-gray-900 mb-4 text-center">Kata Mereka Tentang Kami</h2>
      <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Pengalaman nyata siswa dalam mengikuti program ekstrakurikuler</p>
      
      <div class="grid md:grid-cols-3 gap-8">
        
        <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 rounded-full overflow-hidden ring-4 ring-indigo-100">
              <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100" alt="Alya" class="w-full h-full object-cover">
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-lg">Alya Putri</h4>
              <p class="text-sm text-indigo-600 font-semibold">Komunitas Komputer Kreatif</p>
            </div>
          </div>
          <div class="mb-4">
            <div class="flex gap-1 mb-3">
              <span class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</span>
            </div>
            <p class="text-gray-600 italic leading-relaxed">"Program K3 luar biasa! Saya belajar coding dari nol sampai bisa buat aplikasi sendiri. Mentornya juga sangat sabar dan supportive. Sekarang saya sudah punya portfolio untuk masa depan!"</p>
          </div>
          <div class="pt-4 border-t border-gray-100">
            <p class="text-xs text-gray-500">📅 Member sejak 2023</p>
          </div>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 rounded-full overflow-hidden ring-4 ring-green-100">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" alt="Rafi" class="w-full h-full object-cover">
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-lg">Rafi Ahmad</h4>
              <p class="text-sm text-green-600 font-semibold">Futsal Kelas Besar</p>
            </div>
          </div>
          <div class="mb-4">
            <div class="flex gap-1 mb-3">
              <span class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</span>
            </div>
            <p class="text-gray-600 italic leading-relaxed">"Latihan futsal di sini sangat profesional! Pelatihnya berpengalaman dan fasilitas lapangannya top. Tim kami berhasil juara regional dan saya dapat kesempatan trial di klub!"</p>
          </div>
          <div class="pt-4 border-t border-gray-100">
            <p class="text-xs text-gray-500">🏆 Juara Regional 2024</p>
          </div>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 rounded-full overflow-hidden ring-4 ring-purple-100">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100" alt="Dinda" class="w-full h-full object-cover">
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-lg">Dinda Sari</h4>
              <p class="text-sm text-purple-600 font-semibold">Paduan Suara</p>
            </div>
          </div>
          <div class="mb-4">
            <div class="flex gap-1 mb-3">
              <span class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</span>
            </div>
            <p class="text-gray-600 italic leading-relaxed">"Paduan suara mengajarkan saya tentang harmoni dan kerja sama tim. Pengalaman tampil di kompetisi nasional sangat berharga. Kepercayaan diri saya meningkat pesat!"</p>
          </div>
          <div class="pt-4 border-t border-gray-100">
            <p class="text-xs text-gray-500">🎵 Best Performance Award</p>
          </div>
        </div>

      </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white rounded-3xl p-12 shadow-xl mb-24">
      <h2 class="text-4xl font-bold text-gray-900 mb-4 text-center">Pertanyaan yang Sering Ditanyakan</h2>
      <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Temukan jawaban untuk pertanyaan umum seputar program ekstrakurikuler</p>
      
      <div class="space-y-4 max-w-4xl mx-auto">
        
        <div class="border-2 border-gray-100 rounded-2xl p-6 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <span class="text-2xl">💰</span>
            </div>
            <div class="flex-1">
              <h3 class="font-bold text-gray-900 mb-3 text-lg">Berapa biaya ekstrakurikuler?</h3>
              <p class="text-gray-600 leading-relaxed">Sebagian besar ekstrakurikuler sudah termasuk dalam biaya sekolah. Beberapa program khusus seperti teknologi dan olahraga tertentu memiliki biaya tambahan untuk peralatan dan konsumsi sekitar Rp 200.000 - Rp 500.000 per semester.</p>
            </div>
          </div>
        </div>

        <div class="border-2 border-gray-100 rounded-2xl p-6 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <span class="text-2xl">📚</span>
            </div>
            <div class="flex-1">
              <h3 class="font-bold text-gray-900 mb-3 text-lg">Boleh ikut lebih dari satu ekstrakurikuler?</h3>
              <p class="text-gray-600 leading-relaxed">Ya! Siswa diperbolehkan mengikuti maksimal 3 ekstrakurikuler, dengan syarat jadwal tidak bentrok dan nilai akademis tetap terjaga minimal KKM. Kami mendorong siswa untuk eksplorasi berbagai bidang minat.</p>
            </div>
          </div>
        </div>

        <div class="border-2 border-gray-100 rounded-2xl p-6 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <span class="text-2xl">📅</span>
            </div>
            <div class="flex-1">
              <h3 class="font-bold text-gray-900 mb-3 text-lg">Kapan pendaftaran dibuka?</h3>
              <p class="text-gray-600 leading-relaxed">Pendaftaran ekstrakurikuler dibuka setiap awal semester (Juli dan Januari). Untuk siswa baru, pendaftaran dapat dilakukan pada masa orientasi sekolah. Kuota terbatas, first come first served!</p>
            </div>
          </div>
        </div>

        <div class="border-2 border-gray-100 rounded-2xl p-6 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <span class="text-2xl">✅</span>
            </div>
            <div class="flex-1">
              <h3 class="font-bold text-gray-900 mb-3 text-lg">Apakah wajib ikut ekstrakurikuler?</h3>
              <p class="text-gray-600 leading-relaxed">Setiap siswa diwajibkan mengikuti minimal 1 ekstrakurikuler untuk pengembangan karakter dan keterampilan non-akademis. Ini juga bagian dari penilaian raport dan syarat kelulusan.</p>
            </div>
          </div>
        </div>

        <div class="border-2 border-gray-100 rounded-2xl p-6 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <span class="text-2xl">🎯</span>
            </div>
            <div class="flex-1">
              <h3 class="font-bold text-gray-900 mb-3 text-lg">Bagaimana cara memilih ekstrakurikuler yang tepat?</h3>
              <p class="text-gray-600 leading-relaxed">Pilih berdasarkan minat dan bakat. Kami juga menyediakan sesi trial gratis 2 minggu di awal semester untuk siswa mencoba berbagai ekskul sebelum memutuskan. Konsultasi dengan wali kelas juga tersedia.</p>
            </div>
          </div>
        </div>

        <div class="border-2 border-gray-100 rounded-2xl p-6 hover:border-indigo-200 hover:shadow-lg transition-all duration-300">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <span class="text-2xl">🏆</span>
            </div>
            <div class="flex-1">
              <h3 class="font-bold text-gray-900 mb-3 text-lg">Apakah ada kesempatan mengikuti kompetisi?</h3>
              <p class="text-gray-600 leading-relaxed">Tentu! Setiap ekstrakurikuler memiliki program kompetisi rutin baik tingkat regional maupun nasional. Siswa berprestasi akan mendapat dukungan penuh dari sekolah termasuk biaya dan pendampingan.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- CTA Section dengan Gradient Animasi -->
    <div class="relative rounded-3xl overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 animate-gradient"></div>
      <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full filter blur-3xl animate-blob"></div>
        <div class="absolute bottom-10 right-10 w-72 h-72 bg-white rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
      </div>
      
      <div class="relative p-12 md:p-16 text-white text-center">
        <div class="max-w-4xl mx-auto">
          <div class="inline-block px-6 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
            ✨ Daftarkan Dirimu Sekarang
          </div>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
            Siap Menjadi Bagian dari<br/>Komunitas Juara?
          </h2>
          <p class="text-xl mb-10 opacity-90 max-w-2xl mx-auto leading-relaxed">
            Pilih ekstrakurikuler favoritmu dan mulai perjalanan menemukan potensi terbaik bersama pembina profesional dan fasilitas terlengkap!
          </p>
          
          <div class="flex flex-wrap justify-center gap-4 mb-10">
            <a href="../kontak.php#daftar" class="group inline-flex items-center gap-2 px-8 py-4 bg-white text-indigo-600 font-bold rounded-xl hover:bg-gray-100 transition-all duration-300 shadow-2xl hover:shadow-white/50 transform hover:scale-105">
              <span>Daftar Sekarang</span>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
              </svg>
            </a>
            <a href="../kontak.php" class="inline-flex items-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white hover:text-indigo-600 transition-all duration-300 transform hover:scale-105">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <span>Hubungi Kami</span>
            </a>
          </div>
          
          <div class="grid md:grid-cols-3 gap-6 pt-10 border-t border-white/20">
            <div class="text-center">
              <div class="text-3xl mb-2">📞</div>
              <p class="text-sm opacity-90">Telepon / WhatsApp</p>
              <p class="font-bold">(021) 123-4567</p>
            </div>
            <div class="text-center">
              <div class="text-3xl mb-2">📧</div>
              <p class="text-sm opacity-90">Email</p>
              <p class="font-bold">ekskul@isresinda.sch.id</p>
            </div>
            <div class="text-center">
              <div class="text-3xl mb-2">⏰</div>
              <p class="text-sm opacity-90">Jam Operasional</p>
              <p class="font-bold">Senin - Jumat, 08:00 - 16:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Custom CSS for Animations -->
<style>
  @keyframes blob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(20px, -50px) scale(1.1); }
    50% { transform: translate(-20px, 20px) scale(0.9); }
    75% { transform: translate(50px, 50px) scale(1.05); }
  }

  @keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  @keyframes fade-in-up {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-blob {
    animation: blob 7s infinite;
  }

  .animation-delay-2000 {
    animation-delay: 2s;
  }

  .animation-delay-4000 {
    animation-delay: 4s;
  }

  .animate-gradient {
    background-size: 200% 200%;
    animation: gradient 15s ease infinite;
  }

  .animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
  }

  /* Smooth Scroll */
  html {
    scroll-behavior: smooth;
  }

  /* Category Filter Transitions */
  .category-section {
    animation: fade-in-up 0.6s ease-out;
  }
</style>

<!-- Filter Script dengan Smooth Animation -->
<script>
  function filterCategory(category) {
    const sections = document.querySelectorAll('.category-section');
    const buttons = document.querySelectorAll('.filter-btn');
    
    // Update button states dengan smooth transition
    buttons.forEach(btn => {
      btn.classList.remove('active');
      btn.classList.remove('bg-gradient-to-r', 'from-indigo-600', 'to-purple-600', 'text-white', 'shadow-lg');
      btn.classList.add('bg-white', 'text-gray-700', 'shadow');
    });
    
    event.target.classList.remove('bg-white', 'text-gray-700', 'shadow');
    event.target.classList.add('active', 'bg-gradient-to-r', 'from-indigo-600', 'to-purple-600', 'text-white', 'shadow-lg');
    
    // Show/hide sections dengan fade animation
    if (category === 'all') {
      sections.forEach(section => {
        section.style.display = 'block';
        setTimeout(() => {
          section.style.opacity = '1';
          section.style.transform = 'translateY(0)';
        }, 10);
      });
    } else {
      sections.forEach(section => {
        if (section.dataset.category === category) {
          section.style.display = 'block';
          setTimeout(() => {
            section.style.opacity = '1';
            section.style.transform = 'translateY(0)';
          }, 10);
        } else {
          section.style.opacity = '0';
          section.style.transform = 'translateY(20px)';
          setTimeout(() => {
            section.style.display = 'none';
          }, 300);
        }
      });
    }
    
    // Smooth scroll to first visible section
    setTimeout(() => {
      if (category !== 'all') {
        const firstVisible = document.querySelector(`.category-section[data-category="${category}"]`);
        if (firstVisible) {
          const yOffset = -100;
          const y = firstVisible.getBoundingClientRect().top + window.pageYOffset + yOffset;
          window.scrollTo({ top: y, behavior: 'smooth' });
        }
      }
    }, 100);
  }

  // Initialize sections with transition
  document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.category-section');
    sections.forEach(section => {
      section.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    });
  });
</script>

<?php include '../includes/footer.php'; ?>