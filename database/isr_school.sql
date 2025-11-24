-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2025 at 06:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` enum('superadmin','admin','editor') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'admin',
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `full_name`, `email`, `role`, `last_login`, `created_at`) VALUES
(1, '4dm1n', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator Utama', 'admin@isr.sch.id', 'superadmin', '2025-11-21 12:15:26', '2025-10-20 02:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` enum('akademik','prestasi','kegiatan','pengumuman') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'akademik',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `views` int DEFAULT '0',
  `author_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `slug`, `excerpt`, `content`, `image_path`, `category`, `status`, `views`, `author_id`, `created_at`, `updated_at`) VALUES
(4, 'Sanyus Cup', 'post-69206176100f5', 'Tim SD Ignatius Slamet Riyadi berhasil meraih prestasi membanggakan pada ajang Sanyus Cup. Dengan semangat sportivitas dan kerja sama, siswa menunjukkan kemampuan terbaiknya dan membawa pulang hasil yang membanggakan bagi sekolah.', 'SD Ignatius Slamet Riyadi kembali menorehkan prestasi melalui ajang kompetisi olahraga “Sanyus Cup” yang diikuti oleh berbagai sekolah di wilayah Karawang. Kegiatan ini menjadi momentum penting untuk mengasah bakat, mental bertanding, serta membangun karakter sportivitas di kalangan siswa.\r\n\r\nDalam kompetisi tersebut, tim dari SD Ignatius Slamet Riyadi tampil dengan penuh semangat dan percaya diri. Melalui latihan yang disiplin dan dukungan dari para guru pendamping, para siswa mampu menunjukkan performa terbaik mereka.\r\n\r\nBeberapa pencapaian yang diraih antara lain:\r\n\r\n• Penampilan unggul di babak penyisihan\r\n• Kerja sama tim yang solid dan terarah\r\n• Kemampuan teknik dan strategi yang semakin berkembang\r\n• Sikap sportivitas yang tinggi selama pertandingan\r\n\r\nSelain prestasi dalam pertandingan, ajang Sanyus Cup juga memberikan pengalaman berharga bagi para siswa dalam:\r\n\r\n• Belajar menghadapi tantangan\r\n• Menghargai lawan dan menjunjung fair play\r\n• Menguatkan rasa percaya diri dan tanggung jawab\r\n• Mengembangkan kemampuan komunikasi dan kerja sama\r\n\r\nSekolah memberikan apresiasi yang setinggi-tingginya kepada seluruh siswa yang telah berpartisipasi. Prestasi ini menjadi motivasi bagi semua peserta didik untuk terus berkembang dan mengukir prestasi di masa yang akan datang.\r\n\r\nTerima kasih kepada para guru pembimbing, orang tua, dan seluruh pihak yang telah mendukung keberhasilan tim Sanyus Cup tahun ini.\r\n\r\nSD Ignatius Slamet Riyadi – Berkarya, Berprestasi, dan Menginspirasi!', 'uploads/berita/sanyus-cup-6920617611952.jpeg', 'prestasi', 'active', 0, 1, '2025-11-21 12:56:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita_foto`
--

