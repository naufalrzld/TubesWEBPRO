-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2018 pada 12.36
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_ecommerce`
--
CREATE DATABASE IF NOT EXISTS `db_ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ecommerce`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `barang_id` int(11) NOT NULL AUTO_INCREMENT,
  `toko_id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL DEFAULT 'default.png',
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `spesifikasi` text NOT NULL,
  `deskripsi_b` text NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`barang_id`),
  KEY `barang_toko` (`toko_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `toko_id`, `images`, `nama_barang`, `harga`, `informasi`, `spesifikasi`, `deskripsi_b`, `catatan`) VALUES
(3, 2, '11.PNG', '', 475000, 'Baru', 'RAM Kingston kapasitas 4 GB', 'Bagus cuk', 'Masih baru cuk buruan beli'),
(4, 2, 'mountain-1920x1200-sun-river-purple-triangle-4k-156422.jpg', 'Transcend Hardisk External 2 TB Original', 1400000, 'Hardisk ini berkapasitas 2TB', 'Anti Crack, dibalut karet', 'hardis dengan kemampuan memcopy data dengan cepat', 'produk harus dicek terlebih dahulu dan tidak bisa di kembalikan lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen_b`
--

CREATE TABLE IF NOT EXISTS `komen_b` (
  `id_komen` int(11) NOT NULL AUTO_INCREMENT,
  `komen` varchar(100) NOT NULL,
  `barang_id` int(11) NOT NULL,
  PRIMARY KEY (`id_komen`),
  KEY `barang_id` (`barang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `komen_b`
--

INSERT INTO `komen_b` (`id_komen`, `komen`, `barang_id`) VALUES
(1, 'sadasd', 3),
(2, 'sdfsdf', 4),
(3, 'fsd', 4),
(4, 'fsd', 4),
(5, 'fsd', 4),
(6, 'fsd', 4),
(7, 'fsd', 4),
(8, 'xvcxcvx', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('', ''),
('icang@gmail.com', 'icang'),
('naufalrzld@gmail.com', 'naufalrizaldi'),
('nurliaha@gmail.com', 'nurliaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.png',
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_id`, `email`, `nama`, `no_tlp`, `jenis_kelamin`, `foto`, `alamat`) VALUES
(1, 'naufalrzld@gmail.com', 'Mochammad Naufal Rizaldi', '087722390424', 1, 'default.png', ''),
(2, 'icang@gmail.com', 'M. Faisal Nur', '082112345678', 1, 'akelaku2.png', 'surabaya'),
(3, 'nurliaha@gmail.com', 'Nurliah Awaliah', '082212345678', 0, 'default.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE IF NOT EXISTS `toko` (
  `toko_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`toko_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`toko_id`, `member_id`, `nama_toko`, `deskripsi`, `alamat`) VALUES
(1, 1, 'refew', 'fweff', 'wefwef'),
(2, 2, 'iCang Store', 'icang store menjual beberapa barang untuk gamers', 'Malang');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_toko` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`toko_id`);

--
-- Ketidakleluasaan untuk tabel `komen_b`
--
ALTER TABLE `komen_b`
  ADD CONSTRAINT `komen_b_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
