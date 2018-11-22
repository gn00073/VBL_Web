-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2018 at 07:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizzsolu_VBL_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `distributor_kpi`
--

CREATE TABLE `distributor_kpi` (
  `autoID` int(32) NOT NULL,
  `TA` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `KPI_Year` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `KPI_Month` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `KPI_Date` date NOT NULL,
  `Area` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `DB_Code` int(16) NOT NULL,
  `DB_Name` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `DB_Type` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `DB_Category` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `KPI` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `KPI_Description` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `KPI_Value` int(16) NOT NULL,
  `Status` tinyint(1) DEFAULT '1',
  `RSM` varchar(16) COLLATE latin1_general_ci NOT NULL,
  `ASM` varchar(16) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributor_kpi`
--
ALTER TABLE `distributor_kpi`
  ADD PRIMARY KEY (`autoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributor_kpi`
--
ALTER TABLE `distributor_kpi`
  MODIFY `autoID` int(32) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
