-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 05:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cims`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Head Office', NULL, '2017-10-09 10:00:58', 'Handles and see everything'),
(2, 'Legal', NULL, '2017-10-09 10:01:07', 'Makers of the Law'),
(3, 'Accounting', '2017-10-09 09:21:46', '2017-10-09 10:01:17', 'Money Handlers'),
(4, 'Handyman Repairs', '2017-10-09 09:33:33', '2017-10-09 09:33:33', 'Construction Firm'),
(5, 'Human Resources', '2017-10-09 19:22:39', '2017-10-09 19:22:39', 'Hr Hr HR');

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
(15, '2017_10_07_181103_add_photo_id_to_users', 1),
(16, '2017_10_07_181133_create_photos_table', 1),
(20, '2017_10_07_185446_add_photo_id_to_users', 3),
(23, '2014_10_12_000000_create_users_table', 4),
(24, '2014_10_12_100000_create_password_resets_table', 4),
(25, '2017_10_07_180342_create_roles_table', 4),
(26, '2017_10_08_051539_create_department_table', 4),
(28, '2017_10_09_172435_add_description_to_department', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, '1507512147856835_648775645143237_1265331074_o.jpg', '2017-10-08 17:22:27', '2017-10-08 17:22:27'),
(2, '1507512235856835_648775645143237_1265331074_o.jpg', '2017-10-08 17:23:55', '2017-10-08 17:23:55'),
(3, '150751227816144271_10202974441359125_1055996986_n.jpg', '2017-10-08 17:24:38', '2017-10-08 17:24:38'),
(4, '1507561717856835_648775645143237_1265331074_o.jpg', '2017-10-09 07:08:37', '2017-10-09 07:08:37'),
(5, '150756231115747431_10202888150041896_5435667112254474776_n.jpg', '2017-10-09 07:18:31', '2017-10-09 07:18:31'),
(6, '150756238117358705_1377274222293372_4898290067420934867_o.jpg', '2017-10-09 07:19:41', '2017-10-09 07:19:41'),
(7, '1507563523jack.jpg', '2017-10-09 07:38:43', '2017-10-09 07:38:43'),
(8, '150756364816145573_10202974452199396_2018802984_o.jpg', '2017-10-09 07:40:48', '2017-10-09 07:40:48'),
(9, '1507605800856835_648775645143237_1265331074_o.jpg', '2017-10-09 19:23:20', '2017-10-09 19:23:20'),
(10, '1507605956jack.jpg', '2017-10-09 19:25:56', '2017-10-09 19:25:56'),
(11, '1507607800myAvatar.png', '2017-10-09 19:56:40', '2017-10-09 19:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL, NULL),
(2, 'Regular', '6  months and counting', NULL, '2017-10-09 19:05:07'),
(3, 'Provisionary', 'Not Reqgular', '2017-10-09 18:59:39', '2017-10-09 18:59:39'),
(4, 'Test', 'Testing', '2017-10-09 19:05:22', '2017-10-09 19:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `department_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `department_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `photo_id`) VALUES
(1, 1, 1, 1, 'Ralp Jeff Ortiz', 'rortiz0305@gmail.com', '$2y$10$k94P6vrtvThobfsRonoQPu9mtINGwcU/.vciZsV9ZucIDTNAsd0Ja', '0x5YABlj3C1wcQB1Azl2AqAAo39fwlxwdgwVF3hUNOEMMUn5jnt4qzvODWMx', '2017-10-09 02:36:09', '2017-10-09 19:56:40', 11),
(2, 1, 1, 1, 'Christine Marie R. Velez', 'christine@yahoo.com', '$2y$10$b0L8QLoipm4TdBEcKm/KE.kw.QvzWRWWelRoWMHZUYyUwpYtKL0Ai', '42gCsvyrlLO897BScJ8bunZ10GENiDxvyg6bEVNkaibCzbSorRnpTrSNOLH9', '2017-10-09 07:18:31', '2017-10-09 07:18:31', 5),
(3, 1, 1, 5, 'Human Resources', 'hr@human.com', '$2y$10$nV/UyaVDRvU22hKCvFhc0O6nNm8kJT6HW1eDU/GrWSq82E7GxWVbi', 'RVyfcXrnOMkAVoDXpLkic4NnijyXdzBweiAnGeMyImjBx9fMCXpzjiCbCQjb', '2017-10-09 19:23:21', '2017-10-09 19:23:21', 9),
(4, 1, 1, 2, 'Atty. Legal', 'legal@legal.com', '$2y$10$g24BH34hcAOO28onK4GF.OESMOyHn4ILvwFX7HYCDlib9ul86dO2W', '5Pvc3QKMA2qbpkkJ7HxZhQ42L2pQpyMl20MGJUDTMyfg4h68cdepzgNAXtcZ', '2017-10-09 19:25:56', '2017-10-09 19:25:56', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
