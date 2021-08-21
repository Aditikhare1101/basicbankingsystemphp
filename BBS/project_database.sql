-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 08:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_report`
--

CREATE TABLE `customer_report` (
  `SRNO.` int(100) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `BALANCE` float NOT NULL,
  `MOBILE NO.` float NOT NULL,
  `GMAIL ID` varchar(255) NOT NULL,
  `ADDRESS` text NOT NULL,
  `DATE_TIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_report`
--

INSERT INTO `customer_report` (`SRNO.`, `GENDER`, `NAME`, `BALANCE`, `MOBILE NO.`, `GMAIL ID`, `ADDRESS`, `DATE_TIME`) VALUES
(1, 'female', 'Aditi Khare', 8900010, 9087650000, 'aditikhare@gmail.com', 'Nagpur,India', '2021-08-18 20:11:59'),
(2, 'male', 'Arpit Kumar', 888934, 8907650000, 'arpit@gmail.com', 'Pune,India', '2021-08-18 20:11:59'),
(3, 'male', 'Amit Sharma', 88760, 789065000, 'amit90@gmail.com', 'Delhi,India', '2021-08-18 20:17:40'),
(4, 'Female', 'Swati Mishra', 79796, 980234000, 'swatimishra@gmail.com', 'Mumbai,India', '2021-08-18 20:17:40'),
(4, 'female', 'Arti Sharma', 77789, 8877010000, 'arti45@gmail.com', 'Pune,India', '2021-08-18 20:21:32'),
(6, 'male', 'Anil Khare', 880765, 9978060000, 'anilkhare05@gmail.com', 'Pune,India', '2021-08-18 20:21:32'),
(7, 'Female', 'Aditi Sharma', 7900, 899765000, 'aditi67@gmail.com', 'Hyderabad, India', '2021-08-18 20:26:04'),
(8, 'Male', 'Archit Shukla', 790060, 8800760000, 'archit01@gmail.com', 'Pune, India', '2021-08-18 20:26:04'),
(9, 'Female', 'Swarangi Tathe', 79899, 7890650000, 'swarangi56@gmail.com', 'Nagpur, India', '2021-08-18 20:29:47'),
(10, 'Male', 'Sunil Khare', 889769, 9870560000, 'sunil66@gmail.com', 'Mumbai, India', '2021-08-18 20:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `transcation_history`
--

CREATE TABLE `transcation_history` (
  `TOC` varchar(255) NOT NULL,
  `FROMC` varchar(255) NOT NULL,
  `MONEY TRANSFER` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transcation_history`
--

INSERT INTO `transcation_history` (`TOC`, `FROMC`, `MONEY TRANSFER`) VALUES
('Aditi Khare', 'Arpit Kumar', 1),
('Aditi Khare', 'Anil Khare', 10000),
('Archit Shukla', 'Amit Sharma', 1000),
('Swati Mishra', 'Aditi Sharma', 890),
('Swarangi Tathe', 'Sunil Khare', 999),
('Aditi Khare', 'Arpit Kumar', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_report`
--
ALTER TABLE `customer_report`
  ADD PRIMARY KEY (`SRNO.`,`DATE_TIME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
