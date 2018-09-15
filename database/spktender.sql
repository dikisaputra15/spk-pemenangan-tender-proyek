-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 03:21 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spktender`
--

-- --------------------------------------------------------

--
-- Table structure for table `lelang`
--

CREATE TABLE IF NOT EXISTS `lelang` (
  `id_lelang` int(10) NOT NULL,
  `nama_lelang` varchar(30) NOT NULL,
  `hps` int(20) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lelang`
--

INSERT INTO `lelang` (`id_lelang`, `nama_lelang`, `hps`, `status`) VALUES
(1, 'Besi Jalan cibantu', 150000000, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_daftar` int(10) NOT NULL,
  `id_vendor` int(10) NOT NULL,
  `id_lelang` int(10) NOT NULL,
  `tgl_daftar` varchar(15) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `id_vendor`, `id_lelang`, `tgl_daftar`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(6, 1, 1, '2018-08-06', 'syaratptbk', 'pdf', '22196', 'module/file/syaratptbk.pdf'),
(7, 2, 1, '2018-08-06', 'syaratptcs', 'docx', '17708', 'module/file/syaratptcs.docx'),
(8, 3, 1, '2018-08-28', 'persyaratanptbk', 'pdf', '999801', 'module/file/persyaratanptbk.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `id_nilai` int(10) NOT NULL,
  `id_vendor` int(10) NOT NULL,
  `id_lelang` int(10) NOT NULL,
  `appk` int(5) NOT NULL,
  `situ` int(5) NOT NULL,
  `siup` int(5) NOT NULL,
  `tdp` int(5) NOT NULL,
  `ktp_pemilik` int(5) NOT NULL,
  `npwp_perusahaan` int(5) NOT NULL,
  `norek_perusahaan` int(5) NOT NULL,
  `skt` int(5) NOT NULL,
  `skdp` int(5) NOT NULL,
  `nsfp` int(5) NOT NULL,
  `ka` int(5) NOT NULL,
  `k_bank` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_nilai`, `id_vendor`, `id_lelang`, `appk`, `situ`, `siup`, `tdp`, `ktp_pemilik`, `npwp_perusahaan`, `norek_perusahaan`, `skt`, `skdp`, `nsfp`, `ka`, `k_bank`) VALUES
(1, 1, 1, 3, 5, 2, 5, 3, 4, 4, 3, 1, 2, 3, 4),
(2, 2, 1, 5, 5, 5, 2, 2, 4, 4, 5, 5, 5, 4, 5),
(3, 3, 1, 3, 5, 3, 4, 3, 3, 2, 4, 4, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('vendor','admin','pimpinan') NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `email`, `username`, `password`, `level`, `status`) VALUES
(11, 'diki saputra alfath', 'diki@gmail.com', 'dikisaputra', 'f8b0972e4b0ddabef97794c7f17c6e20', 'vendor', 'on'),
(12, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'on'),
(14, 'abiusno', 'abi@gmail.com', 'abi', '19a9228dbbbe3b613190002e54dc3429', 'pimpinan', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id_vendor` int(10) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `pemilik`, `alamat`, `telepon`) VALUES
(1, 'pt bintang krakatau', 'suwargo', 'jl serang plaza ciceri', '0218876'),
(2, 'pt cisadane', 'diki', 'jl ki ajurum kp kembang curug serang banten', '025346'),
(3, 'pt bk', 'kamil', 'serang', '098775');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`id_lelang`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lelang`
--
ALTER TABLE `lelang`
  MODIFY `id_lelang` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
