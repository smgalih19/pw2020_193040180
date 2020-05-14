-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 04:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubes_193040180`
--

-- --------------------------------------------------------

--
-- Table structure for table `apparel`
--

CREATE TABLE IF NOT EXISTS `apparel` (
  `id_apparel` int(11) NOT NULL,
  `display` varchar(100) NOT NULL,
  `jenis_apparel` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apparel`
--

INSERT INTO `apparel` (`id_apparel`, `display`, `jenis_apparel`, `merk`, `ukuran`, `harga`) VALUES
(1, 'display1.jpg', 'Kaos Pria', 'Deus Ex Machina', 'M', 250000),
(2, 'display2.jpg', 'Hoodie Parachute', 'Sch', 'S, M, L, XL', 350000),
(3, 'display3.jpg', 'Hoodie', 'Bloods', 'M, L, XL', 250000),
(4, 'display4.jpg', 'Celana Jogger', 'DC', 'M, L, XL, XXL', 100000),
(5, 'display5.jpg', 'Kaos Unisex', 'Green Light', 'M, L', 150000),
(6, 'display6.jpg', 'Kemeja', 'Alisan', 'M, L, XL', 220000),
(7, 'display7.jpg', 'Sporhem', '3 Second', 'M, L', 115000),
(8, 'display8.jpg', 'Jas Formal', 'Zara', 'S, M, L, XL, XXL', 1500000),
(9, 'display9.jpg', 'Kaos', '3 Second', 'S, M, L', 125000),
(10, 'display10.jpg', 'Sporhem', 'Cardinal', 'S, M, L, XL', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'sugih', '$2y$10$CPX/YvE/sBE6LJz7QzcGReLwQ068D0/vnutG1FhRZhorXN0nEOkOC'),
(3, 'galih', '$2y$10$FHF0Y6kmd0U3d8gmq574oe7kmxiAWVCGnKb6Qa2o1w3W.TNmyG8lS'),
(4, 'admin', '$2y$10$rQPA8PIy9H6dQJCdpSVmCetvk2yk2sq5AAFsbYbwjsQl3yLHLilem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`id_apparel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id_apparel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
