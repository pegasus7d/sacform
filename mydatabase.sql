-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 04:08 PM
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
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(300) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `interest` varchar(300) NOT NULL,
  `linkage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `phone`, `email`, `designation`, `location`, `interest`, `linkage`) VALUES
(1, 'abc', '1234567890', '', '', '', '', ''),
(2, 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde'),
(3, 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde'),
(4, 'cdef', 'cdef', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `connected` varchar(250) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `suggestionStudent` varchar(1000) NOT NULL,
  `suggestionFaculty` varchar(1000) NOT NULL,
  `almaDep` varchar(1000) NOT NULL,
  `almaIns` varchar(1000) NOT NULL,
  `almaHall` varchar(1000) NOT NULL,
  `almaEntrepreneurship` varchar(1000) NOT NULL,
  `suggestionWomenEdu` varchar(1000) NOT NULL,
  `InstituteRankingImprovement` varchar(1000) NOT NULL,
  `id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `position`, `email`, `city`, `connected`, `contact`, `suggestionStudent`, `suggestionFaculty`, `almaDep`, `almaIns`, `almaHall`, `almaEntrepreneurship`, `suggestionWomenEdu`, `InstituteRankingImprovement`, `id`) VALUES
('Deb', 'abc', 'abc@gmail.com', '', '', '', '', '', '', '', '', '', '', '', 1),
('Array', 'abc', 'abc@gmail.com', 'abc', '', '1234', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 2),
('Array', 'abc', 'abc@gmail.com', 'abc', '', '1234', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 3),
('xyz', 'xyz', 'xyz@gmail.com', 'xyz', '', '0123456789', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 4),
('deb', 'aa', 'asfd@gmail.com', 'as', '', '1234', 'acx', 'scxa', 'vds', 'bd', 'db', 'vs', 'vd', 'bd', 5),
('lkjh', 'abc', 'abcxyz@gmail.com', 'a', '', '0123456789', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 6),
('pusp', 'abcsde', 'abcsde@gmail.com', 'abcsde', '', '0123456789', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 'abcsde', 7),
('cdef', 'cdef', 'cdef@gmail.com', 'cdef', '', '0123456789', 'cdef', 'cdef', 'cdef', 'cdef', 'cdef', 'cdef', 'cdef', 'cdef', 8),
('abcdefghj', 'abcdefghj', 'abcdefghj@gmail.com', 'abcdefghj', '', '0123456789', 'abcdefghj', 'abcdefghj', 'abcdefghj', 'abcdefghj', 'abcdefghj', 'abcdefghj', 'abcdefghj', 'abcdefghj', 9),
('xyz', 'xyz', 'xyz@gmail.com', 'xyz', 'xyz', '01', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
