-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2012 at 03:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photo_store`
--
CREATE DATABASE `photo_store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `photo_store`;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `ID` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`ID`, `description`, `price`) VALUES
(1, 'The Entrance to the Forbidden City', 0),
(2, 'A Wall in the Forbidden City', 0),
(3, 'Walking along the Great Wall', 0),
(4, 'The Great Hall of the People at Night', 0),
(5, 'A Waterfall near the Yellow Mountain, Anhui', 0),
(6, 'The Yellow Mountains, Anhui Province', 0),
(7, 'A beach on Nandao Island, near Hangzhou', 0),
(8, 'A barge on the West Lake, Hangzhou', 0),
(9, 'A Pagoda on the West Lake, Hangzhou', 0),
(10, 'Sunset on the West Lake, Hangzhou', 0),
(11, 'Potala Palace, Lhasa, Tibet', 0),
(12, 'Shigatse Fortress, Shigatse, Tibet', 0),
(13, 'Monks Walking alongside Prayer Wheels, Drepung Monastery, Tibet', 0),
(14, 'The Road to Everest, Southwest Tibet', 0),
(15, 'Mount Everest, Tibet', 0),
(16, 'The Taklamakan Desert, Xinjiang 1', 0),
(17, 'The Taklamakan Desert, Xinjiang 2', 0),
(18, 'The Taklamakan Desert, Xinjiang 3', 0),
(19, 'A lone rider near Tashkurgan, western Xinjiang', 0),
(20, 'The Apaq Khoja Mosque, Kashgar, Xinjiang', 0),
(21, 'Entrance to a temple, Xishuangbanna, Southwestern Yunnan', 0),
(22, 'A Buddhist stupa, Xishuangbanna, Yunnan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `id`) VALUES
('test', 'test', 1),
('jon.cohen08@gmail.com', 'bleddavy', 0),
('JonCohen', 'password1', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
