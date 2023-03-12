-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 09:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_dataset`
--

-- --------------------------------------------------------

--
-- Table structure for table `crimes_against_people`
--

CREATE TABLE `crimes_against_people` (
  `Region_id` int(6) NOT NULL,
  `Homicide` int(10) NOT NULL,
  `Assault` int(10) NOT NULL,
  `Violence` int(10) NOT NULL,
  `Stalking` int(10) NOT NULL,
  `Rape` int(10) NOT NULL,
  `Kidnapping` int(10) NOT NULL,
  `Robbery` int(10) NOT NULL,
  `Hate_crimes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crimes_against_people`
--

INSERT INTO `crimes_against_people` (`Region_id`, `Homicide`, `Assault`, `Violence`, `Stalking`, `Rape`, `Kidnapping`, `Robbery`, `Hate_crimes`) VALUES
(1, 30, 45, 76, 23, 11, 8, 87, 94);

-- --------------------------------------------------------

--
-- Table structure for table `crime_effect`
--

CREATE TABLE `crime_effect` (
  `Region_id` int(10) NOT NULL,
  `Region_name` varchar(20) NOT NULL,
  `population_density` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `average_income` int(10) NOT NULL,
  `No_of_employed_people` int(10) NOT NULL,
  `No_of_immigrants` int(10) NOT NULL,
  `Family_breakdown_rate` int(2) NOT NULL,
  `No_of_Scholars` int(10) NOT NULL,
  `Drug_usage` int(2) NOT NULL,
  `Youth_concentration` int(2) NOT NULL,
  `Age_bracket` varchar(20) NOT NULL,
  `Percentage_of_males` int(2) NOT NULL,
  `Race` varchar(20) NOT NULL,
  `Political_Risk_Index` int(1) NOT NULL,
  `No_of_security_policies` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crime_effect`
--

INSERT INTO `crime_effect` (`Region_id`, `Region_name`, `population_density`, `date`, `average_income`, `No_of_employed_people`, `No_of_immigrants`, `Family_breakdown_rate`, `No_of_Scholars`, `Drug_usage`, `Youth_concentration`, `Age_bracket`, `Percentage_of_males`, `Race`, `Political_Risk_Index`, `No_of_security_policies`) VALUES
(1, 'Mombasa', 23457, '2023-03-02', 3000, 6854, 1000, 43, 190, 50, 50, '', 50, '', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyber_crimes`
--

CREATE TABLE `cyber_crimes` (
  `Region_id` int(10) NOT NULL,
  `Identity_theft` int(10) NOT NULL,
  `Hacking` int(10) NOT NULL,
  `Malware` int(10) NOT NULL,
  `Phishing` int(10) NOT NULL,
  `Cyber_bullying` int(10) NOT NULL,
  `Cyber_stalking` int(10) NOT NULL,
  `Online_scams` int(10) NOT NULL,
  `Denial_of_service` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cyber_crimes`
--

INSERT INTO `cyber_crimes` (`Region_id`, `Identity_theft`, `Hacking`, `Malware`, `Phishing`, `Cyber_bullying`, `Cyber_stalking`, `Online_scams`, `Denial_of_service`) VALUES
(1, 2, 7, 8, 5, 6, 1, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `financial_crimes`
--

CREATE TABLE `financial_crimes` (
  `Region_Id` int(8) NOT NULL,
  `Fraud` int(6) NOT NULL,
  `money_laundering` int(6) NOT NULL,
  `embezzlement` int(6) NOT NULL,
  `cybercrime` int(6) NOT NULL,
  `insider_trading` int(6) NOT NULL,
  `bribery` int(6) NOT NULL,
  `taxEvasion` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `financial_crimes`
--

INSERT INTO `financial_crimes` (`Region_Id`, `Fraud`, `money_laundering`, `embezzlement`, `cybercrime`, `insider_trading`, `bribery`, `taxEvasion`) VALUES
(1, 2, 3, 5, 8, 4, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_crimes`
--

CREATE TABLE `property_crimes` (
  `Region_id` int(6) NOT NULL,
  `Burglary` int(10) NOT NULL,
  `Theft` int(10) NOT NULL,
  `Robbery` int(10) NOT NULL,
  `Arson` int(10) NOT NULL,
  `Fraud` int(10) NOT NULL,
  `Shoplifting` int(10) NOT NULL,
  `Hijacking` int(10) NOT NULL,
  `Vandalism` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_crimes`
--

INSERT INTO `property_crimes` (`Region_id`, `Burglary`, `Theft`, `Robbery`, `Arson`, `Fraud`, `Shoplifting`, `Hijacking`, `Vandalism`) VALUES
(1, 10, 6, 8, 3, 0, 7, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `ConfirmPassword` varchar(10) NOT NULL,
  `tel_No` int(10) NOT NULL,
  `Region` varchar(20) DEFAULT NULL,
  `Gender` varchar(8) NOT NULL,
  `po_box` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `FirstName`, `LastName`, `Email`, `password`, `ConfirmPassword`, `tel_No`, `Region`, `Gender`, `po_box`) VALUES
(1, 'Caleb', 'Toromo', 'toromocaleb2002@gmail.com', '07972234', '07972234', 0, 'Nairobi', '', ''),
(2, 'Robert', 'Toromo', 'toromocaleb2002@gmail.com', '07972234', '07972234', 0, 'Nairobi', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crimes_against_people`
--
ALTER TABLE `crimes_against_people`
  ADD PRIMARY KEY (`Region_id`);

--
-- Indexes for table `crime_effect`
--
ALTER TABLE `crime_effect`
  ADD PRIMARY KEY (`Region_id`);

--
-- Indexes for table `cyber_crimes`
--
ALTER TABLE `cyber_crimes`
  ADD PRIMARY KEY (`Region_id`);

--
-- Indexes for table `financial_crimes`
--
ALTER TABLE `financial_crimes`
  ADD KEY `Region_id` (`Region_Id`);

--
-- Indexes for table `property_crimes`
--
ALTER TABLE `property_crimes`
  ADD PRIMARY KEY (`Region_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crimes_against_people`
--
ALTER TABLE `crimes_against_people`
  MODIFY `Region_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crime_effect`
--
ALTER TABLE `crime_effect`
  MODIFY `Region_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cyber_crimes`
--
ALTER TABLE `cyber_crimes`
  MODIFY `Region_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_crimes`
--
ALTER TABLE `property_crimes`
  MODIFY `Region_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `financial_crimes`
--
ALTER TABLE `financial_crimes`
  ADD CONSTRAINT `Region_id` FOREIGN KEY (`Region_Id`) REFERENCES `crime_effect` (`Region_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
