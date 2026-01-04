-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2026 at 10:49 AM
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
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_code`, `rivision`, `manufacturing_no`, `product_type`, `product_name`, `image`, `is_active`) VALUES
(47, 'SGR10090', 'SG', 'R2', '0090', 'Switchgear', '11kV Indoor Switchgear Panel', '05.jpg', 1),
(51, 'SGR10011', 'SG', 'R1', '0011', 'Switchgear', '33kV Indoor Switchgear Panel', '06.jpg', 1),
(52, 'CPR10463', 'CP', 'R1', '0463', 'Capacitor', 'Three Phase Power Capacitor', 'fuse2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testing_data`
--

CREATE TABLE `testing_data` (
  `testing_id` varchar(12) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_type` varchar(11) NOT NULL,
  `testing_type` varchar(200) DEFAULT NULL,
  `result_type` enum('Pass','Fail','Pending') NOT NULL,
  `tested_by` varchar(200) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `send_to` enum('CPRI','Remanufacture','Pending') DEFAULT 'Pending',
  `is_locked` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'DAWOOD', 'dawod2@gamil.com', '$2y$10$fOSfzZsw7OUlzOHlqxN7kOXSBt8pB.ZPy59siyN9JpaMxkHN89saO', 'admin', 'qwqwq.jpg'),
(4, 'Ali', 'Alikhattak@gmail.com', '$2y$10$OcRK0d6WwdhPp2ITRgdyH.2wlaz5gzSsMhprtB2GvqRGEGxeY5x6e', 'user', 'ZMmAKg.png'),
(5, 'Bint e Nasir', 'Nasir@gmail.com', '$2y$10$7xPIFtB8LOhQ9BduNSE48e05q4mJ3Yut7J2jbffCez.hGbLvY7CsO', 'admin', 'admin.jpg'),
(6, 'Bint e Nasir', 'sheen@gmail.com', '$2y$10$jWb59jK.C64AGuzly1XDv.jFACYg16umamwfmIEntRHiiJ1cZ5CF2', 'admin', 'admin.jpg'),
(7, 'nazia', 'naz@gmail.com', '$2y$10$gRpZrXMsS.tn/VN.91TXq.D2rHKYVB5lMlBV0PHJfovPcRyF.Qk4u', 'admin', 'naz2.png');

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
  ADD KEY `fk_product` (`product_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userstaafe`
--
ALTER TABLE `userstaafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testing_data`
--
ALTER TABLE `testing_data`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
