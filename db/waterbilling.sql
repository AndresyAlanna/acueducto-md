-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 06:15 AM
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
-- Database: `waterbilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbill`
--

CREATE TABLE `tblbill` (
  `id` int(10) NOT NULL,
  `cnumber` varchar(20) NOT NULL,
  `prev` varchar(20) NOT NULL,
  `pres` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbill`
--

INSERT INTO `tblbill` (`id`, `cnumber`, `prev`, `pres`, `price`, `date`) VALUES
(12, '000283069174', '1', '5', '700', '2021-07-20 18:50:26 '),
(13, '000283069174', '20', '4', '700', '2021-07-14 18:51:08 '),
(15, '000831720596', '2', '0', '900', '2021-07-20 02:47:20 ');

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--

CREATE TABLE `tblclient` (
  `id` int(10) NOT NULL,
  `cnumber` varchar(250) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `created_on` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `meternum` varchar(100) NOT NULL,
  `todate` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclient`
--

INSERT INTO `tblclient` (`id`, `cnumber`, `lname`, `fname`, `mi`, `address`, `contact`, `created_on`, `status`, `meternum`, `todate`) VALUES
(23, '000283069174', 'Jario', 'Andres', 'P', 'Dumagute City', '09912112', '2021-07-01', 1, '1', '2021-07-30'),
(24, '000831720596', 'Amorio', 'Crischel', 'T', 'Mabinay Negros Oriental', '091212', '2021-07-22', 1, '121', '2021-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `tblclientuser`
--

CREATE TABLE `tblclientuser` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `clientID` varchar(60) NOT NULL,
  `acc_status` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_on` date NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclientuser`
--

INSERT INTO `tblclientuser` (`id`, `username`, `password`, `clientID`, `acc_status`, `role`, `created_on`, `name`) VALUES
(4, 'admin', 'admin', '', 1, 'Admin', '2021-07-09', 'Andres P. Jario'),
(14, '88', '6667', '28', 0, 'Member', '2021-07-15', ''),
(17, 'demo', 'demo', '23', 1, 'Member', '2021-07-15', ''),
(19, 'c', 'c', '24', 1, 'Member', '2021-07-20', '');

-- --------------------------------------------------------

--
-- Table structure for table `tempo_bill`
--

CREATE TABLE `tempo_bill` (
  `id` int(11) NOT NULL,
  `Prev` varchar(40) NOT NULL,
  `Client` varchar(30) NOT NULL,
  `cnumber` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempo_bill`
--

INSERT INTO `tempo_bill` (`id`, `Prev`, `Client`, `cnumber`) VALUES
(24, '11', 'Andres', '000831720596'),
(25, '554', 'Crischel', '000283069174'),
(26, 'a', 'aaa', '000421597086'),
(27, 'e', 'ee', '000261087349'),
(28, '1111', 'ea', '000498052736'),
(29, '22', 'sample', '000759648132');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbill`
--
ALTER TABLE `tblbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclientuser`
--
ALTER TABLE `tblclientuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempo_bill`
--
ALTER TABLE `tempo_bill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbill`
--
ALTER TABLE `tblbill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblclient`
--
ALTER TABLE `tblclient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblclientuser`
--
ALTER TABLE `tblclientuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tempo_bill`
--
ALTER TABLE `tempo_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
