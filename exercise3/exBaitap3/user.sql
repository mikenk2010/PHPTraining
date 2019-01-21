-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 11:42 AM
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
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gender` bit(1) NOT NULL,
  `Address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DoB` date NOT NULL,
  `Status` bit(1) NOT NULL,
  `CreateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Gender`, `Address`, `DoB`, `Status`, `CreateDate`) VALUES
('6', '2222222', b'1', '1111111', '1940-01-01', b'0', '2019-01-20 10:32:58'),
('6', '3', b'1', '11111111111111', '1940-01-01', b'1', '2019-01-20 07:55:04'),
('ba', 'Pham', b'1', '111111111', '1940-01-01', b'0', '2019-01-20 07:58:40'),
('g', 'h', b'0', '1111', '2019-01-10', b'0', '2019-01-23 09:21:22'),
('ga', 'agga', b'1', '1111', '1940-01-01', b'0', '2019-01-20 07:53:53'),
('h2', 'h2', b'1', '2982sÃ¢', '1940-01-01', b'0', '2019-01-16 14:20:42'),
('hahah', 'Pham', b'1', '111111111', '1940-01-01', b'0', '2019-01-20 07:58:04'),
('hi', 'pham', b'1', '            ', '1940-01-01', b'1', '2019-01-20 07:54:36'),
('KA', 'KA', b'0', 'hahahah', '2019-01-17', b'1', '2019-01-23 05:15:18'),
('kak', 'kaaa', b'1', '            ', '1940-01-01', b'1', '2019-01-20 07:59:20'),
('Khoi', 'Pham', b'0', 'abbbbbbbbbbbbbbb', '1950-08-13', b'1', '2019-01-16 11:18:02'),
('pham', 'hi', b'1', '1111111', '1940-01-01', b'0', '2019-01-20 07:54:04'),
('Trinh', 'Pham', b'0', '111111', '1953-08-06', b'1', '2019-01-16 14:10:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`FirstName`,`LastName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
