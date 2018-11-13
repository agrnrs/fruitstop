-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 09:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `type` int(4) NOT NULL,
  `price` decimal(6,3) NOT NULL,
  `kgstock` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fs_products`
--

INSERT INTO `fs_products` (`id`, `product`, `type`, `price`, `kgstock`) VALUES
(1, 'banana', 1, '0.800', 240),
(2, 'Watermelon', 1, '2.220', 80),
(3, 'Strawberry', 3, '2.400', 60),
(4, 'carrot', 2, '0.500', 400),
(5, 'lettuce', 2, '0.620', 50),
(6, 'cucumber', 2, '1.350', 80),
(7, 'Tomato', 2, '0.750', 380),
(9, 'Lime', 1, '0.999', 120),
(10, 'Lemon', 1, '0.600', 220),
(11, 'paprika', 2, '0.999', 130),
(12, 'grape', 1, '0.950', 40),
(13, 'brussels sprout', 2, '0.000', 20),
(14, 'Apple', 1, '0.650', 410),
(15, 'Cloudberry', 3, '2.850', 45),
(16, 'sdf', 4, '0.999', 4),
(17, 'Blank', 2, '0.999', 2),
(19, 'Ananananas', 1, '0.555', 2),
(20, 'Nothing', 2, '0.000', 2),
(21, 'Monkey Brains', 1, '0.999', 2),
(23, 'One', 1, '0.999', 1);

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
