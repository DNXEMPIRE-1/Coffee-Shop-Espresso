-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2021 at 07:01 PM
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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `id`, `name`, `description`, `status`, `address`, `amount`, `date`) VALUES
(1, 1, 'yashik', 'noddles-1', 'in_progress', '38-b kirti nagra-b mabala cantt', 75, '2021-05-24 10:49:20'),
(2, 1, 'yashik', 'noodels-12', 'in_progress', 'asd', 23, '2021-05-24 10:55:07'),
(3, 4, 'egg roll', '1-noodle-68,1-momos-40,1-egg roll-70,', 'in_progress', '', 135, '2021-05-29 17:30:46'),
(4, 4, 'egg roll', '1-noodle-68,1-momos-40,1-egg roll-70,', 'in_progress', '', 0, '2021-05-29 17:42:40'),
(5, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '', 135, '2021-05-29 18:14:56'),
(6, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '', 135, '2021-05-29 18:15:04'),
(7, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '', 135, '2021-05-29 18:15:34'),
(8, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '', 135, '2021-05-29 18:25:55'),
(9, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '', 135, '2021-05-29 18:26:03'),
(10, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '', 135, '2021-05-29 18:26:28'),
(11, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '', 135, '2021-05-29 18:26:43'),
(12, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '38-b kirti nagar-b ambala cantt', 135, '2021-05-29 18:38:22'),
(13, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', '38-b kirti nagar-b ambala cantt', 135, '2021-05-29 18:40:21'),
(14, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', 'aasas', 135, '2021-05-29 18:52:47'),
(15, 1, '1234', '1-maggi-66,1-1234-1234,', 'in_progress', 'qw', 135, '2021-05-29 18:55:40'),
(16, 1, 'fried momos', '1-noodle-68,1-momos-40,1-egg roll-70,1-fried momos-75,', 'in_progress', 'asas', 135, '2021-05-29 18:56:32'),
(17, 1, 'dumplin', '5-noodle-68,1-momos-40,1-egg roll-70,1-dumplin-55,', 'delivered', 'mehajdncjanslanmx', 407, '2021-05-29 18:58:21'),
(18, 1, 'egg roll', '1-egg roll-70,', 'cancel', '35-b ksdmksm', 70, '2021-05-30 08:44:09'),
(19, 1, 'egg roll', '1-noodle-68,1-momos-40,6-egg roll-70,', 'in_progress', '38-b kirti nagar-b', 528, '2021-05-30 15:58:37'),
(20, 1, 'dumplin', '1-egg roll-70,1-fried momos-75,1-dumplin-55,', 'in_progress', '38-b kirti  nagar-b ambala cantt', 200, '2021-05-30 16:03:09'),
(21, 1, 'noodle', '1-noodle-68,', 'in_progress', 'demkqmdkqldmq', 68, '2021-05-30 18:59:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
