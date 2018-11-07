-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 11:28 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhg17`
--

-- --------------------------------------------------------

--
-- Table structure for table `fs_products`
--

CREATE TABLE `fs_products` (
  `id` int(8) NOT NULL,
  `product` varchar(64) NOT NULL,
  `type` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fs_products`
--

INSERT INTO `fs_products` (`id`, `product`, `type`) VALUES
(1, 'banana', 1),
(2, 'Watermelon', 1),
(3, 'Strawberry', 3),
(4, 'carrot', 2),
(5, 'lettuce', 2),
(6, 'cucumber', 2),
(7, 'Tomato', 2),
(9, 'Lime', 1),
(10, 'Lemon', 1),
(11, 'paprika', 2),
(12, 'grape', 1),
(13, 'brussels sprout', 2),
(14, 'Apple', 1),
(15, 'Cloudberry', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fs_products`
--
ALTER TABLE `fs_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fs_products`
--
ALTER TABLE `fs_products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
