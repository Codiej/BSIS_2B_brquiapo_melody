-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 08:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veryfastfood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `User_ID` int(11) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Middlename` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Complete_Address` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Confirm_Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`User_ID`, `Firstname`, `Middlename`, `Lastname`, `Email_Address`, `Complete_Address`, `Contact`, `Username`, `Password`, `Confirm_Password`) VALUES
(1, 'Errold', 'Alcera', 'Daz', 'erroldalcera.daz@bicol-u.edu.ph', 'Brgy. 42 Rawis, Legazpi City, Albay', '09106335122', 'errolddaz', '12345678', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
