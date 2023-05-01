-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2023 at 09:03 PM
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
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CusID` int(11) NOT NULL,
  `CName` varchar(50) NOT NULL,
  `Address_1` varchar(100) NOT NULL,
  `Address_2` varchar(100) DEFAULT NULL,
  `CContact` bigint(20) NOT NULL,
  `CEmail` varchar(50) NOT NULL,
  `CUName` varchar(20) NOT NULL,
  `CPass` varchar(50) NOT NULL,
  `CZipCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CusID`, `CName`, `Address_1`, `Address_2`, `CContact`, `CEmail`, `CUName`, `CPass`, `CZipCode`) VALUES
(2, 'Ayushi jain', '2454 Main St', NULL, 8768688557, 'jainayu@iu.edu', 'jainayu', '098f6bcd4621d373cade4e832627b4f6', 46112),
(3, 'Saurabh Jain', '9999', 'green st.', 9999999999, 'sj.test@gmail.com', 'sj', '098f6bcd4621d373cade4e832627b4f6', 46227),
(6, 'Susan', '535 W Michigan St', 'Unit 2222', 3172789202, 'susang2@iu.edu', 'susang', '46f28900017e57d27caf65ed68206fd1', 46202),
(7, 'Susan', '535 W Michigan St', 'Unit 222', 3170000888, 'susang@iu.edu', 'susang', '31b69a7494a0eec4ac544fd648c9d604', 46202),
(9, 'susan', '1555 Green St', 'Unit 135', 3002789772, 'susgeo@gmail.com', 'sg', '31b69a7494a0eec4ac544fd648c9d604', 46225),
(12, 'Ross Geller', '1232 Michigan Ave', 'Unit 2865', 46537891256, 'rossgel@gmail.com', 'rossg', 'dbb7d6c0c7d56fa979265d77ced99664', 46225),
(15, 'Ayushi Jain', '1907', 'Green St.', 3178896090, 'jainayu@iu.edu', 'ajain', '18318fdb031b03e75c5cfeaa48bf911f', 46112),
(16, 'Harry John', '987 Polco Blvd', 'Unit  6782', 4325670981, 'harryj987@hotmail.com', 'harry_j', 'da4056242b13a477756f87cae60dc779', 46112),
(17, 'Thomas Barnet', '3487', 'New your st.', 7679990808, 'tbarnet@gmail.com', 'tbarnet', 'c752068be0d918327ab10ba59a7267bb', 46225),
(18, 'Tom Miller', '3434', 'Vermont drive', 8990077665, 'tmiller1@gmail.com', 'tmiller', '9eb8ac171015a2cda56fbc699d731970', 46112),
(19, 'Elizabeth Johnson', '1277', 'Brown court.', 6579997878, 'ejohnson@gmail.com', 'ejohnson', 'f97a2093fd0f60ab071aedcee68838c4', 46112),
(20, 'Alka Kumari', 'North Meridian  Street', 'New Fields', 3177784355, 'alka14tomar@gmail.com', 'AL', '7692f1a05ab0da7b299a2c7c3c95a962', 46112),
(21, 'Shivani Raut', '855 Lockefield St', '1', 9999797971, 'ssraut@iu.edu', 'ssraut', 'f8035f3a37f70e756682e71fd16c8f4f', 46112),
(22, 'UJAS DAVID', '1552 Woodson Drive', 'APT 134', 3178964532, 'ujas.david@gmail.com', 'ujas_pdj', 'ddd881df76600ee475666066759e7886', 46225),
(23, 'Steve Joe', 'Woodside street', 'Unit 134', 9446411223, 'Abcd755@gmail.com', 'Sun40', '2e0b8428c1c8c125bca3b8069b404ad6', 46225),
(24, 'Serah Joseph', 'woodson ', 'Apt', 9447055097, 'Tessajoseph@gmail.com', 'Tessaj', 'c4dfd14a6d117d269cbd73e9019ce2cc', 46225),
(25, 'Zoe Paul', '1345 Polco Ave', 'Apt 786', 4567891234, 'zoepl@gmail.com', 'zoe_p', 'ea7268c062e09acbd003a76d91bd1772', 46225),
(26, 'Joey Joseph', '546 New West  St', 'Unit 789', 5478903451, 'joeyj123@hotmail.com', 'joe987', 'fa750c79243970f97cdb40a18f7bb2b3', 46112),
(27, 'Bing Polson', '789 North Pole Lane', 'Apt. 1876', 5674321098, 'bpolson@gmail.com', 'bpol', 'fe2b074e628b1ec1aefabd5d98a301f1', 46112),
(28, 'Paul Meehr', '2345', 'Capler lane', 9008007009, 'paul@gmail.com', 'paulmee', 'be47bc7751579dd9a237c17eb68c9c28', 46112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
