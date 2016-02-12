-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2016 at 05:46 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flatbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentry`
--

CREATE TABLE IF NOT EXISTS `bentry` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `buildno` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bentry`
--

INSERT INTO `bentry` (`id`, `buildno`) VALUES
(2, 'B2'),
(3, 'B3'),
(4, 'B4');

-- --------------------------------------------------------

--
-- Table structure for table `cusreg`
--

CREATE TABLE IF NOT EXISTS `cusreg` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `cusname` varchar(50) NOT NULL,
  `cusemail` varchar(50) NOT NULL,
  `bid` int(9) NOT NULL,
  `fid` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cusreg`
--


-- --------------------------------------------------------

--
-- Table structure for table `flatentry`
--

CREATE TABLE IF NOT EXISTS `flatentry` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `bid` int(9) NOT NULL,
  `flatno` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `flatentry`
--

INSERT INTO `flatentry` (`id`, `bid`, `flatno`, `status`) VALUES
(1, 2, '101', 'no'),
(2, 2, '102', 'yes'),
(3, 2, '103', 'yes'),
(4, 3, '101', 'no'),
(5, 3, '102', 'yes'),
(6, 3, '103', 'no'),
(7, 3, '104', 'yes'),
(8, 4, '101', 'no'),
(9, 4, '102', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
