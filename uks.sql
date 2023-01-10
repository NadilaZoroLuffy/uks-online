-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 02:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uks`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kunjungan`
--

CREATE TABLE `data_kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `keperluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kunjungan`
--

INSERT INTO `data_kunjungan` (`id_kunjungan`, `nama_lengkap`, `kelas`, `tanggal`, `keperluan`) VALUES
(3, 'euroski', 'XI RPL 1', '09-12-2022 : 02:32:45', 'sakit pusing'),
(4, 'jevon moreno', 'XI rpl 1', '09-12-2022 : 03:42:04', 'sakit mental'),
(5, 'euroski', 'XI rpl 1', '09-12-2022 : 03:42:31', 'sakit '),
(6, 'abaam', 'XI rpl 1', '09-12-2022 : 03:42:54', 'HIV'),
(9, 'asdn', '', '12-12-2022 : 13:05:14', ''),
(10, 'bagus ihsan', 'XI rpl 1', '12-12-2022 : 13:19:01', 'Jaga uks'),
(11, '', '', '21-12-2022 : 03:01:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `foto` text DEFAULT NULL,
  `jenis` enum('sirup','tablet','kapsul') NOT NULL,
  `stok` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `nama_obat`, `foto`, `jenis`, `stok`, `deskripsi`) VALUES
(4, 'panadol', 'th.jfif', 'kapsul', '10', 'Obat sakit kepala'),
(8, 'antimo', 'OIP (1).jfif', 'kapsul', '9', 'obat anti muntah '),
(9, 'obat pusing', 'obat.jpg', 'kapsul', '27', 'obat untuk meredakan pusing');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengambilan_obat`
--

CREATE TABLE `data_pengambilan_obat` (
  `id_pengambilan` int(11) NOT NULL,
  `waktu_pengambilan` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jenis_obat` enum('kapsul','tablet','sirup') NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jumlah_obat` varchar(100) NOT NULL,
  `status` enum('proses','terverifikasi','tertolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengambilan_obat`
--

INSERT INTO `data_pengambilan_obat` (`id_pengambilan`, `waktu_pengambilan`, `nama_lengkap`, `kelas`, `jenis_obat`, `nama_obat`, `jumlah_obat`, `status`) VALUES
(1, '2 mei jam 12:30', 'aditya', 'XI RPL 1', 'tablet', 'panadol', '1', 'tertolak'),
(2, '', 'Rafi', 'XI rpl 1', '', 'parasetamol', '3', 'terverifikasi'),
(4, 'skrng', 'abaam', 'rpl', '', 'obat pusing', '2', 'proses'),
(5, 'besok', 'jevon', 'XI rpl 1', 'kapsul', 'antimo', '999', 'terverifikasi'),
(6, 'nanti', 'bagus', 'xi rpl', 'kapsul', 'antimo', '1', 'tertolak'),
(7, '12-12-2022 : 08:07:45', 'Adit geming', 'XIRPL 1', 'kapsul', 'panadol', '2', 'terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` enum('Admin','Guru','Siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `password`, `roles`) VALUES
(1, 'jevon1', 'jevon morenoz', '123w3', 'Guru'),
(2, 'api', 'rafi maulana', '321', 'Admin'),
(3, 'testes', 'wat da hell', 'omaga', 'Siswa'),
(7, 'abc', 'coba', '123', 'Siswa'),
(8, 'kkk', 'aaa', '1232', 'Siswa'),
(9, 'user', 'aditttttt', '123', 'Siswa'),
(10, 'jeffreh', 'jeffreyqwe', '123abc', 'Siswa'),
(11, 'lagi', 'coba', 'awikwok', 'Siswa'),
(13, 'adot', 'user', '123', 'Siswa'),
(14, 'abdillah', 'user1', '123', 'Siswa'),
(15, 'ad', 'us', '123', 'Siswa'),
(16, 'userrr', 'nama', '321', 'Siswa'),
(18, 'ambatukam1', 'ambatukam', 'ambasing', 'Siswa'),
(19, 'jepon', 'jevon moreno', '123', 'Siswa'),
(20, 'adit', 'aditya rizky', '123', 'Siswa'),
(21, 'abaam', 'Abraham hendrik wuri', 'bams', 'Siswa'),
(22, 'baguss', 'bagus ihsan', '789', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kunjungan`
--
ALTER TABLE `data_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `data_pengambilan_obat`
--
ALTER TABLE `data_pengambilan_obat`
  ADD PRIMARY KEY (`id_pengambilan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kunjungan`
--
ALTER TABLE `data_kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_pengambilan_obat`
--
ALTER TABLE `data_pengambilan_obat`
  MODIFY `id_pengambilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
