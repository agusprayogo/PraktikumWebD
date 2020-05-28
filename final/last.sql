-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 01:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `last`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dsn-x-kls`
--

CREATE TABLE `dsn-x-kls` (
  `id` int(11) NOT NULL,
  `nipkls` int(11) NOT NULL,
  `kelaskls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `daya-tampung` int(11) NOT NULL,
  `jam-mulai` time NOT NULL,
  `durasi` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kuota` int(11) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mhs-x-kls`
--

CREATE TABLE `mhs-x-kls` (
  `id` int(11) NOT NULL,
  `nimkls` int(11) NOT NULL,
  `kelaskls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `dsn-x-kls`
--
ALTER TABLE `dsn-x-kls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nipkls` (`nipkls`),
  ADD KEY `kelaskls` (`kelaskls`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mhs-x-kls`
--
ALTER TABLE `mhs-x-kls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nimkls` (`nimkls`),
  ADD KEY `kelaskls` (`kelaskls`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dsn-x-kls`
--
ALTER TABLE `dsn-x-kls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mhs-x-kls`
--
ALTER TABLE `mhs-x-kls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsn-x-kls`
--
ALTER TABLE `dsn-x-kls`
  ADD CONSTRAINT `dsn-x-kls_ibfk_1` FOREIGN KEY (`nipkls`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `dsn-x-kls_ibfk_2` FOREIGN KEY (`kelaskls`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `mhs-x-kls`
--
ALTER TABLE `mhs-x-kls`
  ADD CONSTRAINT `mhs-x-kls_ibfk_1` FOREIGN KEY (`nimkls`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `mhs-x-kls_ibfk_2` FOREIGN KEY (`kelaskls`) REFERENCES `kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
