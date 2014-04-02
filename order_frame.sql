-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2014 at 08:52 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `framepics`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_frame`
--

CREATE TABLE IF NOT EXISTS `order_frame` (
  `orderid` int(11) NOT NULL,
  `frameid` int(11) NOT NULL,
  `mountid` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `delivery` varchar(45) DEFAULT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`orderid`,`frameid`,`mountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
