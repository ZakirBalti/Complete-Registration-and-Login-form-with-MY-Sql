-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 12:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batch4`
--

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `Id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cell_number` bigint(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`Id`, `name`, `cell_number`, `email`) VALUES
(10, 'bulbul', 6263126312, 'bulbulshairazi@yahoo.com'),
(12, 'Zakir Hussain', 72371273123712321, 'zakirsuraj@gmail.com'),
(13, 'awais qarni', 2347242342, 'awais@gmail.com'),
(14, 'Zeeshan', 23423234, 'zeeshan@gmail.com'),
(15, 'awais', 1221212, 'awais@gmail.com'),
(16, 'abc', 234232, 'abc@gmail.com'),
(17, 'anas', 4233233, 'anas@yahoo.com'),
(18, 'yasirsir', 9323912312, 'yasir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `name`, `email`, `password`) VALUES
(1, 'zakir', 'zakirsuraj@gmail.com', '12345'),
(3, 'bulbul', 'bulbulshairazi@yahoo.com', '12345'),
(4, 'awais', 'awais@gmail.com', '123456789'),
(5, 'Zeeshan', 'zeeshan@gmail.com', '123456789'),
(6, 'rozi', 'rozi@gmail.com', '123456789'),
(7, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `cell_number` (`cell_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dir`
--
ALTER TABLE `dir`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
