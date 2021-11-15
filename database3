-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 15, 2021 at 03:36 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namee` varchar(50) NOT NULL,
  `usertypeID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwordd` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usertypeID` (`usertypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `namee`, `usertypeID`, `username`, `passwordd`) VALUES
(4, 'Yousef Ehab', 1, 'jfijcc129', 'commanda'),
(9, 'asdasdasd', 1, 'commando01000asdasd', 'Nightblue001sd'),
(10, 'commandoasdasd', 3, 'commando01000asdasda', 'Nightblue001asdasd'),
(11, 'sa', 1, 'co3', 'Nightbl2'),
(12, 'sabr', 1, 'sa', 's'),
(13, 'a', 1, 'co', 'Nightblue001'),
(14, 'hh', 1, 'ss', 'dddddddddd'),
(15, 'jh', 1, 'sc', 'ghghghghgh'),
(16, 'hahaha', 1, 'hrehrhr', 'jajajaja');

-- --------------------------------------------------------

--
-- Table structure for table `donation_details`
--

DROP TABLE IF EXISTS `donation_details`;
CREATE TABLE IF NOT EXISTS `donation_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donator_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `donator_id` (`donator_id`),
  KEY `item` (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation_items`
--

DROP TABLE IF EXISTS `donation_items`;
CREATE TABLE IF NOT EXISTS `donation_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namee` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_items`
--

INSERT INTO `donation_items` (`id`, `namee`) VALUES
(1, 'computer'),
(2, 'money'),
(3, 'blankets'),
(4, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `donation_item_details`
--

DROP TABLE IF EXISTS `donation_item_details`;
CREATE TABLE IF NOT EXISTS `donation_item_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donator_id` int(11) NOT NULL,
  `visa` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `fawry` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `donator_id` (`donator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

DROP TABLE IF EXISTS `donator`;
CREATE TABLE IF NOT EXISTS `donator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namee` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `addresss` varchar(350) NOT NULL,
  `item` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item` (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation answer`
--

DROP TABLE IF EXISTS `evaluation answer`;
CREATE TABLE IF NOT EXISTS `evaluation answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Patient_id` int(11) NOT NULL,
  `Answer` varchar(300) NOT NULL,
  `Q_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Q_id` (`Q_id`),
  KEY `Patient_id` (`Patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location of rehabilitation`
--

DROP TABLE IF EXISTS `location of rehabilitation`;
CREATE TABLE IF NOT EXISTS `location of rehabilitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(350) NOT NULL,
  `Pat_id` int(11) NOT NULL,
  `supervisor name` varchar(50) NOT NULL,
  `supervisor phone no` int(11) NOT NULL,
  `Location phone no` int(11) NOT NULL,
  `total fees` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Pat_id` (`Pat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_patients`
--

DROP TABLE IF EXISTS `reg_patients`;
CREATE TABLE IF NOT EXISTS `reg_patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namee` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `age` int(2) NOT NULL,
  `job` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `number_in_family` int(2) NOT NULL,
  `addresss` varchar(300) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `home_no` int(8) NOT NULL,
  `supervised_by` int(11) NOT NULL,
  `patient_complain` varchar(300) NOT NULL,
  `complain` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `supervised by` (`supervised_by`),
  KEY `supervised by_2` (`supervised_by`),
  KEY `supervised by_3` (`supervised_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`) VALUES
(1, 'Supervisor'),
(2, 'Servant'),
(3, 'Head of Servents');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`usertypeID`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_details`
--
ALTER TABLE `donation_details`
  ADD CONSTRAINT `donation_details_ibfk_1` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_details_ibfk_2` FOREIGN KEY (`item`) REFERENCES `donation_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_item_details`
--
ALTER TABLE `donation_item_details`
  ADD CONSTRAINT `donation_item_details_ibfk_1` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donator`
--
ALTER TABLE `donator`
  ADD CONSTRAINT `donator_ibfk_1` FOREIGN KEY (`item`) REFERENCES `donation_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation answer`
--
ALTER TABLE `evaluation answer`
  ADD CONSTRAINT `evaluation answer_ibfk_1` FOREIGN KEY (`Patient_id`) REFERENCES `reg_patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `location of rehabilitation`
--
ALTER TABLE `location of rehabilitation`
  ADD CONSTRAINT `location of rehabilitation_ibfk_1` FOREIGN KEY (`Pat_id`) REFERENCES `reg_patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id`) REFERENCES `evaluation answer` (`Q_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_patients`
--
ALTER TABLE `reg_patients`
  ADD CONSTRAINT `reg_patients_ibfk_1` FOREIGN KEY (`supervised_by`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
