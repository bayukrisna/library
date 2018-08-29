-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 11:36 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

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
-- Table structure for table `tb_aktivitas_perkuliahan`
--

CREATE TABLE `tb_aktivitas_perkuliahan` (
  `id_aktivitas` int(4) NOT NULL,
  `id_mahasiswa` varchar(8) NOT NULL,
  `id_periode` varchar(3) NOT NULL,
  `ips` float NOT NULL,
  `ipk_ak` float NOT NULL,
  `id_status` varchar(1) NOT NULL,
  `sks_semester` int(3) NOT NULL,
  `sks_total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aktivitas_perkuliahan`
--

INSERT INTO `tb_aktivitas_perkuliahan` (`id_aktivitas`, `id_mahasiswa`, `id_periode`, `ips`, `ipk_ak`, `id_status`, `sks_semester`, `sks_total`) VALUES
(3, 'M0003', '4', 3.25, 3.25, '1', 16, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `jalan` varchar(20) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `alamat_mhs` varchar(100) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_mahasiswa`, `jalan`, `dusun`, `kelurahan`, `kecamatan`, `rt`, `rw`, `kode_pos`, `alamat_mhs`, `jurusan`) VALUES
('M0003', '', '', '345', '435', '', '', '', '', ''),
('M0004', '', '', 'ferf', 'eferf', '', '', '', '', ''),
('M0005', '', '', '', '', '', '', '86785', '', ''),
('M0006', '', '', '', '', '', '', '8975', '', ''),
('M0007', '', '', '', '', '', '', '9867', '', ''),
('M0008', '', '', '', '', '', '', '65165', '', ''),
('M0009', '', '', '234', '434', '', '', '', '', ''),
('M0010', '', '', 'efef', 'efef', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ayah`
--

INSERT INTO `tb_ayah` (`id_mahasiswa`, `nama_ayah`, `nik_ayah`, `tanggal_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`) VALUES
('M0002', '', '', '0000-00-00', '', '', ''),
('M0003', '', '', '0000-00-00', '', '', ''),
('M0004', '', '', '0000-00-00', '', '', ''),
('M0005', '', '', '0000-00-00', '', '', ''),
('M0006', '', '', '0000-00-00', '', '', ''),
('M0007', '', '', '0000-00-00', '', '', ''),
('M0008', '', '', '0000-00-00', '', '', ''),
('M0009', '', '', '0000-00-00', '', '', ''),
('M0010', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id_biaya` varchar(6) NOT NULL,
  `jenis_biaya` varchar(20) NOT NULL,
  `nama_biaya` varchar(25) NOT NULL,
  `jumlah_biaya` int(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `id_waktu` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`id_biaya`, `jenis_biaya`, `nama_biaya`, `jumlah_biaya`, `periode`, `id_waktu`) VALUES
('BS001', 'Registrasi', 'Ranking 1', 360000, '2019/2022', '1'),
('BS002', 'Registrasi', 'Ranking 2', 3900000, '2018/2019', '1'),
('BS003', 'Registrasi', 'Ranking 3', 4500000, '2018/2019', '1'),
('BS004', 'Registrasi', 'Non-Beasiswa', 6000000, '2018/2019', '1'),
('BS005', 'Angsuran Tahun 1', 'Angsuran 1', 1200000, '2018/2019', '1'),
('BS006', 'Angsuran Tahun 1', 'Angsuran 2', 600000, '2018/2019', '1'),
('BS007', 'Angsuran Tahun 1', 'Angsuran 3', 600000, '2018/2019', '1'),
('BS008', 'Angsuran Tahun 1', 'Angsuran 4', 600000, '2018/2019', '1'),
('BS009', 'Angsuran Tahun 1', 'Angsuran 5', 600000, '2018/2019', '1'),
('BS010', 'Angsuran Tahun 1', 'Angsuran 6', 600000, '2018/2019', '1'),
('BS011', 'Angsuran Tahun 1', 'Angsuran 7', 600000, '2018/2019', '1'),
('BS012', 'Angsuran Tahun 1', 'Angsuran 8', 600000, '2018/2019', '1'),
('BS013', 'Angsuran Tahun 1', 'Angsuran 9', 600000, '2018/2019', '1'),
('BS014', 'Angsuran Tahun 2', 'Angsuran 1', 1810000, '2018/2019', '1'),
('BS015', 'Angsuran Tahun 2', 'Angsuran 2', 680000, '2018/2019', '1'),
('BS016', 'Angsuran Tahun 2', 'Angsuran 3', 680000, '2018/2019', '1'),
('BS017', 'Angsuran Tahun 2', 'Angsuran 4', 680000, '2018/2019', '1'),
('BS018', 'Angsuran Tahun 2', 'Angsuran 5', 680000, '2018/2019', '1'),
('BS019', 'Angsuran Tahun 2', 'Angsuran 6', 680000, '2018/2019', '1'),
('BS020', 'Angsuran Tahun 2', 'Angsuran 7', 680000, '2018/2019', '1'),
('BS021', 'Angsuran Tahun 2', 'Angsuran 8', 680000, '2018/2019', '1'),
('BS022', 'Angsuran Tahun 2', 'Angsuran 9', 680000, '2018/2019', '1'),
('BS023', 'Angsuran Tahun 3', 'Angsuran 1', 2200000, '2018/2019', '1'),
('BS024', 'Angsuran Tahun 3', 'Angsuran 2', 850000, '2018/2019', '1'),
('BS025', 'Angsuran Tahun 3', 'Angsuran 3', 850000, '2018/2019', '1'),
('BS026', 'Angsuran Tahun 3', 'Angsuran 4', 850000, '2018/2019', '1'),
('BS027', 'Angsuran Tahun 3', 'Angsuran 5', 850000, '2018/2019', '1'),
('BS028', 'Angsuran Tahun 3', 'Angsuran 6', 850000, '2018/2019', '1'),
('BS029', 'Angsuran Tahun 3', 'Angsuran 7', 850000, '2018/2019', '1'),
('BS030', 'Angsuran Tahun 3', 'Angsuran 8', 850000, '2018/2019', '1'),
('BS031', 'Angsuran Tahun 3', 'Angsuran 9', 850000, '2018/2019', '1'),
('BS032', 'Angsuran Tahun 4', 'Angsuran 1', 2200000, '2018/2019', '1'),
('BS033', 'Angsuran Tahun 4', 'Angsuran 2', 850000, '2018/2019', '1'),
('BS034', 'Angsuran Tahun 4', 'Angsuran 3', 850000, '2018/2019', '1'),
('BS035', 'Angsuran Tahun 4', 'Angsuran 4', 850000, '2018/2019', '1'),
('BS036', 'Angsuran Tahun 4', 'Angsuran 5', 850000, '2018/2019', '1'),
('BS037', 'Angsuran Tahun 4', 'Angsuran 6', 850000, '2018/2019', '1'),
('BS038', 'Angsuran Tahun 4', 'Angsuran 7', 850000, '2018/2019', '1'),
('BS039', 'Angsuran Tahun 4', 'Angsuran 8', 850000, '2018/2019', '1'),
('BS040', 'Angsuran Tahun 4', 'Angsuran 9', 850000, '2018/2019', '1'),
('BS041', 'Angsuran Tahun 1', 'Angsuran 1', 2570022, '2018/2019', '2'),
('BS042', 'Angsuran Tahun 1', 'Angsuran 2', 850000, '2018/2019', '2'),
('BS043', 'Angsuran Tahun 1', 'Angsuran 3', 850000, '2018/2019', '2'),
('BS044', 'Angsuran Tahun 1', 'Angsuran 4', 850000, '2018/2019', '2'),
('BS045', 'Angsuran Tahun 1', 'Angsuran 5', 850000, '2018/2019', '2'),
('BS046', 'Angsuran Tahun 1', 'Angsuran 6', 850000, '2018/2019', '2'),
('BS047', 'Angsuran Tahun 1', 'Angsuran 7', 850000, '2018/2019', '2'),
('BS048', 'Angsuran Tahun 1', 'Angsuran 8', 850000, '2018/2019', '2'),
('BS049', 'Angsuran Tahun 1', 'Angsuran 9', 850000, '2018/2019', '2'),
('BS050', 'Angsuran Tahun 2', 'Angsuran 1', 2270000, '2018/2019', '2'),
('BS051', 'Angsuran Tahun 2', 'Angsuran 2', 910000, '2018/2019', '2'),
('BS052', 'Angsuran Tahun 2', 'Angsuran 3', 910000, '2018/2019', '2'),
('BS053', 'Angsuran Tahun 2', 'Angsuran 4', 910000, '2018/2019', '2'),
('BS054', 'Angsuran Tahun 2', 'Angsuran 5', 910000, '2018/2019', '2'),
('BS055', 'Angsuran Tahun 2', 'Angsuran 6', 910000, '2018/2019', '2'),
('BS056', 'Angsuran Tahun 2', 'Angsuran 7', 910000, '2018/2019', '2'),
('BS057', 'Angsuran Tahun 2', 'Angsuran 8', 910000, '2018/2019', '2'),
('BS058', 'Angsuran Tahun 2', 'Angsuran 9', 910000, '2018/2019', '2'),
('BS059', 'Angsuran Tahun 3', 'Angsuran 1', 2740000, '2018/2019', '2'),
('BS060', 'Angsuran Tahun 3', 'Angsuran 2', 1120000, '2018/2019', '2'),
('BS061', 'Angsuran Tahun 3', 'Angsuran 3', 1120000, '2018/2019', '2'),
('BS062', 'Angsuran Tahun 3', 'Angsuran 4', 1120000, '2018/2019', '2'),
('BS063', 'Angsuran Tahun 3', 'Angsuran 5', 1120000, '2018/2019', '2'),
('BS064', 'Angsuran Tahun 3', 'Angsuran 6', 1120000, '2018/2019', '2'),
('BS065', 'Angsuran Tahun 3', 'Angsuran 7', 1120000, '2018/2019', '2'),
('BS066', 'Angsuran Tahun 3', 'Angsuran 8', 1120000, '2018/2019', '2'),
('BS067', 'Angsuran Tahun 3', 'Angsuran 9', 1120000, '2018/2019', '2'),
('BS068', 'Angsuran Tahun 4', 'Angsuran 1', 2740000, '2018/2019', '2'),
('BS069', 'Angsuran Tahun 4', 'Angsuran 2', 1120000, '2018/2019', '2'),
('BS070', 'Angsuran Tahun 4', 'Angsuran 3', 1120000, '2018/2019', '2'),
('BS071', 'Angsuran Tahun 4', 'Angsuran 4', 1120000, '2018/2019', '2'),
('BS072', 'Angsuran Tahun 4', 'Angsuran 5', 1120000, '2018/2019', '2'),
('BS073', 'Angsuran Tahun 4', 'Angsuran 5', 1120000, '2018/2019', '2'),
('BS074', 'Angsuran Tahun 4', 'Angsuran 6', 1120000, '2018/2019', '2'),
('BS075', 'Angsuran Tahun 4', 'Angsuran 7', 1120000, '2018/2019', '2'),
('BS076', 'Angsuran Tahun 4', 'Angsuran 8', 1120000, '2018/2019', '2'),
('BS077', 'Angsuran Tahun 4', 'Angsuran 9', 1120000, '2018/2019', '2'),
('BS078', 'KRS', 'KRS Mengulang', 52500, '2018/2019', '1'),
('BS079', 'KRS', 'KRS Mengulang', 52500, '2018/2019', '2'),
('BS080', 'Angsuran Tahun 1', 'Angsuran 1', 1200000, '2019/2020', '1'),
('BS081', 'Registrasi', 'Ranking 1', 400000, '2019/2020', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bio`
--

CREATE TABLE `tb_bio` (
  `id_mahasiswa` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto_mahasiswa` text NOT NULL,
  `angkatan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bio`
--

INSERT INTO `tb_bio` (`id_mahasiswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `foto_mahasiswa`, `angkatan`) VALUES
('M0003', 'L', 'Malang', '2018-08-01', 'Islam', 'original.jpg', '2018'),
('M0004', 'P', 'Malang', '2018-08-08', 'Katholik', 'britney.jpg', '2018'),
('M0005', 'L', 'Malang', '2018-08-11', 'Kristen', '', '2018'),
('M0006', 'L', 'Malang', '2018-08-03', 'Kristen', '', '2018'),
('M0007', 'L', 'Malang', '2018-08-02', 'Islam', 'histori_nilai.PNG', '2018'),
('M0008', 'L', 'Malang', '2018-08-10', 'Kristen', '', '2018'),
('M0009', 'P', 'Malang', '2018-08-06', 'Kristen', '', '2018'),
('M0010', 'P', 'Pakis', '2018-08-01', 'Islam', 'aktivitas_perkuliahan.PNG', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kurikulum`
--

CREATE TABLE `tb_detail_kurikulum` (
  `id_detail_kurikulum` int(11) NOT NULL,
  `id_kurikulum` varchar(5) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL,
  `semester_kurikulum` int(11) NOT NULL,
  `wajib` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_kurikulum`
--

INSERT INTO `tb_detail_kurikulum` (`id_detail_kurikulum`, `id_kurikulum`, `kode_matkul`, `semester_kurikulum`, `wajib`) VALUES
(1, '1', '34f4', 4, 'Y'),
(2, '1', 'k920u', 1, 'Y'),
(3, '1', '087423', 1, 'Y'),
(4, '1', '90874', 1, 'Y');

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
  `kode_matkul` varchar(10) NOT NULL,
  `id_grade` varchar(2) NOT NULL,
  `potongan` int(10) NOT NULL,
  `denda` int(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pembayaran`
--

INSERT INTO `tb_detail_pembayaran` (`no`, `kode_pembayaran`, `id_mahasiswa`, `id_biaya`, `tanggal_pembayaran`, `kode_matkul`, `id_grade`, `potongan`, `denda`, `keterangan`) VALUES
(16, 'KP001', '4546', 'BS005', '06-08-2018', '', '', 0, 0, ''),
(17, 'KP001', '4546', 'BS078', '06-08-2018', 'mk123', '', 0, 0, ''),
(18, 'KP002', '4546', 'BS006', '07-08-2018', '', '', 0, 0, ''),
(19, 'KP003', '4546', 'BS007', '07-08-2018', '', '', 0, 0, ''),
(20, 'KP004', '4546', 'BS008', '07-08-2018', '', '', 0, 0, ''),
(21, 'KP004', '4546', 'BS009', '07-08-2018', '', '', 0, 0, ''),
(22, 'KP004', '4546', 'BS010', '07-08-2018', '', '', 0, 0, ''),
(23, 'KP004', '4546', 'BS011', '07-08-2018', '', '', 0, 0, ''),
(24, 'KP004', '4546', 'BS012', '07-08-2018', '', '', 0, 0, ''),
(25, 'KP004', '4546', 'BS013', '07-08-2018', '', '', 0, 0, ''),
(26, 'KP005', '5435', 'BS041', '07-08-2018', '', '', 0, 0, ''),
(27, 'KP006', '23123', 'BS005', '09-08-2018', '', '', 0, 0, ''),
(28, 'KP007', 'M0004', 'BS005', '14-08-2018', '', '', 0, 0, ''),
(29, 'KP008', 'M0004', 'BS005', '14-08-2018', '', '2', 10000, 0, ''),
(30, 'KP009', 'M0004', 'BS005', '14-08-2018', '', '2', 0, 0, ''),
(31, 'KP010', 'M0004', 'BS005', '15-08-2018', '', '3', 0, 0, ''),
(32, 'KP011', 'M0004', 'BS078', '15-08-2018', '9834h', '3', 0, 0, ''),
(33, 'KP012', 'M0004', 'BS005', '15-08-2018', '', '3', 0, 0, 'Sakit'),
(34, 'KP013', 'M0004', 'BS005', '15-08-2018', '', '3', 0, 0, 'sss'),
(35, 'KP014', 'M0004', 'BS005', '15-08-2018', '', '3', 10000, 0, ''),
(36, 'KP015', 'M0004', 'BS005', '15-08-2018', '', '3', 10, 0, ''),
(38, 'KP008', 'M0006', 'BS042', '24-08-2018', '', '4', 0, 0, ''),
(40, 'KP010', 'M0006', 'BS041', '24-08-2018', '', '4', 0, 0, ''),
(41, 'KP011', 'M0003', 'BS002', '24-08-2018', '', '6', 1, 1, ''),
(42, 'KP012', 'M0006', 'BS042', '24-08-2018', '', '4', 0, 0, ''),
(43, 'KP013', 'M0006', 'BS041', '24-08-2018', '', '4', 1, 1, ''),
(44, 'KP014', 'M0004', 'BS002', '24-08-2018', '', '5', 1, 1, ''),
(45, 'KP015', 'M0007', 'BS002', '25-08-2018', '', '3', 0, 0, ''),
(46, 'KP015', 'M0007', 'BS005', '25-08-2018', '', '3', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(4) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `kode_dosen` varchar(255) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(2) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenis_dosen` varchar(2) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `kode_dosen`, `no_hp`, `nip`, `tgl_lahir`, `status`, `email`, `jenis_dosen`, `jenis_kelamin`) VALUES
(1, 'Dr. Ir. Agus Susanto, MM', 'AS', '2147483647', '', '0000-00-00', '', '', '', ''),
(2, 'bella swan', 'bs', '876', '', '0000-00-00', '', '', '', ''),
(3, 'Dr. Stephanie Hwang', 'T001', '0987654', '', '0000-00-00', '', '', '', ''),
(4, 'Miss Jessica Jung', '9058', '784923', '23432', '2018-08-11', '1', 'yoona@gmail.com', '1', ''),
(5, 'Mr. Smith', '9378', '0812321321', '0397852', '2018-08-11', '1', 'as@asd.sads', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grade`
--

CREATE TABLE `tb_grade` (
  `id_grade` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `diskon` int(3) NOT NULL,
  `grade_awal` float NOT NULL,
  `grade_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grade`
--

INSERT INTO `tb_grade` (`id_grade`, `grade`, `diskon`, `grade_awal`, `grade_akhir`) VALUES
(1, 'Ranking 1', 40, 90, 100),
(2, 'Ranking 2', 35, 80, 89.9),
(3, 'Ranking 3', 25, 75, 79.9),
(4, 'Non-Beasiswa', 0, 0, 74.9),
(5, 'Grade A', 35, 3.76, 4),
(6, 'Grade B', 25, 3.5, 3.75),
(7, 'Grade C', 0, 0, 3.49);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hari`
--

CREATE TABLE `tb_hari` (
  `id_hari` int(1) NOT NULL,
  `hari` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hari`
--

INSERT INTO `tb_hari` (`id_hari`, `hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_tes`
--

CREATE TABLE `tb_hasil_tes` (
  `id_hasil_tes` varchar(8) NOT NULL,
  `nilai_mat` int(11) NOT NULL,
  `nilai_bing` int(11) NOT NULL,
  `nilai_psikotes` int(11) NOT NULL,
  `tanggal_hasil_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil_tes`
--

INSERT INTO `tb_hasil_tes` (`id_hasil_tes`, `nilai_mat`, `nilai_bing`, `nilai_psikotes`, `tanggal_hasil_tes`) VALUES
('TES0002', 23, 23, 23, '2018-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_mahasiswa` varchar(10) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_mahasiswa`, `nama_ibu`, `nik_ibu`, `tanggal_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`) VALUES
('M0003', 'yey', '', '0000-00-00', '', '', ''),
('M0004', 'bu nar', '', '0000-00-00', '', '', ''),
('M0005', 'ELy', '', '0000-00-00', '', '', ''),
('M0006', 'ELy', '', '0000-00-00', '', '', ''),
('M0007', 'ELy', '', '0000-00-00', '', '', ''),
('M0008', 'ELy', '', '0000-00-00', '', '', ''),
('M0009', 'ELy', '', '0000-00-00', '', '', ''),
('M0010', 'hayati', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_level` varchar(7) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_level`, `nama_level`) VALUES
('1', 'Admin'),
('2', 'Dosen'),
('3', 'Pemasaran'),
('4', 'Keuangan'),
('5', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_periode` varchar(3) NOT NULL,
  `id_hari` int(1) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `id_waktu` int(1) NOT NULL,
  `id_konsentrasi` varchar(8) NOT NULL,
  `id_detail_kurikulum` varchar(4) NOT NULL,
  `id_ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_periode`, `id_hari`, `jam_awal`, `jam_akhir`, `id_waktu`, `id_konsentrasi`, `id_detail_kurikulum`, `id_ruang`) VALUES
(3, '4', 1, '01:11:00', '01:01:00', 1, 'KO099', '3', '1'),
(7, '4', 1, '10:00:00', '11:00:00', 1, 'KO099', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jalur_pendaftaran`
--

CREATE TABLE `tb_jalur_pendaftaran` (
  `id_jalur_pendaftaran` int(2) NOT NULL,
  `nama_jalur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jalur_pendaftaran`
--

INSERT INTO `tb_jalur_pendaftaran` (`id_jalur_pendaftaran`, `nama_jalur`) VALUES
(1, 'SBMPTN'),
(2, 'SNMPTN'),
(3, 'PMDK'),
(4, 'Prestasi'),
(5, 'Seleksi Mandiri PTN'),
(6, 'Seleksi Mandiri PTS'),
(7, 'Ujian Masuk Bersama PTN (UMB-PT)'),
(8, 'Ujian Masuk Bersama PTS (UMB-PTS)'),
(9, 'Program Internasional'),
(10, 'Program Kerjasama/Perusahaan/Institusi Pemeritah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_matkul`
--

CREATE TABLE `tb_jenis_matkul` (
  `id_jenis_matkul` varchar(7) NOT NULL,
  `nama_jenis_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_matkul`
--

INSERT INTO `tb_jenis_matkul` (`id_jenis_matkul`, `nama_jenis_matkul`) VALUES
('A', 'Wajib Nasional'),
('B', 'Wajib Program Studi'),
('C', 'Pilihan'),
('D', 'Peminatan'),
('E', 'Tugas akhir/Skripsi/Tesis/Disertasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pendaftaran`
--

CREATE TABLE `tb_jenis_pendaftaran` (
  `id_jenis_pendaftaran` int(1) NOT NULL,
  `nama_pendaftaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_pendaftaran`
--

INSERT INTO `tb_jenis_pendaftaran` (`id_jenis_pendaftaran`, `nama_pendaftaran`) VALUES
(1, 'Peserta Didik Baru'),
(2, 'Pindahan'),
(3, 'Alih Jenjang'),
(4, 'Lintas Jalur'),
(5, 'Rekognisi Pembelajaran Lampau ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_tinggal`
--

CREATE TABLE `tb_jenis_tinggal` (
  `id_jt` int(1) NOT NULL,
  `jenis_tinggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_tinggal`
--

INSERT INTO `tb_jenis_tinggal` (`id_jt`, `jenis_tinggal`) VALUES
(1, 'Bersama orang tua'),
(2, 'Wali'),
(3, 'Kost'),
(4, 'Asrama'),
(5, 'Panti Asuhan'),
(6, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_dosen`
--

CREATE TABLE `tb_kelas_dosen` (
  `id_kp` varchar(6) NOT NULL,
  `id_dosen` varchar(10) NOT NULL,
  `rencana` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `jenis_evaluasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_dosen`
--

INSERT INTO `tb_kelas_dosen` (`id_kp`, `id_dosen`, `rencana`, `realisasi`, `jenis_evaluasi`) VALUES
('1', '4', 1, 1, 'waw'),
('2', '4', 1, 1, 'waw'),
('4', '3', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_mhs`
--

CREATE TABLE `tb_kelas_mhs` (
  `id_kelas_mhs` int(11) NOT NULL,
  `id_mahasiswa` varchar(20) NOT NULL,
  `id_kp` varchar(11) NOT NULL,
  `id_skala_nilai` varchar(10) NOT NULL,
  `nilai_d` float NOT NULL,
  `semester` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_mhs`
--

INSERT INTO `tb_kelas_mhs` (`id_kelas_mhs`, `id_mahasiswa`, `id_kp`, `id_skala_nilai`, `nilai_d`, `semester`) VALUES
(8, 'M0003', '2', '', 0, '1'),
(9, 'M0003', '4', '', 0, '1'),
(10, 'M0003', '4', '', 0, '1'),
(11, 'M0004', '2', '', 0, '1'),
(12, 'M0004', '4', '', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kependudukan`
--

CREATE TABLE `tb_kependudukan` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `kps` varchar(6) NOT NULL,
  `no_kps` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kependudukan`
--

INSERT INTO `tb_kependudukan` (`id_mahasiswa`, `nik`, `nisn`, `npwp`, `kps`, `no_kps`, `kewarganegaraan`) VALUES
('M0003', '43534', '', '', '', '', 'indonesia'),
('M0004', '123217', '', '', '', '', 'Belanda'),
('M0005', '6786', '', '', '', '', ''),
('M0006', '8967', '', '', '', '', ''),
('M0007', '123217', '', '', '', '', ''),
('M0008', '4354', '', '', '', '', ''),
('M0009', '34234', '', '', 'Tidak', '', 'indonesia'),
('M0010', '5345435', '', '', '', '', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsentrasi`
--

CREATE TABLE `tb_konsentrasi` (
  `id_konsentrasi` varchar(6) NOT NULL,
  `nama_konsentrasi` varchar(20) NOT NULL,
  `id_prodi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsentrasi`
--

INSERT INTO `tb_konsentrasi` (`id_konsentrasi`, `nama_konsentrasi`, `id_prodi`) VALUES
('KO002', 'Finance Managementh', 'PR002'),
('KO003', 'Auditing', 'PR001'),
('KO004', 'Taxation', 'PR001'),
('KO007', 'yuyul', 'PR002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsentrasi_kelas`
--

CREATE TABLE `tb_konsentrasi_kelas` (
  `id_konsentrasi` varchar(8) NOT NULL,
  `nama_konsentrasi` varchar(25) NOT NULL,
  `id_prodi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsentrasi_kelas`
--

INSERT INTO `tb_konsentrasi_kelas` (`id_konsentrasi`, `nama_konsentrasi`, `id_prodi`) VALUES
('KO002', 'Finance Management', 'PR002'),
('KO003', 'Auditing', 'PR001'),
('KO004', 'Taxation', 'PR001'),
('KO005', 'Yuyul', 'PR002'),
('KO098', 'Semua', 'PR002'),
('KO099', 'Semua', 'PR001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_mahasiswa` varchar(10) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_mahasiswa`, `no_telepon`, `no_hp`, `email`) VALUES
('M0003', 0, 0, ''),
('M0004', 0, 0, ''),
('M0005', 90789678, 9968767, 'yoona@gmail.com'),
('M0006', 43646, 867, 'as@asd.sads'),
('M0007', 435, 86786, 'yoona@gmail.com'),
('M0008', 7865, 4535, 'yoona@gmail.com'),
('M0009', 0, 0, ''),
('M0010', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp`
--

CREATE TABLE `tb_kp` (
  `id_kp` int(4) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `bahasan` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `id_jadwal` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kp`
--

INSERT INTO `tb_kp` (`id_kp`, `nama_kelas`, `bahasan`, `tgl_mulai`, `tgl_akhir`, `id_jadwal`) VALUES
(2, '01', 'waw', '2018-08-01', '2018-08-31', '3'),
(4, '01', 'waw', '2018-08-01', '2018-08-31', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` int(11) NOT NULL,
  `nama_kurikulum` varchar(100) NOT NULL,
  `id_prodi` varchar(7) NOT NULL,
  `bobot_matkul_wajib` int(3) NOT NULL,
  `bobot_matkul_pilihan` int(3) NOT NULL,
  `id_periode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`id_kurikulum`, `nama_kurikulum`, `id_prodi`, `bobot_matkul_wajib`, `bobot_matkul_pilihan`, `id_periode`) VALUES
(1, 'Kurikulum Manajemen ', 'PR001', 4, 4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ld`
--

CREATE TABLE `tb_ld` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `id_status` int(2) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `sk_yudisium` varchar(30) NOT NULL,
  `tgl_sk_yudisium` date NOT NULL,
  `no_seri_ijazah` varchar(20) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ld`
--

INSERT INTO `tb_ld` (`id_mahasiswa`, `id_status`, `keterangan`, `sk_yudisium`, `tgl_sk_yudisium`, `no_seri_ijazah`, `tanggal_keluar`) VALUES
('M0003', 7, 'ya', 'sk 1', '2018-08-01', '233/33', '2018-08-08'),
('M0006', 13, 'waw', 'yey', '2018-08-01', '233/354', '2018-08-02'),
('M0010', 13, '0', 'sk 1', '2018-08-02', '233/33', '2018-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `id_du` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `id_status` varchar(2) NOT NULL,
  `id_konsentrasi` varchar(7) NOT NULL,
  `id_hasil_tes` varchar(7) NOT NULL,
  `id_sekolah` varchar(6) NOT NULL,
  `id_waktu` int(2) NOT NULL,
  `id_grade` varchar(2) NOT NULL,
  `semester_aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `id_du`, `nama_mahasiswa`, `nim`, `id_status`, `id_konsentrasi`, `id_hasil_tes`, `id_sekolah`, `id_waktu`, `id_grade`, `semester_aktif`) VALUES
('M0003', '', 'Aldi', '999', '1', 'KO003', '', 'SE001', 1, '7', 1),
('M0004', '', 'Britney', '435', '1', 'KO003', '', '', 0, '7', 1),
('M0005', ' 9865', 'Paris ', '896875', '12', 'KO002', '', 'SE001', 1, '', 1),
('M0007', ' 87g', 'new paris', '2222', '19', 'KO003', 'TES0002', 'SE001', 1, '3', 1),
('M0009', '', 'Ariana', '4444', '19', 'KO003', '', '', 1, '1', 1),
('M0010', '', 'Katy', '55555', '19', 'KO002', '', '', 2, '7', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `id_prodi` varchar(10) NOT NULL,
  `jenis_matkul` varchar(20) NOT NULL,
  `bobot_matkul` int(11) NOT NULL,
  `bobot_praktikum` int(11) NOT NULL,
  `bobot_tatap_muka` int(11) NOT NULL,
  `bobot_praktik_lapangan` int(11) NOT NULL,
  `bobot_simulasi` int(11) NOT NULL,
  `metode_pembelajaran` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `matkul_english` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `nama_matkul`, `id_prodi`, `jenis_matkul`, `bobot_matkul`, `bobot_praktikum`, `bobot_tatap_muka`, `bobot_praktik_lapangan`, `bobot_simulasi`, `metode_pembelajaran`, `tanggal_mulai`, `tanggal_akhir`, `matkul_english`) VALUES
('087423', 'Bahasa Prancis', 'PR001', 'B', 4, 1, 1, 1, 1, 'hay', '2018-08-01', '2018-08-31', 'France Language'),
('904', 'Bahasa Korea', 'PR001', 'B', 8, 2, 4, 1, 1, 'a', '2018-08-01', '2018-08-23', 'Korean Language'),
('90874', 'Bahasa Inggris', 'PR001', 'B', 3, 1, 1, 1, 0, 'a', '2018-08-01', '2018-08-31', 'english langauge');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs_add`
--

CREATE TABLE `tb_mhs_add` (
  `id_mahasiswa` varchar(11) NOT NULL,
  `tgl_du` date NOT NULL,
  `id_transportasi` varchar(2) NOT NULL,
  `id_jt` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs_add`
--

INSERT INTO `tb_mhs_add` (`id_mahasiswa`, `tgl_du`, `id_transportasi`, `id_jt`) VALUES
('M0003', '2018-08-15', '', ''),
('M0004', '2018-08-21', '', ''),
('M0005', '2018-08-14', '', ''),
('M0006', '2018-08-14', '', ''),
('M0007', '2018-08-14', '', ''),
('M0008', '2018-08-14', '', ''),
('M0009', '2018-08-14', '', ''),
('M0010', '2018-08-08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `kode_pembayaran` varchar(6) NOT NULL,
  `id_mahasiswa` varchar(7) NOT NULL,
  `total_biaya` varchar(10) NOT NULL,
  `tanggal_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`kode_pembayaran`, `id_mahasiswa`, `total_biaya`, `tanggal_pembayaran`) VALUES
('KP001', '4546', '877500', '06-08-2018'),
('KP002', '4546', '360000', '07-08-2018'),
('KP003', '4546', '360000', '07-08-2018'),
('KP004', '4546', '2160000', '07-08-2018'),
('KP005', '5435', '2570000', '07-08-2018'),
('KP006', '23123', '780000', '09-08-2018'),
('KP007', 'M0003', '', ''),
('KP008', 'M0006', '', ''),
('KP009', 'M0003', '', ''),
('KP010', 'M0006', '', ''),
('KP011', 'M0003', '', ''),
('KP012', 'M0006', '', ''),
('KP013', 'M0006', '', ''),
('KP014', 'M0004', '', ''),
('KP015', 'M0007', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembiayaan_awal`
--

CREATE TABLE `tb_pembiayaan_awal` (
  `id_pembiayaan` int(1) NOT NULL,
  `nama_pembiayaan` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembiayaan_awal`
--

INSERT INTO `tb_pembiayaan_awal` (`id_pembiayaan`, `nama_pembiayaan`) VALUES
(1, 'Mandiri'),
(2, 'Beasiswa Tidak Penuh'),
(3, 'Beasiswa Penuh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(6) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `jk_pendaftar` varchar(20) NOT NULL,
  `id_sekolah` varchar(6) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `id_prodi` varchar(6) NOT NULL,
  `sumber` varchar(30) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `id_du` varchar(6) NOT NULL,
  `f1` text NOT NULL,
  `f2` text NOT NULL,
  `f3` text NOT NULL,
  `notes` text NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `sgs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tanggal_pendaftaran`, `nama_pendaftar`, `jk_pendaftar`, `id_sekolah`, `jurusan`, `alamat`, `email`, `no_telp`, `waktu`, `status_bayar`, `id_prodi`, `sumber`, `bukti_transfer`, `id_du`, `f1`, `f2`, `f3`, `notes`, `tanggal_konfirmasi`, `sgs`) VALUES
('TM001', '2018-08-14', 'Paris ', 'L', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '90789678', 'Pagi', 'Lunas', 'PR001', 'student_get_student', 'Coba14.pdf', ' 9865', '', '', '', '', '2018-08-14', '999'),
('TM002', '2018-08-14', 'paris sore', 'P', 'SE002', 'ipa', 'Los Angeles', 'as@asd.sads', '43646', 'Sore', 'Lunas', 'PR001', 'brosur', 'Coba15.pdf', ' 87965', '', '', '', '', '2018-08-14', ''),
('TM003', '2018-08-14', 'new paris', 'L', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '435', 'Pagi', 'Lunas', 'PR002', 'brosur', 'Coba16.pdf', ' 87g', '', '', '', '', '2018-08-14', ''),
('TM004', '2018-08-14', 'Jessica Jung', 'L', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '07865', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'Coba17.pdf', ' 54', '', '', '', '', '2018-08-14', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(4) NOT NULL,
  `id_mahasiswa` varchar(8) NOT NULL,
  `jenis_pendaftaran` int(2) NOT NULL,
  `jalur_pendaftaran` int(2) NOT NULL,
  `pembiayaan_awal` int(2) NOT NULL,
  `perguruan_tinggi` int(2) NOT NULL,
  `jml_sks_diakui` int(4) NOT NULL,
  `asal_pt` varchar(50) NOT NULL,
  `asal_prodi` varchar(20) NOT NULL,
  `id_periode` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `id_mahasiswa`, `jenis_pendaftaran`, `jalur_pendaftaran`, `pembiayaan_awal`, `perguruan_tinggi`, `jml_sks_diakui`, `asal_pt`, `asal_prodi`, `id_periode`) VALUES
(1, 'M0003', 2, 2, 2, 33082, 12, 'UI', 'kedokteran', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_periode` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `id_prodi` varchar(8) NOT NULL,
  `target_mhs_baru` varchar(10) NOT NULL,
  `pendaftar_ikut_seleksi` varchar(10) NOT NULL,
  `pendaftar_lulus_seleksi` varchar(10) NOT NULL,
  `daftar_ulang` varchar(6) NOT NULL,
  `mengundurkan_diri` varchar(6) NOT NULL,
  `tgl_awal_kul` varchar(11) NOT NULL,
  `tgl_akhir_kul` varchar(11) NOT NULL,
  `jumlah_minggu_pertemuan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `semester`, `id_prodi`, `target_mhs_baru`, `pendaftar_ikut_seleksi`, `pendaftar_lulus_seleksi`, `daftar_ulang`, `mengundurkan_diri`, `tgl_awal_kul`, `tgl_akhir_kul`, `jumlah_minggu_pertemuan`) VALUES
(2, '2018/2019 Ganjil', 'PR001', '12', '21', '31', '32', '12', '2018-07-23', '2018-07-05', '2'),
(3, '2018/2019 Ganjil', 'PR002', '12', '51', '52', '53', '54', '2018-07-23', '2018-08-31', '2'),
(4, '2018/2019 Genap', 'PR001', '100', '50', '50', '32', '54', '2018-08-01', '2018-08-31', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(5) NOT NULL,
  `id_mahasiswa` varchar(8) NOT NULL,
  `jenis_prestasi` varchar(15) NOT NULL,
  `tingkat_prestasi` varchar(15) NOT NULL,
  `nama_prestasi` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `penyelenggara` varchar(25) NOT NULL,
  `peringkat` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `id_mahasiswa`, `jenis_prestasi`, `tingkat_prestasi`, `nama_prestasi`, `tahun`, `penyelenggara`, `peringkat`) VALUES
(1, 'M0003', 'Sains', 'Islam', 'eergre', '2013', 'pt kai', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` varchar(6) NOT NULL,
  `nama_prodi` varchar(20) NOT NULL,
  `ketua_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`, `ketua_prodi`) VALUES
('PR001', 'Management', 'Dr. Lucinta Luna'),
('PR002', 'Accounting', 'Dra. Tiffany Hwang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pt`
--

CREATE TABLE `tb_pt` (
  `id_pt` varchar(7) NOT NULL,
  `nama_pt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pt`
--

INSERT INTO `tb_pt` (`id_pt`, `nama_pt`) VALUES
('033082', 'STIE Jakarta International College');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`, `kapasitas`, `keterangan`) VALUES
(1, 'abc', 7, 'aw'),
(2, 'def', 40, 'waw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` varchar(6) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `jenis_sekolah` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `jenis_sekolah`) VALUES
('SE001', 'SMK Telkom Malang', 'Jl. Danau Ranau Sawojajar Malang', 'SMK'),
('SE002', 'SMAN 3 Jakarta', 'Jl. Supriyadi No 47 jakarta', 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skala_nilai`
--

CREATE TABLE `tb_skala_nilai` (
  `id_skala_nilai` int(11) NOT NULL,
  `id_prodi` varchar(7) NOT NULL,
  `nilai_huruf` varchar(5) NOT NULL,
  `nilai_indeks` float NOT NULL,
  `bobot_nilai_minimum` float NOT NULL,
  `bobot_nilai_maksimum` float NOT NULL,
  `tanggal_mulai_efektif` date NOT NULL,
  `tanggal_akhir_efektif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skala_nilai`
--

INSERT INTO `tb_skala_nilai` (`id_skala_nilai`, `id_prodi`, `nilai_huruf`, `nilai_indeks`, `bobot_nilai_minimum`, `bobot_nilai_maksimum`, `tanggal_mulai_efektif`, `tanggal_akhir_efektif`) VALUES
(2, 'PR002', 'A', 4, 86, 100, '2017-09-01', '2020-09-01'),
(3, 'PR002', 'A-', 3.75, 82, 85.9, '2018-08-01', '2018-08-31'),
(4, 'PR002', 'B+', 3.25, 78, 81.9, '0000-00-00', '0000-00-00'),
(5, 'PR002', 'B', 3, 75, 77.9, '0000-00-00', '0000-00-00'),
(6, 'PR002', 'B-', 2.75, 70, 74.9, '0000-00-00', '0000-00-00'),
(7, 'PR002', 'C+', 2.25, 67, 69.9, '2018-08-01', '2018-08-24'),
(8, 'PR002', 'C', 2, 60, 66.9, '2018-08-01', '2018-08-31'),
(9, 'PR002', 'D', 1, 57, 59.9, '2018-08-01', '2018-08-31'),
(11, 'PR002', 'E', 0, 0, 57.9, '0000-00-00', '0000-00-00'),
(12, 'PR001', 'A', 4, 86, 100, '0000-00-00', '0000-00-00'),
(13, 'PR001', 'A-   ', 3.75, 82, 85.9, '0000-00-00', '0000-00-00'),
(14, 'PR001', 'B+   ', 3.25, 78, 81.9, '0000-00-00', '0000-00-00'),
(15, 'PR001', 'B   ', 3, 75, 77.9, '0000-00-00', '0000-00-00'),
(16, 'PR001', 'B-   ', 2.75, 70, 74.9, '0000-00-00', '0000-00-00'),
(18, 'PR001', 'C  ', 2, 60, 66.9, '0000-00-00', '0000-00-00'),
(19, 'PR001', 'D ', 1, 57, 59.9, '0000-00-00', '0000-00-00'),
(20, 'PR001', 'E ', 0, 0, 57.9, '0000-00-00', '0000-00-00'),
(21, 'PR001', 'C+ ', 2.25, 67, 69.9, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_dosen`
--

CREATE TABLE `tb_status_dosen` (
  `id_status_dosen` int(11) NOT NULL,
  `status_dosen` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_dosen`
--

INSERT INTO `tb_status_dosen` (`id_status_dosen`, `status_dosen`) VALUES
(1, 'Tetap'),
(2, 'Tidak Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_mhs`
--

CREATE TABLE `tb_status_mhs` (
  `id_status` int(2) NOT NULL,
  `status_mhs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_mhs`
--

INSERT INTO `tb_status_mhs` (`id_status`, `status_mhs`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif'),
(3, 'Cuti'),
(4, 'Skorsing'),
(5, 'Drop Out'),
(6, 'Pindah'),
(7, 'Mengundurkan Diri'),
(8, 'Meninggal Dunia'),
(9, 'Keputusan PO'),
(10, 'Menghilang'),
(11, 'Lulus'),
(12, 'Nilai Kosong'),
(13, 'Mutasi'),
(14, 'Putus Sekolah'),
(15, 'Lainnya'),
(16, 'Tetap'),
(17, 'Tidak Tetap'),
(18, 'Mengulang'),
(19, 'Peralihan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transportasi`
--

CREATE TABLE `tb_transportasi` (
  `id_transportasi` int(2) NOT NULL,
  `transportasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transportasi`
--

INSERT INTO `tb_transportasi` (`id_transportasi`, `transportasi`) VALUES
(1, 'Jalan Kaki'),
(2, 'Angkutan umum/bus/pete-pete'),
(3, 'Mobil/bus antar jemput'),
(4, 'Kereta api'),
(5, 'Ojek'),
(6, 'Andong/bendi/sado/dokar/delman/becak'),
(7, 'Perahu penyeberangan/rakit/getek'),
(8, 'Kuda'),
(9, 'Sepeda'),
(10, 'Sepeda motor'),
(11, 'Mobil pribadi'),
(12, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_mahasiswa` varchar(11) NOT NULL,
  `id_level` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `id_mahasiswa`, `id_level`) VALUES
('admin', '$2b$10$MQlZmmJPyWLNhaA3BQ.2i.vx1f8vfvcAT/CrF5aefTVN80Qv0cJdK', 'M0000', '1'),
('akademik', '$2a$08$A93qO2QEb6CJm8poAEhjtemxbapXQBaXWDnV/XWkIIj.syLTEQ3oi', '', '6'),
('aldi', '$2a$08$WWAwBJ646n1sYWgkOwwhiet8qlqXrQcONdo.gq6X0cHKjQD1vjPAe', 'M0003', '5'),
('finance', '$2a$08$.0B5SBwkpvmBsjsevsHr3ekW8cPnMzkhCK96s1J7zeWvIxX2AN7/.', '', '4'),
('marketing', '$2a$08$HevO5xRCCuSIPfT6mXPHEOPWvGDNxopv6uinMU2szCBzwgFljYBFu', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_waktu`
--

CREATE TABLE `tb_waktu` (
  `id_waktu` int(11) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_waktu`
--

INSERT INTO `tb_waktu` (`id_waktu`, `waktu`) VALUES
(1, 'Pagi'),
(2, 'Sore');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `pendidikan_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wali`
--

INSERT INTO `tb_wali` (`id_mahasiswa`, `nama_wali`, `tanggal_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`) VALUES
('M0003', '', '0000-00-00', '', '', ''),
('M0004', '', '0000-00-00', '', '', ''),
('M0005', '', '0000-00-00', '', '', ''),
('M0006', '', '0000-00-00', '', '', ''),
('M0007', '', '0000-00-00', '', '', ''),
('M0008', '', '0000-00-00', '', '', ''),
('M0009', '', '0000-00-00', '', '', ''),
('M0010', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aktivitas_perkuliahan`
--
ALTER TABLE `tb_aktivitas_perkuliahan`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tb_bio`
--
ALTER TABLE `tb_bio`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_detail_kurikulum`
--
ALTER TABLE `tb_detail_kurikulum`
  ADD PRIMARY KEY (`id_detail_kurikulum`);

--
-- Indexes for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`);

--
-- Indexes for table `tb_grade`
--
ALTER TABLE `tb_grade`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indexes for table `tb_hari`
--
ALTER TABLE `tb_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `tb_hasil_tes`
--
ALTER TABLE `tb_hasil_tes`
  ADD PRIMARY KEY (`id_hasil_tes`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_jalur_pendaftaran`
--
ALTER TABLE `tb_jalur_pendaftaran`
  ADD PRIMARY KEY (`id_jalur_pendaftaran`);

--
-- Indexes for table `tb_jenis_matkul`
--
ALTER TABLE `tb_jenis_matkul`
  ADD PRIMARY KEY (`id_jenis_matkul`);

--
-- Indexes for table `tb_jenis_pendaftaran`
--
ALTER TABLE `tb_jenis_pendaftaran`
  ADD PRIMARY KEY (`id_jenis_pendaftaran`);

--
-- Indexes for table `tb_jenis_tinggal`
--
ALTER TABLE `tb_jenis_tinggal`
  ADD PRIMARY KEY (`id_jt`);

--
-- Indexes for table `tb_kelas_dosen`
--
ALTER TABLE `tb_kelas_dosen`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `tb_kelas_mhs`
--
ALTER TABLE `tb_kelas_mhs`
  ADD PRIMARY KEY (`id_kelas_mhs`);

--
-- Indexes for table `tb_kependudukan`
--
ALTER TABLE `tb_kependudukan`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_konsentrasi`
--
ALTER TABLE `tb_konsentrasi`
  ADD PRIMARY KEY (`id_konsentrasi`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `tb_konsentrasi_kelas`
--
ALTER TABLE `tb_konsentrasi_kelas`
  ADD PRIMARY KEY (`id_konsentrasi`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_kp`
--
ALTER TABLE `tb_kp`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tb_ld`
--
ALTER TABLE `tb_ld`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `tb_mhs_add`
--
ALTER TABLE `tb_mhs_add`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`);

--
-- Indexes for table `tb_pembiayaan_awal`
--
ALTER TABLE `tb_pembiayaan_awal`
  ADD PRIMARY KEY (`id_pembiayaan`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_pt`
--
ALTER TABLE `tb_pt`
  ADD PRIMARY KEY (`id_pt`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_skala_nilai`
--
ALTER TABLE `tb_skala_nilai`
  ADD PRIMARY KEY (`id_skala_nilai`);

--
-- Indexes for table `tb_status_dosen`
--
ALTER TABLE `tb_status_dosen`
  ADD PRIMARY KEY (`id_status_dosen`);

--
-- Indexes for table `tb_status_mhs`
--
ALTER TABLE `tb_status_mhs`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_transportasi`
--
ALTER TABLE `tb_transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_waktu`
--
ALTER TABLE `tb_waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indexes for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aktivitas_perkuliahan`
--
ALTER TABLE `tb_aktivitas_perkuliahan`
  MODIFY `id_aktivitas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_detail_kurikulum`
--
ALTER TABLE `tb_detail_kurikulum`
  MODIFY `id_detail_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_grade`
--
ALTER TABLE `tb_grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_hari`
--
ALTER TABLE `tb_hari`
  MODIFY `id_hari` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_jalur_pendaftaran`
--
ALTER TABLE `tb_jalur_pendaftaran`
  MODIFY `id_jalur_pendaftaran` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_jenis_pendaftaran`
--
ALTER TABLE `tb_jenis_pendaftaran`
  MODIFY `id_jenis_pendaftaran` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jenis_tinggal`
--
ALTER TABLE `tb_jenis_tinggal`
  MODIFY `id_jt` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kelas_mhs`
--
ALTER TABLE `tb_kelas_mhs`
  MODIFY `id_kelas_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kp`
--
ALTER TABLE `tb_kp`
  MODIFY `id_kp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembiayaan_awal`
--
ALTER TABLE `tb_pembiayaan_awal`
  MODIFY `id_pembiayaan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_skala_nilai`
--
ALTER TABLE `tb_skala_nilai`
  MODIFY `id_skala_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_status_dosen`
--
ALTER TABLE `tb_status_dosen`
  MODIFY `id_status_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_status_mhs`
--
ALTER TABLE `tb_status_mhs`
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_transportasi`
--
ALTER TABLE `tb_transportasi`
  MODIFY `id_transportasi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_waktu`
--
ALTER TABLE `tb_waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_konsentrasi`
--
ALTER TABLE `tb_konsentrasi`
  ADD CONSTRAINT `tb_konsentrasi_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
