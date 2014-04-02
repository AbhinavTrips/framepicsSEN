-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2014 at 05:44 PM
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
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `aid` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `def` tinyint(1) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`userid`, `firstname`, `lastname`, `aid`, `mobile`, `address1`, `address2`, `city`, `state`, `pin`, `def`) VALUES
(1, 'Abhinav', 'Tripathi', 1, '8866139500', 'A202', 'DA', 'Gandhi', 'Gujarat', 382009, 1),
(2, 'Sneha', 'Reddy', 3, '6666666666', 'J-XXX', 'da', 'gANDHI', 'gUJA', 382008, 0),
(2, 'Yasir', 'Rentiya', 4, '9999999', 'SDBADG', 'ABJSAHGDHAUW', 'SAJKDHAU', 'SDBAHD', 222222, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ajax_example`
--

CREATE TABLE IF NOT EXISTS `ajax_example` (
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `wpm` int(11) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax_example`
--

INSERT INTO `ajax_example` (`name`, `age`, `sex`, `wpm`) VALUES
('Frank', 45, 'f', 87),
('Jerry', 120, 'f', 20),
('Jill', 22, 'f', 72),
('Julie', 35, 'f', 90),
('Regis', 75, 'f', 44),
('Tracy', 27, 'f', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) NOT NULL,
  `msg` varchar(10) NOT NULL,
  `ip_add` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

CREATE TABLE IF NOT EXISTS `frames` (
  `frameid` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `baseprice` int(11) DEFAULT NULL,
  PRIMARY KEY (`frameid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_check`
--

CREATE TABLE IF NOT EXISTS `login_check` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_check`
--

INSERT INTO `login_check` (`id`, `username`, `password`) VALUES
(0, 'abhinavtripathi01', 'baba123'),
(1, 'tripathi', 'baba123');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `phone_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile` int(10) NOT NULL,
  PRIMARY KEY (`phone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mount`
--

CREATE TABLE IF NOT EXISTS `mount` (
  `mountid` int(11) NOT NULL,
  `color` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`mountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_date`
--

CREATE TABLE IF NOT EXISTS `order_date` (
  `orderid` int(11) NOT NULL,
  `orderdate` datetime DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`orderid`,`frameid`,`mountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE IF NOT EXISTS `order_user` (
  `orderid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(10) NOT NULL,
  `total_votes` int(5) NOT NULL DEFAULT '0',
  `total_value` int(5) NOT NULL DEFAULT '0',
  `used_ips` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reciever`
--

CREATE TABLE IF NOT EXISTS `reciever` (
  `orderid` int(11) NOT NULL,
  `rfname` varchar(20) DEFAULT NULL,
  `rlname` varchar(20) DEFAULT NULL,
  `radd1` varchar(45) DEFAULT NULL,
  `radd2` varchar(45) DEFAULT NULL,
  `rcity` varchar(15) DEFAULT NULL,
  `rstate` varchar(20) DEFAULT NULL,
  `rpin` varchar(6) DEFAULT NULL,
  `rmobile` varchar(10) DEFAULT NULL,
  `remail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile` int(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `mobile`) VALUES
(1, 'abhinav', 'tripathi', 'abhinavtripathi01@gmail.com', 'qwerty', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
