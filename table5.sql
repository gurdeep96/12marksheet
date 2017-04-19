-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 02:00 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `people`
--

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `seatno` varchar(10) NOT NULL,
  `maths` int(4) NOT NULL,
  `english` int(4) NOT NULL,
  `physics` int(4) NOT NULL,
  `chemistry` int(4) NOT NULL,
  `cs` int(4) NOT NULL,
  `marathi` int(4) NOT NULL,
  `totalmarks` int(4) NOT NULL,
  `totalgrade` varchar(2) NOT NULL,
  `percentage` int(4) NOT NULL,
  `result` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`seatno`, `maths`, `english`, `physics`, `chemistry`, `cs`, `marathi`, `totalmarks`, `totalgrade`, `percentage`, `result`) VALUES
('', 34, 34, 55, 12, 88, 55, 278, 'F', 46, 'FAIL'),
('', 23, 34, 55, 66, 88, 55, 321, 'D', 54, 'PASS'),
('', 34, 2, 26, 66, 1, 1, 130, 'F', 22, 'FAIL'),
('N9211', 34, 34, 55, 12, 88, 55, 278, 'F', 46, 'FAIL'),
('N123', 23, 56, 26, 12, 88, 55, 260, 'F', 43, 'FAIL'),
('N12339', 34, 56, 55, 12, 88, 6, 251, 'F', 42, 'FAIL'),
('N567', 80, 89, 77, 35, 65, 99, 445, 'B', 74, 'PASS'),
('N5555', 98, 65, 78, 33, 56, 45, 375, 'C', 63, 'PASS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table5`
--
ALTER TABLE `table5`
  ADD KEY `seatno` (`seatno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
