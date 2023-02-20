-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 06:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tim3_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `gambar_jurusan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`, `gambar_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi', 'https://p4.wallpaperbetter.com/wallpaper/381/669/151/white-wall-paint-lighthouse-fanad-fanad-wallpaper-preview.jpg', '2023-02-19 22:26:33', NULL),
(2, 'Akuntansi', 'https://p4.wallpaperbetter.com/wallpaper/29/876/1002/paper-economy-calculator-wallpaper-preview.jpg', '2023-02-19 22:26:33', NULL),
(3, 'Bahasa Inggris', 'https://p4.wallpaperbetter.com/wallpaper/4/66/442/book-education-graphing-paper-homework-wallpaper-preview.jpg', '2023-02-19 22:26:33', NULL),
(4, 'Teknik Sipil', 'https://p4.wallpaperbetter.com/wallpaper/410/75/610/pearls-blueprints-calculator-civil-engineering-wallpaper-preview.jpg', '2023-02-19 22:26:33', NULL),
(5, 'Teknik Mesin', 'https://p4.wallpaperbetter.com/wallpaper/969/670/409/robot-machine-engineering-factory-wallpaper-preview.jpg', '2023-02-19 22:26:33', NULL),
(6, 'Teknik Elektro', 'https://p4.wallpaperbetter.com/wallpaper/158/131/815/abstract-circuit-computer-detail-wallpaper-preview.jpg', '2023-02-19 22:26:33', NULL),
(7, 'Administrasi Niaga', 'https://p4.wallpaperbetter.com/wallpaper/608/681/293/administration-adult-banking-business-wallpaper-preview.jpg', '2023-02-19 22:26:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan_sekolah`
--

CREATE TABLE `jurusan_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan_sekolah`
--

