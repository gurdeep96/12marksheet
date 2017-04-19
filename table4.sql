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
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `firstname` varchar(12) NOT NULL,
  `middlename` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `mothername` varchar(15) NOT NULL,
  `divboard` varchar(10) NOT NULL,
  `stream` varchar(8) NOT NULL,
  `seatno` varchar(10) NOT NULL,
  `centerno` int(10) NOT NULL,
  `dnsno` text NOT NULL,
  `month` varchar(10) NOT NULL,
  `srno` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`firstname`, `middlename`, `lastname`, `mothername`, `divboard`, `stream`, `seatno`, `centerno`, `dnsno`, `month`, `srno`) VALUES
('Akash', 'Kumar', 'Singh', 'meena', 'mumbai', 'IT', 'N2134', 3241, '3434', '2017-03', 123123),
('GURDEEP', 'ewewewewe', 'SINGH', 'etewt', 'mumbai', 'IT', '34232', 2525, '4525.5235.34', '2018-02', 45325),
('GURDEEP', 'dsdsdsd', 'SINGH', 'etewt', 'mumbai', 'IT', 'N34412', 3213, '4525.5235.34', '2018-02', 45325),
('Yash', 'sdgsg', 'Gupte', 'sgsg', 'mumbai', 'IT', 'N121313', 2525, '4525.5235.34', '2018-02', 25235),
('sukhe', 'add', 'singh', 'mnd', 'mumbai', 'IT', 'N31434', 12313, '4525.5235.34', '2013-07', 51515),
('Deep', 'wewe', 'Money', 'sdf', 'mumbai', 'IT', 'N1233', 2525, '4525.5235.34', '2018-02', 34234),
('Roshan', 'Kumar', 'Singh', 'sda', 'mumbai', 'IT', 'N21', 1221, '4525.5235.34', '2018-02', 123123),
('Akshdeep', 'sd', 'Singh', 'fgfg', 'mumbai', 'IT', 'N12', 2525, '4525.5235.34', '2031-12', 45325),
('Sarab', 'jyot', 'lamba', 'dontknow', 'nagpur', 'IT', 'N9211', 2525, '4525.5235.34', '2013-10', 45325),
('GURDEEP', 'ewewewewe', 'SINGH', 'adfadf', 'mumbai', 'IT', 'N123', 2525, '4525.5235.34', '2017-01', 45325),
('GURDEEP', 'ewewewewe', 'SINGH', 'dwdwd', 'mumbai', 'IT', 'N12339', 244, '4525.5235.34', '2017-01', 51515),
('GURDEEP', 'wrwr', 'SINGH', 'adfadf', 'mumbai', 'IT', '1221', 3213, '2515', '2018-02', 545),
('GURDEEP', 'wrwr', 'SINGH', 'adfadf', 'mumbai', 'IT', '1222', 3213, '2515', '2018-02', 545),
('yogesh', 'hgyg', 'singh', 'tftf', 'mumbai', 'it', 'N567', 54, '4525.5235.34', '2018-02', 8787),
('Amrit', 'Prakash', 'Sawant', 'Sheetal', 'mumbai', 'Comps', 'N5555', 124, '4525.5235.34', '2016-11', 22311);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD PRIMARY KEY (`seatno`),
  ADD UNIQUE KEY `seatno` (`seatno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
