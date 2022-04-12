-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2022 at 04:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netweb13march22`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `salary`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ashwani Raj Agrahari', '77', '200', '03132022073849622d9f89a1a2f.jpg', '2022-03-13 05:01:25', '2022-03-13 02:08:49', '2022-03-13 05:01:25'),
(2, 'Ashwani Raj Agrahari', '77', '200', '03132022100527622dc1e7ddeb0.jpg', '2022-03-13 05:02:52', '2022-03-13 04:35:27', '2022-03-13 05:02:52'),
(3, 'Ashwani Raj Agrahari', '55', '55', '03132022103112622dc7f05a1a4.jpg', '2022-03-13 05:03:10', '2022-03-13 05:01:12', '2022-03-13 05:03:10'),
(4, 'Ashwani Raj Agrahari', '77', '200', '03132022103325622dc875e0716.jpg', '2022-03-13 05:23:48', '2022-03-13 05:03:25', '2022-03-13 05:23:48'),
(8, 'Ashwani Raj Agrahari', '77', '200', '03132022111104622dd14896f04.jpg', NULL, '2022-03-13 05:38:52', '2022-03-13 05:41:04'),
(9, 'Ashwani Raj Agrahari', '77', '200', '03132022115118622ddab63d844.jpg', NULL, '2022-03-13 06:21:18', '2022-03-13 06:21:18');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_13_054824_create_employees_table', 1),
(7, '2022_03_13_054844_create_students_table', 1),
(11, '2014_10_12_000000_create_users_table', 4),
(12, '2022_03_13_215538_create_new_employees_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `new_employees`
--

CREATE TABLE `new_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `address`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ashwani', 'Agraharikjjkjkjk', 'LUCKNOW, xvxv, dd', '03132022085838622db23ec00d6.jpg', '2022-03-13 03:47:38', '2022-03-13 03:28:38', '2022-03-13 03:47:38'),
(2, 'Ashwani', 'zczczAgrahari', 'LUCKNOW, xvxv, dd', '03132022100809622dc289e7ce9.jpg', '2022-03-13 04:38:22', '2022-03-13 04:38:09', '2022-03-13 04:38:22'),
(6, 'Ashwani', 'Agrahari', 'LUCKNOW, xvxv, dd', '03132022111606622dd276eed6a.jpg', '2022-03-13 05:47:12', '2022-03-13 05:46:06', '2022-03-13 05:47:12'),
(7, 'Ashwani', 'Agrahari', 'LUCKNOW, xvxv, dd', '03132022115448622ddb88c48b2.jpg', NULL, '2022-03-13 06:24:48', '2022-03-13 06:24:48'),
(8, 'Ashwani', 'Agraharikhvvhjv', 'LUCKNOW, xvxv, dd', '03142022165510622f736e342e9.jpg', NULL, '2022-03-14 11:25:10', '2022-03-14 11:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('U','A') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'A = Admin, U = User',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `age`, `dob`, `address`, `image`, `role`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ashwani', 'aswin@gmail.com', NULL, NULL, NULL, NULL, NULL, 'A', '$2y$10$TReMzDEUrrnOU2vFiFAAleuy2dpgfVtMsKvrJCPSLhgykjvPYDgvu', NULL, NULL, '2022-03-13 12:21:09', '2022-03-13 12:21:09'),
(2, 'Ashwani', 'gdhghu78798@gmail.com', NULL, '22', '12222', 'bb', '03132022181040622e33a02c644.jpg', 'A', '$2y$10$JGt7Nsxou0uU7ONezoZemO6Wb8AbBssBolvP7.lEViPR3SWkrJuPq', NULL, NULL, '2022-03-13 12:40:40', '2022-03-13 12:40:40'),
(3, 'a', 'a@gmail.com', NULL, '2', '2022-03-01', 'bb', '03132022181503622e34a7bc8a9.jpg', 'U', '$2y$10$eCSt9UjPrBNFtNiw5EYa7.qNW5sGT8xgNd1MqDcfIbZSwrB2iDkB.', NULL, NULL, '2022-03-13 12:45:03', '2022-03-13 12:45:03'),
(4, 'Ashwani', 'gdhssghu@gmail.com', NULL, '22', '2022-03-01', 'bb', '03132022181609622e34e9aed9e.jpg', 'U', '$2y$10$YSxWZcmxH2AS8FN3zRpqIe04eGcKFWignH462CVSDquX8COtEMaY.', NULL, NULL, '2022-03-13 12:46:09', '2022-03-13 12:46:09'),
(5, 'jhbhj', 'jhbjbjbj@gmail.com', NULL, '77', '2022-03-07', 'dfvdf', '03132022182027622e35eb16e52.jpg', 'A', '$2y$10$D7Kez9YOapbIryXKwIMUGuNTKIuNZHR8GkvPim7oip7StyG2XoYOa', NULL, NULL, '2022-03-13 12:50:27', '2022-03-13 12:50:27'),
(6, 'Admin', 'admin@gmail.com', NULL, '21', '2022-03-14', 'admin', '03132022182202622e364a6cb45.jpg', 'A', '$2y$10$MLolY3Ikh34zEElrKuL8a.cM53uPbbwtyWNB4dPQs11e6riEM4N/6', NULL, NULL, '2022-03-13 12:52:02', '2022-03-13 12:52:02'),
(7, 'User', 'user@gmail.com', NULL, '123', '2022-03-07', 'kbkbk', '03132022190548622e408ca647f.jpg', 'U', '$2y$10$V/brogBczpkHOaU4r6XgkOCjLupmsj8TBVMHPMjDI7z3zuJMcS2BG', NULL, NULL, '2022-03-13 13:35:48', '2022-03-13 13:35:48'),
(8, 'khgj', 'jhjh@gmail.com', NULL, '22', '2022-03-14', 'zdvsd', '03132022203606622e55b683f65.jpg', 'A', '$2y$10$tkUoN6rc7kT40NKHJzNVPuKSk713sHheGvYc5DnLaRpc/rcMa9WrO', NULL, NULL, '2022-03-13 15:06:06', '2022-03-13 15:06:06'),
(9, 'Ashwani Raj Agrahari', 'abc@gmail.com', NULL, '77', '2022-03-16', 'LUCKNOW', '032020220605586236c446eb640.png', 'A', '$2y$10$Z2SIZ2S2TjsFf3GehvNaW.aTP6dakRt01WjzB0IDNJH1imND7t1qO', NULL, NULL, '2022-03-20 00:35:59', '2022-03-20 00:35:59'),
(10, 'User', 'userabc@gmail.com', NULL, '22', '2022-03-18', 'LUCKNOW', '032020220607106236c48eb9cc2.png', 'U', '$2y$10$JbVNixWv.93rDClGEDKebOb7kcI5v2ks/942wk5/hTW5/4B/9jQAS', NULL, NULL, '2022-03-20 00:37:10', '2022-03-20 00:37:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `new_employees`
--
ALTER TABLE `new_employees`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `new_employees`
--
ALTER TABLE `new_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
