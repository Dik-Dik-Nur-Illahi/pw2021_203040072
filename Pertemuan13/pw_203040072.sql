-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 10:55 AM
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
-- Database: `pw_203040072`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `cc` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `brand`, `tipe`, `tahun`, `cc`, `gambar`) VALUES
(1, 'Honda', 'NSX Accura', '2016', '3500cc', 'nsx1.jpg'),
(2, 'Nissan', 'Skyline GTR R34', '2000', '2500cc', 'gtr.jpg'),
(3, 'Mazda', 'RX-7 Veilside', '2000', '1300cc', 'rx7.jpg'),
(4, 'Toyota', 'Supra MK4', '2000', '3000cc', 'supra1.jpg'),
(5, 'Toyota', 'Supra GR', '2020', '3000cc', 'supra.jpg'),
(6, 'Mitsubishi', 'Lancer Evolution IX', '2015', '2000cc', 'evo.jpg'),
(7, 'Honda', 'NSX', '2002', '3200cc', 'nsx2.jpg'),
(8, 'Subaru', 'WRX STI', '2020', '2500cc', 'subaru.jpg\"'),
(9, 'Toyota', 'GT 86', '2012', '2000cc', 'gt86.jpg'),
(10, 'Nissan', 'Silvia S15', '2000', '2000cc', 's15.jpg');

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
(3, 'asd', '$2y$10$OXqNbXWGL7Erjoec93oFUO//Un2A9UbH2H/dj7WlAyg4xPIU2p34a'),
(4, 'admin', '$2y$10$828nE9JofT1iDLHHafaZf.2Km8X6s/Ib7/LyuOfSW4PxOBcqTT4Ny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
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
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
