-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2012 at 01:36 AM
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
(1, 'The Entrance to the Forbidden City', 5),
(2, 'A Wall in the Forbidden City', 5),
(3, 'Walking along the Great Wall', 5),
(4, 'The Great Hall of the People at Night', 5),
(5, 'A Waterfall near the Yellow Mountain, Anhui', 5),
(6, 'The Yellow Mountains, Anhui Province', 5),
(7, 'A beach on Nandao Island, near Hangzhou', 5),
(8, 'A barge on the West Lake, Hangzhou', 5),
(9, 'A Pagoda on the West Lake, Hangzhou', 5),
(10, 'Sunset on the West Lake, Hangzhou', 5),
(11, 'Potala Palace, Lhasa, Tibet', 10),
(12, 'Shigatse Fortress, Shigatse, Tibet', 5),
(13, 'Monks Walking alongside Prayer Wheels, Drepung Monastery, Tibet', 5),
(14, 'The Road to Everest, Southwest Tibet', 5),
(15, 'Mount Everest, Tibet', 5),
(16, 'The Taklamakan Desert, Xinjiang 1', 5),
(17, 'The Taklamakan Desert, Xinjiang 2', 5),
(18, 'The Taklamakan Desert, Xinjiang 3', 5),
(19, 'A lone rider near Tashkurgan, western Xinjiang', 5),
(20, 'The Apaq Khoja Mosque, Kashgar, Xinjiang', 5),
(21, 'Entrance to a temple, Xishuangbanna, Southwestern Yunnan', 5),
(22, 'A Buddhist stupa, Xishuangbanna, Yunnan', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
