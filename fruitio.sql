-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 01:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruitio`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `Actor_id` int(11) NOT NULL,
  `Actor_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`Actor_id`, `Actor_name`) VALUES
(2, 'Ajith Kumar'),
(2, 'Joseph Vijay'),
(2, 'Letitia Wright'),
(2, 'Ram charan'),
(2, 'Rishab Shetty'),
(2, 'Sam Worthington'),
(2, 'Shah Rukh Khan');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Name` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Name`, `Email`, `Phone`, `Password`, `Role`, `Gender`) VALUES
('Power', 'power@123', 1234, '1234', 'User', 'Female'),
('Tahmeer Pasha', '1hk20is112@hkbk.edu.in', 12300, '00', 'Admin', 'Male'),
('Tahmeer Pasha', 'tahmeerpashacjc@gmail.com', 1234567, '123', 'Admin', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `Dir_id` int(11) NOT NULL,
  `Dir_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`Dir_id`, `Dir_name`) VALUES
(2, ' Siddharth Anand'),
(2, 'H.Vinoth'),
(2, 'James Cameron'),
(2, 'Rishab Shetty'),
(2, 'Ryan Coogler'),
(2, 'S.S.Rajamouli'),
(2, 'Vamsi Padipally');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Mov_id` int(11) NOT NULL,
  `Act_Name` varchar(255) NOT NULL,
  `Dir_Name` varchar(255) NOT NULL,
  `Mov_title` varchar(255) NOT NULL,
  `Mov_year` year(4) NOT NULL,
  `Mov_lang` varchar(255) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ratings` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Mov_id`, `Act_Name`, `Dir_Name`, `Mov_title`, `Mov_year`, `Mov_lang`, `Genre`, `Image`, `Ratings`) VALUES
(2, 'Ajith Kumar', 'H.Vinoth', 'Thunivvu', 2023, 'tamil', 'action', 'Thunivu.jpg', 8),
(3, 'Rishab Shetty', 'Rishab Shetty', 'Kantara', 2022, 'Kannada', 'Drama', 'Kantara.jpg', 8),
(4, 'Shah Rukh Khan', ' Siddharth Anand', 'Pathaan', 2023, 'Hindi', 'action', 'pathaan.jpg', 0),
(5, 'Ram charan', 'S.S.Rajamouli', 'RRR', 2022, 'telugu', 'action', 'RRR.jpg', 8),
(6, 'Letitia Wright', 'Ryan Coogler', 'Black Panther: Wakanda Forever', 2022, 'english', 'action', 'wakanda.jpg', 7),
(7, 'Sam Worthington', 'James Cameron', 'Avatar: The Way of Water', 2022, 'english', 'sci-fi', 'Avatar2.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `Mov_id` int(11) NOT NULL,
  `Rating_star` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`Mov_id`, `Rating_star`) VALUES
(2, 8),
(3, 8),
(4, 0),
(5, 8),
(6, 7),
(7, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`Actor_id`,`Actor_name`),
  ADD UNIQUE KEY `Actor_id` (`Actor_id`,`Actor_name`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`) USING HASH;

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Dir_id`,`Dir_name`),
  ADD UNIQUE KEY `Dir_id` (`Dir_id`,`Dir_name`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Mov_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`Mov_id`,`Rating_star`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `Mov_id` FOREIGN KEY (`Mov_id`) REFERENCES `movies` (`Mov_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
