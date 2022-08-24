-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 02:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `nama`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'sri', '2022-04-26', 'hadir', '2022-04-26 06:31:58', '2022-04-26 06:31:58'),
(2, 'user1', '2022-04-26', 'izin', '2022-04-26 06:36:00', '2022-04-26 06:36:00'),
(3, 'tes', '2022-04-26', 'hadir', '2022-04-26 06:37:35', '2022-04-26 06:37:35'),
(4, 'tes', '2022-04-26', 'alfa', '2022-04-26 06:40:25', '2022-04-26 06:40:25'),
(5, 'srilindays', '2022-05-11', 'hadir', '2022-05-11 05:33:28', '2022-05-11 05:33:28'),
(6, 'riana', '2022-08-06', 'hadir', '2022-08-06 02:40:08', '2022-08-06 02:40:08'),
(7, 'riana', '2022-08-06', 'hadir', '2022-08-06 02:40:13', '2022-08-06 02:40:13'),
(8, 'riana', '2022-08-06', 'hadir', '2022-08-06 02:40:18', '2022-08-06 02:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sdanr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pushup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `squat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curlup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`id`, `user_id`, `sdanr`, `sr`, `plank`, `pushup`, `spu`, `squat`, `curlup`, `keterangan`, `created_at`, `updated_at`) VALUES
(46, 26, '20', '60', '12', '13', '14', '16', '11', 'good', '2022-08-06 02:37:46', '2022-08-06 02:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `bodyfitts`
--

CREATE TABLE `bodyfitts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kgs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bodyfitts`
--

INSERT INTO `bodyfitts` (`id`, `user_id`, `kgs`, `rep`, `created_at`, `updated_at`) VALUES
(1, 12, '4', '4', '2022-08-09 07:49:24', '2022-08-09 07:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nohp_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(5, 6, 'push up', '2022-04-13', '2022-04-14', '2022-04-19 11:49:33', '2022-04-25 11:46:57'),
(6, 6, 'lari', '2022-04-25', '2022-04-26', '2022-04-25 11:47:27', '2022-04-25 11:47:27'),
(7, 6, 'berenang', '2022-04-25', '2022-04-26', '2022-04-25 11:47:37', '2022-04-25 11:47:37'),
(10, 26, 'push up', '2022-07-31', '2022-08-01', '2022-08-06 02:36:11', '2022-08-06 02:36:11'),
(11, 26, 'work out', '2022-08-09', '2022-08-10', '2022-08-06 02:36:50', '2022-08-06 02:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locations_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_mkn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foodchefs`
--

CREATE TABLE `foodchefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nohp_fc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iurans`
--

CREATE TABLE `iurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latihans`
--

CREATE TABLE `latihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_latihan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_latihan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_latihan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_latihan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_latihan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latihans`
--

INSERT INTO `latihans` (`id`, `created_at`, `updated_at`, `nama_latihan`, `tanggal_latihan`, `tempat_latihan`, `waktu_latihan`, `kategori_latihan`) VALUES
(1, '2022-04-20 10:24:38', '2022-04-20 10:24:38', 'asd', '2022-04-14', 'asd', 'asd', 'Tunggal');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nohp_lk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2021_05_07_173958_create_sessions_table', 1),
(10, '2021_05_20_154711_create_reservations_table', 1),
(11, '2021_05_22_182742_create_chefs_table', 1),
(12, '2021_05_24_173716_create_foodchefs_table', 1),
(13, '2021_06_02_192654_create_tests_table', 1),
(14, '2021_06_04_145153_create_carts_table', 1),
(15, '2021_07_11_053537_create_orders_table', 1),
(16, '2021_11_21_085730_create_location_table', 1),
(17, '2021_11_21_173956_create_food_table', 1),
(18, '2021_11_25_095729_add_nohp_lk_to_locations', 1),
(19, '2021_11_25_095952_add_nohp_fc_to_foodchefs', 1),
(20, '2021_11_25_100420_add_nohp_c_to_chefs', 1),
(21, '2021_11_25_150842_add_kategori_mkn_to_food', 1),
(22, '2022_01_25_203856_create_latihan_table', 1),
(23, '2022_01_26_051327_create_absensi_table', 1),
(24, '2022_01_26_090610_create_iurans_table', 1),
(25, '2022_04_19_073702_create_events_table', 1),
(26, '2022_04_19_081953_create_assessment_table', 2),
(27, '2022_04_20_060405_create_ukurs_table', 3),
(28, '2022_04_26_131317_create_bodyfitts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Member', '2022-08-24 10:27:56', '2022-08-24 10:27:56'),
(2, 'Trainer', '2022-08-24 10:27:56', '2022-08-24 10:27:56'),
(3, 'Pengelola', '2022-08-24 10:27:56', '2022-08-24 10:27:56'),
(4, 'Administrator', '2022-08-24 10:27:56', '2022-08-24 10:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ukurs`
--

CREATE TABLE `ukurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bmi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukurs`
--

INSERT INTO `ukurs` (`id`, `user_id`, `bd`, `b`, `vf`, `cd`, `bmi`, `ma`, `sf`, `t`, `a`, `l`, `c`, `w`, `h`, `th`, `calf`, `arm`, `fa`, `created_at`, `updated_at`) VALUES
(3, 10, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2022-06-01 04:55:24', '2022-06-01 04:55:24'),
(4, 26, '70', '80', '87', '110', '670', '67', '7678', '76', '76', '87', '87', '87', '87', '76', '76', '76', '76', '2022-08-06 02:38:44', '2022-08-06 02:38:44'),
(5, 12, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '2022-08-09 07:44:59', '2022-08-09 07:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_sampai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_tf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk_user` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomer_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT 'pp-demo.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `usertype`, `email`, `member_sampai`, `trainer`, `email_verified_at`, `password`, `bukti_tf`, `jk_user`, `tgl_lahir`, `alamat`, `nomer_hp`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'a', '', '1', 'a@a', NULL, NULL, NULL, '123123123\r\n', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'salman', '', '1', 'a@gmail.com', NULL, NULL, NULL, '123123123', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 'alip', '', '1', 'alip@gmail.com', NULL, NULL, NULL, '$2y$10$pfRP1NrXCgE3ibjGDk8Fb.EIwEPeUolhEEGGvrkdJROuErnuoJgOe', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2022-04-19 11:46:06', '2022-04-19 11:46:06'),
(5, 1, 'egan', '', '1', 'e@gmail.com', NULL, NULL, NULL, '$2y$10$skYn1qo0ehnRrr1n.AyHjuQN4BIFvX9rfCl2lIaGnuj1/kh5HrgDi', NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2022-04-22 11:35:20', '2022-04-22 11:35:20'),
(6, 1, 'user1', '', '2', 'user@gmail.com', '2022-05-25 07:51:16', NULL, NULL, '$2y$10$sGn.DA.96xjEyTEZXD.7zuWRuO02itdhW/qrLD6Dxrl8Eofkix1qa', '1650873076.jpg', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2022-04-25 11:44:07', '2022-04-25 11:51:16'),
(7, 1, 'tes', '', '2', 'tes@gmail.com', '2022-05-26 13:37:27', NULL, NULL, '$2y$10$0MtNMd4zOdq5LK63kqIGieOy6LTGVQhaFVUBTQJH3DXQYexnOUuMm', '1650980247.png', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2022-04-26 06:37:07', '2022-04-26 06:37:27'),
(8, 1, 'srilindays', '', '2', 'sril@gmail.com', '2022-06-11 12:21:39', 'Juani Ft', NULL, '$2y$10$V5t7n0TPYwLJHu1n5r.65eE0cPZZB1e9rHxFemCVG0SyxviNSJFNy', '1652271699.png', '', '', '', '', NULL, NULL, NULL, NULL, '1658400585.jpeg', '2022-05-11 05:20:41', '2022-05-11 05:22:21'),
(10, 1, 'user10', '', '2', '10@gmail.com', '2022-07-01 11:23:51', NULL, NULL, '$2y$10$lSspKqTHWLMquxyZPnmTU.T/JsC7E.znsAgA8iGwo91VygkEo8S/u', '1654082631.jpg', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2022-06-01 03:23:32', '2022-06-01 04:23:51'),
(12, 1, 'tester', 'aaaa', '2', 'tester@tester', '2022-08-21 07:05:26', NULL, NULL, '$2y$10$ktQg.JpVPUmcDV2VKUkFRukg5YAcc4K.WBrperWyl5c/mhEY.VMLm', '1658387126.jpg', 'Laki-Laki', '2022-07-21', 'aaaa', 'aaa', NULL, NULL, NULL, NULL, '1658400585.jpeg', '2022-07-20 23:49:33', '2022-07-21 03:49:45'),
(22, 1, 'sria', NULL, '1', 'sria@gmail.com', NULL, NULL, NULL, '$2y$10$sSR8iDV7SlhIUC2vdNI97e/Gvo.ZijjdTQ3SV0t87Yu2wKaqovEMu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp-demo.png', '2022-07-21 21:07:26', '2022-07-21 21:07:26'),
(23, 1, 'aku', NULL, '1', 'aku@aku', NULL, NULL, NULL, '$2y$10$MXVrjmv6dA/ceDcXXmKTwOoABBt4lqklhTluHvK2.SrCLjsShfvEi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp-demo.png', '2022-07-21 21:17:04', '2022-07-21 21:17:04'),
(24, 1, 'riri', 'rianashinta', '2', 'riri@gmail.com', '2022-08-22 12:10:49', 'Juani Ft', NULL, '$2y$10$MCfI2yaTobOgwLlsMZvRsuAQBrYEIYf1P0iF6IpkIDNlgU5MXvLxy', '1658491849.jpg', 'Perempuan', '2022-07-27', 'Bandung', '0899999999999', NULL, NULL, NULL, NULL, '1658492009.jpg', '2022-07-22 05:10:12', '2022-07-22 05:13:29'),
(25, 1, 'testing', NULL, '1', 'testing@gmail.com', NULL, NULL, NULL, '$2y$10$q2GB1Mx6LvYqbY0lTxWy1ef.dNYKHeXzFzjh0blYQXzfZt/U/qPdC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp-demo.png', '2022-08-01 21:24:45', '2022-08-01 21:24:45'),
(26, 1, 'riana', 'rianashinta', '2', 'riana@gmail.com', '2022-09-06 09:34:24', 'Juani Ft', NULL, '$2y$10$SGlJ9UdfwVZBIU8WgNE.7OBMCEoUBthF7/U0o4BMHRaU5UzBAr9Nm', '1659778464.jpg', 'Perempuan', '2022-08-17', 'Bandung', '08999101010', NULL, NULL, NULL, NULL, '1659778545.jpg', '2022-08-06 02:33:37', '2022-08-06 02:40:33'),
(27, 1, 'ci', NULL, '1', 'ci@gmail.com', NULL, NULL, NULL, '$2y$10$QjrGD2PsDHt/vCTq5ZNBAOlB/sxN38zg02jyENxzKYYJ1eGt5yaEe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp-demo.png', '2022-08-11 11:25:55', '2022-08-11 11:25:55'),
(28, 1, 'tal', 'tal', '2', 'tal@gmail.com', '2022-09-11 18:54:00', NULL, NULL, '$2y$10$smxLeHyZZ8m5uCrrHasSX.bB6DJvpr0vU2uB82i8gzZHfPRjJIkaO', '1660244040.jpeg', 'Perempuan', '2022-08-02', 'tal', '1111111111', NULL, NULL, NULL, NULL, '1660243303.jpeg', '2022-08-11 11:29:19', '2022-08-11 11:54:00'),
(29, 2, 'Abdiel', NULL, '2', 'abdiel@gmail.com', NULL, NULL, NULL, '$2y$10$cqtIOL5mOQnxKLJdDCqUeO9x1fCG6vkTC6V5GINjteQz4f0ZPPsXK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp-demo.png', '2022-08-23 22:50:38', '2022-08-23 22:50:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bodyfitts`
--
ALTER TABLE `bodyfitts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_locations_id_foreign` (`locations_id`);

--
-- Indexes for table `foodchefs`
--
ALTER TABLE `foodchefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iurans`
--
ALTER TABLE `iurans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latihans`
--
ALTER TABLE `latihans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `ukurs`
--
ALTER TABLE `ukurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bodyfitts`
--
ALTER TABLE `bodyfitts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukurs`
--
ALTER TABLE `ukurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
