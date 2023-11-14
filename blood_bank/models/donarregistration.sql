-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 09:02 AM
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
  `Blood Type` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `City` varchar(100) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`ID`, `Name`, `Number`, `Email`, `Blood Type`, `password`, `City`, `availability`) VALUES
(1, 'md. shohid', 111111111, 'sojibaiub203@gmail.com', 'A+', '123', 'dhaka', 'available'),
(2, 'ruhi', 115564889, 'sojibaiub03@gmail.com', 'B-', '12345', 'Mymensingh', ''),
(3, 'md. shohidul islam', 1222222222, 'sojibi3@gmail.com', 'AB+', '1253', 'Sylhet', ''),
(4, 'tohi', 1222222222, 'sojibaiub0@gmail.com', 'O+', '123123', 'dhaka', ''),
(5, 'md. shohid', 111111111, 'sojibaiub203@gmail.com', 'O+', '147', 'dhaka', 'available'),
(6, 'md. shohidul islam', 2147483647, 'sojibaiub111@gmail.com', 'B-', '159', 'dhaka', 'available'),
(7, 'xammp', 2147483647, 'x@xmpl.com', 'O-', '1011', 'mymensingh', '25-11-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donarregistration`
--
ALTER TABLE `donarregistration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donarregistration`
--
ALTER TABLE `donarregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
