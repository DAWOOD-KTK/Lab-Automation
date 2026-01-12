-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2026 at 02:48 AM
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
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'nazia', 'nazia@gmail.com', 'appriciation', 'your products are very good', '2026-01-10 12:18:39'),
(2, 'nazia', 'nazia@gmail.com', 'Geting info', 'I want to ask about delivery service', '2026-01-10 12:24:15'),
(3, 'Ramz', 'Ramz@gmail.com', 'review', 'product is working perfectly and quality is great', '2026-01-10 12:30:47'),
(4, 'maheen', 'maheen@gmail.com', 'review', 'perfect product', '2026-01-10 13:06:39'),
(5, 'Zulfiqar Ali', 'zulfiqar@gmail.com', 'checking', 'acha he bht', '2026-01-10 13:13:49'),
(6, 'Muhammad Aamir', 'Aamir@gmail.com', 'review', 'incradible', '2026-01-10 13:14:44'),
(7, 'Muhammad Aamir', 'Aamir@gmail.com', 'review', 'zbardast', '2026-01-10 13:17:05');

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
(82, 'SGR10001', 'SG', 'R1', '0001', 'Switchgear', '11kV Indoor Switchgear Panel', '1767804513_11kV Indoor Switchgear Panel.jpg', 1),
(83, 'SGR10002', 'SG', 'R1', '0002', 'Switchgear', '11kV Indoor Switchgear Panel', '1767804593_11kV Indoor Switchgear Panel1.jpg', 1),
(84, 'SGR20003', 'SG', 'R2', '0003', 'Switchgear', '11kV Indoor Switchgear Panel', '1767804632_11kV Indoor Switchgear Panel2.jpg', 1),
(85, 'SGR20004', 'SG', 'R2', '0004', 'Switchgear', '11kV Indoor Switchgear Panel', '1767804668_11kV Indoor Switchgear Panel3.jpg', 1),
(86, 'SGR20005', 'SG', 'R2', '0005', 'Switchgear', '11kV Outdoor Switchgear Panel', '1767804726_11kV Outdoor Switchgear Panel.jpg', 1),
(87, 'SGR30006', 'SG', 'R3', '0006', 'Switchgear', '11kV Outdoor Switchgear Panel', '1767804772_11kV Outdoor Switchgear Panel2.jpg', 1),
(88, 'SGR30007', 'SG', 'R3', '0007', 'Switchgear', '11kV Outdoor Switchgear Panel', '1767804883_11kV Outdoor Switchgear Panel3.jpg', 1),
(89, 'SGR10008', 'SG', 'R1', '0008', 'Switchgear', '33kV Indoor Switchgear Panel', '1767804927_33kV Indoor Switchgear Panel1.jpg', 1),
(90, 'SGR30009', 'SG', 'R3', '0009', 'Switchgear', '33kV Indoor Switchgear Panel', '1767804990_33kV Indoor Switchgear Panel8same.jpg', 1),
(91, 'SGR30010', 'SG', 'R3', '0010', 'Switchgear', '33kV Indoor Switchgear Panel', '1767805043_33kV Indoor Switchgear Panel5.jpg', 1),
(92, 'SGR20011', 'SG', 'R2', '0011', 'Switchgear', '33kV Indoor Switchgear Panel', '1767805103_33kV Indoor Switchgear Panel4.jpg', 1),
(93, 'SGR10012', 'SG', 'R1', '0012', 'Switchgear', '33kV Outdoor Switchgear Panel', '1767805155_33kV Outdoor Switchgear Panel1s.jpg', 1),
(94, 'SGR10013', 'SG', 'R1', '0013', 'Switchgear', '33kV Outdoor Switchgear Panel', '1767805222_33kV Outdoor Switchgear Panel2.jpg', 1),
(95, 'SGR20014', 'SG', 'R2', '0014', 'Switchgear', '33kV Outdoor Switchgear Panel', '1767805269_33kV Outdoor Switchgear Panel5.jpg', 1),
(96, 'SGR20015', 'SG', 'R2', '0015', 'Switchgear', 'LT Switchgear Panel (415V)', '1767805353_LT Switchgear Panel (415V).jpg', 1),
(97, 'SGR10017', 'SG', 'R1', '0017', 'Switchgear', 'LT Switchgear Panel (415V)', '1767805463_LT Switchgear Panel (415V)1.jpg', 1),
(98, 'SGR10018', 'SG', 'R1', '0018', 'Switchgear', 'LT Switchgear Panel (415V)', '1767805503_LT Switchgear Panel (415V)11.jpg', 1),
(99, 'FSR20019', 'FS', 'R2', '0019', 'Fuse', 'HRC Fuse 32A', '1767805682_HRC Fuse 32A.jpg', 1),
(101, 'SGR20020', 'SG', 'R2', '0020', 'Fuse', 'HRC Fuse 32A', '1767805845_HRC Fuse 32A1.jpg', 1),
(102, 'FSR10021', 'FS', 'R1', '0021', 'Fuse', 'HRC Fuse 32A', '1767805908_HRC Fuse 32A2.jpg', 1),
(103, 'FSR30022', 'FS', 'R3', '0022', 'Fuse', 'HRC Fuse 32A', '1767805933_HRC Fuse 32A3.jpg', 1),
(104, 'FSR30023', 'FS', 'R3', '0023', 'Fuse', 'HRC Fuse 32A', '1767805977_HRC Fuse 32A4.jpg', 1),
(105, 'FSR20024', 'FS', 'R2', '0024', 'Fuse', 'HRC Fuse 32A', '1767806004_HRC Fuse 32A4.jpg', 1),
(106, 'FSR10025', 'FS', 'R1', '0025', 'Fuse', 'Drop-Out Fuse', '1767806145_Drop-Out Fuse11.jpg', 1),
(107, 'FSR30026', 'FS', 'R3', '0026', 'Fuse', 'Drop-Out Fuse', '1767806178_Drop-Out Fuse11.jpg', 1),
(108, 'FSR10027', 'FS', 'R1', '0027', 'Fuse', 'Drop-Out Fuse', '1767806215_Drop-Out Fuse10.jpg', 1),
(109, 'FSR20028', 'FS', 'R2', '0028', 'Fuse', 'Drop-Out Fuse', '1767806248_Drop-Out Fuse20.jpg', 1),
(110, 'FSR20029', 'FS', 'R2', '0029', 'Fuse', 'Drop-Out Fuse', '1767806276_Drop-Out Fuse23.jpg', 1),
(111, 'FSR20030', 'FS', 'R2', '0030', 'Fuse', 'Drop-Out Fuse', '1767806311_Drop-Out Fuse32.jpg', 1),
(112, 'FSR10031', 'FS', 'R1', '0031', 'Fuse', 'Kit-Kat Fuse', '1767806354_Kit-Kat Fuse1.jpg', 1),
(113, 'FSR10033', 'FS', 'R1', '0033', 'Fuse', 'Kit-Kat Fuse', '1767806384_Kit-Kat Fuse6.jpg', 1),
(114, 'FSR30034', 'FS', 'R3', '0034', 'Fuse', 'Kit-Kat Fuse', '1767806424_Kit-Kat Fuse7.jpg', 1),
(115, 'FSR20035', 'FS', 'R2', '0035', 'Fuse', 'Kit-Kat Fuse', '1767806476_Kit-Kat Fuse8.jpg', 1),
(117, 'FSR10036', 'FS', 'R1', '0036', 'Fuse', 'Kit-Kat Fuse', '1767806538_Kit-Kat Fuse9.jpg', 1),
(118, 'FSR20037', 'FS', 'R2', '0037', 'Fuse', 'Cartridge Fuse 32A', '1767806595_Cartridge Fuse 32A9.jpg', 1),
(119, 'FSR10038', 'FS', 'R1', '0038', 'Fuse', 'Cartridge Fuse 32A', '1767806621_Cartridge Fuse 32A4.jpg', 1),
(120, 'FSR20039', 'FS', 'R2', '0039', 'Fuse', 'Cartridge Fuse 32A', '1767806649_Cartridge Fuse 32A5.jpg', 1),
(121, 'FSR20040', 'FS', 'R2', '0040', 'Fuse', 'Cartridge Fuse 32A', '1767806676_Cartridge Fuse 32A6.jpg', 1),
(123, 'FSR20042', 'FS', 'R2', '0042', 'Fuse', 'Cartridge Fuse 32A', '1767806833_Cartridge Fuse 32A1.jpg', 1),
(124, 'FSR10043', 'FS', 'R1', '0043', 'Fuse', 'Thermal Fuse', '1767806877_Thermal Fuse2.jpg', 1),
(125, 'FSR10044', 'FS', 'R1', '0044', 'Fuse', 'Thermal Fuse', '1767806911_Thermal Fuse6.jpg', 1),
(126, 'FSR20045', 'FS', 'R2', '0045', 'Fuse', 'Thermal Fuse', '1767806939_Thermal Fuse4.jpg', 1),
(127, 'FSR10046', 'FS', 'R1', '0046', 'Fuse', 'Thermal Fuse', '1767806981_Thermal Fuse5.jpg', 1),
(128, 'RSR10047', 'RS', 'R1', '0047', 'Capacitor', 'Power Capacitor 440V 25 kVAR', '1767807034_Power Capacitor 440V 25 kVAR2.jpg', 0),
(130, 'RSR10048', 'RS', 'R1', '0048', 'Resistor', 'Wire Wound Resistor 100Ω', '1767807327_3.jpg', 1),
(131, 'RSR10049', 'RS', 'R1', '0049', 'Resistor', 'Wire Wound Resistor 100Ω', '1767807363_Wire Wound Resistor 100Ω1.jpg', 1),
(133, 'RSR20050', 'RS', 'R2', '0050', 'Resistor', 'Wire Wound Resistor 100Ω', '1767807569_Wire Wound Resistor 100Ω 4.jpg', 1),
(134, 'RSR10051', 'RS', 'R1', '0051', 'Resistor', 'Wire Wound Resistor 100Ω', '1767807601_Wire Wound Resistor 100Ω 5.jpg', 1),
(135, 'RSR20052', 'RS', 'R2', '0052', 'Resistor', 'Carbon Film Resistor 1kΩ', '1767807660_Carbon Film Resistor 1kΩ.jpg', 1),
(136, 'RSR20053', 'RS', 'R2', '0053', 'Resistor', 'Carbon Film Resistor 1kΩ', '1767807706_Carbon Film Resistor 1kΩ1.jpg', 1),
(138, 'RSR10055', 'RS', 'R1', '0055', 'Resistor', 'Carbon Film Resistor 1kΩ', '1767807846_Carbon Film Resistor 1kΩ4.jpg', 1),
(139, 'RSR10056', 'RS', 'R1', '0056', 'Resistor', 'Carbon Film Resistor 1kΩ', '1767807892_Carbon Film Resistor 1kΩ3.jpg', 1),
(140, 'RSR10057', 'RS', 'R1', '0057', 'Resistor', 'High Power Resistor 100W', '1767807973_High Power Resistor 100W4.jpg', 1),
(142, 'RSR20058', 'RS', 'R2', '0058', 'Resistor', 'High Power Resistor 100W', '1767808076_High Power Resistor 100W3.jpg', 1),
(143, 'RSR20059', 'RS', 'R2', '0059', 'Resistor', 'High Power Resistor 100W', '1767808108_High Power Resistor 100W2.jpg', 1),
(145, 'RSR20060', 'RS', 'R2', '0060', 'Resistor', 'High Power Resistor 100W', '1767808172_High Power Resistor 100W1.jpg', 1),
(146, 'RSR10061', 'RS', 'R1', '0061', 'Resistor', 'Cement Resistor 5W', '1767808253_Cement Resistor 5W1.jpg', 1),
(147, 'RSR10062', 'RS', 'R1', '0062', 'Resistor', 'Cement Resistor 5W', '1767808287_Cement Resistor 5W5.jpg', 1),
(148, 'RSR20063', 'RS', 'R2', '0063', 'Resistor', 'Cement Resistor 5W', '1767808322_Cement Resistor 5W4.jpg', 1),
(149, 'RSR10064', 'RS', 'R1', '0064', 'Resistor', 'Precision Resistor 0.1%', '1767808358_Precision Resistor 0.1%2.jpg', 1),
(150, 'RSR10065', 'RS', 'R1', '0065', 'Resistor', 'Precision Resistor 0.1%', '1767808382_Precision Resistor 0.1%.jpg', 1),
(152, 'CPR10067', 'CP', 'R1', '0067', 'Capacitor', 'Power Capacitor 440V 25 kVAR', '1767808549_Power Capacitor 440V 25 kVAR2.jpg', 1),
(153, 'CPR10068', 'CP', 'R1', '0068', 'Capacitor', 'Three Phase Power Capacitor', '1767808593_Three Phase Power Capacitor1.jpg', 1),
(154, 'CPR20069', 'CP', 'R2', '0069', 'Capacitor', 'Oil Filled Power Capacitor', '1767808645_Oil Filled Power Capacitor6.jpg', 1),
(155, 'CPR20070', 'CP', 'R2', '0070', 'Resistor', 'LT Capacitor Bank Panel', '1767808689_LT Capacitor Bank Panel3.jpg', 1),
(156, 'CPR20071', 'CP', 'R2', '0071', 'Capacitor', 'HT Capacitor Bank', '1767808724_HT Capacitor Bank1.jpg', 1);

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
(5, 'SGR1VT000001', 82, 'SG', 'VT', '000001', 'R1', 'Switchgear', 'Voltage Test', 'Pass', 'afsheen', 'Voltage Test completed, parameters within limits', '2026-01-08 03:17:39', 'Remanufacture', 0),
(6, 'SGR1CT000002', 82, 'SG', 'CT', '000002', 'R1', 'Switchgear', 'Current Test', 'Fail', 'afsheen', 'Current Test failed, abnormal readings', '2026-01-08 03:24:29', 'Remanufacture', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userstaafe`
--

CREATE TABLE `userstaafe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `roll` varchar(50) DEFAULT 'user',
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
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `testing_data`
--
ALTER TABLE `testing_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
