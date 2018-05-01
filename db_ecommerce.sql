-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 05:59 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL DEFAULT 'default.png',
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `spesifikasi` text NOT NULL,
  `deskripsi_b` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `toko_id`, `images`, `nama_barang`, `harga`, `informasi`, `spesifikasi`, `deskripsi_b`, `catatan`) VALUES
(3, 2, 'BG2.jpg', 'Coba coba', 475000, 'Baru', 'RAM Kingston kapasitas 4 GB', 'Bagus cuk', 'Masih baru cuk buruan beli'),
(4, 2, 'BG2.jpg', 'Transcend Hardisk External 2 TB Original', 1400000, 'Hardisk ini berkapasitas 2TB', 'Anti Crack, dibalut karet', 'hardis dengan kemampuan memcopy data dengan cepat', 'produk harus dicek terlebih dahulu dan tidak bisa di kembalikan lagi'),
(5, 1, 'ram1.jpg', 'RAM Kingston 4 GB', 475000, 'Barang masih hangat coy', '4 GB PC12600', 'RAM untuk komputer coy', 'Sebelum beli silahkan login dulu ya gan :)');

-- --------------------------------------------------------

--
-- Table structure for table `komen_b`
--

CREATE TABLE `komen_b` (
  `id_komen` int(11) NOT NULL,
  `komen` varchar(100) NOT NULL,
  `barang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komen_b`
--

INSERT INTO `komen_b` (`id_komen`, `komen`, `barang_id`) VALUES
(1, 'sadasd', 3),
(2, 'sdfsdf', 4),
(3, 'fsd', 4),
(4, 'fsd', 4),
(5, 'fsd', 4),
(6, 'fsd', 4),
(7, 'fsd', 4),
(8, 'xvcxcvx', 4),
(9, 'Bla bla bla', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('icang@gmail.com', 'icang'),
('naufalrzld@gmail.com', 'naufalrizaldi'),
('nurliaha@gmail.com', 'nurliaha');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.png',
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `email`, `nama`, `no_tlp`, `jenis_kelamin`, `foto`, `alamat`) VALUES
(1, 'naufalrzld@gmail.com', 'Mochammad Naufal Rizaldi', '087722390424', 1, 'PhotoGrid_1508002743859.jpg', 'Jl apa aja'),
(2, 'icang@gmail.com', 'M. Faisal Nur', '082112345678', 1, 'akelaku2.png', 'surabaya'),
(3, 'nurliaha@gmail.com', 'Nurliah Awaliah', '082212345678', 0, 'default.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pemesanan` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pemesanan`, `member_id`, `barang_id`, `kuantitas`, `total`) VALUES
(8, 1, 3, 1, 475000);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `toko_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`toko_id`, `member_id`, `nama_toko`, `deskripsi`, `alamat`, `images`) VALUES
(1, 1, 'Fal\'s', 'Toko Naufal', 'Jl. Bojongsoang No. 271', '14614193540031.jpg'),
(2, 2, 'iCang Store', 'icang store menjual beberapa barang untuk gamers', 'Malang', '');

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
-- Indexes for table `komen_b`
--
ALTER TABLE `komen_b`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `barang_id` (`barang_id`);

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
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pemesanan`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `barang_id` (`barang_id`);

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
-- AUTO_INCREMENT for table `komen_b`
--
ALTER TABLE `komen_b`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `toko_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_toko` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`toko_id`);

--
-- Constraints for table `komen_b`
--
ALTER TABLE `komen_b`
  ADD CONSTRAINT `komen_b_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE;

--
-- Constraints for table `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
