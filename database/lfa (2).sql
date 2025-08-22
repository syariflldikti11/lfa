-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2025 pada 02.30
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
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `judul`, `isi`, `file`, `urutan`) VALUES
(1, 'CV. Lubna Faeyza Alfarizqy', 'Kami berkomitmen memberikan kemudahan pemenuhan kewajiban untuk pembayaran pajak kendaraan bermotor', '217fa66bcd06ab8e6eef6f49a05d7339.png', 0);

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
  `non_npwp` int(11) NOT NULL,
  `perpanjangan_stck` int(11) NOT NULL,
  `nopol_pilihan` int(11) NOT NULL,
  `penalti_wilayah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pengurusan`
--

INSERT INTO `detail_pengurusan` (`id_detail_pengurusan`, `id_pengurusan`, `wilayah`, `bpkb`, `stck`, `samsat_1`, `by_proses`, `jasa`, `built_up`, `samsat_2`, `pt_cv`, `non_npwp`, `perpanjangan_stck`, `nopol_pilihan`, `penalti_wilayah`) VALUES
('03480dd5-41e5-11f0-9fd0-09f5b6ae454f', 'e960ec58-41e4-11f0-9fd0-09f5b6ae454f', 'BANJARMASIN (BJM1)', 0, 0, 0, 100000, 0, 0, 0, 0, 0, 0, 0, 0),
('056b5a2f-24aa-11f0-9ad4-c454445434d3', 'd2b0c478-23f9-11f0-b221-f8fe5ef7d437', 'Banjarmasin', 2000000, 1000000, 1000000, 1000000, 500000000, 0, 0, 0, 0, 0, 0, 0),
('0a83862d-406a-11f0-9fd0-09f5b6ae454f', '0d0da534-4060-11f0-9fd0-09f5b6ae454f', 'BANJARMASIN', 0, 0, 0, 0, 80000, 0, 0, 0, 0, 0, 0, 0),
('2b1922ed-23f8-11f0-b221-f8fe5ef7d437', '', 'Banjarmasin', 2000000, 2000000, 2000000, 0, 2000000, 2000000, 2000000, 2000000, 2000000, 0, 0, 0),
('65130466-263c-11f0-b36c-f8fe5ef7d437', '226139eb-2639-11f0-b36c-f8fe5ef7d437', 'Hulu Sungai Tengah (Barabai)', 950000, 0, 750000, 500000, 100000, 0, 0, 0, 0, 0, 0, 0),
('6b1676b8-6b83-11f0-9cce-00d013ef7478', '2a726b06-2639-11f0-b36c-f8fe5ef7d437', 'BANJARMASIN (BJM1)', 1500000, 0, 1400000, 0, 100000, 0, 0, 0, 0, 0, 0, 0),
('709d39bc-411a-11f0-9fd0-09f5b6ae454f', '0411abd6-411a-11f0-9fd0-09f5b6ae454f', 'BANJAR (MARTAPURA)', 400000, 0, 1200000, 0, 100000, 0, 0, 0, 0, 0, 0, 0),
('885a7457-357e-11f0-a6cc-1c4c28e5066a', '18f5ea68-2639-11f0-b36c-f8fe5ef7d437', 'Banjarmasin', 500000, 1000000, 1000000, 500000, 1000000, 0, 0, 0, 0, 0, 0, 0),
('d0b7431d-357e-11f0-a6cc-1c4c28e5066a', '18f5ea68-2639-11f0-b36c-f8fe5ef7d437', 'Tanjung', 1000000, 1000000, 1000000, 500000, 2000000, 0, 0, 0, 0, 0, 0, 0),
('e6848668-5085-11f0-9cce-00d013ef7478', '9fd84325-4060-11f0-9fd0-09f5b6ae454f', 'Kota Tangerang Selatan', 0, 0, 1750000, 0, 100000, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tanda_terima`
--

CREATE TABLE `detail_tanda_terima` (
  `id_detail_tanda_terima` varchar(100) NOT NULL,
  `id_detail_transaksi` varchar(100) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `id_tanda_terima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_tanda_terima`
--

INSERT INTO `detail_tanda_terima` (`id_detail_tanda_terima`, `id_detail_transaksi`, `dokumen`, `id_tanda_terima`) VALUES
('06e3548e-70d1-11f0-a699-f8fe5ef7d437', 'cbd5e35e-41e5-11f0-9fd0-09f5b6ae454f', 'sd', 'f8e39abe-70d0-11f0-a699-f8fe5ef7d437'),
('2636376d-7020-11f0-a699-f8fe5ef7d437', 'cbd5e35e-41e5-11f0-9fd0-09f5b6ae454f', 'Pajak,BPKB, STNK', '1ad79d1f-7020-11f0-a699-f8fe5ef7d437');

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
  `non_npwp` int(11) NOT NULL,
  `perpanjangan_stck` int(11) NOT NULL,
  `nopol_pilihan` int(11) NOT NULL,
  `penalti_wilayah` int(11) NOT NULL,
  `bbn_kb` int(11) NOT NULL,
  `opsen_bbnkb` int(11) NOT NULL,
  `pkb` int(11) NOT NULL,
  `opsen_pkb` int(11) NOT NULL,
  `swdkllj` int(11) NOT NULL,
  `pnbpstnk` int(11) NOT NULL,
  `pnbptnkb` int(11) NOT NULL,
  `no_faktur` varchar(30) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tahun_buat` int(8) NOT NULL,
  `tahun_rakit` int(8) NOT NULL,
  `silinder` varchar(20) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `bahan_bakar` varchar(20) NOT NULL,
  `no_rangka` varchar(30) NOT NULL,
  `no_mesin` varchar(30) NOT NULL,
  `pemilik_1` varchar(50) NOT NULL,
  `pemilik_2` varchar(50) NOT NULL,
  `alamat_pemilik_1` varchar(100) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kode_pos` int(8) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `atpm` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `jumlah_roda` tinyint(4) NOT NULL,
  `jumlah_sumbu` tinyint(4) NOT NULL,
  `no_sut` varchar(50) NOT NULL,
  `no_tpt` varchar(50) NOT NULL,
  `no_pib` varchar(50) NOT NULL,
  `no_form_ab` varchar(50) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_pengurusan`, `wilayah`, `bpkb`, `stck`, `samsat_1`, `by_proses`, `jasa`, `built_up`, `samsat_2`, `pt_cv`, `non_npwp`, `perpanjangan_stck`, `nopol_pilihan`, `penalti_wilayah`, `bbn_kb`, `opsen_bbnkb`, `pkb`, `opsen_pkb`, `swdkllj`, `pnbpstnk`, `pnbptnkb`, `no_faktur`, `tgl_faktur`, `nopol`, `merk`, `jenis`, `tipe`, `tahun_buat`, `tahun_rakit`, `silinder`, `warna`, `bahan_bakar`, `no_rangka`, `no_mesin`, `pemilik_1`, `pemilik_2`, `alamat_pemilik_1`, `kec`, `kab`, `kode_pos`, `pekerjaan`, `no_ktp`, `atpm`, `model`, `jumlah_roda`, `jumlah_sumbu`, `no_sut`, `no_tpt`, `no_pib`, `no_form_ab`, `tgl_input`) VALUES
