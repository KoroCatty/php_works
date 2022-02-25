-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2022 at 01:04 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(5) NOT NULL,
  `carMake` varchar(50) NOT NULL,
  `carModel` varchar(50) NOT NULL,
  `carModelYear` int(4) NOT NULL,
  `carColour` varchar(50) NOT NULL,
  `carStatus` varchar(4) NOT NULL,
  `carPrice` decimal(10,2) NOT NULL,
  `carFeatured` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `carMake`, `carModel`, `carModelYear`, `carColour`, `carStatus`, `carPrice`, `carFeatured`) VALUES
(1, 'Toyota', 'Yaris', 2017, 'Black', 'Used', '0.00', 'Y'),
(2, 'Toyota', 'Corolla', 2018, 'Red', 'New', '0.00', 'Y'),
(3, 'Toyota', 'Camry', 2017, 'Green', 'Used', '0.00', 'N'),
(4, 'Toyota', 'Corolla Sedan', 2018, 'Silver', 'New', '0.00', 'N'),
(5, 'Toyota', 'Prius', 2017, 'Black', 'Used', '0.00', 'Y'),
(6, 'Holden', 'Belmont', 2017, 'Black', 'Used', '0.00', 'N'),
(7, 'Holden', 'Monaro', 2018, 'Silver', 'New', '0.00', 'N'),
(8, 'Holden', 'Brougham', 2017, 'Blue', 'Used', '0.00', 'Y'),
(9, 'Mazda', 'Miata', 2017, 'Silver', 'Used', '0.00', 'Y'),
(10, 'Mazda', 'Convertible', 2018, 'White', 'New', '0.00', 'N'),
(11, 'Mazda', 'Sedan', 2017, 'Red', 'Used', '0.00', 'N'),
(12, 'Mazda', 'Sedan', 2018, 'White', 'Used', '0.00', 'N'),
(13, 'Mazda', 'CX-3', 2017, 'Red', 'Used', '0.00', 'Y'),
(14, 'Hyundai', 'Tucson', 2017, 'Black', 'New', '0.00', 'Y'),
(15, 'Hyundai', 'Elantra', 2018, 'Red', 'Used', '0.00', 'N'),
(16, 'Hyundai', 'Elantra', 2017, 'Black', 'Used', '0.00', 'Y'),
(17, 'Hyundai', 'Elantra', 2018, 'Black', 'Used', '0.00', 'N'),
(18, 'Hyundai', 'Tucson', 2017, 'Red', 'New', '0.00', 'N'),
(19, 'Ford', 'Ranger', 2017, 'Dark Blue', 'Used', '0.00', 'N'),
(20, 'Ford', 'Ranger', 2018, 'Silver', 'Used', '0.00', 'N'),
(21, 'Ford', 'Ranger', 2017, 'Black', 'Used', '0.00', 'Y'),
(22, 'Mitsubishi', 'Sedan', 2017, 'Black', 'New', '0.00', 'N'),
(23, 'Mitsubishi', 'Sedan', 2018, 'Red', 'Used', '0.00', 'Y'),
(24, 'Mitsubishi', 'Sedan', 2017, 'Black', 'Used', '0.00', 'N'),
(25, 'Nissan', 'Sedan', 2017, 'Black', 'Used', '0.00', 'N'),
(26, 'Nissan', 'X-Trail', 2018, 'White', 'New', '0.00', 'Y'),
(27, 'Nissan', 'Navara', 2017, 'Black', 'Used', '0.00', 'N'),
(28, 'Honda', 'Civic', 2017, 'White', 'Used', '0.00', 'N'),
(29, 'Honda', 'Civic', 2018, 'Black', 'New', '0.00', 'Y'),
(30, 'Honda', 'Civic', 2017, 'White', 'Used', '0.00', 'N'),
(31, 'Subaru', 'WRX', 2017, 'White', 'Used', '0.00', 'N'),
(32, 'Subaru', 'WRX', 2018, 'Dark Blue', 'New', '0.00', 'Y'),
(33, 'Volkswagen', 'Phaeton', 2017, 'Black', 'Used', '0.00', 'N'),
(34, 'Volkswagen', 'Phaeton', 2018, 'Black', 'Used', '0.00', 'Y'),
(35, 'Ford', 'Coupe', 2010, 'Gold', 'Used', '50.00', 'Y'),
(36, 'Volkswagen', 'Beetle', 2015, 'Orange', 'Used', '30.00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(5) NOT NULL,
  `customerFirstName` varchar(50) NOT NULL,
  `customerLastName` varchar(50) NOT NULL,
  `customerTelephone` varchar(10) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerFirstName`, `customerLastName`, `customerTelephone`, `customerEmail`, `customerPassword`) VALUES
(1, 'Carlton', 'Watkins', '0322663399', 'carlton.watkins@gmail.com', '1234'),
(2, 'Kalum', 'Lucero', '0363625557', 'kalum.lucero@gmail.com', '1234'),
(3, 'Kierran', 'Durham', '0244460466', 'kierran.durham@gmail.com', '1234'),
(4, 'Syeda', 'Henson', '0895815162', 'syeda.henson@gmail.com', '1234'),
(5, 'Farrell', 'Carrillo', '0893971343', 'farrell.carrillo@gmail.com', '1234'),
(6, 'Elliott', 'Griffin', '0263625647', 'elliott.griffin@gmail.com', '1234'),
(7, 'Meerab', 'Fields', '0249641150', 'meerab.fields@gmail.com', '1234'),
(8, 'Ashanti', 'Mccray', '0749260231', 'ashanti.mccray@gmail.com', '1234'),
(9, 'Savanna', 'Alexander', '0755266068', 'savanna.alexander@gmail.com', '1234'),
(10, 'Shani', 'Pace', '0893103949', 'shani.pace@gmail.com', '1234'),
(11, 'Dave', 'David', '0322663399', 'dave.david@gmail.com', '1234'),
(12, 'Sam', 'Devon', '0326674849', 'sam.devon@gmail.com', '1234'),
(13, 'Todd', 'Bud', '0322663399', 'todd.bud@gmail.com', '1234'),
(14, 'k', 'k', '1234', '1@gmail.com', '1234'),
(15, 'test', 'testing', '1234', '1234@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
