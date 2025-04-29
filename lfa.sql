-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2025 pada 01.34
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
-- Struktur dari tabel `detail_pengurusan`
--

CREATE TABLE `detail_pengurusan` (
  `id_detail_pengurusan` varchar(100) NOT NULL,
  `id_pengurusan` varchar(100) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `bpkb` int(11) NOT NULL,
  `stck` int(11) NOT NULL,
  `samsat_1` int(11) NOT NULL,
  `by_proses` int(11) NOT NULL,
  `jasa` int(11) NOT NULL,
  `built_up` int(11) NOT NULL,
  `samsat_2` int(11) NOT NULL,
  `pt_cv` int(11) NOT NULL,
  `non_npwp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pengurusan`
--

INSERT INTO `detail_pengurusan` (`id_detail_pengurusan`, `id_pengurusan`, `wilayah`, `bpkb`, `stck`, `samsat_1`, `by_proses`, `jasa`, `built_up`, `samsat_2`, `pt_cv`, `non_npwp`) VALUES
('056b5a2f-24aa-11f0-9ad4-c454445434d3', 'd2b0c478-23f9-11f0-b221-f8fe5ef7d437', 'Banjarmasin', 2000000, 1000000, 1000000, 1000000, 500000000, 0, 0, 0, 0),
('2b1922ed-23f8-11f0-b221-f8fe5ef7d437', '', 'Banjarmasin', 2000000, 2000000, 2000000, 0, 2000000, 2000000, 2000000, 2000000, 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` varchar(100) NOT NULL,
  `id_transaksi` varchar(100) NOT NULL,
  `id_pengurusan` varchar(100) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `bpkb` int(11) NOT NULL,
  `stck` int(11) NOT NULL,
  `samsat_1` int(11) NOT NULL,
  `by_proses` int(11) NOT NULL,
  `jasa` int(11) NOT NULL,
  `built_up` int(11) NOT NULL,
  `samsat_2` int(11) NOT NULL,
  `pt_cv` int(11) NOT NULL,
  `non_npwp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`) VALUES
('2af0a1cf-24c5-11f0-9ad4-c454445434d3', 'Syarif Firdaus', 'df', '08');

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
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `pimpinan` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_1` varchar(100) NOT NULL,
  `alamat_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_rekening`, `no_rekening`, `bank`, `pimpinan`, `nama_perusahaan`, `alamat_1`, `alamat_2`) VALUES
(1, 'CV. Lubna Faeyza Alfarizqi', '031.001828.3344', 'Bank Mandiri', 'Heriansyah', 'CV. Lubna Faeyza Alfarizqi', 'Jl. A. Yani KM 5,5 Komplek Saka Agung No. 120 RT/RW 01/01 Kelurahan Pemurus Dalam', 'Kecamatan Banjarmasin Selatan Kota Banjarmasin Kaliamntan Selatan 70248');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(100) NOT NULL,
  `no_transaksi` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pelanggan` varchar(100) NOT NULL,
  `status_payment` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `no_transaksi`, `tgl_transaksi`, `status`, `tgl_input`, `id_pelanggan`, `status_payment`) VALUES
('364a1ee6-24ff-11f0-ae3a-f8fe5ef7d437', 'LFA03VT729199A4', '2025-04-29', 2, '2025-04-29 14:12:21', '2af0a1cf-24c5-11f0-9ad4-c454445434d3', 2);

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
('3qr9uf0qhjf', 'aida', '$2y$10$L5wk/x14yQPPLSpvmyOqme8/RDnLhGvaNoogsEb1h8vEuoz04NTeS', 2),
('awdq2e', 'admin', '$2y$10$l/0ycWN.FbHPma2ejow0S.V3tN0i9l9t2yuiZ8LK82dUxxGWhbUf2', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pengurusan`
--
ALTER TABLE `detail_pengurusan`
  ADD PRIMARY KEY (`id_detail_pengurusan`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

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
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
