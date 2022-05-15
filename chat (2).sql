-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 08:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_favorites`
--

INSERT INTO `ch_favorites` (`id`, `user_id`, `favorite_id`, `created_at`, `updated_at`) VALUES
(14887969, 1, 2, '2022-03-11 04:30:25', '2022-03-11 04:30:25'),
(28372821, 2, 1, '2022-03-28 05:42:28', '2022-03-28 05:42:28'),
(96829567, 2, 3, '2022-03-28 05:40:20', '2022-03-28 05:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(1666498153, 'user', 3, 8, 'yes test', NULL, 1, '2022-04-10 07:49:30', '2022-04-10 07:49:31'),
(1669212675, 'user', 10, 5, 'hi how are you', NULL, 0, '2022-04-15 12:58:59', '2022-04-15 12:58:59'),
(1673835001, 'user', 1, 1, 'hi', NULL, 1, '2022-03-24 04:46:05', '2022-03-24 04:46:05'),
(1692146020, 'user', 3, 8, 'okey', NULL, 1, '2022-04-10 07:53:30', '2022-04-10 07:53:31'),
(1698279764, 'user', 2, 1, 'boll', NULL, 1, '2022-03-24 06:53:00', '2022-03-24 06:53:01'),
(1744387349, 'user', 8, 3, 'hi', NULL, 1, '2022-04-09 13:12:27', '2022-04-09 13:13:13'),
(1750856279, 'user', 3, 9, 'hiw are yout', NULL, 0, '2022-04-09 13:13:38', '2022-04-09 13:13:38'),
(1777842296, 'user', 1, 2, 'he', NULL, 1, '2022-03-24 06:10:50', '2022-03-24 06:10:52'),
(1800795057, 'user', 1, 2, 'main thek jn', NULL, 1, '2022-03-24 13:19:14', '2022-03-24 13:19:15'),
(1811311060, 'user', 8, 3, 'hi', NULL, 1, '2022-04-10 00:59:52', '2022-04-10 00:59:53'),
(1811917795, 'user', 7, 3, 'Heloo Abdullah', NULL, 0, '2022-04-06 10:06:01', '2022-04-06 10:06:01'),
(1819637380, 'user', 2, 1, 'hekoo', NULL, 0, '2022-03-28 05:38:18', '2022-03-28 05:38:18'),
(1828750010, 'user', 2, 2, 'hi', NULL, 1, '2022-03-24 05:38:00', '2022-03-24 05:38:01'),
(1829090754, 'user', 1, 2, 'hello', NULL, 1, '2022-03-24 06:10:48', '2022-03-24 06:10:52'),
(1871664139, 'user', 2, 1, 'sdfsdf', NULL, 1, '2022-03-24 13:29:59', '2022-03-24 13:30:00'),
(1877143945, 'user', 3, 8, 'hi', NULL, 1, '2022-04-09 13:13:25', '2022-04-09 13:13:27'),
(1923273665, 'user', 1, 2, 'hello', NULL, 1, '2022-03-24 06:10:53', '2022-03-24 06:10:56'),
(1957296876, 'user', 2, 1, 'han', NULL, 1, '2022-03-24 05:35:10', '2022-03-24 05:35:10'),
(2003705140, 'user', 9, 5, 'kasy ooo', NULL, 1, '2022-04-22 12:04:37', '2022-04-22 15:04:27'),
(2010183391, 'user', 2, 2, 'hi kasy hoo noman', NULL, 1, '2022-03-28 05:16:22', '2022-03-28 05:16:25'),
(2013651433, 'user', 2, 3, 'kasy hoo', NULL, 1, '2022-03-25 08:31:18', '2022-03-25 08:31:23'),
(2021712289, 'user', 8, 1, 'hi', NULL, 0, '2022-04-09 13:09:30', '2022-04-09 13:09:30'),
(2033429928, 'user', 2, 1, 'kya hoo raha ha', NULL, 1, '2022-03-24 04:42:11', '2022-03-24 04:42:12'),
(2047063072, 'user', 5, 5, 'hi how are you arslan', NULL, 1, '2022-03-30 10:17:53', '2022-03-30 10:17:54'),
(2082798402, 'user', 1, 2, 'main b thek hn', NULL, 1, '2022-03-24 04:41:50', '2022-03-24 04:41:51'),
(2111920906, 'user', 1, 2, 'hello', NULL, 1, '2022-03-24 06:10:29', '2022-03-24 06:10:52'),
(2126406039, 'user', 5, 9, 'Heloo khaid', NULL, 1, '2022-04-22 15:04:33', '2022-04-22 15:05:29'),
(2147854560, 'user', 1, 2, 'helo noman', NULL, 1, '2022-03-23 03:49:55', '2022-03-24 04:40:53'),
(2200437396, 'user', 9, 9, 'Helo khalid', NULL, 1, '2022-04-22 14:19:07', '2022-04-22 14:19:07'),
(2236829917, 'user', 1, 2, 'hello noman', NULL, 1, '2022-03-24 04:40:00', '2022-03-24 04:40:53'),
(2253481951, 'user', 3, 2, 'how are u !', NULL, 0, '2022-03-30 09:58:04', '2022-03-30 09:58:04'),
(2280550849, 'user', 1, 2, 'sdfs', NULL, 1, '2022-03-24 13:30:11', '2022-03-24 13:30:12'),
(2289579137, 'user', 9, 5, 'heloo noman', NULL, 1, '2022-04-22 11:46:13', '2022-04-22 15:04:27'),
(2328644843, 'user', 8, 3, 'heloo', NULL, 1, '2022-04-10 07:48:35', '2022-04-10 07:49:24'),
(2335510113, 'user', 3, 8, 'hi', NULL, 1, '2022-04-10 00:58:15', '2022-04-10 00:58:16'),
(2346195664, 'user', 8, 3, 'to abdullah', NULL, 1, '2022-04-10 07:51:56', '2022-04-10 07:51:58'),
(2349481339, 'user', 3, 2, 'ello', NULL, 1, '2022-03-25 08:30:44', '2022-03-25 08:30:58'),
(2359346302, 'user', 8, 3, 'skdfskjdhfjksfd', NULL, 1, '2022-04-14 09:36:00', '2022-04-14 09:36:44'),
(2371967476, 'user', 2, 1, 'hi jani ho are you', NULL, 1, '2022-03-24 13:18:45', '2022-03-24 13:19:08'),
(2373606280, 'user', 8, 3, 'kasy hoo', NULL, 1, '2022-04-10 00:59:20', '2022-04-10 00:59:21'),
(2393325226, 'user', 1, 2, 'hello', NULL, 1, '2022-03-24 06:10:26', '2022-03-24 06:10:52'),
(2442021497, 'user', 1, 2, 'hii', NULL, 1, '2022-03-24 13:21:40', '2022-03-24 13:21:41'),
(2446063343, 'user', 2, 1, 'main thek hn ap sunao', NULL, 1, '2022-03-24 04:41:14', '2022-03-24 04:41:15'),
(2508618579, 'user', 8, 3, 'hi', NULL, 1, '2022-04-10 00:57:03', '2022-04-10 00:58:11'),
(2528600892, 'user', 1, 2, 'hello', NULL, 1, '2022-03-24 05:35:00', '2022-03-24 05:35:01'),
(2568363438, 'user', 3, 2, 'main thek hun ap sunao', NULL, 1, '2022-03-27 23:51:00', '2022-03-28 05:37:55'),
(2574375645, 'user', 3, 9, 'hi', NULL, 0, '2022-04-09 13:13:35', '2022-04-09 13:13:35'),
(2591329774, 'user', 5, 9, 'main thek hun ap kasy hain', NULL, 1, '2022-04-22 15:06:08', '2022-04-22 15:06:09'),
(2599942180, 'user', 3, 21, 'hi khalid how are you', NULL, 0, '2022-03-30 09:28:08', '2022-03-30 09:28:08'),
(2601682351, 'user', 1, 2, 'kasy hoo', NULL, 1, '2022-03-24 04:40:07', '2022-03-24 04:40:53'),
(2626032945, 'user', 9, 5, 'gg sir kasy hain', NULL, 1, '2022-04-22 15:05:34', '2022-04-22 15:06:00'),
(2630899192, 'user', 2, 3, 'helo', NULL, 1, '2022-03-28 05:37:58', '2022-03-30 09:57:55'),
(2643742196, 'user', 1, 2, 'dvslkdjvlskjv', NULL, 1, '2022-03-25 04:28:34', '2022-03-28 05:38:15');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_22_192348_create_messages_table', 1),
(5, '2019_10_16_211433_create_favorites_table', 1),
(6, '2019_10_18_223259_add_avatar_to_users', 1),
(7, '2019_10_20_211056_add_messenger_color_to_users', 1),
(8, '2019_10_22_000539_add_dark_mode_to_users', 1),
(9, '2019_10_25_214038_add_active_status_to_users', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_03_24_999999_add_active_status_to_users', 2),
(12, '2022_03_24_999999_add_avatar_to_users', 2),
(13, '2022_03_24_999999_add_dark_mode_to_users', 2),
(14, '2022_03_24_999999_add_messenger_color_to_users', 2),
(15, '2022_03_25_080805_add_role_to_users_table', 3),
(16, '2022_03_25_081050_add_role_to_users_table', 4),
(17, '2022_03_29_122259_create_projects_table', 5),
(18, '2022_03_30_085156_create_projects_table', 6),
(19, '2022_03_30_090335_create_project_media_table', 6),
(20, '2022_04_13_195519_create_project_details_table', 7),
(21, '2022_04_14_154356_create_project_details_table', 8),
(22, '2022_04_14_160021_create_projects_table', 9),
(23, '2022_04_14_172812_create_updates_table', 10),
(24, '2022_04_20_142900_create_payments_table', 11),
(25, '2022_04_20_204336_add_client_id_to_payments_table', 12),
(26, '2022_04_22_142148_add_project_id_to_payments_table', 13);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `client_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `created_at`, `updated_at`, `client_id`, `project_id`) VALUES
(14, 'PAYID-MJRNNBY5FJ85538BS790214H', '8PREJ8EHPUEUU', 'sb-qepol4032814@personal.example.com', 300.00, 'USD', 'approved', '2022-04-22 11:24:00', '2022-04-22 11:24:00', '9', '37');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assignedby_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_id`, `assignedby_id`, `client_id`, `designer_id`, `created_at`, `updated_at`) VALUES
(5, '37', '8', '9', '5', '2022-04-22 11:24:52', '2022-04-22 11:24:52'),
(6, '38', '8', '9', '9', '2022-04-22 11:28:44', '2022-04-22 11:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intrested` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recomendation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `title`, `sample`, `color`, `name`, `email`, `phone`, `industry`, `intrested`, `budget`, `date`, `recomendation`, `description`, `created_at`, `updated_at`) VALUES
(37, 'Logo Design', NULL, NULL, 'John', 'john@gmail.com', '0343782025', 'Information Tech', 'Paypal', '300', '23/23/2020', 'Yes', 'heheheh', '2022-04-22 11:23:27', '2022-04-22 11:23:27'),
(38, 'Illustration design', '1650644808_.png', NULL, 'Hamza', 'khalidd@gmail.com', '8787877', 'other', 'upwork', '34', '23/23/1999', 'dvnxmcnvxn,v', 'xcvx,mcnv,xmncv', '2022-04-22 11:26:48', '2022-04-22 11:26:48'),
(40, NULL, NULL, NULL, 'Khalid Hussain', 'khalidparacha0@gmail.com', '0343782025', 'Industry', 'Payemnt Method', NULL, NULL, NULL, NULL, '2022-04-22 16:42:28', '2022-04-22 16:42:28'),
(41, NULL, NULL, NULL, 'Khalid Hussain', 'khalidparacha0@gmail.com', '0343782025', 'Industry', 'Payemnt Method', NULL, NULL, NULL, NULL, '2022-04-22 16:43:11', '2022-04-22 16:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `project_media`
--

CREATE TABLE `project_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignedby_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_media`
--

INSERT INTO `project_media` (`id`, `assignedby_id`, `client_id`, `designer_id`, `image`, `created_at`, `updated_at`) VALUES
(9, '8', '10', '5', '[\"1649689437_.jpg\",\"1649689438_.jpg\"]', '2022-04-11 10:03:57', '2022-04-11 10:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `messenger_color`, `dark_mode`, `active_status`, `role`) VALUES
(3, 'Abdullah z', 'Admin@gmail.com', NULL, '$2y$10$IOkLIAFbJZvCCl1gsoEOaeSbu41IBBXTMrZEVVOohsbBcZQHSz5LC', NULL, '2022-03-25 05:19:36', '2022-04-14 09:36:44', 'avatar.png', '#2180f3', 0, 1, 'admin'),
(5, 'Noman', 'designer@gmail.com', NULL, '$2y$10$miGQwX46BhIqc/QVrwzYNe.oRWbuU2yOLWzYnU1Jc0sZSmrlI1HVm', NULL, '2022-03-29 02:10:13', '2022-04-22 15:13:03', 'avatar.png', '#2180f3', 0, 0, 'designer'),
(6, 'Employee', 'employee@gmail.com', NULL, '$2y$10$sIcgA/Tj2bqeEOiaqKZRFuaH8aTz6Fch./lzy0NYCYGpTJ.6mcG5q', NULL, '2022-03-29 02:22:35', '2022-04-22 15:42:56', 'avatar.png', '#2180f3', 0, 0, 'employe'),
(7, 'Nomann', 'headmanager@gmail.com', NULL, '$2y$10$z8GYe/W2cNvglzfr.7K67.B5mBnyZ2xfDmAETG17aFdGinNgXrwkm', NULL, '2022-03-29 02:29:36', '2022-04-06 10:06:54', 'avatar.png', '#2180f3', 0, 0, 'Headmanager'),
(8, 'Project Manager', 'projectmanager@gmail.com', NULL, '$2y$10$hUub9TWPwLajMBasmZB85O18J0ivItcJWRN.ZVUNN4gWJjxnxHBtu', NULL, '2022-03-29 02:31:33', '2022-04-15 12:31:06', 'avatar.png', '#2180f3', 0, 0, 'projectmanager'),
(9, 'khalid d', 'khalidd@gmail.com', NULL, '$2y$10$SP6LodhFyFGWMutvt3.t0uo5f119l6EsJ1KGJfiuTfhQ8hADPLTOy', NULL, '2022-03-29 02:33:43', '2022-03-29 02:33:43', 'avatar.png', '#2180f3', 0, 0, 'client'),
(25, 'Owner', 'khalidparacha0@gmail.com', NULL, '$2y$10$IOkLIAFbJZvCCl1gsoEOaeSbu41IBBXTMrZEVVOohsbBcZQHSz5LC', NULL, '2022-04-22 15:49:17', '2022-04-22 15:49:17', 'avatar.png', '#2180f3', 0, 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_media`
--
ALTER TABLE `project_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `project_media`
--
ALTER TABLE `project_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
