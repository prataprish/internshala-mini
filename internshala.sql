-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 01:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `internship_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`internship_id`, `username`, `status`) VALUES
(1, 'prataprish', 'A'),
(1, 'rishpp', 'A'),
(3, 'prataprish', 'A'),
(3, 'rishpp', 'A'),
(20, 'prataprish', 'A'),
(22, 'rishpp', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `title` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `employer` varchar(20) NOT NULL,
  `internship_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `apply_by` date NOT NULL,
  `stipend` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`title`, `description`, `employer`, `internship_id`, `start_date`, `apply_by`, `stipend`) VALUES
('Web Development', 'Do Something', 'rishpratap', 1, '2017-06-30', '2017-06-20', 1000),
('Web Development', 'something new', 'rishpratap', 2, '2017-06-30', '2017-06-01', 2000),
('android', 'android', 'rishpratap', 3, '2017-06-24', '2017-06-28', 100),
('web development', 'dos', 'rishpratap', 20, '2017-06-28', '2017-06-29', 10000),
('Android', 'ad', 'rishpratap', 21, '2017-06-30', '2017-06-24', 12),
('ad', 'sd', 'rishpratap', 22, '2017-06-24', '2017-06-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `account` char(1) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `account`, `email`) VALUES
('prataprish', 'qwertyrps', 'S', ''),
('rishpp', 'h', 'S', ''),
('rishpratap', 'qwertyrps', 'E', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`internship_id`,`username`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`internship_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
