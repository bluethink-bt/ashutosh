-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 08:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'India'),
(3, 'U S A');

-- --------------------------------------------------------

--
-- Table structure for table `creadit`
--

CREATE TABLE `creadit` (
  `id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `clints` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creadit`
--

INSERT INTO `creadit` (`id`, `amount`, `clints`, `month`) VALUES
(1, 10000, 'India', 'Jan'),
(2, 20000, 'U S A', 'Jan'),
(3, 15000, 'India', 'Jan'),
(4, 15000, 'India', 'Feb'),
(5, 18000, 'U S A', 'Feb'),
(6, 10000, 'India', 'March'),
(7, 16000, 'U S A', 'april'),
(8, 16500, 'U S A', 'may'),
(9, 19000, 'India', 'June'),
(10, 15000, 'U S A', 'july'),
(11, 10000, 'India', 'august'),
(12, 15500, 'India', 'september'),
(13, 20000, 'India', 'october'),
(14, 19000, 'India', 'november'),
(15, 1000, 'India', 'december'),
(16, 8500, 'India', 'august'),
(17, 9500, 'India', 'december');

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE `debit` (
  `id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `debit`
--

INSERT INTO `debit` (`id`, `amount`, `type`, `month`) VALUES
(1, 15009, 'Tea', 'Jan'),
(2, 1800, 'Internet', 'Jan'),
(3, 15000, 'salary', 'Jan'),
(4, 500, 'Bonus', 'Feb'),
(5, 5000, 'salary', 'Feb'),
(6, 3000, 'Travel', 'Jan'),
(7, 15000, 'salary', 'april'),
(8, 8000, 'salary', 'may'),
(9, 12000, 'salary', 'June'),
(10, 16000, 'salary', 'july'),
(11, 9000, 'salary', 'august'),
(12, 11000, 'salary', 'august'),
(13, 12000, 'salary', 'september'),
(14, 8000, 'salary', 'october'),
(15, 9500, 'salary', 'november'),
(16, 7000, 'salary', 'december'),
(17, 6000, 'salary', 'March');

-- --------------------------------------------------------

--
-- Table structure for table `expence`
--

CREATE TABLE `expence` (
  `id` int(11) NOT NULL,
  `exp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exp_type`
--

CREATE TABLE `exp_type` (
  `id` int(11) NOT NULL,
  `exp_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exp_type`
--

INSERT INTO `exp_type` (`id`, `exp_type`) VALUES
(2, 'Internetsss'),
(3, 'Bonus'),
(4, 'Tea'),
(5, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `month`) VALUES
(1, 'Jan'),
(2, 'Feb'),
(3, 'March'),
(4, 'april'),
(5, 'may'),
(6, 'June'),
(7, 'july'),
(8, 'august'),
(9, 'september'),
(10, 'october'),
(11, 'november'),
(12, 'december');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creadit`
--
ALTER TABLE `creadit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expence`
--
ALTER TABLE `expence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_type`
--
ALTER TABLE `exp_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `creadit`
--
ALTER TABLE `creadit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `debit`
--
ALTER TABLE `debit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `expence`
--
ALTER TABLE `expence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exp_type`
--
ALTER TABLE `exp_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
