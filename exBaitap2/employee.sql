-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 11:05 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` tinyint(1) DEFAULT NULL,
  `Address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `Status` bit(1) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `FirstName`, `LastName`, `Gender`, `Address`, `DoB`, `Status`, `CreateDate`) VALUES
(1, '1111111', 'hj', 1, '1111 ', '1940-01-01', b'0', '2019-01-09 00:00:00'),
(2, 'v', 'b', 0, '1', '2019-01-16', b'0', '2019-01-24 00:00:00'),
(3, '1111111', 'hj', 1, '11111', '1940-01-01', b'0', '2019-01-16 14:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `RoleName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AllowAdd` tinyint(1) DEFAULT NULL,
  `AllowEdit` tinyint(1) DEFAULT NULL,
  `AllowDelete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `RoleName`, `AllowAdd`, `AllowEdit`, `AllowDelete`) VALUES
(1, 'Trưởng Phòng', 1, 1, 1),
(2, 'Nhân Viên', 1, 0, 0),
(3, 'Giám Đốc', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rolemapping`
--

CREATE TABLE `rolemapping` (
  `ID` int(11) NOT NULL,
  `EmployeeId` int(11) DEFAULT NULL,
  `RoleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rolemapping`
--

INSERT INTO `rolemapping` (`ID`, `EmployeeId`, `RoleId`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rolemapping`
--
ALTER TABLE `rolemapping`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EmployeeId` (`EmployeeId`),
  ADD KEY `RoleId` (`RoleId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rolemapping`
--
ALTER TABLE `rolemapping`
  ADD CONSTRAINT `rolemapping_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employee` (`ID`),
  ADD CONSTRAINT `rolemapping_ibfk_2` FOREIGN KEY (`RoleId`) REFERENCES `role` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
