-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 16.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `game` varchar(255) NOT NULL,
  `Nick` varchar(255) DEFAULT NULL,
  `IDUser` int(11) DEFAULT NULL,
  `Server` varchar(255) DEFAULT NULL,
  `IDItem` int(11) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `IDItem` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`IDItem`, `Nama`, `Harga`) VALUES
(1, '86 dm', 19200),
(2, '172 dm', 38100),
(3, '257 dm', 57300),
(4, '344 dm', 76200),
(5, '429 dm', 95400),
(6, '514 dm', 114600),
(7, '716 dm', 153000),
(8, '1050 dm', 229500),
(9, '70 dm', 8772),
(10, '140 dm', 17544),
(11, '210 dm', 26316),
(12, '355 dm', 43860),
(13, '420 dm', 52632),
(14, '720 dm', 87720),
(15, '1000 dm', 122808),
(16, '1450 dm', 177036),
(17, '60 genesis crystals', 11968),
(18, 'blessing of the welkin moon', 60048),
(19, '330 genesis crystals', 60048),
(20, '1090 genesis crystals', 180036),
(21, '3880 genesis crystals', 599940),
(22, '8080 genesis crystals', 1199880),
(23, 'all pack genesis crystals', 2441722),
(24, '221 uc', 37721),
(25, '525 uc', 92828),
(26, '788 us', 139242),
(27, '1050 uc', 185655),
(28, '1375 uc', 232069),
(29, '1638 uc', 278482),
(30, '1900 uc', 324896),
(31, '2163 uc', 371309);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKItem` (`IDItem`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`IDItem`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `IDItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `FKItem` FOREIGN KEY (`IDItem`) REFERENCES `pesanan` (`IDItem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
