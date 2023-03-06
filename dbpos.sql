-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 10:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pos`
--

CREATE TABLE `tb_pos` (
  `id` int(11) NOT NULL,
  `nama_anak` varchar(20) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(14) NOT NULL,
  `nama_orangtua` varchar(16) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pos`
--

INSERT INTO `tb_pos` (`id`, `nama_anak`, `umur`, `jenis_kelamin`, `nama_orangtua`, `alamat`) VALUES
(1, 'fery', '2', 'laki laki', 'rojali', 'jl.aja dulu'),
(3, 'rizal', '3', 'laki laki', 'muhammad', 'jl. aja dulu'),
(4, 'naufal', '4', 'laki laki', 'agung', 'gunung pati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pos`
--
ALTER TABLE `tb_pos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pos`
--
ALTER TABLE `tb_pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
