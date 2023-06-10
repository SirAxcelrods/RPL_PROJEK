-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2023 at 05:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gercep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `alamat`, `no_telepon`, `nama`, `password`) VALUES
(1, 'budi@admin.com', 'Kidul dalan', '018232123', 'Budi Petot', 'cek123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `no_telepon`, `alamat`, `nama`, `id_user`) VALUES
(1, '', '', '', 1),
(2, '', '', '', 1),
(3, '', '', '', 1),
(4, '', '', '', 1),
(5, '', '', '', 1),
(6, 'D', 'D', 'D', 1),
(7, 'D', 'D', 'D', 1),
(8, 'D', 'D', 'D', 1),
(9, '0831823124', 'Ujung Kulon', 'Saripudin', 1),
(10, 'a', 'a', 'a', 1),
(11, 'a', 'a', 'a', 1),
(12, 'a', 'a', 'a', 1),
(13, 'a', 'a', 'a', 1),
(14, '3', '3', '3', 1),
(15, '2', '2', '2', 1),
(16, '2', '2', '2', 1),
(17, '2', '2', '2', 1),
(18, '2', '2', '2', 1),
(19, '3', '3', '3', 1),
(20, '3', '3', '3', 1),
(21, 'w', 'we', 'wewe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `no_telepon` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nomor_polisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`no_telepon`, `nik`, `id_kendaraan`, `nama`, `alamat`, `id_rute`, `gambar`, `nomor_polisi`) VALUES
('asd', '111', 2, 'ase', 'ewq', 2, 'driver2.png', 'ewq'),
('0831223', '123', 2, 'Udin petot', 'Klaten Kidul', 6, '', 'AA 123 EE'),
('08333124442', '1230000000', 3, 'Budi Setiawan', 'Kendal', 3, '', 'B 1  JCM'),
('08893131251', '1231111000', 2, 'Irwan Pambudi', 'Wonosobo', 2, '', 'B 12 B'),
('082311', '321211', 2, 'Rina', 'Kutoarjo, Kuto', 1, 'driver3.png', 'AB 123 C');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `merek`, `tahun`, `tipe`) VALUES
(1, 'Honda', '2018', 'Beat'),
(2, 'Honda', '2021', 'Vario'),
(3, 'Mio', '2017', 'Soul'),
(5, 'ew', 'we', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `id_order` int(11) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderan`
--

INSERT INTO `orderan` (`id_order`, `biaya`, `tanggal`, `id_customer`, `id_driver`, `metode_pembayaran`, `layanan`, `catatan`) VALUES
(1, '', '0000-00-00', 8, 3, 'cod', 'Kirim Barang', 'D'),
(2, '11.000', '0000-00-00', 12, 2, 'debit', 'Pesan Makanan', 'a'),
(3, '11.000', '2023-05-24', 13, 2, 'debit', 'Pesan Makanan', 'a'),
(4, '11.000', '2023-05-24', 14, 2, 'debit', 'Pesan Makanan', '3'),
(5, '11.000', '2023-05-24', 15, 2, 'debit', 'Pesan Makanan', '2'),
(6, '11.000', '2023-05-24', 16, 2, 'debit', 'Pesan Makanan', '2'),
(7, '11.000', '2023-05-24', 17, 2, 'debit', 'Kirim Barang', '2'),
(8, '11.000', '2023-05-24', 18, 2, 'debit', 'Kirim Barang', '2'),
(9, '18.000', '2023-05-24', 19, 3, 'cod', 'Kirim Barang', '3'),
(10, '18.000', '2023-05-24', 20, 3, 'cod', 'Kirim Barang', '3'),
(11, '11.000', '2023-06-07', 21, 2, 'debit', 'Pesan Makanan', '');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(11) NOT NULL,
  `jarak` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `jarak`, `tujuan`, `asal`, `waktu`, `keterangan`, `gambar`) VALUES
(1, '9.7 Kilometer', 'Kertek', 'Wonosobo', '18 Menit', 'Sedikit Macet', 'rute1.png'),
(2, '9.3 Kilometer', 'Leksono', 'Wonosobo', '14 Menit', 'Sedikit Macet', 'rute2.png'),
(3, '5.5 Kilometer', 'Mojotengah', 'Wonosobo', '11 Menit', 'Jalur lancar', 'rute3.png'),
(6, 'Bali', 'Jogja', '725 Kilometer', '2 Hari', 'Padat Merayap', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `role`) VALUES
(1, 'a@a.a', '123', ''),
(2, 'c@c.c', '3', ''),
(3, 'b@b.b', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `kendaraan` (`id_kendaraan`),
  ADD KEY `rute` (`id_rute`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `customer` (`id_customer`),
  ADD KEY `driver` (`id_driver`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `kendaraan` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `rute` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`);

--
-- Constraints for table `orderan`
--
ALTER TABLE `orderan`
  ADD CONSTRAINT `customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `driver` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
