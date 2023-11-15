-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 08:28 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `donarregistration`
--

CREATE TABLE `donarregistration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Number` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `BloodType` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `City` varchar(100) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`ID`, `Name`, `Number`, `Email`, `BloodType`, `password`, `City`, `availability`) VALUES
(1, 'ms islam', 11111111, 'sojibaiub203@gmail.com', 'A+', '159', 'dhaka', 'not available'),
(2, 'md. shohidul ', 64235887, 'shohidul@xmpl.com', 'B+', '147', 'mymensingh', 'available'),
(3, 'shohidul ', 2147483647, 'shohidul@gmail.com', 'A+', '111', 'dhaka', 'available'),
(4, 'xammp', 666666, 'xammp@xmpl.com', 'B+', '123', 'sylhet', 'not available'),
(5, 'avizit', 987476235, 'avizit@gmail.com', 'O+', 'a1a2', 'dhaka', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE `requestblood` (
  `id` int(11) NOT NULL,
  `bloodGroup` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestblood`
--

INSERT INTO `requestblood` (`id`, `bloodGroup`, `location`, `date`, `mobileNumber`, `comment`, `owner`) VALUES
(2, 'O+', 'Evercare Hospital, Dhaka', '2023-11-14', '1446448', 'I need urgent B+ plasma on 14 Nov, 2023 at Evercare Hospital in Dhaka.\r\nIf anyone is available, please contact me using the mobile number given below.\r\n\r\nThanks in advance.                                             ', 'test'),
(5, 'A+', 'dhaka', '2023-11-21', '131566561', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'test'),
(8, 'B+', 'Mymensingh', '2023-11-15', '0544545514', 'Nulla nulla nisl, accumsan ornare purus at, dignissim finibus enim. Curabitur a neque dictum, maximus magna facilisis, mattis quam. Phasellus ligula erat, pulvinar in convallis ac, dictum vel orci. Aliquam fermentum nec lorem nec eleifend. Proin tincidunt efficitur ipsum, vel volutpat quam commodo a. Phasellus vitae rutrum libero.', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donarregistration`
--
ALTER TABLE `donarregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donarregistration`
--
ALTER TABLE `donarregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
