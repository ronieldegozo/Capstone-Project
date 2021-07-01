-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 01, 2021 at 09:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `fullname`, `username`, `password`) VALUES
(1, 'roniel', 'degozo', 'degozo'),
(2, 'Rogine Grace Laurito', 'rogine', 'grace');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `course` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `course`, `username`, `email`, `verified`, `token`, `password`) VALUES
(1, 'Mc Roniel', 'De Gozo', 'BSIT', 'ronieldegozo', 'mc.degozo@neu.edu.ph', 1, '1e4476ffec578dfdd5bdbceec295264f8769d292d63109080cf9f60d85bc66bd4270c61f59f170b1177a1d7ac75a1a31fd0f', '$2y$10$9FNNnCo/sBjYFfXZR6Z8W.xcjp7PIcwPmIm17PI.cbD936tM4nkey'),
(3, 'Roniel', 'Delos Santos', 'BSIT', 'Roniel16', 'ronieldegozo@gmail.com', 1, '75676e7851981521cb362e45d32d1a06a2730116b8cea02523845b013736b0532333cef79e0aa7e9e23732bd4cab38f3ab90', '$2y$10$lAMVuuCRwf6wRE/8XHgmBeBkWcnpZLTC4xTsRenVnn2V6db/6.haS'),
(4, 'Raffy', 'Olavario', 'BSCS', 'raffy12345', 'degozorommel@gmail.com', 1, '5204d9669328dd13f9c2d8c7077c9474de74c251da1f185ebdb1ba73b899a64e8618708316f7008e0fee6eacb67b5a215ab5', '$2y$10$KBR/PXrwiD8X9j5B9iV.HewI8Vh8LGiysL6mRT6SPJ1Vev11OtVPS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
