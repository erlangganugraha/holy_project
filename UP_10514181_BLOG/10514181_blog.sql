-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jan 2018 pada 09.27
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `10514181_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `idAkun` varchar(4) NOT NULL,
  `namaAkun` varchar(25) NOT NULL,
  `tipeAkun` enum('Dosen','Mahasiswa') NOT NULL,
  `statusAkun` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`idAkun`, `namaAkun`, `tipeAkun`, `statusAkun`) VALUES
('M001', 'Erlangga Nugraha', 'Dosen', 1),
('M002', 'Agung Sasuke', 'Mahasiswa', 0),
('M003', 'Elisabeth Margareth', 'Mahasiswa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `idArtikel` varchar(4) NOT NULL,
  `namaArtikel` varchar(25) NOT NULL,
  `waktuArtikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idAkun` varchar(4) NOT NULL,
  `idKategori` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`idArtikel`, `namaArtikel`, `waktuArtikel`, `idAkun`, `idKategori`) VALUES
('A001', 'Cerita Sang Legenda', '2018-01-02 01:21:44', 'M002', 'K02'),
('A003', 'Bitcoin Melonjak', '2018-01-25 22:52:52', 'M001', 'K03'),
('A004', 'Sore Senja', '2018-01-27 01:13:25', 'M003', 'K02'),
('A005', 'Malam Gelap', '2018-01-27 01:28:59', 'M002', 'K03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idKategori` varchar(4) NOT NULL,
  `namaKategori` varchar(20) NOT NULL,
  `ranahKategori` enum('Anak','Dewasa','Umum') NOT NULL,
  `statusKategori` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`, `ranahKategori`, `statusKategori`) VALUES
('K01', 'Kartun', 'Anak', 1),
('K02', 'Cerita rakyat', 'Umum', 1),
('K03', 'Cryptocurrency', 'Dewasa', 1),
('K04', 'Politik', 'Dewasa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`idArtikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
