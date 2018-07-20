-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 08:31 AM
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
  `kode_pos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_mahasiswa`, `jalan`, `dusun`, `kelurahan`, `kecamatan`, `rt`, `rw`, `kode_pos`) VALUES
('0', '0', '0', '0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0', '0', '0', '0'),
('MHS001', '', '', '', '', '', '', ''),
('MHS002', '', '', '', '', '', '', ''),
('MHS003', '', '', '', '', '', '', ''),
('MHS004', '', '', '', '', '', '', ''),
('MHS005', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_angkatan`
--

CREATE TABLE `tb_angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `angkatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_sekolah` varchar(5) NOT NULL,
  `id_prodi` varchar(5) NOT NULL,
  `id_konsentrasi` varchar(6) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `jurusan_du` varchar(20) NOT NULL,
  `tanggal_du` date NOT NULL,
  `kode_tes` varchar(15) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `status_du` varchar(20) NOT NULL,
  `kode_pos_du` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_du`
--

INSERT INTO `tb_du` (`id_du`, `nama_du`, `jk_daftar_du`, `tpt_lahir_du`, `tgl_lahir_du`, `alamat_du`, `no_telp_du`, `no_telpm_du`, `email_du`, `agama_du`, `nik_du`, `ibu_kandung_du`, `id_sekolah`, `id_prodi`, `id_konsentrasi`, `waktu`, `jurusan_du`, `tanggal_du`, `kode_tes`, `nim`, `status_du`, `kode_pos_du`) VALUES
('', 'Polly', 'laki-laki', 'ergerg', '2018-07-07', 'Los Angeles', '6456', '356', 'yoona@gmail.com', 'Budha', '46456', 'ELy', 'SE002', 'PR003', 'KO001', 'Pagi', 'ipa', '2018-07-17', '', '', 'Mahasiswa', '656'),
('8696', 'Ariana', 'perempuan', 'Malang', '2018-07-05', 'Los Angeles', '9876', '98765', 'lady@gaga.com', 'Islam', '9876', 'ELy', 'SE001', 'PR003', 'KO001', 'Pagi', 'ipa', '2018-07-18', '', '', 'Mahasiswa', '9876'),
('987654', 'Paris ', 'laki-laki', 'Malang', '2018-07-10', 'ege', '445', '98765', 'as@asd.sads', 'Islam', '7865', 'ELy', 'SE001', 'PR002', 'KO003', 'Sore', 'ipa', '2018-07-19', '', '', 'Mahasiswa', '9876'),
('ya23', 'yaaasss', 'laki-laki', 'Malang', '2018-07-19', 'Los Angeles', '9876', '9876', 'yoona@gmail.com', 'Budha', '89765', 'ELy', 'SE001', 'PR003', 'KO001', 'Pagi', 'ipa', '2018-07-18', 'TES002', '09876', 'Mahasiswa', '09876');

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
('TES002', 23, 26, 25, 82, 74, 'Ranking 2', '2018-07-18'),
('TES003', 34, 21, 21, 84, 76, 'Ranking 2', '2018-07-19');

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
('MHS003', '', '0'),
('MHS004', '', '0'),
('MHS005', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebutuhan_khusus`
--

CREATE TABLE `tb_kebutuhan_khusus` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `kebutuhan_khusus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('MHS002', '89765', '86', '', '', '', ''),
('MHS003', '89765', '86', '87', '', '', ''),
('MHS004', '89765', 'ihuy', '', '', '', ''),
('MHS005', '7865', '', '', '', '', '');

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
('KO001', 'Marketing Management', 'PR003'),
('KO002', 'Finance Management', 'PR002'),
('KO003', 'Auditing', 'PR001'),
('KO004', 'Taxation', 'PR001'),
('KO005', 'Kupukupuss', 'PR003'),
('KO006', 'Gantrungsss', 'PR002'),
('KO007', 'yuyul', 'PR002'),
('KO008', 'Kupukupus', 'PR003'),
('KO009', 'SMK Telkom Malang', 'PR003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(7) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `foto_mahasiswa` text NOT NULL,
  `status_mahasiswa` varchar(10) NOT NULL,
  `id_prodi` varchar(7) NOT NULL,
  `id_konsentrasi` varchar(7) NOT NULL,
  `id_angkatan` varchar(7) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `agama`, `email`, `no_telepon`, `foto_mahasiswa`, `status_mahasiswa`, `id_prodi`, `id_konsentrasi`, `id_angkatan`, `no_hp`) VALUES
('MHS001', 'yaaasss', '09876', 'laki-la', '2018-07-19', 'Malang', 'Budha', '', '', '', 'Aktif', 'PR003', 'KO001', '', ''),
('MHS002', 'yaaasss', '09876', 'laki-la', '2018-07-19', 'Malang', 'Budha', '', '', '', 'Aktif', 'PR003', 'KO001', '', ''),
('MHS003', 'yaaasss', '09876', 'laki-la', '2018-07-19', 'Malang', 'Budha', '', '', '', 'Aktif', 'PR003', 'KO001', '', ''),
('MHS004', 'yaaasss', '09876', 'laki-la', '2018-07-19', 'Malang', 'Budha', '', '', '', 'Aktif', 'PR003', 'KO001', '', ''),
('MHS005', 'Paris ', '', 'laki-la', '2018-07-10', 'Malang', 'Islam', '', '', '', 'Aktif', 'PR001', 'KO003', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orang_tua`
--

CREATE TABLE `tb_orang_tua` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` varchar(20) NOT NULL,
  `kebutuhan_khusus_ayah` varchar(30) NOT NULL,
  `kebutuhan_khusus_ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_orang_tua`
--

INSERT INTO `tb_orang_tua` (`id_mahasiswa`, `nama_ayah`, `nik_ayah`, `tanggal_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nik_ibu`, `tanggal_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `kebutuhan_khusus_ayah`, `kebutuhan_khusus_ibu`) VALUES
('MHS001', '', '', '0000-00-00', '', '', '', 'ELy', '', '0000-00-00', '', '', '', '', ''),
('MHS002', '', '', '0000-00-00', '', '', '', 'ELy', '', '0000-00-00', '', '', '', '', ''),
('MHS003', '', '', '0000-00-00', '', '', '', 'ELy', '', '0000-00-00', '', '', '', '', ''),
('MHS004', '', '', '0000-00-00', '', '', '', 'ELy', '', '0000-00-00', '', '', '', '', ''),
('MHS005', '', '', '0000-00-00', '', '', '', 'ELy', '', '0000-00-00', '', '', '', '', '');

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
  `ibu_kandung` varchar(30) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `agama` varchar(10) NOT NULL,
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

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tanggal_pendaftaran`, `nama_pendaftar`, `jk_pendaftar`, `id_sekolah`, `jurusan`, `alamat`, `email`, `no_telp`, `waktu`, `status_bayar`, `id_prodi`, `sumber`, `ibu_kandung`, `bukti_transfer`, `agama`, `id_du`, `f1`, `f2`, `f3`, `notes`, `tanggal_konfirmasi`, `sgs`) VALUES
('TM001', '2018-07-17', 'Polly', 'laki-laki', 'SE002', 'ipa', 'Los Angeles', 'yoona@gmail.com', '6456', 'Pagi', 'Aktif', 'PR001', 'brosur', 'ELy', 'Hasil_Tes1.pdf', 'Budha', '1234', '', '', 'rgeg', '', '0000-00-00', ''),
('TM002', '2018-07-17', 'Paris ', 'laki-laki', 'SE001', 'ipa', 'ege', 'as@asd.sads', '445', 'Pagi', 'Aktif', 'PR001', 'brosur', 'ELy', 'IMG_00028.jpg', 'Hindu', 'kui', '', '', '', '', '2018-07-17', ''),
('TM003', '2018-07-18', 'Jessica', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '08976', 'Pagi', 'Non Aktif', 'PR001', 'brosur', 'ELy', '', 'Budha', '', '', '', '', 'Diterima di universitas lain', '0000-00-00', ''),
('TM004', '2018-07-18', 'Ariana', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'lady@gaga.com', '9876', 'Pagi', 'Aktif', 'PR002', 'iklan', 'ELy', 'IMG_0006.jpg', 'Islam', 'ari123', 'Sudah ditelfon', '', '', '', '2018-07-18', ''),
('TM005', '2018-07-19', 'Cherly', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '9876', 'Sore', 'Lunas', 'PR001', 'student_get_student', 'ELy', 'IMG_00091.jpg', 'Islam', '', '', '', '', '', '0000-00-00', ''),
('TM006', '2018-07-18', 'yaaa', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '9876', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'ELy', 'Hasil_Tes2.pdf', 'Budha', 'ya23', '', '', '', '', '2018-07-18', '8696'),
('TM007', '2018-07-18', 'yaaa', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '98765', 'Pagi', 'Non Aktif', 'PR001', 'brosur', 'ELy', '', 'Budha', '', 'cobaf1', '', '', '', '0000-00-00', ''),
('TM008', '2018-07-18', 'Paris ', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'as@asd.sads', '09876', 'Pagi', 'Non Aktif', 'PR001', 'brosur', 'ELy', '', 'Kristen', '', '', '', 'wwwwwwww', 'yayawwww2', '0000-00-00', ''),
('TM009', '2018-07-19', 'Paris ', 'laki-laki', 'SE002', 'ipa', 'Los Angeles', 'yoona@gmail.com', '97865', 'Pagi', 'Proses Pengecekan', 'PR001', 'student_get_student', 'ELy', 'IMG_000210.jpg', 'Budha', '', '', '', 'f3yw', '333', '0000-00-00', '8696'),
('TM010', '2018-07-18', 'Paris ', 'laki-laki', 'SE002', '', 'Los Angeles', 'as@asd.sads', '435435', 'Pagi', 'Tamu', '', 'student_get_student', 'ELy', '', 'Hindu', '', '', '', '', '', '0000-00-00', '546'),
('TM011', '2018-07-18', 'rgerg', 'laki-laki', 'SE001', 'ips', 'Los Angeles', 'gegr@f.v', '456', 'Pagi', 'Proses Pengecekan', 'PR001', '', 'fefe', 'IMG_00029.jpg', 'Hindu', '', '', '', '', '', '0000-00-00', ''),
('TM012', '2018-07-18', 'jiuy', 'perempuan', 'SE001', 'ips', 'France', 'as@asd.sads', '09876', 'Pagi', 'Tamu', 'PR001', 'student_get_student', 'ELy', '', 'Kristen', '', '', '', '', '', '0000-00-00', '8696'),
('TM013', '2018-07-19', 'Kendall', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '34656', 'Pagi', 'Lunas', 'PR001', 'brosur', '', 'IMG_00061.jpg', '', '', 'feef', 'e', '', '', '0000-00-00', '');

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
-- Table structure for table `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `pendidikan_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wali`
--

INSERT INTO `tb_wali` (`id_mahasiswa`, `nama_wali`, `tanggal_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`) VALUES
('MHS002', '', '0000-00-00', '', '', 'Kurang dari Rp. 500,'),
('MHS003', '', '0000-00-00', '', '', 'Kurang dari Rp. 500,'),
('MHS004', '', '0000-00-00', '', '', 'Kurang dari Rp. 500,'),
('MHS005', '', '0000-00-00', '', '', '');

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
-- Indexes for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

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
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_prodi` (`id_prodi`),
  ADD KEY `id_prodi_2` (`id_prodi`),
  ADD KEY `id_konsentrasi` (`id_konsentrasi`);

--
-- Indexes for table `tb_hasil_tes`
--
ALTER TABLE `tb_hasil_tes`
  ADD PRIMARY KEY (`id_hasil_tes`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

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
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_orang_tua`
--
ALTER TABLE `tb_orang_tua`
  ADD PRIMARY KEY (`id_mahasiswa`);

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
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id_mahasiswa`);

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
-- AUTO_INCREMENT for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT;

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
