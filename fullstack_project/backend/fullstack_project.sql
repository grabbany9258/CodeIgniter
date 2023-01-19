-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 04:02 AM
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
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT 0,
  `categories_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Sweet', 1, 1),
(2, 'Hot', 1, 1),
(3, 'Vadiyalu', 1, 2),
(4, 'Specials', 1, 1),
(5, 'Podulu', 1, 2),
(6, 'Pickles_aminu', 1, 1),
(7, 'Breakfast', 1, 1),
(8, 'juce_Cold', 1, 1),
(9, 'Lunch', 1, 1);

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
(18, 'Moriam masud', 'IT Department', 2, '01642541075', 'rabbany', '3rd Floor', '2023-01-03 03:43:00', 0),
(30, 'fxcgsdffffffff', '', 3, '04654655235', '', '2nd floor', '2023-01-05 13:00:02', 0);

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
(5, '2022-12-26-110440', 'App\\Database\\Migrations\\Products', 'default', 'App', 1672305597, 1),
(6, '2022-12-29-121217', 'App\\Database\\Migrations\\Category', 'default', 'App', 1672316306, 2),
(7, '2022-12-31-091946', 'App\\Database\\Migrations\\Users', 'default', 'App', 1672479227, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_place` int(11) NOT NULL,
  `gstn` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `payment_place`, `gstn`, `order_status`, `user_id`, `file`) VALUES
