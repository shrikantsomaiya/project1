-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 25, 2022 at 08:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(4) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES
(1, 'Computer Science'),
(2, 'Information Technolo'),
(3, 'Electronic and Telec'),
(4, 'Artificial Intellige');

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`uname`, `pass`) VALUES
('ikrama.s', '$2y$10$0.FJuVbyPtU9k'),
('rahul', '$2y$10$BTGwO340kK3oV'),
('shrikant.b', 'bhosle');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `uname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `faname` varchar(20) NOT NULL,
  `moname` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nmail` varchar(50) DEFAULT NULL,
  `dept` int(4) NOT NULL,
  `flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`uname`, `fname`, `lname`, `faname`, `moname`, `phone`, `email`, `nmail`, `dept`, `flag`) VALUES
('shrikant.b', 'Shrikant', 'Bhosle', 'Ankush', 'Lalita', 7710892864, 'shrikant.bhosle@somaiya.edu', 'shrikantbhosle12@gmail.com', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `dept` (`dept`),
  ADD KEY `uname` (`uname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table1`
--
ALTER TABLE `table1`
  ADD CONSTRAINT `table1_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `table1_ibfk_2` FOREIGN KEY (`uname`) REFERENCES `login1` (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
