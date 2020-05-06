-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 05:42 PM
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
-- Database: `sorfil`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(19) NOT NULL,
  `nidn` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nidn`, `nama`, `email`) VALUES
('196401141994022001', '0014016403', 'Dra. Luh Gede Astuti,M.Kom.', 'lg.astuti@cs.unud.ac.id'),
('198403172019031005', '0817038401', 'I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs', 'anom.cp@unud.ac.id'),
('1984082920181113001', '0829088401', 'I Wayan Supriana, S.Si., M.Cs.', 'wayan.supriana@unud.ac.id'),
('1985091920181113001', '0819098502', 'Made Agung Raharja, S.Si., M.Cs.', 'made.agung@unud.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `telepon`, `status`) VALUES
(1708561074, 'Zhaqy Hikkammi Gullam Ramadhan', 'jln. Bingin Sari 3 no. 109', '6282122356764', 'aktif'),
(1708561075, 'Putu Pasek Wahyu Chandra Putra', 'Br. DInas Tengah Desa Ulakan, Kecamatan Manggis', '6285337001221', 'aktif'),
(1708561079, 'Agus Prayogo', 'Br. Tangkup, Tegallalang', '6281339524846', 'aktif'),
(1708561080, 'Rivaldo Julio Santos Soares', 'Jalan Tukad Badung Gang 17 No 117C Denpasar', '082340243973', 'tidak aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
