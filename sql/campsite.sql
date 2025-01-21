-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2025 at 04:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@OLD_COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `accommodationID` int(11) NOT NULL,
  `accommodationType` varchar(255) NOT NULL,
  `accommodationDesc` text DEFAULT NULL,
  `accommodationPrice` decimal(10,2) NOT NULL,
  `accommodationAvailability` tinyint(1) DEFAULT 1,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `accommodationID` int(11) DEFAULT NULL,
  `serviceID` int(11) DEFAULT NULL,
  `bookingDate` date NOT NULL,
  `checkInDate` date NOT NULL,
  `checkOutDate` date NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bookingID` int(11) NOT NULL,
  `ratingFeed` int(11) DEFAULT NULL CHECK (`ratingFeed` between 1 and 5),
  `commentFeed` text DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceID` int(11) NOT NULL,
  `bookingID` int(11) NOT NULL,
  `invoiceDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `amountPaid` decimal(10,2) NOT NULL,
  `statusPaid` tinyint(1) DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `bookingID` int(11) NOT NULL,
  `amountPaid` decimal(10,2) NOT NULL,
  `paymentDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) NOT NULL,
  `transactionID` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceID` int(11) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceDesc` text DEFAULT NULL,
  `servicePrice` decimal(10,2) NOT NULL,
  `serviceAvailability` tinyint(1) DEFAULT 1,
  `serviceImage` varchar(255) DEFAULT NULL, -- URL of the service image
  `serviceDuration` varchar(50) DEFAULT NULL, -- Duration of the service
  `serviceTimes` varchar(255) DEFAULT NULL, -- Available times for the service
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`serviceID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userPhoneNum` varchar(20) DEFAULT NULL,
  `userRole` varchar(50) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tent_type`
--

CREATE TABLE `tent_type` (
  `tentTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `tentTypeName` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`tentTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_tent_type`
--

CREATE TABLE `accommodation_tent_type` (
  `accommodationID` int(11) NOT NULL,
  `tentTypeID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`accommodationID`, `tentTypeID`),
  FOREIGN KEY (`accommodationID`) REFERENCES `accommodation` (`accommodationID`),
  FOREIGN KEY (`tentTypeID`) REFERENCES `tent_type` (`tentTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL, -- URL of the team member's image
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`teamID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`accommodationID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `accommodationID` (`accommodationID`),
  ADD KEY `serviceID` (`serviceID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `bookingID` (`bookingID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceID`),
  ADD KEY `bookingID` (`bookingID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `bookingID` (`bookingID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `tent_type`
--
ALTER TABLE `tent_type`
  ADD PRIMARY KEY (`tentTypeID`);

--
-- Indexes for table `accommodation_tent_type`
--
ALTER TABLE `accommodation_tent_type`
  ADD PRIMARY KEY (`accommodationID`, `tentTypeID`),
  ADD KEY `accommodationID` (`accommodationID`),
  ADD KEY `tentTypeID` (`tentTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `accommodationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tent_type`
--
ALTER TABLE `tent_type`
  MODIFY `tentTypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`accommodationID`) REFERENCES `accommodation` (`accommodationID`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`serviceID`) REFERENCES `service` (`serviceID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`bookingID`) REFERENCES `bookings` (`bookingID`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`bookingID`) REFERENCES `bookings` (`bookingID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`bookingID`) REFERENCES `bookings` (`bookingID`);

--
-- Constraints for table `accommodation_tent_type`
--
ALTER TABLE `accommodation_tent_type`
  ADD CONSTRAINT `accommodation_tent_type_ibfk_1` FOREIGN KEY (`accommodationID`) REFERENCES `accommodation` (`accommodationID`),
  ADD CONSTRAINT `accommodation_tent_type_ibfk_2` FOREIGN KEY (`tentTypeID`) REFERENCES `tent_type` (`tentTypeID`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;