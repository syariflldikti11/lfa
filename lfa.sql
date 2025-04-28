-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2025 pada 01.26
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lfa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_baru`
--

CREATE TABLE `daftar_baru` (
  `id_daftar_baru` varchar(100) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `bpkb` int(11) NOT NULL,
  `stck` int(11) NOT NULL,
  `samsat_1` int(11) NOT NULL,
  `jasa` int(11) NOT NULL,
  `built_up` int(11) NOT NULL,
  `samsat_2` int(11) NOT NULL,
  `pt_cv` int(11) NOT NULL,
  `non_npwp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_baru`
--

INSERT INTO `daftar_baru` (`id_daftar_baru`, `wilayah`, `bpkb`, `stck`, `samsat_1`, `jasa`, `built_up`, `samsat_2`, `pt_cv`, `non_npwp`) VALUES
('2b1922ed-23f8-11f0-b221-f8fe5ef7d437', 'Banjarmasin', 2000000, 2000000, 2000000, 2000000, 2000000, 2000000, 2000000, 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengurusan`
--

CREATE TABLE `detail_pengurusan` (
  `id_pengurusan` varchar(100) NOT NULL,
  `id_detail_pengurusan` varchar(100) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `by_proses` int(11) NOT NULL,
  `jasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pengurusan`
--

INSERT INTO `detail_pengurusan` (`id_pengurusan`, `id_detail_pengurusan`, `wilayah`, `by_proses`, `jasa`) VALUES
('d2b0c478-23f9-11f0-b221-f8fe5ef7d437', 'eb9f3573-23fe-11f0-b221-f8fe5ef7d437', 'Banjarbarus', 500000, 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurusan`
--

CREATE TABLE `pengurusan` (
  `id_pengurusan` varchar(100) NOT NULL,
  `nama_pengurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengurusan`
--

INSERT INTO `pengurusan` (`id_pengurusan`, `nama_pengurusan`) VALUES
('d2b0c478-23f9-11f0-b221-f8fe5ef7d437', 'Perpanjang STNK R2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `akses`) VALUES
('2893yr0hfea', 'jaidi', '$2y$10$Jv2xT7eyQZl3odwYQAy.eugDc3c0E8qDTbc9oSKDSzpJbk9CZyMPi', 2),
('3qr9uf0qhjf', 'aida', '$2y$10$L5wk/x14yQPPLSpvmyOqme8/RDnLhGvaNoogsEb1h8vEuoz04NTeS', 2),
('awdq2e', 'admin', '$2y$10$l/0ycWN.FbHPma2ejow0S.V3tN0i9l9t2yuiZ8LK82dUxxGWhbUf2', 1),
('q3fafq', 'rika', '$2y$10$kZay9IAbvkwab.H/2TQqoeiXxgEW4wlJ0yfQF.BUmAWyPIEtQPuiK', 2),
('qerfdssfd', 'syarifullah', '$2y$10$d.8QME64Fj/nsxOfwFFobuaYPu6bOwIeoDR/lT3CHHDY4zN6Npl1S', 2),
('wefwegesvdzv', 'noor effendi', '$2y$10$KfHdBdSKnG.t4WLBXkS24uHytN7mh6WaIULMDcYC7IpuE76ijrbQ6', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_baru`
--
ALTER TABLE `daftar_baru`
  ADD PRIMARY KEY (`id_daftar_baru`);

--
-- Indeks untuk tabel `detail_pengurusan`
--
ALTER TABLE `detail_pengurusan`
  ADD PRIMARY KEY (`id_detail_pengurusan`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pengurusan`
--
ALTER TABLE `pengurusan`
  ADD PRIMARY KEY (`id_pengurusan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
