-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 09 Jan 2020 pada 15.11
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
(2, 'kasir', 'kasir@gmail.com', 'c7911af3adbd12a035b289556d96470a', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `antrian_id` int(11) NOT NULL,
  `tiket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`antrian_id`, `tiket_id`) VALUES
(193, 169);

-- --------------------------------------------------------

--
-- Struktur dari tabel `board`
--

CREATE TABLE `board` (
  `board_id` int(11) NOT NULL,
  `tiket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `board`
--

INSERT INTO `board` (`board_id`, `tiket_id`) VALUES
(1, 160),
(2, 160),
(3, 160),
(4, 160),
(5, 160),
(6, 160),
(7, 160),
(8, 160),
(9, 160),
(10, 160),
(11, 160),
(12, 160),
(13, 160),
(14, 160),
(15, 168),
(16, 168),
(17, 168),
(18, 169),
(19, 169),
(20, 169);

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
(6, 2, '2', 1),
(7, NULL, '3', 0),
(8, 2, '4', 1);

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

--
-- Dumping data untuk tabel `main`
--

INSERT INTO `main` (`main_id`, `users_id`, `tiket_id`, `start`, `finish`, `durasi`, `status`) VALUES
(55, 15, 153, '2019-12-27 14:25:00', '2019-12-27 21:25:13', '00 Jam - 0 Menit', NULL),
(56, 16, 158, '2019-12-28 11:26:53', NULL, NULL, NULL);

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
(18, 4, 2, '2019-12-23 14:44:29', '2019-12-23 21:44:29', '2019-12-23'),
(67, 1, 2, '2019-12-24 12:28:13', '2019-12-24 19:28:13', '2019-12-24'),
(68, 2, 2, '2019-12-24 12:30:38', '2019-12-24 19:30:38', '2019-12-24'),
(69, 3, 2, '2019-12-24 12:30:39', '2019-12-24 19:30:39', '2019-12-24'),
(70, 4, 3, '2019-12-24 12:39:22', '2019-12-24 19:39:22', '2019-12-24'),
(71, 5, 3, '2019-12-24 12:39:24', '2019-12-24 19:39:24', '2019-12-24'),
(72, 6, 3, '2019-12-24 12:40:25', '2019-12-24 19:40:25', '2019-12-24'),
(73, 7, NULL, '2019-12-24 12:40:28', '2019-12-24 19:40:28', '2019-12-24'),
(74, 8, NULL, '2019-12-24 12:40:29', '2019-12-24 19:40:29', '2019-12-24'),
(83, 1, 1, '2019-12-26 09:44:57', '2019-12-26 16:44:57', '2019-12-26'),
(84, 2, 1, '2019-12-26 09:59:15', '2019-12-26 16:59:15', '2019-12-26'),
(85, 3, 1, '2019-12-26 10:16:11', '2019-12-26 17:16:11', '2019-12-26'),
(86, 4, 1, '2019-12-26 10:17:28', '2019-12-26 17:17:28', '2019-12-26'),
(105, 1, 1, '2019-12-27 05:58:37', '2019-12-27 12:58:37', '2019-12-27'),
(106, 2, 1, '2019-12-27 05:58:39', '2019-12-27 12:58:39', '2019-12-27'),
(107, 3, 1, '2019-12-27 05:58:40', '2019-12-27 12:58:40', '2019-12-27'),
(123, 4, 1, '2019-12-27 06:56:01', '2019-12-27 13:56:01', '2019-12-27'),
(124, 5, 1, '2019-12-27 06:56:02', '2019-12-27 13:56:02', '2019-12-27'),
(125, 6, 1, '2019-12-27 06:56:03', '2019-12-27 13:56:03', '2019-12-27'),
(138, 7, 4, '2019-12-27 07:19:00', '2019-12-27 14:19:00', '2019-12-27'),
(139, 8, 4, '2019-12-27 07:20:07', '2019-12-27 14:20:07', '2019-12-27'),
(140, 9, 4, '2019-12-27 07:20:08', '2019-12-27 14:20:08', '2019-12-27'),
(141, 10, 4, '2019-12-27 07:23:55', '2019-12-27 14:23:55', '2019-12-27'),
(142, 11, 1, '2019-12-27 07:24:17', '2019-12-27 14:24:17', '2019-12-27'),
(143, 12, 1, '2019-12-27 07:24:18', '2019-12-27 14:24:18', '2019-12-27'),
(144, 13, 4, '2019-12-27 07:24:30', '2019-12-27 14:24:30', '2019-12-27'),
(145, 14, 4, '2019-12-27 07:24:31', '2019-12-27 14:24:31', '2019-12-27'),
(146, 15, 2, '2019-12-27 09:16:02', '2019-12-27 16:16:02', '2019-12-27'),
(147, 16, 1, '2019-12-27 09:16:03', '2019-12-27 16:16:03', '2019-12-27'),
(148, 17, 4, '2019-12-27 09:16:04', '2019-12-27 16:16:04', '2019-12-27'),
(149, 18, 4, '2019-12-27 09:16:35', '2019-12-27 16:16:35', '2019-12-27'),
(150, 19, 4, '2019-12-27 09:24:36', '2019-12-27 16:24:36', '2019-12-27'),
(151, 20, 4, '2019-12-27 09:24:36', '2019-12-27 16:24:36', '2019-12-27'),
(152, 21, 4, '2019-12-27 09:24:54', '2019-12-27 16:24:54', '2019-12-27'),
(153, 22, 4, '2019-12-27 10:50:23', '2019-12-27 17:50:23', '2019-12-27'),
(154, 23, 4, '2019-12-27 13:03:03', '2019-12-27 20:03:03', '2019-12-27'),
(155, 24, NULL, '2019-12-27 13:03:06', '2019-12-27 20:03:06', '2019-12-27'),
(156, 25, NULL, '2019-12-27 13:03:07', '2019-12-27 20:03:07', '2019-12-27'),
(157, 1, 4, '2019-12-28 11:16:53', '2019-12-28 18:16:53', '2019-12-28'),
(158, 2, 4, '2019-12-28 11:16:53', '2019-12-28 18:16:53', '2019-12-28'),
(159, 3, 2, '2019-12-28 11:16:56', '2019-12-28 18:16:56', '2019-12-28'),
(160, 4, 2, '2019-12-28 11:16:57', '2019-12-28 18:16:57', '2019-12-28'),
(161, 5, 2, '2019-12-28 12:39:05', '2019-12-28 19:39:05', '2019-12-28'),
(162, 6, 2, '2019-12-28 12:39:06', '2019-12-28 19:39:06', '2019-12-28'),
(163, 7, 2, '2019-12-28 12:45:18', '2019-12-28 19:45:18', '2019-12-28'),
(164, 8, 2, '2019-12-28 12:45:19', '2019-12-28 19:45:19', '2019-12-28'),
(165, 9, 2, '2019-12-28 12:45:24', '2019-12-28 19:45:24', '2019-12-28'),
(166, 10, 2, '2019-12-28 12:45:31', '2019-12-28 19:45:31', '2019-12-28'),
(167, 11, 2, '2019-12-28 13:55:15', '2019-12-28 20:55:15', '2019-12-28'),
(168, 12, 2, '2019-12-28 13:55:47', '2019-12-28 20:55:47', '2019-12-28'),
(169, 13, 2, '2019-12-28 13:55:48', '2019-12-28 20:55:48', '2019-12-28'),
(170, 14, NULL, '2019-12-28 14:02:43', '2019-12-28 21:02:43', '2019-12-28'),
(171, 15, NULL, '2019-12-28 14:12:42', '2019-12-28 21:12:42', '2019-12-28'),
(172, 16, NULL, '2019-12-28 14:13:06', '2019-12-28 21:13:06', '2019-12-28'),
(173, 17, NULL, '2019-12-28 14:13:07', '2019-12-28 21:13:07', '2019-12-28'),
(174, 18, NULL, '2019-12-28 14:14:27', '2019-12-28 21:14:27', '2019-12-28'),
(175, 19, NULL, '2019-12-28 14:22:54', '2019-12-28 21:22:54', '2019-12-28'),
(176, 20, NULL, '2019-12-28 14:25:43', '2019-12-28 21:25:43', '2019-12-28');

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
(11, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(12, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(13, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(14, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(15, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL),
(16, 'Amad Hendro', 'ahendroo1@gmail.com', '083845786165', '(Offis Coworking space) Jl. Serayu Timur, RT.28/RW.08, Pandean, Taman, Kota Madiun, Jawa Timur 63133 ( sebelah thecemiland)', NULL, NULL);

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
-- Indeks untuk tabel `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`board_id`);

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `antrian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT untuk tabel `board`
--
ALTER TABLE `board`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `loket`
--
ALTER TABLE `loket`
  MODIFY `loket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `main`
--
ALTER TABLE `main`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `tiket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
