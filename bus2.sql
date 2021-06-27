-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2021 at 12:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus2`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

DROP TABLE IF EXISTS `buses`;
CREATE TABLE IF NOT EXISTS `buses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats_num` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `number`, `name`, `seats_num`, `created_at`, `updated_at`) VALUES
(1, 5458, 'FirstBus', 12, '2021-06-26 18:20:13', '2021-06-26 18:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lines`
--

DROP TABLE IF EXISTS `lines`;
CREATE TABLE IF NOT EXISTS `lines` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `start` int(10) UNSIGNED NOT NULL,
  `end` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lines_start_foreign` (`start`),
  KEY `lines_end_foreign` (`end`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lines`
--

INSERT INTO `lines` (`id`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2021-06-26 18:20:30', '2021-06-26 18:20:30'),
(2, 2, 3, '2021-06-26 18:20:30', '2021-06-26 18:20:30'),
(3, 3, 4, '2021-06-26 18:20:30', '2021-06-26 18:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_06_25_232641_create_roles_table', 1),
(6, '2021_06_26_133746_create_stations_table', 1),
(7, '2021_06_26_134019_create_buses_table', 1),
(8, '2021_06_26_144747_create_trips_table', 1),
(9, '2021_06_26_145325_create_lines_table', 1),
(10, '2021_06_26_150511_create_schedules_table', 1),
(11, '2021_06_26_151350_create_seats_table', 1),
(12, '2021_06_26_152524_create_tickets_table', 1),
(13, '2021_06_26_155111_create_reservations_table', 1),
(14, '2021_06_26_231128_create_trip_lines_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'authToken', '5febd5e59082dc1ae01f8ea34b5553db00de39b6d1e0184fdc1db096c416404e', '[\"*\"]', '2021-06-26 22:45:12', '2021-06-26 18:47:37', '2021-06-26 22:45:12'),
(2, 'App\\Models\\User', 4, 'authToken', 'aa23692c7a0e1156ad6c9dfd8e939a40b0ffb5aac3ebacf92e177ce2b2a9a474', '[\"*\"]', NULL, '2021-06-26 18:48:19', '2021-06-26 18:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `seat_id` int(10) UNSIGNED NOT NULL,
  `line_id` int(10) UNSIGNED NOT NULL,
  `start` int(10) UNSIGNED NOT NULL,
  `end` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED DEFAULT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservations_seat_id_foreign` (`seat_id`),
  KEY `reservations_line_id_foreign` (`line_id`),
  KEY `reservations_start_foreign` (`start`),
  KEY `reservations_end_foreign` (`end`),
  KEY `reservations_ticket_id_foreign` (`ticket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `seat_id`, `line_id`, `start`, `end`, `ticket_id`, `available`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, NULL, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(2, 1, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(3, 1, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(4, 2, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(5, 2, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(6, 2, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(7, 3, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(8, 3, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(9, 3, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(10, 4, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(11, 4, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(12, 4, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(13, 5, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(14, 5, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(15, 5, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(16, 6, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(17, 6, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(18, 6, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(19, 7, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(20, 7, 2, 2, 3, NULL, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(21, 7, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(22, 8, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(23, 8, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(24, 8, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(25, 9, 1, 1, 2, 1, 1, '2021-06-26 18:20:49', '2021-06-26 22:45:12'),
(26, 9, 2, 2, 3, 1, 1, '2021-06-26 18:20:49', '2021-06-26 22:45:12'),
(27, 9, 3, 3, 4, 1, 1, '2021-06-26 18:20:49', '2021-06-26 22:45:12'),
(28, 10, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(29, 10, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(30, 10, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(31, 11, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(32, 11, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(33, 11, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(34, 12, 1, 1, 2, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(35, 12, 2, 2, 3, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(36, 12, 3, 3, 4, NULL, 0, '2021-06-26 18:20:49', '2021-06-26 18:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-06-25 21:50:02', '2021-06-25 21:50:02'),
(2, 'user', '2021-06-25 21:50:14', '2021-06-25 21:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `schedules_bus_id_foreign` (`bus_id`),
  KEY `schedules_trip_id_foreign` (`trip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `name`, `bus_id`, `trip_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'cairo-asyut26', 1, 1, '2021-06-26', '2021-06-26 18:20:49', '2021-06-26 18:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `number`, `bus_id`, `schedule_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(2, 2, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(3, 3, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(4, 4, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(5, 5, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(6, 6, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(7, 7, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(8, 8, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(9, 9, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(10, 10, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(11, 11, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49'),
(12, 12, 1, 1, '2021-06-26 18:20:49', '2021-06-26 18:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cairo', '2021-06-26 18:19:12', '2021-06-26 18:19:12'),
(2, 'AlFayyum', '2021-06-26 18:19:29', '2021-06-26 18:19:29'),
(3, 'AlMinya', '2021-06-26 18:19:40', '2021-06-26 18:19:40'),
(4, 'Asyut', '2021-06-26 18:19:52', '2021-06-26 18:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `schedule_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `seat_id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tickets_schedule_id_foreign` (`schedule_id`),
  KEY `tickets_seat_id_foreign` (`seat_id`),
  KEY `tickets_bus_id_foreign` (`bus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `schedule_id`, `user_id`, `seat_id`, `bus_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 9, 1, '2021-06-26 22:45:12', '2021-06-26 22:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` int(10) UNSIGNED DEFAULT NULL,
  `end` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `name`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'cairo-asyut', 1, 4, '2021-06-26 18:20:30', '2021-06-26 18:20:30'),
(2, 'cairo-fayyum', 1, 2, '2021-06-26 21:48:53', '2021-06-26 21:48:53'),
(3, 'cairo-minya', 1, 3, '2021-06-26 21:50:45', '2021-06-26 21:50:45'),
(4, 'fayyum-minya', 2, 3, '2021-06-26 21:51:08', '2021-06-26 21:51:08'),
(5, 'fayyum-asyut', 2, 4, '2021-06-26 21:51:40', '2021-06-26 21:51:40'),
(6, 'minya-asyut', 3, 4, '2021-06-26 21:52:12', '2021-06-26 21:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `trip_lines`
--

DROP TABLE IF EXISTS `trip_lines`;
CREATE TABLE IF NOT EXISTS `trip_lines` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `line_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_lines`
--

INSERT INTO `trip_lines` (`id`, `trip_id`, `line_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-06-26 21:48:53', '2021-06-26 21:48:53'),
(2, 1, 1, '2021-06-26 21:48:53', '2021-06-26 21:48:53'),
(3, 1, 2, '2021-06-26 21:48:53', '2021-06-26 21:48:53'),
(4, 1, 3, '2021-06-26 21:48:53', '2021-06-26 21:48:53'),
(5, 3, 1, '2021-06-26 21:50:45', '2021-06-26 21:50:45'),
(6, 3, 2, '2021-06-26 21:50:45', '2021-06-26 21:50:45'),
(7, 4, 2, '2021-06-26 21:51:08', '2021-06-26 21:51:08'),
(9, 5, 2, '2021-06-26 21:51:40', '2021-06-26 21:51:40'),
(10, 5, 3, '2021-06-26 21:51:40', '2021-06-26 21:51:40'),
(11, 6, 3, '2021-06-26 21:52:12', '2021-06-26 21:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '2',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'admin@admin.com', NULL, '$2y$10$22REmqBypnIC2lbj.13HRu.36lh6.oX3FHuirPHG7YBPGm6nnffVC', NULL, '2021-06-25 21:46:00', '2021-06-25 21:46:00'),
(3, 'Evan Lester', 2, 'pytovo@mailinator.com', NULL, '$2y$10$JxewYkCJdPPQhnWP93g2j.ma2VZcoiEPdQHw9V59SnIsEmYyQgfk.', NULL, '2021-06-25 22:51:28', '2021-06-25 22:51:28'),
(4, 'abdo', 2, 'abdo1@admin.com', NULL, '$2y$10$4xV8AU5BljWkDpaH7/jcnuuI/RPPl4xMk91X13PppXxCif9yCuWFa', NULL, '2021-06-26 18:48:19', '2021-06-26 18:48:19');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lines`
--
ALTER TABLE `lines`
  ADD CONSTRAINT `lines_end_foreign` FOREIGN KEY (`end`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `lines_start_foreign` FOREIGN KEY (`start`) REFERENCES `stations` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_end_foreign` FOREIGN KEY (`end`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `reservations_line_id_foreign` FOREIGN KEY (`line_id`) REFERENCES `lines` (`id`),
  ADD CONSTRAINT `reservations_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`),
  ADD CONSTRAINT `reservations_start_foreign` FOREIGN KEY (`start`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `reservations_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`),
  ADD CONSTRAINT `schedules_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`),
  ADD CONSTRAINT `tickets_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`),
  ADD CONSTRAINT `tickets_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
