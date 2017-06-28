-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2017 at 04:52 AM
-- Server version: 10.0.30-MariaDB-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emmanlal_exer`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupcode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `groupcode`, `username`, `password`, `role`) VALUES
(2, 'TUITT', 'emman', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'admin'),
(3, 'TUITT', 'Ruel', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(4, 'TUITT', 'Darryl', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(5, 'TUITT', 'joan', '81fe8bfe87576c3ecb22426f8e57847382917acf', 'admin'),
(6, 'TUITT', 'shane', 'c952f0f92c4323ddedb82c722f1484b9d3919bd7', 'regular'),
(9, 'TUITT', 'Benedict', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(10, 'TUITT', 'debbie', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'admin'),
(11, 'TUITT', 'angeli', '5ede301eb0c6baaa1f6e2d9019da783410c00124', 'regular'),
(12, 'TUITT', 'rigel', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'regular'),
(13, 'TUITT', 'Kevin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(14, 'TUITT', 'arante', 'fdd71b66310a49834ab08f4af8588122a2d4f7d2', 'regular'),
(15, 'TUITT', 'pjsaracho', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'regular'),
(16, 'TUITT', 'seigfredray', '54e7e86271bf7785ae0b3371ecb5123e694db136', 'regular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
