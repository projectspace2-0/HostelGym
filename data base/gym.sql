-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 06:27 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `login` time DEFAULT NULL,
  `logout` time DEFAULT NULL,
  `user_type` varchar(1000) NOT NULL DEFAULT 'student',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `roll`, `name`, `date`, `login`, `logout`, `user_type`, `status`) VALUES
(34, '2', 'vikas', '2019-06-14', '18:33:55', '18:33:56', 'student', 1),
(35, '2', 'vikas', '2019-06-14', '18:33:57', '18:33:58', 'student', 1),
(36, '3', 'Rishu', '2019-06-14', '18:33:59', '18:34:00', 'student', 1),
(37, '8', 'abcd', '2019-06-14', '18:34:29', '18:34:30', 'faculty', 1),
(38, '8', 'abcd', '2019-06-14', '18:34:31', '18:34:32', 'faculty', 1),
(39, '4', 'Sravan', '2019-06-14', '23:10:03', NULL, 'student', 1),
(40, '5', 'Anju', '2019-06-14', '23:12:52', NULL, 'student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `from_date`, `to_date`, `reason`, `status`) VALUES
(5, '2019-06-07', '2019-06-12', 'pongal', 1),
(6, '2019-06-05', '2019-06-05', 'holi', 1),
(7, '2019-06-15', '2019-06-15', 'bundh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `roll` varchar(40) NOT NULL,
  `college` varchar(50) NOT NULL,
  `branch` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `room` varchar(10) NOT NULL,
  `startday` date NOT NULL,
  `expiry` date NOT NULL,
  `type` int(10) NOT NULL,
  `user_type` varchar(1000) NOT NULL DEFAULT 'student',
  `fee` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `college`, `branch`, `year`, `contact`, `gender`, `room`, `startday`, `expiry`, `type`, `user_type`, `fee`, `status`) VALUES
(20, 'ram', '7', 'AEC', 'IT', '3', '9494515196', 'Male', 'C-131', '2019-05-15', '2019-07-01', 2, 'student', 350, 1),
(24, 'Anju', '5', 'Aec', 'it', '3', '8074055254', 'Male', 'A403', '2019-06-20', '2019-07-01', 1, 'student', 350, 1),
(25, 'Sravan', '4', 'Aec', 'it', '3', '984856828', 'Male', 'D21', '2019-06-21', '2019-07-01', 2, 'student', 200, 1),
(26, 'Rishu', '3', 'Aec', 'it', '3', '7780375259', 'Female', 'A403', '2019-06-22', '2019-07-01', 1, 'student', 200, 1),
(27, 'vikas', '2', 'Acoe', 'it', '3', '9705763028', 'Male', 'E115', '2019-06-23', '2019-07-01', 2, 'student', 350, 1),
(31, 'amith', '1', 'AEC', 'CSE', '3', '1524262w', 'Male', '40o5', '2019-05-14', '2019-06-01', 2, 'student', 350, 0),
(32, 'abcd', '8', '', '', '', '4894298u9', 'Male', 'e-98', '0000-00-00', '0000-00-00', 2, 'faculty', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
