-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 09:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeblu_airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `fid` int(11) NOT NULL,
  `fdate` date NOT NULL,
  `fpl` text NOT NULL,
  `fst` text NOT NULL,
  `del` text NOT NULL,
  `des` text NOT NULL,
  `dep` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `fullname` text NOT NULL,
  `flight_id` text NOT NULL,
  `date` text NOT NULL,
  `email` text NOT NULL,
  `passport_no` text NOT NULL,
  `passport_issue` date NOT NULL,
  `passport_expire` date NOT NULL,
  `card_number` text NOT NULL,
  `ticket_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`fullname`, `flight_id`, `date`, `email`, `passport_no`, `passport_issue`, `passport_expire`, `card_number`, `ticket_number`) VALUES
('rock', '83478348', '2021-09-08', 'jack@gmail.com', '33', '2021-09-22', '2021-09-21', 'sfdwef', '1000008'),
('nil', '7823478783', '2021-09-29', 'jack@mkm', '2233r3', '2021-09-15', '2021-09-28', 'wrfref', '1000003'),
('Sakib', '123456789', '2021-09-10', 'sakib@gmail.com', 'A37634', '2021-09-17', '2021-09-16', '8834834', '1000001'),
('Sakib', '123456789', '2021-09-10', 'sakib@gmail.com', 'A37634', '2021-09-17', '2021-09-16', '8834834', '1000004'),
('322', 'wew', '2021-08-31', 'er', '', '2021-09-01', '2021-09-29', 'ewr', '1000004');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `fullname` text NOT NULL,
  `uname` text NOT NULL,
  `gen` text NOT NULL,
  `email` text NOT NULL,
  `card` text NOT NULL,
  `live` text NOT NULL,
  `bd` date NOT NULL,
  `mob` int(11) NOT NULL,
  `pport` text NOT NULL,
  `pass` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`fullname`, `uname`, `gen`, `email`, `card`, `live`, `bd`, `mob`, `pport`, `pass`, `role`) VALUES
('jack', 'mom', 'male', 'mom@f.vom', '662jj', 'anns', '2017-01-30', 0, '018999349', '1234', ''),
('admin', 'admin', 'admin', 'admin', 'admin', 'admin', '2011-09-08', 0, 'admin', '12345', 'admin'),
('Rayhan', 'rayhan', 'male', 'rayhan@gmail.com', '78768347837', 'dhaka', '2021-09-15', 199893, '76763488', '123', ''),
('Rayhan', 'rayhan', 'male', 'rayhan@gmail.com', '78768347837', 'dhaka', '2021-09-15', 199893, '76763488', '23', ''),
('Ahmed', 'ahmed', 'male', 'ahmed@gmail.com', '8784578', 'dhaka', '2021-09-08', 93882, '87782378', '123', ''),
('sakib', 'sakib1', 'male', 'sakib@gmail.com', '7634686', 'dhaka', '2021-09-24', 188384, 'A76347682', '123', ''),
('Kamal', 'kamal', 'male', 'kamal@gmail.com', '78783478', 'dhaka', '2021-08-30', 877834384, 'A89843589', '123', ''),
('Rahim', 'rahim', 'male', 'rahim@gmail.com', '77837', 'Dhaka', '2021-09-23', 2147483647, 'B87844', '12', ''),
('Abul', 'abul', 'male', 'abul@gmail.com', '7678348', 'Dhaka', '2021-09-23', 346346463, 'B838', '1234', ''),
('fihan', 'jack22', 'male', 'abdul.momen@g.bracu.ac.bd', '343', '32423', '2021-09-08', 2388283, '13324', '123', ''),
('r', 'r', 'r', 'r', 'e', 're', '2022-07-06', 2, 'r', 'e', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
