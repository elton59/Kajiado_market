-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2020 at 03:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14504012_makertapp`
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
  `FIRSTNAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PHONE_NO` int(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `STATUS` enum('approved','rejected','pending') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businessperson`
--

INSERT INTO `businessperson` (`BUSINESSPERSON_ID`, `FIRSTNAME`, `LASTNAME`, `USERNAME`, `PHONE_NO`, `EMAIL`, `PASSWORD`, `STATUS`) VALUES
(1, 'angel', 'angelo', 'angelo', 722334456, 'domuya98@gmail.com', '1111', 'approved'),
(2, 'denis', 'omuya', 'denis', 744556677, 'Zed.otengo@gmail.com', '1234', 'approved'),
(5, ' Mercy', 'Achieng', 'Mercy', 722002200, 'mercy@gmail.com', '4120', 'approved'),
(6, ' Monica', 'Odembo', 'Monica', 723142314, 'monica@gmail.com', '0000', 'approved'),
(7, ' Kevin', 'Otieno', 'Kevin', 718220089, 'kevin@gmail.com', '4144', 'approved'),
(8, ' Fridah', 'Njeri', 'Fridah', 722334586, 'fridah@gmail.com', '1111', 'approved'),
(9, ' Felistas', 'Odembo', 'Felistas', 718182269, 'felistas@gmail.com', '8901', 'approved'),
(10, ' Timothy', 'Anondo', 'Timothy ', 7, 'timothy@gmail.com', '1234', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `confirmation_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `revenue-collectors` int(11) NOT NULL,
  `ra_id` int(20) NOT NULL,
  `conf_date` date NOT NULL,
  `conf-time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FD_ID` int(11) NOT NULL,
  `REMARKS` varchar(200) NOT NULL,
  `BUSINESSPERSONID` int(11) NOT NULL,
  `STATUS` enum('read','notread') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FD_ID`, `REMARKS`, `BUSINESSPERSONID`, `STATUS`) VALUES
(1, 'nice', 3, 'read'),
(2, 'hello', 4, 'notread'),
(3, 'Thank you ', 9, 'read');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `USER_ID` int(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `STATUS` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`USER_ID`, `USERNAME`, `EMAIL`, `PASSWORD`, `STATUS`) VALUES
(1, 'john', 'john@gmail.com', '123456', 'approved');

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

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`GOOD_ID`, `GOOD_NAME`, `QUANTITY`, `RA_ID`) VALUES
(1, 'tomatoes', 10, 3),
(2, 'onions', 50, 3),
(4, 'rice', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `MARKET_ID` int(11) NOT NULL,
  `MARKET_NAME` varchar(20) NOT NULL,
  `MARKET_LOCATION` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`MARKET_ID`, `MARKET_NAME`, `MARKET_LOCATION`) VALUES
(1, 'kanorth', 'kajia'),
(2, 'kasouth', 'kajia'),
(3, 'kaeas', 'kajic'),
(4, 'kawest', 'kiajid'),
(5, 'kanorth', 'kajib');

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
  `AMOUNT` int(50) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `MONTH` varchar(50) NOT NULL,
  `STATUS` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PAYMENT_ID`, `MPESA_CODE`, `PAYMENT_DATE`, `PAYMENT_TIME`, `BUSINESSPERSON_ID`, `AMOUNT`, `FIRST_NAME`, `LAST_NAME`, `MONTH`, `STATUS`) VALUES
(243, 'Ccccc', '2020-10-15', '10:28:00', 5, 3000, 'Mercy', 'Achieng', 'october', 'approved'),
(244, 'Ty4567', '2020-10-15', '10:55:00', 6, 3000, 'Monica', 'Odembo', 'october', 'approved'),
(245, 'Errtyu', '2020-10-16', '14:54:00', 7, 3000, 'Kevin', 'Otieno', 'october', 'approved'),
(247, 'Gggyy', '2020-10-20', '14:31:00', 8, 3000, 'Fridah', 'Njeri', 'october', 'approved'),
(248, 'Zzzzz', '2020-10-21', '05:26:00', 9, 3000, 'Felistas', 'Odembo', 'october', 'approved'),
(249, 'Tyyyio', '2020-10-01', '09:08:00', 10, 3000, 'Nichols ', 'Riungu', 'october', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `reg_date` date NOT NULL,
  `reg_time` time NOT NULL,
  `businessperson_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `FIRSTNAME` varchar(10) NOT NULL,
  `LASTNAME` varchar(10) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PHONE_NO` int(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(11) NOT NULL,
  `STATUS` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revenuecollectors`
--

