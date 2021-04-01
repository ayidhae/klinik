-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 04:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_treatment`
--

CREATE TABLE `tb_kategori_treatment` (
  `id_kategori_treatment` int(233) NOT NULL,
  `nama_kategori_treatment` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori_treatment`
--

INSERT INTO `tb_kategori_treatment` (`id_kategori_treatment`, `nama_kategori_treatment`) VALUES
(1, 'Facial'),
(2, 'Acne Treatment'),
(3, 'Eyelash Extension'),
(4, 'Sulam Alis'),
(5, 'Brightening'),
(6, 'Skin Rejuve'),
(7, 'Body Shapping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori_treatment`
--
ALTER TABLE `tb_kategori_treatment`
  ADD PRIMARY KEY (`id_kategori_treatment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori_treatment`
--
ALTER TABLE `tb_kategori_treatment`
  MODIFY `id_kategori_treatment` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
