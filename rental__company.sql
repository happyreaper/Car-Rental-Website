-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 06:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental _company`
--

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `V_ID` int(11) NOT NULL,
  `From_DATE` date NOT NULL,
  `TILL_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `V_ID` int(11) NOT NULL,
  `MODEL` varchar(50) NOT NULL,
  `TYPE` varchar(10) NOT NULL,
  `D_RATE` int(11) NOT NULL,
  `W_RATE` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`V_ID`, `MODEL`, `TYPE`, `D_RATE`, `W_RATE`, `O_ID`, `YEAR`) VALUES
(1, 'Toyota Camry', 'Medium', 50, 320, 2, 2012),
(2, 'Toyota Yaris', 'Compact', 30, 200, 2, 2014),
(3, 'Toyota Rav4', 'SUV', 70, 450, 2, 2017),
(4, 'Toyota Sienna', 'Van', 120, 670, 2, 2015),
(5, 'Chevrolet Caprice', 'Large', 60, 420, 2, 1996),
(6, 'Chevrolet Silverado', 'Truck', 100, 650, 2, 2018),
(7, 'Chevrolet Cruze', 'Medium', 50, 320, 2, 2013),
(8, 'Nissan Pathfinder', 'SUV', 70, 450, 2, 2017),
(9, 'Nissan NV200', 'Van', 120, 670, 2, 2018),
(10, 'MINI Cooper', 'Compact', 30, 200, 2, 2012),
(11, 'Honda Civic', 'Compact', 30, 200, 5, 2013),
(12, 'Hyundai Grandeur', 'Large', 60, 420, 1, 2018),
(13, 'Ford Taurus', 'Large', 60, 420, 3, 2016),
(14, 'Ford Fusion', 'Medium', 50, 320, 4, 2018),
(15, 'Ford Transit', 'Van', 120, 670, 2, 2013),
(16, 'Hyundai Sonata', 'Medium', 50, 320, 1, 2017),
(17, 'Kia Optima', 'Medium', 50, 320, 2, 2016),
(18, 'GMC Savanna', 'Van', 120, 670, 2, 2018),
(19, 'GMC Canyon', 'Truck', 100, 650, 2, 2014),
(20, 'Kia Cadenza', 'Large', 60, 420, 4, 2017),
(21, 'Nissan Armada', 'SUV', 70, 450, 6, 2012),
(22, 'Hyundai Accent', 'Compact', 30, 200, 2, 2018),
(23, 'Toyota Corolla', 'Medium', 50, 320, 7, 2006);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `C_ID` int(11) NOT NULL,
  `NAME` varchar(15) NOT NULL,
  `PHONE` varchar(16) DEFAULT NULL,
  `TYPE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_ID`, `NAME`, `PHONE`, `TYPE`) VALUES
(1, 'J.Smith', '123-456-7890', 'Individual'),
(2, 'R.Wong', '234-567-8901', 'Individual'),
(3, 'A.Scott', '345-678-9012', 'Individual'),
(4, 'H.Potter', '456-789-0123', 'Individual'),
(5, 'Facebook', '567-890-1234', 'Company'),
(6, 'Amazon', '678-901-2345', 'Company'),
(7, 'WallMart', '789-012-3456', 'Company'),
(8, 'P.Jackson', '890-123-4567', 'Individual'),
(9, 'SpaceX', '901-234-5678', 'Company'),
(10, 'T.Lannister', '012-345-6789', 'Individual'),
(12, 'M.Abbas', '000-000-0000', 'Individual'),
(13, 'Elon Musk', '222-333-4444', 'Individual'),
(15, 'K.Lamar', '333-333-3333', 'Individual'),
(16, 'Jay Z', '777-777-7777', 'Individual'),
(17, 'PepsiCo', '999-999-9999', 'Company'),
(18, 'Tesla', '898-899-8989', 'Company'),
(19, 'J.Balvin', '146-824-7890', 'Individual'),
(20, 'I.Bharmal', '626-626-2626', 'Individual'),
(21, 'Cool Man', '000-000-0001', 'Individual');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `O_ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHONE` varchar(16) DEFAULT NULL,
  `O_TYPE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`O_ID`, `NAME`, `PHONE`, `O_TYPE`) VALUES
(1, 'Chase Manhattan', '111-111-1111', 'Bank'),
(2, 'Rent-All', '222-222-2222', 'Company'),
(3, 'D.Targaryen', '333-333-3333', 'Individual'),
(4, 'Wells Fargo', '444-444-4444', 'Bank'),
(5, 'G.House', '555-555-5555', 'Individual'),
(6, 'M. Abbas', '111-222-3333', 'Individual'),
(7, 'Computer Depo', '909-090-0909', 'Company');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `RES_ID` int(11) NOT NULL,
  `R_TYPE` varchar(10) NOT NULL,
  `V_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`RES_ID`, `R_TYPE`, `V_ID`, `C_ID`) VALUES
(1, 'D_RATE', 1, 12),
(2, 'D_RATE', 6, 13),
(4, 'D_RATE', 9, 15),
(5, 'W_RATE', 17, 16),
(6, 'W_RATE', 4, 17),
(7, 'D_RATE', 2, 18),
(8, 'D_RATE', 10, 19),
(9, 'D_RATE', 15, 20),
(10, 'D_RATE', 13, 21);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

CREATE TABLE `reservation_details` (
  `RES_ID` int(11) NOT NULL,
  `S_DATE` date NOT NULL,
  `E_DATE` date NOT NULL,
  `AMOUNT` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`RES_ID`, `S_DATE`, `E_DATE`, `AMOUNT`) VALUES
(1, '2018-04-24', '2018-04-26', 100),
(2, '2018-04-26', '2018-04-30', 400),
(4, '2018-05-02', '2018-05-05', 360),
(5, '2018-05-05', '2018-05-19', 640),
(6, '2018-04-25', '2018-04-28', 287.14),
(7, '2018-05-01', '2018-05-06', 150),
(8, '2018-04-29', '2018-05-03', 120),
(9, '2018-04-25', '2018-04-29', 480),
(10, '2018-04-26', '2018-05-04', 480);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD KEY `V_ID` (`V_ID`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`V_ID`),
  ADD KEY `O_ID` (`O_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`O_ID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`RES_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `V_ID` (`V_ID`);

--
-- Indexes for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD PRIMARY KEY (`RES_ID`,`S_DATE`,`E_DATE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `V_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `RES_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `available`
--
ALTER TABLE `available`
  ADD CONSTRAINT `available_ibfk_1` FOREIGN KEY (`V_ID`) REFERENCES `cars` (`V_ID`);

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `owners` (`O_ID`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`C_ID`) REFERENCES `customers` (`C_ID`),
  ADD CONSTRAINT `reservations_ibfk_4` FOREIGN KEY (`V_ID`) REFERENCES `cars` (`V_ID`);

--
-- Constraints for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD CONSTRAINT `reservation_details_ibfk_1` FOREIGN KEY (`RES_ID`) REFERENCES `reservations` (`RES_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