INSERT INTO `revenuecollectors` (`REVENUECOLLECTOR_ID`, `FIRSTNAME`, `LASTNAME`, `USERNAME`, `PHONE_NO`, `EMAIL`, `PASSWORD`, `STATUS`) VALUES
(6, 'mark', 'john', 'mark', 765456543, 'mark@gmail.com', '123456', 'approved'),
(9, 'mary', 'jane', 'maryjane', 743454323, 'maryjane@gmail.com', '123456', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `stalls`
--

CREATE TABLE `stalls` (
  `STALL_ID` int(50) NOT NULL,
  `STALL_NAME` varchar(50) NOT NULL,
  `LOCATION` varchar(50) NOT NULL,
  `BUSINESSPERSON_ID` int(11) NOT NULL DEFAULT 0,
  `FIRST_NAME` varchar(50) NOT NULL DEFAULT 'update',
  `LAST_NAME` varchar(50) NOT NULL DEFAULT 'update',
  `MARKET_NAME` enum('kanoth','kasouth','kaest','kawest') NOT NULL,
  `STATUS` enum('available','approved','pending','rejected','occupied','allocated') NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stalls`
--

INSERT INTO `stalls` (`STALL_ID`, `STALL_NAME`, `LOCATION`, `BUSINESSPERSON_ID`, `FIRST_NAME`, `LAST_NAME`, `MARKET_NAME`, `STATUS`) VALUES
(3, '1A', 'kajia', 8, 'Fridah', 'Njeri', 'kasouth', 'allocated'),
(5, '1B', 'kajib', 9, 'Felistas', 'Odembo', 'kaest', 'allocated'),
(3, '1D', 'jakic', 8, 'Fridah', 'Njeri', 'kasouth', 'allocated'),
(6, '1C', 'kajib', 10, 'Jenu', 'John', 'kanoth', 'allocated'),
(7, '2A', 'kajib', 6, 'Monica', 'Odembo', 'kanoth', 'pending'),
(8, '1E', 'kajib', 1, 'emily', 'achieng', 'kasouth', 'available'),
(9, '2A', 'kajiC', 5, 'Mercy', 'Achieng', 'kawest', 'allocated'),
(9, '2B', 'kajic', 5, 'Mercy', 'Achieng', 'kaest', 'allocated'),
(10, '2B', 'kajid', 6, 'Monica', 'Odembo', 'kaest', 'allocated'),
(12, '1B', 'kajia', 5, 'Mercy', 'Achieng', 'kanoth', 'available'),
(13, '2E', 'kajib', 0, '', '0', 'kaest', 'approved'),
(14, '2C', 'kajid', 0, '', '0', 'kaest', 'available'),
(15, '2B', 'kajid', 0, '', '0', 'kaest', 'available'),
(16, '1C', 'kajid', 7, 'Kevin', 'Otieno', 'kasouth', 'allocated');

-- --------------------------------------------------------

--
-- Table structure for table `stall_status`
--

CREATE TABLE `stall_status` (
  `STATUS` enum('ACTIVE(TAX_PAID)','INACTIVE(TAX_NOT_PAID)') NOT NULL,
  `BUSINESSPESON_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxpayment`
--

CREATE TABLE `taxpayment` (
  `PAYMENT_ID` int(50) NOT NULL,
  `MPESA_CODE` varchar(50) NOT NULL,
  `PAYMENT_DATE` date NOT NULL,
  `PAYMENT_TIME` time NOT NULL,
  `BUSINESSPERSON_ID` int(50) NOT NULL,
  `AMOUNT` int(50) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `MONTH` varchar(50) NOT NULL,
  `STATUS` enum('pending','approved','rejected','collected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxpayment`
--

INSERT INTO `taxpayment` (`PAYMENT_ID`, `MPESA_CODE`, `PAYMENT_DATE`, `PAYMENT_TIME`, `BUSINESSPERSON_ID`, `AMOUNT`, `FIRST_NAME`, `LAST_NAME`, `MONTH`, `STATUS`) VALUES
(3, 'Ffffyyy', '2020-10-15', '10:24:00', 5, 3000, 'Mercy', 'Achieng', 'october', 'collected'),
(5, 'Wer234', '2020-10-15', '11:01:00', 6, 3000, 'Monica', 'Odembo', 'october', 'collected'),
(6, 'Sssrrtt', '2020-10-16', '15:03:00', 7, 3000, 'Kevin', 'Otieno', 'october', 'collected'),
(7, 'Eeetty', '2020-10-20', '14:40:00', 8, 3000, 'Fridah', 'Njeri', 'october', 'collected'),
(8, 'Hhhhh', '2020-10-21', '05:29:00', 9, 3000, 'Felistas', 'Odembo', 'october', 'collected'),
(9, 'Tyuiop', '2020-10-21', '09:16:00', 10, 3000, 'Timothy ', 'Anondo', 'october', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businessperson`
--
ALTER TABLE `businessperson`
  ADD PRIMARY KEY (`BUSINESSPERSON_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FD_ID`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`USER_ID`);

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
-- Indexes for table `taxpayment`
--
ALTER TABLE `taxpayment`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businessperson`
--
ALTER TABLE `businessperson`
  MODIFY `BUSINESSPERSON_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `USER_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `revenuecollectors`
--
ALTER TABLE `revenuecollectors`
  MODIFY `REVENUECOLLECTOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taxpayment`
--
ALTER TABLE `taxpayment`
  MODIFY `PAYMENT_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
