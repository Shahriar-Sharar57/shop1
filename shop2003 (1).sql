-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 01:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop2003`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajaxes`
--

CREATE TABLE `ajaxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `ban_id` bigint(20) UNSIGNED NOT NULL,
  `ban_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_button` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_url` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_button`, `ban_url`, `ban_image`, `ban_slug`, `ban_status`, `created_at`, `updated_at`) VALUES
(1, 'Banner Title-01', 'IT Training Center', 'Read More', '#csl', NULL, 'B5fe47297a6b24', 1, '2020-12-24 10:51:03', NULL),
(2, 'Banner Title-02', 'International Software Company.', 'View More', '#view', NULL, 'B5fe4735d2cbe9', 1, '2020-12-24 10:54:21', NULL),
(3, 'Banner Title-03', 'Creative System Limited International Software Company.', 'Read More', '#csl', NULL, 'B5fe47581d5ca5', 1, '2020-12-24 11:03:29', NULL),
(4, 'Creative System', 'IT Training Center', 'View More', '#view', NULL, 'B5fe475b8acadf', 1, '2020-12-24 11:04:24', NULL),
(5, 'Banner Title-05', 'Creative System Limited International Software Company.', 'Read More', '#csl', NULL, 'B5fe47d528a1bb', 1, '2020-12-24 11:36:50', '2020-12-29 11:22:57'),
(6, 'Banner Title-05', 'Creative System Limited International Software Company.', 'Read More', '#csl', NULL, 'B5fe47dcf1eb7f', 1, '2020-12-24 11:38:55', '2020-12-29 11:03:46'),
(7, 'Banner Title-05', 'Creative System Limited International Software Company.', 'Read More', '#csl', NULL, 'B5fe47decefa10', 1, '2020-12-24 11:39:24', '2020-12-29 11:03:42'),
(8, 'Creative System', 'International Software Company.', 'Read More', '#csl', NULL, 'B5fe47e638f5f8', 1, '2020-12-24 11:41:23', '2020-12-29 11:03:38'),
(9, 'Creative System', 'International Software Company.', 'Read More', '#csl', NULL, '1609239189-creative-system', 1, '2020-12-24 11:41:50', '2020-12-29 11:03:35'),
(10, 'Creative System', 'International Software Company.', 'Read More', '#csl', 'banner_10_1608810193.jpg', 'B5fe47ed152583', 1, '2020-12-24 11:43:13', '2020-12-29 11:03:31'),
(11, 'Creative System Limited', 'IT Training Center', 'Read More', '#csl', 'banner_11_1609237241.jpg', 'creative-system-limited', 1, '2020-12-29 10:20:41', '2020-12-29 11:03:27'),
(12, 'Creative System Limited', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Read More', '#', 'banner_12_1609237469.jpg', '1609237469-creative-system-limited', 1, '2020-12-29 10:24:29', '2020-12-29 11:03:22'),
(13, 'Creative System Limited IT', 'IT Training Center', 'Read More', '#', 'banner_13_1609242073.jpg', '1609242073-creative-system-limited-it', 1, '2020-12-29 11:41:13', '2020-12-29 11:41:13'),
(14, 'Creative System Limited', 'International Software Company.', NULL, NULL, NULL, '1610018806-creative-system-limited', 1, '2021-01-07 11:26:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `basic_id` bigint(20) UNSIGNED NOT NULL,
  `basic_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_subtitle` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_logo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_favicon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_flogo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_creator` int(11) NOT NULL,
  `basic_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`basic_id`, `basic_title`, `basic_subtitle`, `basic_logo`, `basic_favicon`, `basic_flogo`, `basic_creator`, `basic_status`, `created_at`, `updated_at`) VALUES
(1, 'eBuy', 'Bangladeshi Online Shop', 'logo_1611229570.png', 'favicon_1610019666.jpg', 'flogo_1611229741.png', 1, 1, '2021-01-07 10:56:18', '2021-01-21 11:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `conus_id` bigint(20) UNSIGNED NOT NULL,
  `conus_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_subject` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`conus_id`, `conus_name`, `conus_phone`, `conus_email`, `conus_subject`, `conus_message`, `conus_slug`, `conus_status`, `created_at`, `updated_at`) VALUES
(1, 'Masud Rana', '01711221122', 'masud@gmail.com', 'Thank you for visiting our website. Our IT Institute any contact information available here', 'Creative Shaper is one of the latest IT technological based Institutions in Bangladesh where academic excellence is a tradition, teaching a passion and building career a habit. Creative Shaper is sister concern of Creative System Limited. Creative Shaper currently has more than 1000+ all kinds of undergraduate students and over 10 Experience faculties. The student population is projected to grow at 100% annually.', 'We23WA32121qwe', 1, '2021-01-14 11:18:37', NULL),
(2, 'Miraz Khan', '019876122112', 'miraz@yahoo.com', 'Creative Shaper is modeled on Nation and follows their academic features', 'The students of Creative Shaper experience an exciting academic life with copious opportunity to explore and nurture their innate talent and also were taking part in the Global IT sector. Creative Shaper also focuses on providing the necessary support to our IT Sector.', '121qturyasaQW11', 1, '2021-01-14 11:18:37', NULL),
(3, 'Saidul Islam Uzzal', '01654491921', 'creative@gmail.com', 'Test  Message', 'qwewqeqw ewqewq ewqewqewqeq qaeqwe wqe', 'CON6034e14120d3d', 1, '2021-02-23 11:04:33', NULL),
(4, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message for Shakil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua Ut enim.', 'CON6034e97c95e27', 1, '2021-02-23 11:39:40', NULL),
(5, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message for Shakil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua Ut enim.', 'CON6034e9ad63fc8', 1, '2021-02-23 11:40:29', NULL),
(6, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message for Shakil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua Ut enim.', 'CON6034e9efb03bd', 1, '2021-02-23 11:41:35', NULL),
(7, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message for Shakil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua Ut enim.', 'CON6034ea051b3eb', 1, '2021-02-23 11:41:57', NULL),
(8, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message for Shakil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua Ut enim.', 'CON6034ea2de8595', 1, '2021-02-23 11:42:37', NULL),
(9, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message for Shakil', 'sadfsddsfds fds dsf', 'CON6034ea893ccf4', 1, '2021-02-23 11:44:09', NULL),
(10, 'Sakil Khan', '01654491921', 'shakil.shahan02@gmail.com', 'Test  Message', 'sacsdcds fds', 'CON6034eb116384e', 1, '2021-02-23 11:46:25', NULL),
(11, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message', 'Welcome', 'CON6034ebc06bcaf', 1, '2021-02-23 11:49:20', NULL),
(12, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message', 'Welcome', 'CON6034ebfc9d595', 1, '2021-02-23 11:50:20', NULL),
(13, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message', 'asasdsad asd sad', 'CON6034ec57f2722', 1, '2021-02-23 11:51:51', NULL),
(14, 'Sakil Khan', '01710726035', 'shakil.shahan02@gmail.com', 'Test  Message', 'asasdsad asd sad', 'CON6034ecc8897f3', 1, '2021-02-23 11:53:44', NULL),
(15, 'Sakil Khan', '01654491921', 'shakil.shahan02@gmail.com', 'Test  Message', 'qeqwe qwewq eqw', 'CON6034ecf4d489a', 1, '2021-02-23 11:54:28', NULL),
(16, 'Sakil Khan', '01654491921', 'shakil.shahan02@gmail.com', 'Test  Message', 'qeqwe qwewq eqw', 'CON6034ed836dc88', 1, '2021-02-23 11:56:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `ci_id` bigint(20) UNSIGNED NOT NULL,
  `ci_phone1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_phone3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_phone4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email1` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email2` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email3` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email4` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`ci_id`, `ci_phone1`, `ci_phone2`, `ci_phone3`, `ci_phone4`, `ci_email1`, `ci_email2`, `ci_email3`, `ci_email4`, `ci_add1`, `ci_add2`, `ci_add3`, `ci_add4`, `ci_status`, `created_at`, `updated_at`) VALUES
