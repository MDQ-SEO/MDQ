-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 10:18 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u815853083_vsafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_key`
--

CREATE TABLE `access_key` (
  `id` int(11) NOT NULL,
  `applications` varchar(255) NOT NULL,
  `app_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_key`
--

INSERT INTO `access_key` (`id`, `applications`, `app_key`) VALUES
(1, 'Mobile', '76736166656d6f62696c656b657932303232'),
(2, 'Firmware', '76736166656669726d776172656b657932303232');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`, `role`) VALUES
(1, 'admin@vsafe.com', 'admin', 'superadmin'),
(2, 'support@vsafe.com', 'support123', 'support');

-- --------------------------------------------------------

--
-- Table structure for table `deactivated_userid`
--

CREATE TABLE `deactivated_userid` (
  `id` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `mac_id` varchar(10) NOT NULL,
  `user_position` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deactivated_userid`
--

INSERT INTO `deactivated_userid` (`id`, `mobile`, `mac_id`, `user_position`, `created_at`) VALUES
(1, '9994620094', '1234567890', '2', '2023-02-09 03:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `fw_battery_status`
--

CREATE TABLE `fw_battery_status` (
  `id` int(11) NOT NULL,
  `mac_id` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `battery_percent` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `wifi` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `locker_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fw_battery_status`
--

INSERT INTO `fw_battery_status` (`id`, `mac_id`, `battery_percent`, `wifi`, `locker_status`, `created_at`) VALUES
(1, '1010101010', '39', '6', 0, '2023-02-16 11:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `fw_locker_status`
--

CREATE TABLE `fw_locker_status` (
  `id` int(11) NOT NULL,
  `mac_id` varchar(10) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `locker_status` int(2) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fw_locker_status`
--

INSERT INTO `fw_locker_status` (`id`, `mac_id`, `mobile_no`, `locker_status`, `created_at`) VALUES
(1, '1010101010', '7558188330', 0, '2023-02-10 10:23:09'),
(2, '1010101010', '7550207382', 0, '2023-02-10 15:31:04'),
(3, '1010101010', '', 0, '2023-02-10 15:32:37'),
(4, '1010101010', '9940643460', 0, '2023-02-16 11:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `fw_manual_key`
--

CREATE TABLE `fw_manual_key` (
  `id` int(11) NOT NULL,
  `mac_id` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `manual_key` varchar(2) CHARACTER SET utf8mb4 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fw_manual_key`
--

INSERT INTO `fw_manual_key` (`id`, `mac_id`, `manual_key`, `mobile`, `created_at`) VALUES
(1, '1010101010', '1', '7558188330', '2023-02-12 15:53:57'),
(2, '1010101010', '1', '7558188330', '2023-02-12 21:29:08'),
(3, '1010101010', '1', '7558188330', '2023-02-12 22:13:42'),
(4, '1010101010', '1', '7558188330', '2023-02-12 22:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `fw_tampering_alert`
--

CREATE TABLE `fw_tampering_alert` (
  `id` int(11) NOT NULL,
  `mac_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tampering_value` int(2) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fw_tampering_alert`
--

INSERT INTO `fw_tampering_alert` (`id`, `mac_id`, `tampering_value`, `created_at`) VALUES
(1, '1010101010', 1, '2023-02-10 15:17:03'),
(2, '1010101010', 1, '2023-02-10 15:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `get_version`
--

CREATE TABLE `get_version` (
  `id` int(11) NOT NULL,
  `file_version` varchar(100) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_version`
--

INSERT INTO `get_version` (`id`, `file_version`, `file_name`, `created_at`) VALUES
(1, 'V1.1', 'vsafe_V1.1_PB.bin', '2023-01-07 13:12:01'),
(2, 'V1.1', 'vsafe_V1.1_PA.bin', '2023-01-07 13:13:59'),
(3, 'V1.2', 'vsafe_V1.2_PB.bin', '2023-01-10 10:13:36'),
(4, 'V1.2', 'vsafe_V1.2_PA.bin', '2023-01-10 10:13:42'),
(5, 'V1.3', 'vsafe_V1.3_PB.bin', '2023-01-11 15:32:59'),
(6, 'V1.3', 'vsafe_V1.3_PA.bin', '2023-01-11 15:36:49'),
(7, 'V1.4', 'vsafe_V1.4_PB.bin', '2023-01-21 12:29:00'),
(8, 'V1.4', 'vsafe_V1.4_PA.bin', '2023-01-21 12:29:54'),
(9, 'V1.5', 'vsafe_V1.5_PB.bin', '2023-01-23 10:36:59'),
(10, 'V1.5', 'vsafe_V1.5_PA.bin', '2023-01-23 10:36:59'),
(11, 'V1.6', 'vsafe_V1.6_PA.bin', '2023-01-29 16:11:13'),
(12, 'V1.6', 'vsafe_V1.6_PB.bin', '2023-01-29 16:11:31'),
(13, 'V1.6', 'vsafe_1.6_PA.bin', '2023-02-05 12:18:17'),
(14, 'V1.6', 'vsafe_1.6_PB.bin', '2023-02-05 12:18:41'),
(15, 'V1.6', 'vsafe_V1.6_PA.bin', '2023-02-05 17:51:29'),
(16, 'V1.6', 'vsafe_V1.6_PB.bin', '2023-02-05 17:51:38'),
(17, 'V1.7', 'vsafe_V1.6_PA.bin', '2023-02-05 17:58:11'),
(18, 'V1.7', 'vsafe_V1.6_PB.bin', '2023-02-05 17:58:24'),
(19, 'V1.6', 'VSAFE_V1.2_PA.bin', '2023-02-09 10:21:29'),
(20, 'V1.6', 'VSAFE_V1.2_PB.bin', '2023-02-09 10:21:38'),
(21, 'V1.6', 'VSAFE_V1.2_PA.bin', '2023-02-09 10:22:41'),
(22, 'V1.6', 'VSAFE_V1.2_PA.bin', '2023-02-09 10:23:21'),
(23, 'V1.6', 'VSAFE_V1.2_PB.bin', '2023-02-09 10:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `help_support`
--

CREATE TABLE `help_support` (
  `id` int(11) NOT NULL,
  `mac_id` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `queries` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `query_status` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_support`
--

INSERT INTO `help_support` (`id`, `mac_id`, `mobile`, `email`, `queries`, `query_status`, `created_at`, `updated_at`) VALUES
(1, '0101010101', '7550207382', 'sathiya.mdq@gmail.com', 'Help and support', 'Solved', '2022-12-08 22:16:21', '0000-00-00 00:00:00'),
(2, '0101010101', '7550207382', 'sathiya.mdq@gmail.com', 'Help and support', '', '2022-12-10 17:06:32', '0000-00-00 00:00:00'),
(3, '2002002002', '7558188330', 'janani.732janu@gmail.com', 'sanjai', 'Solved', '2022-12-10 19:31:07', '0000-00-00 00:00:00'),
(4, '0030030030', '9597225200', 'viknesh.vadivel@gmail.com', 'Test ', '', '2022-12-11 15:09:32', '0000-00-00 00:00:00'),
(5, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:23:25', '0000-00-00 00:00:00'),
(6, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:12', '0000-00-00 00:00:00'),
(7, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:14', '0000-00-00 00:00:00'),
(8, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:15', '0000-00-00 00:00:00'),
(9, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:20', '0000-00-00 00:00:00'),
(10, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:22', '0000-00-00 00:00:00'),
(11, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:23', '0000-00-00 00:00:00'),
(12, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:23', '0000-00-00 00:00:00'),
(13, '2002002002', '9940643460', 'harryporter248@gmail.com', 'abcd', '', '2022-12-26 17:24:25', '0000-00-00 00:00:00'),
(14, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:29', '0000-00-00 00:00:00'),
(15, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:36', '0000-00-00 00:00:00'),
(16, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:37', '0000-00-00 00:00:00'),
(17, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:38', '0000-00-00 00:00:00'),
(18, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:40', '0000-00-00 00:00:00'),
(19, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:41', '0000-00-00 00:00:00'),
(20, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:42', '0000-00-00 00:00:00'),
(21, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:43', '0000-00-00 00:00:00'),
(22, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:44', '0000-00-00 00:00:00'),
(23, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:47', '0000-00-00 00:00:00'),
(24, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:48', '0000-00-00 00:00:00'),
(25, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:44:49', '0000-00-00 00:00:00'),
(26, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:45:00', '0000-00-00 00:00:00'),
(27, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'hii\nbye', '', '2023-01-11 18:45:02', '0000-00-00 00:00:00'),
(28, '1234567890', '9597225200', 'viknesh.vadivel@gmail.com', 'Hi this is test email from android mobile app', '', '2023-02-05 13:26:08', '0000-00-00 00:00:00'),
(29, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:12', '0000-00-00 00:00:00'),
(30, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:17', '0000-00-00 00:00:00'),
(31, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:18', '0000-00-00 00:00:00'),
(32, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:19', '0000-00-00 00:00:00'),
(33, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:21', '0000-00-00 00:00:00'),
(34, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:22', '0000-00-00 00:00:00'),
(35, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:23', '0000-00-00 00:00:00'),
(36, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:24', '0000-00-00 00:00:00'),
(37, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:25', '0000-00-00 00:00:00'),
(38, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:26', '0000-00-00 00:00:00'),
(39, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:28', '0000-00-00 00:00:00'),
(40, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:29', '0000-00-00 00:00:00'),
(41, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:32', '0000-00-00 00:00:00'),
(42, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:34', '0000-00-00 00:00:00'),
(43, '1010101010', '9940643460', 'syed.mdq0018@gmail.com', 'Testing', '', '2023-02-10 18:26:35', '0000-00-00 00:00:00'),
(44, '1010101010', '7558188330', 'sanjia@gmail.com', 'shhs', '', '2023-02-12 08:11:13', '0000-00-00 00:00:00'),
(45, '1010101010', '7558188330', 'pugalendhisubramaniyan07@gmail.com', 'dds', '', '2023-02-12 08:15:35', '0000-00-00 00:00:00'),
(46, '1010101010', '7558188330', 'pugalendhisubramaniyan07@gmail.com', 'susu', '', '2023-02-12 08:17:03', '0000-00-00 00:00:00'),
(47, '1010101010', '7558188330', 'pugalendhisubramaniyan07@gmail.com', 'dd', '', '2023-02-12 08:17:33', '0000-00-00 00:00:00'),
(48, '1010101010', '7558188330', 'pugalendhisubramaniyan07@gmail.com', 'c yfyff', '', '2023-02-12 23:21:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ota_file`
--

CREATE TABLE `ota_file` (
  `id` int(11) NOT NULL,
  `file_version` varchar(100) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ota_file`
--

INSERT INTO `ota_file` (`id`, `file_version`, `file_name`, `created_at`) VALUES
(17, 'V1.7', 'vsafe_V1.6_PA.bin', '2023-02-05 17:58:11'),
(18, 'V1.7', 'vsafe_V1.6_PB.bin', '2023-02-05 17:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `otp_number` int(4) NOT NULL,
  `otp_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actual_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `descriptions`, `actual_cost`, `offer_cost`, `photos`, `created_at`) VALUES
(1, 'V SAFE Mini', 'World First Simplest, Smartest & Safest Locker', '50,000.00', '24,999.00', 'vsafe_mini.png', '2022-12-27 13:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_interest` int(2) NOT NULL,
  `purchase_request` int(2) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `push_notifications`
--

CREATE TABLE `push_notifications` (
  `id` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `mobile` varchar(20) DEFAULT NULL,
  `mac_id` varchar(10) NOT NULL,
  `title` varchar(150) NOT NULL,
  `messages` varchar(255) NOT NULL DEFAULT 'NULL',
  `locker_opened` varchar(255) NOT NULL DEFAULT 'NULL',
  `open_created` datetime NOT NULL,
  `locker_closed` varchar(255) NOT NULL DEFAULT 'NULL',
  `close_created` datetime NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `push_notifications`
--

INSERT INTO `push_notifications` (`id`, `status`, `mobile`, `mac_id`, `title`, `messages`, `locker_opened`, `open_created`, `locker_closed`, `close_created`, `created_at`) VALUES
(1, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:46:57'),
(2, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:47:31'),
(3, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:48:52'),
(4, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:48:54'),
(5, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:52:06'),
(6, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:52:08'),
(7, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:52:16'),
(8, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:52:17'),
(9, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:53:12'),
(10, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:53:14'),
(11, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:54:17'),
(12, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:54:19'),
(13, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:54:36'),
(14, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:54:38'),
(15, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:54:56'),
(16, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 19:54:58'),
(17, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:02:06'),
(18, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:02:08'),
(19, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:05:29'),
(20, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:05:32'),
(21, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:05:41'),
(22, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:05:43'),
(23, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:07:36'),
(24, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:07:38'),
(25, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:11:40'),
(26, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:11:42'),
(27, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:11:45'),
(28, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:11:48'),
(29, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:12:11'),
(30, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:12:13'),
(31, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:12:23'),
(32, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:12:25'),
(33, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:13:59'),
(34, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:14:01'),
(35, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:14:10'),
(36, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:14:11'),
(37, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:14:21'),
(38, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:14:24'),
(39, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:15:36'),
(40, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:15:44'),
(41, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:21:51'),
(42, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:21:54'),
(43, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:34:55'),
(44, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-09 20:34:57'),
(45, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:12:34'),
(46, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:12:36'),
(47, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:17:43'),
(48, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:17:45'),
(49, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:20:33'),
(50, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:20:36'),
(51, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:21:29'),
(52, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:21:31'),
(53, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:21:35'),
(54, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:21:37'),
(55, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:22:18'),
(56, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:22:21'),
(57, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:22:33'),
(58, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:22:34'),
(59, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:22:38'),
(60, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:22:40'),
(61, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was closed by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:23:10'),
(62, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:23:12'),
(63, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:23:46'),
(64, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:23:47'),
(65, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:24:20'),
(66, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:24:22'),
(67, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:29:17'),
(68, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:29:19'),
(69, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:29:36'),
(70, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:29:38'),
(71, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:41:17'),
(72, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:41:21'),
(73, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:41:32'),
(74, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 10:41:34'),
(75, 1, NULL, '1010101010', 'Tampering Alert', 'V SAFE was opened using a manual key.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:17:07'),
(76, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was opened by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:28:06'),
(77, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:28:40'),
(78, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:28:42'),
(79, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:29:28'),
(80, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:29:30'),
(81, 0, '7550207382', '1010101010', 'Door Status', 'V SAFE was closed by sathiya', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:31:04'),
(82, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:31:07'),
(83, 0, '7558188330', '1010101010', 'Door Status', 'V SAFE was opened by sanjai', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:31:33'),
(84, 1, NULL, '1010101010', 'Tampering Alert', 'V SAFE was opened using a manual key.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:32:37'),
(85, 1, NULL, '1010101010', 'Battery Low', 'Low Battery. Replace the battery with the one recommended.', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-10 15:32:38'),
(86, 0, '7550207382', '1010101010', 'Successful Registration', '7550207382 number has been successfully registered with V SAFE. This is the 4th of 4 maximum digital keys of V SAFE. ', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-11 12:35:52'),
(87, 0, '7558188330', '1010101010', 'Entered wrong PIN', 'sanjai has entered wrong PIN 3 times. V SAFE is in lockdown status. ', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-12 15:53:58'),
(88, 0, '7558188330', '1010101010', 'Entered wrong PIN', 'sanjai has entered wrong PIN 3 times. V SAFE is in lockdown status. ', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-12 21:29:10'),
(89, 0, '7558188330', '1010101010', 'Entered wrong PIN', 'sanjai has entered wrong PIN 3 times. V SAFE is in lockdown status. ', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-12 22:13:44'),
(90, 0, '7558188330', '1010101010', 'Entered wrong PIN', 'sanjai has entered wrong PIN 3 times. V SAFE is in lockdown status. ', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00', '2023-02-12 22:20:23'),
(91, 0, '9940643460', '1010101010', 'Door Status', '', 'V SAFE was opened by SYED WARIS', '2023-02-16 11:31:25', 'V SAFE was closed by SYED WARIS', '2023-02-16 11:32:00', '2023-02-16 11:32:00'),
(92, 0, '9940643460', '1010101010', 'Door Status', '', 'V SAFE was opened by SYED WARIS', '2023-02-16 11:40:55', 'V SAFE was closed by SYED WARIS', '2023-02-16 11:41:03', '2023-02-16 11:41:03'),
(93, 0, '9940643460', '1010101010', 'Door Status', '', 'V SAFE was opened by SYED WARIS', '2023-02-16 11:42:15', 'V SAFE was closed by SYED WARIS', '2023-02-16 11:42:21', '2023-02-16 11:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `macid_status` int(2) NOT NULL DEFAULT 0,
  `emergency_mobile` varchar(20) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `mac_id` varchar(10) DEFAULT NULL,
  `wifi` varchar(50) NOT NULL DEFAULT '0',
  `user_position` varchar(10) NOT NULL,
  `firebase_uid` varchar(255) NOT NULL,
  `biometric` varchar(50) NOT NULL DEFAULT '0',
  `secure_mode` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0,
  `date_of_purchase` datetime NOT NULL,
  `warranty_bill` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `locker_time` varchar(100) DEFAULT NULL,
  `locker_timestamp` varchar(100) DEFAULT NULL,
  `user_created` datetime NOT NULL,
  `mechanical_pin` varchar(25) NOT NULL,
  `fw_version` varchar(25) NOT NULL,
  `notification_message_flag` int(11) NOT NULL,
  `message_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `mobile`, `macid_status`, `emergency_mobile`, `pwd`, `mac_id`, `wifi`, `user_position`, `firebase_uid`, `biometric`, `secure_mode`, `address`, `active_status`, `date_of_purchase`, `warranty_bill`, `created_at`, `locker_time`, `locker_timestamp`, `user_created`, `mechanical_pin`, `fw_version`, `notification_message_flag`, `message_date`) VALUES
(160, 'contact@thumbikkai.com', 'contact@thumbikkai.com', '9943120025', 0, '', '651e73b8a18b69f3223289dd636d8056', NULL, '0', '', 'dehF2hM1T92Eo5AcY1GLSa:APA91bFGN8bphxv9YmIrDPiL4QDd1eqaO6sqFuG9ioOq1ldPQaNmTS8TsSGv-De8MNXess6oOa_t8tSl4HJQUdIjJ8QEjgnak6NdIn44saYMfjUbLIwgeEqwtzW7DAcoXiRU65uJw0vL', '0', '0', '', 1, '0000-00-00 00:00:00', NULL, '2022-08-04 07:36:22', NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00'),
(177, 'rams', 'rams@gmail.com', '7904332857', 0, '7558188330', 'e13db6b74a2f136dac460c96c33ba15f', NULL, '0', '', 'eicCxYp0SXe_GU7m1AOllL:APA91bFuZbMbKcgEjQBF_8g-7sE5F7xYF6UT6zSXOpYnaTCpSTtP1J9AbDV1XBQoZ2fu-8fJmFCR3w7okJ1UN_34AYYweEaCxHgq3CdWLqc0e8Vi_-RqvAU1W8DdI78JaVMv-8HKOAIw', '0', '0', '', 0, '0000-00-00 00:00:00', NULL, '2022-08-13 13:01:39', NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00'),
(325, 'ram', 'ram@gmail.com', '8883458748', 5, '7558188330', 'e13db6b74a2f136dac460c96c33ba15f', '1234123412', '0', '2', 'cUPGbtctTI2VeZ4Nyoh7vw:APA91bH57FOX8_6nrsNdlcn6ooUR1gzzzZkyVrOghoXdChmQu5DppLiDXuICbIk_qy72uldAQjQ16EcT9TWnQGdwfSX6UCYMjP983oSQgs-ChgTWACKQog2PW6FOhubnbmAOE_N9Z_N4', '0', '0', '', 0, '0000-00-00 00:00:00', NULL, '2022-09-20 14:46:50', NULL, NULL, '2022-09-13 17:56:09', '', '', 0, '0000-00-00 00:00:00'),
(359, 'Manikandan', 'manikandan@vsafe.com', '8838995745', 4, '9941859792', '7fa7d114346cf4c7a2959f5f1c49b572', '2002002002', '1', '1', 'dI2X0Rf7QBSFXl2429LxCr:APA91bFGuSCSG4f785DR7CMwFD-LUW0d0dzmxBk9AfL1J39IGrJVZZTJZZrVHNKS_cO-7-qCzqjVJvHTrMGFTu73T5cL2Hl3W0itypWxGZg7rE4bPI2ljImywnKU9vXAXuqNcwOFfsrq', '1', '1', '', 0, '2022-12-10 15:24:35', NULL, '2022-12-10 15:24:35', NULL, NULL, '2022-12-10 15:24:35', '', '', 0, '0000-00-00 00:00:00'),
(386, 'Manikandan', 'mdqualityapps@gmail.com', '9884735745', 0, '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '0', '', '', '0', '0', '', 0, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00'),
(464, '5ihrrh', 'Uyvimalcygvs2gghhhh9@gmail.com', '9971770331', 0, '', '202cb962ac59075b964b07152d234b70', NULL, '0', '', '', '0', '0', '', 0, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00'),
(503, 'abi', 'aabinaya5728@gmail.com', '7604933823', 1, '', 'e13db6b74a2f136dac460c96c33ba15f', '0101010101', '0', '2', 'fLCmur5jR1aC1MTqm7hl9R:APA91bFf4zdiqK2W5Vv2N5PJLCTh-UHxiQDDGcwjTK5T-8j9hyzGbwZHbymYETjmVapu8MWHy8RVpVHisgTOpuSIKrgUAc2tsMLxSrh2T9Pa_ZMRdE9SY1fxJh5sxnR2q_ogWaa3WZKD', '0', '0', '', 0, '2022-12-09 16:48:57', NULL, '2022-12-09 16:48:57', NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00'),
(513, 'Vishwa@+idjw[]\n÷f($(', 'vishwanathvichu5272@gmail.com', '8825637596', 4, '9994620094', 'bf519b154ef1fee9f8dbe609f3de87ae', '0030030030', '1', '2', 'eGzUZDIWSuiaQk_amDZik4:APA91bGwGW-qodBNGqKtvJ9dYHsQvO2nb_poygfd2R5UZaVhT2GmkdrW9bHphLG3p-bqfZApAfzDU718ZVFiKZxRVP28gl6-ZM7_5C55cM1QPt8E0ujgLn1URwqVg8zjXnjL5gJzt8Lw', '1', '0', '', 0, '2022-12-12 11:18:29', NULL, '2022-12-12 11:18:29', NULL, NULL, '2022-12-11 14:56:44', '', '', 0, '0000-00-00 00:00:00'),
(533, 'siddiq', 'siddiq10batcha@gmail.com', '6369971253', 0, '', 'd907bcdcb072ed38cf25d0a35b0647dd', NULL, '0', '', 'ffAM6_eHTACfwaMb7iBBCw:APA91bEWmERNxOwnc_JF31yplQtNNR0Zpg1S8KZuLAKowzrljPt3CbSNka8mm0_VS7sP9aHb9WQioyksIeDiHLLD6UpZdtpxGi7gUu3E0Tg3habIG4TmYbiDSwfHR3jFy40PeSkbJgRs', '0', '0', '', 0, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '2022-12-19 13:58:45', '1671458325', '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00'),
(545, 'SYED WARIS', 'syed.mdq0018@gmail.com', '9940643460', 5, '9094424277', 'e807f1fcf82d132f9bb018ca6738a19f', '1010101010', '1', '1', 'fF4ygJ3jRl2Xgddw0fC20a:APA91bE6A2_EJRTpyS1vuwOVOmkECfaNCkgof2vxdpu4N12vFbynk12XrrJxpWGha1gwIYuXq7aFP7xxQ1XH_nihfkfuXg434n0er3C_Ws8J4I7XdHrTj6y8Vvn3CfQ_3xXjvYIF1mgK', '0', '0', '', 0, '2022-12-28 17:16:18', '20230211_131428f2-1676101477.jpg', '2022-12-28 17:16:18', NULL, NULL, '2022-12-28 17:16:18', '5661', '16', 0, '0000-00-00 00:00:00'),
(546, 'sanjai', 'sanjai@gmail.com', '7558188330', 5, '8838995745', 'e13db6b74a2f136dac460c96c33ba15f', '1010101010', '1', '2', 'ddMqN1_IRUKNXueixgObxV:APA91bHt-_4ohE38oUuXnlna-1uskYErjawZeWW-B3uf-BUGBuc6lqf5kdZdDW_ruDhWu8v8kQbwCE0I2TM9_-k3zQxOOUWb4qitmp3fdAL8uGMrKrWXHP-xZY9jMiZJiFo-icmSByxK', '1', '0', '', 0, '2022-12-28 17:16:18', NULL, '2022-12-29 19:39:11', NULL, NULL, '2022-12-28 17:16:18', '5661', '16', 0, '2023-02-12 00:00:08'),
(553, 'subramaniyan', 'sb@gmail.com', '9788823586', 2, '', 'e13db6b74a2f136dac460c96c33ba15f', '1010101010', '1', '3', 'ctP_Z0ZBTo-dfibmQWBf5K:APA91bGMM4jVxl-zaID5q_Gd95So_EwOMSHLZP5axibQGFeaiO-mm5oAOEzT1-YgR0oEc0U7oiUDdzDGwmG3CdT5N5BqBB1aqDm7Z7zVYjsyLGud2pfpnZDW2_PAo42mr0eOmNwjtAm_', '0', '0', '', 0, '2022-12-28 17:16:18', NULL, '2023-01-13 22:17:52', NULL, NULL, '2022-12-28 17:16:18', '5661', '16', 0, '0000-00-00 00:00:00'),
(578, 'Satheesh ', 'test@gmail.com', '9788847473', 5, '8667235663', '2168ad5e463d9accb215edaafa31c8d9', '1234512345', '1', '1', 'fZaIZgHaQHiIbDzANVKyrK:APA91bFO68ssJQSmRm9VKffdVX9s4AJvokTsFoPvxcrG8XXmoKm8Il9Ig7mfvjalzJO9IGavAfrFgh6yaIDsVNGy_LSmvOekllMOCBG3khrqcsQQGcTizwmSVVdcfN2oxpyl_v1O2KmQ', '0', '0', '', 1, '2023-01-29 15:54:03', NULL, '2023-01-29 15:54:03', NULL, NULL, '2023-01-29 15:54:03', '', '', 0, '0000-00-00 00:00:00'),
(585, 'demoguest', 'demoguest@gmail.com', '9790000000', 5, '9790322533', 'c20e1aff62e88e0b8cb2c7c26e5397e7', '1212121212', '1', '3', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImRlbW9ndWVzdEBnbWFpbC5jb20iLCJleHAiOjE2NzU0OTIxNzN9.bluNPNjjP90tnxpzGgBKEUf3Twsc3fTXVENVR5sXznQ', '1', '0', '', 0, '2023-02-04 08:59:57', NULL, '2023-02-04 08:59:57', NULL, NULL, '2023-02-03 08:37:08', '123412', '', 0, '0000-00-00 00:00:00'),
(594, 'guestnew', 'guestnew06@mail.com', '9790322533', 5, '9360791089', 'c20e1aff62e88e0b8cb2c7c26e5397e7', '8686868686', '1', '1', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6Ijk3OTAzMjI1MzMiLCJleHAiOjE2NzU5MjI3OTZ9.7DBR4EHNfxgNdkkoj3p1WWEDrF8n2KuZ-GFf-mSTkwg', '1', '0', '', 0, '2023-02-06 16:01:50', NULL, '2023-02-06 16:01:50', NULL, NULL, '2023-02-06 16:01:50', '', '', 0, '0000-00-00 00:00:00'),
(607, 'guest444', 'guest444@mail.com', '9360791089', 5, '9790322533', 'c20e1aff62e88e0b8cb2c7c26e5397e7', '8686868686', '1', '2', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6Imd1ZXN0NDQ0QG1haWwuY29tIiwiZXhwIjoxNjc1OTI0MzIwfQ.lZqoAvwfBUE0A0vGmwKh9FUkoOmP0Pf5fkDT1cZ_vN8', '1', '0', '', 0, '2023-02-09 09:03:39', NULL, '2023-02-09 09:03:39', NULL, NULL, '2023-02-06 16:01:50', '', '', 0, '0000-00-00 00:00:00'),
(610, 'Anu', 'sanusuya@thevsafe.com', '9994620094', 0, '', 'fa0cfaa62e31a29e1753d2bddeb1ded9', NULL, '0', '0', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6InNhbnVzdXlhQHRoZXZzYWZlLmNvbSIsImV4cCI6MTY3NTkyNzI2N30.PtzN_DRGuvo8iQGeatdMcZLGUHm0MXG9BoEgMp-gWtU', '0', '0', '', 0, '0000-00-00 00:00:00', NULL, '2023-02-09 09:55:16', NULL, NULL, '2023-02-09 09:48:51', '', '', 0, '0000-00-00 00:00:00'),
(611, 'Viknesh V', 'viknesh.vadivel@gmail.com', '9597225200', 5, '9994620094', 'ac489d23bf7768e4d7d531d386779071', '1986198619', '1', '2', 'cg9sipfqRSuD1NtER3wRPf:APA91bGh6Jr7uAzZcTJGUhBZ7XGD0wLbB5GXYOoZ7RVQ71vFXCnO0jtwyVUd0MMGwoGYEfMY6GX--h8OnLgqq7nAKMTH8J3bpws1twmQjLtPZqYBs3ZCiEoXP6aDJUlbThsW3H_fyAYy', '1', '0', '', 0, '2023-02-09 10:21:02', NULL, '2023-02-09 10:21:02', NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00'),
(617, 'balaji', 'balaji.mdq@gmail.com', '7338804286', 0, '', 'e807f1fcf82d132f9bb018ca6738a19f', NULL, '0', '', 'fWmGfEcMQiGryUB5VIkgE8:APA91bHvU0mk21rCHqKdeJpcLmMlOKNCxGw_fAmu3tF8Rv9z1to4NQ14wHdtD0P9TYjN4Yx2TSM120ID6mB9NV4gJdf3cI7xzwjIakwMOrrfHcwLwqfscJymdIo_LbkYLpV81LxbzO9A', '0', '0', '', 0, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sos_pin`
--

CREATE TABLE `sos_pin` (
  `id` int(11) NOT NULL,
  `mac_id` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `sos_pin` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sos_pin`
--

INSERT INTO `sos_pin` (`id`, `mac_id`, `mobile`, `sos_pin`, `created_at`) VALUES
(1, '1010101010', '7558188330', 1, '2023-02-10 15:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `wifi`
--

CREATE TABLE `wifi` (
  `id` int(11) NOT NULL,
  `wifi_ssd` varchar(255) NOT NULL,
  `wifi_pin` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wifi`
--

INSERT INTO `wifi` (`id`, `wifi_ssd`, `wifi_pin`, `mobile`, `created_at`) VALUES
(1, 'poco x2', '124', '7558188330', '2022-09-26 12:37:36'),
(2, 'poco x2', '124', '7558188330', '2022-09-26 12:37:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_key`
--
ALTER TABLE `access_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deactivated_userid`
--
ALTER TABLE `deactivated_userid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fw_battery_status`
--
ALTER TABLE `fw_battery_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fw_locker_status`
--
ALTER TABLE `fw_locker_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fw_manual_key`
--
ALTER TABLE `fw_manual_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fw_tampering_alert`
--
ALTER TABLE `fw_tampering_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_version`
--
ALTER TABLE `get_version`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_support`
--
ALTER TABLE `help_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ota_file`
--
ALTER TABLE `ota_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_purchase_ibfk_1` (`user_id`),
  ADD KEY `product_purchase_ibfk_2` (`product_id`);

--
-- Indexes for table `push_notifications`
--
ALTER TABLE `push_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sos_pin`
--
ALTER TABLE `sos_pin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wifi`
--
ALTER TABLE `wifi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_key`
--
ALTER TABLE `access_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deactivated_userid`
--
ALTER TABLE `deactivated_userid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fw_battery_status`
--
ALTER TABLE `fw_battery_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fw_locker_status`
--
ALTER TABLE `fw_locker_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fw_manual_key`
--
ALTER TABLE `fw_manual_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fw_tampering_alert`
--
ALTER TABLE `fw_tampering_alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `get_version`
--
ALTER TABLE `get_version`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `help_support`
--
ALTER TABLE `help_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `ota_file`
--
ALTER TABLE `ota_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_purchase`
--
ALTER TABLE `product_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `push_notifications`
--
ALTER TABLE `push_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=618;

--
-- AUTO_INCREMENT for table `sos_pin`
--
ALTER TABLE `sos_pin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wifi`
--
ALTER TABLE `wifi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD CONSTRAINT `product_purchase_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_purchase_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
