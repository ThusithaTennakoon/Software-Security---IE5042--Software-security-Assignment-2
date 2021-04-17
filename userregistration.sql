-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 09:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code1` varchar(3) NOT NULL,
  `code2` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `code1`, `code2`) VALUES
('Thusitha', '', '', ''),
('tennakoon', '1994', '', ''),
('sampath', '1994', '', ''),
('ten', '', '', ''),
('sam', '1994', '', ''),
('kaveesha', 'ka96', '', ''),
('admin', 'admin123', '', ''),
('test', 'test123', '', ''),
('sa', 'sasa', 'asa', 'asa'),
('kam', 'kam', 'yes', 'yes'),
('dan', 'dan', 'no', 'no'),
('ben', '10', 'yes', 'no'),
('jack', '10', 'yes', 'yes'),
('test123', '123', 'yes', 'yes'),
('game', '123', 'no', 'no'),
('kanishka', '1994', 'yes', 'yes'),
('jamses bondq', '1994', 'no', 'no'),
('yes', 'yes', 'yes', 'yes'),
('jack12334', '1994', 'yes', 'yes'),
('yotube', '10', 'yes', 'yes'),
('test001', '001', 'yes', 'yes'),
('test0001', '0001', 'yes', 'yes'),
('test 0002', '0002', 'yes', 'no'),
('person1', '1994', 'yes', 'yes'),
('person2', '1994', 'no', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
