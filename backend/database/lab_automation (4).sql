-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2026 at 08:08 PM
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
(12, 'FSR20001', 'FS', 'R2', '0001', 'Fuse', 'Drop-Out Fuse', 0),
(16, 'CPR10002', 'CP', 'R1', '0002', 'Capacitor', 'Three Phase Power Capacitor', 1),
(17, 'FSR10009', 'FS', 'R1', '0009', 'Fuse', 'Thermal Fuse', 0),
(18, 'RSR20006', 'RS', 'R2', '0006', 'Resistor', 'Carbon Film Resistor 1kΩ', 0),
(19, 'FSR10034', 'FS', 'R1', '0034', 'Fuse', 'Drop-Out Fuse', 1),
(21, 'CPR10089', 'CP', 'R1', '0089', 'Capacitor', 'Three Phase Power Capacitor', 0),
(25, 'SGR10010', 'SG', 'R1', '0010', 'Switchgear', '11kV Indoor Switchgear Panel', 0),
(27, 'FSR10029', 'FS', 'R1', '0029', 'Fuse', 'HRC Fuse 32A', 0),
(28, 'RSR20045', 'RS', 'R2', '0045', 'Resistor', 'Carbon Film Resistor 1kΩ', 0),
(30, 'SGR10065', 'SG', 'R1', '0065', 'Switchgear', '11kV Indoor Switchgear Panel', 1),
(33, 'RSR20074', 'RS', 'R2', '0074', 'Resistor', 'Carbon Film Resistor 1kΩ', 1),
(34, 'FSR20123', 'FS', 'R2', '0123', 'Resistor', 'Cement Resistor 5W', 1),
(38, 'SGR20087', 'SG', 'R2', '0087', 'Switchgear', '11kV Outdoor Switchgear Panel', 0),
(39, 'RSR20019', 'RS', 'R2', '0019', 'Resistor', 'High Power Resistor 100W', 0),
(41, 'CPR10088', 'CP', 'R1', '0088', 'Capacitor', 'LT Capacitor Bank Panel', 1),
(42, 'FSR20889', 'FS', 'R2', '0889', 'Fuse', 'Kit-Kat Fuse', 1),
(43, 'SGR10888', 'SG', 'R1', '0888', 'Switchgear', '11kV Indoor Switchgear Panel', 0),
(45, 'FSR10222', 'FS', 'R1', '0222', 'Fuse', 'Drop-Out Fuse', 1),
(46, 'RSR10555', 'RS', 'R1', '0555', 'Resistor', 'Cement Resistor 5W', 1);

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

--
-- Dumping data for table `testing_data`
--

INSERT INTO `testing_data` (`testing_id`, `product_id`, `product_type`, `testing_type`, `result_type`, `tested_by`, `remarks`, `created_at`, `send_to`, `is_locked`) VALUES
('2DP170030126', 43, 'Switchgear', 'Insulation Resistance', 'Fail', 'maheen', 'product men kharabhi he', '2026-01-03 16:56:01', 'Remanufacture', 0),
('9JDH1U030126', 38, 'Switchgear', 'Current Test', 'Pending', 'maheen', 'abhi completely check nahi hua', '2026-01-03 16:55:12', 'Pending', 0),
('A75MDK020126', 12, 'Fuse', 'Voltage Test', 'Pass', 'dawood', 'theek ', '2026-01-02 21:05:37', 'CPRI', 1),
('C32K94010126', 16, 'Capacitor', 'Voltage Test', 'Pass', 'amir', 'thek ', '2026-01-01 16:39:43', 'CPRI', 1),
('E1OLBA010126', 12, 'Fuse', 'Voltage Test', 'Pass', 'dawood', 'correct', '2026-01-01 16:12:37', 'CPRI', 1),
('F4TPVH010126', 17, 'Fuse', 'Insulation Resistance', 'Pass', 'noureen', 'passs ho gaya', '2026-01-01 18:30:31', 'CPRI', 1),
('JHDPHF020126', 12, 'Fuse', 'Insulation Resistance', 'Pass', 'afsheen', 'sahii he', '2026-01-02 21:20:11', 'CPRI', 1),
('MB7BAP030126', 21, 'Capacitor', 'Voltage Test', 'Fail', 'Muhammad', 'theek nahi he', '2026-01-03 16:54:19', 'Remanufacture', 0),
('NGWHKF030126', 30, 'Switchgear', 'Insulation Resistance', 'Pass', 'dawood', 'pass ho gya', '2026-01-03 17:00:33', 'CPRI', 1),
('QKV0CS030126', 18, 'Resistor', 'Voltage Test', 'Pending', 'Nazia', 'abhi copletely chack nahi hua', '2026-01-03 16:58:29', 'Pending', 0),
('TD0UEO030126', 27, 'Fuse', 'Voltage Test', 'Pass', 'dawood', 'theek he', '2026-01-03 15:12:25', 'CPRI', 1),
('UYKLPM030126', 39, 'Resistor', 'Voltage Test', 'Pass', 'Raheem', 'pass ho gya', '2026-01-03 16:56:38', 'CPRI', 1),
('WHO8Z8020126', 12, 'Fuse', 'Continuity Test', 'Pass', 'maheen', 'pass', '2026-01-02 21:22:39', 'CPRI', 1),
('WO15J5030126', 12, 'Fuse', 'Insulation Resistance', 'Pass', 'afsheen', 'pass ho gya', '2026-01-03 15:14:03', 'CPRI', 1),
('XOI1TO030126', 28, 'Resistor', 'Insulation Resistance', 'Pending', 'Rahmaan', 'abhi copletely chack nahi hua', '2026-01-03 16:57:41', 'Pending', 0),
('Y020G0030126', 25, 'Switchgear', 'Current Test', 'Pass', 'dawood', 'theek he', '2026-01-03 15:11:44', 'CPRI', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
