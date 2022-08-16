-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2020 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('deno', 'deno@gmail,com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `businessperson`
--

CREATE TABLE `businessperson` (
  `BUSINESSPERSON_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(10) NOT NULL,
  `LAST_NAME` varchar(10) NOT NULL,
  `PHONE_NO` int(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `FEEDBACK_ID` int(11) NOT NULL,
  `PAYMENT_ID` int(11) NOT NULL,
  `STATUS` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businessperson`
--

INSERT INTO `businessperson` (`BUSINESSPERSON_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NO`, `EMAIL`, `USER_NAME`, `FEEDBACK_ID`, `PAYMENT_ID`, `STATUS`) VALUES
(1, 'ghj', 'h', 7, 'domuya98@gmail.com', 'root', 0, 0, 'approved'),
(2, 'Dennis', 'Otieno', 1234, 'Zed.otengo@gmail.com', 'root', 0, 12, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `CONFIRMATION ID` int(11) NOT NULL,
  `PAYMENT ID` int(11) NOT NULL,
  `REVENUE_COLLECTOR ID` int(11) NOT NULL,
  `RA_ID` int(11) NOT NULL,
  `CONFIRMATION_DATE` date NOT NULL,
  `CONFIRMATION_TIME` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FD_ID` int(11) NOT NULL,
  `REMARKS` varchar(200) NOT NULL,
  `LOG_DATE` date NOT NULL,
  `LOG_TIME` time NOT NULL,
  `BUSINESS_PERSON ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `GOOD_ID` int(11) NOT NULL,
  `GOOD_NAME` varchar(10) NOT NULL,
  `QUANTITY` int(20) NOT NULL,
  `RA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `MARKET_ID` int(11) NOT NULL,
  `PAYMENT_ID` int(11) NOT NULL,
  `MARKET_NAME` varchar(20) NOT NULL,
  `MARKET_LOCATION` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAYMENT_ID` int(11) NOT NULL,
  `MPESA_CODE` varchar(50) NOT NULL,
  `PAYMENT_DATE` date NOT NULL,
  `PAYMENT_TIME` time NOT NULL,
  `BUSINESSPERSON_ID` int(11) NOT NULL,
  `MARKET_ID` int(11) NOT NULL,
  `CONFIRMATION_ID` int(11) NOT NULL,
  `STATUS` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PAYMENT_ID`, `MPESA_CODE`, `PAYMENT_DATE`, `PAYMENT_TIME`, `BUSINESSPERSON_ID`, `MARKET_ID`, `CONFIRMATION_ID`, `STATUS`) VALUES
(3, '2', '2020-06-11', '12:34:00', 12, 0, 12, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `REG_DATE` date NOT NULL,
  `REG_TIME` time NOT NULL,
  `BUSINESSPERSON_ID` int(11) NOT NULL,
  `GOODS_ID` int(11) NOT NULL,
  `STATUS` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`USER_ID`, `USER_NAME`, `PASSWORD`, `REG_DATE`, `REG_TIME`, `BUSINESSPERSON_ID`, `GOODS_ID`, `STATUS`) VALUES
(1, 'ddde', '', '0000-00-00', '00:13:40', 4, 123, 'pending'),
(2, 'domuya', '', '0000-00-00', '00:13:40', 2, 123, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `revenue amount`
--

CREATE TABLE `revenue amount` (
  `RA_ID` int(11) NOT NULL,
  `GOODS ID` int(11) NOT NULL,
  `CONFIRMATION ID` int(11) NOT NULL,
  `RA_AMOUNT` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revenuecollectors`
--

CREATE TABLE `revenuecollectors` (
  `REVENUECOLLECTOR_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(10) NOT NULL,
  `LAST_NAME` varchar(10) NOT NULL,
  `PHONE_NO` int(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `CONFIRMATION_ID` int(11) NOT NULL,
  `STATUS` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revenuecollectors`
--

INSERT INTO `revenuecollectors` (`REVENUECOLLECTOR_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NO`, `EMAIL`, `CONFIRMATION_ID`, `STATUS`) VALUES
(2, 'denice', 'mwashi', 734225005, 'dmwashi@gmail.com', 345, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `stalls`
--

CREATE TABLE `stalls` (
  `STALL_ID` int(50) NOT NULL,
  `STALL_NAME` varchar(50) NOT NULL,
  `LOCATION` varchar(50) NOT NULL,
  `BUSINESSPERSON_ID` int(11) NOT NULL,
  `STATUS` enum('available','taken') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businessperson`
--
ALTER TABLE `businessperson`
  ADD PRIMARY KEY (`BUSINESSPERSON_ID`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`CONFIRMATION ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FD_ID`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`GOOD_ID`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`MARKET_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `revenue amount`
--
ALTER TABLE `revenue amount`
  ADD PRIMARY KEY (`RA_ID`);

--
-- Indexes for table `revenuecollectors`
--
ALTER TABLE `revenuecollectors`
  ADD PRIMARY KEY (`REVENUECOLLECTOR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businessperson`
--
ALTER TABLE `businessperson`
  MODIFY `BUSINESSPERSON_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `revenuecollectors`
--
ALTER TABLE `revenuecollectors`
  MODIFY `REVENUECOLLECTOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
