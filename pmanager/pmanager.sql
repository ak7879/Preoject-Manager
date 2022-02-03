-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 01:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `g_id` int(5) NOT NULL,
  `g_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`g_id`, `g_name`) VALUES
(1, 'Komal Chopra'),
(2, 'Anshul'),
(3, 'Bhatele Sir'),
(4, 'Manoj Sir'),
(5, 'Bhatele Sir'),
(22, 'Dhermendra Tripati'),
(23, 'Yograj Sharma'),
(24, 'Mr. X'),
(25, 'Mr. Y'),
(26, 'Abhishek Rawat'),
(27, 'add');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(5) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `designation`, `branch`, `email`, `password`) VALUES
(1, 'Kirtiraj Bhatele', 'Asst. Prof.', 'cse', 'kirtiraj@gmail.com', '4800e84ee188439e8958f94577de6fa2');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(5) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_type` varchar(5) NOT NULL,
  `p_description` varchar(250) NOT NULL,
  `g_id` int(5) NOT NULL,
  `member_1` varchar(12) NOT NULL,
  `member_2` varchar(12) DEFAULT NULL,
  `member_3` varchar(12) DEFAULT NULL,
  `uniqueId` varchar(30) NOT NULL,
  `pLink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `p_name`, `p_type`, `p_description`, `g_id`, `member_1`, `member_2`, `member_3`, `uniqueId`, `pLink`) VALUES
(10, 'Project Manager', 'minor', 'We are building a website to manage a project', 4, 'Anshul', 'Abhishek', 'Bilal', '123', 'ngdxngxghte'),
(11, 'Prayas', 'minor', 'We are building a app to manage and clean our land.', 22, 'lakshya', 'Deepak kumar', 'Manish kumar', '', 'zsfcsdc'),
(12, 'Attendance App', 'minor', 'We are building a App to manage students attendance.', 23, 'Abhishek jai', 'Amit shukla', 'Suyash shukl', '', ''),
(13, 'Sports Management', 'minor', 'Building a website to host sports event.', 4, 'Divyanshu', 'Deepak joshi', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  `rollnumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `profile`, `pwd`, `id`, `rollnumber`) VALUES
('', '', '', '', '', 3, ''),
('manish', 'kumar', 'masn@g.c', 's', 's', 4, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`),
  ADD UNIQUE KEY `member_1` (`member_1`,`member_2`,`member_3`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollnumber` (`rollnumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `g_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
