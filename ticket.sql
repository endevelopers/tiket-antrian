-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Des 2019 pada 13.04
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`account_id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'kasir', 'kasir@gmail.com', 'c7911af3adbd12a035b289556d96470a', 0),
(3, 'kasir 1', 'kasir_1@gmail.com', '6bd79f1ed6f5706eabd73ddcc27b06ea', 0),
(4, 'kasir 2', 'kasir_2@gmail.com', 'b4c3d022264f61f636711cf0e403373a', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `antrian_id` int(11) NOT NULL,
  `tiket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loket`
--

CREATE TABLE `loket` (
  `loket_id` int(11) NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `loket_no` varchar(11) DEFAULT NULL,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loket`
--

INSERT INTO `loket` (`loket_id`, `account_id`, `loket_no`, `status`) VALUES
(5, NULL, '1', 0),
(6, NULL, '2', 0),
(7, NULL, '3', 0),
(8, NULL, '4', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main`
--

CREATE TABLE `main` (
  `main_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `tiket_id` int(11) DEFAULT NULL,
  `start` timestamp NULL DEFAULT current_timestamp(),
  `finish` datetime DEFAULT NULL,
  `durasi` varchar(50) DEFAULT NULL,
  `status` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `tiket_id` int(11) NOT NULL,
  `tiket_no` int(50) DEFAULT NULL,
  `loket_no` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp(),
  `date_in` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`tiket_id`, `tiket_no`, `loket_no`, `create_at`, `update_at`, `date_in`) VALUES
(4, 1, 3, '2019-12-23 13:00:40', '2019-12-23 20:00:40', '2019-12-22'),
(5, 2, 2, '2019-12-23 13:00:55', '2019-12-23 20:00:55', '2019-12-22'),
(15, 1, 3, '2019-12-23 13:28:29', '2019-12-23 20:28:29', '2019-12-23'),
(16, 2, 2, '2019-12-23 13:28:30', '2019-12-23 20:28:30', '2019-12-23'),
(17, 3, 4, '2019-12-23 13:28:34', '2019-12-23 20:28:34', '2019-12-23'),
(18, 4, 2, '2019-12-23 14:44:29', '2019-12-23 21:44:29', '2019-12-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(1000) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`users_id`, `name`, `email`, `telp`, `alamat`, `create_at`, `update_at`) VALUES
(6, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(7, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(8, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(9, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(10, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(11, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`antrian_id`);

--
-- Indeks untuk tabel `loket`
--
ALTER TABLE `loket`
  ADD PRIMARY KEY (`loket_id`);

--
-- Indeks untuk tabel `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`main_id`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`tiket_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `antrian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `loket`
--
ALTER TABLE `loket`
  MODIFY `loket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `main`
--
ALTER TABLE `main`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `tiket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
