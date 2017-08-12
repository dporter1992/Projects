-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 03:58 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chinese_zodiac`
--

-- --------------------------------------------------------

--
-- Table structure for table `zodiacsigns`
--

CREATE TABLE `zodiacsigns` (
  `President` varchar(75) NOT NULL,
  `Zodiacsigns` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zodiacsigns`
--

INSERT INTO `zodiacsigns` (`President`, `Zodiacsigns`) VALUES
('George Washington', 'Rat'),
('Gerald Ford', 'Ox'),
('James Monroe', 'Tiger'),
('John Adamns', 'Rabbit'),
('Zachery Taylor', 'Dragon'),
('William Harrison', 'Snake'),
('Ulysses Grant', 'Horse'),
('James Madision', 'Goat'),
('Harry Truman', 'Monkey'),
('Grover Cleaveland', 'Rooster'),
('Bill Clinton', 'Dog'),
('Ronald Reagan', 'Pig');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