CREATE TABLE `berita_foto` (
  `id` int NOT NULL,
  `berita_id` int NOT NULL,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` enum('tk','sd','smp','sma') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'active',
  `created_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'umum',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `author_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `title`, `slug`, `excerpt`, `content`, `image_path`, `category`, `status`, `author_id`, `created_at`, `updated_at`) VALUES
(4, 'Kegiatan Koor misa sekolah', 'misa-sekolah', 'Kegiatan Koor Misa Sekolah SD Ignatius Slamet Riyadi berlangsung dengan penuh sukacita dan keterlibatan siswa. Melalui latihan rutin dan pendampingan guru, siswa belajar bernyanyi dengan baik serta membangun sikap disiplin, tanggung jawab, dan kebersamaan.', 'SD Ignatius Slamet Riyadi kembali melaksanakan kegiatan Koor Misa Sekolah sebagai bagian dari pembinaan iman dan karakter bagi para siswa. Kegiatan ini diikuti oleh siswa-siswi dari berbagai tingkat, yang secara khusus dipilih dan dibimbing untuk menjadi petugas koor dalam perayaan misa sekolah.\r\n\r\nSetiap minggu, siswa menjalani latihan rutin yang dipandu oleh guru pendamping. Melalui kegiatan ini, mereka tidak hanya belajar teknik vokal dan penguasaan lagu liturgi, tetapi juga menumbuhkan nilai-nilai penting seperti:\r\n\r\n• Kedisiplinan dalam mengikuti jadwal latihan\r\n• Kerja sama dalam membentuk harmoni suara\r\n• Tanggung jawab dalam menjalankan peran selama misa\r\n• Kepercayaan diri saat tampil di hadapan jemaat\r\n\r\nPada pelaksanaan misa, para siswa menunjukkan penampilan terbaik mereka. Suasana misa menjadi semakin khidmat berkat perpaduan suara merdu serta semangat pelayanan yang ditunjukkan oleh anak-anak.\r\n\r\nKegiatan ini diharapkan dapat terus menjadi ruang pembinaan positif bagi siswa, sekaligus memperkuat peran sekolah dalam menanamkan nilai-nilai Kristiani melalui pelayanan sederhana namun bermakna.\r\n\r\nSD Ignatius Slamet Riyadi berkomitmen untuk terus mendukung kegiatan yang membangun iman, karakter, dan kreativitas siswa.', 'uploads/kegiatan/petugas-koor-misa-sekolah-69205999cc197.jpeg', 'berita', 'active', 1, '2025-11-21 12:22:49', NULL),
(5, 'Penyambuatan Siswa Baru', 'post-69205a4ff35b7', 'SD Ignatius Slamet Riyadi melaksanakan kegiatan penyambutan siswa baru sebagai awal perjalanan mereka di lingkungan sekolah. Acara berlangsung hangat dan penuh antusiasme, memperkenalkan siswa pada lingkungan, guru, serta budaya sekolah.', 'SD Ignatius Slamet Riyadi menggelar kegiatan Penyambutan Siswa Baru sebagai langkah awal bagi peserta didik baru untuk mengenal lingkungan sekolah. Acara ini menjadi momen penting dalam memulai perjalanan pendidikan mereka, sekaligus membangun rasa percaya diri dan kenyamanan dalam beradaptasi dengan suasana baru.\r\n\r\nKegiatan penyambutan berlangsung dengan suasana hangat dan penuh antusiasme. Para siswa baru diperkenalkan dengan:\r\n\r\n• Guru-guru yang akan mendampingi proses belajar mengajar\r\n• Fasilitas sekolah, seperti ruang kelas, perpustakaan, aula, dan area bermain\r\n• Peraturan serta budaya sekolah yang menekankan kedisiplinan, sopan santun, dan nilai-nilai Kristiani\r\n\r\nSelain itu, para guru memberikan pengarahan ringan mengenai kegiatan belajar, tata tertib, serta nilai-nilai karakter yang menjadi ciri khas SD Ignatius Slamet Riyadi. Melalui penyambutan ini, sekolah berharap siswa dapat lebih cepat beradaptasi dan membangun semangat positif dalam memulai tahun ajaran baru.\r\n\r\nSD Ignatius Slamet Riyadi berkomitmen untuk memberikan lingkungan belajar yang aman, nyaman, dan penuh kasih, sehingga setiap siswa dapat berkembang secara optimal baik dalam akademik maupun karakter.', 'uploads/kegiatan/penyambutan-siswa-baru-69205a4ff37aa.jpeg', 'umum', 'active', 1, '2025-11-21 12:25:52', NULL),
(7, 'Lomba BKSN', 'bksn', 'SD Ignatius Slamet Riyadi mengadakan Lomba BKSN sebagai bagian dari perayaan Bulan Kitab Suci Nasional. Kegiatan ini bertujuan menumbuhkan kecintaan siswa pada Kitab Suci serta mendorong mereka untuk berani tampil, berkreasi, dan mengembangkan bakat rohani.', 'Dalam rangka memperingati Bulan Kitab Suci Nasional (BKSN), SD Ignatius Slamet Riyadi menyelenggarakan Lomba BKSN yang dapat diikuti oleh seluruh siswa dari berbagai jenjang. Kegiatan ini menjadi momen istimewa untuk menumbuhkan kecintaan anak-anak terhadap Kitab Suci serta mengajak mereka lebih aktif dalam memahami dan menghidupi nilai-nilai iman dalam kehidupan sehari-hari.\r\n\r\nAdapun jenis lomba yang diselenggarakan meliputi:\r\n\r\n• Membaca Kitab Suci\r\n• Menghafal ayat-ayat Kitab Suci\r\n• Mewarnai dan menggambar bertema Kitab Suci\r\n• Drama atau mini stage performance\r\n• Cerdas cermat Alkitab (opsional, jika ada)\r\n\r\nMelalui kegiatan ini, siswa diajak untuk:\r\n\r\n• Meningkatkan pengetahuan tentang Kitab Suci\r\n• Mengembangkan kreativitas dan kemampuan berekspresi\r\n• Menumbuhkan sikap percaya diri\r\n• Memperdalam nilai iman melalui kegiatan yang menyenangkan\r\n\r\nLomba BKSN diharapkan menjadi wadah pembinaan rohani yang positif, sekaligus mempererat kebersamaan antar siswa. Pemenang lomba akan diumumkan setelah seluruh rangkaian kegiatan selesai, dan sekolah memberikan apresiasi bagi setiap siswa yang telah berpartisipasi.\r\n\r\nSemoga kegiatan ini menjadi berkat dan motivasi bagi seluruh siswa untuk semakin mencintai Sabda Tuhan dalam kehidupan sehari-hari.', 'uploads/kegiatan/lomba-bksn-1-69205bcc6f947.jpeg', 'umum', 'active', 1, '2025-11-21 12:32:12', NULL),
(8, 'Literasi', 'post-69205cd322edb', 'Kegiatan Literasi di SD Ignatius Slamet Riyadi dilaksanakan untuk menumbuhkan minat baca serta meningkatkan kemampuan siswa dalam memahami informasi. Melalui program ini, siswa diajak untuk membaca, menulis, dan berkreasi dalam suasana belajar yang menyenangkan.', 'SD Ignatius Slamet Riyadi kembali mengadakan kegiatan Literasi sebagai bagian dari upaya sekolah untuk meningkatkan budaya membaca dan kemampuan literasi siswa. Kegiatan ini menjadi agenda rutin yang bertujuan menumbuhkan minat baca sejak dini serta mengasah keterampilan memahami, menulis, dan menyampaikan informasi secara kreatif.\r\n\r\nDalam pelaksanaannya, siswa mengikuti berbagai aktivitas menarik seperti:\r\n\r\n• Membaca buku cerita pilihan yang disediakan oleh sekolah\r\n• Menyusun ringkasan atau cerita pendek dari buku yang dibaca\r\n• Membuat poster atau ilustrasi untuk melatih kreativitas visual\r\n• Diskusi singkat bersama guru mengenai isi bacaan\r\n• Membacakan cerita di depan teman-teman untuk meningkatkan kepercayaan diri\r\n\r\nKegiatan literasi ini dirancang agar siswa dapat belajar secara menyenangkan, sekaligus melatih konsentrasi, imajinasi, dan kemampuan berbahasa. Guru-guru juga mendampingi siswa untuk memastikan setiap anak dapat mengikuti kegiatan dengan baik sesuai tingkat kemampuannya.\r\n\r\nProgram Literasi menjadi salah satu komitmen SD Ignatius Slamet Riyadi dalam membangun karakter siswa yang gemar membaca, berpikir kritis, dan mampu mengekspresikan diri secara positif. Sekolah berharap kegiatan ini terus memberi dampak baik bagi perkembangan akademik maupun kreativitas siswa.\r\n\r\nSemoga budaya literasi ini semakin berkembang dan menjadi kebiasaan baik bagi seluruh peserta didik.', 'uploads/kegiatan/literasi-1-69205cd3230d5.jpeg', 'berita', 'active', 1, '2025-11-21 12:36:35', NULL),
(9, 'HUT RI', 'post-69205d6f8de8a', 'SD Ignatius Slamet Riyadi merayakan Hari Ulang Tahun Republik Indonesia dengan berbagai kegiatan yang meriah dan edukatif. Melalui lomba serta upacara bendera, siswa diajak menumbuhkan jiwa nasionalisme dan rasa cinta tanah air.', 'Dalam rangka memperingati Hari Ulang Tahun Republik Indonesia, SD Ignatius Slamet Riyadi menyelenggarakan berbagai kegiatan untuk menanamkan semangat nasionalisme kepada para siswa. Perayaan tahun ini berlangsung meriah, penuh antusiasme, dan diikuti oleh seluruh warga sekolah.\r\n\r\nAcara dimulai dengan upacara bendera yang dilaksanakan dengan khidmat. Para petugas upacara dari siswa tampil dengan penuh tanggung jawab, menunjukkan kedisiplinan serta rasa hormat pada perjuangan para pahlawan bangsa.\r\n\r\nUsai upacara, rangkaian kegiatan dilanjutkan dengan berbagai perlombaan khas 17 Agustus, seperti:\r\n\r\n• Lomba balap karung\r\n• Lomba makan kerupuk\r\n• Lomba tarik tambang\r\n• Lomba membawa kelereng\r\n• Lomba estafet air\r\n• Permainan-permainan edukatif lainnya\r\n\r\nMelalui kegiatan ini, siswa diajak untuk:\r\n\r\n• Menumbuhkan kerja sama dan sportivitas\r\n• Menghargai perjuangan pahlawan dan kemerdekaan\r\n• Membangun kebersamaan antar teman\r\n• Melatih keberanian dan rasa percaya diri\r\n\r\nSuasana perayaan HUT RI di sekolah tampak penuh warna dan kegembiraan. Guru dan siswa saling mendukung dalam setiap kegiatan, sehingga tercipta lingkungan belajar yang positif dan menyenangkan.\r\n\r\nSD Ignatius Slamet Riyadi berharap perayaan ini dapat menjadi sarana pembinaan karakter, semangat persatuan, dan kecintaan terhadap tanah air bagi seluruh peserta didik.\r\n\r\nDirgahayu Republik Indonesia!\r\n“Terus Melaju untuk Indonesia Maju.”', 'uploads/kegiatan/hut-ri-1-69205d6f8e092.jpg', 'pengumuman', 'active', 1, '2025-11-21 12:39:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_foto`
--

CREATE TABLE `kegiatan_foto` (
  `id` int NOT NULL,
  `kegiatan_id` int NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_foto`
--

INSERT INTO `kegiatan_foto` (`id`, `kegiatan_id`, `image_path`, `created_at`) VALUES
(4, 7, 'uploads/kegiatan/lomba-bksn-2-69205bcc7311d.jpeg', '2025-11-21 12:32:12'),
(5, 7, 'uploads/kegiatan/lomba-bksn-3-69205bcc7368c.jpeg', '2025-11-21 12:32:12'),
(6, 7, 'uploads/kegiatan/lomba-bksn-4-69205bcc73a7c.jpeg', '2025-11-21 12:32:12'),
(7, 7, 'uploads/kegiatan/lomba-bksn-5-69205bcc73e4b.jpeg', '2025-11-21 12:32:12'),
(8, 8, 'uploads/kegiatan/literasi-2-69205cd324bad.jpeg', '2025-11-21 12:36:35'),
(9, 9, 'uploads/kegiatan/hut-ri-2-69205d6f9014d.jpg', '2025-11-21 12:39:11'),
(10, 9, 'uploads/kegiatan/hut-ri-3-69205d6f9076c.jpg', '2025-11-21 12:39:11'),
(11, 9, 'uploads/kegiatan/hut-ri-4-69205d6f90c87.jpg', '2025-11-21 12:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `render_art`
--

CREATE TABLE `render_art` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` enum('eksterior','interior','3d_modeling') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'eksterior',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `created_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `render_art`
--

INSERT INTO `render_art` (`id`, `title`, `description`, `image_path`, `category`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'Pencak Silat', 'Karya ini menggambarkan kekuatan, keluwesan, dan filosofi mendalam dari seni bela diri tradisional Pencak Silat. Melalui komposisi pose yang dinamis, karya ini menampilkan karakter seorang pesilat yang sedang melakukan gerakan penuh konsentrasi dan ketangkasan.\r\n\r\nDengan latar eksterior yang terasa natural, karya ini memberikan kesan keaslian serta menyatu dengan nilai budaya Nusantara. Detail gerakan tangan, kaki, serta ekspresi tubuh digambarkan secara kuat untuk menunjukkan keberanian, keteguhan hati, dan keharmonisan antara tubuh dan jiwa.\r\n\r\nKarya “Pencak Silat” tidak hanya menonjolkan aspek estetika, tetapi juga menjadi simbol pelestarian budaya Indonesia. Visualnya menggugah rasa bangga dan membuka ruang refleksi mengenai warisan seni bela diri yang telah diwariskan dari generasi ke generasi.', 'uploads/render/pencak-silat-69205ead154ad.jpeg', 'eksterior', 'active', 1, '2025-11-21 12:44:29', NULL),
(3, 'Paduan suara', 'Karya ini menggambarkan keindahan harmoni yang tercipta ketika suara-suara berbeda bersatu menjadi satu kesatuan. “Paduan Suara” menampilkan sekelompok penyanyi yang berdiri dalam formasi rapi, memancarkan ekspresi penuh semangat, ketulusan, dan keselarasan.\r\n\r\nSetiap figur digambarkan dengan detail yang mencerminkan karakter unik, namun menyatu dalam gerakan dan ekspresi musikal yang sama. Nuansa pencahayaan yang lembut memberikan kesan hangat, sementara latar eksterior menghadirkan suasana terbuka yang mendukung kebebasan berekspresi.\r\n\r\nKarya ini menjadi simbol kebersamaan, disiplin, dan seni kolaborasi. “Paduan Suara” tidak hanya menonjolkan estetika visual, tetapi juga menggambarkan makna mendalam tentang persatuan dan harmoni dalam perbedaan.', 'uploads/render/paduan-suara-69205ee0079dd.jpeg', 'eksterior', 'active', 1, '2025-11-21 12:45:20', NULL),
(4, 'Mini Orkestra', 'Karya “Mini Orkestra” menghadirkan suasana musikal yang anggun melalui visualisasi sekelompok musisi yang memainkan alat musik dalam format orkestra kecil. Setiap pemain digambarkan dengan fokus dan ekspresi yang hidup, mencerminkan kecintaan mereka terhadap musik.\r\n\r\nKomposisi visual menggambarkan harmoni antara alat musik gesek, tiup, dan perkusi yang berpadu menciptakan alunan melodi yang indah. Detail pada gesture tubuh, posisi alat musik, serta interaksi antar pemain memberikan kesan dinamisme dan kekompakan sebuah ansambel profesional meski dalam skala mini.\r\n\r\nLatar eksterior yang digunakan memberikan kesan terbuka dan hangat, menambah kesan bahwa musik dapat dinikmati di ruang mana pun. Karya ini menggambarkan pesan bahwa musik adalah bahasa universal yang dapat mempersatukan siapa saja.\r\n\r\n“Mini Orkestra” menjadi representasi visual dari disiplin, harmoni, dan keindahan seni pertunjukan yang diwujudkan dalam bentuk yang sederhana namun memukau.', 'uploads/render/mini-orkestra-69205f557fab3.jpeg', 'eksterior', 'active', 1, '2025-11-21 12:47:17', NULL);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita_foto`
--
ALTER TABLE `berita_foto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kegiatan_foto`
--
ALTER TABLE `kegiatan_foto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `render_art`
--
ALTER TABLE `render_art`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
