-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2018 pada 09.02
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL DEFAULT 'default.png',
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `spesifikasi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `toko_id`, `images`, `nama_barang`, `harga`, `informasi`, `spesifikasi`, `deskripsi`, `catatan`) VALUES
(4, 3, 'akame1.jpg', 'efw', 45354, 'rbhgrtf', 'bgfrbg', 'bgfrbfg', 'bfgbfg'),
(5, 3, 'background_desktop1.jpg', 'gregre', 45345, 'gfbfg', 'bgfbgfb', 'bfgbgf', 'bgfbfgbf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('icang@gmail.com', 'icang'),
('naufalrzld@gmail.com', 'naufalrizaldi'),
('nurliaha@gmail.com', 'nurliaha'),
('tes@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_id`, `email`, `nama`, `no_tlp`, `jenis_kelamin`) VALUES
(1, 'naufalrzld@gmail.com', 'Mochammad Naufal Rizaldi', '087722390424', 1),
(2, 'icang@gmail.com', 'M. Faisal Nur', '082112345678', 1),
(3, 'nurliaha@gmail.com', 'Nurliah Awaliah', '082212345678', 0),
(4, 'tes@gmail.com', 'test', '51521052', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `toko_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`toko_id`, `member_id`, `nama_toko`, `deskripsi`, `alamat`, `gambar`) VALUES
(3, 1, 'fewfw', 'ewfwe', 'fewfwe', 'background_desktop.jpg'),
(4, 4, 'test', 'regre', 'gergre', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `barang_toko` (`toko_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko_id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `toko_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_toko` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`toko_id`);

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
