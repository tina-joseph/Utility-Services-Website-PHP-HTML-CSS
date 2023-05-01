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
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `SerID` int(5) NOT NULL,
  `CatID` int(50) NOT NULL,
  `SerShortDesc` varchar(30) NOT NULL,
  `ServDesc` varchar(500) NOT NULL,
  `infeature1` varchar(500) NOT NULL,
  `infeature2` varchar(500) NOT NULL,
  `infeature3` varchar(500) NOT NULL,
  `cost` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`SerID`, `CatID`, `SerShortDesc`, `ServDesc`, `infeature1`, `infeature2`, `infeature3`, `cost`) VALUES
(1, 2, 'Mowing', 'Welcome to our lawn mowing service! We understand that maintaining a well-manicured lawn can be time-consuming and difficult to fit into your busy schedule.', 'Mowing grass and trimming edges to ensure a uniform lawn appearance.', 'Clearing hard surfaces and flower beds of debris.', 'Edging around landscaping features for a polished finish.', 0.04),
(2, 2, 'Aeration', 'Welcome to our lawn aeration service! We understand that maintaining a healthy and beautiful lawn can be a challenge, especially in dry or compacted soil. ', 'Aerating soil to improve water and nutrient absorption.', 'Removing small cores of soil to promote root growth.', '', 0.03),
(3, 2, 'Thatching', 'Welcome to our lawn thatching service! We understand that maintaining a beautiful lawn can be a challenge, especially when it comes to dealing with thatch buildup.', 'Removing the layer of dead grass and other organic matter.', 'Removing debris from the surface of the lawn.', 'Promoting healthier, greener grass growth.', 0.04),
(4, 2, 'Fertilization', 'Welcome to our lawn fertilization service! We understand that a well-fed lawn is a healthy lawn, and that\'s why we offer professional lawn fertilization services to help keep your lawn looking lush and green all season long.', 'Testing soil to determine nutrient deficiencies.', 'Applying appropriate fertilizers to address deficiencies.', 'Promoting thicker, greener grass growth.', 0.05),
(5, 2, 'Leaf blowing', 'Welcome to our lawn leaf-blowing service! We understand that fallen leaves can quickly accumulate and make your lawn look messy and unappealing. That\'s why we offer professional leaf-blowing services to help keep your lawn looking clean and well-maintained.', 'Blowing leaves and debris off lawn and hard surfaces.', 'Collecting and disposing of debris.', '', 0.01),
(6, 1, 'Concrete washing', 'Welcome to our concrete washing service! We understand that your home\'s exterior appearance is important to you, and that\'s why we offer professional concrete washing services to help keep your outdoor surfaces looking clean and well-maintained.', 'Pressure washing concrete surfaces to remove stains.', 'Applying appropriate cleaning solutions to remove stubborn stains.', 'Removing dirt, grime, and other debris for a clean finish.', 0.03),
(7, 1, 'Deck washing', 'Welcome to our deck washing service! Your deck is the perfect place to enjoy the outdoors, relax, and spend time with family and friends. But over time, dirt, grime, and other debris can build up on the surface, making it slippery, unsightly, and potentially dangerous. That\'s why we offer professional deck washing services to help keep your deck looking its best.', 'Pressure washing deck surfaces to remove stains and debris.', 'Applying appropriate cleaning solutions to remove stubborn stains.', 'Removing dirt, grime, and other debris for a clean finish.', 0.15),
(8, 1, 'Roof treatment', 'Welcome to our roof treatment service! We understand that a roof is a significant investment for any homeowner, and that\'s why we offer professional roof treatment services to help protect your roof from damage and extend its lifespan.', 'Applying appropriate cleaning solutions to remove black streaks and stains.', 'Soft washing roof surfaces to avoid damage.', 'Removing dirt, grime, and other debris for a clean finish.', 0.04),
(9, 3, 'Salt spreading', 'Welcome to our salt spreading service! We understand the importance of safe and accessible walkways during winter weather. Our salt spreading services ensure that your property remains safe and free from ice build-up, making it easier for you to navigate during the winter months.', 'Spreading salt on sidewalks, driveways, and other walkways.', 'Eco-friendly and safe for pets and plants.', 'Use of professional-grade equipment for efficient and effective service.', 0.06),
(10, 3, 'Snow plowing', 'Welcome to our snow plowing service! We understand the hassle and inconvenience of dealing with snow buildup during the winter. Our snow plowing services ensure that your driveways and walkways are cleared of snow, allowing you to get back to your daily routine quickly and safely.', 'Clearing snow and ice from driveways, parking areas, and sidewalks.', 'Use of professional-grade equipment for efficient and effective service.', '', 0.15),
(11, 4, 'Bees and Wasps Control', 'Welcome to our bees and wasps control service! We understand that these stinging insects can pose a threat to your property and loved ones. Our professional pest control team can safely remove bees and wasps from your property, ensuring your safety and peace of mind.', 'Identification and treatment of bee and wasp nests, removal of hives and nests.', 'Safe and effective treatments that won\'t harm your family or pets.', 'Use of environmentally friendly products and techniques.', 0.07),
(12, 4, 'Bed Bug Control', 'Welcome to our bed bug control service! We understand the discomfort and stress that comes with a bed bug infestation. Our professional pest control team can effectively eliminate bed bugs from your home, providing you with a comfortable and peaceful living space.', 'Inspection, treatment, and ongoing preventative measures will be taken.', 'Safe and effective treatments that won\'t harm your family or pets.', 'Use of environmentally friendly products and techniques.', 0.12),
(13, 4, 'Flea and Tick Control', 'Welcome to our flea and tick control service! We understand that these pests can be a nuisance and pose a threat to your pets and family. Our professional pest control team can eliminate fleas and ticks from your property, providing a safe and comfortable living space for you and your loved ones.', 'Inspection, treatment, and ongoing preventative measures will be taken.', 'Safe and effective treatments that won\'t harm your family or pets.', 'Use of environmentally friendly products and techniques.', 0.10),
(14, 4, 'Mole Control', 'Welcome to our mole control service! We understand that moles can cause damage to your lawn and landscaping. Our professional pest control team can safely and effectively eliminate moles from your property, helping to protect your outdoor space.', 'Inspection, trapping, and ongoing preventative measures will be taken.', 'Safe and effective trapping techniques that won\'t harm your family or pets.', 'Use of environmentally friendly products and techniques.', 0.12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`SerID`,`CatID`),
  ADD KEY `SerID` (`SerID`),
  ADD KEY `SCategories_ibfk_1` (`CatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `SerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `SCategories_ibfk_1` FOREIGN KEY (`CatID`) REFERENCES `SCategories` (`CatID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
