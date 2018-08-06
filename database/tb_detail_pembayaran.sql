-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 10:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pembayaran`
--

CREATE TABLE `tb_detail_pembayaran` (
  `no` int(10) NOT NULL,
  `kode_pembayaran` varchar(6) NOT NULL,
  `id_mahasiswa` varchar(10) NOT NULL,
  `id_biaya` varchar(10) NOT NULL,
  `tanggal_pembayaran` varchar(20) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pembayaran`
--

INSERT INTO `tb_detail_pembayaran` (`no`, `kode_pembayaran`, `id_mahasiswa`, `id_biaya`, `tanggal_pembayaran`, `kode_matkul`) VALUES
(3, 'KP003', '876543', 'BS005', '03-08-2018', ''),
(4, 'KP004', '876543', 'BS006', '03-08-2018', ''),
(5, 'KP004', '876543', 'BS007', '03-08-2018', ''),
(6, 'KP005', '876543', 'BS008', '03-08-2018', ''),
(7, 'KP005', '876543', 'BS006', '03-08-2018', ''),
(8, 'KP006', '876543', 'BS010', '03-08-2018', ''),
(9, 'KP007', '876543', 'BS013', '03-08-2018', ''),
(10, 'KP007', '876543', 'BS009', '03-08-2018', ''),
(11, 'KP008', '876543', 'BS005', '06-08-2018', ''),
(12, 'KP009', '876543', 'BS079', '06-08-2018', '3'),
(13, 'KP010', '876543', 'BS079', '06-08-2018', '76');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
