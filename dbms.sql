-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2025 at 08:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Admin_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin_ID`) VALUES
(1, 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cc_3`
--

CREATE TABLE `cc_3` (
  `id` int(11) NOT NULL,
  `Room_no` varchar(50) DEFAULT NULL,
  `Enroll_no` varchar(50) DEFAULT NULL,
  `Time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cc_3`
--

INSERT INTO `cc_3` (`id`, `Room_no`, `Enroll_no`, `Time_stamp`) VALUES
(1, 'Lab-1', 'IIT2022164', '2025-12-26 06:48:23'),
(2, 'Lab-2', 'IIT2022166', '2025-12-26 06:48:23'),
(3, 'Lab-5', '12345', '2025-12-26 06:55:53'),
(4, 'Lab-5', '12345', '2025-12-26 06:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `Room_no` varchar(50) DEFAULT NULL,
  `Enroll_no` varchar(50) DEFAULT NULL,
  `Time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `Room_no`, `Enroll_no`, `Time_stamp`) VALUES
(1, 'Reading-Hall', 'IIT2022167', '2025-12-26 06:48:23'),
(2, 'Reference-Section', 'IIT2022168', '2025-12-26 06:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Stu_name` varchar(100) DEFAULT NULL,
  `Enroll_no` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Credit` int(11) DEFAULT 100,
  `Loc` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Stu_name`, `Enroll_no`, `Email`, `Credit`, `Loc`, `DOB`) VALUES
(1, 'Test Student', '12345', 'test@example.com', 95, 'CC3', '2000-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tot_student`
--

CREATE TABLE `tot_student` (
  `id` int(11) NOT NULL,
  `Stu_name` varchar(100) NOT NULL,
  `Enroll_no` varchar(50) NOT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tot_student`
--

INSERT INTO `tot_student` (`id`, `Stu_name`, `Enroll_no`, `Pass`, `Email`) VALUES
(1, 'Test User', '12345', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cc_3`
--
ALTER TABLE `cc_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tot_student`
--
ALTER TABLE `tot_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cc_3`
--
ALTER TABLE `cc_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tot_student`
--
ALTER TABLE `tot_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
