-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2025 at 10:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_id` varchar(12) NOT NULL,
  `product_code` varchar(2) NOT NULL,
  `rivision` varchar(11) NOT NULL,
  `manufacturing_no` varchar(50) NOT NULL,
  `product_type` varchar(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_code`, `rivision`, `manufacturing_no`, `product_type`, `product_name`, `is_active`) VALUES
(6, 'SGR10007', 'SG', 'R1', '0007', 'Switchgear', '11kV Indoor Switchgear Panel', 0),
(8, 'RSR10004', 'RS', 'R1', '0004', 'Fuse', 'Kit-Kat Fuse', 0),
(9, 'RSR20005', 'RS', 'R2', '0005', 'Resistor', 'High Power Resistor 100W', 1),
(10, 'CPR20008', 'CP', 'R2', '0008', 'Capacitor', 'Three Phase Power Capacitor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testing_data`
--

CREATE TABLE `testing_data` (
  `testing_id` varchar(12) NOT NULL,
  `product_type` varchar(11) NOT NULL,
  `testing_type` varchar(200) DEFAULT NULL,
  `result_type` enum('Pass','Fail','Pending') NOT NULL,
  `tested_by` varchar(200) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `send_to` enum('CPRI','Remanufacture','Pending') DEFAULT 'Pending',
  `is_locked` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testing_data`
--

INSERT INTO `testing_data` (`testing_id`, `product_type`, `testing_type`, `result_type`, `tested_by`, `remarks`, `created_at`, `send_to`, `is_locked`) VALUES
('4J2CXC281225', 'Resistor', 'Current Test', 'Pass', 'amir', 'kuch bhi', '2025-12-28 20:41:31', 'CPRI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userstaafe`
--

CREATE TABLE `userstaafe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userstaafe`
--

INSERT INTO `userstaafe` (`id`, `name`, `email`, `passwd`, `roll`, `image`) VALUES
(3, 'Rimsha', 'Rimsha123@gmail.com', '$2y$10$3bA8cs9BBFWBM1PGl9TTqevwl3ZSc5giGYkHU5UF.PvF5PELB.6dC', 'subAdmin', '3d-cartoon-style-character.jpg'),
(4, 'Aqib Mehmood', 'Aqib_mehmood@gmail.com', '$2y$10$RZ9b0vVlJ4CHIw8tBrsBTusvQ9Qpg.fZkA1SspJ4DTJMVDZavKgfW', 'admin', '3d-cartoon-portrait-person-practicing-law-related-profession (1).jpg'),
(5, 'nazia', 'nazia@gmail.com', '$2y$10$qGtbNmljObjvM3eR/paWau6EJi7pV.L1tp/goM56cUMzjmWQV5h/G', 'manigar', 'pp.png'),
(6, 'Muhammad Aamir', 'Aamir@gmail.com', 'amir', 'admin', 'qwqwq.jpg'),
(7, 'Zulfiqar Ali', 'zulfiqar@gmail.com', '$2y$10$.Erq9sKdTBgJ8Dqeu9cSMO4L8eiSwUyhkKpD5sO2xbFuLaZhObqjW', 'manigar', 'b1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_manufacturing_no` (`manufacturing_no`);

--
-- Indexes for table `testing_data`
--
ALTER TABLE `testing_data`
  ADD UNIQUE KEY `testing_id` (`testing_id`),
  ADD KEY `product_id` (`product_type`);

--
-- Indexes for table `userstaafe`
--
ALTER TABLE `userstaafe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userstaafe`
--
ALTER TABLE `userstaafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
