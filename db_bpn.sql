-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2018 pada 00.25
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datawarkah`
--

CREATE TABLE `tbl_datawarkah` (
  `id` int(11) NOT NULL,
  `no_warkah` varchar(30) NOT NULL,
  `no_box` varchar(30) NOT NULL,
  `tahun` varchar(15) NOT NULL,
  `lokasi_ruang` varchar(40) NOT NULL,
  `rak` varchar(20) NOT NULL,
  `baris` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `inputan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_datawarkah`
--

INSERT INTO `tbl_datawarkah` (`id`, `no_warkah`, `no_box`, `tahun`, `lokasi_ruang`, `rak`, `baris`, `posisi`, `foto`, `inputan`) VALUES
(3, 'W10081996/22/11 edited', '201 edited', '2018', '20C edited', '10A edited', '2 edited', 'd edited', '28012018161512images.jpg', 'admin'),
(6, 'W10081996/22/12', 'XAXAXA', '2011', 'XXXX', 'XXX', 'XXX', 'XXX', '28012018163711100_0394.jpg', 'admin'),
(7, 'Wd', 'd', '2018', 'd', 'd', 'd', 'd', '28012018180439images.jpg', 'admin'),
(14, 'Wdssd', 'asda', '2019', 'sdas', 'sadasasd', 'asdas', 'asd', '28012018181030images.jpg', 'admin'),
(15, 'Wdssd', 'asda', '2019', 'sdas', 'sadasasd', 'asdas', 'asd', '28012018181030images.jpg', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` longtext NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `nik`, `nama`, `alamat`, `no_hp`, `foto`) VALUES
(1, 'admin', 'admin', '001', 'Abdurohman', 'Jl.....Rt.. Rw.. Dusun.. Karawang Jawa Barat', '12345678', '11112017095406download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_datawarkah`
--
ALTER TABLE `tbl_datawarkah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_datawarkah`
--
ALTER TABLE `tbl_datawarkah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
