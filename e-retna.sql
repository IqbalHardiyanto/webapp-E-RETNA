-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 04:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-retna`
--

-- --------------------------------------------------------

--
-- Table structure for table `bap`
--

CREATE TABLE `bap` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_pasien` text DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `link_file` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tanggal_dimusnahkan` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bap`
--

INSERT INTO `bap` (`id`, `id_pasien`, `judul`, `link_file`, `keterangan`, `tanggal_dimusnahkan`) VALUES
(2, '[\"12\"]', 'BAP Kerjasama', 'bapkerjasama/bapkerjasama_1739762021.pdf', 'Dokumen BAP Kerjasama', '2025-02-17 00:00:00'),
(3, '[\"16\"]', 'BAP Non Kerjasama', 'bapnonkerjasama/bapnonkerjasama_1739762681.pdf', 'Dokumen BAP Non Kerjasama', '2025-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `actions` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `id_user`, `actions`, `created_at`) VALUES
(1, 1, 'Mengimpor data pasien dengan No RM: 276812', '2025-02-17 08:10:11'),
(2, 1, 'Mengimpor data pasien dengan No RM: 391629', '2025-02-17 08:10:11'),
(3, 1, 'Mengimpor data pasien dengan No RM: 005238', '2025-02-17 08:10:11'),
(4, 1, 'Mengimpor data pasien dengan No RM: 009978', '2025-02-17 08:10:11'),
(5, 1, 'Mengimpor data pasien dengan No RM: 010698', '2025-02-17 08:10:11'),
(6, 1, 'Mengimpor data pasien dengan No RM: 011007', '2025-02-17 08:10:11'),
(7, 1, 'Mengimpor data pasien dengan No RM: 011091', '2025-02-17 08:10:11'),
(8, 1, 'Mengimpor data pasien dengan No RM: 011166', '2025-02-17 08:10:11'),
(9, 1, 'Mengimpor data pasien dengan No RM: 011341', '2025-02-17 08:10:11'),
(10, 1, 'Mengimpor data pasien dengan No RM: 011386', '2025-02-17 08:10:11'),
(11, 1, 'Mengimpor data pasien dengan No RM: 013205', '2025-02-17 08:10:11'),
(12, 1, 'Mengimpor data pasien dengan No RM: 013280', '2025-02-17 08:10:11'),
(13, 1, 'Mengimpor data pasien dengan No RM: 013841', '2025-02-17 08:10:11'),
(14, 1, 'Mengimpor data pasien dengan No RM: 013993', '2025-02-17 08:10:11'),
(15, 1, 'Mengimpor data pasien dengan No RM: 014068', '2025-02-17 08:10:11'),
(16, 1, 'Mengimpor data pasien dengan No RM: 015220', '2025-02-17 08:10:11'),
(17, 1, 'Mengimpor data pasien dengan No RM: 016173', '2025-02-17 08:10:11'),
(18, 1, 'Mengimpor data pasien dengan No RM: 016323', '2025-02-17 08:10:11'),
(19, 1, 'Mengimpor data pasien dengan No RM: 016736', '2025-02-17 08:10:11'),
(20, 1, 'Mengimpor data pasien dengan No RM: 016948', '2025-02-17 08:10:11'),
(21, 1, 'Mengimpor data pasien dengan No RM: 017117', '2025-02-17 08:10:11'),
(22, 1, 'Mengimpor data pasien dengan No RM: 017373', '2025-02-17 08:10:11'),
(23, 1, 'Mengimpor data pasien dengan No RM: 017424', '2025-02-17 08:10:11'),
(24, 1, 'Mengimpor data pasien dengan No RM: 017697', '2025-02-17 08:10:11'),
(25, 1, 'Mengimpor data pasien dengan No RM: 017744', '2025-02-17 08:10:11'),
(26, 1, 'Mengimpor data pasien dengan No RM: 017818', '2025-02-17 08:10:11'),
(27, 1, 'Mengimpor data pasien dengan No RM: 017929', '2025-02-17 08:10:11'),
(28, 1, 'Mengimpor data pasien dengan No RM: 018238', '2025-02-17 08:10:11'),
(29, 1, 'Mengimpor data pasien dengan No RM: 018362', '2025-02-17 08:10:11'),
(30, 1, 'Mengimpor data pasien dengan No RM: 018363', '2025-02-17 08:10:11'),
(31, 1, 'Mengimpor data pasien dengan No RM: 018376', '2025-02-17 08:10:11'),
(32, 1, 'Mengimpor data pasien dengan No RM: 018384', '2025-02-17 08:10:11'),
(33, 1, 'Mengimpor data pasien dengan No RM: 018414', '2025-02-17 08:10:11'),
(34, 1, 'Mengimpor data pasien dengan No RM: 018661', '2025-02-17 08:10:11'),
(35, 1, 'Mengimpor data pasien dengan No RM: 018935', '2025-02-17 08:10:11'),
(36, 1, 'Mengimpor data pasien dengan No RM: 019025', '2025-02-17 08:10:11'),
(37, 1, 'Mengimpor data pasien dengan No RM: 019113', '2025-02-17 08:10:11'),
(38, 1, 'Mengimpor data pasien dengan No RM: 019280', '2025-02-17 08:10:11'),
(39, 1, 'Mengimpor data pasien dengan No RM: 019421', '2025-02-17 08:10:11'),
(40, 1, 'Mengimpor data pasien dengan No RM: 019458', '2025-02-17 08:10:11'),
(41, 1, 'Mengimpor data pasien dengan No RM: 019470', '2025-02-17 08:10:11'),
(42, 1, 'Mengimpor data pasien dengan No RM: 019473', '2025-02-17 08:10:11'),
(43, 1, 'Mengimpor data pasien dengan No RM: 019476', '2025-02-17 08:10:11'),
(44, 1, 'Mengimpor data pasien dengan No RM: 019480', '2025-02-17 08:10:11'),
(45, 1, 'Mengimpor data pasien dengan No RM: 019683', '2025-02-17 08:10:11'),
(46, 1, 'Mengimpor data pasien dengan No RM: 019689', '2025-02-17 08:10:11'),
(47, 1, 'Mengimpor data pasien dengan No RM: 019937', '2025-02-17 08:10:11'),
(48, 1, 'Mengimpor data pasien dengan No RM: 020026', '2025-02-17 08:10:11'),
(49, 1, 'Mengimpor data pasien dengan No RM: 020028', '2025-02-17 08:10:11'),
(50, 1, 'Mengimpor data pasien dengan No RM: 020172', '2025-02-17 08:10:11'),
(51, 1, 'Mengimpor data pasien dengan No RM: 020194', '2025-02-17 08:10:11'),
(52, 1, 'Mengimpor data pasien dengan No RM: 020310', '2025-02-17 08:10:11'),
(53, 1, 'Mengimpor data pasien dengan No RM: 020533', '2025-02-17 08:10:11'),
(54, 1, 'Mengimpor data pasien dengan No RM: 020562', '2025-02-17 08:10:11'),
(55, 1, 'Mengimpor data pasien dengan No RM: 020563', '2025-02-17 08:10:11'),
(56, 1, 'Mengimpor data pasien dengan No RM: 020569', '2025-02-17 08:10:11'),
(57, 1, 'Mengimpor data pasien dengan No RM: 020571', '2025-02-17 08:10:11'),
(58, 1, 'Mengimpor data pasien dengan No RM: 020701', '2025-02-17 08:10:11'),
(59, 1, 'Mengimpor data pasien dengan No RM: 020773', '2025-02-17 08:10:11'),
(60, 1, 'Mengimpor data pasien dengan No RM: 020833', '2025-02-17 08:10:11'),
(61, 1, 'Mengimpor data pasien dengan No RM: 020837', '2025-02-17 08:10:11'),
(62, 1, 'Mengimpor data pasien dengan No RM: 021023', '2025-02-17 08:10:11'),
(63, 1, 'Mengimpor data pasien dengan No RM: 021024', '2025-02-17 08:10:11'),
(64, 1, 'Mengimpor data pasien dengan No RM: 021074', '2025-02-17 08:10:11'),
(65, 1, 'Mengimpor data pasien dengan No RM: 021217', '2025-02-17 08:10:11'),
(66, 1, 'Mengimpor data pasien dengan No RM: 021634', '2025-02-17 08:10:11'),
(67, 1, 'Mengimpor data pasien dengan No RM: 021636', '2025-02-17 08:10:11'),
(68, 1, 'Mengimpor data pasien dengan No RM: 021977', '2025-02-17 08:10:11'),
(69, 1, 'Mengimpor data pasien dengan No RM: 022176', '2025-02-17 08:10:11'),
(70, 1, 'Mengimpor data pasien dengan No RM: 022259', '2025-02-17 08:10:11'),
(71, 1, 'Mengimpor data pasien dengan No RM: 022260', '2025-02-17 08:10:11'),
(72, 1, 'Mengimpor data pasien dengan No RM: 022501', '2025-02-17 08:10:11'),
(73, 1, 'Mengimpor data pasien dengan No RM: 022609', '2025-02-17 08:10:11'),
(74, 1, 'Mengimpor data pasien dengan No RM: 022686', '2025-02-17 08:10:11'),
(75, 1, 'Mengimpor data pasien dengan No RM: 022751', '2025-02-17 08:10:11'),
(76, 1, 'Mengimpor data pasien dengan No RM: 022894', '2025-02-17 08:10:11'),
(77, 1, 'Mengimpor data pasien dengan No RM: 022897', '2025-02-17 08:10:11'),
(78, 1, 'Mengimpor data pasien dengan No RM: 023009', '2025-02-17 08:10:11'),
(79, 1, 'Mengimpor data pasien dengan No RM: 023021', '2025-02-17 08:10:11'),
(80, 1, 'Mengimpor data pasien dengan No RM: 023232', '2025-02-17 08:10:11'),
(81, 1, 'Mengimpor data pasien dengan No RM: 023472', '2025-02-17 08:10:11'),
(82, 1, 'Mengimpor data pasien dengan No RM: 023564', '2025-02-17 08:10:11'),
(83, 1, 'Mengimpor data pasien dengan No RM: 023789', '2025-02-17 08:10:11'),
(84, 1, 'Mengimpor data pasien dengan No RM: 023838', '2025-02-17 08:10:11'),
(85, 1, 'Mengimpor data pasien dengan No RM: 024178', '2025-02-17 08:10:11'),
(86, 1, 'Mengimpor data pasien dengan No RM: 024188', '2025-02-17 08:10:11'),
(87, 1, 'Mengimpor data pasien dengan No RM: 024208', '2025-02-17 08:10:11'),
(88, 1, 'Mengimpor data pasien dengan No RM: 024271', '2025-02-17 08:10:11'),
(89, 1, 'Mengimpor data pasien dengan No RM: 024361', '2025-02-17 08:10:11'),
(90, 1, 'Mengimpor data pasien dengan No RM: 024362', '2025-02-17 08:10:11'),
(91, 1, 'Mengimpor data pasien dengan No RM: 024446', '2025-02-17 08:10:11'),
(92, 1, 'Mengimpor data pasien dengan No RM: 024548', '2025-02-17 08:10:11'),
(93, 1, 'Mengimpor data pasien dengan No RM: 024758', '2025-02-17 08:10:11'),
(94, 1, 'Mengimpor data pasien dengan No RM: 024872', '2025-02-17 08:10:11'),
(95, 1, 'Mengimpor data pasien dengan No RM: 024897', '2025-02-17 08:10:11'),
(96, 1, 'Mengimpor data pasien dengan No RM: 024928', '2025-02-17 08:10:11'),
(97, 1, 'Mengimpor data pasien dengan No RM: 025108', '2025-02-17 08:10:11'),
(98, 1, 'Mengimpor data pasien dengan No RM: 025137', '2025-02-17 08:10:11'),
(99, 1, 'Mengimpor data pasien dengan No RM: 025328', '2025-02-17 08:10:11'),
(100, 1, 'Mengimpor data pasien dengan No RM: 025355', '2025-02-17 08:10:11'),
(101, 1, 'Mengupload nilai guna pasien dengan ID Pasien: 5 dan status telah diperbarui.', '2025-02-17 08:10:35'),
(102, 1, 'Mengupload nilai guna pasien dengan ID Pasien: 5 dan status telah diperbarui.', '2025-02-17 08:41:57'),
(103, 1, 'Mengupload nilai guna pasien dengan ID Pasien: 5 dan status telah diperbarui.', '2025-02-17 08:44:46'),
(104, 1, 'Mengupload nilai guna pasien dengan ID Pasien: 12 dan status telah diperbarui.', '2025-02-17 10:08:13'),
(105, 1, 'Mengupload nilai guna pasien dengan ID Pasien: 16 dan status telah diperbarui.', '2025-02-17 10:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(16, '2025-02-12-094126', 'App\\Database\\Migrations\\CreatePasienTable', 'default', 'App', 1739425835, 1),
(17, '2025-02-13-024742', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1739425835, 1),
(18, '2025-02-13-040510', 'App\\Database\\Migrations\\CreateLogActivityTable', 'default', 'App', 1739425835, 1),
(20, '2025-02-13-054057', 'App\\Database\\Migrations\\CreateNilaiGunaTable', 'default', 'App', 1739428307, 2),
(24, '2025-02-13-140129', 'App\\Database\\Migrations\\CreateBapTable', 'default', 'App', 1739760488, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_guna`
--

CREATE TABLE `nilai_guna` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `doc_rekam_medis` text DEFAULT NULL,
  `ringk_masuk_keluar` text DEFAULT NULL,
  `resume_medis` text DEFAULT NULL,
  `lembar_pengesahan` text DEFAULT NULL,
  `ident_bayi_lahir` text DEFAULT NULL,
  `persetujuan_medis` text DEFAULT NULL,
  `lembar_kematian` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_guna`
--

INSERT INTO `nilai_guna` (`id`, `id_pasien`, `doc_rekam_medis`, `ringk_masuk_keluar`, `resume_medis`, `lembar_pengesahan`, `ident_bayi_lahir`, `persetujuan_medis`, `lembar_kematian`, `created_at`, `updated_at`) VALUES
(1, 5, 'Ringkasan Masuk dan Keluar, Resume Medis', 'uploads/nilai_guna/5/5_1739754635_ringk_masuk_keluar.pdf', 'uploads/nilai_guna/5/5_1739754635_resume_medis.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 12, 'Ringkasan Masuk dan Keluar', 'uploads/nilai_guna/12/12_1739761693_ringk_masuk_keluar.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 16, 'Ringkasan Masuk dan Keluar, Resume Medis', 'uploads/nilai_guna/16/16_1739762663_ringk_masuk_keluar.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(6) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_pasien` varchar(16) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `dpjp` varchar(50) NOT NULL,
  `tanggal_kunjungan_terakhir` datetime NOT NULL,
  `status` enum('active','inactive','diarsipkan','siapmusnah','dimusnahkan') NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `no_rm`, `nama_pasien`, `tempat_lahir`, `tanggal_lahir`, `nik_pasien`, `jenis_kelamin`, `alamat_lengkap`, `diagnosa`, `dpjp`, `tanggal_kunjungan_terakhir`, `status`, `created_at`, `updated_at`) VALUES
(1, '276812', 'Arsipatra Hasanah', 'Probolinggo', '1972-08-16', '3574142905001000', 'L', 'Paiton', 'Cutaneous abscess, furuncle and carbuncle of trunk', 'dr. MUHAMMAD REZA, M. Biomed, Sp.A, (K)', '2016-02-17 08:24:44', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(2, '391629', 'Kenes Mandala', 'Probolinggo', '1962-07-30', '3544042905120000', 'L', 'Pajarakan', 'General examination and investigation of persons without complaint or reported diagnosis: General medical ecamination', 'dr. SOFIE GIANTARI', '2022-01-25 07:52:07', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(3, '005238', 'Galang Suryatmi', 'Probolinggo', '1989-12-04', '3274042900111000', 'L', 'Besuk', 'Hypertensive heart and renal disease : Hypertensive heart and renal disease with (congestive) heart failure', 'dr. NANIK TRIANA KARTIKASARI, Sp.PD', '2018-03-19 13:11:57', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(4, '009978', 'Ani Prasetyo', 'Jakarta', '1994-09-02', '3574242905001000', 'L', 'Paiton', 'Motorcycle rider injured in noncollision transport accident', 'dr. R FAISAL MUTTAQIEN', '2022-02-19 11:54:31', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(5, '010698', 'Nova Nashiruddin', 'Bandung', '1991-06-08', '3544010905120000', 'P', 'Gending', 'Asthma : Asthma, unspecified', 'dr. INAYATUN NAZLIYAH', '2017-01-02 08:07:26', 'dimusnahkan', '2025-02-17 08:10:11', '2025-02-17 08:44:46'),
(6, '011007', 'Umar Saputra', 'Banyuwangi', '2004-02-07', '3273042900111000', 'L', 'Kraksaan', 'Headache', 'dr. KRESNA NUGRAHA SETIA, Sp.JP', '2023-11-28 07:26:36', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(7, '011091', 'Rudi Laksita', 'Jember', '1948-01-18', '3574142905001000', 'L', 'Paiton', 'Heart failure : Congestive heart failure', 'dr. TRINANDIKA ARDHANA, SpJP.FIHA', '2021-07-14 09:09:39', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(8, '011166', 'Vanesa Iswahyudi', 'Probolinggo', '2000-06-06', '3644042905120000', 'L', 'Besuk', 'Disorders of refraction and accommodation : Presbyopia', 'dr. NIKKE INDRIASARI, SpM', '2020-07-28 08:18:28', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(9, '011341', 'Bella Nuraini', 'Jember', '1952-06-20', '3174042900111000', 'L', 'Banyuanyar', 'Rheumatic fever without mention of heart involvement', 'dr. ISLAH HARWITYASTIKA', '2023-03-18 16:19:49', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(10, '011386', 'Kenzie Lestari', 'Banyuwangi', '1949-05-28', '3514242905001000', 'P', 'Banyuanyar', 'Rheumatic fever without mention of heart involvement', 'dr. ISLAH HARWITYASTIKA', '2023-08-30 08:02:51', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(11, '013205', 'Rahmi Prastuti', 'Situbondo', '2001-11-15', '3534010905120000', 'P', 'Besuk', 'Motorcycle rider injured in noncollision transport accident', 'dr. Ni Made Maya Purnama W', '2018-07-17 08:16:03', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(12, '013280', 'Dewi Saptono', 'Situbondo', '1957-02-08', '3173042900111000', 'P', 'Gending', 'Essential (primary) hypertension', 'dr. SOFIE GIANTARI', '2016-10-07 10:29:56', 'dimusnahkan', '2025-02-17 08:10:11', '2025-02-17 10:08:13'),
(13, '013841', 'Harja Anggriawan', 'Bondowoso', '1968-11-09', '1574142905001000', 'L', 'Kraksaan', 'Epilepsy : Epilepsy, unspecified', 'dr. SATMOKO NUGROHO, SpS', '2020-10-22 08:15:00', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(14, '013993', 'Ridwan Sitoru', 'Probolinggo', '1942-12-15', '2544042905120000', 'P', 'Krejengan', 'Disorders of refraction and accommodation : Myopia', 'dr. NIKKE INDRIASARI, SpM', '2019-02-26 09:00:33', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(15, '014068', 'Laswi Agustina', 'Probolinggo', '1948-07-01', '4274042900111000', 'L', 'Pajarakan', 'Dyspepsia', 'dr. KETUT ARI SUASTAWA, Msc.Sp.PD', '2023-07-25 07:53:14', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(16, '015220', 'Restu Nasyidah', 'Jakarta', '2004-09-07', '3674242905001000', 'P', 'Besuk', 'Acute sinusitis : Acute maxillary sinusitis', 'dr. SONY INDRAYANA KURNIAWAN', '2017-03-14 12:38:33', 'dimusnahkan', '2025-02-17 08:10:11', '2025-02-17 10:24:23'),
(17, '016173', 'Vanya Kuswoyo', 'Surabaya', '1982-02-09', '3548010905120000', 'L', 'Paiton', 'Examination and encounter for administrative purposes: Examination for admission to educational institution', 'dr. SONY INDRAYANA KURNIAWAN', '2021-04-29 09:49:49', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(18, '016323', 'Uchita Firmansyah', 'Jember', '2001-08-03', '3273042900111090', 'L', 'Krejengan', 'Dyspepsia', 'dr. DYAH LUKITO HAYUNINGRUM', '2023-08-04 09:20:28', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(19, '016736', 'Devi Aryani', 'Surabaya', '1980-05-25', '3574142905001080', 'P', 'Maron', 'Bitten or struck by other mammals', 'dr. SOFIE GIANTARI', '2019-02-21 10:30:28', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(20, '016948', 'Asman Zulkarnain', 'Banyuwangi', '1942-01-02', '3644042905120000', 'P', 'Gending', 'Examination and observation for other reasons: Blood-alcohol and blood-drug test', 'dr. SONY INDRAYANA KURNIAWAN', '2023-07-20 08:49:36', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(21, '017117', 'Salsabila Purwanti', 'Pasuruan', '1971-08-21', '3174042900111000', 'P', 'Kraksaan', 'Other disorders of external ear : Impacted cerumen', 'dr. R. NENDYO SUSILO, SpTHT', '2017-04-04 09:22:53', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(22, '017373', 'Jaswadi Prakasa', 'Banyuwangi', '1944-06-07', '3514242905001000', 'L', 'Banyuanyar', 'Otitis externa : Otitis externa, unspecified', 'dr. SONY INDRAYANA KURNIAWAN', '2017-02-06 10:23:47', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(23, '017424', 'Eka Zulkarnain', 'Situbondo', '1989-07-09', '3534010905120000', 'L', 'Krejengan', 'Dislocation, sprain and strain of joints and ligaments of knee : Sprain and strain involving (anterior)(posterior) cruciate', 'dr. A. ZIYADUL HUNAINI EL MUNIF, Sp.OT', '2019-03-11 12:47:00', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(24, '017697', 'Maida Sihombing', 'Bondowoso', '1998-09-30', '3173042900011000', 'P', 'Banyuanyar', 'Non-insulin-dependent diabetes mellitus : With coma', 'dr. NANIK TRIANA KARTIKASARI, Sp.PD', '2022-11-14 09:06:59', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(25, '017744', 'Nadia Natsir', 'Jember', '1967-06-21', '2574142905001000', 'P', 'Gending', 'Inguinal hernia : Unilateral or unspecified Inguinal hernia, with obstruction, without gangrene', 'dr. DANA WANDRIANBARASETA, Sp. An.', '2020-08-11 14:21:56', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(26, '017818', 'Balijan Wijayanti', 'Malang', '1983-09-06', '3564042905120000', 'L', 'Gending', 'Malignant neoplasm of other and ill-defined sites : Head, face and neck', 'dr. SONY INDRAYANA KURNIAWAN', '2017-10-06 11:13:35', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(27, '017929', 'Cornelia Astuti', 'Situbondo', '1972-02-25', '3274042800111000', 'L', 'Paiton', 'Insulin-dependent  diabetes mellitus', 'dr. R. DJOKO PURWANTO, SpPD', '2019-11-27 11:39:42', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(28, '018238', 'Kunthara Narpati', 'Malang', '2007-02-06', '3574242705001000', 'P', 'Besuk', 'Disorders of refraction and accommodation : Presbyopia', 'dr. NIKKE INDRIASARI, SpM', '2018-12-27 09:34:26', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(29, '018362', 'Kani Hariyah', 'Jember', '1988-05-09', '3544018905120000', 'L', 'Paiton', 'Non-insulin-dependent diabetes mellitus', 'dr. R. DJOKO PURWANTO, SpPD', '2020-03-13 08:29:14', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(30, '018363', 'Edi Pranowo', 'Lumajang', '1977-12-19', '3273041900111000', 'P', 'Paiton', 'Motorcycle rider injured in collision with two-or three-wheeled motor vehicle', 'dr. SONY INDRAYANA KURNIAWAN', '2023-08-11 06:20:16', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(31, '018376', 'Cager Melani', 'Jogja', '2002-02-09', '3574142905001000', 'P', 'Pajarakan', 'Abdominal and pelvic pain : Other and unspecified abdominal pain', 'dr. R. DJOKO PURWANTO, SpPD', '2023-09-22 07:48:30', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(32, '018384', 'Drajat Tamba', 'Semarang', '1975-12-24', '3644042905120000', 'L', 'Maron', 'Dorsalgia : Low back pain', 'ERNI ROSITHA BUDIARTI, Amd', '2022-02-19 10:35:11', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(33, '018414', 'Baktiadi Permata', 'Probolinggo', '1967-02-02', '3174042900111000', 'P', 'Maron', 'Senile cataract', 'dr. NIKKE INDRIASARI, SpM', '2017-05-22 07:35:41', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(34, '018661', 'Bagas Dabukke', 'Jakarta', '1963-04-03', '3514242905001000', 'P', 'Besuk', 'Gonarthrosis farthrosis of knee] : Gonarthrosis, unspecified', 'dr. A.A. SAGUNG MAS C., Sp.KFR', '2023-11-29 07:28:43', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(35, '018935', 'Gilda Tarihoran', 'Lumajang', '1990-12-02', '3534010905120000', 'L', 'Paiton', 'General examination and investigation of persons without complaint or reported diagnosis: General medical ecamination', 'dr. SONY INDRAYANA KURNIAWAN', '2022-08-11 11:31:07', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(36, '019025', 'Jamalia Uyainah', 'Jember', '1969-02-14', '3173042900111000', 'L', 'Banyuanyar', 'Other disorders of ear, not elsewhere classified : Tinnitus', 'dr. R. NENDYO SUSILO, SpTHT', '2018-11-28 10:50:52', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(37, '019113', 'Nova Narpati', 'Situbondo', '1992-04-18', '1574142905001000', 'P', 'Gending', 'Diseases of pulp and periapical tissues : Necrosis of pulp', 'drg. AULIYA RAKHMAWATI', '2021-12-28 07:35:18', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(38, '019280', 'Elon Iswahyudi', 'Surabaya', '1969-01-26', '2544042905120000', 'P', 'Krejengan', 'Disorders of lacrimal system : Other disorders of lacrimal gland', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2023-07-28 09:09:50', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(39, '019421', 'Caket Widodo', 'Jakarta', '1942-08-24', '4274042900111000', 'L', 'Banyuanyar', 'Asthma', 'dr. MAULIDA', '2020-02-26 18:53:54', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(40, '019458', 'Puti Prasetya', 'Probolinggo', '1972-11-01', '3674242905001000', 'L', 'Maron', 'Asthma : Asthma, unspecified', 'dr. MAULIDA', '2022-02-18 10:02:53', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(41, '019470', 'Bakianto Lailasari', 'Probolinggo', '1942-05-21', '3548010905120000', 'L', 'Besuk', 'General examination and investigation of persons without complaint or reported diagnosis: General medical ecamination', 'dr. SONY INDRAYANA KURNIAWAN', '2020-06-25 09:01:39', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(42, '019473', 'Harjasa Hassanah', 'Probolinggo', '1956-12-11', '3273042900111090', 'P', 'Maron', 'Glaucoma', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2017-01-19 10:18:52', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(43, '019476', 'Dadi Gunarto', 'Jakarta', '1993-05-19', '3574142905001080', 'L', 'Pajarakan', 'Open wound of head : Open wound of ear', 'dr. SONY INDRAYANA KURNIAWAN', '2019-07-16 09:16:18', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(44, '019480', 'Heru Oktaviani', 'Surabaya', '1983-01-16', '3644042905120010', 'P', 'Besuk', 'Excessive, frequent and irregular menstruation : Excessive and frequent menstruation with irregular cycle', 'dr. R. DJOKO PURWANTO, SpPD', '2021-07-14 08:31:53', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(45, '019683', 'Lidya Purwanti', 'Banyuwangi', '1951-01-20', '3174042900111020', 'P', 'Besuk', 'Disorders of refraction and accommodation : Myopia', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2021-10-29 08:32:23', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(46, '019689', 'Jasmin Safitri', 'Jember', '1996-10-04', '3514242905001000', 'P', 'Krejengan', 'Non-insulin-dependent diabetes mellitus', 'dr. R. DJOKO PURWANTO, SpPD', '2018-07-18 09:23:37', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(47, '019937', 'Himawan Kurniawan', 'Jakarta', '1948-03-10', '3534010905120030', 'P', 'Gending', 'Foreign body in ear', 'dr. R. NENDYO SUSILO, SpTHT', '2017-09-06 11:10:37', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(48, '020026', 'Dono Namaga', 'Probolinggo', '1955-12-16', '3173042900011700', 'L', 'Gending', 'Calculus of kidney and ureter : Urinary calculus, unspecified', 'dr. TOTOK MARDIYANTO, SpB', '2023-11-26 05:40:04', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(49, '020028', 'Eka Pangestu', 'Jakarta', '1952-06-06', '3513105409512000', 'P', 'Banyuanyar', 'Stroke, not specified as haemorrhage or infarction', 'dr.IKA ALIMAWATI. Sp.N', '2022-03-22 07:18:34', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(50, '020172', 'Eko Lailasari', 'Probolinggo', '1952-12-25', '3513121708720010', 'P', 'Gending', 'Fibroblastic disorders : Plantar fascial fibromatosis', 'dr. A.A. SAGUNG MAS C., Sp.KFR', '2021-07-06 08:41:31', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(51, '020194', 'Makuta Yuliarti', 'Probolinggo', '1994-01-21', '3513812301570000', 'P', 'Gending', 'Open wounds involving multiple body regions : Multiple open wounds, unspecified', 'dr. KRESNA NUGRAHA SETIA, Sp.JP', '2020-02-27 10:56:14', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(52, '020310', 'Praba Putra', 'Jember', '1986-11-01', '3513124501690000', 'L', 'Maron', 'Non-insulin-dependent diabetes mellitus : With unspecified complications', 'dr. YULIAWATY SOETIO', '2022-03-08 11:25:22', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(53, '020533', 'Martaka Fujiati', 'Surabaya', '1960-03-20', '3513065902740000', 'P', 'Gending', 'Disorders of refraction and accommodation : Astigmatism', 'dr. DIAN DWI PURNOMO, Sp.M', '2023-08-16 10:00:13', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(54, '020562', 'Rafi Hartati', 'Malang', '1954-11-28', '3513168709880000', 'L', 'Paiton', 'Insulin-dependent  diabetes mellitus : With coma', 'dr. R. DJOKO PURWANTO, SpPD', '2018-06-22 15:49:44', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(55, '020563', 'Latika Rajasa', 'Kediri', '1992-04-08', '3512165604550000', 'L', 'Paiton', 'Gonarthrosis farthrosis of knee] : Gonarthrosis, unspecified', 'dr. R. DJOKO PURWANTO, SpPD', '2021-06-16 10:09:06', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(56, '020569', 'Genta Usamah', 'Kediri', '1981-09-28', '3591316620965070', 'P', 'Gending', 'Non-insulin-dependent diabetes mellitus : With ophthalmic complications', 'dr. NANIK TRIANA KARTIKASARI, Sp.PD', '2019-09-02 08:46:19', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(57, '020571', 'Ina Safitri', 'Bandung', '1984-04-03', '3513076709860000', 'L', 'Gending', 'Open wound of head : Multiple open wounds of head', 'dr. DEWI VERONICA', '2018-10-30 11:13:57', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(58, '020701', 'Intan Nugroho', 'Jember', '1966-12-05', '3523091802420000', 'P', 'Krejengan', 'Disorders of refraction and accommodation : Myopia', 'dr. NIKKE INDRIASARI, SpM', '2017-05-30 10:27:58', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(59, '020773', 'Pranawa Haryanti', 'Probolinggo', '1976-04-16', '3523147010880000', 'P', 'Gending', 'Premature rupture of membranes : Premature rupture of membranes, onset of labour within 24 hours', 'dr. DONNY RAHADIANTO, Sp.OG', '2018-07-20 10:43:10', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(60, '020833', 'Putri Gunawan', 'Madura', '1966-06-27', '3513024308780000', 'P', 'Banyuanyar', 'General examination and investigation of persons without complaint or reported diagnosis: General medical ecamination', 'dr. SOFIE GIANTARI', '2021-05-06 11:16:35', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(61, '020837', 'Adikara Santoso', 'Jakarta', '2007-06-14', '3513145010710000', 'L', 'Banyuanyar', 'Dorsalgia : Low back pain', 'INDAR DWI WAHYUNINGSIH, A.Md.FT', '2019-12-11 14:23:30', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(62, '021023', 'Jais Napitupulu', 'Bandung', '1961-04-16', '3513136608690000', 'P', 'Paiton', 'Disorders of refraction and accommodation : Presbyopia', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2016-08-04 09:26:32', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(63, '021024', 'Sarah Utama', 'Banyuwangi', '1996-05-11', '3510156504530000', 'L', 'Maron', 'Other disorders of external ear : Impacted cerumen', 'dr. R. NENDYO SUSILO, SpTHT', '2020-02-03 08:07:02', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(64, '021074', 'Puput Widodo', 'Jember', '1966-05-10', '3513134107401110', 'P', 'Pajarakan', 'Asthma : Asthma, unspecified', 'dr. DYAH LUKITO HAYUNINGRUM', '2020-02-15 00:11:32', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(65, '021217', 'Najib Widiastuti', 'Probolinggo', '1965-09-28', '3513124107530000', 'P', 'Gending', 'Disorders of sphingolipid metabolism and other lipid storage disorders : Lipid storage disorders, unspecified', 'dr. YULIAWATY SOETIO', '2022-01-06 09:51:18', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(66, '021634', 'Utama Andriani', 'Jember', '1970-09-17', '3513142018630000', 'P', 'Kraksaan', 'Dorsalgia : Low back pain', 'dr. SATMOKO NUGROHO, SpS', '2020-03-17 10:13:51', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(67, '021636', 'Luluh Sihombing', 'Banyuwangi', '2004-02-21', '3513146207970000', 'L', 'Banyuanyar', 'Non-insulin-dependent diabetes mellitus : With peripheral circulatory complications', 'dr. TOTOK MARDIYANTO, SpB', '2023-07-14 20:17:51', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(68, '021977', 'Puti Hesti Purwanti', 'Situbondo', '1999-09-09', '3513003407730000', 'L', 'Banyuanyar', 'Conjunctivitis : Acute atopic conjunctivitis', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2022-07-15 19:40:14', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(69, '022176', 'Saka Suryatmi', 'Situbondo', '1996-09-06', '3613140107490020', 'L', 'Pajarakan', 'Senile cataract : Senile incipient cataract', 'dr. NIKKE INDRIASARI, SpM', '2017-02-13 09:13:14', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(70, '022259', 'Saadat Wijaya', 'Bondowoso', '1971-03-18', '3513050206700000', 'P', 'Gending', 'Supervision of high-risk pregnancy', 'dr. ALAM SYUKUR HIDAYAT, Sp.OG', '2019-02-16 07:49:51', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(71, '022260', 'Unjani Padmasari', 'Probolinggo', '1970-05-29', '3613080107430000', 'L', 'Gending', 'Dislocation, sprain and strain of joints and ligaments at neck level : Sprain and strain of joints and ligaments of other and', 'dr. TOFAN MARGARET DWI SAPUTRO, Sp.OT', '2022-12-16 09:30:07', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(72, '022501', 'Mujur Halim', 'Probolinggo', '1966-11-18', '3531488807820000', 'P', 'Gending', 'Disorders of refraction and accommodation : Myopia', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2020-05-04 20:50:08', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(73, '022609', 'Nalar Yuliarti', 'Pasuruan', '1990-06-09', '3588882208970000', 'L', 'Pakuniran', 'Other viral infections of central nervous systern, not elsewhere classified : Epidemic vertigo', 'dr. MAULIDA', '2022-02-03 08:58:30', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(74, '022686', 'Ajeng Latupono', 'Pacitan', '1949-01-31', '3777144107540000', 'P', 'Paiton', 'Effects of air pressure and water pressure : Other effects of air pressure and water pressure', 'dr. KRESNA NUGRAHA SETIA, Sp.JP', '2018-09-13 09:42:00', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(75, '022751', 'Edison Suryatmi', 'Lumajang', '1952-11-27', '3513455544802700', 'L', 'Pajarakan', 'Non-insulin-dependent diabetes mellitus', 'dr. KETUT ARI SUASTAWA, Msc.Sp.PD', '2018-05-19 10:21:13', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(76, '022894', 'Ibun Suartini', 'Jogja', '1966-05-31', '3513444448027000', 'L', 'Kraksaan', 'Dyspepsia', 'dr. NANIK TRIANA KARTIKASARI, Sp.PD', '2017-01-11 08:03:17', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(77, '022897', 'Jarwi Zulkarnain', 'Semarang', '1978-02-22', '3513145567695700', 'L', 'Gending', 'Disorders of lacrimal system : Other disorders of lacrimal gland', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2021-06-22 10:01:20', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(78, '023009', 'Paulin Dongoran', 'Probolinggo', '1992-03-05', '5675131344100100', 'P', 'Paiton', 'Non-insulin-dependent diabetes mellitus', 'dr. YULIAWATY SOETIO', '2020-11-10 15:24:36', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(79, '023021', 'Dwi Pratiwi', 'Jakarta', '2002-06-18', '3513035607630000', 'L', 'Paiton', 'Fever of unknown origin : Fever, unspecified', 'dr. DANA WANDRIANBARASETA, Sp. An.', '2018-12-06 07:49:02', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(80, '023232', 'Tina Hasanah', 'Lumajang', '1953-05-15', '3513154534720000', 'P', 'Gending', 'Disorders of lipoprotein metabolism and other lipidaemias : Pure hyperrcholesterolaemia', 'dr. RIZKI HABIBIE, Sp. PD', '2021-11-09 07:00:28', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(81, '023472', 'Zelaya Mustofa', 'Jember', '1994-10-07', '3513095609870000', 'L', 'Banyuanyar', 'Glaucoma', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2020-03-13 09:23:53', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(82, '023564', 'Padma Simanjuntak', 'Situbondo', '1975-08-26', '3543318606930000', 'P', 'Pajarakan', 'Dyspepsia', 'dr. ARYOGA SAMUDRA ASMARA', '2019-04-19 21:11:14', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(83, '023789', 'Titi Lazuardi', 'Surabaya', '2002-11-24', '3545575747080100', 'L', 'Besuk', 'Disorders of refraction and accommodation : Presbyopia', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2022-08-08 08:30:09', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(84, '023838', 'Endra Rahayu', 'Jakarta', '1954-07-09', '3174142905001000', 'P', 'Pajarakan', 'Gout : Idiopathic gout', 'dr. R. DJOKO PURWANTO, SpPD', '2018-12-03 10:50:57', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(85, '024178', 'Daliman Marpaung', 'Probolinggo', '1975-01-28', '3244042905120000', 'P', 'Maron', 'Embedded and impacted teeth : Impacted teeth', 'drg. AULIYA RAKHMAWATI', '2023-10-13 08:14:00', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(86, '024188', 'Wasis Saragih', 'Probolinggo', '1943-07-26', '3374042900111000', 'P', 'Banyuanyar', 'Other soft tissue disorders not elsewhere classified : Myalgia', 'ERNI ROSITHA BUDIARTI, Amd', '2016-09-13 09:16:00', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(87, '024208', 'Ulva Sitorus', 'Probolinggo', '1988-01-18', '3474242905001000', 'L', 'Paiton', 'Unspecified appendicitis', 'dr. TOTOK MARDIYANTO, SpB', '2016-10-10 14:34:26', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(88, '024271', 'Eli Wibisono', 'Jakarta', '1967-10-07', '3444010905120000', 'L', 'Besuk', 'Typhoid and paratyphoid fevers : Typhoid fever', 'dr. TOTOK MARDIYANTO, SpB', '2018-09-17 11:31:11', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(89, '024361', 'Tari Hidayat', 'Surabaya', '1949-12-09', '3573142900111000', 'L', 'Maron', 'Intracranial injury : Concussion', 'dr. KRESNA NUGRAHA SETIA, Sp.JP', '2022-10-30 00:27:51', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(90, '024362', 'Karman Natsir', 'Banyuwangi', '1982-12-01', '3674142905001000', 'L', 'Gending', 'Diseases of pulp and periapical tissues : Necrosis of pulp', 'drg. AULIYA RAKHMAWATI', '2023-10-13 08:15:00', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(91, '024446', 'Lalita Megantara', 'Jember', '1966-04-14', '3744042905120000', 'L', 'Gending', 'Vasomotor and allergic rhinitis', 'dr. R. NENDYO SUSILO, SpTHT', '2023-10-02 08:39:29', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(92, '024548', 'Unggul Prayoga', 'Jakarta', '1979-06-16', '3874042900111000', 'L', 'Kraksaan', 'Examination and encounter for administrative purposes: Examination for admission to educational institution', 'dr. SOFIE GIANTARI', '2018-06-28 10:25:25', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(93, '024758', 'Genta Rahmawati', 'Banyuwangi', '1944-05-13', '3914242905001000', 'L', 'Kraksaan', 'Diarrhoea and gastroenteritis of presumed infectious origin', 'dr. DANA WANDRIANBARASETA, Sp. An.', '2016-09-28 09:49:20', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(94, '024872', 'Sadina Nasyidah', 'Pasuruan', '1971-08-12', '3534010905120110', 'L', 'Paiton', 'Disorders of refraction and accommodation : Presbyopia', 'dr. NIKKE INDRIASARI, SpM', '2020-03-05 08:23:09', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(95, '024897', 'Sutan Gamani Gunawan', 'Banyuwangi', '1968-04-23', '3173042907771000', 'L', 'Maron', 'Chorioretinal inflammation : Focal chorioretinal inflammation', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2017-05-17 07:35:46', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(96, '024928', 'Endah Susanti', 'Situbondo', '1973-11-20', '1574142455501000', 'L', 'Banyuanyar', 'Non-insulin-dependent diabetes mellitus : With unspecified complications', 'dr. YULIAWATY SOETIO', '2016-02-02 20:09:22', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(97, '025108', 'Ayu Suartini', 'Bondowoso', '1993-04-08', '2544041235120000', 'P', 'Pajarakan', 'Acne keloid', 'dr. TOTOK MARDIYANTO, SpB', '2017-12-28 19:24:16', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(98, '025137', 'Icha Nababan', 'Jember', '1953-02-08', '4274043450111000', 'L', 'Besuk', 'Senile cataract', 'dr. ENDAH SRIWAHYUNI, Sp.M', '2017-07-13 07:54:49', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(99, '025328', 'Dacin Rajasa', 'Malang', '1966-05-28', '3674242345001000', 'P', 'Gending', 'Disorders of refraction and accommodation : Presbyopia', 'dr. NIKKE INDRIASARI, SpM', '2018-08-07 10:24:21', 'inactive', '2025-02-17 08:10:11', '2025-02-17 08:10:11'),
(100, '025355', 'Cemeti Tamba', 'Probolinggo', '1949-12-29', '3238010905120000', 'P', 'Besuk', 'Superficial injury of abdomen, lower back and : Other superficial Injuries of abdomen, lower back and', 'dr. R. DJOKO PURWANTO, SpPD', '2022-02-23 08:22:32', 'active', '2025-02-17 08:10:11', '2025-02-17 08:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('petugas','kepala') NOT NULL DEFAULT 'petugas',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'kepala', 'kepala', '$2y$10$tjul7QFa3QCxuPOrB2q3NORE4CPA.y.sMeJJyNHXmPZoY.WEVOPQu', 'kepala', '2025-02-13 12:50:58', '2025-02-13 12:50:58'),
(2, 'petugas', 'petugas', '$2y$10$/IOmM.2hSKdfuPwU6s/ef.7Fmtift5lNrUWbykLA6xC9DXcl4Xp6W', 'petugas', '2025-02-13 12:51:06', '2025-02-13 12:51:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bap`
--
ALTER TABLE `bap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_activity_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_guna`
--
ALTER TABLE `nilai_guna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_guna_id_pasien_foreign` (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_rm` (`no_rm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bap`
--
ALTER TABLE `bap`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nilai_guna`
--
ALTER TABLE `nilai_guna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD CONSTRAINT `log_activity_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_guna`
--
ALTER TABLE `nilai_guna`
  ADD CONSTRAINT `nilai_guna_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
