-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 21.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasis`
--

CREATE TABLE `imunisasis` (
  `id` int(11) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `nama_balita` varchar(255) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `imunisasis`
--

INSERT INTO `imunisasis` (`id`, `nama_ortu`, `nama_balita`, `agenda`, `tanggal_pelaksanaan`, `updated_at`, `created_at`) VALUES
(1, 'ortutambah', 'balitambah', 'agendatambah', 'sdfdsfsdfsdf', NULL, NULL),
(2, 'maria', 'karno', 'Balita', '2023-08-25', '2023-08-25 04:16:41', '2023-08-25 04:16:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(11) NOT NULL,
  `agenda_posyandu` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `tempat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `agenda_posyandu`, `tanggal`, `updated_at`, `created_at`, `tempat`, `status`) VALUES
(1, 'Balita', '2023-08-25', '2023-08-25 03:29:13', NULL, 'makale', 'ongoing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortus`
--

CREATE TABLE `ortus` (
  `id` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `nama_orangtua` varchar(255) NOT NULL,
  `umur_anak` varchar(255) NOT NULL,
  `berat0` int(11) NOT NULL,
  `berat1` int(11) NOT NULL,
  `berat2` int(11) NOT NULL,
  `berat3` int(11) NOT NULL,
  `berat4` int(11) NOT NULL,
  `berat5` int(11) NOT NULL,
  `berat6` int(11) NOT NULL,
  `berat7` int(11) NOT NULL,
  `berat8` int(11) NOT NULL,
  `berat9` int(11) NOT NULL,
  `berat10` int(11) NOT NULL,
  `berat11` int(11) NOT NULL,
  `berat12` int(11) NOT NULL,
  `berat13` int(11) NOT NULL,
  `berat14` int(11) NOT NULL,
  `berat15` int(11) NOT NULL,
  `berat16` int(11) NOT NULL,
  `berat17` int(11) NOT NULL,
  `berat18` int(11) NOT NULL,
  `berat19` int(11) NOT NULL,
  `berat20` int(11) NOT NULL,
  `berat21` int(11) NOT NULL,
  `berat22` int(11) NOT NULL,
  `berat23` int(11) NOT NULL,
  `berat24` int(11) NOT NULL,
  `tinggi0` int(11) NOT NULL,
  `tinggi1` int(11) NOT NULL,
  `tinggi2` int(11) NOT NULL,
  `tinggi3` int(11) NOT NULL,
  `tinggi4` int(11) NOT NULL,
  `tinggi5` int(11) NOT NULL,
  `tinggi6` int(11) NOT NULL,
  `tinggi7` int(11) NOT NULL,
  `tinggi8` int(11) NOT NULL,
  `tinggi9` int(11) NOT NULL,
  `tinggi10` int(11) NOT NULL,
  `tinggi11` int(11) NOT NULL,
  `tinggi12` int(11) NOT NULL,
  `tinggi13` int(11) NOT NULL,
  `tinggi14` int(11) NOT NULL,
  `tinggi15` int(11) NOT NULL,
  `tinggi16` int(11) NOT NULL,
  `tinggi17` int(11) NOT NULL,
  `tinggi18` int(11) NOT NULL,
  `tinggi19` int(11) NOT NULL,
  `tinggi20` int(11) NOT NULL,
  `tinggi21` int(11) NOT NULL,
  `tinggi22` int(11) NOT NULL,
  `tinggi23` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `tinggi24` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ortus`
--

INSERT INTO `ortus` (`id`, `nama_anak`, `jenis_kelamin`, `nama_orangtua`, `umur_anak`, `berat0`, `berat1`, `berat2`, `berat3`, `berat4`, `berat5`, `berat6`, `berat7`, `berat8`, `berat9`, `berat10`, `berat11`, `berat12`, `berat13`, `berat14`, `berat15`, `berat16`, `berat17`, `berat18`, `berat19`, `berat20`, `berat21`, `berat22`, `berat23`, `berat24`, `tinggi0`, `tinggi1`, `tinggi2`, `tinggi3`, `tinggi4`, `tinggi5`, `tinggi6`, `tinggi7`, `tinggi8`, `tinggi9`, `tinggi10`, `tinggi11`, `tinggi12`, `tinggi13`, `tinggi14`, `tinggi15`, `tinggi16`, `tinggi17`, `tinggi18`, `tinggi19`, `tinggi20`, `tinggi21`, `tinggi22`, `tinggi23`, `updated_at`, `created_at`, `tinggi24`) VALUES
(7, 'karno', 'laki-laki', 'maria', '4', 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-07-14 00:36:21', '2023-07-12 05:54:41', 0),
(9, 'junan', 'laki-laki', 'sumpu', '1', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-07-12 11:53:31', '2023-07-12 08:52:21', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `nama_balita` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `access`, `nama_balita`, `nama_ortu`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin', '', '', NULL, NULL),
(2, '085123123123', '12345678', 'ortu', 'karno', 'maria', '2023-07-12 10:55:37', NULL),
(5, '085340139120', '12345678', 'ortu', 'junan', 'katannun', '2023-07-12 10:55:53', '2023-07-12 10:55:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `imunisasis`
--
ALTER TABLE `imunisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ortus`
--
ALTER TABLE `ortus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `imunisasis`
--
ALTER TABLE `imunisasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ortus`
--
ALTER TABLE `ortus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
