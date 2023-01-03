-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 07:35 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
