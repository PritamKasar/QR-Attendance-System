-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 02:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scannattend`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sr_no` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prn` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mo_no` int(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `faculty_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sr_no`, `name`, `prn`, `email`, `mo_no`, `time`, `faculty_id`) VALUES
(1, 'Bhushan Nandwalkar', 214, 'bn12@outlook.com', 2147483647, '2023-11-29 14:53:42', 0),
(2, 'Harshal Aambadas Mhaske', 2152006001256, 'harshal123@gmail.com', 2147483647, '2023-11-29 14:54:08', 0),
(3, 'Malti Suresh Bhokare', 2154491245012, 'maltibhokare2003@gmail.com', 2147483647, '2023-11-29 14:54:55', 0),
(4, 'Makarand Shahade', 215, 'mrs12@outlook.com', 2147483647, '2023-11-29 14:57:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr_no` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `faculty_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr_no`, `username`, `password`, `time`, `faculty_id`) VALUES
(1, 'pritam', 'pmk123', '2023-10-25 19:25:47', 0),
(2, 'makarand shahade', 'ms123', '2023-11-22 12:02:33', 0),
(4, 'bhushan nandwalkar', 'bn123', '2023-11-22 12:03:46', 0),
(5, 'mayuri kulkarni', 'mk123', '2023-11-22 12:04:29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `sr_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
