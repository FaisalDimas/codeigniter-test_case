-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 10.38
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '$2y$10$vCymQFYLHIdKfFX7dxGJv.fWuaQ9atoiW7AigPnX4iTVsouejOU0y', 'admin'),
(2, 'adminn', '$2y$10$VaExuNTnKsjOtQWIv4szqeVvRe4LlLHCM10ExJqLUm6UmUD5MUGmG', 'ASD'),
(3, 'qwe', '$2y$10$N/nT5xLR7EaA1O6Z9lqPoOVaKr0hTZfM4S8uENhFokQkjcn0fz3mi', 'qwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `foto`, `harga`, `deskripsi`) VALUES
(1, 'majoo Pro', 'standard_repo.png', '2750000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus harum rerum a ducimus deleniti illum ex.'),
(2, 'majoo Advance', 'paket-advance.png', '2750000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus harum rerum a ducimus deleniti illum ex.'),
(3, 'majoo Lifestyle', 'paket-lifestyle.png', '2750000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus harum rerum a ducimus deleniti illum ex.'),
(4, 'majoo Desktop', 'paket-desktop.png', '2750000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus harum rerum a ducimus deleniti illum ex.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
