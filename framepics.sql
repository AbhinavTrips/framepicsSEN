-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2014 at 12:51 PM
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
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `def` tinyint(1) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`userid`, `firstname`, `lastname`, `aid`, `mobile`, `address1`, `address2`, `city`, `state`, `pin`, `def`) VALUES
(2, 'Sneha', 'Reddy', 3, '6666666666', 'J-XXX', 'da', 'gANDHI', 'gUJA', 382008, 0),
(2, 'Yasir', 'Rentiya', 4, '9999999', 'SDBADG', 'ABJSAHGDHAUW', 'SAJKDHAU', 'SDBAHD', 222222, 1),
(6, 'Naynesh', 'Iraniya', 17, '7878459946', 'A104', 'DAIICT', 'Gandhinagar', 'Gujarat', 382007, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `password`) VALUES
(1, 'Abhinav', 'baba'),
(2, 'Raikar', 'kali');

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

CREATE TABLE IF NOT EXISTS `frames` (
  `frameid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `baseprice` int(11) DEFAULT NULL,
  `ftype` varchar(20) NOT NULL,
  PRIMARY KEY (`frameid`,`fname`),
  UNIQUE KEY `fname` (`fname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mount`
--

CREATE TABLE IF NOT EXISTS `mount` (
  `mountid` int(11) NOT NULL,
  `color` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`mountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mount`
--

INSERT INTO `mount` (`mountid`, `color`) VALUES
(1, 'red'),
(2, 'yellow');

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderid`
--
CREATE TABLE IF NOT EXISTS `orderid` (
`orderid` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `order_date`
--

CREATE TABLE IF NOT EXISTS `order_date` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `orderdate` datetime DEFAULT NULL,
  PRIMARY KEY (`orderid`),
  UNIQUE KEY `orderid` (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_date`
--

INSERT INTO `order_date` (`orderid`, `orderdate`) VALUES
(1, '0000-00-00 00:00:00'),
(2, '0000-00-00 00:00:00'),
(3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_frame`
--

CREATE TABLE IF NOT EXISTS `order_frame` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `frameid` varchar(11) NOT NULL,
  `mountid` varchar(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `delivery` date DEFAULT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`orderid`,`frameid`,`mountid`),
  UNIQUE KEY `orderid` (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_frame`
--

INSERT INTO `order_frame` (`orderid`, `frameid`, `mountid`, `status`, `delivery`, `price`) VALUES
(1, '0', '0', 'processing', NULL, 35),
(2, '0', '0', 'processing', NULL, 35),
(3, 'red', 'red', 'processing', NULL, 35);

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE IF NOT EXISTS `order_user` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`orderid`),
  UNIQUE KEY `orderid` (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`orderid`, `userid`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `price`) VALUES
(1, 'wood6', 'Wood-6', 'Wooden Frame', '15.00'),
(2, 'wood7', 'Wood-7', 'Wooden Frame', '5.00'),
(3, 'wood5', 'Wood-5', 'Wooden Frame', '25.00'),
(4, 'red', 'Red', 'Red Frame', '35.00'),
(5, 'silver', 'Silver', 'Silver Frame', '5.00'),
(6, 'wood-light2', 'Wood-Light2', 'Wooden Light Colour', '10.00');

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

--
-- Dumping data for table `reciever`
--

INSERT INTO `reciever` (`orderid`, `rfname`, `rlname`, `radd1`, `radd2`, `rcity`, `rstate`, `rpin`, `rmobile`, `remail`) VALUES
(1, 'Abhinav', 'Tripathi', 'A202, Men''s Hall of Residence', 'DA-IICT Campus', 'Gandhinagar', 'Gujarat', '382007', '8866139500', 'abhinavtripathi01@gmail.com'),
(2, 'Aditya', 'Raikar', 'A216, Men''s Hall of Residence', 'DA-IICT Campus', 'Gandhinagar', 'Gujarat', '382008', '8460089919', 'raikar@hotmail.com');

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
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `mobile`) VALUES
(1, 'Abhinav', 'Tripathi', 'abhinavtripathi01@gmail.com', 'baba', '8866139500'),
(2, 'A', 'n', 'abhinavtripathi01@hotmail.com', 'vad', '223'),
(6, 'A', 'asd', 'abhinavtripathi01@mail.com', 'asdf', '1112222'),
(10, 'qw', 'qw', 'q@x.com', '1213', '123134'),
(11, 'Aditya', 'Raikar', 'aditya@gmail.com', 'baba', '8460089919'),
(12, 'Sneha', 'Reddy', 's@reddy.com', 'reddy', '8460089919'),
(14, 'Abhinav', 'Tripathi', 'abhinavtripathi01@hot.com', 'baba', '8866139500'),
(15, 'Abhinav', 'Tripathi', 'abhinavtripathi01@hot1.com', 'bad', '8866139500');

-- --------------------------------------------------------

--
-- Structure for view `orderid`
--
DROP TABLE IF EXISTS `orderid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderid` AS select `order_user`.`orderid` AS `orderid` from `order_user` where (`order_user`.`userid` = 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
