-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2022 at 07:18 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_starter_laravel`
--

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
(1, '2014_10_11_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(7, '2016_06_01_000004_create_oauth_clients_table', 1),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_05_04_180805_create_modules_table', 1),
(12, '2022_05_04_180920_create_module_operations_table', 1),
(13, '2022_05_04_180959_create_role_to_accesses_table', 1),
(14, '2022_05_04_181227_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user', '2022-05-14 21:54:19', '2022-05-14 23:39:08', NULL),
(2, 'user_role', '2022-05-14 21:54:42', '2022-05-14 21:54:42', NULL),
(3, 'permission', '2022-05-14 21:58:45', '2022-05-14 21:58:45', NULL),
(4, 'general_setting', '2022-05-14 21:59:22', '2022-05-14 23:42:42', NULL),
(5, 'Admin Dashboard', '2022-05-28 12:17:35', '2022-05-28 12:17:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_operations`
--

CREATE TABLE `module_operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `operation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_operations`
--

INSERT INTO `module_operations` (`id`, `module_id`, `operation`, `route`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'List', 'role.index', '2022-05-17 10:52:00', '2022-05-18 13:48:34', NULL),
(2, 2, 'Create', 'role.store', '2022-05-17 10:55:48', '2022-05-18 13:38:10', NULL),
(3, 2, 'Edit', 'role.edit', '2022-05-18 13:03:54', '2022-05-18 13:03:54', NULL),
(4, 2, 'Delete', 'role.delete', '2022-05-18 13:05:12', '2022-05-18 13:05:12', NULL),
(5, 1, 'List', 'user.index', '2022-05-18 13:07:01', '2022-05-28 23:23:57', NULL),
(6, 1, 'Create', 'user.store', '2022-05-18 13:07:49', '2022-05-18 13:51:00', NULL),
(7, 3, 'List', 'permission.index', '2022-05-18 13:12:50', '2022-05-27 11:57:11', NULL),
(8, 1, 'Edit', 'user.edit', '2022-05-20 11:33:24', '2022-05-20 11:33:24', NULL),
(9, 1, 'Delete', 'user.delete', '2022-05-20 11:33:53', '2022-05-20 11:33:53', NULL),
(10, 3, 'Create', 'permission.create', '2022-05-20 11:36:36', '2022-05-27 12:00:00', NULL),
(11, 4, 'List', 'setting.index', '2022-05-20 11:39:41', '2022-05-20 11:39:41', NULL),
(12, 4, 'Create', 'setting.store', '2022-05-20 11:40:11', '2022-05-20 11:40:11', NULL),
(13, 4, 'Edit', 'setting.update', '2022-05-20 11:40:46', '2022-05-20 11:40:46', NULL),
(14, 4, 'Delete', 'setting.delete', '2022-05-20 11:41:44', '2022-05-20 11:41:44', NULL),
(15, 3, 'Add/Update', 'permission.store', '2022-05-27 12:01:57', '2022-05-27 12:02:39', NULL),
(16, 5, 'List', 'admin.dashboard', '2022-05-28 12:18:40', '2022-05-28 12:21:29', NULL),
(17, 1, 'Update', 'user.update', '2022-05-28 23:28:09', '2022-05-28 23:29:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2022-05-13 19:31:24', '2022-05-23 05:14:50', NULL),
(2, 'User', '2022-05-13 13:34:37', '2022-05-23 05:15:00', NULL),
(3, 'Teacher', '2022-05-13 13:36:27', '2022-05-13 13:47:49', NULL),
(4, 'Student', '2022-05-13 13:36:37', '2022-05-14 23:40:57', NULL),
(5, 'Poster', '2022-05-13 13:36:49', '2022-05-13 13:47:27', NULL),
(6, 'Editor', '2022-05-13 13:37:34', '2022-05-13 13:47:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_to_accesses`
--

