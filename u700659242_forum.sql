-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2024 at 11:39 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u700659242_forum`
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
(51, 'animal ka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'fuckyou', '2024-09-16 23:21:43', '2024-09-16 23:21:43'),
(53, 'nigga', '2024-12-07 02:30:15', '2024-12-07 02:30:15'),
(54, 'nigger', '2024-12-07 02:30:19', '2024-12-07 02:30:19');

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
(15, 1, 26, 'Block A', '2024-08-19 18:20:14', '2024-09-16 17:44:35'),
(16, 1, 26, 'Block B', '2024-08-19 18:20:28', '2024-08-19 18:20:28'),
(22, 1, 27, 'Block A', '2024-09-11 18:36:43', '2024-09-11 18:36:43'),
(23, 1, 27, 'Block B', '2024-09-11 18:36:54', '2024-09-11 18:36:54'),
(24, 1, 27, 'Block C', '2024-09-11 18:37:06', '2024-09-11 18:37:06'),
(25, 1, 27, 'Block D', '2024-09-11 18:37:15', '2024-09-11 18:37:15'),
(31, 1, 26, 'Block C', '2024-09-16 17:46:47', '2024-09-16 17:46:47'),
(32, 1, 26, 'Block D', '2024-09-16 17:46:58', '2024-09-16 17:46:58'),
(33, 1, 51, 'Block A', '2024-09-21 17:57:53', '2024-09-21 17:57:53'),
(34, 1, 51, 'Block B', '2024-09-21 17:58:02', '2024-09-21 17:58:02'),
(35, 2, 30, 'Block A', '2024-11-25 01:41:38', '2024-11-25 01:41:38'),
(36, 2, 31, 'Block A', '2024-11-25 01:56:28', '2024-11-25 01:56:28'),
(37, 2, 31, 'Block B', '2024-11-25 01:56:41', '2024-11-25 01:56:41'),
(38, 2, 31, 'Block C', '2024-11-25 01:56:49', '2024-11-25 01:56:49'),
(39, 2, 30, 'Block B', '2024-11-25 01:57:07', '2024-11-25 01:57:07'),
(40, 2, 30, 'Block C', '2024-11-25 01:57:14', '2024-11-25 01:57:14'),
(41, 2, 32, 'Block A', '2024-11-25 01:57:25', '2024-11-25 01:57:25'),
(42, 1, 51, 'Block C', '2024-12-05 03:29:17', '2024-12-05 03:29:17'),
(43, 3, 37, 'Block A', '2024-12-05 03:29:40', '2024-12-05 03:29:40'),
(44, 3, 37, 'Block B', '2024-12-05 03:29:48', '2024-12-05 03:29:48'),
(45, 1, 53, 'Block A', '2024-12-05 03:51:21', '2024-12-05 03:51:21');

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
('0286dd552c9bea9a69ecb3759e7b94777635514b', 'i:1;', 1733189676),
('0286dd552c9bea9a69ecb3759e7b94777635514b:timer', 'i:1733189676;', 1733189676),
('1d513c0bcbe33b2e7440e5e14d0b22ef95c9d673', 'i:1;', 1733548908),
('1d513c0bcbe33b2e7440e5e14d0b22ef95c9d673:timer', 'i:1733548908;', 1733548908),
('1f1362ea41d1bc65be321c0a378a20159f9a26d0', 'i:1;', 1733527147),
('1f1362ea41d1bc65be321c0a378a20159f9a26d0:timer', 'i:1733527147;', 1733527147),
('22982fa82bca2406011f1a8188992c554b80a08e', 'i:2;', 1733452604),
('22982fa82bca2406011f1a8188992c554b80a08e:timer', 'i:1733452604;', 1733452604),
('2866d7a42d30e356852633bdc58763aff98a90cc', 'i:1;', 1733552741),
('2866d7a42d30e356852633bdc58763aff98a90cc:timer', 'i:1733552741;', 1733552741),
('2d5b043e2312547a19722b3360a845648527675b', 'i:3;', 1733552134),
('2d5b043e2312547a19722b3360a845648527675b:timer', 'i:1733552134;', 1733552134),
('35e995c107a71caeb833bb3b79f9f54781b33fa1', 'i:1;', 1733534230),
('35e995c107a71caeb833bb3b79f9f54781b33fa1:timer', 'i:1733534230;', 1733534230),
('3c26dffc8a2e8804dfe2c8a1195cfaa5ef6d0014', 'i:1;', 1733550722),
('3c26dffc8a2e8804dfe2c8a1195cfaa5ef6d0014:timer', 'i:1733550722;', 1733550722),
('450ddec8dd206c2e2ab1aeeaa90e85e51753b8b7', 'i:1;', 1733527618),
('450ddec8dd206c2e2ab1aeeaa90e85e51753b8b7:timer', 'i:1733527618;', 1733527618),
('539215101063a4b2505c63749abcc4f3131ee116', 'i:1;', 1733484320),
('539215101063a4b2505c63749abcc4f3131ee116:timer', 'i:1733484320;', 1733484320),
('5a5b0f9b7d3f8fc84c3cef8fd8efaaa6c70d75ab', 'i:1;', 1733485009),
('5a5b0f9b7d3f8fc84c3cef8fd8efaaa6c70d75ab:timer', 'i:1733485009;', 1733485009),
('60ba0cd1d3138d3c7b351084533df326268c87e6', 'i:2;', 1733402505),
('60ba0cd1d3138d3c7b351084533df326268c87e6:timer', 'i:1733402505;', 1733402505),
('6bdec327fcc70c985e5fd35064fd8aa9229a7777', 'i:1;', 1732246216),
('6bdec327fcc70c985e5fd35064fd8aa9229a7777:timer', 'i:1732246216;', 1732246216),
('81f4f7022e213389e160bd456ece76c19588d1a7', 'i:1;', 1733370885),
('81f4f7022e213389e160bd456ece76c19588d1a7:timer', 'i:1733370885;', 1733370885),
('8effee409c625e1a2d8f5033631840e6ce1dcb64', 'i:1;', 1732580597),
('8effee409c625e1a2d8f5033631840e6ce1dcb64:timer', 'i:1732580597;', 1732580597),
('92cfceb39d57d914ed8b14d0e37643de0797ae56', 'i:1;', 1733370625),
('92cfceb39d57d914ed8b14d0e37643de0797ae56:timer', 'i:1733370625;', 1733370625),
('98fbc42faedc02492397cb5962ea3a3ffc0a9243', 'i:1;', 1733527063),
('98fbc42faedc02492397cb5962ea3a3ffc0a9243:timer', 'i:1733527063;', 1733527063),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1732071230),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1732071230;', 1732071230),
('a72b20062ec2c47ab2ceb97ac1bee818f8b6c6cb', 'i:1;', 1733398969),
('a72b20062ec2c47ab2ceb97ac1bee818f8b6c6cb:timer', 'i:1733398969;', 1733398969),
('af3e133428b9e25c55bc59fe534248e6a0c0f17b', 'i:1;', 1727072917),
('af3e133428b9e25c55bc59fe534248e6a0c0f17b:timer', 'i:1727072917;', 1727072917),
('b37f6ddcefad7e8657837d3177f9ef2462f98acf', 'i:1;', 1733551123),
('b37f6ddcefad7e8657837d3177f9ef2462f98acf:timer', 'i:1733551123;', 1733551123),
('b90326cec1ba72a63ded55a4ed0336545646b630', 'i:1;', 1733047713),
('b90326cec1ba72a63ded55a4ed0336545646b630:timer', 'i:1733047713;', 1733047713),
('bd307a3ec329e10a2cff8fb87480823da114f8f4', 'i:1;', 1733550321),
('bd307a3ec329e10a2cff8fb87480823da114f8f4:timer', 'i:1733550321;', 1733550321),
('be7fa1032fd008f9833616ccd2e5f9d27dcce224', 'i:1;', 1733369874),
('be7fa1032fd008f9833616ccd2e5f9d27dcce224:timer', 'i:1733369874;', 1733369874),
('c086c490145c484d25d9db9466ab5fa7bb86baed', 'i:1;', 1732245645),
('c086c490145c484d25d9db9466ab5fa7bb86baed:timer', 'i:1732245645;', 1732245645),
('c3e0f4a7bc952aa0577ce041081832c5a6d09f0e', 'i:1;', 1733543112),
('c3e0f4a7bc952aa0577ce041081832c5a6d09f0e:timer', 'i:1733543112;', 1733543112),
('d321d6f7ccf98b51540ec9d933f20898af3bd71e', 'i:1;', 1733539131),
('d321d6f7ccf98b51540ec9d933f20898af3bd71e:timer', 'i:1733539131;', 1733539131),
('dcaac732a065465b2587f8474a0530557134b2f7', 'i:2;', 1733371205),
('dcaac732a065465b2587f8474a0530557134b2f7:timer', 'i:1733371205;', 1733371205),
('e62d7f1eb43d87c202d2f164ba61297e71be80f4', 'i:1;', 1733550029),
('e62d7f1eb43d87c202d2f164ba61297e71be80f4:timer', 'i:1733550029;', 1733550029),
('eb4ac3033e8ab3591e0fcefa8c26ce3fd36d5a0f', 'i:1;', 1733539699),
('eb4ac3033e8ab3591e0fcefa8c26ce3fd36d5a0f:timer', 'i:1733539699;', 1733539699),
('fc2ce36998f07d7a6e9e0052850ef1ea5887f8dd', 'i:1;', 1733391792),
('fc2ce36998f07d7a6e9e0052850ef1ea5887f8dd:timer', 'i:1733391792;', 1733391792);

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
(28, 13, 23, '<p>hi</p>', '2024-11-30 06:06:22', '2024-11-30 06:06:22'),
(34, 86, 42, '<p>losers!</p>', '2024-12-07 05:24:56', '2024-12-07 05:24:56'),
(35, 86, 52, '<p>bawal dito yung pulangaw!</p>', '2024-12-07 05:28:29', '2024-12-07 05:28:29'),
(36, 86, 52, '<p>sasama ka pero di ka naman nakikita</p>', '2024-12-07 05:29:17', '2024-12-07 05:29:17'),
(37, 87, 52, '<p>Habo ko fake an bayad</p>', '2024-12-07 05:29:52', '2024-12-07 05:29:52'),
(38, 86, 53, '<p>katigbakon na yun! tama na!</p>', '2024-12-07 05:30:12', '2024-12-07 05:30:12'),
(39, 89, 52, '<p>ilaban an pulangaw., Hanggang Kulungan.</p>', '2024-12-07 05:31:39', '2024-12-07 05:31:39'),
(40, 86, 57, '<p>booooo!</p>', '2024-12-07 05:45:40', '2024-12-07 05:45:40'),
(41, 86, 57, '<p>Listahan ng mga paasa:</p><ul><li>Jane</li><li>Doe</li><li>Hoe</li><li>Bitch</li></ul>', '2024-12-07 05:47:04', '2024-12-07 05:47:04');

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
(9, 37, 24, '2024-08-30 17:54:10', '2024-08-30 17:54:10'),
(24, 13, 67, '2024-12-05 04:09:34', '2024-12-05 04:09:34'),
(38, 13, 89, '2024-12-07 05:35:13', '2024-12-07 05:35:13'),
(39, 78, 13, '2024-12-07 05:35:32', '2024-12-07 05:35:32');

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
(18, 59, 'BSBA', 'eventImage/01JEADM68409F8RTZ5ATA19XYY.jfif', '<p>BSBA DAY</p>', 'public', '2024-12-05 03:25:41', '2024-12-05 03:25:41');

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
(1, 24, 'facultyImage/01J7YVF97VMAE6C2TX2FYPT28X.jfif', 'faculty', 'Gozo', 'It Instructor', NULL, '2024-09-23 01:31:08'),
(4, 32, NULL, 'faulty1', 'faulty1', 'P.E Teacher', '2024-08-30 01:16:27', '2024-08-30 01:16:27'),
(5, 67, 'facultyImage/01JEFV45MD3V1JV27Z1242Y0J1.jpg', 'Bronnyshshshshahaba', 'James', 'BSBA TEACHER', '2024-12-05 04:09:08', '2024-12-07 05:57:48');

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
  `year` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('private','public') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `user_id`, `course`, `post`, `year`, `image`, `status`, `created_at`, `updated_at`) VALUES
(23, 13, 'BSIT', '<p>grgr</p>', '2nd year', NULL, 'public', '2024-09-22 23:18:34', '2024-09-22 23:49:47'),
(37, 59, 'BSBA', '<p>HI GUYS</p>', '3rd year', 'newsImage/01JEAEPJ61NAQQSHVN7CF9V075.jfif', 'private', '2024-12-05 03:44:27', '2024-12-05 03:45:40'),
(42, 71, 'CRIM', '<p>hi</p>', '1st year', NULL, 'public', '2024-12-05 09:55:55', '2024-12-05 10:00:52'),
(43, 71, 'CRIM', '<p>hello</p>', '1st year', NULL, 'private', '2024-12-05 10:11:42', '2024-12-05 10:56:03'),
(50, 77, 'BSIT', '<p>12345</p>', '2nd year', 'newsImage/01JEFFPW3Y6Q6WPBXT0JBMZFVN.png', 'private', '2024-12-07 02:38:18', '2024-12-07 02:38:18'),
(52, 88, 'BSIT', '<p>Tara sama na sa Rally</p>', '1st year', 'newsImage/01JEFSCZF3JDQ4Y1205CF6VM7R.jpeg', 'public', '2024-12-07 05:27:40', '2024-12-07 05:27:40'),
(53, 88, 'BSIT', '<p>Tara na</p>', '1st year', 'newsImage/01JEFSG9B7B46H7CGZ4S2R71AV.jpg', 'public', '2024-12-07 05:29:28', '2024-12-07 05:29:28'),
(54, 88, 'BSIT', '<p>Lost and found</p>', '1st year', 'newsImage/01JEFSJ4TCMJ2PZ0BPV5TCECPM.jpg', 'public', '2024-12-07 05:30:29', '2024-12-07 05:30:29'),
(55, 88, 'BSIT', '<p>Ready and Action&nbsp;</p>', '1st year', 'newsImage/01JEFSR4A529X3MY2G3SF03MTD.jpg', 'public', '2024-12-07 05:33:45', '2024-12-07 05:35:43'),
(56, 86, 'BSIT', '<p>Puro naman pulangaw dito. 👎👎👎</p><p>Dapat iban yang mga yan. 👌</p>', '1st year', NULL, 'public', '2024-12-07 05:34:06', '2024-12-07 05:34:06'),
(57, 88, 'BSIT', '<p>Duterte Matrix&nbsp;</p>', '1st year', 'newsImage/01JEFT06B2WGPQ860Y3N5WDKSC.jpeg', 'public', '2024-12-07 05:38:09', '2024-12-07 05:38:09'),
(58, 88, 'BSIT', '<p>Mga Gonggong, hayup</p>', '1st year', 'newsImage/01JEFTJ2WH0SN722SG365DKMA5.jpeg', 'private', '2024-12-07 05:47:56', '2024-12-07 05:48:23'),
(59, 86, 'BSIT', '<p>Good vibes!</p>', '1st year', 'newsImage/01JEFTJ6HWJGKBY4YA843GGXWC.jpg', 'public', '2024-12-07 05:47:59', '2024-12-07 05:47:59'),
(60, 86, 'BSIT', '<p>Sabaw sa malamig na panahon!</p>', '1st year', 'newsImage/01JEFTR9A2S7NEFB6D4MNRGCK6.jpg', 'public', '2024-12-07 05:51:19', '2024-12-07 05:51:19'),
(61, 88, 'BSIT', '<p>Sara ulo</p>', '1st year', 'newsImage/01JEFTRRQY3Y0T7Y2N6DRC1212.jpg', 'public', '2024-12-07 05:51:35', '2024-12-07 05:51:35');

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

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `forum_id`, `like`, `created_at`, `updated_at`) VALUES
(42, 87, 42, 1, '2024-12-07 05:26:14', '2024-12-07 05:26:14'),
(43, 86, 60, 1, '2024-12-07 05:56:07', '2024-12-07 05:56:07');

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
  `photo` varchar(255) DEFAULT NULL,
  `unsent` tinyint(1) NOT NULL DEFAULT 0,
  `read_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `conversation_id`, `sender_id`, `reciever_id`, `body`, `photo`, `unsent`, `read_at`) VALUES
