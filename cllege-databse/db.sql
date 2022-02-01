-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 07:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `fulldata`
--

CREATE TABLE `fulldata` (
  `ID` int(255) NOT NULL,
  `adno` varchar(255) NOT NULL,
  `dno` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `rel` varchar(255) NOT NULL,
  `nati` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `scast` varchar(255) NOT NULL,
  `scst` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `dbirth` varchar(255) NOT NULL,
  `pbirth` varchar(255) NOT NULL,
  `Tcno` varchar(255) NOT NULL,
  `firthl` varchar(255) NOT NULL,
  `secondl` varchar(255) NOT NULL,
  `Monyear` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `cleav` varchar(255) NOT NULL,
  `reg` int(255) NOT NULL,
  `tot` int(255) NOT NULL,
  `atte` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fulldata`
--

INSERT INTO `fulldata` (`ID`, `adno`, `dno`, `sname`, `fname`, `mname`, `sex`, `rel`, `nati`, `cast`, `scast`, `scst`, `birth`, `dbirth`, `pbirth`, `Tcno`, `firthl`, `secondl`, `Monyear`, `issue`, `cleav`, `reg`, `tot`, `atte`) VALUES
(26, '128/2019-20', '17-06-2019', 'Syed faruk', 'Syed faruk', 'Syed faruk', 'MALE', 'Syed faruk', 'v', 'Syed faruk', 'Syed faruk', 'Syed faruk', '0000-00-00', 'twnty', 'tyuio', 'tyuio', 'rtyuio', 'fghjk', 'hjk', '30-12-1998', 'fgh', 20, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `create_datetime` int(6) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `create_datetime`) VALUES
('Bhimashankar', 'bhimaphulari96@gmail', '9740565182', 2021),
('Pavankumar', 'panchalpavan800@gmai', 'Pavankumar', 2021),
('Pavankumar2', 'panchalpavan800@gmai', 'pAVAN@786', 2021),
('Pavankumar3', 'panchalpavan800@gmai', 'Pavan', 2021),
('Rafeeq', 'panchalpavan800@gmai', 'Rafeeq', 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fulldata`
--
ALTER TABLE `fulldata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fulldata`
--
ALTER TABLE `fulldata`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
