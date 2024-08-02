-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 11:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srec_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`name`, `rollno`, `roomno`, `outpasstype`, `outdate`, `indate`, `outtime`, `intime`, `place`, `status`) VALUES
('Rashwinth.v', 727623, 100, 'on', '2024-01-06', '2024-01-08', '13:33', '03:33', 'pollachi', 'accepted'),
('Rashwinth.v', 727623, 103, 'on', '2024-01-15', '2024-01-17', '06:28', '10:28', 'pollachi', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Roll_no` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roomno` int(11) NOT NULL,
  `class_coordinator` varchar(20) NOT NULL,
  `warden` varchar(20) NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `HOD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Roll_no`, `password`, `name`, `roomno`, `class_coordinator`, `warden`, `Phone_No`, `HOD`) VALUES
('727623', 123, 'Annar', 325, 'Jaswanth', 'Harsshanth', 'Geetha', 'JHG'),
('727623mca063', 0, ' ', 0, '', ' ', '', ' '),
('727623mca063', 741, ' Dinesh ', 103, 'divya', ' ganesh', '7904382862', ' muthuswami');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`username`, `password`) VALUES
('admin', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
