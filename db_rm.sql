-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2021 pada 10.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `nama`, `username`, `password`, `foto`) VALUES
(4, 'Tin', 'admin', '$2y$10$tf2VKfD.kjhXFc16fbaNY.EvtMhvhb8iYFWvHVr5MURTg443VwmIm', 'administrator-1579273408.png'),
(6, 'ilul', 'ilul', '$2y$10$pTnuGPPDeQnhDCroHGgmr.0NZDfcp9J4CvNrXh0hBWEWk4a1bxoda', 'ilul-1628148115.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_bayar`
--

CREATE TABLE `tbl_jenis_bayar` (
  `id` int(11) NOT NULL,
  `jenis_bayar` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenis_bayar`
--

INSERT INTO `tbl_jenis_bayar` (`id`, `jenis_bayar`) VALUES
(3, 'Cash'),
(4, 'Kredit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `id` int(11) NOT NULL,
  `merk` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_merk`
--

INSERT INTO `tbl_merk` (`id`, `merk`) VALUES
(8, 'Toyota'),
(9, 'Suzuki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `no_polisi` varchar(10) DEFAULT NULL,
  `jumlah_kursi` int(1) DEFAULT NULL,
  `tahun_beli` int(4) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `id_merk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id`, `nama`, `warna`, `no_polisi`, `jumlah_kursi`, `tahun_beli`, `gambar`, `status`, `id_merk`) VALUES
(14, 'Toyota Kijang Innova', 'Abu Abu', 'R 1309 KN', 7, 2018, 'toyota-kijang-innova-1579004786.png', 'Di Booking', 8),
(15, 'Suzuki All New Ertiga', 'Putih', 'R 1739 KN', 8, 2018, 'suzuki-all-new-ertiga-1579279546.png', 'Di Booking', 9),
(16, 'Toyota Avanza', 'Hitam', 'H 1234 ACD', 7, 2021, 'toyota-avanza-1622361947.jpg', 'Tersedia', 8),
(17, 'sadasd', 'asd', 'sasd', 2, 12, 'sadasd-1627359194.png', 'Tersedia', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemesan`
--

CREATE TABLE `tbl_pemesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pemesan`
--

INSERT INTO `tbl_pemesan` (`id`, `nama`, `alamat`, `jenis_kelamin`, `foto`) VALUES
(6, 'Fakhrul', 'Sidareja', 'L', 'fakhrul-1579004931.jpg'),
(7, 'Fanani', 'Sidareja', 'L', 'fanani-1579275545.png'),
(8, 'Hilmi', 'Weleri', 'L', 'hilmi-1622349743.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perjalanan`
--

CREATE TABLE `tbl_perjalanan` (
  `id` int(11) NOT NULL,
  `asal` varchar(20) DEFAULT NULL,
  `tujuan` varchar(20) DEFAULT NULL,
  `jarak` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_perjalanan`
--

INSERT INTO `tbl_perjalanan` (`id`, `asal`, `tujuan`, `jarak`) VALUES
(3, 'Cilacap', 'Jogjakarta', 300),
(4, 'Cilacap', 'Ciamis', 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_pinjam` text NOT NULL,
  `tgl_kembali` text NOT NULL,
  `lama` varchar(10) NOT NULL,
  `denda` varchar(20) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `hp_pemesan` varchar(15) NOT NULL,
  `foto_pemesan` text NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jarak` int(10) NOT NULL,
  `jenis_bayar` varchar(20) NOT NULL,
  `dengan_sopir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id`, `id_mobil`, `harga`, `tgl_pinjam`, `tgl_kembali`, `lama`, `denda`, `nama_pemesan`, `hp_pemesan`, `foto_pemesan`, `asal`, `tujuan`, `jarak`, `jenis_bayar`, `dengan_sopir`) VALUES
(9, 14, 700000, '2021-08-02 15:51', '2021-08-04 15:51', '2', '150000', 'jtjtyddjytd', '87646', 'crop_image.jpg', 'hgfhgd', 'gffdgfd', 23423, 'cash', 'ya'),
(10, 15, 400000, '2021-08-05 14:18', '2021-08-06 14:18', '1', '0', 'tinnn', '081231203', 'flat-3840x2160-forest-deer-4k-5k-iphone-wallpaper-abstract-11925.jpg', 'asjdlkj', 'ksffjk', 123, 'cash', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_pinjam` text DEFAULT NULL,
  `tgl_kembali` text DEFAULT NULL,
  `id_pemesan` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_perjalanan` int(11) DEFAULT NULL,
  `id_jenis_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sopir`
--

CREATE TABLE `tbl_sopir` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sopir`
--

INSERT INTO `tbl_sopir` (`id`, `nama`, `nomor_hp`, `foto`, `alamat`) VALUES
(7, 'hilmi', '08312312', 'hilmi-1626077816.jpg', 'asdlkj');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jenis_bayar`
--
ALTER TABLE `tbl_jenis_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_mobil_ibfk_2` (`id_merk`);

--
-- Indeks untuk tabel `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_perjalanan`
--
ALTER TABLE `tbl_perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indeks untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_perjalanan` (`id_perjalanan`),
  ADD KEY `id_jenis_bayar` (`id_jenis_bayar`);

--
-- Indeks untuk tabel `tbl_sopir`
--
ALTER TABLE `tbl_sopir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_bayar`
--
ALTER TABLE `tbl_jenis_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_merk`
--
ALTER TABLE `tbl_merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_perjalanan`
--
ALTER TABLE `tbl_perjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_sopir`
--
ALTER TABLE `tbl_sopir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD CONSTRAINT `tbl_mobil_ibfk_2` FOREIGN KEY (`id_merk`) REFERENCES `tbl_merk` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD CONSTRAINT `id_mobil` FOREIGN KEY (`id_mobil`) REFERENCES `tbl_mobil` (`id`);

--
-- Ketidakleluasaan untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD CONSTRAINT `tbl_pesanan_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `tbl_pemesan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pesanan_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `tbl_mobil` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pesanan_ibfk_3` FOREIGN KEY (`id_perjalanan`) REFERENCES `tbl_perjalanan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pesanan_ibfk_4` FOREIGN KEY (`id_jenis_bayar`) REFERENCES `tbl_jenis_bayar` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
