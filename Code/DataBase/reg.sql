-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2022 at 08:10 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `regId` varchar(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`regId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regId`, `name`, `age`, `qualification`, `marks`, `contact`, `email`, `address`) VALUES
('KAR2262c3f0a2633f5', 'Manjunath Pujar', 18, 'BE', 35, '1234567890', 'manjunathdtc3@gmail.com', 'madarmaddi talwar oni near mouneshwar temple dharwad 580001'),
('KAR2262c3f11d94ea8', 'jithendra m', 21, 'Bachelor of engineering', 86, '9110669192', 'jithuwolf789@gmail.com', 'kudligi'),
('KAR2262c3f155048a2', 'prasad mutnale', 20, 'Bachelor of engineering', 93, '7019943781', 'manjunathdtc3@gmail.com', 'madarmaddi talwar oni near mouneshwar temple dharwad 580001');
