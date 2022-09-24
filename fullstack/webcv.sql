-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2022 pada 13.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_single`
--

CREATE TABLE `blog_single` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `uploaded_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog_single`
--

INSERT INTO `blog_single` (`id`, `judul`, `slug`, `konten`, `penulis`, `sampul`, `created_at`, `uploaded_at`, `deleted_at`) VALUES
(1, 'Tujuan Cv. Gemilang Permata', 'Tujuan-Cv.Gemilang-Permata', 'Isi Penjelasan ', '', 'bg jumbotron2.jpg', NULL, NULL, NULL),
(2, 'Cv. Gemilang Permata bergerak di berbagai bidang', 'Cv.Gemilang-Permata-bergerak-di-berbagai-bidang', 'Isi Penjelasan', '', 'bg jumbotron2.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_single`
--

CREATE TABLE `event_single` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `uploaded_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event_single`
--

INSERT INTO `event_single` (`id`, `judul`, `slug`, `penulis`, `konten`, `sampul`, `created_at`, `uploaded_at`, `deleted_at`) VALUES
(1, 'cv gemilang permata', 'cv-gemilang-permata', 'faridh', 'isi penjelasan', 'bg jumbotron2.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `uploaded_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_cv`
--

CREATE TABLE `team_cv` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `uploaded_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog_single`
--
ALTER TABLE `blog_single`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event_single`
--
ALTER TABLE `event_single`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
