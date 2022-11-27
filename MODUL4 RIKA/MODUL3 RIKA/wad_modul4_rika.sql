-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 03:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_rika`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_ivan_table`
--

CREATE TABLE `showroom_ivan_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `showroom_rika_table`
--

CREATE TABLE `showroom_rika_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_rika`
--

CREATE TABLE `user_rika` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rika`
--

INSERT INTO `user_rika` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(18, 'rika', 'nurariqahmauliani177@gmail.com', '12345', '081243084972'),
(19, 'ddd', 'hhh@gmail.com', 'qwerty', '2345432'),
(20, 'ivan', 'ivan@gmail.com', 'qwerty', '2345432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_ivan_table`
--
ALTER TABLE `showroom_ivan_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `showroom_rika_table`
--
ALTER TABLE `showroom_rika_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_rika`
--
ALTER TABLE `user_rika`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_ivan_table`
--
ALTER TABLE `showroom_ivan_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showroom_rika_table`
--
ALTER TABLE `showroom_rika_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_rika`
--
ALTER TABLE `user_rika`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
