-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 01:34 PM
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
-- Database: `domaci_`
--
CREATE DATABASE IF NOT EXISTS `1002_domaci_31` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `1002_domaci_31`;

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ime_prezime` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `razred` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `odeljenje` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime_prezime`, `razred`, `odeljenje`) VALUES
('13-2020', 'Ranko Stojic', 'III', 5),
('14-2020', 'Jovan Veselinovic', 'II', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `broj_knjizice_djaka` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `naziv_predmeta` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`broj_knjizice_djaka`, `naziv_predmeta`, `ocena`) VALUES
('13-2020', 'Srpski jezik i knjizevnos', 3),
('14-2020', 'Matematika', 5),
('13-2020', 'Matematika', 2),
('13-2020', 'Srpski jezik i knjizevnos', 3),
('14-2020', 'Srpski jezik i knjizevnos', 4);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `naziv` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `profesor` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`naziv`, `profesor`) VALUES
('Matematika', 'MT'),
('Srpski jezik i knjizevnos', 'SR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD KEY `naziv_predmeta` (`naziv_predmeta`),
  ADD KEY `broj_knjizice_djaka` (`broj_knjizice_djaka`) USING BTREE;

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`naziv`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`broj_knjizice_djaka`) REFERENCES `djaci` (`broj_knjizice`),
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`naziv_predmeta`) REFERENCES `predmeti` (`naziv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
