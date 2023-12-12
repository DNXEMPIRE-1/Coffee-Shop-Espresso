-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2021 at 05:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `no_order` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `description`, `price`, `no_order`) VALUES
(1, 'noodle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 68, 0),
(2, 'momos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 40, 0),
(4, 'egg roll', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut', 70, 0),
(5, 'fried momos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut', 75, 0),
(6, 'dumplin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut', 55, 0),
(7, 'burritos', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by ', 55, 0),
(9, 'maggi', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by in', 66, 0),
(10, 'maggi', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by in', 66, 0),
(11, 'chesse_maggi', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by in', 66, 0),
(12, 'lami nasa', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered', 120, 0),
(13, 'shrimp', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s', 230, 0),
(14, 'sambar', 'There are many variations of passages of Lorem Ipsum available, but the majority have sufferm which looks reasonable.', 234, 0),
(15, 'sambar', 'There are many variations of passages of Lorem Ipsum available, but the majority have sufferm which looks reasonable.', 234, 0),
(16, 'aasda', 'There are manyIpsum which looks reasonable.', 123, 0),
(17, 'asa', 'There are ma Ipsum generators on th', 34, 0),
(18, 'asasa', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alte\\ooks reasonable.', 34, 0),
(41, 'qwerty', 'There are many variations of passages of Lorem Ipsum availabl', 45, 0),
(42, 'q', 'There are many variations of passages of Lorem Ipsum availabl', 45, 0),
(43, '1234', 'assssssssssss', 1234, 0),
(44, '1234', 'assssssssssss', 1234, 0),
(45, 'nayi dish', 'wsdxfcghjbnm,kjk', 56, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
