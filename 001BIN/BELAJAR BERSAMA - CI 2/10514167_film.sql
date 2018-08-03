-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 10:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10514167_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `idFilm` varchar(3) NOT NULL,
  `judulFilm` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  `durasiFilm` int(100) NOT NULL,
  `stokFilm` int(100) NOT NULL,
  `idJenis` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`idFilm`, `judulFilm`, `tahun`, `durasiFilm`, `stokFilm`, `idJenis`) VALUES
('F03', 'The Social Network', 2010, 1, 5, 'J02'),
('F04', 'Furious 7', 2015, 2, 5, 'J01'),
('F99', 'Melayu', 2010, 2, 21, 'J03');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `idJenis` varchar(3) NOT NULL,
  `namaJenis` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `idKategori` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`idJenis`, `namaJenis`, `status`, `idKategori`) VALUES
('J01', 'Action', 'Aktif', 'K03'),
('J02', 'Biography', 'Aktif', 'K03'),
('J03', 'Drama', 'Aktif', 'K02'),
('J04', 'Animation', 'Aktif', 'K01');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` varchar(3) NOT NULL,
  `namaKategori` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`, `status`) VALUES
('K01', 'Anak', 'Aktif'),
('K02', 'Remaja', 'Aktif'),
('K03', 'Dewasa', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idFilm`),
  ADD KEY `idJenis` (`idJenis`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`idJenis`),
  ADD KEY `idKategori` (`idKategori`),
  ADD KEY `idKategori_2` (`idKategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