(103, '2024-11-22 02:26:04', '2024-11-22 02:26:04', 6, 13, 24, 'Nice', NULL, 0, NULL),
(106, '2024-11-22 02:28:09', '2024-11-22 02:28:09', 6, 13, 24, 'Hey', NULL, 0, NULL),
(196, '2024-12-05 04:09:34', '2024-12-05 04:09:34', 24, 13, 67, 'hi po', NULL, 0, NULL),
(233, '2024-12-07 05:35:13', '2024-12-07 05:35:30', 38, 13, 89, 'hi sir', NULL, 0, '2024-12-07 05:35:30'),
(235, '2024-12-07 05:35:32', '2024-12-07 05:35:32', 39, 78, 13, 'Gdbdh', NULL, 0, '2024-12-07 05:35:32'),
(236, '2024-12-07 05:35:41', '2024-12-07 05:35:41', 38, 13, 89, 'block kana', NULL, 0, '2024-12-07 05:35:41'),
(237, '2024-12-07 05:35:52', '2024-12-07 05:35:52', 38, 89, 13, 'helo po. Pla desisyon yan', NULL, 0, '2024-12-07 05:35:52'),
(238, '2024-12-07 05:36:41', '2024-12-07 05:37:03', 38, 13, 89, 'ban kana', NULL, 0, '2024-12-07 05:37:03'),
(239, '2024-12-07 05:37:11', '2024-12-07 05:37:11', 38, 89, 13, 'bagsak ka na', NULL, 0, '2024-12-07 05:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `message_notifications`
--

CREATE TABLE `message_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_notifications`
--

INSERT INTO `message_notifications` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(18, 24, 'Nice', '2024-11-22 02:26:04', '2024-11-22 02:26:04'),
(21, 24, 'Hey', '2024-11-22 02:28:09', '2024-11-22 02:28:09'),
(22, 24, NULL, '2024-11-22 02:28:10', '2024-11-22 02:28:10'),
(144, 87, NULL, '2024-12-07 05:35:01', '2024-12-07 05:35:01'),
(146, 88, NULL, '2024-12-07 05:35:18', '2024-12-07 05:35:18');

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
(11, '2024_08_26_063523_create_conversations_table', 8),
(12, '2024_11_20_025348_create_message_notifications_table', 9);

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
(38, 13, 'BSIT', NULL, '<p>wewebgbggg</p>', 'private', '2024-11-19 17:10:27', '2024-11-19 17:15:32'),
(39, 13, 'BSIT', NULL, '<p>gfrfr</p>', 'private', '2024-11-19 17:12:32', '2024-11-25 01:17:35'),
(45, 13, 'BSIT', 'newsImage/01JEFTBVB0RQG9VBRN0CRFGF5P.jpg', '<p>This handout photo taken and released on December 7, 2024, by the South Korean Presidential Office shows South Korea’s President Yoon Suk Yeol bowing after the end of his address at the Presidential Office in Seoul. Yoon stopped short of resigning on December 7 over his declaration of martial law, with a vote to impeach him hours away and mass street protests planned in Seoul. (Photo by Handout / South Korean Presidential Office / AFP) <br><br></p>', 'public', '2024-12-07 05:44:31', '2024-12-07 05:44:31');

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

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `forum_id`, `notification`, `created_at`, `updated_at`) VALUES
(30, 13, 23, 'ADMIN comment to your post', '2024-11-30 06:06:22', '2024-11-30 06:06:22'),
(40, 86, 42, 'rancho comment to your post', '2024-12-07 05:24:56', '2024-12-07 05:24:56'),
(41, 87, 42, 'Pull react to your post', '2024-12-07 05:26:14', '2024-12-07 05:26:14'),
(42, 86, 52, 'rancho comment to your post', '2024-12-07 05:28:29', '2024-12-07 05:28:29'),
(43, 86, 52, 'rancho comment to your post', '2024-12-07 05:29:17', '2024-12-07 05:29:17'),
(44, 87, 52, 'Pull comment to your post', '2024-12-07 05:29:52', '2024-12-07 05:29:52'),
(45, 86, 53, 'rancho comment to your post', '2024-12-07 05:30:12', '2024-12-07 05:30:12'),
(46, 89, 52, 'Van Jasper comment to your post', '2024-12-07 05:31:39', '2024-12-07 05:31:39'),
(47, 86, 57, 'rancho comment to your post', '2024-12-07 05:45:40', '2024-12-07 05:45:40'),
(48, 86, 57, 'rancho comment to your post', '2024-12-07 05:47:04', '2024-12-07 05:47:04'),
(49, 86, 60, 'rancho react to your post', '2024-12-07 05:56:07', '2024-12-07 05:56:07');

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
('gerolaoalvin09@gmail.com', '$2y$12$t0uvjX9ZDRHGHUJq1EB5mOfErWTjPGsr0godXdFkuOC8LB3y7T4u2', '2024-08-30 22:34:32');

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

