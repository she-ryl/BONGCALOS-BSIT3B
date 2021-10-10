-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 11:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `she`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(255) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `itemname`, `category`, `price`, `picture`) VALUES
(1, 'Baggy Pants', 'Pants', 'PHP 250.00', '1633768620_baggy-pants.jpg'),
(2, 'Harem Pants', 'Pants', 'PHP 560.00', '1633768680_harem-pants.jpg'),
(3, 'Bell bottoms /Flared pants', 'Pants', 'PHP 750.00', '1633768740_bell-bottoms.jpg'),
(4, 'Leggings', 'Pants', 'PHP 500.00', '1633768800_leggings.jpg'),
(5, 'Tights', 'Pants', 'PHP 450.00', '1633768800_tights.jpg'),
(6, 'Stirrup Pants', 'Pants', 'PHP 750.00', '1633768860_stirrup-pants.jpg'),
(7, 'Manhattan Printed Tee', 'Tops', 'PHP 1,100.00', '1633769160_nakd_manhattan_printed_tee.jpg'),
(8, 'Open Back High Neck Rib Top', 'Tops', 'PHP 1,000.00', '1633769220_nakd_open_back_high_neck_rib_top.jpg'),
(9, 'Chest Detail Knitted Top', 'Tops', 'PHP 800.00', '1633769280_nakd_chest_detail_knitted_top_1018-007392-0005_01a.jpg'),
(10, 'Ribbed Knitted Button Top', 'Tops', 'PHP 1,500.00', '1633769340_nakd_ribbed_knitted_button_top_1018-006865-0140_04a.jpg'),
(11, 'Slanted Bottom Baguette Bag', 'Bags', 'PHP 4,500.90', '1633769520_nakd_slanted_bottom_baguetee_bag_1015-003972-0002_01m.jpg'),
(12, 'Metal Pointy Pilot Sunglasses', 'Accessories', 'PHP 2,400.00', '1633769520_nakd_metail_ponty_pilot_sunglasses_1015-003808-0002_02l.jpg'),
(13, 'Big Rounded Edge Recycled Sunglasses', 'Accessories', 'PHP 1,700.90', '1633769580_nakd_big_rounded_edge_recycled_sunglasses_1015-003830-2283_01m-1.jpg'),
(14, 'Gold Plated Slim Hoops', 'Accessories', 'PHP 5,000.00', '1633769760_nakd_gold_plated_slim_hoops_1015-003884-0013_01m.jpg'),
(15, 'Basic Hair Tie 10-Pack', 'Accessories', 'PHP 120.00', '1633769820_nakd_basic_hair_tie_10_pack_1015-003967-0017_01m.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`) VALUES
(1, 'she bongcalos', 'bongcalos@she', 'admin', 'admin123', 'Admin'),
(2, 'bongcalos she', 'she@bongcalos', 'user', 'user', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
