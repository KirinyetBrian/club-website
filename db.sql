-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 07:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--
-- Database: `h`
--
-- --------------------------------------------------------

--
-- Table structure for table `Property`
--
CREATE TABLE IF NOT EXISTS `user` (
  `userName` varchar(50) NOT NULL,
  `RegNo` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Date_created` Timestamp NOT NULL 
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
-- 
ALTER TABLE `user`
  ADD PRIMARY KEY (`RegNo`);