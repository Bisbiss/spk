-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2019 pada 06.48
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calonpenerima`
--

CREATE TABLE `calonpenerima` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `usia` int(4) NOT NULL,
  `tanggungan` int(5) NOT NULL,
  `penghasilan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calonpenerima`
--

INSERT INTO `calonpenerima` (`id`, `nama`, `usia`, `tanggungan`, `penghasilan`) VALUES
(1, 'Robin', 22, 0, 1000000),
(2, 'Dial', 32, 5, 500000),
(3, 'Saks', 12, 0, 0),
(4, 'Adi', 50, 10, 1000000),
(5, 'Amir', 25, 5, 2000000),
(6, 'Ade', 20, 1, 1000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calonpenerima`
--
ALTER TABLE `calonpenerima`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calonpenerima`
--
ALTER TABLE `calonpenerima`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
