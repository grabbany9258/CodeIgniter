-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 07:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_details`) VALUES
(13, 'komola khabo na', 'vitamin c+'),
(14, 'kantop', 'sdfffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `department` varchar(150) NOT NULL,
  `dep_category` int(11) NOT NULL,
  `mob_no` varchar(150) NOT NULL,
  `reffering` varchar(150) NOT NULL,
  `floor_nb` varchar(250) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `department`, `dep_category`, `mob_no`, `reffering`, `floor_nb`, `created_date_time`, `delete_status`) VALUES
(4, 'Fayzullah Aman', 'Marketing Department', 4, '01236548933', 'Rabbany', '3rd Floor', '2023-01-03 03:44:08', 0),
(6, 'Mahmud Hasan', 'Operations Department', 5, '0145698756', 'Liton', '4th Floor', '2023-01-03 03:44:39', 0),
(7, 'Trishna Akter', 'Finance Department', 1, '01533308717', 'kamal', '5th Floor', '2023-01-03 03:42:24', 0),
(8, 'Nasima Akter', 'Sales Department', 6, '0123654896', 'kamini', '6th Floor', '2023-01-03 03:45:01', 0),
(9, 'Ruhul Amin', 'HRM Department', 3, '0123654862', 'Abid', '2nd floor', '2023-01-03 03:43:38', 0),
(12, 'mahir', 'Finance Department', 1, '01236548', 'sfj', '2nd floor', '2023-01-03 03:42:37', 1),
(14, 'Maruf Waliullah', 'Production Department', 8, '01716596589', 'ruhi', '3rd floor', '2023-01-03 03:47:47', 0),
(15, 'Sanjida Akter', 'Operations Department', 5, '0165489635', 'rabbany', '2nd floor', '2023-01-03 03:44:26', 0),
(16, 'Taslima akter', 'Finance Department', 1, '01652458963', 'kamal', '5th floor', '2023-01-03 03:42:43', 0),
(17, 'Momina akter', 'Banking Department', 9, '01652458963', 'kamal', '5th floor', '2023-01-03 03:47:52', 0),
(18, 'Moriam masud', 'IT Department', 2, '01642541075', 'rabbany', '3rd Floor', '2023-01-03 03:43:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_name`, `dep_details`) VALUES
(1, 'Finance Department', 'Finacial issues are related'),
(2, 'IT Department', 'IT issues are related'),
(3, 'HRM Department', 'HRM issues are related'),
(4, 'Marketing Department', 'Marketing issues are related'),
(5, 'Operations Department', 'Operations issues are related'),
(6, 'Sales Department', 'Sales issues are related'),
(7, 'Reserve Department', 'Reserve issues are related'),
(8, 'production department', 'production  issues '),
(9, 'banking department', 'banking  issues ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2022-12-26-110440', 'App\\Database\\Migrations\\Products', 'default', 'App', 1672413102, 1),
(4, '2022-12-29-121217', 'App\\Database\\Migrations\\Category', 'default', 'App', 1672413102, 1),
(5, '2022-12-31-091946', 'App\\Database\\Migrations\\Users', 'default', 'App', 1672501398, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_details` text DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(300) DEFAULT NULL,
  `product_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_details`, `product_price`, `product_image`, `product_category`) VALUES
(34, 'Mobile phone', 'asdkjfhkajsdhfkajshfkjfa', '5000.00', 'assets/uploads/1664106633427.JPEG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` char(64) NOT NULL,
  `craeted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `craeted_at`) VALUES
(1, 'golam rabbany', 'grb@gmail.com', '$2y$10$HIAe1bILFR7HkLbH1vtl5eO/3/1aRWnCF.H/k7HQeov51HDNxkoCG', '2022-12-31 15:45:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
