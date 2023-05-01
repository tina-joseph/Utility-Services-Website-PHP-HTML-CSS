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
-- Table structure for table `Vendor`
--

CREATE TABLE `Vendor` (
  `VenID` int(11) NOT NULL,
  `VenName` varchar(50) NOT NULL,
  `Address_1` varchar(100) NOT NULL,
  `Address_2` varchar(100) DEFAULT NULL,
  `VenContact` bigint(20) NOT NULL,
  `VenEmail` varchar(50) NOT NULL,
  `VenUName` varchar(20) NOT NULL,
  `VenPass` varchar(50) NOT NULL,
  `VenZipCode` int(11) NOT NULL,
  `ZipServed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Vendor`
--

INSERT INTO `Vendor` (`VenID`, `VenName`, `Address_1`, `Address_2`, `VenContact`, `VenEmail`, `VenUName`, `VenPass`, `VenZipCode`, `ZipServed`) VALUES
(2, 'Brownsburg power washers', '1234 main st.', NULL, 7166679878, 'powerwashbb@gmail.com', 'bbpowerwash', 'edd7265440e5ce8a4d3765e4ee389175', 46112, 46112),
(4, 'Indy Clean Exteriors', '6546 Michigan st.', NULL, 6753432255, 'cleanextindy@gmail.com', 'cleanindy', '1d54c4f7091bb8aa5a25983611a7a00a', 46225, 46225),
(5, 'Indy Lawn Services', '6400 New york st.', NULL, 6753431908, 'lawnindy@gmail.com', 'lawnindy', 'a2dd59a95aeb2fa0d6213428a3ca7832', 46225, 46225),
(6, 'Hendrick Lawn Services', '5672 Green St.', NULL, 3156782345, 'lawnhendrick@gmail.com', 'lawnhendrick', '2cd0cdd32ad1639ff6d970fd2d0d9d05', 46112, 46112),
(8, 'Indy Pest Control', '3433', ' Main St.', 4569990909, 'indypest@gmail.com', 'indypest', 'c1d04d9a964375115f0ddea205a7c458', 46224, 46225),
(9, 'Indy Snow Cleaners', '1133', ' New yourk St.', 4569000909, 'indysnow@gmail.com', 'cleansnow', 'd46b6a8e5c29872e1fb229c58622ec59', 46223, 46225),
(11, 'Pest experts BB', '3456', 'Green St.', 2243666464, 'pestexpert@gmail.com', 'pestexpert', '91cd2d08781e97c1467f3ba93d2290f4', 46113, 46112),
(12, 'Snow experts BB', '3656', 'Green St.', 2243996464, 'snowexpert@gmail.com', 'snowexpert', '2a6e6b9d1a0b68fc7d6c061709ce0c8a', 46113, 46112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Vendor`
--
ALTER TABLE `Vendor`
  ADD PRIMARY KEY (`VenID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Vendor`
--
ALTER TABLE `Vendor`
  MODIFY `VenID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
