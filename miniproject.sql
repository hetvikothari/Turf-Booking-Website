-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 04:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `court_id` int(11) NOT NULL,
  `date1` date NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `stime1` time NOT NULL,
  `etime` time NOT NULL,
  `NOP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `court_id`, `date1`, `user_id`, `stime1`, `etime`, `NOP`) VALUES
(9, 1, '0000-00-00', 'hetvi.kothari', '09:00:00', '10:00:00', 4),
(8, 1, '2020-05-13', 'hetvi.kothari', '10:00:00', '10:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('bishandeep.a', '12345678'),
('hetvi.kothari', '123456789'),
('himali.saini', '12345'),
('shivani.kual', '1234567'),
('sudhiksha.m', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `email`, `message`) VALUES
('HETVI', 'HHK@124GMAIL.COM', 'HELLO'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `max_player` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `cname`, `max_player`) VALUES
(1, 'FOOTBALL', 30),
(2, 'BASKETBALL', 20),
(3, 'BADMINTON', 6),
(4, 'LAWN TENNIS', 4),
(5, 'CRICKET', 30),
(6, 'SQUASH', 5),
(7, 'MULTUPURPOSE', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user_date_time`
--

CREATE TABLE `user_date_time` (
  `TIME2` time NOT NULL,
  `user` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `TIME1` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_date_time`
--

INSERT INTO `user_date_time` (`TIME2`, `user`, `date`, `TIME1`) VALUES
('10:00:00', 'hetvi.kothari', '0000-00-00', '09:00:00'),
('10:00:00', 'hetvi.kothari', '2020-05-13', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`court_id`,`date1`,`stime1`) USING BTREE,
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_date_time`
--
ALTER TABLE `user_date_time`
  ADD PRIMARY KEY (`user`,`date`,`TIME1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
