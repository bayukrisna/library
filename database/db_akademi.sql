-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 09:25 AM
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
-- Table structure for table `matkul_akuntansi`
--

CREATE TABLE `matkul_akuntansi` (
  `id_matkul_akuntansi` int(11) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `subject_name` text NOT NULL,
  `credits` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `dosen` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul_akuntansi`
--

INSERT INTO `matkul_akuntansi` (`id_matkul_akuntansi`, `subject_code`, `subject_name`, `credits`, `semester`, `dosen`, `kode`, `keterangan`) VALUES
(1, 'GEED-101', 'Pancasila dan Kewarganegaraan', 3, 1, 'Drs. H Arjuna Wiwaha', 'AW', 'Pagi, Sore');

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
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_mahasiswa`, `jalan`, `dusun`, `kelurahan`, `kecamatan`, `rt`, `rw`, `kode_pos`, `alamat_mhs`, `jurusan`) VALUES
(' 09328', '', '', '', '', '', '', '4435', 'Los Angeles', 'ipa'),
('23123', '', '', '', '', '', '', '77777', '', ''),
('3434', '', '', '', '', '', '', '4545', 'Los Angeles', 'ipa'),
('436546', '', '', '', '', '', '', '4435', '', ''),
('4546', '', '', '', '', '', '', '65165', '', ''),
('5435', '', '', '', '', '', '', '4435', 'Los Angeles', 'ipa'),
('876543', '', '', '', '', '', '', '65165', 'Los Angeles', 'ipa'),
('97865', '', '', '', '', '', '', '65165', 'wdw', 'IPA'),
('M0009', '', '', '', '', '', '', '465', 'Los Angeles', 'ipa'),
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
(' 09328', '', '', '0000-00-00', '', '', ''),
('23123', '', '', '0000-00-00', '', '', ''),
('3434', '', '', '0000-00-00', '', '', ''),
('436546', '', '', '0000-00-00', '', '', ''),
('4546', '', '', '0000-00-00', '', '', ''),
('5435', '', '', '0000-00-00', '', '', ''),
('876543', '', '', '0000-00-00', '', '', ''),
('97865', '', '', '0000-00-00', '', '', ''),
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
(' 09328', 'P', 'Malang', '2018-08-03', 'Kristen', '', '2018'),
('23123', 'L', 'Malang', '2018-08-07', 'Islam', '', ''),
('3434', 'L', 'Malang', '2018-08-17', 'Kristen', '', '2018'),
('436546', 'L', 'myyt', '2018-08-11', 'Kristen', '', ''),
('4546', 'P', 'Malang', '2018-08-10', 'Islam', '', ''),
('5435', 'L', 'Malang', '2018-08-02', 'Kristen', '', ''),
('876543', 'L', 'jihugy', '2018-08-02', 'Kristen', '', ''),
('97865', '', 'Malang', '2018-08-03', 'Kristen', '', ''),
('M0009', 'L', 'Malang', '2018-08-09', 'Kristen', '', '2018'),
('M0010', 'P', 'Malang', '2018-08-01', 'Hindu', '', '2018');

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
(0, '', '', 0, ''),
(20, '1', 'mk123', 4, 'T'),
(21, '1', '76', 2, 'Y'),
(22, '1', 'i', 5, 'Y'),
(23, '1', '76', 4, 'Y'),
(24, '1', 'mk123', 4, 'T'),
(25, '1', '76', 1, 'T'),
(26, '1', '76', 5, 'Y'),
(27, '5', '76', 1, 'Y'),
(28, '5', 'mk123', 2, 'T'),
(29, '6', '76', 1, 'Y'),
(30, '6', 'mk123', 4, 'T'),
(31, '0', 'mk123', 7, 'Y'),
(32, '4', 'mk123', 4, 'Y'),
(34, '0', '76', 7, 'T'),
(35, '0', 'mk123', 4, 'T'),
(36, '0', 'mk123', 6, 'Y'),
(37, '0', '76', 7, 'Y');

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
  `t_biaya` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pembayaran`
--

INSERT INTO `tb_detail_pembayaran` (`no`, `kode_pembayaran`, `id_mahasiswa`, `id_biaya`, `tanggal_pembayaran`, `kode_matkul`, `t_biaya`) VALUES
(16, 'KP001', '4546', 'BS005', '06-08-2018', '', '720000'),
(17, 'KP001', '4546', 'BS078', '06-08-2018', 'mk123', '157500'),
(18, 'KP002', '4546', 'BS006', '07-08-2018', '', '360000'),
(19, 'KP003', '4546', 'BS007', '07-08-2018', '', '360000'),
(20, 'KP004', '4546', 'BS008', '07-08-2018', '', '360000'),
(21, 'KP004', '4546', 'BS009', '07-08-2018', '', '360000'),
(22, 'KP004', '4546', 'BS010', '07-08-2018', '', '360000'),
(23, 'KP004', '4546', 'BS011', '07-08-2018', '', '360000'),
(24, 'KP004', '4546', 'BS012', '07-08-2018', '', '360000'),
(25, 'KP004', '4546', 'BS013', '07-08-2018', '', '360000'),
(26, 'KP005', '5435', 'BS041', '07-08-2018', '', '2570000'),
(27, 'KP006', '23123', 'BS005', '09-08-2018', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `kode_dosen` varchar(255) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `kode_dosen`, `no_hp`, `keterangan`) VALUES
(1, 'Dr. Ir. Agus Susanto, MM', 'AS', '2147483647', 'Keterangan saja'),
(2, 'bella swan', 'bs', '876', 'wdwd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grade`
--

