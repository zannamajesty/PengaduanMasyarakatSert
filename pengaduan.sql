-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 18.13
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `ID_M` int(11) NOT NULL,
  `NIK_M` varchar(20) DEFAULT NULL,
  `NAMA_M` varchar(40) DEFAULT NULL,
  `USERNAME_M` varchar(40) DEFAULT NULL,
  `PASSWORD_M` varchar(40) DEFAULT NULL,
  `JK_M` varchar(15) NOT NULL,
  `TELP_M` varchar(15) DEFAULT NULL,
  `ALAMAT_M` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`ID_M`, `NIK_M`, `NAMA_M`, `USERNAME_M`, `PASSWORD_M`, `JK_M`, `TELP_M`, `ALAMAT_M`) VALUES
(1, '35152638728349', 'Steve', 'steve', 'steve', 'Laki-laki', '085755396659', 'Jl. Raya Buncitan No. 125'),
(2, '2839471928341284', 'Ferry Kurniawan', 'ferry', 'ferry', 'Perempuan', '028873928128', 'Sedati'),
(3, '3515261111222233', 'Demo Masyarakat', 'masyarakat', 'masyarakat123', 'Laki-laki', '081234567891', 'Kecamatan Tuban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `ID_PENGADUAN` int(11) NOT NULL,
  `ID_M` int(11) DEFAULT NULL,
  `TGL_PENGADUAN` datetime DEFAULT CURRENT_TIMESTAMP,
  `ISI_LAPORAN` text,
  `STATUS_PENGADUAN` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`ID_PENGADUAN`, `ID_M`, `TGL_PENGADUAN`, `ISI_LAPORAN`, `STATUS_PENGADUAN`) VALUES
(1, 1, '2021-06-15 00:00:00', 'awhdiuawgdgaigdgaiwdiua', 'Belum diproses'),
(2, 1, '2021-06-21 13:40:25', 'awdoaojwdojdaw', NULL),
(3, 1, NULL, 'lalala', 'Dalam proses'),
(4, 1, '0000-00-00 00:00:00', 'yeyay', 'Belum diproses'),
(5, 1, '0000-00-00 00:00:00', 'yeyay', 'Belum diproses'),
(6, 1, '2021-06-21 09:31:28', 'yahwdhawd', 'Belum diproses'),
(7, 1, '2021-06-21 14:32:28', 'dhuabiwd', 'Belum diproses'),
(8, 2, '2021-06-20 23:08:22', 'ojiaoowadioawda', 'Belum diproses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `ID_PETUGAS` int(11) NOT NULL,
  `NAMA_P` varchar(40) DEFAULT NULL,
  `USERNAME_P` varchar(40) DEFAULT NULL,
  `PASSWORD_P` varchar(40) DEFAULT NULL,
  `TELP_P` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`ID_PETUGAS`, `NAMA_P`, `USERNAME_P`, `PASSWORD_P`, `TELP_P`) VALUES
(1, 'Zanna', 'zanna', 'zanna', '0838381275430'),
(2, 'Admin Demo', 'admin', 'admin123', '081234567890');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`ID_M`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`ID_PENGADUAN`),
  ADD KEY `FK_MELAKUKAN` (`ID_M`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`ID_PETUGAS`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `ID_M` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `ID_PENGADUAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `ID_PETUGAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
