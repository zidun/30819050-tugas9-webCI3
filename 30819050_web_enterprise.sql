-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2022 at 09:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `30819050_web_enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `Pengguna`
--

CREATE TABLE `Pengguna` (
  `idPengguna` int(11) NOT NULL,
  `namaPengguna` varchar(100) NOT NULL,
  `emailPengguna` varchar(100) NOT NULL,
  `passPengguna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Pengguna`
--

INSERT INTO `Pengguna` (`idPengguna`, `namaPengguna`, `emailPengguna`, `passPengguna`) VALUES
(1, '30819050 - Muhammad Ramdan ', 'zidun.dev@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Pengguna`
--
ALTER TABLE `Pengguna`
  MODIFY `idPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
