-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 07:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040072`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tubes_pw`
--

CREATE TABLE `data_tubes_pw` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tubes_pw`
--

INSERT INTO `data_tubes_pw` (`id`, `nama`, `harga`, `kategori`, `deskripsi`, `type`, `img`) VALUES
(1, 'Airoh Red Gloss TECH', 3750000, 'Helmet', 'Helm Twist 2.0 dengan Grapic<br>terbaru', 'Twist 2.0', '1.jpg'),
(2, 'RCB Ring 17', 1750000, 'Velg', 'Velg RCB for Kawasaki Ninja 150RR Tersedia tiga Varian Warna yaitu gold,hitam,dan putih', 'SP 552', '2.jpg'),
(3, 'OHLINS CRF 150L', 5000000, 'Shockbreaker', 'SHOCK Belakang OHLINS PnP CRF 150L', 'HO 820', '3.jpg'),
(4, 'Renthal', 1950000, 'Stang', 'Stang Rental Universal', 'Twinwall 997', '4.jpg'),
(5, 'Norifumi', 3250000, 'Knalpot', 'Kenalpot Norifumi for CRF<br>150l', 'Rocket 4 Titanium', '5.jpg'),
(6, 'Accossato', 1150000, 'Standar Samping', 'Standar samping For KTM,YZ,HUSQVARNA,CRF,KLX', 'Stan', '6.jpg'),
(7, 'ALPINESTAR', 10900000, 'Sepatu Trail', 'Sepatu TECH 10 New Desain 2021', 'TECH 10', '7.jpg'),
(8, 'Troy Lee Designs', 4000000, 'Jersey Set', 'Jersey Set Troy Lee Designs SE ULTRA dengan NEW Desain', 'SE ULTRA', '8.jpg'),
(9, 'XTRIG', 13500000, 'Triple Clamp', 'Triple Clamp XTRIG Rocs for KTM dan HUSQVARNA', 'Rocs', '9.jpg'),
(10, 'Fox', 1000000, 'Sarung Tangan', 'Sarung Tangan Fox Bomber Dengan Desain 2021', 'Bomber', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin123', '$2y$10$5Y9F4Qc3OfUOAK2t5YLdAuRBAfLGQArOrMAEohzkDtg.l7mNPCrxK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tubes_pw`
--
ALTER TABLE `data_tubes_pw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tubes_pw`
--
ALTER TABLE `data_tubes_pw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
