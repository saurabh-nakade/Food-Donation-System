-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 04:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donorreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooddetail`
--

CREATE TABLE `fooddetail` (
  `Did` int(11) NOT NULL,
  `DName` varchar(255) NOT NULL,
  `FItem` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `PDate` date NOT NULL,
  `MNo` varchar(12) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `PAddress` varchar(255) NOT NULL,
  `FoodQty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooddetail`
--

INSERT INTO `fooddetail` (`Did`, `DName`, `FItem`, `Description`, `PDate`, `MNo`, `State`, `City`, `PAddress`, `FoodQty`) VALUES
(3, 'saurabh', 'rice', 'nice food', '2022-08-12', '7974934821', 'MH', 'Nagpur', 'bapu nagar, nandanvan', '50 plates'),
(4, 'Vidit', 'Pizza', 'nice food', '2022-08-12', '7974934821', 'MH', 'Nagpur', 'bapu nagar, nandanvan', '10 pizza'),
(5, 'Vidit', 'Pizza', 'nice food', '2022-08-12', '7974934821', 'MH', 'Nagpur', 'bapu nagar, nandanvan', '34'),
(6, 'sai', 'burger', 'good food', '2022-08-22', '7974934821', 'Madhya Pradesh', 'Indore', 'bapu nagar, nandanvan', '50 burger'),
(7, 'asd', 'Pizza', 'nice food', '2022-10-18', '7974934821', 'MAHARASHTRA', 'NAGPUR', '132,BAPU NAGAR', '30 '),
(8, 'rubal', 'pizza', 'fyydr7u', '2023-06-06', '7974934821', 'maharashtra', 'nagpur', 'dsa', '34'),
(9, 'rubal', 'pixxa', 'dsd', '2021-05-05', '7974934821', 'kjhk', ',knkn', 'jhk', '67'),
(10, 'smith', 'pizza', 'tasty', '2023-07-18', '4393443934', 'maharashtra', 'nagpur', 'nandanvan', '10');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `email`, `password`) VALUES
(3, 'saurabh', 'saurabh@gmail.com', '133057facf49cbe6520b15a4d96ee395'),
(4, 'sai', 'sai@gmail.com', 'b71c97899838e41eb1ab746f628fa105'),
(5, 'saurabh', 'sai1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'rubal', 'rubal@gmail.com', '5b91a777a7036b581f634c0b8e4e78a2'),
(7, 'smith', 'smith@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `RId` int(11) NOT NULL,
  `RName` varchar(255) NOT NULL,
  `FQty` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`RId`, `RName`, `FQty`, `Description`) VALUES
(4, 'Swayam', '50 plates', 'nice food'),
(5, 'Swayam', '10 pizza', 'nice food'),
(6, 'Kunal', '50 burger', 'plzz'),
(7, 'Kunal', '50 burger', 'plzz'),
(8, 'saii', '10 pizza', 'nice food'),
(9, 'rubal', '56', 'pixxa'),
(10, 'saurabh', '10', 'pizza'),
(11, 'saurabh', '7', 'burger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooddetail`
--
ALTER TABLE `fooddetail`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`RId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fooddetail`
--
ALTER TABLE `fooddetail`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `RId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
