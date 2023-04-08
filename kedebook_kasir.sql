-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 02:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedebook_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `username`, `password`, `role`) VALUES
(1, 'Andy Septiawan Saragih', 'andyseptiawansaragih@gmail.com', 'andysaragih_', '$2y$10$adu70YjplChZx5rNQw.VDu8NkGyxLhGZziTnzErVeucCpJFbCTaYS', 'kasir'),
(8, 'admin', 'kedebook.admin@gmail.com', 'admin123', '$2y$10$dW6bpLENf0DBnnfguuY/O.k91WMc4rjOAGirhNJwoY0gicvpWF25i', 'admin'),
(12, 'Diva Anggreini Harahap', 'divaa@gmail.com', 'divaang', '$2y$10$tSNMdgQFApYbBzfIT0JdQeNrSmiO7NeBXM/w0zTz0SMVXJPkQWyX2', 'kasir'),
(13, 'Julyant Anggara ', '', 'julyant', '$2y$10$a3wCkTBNoRnM2eVgjM3kyuAeKGhywHUa9sr1HvkCRLzc8G8WXwl6S', 'kasir'),
(14, 'Jessindy Tanuwijaya', '', 'jessindytan', '$2y$10$7aV6J1eRPemWX1l5VJWnn.a7zJ92aECNhd64IKImmRRusw.YLIfFy', 'kasir'),
(15, 'Dafa Hibrizi', '', 'dafa123', '$2y$10$ZHIC6g2PMcwVFjj/J1NTmO63dGwllO.UMBY.SVb7cW9gUgamlIfMy', 'kasir'),
(16, 'Jess', 'jessind.tan@gmail.com', 'jessdy', '$2y$10$YzOSFOoLGa23qD36fV/HEuzE9h46jE6Dh1qj3Psb5VKqHnlKSQb2a', 'kasir'),
(19, 'jess', '', 'jesstan', '$2y$10$envy.KTHDir1Cw8MG9GiKuEwcEG0JXtm2nRnuf2KC5lBN5YZ29cKa', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_barang` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga_asli` int(200) NOT NULL,
  `harga_jual` int(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `fiksiorno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_barang`, `judul_buku`, `gambar`, `harga_asli`, `harga_jual`, `genre`, `fiksiorno`) VALUES
('BUKU_001', 'Ways to Live Forever', '5575-ways_to_live_forever.jpg', 48000, 50000, 'Others', 'Fiksi'),
('BUKU_002', 'One of Us are lying', '8332-one_of_us_is_lying.jpg', 46000, 47000, 'Misteri', 'Fiksi'),
('BUKU_003', 'Jakarta Sebelum Pagi', '4129-Jakarta_Sebelum_Pagi.jpg', 37000, 40000, 'Romance', 'Fiksi'),
('BUKU_004', 'Bumi', '1942-bumi.jpg', 35000, 37000, 'Fantasi', 'Fiksi'),
('BUKU_005', 'Filosofi Teras', '8086-filosofi_teras.jpg', 47000, 47500, 'Self-Improvement', 'Nonfiksi'),
('BUKU_006', 'Hujan', '5032-hujan.jpg', 35000, 37000, 'Others', 'Fiksi'),
('BUKU_007', 'Keajaiban toko kelontong Namiya', '2497-Keajaiban_Toko_Kelontong_Namiya.jpg', 40000, 41000, 'Fantasi', 'Fiksi'),
('BUKU_008', 'Convenience Store Woman ', '9119-Gadis-Minimarket-Convenience-Store-Woman-Sayaka-Murata-Indonesia-edition-cover.jpeg', 60000, 64000, 'Others', 'Fiksi'),
('BUKU_009', 'The Architecture of Love', '1328-the_architecture_of_love.jpg', 43000, 45000, 'Romance', 'Fiksi'),
('BUKU_010', 'Nevermoor : The Trials of Morrigan Crow', '1794-NEVERMOOR_1_THE_TRIALS_OF_MORRIGAN_CROW.jpg', 121000, 125000, 'Fantasi', 'Fiksi'),
('BUKU_011', 'Second Sister', '3234-second sister.jpg', 45000, 50000, 'Others', 'Fiksi'),
('BUKU_012', 'HTML and CSS: Design and Build Websites', '3456-html&css.jpg', 20000, 21000, 'Knowledge', 'Nonfiksi'),
('BUKU_013', 'Fear of Missing Out', '4183-fear_of_missing_out.jpg', 16000, 20000, 'Self-Improvement', 'Nonfiksi'),
('BUKU_014', 'Kita Pergi Hari Ini', '4117-kita_pergi_hari_ini.jpg', 16000, 18000, 'Fantasi', 'Fiksi'),
('BUKU_015', 'Loving the wounded Soul', '8582-lovingthewonundedsoul.jpg', 100000, 105000, 'Self-Improvement', 'Nonfiksi'),
('BUKU_017', 'Yes', '1966-berani-tdk-disukai.jpg', 90000, 100000, 'Romance', 'Fiksi'),
('BUKU_020', 'Saya', '8458-hello_world.jpg', 60000, 65000, 'Knowledge', 'Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `kode_barang` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga_jual` int(100) NOT NULL,
  `harga_asli` int(100) NOT NULL,
  `nama_kasir` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `hargatot` int(100) NOT NULL,
  `bayar` int(100) NOT NULL,
  `kembalian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `invoice` varchar(200) NOT NULL,
  `kasir` varchar(200) NOT NULL,
  `total_belanja` int(200) NOT NULL,
  `tanggal_belanja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`invoice`, `kasir`, `total_belanja`, `tanggal_belanja`) VALUES
('INV-2023010117', 'Jessindy Tanuwijaya', 64000, '01 Jan 2023'),
('INV-2023010135', 'Dafa Hibrizi', 125000, '01 Jan 2023'),
('INV-2023010148', 'Diva Anggreini Harahap', 115000, '01 Jan 2023'),
('INV-2023010149', 'Diva Anggreini Harahap', 120000, '01 Jan 2023'),
('INV-2023010159', 'Jessindy Tanuwijaya', 223000, '01 Jan 2023'),
('INV-2023010167', 'Andy Septiawan Saragih', 66000, '01 Jan 2023'),
('INV-2023010171', 'Julyant Anggara ', 40000, '01 Jan 2023'),
('INV-2023010178', 'Dafa Hibrizi', 83000, '01 Jan 2023'),
('INV-2023010184', 'Julyant Anggara ', 21000, '01 Jan 2023'),
('INV-2023010191', 'Andy Septiawan Saragih', 74000, '01 Jan 2023'),
('INV-2023010220', 'Jessindy Tanuwijaya', 129000, '02 Jan 2023'),
('INV-2023010221', 'Jess', 197000, '02 Jan 2023'),
('INV-2023010256', 'Jessindy Tanuwijaya', 129000, '02 Jan 2023'),
('INV-2023010319', 'jessindy', 82000, '03 Jan 2023'),
('INV-2023010375', 'jess', 161000, '03 Jan 2023');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `username`, `tanggal`, `judul`, `konten`) VALUES
(8, 'andysaragih_', '2023-01-01', 'Kendala dalam fitur chart', '<p>Halo, admin.</p>\r\n\r\n<p>Saya memiliki kendala terhadap fitur chart. Saya harap kendala ini dapat diperbaiki dengan segera.</p>\r\n'),
(9, 'andysaragih_', '2023-01-01', 'Ada Pelanggan yang Mengancam Saya', '<p>Halo, admin.</p>\r\n\r\n<p>Ada pelanggan yang kurang sopan di kasir saat ini. Tolong bantu saya.</p>\r\n'),
(10, 'divaang', '2023-01-01', 'Mencoba fitur help & support', '<p>Saya hanya mengetes fitur ini. Sangat menarik</p>\r\n'),
(11, 'divaang', '2023-01-01', 'Admin yang saya sayangi', '<p>Dear, Admin.</p>\r\n\r\n<p>Semoga sehat selalu</p>\r\n'),
(12, 'julyant', '2023-01-01', 'Promosi', '<p>Kapan ya saya bisa dipromosikan. Sudah bosen menjadi kasir.</p>\r\n'),
(13, 'julyant', '2023-01-01', 'Memiliki kendala terhadap hidup', '<p>Pengen cepat kaya</p>\r\n'),
(14, 'jessindytan', '2023-01-01', 'Stok buku hampir habis', '<p>Kepada Admin yang saya hormati.</p>\r\n\r\n<p>Saya ingin melaporkan jika stok buku hujan sudah hampir habis. Mohon untuk disediakan lebih.</p>\r\n\r\n<p>Terima kasih</p>\r\n'),
(15, 'jessindytan', '2023-01-01', 'Perkelahian', '<p>Saya ingin melaporkan bahwa saya melihat perkelahian perebutan buku di buku bagian romance.</p>\r\n'),
(16, 'dafa123', '2023-01-01', 'Saksi Pencurian', '<p>Sewaktu memantau cctv, saya melihat pencurian buku di bagian fantasy. Mohon untuk ditindaklanjuti.</p>\r\n'),
(17, 'dafa123', '2023-01-01', 'Invoice bermasalah', '<p>Invoice tidak terprint. Bagaimana solusinya?</p>\r\n'),
(19, 'jesstan', '2023-01-03', 'Print tidak berfungsi', '<p>Tidak bisa print karena error</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_barang`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`invoice`),
  ADD UNIQUE KEY `invoice` (`invoice`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
