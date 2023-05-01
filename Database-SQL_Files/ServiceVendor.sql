-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2023 at 09:31 PM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--

--

-- --------------------------------------------------------

--
-- Table structure for table `ServiceVendor`
--

CREATE TABLE `ServiceVendor` (
  `SerID` int(11) NOT NULL,
  `VenID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ServiceVendor`
--

INSERT INTO `ServiceVendor` (`SerID`, `VenID`) VALUES
(6, 2),
(7, 2),
(8, 2),
(6, 4),
(7, 4),
(8, 4),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(1, 6),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(9, 9),
(10, 9),
(11, 11),
(12, 11),
(13, 11),
(14, 11),
(9, 12),
(10, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ServiceVendor`
--
ALTER TABLE `ServiceVendor`
  ADD PRIMARY KEY (`VenID`,`SerID`),
  ADD KEY `Services_ibfk_2` (`SerID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ServiceVendor`
--
ALTER TABLE `ServiceVendor`
  ADD CONSTRAINT `Services_ibfk_2` FOREIGN KEY (`SerID`) REFERENCES `Services` (`SerID`),
  ADD CONSTRAINT `Vendor_ibfk_2` FOREIGN KEY (`VenID`) REFERENCES `Vendor` (`VenID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
