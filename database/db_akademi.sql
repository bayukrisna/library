-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 04:44 AM
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `kode_dosen` varchar(255) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `kode_dosen`, `no_hp`, `keterangan`) VALUES
(1, 'Dr. Ir. Agus Susanto, MM', 'AS', '2147483647', 'Keterangan saja'),
(2, 'bella swan', 'bs', '876', 'wdwd');

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
-- Table structure for table `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id_biaya` varchar(6) NOT NULL,
  `nama_biaya` varchar(25) NOT NULL,
  `jumlah_biaya` int(10) NOT NULL,
  `periode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`id_biaya`, `nama_biaya`, `jumlah_biaya`, `periode`) VALUES
('BS001', 'Ranking 1', 360000, '2019/2022'),
('BS002', 'Ranking 2', 3900000, '2018/2019'),
('BS003', 'Ranking 3', 4500000, '2018/2019'),
('BS004', 'Non-Beasiswa', 6000000, '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_du`
--

CREATE TABLE `tb_du` (
  `id_du` varchar(6) NOT NULL,
  `nama_du` varchar(100) NOT NULL,
  `jk_daftar_du` varchar(12) NOT NULL,
  `tpt_lahir_du` varchar(20) NOT NULL,
  `tgl_lahir_du` date NOT NULL,
  `alamat_du` text NOT NULL,
  `no_telp_du` varchar(15) NOT NULL,
  `no_telpm_du` varchar(30) NOT NULL,
  `email_du` varchar(50) NOT NULL,
  `agama_du` text NOT NULL,
  `nik_du` varchar(50) NOT NULL,
  `ibu_kandung_du` text NOT NULL,
  `id_sekolah2` varchar(5) NOT NULL,
  `id_prodi2` varchar(5) NOT NULL,
  `id_konsentrasi2` varchar(6) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `jurusan_du` varchar(20) NOT NULL,
  `tanggal_du` date NOT NULL,
  `kode_tes` varchar(15) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `status_du` varchar(20) NOT NULL,
  `kode_pos_du` varchar(20) NOT NULL,
  `foto_mhs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_du`
--

INSERT INTO `tb_du` (`id_du`, `nama_du`, `jk_daftar_du`, `tpt_lahir_du`, `tgl_lahir_du`, `alamat_du`, `no_telp_du`, `no_telpm_du`, `email_du`, `agama_du`, `nik_du`, `ibu_kandung_du`, `id_sekolah2`, `id_prodi2`, `id_konsentrasi2`, `waktu`, `jurusan_du`, `tanggal_du`, `kode_tes`, `nim`, `status_du`, `kode_pos_du`, `foto_mhs`) VALUES
('1234', 'Polly', 'laki-laki', 'ergerg', '2018-07-07', 'Los Angeles', '6456', '356', 'yoona@gmail.com', 'Budha', '46456', 'ELy', 'SE002', 'PR001', 'KO001', 'Pagi', 'ipa', '2018-07-17', 'TES001', '546', 'Mahasiswa', '656', ''),
('ari123', 'Ariana', 'perempuan', 'Malang', '2018-07-05', 'Los Angeles', '9876', '98765', 'lady@gaga.com', 'Islam', '9876', 'ELy', 'SE001', 'PR001', 'KO001', 'Pagi', 'ipa', '2018-07-18', 'TES002', '8696', 'Mahasiswa', '9876', ''),
('ya23', 'yaaa', 'laki-laki', 'Malang', '2018-07-19', 'Los Angeles', '9876', '9876', 'yoona@gmail.com', 'Budha', '89765', 'ELy', 'SE001', 'PR001', 'KO001', 'Pagi', 'ipa', '2018-07-18', 'TES003', '09876', 'Nilai Kosong', '09876', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_tes`
--

CREATE TABLE `tb_hasil_tes` (
  `id_hasil_tes` varchar(6) NOT NULL,
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
('TES001', 25, 24, 23, 80, 72, 'Ranking 2', '2018-07-17'),
('TES002', 23, 26, 25, 82, 74, 'Ranking 2', '2018-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsentrasi`
--

CREATE TABLE `tb_konsentrasi` (
  `id_konsentrasi` varchar(6) NOT NULL,
  `nama_konsentrasi` varchar(20) NOT NULL,
  `id_prodi2` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsentrasi`
--

INSERT INTO `tb_konsentrasi` (`id_konsentrasi`, `nama_konsentrasi`, `id_prodi2`) VALUES
('KO001', 'Marketing Management', 'PR001'),
('KO002', 'Finance Management', 'PR004'),
('KO003', 'Auditing', 'PR002'),
('KO004', 'Taxation', 'PR002'),
('KO005', 'Kupukupuss', 'PR003'),
('KO006', 'Gantrungsss', 'PR003'),
('KO007', 'yuyul', 'PR002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(6) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `jk_pendaftar` varchar(20) NOT NULL,
  `id_sekolah2` varchar(6) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `id_prodi2` varchar(6) NOT NULL,
  `sumber` varchar(30) NOT NULL,
  `ibu_kandung` varchar(30) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `id_du2` varchar(6) NOT NULL,
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

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tanggal_pendaftaran`, `nama_pendaftar`, `jk_pendaftar`, `id_sekolah2`, `jurusan`, `alamat`, `email`, `no_telp`, `waktu`, `status_bayar`, `id_prodi2`, `sumber`, `ibu_kandung`, `bukti_transfer`, `agama`, `id_du2`, `f1`, `f2`, `f3`, `notes`, `tanggal_konfirmasi`, `sgs`) VALUES
('TM001', '2018-07-17', 'Polly', 'laki-laki', 'SE002', 'ipa', 'Los Angeles', 'yoona@gmail.com', '6456', 'Pagi', 'Aktif', 'PR001', 'brosur', 'ELy', 'Hasil_Tes1.pdf', 'Budha', '1234', '', '', 'rgeg', '', '0000-00-00', ''),
('TM002', '2018-07-17', 'Paris ', 'laki-laki', 'SE001', 'ipa', 'ege', 'as@asd.sads', '445', 'Pagi', 'Lunas', 'PR001', 'brosur', 'ELy', 'IMG_00028.jpg', 'Hindu', 'kui', '', '', '', '', '2018-07-17', ''),
('TM003', '2018-07-18', 'Jessica', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '08976', 'Pagi', 'Non Aktif', 'PR001', 'brosur', 'ELy', '', 'Budha', '', '', '', '', 'Diterima di universitas lain', '0000-00-00', ''),
('TM004', '2018-07-18', 'Ariana', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'lady@gaga.com', '9876', 'Pagi', 'Aktif', 'PR002', 'iklan', 'ELy', 'IMG_0006.jpg', 'Islam', 'ari123', 'Sudah ditelfon', '', '', '', '2018-07-18', ''),
('TM005', '2018-07-18', 'Cherly', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '9876', 'Sore', 'Proses Pengecekan', 'PR001', 'student_get_student', 'ELy', 'IMG_00091.jpg', 'Islam', '', '', '', '', '', '0000-00-00', ''),
('TM006', '2018-07-18', 'yaaa', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '9876', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'ELy', 'Hasil_Tes2.pdf', 'Budha', 'ya23', '', '', '', '', '2018-07-18', '8696'),
('TM007', '2018-07-18', 'yaaa', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '98765', 'Pagi', 'Tamu', 'PR001', 'brosur', 'ELy', '', 'Budha', '', '', '', '', '', '0000-00-00', '');

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
('PR002', 'Accounting', 'Dra. Tiffany Hwang'),
('PR003', 'halu', 'haa'),
('PR004', 'Tata Bogas', 'Dr. Bogasss'),
('PR005', 'wes', 'uyt');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`);

--
-- Indexes for table `matkul_akuntansi`
--
ALTER TABLE `matkul_akuntansi`
  ADD PRIMARY KEY (`id_matkul_akuntansi`);

--
-- Indexes for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tb_du`
--
ALTER TABLE `tb_du`
  ADD PRIMARY KEY (`id_du`),
  ADD KEY `id_sekolah` (`id_sekolah2`),
  ADD KEY `id_prodi` (`id_prodi2`),
  ADD KEY `id_prodi_2` (`id_prodi2`),
  ADD KEY `id_konsentrasi` (`id_konsentrasi2`);

--
-- Indexes for table `tb_hasil_tes`
--
ALTER TABLE `tb_hasil_tes`
  ADD PRIMARY KEY (`id_hasil_tes`);

--
-- Indexes for table `tb_konsentrasi`
--
ALTER TABLE `tb_konsentrasi`
  ADD PRIMARY KEY (`id_konsentrasi`),
  ADD KEY `id_prodi` (`id_prodi2`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matkul_akuntansi`
--
ALTER TABLE `matkul_akuntansi`
  MODIFY `id_matkul_akuntansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_konsentrasi`
--
ALTER TABLE `tb_konsentrasi`
  ADD CONSTRAINT `tb_konsentrasi_ibfk_1` FOREIGN KEY (`id_prodi2`) REFERENCES `tb_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
