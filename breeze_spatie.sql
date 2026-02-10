-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2026 at 03:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breeze_spatie`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('breeze-spatie-cache-b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'i:1;', 1770238019),
('breeze-spatie-cache-b1d5781111d84f7b3fe45a0852e59758cd7a87e5:timer', 'i:1770238019;', 1770238019),
('breeze-spatie-cache-b3f0c7f6bb763af1be91d9e74eabfeb199dc1f1f', 'i:1;', 1770641294),
('breeze-spatie-cache-b3f0c7f6bb763af1be91d9e74eabfeb199dc1f1f:timer', 'i:1770641294;', 1770641294),
('breeze-spatie-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:5:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"d\";s:8:\"group_id\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:29:{i:0;a:5:{s:1:\"a\";i:19;s:1:\"b\";s:17:\"user group access\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}i:1;a:5:{s:1:\"a\";i:20;s:1:\"b\";s:9:\"user.list\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}i:2;a:5:{s:1:\"a\";i:21;s:1:\"b\";s:11:\"user.create\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}i:3;a:5:{s:1:\"a\";i:22;s:1:\"b\";s:9:\"user.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}i:4;a:5:{s:1:\"a\";i:23;s:1:\"b\";s:11:\"user.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}i:5;a:5:{s:1:\"a\";i:24;s:1:\"b\";s:17:\"role group access\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"r\";a:1:{i:0;i:2;}}i:6;a:5:{s:1:\"a\";i:25;s:1:\"b\";s:9:\"role.list\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"r\";a:1:{i:0;i:2;}}i:7;a:5:{s:1:\"a\";i:26;s:1:\"b\";s:11:\"role.create\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"r\";a:1:{i:0;i:2;}}i:8;a:5:{s:1:\"a\";i:27;s:1:\"b\";s:9:\"role.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"r\";a:1:{i:0;i:2;}}i:9;a:5:{s:1:\"a\";i:28;s:1:\"b\";s:11:\"role.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"r\";a:1:{i:0;i:2;}}i:10;a:5:{s:1:\"a\";i:29;s:1:\"b\";s:23:\"permission group access\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:11;a:5:{s:1:\"a\";i:30;s:1:\"b\";s:15:\"permission.list\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:12;a:5:{s:1:\"a\";i:31;s:1:\"b\";s:17:\"permission.create\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:13;a:5:{s:1:\"a\";i:32;s:1:\"b\";s:15:\"permission.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:14;a:5:{s:1:\"a\";i:33;s:1:\"b\";s:17:\"permission.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:15;a:5:{s:1:\"a\";i:34;s:1:\"b\";s:26:\"permission category.access\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:16;a:5:{s:1:\"a\";i:35;s:1:\"b\";s:24:\"permission category.list\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:17;a:5:{s:1:\"a\";i:36;s:1:\"b\";s:26:\"permission category.create\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:18;a:5:{s:1:\"a\";i:37;s:1:\"b\";s:24:\"permission category.edit\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:19;a:5:{s:1:\"a\";i:38;s:1:\"b\";s:26:\"permission category.delete\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:20;a:5:{s:1:\"a\";i:39;s:1:\"b\";s:33:\"roles and permissions menu.access\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}i:21;a:5:{s:1:\"a\";i:40;s:1:\"b\";s:25:\"permission category.store\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:22;a:5:{s:1:\"a\";i:41;s:1:\"b\";s:26:\"permission category.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:23;a:5:{s:1:\"a\";i:42;s:1:\"b\";s:16:\"permission.store\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:24;a:5:{s:1:\"a\";i:43;s:1:\"b\";s:17:\"permission.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:25;a:5:{s:1:\"a\";i:44;s:1:\"b\";s:10:\"role.store\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"r\";a:1:{i:0;i:2;}}i:26;a:5:{s:1:\"a\";i:45;s:1:\"b\";s:11:\"role.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"r\";a:1:{i:0;i:2;}}i:27;a:5:{s:1:\"a\";i:46;s:1:\"b\";s:10:\"user.store\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}i:28;a:5:{s:1:\"a\";i:47;s:1:\"b\";s:11:\"user.update\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:5;i:3;i:7;}}}s:5:\"roles\";a:4:{i:0;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"super admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:5:\"staff\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:8:\"employee\";s:1:\"c\";s:3:\"web\";}}}', 1770818912);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_31_170719_create_permission_tables', 2),
(5, '2026_02_01_093959_create_permission_groups_table', 3),
(6, '2026_02_01_110358_update_permissions_tables', 4),
(7, '2026_02_04_195200_update_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 6),
(7, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_id`, `created_at`, `updated_at`) VALUES
(19, 'user group access', 'web', 7, '2026-02-03 07:35:48', '2026-02-03 07:35:48'),
(20, 'user.list', 'web', 7, '2026-02-03 07:36:15', '2026-02-03 07:36:34'),
(21, 'user.create', 'web', 7, '2026-02-03 07:36:56', '2026-02-03 07:36:56'),
(22, 'user.edit', 'web', 7, '2026-02-03 07:37:12', '2026-02-03 07:37:12'),
(23, 'user.delete', 'web', 7, '2026-02-03 07:37:26', '2026-02-03 07:37:26'),
(24, 'role group access', 'web', 6, '2026-02-03 07:38:09', '2026-02-03 07:38:09'),
(25, 'role.list', 'web', 6, '2026-02-03 07:38:27', '2026-02-03 07:38:27'),
(26, 'role.create', 'web', 6, '2026-02-03 07:38:45', '2026-02-03 07:38:45'),
(27, 'role.edit', 'web', 6, '2026-02-03 07:39:03', '2026-02-03 07:39:03'),
(28, 'role.delete', 'web', 6, '2026-02-03 07:39:20', '2026-02-03 07:39:20'),
(29, 'permission group access', 'web', 4, '2026-02-03 07:40:28', '2026-02-03 07:40:28'),
(30, 'permission.list', 'web', 4, '2026-02-03 07:40:52', '2026-02-03 07:40:52'),
(31, 'permission.create', 'web', 4, '2026-02-03 07:41:12', '2026-02-03 07:41:12'),
(32, 'permission.edit', 'web', 4, '2026-02-03 07:41:24', '2026-02-03 07:41:24'),
(33, 'permission.delete', 'web', 4, '2026-02-03 07:41:39', '2026-02-03 07:41:39'),
(34, 'permission category.access', 'web', 3, '2026-02-03 07:42:43', '2026-02-03 07:43:24'),
(35, 'permission category.list', 'web', 3, '2026-02-03 07:43:50', '2026-02-03 07:43:50'),
(36, 'permission category.create', 'web', 3, '2026-02-03 07:44:02', '2026-02-03 07:44:02'),
(37, 'permission category.edit', 'web', 3, '2026-02-03 07:44:14', '2026-02-03 07:44:14'),
(38, 'permission category.delete', 'web', 3, '2026-02-03 07:44:25', '2026-02-03 07:44:25'),
(39, 'roles and permissions menu.access', 'web', 3, '2026-02-03 07:51:47', '2026-02-03 07:51:47'),
(40, 'permission category.store', 'web', 3, '2026-02-03 11:46:00', '2026-02-03 11:46:00'),
(41, 'permission category.update', 'web', 3, '2026-02-03 11:46:17', '2026-02-03 11:46:17'),
(42, 'permission.store', 'web', 4, '2026-02-03 11:57:33', '2026-02-03 11:57:33'),
(43, 'permission.update', 'web', 4, '2026-02-03 11:57:50', '2026-02-03 11:57:50'),
(44, 'role.store', 'web', 6, '2026-02-09 07:06:08', '2026-02-09 07:06:08'),
(45, 'role.update', 'web', 6, '2026-02-09 07:06:22', '2026-02-09 07:06:22'),
(46, 'user.store', 'web', 7, '2026-02-09 07:07:40', '2026-02-09 07:11:53'),
(47, 'user.update', 'web', 7, '2026-02-09 07:07:54', '2026-02-09 07:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'permission category group', '2026-02-01 04:32:30', '2026-02-03 07:27:41'),
(4, 'permissions group', '2026-02-01 06:00:21', '2026-02-03 12:12:55'),
(6, 'roles group', '2026-02-01 06:00:59', '2026-02-03 07:24:44'),
(7, 'user group', '2026-02-02 13:47:26', '2026-02-03 07:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'super admin', 'web', '2026-02-01 22:38:39', '2026-02-03 07:23:00'),
(3, 'admin', 'web', '2026-02-01 23:19:33', '2026-02-03 07:22:51'),
(5, 'staff', 'web', '2026-02-02 09:46:38', '2026-02-02 09:46:38'),
(7, 'employee', 'web', '2026-02-02 13:43:27', '2026-02-02 13:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(19, 2),
(19, 3),
(19, 5),
(19, 7),
(20, 2),
(20, 3),
(20, 5),
(20, 7),
(21, 2),
(21, 3),
(21, 5),
(21, 7),
(22, 2),
(22, 3),
(22, 5),
(22, 7),
(23, 2),
(23, 3),
(23, 5),
(23, 7),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(29, 3),
(29, 5),
(30, 2),
(30, 3),
(30, 5),
(31, 2),
(31, 3),
(31, 5),
(32, 2),
(32, 3),
(32, 5),
(33, 2),
(33, 3),
(33, 5),
(34, 2),
(34, 3),
(35, 2),
(35, 3),
(36, 2),
(36, 3),
(37, 2),
(37, 3),
(38, 2),
(38, 3),
(39, 2),
(39, 3),
(39, 5),
(39, 7),
(40, 2),
(40, 3),
(41, 2),
(41, 3),
(42, 2),
(42, 3),
(42, 5),
(43, 2),
(43, 3),
(43, 5),
(44, 2),
(45, 2),
(46, 2),
(46, 3),
(46, 5),
(46, 7),
(47, 2),
(47, 3),
(47, 5),
(47, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `provider_id`, `provider`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Employee', 'employee@gmail.com', '2026-01-31 04:58:22', '$2y$12$e9ooZ.rwydKicG7iSClQre0wePK2LGUCs5s8wKFa3E2IaR7C251lO', NULL, NULL, NULL, '2026-01-31 04:49:53', '2026-02-09 06:58:34'),
(6, 'Staff', 'staff@gmail.com', '2026-02-03 13:02:48', '$2y$12$niJqwiFa1pNb4pSYLHD.PeXYC0T/.ijDcOsrDsCUsw3NF9atjJFBu', NULL, NULL, NULL, '2026-02-02 10:51:02', '2026-02-09 07:42:25'),
(7, 'Admin', 'admin@gmail.com', '2026-02-03 12:48:44', '$2y$12$yBcV3yhL9hgmNoRV7tGFz.w66bxSxIS7ftJRF.2dw.ZeD3bkBnnhO', NULL, NULL, 'BcjxBers53GoZ2YJVNh5gwn0oZ3nfJQb4fl5rTNVcJXELuNTW4lPTkmHvoou', '2026-02-02 10:59:20', '2026-02-09 06:57:44'),
(8, 'Super Admin', 'superadmin@gmail.com', '2026-02-02 20:04:37', '$2y$12$mb8YK4oidWJDwtxRLWuf5uniOmP203HRcFm4qxwSr3HmqAQ/lMTga', NULL, NULL, 'Q7AZYE276wZg4WvzoSHVL7zcIGmeIy8mvnkMnbbuayZbxZnVsQf28VOFZa0V', '2026-02-02 11:01:34', '2026-02-09 06:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`),
  ADD KEY `permissions_group_id_foreign` (`group_id`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_groups_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `permission_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
