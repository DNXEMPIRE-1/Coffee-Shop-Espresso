-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2021 at 06:39 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(7, 'aniket', 'aniket12.cse18@chitkara.edu.in', '$2y$12$HnGo4wp8kUajBFKoDV2FY.EdVO3YY8gLa7q.FH9AMV1nx4e9E/pg6'),
(4, 'ashish', 'aniketbansal36@gmail.com', '$2y$12$bE38oQ/AR6rrv0GGsLNgT.fRxhcVPk4mKYzdQxRXlakQxtZgRSfmq'),
(5, 'aniket', 'aniketbansal3@gmail.com', '$2y$12$d8nHPj3f2rLQXn4q/w2h/OWlIIHVSOb5HITZ3PcYCc5seCWnJuR6.'),
(6, 'abcdef', 'aniket1201.cse18@chitkara.edu.in', '$2y$12$sfSGDnDEsvBO6LmLPFyOrOUKF.j.XRjtEtTZWxHaDcHi7EZSnfkJi'),
(8, 'yashik', 'aniketbansal365@gmail.com', '$2y$12$7FhFh.PLIaKBadrgvxdX3uut7oIw33Qy69JEePoxe6.zdn3NJs5om'),
(9, 'Tarun Owner', 'tarun@gmail.com', '$2y$12$BOUoCKRSk3qaX1EMLVTGVOoVbh/KoGe.qu6EGoNvw0xnk2Wl8pfgu'),
(10, 'Shaam', 'ram@gmail.com', '$2y$12$6R79Qxql3BKuBAYh9628vOXXEWyYNbDm7savVGnm4ab1FEMk17e4u'),
(11, 'tanuj', 'tanuj69@gmail.com', '$2y$12$sb0nInNY7CS7uLsCoDQ0AOGNupbIl7Xb2aID1ET7RysZ0H1yeW9p6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
