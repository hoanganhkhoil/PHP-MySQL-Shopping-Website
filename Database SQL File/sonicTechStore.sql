-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 11:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonicTechStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `customerID` int(11) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `userPassword` varchar(150) NOT NULL,
  `customerName` varchar(150) NOT NULL,
  `customerAddress` varchar(250) NOT NULL,
  `customerPhone` varchar(25) NOT NULL,
  `customerEmail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`customerID`, `userName`, `userPassword`, `customerName`, `customerAddress`, `customerPhone`, `customerEmail`) VALUES
(4, 'admin', '$2y$10$Tie25.ymNVYejl6ggDsIieA70ZeDL54iBiDdicE05ufCuUhLZhpha', 'Khoi Hoang', '12 Sandra Ct', '2407162326', 'hoang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`productID`, `productName`, `productPrice`, `productImage`) VALUES
(1, 'Iphone 7', 699.00, 'iphone7.png'),
(2, 'Iphone 7s', 799.00, 'iphone7s.png'),
(3, 'Ipad Air', 599.00, 'ipadair.png'),
(4, 'Ipad Pro', 899.00, 'ipadpro.png'),
(5, 'Macbook Air', 999.00, 'macbookair.png'),
(6, 'Macbook Pro', 1399.00, 'macbookpro.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