--
-- Dumping data for table `reply_comments`
--

INSERT INTO `reply_comments` (`id`, `user_id`, `comment_id`, `reply`, `created_at`, `updated_at`) VALUES
(38, 89, 41, 'Shit', '2024-12-07 05:48:03', '2024-12-07 05:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `forum_id`, `reason`, `created_at`, `updated_at`) VALUES
(1, 13, 18, 'using bad words\n', '2024-09-16 18:48:56', '2024-09-16 18:48:56'),
(2, 13, 16, 'using badwords', '2024-09-16 19:56:31', '2024-09-16 19:56:31'),
(4, 13, 16, 'bad words', '2024-09-16 19:58:07', '2024-09-16 19:58:07'),
(7, 88, 61, 'Buang', '2024-12-07 05:53:55', '2024-12-07 05:53:55');

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
('0E0TsQJGlmV2KdfzcdvOwFiZK81dnB33ehxMPLzT', 13, '175.176.51.122', 'okhttp/4.9.2', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYndKbUlFcGJxWWFZRWtUSDBkSjQyTEZ0NTNnNU1HSnJWemFMYlg5MSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwczovL3ZjaS1mb3J1bS5vbmxpbmUvbm90aWYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMzt9', 1733577071),
('2Oj9saLyox4IfikmKuuGUFcVtbJX5qsGqhfSSZ14', NULL, '43.130.37.243', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZlZ6bU0zVlhFM3dOT2xsV05uUWZ2Rlp1Q2lud3N4cUlvalJJaHFxSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733952212),
('31ArvmTqpx3Cl6QwOFr2yKKy2sTuJucULx4Lmmig', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHBSWTVVd0FJUUxGTDgzZ1VqbGl4NXFVdnplOUdyd01pWWtGTE4yZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733892540),
('4wjV7pgAxosSHkIqxintifLq7LidX411lRcSzU7g', NULL, '43.130.37.243', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkx6WHFRNDNFemt5azdSODdmdGNBYjN4a0VkVnBlRThpWnJIZXUyQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LnZjaS1mb3J1bS5vbmxpbmUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733952214),
('68bvLlj9t6VFupFLC91oNuor3F5HZ2pU3IGE3BhP', NULL, '137.184.31.22', 'Mozilla/5.0 (compatible)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMGVNNjA1VzhyTVIwZzZpUHlvbzFScHVoZDBOZXBKYms4cjVNYnJhciI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733859213),
('6PsqShwyXAA62Wu5yXZOH1NgMy08q0lGaCj3tPUt', NULL, '66.249.70.38', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.108 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTmF4QklzWjIyVzgwZ2JPMU9GYTcwZ2g4alB6Y0Rzc0kyRlVCZ053WSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733947722),
('7vSMGCES6cED5TXF3Kjlsqggdn2mmp9SiTErDbZt', NULL, '180.102.134.69', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkZIMUJscm1jUHBia3dPVUh0dm9JMUxYTXhUWWdYVXBmTHpFNUtkaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LnZjaS1mb3J1bS5vbmxpbmUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733654465),
('8fJhJCVA3ms4mbvDtd7cAxDA7voPRPlH1dOdTNDD', NULL, '43.135.144.81', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2FKeXdqSXdiOVk5Ynd0a1VSeUhxQVBXanJsNzhIMnpPUFBDTFh4ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LnZjaS1mb3J1bS5vbmxpbmUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733831232),
('8RVuRW4SxJwMjG9xre7k85Y5aGQzBXnIXpiE1raB', NULL, '2a03:b0c0:3:d0::12f7:9001', '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSTlxMDMzand2Tk9aM1NyU3pXYjhvVjlONGlQdldodll6WUppN01NcCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956594),
('9iFT3NfV514SFwBz5TXUtTZOUadIV9cIOmAKLtsY', NULL, '205.169.39.222', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMHlRM2VYbGdVWmhBWHJmeVBTQVFLMWdYVENRWVVMYmtHTXdUNXZjTCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956708),
('9mC08zzekW3ddxMOS1rMlnbv040qJed5DraUSCvN', NULL, '174.138.15.150', 'Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicEI5dlA5WjYxTkhYeVliVUcwM29ZSmdJcVgzdGp5TWJiT0EwNE1sQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956743),
('A8K3meFIBttN4CN3uyCmXlO48Mg00lWYKlyRBvGl', NULL, '135.148.195.13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnlMemNaWDJsYXh6azVoWXFCOEF1YlNpUjR4UUF0ZnBjQXF2bUdDRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733739735),
('acrIpe8Ekn3DhyV8Ij4eDg0iW5y7rWC8ySXw0bh2', NULL, '149.50.212.202', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Safari/605.1.15', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieWJ4WWdxbWtSYTNzZXh4bWFtUVp2TzFGQWQ0aldZbWZqYkNqV2FoaSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733605893),
('AVuhZX3adoWxP3APXlGaNiP0z0hRrhRbI4KMdw6z', NULL, '142.93.55.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVURlUElQY2ZnZXExUVdiYXY1Y3dNNkVHWERDeHRZTDd1M0xDYkRjbiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733686379),
('bdrS6dfNaWQMZVBj17t42VUgt1xeQjsLJGWMAqTH', NULL, '205.169.39.7', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRXY0eE51SktQVnZNNmpYUG5UZExyazJJaDJCN0t0T2FodEkzNzV2eiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956631),
('bHyEyHsMbXVLlS4o1qy8e2uOSRFazgMsf5B1d4Cd', NULL, '50.17.70.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYm9XYzlvbU5OZk1iNmt4T3g3NUJIYkpTNkprT0I0QzlwaXJPRjZmeiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733957034),
('BtsfptofWJ5EKWPICdPLCCdba9Ihr45E6vgB3T68', NULL, '34.123.170.104', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/125.0.6422.60 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUDB3dEdGWGVqM0ZvTzBQS3JWaDNKdDdTWkpLS210TkNWUzJzckFqUiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956634),
('CMpxBjRepbGw8oybJw995WxraFi1kUKytx3RlIXS', NULL, '174.138.15.150', 'Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWV5cE10OUlEZWloalVIdlk5OE93NlZtVDY5d1F3Z0ZoVk9LY0ZSaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956744),
('CSBlJ4Xodrc0I0CR24Nydz58wFVC5QXskOn7EGKQ', NULL, '93.158.91.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3dzdllGOUE2VXdWdlV5bHM1Y2xQazhlV0p1TEIwcU9UQVo2ZDdpTiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733830168),
('CsmTRt1BhUFy0hvML9tNsy7YTiwTK6b9723CzsDB', NULL, '69.55.54.221', 'Mozilla/5.0 (compatible)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUHRJeXNvRFM3anR0cUt0UVBPdmg0THM4N0M5VXZYQTh3WWd6TEhFSCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733925760),
('e93AMZf0JosePVTRmX3oBn7chrEHEoyokgYJW0Ko', NULL, '205.169.39.222', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTWNrZ3JVRlNZUHh2clV2WVBSWU95N3VPYjJvcmQwOVZwNHEyTjYxYiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956695),
('eGwrnFVNztLa1nfdadjj2Ka14cYemJPy2LhXEcf0', NULL, '104.164.173.38', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibDJONzNoZ0Jwams1M2NTT2V1Tk5xNWFjMHJEaWtIcDlZT2pxamNUeSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733959726),
('FKIDDwczLoUEO4T281HbSSX13F2nwv62ifhVoubC', NULL, '13.59.34.111', 'curl/8.3.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSHZSTmpCa3BKWk84R2ZqZHpSVzkzNmk5dUtQUFlVb3dteHRjZEU4cyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733838370),
('fpYxCtZSFjvovEp9cpaNDZHWwg8CpcC6hiro3EWF', NULL, '98.84.191.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieUhLeW1LNDJyVWJZQkp6T1pyM1dxZnhTTEVWSWtnQm9nQjhmMmRzSSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956748),
('gmatihFylzy4qw8V99gGZIlzVz0RtcmrMQGdEPfa', NULL, '137.184.31.22', 'Mozilla/5.0 (compatible)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3dpenhlMndQdkVDYzNUTVVFRHZIT3oyUjQ1d0UwUkc0QTc5Y2pRdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733859220),
('hxJuLnyyW3cpdcAekQ0tUWjHZsgnQpZSflwsG2Uh', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVVIxVWJoWXBvVkNaaXI1aGhINTRJell2QUY5dXBOWnVrYUZSWmxJRSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733632508),
('IOJLsfTSfi79hjvHnu66qkyJOcs78dsJlkp0QI7N', NULL, '165.22.31.161', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_6) AppleWebKit/537.78.2 (KHTML, like Gecko) Version/7.0.6 Safari/537.78.2', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZUFMZFE3UkJLUjlYa2xGdVdROHUybzVNbWU5RUJVWkdzTDE5alN5OCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733931209),
('iVyKD4RCWOTnq4Snw5QmCB2NNGmCNzy4uIgzo1nN', NULL, '154.28.229.145', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidW1MTkNkRk1xTEE2aldrT2RYT2FHV0JpY29rdXNQV3VqQzBkMXowciI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733959712),
('JicM7Hf95Kvm6K4ZqEbAj3tAADBNpUaw8C5HV5FC', NULL, '142.132.250.3', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRlBkTXJyZWc5ZUtXSXM4V2ZkTGNTaFVTdk1ROVl3RDVzY0tmeHZRQyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956740),
('l0CNcae2vPTJNAWpEFYgw48KlN931cCHvlcSuBA2', NULL, '154.28.229.25', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZmVhcG02SmEzZ0lmT3IyNXZpeVZVMExPcFZRZElwdjFsbDB3Zmk0QSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956576),
('L111ylHOJEoEj9eYf8cLVP2eOJqeceBhuNg2dw8V', NULL, '80.85.247.231', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3lLT1NxNTFrNXlDUzR3N05PNHJTRTduZUlNbWp4NTFuM0FpZGpnVSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9yZWdpc3Rlci1mYWN1bHR5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733838196),
('l1QxIYrN84ndOxNGGjo6CQSqGBMaASezCBUEZif4', NULL, '175.176.51.122', 'okhttp/4.9.2', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzBsOE95RmM0WnhnSzZIUURSeklOdm02NWZGZTlYdGVUdlJQS3dSSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9ub3RpZiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733576986),
('lJ65pmWXpA2fqq8nFxFGQQzGJiLkJo6HaBiD1qit', NULL, '132.255.133.32', 'Apache-HttpClient/5.1.4 (Java/11.0.18)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVVRPT29sRVIxdmJrdzBIOVhkSUFzbmJ2ekkyTmNhZzFPR2l5NTI5aSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733957418),
('M25qzsfj8Nip8qkalHswxGbGPnns0te4hKFd95kT', NULL, '42.236.17.41', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36; 360Spider', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic1lLUWpjeFBsclRLdWx6RjNDSzh5YWsxTHZUQkdlNWdFQ0RJT0prTCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733692710),
('M2jZgJDioNCPCzP1BGfcy4lil3Q0m8pgtA5yRkSr', NULL, '2a03:b0c0:3:d0::12f7:9001', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.98 Mobile Safari/537.3', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR1dCODh3NnJ1cnAzeUVUblZNTHN2QUxtR1poNEhKREE5azZsVlpYUyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956595),
('mBwZtBPUBKDr17t9Habe5M2osjAEdqhKdEWhGMOP', NULL, '142.93.138.129', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/121.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkhVZ0RrRmlISXFwU2ZLTEgwczBkdG9xYlZUdmRIbXIzMmZON1pybiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733956739),
('mDdidPPrajI7eX1rOVimj4t0xqpCHBAmuvWW7LMQ', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUXZBaEIzbTVVRVJXMkd2d3lGUlgxZnVrS2ZjcjFhZ0pobzA4b1pHbCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733754964),
('Mgd5U0vdmQMsBgrnhFWYUE6aixBSNFHNdYs4TQBm', NULL, '142.93.55.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidVVDbG1rT0tWQkREdlRXNUxmc3FRVmlIbUk0cTZudEd4N3hjZk43OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733686382),
('mmcxtUv8OXoBFvLce5YhKlqXew0d08HMvlQ2vJ2X', NULL, '180.102.134.69', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTmJ3WHdSbTBGYjRqQU9GYUFwd1EzWXhFNnppbUVVQUgwdDFYd3dPSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733654463),
('N3xBLyldU5I6SyGWSnsQnVqyoiTs14rGYkZZMBe0', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaG9aNGFNOU5leTI5T09oMkRSaUYwZW55SUJwRnIzcXFtSzh0T2RnTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733818813),
('NNUlkb7cdvZuM0ZLg22f3lr4ePqc6bECuoOvxEfF', NULL, '2a00:6800:3:b9e::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.54', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUURZeENadHhQelg0NHBCejhZbVBqNVpNZ2RtMkZDSEhlSjhOMldwMiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733755487),
('noTKC3LqPK7rNKi5Ukko6msmm4C3WaltDoZAvsAp', NULL, '43.135.145.77', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibW9xa3V4aktxYnVXN25xdDhjcEYzQnpCNXVpTHU0bGg0VHJNMDdtUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733891651),
('Ow1WgnIo1boG1D60dfMgphA9AhQNYjttxJGzXbJZ', NULL, '205.169.39.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNXNWRE5kV2ZVeFdXUzl5U211OFdQNnViUWlVR1FDVk9NbHdWMm1XeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956642),
('pA737qauG7LfNaWvX7RCiSILr2e7qpiV8F7xFlCe', NULL, '43.135.145.77', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ0xnYjNUVUtkTm5kNFpQcDBoUFBoc3gzU0lDYmI4WFoxd2ZPYjRNRiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733891650),
('pgrXxSoxfL6zU9gdnDmbvSWmwZ7c1VaKNeUiYS5o', NULL, '154.28.229.20', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYzVTbDlPaGF6ODdMVWxNaFZUbk9BbjU0QUM5RW1vNGZiTWYxTWhZdiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956563),
('PLMd8eGGTScYIZMpl5E6g0IH8xxtQilXLB4e6zpm', NULL, '66.249.70.131', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1lGcmRiQXljT3Z0UHNwbmg5MWlDalVpSjhXdkh4U1VKMTdodTA4dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733751644),
('qgWyGmBsrFR7yfEAppiGbC8zX2IQg6x9EcOsM184', NULL, '95.164.157.221', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaXpONGg2UlVqV1paT2h1N1pKWXhpMmVTemhjU3p5NW9aVzExRkdmdyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733957423),
('qlpORHl5M3QiwvR1514oDkoAIG8pkXjxj7Di8vy5', NULL, '43.135.144.81', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidlo0NGF3QVdvM0N4b0JESGdqcHZqemlQaEFwVVg1SDJRYjBOdFFBdCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733831229),
('Qmo0btLV2Dkca0pY4vwu63jmIO0Aux66NBca69tf', NULL, '182.42.110.255', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic1ZsdmJSYWI4dTJQV2txaDBWdElOMjJJOXk3ejVLbFduSDZ4OUV1dSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733865690),
('QVzZx4ZwlQ6RmTwvPNJCHlnHR7yWp8LLJjfe4PrV', NULL, '68.183.11.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTDY2M055cFpUSFF2bkplR1VzVFFPYWxXQ3FwaEhGMmsyQm12NnZVWCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956737),
('R8zGhljo01OLPgqicmlWtlqQMf4xFK3Fb2XHTPdD', NULL, '66.249.70.131', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoielhEcDdyZDk0SDJ6dll0UEdnT1V1dzhTaFlFVFNTNUxZdVh3bGRhdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733751645),
('rCWeSh4Kfd5z3eXfrOb4hJcxXnkQuhZmOErelsHC', NULL, '68.183.11.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlNnNVlGQTdpajdPU1VGSVVQWVpBZnVFb0tkczVPT0tpdk9ja0F6RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956738),
('rG8TpunogSb7XfLI1mhtk6Y5L8BIVfXBBjtlAFQl', NULL, '69.55.54.221', 'Mozilla/5.0 (compatible)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQUg5VmowVGk2clVTWWxaWjhGWnB6b0hkMEhpTnlOYlBGd01HQXQ0QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LnZjaS1mb3J1bS5vbmxpbmUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733925768),
('rHxk0o0yWwYPrMbTd6sIir2fLQduQ3lL6RWos3F6', NULL, '154.28.229.25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNE1LamdOc1NCbGNSN1VUc3BzTjhCRVM2b3prODhocHdjcnE3dmZycCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956563),
('RoFfQUeJ5RK9Z2874WMsHSkflQYp4WQy0r3g6jgF', NULL, '93.158.91.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVBXZkVsWnUzZkQ5emQxWVNIQnRZWklUTldhdlJEYVZtbXlZUExZZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733830169),
('S85kBYy55yb4zvPbvAHhpVyBjizHWSPUQPo7h645', NULL, '2a00:6800:3:b9e::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.54', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienFjTnRCVktVdEtiWlhhZ2Y5bEQ2SUJNbWoybFhrUEVCb3lTZUF3bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733755488),
('sHIltH4NdNsITVwa2DYSnqdZrB2WCkW0CXzJcQVb', NULL, '104.164.173.38', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVkpZMHNsaUY1TERxdWtVQzlFS210T0VYaTFPN0JwenZJdGMyZXJqQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733959713),
('Sj8YIQzqnH7Vq2m1St6rNnoZdnxz6Euk7xguyrcO', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibGJUdTNkVHh4VnFtSWFveThkZzM0RDMycFFReFJaWkpFMlVZY3N4OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733632508),
('sjZgEk7Bvn2sy3pdsKJ6x7HclpehAAz1VsbHWRK4', NULL, '205.169.39.7', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDF0MDhyZTBOc0FLMUdjVGptSXdNSFdxOFQ0YkxlNmNyRnRVNXllWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956632),
('SmaUVpb7GbIzBMU5buiy1G8Q9QJn3uBkygR5X2QD', NULL, '35.171.144.152', 'Mozilla/5.0 \\(Windows NT 10.0\\; Win64\\; x64\\) AppleWebKit/537.36 \\(KHTML, like Gecko\\) Chrome/100.0.4896.60 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3pCbTh5dEJJZUdwVUoyMk5hQVRDVWpncE5MVktkUWdKUFRvYzVIbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LnZjaS1mb3J1bS5vbmxpbmUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733781006),
('TcK6lyUtJ9WJjQBSnlxoadREuPk9Jw7pBuMfSkFj', NULL, '142.132.250.3', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3hNbU0weVJ2N3IxdFVKbnVSa2hzZEZGZnpQU0tlcm5DS2M5SE9vRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956740),
('tDegBnqHg69KzWT7LqdpMdbc7yeTLzlYJEKbLA8B', NULL, '2a03:b0c0:1:d0::c6d:c001', '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWE9hSzBvc1ZLTDcxdFJKT0J0MmJXcjNJZVhPQXZ6d2JScVEzU3pKWiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733956595),
('UgVzr2TLPrSJo9j09ochlQFauObC65mHQvfR97qA', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHJFeW5JNHdJck5VN0treFFKM1MwaGg3bG5MT1ltd3hia2wwdWRWQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733754964),
('uHZ51ioW16o3oyf4ebkH4yaEDr9T976f1gh4NKQ6', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMkVxc2RTMkxZd0JnSGZZMEpFU3ZIWUdOc1pROXNjaGFFaHFsTWVqTiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733892539),
('V14MXBjbRgUiC0uDM9TQyhZUdqNvRgRfOmQtXTnX', NULL, '182.42.110.255', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWRUTVpLeEw3eEdtTE1iaUFHMDBoazduUUVYamxTM2pOYTAxRnZ2VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LnZjaS1mb3J1bS5vbmxpbmUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733865692),
('v7O7NK84kaekiOmHqDTKbd8hrYznXElFyPo4og9J', NULL, '35.171.144.152', 'Mozilla/5.0 \\(Windows NT 10.0\\; Win64\\; x64\\) AppleWebKit/537.36 \\(KHTML, like Gecko\\) Chrome/100.0.4896.60 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSENPTkdmTHdVWFkwcGFCaWl2aE1PZ3VVSEkzY0pFck56V3BmREhZRCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733781005),
('voXVb0GwmZBgtG1KIroVj0nnIIQsKMDACcu2V7PM', NULL, '142.132.250.3', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWgzZ294Z2FRZENzcUpTRG9iWVpEdlRXVGExZEVpeDFpQllWNHRrQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733956745),
('VqdxRo8QToqzzrKoL3KI2z5yeumaeF8kOgZraXgB', NULL, '2a03:2880:f806:15::', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmpDWm1ETVo5cTlJNHQyUmF0aGl1bDkxZHBJZzFyOWZQTHdheGRXZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9vcmdhbml6YXRpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733691157),
('vU1AwTtYJ4qPSvYmFiUJ4fX10oE3fogXxFJpVPRz', NULL, '135.148.195.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibm1lTHFHdHBWRmlzWmdnNjhSTE5HYmdQTEZDenYycVI3blc2aWxiNCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733739725),
('WSELKKThNNpnOVg1RlLM8YPg1QVaOaUw9iTRu6bl', NULL, '45.55.172.184', 'libwww-perl/6.66', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXRxbU55Wk9IZnNBakdNcFNDYVJ0RERCVlYxZjV4TlM3dHdhMVVTWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LnZjaS1mb3J1bS5vbmxpbmUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733958649),
('yDbuOWCXUHdvxLFF334j2aPShBvfw3e58TbvA2ks', NULL, '2404:9400:3:0:216:3eff:fee1:dad6', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVjN2OWtGRU9yUk5pTkRXVzZWRk80RURQb09Kc2k3MVNjOW5Xd21YUCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733606151),
('yov1KJdlCOwtqY0JYm5nxYJuIn0VSVjle369X55u', NULL, '45.55.172.184', 'libwww-perl/6.66', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNHZtZzlzZ2lJUmNvbEd6QmNiSEp0MTJOcHZqWjZyOVBvTnE5YUUxRSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733958648),
('yUNqQApbFDk8Ottb3zsRdZri6EJdh6N06KYL79xU', NULL, '2a02:4780:6:c0de::10', 'Go-http-client/2.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZERaeGFQZXFDeE5WRTFPWFNBMTJSY0RaQnRjT1QxS0x1ejhMYkp1aCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cHM6Ly92Y2ktZm9ydW0ub25saW5lIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733818813),
('yXr3S9T2MaCzRZzCJ4SmiAWtp0pyL4GefmFZ1PZ9', NULL, '13.59.34.111', 'curl/8.3.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFk4Ung5V3N0QkZNQ1hYNWRlcllrMG10dGNDWTJta1p2dUl5cHBQViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmNpLWZvcnVtLm9ubGluZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733838371),
('ZgZBkirxCVu0LriBsYH9mQeHy6kDyMqERm4uJCnQ', NULL, '2001:bc8:1201:1f:ba2a:72ff:fee1:1aae', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.3', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVEpUTmdLYk44NGpKZExDZ2g0NVJPaHhlUjJyVVVuMHFIZnQ5elNQeSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733780821),
('ZS6J2XQ7RTENFdaUxAgepp0g2of2BfW2zObLSSpq', NULL, '2a03:b0c0:1:d0::c6d:c001', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.98 Mobile Safari/537.3', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTEt6dnN1dFZCdWNGUjRsVHRtaEdVS3hOSWRyVnNXQUM1R1Q0elYzSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cHM6Ly93d3cudmNpLWZvcnVtLm9ubGluZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL3d3dy52Y2ktZm9ydW0ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733956596);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `students` (`id`, `user_id`, `course_id`, `year_id`, `block_id`, `first_name`, `last_name`, `middle_name`, `gender`, `created_at`, `updated_at`) VALUES
(29, 76, 1, 27, 22, 'Philea', 'Gopela', NULL, 'female', '2024-12-07 02:34:10', '2024-12-07 03:50:14'),
(30, 78, 1, 27, 24, 'Erick', 'Ramos', NULL, 'male', '2024-12-07 02:35:52', '2024-12-07 02:35:52'),
(32, 61, 2, 30, 39, 'John', 'John', NULL, 'female', '2024-12-07 04:37:37', '2024-12-07 04:37:37'),
(38, 86, 1, 26, 15, 'John', 'Doe', NULL, 'male', '2024-12-07 05:24:23', '2024-12-07 05:24:23'),
(39, 87, 1, 26, 15, 'Rob', 'Pull', NULL, 'male', '2024-12-07 05:25:07', '2024-12-07 05:25:07'),
(40, 88, 1, 26, 15, 'Severino', 'Cantuba', NULL, 'male', '2024-12-07 05:26:51', '2024-12-07 05:26:51'),
(41, 89, 1, 26, 15, 'Van Jasper', 'Benzon', NULL, 'male', '2024-12-07 05:28:15', '2024-12-07 05:28:15');

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
(8, 1, '3rd year', 'IT 411', 'Elective 2', '3', '2024-08-28 01:44:37', '2024-08-28 01:44:37'),
(9, 1, '1st year', 'PE 1', 'PSTHFIT', '3', '2024-12-07 01:48:48', '2024-12-07 01:48:48'),
(10, 1, '4th year', 'IT ELECTIVE 4', 'Capstone ', '3', '2024-12-07 01:49:43', '2024-12-07 01:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
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
  `reset_code` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `gender`, `position`, `course`, `year`, `block`, `image`, `role`, `department`, `accept`, `email`, `email_verified_at`, `password`, `reset_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'ADMIN', NULL, NULL, 'male', NULL, '1', '', '', 'profile-photos/mkh1uay4mikDyPy7PyfaEXrpahJL5l8X5iDHLgO2.jpg', 'admin', 'BSIT', 1, 'admin@gmail.com', NULL, '$2y$12$ahWOvFCtOFYFe0d6ooXCqOd.5oGdZJFxie4qCfv3Xyc9NJOt1H096', NULL, 'jebIOsCGT3o8cNCCEqTgoF1FdGgd4qNTS3h4i3i74DrEc1mGclNbRcXc7tGM', '2024-08-18 03:39:54', '2024-11-22 03:46:06'),
(24, 'faculty2', 'faculty', 'faculty', NULL, 'It Instructor', NULL, NULL, NULL, NULL, 'faculty', NULL, 1, 'faculty@gmail.com', NULL, '$2y$12$1kX.gflZnhYhTMMYmQbux.ZR1ZvYnSALoN6eUU7GpPCgq0BU4JstW', NULL, NULL, '2024-08-24 19:58:37', '2024-11-25 01:39:24'),
(28, 'The truth', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'org', NULL, 1, 'org@gmail.com', NULL, '$2y$12$zsuTvcH1yPt73VqI.tr2WucIMiBvOsHsDrfLS9iHeR4s0b0Q8tl.K', NULL, NULL, '2024-08-28 23:00:40', '2024-11-25 01:39:37'),
(32, 'faulty1', 'faulty1', 'faulty1', NULL, 'P.E Teacher', NULL, NULL, NULL, NULL, 'faculty', NULL, 1, 'faulty1@gmail.com', NULL, '$2y$12$5UyPGflxKcAd/OdIj/lNDOcfHYRcZo5nL7UR9IaMXlCCg9HonCiNO', NULL, NULL, '2024-08-30 01:16:08', '2024-08-30 01:16:27'),
(34, 'BSBA Department', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, 'admin', NULL, 1, 'bsba@gmail.com', NULL, '$2y$12$iosv0noqsfpvBO55Y7JcXuwkswPAZZYHKlIRne0tUhgtqPMcv.6EK', NULL, NULL, '2024-08-30 17:46:07', '2024-08-30 17:46:16'),
(35, 'BAT Department', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, 'admin', NULL, 1, 'bat@gmail.com', NULL, '$2y$12$C9Q0b5kyfA/33VupUYrvHe6bFuKH8K3k5rk34LgBG4NKSumpyxqA6', NULL, NULL, '2024-08-30 17:48:13', '2024-08-30 17:48:23'),
(36, 'BSED Department', NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, 'admin', NULL, 1, 'bsed@gmail.com', NULL, '$2y$12$AXdddMv79.mybvN8QhOnSek7zWJYRz0xIrHW.ERgrm2QHcFEYkx0K', NULL, NULL, '2024-08-30 17:49:45', '2024-08-30 17:49:55'),
(37, 'BEED Department', NULL, NULL, NULL, NULL, '6', NULL, NULL, NULL, 'admin', NULL, 1, 'beed@gmail.com', NULL, '$2y$12$hAI8v3ZrCRi8SNbu9j6H6.wURUMLZNGnfFwty.A.x7OVQVD2g.OWC', NULL, NULL, '2024-08-30 17:51:12', '2024-08-30 17:51:22'),
(45, 'crim@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, 1, 'crim@gmail.com', NULL, '$2y$12$OnGjZ9Zv/IqOHA2q0VK5NOk89/8ddxNw1/Wv/thnnpRWaT5am5aLO', NULL, NULL, '2024-11-25 01:08:26', '2024-11-25 01:08:49'),
(59, 'BSBA ADMIN', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, 'admin', NULL, 1, 'bsbaadmin@gmail.com', NULL, '$2y$12$DmA2ixsX6Xwar8qFsf3bM.rc9cL8AaxhOThJ/HHk1Sx4HDdTKYuX6', NULL, NULL, '2024-12-01 10:09:28', '2024-12-01 10:09:28'),
(61, 'John', 'John', 'John', 'female', NULL, '2', '30', '39', NULL, 'student', NULL, 1, 'john@gmail.com', NULL, '$2y$12$I6knuB69IVeQhkYcVwW.PuN375UMu9UXquUE8RJtBVriCIjT6PTMe', NULL, NULL, '2024-12-05 03:23:16', '2024-12-07 04:37:37'),
(64, 'BSIT', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'admin', NULL, 1, 'bsitadmin@gmail.com', NULL, '$2y$12$IxxW6n4fBfmY07txLcA47uLNdw9RNQsXBMgGYG2HWr6qeqDZg5NHe', NULL, NULL, '2024-12-05 03:54:51', '2024-12-05 03:54:51'),
(65, 'Bsba', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, 'admin', NULL, 1, 'bsba1@gmail.com', NULL, '$2y$12$Yn2aYf13d0IC.fqVAm0MDuZ1NkQ.S1pFy4Kc72eaOQ7LLhXH3IYKC', NULL, NULL, '2024-12-05 03:55:43', '2024-12-05 09:30:20'),
(67, 'Bronny James', 'Bronny', 'James', NULL, 'BSBA TEACHER', NULL, NULL, NULL, NULL, 'faculty', NULL, 1, 'BronnyJames@gmail.com', NULL, '$2y$12$MsJgYkgz6oMEB8Aq7uNXXeT3Nwxe5ZdSEgBDCailpWYrPV6d1z8hy', NULL, NULL, '2024-12-05 04:08:29', '2024-12-05 04:09:08'),
(71, 'crim', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, 'admin', NULL, 1, 'crim1@gmail.com', NULL, '$2y$12$IHb4vE9H76A1Ho76jjAjQun1UL.vg4chtENOJU4NzTxQo64lYUDmG', NULL, NULL, '2024-12-05 09:41:58', '2024-12-05 09:41:58'),
(76, 'MARIA', 'Philea', 'Gopela', 'female', NULL, '1', '27', '22', NULL, 'student', NULL, 1, 'fuenzalidamariaphilea@gmail.com', NULL, '$2y$12$ZBNFN99KFDiFhQuinjkE5.wcsIDAGwSJ.Er8OqqcsJ4ghFyiBFWkG', NULL, NULL, '2024-12-07 02:14:24', '2024-12-07 04:52:32'),
(77, 'adminBSIT', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'admin', NULL, 1, 'bsitadmin2@gmail.com', NULL, '$2y$12$hNFx35R8gp6tQ1bj7oFuV.eLFmTltPyfjDK/CW/G5Ecbt/OaDUJoO', NULL, NULL, '2024-12-07 02:31:51', '2024-12-07 02:31:51'),
(78, 'Erick', 'Erick', 'Ramos', 'male', NULL, '1', '27', '24', NULL, 'student', NULL, 1, 'johnerickfrivaldo@gmail.com', NULL, '$2y$12$0q7iorjwcIVuguo6eK/L3ekj3yXNo6W5JiuyLQeLMwvbszTQk82i6', NULL, NULL, '2024-12-07 02:35:38', '2024-12-07 02:35:52'),
(84, 'jay', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'admin', NULL, 1, 'cantonjos@gmail.com', NULL, '$2y$12$jdt/N0jrduPYyKdweEziL.uGOECh1oc8jKFjMgU.ctQNMeIBmvPHy', NULL, NULL, '2024-12-07 05:20:25', '2024-12-07 05:20:43'),
(86, 'rancho', 'John', 'Doe', 'male', NULL, '1', '26', '15', 'profile-photos/1000012891.jpg', 'student', NULL, 1, 'poloalex999@gmail.com', NULL, '$2y$12$J8KWqVNIJF1xs2GB00uxy.0p4FsR3IL5I7oej7SjAeHY/Ie73MS1G', NULL, NULL, '2024-12-07 05:24:14', '2024-12-07 05:32:51'),
(87, 'Pull', 'Rob', 'Pull', 'male', NULL, '1', '26', '15', NULL, 'student', NULL, 1, 'ronaldo.hila48@gmail.com', NULL, '$2y$12$Awp5mmn5JYjD8tZNuAcyp.0uz1b3h65udm4isicPBDPgpgNgLuTDW', NULL, NULL, '2024-12-07 05:24:55', '2024-12-07 05:25:07'),
(88, 'xever', 'Severino', 'Cantuba', 'male', NULL, '1', '26', '15', NULL, 'student', NULL, 1, 'severinocantuba@gmail.com', NULL, '$2y$12$ryWBzB1JAKxMlj/7yiDD1OmsJpsJ2bu.ElDIIlGWac6.Aikr8u9le', NULL, NULL, '2024-12-07 05:26:39', '2024-12-07 05:26:51'),
(89, 'Van Jasper', 'Van Jasper', 'Benzon', 'male', NULL, '1', '26', '15', NULL, 'student', NULL, 1, 'Van@gmail.com', NULL, '$2y$12$sWwoTNBvvgKKagKPGnmjbOIDvRy3Ccz8HBqAOI6EkDf6JdqJaPjA6', NULL, NULL, '2024-12-07 05:28:02', '2024-12-07 05:28:15');

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
(26, 1, '1st Year', '2024-08-19 17:43:47', '2024-09-16 17:16:29'),
(27, 1, '2nd Year', '2024-08-19 17:43:58', '2024-08-19 17:43:58'),
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
(50, 6, '4th year', '2024-08-28 01:11:31', '2024-08-28 01:11:31'),
(51, 1, '3rd Year', '2024-09-16 17:29:31', '2024-09-16 17:29:31'),
(53, 1, '4th Year', '2024-12-05 03:29:01', '2024-12-05 03:29:01');

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
-- Indexes for table `message_notifications`
--
ALTER TABLE `message_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_notifications_user_id_foreign` (`user_id`);

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
  ADD KEY `year_id` (`year_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `message_notifications`
--
ALTER TABLE `message_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `subject_lists`
--
ALTER TABLE `subject_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
-- Constraints for table `message_notifications`
--
ALTER TABLE `message_notifications`
  ADD CONSTRAINT `message_notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE CASCADE;

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
