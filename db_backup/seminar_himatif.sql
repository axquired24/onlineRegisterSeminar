-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 05:41 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar_himatif`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `idPeserta` int(3) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tau_dari` varchar(20) NOT NULL,
  `pesan` tinytext NOT NULL,
  `spam` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`idPeserta`, `nama`, `asal`, `telepon`, `email`, `tau_dari`, `pesan`, `spam`) VALUES
(10, 'Percusha', 'Himatif UMS', '08963445238', 'percusha@ymail.com', 'Teman', 'kkk Waktu Daftar: 24-05-2014', 0),
(11, 'Albert', 'Lampung', '0896314405052', 'alfatihseptiawan@gmail.com', 'Pamflet', 'Pas Waktu Daftar: 07-05-2015', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`idPeserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `idPeserta` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
