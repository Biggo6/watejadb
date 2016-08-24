-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2016 at 05:17 PM
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
  `name` varchar(100) NOT NULL,
  `company_id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'Izweb Technologies', '552463578475', 31, 12, 'izwebtz@gmail.com', '21532653764758', '+255712315840', 'http://softnet.co.tz', '', '', '', 4, 'adfshdfh', 1, '2016-08-20 10:09:38', '2016-08-20 10:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `company_subscription`
--

CREATE TABLE `company_subscription` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `group_id` int(11) NOT NULL,
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
  `whatsappid` varchar(100) NOT NULL,
  `skypeid` varchar(100) NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `physical_postcode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `data_source` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `company_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_group`
--

CREATE TABLE `customer_group` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(14, 'Joram', 31, 1, '2016-08-19 18:00:58', '2016-08-19 18:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL,
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
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(19, 'Modules', 1, 1, '2016-08-23 18:20:05', '2016-08-23 18:20:05');

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
(12, 'Delete', 16, 'roles/delete', 1, 1, '2016-08-24 14:21:15', '2016-08-24 14:21:15');

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
(31, 'Dar es salaam', 0, '2016-08-19 12:49:26', '2016-08-23 06:36:39'),
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
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `system`, `added_by`, `created_at`, `updated_at`) VALUES
(0, 'admin', 1, 0, 1, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(0, 'admin_', 1, 0, 1, '2016-08-24 14:06:49', '2016-08-24 14:06:49'),
(0, 'staff', 1, 0, 1, '2016-08-24 14:15:59', '2016-08-24 14:15:59');

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
(1, 0, 3, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(2, 0, 4, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(3, 0, 5, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(4, 0, 6, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(5, 0, 7, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(6, 0, 8, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(7, 0, 9, 0, 0, '2016-08-24 14:05:47', '2016-08-24 14:05:47'),
(8, 0, 3, 0, 0, '2016-08-24 14:06:49', '2016-08-24 14:06:49'),
(9, 0, 4, 0, 0, '2016-08-24 14:06:49', '2016-08-24 14:06:49'),
(10, 0, 5, 0, 0, '2016-08-24 14:06:49', '2016-08-24 14:06:49'),
(11, 0, 6, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(12, 0, 7, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(13, 0, 8, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(14, 0, 9, 0, 0, '2016-08-24 14:06:50', '2016-08-24 14:06:50'),
(15, 0, 3, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(16, 0, 4, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(17, 0, 5, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(18, 0, 6, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(19, 0, 7, 0, 0, '2016-08-24 14:15:59', '2016-08-24 14:15:59'),
(20, 0, 8, 0, 0, '2016-08-24 14:16:00', '2016-08-24 14:16:00'),
(21, 0, 9, 0, 0, '2016-08-24 14:16:00', '2016-08-24 14:16:00');

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
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `company_id`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$10$YihQEhMR4Oxg1I8b/yRFU.qH6e.5O0BSAUsbu.xwzImXCv02pxiUu', 1, 0, '3GlfUgpKAebPxWXnbAI6ctyhAmT4WdHWMoAPOGwhbmAaU7K7il6e1BYWXUDk', 1, '2016-08-17 13:17:16', '2016-08-23 06:41:28');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `company_subscription`
--
ALTER TABLE `company_subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_group`
--
ALTER TABLE `customer_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_business`
--
ALTER TABLE `sub_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
