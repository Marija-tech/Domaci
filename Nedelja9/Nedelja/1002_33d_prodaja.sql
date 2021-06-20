-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 05:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1002_33d_prodaja`
--
CREATE DATABASE IF NOT EXISTS `1002_33d_prodaja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `1002_33d_prodaja`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(25) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `kolicina` smallint(6) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, '789', 2, '14.00', '2021-06-17'),
(2, '012', 2, '40.00', '2021-06-17'),
(3, '456', 3, '24.00', '2021-06-17'),
(4, '123', 1, '5.00', '2021-06-17'),
(6, '123', 2, '100.00', '2021-06-16'),
(7, '456', 5, '400.00', '2021-06-16'),
(8, '789', 4, '280.00', '2021-06-16'),
(9, '456', 4, '320.00', '2021-01-05'),
(10, '012', 1, '200.00', '2021-01-05'),
(11, '012', 2, '200.00', '2021-01-05'),
(13, '789', 4, '70.00', '2021-01-05'),
(14, '123', 7, '50.00', '2021-01-05'),
(24, '123', 30, '50.00', '2021-01-05'),
(30, '012', 20, '20.00', '2021-06-17'),
(31, '012', 0, '25.00', '2021-06-17'),
(32, '012', 10, '22.00', '2021-06-17'),
(33, '456', 1, '80.00', '2021-06-16'),
(34, '456', 2, '8.50', '2021-06-17'),
(35, '456', 3, '90.00', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(25) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `naziv` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('012', 'paradajz', '200.00'),
('123', 'crni luk', '50.00'),
('456', 'beli luk', '80.00'),
('789', 'krompir', '70.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