(1, '+123 456 78900', '+009 876 54321', NULL, NULL, 'info@e-feri.com', 'sales@e-feri.com', NULL, NULL, '1234, Parkstreet Avenue, Dhaka', NULL, NULL, NULL, 1, '2021-01-12 11:47:50', '2021-01-21 11:53:35');

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
-- Table structure for table `main_product_categories`
--

CREATE TABLE `main_product_categories` (
  `mpc_id` bigint(20) UNSIGNED NOT NULL,
  `mpc_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpc_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpc_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpc_creator` int(11) DEFAULT NULL,
  `mpc_home` int(11) NOT NULL DEFAULT 0,
  `mpc_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_product_categories`
--

INSERT INTO `main_product_categories` (`mpc_id`, `mpc_name`, `mpc_image`, `mpc_slug`, `mpc_creator`, `mpc_home`, `mpc_status`, `created_at`, `updated_at`) VALUES
(1, 'Fashion Accessories', NULL, 'product603e1b1f74c0d', NULL, 1, 1, '2021-03-02 11:01:51', NULL),
(2, 'Beauty & Personal Care', NULL, 'product603e1b3a14e24', NULL, 1, 1, '2021-03-02 11:02:18', NULL),
(3, 'Home Apparel', NULL, 'product603e20a4a3b96', NULL, 0, 1, '2021-03-02 11:25:24', NULL),
(4, 'Kids & Child', NULL, 'product603e20b6020d9', NULL, 1, 1, '2021-03-02 11:25:42', NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_11_23_103848_create_sessions_table', 1),
(7, '2020_12_14_102113_create_ajaxes_table', 2),
(8, '2020_12_21_171931_create_banners_table', 2),
(9, '2020_12_31_165142_create_user_roles_table', 3),
(10, '2021_01_07_164727_create_basics_table', 4),
(11, '2021_01_12_163734_create_social_media_table', 5),
(12, '2021_01_12_174111_create_contact_information_table', 6),
(13, '2021_01_14_164620_create_contactuses_table', 7),
(14, '2021_01_26_164320_create_main_product_categories_table', 8),
(15, '2021_01_26_165721_create_product_categories_table', 9),
(16, '2021_01_26_170318_create_products_table', 10);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpc_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `product_in_feature` int(11) NOT NULL DEFAULT 0,
  `product_main_price` int(11) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quanity` int(11) NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_feature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_creator` int(11) NOT NULL,
  `product_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `pc_id` bigint(20) UNSIGNED NOT NULL,
  `pc_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpc_id` int(11) DEFAULT NULL,
  `pc_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_creator` int(11) DEFAULT NULL,
  `pc_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`pc_id`, `pc_name`, `mpc_id`, `pc_image`, `pc_slug`, `pc_creator`, `pc_status`, `created_at`, `updated_at`) VALUES
(1, 'Men', 1, NULL, '1614683526-men', NULL, 1, '2021-03-02 11:12:06', NULL),
(2, 'Women', 1, NULL, '1614683550-women', NULL, 1, '2021-03-02 11:12:30', NULL),
(3, 'Beauty', 2, NULL, '1614683578-beauty', NULL, 1, '2021-03-02 11:12:58', NULL),
(4, 'Health', 2, NULL, '1614683588-health', NULL, 1, '2021-03-02 11:13:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('S9pncgtRlKNsZ1iEUYFMNtQHuUwDUmxwgucwTPTW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYWEwUEVaZjJBVkZpT21VNTM5WmllWnpqampUdHcwQUw4emJ4MmxSTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi91c2VyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRwblB0WGxvR0huVWFuWTZXSTFkUlh1ZzkvWGhIYnFlbXFWTE1uMkFOWEZDS2l3QVhhUXJxUyI7fQ==', 1614081782),
('WhgWaBZH0re6xOkRGhSk1Jh02MNULU5gFf4IlxnK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieFNqbFo3Y0w0aXpSbG44RVM0Y0NUZmlmV3cyZ2d4TEZ1VmtoZ2EwciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRwblB0WGxvR0huVWFuWTZXSTFkUlh1ZzkvWGhIYnFlbXFWTE1uMkFOWEZDS2l3QVhhUXJxUyI7fQ==', 1614686904);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `sm_id` bigint(20) UNSIGNED NOT NULL,
  `sm_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_linkedin`, `sm_youtube`, `sm_google`, `sm_instagram`, `sm_pinterest`, `sm_skype`, `sm_vimeo`, `sm_whatsapp`, `sm_status`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://twitter.com/', 'https://bd.linkedin.com/', 'https://www.youtube.com/', '3', '8', '4', '9', '5', '10', 1, NULL, '2021-01-21 11:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 5,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Creative Shaper', 'creative@gmail.com', 1, NULL, '$2y$10$pnPtXloGHnUanY6WI1dRXug9/XhHbqemqVLMn2ANXFCKiwAXaQrqS', NULL, NULL, NULL, NULL, NULL, '2020-11-23 04:49:54', '2020-11-23 04:49:54'),
(2, 'Aminul Islam', 'aminul@gmail.com', 5, NULL, '$2y$10$jKrRQEZ8Q0ADkIEC8eIhsutZPKfPOTNYSsBa9fyTEF6cY6gXg9eAG', NULL, NULL, NULL, NULL, NULL, '2020-12-07 05:20:34', '2020-12-07 05:20:34'),
(3, 'Saiful Islam', 'saiful@yahoo.com', 3, NULL, '$2y$10$wvQQMSiH.LkXyEMoggdwDOiwzxPmhlZGmBpVWQbEu2bAYZ/Z4ekcC', NULL, NULL, NULL, NULL, NULL, '2020-12-07 05:21:07', '2020-12-07 05:21:07'),
(4, 'Test ', 'test@gmail.com', 2, NULL, '$2y$12$PKOjfGn.MRqmRJ4ec9E.Z.NO1YqiQS8IyNQV1mEtM1qCl1HDO.hI.', NULL, NULL, NULL, NULL, NULL, '2020-12-21 11:44:51', NULL),
(5, 'Shahan Khan', 'shahan@gmail.com', 1, NULL, '$2y$10$55JBUwwwYorihNfA44lVPuOXiVVZSw2I/Kc7frYkzQDmHut8LKxVq', NULL, NULL, NULL, NULL, NULL, '2020-12-14 10:45:05', NULL),
(6, 'Nazmul Khan', 'nazmul@gmail.com', 1, NULL, '$2y$10$SVDN90ZVlG.V10wZko0FE.Z8sBc7/VI761UdP6f.Rtc1dJhMgupJm', NULL, NULL, NULL, NULL, NULL, '2020-12-15 10:45:09', NULL),
(7, 'Zumanur Rhaman', 'zuman@gmail.com', 5, NULL, '$2y$10$p/Nd0syHzML8y2XP9BzOHOonGhMdhKlvbDuaVBwf/XteNjKnUocJy', NULL, NULL, NULL, NULL, NULL, '2020-12-20 05:45:16', NULL),
(8, 'Masud Rana', 'rana@gmail.com', 4, NULL, '$2y$10$A99TQXQlV4i79zdE8IrKvOa9r/ZoqCJg4ETmY.SvCteFdCQv5npku', NULL, NULL, NULL, NULL, NULL, '2020-12-21 04:58:39', NULL),
(9, 'Boss Khan', 'boss@gmail.com', 2, NULL, '$2y$10$yWTRPIfHj8CH4hT6UzWyDeUDOY3Y6OawRodKJuggCBpLlu0gVI4Um', NULL, NULL, NULL, NULL, NULL, '2020-12-21 11:00:50', NULL),
(10, 'Tushar Khan', 'tkhan@gmail.com', 2, NULL, '$2y$10$m7vmA5r9LtmhodvmdJbyeOnx3kZhgLa2wAxIOXbkVq9wjhcQ4CkVG', NULL, NULL, NULL, NULL, NULL, '2020-12-21 11:02:48', NULL),
(11, 'Rafin Chowduary', 'rafin@gmail.com', 5, NULL, '$2y$10$G0wGgSf3iUlBaa8/S9dfJe31f2pRvr.o9OPbsUV5W9ScMkB7ylTL2', NULL, NULL, NULL, NULL, NULL, '2020-12-21 11:06:42', NULL),
(12, 'Mr. Bean', 'bean@gmail.com', 3, NULL, '$2y$10$eQZGp4AF55GsiuIvZ4VRHe.ZjwWu8QcOm/0quiS.xfl6Gs8r6QdSK', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:13:58', NULL),
(13, 'Mr, John', 'john@gmail.com', 5, NULL, '$2y$10$uwabXOy6j7HJb/adcwIp3.2/I6aQ2Oa05C3e/yZGYSJA1cI3gtnTq', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:15:47', '2020-12-31 11:15:47'),
(14, 'Mr, Rock', 'rock@gmail.com', 5, NULL, '$2y$10$kCmFgXroJDPitwcVyjlxtemVMxBGL2F6MAQNJETCRHLe2d.yZtaW6', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:18:33', '2020-12-31 11:18:33'),
(15, 'Sakib Al', 'sakib11@gmail.com', 5, NULL, '$2y$10$hqLWzn1K91W4obl19UKbVONsnl2wphHp09pBVGajUwJWmxpMIiY.u', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:19:44', '2020-12-31 11:19:44'),
(16, 'Salman', 'salman@gmail.com', 5, NULL, '$2y$10$tzKhO/MBoIBsU5TbNKc3M.dPNDyVOAu5xg8YaCJ/tiW12/DlHGsYS', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:25:18', '2020-12-31 11:25:18'),
(17, 'Saidul Islam Uzzal', 'creativqqe@gmail.com', 5, NULL, '$2y$10$qYkl1Z94CLCzFvYnDZJ2p.svVav5TvK1mMY.g9CJ2tOmLf/mpawva', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:28:33', '2020-12-31 11:28:33'),
(18, 'Aminsssul Islam', 'amiaaanul@gmail.com', 4, NULL, '$2y$10$/YNLrrOMLunPVAQyClOlWe.wwsAgV8z03G2Z30gdA6hGP3opl3jVe', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:30:42', '2020-12-31 11:30:42'),
(19, 'Nazmul Khan', 'creataaaaive@gmail.com', 4, NULL, '$2y$10$rJeamHnpCY3c8QugliZXme2Gu5YJrcm8ow5JoDQYwEeenhFWmVHOe', NULL, NULL, NULL, NULL, NULL, '2020-12-31 11:31:49', '2020-12-31 11:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`, `role_status`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 1, '2020-12-31 10:54:11', NULL),
(2, 'Admin', 1, '2020-12-31 10:54:28', NULL),
(3, 'Author', 1, '2020-12-31 10:54:42', NULL),
(4, 'Editor', 1, '2020-12-31 10:54:45', NULL),
(5, 'Subscriber', 1, '2020-12-31 10:55:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaxes`
--
ALTER TABLE `ajaxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`conus_id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `main_product_categories`
--
ALTER TABLE `main_product_categories`
  ADD PRIMARY KEY (`mpc_id`),
  ADD UNIQUE KEY `main_product_categories_mpc_name_unique` (`mpc_name`);

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
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`pc_id`),
  ADD UNIQUE KEY `product_categories_pc_name_unique` (`pc_name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `user_roles_role_name_unique` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajaxes`
--
ALTER TABLE `ajaxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `ban_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `basic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `conus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `ci_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_product_categories`
--
ALTER TABLE `main_product_categories`
  MODIFY `mpc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `pc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `sm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