('3e0e9988-406b-11f0-9fd0-09f5b6ae454f', '9354abfe-406a-11f0-9fd0-09f5b6ae454f', '0d0da534-4060-11f0-9fd0-09f5b6ae454f', 'BANJARMASIN', 0, 0, 0, 0, 80000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 101700, 67200, 35000, 0, 0, '', '0000-00-00', 'DA 6302 AA', 'HONDA', 'SEPEDA MOTOR', 'NC11CF1C A/T', 2014, 2014, '', 'MERAH KREM', 'BENSIN', 'MH1JFG116EK276307', 'JFG1E1274258', 'AKHMAD RIFKANI', '', '', '', '', 0, '', '', '', 'SCOOTER', 0, 0, '', '', '', '', '2025-06-03 11:09:39'),
('4e43518b-411c-11f0-9fd0-09f5b6ae454f', 'eda0c77c-411b-11f0-9fd0-09f5b6ae454f', '0411abd6-411a-11f0-9fd0-09f5b6ae454f', 'BANJAR (MARTAPURA)', 400000, 0, 1200000, 0, 100000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1653800, 1091600, 143000, 0, 0, '', '0000-00-00', 'DA 1396 OB', 'DAIHATSU', 'MOBIL PENUMPANG', 'TERIOS 1.5 X M/T', 2024, 2024, '1496', 'PUTIH', 'BENSIN', 'MHKG8FA1JRK052870', '2NR4C62996', 'PT. MULTI RENTALINDO', '', 'LIVING PLAZA BANJARMASIN JL. A. YANI KM.9.311 KEL. MANDARSARI ', 'KERTAK HANYAR', 'BANJAR', 0, '', '', '', 'MINIBUS', 0, 0, '', '', '', '', '2025-06-04 08:17:07'),
('64d7e172-4790-11f0-9fd0-09f5b6ae454f', '14b88acb-4790-11f0-9fd0-09f5b6ae454f', '0d0da534-4060-11f0-9fd0-09f5b6ae454f', 'BANJARMASIN', 0, 0, 0, 0, 80000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1000000, 0, 0, 0, 0, 'xx', '0000-00-00', 'Da 123 ABC', 'HONDA', 'SEPEDA MOTOR', 'SPRINT S 150', 0, 0, '', '', '', '124FD', 'NNOND90', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', '2025-06-12 13:23:14'),
('6edf0b00-4063-11f0-9fd0-09f5b6ae454f', 'f9d1dad9-4061-11f0-9fd0-09f5b6ae454f', '226139eb-2639-11f0-b36c-f8fe5ef7d437', 'Hulu Sungai Tengah (Barabai)', 950000, 0, 750000, 500000, 100000, 0, 0, 0, 0, 0, 0, 0, 3349500, 2210700, 381600, 251900, 35000, 0, 0, 'F160000 312025', '2025-05-23', 'DA 2175 EA', 'VESPA', 'SEPEDA MOTOR', 'SPRINT S 150', 2024, 2024, '154', 'PUTIH', 'BENSIN', 'RP8MD1207RV016931', 'M82MM 5032914', 'EFNA MAULIDIA', '', 'BATANG BAHALANG RT.002 RW.001 KEL.BATANG BAHALANG ', 'LABUAN AMAS SELATAN', 'HULU SUNGAI TENGAH', 0, 'WIRASWASTA', '', '', 'SCOOTER', 0, 0, '', '', '', '', '2025-06-03 10:13:45'),
('816b260b-263c-11f0-b36c-f8fe5ef7d437', 'e72ff88b-262c-11f0-b36c-f8fe5ef7d437', '226139eb-2639-11f0-b36c-f8fe5ef7d437', 'Banjarmasin', 1000000, 1000000, 1000000, 500000, 100000, 0, 0, 0, 0, 0, 0, 0, 1000000, 100000, 1000000, 100000, 20000, 1000000, 1000000, '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', '2025-05-01 03:29:35'),
('8221e7fa-2567-11f0-8358-c454445434d3', '364a1ee6-24ff-11f0-ae3a-f8fe5ef7d437', 'd2b0c478-23f9-11f0-b221-f8fe5ef7d437', 'Banjarmasin', 2000, 974000, 1000000, 1000000, 2000000, 0, 60, 0, 50, 0, 0, 0, 100, 200, 300, 400, 500, 600, 700, 'a', '0000-00-00', 'cs', 'd', 'e', 'f', 200, 300, '1000', 'o', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 123, 's', 't', 'w', 'g', 3, 2, 'z', 'aa', 'bb', 'cc', '2025-04-30 04:09:37'),
('8f668fcc-5086-11f0-9cce-00d013ef7478', '2b2b54df-5085-11f0-9cce-00d013ef7478', '9fd84325-4060-11f0-9fd0-09f5b6ae454f', 'Kota Tangerang Selatan', 0, 0, 1750000, 0, 100000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 'B 2244 NFC', 'SUZUKI', 'MOBIL PENUMPANG', 'XL7415F GL (4X2) M/T', 2023, 2023, '1462 CC', 'ABU ABU ME', 'BENSIN', 'MHYANC22SPJ108584', 'K15BT1574010', 'ULFA YUNITA', '', 'PONDOK SALAK INDAH BLOK A-2/7 RT.004 RW.003 KEL. BAKTI JAYA', 'SETU', 'TANGERANG SELATAN', 0, '', '', '', 'MINIBUS', 0, 0, '', '', '', '', '2025-06-23 23:05:31'),
('91b7d020-4790-11f0-9fd0-09f5b6ae454f', '14b88acb-4790-11f0-9fd0-09f5b6ae454f', '0d0da534-4060-11f0-9fd0-09f5b6ae454f', 'BANJARMASIN', 0, 0, 0, 0, 80000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1000000, 0, 0, 0, 0, 'dfdf', '0000-00-00', 'DA 2175 EA', 'HONDA', 'SEPEDA MOTOR', 'Y1G02N02L0 A/T', 0, 0, '', '', '', '25tef', '35tr', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', '2025-06-12 13:24:29'),
('92dd1168-357f-11f0-a6cc-1c4c28e5066a', '03f97039-357f-11f0-a6cc-1c4c28e5066a', '18f5ea68-2639-11f0-b36c-f8fe5ef7d437', 'Banjarmasin', 500000, 1000000, 1000000, 500000, 1000000, 0, 0, 0, 0, 0, 0, 0, 1000000, 200000, 300000, 100000, 0, 0, 0, '1y68y83', '2025-05-20', 'da 123', 'toyota', 'sedan', 'xx', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 'xx', 0, 0, '', '', '', '', '2025-05-20 13:37:08'),
('a5e62e0d-2589-11f0-8358-c454445434d3', '364a1ee6-24ff-11f0-ae3a-f8fe5ef7d437', 'd2b0c478-23f9-11f0-b221-f8fe5ef7d437', 'Banjarmasin', 2000000, 1000000, 1000000, 1000000, 2000000, 500000, 500000, 500000, 500000, 0, 0, 0, 2000000, 2000000, 2000000, 2000000, 2000000, 2000000, 2000000, 's', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', '2025-04-30 06:09:17'),
('aa1e5498-411b-11f0-9fd0-09f5b6ae454f', 'eb4c8bf6-411a-11f0-9fd0-09f5b6ae454f', '0411abd6-411a-11f0-9fd0-09f5b6ae454f', 'BANJAR (MARTAPURA)', 400000, 0, 1200000, 0, 100000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1134000, 748500, 143000, 0, 0, '', '0000-00-00', 'DA 1807 BP', 'DAIHATSU', 'MOBIL PENUMPANG', 'SIGRA 1.2 R AT', 2022, 2022, '1197', 'PUTIH', 'BENSIN', 'MHKS6GK6JNJ023188', '3NRH675449', 'PT. MULTI RENTALINDO', '', 'LIVING PLAZA BANJARMASIN JL. A. YANI KM.9.311 KEL. MANDARSARI ', 'KERTAK HANYAR', 'BANJAR', 0, '', '', '', 'MINIBUS', 0, 0, '', '', '', '', '2025-06-04 08:12:32'),
('cbd5e35e-41e5-11f0-9fd0-09f5b6ae454f', '0ebb1c83-41e5-11f0-9fd0-09f5b6ae454f', 'e960ec58-41e4-11f0-9fd0-09f5b6ae454f', 'BANJARMASIN (BJM1)', 0, 0, 0, 100000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 'A 4427 XAX', 'HONDA', 'SEPEDA MOTOR', 'Y1G02N02L0 A/T', 2015, 2015, '110', 'PUTIH', 'BENSIN', 'MH1JFS119FK086356', 'JFS1E1084388', 'PT. CITRA MANDIRI KENCANA', '', 'JL. RAYA PEMDA NO. 58 TIGA RAKSA KEL. BUDI MULYA', 'CIKUPA', 'TANGERANG', 0, '', '', '', 'SOLO', 0, 0, '', '', '', '', '2025-06-05 08:19:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`, `tgl_input`) VALUES
('175e73bf-5085-11f0-9cce-00d013ef7478', 'Yessie Pramufernie, S.SI', 'Jl. BIP Komp. Lampau Permata Hijau/15 RT. 036 Banjarmasin', '08121040468', '2025-06-23 22:55:00'),
('5a19bc0b-406a-11f0-9fd0-09f5b6ae454f', 'IHDA', 'BANJARMASIN', '083152962742', '2025-06-03 11:03:17'),
('da2d9996-411a-11f0-9fd0-09f5b6ae454f', 'PT. MULTI RENTALINDO', 'LIVING PLAZA BANJARMASIN JL. A. YANI KM. 9.311 KEL. MANDARSARI KEC. KERTAK HANYAR KAB. BANJAR', '083189971273', '2025-06-04 08:06:43'),
('db28b447-4061-11f0-9fd0-09f5b6ae454f', 'Vespa Matic Kalimantan', 'Banjarbaru', '081250905170', '2025-06-03 10:02:28'),
('dc7c1360-41e4-11f0-9fd0-09f5b6ae454f', 'PT CITRA MANDIRI KENCANA', 'JL. RAYA PEMDA NO. 58  TIGA RAKSA KEL. BUDI MULYA KEC. CIKUPA KAB. TANGERANG', '082154179688', '2025-06-05 08:12:45');

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
('0411abd6-411a-11f0-9fd0-09f5b6ae454f', 'Perubahan Identitas'),
('0d0da534-4060-11f0-9fd0-09f5b6ae454f', 'Pajak Tahunan R2'),
('18f5ea68-2639-11f0-b36c-f8fe5ef7d437', 'Daftar Baru BBN1 R4'),
('226139eb-2639-11f0-b36c-f8fe5ef7d437', 'Daftar Baru BBN1 R2'),
('2a726b06-2639-11f0-b36c-f8fe5ef7d437', 'Daftar BBN2 R4'),
('389be9f5-4060-11f0-9fd0-09f5b6ae454f', 'Pajak 5 Tahun R4'),
('4284bd88-4060-11f0-9fd0-09f5b6ae454f', 'Pajak 5 Tahun R2'),
('7452ef89-4060-11f0-9fd0-09f5b6ae454f', 'Duplikat STNK R4'),
('7bc7eb64-4060-11f0-9fd0-09f5b6ae454f', 'Duplikat STNK R2'),
('8424a21b-4060-11f0-9fd0-09f5b6ae454f', 'Duplikat BPKB R4'),
('8a6d6abd-4060-11f0-9fd0-09f5b6ae454f', 'Duplikat BPKB R2'),
('9fd84325-4060-11f0-9fd0-09f5b6ae454f', 'Mutasi R4'),
('a67a40a5-4060-11f0-9fd0-09f5b6ae454f', 'Mutasi R2'),
('d2b0c478-23f9-11f0-b221-f8fe5ef7d437', 'Daftar BBN2 R2'),
('e8844525-2638-11f0-b36c-f8fe5ef7d437', 'Pajak Tahunan R4'),
('e960ec58-41e4-11f0-9fd0-09f5b6ae454f', 'CEK FISIK BANTUAN');

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
  `alamat_2` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_rekening`, `no_rekening`, `bank`, `pimpinan`, `nama_perusahaan`, `alamat_1`, `alamat_2`, `no_hp`, `email`) VALUES
(1, 'Lubna Faeyza Alfarizqy CV', '031.001828.3344', 'Bank Mandiri', 'Heriansyah', 'CV. Lubna Faeyza Alfarizqy', 'Jl. A. Yani KM 5,5 Komplek Saka Agung No. 120 RT/RW 01/01 Kelurahan Pemurus Dalam', 'Kecamatan Banjarmasin Selatan Kota Banjarmasin Kalimantan Selatan 70248', '082256045757', 'lubnafaeyzaalfarizqy23@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanda_terima`
--

CREATE TABLE `tanda_terima` (
  `id_tanda_terima` varchar(100) NOT NULL,
  `tgl_tanda_terima` date NOT NULL,
  `no_tanda_terima` int(11) NOT NULL,
  `id_transaksi` varchar(100) NOT NULL,
  `tgl_input_tt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanda_terima`
--

INSERT INTO `tanda_terima` (`id_tanda_terima`, `tgl_tanda_terima`, `no_tanda_terima`, `id_transaksi`, `tgl_input_tt`) VALUES
('1ad79d1f-7020-11f0-a699-f8fe5ef7d437', '2025-08-04', 2, '0ebb1c83-41e5-11f0-9fd0-09f5b6ae454f', '2025-08-03 04:12:04'),
('f8e39abe-70d0-11f0-a699-f8fe5ef7d437', '2025-08-21', 3, '0ebb1c83-41e5-11f0-9fd0-09f5b6ae454f', '2025-08-04 01:18:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(100) NOT NULL,
  `no_transaksi` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_pelanggan` varchar(100) NOT NULL,
  `status_payment` tinyint(4) NOT NULL DEFAULT 1,
  `total` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `pajak` varchar(40) NOT NULL,
  `nilai` int(11) NOT NULL,
  `catatan_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `no_transaksi`, `tgl_transaksi`, `status`, `tgl_input`, `id_pelanggan`, `status_payment`, `total`, `invoice`, `pajak`, `nilai`, `catatan_pelanggan`) VALUES
('0ebb1c83-41e5-11f0-9fd0-09f5b6ae454f', 'LFA08WZL0509ZMD', '2025-06-05', 2, '2025-06-05 08:14:09', 'dc7c1360-41e4-11f0-9fd0-09f5b6ae454f', 2, 100000, 8, '', 4, ''),
('2b2b54df-5085-11f0-9cce-00d013ef7478', 'LFA10PRE2333SAG', '2025-06-23', 1, '2025-06-23 22:55:33', '175e73bf-5085-11f0-9cce-00d013ef7478', 1, 1850000, 10, 'Bayar Sendiri', 3, ''),
('4131b947-7eef-11f0-a699-f8fe5ef7d437', 'LFA02NIA22445SO', '2025-08-22', 1, '2025-08-22 00:28:44', '175e73bf-5085-11f0-9cce-00d013ef7478', 1, 0, 12, 'Dibayar Pelanggan', 0, ''),
('7f69da79-6b83-11f0-9cce-00d013ef7478', 'LFA07SHC2837DOE', '2025-07-28', 1, '2025-07-28 07:21:37', '175e73bf-5085-11f0-9cce-00d013ef7478', 1, 0, 11, 'Bayar Sendiri', 4, ''),
('9354abfe-406a-11f0-9fd0-09f5b6ae454f', 'LFA113XL0353Y98', '2025-05-24', 2, '2025-06-03 11:04:53', '5a19bc0b-406a-11f0-9fd0-09f5b6ae454f', 2, 283900, 5, '', 2, ''),
('eb4c8bf6-411a-11f0-9fd0-09f5b6ae454f', 'LFA087WH0412PEV', '2025-06-04', 2, '2025-06-04 08:07:12', 'da2d9996-411a-11f0-9fd0-09f5b6ae454f', 2, 3725500, 6, 'Dibayar Pelanggan', 4, ''),
('eda0c77c-411b-11f0-9fd0-09f5b6ae454f', 'LFA08PJ70425CBJ', '2025-06-04', 2, '2025-06-04 08:14:25', 'da2d9996-411a-11f0-9fd0-09f5b6ae454f', 2, 4588400, 7, 'Dibayar Pelanggan', 3, ''),
('f9d1dad9-4061-11f0-9fd0-09f5b6ae454f', 'LFA10N3103196C3', '2025-06-02', 2, '2025-06-03 10:03:19', 'db28b447-4061-11f0-9fd0-09f5b6ae454f', 2, 8528700, 4, '', 4, '');

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
('887f8392-4793-11f0-9fd0-09f5b6ae454f', 'budi', '$2y$10$RlPd4l0qf.DR0pwOSMLvBu8f5RNiYYVYf441i1oQg1MmnGP9vxTBy', 2),
('8e214f9f-403d-11f0-9a2e-c454445434d3', 'user', '$2y$10$6iwwzqpbo.kEiYGqfzC/s.2FfQ95mfCJbc2DlTjNRREvKzZIlr1e6', 2),
('aeaffa99-70cf-11f0-a699-f8fe5ef7d437', 'lisa', '$2y$10$1gpq1TfWLJYQbvi1GkQWMetdhe3qSCdYHLGi/6tmQmlLZtks5jnXe', 2),
('awdq2e', 'admin', '$2y$10$p4rCf4MqKe.VzS23A9JMWODsWZb5fqzleY5fwqvoeW0.n5NjDQPdu', 1),
('e132d3f9-7eee-11f0-a699-f8fe5ef7d437', 'anis', '$2y$10$/OGSN2j0ZQc8uIGIYWPuLOR.fqcGU4OzZ0bbmPZHELT6eHjvlQUOi', 2),
('e94ed58d-405e-11f0-9fd0-09f5b6ae454f', 'hana', '$2y$10$RpU42R6IxP.CjE9cFpHhcOcHy71IGoOdResydhCnD5wrLdY8nDDuW', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `detail_pengurusan`
--
ALTER TABLE `detail_pengurusan`
  ADD PRIMARY KEY (`id_detail_pengurusan`);

--
-- Indeks untuk tabel `detail_tanda_terima`
--
ALTER TABLE `detail_tanda_terima`
  ADD PRIMARY KEY (`id_detail_tanda_terima`);

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
-- Indeks untuk tabel `tanda_terima`
--
ALTER TABLE `tanda_terima`
  ADD PRIMARY KEY (`id_tanda_terima`),
  ADD UNIQUE KEY `no_tanda_terima` (`no_tanda_terima`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `invoice` (`invoice`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tanda_terima`
--
ALTER TABLE `tanda_terima`
  MODIFY `no_tanda_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
