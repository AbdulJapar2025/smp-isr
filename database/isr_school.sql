-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2025 at 05:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isr_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` enum('superadmin','admin','editor') DEFAULT 'admin',
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `full_name`, `email`, `role`, `last_login`, `created_at`) VALUES
(1, '4dm1n', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator Utama', 'admin@isr.sch.id', 'superadmin', '2025-11-24 03:25:46', '2025-10-20 02:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `category` enum('akademik','prestasi','kegiatan','pengumuman') NOT NULL DEFAULT 'akademik',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `views` int(11) DEFAULT 0,
  `author_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `slug`, `excerpt`, `content`, `image_path`, `category`, `status`, `views`, `author_id`, `created_at`, `updated_at`) VALUES
(7, 'Energi dan Kreativitas Modern Dance SMP Ignatius Slamet Riyadi Resinda Memukau Pengunjung KCP', 'post-6923e12e34cce', 'Ekstrakurikuler Modern Dance SMP Ignatius Slamet Riyadi Resinda menampilkan aksi panggung penuh energi di Karawang Central Plaza (KCP). Kolaborasi gerakan, kekompakan, dan kepercayaan diri para siswa berhasil menarik perhatian pengunjung dan menunjukkan kualitas pembinaan ekstrakurikuler sekolah.', 'Ekstrakurikuler Modern Dance SMP Ignatius Slamet Riyadi Resinda kembali menunjukkan prestasinya melalui sebuah penampilan istimewa di Karawang Central Plaza (KCP). Dalam acara tersebut, para siswa tampil percaya diri dengan koreografi yang dinamis, kompak, dan memadukan berbagai gaya tari modern.\r\n\r\nPenampilan ini menjadi bentuk nyata dari proses latihan intensif yang selama ini dilakukan di sekolah. Dukungan penuh dari pelatih dan pihak sekolah membuat para anggota MD mampu menampilkan pertunjukan terbaik mereka di hadapan pengunjung mall.\r\n\r\nSelain menghibur, kegiatan ini juga menjadi ajang untuk memperluas pengalaman tampil di ruang publik, mengasah mental, kreativitas, serta kekompakan tim. Para pengunjung KCP terlihat antusias menyaksikan penampilan tersebut, bahkan banyak yang ikut mengabadikan momen lewat video dan foto.', 'uploads/berita/perform-ekskull-md-di-kcp-6923e12e34f3a.jpeg', 'kegiatan', 'active', 2, 1, '2025-11-24 04:38:06', '2025-11-24 04:38:28'),
(8, 'Selasar Band SMP Ignatius Slamet Riyadi Resinda Guncang Panggung KCP dengan Aksi Musik Memukau', 'post-6923e1d74d125', 'Selasar Band SMP Ignatius Slamet Riyadi Resinda tampil energik di Karawang Central Plaza (KCP). Perpaduan vokal, gitar, bass, dan drum yang kompak berhasil menarik perhatian pengunjung dan menunjukkan kualitas bermusik para siswa.', 'Selasar Band, salah satu ekstrakurikuler musik SMP Ignatius Slamet Riyadi Resinda, berhasil memberikan penampilan terbaiknya saat tampil di Karawang Central Plaza (KCP). Membawakan beberapa lagu populer, mereka sukses menghadirkan suasana meriah dan hangat bagi para pengunjung mall.\r\n\r\nDengan suara vokalis yang kuat, permainan gitar dan bass yang rapi, serta hentakan drum yang stabil, Selasar Band menunjukkan bahwa para siswa memiliki kemampuan bermusik yang matang untuk usia mereka. Antusiasme penonton terlihat dari banyaknya pengunjung yang merekam, bersorak, bahkan ikut bernyanyi.', 'uploads/berita/perform-siswa-isr-selaras-band-di-kcp-6923e1d74d25e.jpeg', 'kegiatan', 'active', 1, 1, '2025-11-24 04:40:55', '2025-11-24 04:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `berita_foto`
--

CREATE TABLE `berita_foto` (
  `id` int(11) NOT NULL,
  `berita_id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita_foto`
--

INSERT INTO `berita_foto` (`id`, `berita_id`, `image_path`, `created_at`) VALUES
(2, 7, 'uploads/berita/perform-ekskull-md-di-kcp-6923e12e37928.jpeg', '2025-11-24 04:38:06'),
(3, 8, 'uploads/berita/perform-siswa-isr-selaras-band-di-kcp-6923e1d74e88f.jpeg', '2025-11-24 04:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(500) NOT NULL,
  `category` enum('tk','sd','smp','sma') NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `category` varchar(50) NOT NULL DEFAULT 'umum',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `author_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `title`, `slug`, `excerpt`, `content`, `image_path`, `category`, `status`, `author_id`, `created_at`, `updated_at`) VALUES
(13, 'Penampilan Modern Dance SMP Ignatius Slamet Riyadi Resinda di Karawang Central Plaza', 'post-6923e25f3ba76', 'Ekstrakurikuler Modern Dance SMP Ignatius Slamet Riyadi Resinda menampilkan tarian energik dan kompak di KCP sebagai bagian dari kegiatan tampil di ruang publik. Kegiatan ini merupakan bentuk pengembangan bakat siswa serta ajang pengalaman nyata tampil di hadapan masyarakat.', 'Kegiatan penampilan Modern Dance SMP Ignatius Slamet Riyadi Resinda di Karawang Central Plaza berlangsung meriah dan penuh semangat. Para anggota MD menunjukkan kekompakan gerakan dan koreografi yang telah dilatih secara intensif. Dengan kostum seragam dan musik yang upbeat, para siswa berhasil menarik perhatian banyak pengunjung mall.\r\n\r\nSelama kegiatan berlangsung, siswa tampil dengan percaya diri dan mampu memberikan kesan positif melalui energi dan ekspresi yang kuat. Dokumentasi mencakup momen persiapan sebelum tampil, proses koreografi di panggung, interaksi dengan penonton, hingga sesi foto bersama setelah pertunjukan.\r\n\r\nKegiatan ini sekaligus menjadi wadah pengembangan bakat dan karakter, mulai dari kerja sama tim, kedisiplinan, hingga keberanian tampil di ruang publik. Modern Dance berhasil membawa nama sekolah dan menunjukkan bahwa ekstrakurikuler seni di SMP Ignatius Slamet Riyadi Resinda terus berkembang.', 'uploads/kegiatan/perform-ekskull-md-di-kcp-6923e25f3ba87.jpeg', 'umum', 'active', 1, '2025-11-24 04:43:11', NULL),
(14, 'Penampilan Selasar Band SMP Ignatius Slamet Riyadi Resinda di Karawang Central Plaza', 'post-6923e28b103d5', 'Selasar Band dari SMP Ignatius Slamet Riyadi Resinda berhasil menampilkan musik terbaik mereka di KCP. Dengan harmonisasi yang solid, penampilan ini menjadi bentuk nyata dari pembinaan bakat musik siswa serta kesempatan tampil di panggung publik.', 'Penampilan Selasar Band di Karawang Central Plaza menjadi salah satu momen penting dalam kegiatan pengembangan seni musik di SMP Ignatius Slamet Riyadi Resinda. Para personel band tampil membawakan beberapa lagu pilihan dengan aransemen yang rapi dan pembawaan penuh percaya diri.\r\n\r\nDokumentasi kegiatan menampilkan suasana latihan sebelum tampil, soundcheck, aksi panggung masing-masing personel, hingga respon antusias dari penonton. Vokal yang kuat, permainan gitar dan bass yang kompak, serta ketukan drum yang stabil membuat penampilan mereka semakin hidup.\r\n\r\nKegiatan tampil di KCP memberikan pengalaman bermusik di panggung publik yang sangat bermanfaat bagi siswa. Selain menunjukkan kreativitas, kegiatan ini juga memperkuat kerja sama tim, disiplin dalam latihan, serta keberanian unjuk diri.\r\n\r\nSelasar Band berhasil mempersembahkan penampilan yang membanggakan bagi sekolah serta menjadi inspirasi bagi siswa lain untuk terus mengembangkan bakat di bidang musik.', 'uploads/kegiatan/perform-siswa-isr-selaras-band-di-kcp-6923e28b103e1.jpeg', 'umum', 'active', 1, '2025-11-24 04:43:55', NULL),
(15, 'Latihan Dasar Kepemimpinan (LDK) OSIS SMP Ignatius Slamet Riyadi Resinda Tahun 2025', 'post-6923e33ce0592', 'Kegiatan Latihan Dasar Kepemimpinan (LDK) OSIS SMP Ignatius Slamet Riyadi Resinda dilaksanakan untuk membekali pengurus OSIS baru dengan keterampilan kepemimpinan, kerja sama tim, disiplin, serta karakter tanggung jawab dalam menjalankan amanah organisasi sekolah.', 'Kegiatan Latihan Dasar Kepemimpinan (LDK) OSIS SMP Ignatius Slamet Riyadi Resinda tahun 2025 berlangsung dengan lancar dan penuh antusiasme. Kegiatan ini merupakan agenda rutin sekolah yang bertujuan membentuk karakter kepemimpinan siswa, terutama bagi para pengurus OSIS periode terbaru.\r\n\r\nSelama kegiatan LDK, para peserta mendapatkan materi tentang kepemimpinan, komunikasi efektif, manajemen organisasi, serta pembentukan karakter. Sesi pelatihan dipandu oleh pembina OSIS dan narasumber yang berpengalaman di bidang kepemimpinan pelajar. Selain materi di dalam ruangan, peserta juga mengikuti kegiatan luar ruangan yang dirancang untuk melatih kerja sama, kekompakan, dan problem solving melalui sejumlah simulasi dan permainan edukatif.\r\n\r\nDokumentasi kegiatan mencakup momen pembukaan, pemaparan materi, diskusi kelompok, praktik kepemimpinan, hingga sesi evaluasi dan penutupan. Seluruh kegiatan berjalan tertib dan penuh semangat, menunjukkan komitmen siswa untuk menjadi pengurus OSIS yang kreatif, bertanggung jawab, dan mampu memberikan kontribusi positif bagi sekolah.\r\n\r\nMelalui kegiatan ini, diharapkan para pengurus OSIS memiliki bekal kemampuan organisasi, karakter kepemimpinan, serta kesiapan menjalankan program-program OSIS selama satu periode ke depan. SMP Ignatius Slamet Riyadi Resinda terus berkomitmen membimbing siswa agar menjadi pemimpin muda yang berintegritas dan berprestasi', 'uploads/kegiatan/kegiatan-ldk-osis-compressed-6923e33ce05c0.jpg', 'umum', 'active', 1, '2025-11-24 04:46:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_foto`
--

CREATE TABLE `kegiatan_foto` (
  `id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_foto`
--

INSERT INTO `kegiatan_foto` (`id`, `kegiatan_id`, `image_path`, `created_at`) VALUES
(14, 13, 'uploads/kegiatan/perform-ekskull-md-di-kcp-6923e25f3dfac.jpeg', '2025-11-24 04:43:11'),
(15, 14, 'uploads/kegiatan/perform-siswa-isr-selaras-band-di-kcp-6923e28b131d4.jpeg', '2025-11-24 04:43:55'),
(16, 15, 'uploads/kegiatan/kegiatan-ldk-osis-compressed-6923e33ce0e86.jpg', '2025-11-24 04:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `render_art`
--

CREATE TABLE `render_art` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `category` enum('eksterior','interior','3d_modeling') NOT NULL DEFAULT 'eksterior',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `render_art`
--

INSERT INTO `render_art` (`id`, `title`, `description`, `image_path`, `category`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'Pencak Silat', 'Karya ini menggambarkan kekuatan, keluwesan, dan filosofi mendalam dari seni bela diri tradisional Pencak Silat. Melalui komposisi pose yang dinamis, karya ini menampilkan karakter seorang pesilat yang sedang melakukan gerakan penuh konsentrasi dan ketangkasan.\r\n\r\nDengan latar eksterior yang terasa natural, karya ini memberikan kesan keaslian serta menyatu dengan nilai budaya Nusantara. Detail gerakan tangan, kaki, serta ekspresi tubuh digambarkan secara kuat untuk menunjukkan keberanian, keteguhan hati, dan keharmonisan antara tubuh dan jiwa.\r\n\r\nKarya “Pencak Silat” tidak hanya menonjolkan aspek estetika, tetapi juga menjadi simbol pelestarian budaya Indonesia. Visualnya menggugah rasa bangga dan membuka ruang refleksi mengenai warisan seni bela diri yang telah diwariskan dari generasi ke generasi.', 'uploads/render/pencak-silat-69205ead154ad.jpeg', 'eksterior', 'active', 1, '2025-11-21 12:44:29', NULL),
(3, 'Paduan suara', 'Karya ini menggambarkan keindahan harmoni yang tercipta ketika suara-suara berbeda bersatu menjadi satu kesatuan. “Paduan Suara” menampilkan sekelompok penyanyi yang berdiri dalam formasi rapi, memancarkan ekspresi penuh semangat, ketulusan, dan keselarasan.\r\n\r\nSetiap figur digambarkan dengan detail yang mencerminkan karakter unik, namun menyatu dalam gerakan dan ekspresi musikal yang sama. Nuansa pencahayaan yang lembut memberikan kesan hangat, sementara latar eksterior menghadirkan suasana terbuka yang mendukung kebebasan berekspresi.\r\n\r\nKarya ini menjadi simbol kebersamaan, disiplin, dan seni kolaborasi. “Paduan Suara” tidak hanya menonjolkan estetika visual, tetapi juga menggambarkan makna mendalam tentang persatuan dan harmoni dalam perbedaan.', 'uploads/render/paduan-suara-69205ee0079dd.jpeg', 'eksterior', 'active', 1, '2025-11-21 12:45:20', NULL),
(4, 'Mini Orkestra', 'Karya “Mini Orkestra” menghadirkan suasana musikal yang anggun melalui visualisasi sekelompok musisi yang memainkan alat musik dalam format orkestra kecil. Setiap pemain digambarkan dengan fokus dan ekspresi yang hidup, mencerminkan kecintaan mereka terhadap musik.\r\n\r\nKomposisi visual menggambarkan harmoni antara alat musik gesek, tiup, dan perkusi yang berpadu menciptakan alunan melodi yang indah. Detail pada gesture tubuh, posisi alat musik, serta interaksi antar pemain memberikan kesan dinamisme dan kekompakan sebuah ansambel profesional meski dalam skala mini.\r\n\r\nLatar eksterior yang digunakan memberikan kesan terbuka dan hangat, menambah kesan bahwa musik dapat dinikmati di ruang mana pun. Karya ini menggambarkan pesan bahwa musik adalah bahasa universal yang dapat mempersatukan siapa saja.\r\n\r\n“Mini Orkestra” menjadi representasi visual dari disiplin, harmoni, dan keindahan seni pertunjukan yang diwujudkan dalam bentuk yang sederhana namun memukau.', 'uploads/render/mini-orkestra-69205f557fab3.jpeg', 'eksterior', 'active', 1, '2025-11-21 12:47:17', NULL),
(5, 'test', 'test', 'uploads/render/test-6922b49e04214.png', 'eksterior', 'active', 1, '2025-11-23 07:15:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `berita_foto`
--
ALTER TABLE `berita_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_id` (`berita_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `kegiatan_foto`
--
ALTER TABLE `kegiatan_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kegiatan_id` (`kegiatan_id`);

--
-- Indexes for table `render_art`
--
ALTER TABLE `render_art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berita_foto`
--
ALTER TABLE `berita_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kegiatan_foto`
--
ALTER TABLE `kegiatan_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `render_art`
--
ALTER TABLE `render_art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `berita_foto`
--
ALTER TABLE `berita_foto`
  ADD CONSTRAINT `berita_foto_ibfk_1` FOREIGN KEY (`berita_id`) REFERENCES `berita` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `kegiatan_foto`
--
ALTER TABLE `kegiatan_foto`
  ADD CONSTRAINT `fk_kegiatan_foto` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `render_art`
--
ALTER TABLE `render_art`
  ADD CONSTRAINT `render_art_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
