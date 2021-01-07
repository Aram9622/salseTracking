-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 07, 2021 at 07:40 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salestracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_card` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `credit_card_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_package` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `event`, `email`, `address`, `phone`, `country`, `state`, `city`, `zip_code`, `credit_card`, `credit_card_number`, `card_holder_name`, `cvv`, `expire_month`, `expire_year`, `select_package`, `created_at`, `updated_at`) VALUES
(3, 'HH', 'HHI', 'HH', 'galenteryan@gmail.com2333', 'Margaryan', '8520963', 'val-2', 'HH', 'HH', '123', 'visa', '875412', '5632', '123', '3', '2018', 'gold', '2020-12-24 12:36:14', '2020-12-24 12:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_24_131650_create_clients_table', 2);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mirzoyanaram90@gmail.com', '$2y$10$v9ulrvD9zwvvOIqszHR3R.LKWO.YkroAhWIQZAqM8If1oXTYsWz7.', '2020-12-17 09:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physical_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lllp_trusts` enum('on','off') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_card` text COLLATE utf8mb4_unicode_ci,
  `credit_card_number` text COLLATE utf8mb4_unicode_ci,
  `card_holder_name` text COLLATE utf8mb4_unicode_ci,
  `cvv` text COLLATE utf8mb4_unicode_ci,
  `expiry_month` text COLLATE utf8mb4_unicode_ci,
  `expiry_year` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `phone`, `physical_address`, `zip_code`, `npn`, `lllp_trusts`, `email_verified_at`, `password`, `credit_card`, `credit_card_number`, `card_holder_name`, `cvv`, `expiry_month`, `expiry_year`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aram', 'Gevorgyan', 'mirzoyanaram90@gmail.com', '+37494203065', 'Yerevan Armenia', '123', '354254', 'on', NULL, '$2y$10$M06vKuAEBhffb8uOoT50qOxtyR6ZfrbM9fi2EyTDsprrb78g7BiQq', 'visa', '8652652152', '512531051', '123', '1', '2020', '47398137_2224187487822944_834007229257482240_o.jpg', NULL, '2020-12-15 06:11:10', '2020-12-25 10:04:48'),
(2, 'Gev', 'Mirzoyan', 'miroyangev@gmail.com', '445526263523', 'Yerevan', '132', '852310', 'on', NULL, '$2y$10$.TX3TpfiWkImnX8TpF5Ekuww9mXvWGtcPn8bvtmE7koeyb/0xtd3.', 'visa', '6531235120', '3513521032', '45152563', '1', '2020', '47398137_2224187487822944_834007229257482240_o.jpg', NULL, '2020-12-16 11:51:09', '2020-12-28 05:35:23'),
(3, 'Vzgo', 'Mirzoyan', 'vzgo@vzgo.com', '445513513532', 'Yerevan', '123', '5165262', 'off', NULL, '$2y$10$PriI7PrbXcL638Eyx83SseZrrRuLcSU1lfsOAlNV4xhEttXssUiIm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-17 02:31:10', '2020-12-17 02:31:10'),
(4, 'Aram', 'Mirzoyan', 'mirzoyanaram@gmail.com', '8520963', 'Yerevan', '123', '85252052', 'on', NULL, '$2y$10$LoM6iGNVFCXYpaZwFXHPee3gMNRnotzIPY48bulsr8hCk6QrnIaPi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-30 09:06:54', '2020-12-30 09:06:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
