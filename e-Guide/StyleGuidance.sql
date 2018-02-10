-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 02:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE IF NOT EXISTS `adlogin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`username`, `password`) VALUES

('16MCA0220', 'rajat');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(32) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sitefeel` varchar(20) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `StudentLogin`
--

CREATE TABLE IF NOT EXISTS `StudentLogin` (
  `studentID` varchar(10) NOT NULL,
  `studentName` varchar(20) NOT NULL,
  `studentEmail` varchar(30) NOT NULL,
  `studentDOB` varchar(30) DEFAULT NULL,
  `studentGender` char(1) NOT NULL,
  `studentAddress` varchar(50) DEFAULT NULL,
  `studentPhone` varchar(10) NOT NULL,
  `studentPassword` varchar(20) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `StudentLogin`
--

INSERT INTO `StudentLogin` (`studentID`, `studentName`, `studentEmail`, `studentDOB`, `studentGender`, `studentAddress`, `studentPhone`, `studentPassword`) VALUES
('1002', 'avinash', 'avinash@gmail.com', '27-july-1995', 'M', ' p-228', '9876543210', ''),
('1005', 'abc', 'abc@gmail.com', '21-set-1995', 'M', 'vit ', '9876543210', '123456'),
('16MCA0201', 'ROHIT', '7b.rohit@gmail.com', '1994-06-07', 'M', ' Hisar', '8199977718', 'rohitbudania');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE IF NOT EXISTS `suggestions` (
  `name` varchar(32) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hcontent` varchar(10) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `content_suggestion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
