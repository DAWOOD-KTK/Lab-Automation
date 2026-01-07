-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2026 at 02:46 PM
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
(52, 'CPR10463', 'CP', 'R1', '0463', 'Capacitor', 'Three Phase Power Capacitor', 'fuse2.jpg', 1),
(53, 'SGR20001', 'SG', 'R2', '0001', 'Switchgear', '11kV Indoor Switchgear Panel', '01.jpg', 1),
(54, 'FSR10002', 'FS', 'R1', '0002', 'Fuse', 'HRC Fuse 32A', 'fuse4.jpg', 0),
(56, 'FSR10003', 'FS', 'R1', '0003', 'Fuse', 'Drop-Out Fuse', '07.jpg', 1),
(58, 'SGR10004', 'SG', 'R1', '0004', 'Switchgear', '33kV Indoor Switchgear Panel', '04.jpg', 1),
(60, 'SGR10005', 'SG', 'R1', '0005', 'Switchgear', '11kV Outdoor Switchgear Panel', '06.jpg', 0),
(62, 'FSR10006', 'FS', 'R1', '0006', 'Fuse', 'Drop-Out Fuse', '1767614874_09.jpg', 1),
(64, 'SGR10007', 'SG', 'R1', '0007', 'Switchgear', '11kV Outdoor Switchgear Panel', '1767615209_02.jpg', 1),
(65, 'RSR10008', 'RS', 'R1', '0008', 'Resistor', 'Carbon Film Resistor 1kΩ', '1767615781_fuse11.png', 1),
(66, 'SGR10009', 'SG', 'R1', '0009', 'Switchgear', '11kV Outdoor Switchgear Panel', '1767615867_04.jpg', 1),
(67, 'SGR10010', 'SG', 'R1', '0010', 'Switchgear', 'LT Switchgear Panel (415V)', '1767616062_05.jpg', 1),
(69, 'FSR10012', 'FS', 'R1', '0012', 'Fuse', 'Thermal Fuse', '1767629185_fuse2.jpg', 1),
(70, 'FSR20013', 'FS', 'R2', '0013', 'Fuse', 'Drop-Out Fuse', '1767629713_fuse4.png', 1),
(71, 'FSR20014', 'FS', 'R2', '0014', 'Fuse', 'Kit-Kat Fuse', '1767629802_fuse5.jpg', 1),
(72, 'RSR20015', 'RS', 'R2', '0015', 'Resistor', 'Cement Resistor 5W', '1767629973_fuse6.jpg', 1),
(73, 'RSR30016', 'RS', 'R3', '0016', 'Resistor', 'Cement Resistor 5W', '1767630249_fuse3.jpg', 1),
(74, 'FSR20018', 'FS', 'R2', '0018', 'Fuse', 'Thermal Fuse', '1767630838_fuse1.jpg', 1),
(75, 'SGR10019', 'SG', 'R1', '0019', 'Switchgear', '33kV Outdoor Switchgear Panel', '1767632983_13.png', 1),
(80, 'RSR10020', 'RS', 'R1', '0020', 'Fuse', 'Drop-Out Fuse', '1767683141_fuse2.jpg', 1),
(81, 'CPR10021', 'CP', 'R1', '0021', 'Capacitor', 'Power Capacitor 440V 25 kVAR', '1767699792_fuse1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testing_data`
--

CREATE TABLE `testing_data` (
  `id` int(11) NOT NULL,
  `testing_id` varchar(12) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` char(2) NOT NULL,
  `testing_code` varchar(10) NOT NULL,
  `testing_roll` varchar(6) NOT NULL,
  `revision` char(2) NOT NULL,
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

INSERT INTO `testing_data` (`id`, `testing_id`, `product_id`, `product_code`, `testing_code`, `testing_roll`, `revision`, `product_type`, `testing_type`, `result_type`, `tested_by`, `remarks`, `created_at`, `send_to`, `is_locked`) VALUES
(1, 'SGR2CT000001', 47, 'SG', 'CT', '000001', 'R2', 'Switchgear', 'Current Test', 'Pass', 'amir', 'Current Test completed, readings normal', '2026-01-06 17:12:21', 'CPRI', 1),
(2, 'SGR2VT000002', 47, 'SG', 'VT', '000002', 'R2', 'Switchgear', 'Voltage Test', 'Pass', 'dawood', 'Voltage Test completed, parameters within limits', '2026-01-06 17:13:12', 'CPRI', 1),
(3, 'SGR2IR000003', 47, 'SG', 'IR', '000003', 'R2', 'Switchgear', 'Insulation Resistance', 'Pass', 'amir', 'Insulation Resistance measured, values acceptable', '2026-01-06 17:14:13', 'CPRI', 1),
(4, 'SGR2CN000004', 47, 'SG', 'CN', '000004', 'R2', 'Switchgear', 'Continuity Test', 'Pass', 'amir', 'Continuity Test passed, circuit intact', '2026-01-06 17:14:39', 'CPRI', 1);

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
(5, 'Bint e Nasir', 'Nasir@gmail.com', '$2y$10$7xPIFtB8LOhQ9BduNSE48e05q4mJ3Yut7J2jbffCez.hGbLvY7CsO', 'admin', 'admin.jpg'),
(6, 'Bint e Nasir', 'sheen@gmail.com', '$2y$10$jWb59jK.C64AGuzly1XDv.jFACYg16umamwfmIEntRHiiJ1cZ5CF2', 'admin', 'admin.jpg'),
(7, 'nazia', 'naz@gmail.com', '$2y$10$gRpZrXMsS.tn/VN.91TXq.D2rHKYVB5lMlBV0PHJfovPcRyF.Qk4u', 'admin', 'naz2.png'),
(8, 'Ramz', 'Ramz1@gmail.com', '$2y$10$GeObwvWcqMBr2capYX4MH.IIdKadjkz3aRPWTXHODmXgoH1KZumJS', 'subAdmin', ''),
(9, 'Ramz', 'ramz3@gmail.com', '$2y$10$O2Hwe2HRDkNXhBydSNccGepcFx03f2yDm7WP2ujSvwScjvl5elgQa', 'manigar', 'mm.jpg'),
(10, 'samreen', 's@gmail.com', '$2y$10$Y0IYE2sdaxZP/7wCQhKr3usZv41f/AKLJ/4b5AOix81XEt4Z3Epgm', 'user', '1767617950_mm.jpg'),
(11, 'nimra', 'nimra@gmail.com', '$2y$10$4NI9OMVrQjvXx5x3LnVxEuehbEm0RnLrM5NnRVFthup8B2OO8DJeG', 'user', '1767618120_lp2.PNG'),
(12, 'nazish', 'nazish@gmail.com', '$2y$10$y.imqkzkJqeE6QLs5lsyduvaZmRGbnZjJhCTnbRDD6TUllxNR5xVe', 'user', '1767618236_qwqwq.jpg'),
(13, 'Muhammad Aamir', 'Aamir2@gmail.com', '$2y$10$7lEiMi3HeILOg.d4oEjxEumWUw/80x/hIwztEgDEZ/ZLRZY5eSmTm', 'manigar', '1767618339_b1.jpg'),
(14, 'kuch bhi', 'kuchbhi@gmail.com', '$2y$10$Fr/xf3AIZM9NEt5DYpn60OiqZZGmiJHTEsc4C2mWKQFm7gjgg.oEi', 'user', '1767618435_naz2.png'),
(15, 'nazia', 'nazia123@gmail.com', '$2y$10$VNiYBr89/IsuWGoJ7poY8.Pi07YHQuz12z0olEzwX7EVsdkB2U7J6', 'user', '1767625632_naz2.png'),
(16, 'Muzammil Ali', 'muzamil@gmail.com', '$2y$10$qdUy0.3xp1d5SW/acR0IcuoBBSbNk4PYdlz7TmhX.nIheqifFiLAe', 'subAdmin', '1767625908_lp2.PNG'),
(17, 'maheren', 'maheren@gmail.com', '$2y$10$bk/ilDv8mrTB18zVrBB9TONFkObyFApN2uryRHbIjj7.Iw3VjhhFK', 'user', '1767628781_naz.png'),
(18, 'shahmeer ', 'shahmeer@gmail.com', '$2y$10$Bh1bWpB1kZH3qHHSkmCeJ.J4bLH8n5WLn4hD4kXO/X2yzXUgkcAjO', 'user', '1767629017_naz.png'),
(19, 'naheed', 'naheed@mail.com', '$2y$10$vrk22LqAUVnlPyNrv3.ttuMDjpD3PDGDAmq.YKRw33Yiw/ZD0nyvW', 'user', '1767629074_naz.png'),
(20, 'hunera', 'hunera@mail.com', '$2y$10$txyBcTt93EV2E/C8UuC4Ke5ObBBeRUD4rJuhttKsQ4ZE8vm6qx7Sm', 'user', '1767632203_logo2.png'),
(21, 'Rhaman', 'Rhaman@gmail.com', '$2y$10$B9w6kUXUQXlJUW2pRIr0t.GS3q570kCNyRtvPYt7V9ON3z7xZ00Ri', 'user', '1767699712_fuse6.png');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_product_test` (`product_id`,`testing_code`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `testing_data`
--
ALTER TABLE `testing_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userstaafe`
--
ALTER TABLE `userstaafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