CREATE TABLE `tb_grade` (
  `id_grade` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `diskon` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grade`
--

INSERT INTO `tb_grade` (`id_grade`, `grade`, `diskon`) VALUES
(1, 'Ranking 1', 40),
(2, 'Ranking 2', 35),
(3, 'Ranking 3', 25),
(4, 'Non-Beasiswa', 0),
(5, 'Grade A', 35),
(6, 'Grade B', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_tes`
--

CREATE TABLE `tb_hasil_tes` (
  `id_hasil_tes` varchar(8) NOT NULL,
  `nilai_mat` int(11) NOT NULL,
  `nilai_bing` int(11) NOT NULL,
  `nilai_psikotes` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `total_jawaban` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `tanggal_hasil_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil_tes`
--

INSERT INTO `tb_hasil_tes` (`id_hasil_tes`, `nilai_mat`, `nilai_bing`, `nilai_psikotes`, `total_nilai`, `total_jawaban`, `grade`, `tanggal_hasil_tes`) VALUES
('TES0001', 4, 5, 3, 13, 12, 'Non-Beasiswa', '2018-08-01'),
('TES0002', 21, 30, 25, 84, 76, 'Ranking 2', '2018-08-01'),
('TES0004', 0, 0, 0, 0, 0, 'Non-Beasiswa', '0000-00-00'),
('TES0005', 54, 45, 43, 0, 0, '', '2018-08-09'),
('TES0006', 22, 30, 21, 81, 73, 'Ranking 2', '2018-08-09'),
('TES0008', 23, 26, 24, 81, 73, 'Ranking 2', '2018-08-10'),
('TES0009', 0, 0, 0, 0, 0, 'Non-Beasiswa', '0000-00-00');

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
(' 09328', 'ELy', '', '0000-00-00', '', '', ''),
('23123', 'ELy', '', '0000-00-00', '', '', ''),
('3434', '454', '', '0000-00-00', '', '', ''),
('436546', 'frg', '', '0000-00-00', '', '', ''),
('4546', 'ELy', '', '0000-00-00', '', '', ''),
('5435', 'ELy', '', '0000-00-00', '', '', ''),
('876543', 'sesy', '', '0000-00-00', '', '', ''),
('97865', 'ELy', '', '0000-00-00', '', '', ''),
('M0009', 'ELy', '', '0000-00-00', '', '', ''),
('M0010', 'fef', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` varchar(7) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`, `level`) VALUES
('123', 'Admin', 0);

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
-- Table structure for table `tb_jenis_tinggal`
--

CREATE TABLE `tb_jenis_tinggal` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `jenis_tinggal` varchar(20) NOT NULL,
  `alat_transportasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_tinggal`
--

INSERT INTO `tb_jenis_tinggal` (`id_mahasiswa`, `jenis_tinggal`, `alat_transportasi`) VALUES
(' 09328', '', ''),
('23123', '', ''),
('3434', '', ''),
('436546', '', ''),
('4546', '', ''),
('5435', '', ''),
('876543', '', ''),
('97865', '', ''),
('M0009', '', ''),
('M0010', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_dosen`
--

CREATE TABLE `tb_kelas_dosen` (
  `id_kelas_dosen` int(11) NOT NULL,
  `id_dosen` varchar(10) NOT NULL,
  `rencana` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `bobot_dosen` int(11) NOT NULL,
  `jenis_evaluasi` varchar(50) NOT NULL,
  `id_kp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_dosen`
--

INSERT INTO `tb_kelas_dosen` (`id_kelas_dosen`, `id_dosen`, `rencana`, `realisasi`, `bobot_dosen`, `jenis_evaluasi`, `id_kp`) VALUES
(37, '2', 5, 5, 3, 'r', 'KP001'),
(39, '1', 6, 6, 3, '', 'KP002'),
(40, '1', 0, 0, 3, '', 'KP003'),
(41, '1', 6, 6, 3, '', 'KP004'),
(43, '1', 5, 5, 5, 'g', 'KP005'),
(45, '1', 5, 5, 5, '', 'KP006'),
(46, '1', 3, 3, 5, '', 'KP007');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_mhs`
--

CREATE TABLE `tb_kelas_mhs` (
  `id_kelas_mhs` int(11) NOT NULL,
  `id_mahasiswa` varchar(20) NOT NULL,
  `id_kp` varchar(11) NOT NULL,
  `id_skala_nilai` varchar(10) NOT NULL,
  `nilai_d` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_mhs`
--

INSERT INTO `tb_kelas_mhs` (`id_kelas_mhs`, `id_mahasiswa`, `id_kp`, `id_skala_nilai`, `nilai_d`) VALUES
(17, '876543', 'KP004', '21', 67),
(20, '4546', 'KP002', '2', 89),
(21, '97865', 'KP002', '5', 76),
(22, '5435', 'KP004', '19', 59),
(23, '5435', 'KP007', '21', 68),
(24, 'M0010', 'KP005', '15', 76),
(25, 'M0010', 'KP004', '13', 83);

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
(' 09328', '45435', '', '', '', '', ''),
('23123', '7865', '8943', '', '', '', ''),
('3434', '4545', '', '', '', '', ''),
('436546', '45', '', '', '', '', ''),
('4546', '12321', '', '', '', '', ''),
('5435', '324324', '', '', '', '', ''),
('876543', '9786', '', '', '', '', ''),
('97865', '35325', '', '', '', '', ''),
('M0009', '435345', '', '', '', '', ''),
('M0010', '45435', '', '', '', '', 'indonesia');

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
('KO006', 'Gantrungsss', 'PR002'),
('KO007', 'yuyul', 'PR002');

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
(' 09328', 4534, 54546, 'bayuchrisna3@gmail.com'),
('23123', 213213, 89898, 'rahmanaldi290@gmail.com'),
('3434', 435, 45435, 'yoona@gmail.com'),
('436546', 4364, 45435, 'as@asd.sads'),
('4546', 5345, 435345, 'as@asd.sads'),
('5435', 54654, 45435, 'bayuchrisna3@gmail.com'),
('876543', 43535, 9876, 'yoona@gmail.com'),
('97865', 535, 355, 'yoona@gmail.com'),
('M0009', 3455, 5436, 'yoona@gmail.com'),
('M0010', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp`
--

CREATE TABLE `tb_kp` (
  `id_kp` varchar(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `id_prodi` varchar(7) NOT NULL,
  `id_periode` varchar(5) NOT NULL,
  `kode_matkul` varchar(12) NOT NULL,
  `bahasan` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `id_dosen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kp`
--

INSERT INTO `tb_kp` (`id_kp`, `nama_kelas`, `id_prodi`, `id_periode`, `kode_matkul`, `bahasan`, `tgl_mulai`, `tgl_akhir`, `id_dosen`) VALUES
('KP001', 'YEy', 'PR001', '2', 'i', 'ss', '0000-00-00', '0000-00-00', '2'),
('KP002', 'YEy', 'PR002', '3', '76', 'bhg', '0000-00-00', '0000-00-00', '1'),
('KP003', 'n', 'PR001', '2', 'mk123', '', '0000-00-00', '0000-00-00', '1'),
('KP004', 'YEy', 'PR001', '2', 'mk123', '', '0000-00-00', '0000-00-00', '1'),
('KP005', 'YEy', 'PR001', '2', 'i', 'wd', '0000-00-00', '0000-00-00', '1'),
('KP006', 'kelas baruu', 'PR001', '2', 'i', 'wdw', '0000-00-00', '0000-00-00', '1'),
('KP007', 'YEy', 'PR001', '2', 'i', 'wawaw', '0000-00-00', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` int(11) NOT NULL,
  `nama_kurikulum` varchar(100) NOT NULL,
  `id_prodi` varchar(10) NOT NULL,
  `jumlah_sks` int(11) NOT NULL,
  `bobot_matkul_wajib` int(11) NOT NULL,
  `bobot_matkul_pilihan` int(11) NOT NULL,
  `id_periode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`id_kurikulum`, `nama_kurikulum`, `id_prodi`, `jumlah_sks`, `bobot_matkul_wajib`, `bobot_matkul_pilihan`, `id_periode`) VALUES
(0, 'Kurikulum new', 'PR002', 6, 3, 3, '3'),
(1, 'Kurikulum Manajemen ', 'PR001', 8, 2, 6, '2'),
(4, 'hmm', 'PR002', 4, 2, 2, '2'),
(5, 'KR20181', 'PR001', 54, 10, 44, '2'),
(6, 'Kurikulum hh', 'PR001', 50, 45, 5, '3'),
(7, 'abc', 'PR002', 13, 7, 6, '3'),
(8, 'efg', 'PR001', 14, 5, 9, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `id_du` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `status_mahasiswa` varchar(20) NOT NULL,
  `id_prodi` varchar(7) NOT NULL,
  `id_konsentrasi` varchar(7) NOT NULL,
  `id_hasil_tes` varchar(7) NOT NULL,
  `id_sekolah` varchar(6) NOT NULL,
  `id_waktu` int(2) NOT NULL,
  `id_grade` varchar(2) NOT NULL,
  `semester_aktif` varchar(5) NOT NULL,
  `id_grade2` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `id_du`, `nama_mahasiswa`, `nim`, `status_mahasiswa`, `id_prodi`, `id_konsentrasi`, `id_hasil_tes`, `id_sekolah`, `id_waktu`, `id_grade`, `semester_aktif`, `id_grade2`) VALUES
('M0001', '23123', 'wahyu rahman', '212', 'Aktif', 'PR001', 'KO003', 'TES0002', 'SE002', 1, '2', '1', ''),
('M0002', '3434', 'GAga', '7777', 'Aktif', 'PR001', 'KO003', 'TES0008', 'SE001', 1, '2', '', ''),
('M0003', '436546', 'Hiltons', '1112', 'Aktif', 'PR001', 'KO003', 'TES0003', 'SE002', 1, '3', '', ''),
('M0004', '4546', 'Lala', '2222', 'Aktif', 'PR002', 'KO006', 'TES0004', 'SE001', 1, '1', '', ''),
('M0005', '5435', 'Taeyeon', '3333', 'Aktif', 'PR001', 'KO003', 'TES0005', 'SE001', 2, '4', '', ''),
('M0006', '876543', 'Cris', '4444', 'Aktif', 'PR001', 'KO003', 'TES0006', 'SE002', 2, '2', '', ''),
('M0007', '9328', 'Britney', '45345', 'Nilai Kosong', 'PR001', 'KO003', 'TES0007', 'SE001', 1, '', '', ''),
('M0008', '97865', 'Ariana', '5555', 'Aktif', 'PR002', 'KO006', 'TES0001', 'SE002', 1, '2', '', ''),
('M0009', ' 436', 'Justin', '43646', 'Aktif', 'PR001', 'KO003', 'TES0009', 'SE001', 2, '', '', ''),
('M0010', '', 'tasya', '800', 'Aktif', 'PR001', 'KO003', '', '', 1, '', '', '');

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
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `nama_matkul`, `id_prodi`, `jenis_matkul`, `bobot_matkul`, `bobot_praktikum`, `bobot_tatap_muka`, `bobot_praktik_lapangan`, `bobot_simulasi`, `metode_pembelajaran`, `tanggal_mulai`, `tanggal_akhir`) VALUES
('76', 'Bahasa Inggris', 'PR002', 'B', 8, 3, 2, 1, 2, '', '0000-00-00', '0000-00-00'),
('i', 'iuh', 'PR001', 'B', 5, 0, 5, 0, 0, '', '2018-07-27', '2018-07-28'),
('mk123', 'Matematika', 'PR001', 'A', 3, 0, 3, 0, 0, 'online', '0000-00-00', '0000-00-00');

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
('KP006', '23123', '780000', '09-08-2018');

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
('TM001', '2018-07-24', 'Paris Hilton', 'perempuan', 'SE001', 'ipa', 'France', 'yoona@gmail.com', '09784', 'Pagi', 'Aktif', 'PR002', 'brosur', 'Desert9.jpg', '8675', '', 'efef', '', '', '2018-07-24', ''),
('TM002', '2018-07-24', 'aldi rahman', 'laki-laki', 'SE001', 'ipa', 'jl. kukik', 'rahmanaldi290@gmail.com', '0812321321', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'JIC4.jpg', '123', '1', '', '', '', '2018-07-24', '98765'),
('TM003', '2018-08-10', 'Ariana', 'laki-laki', 'SE001', 'ipa', 'wdw', 'yoona@gmail.com', '535', 'Pagi', 'Lunas', 'PR001', 'brosur', 'Koala.jpg', '97865', '', '', '', '', '2018-07-24', ''),
('TM004', '2018-07-25', 'awaludin', 'laki-laki', 'SE001', 'ipa', 'awaludin 2', 'rahmanaldi290@gmail.com', '081231232', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'JIC5.jpg', '321321', '', '', '', '', '2018-07-25', '123'),
('TM005', '2018-07-25', 'first', 'laki-laki', 'SE001', 'ipa', 'asd', '123@gmas.asd', '1231', 'Pagi', 'Proses Pengecekan', 'PR001', 'student_get_student', 'JIC6.jpg', '', '', '', '', '', '0000-00-00', '8755'),
('TM006', '2018-07-25', 'Jessica Jung', 'perempuan', 'SE002', 'ips', 'Korea', 'lady@gaga.com', '08556', 'Pagi', 'Proses Pengecekan', 'PR001', 'brosur', 'hih.pdf', '', '', '', '', '', '0000-00-00', ''),
('TM007', '2018-08-01', 'Hiltons', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'as@asd.sads', '4364', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'AdminLTE_2___General_Form_Elements1.pdf', '436546', 'cobaf1', '', '', '', '0000-00-00', '3253'),
('TM008', '2018-08-01', 'Bieber', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '43645', 'Pagi', 'Non Aktif', 'PR002', 'iklan', '', '', '', '', '', '', '0000-00-00', ''),
('TM009', '2018-08-01', 'Taeyeon', 'L', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '54654', 'Sore', 'Lunas', 'PR001', 'brosur', 'Coba1.pdf', '5435', '', '', '', '', '0000-00-00', ''),
('TM010', '2018-08-01', 'Cris', 'L', 'SE002', 'ipa', 'Los Angeles', 'yoona@gmail.com', '43535', 'Sore', 'Lunas', 'PR001', 'brosur', '', '876543', '', '', '', '', '0000-00-00', ''),
('TM011', '2018-08-01', 'Lala', 'P', 'SE001', 'ipa', 'Los Angeles', 'as@asd.sads', '5345', 'Pagi', 'Aktif', 'PR001', 'student_get_student', '', '4546', '', '', '', '', '0000-00-00', '32424'),
('TM012', '2018-08-09', 'wahyu rahman', 'L', 'SE002', 'ipa', 'asd', 'rahmanaldi290@gmail.com', '213213', 'Pagi', 'Aktif', 'PR001', 'brosur', 'JIC8.jpg', '23123', '', '', '', '', '2018-08-09', ''),
('TM013', '2018-08-10', 'Britney', 'P', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '4534', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'Coba11.pdf', '9328', '', '', '', '', '2018-08-10', '3333'),
('TM014', '2018-08-10', 'GAga', 'L', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '435', 'Pagi', 'Aktif', 'PR001', 'brosur', 'Coba12.pdf', '3434', '', '', '', '', '2018-08-10', ''),
('TM015', '2018-08-10', 'Justin', 'L', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '3455', 'Sore', 'Lunas', 'PR001', 'iklan', 'Coba13.pdf', ' 436', '', '', '', '', '2018-08-10', '');

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
(1, '', '', '112', '123', '321', '', '', '', '', ''),
(2, '2018/2019 Ganjil', 'PR001', '12', '21', '31', '32', '12', '2018-07-23', '2018-07-25', '2'),
(3, '2018/2019 Ganjil', 'PR002', '12', '51', '52', '53', '54', '2018-07-23', '2018-07-25', '2'),
(4, '2018/2019 Genap', 'PR001', '100', '50', '50', '32', '54', '2018-08-01', '2018-08-18', '6');

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
-- Table structure for table `tb_tgl_du`
--

CREATE TABLE `tb_tgl_du` (
  `id_mahasiswa` varchar(11) NOT NULL,
  `tgl_du` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tgl_du`
--

INSERT INTO `tb_tgl_du` (`id_mahasiswa`, `tgl_du`) VALUES
(' 09328', '2018-08-10'),
('23123', '2018-08-09'),
('3434', '2018-08-10'),
('436546', '2018-08-01'),
('4546', '2018-08-01'),
('5435', '2018-08-01'),
('876543', '2018-08-01'),
('97865', '2018-08-08'),
('M0009', '2018-08-10'),
('M0010', '2018-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_total_mhs`
--

CREATE TABLE `tb_total_mhs` (
  `id_kp` varchar(20) NOT NULL,
  `total_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_total_mhs`
--

INSERT INTO `tb_total_mhs` (`id_kp`, `total_mhs`) VALUES
('', 0),
('KP002', 2),
('KP004', 3),
('KP005', 1),
('KP006', 0),
('KP007', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_jabatan2` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `id_jabatan2`) VALUES
('Bayu', 'admin', 'Bayu Krisna', '123');

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
(' 09328', '', '0000-00-00', '', '', ''),
('23123', '', '0000-00-00', '', '', ''),
('3434', '', '0000-00-00', '', '', ''),
('436546', '', '0000-00-00', '', '', ''),
('4546', '', '0000-00-00', '', '', ''),
('5435', '', '0000-00-00', '', '', ''),
('876543', '', '0000-00-00', '', '', ''),
('97865', '', '0000-00-00', '', '', ''),
('M0009', '', '0000-00-00', '', '', ''),
('M0010', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matkul_akuntansi`
--
ALTER TABLE `matkul_akuntansi`
  ADD PRIMARY KEY (`id_matkul_akuntansi`);

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
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jenis_matkul`
--
ALTER TABLE `tb_jenis_matkul`
  ADD PRIMARY KEY (`id_jenis_matkul`);

--
-- Indexes for table `tb_jenis_tinggal`
--
ALTER TABLE `tb_jenis_tinggal`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_kelas_dosen`
--
ALTER TABLE `tb_kelas_dosen`
  ADD PRIMARY KEY (`id_kelas_dosen`);

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
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

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
-- Indexes for table `tb_tgl_du`
--
ALTER TABLE `tb_tgl_du`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_total_mhs`
--
ALTER TABLE `tb_total_mhs`
  ADD PRIMARY KEY (`id_kp`);

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
-- AUTO_INCREMENT for table `matkul_akuntansi`
--
ALTER TABLE `matkul_akuntansi`
  MODIFY `id_matkul_akuntansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detail_kurikulum`
--
ALTER TABLE `tb_detail_kurikulum`
  MODIFY `id_detail_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_grade`
--
ALTER TABLE `tb_grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kelas_dosen`
--
ALTER TABLE `tb_kelas_dosen`
  MODIFY `id_kelas_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_kelas_mhs`
--
ALTER TABLE `tb_kelas_mhs`
  MODIFY `id_kelas_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_skala_nilai`
--
ALTER TABLE `tb_skala_nilai`
  MODIFY `id_skala_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
