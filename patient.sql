-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 27, 2024 at 07:12 AM
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
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('a000b1', 'fsduad@gmail.com', 12345),
('a000b2', 'hhgjkahdj@gmail.com', 12346),
('a000b3', 'nhnnamnh@gmail.com', 12347),
('a000b4', 'sahinsk370615@gmail.com', 7654321),
('a000b5', 'sanysk615@gmail.com', 2147483647),
('a000b6', 'sanysk615@gmail.com', 7654321);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor id` int(10) NOT NULL,
  `doctor name` varchar(100) NOT NULL,
  `specialties` varchar(100) NOT NULL,
  `mob no` int(25) NOT NULL COMMENT '+91'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor id`, `doctor name`, `specialties`, `mob no`) VALUES
(1001, 'Zimmy', 'Heart', 1876098712),
(1002, 'Sam', 'Skin', 1870022004),
(1003, 'souvik', 'skin', 1870022006),
(1004, 'ratan', 'skin', 1870022001);

-- --------------------------------------------------------

--
-- Table structure for table `patient1`
--

CREATE TABLE `patient1` (
  `patient id` int(10) NOT NULL,
  `Patient Name` varchar(200) NOT NULL,
  `Height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `Blood Pressure(S)` int(5) NOT NULL,
  `Blood Pressure(D)` int(5) NOT NULL,
  `sp O2` int(5) NOT NULL,
  `Blood Sugar(f)` int(5) NOT NULL,
  `Blood sugar(PP)` int(5) NOT NULL,
  `Blood group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient1`
--

INSERT INTO `patient1` (`patient id`, `Patient Name`, `Height`, `weight`, `Blood Pressure(S)`, `Blood Pressure(D)`, `sp O2`, `Blood Sugar(f)`, `Blood sugar(PP)`, `Blood group`) VALUES
(1, 'Sahin sk', 20, 20, 20, 20, 20, 20, 20, 'O+'),
(2, 'Md Aryan', 30, 30, 30, 30, 30, 30, 30, 'O-'),
(3, 'Atindra Ghoush', 40, 40, 40, 40, 40, 40, 40, 'AB+'),
(4, 'DEEP Das', 50, 50, 50, 50, 50, 50, 50, 'AB-'),
(5, 'jerry', 20, 20, 20, 20, 20, 20, 20, 'O+'),
(6, 'TOM', 20, 20, 20, 20, 20, 20, 20, 'O+'),
(7, 'Aniket', 45, 65, 34, 56, 45, 34, 56, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `patient2`
--

CREATE TABLE `patient2` (
  `patient id` int(10) NOT NULL,
  `Patient Name` varchar(100) NOT NULL,
  `Blood_details` varchar(10) NOT NULL,
  `Blood_pressure` int(10) NOT NULL,
  `Blood_sugur` int(10) NOT NULL,
  `Height` int(10) NOT NULL,
  `spO2` int(10) NOT NULL,
  `Weight` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient2`
--

INSERT INTO `patient2` (`patient id`, `Patient Name`, `Blood_details`, `Blood_pressure`, `Blood_sugur`, `Height`, `spO2`, `Weight`) VALUES
(27, 'Aryan', 'O+,\r\n', 190, 110, 156, 89, 78),
(28, 'Sahin', 'A+,', 90, 104, 190, 72, 62),
(29, 'Aryan', 'O+,\r\n', 190, 110, 156, 89, 78),
(30, 'Sahin', 'A+,', 90, 104, 190, 72, 62);

-- --------------------------------------------------------

--
-- Table structure for table `patient_register`
--

CREATE TABLE `patient_register` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aadhar` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `pincode` int(20) NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_register`
--

INSERT INTO `patient_register` (`id`, `name`, `aadhar`, `email`, `number`, `address`, `pincode`, `password`, `gender`) VALUES
(10, 'Sahin Sk', '6543276', 'sanysk615@gmail.com', '+919064113673', 'Dhatrigram', 713405, 'b3e95595ad03b4c0c1d29a35f95ec4c7', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor id`);

--
-- Indexes for table `patient1`
--
ALTER TABLE `patient1`
  ADD PRIMARY KEY (`patient id`);

--
-- Indexes for table `patient2`
--
ALTER TABLE `patient2`
  ADD PRIMARY KEY (`patient id`);

--
-- Indexes for table `patient_register`
--
ALTER TABLE `patient_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient2`
--
ALTER TABLE `patient2`
  MODIFY `patient id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `patient_register`
--
ALTER TABLE `patient_register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
