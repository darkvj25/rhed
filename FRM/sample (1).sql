-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 03:58 AM
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
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `bad_comments`
--

CREATE TABLE `bad_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bad_comments`
--

INSERT INTO `bad_comments` (`id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'gago', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'tarantado', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'bobo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ulol', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'sira ulo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'punyeta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'lintik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'buwisit', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'walang hiya', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'kupal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'tanga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'demonyo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'iyot', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'kupal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'buang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'puta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'tangina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'tang ina ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'putangina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'putangina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'bwisit', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '8080', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'gaga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'bobo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'boba', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'buang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'putragis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'hayop', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'batugan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'putik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'potek', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'sira ulo ka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'wala kang kwenta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'syet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'shet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'kupal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'hudas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'leche', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'burat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'punyeta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'ungas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'hinayupak', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'pucha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'pesteng yawa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'pakshet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'pakyu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'fuck', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'puke', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'supot', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'kainin mo tae ko', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'animal ka', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `year_id` bigint(20) UNSIGNED NOT NULL,
  `block` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `course_id`, `year_id`, `block`, `created_at`, `updated_at`) VALUES
(15, 1, 26, 'Block A', '2024-08-19 18:20:14', '2024-08-19 18:20:14'),
(16, 1, 26, 'Block B', '2024-08-19 18:20:28', '2024-08-19 18:20:28'),
(17, 1, 26, 'Block C', '2024-08-19 18:20:40', '2024-08-19 18:20:40'),
(18, 1, 29, 'Block A', '2024-08-30 01:04:30', '2024-08-30 01:04:30'),
(19, 1, 29, 'Block B', '2024-08-30 01:04:42', '2024-08-30 01:04:42'),
(20, 1, 29, 'Block C', '2024-08-30 01:04:51', '2024-08-30 01:04:51');

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
('0a57cb53ba59c46fc4b692527a38a87c78d84028', 'i:1;', 1724987238),
('0a57cb53ba59c46fc4b692527a38a87c78d84028:timer', 'i:1724987238;', 1724987238),
('1574bddb75c78a6fd2251d61e2993b5146201319', 'i:1;', 1725007366),
('1574bddb75c78a6fd2251d61e2993b5146201319:timer', 'i:1725007366;', 1725007366),
('bd307a3ec329e10a2cff8fb87480823da114f8f4', 'i:1;', 1725003692),
('bd307a3ec329e10a2cff8fb87480823da114f8f4:timer', 'i:1725003692;', 1725003692);

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `forum_id`, `comment`, `created_at`, `updated_at`) VALUES
(15, 16, 16, '<p>hi</p>', '2024-08-30 00:43:37', '2024-08-30 00:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `reciever_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `sender_id`, `reciever_id`, `created_at`, `updated_at`) VALUES
(6, 13, 24, '2024-08-28 00:43:46', '2024-08-28 00:43:46'),
(8, 16, 13, '2024-08-30 00:11:58', '2024-08-30 00:11:58'),
(9, 37, 24, '2024-08-30 17:54:10', '2024-08-30 17:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `created_at`, `updated_at`) VALUES
(1, 'BSIT', '2024-08-11 00:06:52', '2024-08-11 00:06:52'),
(2, 'CRIM', '2024-08-11 00:07:25', NULL),
(3, 'BSBA', '2024-08-11 00:07:25', NULL),
(4, 'BAT', '2024-08-11 00:08:33', NULL),
(5, 'BSED', '2024-08-11 00:08:33', NULL),
(6, 'BEED', '2024-08-11 00:10:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `post` longtext NOT NULL,
  `status` enum('private','public') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `course`, `image`, `post`, `status`, `created_at`, `updated_at`) VALUES
(6, 13, 'BSIT', 'eventImage/01J5JN03HKD0TBVT9TXAYMT58D.jpg', '<p>&nbsp;Are you ready to test your coding skills and compete with fellow students? Join us for the [College Name] Coding Challenge 2024! This event is an exciting opportunity for students of all levels to showcase their programming prowess, learn new skills, and win amazing prizes.&nbsp;</p>', 'public', '2024-08-18 03:47:11', '2024-08-18 03:47:11'),
(9, 13, 'BSIT', 'eventImage/01J6GZ6CWQWFSS863EY2C7067E.png', '<p>hi</p>', 'private', '2024-08-29 22:22:35', '2024-08-29 22:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `user_id`, `image`, `first_name`, `last_name`, `position`, `created_at`, `updated_at`) VALUES
(1, 24, NULL, 'faculty', 'faculty', 'It Instructor', NULL, NULL),
(4, 32, NULL, 'faulty1', 'faulty1', 'P.E Teacher', '2024-08-30 01:16:27', '2024-08-30 01:16:27');

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
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('private','public') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `user_id`, `course`, `post`, `image`, `status`, `created_at`, `updated_at`) VALUES
(14, 13, 'BSIT', '<p>hi</p>', 'newsImage/01J6H3NBZ5NDBP7GN4QSJ22V76.png', 'private', '2024-08-29 23:40:40', '2024-08-29 23:40:40'),
(15, 16, 'BSIT', '<p>nice</p>', 'newsImage/01J6H4BRV5Q7EE95JW8ETTDANJ.png', 'private', '2024-08-29 23:52:54', '2024-08-29 23:52:54'),
(16, 16, 'BSIT', '<p>publics</p>', 'newsImage/01J6H75BRNWTP2F1D5YVZEW4GG.png', 'public', '2024-08-30 00:41:50', '2024-08-30 00:42:47');

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
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` bigint(20) UNSIGNED NOT NULL,
  `like` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `conversation_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `reciever_id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `conversation_id`, `sender_id`, `reciever_id`, `body`, `read_at`) VALUES
(56, '2024-08-28 00:43:46', '2024-08-28 00:43:46', 6, 13, 24, 'hi', NULL),
(58, '2024-08-28 00:45:04', '2024-08-28 00:45:04', 6, 13, 24, 'helo', NULL),
(59, '2024-08-28 00:46:18', '2024-08-28 00:46:18', 6, 24, 13, 'what', NULL),
(62, '2024-08-30 00:11:58', '2024-08-30 00:11:58', 8, 16, 13, 'hi', NULL),
(63, '2024-08-30 00:17:02', '2024-08-30 00:17:02', 6, 13, 24, 'hi', NULL),
(64, '2024-08-30 00:23:11', '2024-08-30 00:23:11', 8, 16, 13, 'hello', NULL),
(65, '2024-08-30 17:54:10', '2024-08-30 17:54:10', 9, 37, 24, 'hi', NULL);

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
(4, '2024_08_13_093042_add_profile_picture_to_users_table', 2),
(5, '2024_08_13_113714_create_messages_table', 3),
(6, '2024_08_16_013641_create_comments_table', 3),
(7, '2024_08_16_054411_create_reply_comments_table', 4),
(8, '2024_08_18_083405_create_likes_table', 5),
(9, '2024_08_18_085644_create_likes_table', 6),
(10, '2024_08_18_091551_create_notifications_table', 7),
(11, '2024_08_26_063523_create_conversations_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `post` longtext NOT NULL,
  `status` enum('private','public') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `course`, `image`, `post`, `status`, `created_at`, `updated_at`) VALUES
(31, 13, 'BSIT', 'newsImage/01J6GYNEWNQWV7XP3GYK9V07SF.jfif', '<p>hi</p>', 'private', '2024-08-29 22:13:20', '2024-08-29 22:13:20'),
(32, 13, 'BSIT', 'newsImage/01J6GYQMCMRJGDE8E0ZEH002RM.jfif', '<p>low</p>', 'private', '2024-08-29 22:14:32', '2024-08-29 22:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` bigint(20) UNSIGNED NOT NULL,
  `notification` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('gerolaoalvin09@gmail.com', '$2y$10$Wv3Qs5hBodY47Gp4CTyxJO6DFQmzsdSmpqLl.PAadPTlhGol15hkS', '2024-08-07 23:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reply_comments`
--

CREATE TABLE `reply_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `reply` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ClulDLI56LVoMnmQ0NYA7kJEViSiRIV4hxHpBijj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVU2c3BGYWRNWU9Vd241Ym8yZWdtZnFHQU9xZ0h5Z042NXlrQWJqeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fX0=', 1725069212),
('rNM8L7XCiB2RIrLB4dyQ9YgBjfCQYWPC0eJIPUTm', 37, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibE0xZmt4aHlpcjd5dll5M05LU1Nic1k4OW1zSHpDczU1cTJGTklMNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3J1bXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozNzt9', 1725069433);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `year_id` bigint(20) UNSIGNED NOT NULL,
  `block_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `course_id`, `year_id`, `block_id`, `first_name`, `last_name`, `middle_name`, `gender`, `created_at`, `updated_at`) VALUES
(6, 1, 26, 15, 'Admin', 'admin', 'admin', 'male', '2024-08-19 18:21:16', '2024-08-19 18:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `subject_lists`
--

CREATE TABLE `subject_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_lists`
--

INSERT INTO `subject_lists` (`id`, `course_id`, `year`, `subject_code`, `description`, `unit`, `created_at`, `updated_at`) VALUES
(4, 1, '4th year', 'IT 411', 'Capstone Project and Research 2', '3', '2024-08-20 00:26:14', '2024-08-20 00:26:14'),
(6, 1, '1st year', 'It 211', 'Elective', '3', '2024-08-28 01:43:16', '2024-08-28 01:43:16'),
(7, 1, '2nd year', 'It 211', 'Computer Programming', '3', '2024-08-28 01:43:47', '2024-08-28 01:43:47'),
(8, 1, '3rd year', 'IT 411', 'Elective 2', '3', '2024-08-28 01:44:37', '2024-08-28 01:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` enum('admin','org','student','faculty') NOT NULL DEFAULT 'student',
  `department` varchar(255) DEFAULT NULL,
  `accept` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `position`, `course`, `year`, `block`, `image`, `role`, `department`, `accept`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'It Coordinator', NULL, NULL, NULL, '1', '', '', 'profile-photos/mkh1uay4mikDyPy7PyfaEXrpahJL5l8X5iDHLgO2.jpg', 'admin', 'BSIT', 1, 'admin@gmail.com', NULL, '$2y$12$ahWOvFCtOFYFe0d6ooXCqOd.5oGdZJFxie4qCfv3Xyc9NJOt1H096', NULL, '2024-08-18 03:39:54', '2024-08-18 17:54:04'),
(16, 'student1', 'Student', 'student', NULL, '1', '26', '15', NULL, 'student', NULL, 1, 'student1@gmail.com', NULL, '$2y$12$TUmCUQxfARgsb5dU6ufiEezOnpHzC4sJTE.AC9Lmu/efMg.Fuw9ti', NULL, '2024-08-23 18:03:11', '2024-08-23 18:03:11'),
(24, 'faculty', 'faculty', 'faculty', 'It Instructor', NULL, NULL, NULL, NULL, 'faculty', NULL, 1, 'faculty@gmail.com', NULL, '$2y$12$1kX.gflZnhYhTMMYmQbux.ZR1ZvYnSALoN6eUU7GpPCgq0BU4JstW', NULL, '2024-08-24 19:58:37', '2024-08-24 19:58:50'),
(28, 'The Truth', NULL, NULL, NULL, '', NULL, NULL, NULL, 'org', NULL, 1, 'org@gmail.com', NULL, '$2y$12$zsuTvcH1yPt73VqI.tr2WucIMiBvOsHsDrfLS9iHeR4s0b0Q8tl.K', NULL, '2024-08-28 23:00:40', '2024-08-28 23:01:13'),
(30, 'org1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'org', NULL, 1, 'org1@gmail.com', NULL, '$2y$12$Vyz3Gr4EF2cWSwrnIuph6.uGxZj5QNuad.fh4tjOaM5Ol7QpwVeyq', NULL, '2024-08-30 01:08:25', '2024-08-30 01:08:25'),
(32, 'faulty1', 'faulty1', 'faulty1', 'P.E Teacher', NULL, NULL, NULL, NULL, 'faculty', NULL, 1, 'faulty1@gmail.com', NULL, '$2y$12$5UyPGflxKcAd/OdIj/lNDOcfHYRcZo5nL7UR9IaMXlCCg9HonCiNO', NULL, '2024-08-30 01:16:08', '2024-08-30 01:16:27'),
(33, 'Crim Department', NULL, NULL, NULL, '2', NULL, NULL, NULL, 'admin', NULL, 1, 'crim@gmail.com', NULL, '$2y$12$/jIdOOcp7VLDiMPEShesmuAuUvx/ij.wUT18pRdtkhJopLkchFrWO', NULL, '2024-08-30 17:42:56', '2024-08-30 17:43:18'),
(34, 'BSBA Department', NULL, NULL, NULL, '3', NULL, NULL, NULL, 'admin', NULL, 1, 'bsba@gmail.com', NULL, '$2y$12$iosv0noqsfpvBO55Y7JcXuwkswPAZZYHKlIRne0tUhgtqPMcv.6EK', NULL, '2024-08-30 17:46:07', '2024-08-30 17:46:16'),
(35, 'BAT Department', NULL, NULL, NULL, '4', NULL, NULL, NULL, 'admin', NULL, 1, 'bat@gmail.com', NULL, '$2y$12$C9Q0b5kyfA/33VupUYrvHe6bFuKH8K3k5rk34LgBG4NKSumpyxqA6', NULL, '2024-08-30 17:48:13', '2024-08-30 17:48:23'),
(36, 'BSED Department', NULL, NULL, NULL, '5', NULL, NULL, NULL, 'admin', NULL, 1, 'bsed@gmail.com', NULL, '$2y$12$AXdddMv79.mybvN8QhOnSek7zWJYRz0xIrHW.ERgrm2QHcFEYkx0K', NULL, '2024-08-30 17:49:45', '2024-08-30 17:49:55'),
(37, 'BEED Department', NULL, NULL, NULL, '6', NULL, NULL, NULL, 'admin', NULL, 1, 'beed@gmail.com', NULL, '$2y$12$hAI8v3ZrCRi8SNbu9j6H6.wURUMLZNGnfFwty.A.x7OVQVD2g.OWC', NULL, '2024-08-30 17:51:12', '2024-08-30 17:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `course_id`, `year`, `created_at`, `updated_at`) VALUES
(26, 1, '1st year', '2024-08-19 17:43:47', '2024-08-19 17:43:47'),
(27, 1, '2nd Year', '2024-08-19 17:43:58', '2024-08-19 17:43:58'),
(28, 1, '3rd Year', '2024-08-19 17:44:07', '2024-08-19 17:44:07'),
(29, 1, '4rd Year', '2024-08-19 18:18:36', '2024-08-19 18:18:36'),
(30, 2, '1st year', '2024-08-28 01:05:32', '2024-08-28 01:05:32'),
(31, 2, '2nd Year', '2024-08-28 01:07:20', '2024-08-28 01:07:20'),
(32, 2, '3rd Year', '2024-08-28 01:07:28', '2024-08-28 01:07:28'),
(33, 2, '4th Year', '2024-08-28 01:07:40', '2024-08-28 01:07:40'),
(34, 3, '1st year', '2024-08-28 01:08:02', '2024-08-28 01:08:02'),
(35, 3, '2nd Year', '2024-08-28 01:08:10', '2024-08-28 01:08:10'),
(37, 3, '3rd Year', '2024-08-28 01:08:52', '2024-08-28 01:08:52'),
(38, 3, '4th year', '2024-08-28 01:09:01', '2024-08-28 01:09:01'),
(39, 4, '1st year', '2024-08-28 01:09:18', '2024-08-28 01:09:18'),
(40, 4, '2nd Year', '2024-08-28 01:09:33', '2024-08-28 01:09:33'),
(41, 4, '3rd Year', '2024-08-28 01:09:41', '2024-08-28 01:09:41'),
(42, 4, '4th year', '2024-08-28 01:09:49', '2024-08-28 01:09:49'),
(43, 5, '1st year', '2024-08-28 01:10:11', '2024-08-28 01:10:11'),
(44, 5, '2nd Year', '2024-08-28 01:10:19', '2024-08-28 01:10:19'),
(45, 5, '3rd Year', '2024-08-28 01:10:28', '2024-08-28 01:10:28'),
(46, 5, '4th year', '2024-08-28 01:10:37', '2024-08-28 01:10:37'),
(47, 6, '1st year', '2024-08-28 01:11:06', '2024-08-28 01:11:06'),
(48, 6, '2nd Year', '2024-08-28 01:11:15', '2024-08-28 01:11:15'),
(49, 6, '3rd Year', '2024-08-28 01:11:22', '2024-08-28 01:11:22'),
(50, 6, '4th year', '2024-08-28 01:11:31', '2024-08-28 01:11:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bad_comments`
--
ALTER TABLE `bad_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_forum_id_foreign` (`forum_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reciever_id` (`reciever_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `likes_user_id_forum_id_unique` (`user_id`,`forum_id`),
  ADD KEY `likes_forum_id_foreign` (`forum_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversation_id` (`conversation_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `reciever_id` (`reciever_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`),
  ADD KEY `notifications_forum_id_foreign` (`forum_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_comments_user_id_foreign` (`user_id`),
  ADD KEY `reply_comments_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_id` (`block_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `subject_lists`
--
ALTER TABLE `subject_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bad_comments`
--
ALTER TABLE `bad_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject_lists`
--
ALTER TABLE `subject_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blocks_ibfk_2` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_ibfk_1` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversations_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD CONSTRAINT `reply_comments_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reply_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_lists`
--
ALTER TABLE `subject_lists`
  ADD CONSTRAINT `subject_lists_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `years`
--
ALTER TABLE `years`
  ADD CONSTRAINT `years_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
