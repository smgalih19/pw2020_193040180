-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 02:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pw_193040180`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', 'sandhika.jpeg'),
(2, 'Sugih Mohammad Galih', '193040180', '193040180@mail.unpas.ac.id', 'Teknik Informatika', 'sugih.jpeg'),
(3, 'Mohammad Sugih', '193391121', 'mohammadsugih@gmail.com', 'Teknik Mesin', 'mohsugih.jpeg'),
(4, 'Rifki Perdiansyah', '193040188', 'rifky@mail.unpas.ac.id', 'Teknik Industri', 'rifky.jpeg'),
(5, 'Cahyadi Ivansyah', '193040123', 'ivan@mail.unpas.ac.id', 'Teknik Mesin', 'ivan.jpeg'),
(6, 'Claudio', '193040179', 'claudio@mail.unpas.ac.id', 'Teknik Lingkungan', 'claudio.jpeg'),
(7, 'Dio Geovani', '193040124', 'dio@mail.unpas.ac.id', 'Perencanaan Wilayah dan Kota', 'dio.jpeg'),
(8, 'Bayu', '193040288', 'bayu@mail.unpas.ac.id', 'Teknologi Pangan', 'bayu.jpeg'),
(9, 'Aldi', '193040021', 'aldi@mail.unpas.ac.id', 'Teknik Informatika', 'aldi.jpeg'),
(10, 'Alip', '193040156', 'alip@mail.unpas.ac.id', 'Teknik Informatika', 'alip.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
