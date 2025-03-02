-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 04:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esistemjejakalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `created_date_admin` date NOT NULL,
  `status_admin` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama_alumni` varchar(100) NOT NULL,
  `pfp_alumni` text NOT NULL,
  `ic_alumni` varchar(15) NOT NULL,
  `email_alumni` varchar(75) NOT NULL,
  `no_tel_alumni` int(15) NOT NULL,
  `alamat_alumni` text NOT NULL,
  `jantina_alumni` varchar(10) NOT NULL,
  `id_kursus` int(11) NOT NULL,
  `password_alumni` text NOT NULL,
  `created_date_alumni` date NOT NULL,
  `status_alumni` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_alumni`
--

CREATE TABLE `info_alumni` (
  `id_info_alumni` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `alamat_belajar_alumni` text DEFAULT NULL,
  `alamat_bekerja_alumni` text DEFAULT NULL,
  `kursus_semasa_alumni` varchar(100) DEFAULT NULL,
  `pekerjaan_semasa_alumni` varchar(100) DEFAULT NULL,
  `tarikh_mula_belajar_alumni` date DEFAULT NULL,
  `tarikh_tamat_belajar_alumni` date DEFAULT NULL,
  `gaji_pendapatan_alumni` varchar(100) DEFAULT NULL,
  `last_updated_alumni` date NOT NULL,
  `status_alumni` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id_kursus` int(11) NOT NULL,
  `nama_kursus` varchar(100) NOT NULL,
  `bil_alumni_kursus` int(11) NOT NULL,
  `nama_kj_kursus` varchar(100) NOT NULL,
  `nama_kp_kursus` varchar(100) NOT NULL,
  `notel_kj_kursus` int(15) NOT NULL,
  `notel_kp_kursus` int(15) NOT NULL,
  `last_updated_kursus` date NOT NULL,
  `status_kursus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `info_alumni`
--
ALTER TABLE `info_alumni`
  ADD PRIMARY KEY (`id_info_alumni`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_alumni`
--
ALTER TABLE `info_alumni`
  MODIFY `id_info_alumni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kursus` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
