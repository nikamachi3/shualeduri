-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 06:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `ID` int(11) NOT NULL,
  `Dasaxeleba` varchar(100) NOT NULL,
  `Ganmarteba` varchar(100) NOT NULL,
  `Komentari` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`ID`, `Dasaxeleba`, `Ganmarteba`, `Komentari`) VALUES
(1, 'Pizza', 'Peperoni Picistvis sachiroa yveli, pamidori, bekoni, maionezi, da kechupi', ''),
(2, 'Sokospica', 'Sokos picistvis sachiroa soko 125 ml arajani mwikvshi mshrali shaqari, 2ch/k safuari zeti', ''),
(3, 'xinkali', 'xinklis gasaketeblad sachiroa comi, farshi, comis formis micema da wyalshi chayra.', ''),
(4, 'supi', 'supis gasaketeblad aris kartofili , xaxvi , stafilo, makaroni, brinji, mwvanilebi.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
