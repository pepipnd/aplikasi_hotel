-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2022 pada 06.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel_pepi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`) VALUES
(1, 'Kolam berenang'),
(2, 'Spot foto pinggir pantai'),
(5, 'Basement luas'),
(8, 'Pemandian air panas'),
(9, 'Tempat gym'),
(10, 'Cafe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kamar` varchar(100) NOT NULL,
  `waktu_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_kamar`
--

CREATE TABLE `tbl_jenis_kamar` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis_kamar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `jumlah_kamar_disewa` int(11) NOT NULL,
  `jumlah_kamar_tersedia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambarjk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenis_kamar`
--

INSERT INTO `tbl_jenis_kamar` (`id_jenis`, `nama_jenis_kamar`, `keterangan`, `jumlah_kamar`, `jumlah_kamar_disewa`, `jumlah_kamar_tersedia`, `harga`, `gambarjk`) VALUES
(21, 'Deluxe Room', 'tipe kamar hotel superior room adalah deluxe room. Kamar ini tentu memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah.', 5, 0, 0, 450000, 'deluxe.jpg'),
(22, 'Superior Room', 'Superior room adalah tipe kamar yang sedikit lebih baik dari tipe standard room.Perbedaannya dapat berupa dari fasilitas yang diberikan, interior kamar, atau pemandangan dari kamar.', 5, 0, 0, 300000, 'superior.jpg'),
(23, 'Double Room', 'Tipe kamar hotel ini biasanya memiliki ukuran kasur yang besar seperti king size. Double room ini cocok banget buat pasangan suami istri yang ingin berbulan madu.', 5, 0, 0, 500000, 'doble.jpg'),
(24, 'Standard Room', 'Kamar tipe ini dibanderol dengan harga yang relatif murah. Fasilitas yang ditawarkan pun standar seperti kasur ukuran king size atau dua queen size.', 5, 0, 0, 250000, 'strandar.jpg'),
(25, 'Twin Room', 'Tipe kamar hotel ini cocok digunakan untuk suami istri atau menginap bersama teman dengan jumlah orang 2-3 orang.', 5, 0, 0, 400000, 'twin.jpg'),
(26, 'Presidential Suite', 'Presidential suite adalah tipe kamar hotel yang terbaik dan paling mahal. Bahkan, tidak semua hotel memiliki presidential suite.Fasilitas yang ditawarkan pun tentu yang terbaik, mulai dari interior, pemandangan kamar, dan masih banyak lainnya.', 5, 0, 0, 700000, 'Presidential.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor_kamar` varchar(20) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `ket_kamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `nomor_kamar`, `jenis_id`, `ket_kamar`) VALUES
(10, 'SDX01', 21, 'Kamar nomor  SXD01 '),
(11, 'SDX02', 21, 'Kamar nomor SDX02'),
(12, 'SDX03', 21, 'Kamar nomor SDX03'),
(13, 'SDX04', 21, 'Kamar nomor SDX04'),
(14, 'SDX05', 21, 'Kamar nomor SDX05'),
(15, 'SSP01', 22, 'Kamar nomor SSP01'),
(16, 'SSP02', 22, 'Kamar nomor SSP01'),
(17, 'SSP03', 22, 'Kamar nomor  SSP03'),
(18, 'SSP04', 22, 'Kamar nomor SSP04 '),
(19, 'SSP05', 22, 'Kamar nomor SSP05'),
(20, 'SDD01', 23, 'Kamar nomor SDD01'),
(21, 'SDD02', 23, 'Kamar nomor SDD02'),
(22, 'SSD03', 23, 'Kamar nomor SDD03'),
(23, 'SSD04', 23, 'Kamar nomor SDD04'),
(24, 'SSD05', 23, 'Kamar nomor SDD05'),
(25, 'SST01', 24, 'Kamar nomor SST01'),
(26, 'SST02', 24, 'Kamar nomor SST02'),
(27, 'SST03', 24, 'Kamar nomor SST03'),
(28, 'SST04', 24, 'Kamar nomor SST04\r\n'),
(29, 'SST05', 24, 'Kamar nomor SST05'),
(30, 'STW01', 25, 'Kamar nomor STW01'),
(31, 'STW02', 25, 'Kamar nomor STW02'),
(32, 'STW03', 25, 'Kamar nomor STW03'),
(33, 'STW04', 25, 'Kamar nomor STW04'),
(34, 'STW05', 25, 'Kamar nomor STW05'),
(35, 'SPR01', 21, 'Kamar nomor SPR01'),
(36, 'SPR02', 26, 'Kamar nomor SPR02'),
(37, 'SPR03', 26, 'Kamar nomor SPR03'),
(38, 'SPR04', 26, 'Kamar nomor SPR04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`id_konsumen`, `nama_lengkap`, `alamat`, `kota`, `provinsi`, `negara`, `no_identitas`, `no_telepon`, `email`) VALUES
(1, 'pepii ', 'selaawi', 'tasik', 'jawa barat', 'indonesia', '0001', '08996335548', 'pepi@gmail.com'),
(2, 'putri nurlaili', 'cikanyere', 'tasikmalaya', 'jabar', 'indonesia', '009876152738', '089765425617', 'putrisaja@gmail.com'),
(3, 'salsa', 'kila', 'tsm', 'jatim', 'indonesia', '089817723673663', '0878939282', 'salsabila@gmail.com'),
(4, 'kinan', 'bojong', 'sumatra', 'sumatra', 'indonesia', '98767644335', '08966554326', 'kinan@gmail.com'),
(5, 'cici', 'cikanyere', 'tasik', 'sumatra', 'indonesia', '089817723673663', '09754673563', 'futrinurlaili@gmail.com'),
(6, 'lola', 'bojong', 'tasikmalaya', 'jabar', 'indonesia', '22', '234556', 'lola@gmail.com'),
(7, 'pepi pnd', 'cikanyere', 'tasik', 'jabar', 'indonesia', '444', '354566', 'putruyyi@gmail.com'),
(8, 'mila', 'bojong', 'tasikmalaya', 'jabar', 'indonesia', '334567', '087654322244', 'mila@gmial.com'),
(9, 'kila', 'cikanyere', 'sumatra', 'jabar', 'indonesia', '7856854', '35634521341', 'kila@gmail.com'),
(12, 'pepi pepi', 'cikanyere', 'tasik', 'jabar', 'indonesia', '089817723673663', '6425235', 'putri@gmail.com'),
(13, 'kamil', 'selaawi', 'tasikmalaya', 'jabar', 'indonesia', '666777', '089745637287', 'kamil@gmail.com'),
(14, 'hana', 'cikanyere', 'tasik', 'jabar', 'indonesia', '32211122', '087626536347', 'hana@gmail.com'),
(15, 'dede', 'cikanyere', 'tasikmalaya', 'jabar', 'indonesia', '1111', '11111223333', 'dede@gmail.com'),
(16, 'hazel', 'kali', 'kalimantan', 'kalimantan', 'indonesia', '008976554', '0897764446', 'hazel@gmail.com'),
(17, 'elsa ', 'cikanyere', 'tasikmalaya', 'jabar', 'indonesia', '009877666', '08965443336', 'elsa@gmail.com'),
(18, 'Futri Nurlaili', 'Jln.cikanyere', 'Tasikmalaya', 'Jawa Barat', 'Indonesia', '92837382992', '089765678987', 'futrinurlaili@gmail.com'),
(20, 'salsa bila', 'Selaawi rt.05/rw.05', 'Tasikmalaya', 'Jawa Barat', 'Indonesia', '9887655444565', '08996335548', 'salsabila@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `hak_akses` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `password`, `nama_lengkap`, `no_hp`, `hak_akses`) VALUES
(1, 'pepi@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'pepi pm', '08996335548', 'user'),
(3, 'putri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'putri nurlaili', '089736374482', 'admin'),
(4, 'wulan@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'wulan ', '089765879097', 'admin'),
(6, 'nandi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nandi nandu', '089963355488', 'user'),
(7, 'dila@gmail.com', '12345', 'dila', '089765879097', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_sewa` varchar(100) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `jenis_pembayaran` enum('cash','debit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `jenis_id`, `atas_nama`, `tanggal`, `waktu_sewa`, `kamar_id`, `jenis_pembayaran`) VALUES
(1, 0, 'pepi', '2022-03-23', '', 0, 'cash'),
(2, 0, 'putri', '2022-03-25', '', 0, 'cash'),
(3, 1, 'putri', '2022-03-28', '2', 3, 'cash'),
(4, 1, 'kinan', '2022-03-28', '2', 1, 'cash'),
(5, 1, 'lola', '2022-03-29', '5', 1, 'cash'),
(6, 1, 'putri', '2022-03-28', '3', 1, 'cash'),
(11, 5, 'hana', '2022-03-29', '2', 1, 'debit'),
(12, 1, 'dede', '2022-03-28', '2', 3, 'debit'),
(13, 1, 'dede', '2022-03-28', '2', 3, 'debit'),
(15, 6, 'Elsa', '2022-04-04', '5', 1, 'cash'),
(16, 21, 'Futri Nulaili', '2022-04-05', '2', 10, 'cash'),
(17, 26, 'pepi', '2022-04-07', '4', 10, 'cash');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_jenis` (`jenis_id`);

--
-- Indeks untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
