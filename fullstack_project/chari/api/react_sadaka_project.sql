-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:18 AM
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
-- Database: `react_sadaka_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `donores`
--

CREATE TABLE `donores` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donores`
--

INSERT INTO `donores` (`id`, `name`, `city`) VALUES
(16, 'Rabbany', 'Dhaka'),
(17, 'trishu', 'Dhaka'),
(19, 'gjsdg', 'sdg');

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'golam', 'rabbany', 'grb@example.com', '1234abcd'),
(4, 'aklima', 'aktar', 'aklima@gmail.com', 'abcd1234'),
(5, 'Trishu', 'Trishu', 'Trishu@gmail.com', 'abcd1234'),
(6, 'Fayzullah', 'aman', 'fayez@gmail.com', 'abcd1234'),
(11, 'Taskin', 'mahmud', 'taskin@gmail.com', 'abcd123'),
(12, 'Talukdar ', 'mahadi', 'mahadi@gmail.com', 'abcd123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donores`
--
ALTER TABLE `donores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donores`
--
ALTER TABLE `donores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register_form`
--
ALTER TABLE `register_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