CREATE TABLE `role_to_accesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `module_operation_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_to_accesses`
--

INSERT INTO `role_to_accesses` (`id`, `module_id`, `role_id`, `module_operation_id`) VALUES
(8, 4, 2, 14),
(9, 4, 2, 13),
(10, 4, 2, 12),
(11, 4, 2, 11),
(12, 3, 2, 10),
(13, 3, 2, 7),
(14, 1, 2, 9),
(15, 1, 2, 8),
(16, 1, 2, 6),
(17, 1, 2, 5),
(18, 2, 2, 4),
(19, 2, 2, 3),
(20, 2, 2, 2),
(21, 2, 2, 1),
(22, 4, 6, 13),
(23, 1, 6, 8),
(69, 1, 1, 17),
(70, 1, 1, 9),
(71, 1, 1, 8),
(72, 1, 1, 6),
(73, 1, 1, 5),
(74, 5, 1, 16),
(75, 3, 1, 15),
(76, 3, 1, 10),
(77, 3, 1, 7),
(78, 4, 1, 14),
(79, 4, 1, 13),
(80, 4, 1, 12),
(81, 4, 1, 11),
(82, 2, 1, 4),
(83, 2, 1, 3),
(84, 2, 1, 2),
(85, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'project_name', 'Pitech', NULL, '2022-06-08 12:02:24', NULL, NULL),
(2, 'Address', 'Porishodpara, Thakutrgaon', NULL, '2022-06-09 11:50:42', '2022-06-10 12:06:28', NULL),
(3, 'logo', NULL, '291654882994.png', '2022-06-09 12:17:30', '2022-06-10 11:43:14', NULL);

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
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '2',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `phone`, `address`, `profile_photo`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Admin', 'admin@gmail.com', '2022-05-13 19:29:30', '$2y$10$LIlGHnJZg7xECxfA8uYm6.8GiLUFWzO16TnHvPIH68wLQqRcsRqa.', 1, NULL, NULL, NULL, 'Sn9ZOLsejrvuSZsKim87zzFtMnuIT22avcBY4Y7P9lXwNWmFWbP2XX3aaM8d', '2022-05-13 19:29:30', NULL, NULL),
(3, 'Sohrab Hossan', 'sohrab.zaf8888@gmail.com', NULL, '$2y$10$DVDCSH7jv3P6ihnVX6lT4.cvkUoMygU.rDn53w8OVXaX1ZVsBOci6', 6, '01722968534', 'Thakurgaon', '611653243446.jpg', NULL, '2022-05-22 12:17:26', '2022-05-22 12:17:26', NULL),
(4, 'Example User', 'user@gmail.com', NULL, '$2y$10$9RX/2DhKwtG4Fk4AN80PzunwOpkcUAX3cdLwR4SXBki5YP2YcNzq2', 3, '01914938888', 'Thakurgaon', '781654200750.png', NULL, '2022-05-23 10:48:48', '2022-06-03 11:23:51', NULL),
(5, 'Test02', 'test02@gmail.com', NULL, '$2y$10$S9Y8ZUHqlJ3Lj1nMVYwmu.TxUQAT7Ny6UIECKGckMhigtyWX/8.OC', 2, '01722968535', 'Testing', '301654200717.jpg', NULL, '2022-06-02 14:10:02', '2022-06-03 11:25:44', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_operations`
--
ALTER TABLE `module_operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_operations_module_id_foreign` (`module_id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_to_accesses`
--
ALTER TABLE `role_to_accesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_to_accesses_module_id_foreign` (`module_id`),
  ADD KEY `role_to_accesses_role_id_foreign` (`role_id`),
  ADD KEY `role_to_accesses_module_operation_id_foreign` (`module_operation_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `module_operations`
--
ALTER TABLE `module_operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_to_accesses`
--
ALTER TABLE `role_to_accesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `module_operations`
--
ALTER TABLE `module_operations`
  ADD CONSTRAINT `module_operations_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_to_accesses`
--
ALTER TABLE `role_to_accesses`
  ADD CONSTRAINT `role_to_accesses_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_to_accesses_module_operation_id_foreign` FOREIGN KEY (`module_operation_id`) REFERENCES `module_operations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_to_accesses_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
