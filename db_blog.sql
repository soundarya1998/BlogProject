-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `authlogins`
--

CREATE TABLE `authlogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authlogins`
--

INSERT INTO `authlogins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Veg', '2020-11-07 13:49:39', '2020-11-07 13:53:28'),
(2, 'Non-Veg', '2020-11-07 13:51:20', '2020-11-07 13:51:20'),
(3, 'Snacks', '2020-11-07 13:52:25', '2020-11-07 13:52:25');

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
(1, '2020_11_07_181549_create_categories_table', 1),
(2, '2020_11_07_182412_create_subcategories_table', 2),
(3, '2020_11_07_182701_create_authlogins_table', 3),
(4, '2020_11_07_183345_create_userregs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategory_name`, `image`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Idli Sambhar', 'idli.webp', '150', 1, '2020-11-07 15:27:05', '2020-11-08 07:57:46'),
(2, 'Chicken 65', 'chicken65.jpg', '250', 2, '2020-11-07 15:30:12', '2020-11-07 15:30:12'),
(3, 'Pizza', 'pizza.jpg', '300', 3, '2020-11-07 15:30:59', '2020-11-07 15:30:59'),
(5, 'Dhokla', 'dhokla.jpg', '150', 1, '2020-11-08 07:24:56', '2020-11-08 07:24:56'),
(6, 'Veg Pulav', 'Veg-Pulav.png', '250', 1, '2020-11-08 07:25:50', '2020-11-08 07:25:50'),
(7, 'Baked Chicken', 'Baked-Chicken-Samosa-LEAD-6.jpg', '350', 2, '2020-11-08 07:26:20', '2020-11-08 07:26:20'),
(8, 'Mutton Korma', 'mutton-korma.jpg', '400', 2, '2020-11-08 07:27:14', '2020-11-08 07:27:14'),
(9, 'Noodles', 'noodles.jpeg', '220', 3, '2020-11-08 07:27:40', '2020-11-08 07:27:40'),
(10, 'Veg Manchurian', 'veg-manchurian.png', '300', 3, '2020-11-08 07:28:14', '2020-11-08 07:28:14'),
(11, 'Basket Chat', 'basket-chat.jpg', '150', 3, '2020-11-08 07:28:57', '2020-11-08 07:28:57'),
(12, 'Aloo Paratha', 'aaluparatha.jpg', '380', 1, '2020-11-08 07:30:31', '2020-11-08 07:30:31'),
(13, 'Grilled Chicken', 'grilled-chicken-620.jpg', '280', 2, '2020-11-08 07:31:23', '2020-11-08 07:31:23'),
(14, 'Frankie', 'frankie.jpg', '150', 3, '2020-11-08 07:32:00', '2020-11-08 07:32:00'),
(15, 'Burger', 'burger.jpg', '190', 3, '2020-11-08 07:32:26', '2020-11-08 07:32:26'),
(16, 'Malai Kofta', 'malai-kofta.jpg', '280', 1, '2020-11-08 07:32:58', '2020-11-08 07:32:58'),
(17, 'Prawn', 'prawn1.jpg', '330', 2, '2020-11-08 07:34:14', '2020-11-08 07:34:14'),
(18, 'Pani Puri', 'pani-puri.jpg', '130', 3, '2020-11-08 07:34:52', '2020-11-08 07:34:52'),
(19, 'Puran Poli', 'puranpoli.jpg', '500', 1, '2020-11-08 07:36:40', '2020-11-08 07:36:40'),
(20, 'Sandwich', 'sandwich.jpg', '210', 3, '2020-11-08 07:37:20', '2020-11-08 07:37:20'),
(21, 'Khava Poli', 'khavapoli.jpg', '350', 1, '2020-11-08 07:39:08', '2020-11-08 07:39:08'),
(22, 'Samosa', 'samosa.jpg', '100', 3, '2020-11-08 07:39:47', '2020-11-08 07:39:47'),
(23, 'Dosa', 'dosa.jpg', '210', 1, '2020-11-08 07:40:05', '2020-11-08 07:40:05'),
(24, 'Tandori Chops', 'Tandoori Lamb Chops.jpg', '310', 2, '2020-11-08 07:40:50', '2020-11-08 07:40:50'),
(25, 'Veg Biryani', 'vegbirayni.jpg', '250', 1, '2020-11-08 07:42:06', '2020-11-08 07:42:06'),
(26, 'Pasta', 'white-sauce-pasta.jpg', '290', 3, '2020-11-08 07:42:30', '2020-11-08 07:42:30'),
(27, 'Gaon Prawn Curry', 'Goan-Prawn-Curry.jpg', '300', 2, '2020-11-08 07:44:59', '2020-11-08 07:44:59'),
(28, 'Vegetable Korma', 'VegetableKorma.jpg', '330', 1, '2020-11-08 07:45:55', '2020-11-08 07:45:55'),
(29, 'Maharashtra Thali', 'mahathali.jpg', '400', 1, '2020-11-08 07:47:08', '2020-11-08 07:47:08'),
(30, 'Paneer Butter Masala', 'paneerbuttermasala.jpg', '500', 1, '2020-11-08 07:48:48', '2020-11-08 07:48:48'),
(31, 'Curried Parmesan Fish Fingers', 'Curried Parmesan Fish Fingers.jpg', '330', 2, '2020-11-08 07:52:05', '2020-11-08 07:52:05'),
(48, 'Chicken Biryani', 'ChickenBiryani.jpg', '330', 2, '2020-11-09 09:21:05', '2020-11-09 09:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `userregs`
--

CREATE TABLE `userregs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userregs`
--

INSERT INTO `userregs` (`id`, `name`, `address`, `contact`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'soundarya', 'solapur', '9988765554', 'soundu@gmail.com', '123', NULL, NULL),
(2, 'Parveen', 'solapur', '12121', 'aa@aa.aa', '123', '2020-11-10 10:21:35', '2020-11-10 10:21:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authlogins`
--
ALTER TABLE `authlogins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregs`
--
ALTER TABLE `userregs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authlogins`
--
ALTER TABLE `authlogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `userregs`
--
ALTER TABLE `userregs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
