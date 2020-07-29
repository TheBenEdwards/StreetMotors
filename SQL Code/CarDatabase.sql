-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2020 at 02:15 PM
-- Server version: 5.5.58-0+deb7u1-log
-- PHP Version: 5.6.31-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unn_w17004394`
--

-- --------------------------------------------------------

--
-- Table structure for table `CarDatabase`
--

CREATE TABLE IF NOT EXISTS `CarDatabase` (
`carID` int(32) NOT NULL,
  `carMan` varchar(64) NOT NULL,
  `carName` varchar(64) NOT NULL,
  `colour` varchar(64) NOT NULL,
  `dateRegistered` date NOT NULL,
  `imageLink` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CarDatabase`
--

INSERT INTO `CarDatabase` (`carID`, `carMan`, `carName`, `colour`, `dateRegistered`, `imageLink`) VALUES
(1, 'Audi', 'Audi A4', 'Red', '2020-07-29', '1audi.jpg'),
(2, 'BMW', 'BMW M3', 'Blue', '2020-07-29', '2BMW.jpg'),
(3, 'Lexus', 'Lexus RX', 'Red', '2020-07-29', '3lexus.jpg'),
(4, 'Mini', 'Mini Cooper', 'Grey', '2020-07-29', '4mini.jpg'),
(5, 'Ford', 'Ford Focus', 'Blue', '2020-07-29', '5ford.jpg'),
(6, 'Tesla', 'Tesla Model 3', 'Grey', '2020-07-29', '6tesla.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CarDatabase`
--
ALTER TABLE `CarDatabase`
 ADD PRIMARY KEY (`carID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CarDatabase`
--
ALTER TABLE `CarDatabase`
MODIFY `carID` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
