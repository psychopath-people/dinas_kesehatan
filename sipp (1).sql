-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 02:05 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipp`
--

-- --------------------------------------------------------

--
-- Table structure for table `datadokter`
--

CREATE TABLE `datadokter` (
  `nip` int(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `peminatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datadokter`
--

-- INSERT INTO `datadokter` (`nip`,`nama`, `ttl`, `fakultas`, `status`, `peminatan`) VALUES
-- ('198405032010012037',' dr.Dwi Wahyuni', 'Samarinda,03-Mei-1984', 'FK-UGM', 'PNS-Kab.Situbondo', 'Ilmu Penyakit Dalam'),
-- -- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE `datapasien` (
  `nik` int(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan') NOT NULL,
  `goldarah` enum('A','B','AB','O') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `umur` int(20) NOT NULL,
  `nomorhp` varchar(100) NOT NULL,
  `tglperiksa` date NOT NULL,
  `puskesmas` varchar(10) NOT NULL
  `riwayat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapasien`
--

-- INSERT INTO `datapasien` (`nik`, `nama`, `jeniskelamin`, `goldarah`, `alamat`, `tanggallahir`, `umur`, `nomorhp`, `tglperiksa`, `riwayat`) VALUES
-- ('20127389405980', 'Nuriya Maulidah', 'perempuan', 'A', 'Sukorejo Banyuputih Situbondo', '2023-01-03', 21, '085234543565 ', '2023-01-04', 'Puskesmas Asembagus', 'Diabetes'),
-- ('2198764566377', 'Amel', 'perempuan', 'AB', 'Arjasa Situbondo', '2023-01-03', 21, '647638920987', '2023-01-03', 'Diabetes'),
-- ('8217712674897109', 'Aldi', 'laki-laki', 'B', 'Jangkar Situbondo', '2023-01-04', 26, '2197472718429', '2023-01-03', 'Diabetes');

-- -- --------------------------------------------------------

--
-- Table structure for table `datapuskesmas`
--

CREATE TABLE `datapuskesmas` (
  `id` varchar(50) NOT NULL,
  `namapuskesmas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapuskesmas`
--

INSERT INTO `datapuskesmas` (`id`, `namapuskesmas`) VALUES
('PKS001', 'Puskesmas Banyuputih'),
('PKS002', 'Puskesmas Asembagus'),
('PKS003', 'Puskesmas Jangkar'),
('PKS004', 'Puskesmas Kapongan'),
('PKS005', 'Puskesmas Arjasa'),
('PKS006', 'PuskesmasSuboh'),
('PKS007', 'Puskesmas Kendit'),
('PKS008', 'Puskesmas Banyuglugur'),
('PKS009', 'Puskesmas Wonorejo'),
('PKS010', 'Puskesmas Panji'),
('PKS011', 'Puskesmas Widoropayung'),
('PKS012', 'Puskesmas Mangaran'),
('PKS013', 'Puskesmas Mlandingan'),
('PKS014', 'Puskesmas Bungatan'),
('PKS015', 'Puskesmas Jatibanteng'),
('PKS016', 'Puskesmas Klampokan'),
('PKS017', 'Puskesmas Sumbermalang'),
('PKS018', 'Puskesmas Penarukan'),
('PKS019', 'Puskesmas Besuki');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(50) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `kodepenyakit` varchar(50) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `bulan`, `kodepenyakit`, `jumlah`) VALUES
(1, 'Januari', 'E14', '56'),
(2, 'Februari', 'E14', '79'),
(3, 'Maret', 'E14', '151'),
(4, 'April', 'E14', '75'),
(5, 'Mei', 'E14', '65'),
(6, 'Juni', 'E14', '130'),
(7, 'Juli', 'E14', '59'),
(8, 'Agustus', 'E14', '61'),
(9, 'September', 'E14', '100'),
(10, 'Oktober', 'E14', '144'),
(11, 'November', 'E14', '94'),
(12, 'Desember', 'E14', '99');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('superadmin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'superadmin'),
(2, 'liedha', 'op1', 'op1', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datadokter`
--
ALTER TABLE `datadokter`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `datapuskesmas`
--
ALTER TABLE `datapuskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
