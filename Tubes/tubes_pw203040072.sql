-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 06:23 PM
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
-- Database: `tubes_pw203040072`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `email`) VALUES
(2, 'Dikdiknurillahi17@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `offroad`
--

CREATE TABLE `offroad` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offroad`
--

INSERT INTO `offroad` (`id`, `nama`, `harga`, `kategori`, `deskripsi`, `tipe`, `gambar`) VALUES
(1, 'Airoh Red Gloss TECH', 3750000, 'Helmet', 'Helm Twist 2.0 dengan Grapic terbaru', 'Twist 2.0', '1.jpg'),
(2, 'RCB Ring 17', 1750000, 'Velg', 'Velg RCB for Kawasaki Ninja 150RR Tersedia tiga Varian Warna yaitu gold,hitam,dan putih', 'SP 552', '2.png'),
(3, 'OHLINS CRF 150L', 5000000, 'Shockbreaker', 'SHOCK Belakang OHLINS PnP CRF 150L', 'HO 820', '3.jpg'),
(4, 'Renthal', 1950000, 'Stang', 'Stang Rental Universal', 'Twinwall 997', '4.png'),
(5, 'Norifumi', 3250000, 'Knalpot', 'Kenalpot Norifumi for CRF 150l', 'Rocket 4 Titanium', '5.jpg'),
(6, 'Accossato', 1150000, 'Standar Samping', 'Standar samping For KTM,YZ,HUSQVARNA,CRF,KLX', 'Stan', '6.jpg'),
(7, 'ALPINESTAR', 10900000, 'Sepatu Trail', 'Sepatu TECH 10 New Desain 2021', 'TECH 10', '7.jpg'),
(8, 'Troy Lee Designs', 4000000, 'Jersey Set', 'Jersey Set Troy Lee Designs SE ULTRA dengan NEW Desain', 'SE ULTRA', '8.png'),
(9, 'XTRIG', 13500000, 'Triple Clamp', 'Triple Clamp XTRIG Rocs for KTM dan HUSQVARNA', 'Rocs', '9.png'),
(10, 'Fox', 1000000, 'Sarung Tangan', 'Sarung Tangan Fox Bomber Dengan Desain 2021', 'Bomber', '10.png');

-- --------------------------------------------------------

--
-- Table structure for table `onroad`
--

CREATE TABLE `onroad` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onroad`
--

INSERT INTO `onroad` (`id`, `nama`, `harga`, `kategori`, `deskripsi`, `tipe`, `gambar`) VALUES
(13, 'FIRELLI', 790000, 'Ban', 'Ban Firelli Diablo Rosso Sport ukuran 150/60 Ring 17', 'DIABLO ROSSO SPORT', '2.jpg'),
(14, 'Brembo', 2450000, 'Kaliper Rem', 'Kaliper Rem Brembo 4 Piston include kampas Rem', 'GP4', '1.jpg'),
(18, 'RCB', 925000, 'Master Rem', 'Master Rem RCB S1 Radial Universal', 'S1 Radial', '60b112e46d919.jpg'),
(19, 'TDR', 3845000, 'CVT', 'Paket Upgrade CVT Full Racing TDR PnP Nmax, Aerox', 'Paket', '60b1138debb2d.jpg'),
(20, 'Arrow', 4400000, 'Knalpot', 'Knalpot Arrow Pnp Ninja 150 RR Full System', 'R9', '60b113fbd0c4a.jpg'),
(21, 'BRT', 1250000, 'Boreup', 'Paket Boreup Touring Nmax, Aerox 177cc', 'Touring 1', '60b1155573a6b.jpg'),
(22, 'Part Original', 260000, 'Kampas Kopling', 'kampas kopling original yamaha for byson dan R15', '45P', '60b115ef13721.jpg'),
(23, 'Airoh', 3100000, 'Helmet', 'Helm Airoh Valor ROCKSTAR Matt ', 'Valor', '60b1166ca15db.jpg'),
(24, 'Brembo', 3550000, 'Master Rem', 'Master Rem Brembo RCS 19 Universal', 'RCS 19', '60b11719ec591.jpg'),
(25, 'YSS', 2500000, 'Shock', 'Shock Belakang YSS G Sport beat FI-Scoopy FI-Vario125/150 330mm Black Series', 'G Sport', '60b117642f8b6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$uLc.jdThql/2NRLgfpWb1eYAPwmMqwuqIQGYkMKO5q1R/Sgy8dJi6'),
(2, 'dikdik', '$2y$10$lAN8zJ2n/GLpMySdfUk5X.sNQ8H12O5pA2o7c1XKhPW8LEPIZuKly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offroad`
--
ALTER TABLE `offroad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onroad`
--
ALTER TABLE `onroad`
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
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offroad`
--
ALTER TABLE `offroad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `onroad`
--
ALTER TABLE `onroad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
