-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2023 at 08:26 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `addons_id` int(11) NOT NULL,
  `addons_status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `addons` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`addons_id`, `addons_status`, `category_id`, `addons`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Red', '2023-02-28 07:25:26', '2023-02-28 07:30:47'),
(2, 0, 1, 'Blue', '2023-02-28 07:30:43', '2023-02-28 07:30:43'),
(3, 0, 2, 'T Shirt', '2023-02-28 13:12:50', '2023-02-28 13:12:58'),
(4, 0, 2, 'Formal Shirt', '2023-02-28 13:13:08', '2023-02-28 13:13:08'),
(5, 0, 3, 'S', '2023-02-28 14:08:02', '2023-02-28 14:08:02'),
(6, 0, 3, 'M', '2023-02-28 14:08:07', '2023-02-28 14:08:07'),
(7, 0, 3, 'L', '2023-02-28 14:08:17', '2023-02-28 14:08:17'),
(8, 0, 3, 'XL', '2023-02-28 14:08:23', '2023-02-28 14:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_status` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_status`, `category`, `created_at`, `updated_at`) VALUES
(1, 0, 'Color', '2023-02-28 07:00:43', '2023-02-28 07:10:20'),
(2, 0, 'Type', '2023-02-28 07:15:06', '2023-02-28 07:15:06'),
(3, 0, 'Size', '2023-02-28 14:07:54', '2023-02-28 14:07:54');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_status` int(11) NOT NULL,
  `products` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_status`, `products`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 'Branded Shirt 1', 100, 'RNy8aevRR4axt18XMXKDLiemRxDbZsUschu28qvi.png', '2023-02-28 09:17:40', '2023-02-28 09:29:23'),
(2, 0, 'Branded Shirt 2', 100, 'o8QodVgdisbaz608DTc74fZ3ZXIK7ZNY71q0QtgF.webp', '2023-02-28 09:17:40', '2023-02-28 13:49:55'),
(3, 0, 'Branded Shirt 3', 100, 'EmHNmah6F9aC0Gndl5cHOLqPKkfnzYlr9KM4P2KB.jpg', '2023-02-28 09:17:40', '2023-02-28 13:50:27'),
(4, 0, 'Branded Shirt 4', 100, 'zZPpvcISEpfdUXjl467OVil0gAnTm5XR2ye5KWV5.jpg', '2023-02-28 09:17:40', '2023-02-28 13:52:15'),
(5, 0, 'Branded Shirt 5', 100, '8QAENks1COZIasSGSsalGv2nQWsueFniPd5fnpnW.webp', '2023-02-28 09:17:40', '2023-02-28 14:01:20'),
(6, 0, 'Branded Shirt 6', 100, 'H75o7yW21J5rQ7BkOeDaH8cTAXPeg6zSr8z9FZdN.webp', '2023-02-28 09:17:40', '2023-02-28 14:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `products_addons`
--

CREATE TABLE `products_addons` (
  `products_addons_id` int(11) NOT NULL,
  `products_addons_status` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `addons_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_addons`
--

INSERT INTO `products_addons` (`products_addons_id`, `products_addons_status`, `products_id`, `category_id`, `addons_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2023-02-28 10:42:56', '2023-02-28 13:12:00'),
(2, 0, 1, 1, 2, '2023-02-28 13:11:56', '2023-02-28 13:11:56'),
(3, 0, 1, 2, 4, '2023-02-28 13:13:30', '2023-02-28 13:13:30'),
(4, 0, 2, 1, 2, '2023-02-28 13:13:39', '2023-02-28 13:13:39'),
(5, 0, 2, 2, 3, '2023-02-28 13:13:43', '2023-02-28 13:13:43'),
(6, 0, 1, 3, 8, '2023-02-28 14:08:36', '2023-02-28 14:08:36'),
(7, 0, 1, 1, 1, '2023-02-28 14:27:18', '2023-02-28 14:27:18');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$SXUi1LZmzS8hyyxBxonp1u/LdyPuxCPjqxrmrT8YsJqR/aEgRJxM.', NULL, '2023-02-24 03:55:01', '2023-02-24 03:55:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`addons_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `products_addons`
--
ALTER TABLE `products_addons`
  ADD PRIMARY KEY (`products_addons_id`);

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
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `addons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_addons`
--
ALTER TABLE `products_addons`
  MODIFY `products_addons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
