-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2021 at 10:03 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailbgdj_e_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `Did` int(2) NOT NULL,
  `D_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Did`, `D_name`) VALUES
(1, 'Web Desiner'),
(2, 'Graphic Desiner'),
(3, 'HR'),
(4, 'Communication'),
(5, 'UI Expert');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Eid` int(3) NOT NULL,
  `Fullname` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Username` varchar(10) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Gender` int(1) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Skill` varchar(50) DEFAULT NULL,
  `Designation` varchar(20) DEFAULT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Joining_Date` datetime DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL,
  `reset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `Fullname`, `Email`, `Username`, `Password`, `Phone`, `Gender`, `Address`, `Skill`, `Designation`, `Image`, `Joining_Date`, `Status`, `reset`) VALUES
(26, 'kabul', 'kabul@gmail.com', 'kabul', '08fa61b024cf87dae5a7996efc3be273502d9411', 2147483647, 0, 'wedw', 'Design Seo ', 'Senior Graphic Desig', '016345346346.jpg', '2021-04-10 21:47:44', 0, ''),
(28, 'Farid Rony', 'farid@gmail.com', 'farid', '6a214fde6c1f8c84902a5576bbe98834623913cc', 234234, 0, 'dhaka', 'HTML CSS XD ', 'Graphic Desiner', '234234.jpg', '2021-04-14 23:23:14', 0, ''),
(29, 'farid rony', 'shikhbeshobai@gmail.com', 'ss', '011c945f30ce2cbafc452f39840f025693339c42', 172321545, 0, '4700 Cherry Creek S Dr', 'HTML CSS ', 'HR', '0172321545.jpg', '2021-04-28 23:12:55', 0, ''),
(30, 'kalam hossain', 'dhakadaily24@gmail.com', 'kalam', '9107e857be2452312923b4f03c915fc6c9c0dc5d', 1897987987, 0, 'Dhaka', 'HTML CSS ', 'HR', '01897987987.jpg', '2021-04-28 13:28:52', 0, ''),
(31, 'farid rony', 'faridrony55@gmail.com', 'faridrony', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 1897987987, 0, 'Dhaka', 'HTML CSS XD ', 'Communication', '01897987987.jpg', '2021-04-28 14:08:02', 0, '96d99d66ab09bc381bd7a42950c88e5012cc1a1435795252');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `Sid` int(2) NOT NULL,
  `S_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`Sid`, `S_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'XD'),
(4, 'UI/UX'),
(5, 'Marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `Did` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Eid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `Sid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