INSERT INTO `jurusan_sekolah` (`id`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'SMA-IPA', '2023-02-19 22:26:33', NULL),
(2, 'SMA-IPS', '2023-02-19 22:26:33', NULL),
(3, 'SMK-Teknik Komputer dan Jaringan', '2023-02-19 22:26:33', NULL),
(4, 'SMK-Rekayasa Perangkat Lunak', '2023-02-19 22:26:33', NULL),
(5, 'SMK-Multimedia', '2023-02-19 22:26:33', NULL),
(6, 'SMK-Sistem Informatika, Jaringan dan Aplikasi', '2023-02-19 22:26:33', NULL),
(7, 'SMK-Teknik Telekomunikasi', '2023-02-19 22:26:33', NULL),
(8, 'SMK-Teknik Elektronika Industri', '2023-02-19 22:26:33', NULL),
(9, 'SMK-Teknik Instalasi Tenaga Listrik', '2023-02-19 22:26:33', NULL),
(10, 'SMK-Teknik Mekatronika', '2023-02-19 22:26:33', NULL),
(11, 'SMK-Teknik Pembangkit Tenaga Listrik', '2023-02-19 22:26:33', NULL),
(12, 'SMK-Teknik Otomasi Industri', '2023-02-19 22:26:33', NULL),
(13, 'SMK-Bisnis Konstruksi dan Properti', '2023-02-19 22:26:33', NULL),
(14, 'SMK-Desain Pemodelan dan Informasi Bangunan', '2023-02-19 22:26:33', NULL),
(15, 'SMK-Teknik Gambar Bangunan', '2023-02-19 22:26:33', NULL),
(16, 'SMK-Teknik Mesin', '2023-02-19 22:26:33', NULL),
(17, 'SMK-Teknik Otomotif', '2023-02-19 22:26:33', NULL),
(18, 'SMK-Kontrol Proses', '2023-02-19 22:26:33', NULL),
(19, 'SMK-Akuntansi dan Keuangan Lembaga', '2023-02-19 22:26:33', NULL),
(20, 'SMK-Bisnis Pemasaran', '2023-02-19 22:26:33', NULL),
(21, 'SMK-Manajemen Perkantoran', '2023-02-19 22:26:33', NULL),
(22, 'SMK-Otomatisasi dan Tata Kelola Perkantoran', '2023-02-19 22:26:33', NULL),
(23, 'SMK-Perhotelan dan Jasa Pariwisata', '2023-02-19 22:26:33', NULL),
(24, 'SMK-Wisata Bahari dan Ekowisata', '2023-02-19 22:26:33', NULL),
(25, 'SMK-Tata Kecantikan', '2023-02-19 22:26:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Minat', '2023-02-19 22:26:33', NULL),
(2, 'Bakat', '2023-02-19 22:26:33', NULL),
(3, 'Hobi', '2023-02-19 22:26:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_12_26_040314_create_pertanyaans_table', 1),
(5, '2022_12_26_040321_create_preferensis_table', 1),
(6, '2022_12_26_040330_create_pilihans_table', 1),
(7, '2022_12_29_062755_create_prodis_table', 1),
(8, '2022_12_29_063049_create_jurusans_table', 1),
(9, '2023_01_05_072145_create_jurusan_sekolahs_table', 1),
(10, '2023_01_19_111205_create_kriterias_table', 1),
(11, '2023_02_06_133746_create_hasils_table', 1),
(12, '2023_02_12_071028_create_tests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prodi` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_prodi`, `id_kriteria`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Sangat berminat untuk mempelajari komputer, menginstalasi dan trouble shooting komputer secara software maupun hardware', NULL, NULL),
(2, 1, 2, 'Mempunyai kemampuan dasar dalam menginstalasi dan troubel shooting komputer secara software dan hardware', NULL, NULL),
(3, 1, 3, 'Sangat menyukai kegiatan pembelajaran yang berhubungan dengan pemrograman', NULL, NULL),
(4, 2, 1, 'Sangat berminat dalam mempelajari komputer untuk berbagai aplikasi, menginstalasi dan trouble shooting komputer secara software maupun hardware', NULL, NULL),
(5, 2, 2, 'Mempunya kemampuan dasar dalam mengelola, merawat dan memperabaiki jaringan komputer', NULL, NULL),
(6, 2, 3, 'Hobi melakukan kegiatan yang berkaitan dalam pembelajaran tentang komputer dan jaringan', NULL, NULL),
(7, 3, 1, 'Sangat berminat untuk mempelajari komputer, menginstalasi dan trouble shooting komputer secara software maupun hardware', NULL, NULL),
(8, 3, 2, 'Mempunyai kemampuan dasar dalam menginstalasi dan trouble shooting komputer secara software dan hardware', NULL, NULL),
(9, 3, 3, 'Hobi melakukan kegiatan yang berkaitan dengan komputer dan jaringan', NULL, NULL),
(10, 4, 1, 'Berminat dalam ilmu perhitungan, sistem keuangan dan etiket bisnis', NULL, NULL),
(11, 4, 2, 'Memiliki keahlian dasar matematika dan software akuntansi', NULL, NULL),
(12, 4, 3, 'Hobi melakukan pembuatan laporan keuangan, melakukan analisis pasar keuangan dan senang berbisnis', NULL, NULL),
(13, 5, 1, 'Berminat dalam ilmu perhitungan, sistem keuangan dan etiket bisnis', NULL, NULL),
(14, 5, 2, 'Memiliki keahlian dasar matematika dan software akuntansi', NULL, NULL),
(15, 5, 3, 'Hobi melakukan pembuatan laporan keuangan, melakukan analisis pasar keuangan dan senang berbisnis', NULL, NULL),
(16, 6, 1, 'Berminat dalam mempelajari bahasa asing.', NULL, NULL),
(17, 6, 2, 'Memiliki keahlian dasar dalam mengingat dan cepat dalam belajar bahasa asing.', NULL, NULL),
(18, 6, 3, 'Hobi berbicara bahasa asing serta menyenangi hal-hal yang berkaitan dengan bahasa asing.', NULL, NULL),
(19, 7, 1, 'Berminat dalam mempelajari tentang bagaimana merancang, membangun, merenovasi gedung dan infrastruktur lainya juga mencakup lingkungan.', NULL, NULL),
(20, 7, 2, 'Memiliki keahlian dasar tentang infrastruktur bangunan dan lingkungan.', NULL, NULL),
(21, 7, 3, 'Hobi dalam membangun, merenovasi, dan merancang suatu gedung atau infrastruktur lainya. ', NULL, NULL),
(22, 8, 1, 'Berminat dalam mempelajari tentang bagaimana merancang, membangun, merenovasi gedung dan infrastruktur lainya juga mencakup lingkungan.', NULL, NULL),
(23, 8, 2, 'Memiliki keahlian dasar tentang infrastruktur bangunan dan lingkungan.', NULL, NULL),
(24, 8, 3, 'Hobi dalam membangun, merenovasi, dan merancang suatu gedung atau infrastruktur lainya. ', NULL, NULL),
(25, 9, 1, 'Berminat dalam mempelajari tentang bagaimana merancang, membangun, merenovasi gedung dan infrastruktur lainya juga mencakup lingkungan.', NULL, NULL),
(26, 9, 2, 'Memiliki keahlian dasar tentang infrastruktur bangunan dan lingkungan.', NULL, NULL),
(27, 9, 3, 'Hobi dalam membangun, merenovasi, dan merancang suatu gedung atau infrastruktur lainya. ', NULL, NULL),
(28, 10, 1, 'Menyukai mesin dan hal-hal yang berkaitan dengan teknik', NULL, NULL),
(29, 10, 2, 'Memiliki keahlian dalam perawatan mesin serta bidang keahlian fisika dan matematika', NULL, NULL),
(30, 10, 3, 'Hobi dalam merakit, merawat dan pembelajaran tentang mesin', NULL, NULL),
(31, 11, 1, 'Berminat dalam mempelajari ilmu fisika dalam praktek mesin-mesin besar yang berfungsi untuk kegiatan konstruksi.', NULL, NULL),
(32, 11, 2, 'Memiliki keahlian dasar tentang alat-alat berat dan keselamatan kerja.', NULL, NULL),
(33, 11, 3, 'Hobi dalam menggunakan dan mengoperasikan alat-alat berat. ', NULL, NULL),
(34, 12, 1, 'Berminat dalam mempelajari tentang komponen listrik dan alat-alat semi konduktor.', NULL, NULL),
(35, 12, 2, 'Memiliki keahlian dasar tentang kelistrikan dan alat-alat elektronik.', NULL, NULL),
(36, 12, 3, 'Hobi berkegiatan yang berkaitan dengan kelistrikan. ', NULL, NULL),
(37, 13, 1, 'Berminat dalam mempelajari tentang komponen listrik dan alat-alat semi konduktor.', NULL, NULL),
(38, 13, 2, 'Memiliki keahlian dasar tentang kelistrikan dan alat-alat elektronik.', NULL, NULL),
(39, 13, 3, 'Hobi berkegiatan yang berkaitan dengan kelistrikan. ', NULL, NULL),
(40, 14, 1, 'Berminat dalam mempelajari tentang komponen listrik dan alat-alat semi konduktor.', NULL, NULL),
(41, 14, 2, 'Memiliki keahlian dasar tentang kelistrikan dan alat-alat elektronik.', NULL, NULL),
(42, 14, 3, 'Hobi berkegiatan yang berkaitan dengan kelistrikan. ', NULL, NULL),
(43, 15, 1, 'Berminat dalam mempelajari segala sesuatu yang terkait dengan kegiatan operasional bisnis dan perusahaan.', NULL, NULL),
(44, 15, 2, 'Memiliki kemampuan dasar manajerial, komunasi, dan analisa yang bagus. ', NULL, NULL),
(45, 15, 3, 'Hobi dalam mengurus dan mengelola file-file yang berkaitan dengan perusahaan dan bisnis.', NULL, NULL),
(46, 15, 1, 'Berminat dalam mempelajari ilmu pengelolaan perjalanan wisata, pemandu wisata, maupun layanan kehumasan.', NULL, NULL),
(47, 16, 2, 'Memiliki kemampuan komunikasi yang bagus.', NULL, NULL),
(48, 16, 3, 'Hobi dalam mengurus dan memandu perjalana wisata. ', NULL, NULL),
(49, 17, 1, 'Berminat dalam mempelajari segala sesuatu yang terkait dengan kegiatan operasional bisnis dan perusahaan.', NULL, NULL),
(50, 17, 2, 'Memiliki kemampuan dasar manajerial, komunasi, dan analisa yang bagus. ', NULL, NULL),
(51, 17, 3, 'Hobi dalam mengurus dan mengelola file-file yang berkaitan dengan perusahaan dan bisnis.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan_sekolah` bigint(20) UNSIGNED NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id`, `id_jurusan_sekolah`, `prodi_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-02-19 22:26:33', NULL),
(2, 1, 2, '2023-02-19 22:26:33', NULL),
(3, 1, 3, '2023-02-19 22:26:33', NULL),
(4, 1, 4, '2023-02-19 22:26:33', NULL),
(5, 1, 5, '2023-02-19 22:26:33', NULL),
(6, 1, 6, '2023-02-19 22:26:33', NULL),
(7, 1, 7, '2023-02-19 22:26:33', NULL),
(8, 1, 8, '2023-02-19 22:26:33', NULL),
(9, 1, 9, '2023-02-19 22:26:33', NULL),
(10, 1, 10, '2023-02-19 22:26:33', NULL),
(11, 1, 11, '2023-02-19 22:26:33', NULL),
(12, 1, 12, '2023-02-19 22:26:33', NULL),
(13, 1, 13, '2023-02-19 22:26:33', NULL),
(14, 1, 14, '2023-02-19 22:26:33', NULL),
(15, 1, 15, '2023-02-19 22:26:33', NULL),
(16, 1, 16, '2023-02-19 22:26:33', NULL),
(17, 1, 17, '2023-02-19 22:26:33', NULL),
(18, 2, 4, '2023-02-19 22:26:33', NULL),
(19, 2, 5, '2023-02-19 22:26:33', NULL),
(20, 2, 6, '2023-02-19 22:26:33', NULL),
(21, 2, 15, '2023-02-19 22:26:33', NULL),
(22, 2, 16, '2023-02-19 22:26:33', NULL),
(23, 2, 17, '2023-02-19 22:26:33', NULL),
(24, 3, 1, '2023-02-19 22:26:33', NULL),
(25, 3, 2, '2023-02-19 22:26:33', NULL),
(26, 3, 3, '2023-02-19 22:26:33', NULL),
(27, 3, 6, '2023-02-19 22:26:33', NULL),
(28, 3, 12, '2023-02-19 22:26:33', NULL),
(29, 3, 13, '2023-02-19 22:26:33', NULL),
(30, 3, 14, '2023-02-19 22:26:33', NULL),
(31, 4, 1, '2023-02-19 22:26:33', NULL),
(32, 4, 2, '2023-02-19 22:26:33', NULL),
(33, 4, 3, '2023-02-19 22:26:33', NULL),
(34, 4, 6, '2023-02-19 22:26:33', NULL),
(35, 6, 1, '2023-02-19 22:26:33', NULL),
(36, 6, 2, '2023-02-19 22:26:33', NULL),
(37, 6, 3, '2023-02-19 22:26:33', NULL),
(38, 6, 6, '2023-02-19 22:26:33', NULL),
(39, 6, 12, '2023-02-19 22:26:33', NULL),
(40, 6, 13, '2023-02-19 22:26:33', NULL),
(41, 6, 14, '2023-02-19 22:26:33', NULL),
(42, 7, 1, '2023-02-19 22:26:33', NULL),
(43, 7, 2, '2023-02-19 22:26:33', NULL),
(44, 7, 3, '2023-02-19 22:26:33', NULL),
(45, 7, 6, '2023-02-19 22:26:33', NULL),
(46, 7, 12, '2023-02-19 22:26:33', NULL),
(47, 7, 13, '2023-02-19 22:26:33', NULL),
(48, 7, 14, '2023-02-19 22:26:33', NULL),
(49, 5, 1, '2023-02-19 22:26:33', NULL),
(50, 5, 2, '2023-02-19 22:26:33', NULL),
(51, 5, 3, '2023-02-19 22:26:33', NULL),
(52, 5, 6, '2023-02-19 22:26:33', NULL),
(53, 8, 1, '2023-02-19 22:26:33', NULL),
(54, 8, 2, '2023-02-19 22:26:33', NULL),
(55, 8, 6, '2023-02-19 22:26:33', NULL),
(56, 8, 12, '2023-02-19 22:26:33', NULL),
(57, 8, 13, '2023-02-19 22:26:33', NULL),
(58, 8, 14, '2023-02-19 22:26:33', NULL),
(59, 9, 6, '2023-02-19 22:26:33', NULL),
(60, 9, 12, '2023-02-19 22:26:33', NULL),
(61, 9, 13, '2023-02-19 22:26:33', NULL),
(62, 9, 14, '2023-02-19 22:26:33', NULL),
(63, 10, 1, '2023-02-19 22:26:33', NULL),
(64, 10, 2, '2023-02-19 22:26:33', NULL),
(65, 10, 10, '2023-02-19 22:26:33', NULL),
(66, 10, 11, '2023-02-19 22:26:33', NULL),
(67, 10, 12, '2023-02-19 22:26:33', NULL),
(68, 10, 13, '2023-02-19 22:26:33', NULL),
(69, 10, 14, '2023-02-19 22:26:33', NULL),
(70, 11, 6, '2023-02-19 22:26:33', NULL),
(71, 11, 12, '2023-02-19 22:26:33', NULL),
(72, 11, 13, '2023-02-19 22:26:33', NULL),
(73, 11, 14, '2023-02-19 22:26:33', NULL),
(74, 12, 10, '2023-02-19 22:26:33', NULL),
(75, 12, 11, '2023-02-19 22:26:33', NULL),
(76, 12, 12, '2023-02-19 22:26:33', NULL),
(77, 12, 13, '2023-02-19 22:26:33', NULL),
(78, 12, 14, '2023-02-19 22:26:33', NULL),
(79, 13, 6, '2023-02-19 22:26:33', NULL),
(80, 13, 7, '2023-02-19 22:26:33', NULL),
(81, 13, 8, '2023-02-19 22:26:33', NULL),
(82, 13, 9, '2023-02-19 22:26:33', NULL),
(83, 14, 6, '2023-02-19 22:26:33', NULL),
(84, 14, 7, '2023-02-19 22:26:33', NULL),
(85, 14, 8, '2023-02-19 22:26:33', NULL),
(86, 14, 9, '2023-02-19 22:26:33', NULL),
(87, 15, 6, '2023-02-19 22:26:33', NULL),
(88, 15, 7, '2023-02-19 22:26:33', NULL),
(89, 15, 8, '2023-02-19 22:26:33', NULL),
(90, 15, 9, '2023-02-19 22:26:33', NULL),
(91, 16, 6, '2023-02-19 22:26:33', NULL),
(92, 16, 10, '2023-02-19 22:26:33', NULL),
(93, 16, 11, '2023-02-19 22:26:33', NULL),
(94, 17, 6, '2023-02-19 22:26:33', NULL),
(95, 17, 10, '2023-02-19 22:26:33', NULL),
(96, 17, 11, '2023-02-19 22:26:33', NULL),
(97, 18, 6, '2023-02-19 22:26:33', NULL),
(98, 18, 10, '2023-02-19 22:26:33', NULL),
(99, 18, 11, '2023-02-19 22:26:33', NULL),
(100, 19, 4, '2023-02-19 22:26:33', NULL),
(101, 19, 5, '2023-02-19 22:26:33', NULL),
(102, 19, 6, '2023-02-19 22:26:33', NULL),
(103, 19, 15, '2023-02-19 22:26:33', NULL),
(104, 19, 17, '2023-02-19 22:26:33', NULL),
(105, 20, 4, '2023-02-19 22:26:33', NULL),
(106, 20, 5, '2023-02-19 22:26:33', NULL),
(107, 20, 6, '2023-02-19 22:26:33', NULL),
(108, 20, 15, '2023-02-19 22:26:33', NULL),
(109, 20, 17, '2023-02-19 22:26:33', NULL),
(110, 21, 4, '2023-02-19 22:26:33', NULL),
(111, 21, 5, '2023-02-19 22:26:33', NULL),
(112, 21, 6, '2023-02-19 22:26:33', NULL),
(113, 21, 15, '2023-02-19 22:26:33', NULL),
(114, 21, 17, '2023-02-19 22:26:33', NULL),
(115, 22, 4, '2023-02-19 22:26:33', NULL),
(116, 22, 5, '2023-02-19 22:26:33', NULL),
(117, 22, 6, '2023-02-19 22:26:33', NULL),
(118, 22, 15, '2023-02-19 22:26:33', NULL),
(119, 22, 17, '2023-02-19 22:26:33', NULL),
(120, 23, 6, '2023-02-19 22:26:33', NULL),
(121, 23, 16, '2023-02-19 22:26:33', NULL),
(122, 24, 6, '2023-02-19 22:26:33', NULL),
(123, 24, 16, '2023-02-19 22:26:33', NULL),
(124, 25, 6, '2023-02-19 22:26:33', NULL),
(125, 25, 16, '2023-02-19 22:26:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preferensi`
--

CREATE TABLE `preferensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria1` bigint(20) UNSIGNED NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kriteria2` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preferensi`
--

INSERT INTO `preferensi` (`id`, `kriteria1`, `nilai`, `keterangan`, `kriteria2`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Sama Pentingnya', 2, '2023-02-19 22:26:33', '2023-02-19 22:26:33'),
(2, 1, 7, 'Sangat penting', 3, '2023-02-19 22:26:33', '2023-02-19 22:26:33'),
(3, 2, 5, 'Penting dari', 3, '2023-02-19 22:26:33', '2023-02-19 22:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) UNSIGNED NOT NULL,
  `jurusan_id` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `jurusan_id`, `nama_prodi`, `created_at`, `updated_at`) VALUES
(1, 1, 'D3-Manajemen Informatika', '2023-02-19 22:26:33', NULL),
(2, 1, 'D3-Teknik Komputer', '2023-02-19 22:26:33', NULL),
(3, 1, 'D4-Teknologi Rekayasa Perangkat Lunak', '2023-02-19 22:26:33', NULL),
(4, 2, 'D3-Akuntansi', '2023-02-19 22:26:33', NULL),
(5, 2, 'D4-Akuntansi', '2023-02-19 22:26:33', NULL),
(6, 3, 'D3-Bahasa Inggris', '2023-02-19 22:26:33', NULL),
(7, 4, 'D3-Teknik Sipil', '2023-02-19 22:26:33', NULL),
(8, 4, 'D4-Teknik Perancangan Jalan dan Jembatan', '2023-02-19 22:26:33', NULL),
(9, 4, 'D4-Manajemen Rekayasa Konstruksi', '2023-02-19 22:26:33', NULL),
(10, 5, 'D3-Teknik Mesin', '2023-02-19 22:26:33', NULL),
(11, 5, 'D3-Teknik Alat Berat', '2023-02-19 22:26:33', NULL),
(12, 6, 'D3-Teknik Eletronika', '2023-02-19 22:26:33', NULL),
(13, 6, 'D4-Teknik Elektronika', '2023-02-19 22:26:33', NULL),
(14, 6, 'D4-Teknik Listrik', '2023-02-19 22:26:33', NULL),
(15, 7, 'D3-Administrasi Bisnis', '2023-02-19 22:26:33', NULL),
(16, 7, 'D3-Usaha Perjalanan Wisata', '2023-02-19 22:26:33', NULL),
(17, 7, 'D4-Administrasi Bisnis', '2023-02-19 22:26:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testing` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_permission` tinyint(4) NOT NULL DEFAULT 2,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Lynn Hammes', 'ricardo.kihn', 'meggie15@gmail.com', NULL, '$2y$10$cZRxZoPq6zMZQAivrSgCFeNHDI/xby26Zj/84BordrNceiu1mOh.G', 1, '5dHgtVuf2d', '2023-02-19 22:26:33', '2023-02-19 22:26:33'),
(2, 'Mrs. Daphnee Wuckert', 'mdicki', 'nichole.walter@gmail.com', NULL, '$2y$10$LgEe.VtNR2GzhkoYzVGOoOnVB57l0lTLv/mTVLRQNy3qKm0qhUXq.', 1, '2rlAjIs6pg', '2023-02-19 22:26:33', '2023-02-19 22:26:33'),
(3, 'Jamaal Zemlak', 'howell47', 'schmidt.bertrand@gmail.com', NULL, '$2y$10$CVbA4Pd1pcL2CBqc4KMmFuZ9XZZOMf8EPa0IJvI0eayU6w/1ebtV.', 2, 'orLOxFzfhG', '2023-02-19 22:26:33', '2023-02-19 22:26:33'),
(4, 'Frida Barton', 'lisette55', 'farrell.newton@gmail.com', NULL, '$2y$10$T5eli9Yrz1FiET1zaCIpmuQocftu2UDjQawHptan8UwfrdgBFoGGK', 1, '98pB06AtGL', '2023-02-19 22:26:33', '2023-02-19 22:26:33'),
(5, 'Dr. Ernesto Cruickshank DVM', 'lavern48', 'jess45@gmail.com', NULL, '$2y$10$/f1x9oZkihqr8A7RlkpgGeQUOoaI5AfUuDgI43SPggy6ndbyo3khK', 2, 'cNEmbGIbBN', '2023-02-19 22:26:33', '2023-02-19 22:26:33'),
(6, 'admin', 'admin', 'admin@gmail.com', '2023-02-19 22:26:33', '$2y$10$unqUNlqbIHGcn2qv0PBY.OmwQQiw0JOQ7WPkvOUMtzFrCEVpvO9ty', 1, NULL, NULL, NULL),
(7, 'Abdullah', 'user', 'user@gmail.com', '2023-02-19 22:26:33', '$2y$10$zqdRlMXlDDQtfLyBm9sx2ONfYzRY0.vwwjS4T5huZPQ7I6Pa/7G2y', 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jurusan_nama_jurusan_unique` (`nama_jurusan`);

--
-- Indexes for table `jurusan_sekolah`
--
ALTER TABLE `jurusan_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jurusan_sekolah_nama_jurusan_unique` (`nama_jurusan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferensi`
--
ALTER TABLE `preferensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `prodi_nama_prodi_unique` (`nama_prodi`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasils`
--
ALTER TABLE `hasils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jurusan_sekolah`
--
ALTER TABLE `jurusan_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `preferensi`
--
ALTER TABLE `preferensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
