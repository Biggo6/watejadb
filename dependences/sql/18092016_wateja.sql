-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 03:37 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wateja`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslinks`
--

CREATE TABLE `accesslinks` (
  `id` int(11) NOT NULL,
  `linkurl` varchar(100) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apikeys`
--

CREATE TABLE `apikeys` (
  `id` int(11) NOT NULL,
  `app_id` varchar(100) NOT NULL,
  `api_key` text NOT NULL,
  `apiratelimit_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `api_version` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `issued_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apiratelimit`
--

CREATE TABLE `apiratelimit` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `added_by`, `name`, `status`, `company_id`, `phone`, `location`, `street`, `created_at`, `updated_at`) VALUES
(1, 1, 'HQ', 1, 4, '0777777777', 'Ubungo', '', '2016-09-01 11:04:17', '2016-09-01 11:04:17'),
(2, 1, 'Mbeya ', 1, 4, '067554332', 'dgsgfhhj', '', '2016-09-01 11:13:32', '2016-09-01 11:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Food & Drink', 1, '2016-08-19 15:35:27', '2016-08-19 15:35:27'),
(4, 'Fashion & Apparel', 1, '2016-08-19 15:36:34', '2016-08-19 15:36:34'),
(5, 'Home, Life Styles and Gifts', 1, '2016-08-19 15:36:53', '2016-08-19 15:36:53'),
(6, 'Sports, Hobbies & Toys', 1, '2016-08-19 15:37:34', '2016-08-19 15:37:34'),
(7, 'Health & Beauty ', 1, '2016-08-19 15:37:58', '2016-08-19 15:37:58'),
(8, 'Cafe & Restaurants', 1, '2016-08-19 15:38:22', '2016-08-19 15:38:22'),
(9, 'Saloons & Barbershops', 1, '2016-08-19 15:38:44', '2016-08-19 15:38:44'),
(13, 'Other', 1, '2016-08-19 16:18:18', '2016-08-20 08:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tin` varchar(100) NOT NULL,
  `region_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `geo_location` text NOT NULL,
  `business_id` int(11) NOT NULL,
  `street` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `tin`, `region_id`, `district_id`, `email`, `phone`, `mobile`, `website`, `company_logo`, `location`, `geo_location`, `business_id`, `street`, `added_by`, `created_at`, `updated_at`) VALUES
(4, 'Izweb Technologies', '552463578475', 31, 12, 'izwebtz@gmail.com', '21532653764758', '+255712315840', 'http://softnet.co.tz', '', '', '', 4, 'adfshdfh', 1, '2016-08-20 10:09:38', '2016-08-20 10:09:38'),
(5, 'Hathway LTD', '12345678', 31, 13, 'dev@ona.co.tz', '0458695708634546', '46846846848', 'http://softnet.co.tz', 'http://localhost/wateja/software/public/uploads/companylogos/5bidn9qvje.png', 'Upanga, Plot 1000', '', 13, 'mapambano', 1, '2016-09-01 08:09:38', '2016-09-01 08:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `company_subscription`
--

CREATE TABLE `company_subscription` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tried` int(11) NOT NULL DEFAULT '0',
  `licience` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_subscription`
--

INSERT INTO `company_subscription` (`id`, `company_id`, `branch_id`, `subscription_id`, `status`, `tried`, `licience`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 0, 0, 'b954bea0-7d75-11e6-94f4-001122334455', '2016-09-18 07:58:51', '2016-09-18 09:36:04'),
(2, 4, 2, 2, 1, 0, 'bebc56a0-7d75-11e6-8add-001122334455', '2016-09-18 07:59:03', '2016-09-18 07:59:03'),
(3, 4, 1, 2, 1, 1, '7646f440-7d83-11e6-bb66-001122334455', '2016-09-18 09:38:18', '2016-09-18 09:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `customer_code` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `whatsappid` varchar(100) NOT NULL,
  `skypeid` varchar(100) NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `physical_postcode` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `data_source` varchar(100) NOT NULL DEFAULT 'Web',
  `country` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `middlename`, `lastname`, `customer_code`, `dob`, `gender`, `phone`, `mobile`, `fax`, `email`, `website`, `twitter`, `facebook`, `instagram`, `street`, `location`, `whatsappid`, `skypeid`, `suburb`, `city`, `physical_postcode`, `address`, `state`, `photo`, `data_source`, `country`, `created_at`, `updated_at`, `company_id`, `branch_id`, `added_by`) VALUES
(1, 'Joram', '', 'Kimata', '', '', '', '255712315840', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Web', '', '2016-09-01 15:18:09', '2016-09-01 15:18:09', 0, 0, 0),
(2, 'Joram', '', 'Kimata', '', '', '', '255712315840', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Web', '', '2016-09-01 15:21:47', '2016-09-01 15:21:47', 0, 0, 0),
(3, 'Joram', '', 'Kimata', '', '', '', '255712315840', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Web', '', '2016-09-01 15:22:50', '2016-09-01 15:22:50', 0, 0, 1),
(4, 'Joram', '', 'Kimata', '', '', '', '255712315841', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', '', '', '', 'Web', '', '2016-09-01 15:26:03', '2016-09-01 15:26:03', 0, 0, 1),
(5, 'QWERRY', '', 'ASDFGHG', '', '', '', '+255712315840', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', '', '', '', 'Web', '', '2016-09-01 15:45:29', '2016-09-01 15:45:29', 0, 0, 1),
(6, 'Joram', '', 'Kimata', '', '', '', '25571231584022', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', '', '', '', 'Web', '', '2016-09-01 15:48:16', '2016-09-01 15:48:16', 0, 0, 1),
(7, 'Joram', '', 'asfasf', '', '', '', '256578790', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', '', '', '', 'Web', '', '2016-09-01 17:01:09', '2016-09-01 17:01:09', 0, 0, 1),
(8, 'Joram', '', 'Kimata', '', '', '', '255712315840', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', '', '', '', 'Web', '', '2016-09-02 05:39:22', '2016-09-02 05:39:22', 4, 1, 5),
(9, 'Joram', '', 'Kimata', '', '', '', '+255712315840', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', '', '', '', 'Web', '', '2016-09-02 05:57:56', '2016-09-02 05:57:56', 4, 1, 5),
(10, 'Leah', '', 'Kimaro', '', '', '', '071426666666', '', '', '', '', '', '', 'kinigatz', '', '', '0712315840', '', 'yes', '', '', '', '', '', 'Web', '', '2016-09-04 07:35:36', '2016-09-04 07:35:36', 4, 1, 5),
(11, 'Joram', '', 'Kimata', '', '', '', '712315840', '', '', '', '', '', '', '', '', '', '', '', 'no', '', '', '', '', '', 'Web', '', '2016-09-06 12:14:29', '2016-09-06 12:14:29', 4, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `customer_group`
--

CREATE TABLE `customer_group` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_group`
--

INSERT INTO `customer_group` (`id`, `group_id`, `customer_id`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 0, '2016-09-02 06:17:44', '2016-09-02 06:17:44'),
(2, 3, 8, 0, '2016-09-02 06:20:45', '2016-09-02 06:20:45'),
(3, 6, 8, 0, '2016-09-02 06:27:18', '2016-09-02 06:27:18'),
(4, 7, 9, 0, '2016-09-02 06:29:15', '2016-09-02 06:29:15'),
(5, 8, 8, 0, '2016-09-02 07:03:32', '2016-09-02 07:03:32'),
(6, 10, 8, 0, '2016-09-02 07:16:12', '2016-09-02 07:16:12'),
(7, 11, 8, 5, '2016-09-02 07:20:31', '2016-09-02 07:20:31'),
(8, 12, 3, 1, '2016-09-06 12:01:18', '2016-09-06 12:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE `custom_fields` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `module_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `field_type` varchar(100) NOT NULL,
  `field_value` varchar(100) NOT NULL,
  `mandatory` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `region_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `region_id`, `active`, `created_at`, `updated_at`) VALUES
(12, 'ilala', 31, 1, '2016-08-19 17:18:35', '2016-08-20 08:02:45'),
(13, 'kinondoni', 31, 1, '2016-08-19 17:45:26', '2016-08-19 17:45:26'),
(14, 'Temeke', 31, 1, '2016-08-19 18:00:58', '2016-09-01 14:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `group_icon` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `group_icon`, `status`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'sales', '', 0, 5, '2016-09-02 06:14:24', '2016-09-02 06:14:24'),
(2, 'Support Team Group', '', 0, 5, '2016-09-02 06:17:44', '2016-09-02 06:17:44'),
(3, 'Support Team Group2', 'http://localhost/wateja/software/public/uploads/groups/rwr5sbyqbj.jpg', 0, 5, '2016-09-02 06:20:45', '2016-09-02 06:20:45'),
(4, 'Support Team Group55', 'http://localhost/wateja/software/public/uploads/groups/ocbndcsurh.jpg', 0, 5, '2016-09-02 06:23:02', '2016-09-02 06:23:02'),
(5, 'asdas', 'http://localhost/wateja/software/public/uploads/groups/dwb5dzrdhs.jpg', 0, 5, '2016-09-02 06:25:18', '2016-09-02 06:25:18'),
(6, 'Support Team Group1234', 'http://localhost/wateja/software/public/uploads/groups/kgs3tbrjxg.jpg', 0, 5, '2016-09-02 06:27:18', '2016-09-02 06:27:18'),
(7, 'sds', 'http://localhost/wateja/software/public/uploads/groups/b6hpjqp2zy.jpg', 0, 5, '2016-09-02 06:29:15', '2016-09-02 06:29:15'),
(8, 'we', '', 0, 5, '2016-09-02 07:03:32', '2016-09-02 07:03:32'),
(9, 'Support Team Group1', '', 1, 5, '2016-09-02 07:09:16', '2016-09-02 07:09:16'),
(10, 'Support Team Group111', '', 1, 5, '2016-09-02 07:16:12', '2016-09-02 07:16:12'),
(11, 'Support Team Group11111', '', 1, 5, '2016-09-02 07:20:30', '2016-09-02 07:20:30'),
(12, 'Support Team Group', '', 1, 1, '2016-09-06 12:01:18', '2016-09-06 12:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `groups_customers`
--

CREATE TABLE `groups_customers` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `groupd_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instagram_logins`
--

CREATE TABLE `instagram_logins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `licences`
--

CREATE TABLE `licences` (
  `id` int(11) NOT NULL,
  `licence_key` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `logintime` datetime NOT NULL,
  `logouttime` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `user_id`, `logintime`, `logouttime`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-09-01 16:07:53', '0000-00-00 00:00:00', '2016-09-01 16:07:53', '2016-09-01 16:07:53'),
(2, 1, '2016-09-01 16:08:53', '2016-09-01 16:08:56', '2016-09-01 16:08:53', '2016-09-01 16:08:56'),
(3, 1, '2016-09-01 16:09:15', '0000-00-00 00:00:00', '2016-09-01 16:09:15', '2016-09-01 16:09:15'),
(4, 1, '2016-09-01 16:18:39', '2016-09-01 17:05:54', '2016-09-01 16:18:39', '2016-09-01 17:05:54'),
(5, 5, '2016-09-01 17:05:59', '0000-00-00 00:00:00', '2016-09-01 17:05:59', '2016-09-01 17:05:59'),
(6, 5, '2016-09-02 05:28:50', '0000-00-00 00:00:00', '2016-09-02 05:28:50', '2016-09-02 05:28:50'),
(7, 1, '2016-09-02 10:22:43', '0000-00-00 00:00:00', '2016-09-02 10:22:43', '2016-09-02 10:22:43'),
(8, 1, '2016-09-02 14:24:57', '0000-00-00 00:00:00', '2016-09-02 14:24:57', '2016-09-02 14:24:57'),
(9, 1, '2016-09-02 16:16:50', '2016-09-02 16:28:54', '2016-09-02 16:16:50', '2016-09-02 16:28:54'),
(10, 5, '2016-09-02 16:30:47', '0000-00-00 00:00:00', '2016-09-02 16:30:47', '2016-09-02 16:30:47'),
(11, 1, '2016-09-03 08:30:42', '0000-00-00 00:00:00', '2016-09-03 08:30:42', '2016-09-03 08:30:42'),
(12, 5, '2016-09-04 05:55:01', '0000-00-00 00:00:00', '2016-09-04 05:55:01', '2016-09-04 05:55:01'),
(13, 1, '2016-09-04 13:40:34', '2016-09-04 14:32:29', '2016-09-04 13:40:34', '2016-09-04 14:32:29'),
(14, 1, '2016-09-04 14:32:42', '0000-00-00 00:00:00', '2016-09-04 14:32:42', '2016-09-04 14:32:42'),
(15, 1, '2016-09-05 15:01:10', '0000-00-00 00:00:00', '2016-09-05 15:01:10', '2016-09-05 15:01:10'),
(16, 1, '2016-09-06 12:00:55', '2016-09-06 12:03:14', '2016-09-06 12:00:55', '2016-09-06 12:03:14'),
(17, 5, '2016-09-06 12:03:21', '0000-00-00 00:00:00', '2016-09-06 12:03:21', '2016-09-06 12:03:21'),
(18, 1, '2016-09-16 14:27:17', '2016-09-16 15:06:12', '2016-09-16 14:27:17', '2016-09-16 15:06:12'),
(19, 5, '2016-09-16 15:06:16', '0000-00-00 00:00:00', '2016-09-16 15:06:16', '2016-09-16 15:06:16'),
(20, 5, '2016-09-16 15:15:07', '2016-09-16 15:15:37', '2016-09-16 15:15:07', '2016-09-16 15:15:37'),
(21, 1, '2016-09-16 15:15:42', '2016-09-16 15:22:20', '2016-09-16 15:15:42', '2016-09-16 15:22:20'),
(22, 5, '2016-09-16 15:22:24', '2016-09-16 15:22:35', '2016-09-16 15:22:24', '2016-09-16 15:22:35'),
(23, 1, '2016-09-16 15:22:44', '2016-09-16 15:24:27', '2016-09-16 15:22:44', '2016-09-16 15:24:27'),
(24, 6, '2016-09-16 15:24:34', '2016-09-16 15:26:32', '2016-09-16 15:24:34', '2016-09-16 15:26:32'),
(25, 1, '2016-09-16 15:26:41', '2016-09-16 15:27:20', '2016-09-16 15:26:41', '2016-09-16 15:27:20'),
(26, 6, '2016-09-16 15:27:26', '2016-09-16 15:29:25', '2016-09-16 15:27:26', '2016-09-16 15:29:25'),
(27, 1, '2016-09-16 15:29:29', '2016-09-16 15:30:34', '2016-09-16 15:29:29', '2016-09-16 15:30:34'),
(28, 7, '2016-09-16 15:30:42', '2016-09-16 15:36:45', '2016-09-16 15:30:42', '2016-09-16 15:36:45'),
(29, 1, '2016-09-16 15:36:50', '2016-09-16 20:11:58', '2016-09-16 15:36:50', '2016-09-16 20:11:58'),
(30, 5, '2016-09-16 20:12:03', '2016-09-16 20:12:18', '2016-09-16 20:12:03', '2016-09-16 20:12:18'),
(31, 1, '2016-09-16 20:12:24', '2016-09-16 20:13:31', '2016-09-16 20:12:24', '2016-09-16 20:13:31'),
(32, 5, '2016-09-16 20:13:45', '2016-09-16 20:14:24', '2016-09-16 20:13:45', '2016-09-16 20:14:24'),
(33, 1, '2016-09-16 20:14:31', '2016-09-16 20:15:33', '2016-09-16 20:14:31', '2016-09-16 20:15:33'),
(34, 5, '2016-09-16 20:15:38', '2016-09-16 20:24:32', '2016-09-16 20:15:38', '2016-09-16 20:24:32'),
(35, 1, '2016-09-16 20:46:11', '0000-00-00 00:00:00', '2016-09-16 20:46:11', '2016-09-16 20:46:11'),
(36, 1, '2016-09-17 06:23:03', '2016-09-17 07:31:28', '2016-09-17 06:23:03', '2016-09-17 07:31:28'),
(37, 1, '2016-09-17 07:31:34', '2016-09-17 07:39:20', '2016-09-17 07:31:34', '2016-09-17 07:39:20'),
(38, 5, '2016-09-17 07:39:33', '2016-09-17 07:40:10', '2016-09-17 07:39:33', '2016-09-17 07:40:10'),
(39, 1, '2016-09-17 07:40:16', '2016-09-17 07:41:10', '2016-09-17 07:40:16', '2016-09-17 07:41:10'),
(40, 5, '2016-09-17 07:41:25', '2016-09-17 07:42:45', '2016-09-17 07:41:25', '2016-09-17 07:42:45'),
(41, 1, '2016-09-17 07:42:52', '0000-00-00 00:00:00', '2016-09-17 07:42:52', '2016-09-17 07:42:52'),
(42, 1, '2016-09-18 05:18:27', '2016-09-18 08:02:06', '2016-09-18 05:18:27', '2016-09-18 08:02:06'),
(43, 1, '2016-09-18 08:07:09', '2016-09-18 08:15:14', '2016-09-18 08:07:09', '2016-09-18 08:15:14'),
(44, 5, '2016-09-18 08:15:19', '0000-00-00 00:00:00', '2016-09-18 08:15:19', '2016-09-18 08:15:19'),
(45, 5, '2016-09-18 08:19:46', '2016-09-18 08:39:12', '2016-09-18 08:19:46', '2016-09-18 08:39:12'),
(46, 6, '2016-09-18 08:39:21', '2016-09-18 08:43:38', '2016-09-18 08:39:21', '2016-09-18 08:43:38'),
(47, 6, '2016-09-18 08:45:47', '0000-00-00 00:00:00', '2016-09-18 08:45:47', '2016-09-18 08:45:47'),
(48, 6, '2016-09-18 09:04:42', '0000-00-00 00:00:00', '2016-09-18 09:04:42', '2016-09-18 09:04:42'),
(49, 6, '2016-09-18 09:06:53', '0000-00-00 00:00:00', '2016-09-18 09:06:53', '2016-09-18 09:06:53'),
(50, 6, '2016-09-18 09:08:19', '0000-00-00 00:00:00', '2016-09-18 09:08:19', '2016-09-18 09:08:19'),
(51, 5, '2016-09-18 09:09:02', '0000-00-00 00:00:00', '2016-09-18 09:09:02', '2016-09-18 09:09:02'),
(52, 1, '2016-09-18 09:09:47', '0000-00-00 00:00:00', '2016-09-18 09:09:47', '2016-09-18 09:09:47'),
(53, 1, '2016-09-18 09:10:09', '2016-09-18 09:12:07', '2016-09-18 09:10:09', '2016-09-18 09:12:07'),
(54, 5, '2016-09-18 09:12:13', '0000-00-00 00:00:00', '2016-09-18 09:12:13', '2016-09-18 09:12:13'),
(55, 5, '2016-09-18 09:12:27', '0000-00-00 00:00:00', '2016-09-18 09:12:27', '2016-09-18 09:12:27'),
(56, 5, '2016-09-18 09:13:33', '2016-09-18 09:30:11', '2016-09-18 09:13:33', '2016-09-18 09:30:11'),
(57, 1, '2016-09-18 09:30:17', '2016-09-18 09:33:30', '2016-09-18 09:30:17', '2016-09-18 09:33:30'),
(58, 5, '2016-09-18 09:33:34', '0000-00-00 00:00:00', '2016-09-18 09:33:34', '2016-09-18 09:33:34'),
(59, 1, '2016-09-18 09:36:22', '2016-09-18 09:38:40', '2016-09-18 09:36:22', '2016-09-18 09:38:40'),
(60, 5, '2016-09-18 09:38:46', '2016-09-18 10:28:41', '2016-09-18 09:38:46', '2016-09-18 10:28:41'),
(61, 1, '2016-09-18 10:28:47', '2016-09-18 10:31:52', '2016-09-18 10:28:47', '2016-09-18 10:31:52'),
(62, 5, '2016-09-18 10:31:56', '2016-09-18 13:37:16', '2016-09-18 10:31:56', '2016-09-18 13:37:16'),
(63, 1, '2016-09-18 13:37:22', '0000-00-00 00:00:00', '2016-09-18 13:37:22', '2016-09-18 13:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `date_checked` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_08_17_121501_create_accesslinks_table', 0),
('2016_08_17_121501_create_branches_table', 0),
('2016_08_17_121501_create_business_table', 0),
('2016_08_17_121501_create_companies_table', 0),
('2016_08_17_121501_create_company_subscription_table', 0),
('2016_08_17_121501_create_customer_group_table', 0),
('2016_08_17_121501_create_customers_table', 0),
('2016_08_17_121501_create_groups_table', 0),
('2016_08_17_121501_create_licences_table', 0),
('2016_08_17_121501_create_login_history_table', 0),
('2016_08_17_121501_create_messages_table', 0),
('2016_08_17_121501_create_replies_table', 0),
('2016_08_17_121501_create_sub_business_table', 0),
('2016_08_17_121501_create_subscription_table', 0),
('2016_08_17_121501_create_users_table', 0),
('2016_08_17_121501_create_visits_table', 0),
('2016_08_18_190629_create_accesslinks_table', 0),
('2016_08_18_190629_create_apikeys_table', 0),
('2016_08_18_190629_create_apiratelimit_table', 0),
('2016_08_18_190629_create_branches_table', 0),
('2016_08_18_190629_create_business_table', 0),
('2016_08_18_190629_create_companies_table', 0),
('2016_08_18_190629_create_company_subscription_table', 0),
('2016_08_18_190629_create_custom_fields_table', 0),
('2016_08_18_190629_create_customer_group_table', 0),
('2016_08_18_190629_create_customers_table', 0),
('2016_08_18_190629_create_districts_table', 0),
('2016_08_18_190629_create_groups_table', 0),
('2016_08_18_190629_create_licences_table', 0),
('2016_08_18_190629_create_login_history_table', 0),
('2016_08_18_190629_create_messages_table', 0),
('2016_08_18_190629_create_modules_table', 0),
('2016_08_18_190629_create_regions_table', 0),
('2016_08_18_190629_create_replies_table', 0),
('2016_08_18_190629_create_roles_table', 0),
('2016_08_18_190629_create_sub_business_table', 0),
('2016_08_18_190629_create_subscription_table', 0),
('2016_08_18_190629_create_users_table', 0),
('2016_08_18_190629_create_visits_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `system` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `system`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Company', 1, 1, '2016-08-23 15:07:40', '2016-08-23 15:07:40'),
(6, 'Business', 1, 1, '2016-08-23 18:04:39', '2016-08-23 18:04:39'),
(7, 'Regions', 1, 1, '2016-08-23 18:05:13', '2016-08-23 18:05:13'),
(8, 'Users', 1, 1, '2016-08-23 18:07:15', '2016-08-23 18:07:15'),
(9, 'Districts', 1, 1, '2016-08-23 18:07:43', '2016-08-23 18:07:43'),
(10, 'Customers', 1, 1, '2016-08-23 18:08:17', '2016-08-23 18:08:17'),
(11, 'Groups', 1, 1, '2016-08-23 18:08:29', '2016-08-23 18:08:29'),
(12, 'Packages', 1, 1, '2016-08-23 18:11:14', '2016-08-23 18:11:14'),
(13, 'Licences', 1, 1, '2016-08-23 18:11:45', '2016-08-23 18:11:45'),
(14, 'Reports', 1, 1, '2016-08-23 18:12:05', '2016-08-23 18:12:21'),
(15, 'Subscription', 1, 1, '2016-08-23 18:12:38', '2016-08-23 18:12:38'),
(16, 'Roles', 1, 1, '2016-08-23 18:16:20', '2016-08-23 18:16:20'),
(17, 'Permissions', 1, 1, '2016-08-23 18:16:53', '2016-08-23 18:16:53'),
(18, 'Messages', 1, 1, '2016-08-23 18:17:36', '2016-08-23 18:17:36'),
(19, 'Modules', 1, 1, '2016-08-23 18:20:05', '2016-08-23 18:20:05'),
(21, 'Branches', 1, 1, '2016-09-01 10:29:19', '2016-09-01 10:29:19'),
(22, 'Dashboard', 1, 1, '2016-09-17 07:31:55', '2016-09-17 07:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `module_id` int(11) NOT NULL,
  `route_link` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `module_id`, `route_link`, `active`, `added_by`, `created_at`, `updated_at`) VALUES
(3, 'View', 1, 'company/add', 1, 1, '2016-08-23 16:59:54', '2016-08-23 16:59:54'),
(4, 'Add', 1, 'company/store', 1, 1, '2016-08-23 17:00:07', '2016-08-23 17:00:07'),
(5, 'Delete', 1, 'companies/delete', 1, 1, '2016-08-23 17:00:21', '2016-08-23 17:00:21'),
(6, 'Edit', 1, 'companies/edit', 1, 1, '2016-08-23 17:01:03', '2016-08-23 17:01:03'),
(7, 'Update', 1, 'business/update', 1, 1, '2016-08-23 17:01:14', '2016-08-23 17:01:14'),
(8, 'Manage', 1, 'company/manage', 1, 1, '2016-08-23 17:01:30', '2016-08-23 17:01:30'),
(9, 'Add', 6, 'business/add', 1, 1, '2016-08-23 18:05:31', '2016-08-23 18:05:31'),
(10, 'Add', 16, 'roles/add', 1, 1, '2016-08-24 14:20:41', '2016-08-24 14:20:41'),
(11, 'Manage', 16, 'roles', 1, 1, '2016-08-24 14:20:56', '2016-08-24 14:20:56'),
(12, 'Delete', 16, 'roles/delete', 1, 1, '2016-08-24 14:21:15', '2016-08-24 14:21:15'),
(13, 'Add', 10, 'customers/add', 1, 1, '2016-08-25 11:58:08', '2016-08-25 11:58:08'),
(14, 'Add', 8, 'users', 1, 1, '2016-09-16 20:13:05', '2016-09-16 20:13:05'),
(15, 'Add', 12, 'packages/add', 1, 1, '2016-09-17 07:29:17', '2016-09-17 07:29:17'),
(16, 'Manage', 6, 'business/index', 1, 1, '2016-09-17 07:30:04', '2016-09-17 07:30:04'),
(17, 'Add', 7, 'app/configuration/refreshAddRegion', 1, 1, '2016-09-17 07:32:27', '2016-09-17 07:32:27'),
(18, 'Add', 9, 'app/configuration/storeDistrict', 1, 1, '2016-09-17 07:35:48', '2016-09-17 07:35:48'),
(19, 'Add', 11, 'groups/add', 1, 1, '2016-09-17 07:36:05', '2016-09-17 07:36:05'),
(20, 'Add', 17, 'permissions/add', 1, 1, '2016-09-17 07:36:48', '2016-09-17 07:36:48'),
(21, 'Add', 18, 'messages/sms', 1, 1, '2016-09-17 07:37:27', '2016-09-17 07:37:27'),
(22, 'Add', 19, 'modules/store', 1, 1, '2016-09-17 07:37:54', '2016-09-17 07:37:54'),
(23, 'Add', 21, 'branches/store', 1, 1, '2016-09-17 07:38:08', '2016-09-17 07:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(31, 'Dar es salaam', 1, '2016-08-19 12:49:26', '2016-09-01 08:08:11'),
(32, 'Arusha', 1, '2016-08-23 06:36:28', '2016-08-23 06:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `child` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `system`, `child`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 1, 1, '0', 1, '2016-08-25 11:49:12', '2016-08-25 11:49:12'),
(2, 'admin', 1, 1, '0', 1, '2016-08-25 11:50:58', '2016-08-25 11:50:58'),
(3, 'receptionist', 1, 1, '0', 1, '2016-08-25 11:59:34', '2016-08-25 11:59:34'),
(4, 'manager', 1, 1, '0', 1, '2016-08-25 12:02:00', '2016-08-25 12:02:00'),
(5, 'HOD', 1, 0, '0', 1, '2016-09-01 08:15:24', '2016-09-01 08:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `locked` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`id`, `role_id`, `permission_id`, `added_by`, `locked`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(2, 1, 4, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(3, 1, 5, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(4, 1, 6, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(5, 1, 7, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(6, 1, 8, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(7, 1, 9, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(8, 1, 3, 0, 0, '2016-08-24 14:06:49', '2016-08-24 14:06:49'),
(9, 1, 4, 0, 0, '2016-08-24 14:06:49', '2016-08-24 14:06:49'),
(10, 1, 5, 0, 0, '2016-08-24 14:06:49', '2016-08-24 14:06:49'),
(11, 1, 6, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(12, 1, 7, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(13, 1, 8, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(14, 1, 9, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(15, 1, 3, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(16, 1, 4, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(17, 1, 5, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(18, 1, 6, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(19, 1, 7, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(20, 1, 8, 0, 0, '2016-08-24 14:16:00', '2016-08-24 14:16:00'),
(21, 1, 9, 0, 0, '2016-08-24 14:16:00', '2016-08-24 14:16:00'),
(22, 1, 3, 0, 0, '2016-08-25 11:49:13', '2016-08-25 11:49:13'),
(23, 1, 4, 0, 0, '2016-08-25 11:49:13', '2016-08-25 11:49:13'),
(24, 1, 5, 0, 0, '2016-08-25 11:49:13', '2016-08-25 11:49:13'),
(25, 1, 6, 0, 0, '2016-08-25 11:49:13', '2016-08-25 11:49:13'),
(26, 1, 7, 0, 0, '2016-08-25 11:49:13', '2016-08-25 11:49:13'),
(27, 1, 8, 0, 0, '2016-08-25 11:49:14', '2016-08-25 11:49:14'),
(28, 1, 9, 0, 0, '2016-08-25 11:49:14', '2016-08-25 11:49:14'),
(29, 1, 10, 0, 0, '2016-08-25 11:49:14', '2016-08-25 11:49:14'),
(30, 1, 11, 0, 0, '2016-08-25 11:49:14', '2016-08-25 11:49:14'),
(31, 1, 12, 0, 0, '2016-08-25 11:49:15', '2016-08-25 11:49:15'),
(36, 4, 13, 0, 0, '2016-08-25 12:02:01', '2016-08-25 12:02:01'),
(37, 5, 13, 0, 0, '2016-09-01 08:15:24', '2016-09-01 08:15:24'),
(111, 2, 14, 0, 0, '2016-09-17 07:39:01', '2016-09-17 07:39:01'),
(112, 2, 13, 0, 0, '2016-09-17 07:39:01', '2016-09-17 07:39:01'),
(113, 2, 19, 0, 0, '2016-09-17 07:39:01', '2016-09-17 07:39:01'),
(114, 2, 21, 0, 0, '2016-09-17 07:39:01', '2016-09-17 07:39:01'),
(115, 3, 13, 0, 0, '2016-09-17 07:40:46', '2016-09-17 07:40:46'),
(116, 3, 19, 0, 0, '2016-09-17 07:40:46', '2016-09-17 07:40:46'),
(117, 3, 21, 0, 0, '2016-09-17 07:40:46', '2016-09-17 07:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `package` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `duration_days` float NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `package`, `active`, `duration_days`, `created_at`, `updated_at`, `added_by`) VALUES
(1, 'Free Trial', 1, 14, '2016-09-18 06:03:09', '2016-09-18 06:03:09', 0),
(2, 'Simba Package', 1, 31, '2016-09-18 06:04:38', '2016-09-18 06:04:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_business`
--

CREATE TABLE `sub_business` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `business_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `tried` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `profilepic`, `added_by`, `username`, `password`, `role_id`, `company_id`, `branch_id`, `remember_token`, `status`, `tried`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', 0, 'superadmin', '$2y$10$YihQEhMR4Oxg1I8b/yRFU.qH6e.5O0BSAUsbu.xwzImXCv02pxiUu', 1, 0, 0, 'TaKZ8cTOtD0yq1Q5qSqidEr6mkq1QIiCx86TdQrDupSTMMW5Ot6lwTKR2dR8', 1, 0, '2016-08-17 13:17:16', '2016-09-18 10:31:52'),
(5, 'Joram', 'Kimata', 'joramkimata@gmail.com', '', 1, 'jkimata', '$2y$10$TXn8s5b22sA3Kgdv2.BNROx8./5aiGdOf4fnhG4e12IP19zGf17te', 2, 4, 1, 'jdyX440TXld6vspz6Cc4OMpWm8XIvF5RqiPH0ZNTAvjAsJE1HRP0kwYo1VdA', 1, 1, '2016-09-01 11:34:16', '2016-09-18 13:37:16'),
(6, 'Joram', 'Kimata', 'admin@ona.co.tz', '', 1, 'admin2', '$2y$10$9YbLX3cxe7hoxinkHIvjDOXXN/0wsI0ZAvmjjWSxr/wS4.38IwtLa', 3, 4, 1, 'J10QZ72bvVDkyqLBBIEaHLI4IBC4GlQRRM8pZn5O8w4OUK0aHLbZB9sWcKER', 1, 1, '2016-09-16 15:24:22', '2016-09-18 08:43:39'),
(7, 'Joram', 'Kimata', 'akimambo@gmail.com', '', 1, 'manager', '$2y$10$AxbkRWC4lTzhoPaXuadOwelJz2k8rZrCVFjveyt7dkcNCjEv3vq2S', 4, 4, 1, '9TWUSp5lZ5ZjBdYqhy6bWLy6lJbwGQdm3tCZjaZbSqLq1S6BetoZgmchVwEF', 1, 0, '2016-09-16 15:30:27', '2016-09-16 15:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_checked` varchar(100) NOT NULL,
  `counts` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `layout_columns` int(11) NOT NULL,
  `layout_rows` int(11) NOT NULL,
  `widget_content` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslinks`
--
ALTER TABLE `accesslinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apikeys`
--
ALTER TABLE `apikeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apiratelimit`
--
ALTER TABLE `apiratelimit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_subscription`
--
ALTER TABLE `company_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_group`
--
ALTER TABLE `customer_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_customers`
--
ALTER TABLE `groups_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram_logins`
--
ALTER TABLE `instagram_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_business`
--
ALTER TABLE `sub_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslinks`
--
ALTER TABLE `accesslinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `apikeys`
--
ALTER TABLE `apikeys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `apiratelimit`
--
ALTER TABLE `apiratelimit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `company_subscription`
--
ALTER TABLE `company_subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customer_group`
--
ALTER TABLE `customer_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `groups_customers`
--
ALTER TABLE `groups_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instagram_logins`
--
ALTER TABLE `instagram_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_business`
--
ALTER TABLE `sub_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