(1, '2022-09-25', '1', '8090809080', '846.00', '152.28', '998.28', '5', '993.28', '993', '0.28', 2, 1, 1, '152.28', 1, 1, ''),
(2, '2022-09-25', '1', '8090809080', '1050.00', '189.00', '1239.00', '', '1239.00', '1239', '0.00', 2, 1, 1, '189.00', 1, 1, ''),
(3, '2022-09-25', '1', '8090809080', '430.00', '77.40', '507.40', '', '507.40', '507', '0.40', 4, 1, 1, '77.40', 1, 1, ''),
(4, '2022-12-14', 'rrr', '01642541075', '175.00', '31.50', '206.50', '20', '186.50', '190', '-3.50', 2, 1, 1, '31.50', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(1, 1, 7, '1', '180', '180.00', 1),
(2, 1, 8, '3', '222', '666.00', 1),
(3, 2, 1, '2', '175', '350.00', 1),
(4, 2, 4, '5', '140', '700.00', 1),
(5, 3, 9, '1', '70', '70.00', 1),
(6, 3, 7, '2', '180', '360.00', 1),
(7, 4, 1, '1', '175', '175.00', 1),
(8, 6, 7, '1', '180', '180.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`) VALUES
(1, 'Tapeswaram Madatha Kaja', '', 0, 1, '556', '175', 2, 2),
(2, 'Misti Golla', '', 0, 1, '125', '140', 2, 1),
(3, 'Hot burger', '', 0, 2, '234', '140', 1, 1),
(4, 'Karapu Boondi', '', 0, 2, '349', '140', 1, 1),
(5, 'Gummadikaya Vadiyalu', '', 0, 3, '556', '180', 1, 1),
(6, 'Biyyam Pindi Vadiyalu', '', 0, 3, '545', '170', 2, 2),
(7, 'Masala dosa', '', 0, 2, '340', '180', 1, 1),
(8, 'Chicken 65', '', 0, 2, '440', '222', 1, 1),
(9, 'Idli Sambhar', '', 0, 4, '432', '70', 1, 1),
(17, 'Dal Vat', '', 0, 9, '12', '120', 0, 2),
(18, 'Goru Mangsho', '', 0, 9, '100', '200', 0, 1),
(21, 'Muri Makha', '', 0, 4, '12', '200', 0, 1);

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
(6, 'Red jacket', 'Faltu jacket for Idb Student', '500.00', NULL, 2),
(7, 'Shirt', 'ODC Market special', '300.00', NULL, 3),
(8, 'Hp laptop', 'core i7 slim set', '80000.00', NULL, 4),
(9, 'Black jacket', 'Premium jacket for Idb Student', '2000.00', NULL, 1),
(10, 'Red jacket', 'Faltu jacket for Idb Student', '500.00', NULL, 2),
(11, 'Shirt', 'ODC Market special', '300.00', NULL, 3),
(12, 'Hp laptop', 'core i7 slim set', '80000.00', NULL, 4),
(13, 'Black jacket', 'Premium jacket for Idb Student', '2000.00', NULL, 1),
(14, 'Red jacket', 'Faltu jacket for Idb Student', '500.00', NULL, 2),
(15, 'Shirt', 'ODC Market special', '300.00', NULL, 3),
(16, 'Hp laptop', 'core i7 slim set', '80000.00', NULL, 4),
(23, 'Yello Shirt', 'shirt is looks nice<br>', '500.00', 'assets/uploads/tiger_2.jpg', 1),
(24, 'akklima', 'lkfdsjalksdfasdf', '500000.00', '/assets/uploads/images.jpg', 2),
(25, 'asfgga', 'sddddddddddddddd', '53.00', 'assets/uploads/images.jpg', 2),
(26, 'Toki vai', 'notun mobile kince', '9500.00', 'assets/uploads/pm.png', 2),
(27, 'Hp laptop', 'sadfjklkasjf<br>', '500.00', 'assets/uploads/images.jpg', 2),
(28, 'fghdfhdfh', 'ghdfhfghfgff', '12.00', 'assets/uploads/images_1.jpg', 2),
(29, 'dfgsdfg', 'gfggggggggggggggg', '123.00', 'assets/uploads/images_2.jpg', 2),
(30, 'Hp laptop', 'kjdfvhjkdsfkjsdfa', '500.00', 'assets/uploads/images_3.jpg', 2),
(31, 'Dell laptop', 'lllllllllllllllllllllllllllllllllllllllllll<br>', '1200.00', 'assets/uploads/315894443_435301155465010_6462876007897864310_n.jpg', 2),
(32, 'Watch hublot', 'watch is nfdksajlk;ajfsd<br>', '10.00', 'assets/uploads/images_5.jpg', 2),
(33, 'jsdgjkgfgf', 'fdddddddddddddddg', '123.00', 'assets/uploads/4.png', 3),
(34, 'Water Bottle', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '9500.00', 'assets/uploads/pm_1.png', 2),
(35, 'Wate Tanki', 'ki kormu kinna', '5000.00', 'assets/uploads/pm-hasina_1.jpg', 5),
(36, 'HeadPhone', 'fjlksddddddsdafsdf', '5000.00', 'assets/uploads/317073873_440582098270249_1912655945785325102_n.jpg', 6),
(37, 'Water Bottle', 'ggggggggggggggggg', '9500.00', 'assets/uploads/images_7.jpg', 2),
(38, 'Water pot', 'kjgdgdfhgjkldsf', '9500.00', 'assets/uploads/317073873_440582098270249_1912655945785325102_n_1.jpg', 7),
(39, 'Toki vai', 'ffffffffffffffffffffffff', '5000.00', 'assets/uploads/1.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `department` varchar(150) NOT NULL,
  `mob_no` varchar(150) NOT NULL,
  `reffering` varchar(150) NOT NULL,
  `floor_nb` varchar(250) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `name`, `department`, `mob_no`, `reffering`, `floor_nb`, `created_date_time`, `delete_status`) VALUES
(3, 'Golam Rabbany', 'IT Department', '01642541075', 'Maruf', '2nd floor', '2022-12-20 03:05:29', 0),
(4, 'Fayzullah Aman', 'Marketing Department', '01236548933', 'Rabbany', '3rd Floor', '2022-12-20 03:05:58', 0),
(6, 'Mahmud Hasan', 'Operations Department', '0145698756', 'Liton', '4th Floor', '2022-12-20 03:06:39', 0),
(7, 'Trishna Akter', 'Finance Department', '01533308717', 'kamal', '5th Floor', '2022-12-20 03:07:04', 0),
(8, 'Nasima Akter', 'Sales Department', '0123654896', 'kamini', '6th Floor', '2022-12-20 03:07:35', 0),
(9, 'Ruhul Amin', 'HRM Department', '0123654862', 'Abid', '2nd floor', '2022-12-20 03:07:58', 0),
(12, 'mahir', 'Finance Department', '01236548', 'sfj', '2nd floor', '2022-12-19 04:00:45', 1),
(14, 'Maruf Waliullah', 'Production Department', '01716596589', 'ruhi', '3rd floor', '2022-12-20 03:08:18', 0),
(15, 'Sanjida Akter', 'Operations Department', '0165489635', 'rabbany', '2nd floor', '2022-12-21 05:10:27', 0);

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
(2, 'kamal', 'kamal@gmail.com', '$2y$10$rRDHS7Uy2ImOXCnwQ89rDOKNkyKgGnJ.cEm6Okv0aiN0Lh.wGm0CC', '2022-12-31 10:21:07'),
(3, 'kamalb', 'kamadl@gmail.com', '$2y$10$ss1jDtr8lRicV./jg1G07OPPLku1K1U1Sv33XviWcNTqsWONWn5Uq', '2022-12-31 10:45:11'),
(4, 'dipu', 'dipu@gmail.com', '$2y$10$sK3BIL1z2Fp34Sj8Ko5nq..KpK96VIpbtJdppIu5lIZ70qSoBso6i', '2022-12-31 10:49:56'),
(5, 'Mahir', 'mahir@gmail.com', '$2y$10$cuN3AZpWeJpwTf4f3tkNQOXHYEOmLasLmOA7ZDlbPUeKZaH2lWixu', '2022-12-31 11:07:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
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
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
