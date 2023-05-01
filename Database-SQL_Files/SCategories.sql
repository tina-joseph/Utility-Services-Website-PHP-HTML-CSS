-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2023 at 09:30 PM
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
-- Table structure for table `SCategories`
--

CREATE TABLE `SCategories` (
  `CatID` int(11) NOT NULL,
  `CatDescription` varchar(50) NOT NULL,
  `CatShortDescription` varchar(20) NOT NULL,
  `ImageLocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `SCategories`
--

INSERT INTO `SCategories` (`CatID`, `CatDescription`, `CatShortDescription`, `ImageLocation`) VALUES
(1, 'Power wash services for your home', 'Power Wash', 'Images/power-wash.jpg'),
(2, 'Lawn care service to keep your lawn beautiful', 'Lawn Care', 'Images/Lawn-category.jpg'),
(3, 'Keep your home ready for snowy winters', 'Snow Service', 'Images/snow-removal.jpg'),
(4, 'Keep your home free from unwanted pests', 'Pest Control', 'Images/PestControl.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SCategories`
--
ALTER TABLE `SCategories`
  ADD PRIMARY KEY (`CatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `SCategories`
--
ALTER TABLE `SCategories`
  MODIFY `CatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
