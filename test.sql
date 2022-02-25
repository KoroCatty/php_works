-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2021 at 03:12 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ABC Car Fleets`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(5) NOT NULL,
  `carMake` varchar(50) NOT NULL,
  `carModel` varchar(50) NOT NULL,
  `carColour` varchar(50) NOT NULL,
  `carStatus` varchar(4) NOT NULL,
  `carPrice` decimal(10,2) NOT NULL,
) 

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `carMake`, `carModel`, `carModelYear`, `carColour`, `carMileage`, `carSeatNumber`, `carTransmission`, `carStatus`, `carPrice`, `carFeatured`, `carActiveStatus`) VALUES
(1, 'Toyota', 'Yaris', 2017, 'Black', 70000, 5, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(2, 'Toyota', 'Corolla', 2018, 'Red', 0, 5, 'Automatic', 'New', '0.00', 'Y', 'Y'),
(3, 'Toyota', 'Camry', 2017, 'Green', 70000, 5, 'Manual', 'Used', '0.00', 'N', 'Y'),
(4, 'Toyota', 'Corolla Sedan', 2018, 'Silver', 0, 5, 'Automatic', 'New', '0.00', 'N', 'Y'),
(5, 'Toyota', 'Prius', 2017, 'Black', 70000, 5, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(6, 'Holden', 'Belmont', 2017, 'Black', 70000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(7, 'Holden', 'Monaro', 2018, 'Silver', 0, 4, 'Manual', 'New', '0.00', 'N', 'Y'),
(8, 'Holden', 'Brougham', 2017, 'Blue', 70000, 5, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(9, 'Mazda', 'Miata', 2017, 'Silver', 70000, 2, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(10, 'Mazda', 'Convertible', 2018, 'White', 0, 2, 'Automatic', 'New', '0.00', 'N', 'Y'),
(11, 'Mazda', 'Sedan', 2017, 'Red', 70000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(12, 'Mazda', 'Sedan', 2018, 'White', 60000, 5, 'Manual', 'Used', '0.00', 'N', 'Y'),
(13, 'Mazda', 'CX-3', 2017, 'Red', 70000, 5, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(14, 'Hyundai', 'Tucson', 2017, 'Black', 0, 5, 'Automatic', 'New', '0.00', 'Y', 'Y'),
(15, 'Hyundai', 'Elantra', 2018, 'Red', 60000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(16, 'Hyundai', 'Elantra', 2017, 'Black', 70000, 5, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(17, 'Hyundai', 'Elantra', 2018, 'Black', 60000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(18, 'Hyundai', 'Tucson', 2017, 'Red', 0, 5, 'Manual', 'New', '0.00', 'N', 'Y'),
(19, 'Ford', 'Ranger', 2017, 'Dark Blue', 70000, 4, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(20, 'Ford', 'Ranger', 2018, 'Silver', 60000, 4, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(21, 'Ford', 'Ranger', 2017, 'Black', 70000, 4, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(22, 'Mitsubishi', 'Sedan', 2017, 'Black', 0, 5, 'Manual', 'New', '0.00', 'N', 'Y'),
(23, 'Mitsubishi', 'Sedan', 2018, 'Red', 60000, 5, 'Automatic', 'Used', '0.00', 'Y', 'Y'),
(24, 'Mitsubishi', 'Sedan', 2017, 'Black', 70000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(25, 'Nissan', 'Sedan', 2017, 'Black', 70000, 5, 'Manual', 'Used', '0.00', 'N', 'Y'),
(26, 'Nissan', 'X-Trail', 2018, 'White', 0, 5, 'Automatic', 'New', '0.00', 'Y', 'Y'),
(27, 'Nissan', 'Navara', 2017, 'Black', 70000, 4, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(28, 'Honda', 'Civic', 2017, 'White', 70000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(29, 'Honda', 'Civic', 2018, 'Black', 0, 5, 'Automatic', 'New', '0.00', 'Y', 'Y'),
(30, 'Honda', 'Civic', 2017, 'White', 70000, 5, 'Manual', 'Used', '0.00', 'N', 'Y'),
(31, 'Subaru', 'WRX', 2017, 'White', 70000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(32, 'Subaru', 'WRX', 2018, 'Dark Blue', 0, 5, 'Automatic', 'New', '0.00', 'Y', 'Y'),
(33, 'Volkswagen', 'Phaeton', 2017, 'Black', 70000, 5, 'Automatic', 'Used', '0.00', 'N', 'Y'),
(34, 'Volkswagen', 'Phaeton', 2018, 'Black', 60000, 5, 'Manual', 'Used', '0.00', 'Y', 'Y'),
(35, 'Ford', 'Coupe', 2010, 'Gold', 70000, 5, 'Manual', 'Used', '50.00', 'Y', 'Y'),
(36, 'Volkswagen', 'Beetle', 2015, 'Orange', 70000, 5, 'Manual', 'Used', '30.00', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(5) NOT NULL,
  `customerFirstName` varchar(50) NOT NULL,
  `customerLastName` varchar(50) NOT NULL,
  `customerStreetAddress` varchar(255) NOT NULL,
  `customerSuburb` varchar(100) NOT NULL,
  `customerState` varchar(3) NOT NULL,
  `customerPostcode` int(4) NOT NULL,
  `customerCountry` varchar(9) NOT NULL,
  `customerTelephone` varchar(10) NOT NULL,
  `customerMobile` varchar(10) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerPassword` varchar(20) NOT NULL,
  `customerRegisteredDate` date NOT NULL,
  `customerActiveStatus` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerFirstName`, `customerLastName`, `customerStreetAddress`, `customerSuburb`, `customerState`, `customerPostcode`, `customerCountry`, `customerTelephone`, `customerMobile`, `customerEmail`, `customerPassword`, `customerRegisteredDate`, `customerActiveStatus`) VALUES
(1, 'Carlton', 'Watkins', '21 Rawle Ave', 'Orange', 'NSW', 2800, 'Australia', '0322663399', '0466777777', 'carlton.watkins@gmail.com', '1234', '2021-08-16', 'Y'),
(2, 'Kalum', 'Lucero', '3 McGhee St', 'Sale', 'VIC', 3850, 'Australia', '0363625557', '0418514282', 'kalum.lucero@gmail.com', '1234', '2021-08-16', 'Y'),
(3, 'Kierran', 'Durham', '26 Goorama Drv', 'Cambewarra', 'NSW', 2540, 'Australia', '0244460466', '0416646484', 'kierran.durham@gmail.com', '1234', '2021-08-16', 'Y'),
(4, 'Syeda', 'Henson', '11 Valley Rd', 'Halls Head', 'WA', 6210, 'Australia', '0895815162', '0412214484', 'syeda.henson@gmail.com', '1234', '2021-08-16', 'Y'),
(5, 'Farrell', 'Carrillo', '122 Piara Drv', 'Piara Waters', 'WA', 6112, 'Australia', '0893971343', '0415514424', 'farrell.carrillo@gmail.com', '1234', '2021-08-16', 'Y'),
(6, 'Elliott', 'Griffin', '33 Arnold Crs', 'Orange', 'NSW', 2800, 'Australia', '0263625647', '0415514484', 'elliott.griffin@gmail.com', '1234', '2021-08-16', 'Y'),
(7, 'Meerab', 'Fields', '21 Rawle Ave', 'Thornton', 'NSW', 2322, 'Australia', '0249641150', '0413512784', 'meerab.fields@gmail.com', '1234', '2021-08-16', 'Y'),
(8, 'Ashanti', 'Mccray', '122 Main St', 'Park Avenue', 'QLD', 4701, 'Australia', '0749260231', '0429514394', 'ashanti.mccray@gmail.com', '1234', '2021-08-16', 'Y'),
(9, 'Savanna', 'Alexander', '8 Weatherly Av', 'Mermaid Waters', 'QLD', 4218, 'Australia', '0755266068', '0415252484', 'savanna.alexander@gmail.com', '1234', '2021-08-16', 'Y'),
(10, 'Shani', 'Pace', ' 51 Orbell Way', 'Bull Creek', 'WA', 6149, 'Australia', '0893103949', '0422212284', 'shani.pace@gmail.com', '1234', '2021-08-16', 'Y'),
(11, 'Dave', 'David', '40 Orchard Street', 'Melbourne', 'VIC', 3000, 'Australia', '0322663399', '0466999555', 'dave.david@gmail.com', '1234', '2021-08-22', 'Y'),
(12, 'Sam', 'Devon', '1 Albert Road', 'Melbourne', 'VIC', 3000, 'Australia', '0326674849', '0466999555', 'sam.devon@gmail.com', '1234', '2021-08-23', 'Y'),
(13, 'Todd', 'Bud', '2 Yarra Street', 'Melbourne', 'VIC', 3000, 'Australia', '0322663399', '0466999556', 'todd.bud@gmail.com', '1234', '2021-08-24', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inquiryID` int(5) NOT NULL,
  `inquiryDate` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `carID` int(5) NOT NULL,
  `customerID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inquiryID`, `inquiryDate`, `subject`, `carID`, `customerID`) VALUES
