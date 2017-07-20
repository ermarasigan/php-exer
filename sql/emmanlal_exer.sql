-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2017 at 08:57 PM
-- Server version: 10.0.31-MariaDB-cll-lve
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

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
(30, '2017-06-29', 'Fried Tolingan (Fish)', 40),
(38, '2017-07-03', 'Fried Chicken', 50),
(39, '2017-07-03', 'Bicol Express', 50),
(40, '2017-07-03', 'Pork with Broccoli', 50),
(41, '2017-07-03', 'Nilagang Pata', 50),
(42, '2017-07-03', 'Sayoteng Gulay', 40),
(43, '2017-07-03', 'Corned Beef Omelette', 50),
(45, '2017-07-03', 'Merienda: Sopas', 30),
(46, '2017-07-03', 'Merienda: Spaghetti', 30),
(47, '2017-07-04', 'Pork Sinigang', 50),
(48, '2017-07-04', 'Chicken Curry', 50),
(50, '2017-07-04', 'Chopsuey', 40),
(51, '2017-07-04', 'Chicken Tinola', 50),
(52, '2017-07-04', 'Pork Caldereta', 50),
(53, '2017-07-05', 'Gulay Labong w/ Saluyot', 40),
(54, '2017-07-05', 'Tortang Talong w/ Giniling', 40),
(55, '2017-07-05', 'Pork Adobo', 50),
(56, '2017-07-05', 'Sinigang sa Miso (Bangus)', 45),
(57, '2017-07-05', 'Pork Barbecue', 25),
(58, '2017-07-05', 'Spare Ribs w/ Oyster Sauce', 50),
(62, '2017-07-06', 'Kare-kare (Pata)', 50),
(63, '2017-07-06', 'Chicken Fillet', 50),
(64, '2017-07-06', 'Monggo', 40),
(65, '2017-07-06', 'Pork Steak', 50),
(66, '2017-07-06', 'Ginataang Halo-halo (Snack)', 30),
(67, '2017-07-06', 'Sotanghon (Snack)', 30),
(68, '2017-07-09', 'Burger Steak', 50),
(69, '2017-07-09', 'Fish Fillet', 50),
(70, '2017-07-09', 'Pork Sisig w/o Egg', 50),
(71, '2017-07-09', 'Pork Sisig w/ Egg', 60),
(72, '2017-07-09', 'Pork Sinigang', 50),
(73, '2017-07-09', 'Sayote (Gulay)', 40),
(74, '2017-07-10', 'Chicken Tinola', 50),
(75, '2017-07-10', 'Fried Chicken', 50),
(76, '2017-07-10', 'Pork Adobo', 50),
(77, '2017-07-10', 'Patola w/ Giniling', 40),
(78, '2017-07-10', 'Fish Tilapia in Gata', 45),
(79, '2017-07-10', 'Lugaw (Snack)', 30),
(80, '2017-07-10', 'Pansit Canton (Snack)', 30),
(81, '2017-07-11', 'Meat Balls', 50),
(82, '2017-07-11', 'Fried Pork Chops', 50),
(83, '2017-07-11', 'Pinakbet', 40),
(84, '2017-07-11', 'Fried Fish', 40),
(85, '2017-07-11', 'Spare Ribs Caldereta', 50),
(86, '2017-07-11', 'Chicken Asparagus', 50),
(87, '2017-07-11', 'Extra Rice', 10),
(88, '2017-07-12', 'Menudo', 50),
(89, '2017-07-12', 'Paksiw na Pata', 50),
(90, '2017-07-12', 'Pineapple Chicken', 50),
(91, '2017-07-12', 'Ginisang Sitaw & Kalabasa', 40),
(92, '2017-07-12', 'Extra Rice', 10),
(94, '2017-07-12', 'Carioca (Snack)', 10),
(95, '2017-07-12', 'Pansit (Snack)', 30),
(96, '2017-07-12', 'Palitaw (Snack)', 15),
(97, '2017-07-13', 'Lumpiang Shanghai (2pcs.)', 50),
(98, '2017-07-13', 'Sinigang Yellowfin', 45),
(99, '2017-07-13', 'Togue', 35),
(100, '2017-07-13', 'Pork Binagoongan', 50),
(101, '2017-07-13', 'Pork Liempo', 50),
(102, '2017-07-16', 'Fried Chicken', 50),
(103, '2017-07-16', 'Sayote (Gulay)', 40),
(104, '2017-07-16', 'Bangus Paksiw', 50),
(105, '2017-07-16', 'Fried Tilapia', 40),
(106, '2017-07-16', 'Pork Sinigang', 50),
(107, '2017-07-17', 'Pork Steak', 50),
(108, '2017-07-17', 'Kalabasa & Sitaw (Gulay)', 40),
(109, '2017-07-17', 'Labong', 40),
(110, '2017-07-17', 'Spicy Ribs', 55),
(111, '2017-07-17', 'Tinolang Tahong', 50),
(112, '2017-07-17', 'Tortang Talong w/ Giniling', 45),
(114, '2017-07-18', 'Tinolang Manok', 50),
(115, '2017-07-18', 'Ginataang Langka', 40),
(116, '2017-07-18', 'Fried Fish', 40),
(117, '2017-07-18', 'Ginisang Upo', 40),
(118, '2017-07-18', 'Corned Beef', 50),
(119, '2017-07-18', 'Chicken Curry', 50),
(120, '2017-07-18', 'Extra rice', 10);

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
  `unpaid` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `menuid` (`menuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `qty`, `userid`, `menuid`, `unpaid`) VALUES
(1, '2017-06-27', 1, 2, 3, NULL),
(2, '2017-06-27', 1, 3, 1, NULL),
(3, '2017-06-27', 1, 4, 2, NULL),
(5, '2017-06-27', 1, 5, 4, NULL),
(6, '2017-06-27', 1, 6, 5, NULL),
(7, '2017-06-27', 1, 9, 3, NULL),
(8, '2017-06-27', 1, 10, 4, NULL),
(9, '2017-06-27', 1, 11, 5, NULL),
(10, '2017-06-27', 1, 12, 4, NULL),
(12, '2017-06-27', 1, 13, 1, NULL),
(13, '2017-06-28', 1, 2, 15, NULL),
(14, '2017-06-28', 1, 6, 16, NULL),
(15, '2017-06-28', 1, 5, 18, NULL),
(16, '2017-06-28', 1, 10, 18, NULL),
(17, '2017-06-28', 1, 15, 14, NULL),
(18, '2017-06-28', 1, 12, 17, NULL),
(19, '2017-06-28', 1, 12, 20, NULL),
(20, '2017-06-28', 1, 4, 19, NULL),
(21, '2017-06-28', 1, 14, 14, NULL),
(22, '2017-06-28', 1, 10, 14, NULL),
(23, '2017-06-28', 1, 3, 19, NULL),
(24, '2017-06-28', 1, 9, 16, NULL),
(25, '2017-06-29', 1, 5, NULL, NULL),
(26, '2017-06-29', 1, 6, 23, NULL),
(27, '2017-06-29', 1, 6, NULL, NULL),
(28, '2017-06-29', 1, 5, 23, NULL),
(29, '2017-06-29', 1, 4, NULL, NULL),
(30, '2017-06-29', 1, 3, NULL, NULL),
(31, '2017-06-29', 1, 2, NULL, NULL),
(32, '2017-06-29', 1, 10, 25, NULL),
(33, '2017-06-29', 1, 12, 24, NULL),
(34, '2017-06-29', 1, 11, 30, NULL),
(35, '2017-06-29', 1, 2, NULL, NULL),
(36, '2017-06-29', 10, 2, NULL, NULL),
(37, '2017-06-29', 2, 2, NULL, NULL),
(38, '2017-06-29', 1, 18, 25, NULL),
(39, '2017-06-29', 1, 19, 24, NULL),
(40, '2017-06-30', 1, 5, NULL, NULL),
(41, '2017-06-30', 1, 20, NULL, 'y'),
(42, '2017-06-30', 1, 4, NULL, NULL),
(43, '2017-06-30', 1, 3, NULL, NULL),
(44, '2017-07-01', 7, 2, NULL, NULL),
(45, '2017-07-03', 1, 5, 42, NULL),
(46, '2017-07-03', 1, 5, NULL, NULL),
(47, '2017-07-03', 1, 18, 43, NULL),
(48, '2017-07-03', 1, 16, 39, NULL),
(49, '2017-07-03', 1, 13, 38, NULL),
(50, '2017-07-03', 1, 3, 39, NULL),
(51, '2017-07-04', 1, 5, NULL, NULL),
(52, '2017-07-04', 1, 6, 50, NULL),
(53, '2017-07-04', 1, 3, 48, NULL),
(54, '2017-07-04', 1, 19, 50, NULL),
(55, '2017-07-04', 1, 22, 50, NULL),
(56, '2017-07-04', 1, 23, 50, NULL),
(57, '2017-07-05', 1, 10, 54, NULL),
(58, '2017-07-05', 1, 10, 56, NULL),
(59, '2017-07-05', 1, 2, 56, NULL),
(60, '2017-07-05', 1, 2, NULL, NULL),
(61, '2017-07-05', 1, 4, NULL, NULL),
(62, '2017-07-05', 1, 22, 57, NULL),
(63, '2017-07-05', 1, 22, 54, NULL),
(64, '2017-07-05', 1, 15, 54, NULL),
(65, '2017-07-05', 1, 15, 57, NULL),
(66, '2017-07-05', 1, 13, 54, NULL),
(67, '2017-07-05', 1, 13, 57, NULL),
(68, '2017-07-05', 1, 3, 54, NULL),
(69, '2017-07-05', 1, 24, 58, NULL),
(70, '2017-07-05', 1, 3, NULL, NULL),
(71, '2017-07-05', 1, 18, 56, NULL),
(72, '2017-07-06', 1, 2, 62, NULL),
(73, '2017-07-06', 1, 5, 64, NULL),
(74, '2017-07-06', 1, 5, 66, NULL),
(75, '2017-07-06', 1, 16, 65, NULL),
(76, '2017-07-06', 1, 3, 64, NULL),
(77, '2017-07-06', 1, 18, 64, NULL),
(78, '2017-07-09', 1, 22, 71, NULL),
(79, '2017-07-09', 1, 5, 73, NULL),
(80, '2017-07-09', 1, 10, 71, NULL),
(81, '2017-07-09', 2, 4, 71, NULL),
(82, '2017-07-09', 1, 13, 71, NULL),
(83, '2017-07-09', 1, 15, 69, NULL),
(84, '2017-07-09', 1, 11, 71, NULL),
(85, '2017-07-09', 1, 12, 73, NULL),
(86, '2017-07-10', 1, 10, 77, NULL),
(87, '2017-07-10', 1, 12, 76, NULL),
(88, '2017-07-10', 1, 5, 78, NULL),
(89, '2017-07-10', 1, 2, 74, NULL),
(90, '2017-07-10', 1, 3, 75, NULL),
(91, '2017-07-10', 1, 3, 74, NULL),
(92, '2017-07-10', 1, 16, 76, NULL),
(93, '2017-07-10', 1, 13, 76, NULL),
(94, '2017-07-10', 1, 15, 74, NULL),
(95, '2017-07-10', 1, 15, 79, NULL),
(96, '2017-07-10', 1, 3, 74, NULL),
(97, '2017-07-10', 1, 19, 74, NULL),
(98, '2017-07-11', 1, 5, 85, NULL),
(99, '2017-07-11', 1, 2, 86, NULL),
(100, '2017-07-11', 1, 6, 86, NULL),
(101, '2017-07-11', 1, 3, 86, NULL),
(102, '2017-07-11', 1, 23, 87, NULL),
(103, '2017-07-11', 1, 10, 85, NULL),
(104, '2017-07-11', 1, 10, 86, NULL),
(105, '2017-07-11', 1, 12, 83, NULL),
(106, '2017-07-11', 1, 13, 82, NULL),
(107, '2017-07-11', 1, 15, 86, NULL),
(108, '2017-07-11', 1, 9, 81, NULL),
(109, '2017-07-11', 1, 9, 83, NULL),
(110, '2017-07-12', 1, 22, 89, 'y'),
(111, '2017-07-12', 1, 12, 91, NULL),
(112, '2017-07-12', 1, 6, 91, NULL),
(113, '2017-07-12', 1, 6, 96, NULL),
(114, '2017-07-12', 1, 5, 91, NULL),
(115, '2017-07-12', 1, 5, 96, NULL),
(116, '2017-07-12', 1, 2, 88, NULL),
(117, '2017-07-12', 1, 9, 88, NULL),
(118, '2017-07-12', 1, 9, 92, NULL),
(119, '2017-07-12', 1, 9, 89, NULL),
(120, '2017-07-12', 1, 16, 89, NULL),
(121, '2017-07-12', 1, 16, 96, NULL),
(122, '2017-07-12', 2, 10, 94, NULL),
(123, '2017-07-12', 1, 10, 95, NULL),
(124, '2017-07-12', 1, 15, 91, NULL),
(125, '2017-07-12', 1, 12, 94, NULL),
(126, '2017-07-12', 1, 26, 88, NULL),
(127, '2017-07-12', 1, 26, 96, NULL),
(128, '2017-07-13', 1, 5, 99, NULL),
(129, '2017-07-13', 1, 4, 97, NULL),
(130, '2017-07-13', 1, 3, 97, NULL),
(131, '2017-07-13', 1, 9, 98, NULL),
(132, '2017-07-13', 1, 9, 99, NULL),
(133, '2017-07-13', 1, 16, 101, NULL),
(134, '2017-07-13', 1, 27, 100, NULL),
(135, '2017-07-13', 1, 2, 98, NULL),
(136, '2017-07-13', 1, 18, 98, NULL),
(137, '2017-07-16', 1, 22, 103, 'y'),
(138, '2017-07-17', 1, 9, 108, NULL),
(139, '2017-07-17', 1, 9, 111, NULL),
(140, '2017-07-17', 1, 9, 107, NULL),
(141, '2017-07-17', 1, 3, 112, NULL),
(142, '2017-07-17', 1, 4, 108, NULL),
(143, '2017-07-17', 1, 22, 107, 'y'),
(144, '2017-07-17', 1, 6, 108, NULL),
(145, '2017-07-17', 1, 16, 110, NULL),
(146, '2017-07-17', 1, 16, 107, NULL),
(147, '2017-07-17', 1, 15, 112, NULL),
(148, '2017-07-17', 1, 2, 108, NULL),
(149, '2017-07-17', 1, 2, 107, NULL),
(150, '2017-07-18', 1, 2, 114, 'y'),
(151, '2017-07-18', 1, 4, 118, 'y'),
(152, '2017-07-18', 1, 6, 117, 'y'),
(153, '2017-07-18', 1, 3, 119, 'y'),
(154, '2017-07-18', 1, 5, 117, 'y');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `groupcode`, `username`, `password`, `role`) VALUES
(2, 'TUITT', 'emman', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'admin'),
(3, 'TUITT', 'Ruel', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(4, 'TUITT', 'Darryl', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(5, 'TUITT', 'joan', '81fe8bfe87576c3ecb22426f8e57847382917acf', 'admin'),
(6, 'TUITT', 'shane', 'c952f0f92c4323ddedb82c722f1484b9d3919bd7', 'regular'),
(9, 'TUITT', 'Benedict', '5c6fa73721bb3ab080d23d0b71ab2ca0072d2fa8', 'regular'),
(10, 'TUITT', 'debbie', 'bd3404f882780fb6f1d4233ce0c3d9cbe1ad5b86', 'admin'),
(11, 'TUITT', 'angeli', '5ede301eb0c6baaa1f6e2d9019da783410c00124', 'regular'),
(12, 'TUITT', 'rigel', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'regular'),
(13, 'TUITT', 'Kevin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(14, 'TUITT', 'arante', 'fdd71b66310a49834ab08f4af8588122a2d4f7d2', 'regular'),
(15, 'TUITT', 'pjsaracho', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'regular'),
(16, 'TUITT', 'seigfredray', '54e7e86271bf7785ae0b3371ecb5123e694db136', 'regular'),
(17, 'TUITT', 'admin', '5448e47add3f6ce7357a591468b7108a8edaa5c5', 'regular'),
(18, 'TUITT', '~JM', 'bc9da8889ccd8c041507d9c40dccc79dd356e7a9', 'regular'),
(19, 'TUITT', 'lex', '789b49606c321c8cf228d17942608eff0ccc4171', 'regular'),
(20, 'TUITT', 'Tuitt', '026df42c5f20568bb81749aab83da3dafa3def3f', 'regular'),
(21, 'TUITT', '1111', '011c945f30ce2cbafc452f39840f025693339c42', 'regular'),
(22, 'TUITT', 'Tom', '5b5e4bfbce35a445dbdc741a39072f4b61b58f6d', 'regular'),
(23, 'TUITT', 'Katherine', '8cb2237d0679ca88db6464eac60da96345513964', 'regular'),
(24, 'TUITT', 'markmarasigan', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'regular'),
(25, 'TUITT', 'tomohisa', '9d4e97b30b81f552182ba040a002cfd1b9f42a00', 'regular'),
(26, 'TUITT', 'chatty', 'fc30fabcfb329d15a85f66d7316f36c0a6e82b9d', 'regular'),
(27, 'TUITT', 'mavs', '686c68132010b821c96fa4aacd12db73bd2a5dbc', 'regular'),
(28, 'TUITT', 'Benj', '7bfe010f0134fad7a91e8627d28ba996ec8f42b2', 'regular');

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
