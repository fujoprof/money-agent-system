-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2016 at 08:41 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scs`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(200) NOT NULL,
  `items` varchar(200) NOT NULL,
  `cost` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `owner` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `item_name`, `items`, `cost`, `date`, `owner`) VALUES
(47, 'passport size', '1', '3000', '2016-03-21', 'MAMA FUJO'),
(48, 'copy', '2', '200', '2016-03-21', 'MAMA FUJO'),
(50, 'copy', '10', '1000', '2016-03-21', 'MAMA FUJO'),
(51, 'maziwa', '1', '600', '2016-03-21', 'MAMA FUJO'),
(52, 'keki', '1', '300', '2016-03-21', 'MAMA FUJO'),
(53, 'Juice', '2', '700', '2016-03-21', 'MAMA MJOMBA'),
(54, 'Juice', '1', '400', '2016-03-21', 'MAMA MJOMBA'),
(55, 'Juice', '2', '1000', '2016-03-21', 'MAMA MJOMBA'),
(56, 'Juice', '1', '500', '2016-03-21', 'MAMA MJOMBA'),
(57, 'copy', '10', '1000', '2016-03-21', 'MAMA FUJO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
