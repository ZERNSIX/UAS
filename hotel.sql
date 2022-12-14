-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 10:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(11) NOT NULL,
  `nama_pelanggan` varchar(32) DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` varchar(11) NOT NULL,
  `nama_penginapan` varchar(50) DEFAULT NULL,
  `alamat_penginapan` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `foto_hotel` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `alamat_penginapan`, `harga`, `foto_hotel`, `rating`, `detail`) VALUES
('1', 'Casabaio Paradise Resort', 'Paradise Tourism Area, Kec.Likupang Timur', '$90.00', 'p-1.jpg', 3, 'Tempat tinggal: Casabaio Paradise Resort <br> Wisata: pantai biji, gunung apa sto,seterusnya <br> Include:makan 2 kali + minum'),
('2', 'Sutan Raja Hotel', 'Jl.Raya Manado-Bitung, Kec.Kalawat', '$90.00', 'p-2.webp', 2, 'Tempat tinggal: Casabaio Paradise Resort <br> Wisata: pantai biji, gunung apa sto,seterusnya <br> Include:makan 2 kali + minum'),
('3', 'Gangga Island Resort', 'Tongkaina, Kec.Bunaken', '$90.00', 'p-3.webp', 1, 'Tempat tinggal: Casabaio Paradise Resort <br> Wisata: pantai biji, gunung apa sto,seterusnya <br> Include:makan 2 kali + minum'),
('4', 'Murex Dive Resort Bangka', 'Lihunu, Bangka Island', '$90.00', 'p-4.jpg', 5, 'Tempat tinggal: Casabaio Paradise Resort <br> Wisata: pantai biji, gunung apa sto,seterusnya <br> Include:makan 2 kali + minum'),
('5', 'Bastian Dive Resort', 'Liang Beach, Kec.Bunaken', '$90.00', 'p-5.jpg', 4, 'Tempat tinggal: Casabaio Paradise Resort <br> Wisata: pantai biji, gunung apa sto,seterusnya <br> Include:makan 2 kali + minum'),
('6', 'The Sentra Hotel', 'Jl.Ir.Soekarno, Maumbi, Kec.Talawaan', '$90.00', 'p-6.jpg', 3, 'Tempat tinggal: Casabaio Paradise Resort <br> Wisata: pantai biji, gunung apa sto,seterusnya <br> Include:makan 2 kali + minum'),
('7', 'Kontol Hotel', 'Jl.Ir.Soekarno, Maumbi, Kec.Talawaan', '$90.00', 'p-6.jpg', 3, 'Tempat tinggal: Casabaio Paradise Resort <br> Wisata: pantai biji, gunung apa sto,seterusnya <br> Include:makan 2 kali + minum');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_penginapan` varchar(50) DEFAULT NULL,
  `tgl_checkin` date DEFAULT NULL,
  `tgl_checkout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pelanggan`, `email_pelanggan`, `jumlah`, `nama_penginapan`, `tgl_checkin`, `tgl_checkout`) VALUES
(1, 'otong', 'Ferry1204@gmail.com', 3, 'Casabaio Paradise Resort', '2231-12-31', '0000-00-00'),
(2, 'otong', 'Ferry1204@gmail.com', 3, 'Casabaio Paradise Resort', '2231-12-31', '3123-02-21'),
(3, 'sasd', 'sas@gmail.com', 3, 'Sutan Raja Hotel', '1231-12-04', '1231-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