(1, '2021-08-24', 'I want to rent from 1st September for 2 weeks with a full tank of petrol.', 8, 11),
(2, '2021-08-24', 'I want to book from 2nd to 8th Sept.', 11, 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(5) NOT NULL,
  `orderDate` date NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `carID` int(5) NOT NULL,
  `customerID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `dateFrom`, `dateTo`, `subject`, `carID`, `customerID`) VALUES
(1, '2021-08-24', '2021-08-25', '2021-08-31', 'I want to rent with a full tank of petrol.', 8, 6),
(2, '2021-08-24', '2021-08-28', '2021-09-07', 'I want to rent with a full tank of petrol.', 1, 11),
(3, '2021-08-24', '2021-09-02', '2021-09-11', '', 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(5) NOT NULL,
  `staffRole` varchar(50) NOT NULL,
  `staffFirstName` varchar(50) NOT NULL,
  `staffLastName` varchar(50) NOT NULL,
  `staffStreetAddress` varchar(255) NOT NULL,
  `staffSuburb` varchar(50) NOT NULL,
  `staffState` varchar(3) NOT NULL,
  `staffPostcode` int(4) NOT NULL,
  `staffCountry` varchar(9) NOT NULL,
  `staffTelephone` varchar(10) NOT NULL,
  `staffMobile` varchar(10) NOT NULL,
  `staffEmail` varchar(255) NOT NULL,
  `staffPassword` int(11) NOT NULL,
  `staffRegisteredDate` date NOT NULL,
  `staffActiveStatus` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `staffRole`, `staffFirstName`, `staffLastName`, `staffStreetAddress`, `staffSuburb`, `staffState`, `staffPostcode`, `staffCountry`, `staffTelephone`, `staffMobile`, `staffEmail`, `staffPassword`, `staffRegisteredDate`, `staffActiveStatus`) VALUES
(1, 'Manager', 'Kianna', 'Cameron', '199 Flemington Rd', 'North Melbourne', 'VIC', 3051, 'Australia', '0393291836', '0418528763', 'kianna.cameron@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(2, 'Sales Person', 'Lillie-Rose', 'Dennis', '72 B Napier St', 'South Melbourne', 'VIC', 3205, 'Australia', '0396450826', '0431406412', 'lillierose.dennis@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(3, 'Sales Person', 'Emer', 'Blaese', '9 Bligh Pl', 'Melbourne', 'VIC', 3000, 'Australia', '0396201829', '0411209653', 'emer.blaese@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(4, 'Sales Person', 'Zaara', 'Beltran', '65 Beach St', 'Port Melbourne', 'VIC', 3207, 'Australia', '0396454620', '0412282000', 'zaara.beltran@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(5, 'Sales Person', 'Mohammod', 'Molloy', '227 Flinders La', 'Melbourne', 'VIC', 3000, 'Australia', '0396463025', '0412998965', 'mohammod.molloy@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(6, 'Sales Person', 'Clement', 'Ward', '47 Beacon Rd', 'Port Melbourne', 'VIC', 3207, 'Australia', '0393284820', '0491570156', 'clement.ward@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(7, 'Sales Person', 'Deanna', 'Cowan', '120 Melrose St', 'North Melbourne', 'VIC', 3051, 'Australia', '0396462228', '0491570157', 'deanna.cowan@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(8, 'Sales Person', 'Anabella', 'Flores', '24 Park Sq', 'Port Melbourne', 'VIC', 3207, 'Australia', '0396144551', '0491570158', 'anabella.flores@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(9, 'Sales Person', 'Aryaan', 'Strickland', '530 Little Collins St', 'Melbourne', 'VIC', 3000, 'Australia', '0393285449', '0491570159', 'aryaan.strickland@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(10, 'Sales Person', 'Abu', 'Prentice', ' 169 Chetwynd St', 'North Melbourne', 'VIC', 3051, 'Australia', '0396816324', '0491570110', 'abu.prentice@abccarfleet.com', 1234, '2021-08-16', 'Y'),
(11, 'Admin', 'Ian', 'Symon', '50 Stewart Street', 'Melbourne', 'VIC', 3000, 'Australia', '0326674849', '0466999555', 'ian.symon@gmail.com', 1234, '2021-08-23', 'Y'),
(12, 'Admin', 'Chris', 'Evans', '70 Liss Street', 'Melbourne', 'VIC', 3000, 'Australia', '0326674849', '0466777777', 'chris.evans@gmail.com', 1234, '2021-08-23', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierID` int(11) NOT NULL,
  `supplierName` varchar(50) NOT NULL,
  `supplierRegisteredDate` date NOT NULL,
  `supplierActiveStatus` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `supplierName`, `supplierRegisteredDate`, `supplierActiveStatus`) VALUES
(1, 'Toyota', '2021-08-23', 'Y'),
(2, 'Holden', '2021-08-23', 'Y'),
(3, 'Mazda', '2021-08-23', 'Y'),
(4, 'Hyundai', '2021-08-23', 'Y'),
(5, 'Ford', '2021-08-23', 'Y'),
(6, 'Mitsubishi', '2021-08-23', 'Y'),
(7, 'Nissan', '2021-08-23', 'Y'),
(8, 'Honda', '2021-08-23', 'Y'),
(9, 'Subaru', '2021-08-23', 'Y'),
(10, 'Volkswagen', '2021-08-23', 'Y');

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

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inquiryID`),
  ADD KEY `FK_inquiries_cars` (`carID`),
  ADD KEY `FK_inquiries_customers` (`customerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_orders_cars` (`carID`),
  ADD KEY `FK_orders_customers` (`customerID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `FK_inquiries_cars` FOREIGN KEY (`carID`) REFERENCES `cars` (`carID`),
  ADD CONSTRAINT `FK_inquiries_customers` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_cars` FOREIGN KEY (`carID`) REFERENCES `cars` (`carID`),
  ADD CONSTRAINT `FK_orders_customers` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
