-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2023 at 09:12 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unimedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

DROP TABLE IF EXISTS `admin-login`;
CREATE TABLE IF NOT EXISTS `admin-login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ustype` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `Id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`id`, `uid`, `pwd`, `email`, `ustype`, `name`) VALUES
(2, 'admin', '$2y$10$44/ryRs9OOlcAGH/6HkegOprLtEjllbzz9379Q4BKL5GqsJL9R2.C', 'admin@unimedia.com', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `ld` date NOT NULL,
  `pd` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `media` varchar(200) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
