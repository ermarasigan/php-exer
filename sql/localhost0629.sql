-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2017 at 07:16 AM
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
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `date`, `name`, `price`) VALUES
(1, '2017-06-27', 'Fried Chicken', 50),
(2, '2017-06-27', 'Pork Mushroom', 50),
(3, '2017-06-27', 'Tinolang Manok', 50),
(4, '2017-06-27', 'Gulay (langka)', 40),
(5, '2017-06-27', 'Ginisang Togue', 40),
(6, '2017-06-27', 'Extra rice', 10),
(14, '2017-06-28', 'Chicken Asado', 50),
(15, '2017-06-28', 'Nilagang Spare Ribs', 50),
(16, '2017-06-28', 'Sinigang na Bangus', 45),
(17, '2017-06-28', 'Gulay Saluyot', 40),
(18, '2017-06-28', 'Saluyot with fish', 45),
(19, '2017-06-28', 'Fried Porkchop', 50),
(20, '2017-06-28', 'Extra Rice', 10),
(23, '2017-06-29', 'Tokwa at Baboy', 50),
(24, '2017-06-29', 'Giniling', 50),
(25, '2017-06-29', 'Chicken Adobo', 50),
(26, '2017-06-29', 'Monggo', 40),
(27, '2017-06-29', 'Extra rice', 10),
(29, '2017-06-29', 'Pork Sinigang', 50),
(30, '2017-06-29', 'Fried Tolingan (Fish)', 40);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `qty` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `menuid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `menuid` (`menuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `qty`, `userid`, `menuid`) VALUES
(1, '2017-06-27', 1, 2, 3),
(2, '2017-06-27', 1, 3, 1),
(3, '2017-06-27', 1, 4, 2),
(5, '2017-06-27', 1, 5, 4),
(6, '2017-06-27', 1, 6, 5),
(7, '2017-06-27', 1, 9, 3),
(8, '2017-06-27', 1, 10, 4),
(9, '2017-06-27', 1, 11, 5),
(10, '2017-06-27', 1, 12, 4),
(12, '2017-06-27', 1, 13, 1),
(13, '2017-06-28', 1, 2, 15),
(14, '2017-06-28', 1, 6, 16),
(15, '2017-06-28', 1, 5, 18),
(16, '2017-06-28', 1, 10, 18),
(17, '2017-06-28', 1, 15, 14),
(18, '2017-06-28', 1, 12, 17),
(19, '2017-06-28', 1, 12, 20),
(20, '2017-06-28', 1, 4, 19),
(21, '2017-06-28', 1, 14, 14),
(22, '2017-06-28', 1, 10, 14),
(23, '2017-06-28', 1, 3, 19),
(24, '2017-06-28', 1, 9, 16),
(25, '2017-06-29', 1, 5, NULL),
(26, '2017-06-29', 1, 6, 23),
(27, '2017-06-29', 1, 6, NULL),
(28, '2017-06-29', 1, 5, 23),
(29, '2017-06-29', 1, 4, NULL),
(30, '2017-06-29', 1, 3, NULL),
(31, '2017-06-29', 1, 2, NULL),
(32, '2017-06-29', 1, 10, 25),
(33, '2017-06-29', 1, 12, 24),
(34, '2017-06-29', 1, 11, 30);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(10, 'TUITT', 'debbie', 'bd3404f882780fb6f1d4233ce0c3d9cbe1ad5b86', 'admin'),
(11, 'TUITT', 'angeli', '5ede301eb0c6baaa1f6e2d9019da783410c00124', 'regular'),
(12, 'TUITT', 'rigel', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'regular'),
(13, 'TUITT', 'Kevin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(14, 'TUITT', 'arante', 'fdd71b66310a49834ab08f4af8588122a2d4f7d2', 'regular'),
(15, 'TUITT', 'pjsaracho', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'regular'),
(16, 'TUITT', 'seigfredray', '54e7e86271bf7785ae0b3371ecb5123e694db136', 'regular'),
(17, 'TUITT', 'admin', '5448e47add3f6ce7357a591468b7108a8edaa5c5', 'regular'),
(18, 'TUITT', '~JM', 'bc9da8889ccd8c041507d9c40dccc79dd356e7a9', 'regular');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`menuid`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

alter table orders add column unpaid char(1) null;

update orders set unpaid='y' where date='2017-06-29'
and menuid is not null;

SELECT u.username as unpaid_name
      ,sum(m.price * o.qty) as unpaid_bal
      FROM `orders` o
      ,`menu` m
      ,`users` u
      WHERE o.userid = u.id
      and o.menuid = m.id
      and o.unpaid = 'y'
      group by u.username
      order by u.username;





