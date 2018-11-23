-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2018 pada 04.09
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `no` varchar(2) NOT NULL,
  `bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`no`, `bulan`) VALUES
('01', 'Januari'),
('02', 'Februari'),
('03', 'Maret'),
('04', 'April'),
('05', 'Mei'),
('06', 'Juni'),
('07', 'Juli'),
('08', 'Agustus'),
('09', 'September'),
('10', 'Oktober'),
('11', 'November'),
('12', 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemaah`
--

CREATE TABLE `jemaah` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jemaah`
--

INSERT INTO `jemaah` (`id`, `nama`, `jenis_kelamin`, `alamat`, `tanggal`) VALUES
(18402000, 'Husen Assidik', 'laki-laki', 'jln mangkoko indihiang tasikmalaya', '2018-09-25'),
(18402001, 'Intan sholihat', 'perempuan', 'paseh no 127 Kota tasikmalaya', '2017-08-23'),
(18402002, 'Hiban Amrulloh', 'laki-laki', 'Indihiang Tasikmalaya', '2013-08-21'),
(18402003, 'Yusi Azka SYahidah', 'perempuan', 'SIngaparna Tasikmalaya', '2018-05-18'),
(18402004, 'Laksamana Meigi', 'laki-laki', 'Jl Jajaway kecil no 18 Tasikmalaya', '2018-09-13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jemaah`
--
ALTER TABLE `jemaah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jemaah`
--
ALTER TABLE `jemaah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18402005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
