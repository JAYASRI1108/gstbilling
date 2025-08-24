-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2025 at 09:21 PM
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
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_uname` varchar(255) DEFAULT NULL,
  `a_pass` varchar(255) DEFAULT NULL,
  `a_name` varchar(100) DEFAULT NULL,
  `a_place` varchar(100) DEFAULT NULL,
  `a_address` text DEFAULT NULL,
  `a_gstno` varchar(15) DEFAULT NULL,
  `a_state` varchar(100) DEFAULT NULL,
  `a_code` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_uname`, `a_pass`, `a_name`, `a_place`, `a_address`, `a_gstno`, `a_state`, `a_code`, `created_at`) VALUES
(1, 'xxxx', 'abc', 'yyyyyyyyyyyyy', 'yyyyyyyyy', 'xxxxxxxxxxxxxxxxx', '12233445667', 'Tamil Nadu', '11', '2025-07-14 11:33:09'),
(2, 'yyyy', 'xyz', 'xxxxxxxxxxxxxx', 'yyyyyyyy', 'zzzzzzzzzzzzzzzzz', '123rgy67777', 'Tamil Nadu', '53', '2025-07-14 11:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_address` text DEFAULT NULL,
  `c_gstno` varchar(20) DEFAULT NULL,
  `c_state` varchar(100) DEFAULT NULL,
  `c_code` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `a_c_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `a_id`, `c_name`, `c_address`, `c_gstno`, `c_state`, `c_code`, `created_at`, `status`, `a_c_id`) VALUES
(1, 1, 'Surabhi enterprises', '12/36 , South Saminathapuram Karur', '1234567890', 'Tamil Nadu', 'Tamil Nadu', '2025-08-24 15:30:48', 'active', 1),
(2, 1, 'anushya', '12/36 , South Saminathapuram Karur', '1234567890', 'Tamil Nadu', 'Tamil Nadu', '2025-08-24 15:49:28', 'active', 2),
(3, 1, 'Chettinad1', '12/36 , South Saminathapuram Karur', '12345', 'Tamil Nadu', 'Tamil Nadu', '2025-08-24 15:54:47', 'active', 3),
(4, 1, 'jaisri', '12/36 , South Saminathapuram Karur', '0987654321', 'Tamil Nadu', 'Tamil Nadu', '2025-08-24 16:11:29', 'active', 4),
(5, 1, 'jaisri1', '12/36 , South Saminathapuram Karur', '00', 'Tamil Nadu', 'Tamil Nadu', '2025-08-24 16:25:10', 'active', 5),
(6, 1, 'srijai', '12/36 , South Saminathapuram Karur', '0987654321', 'Tamil Nadu', 'Tamil Nadu', '2025-08-24 18:03:24', 'active', 6);

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `g_id` int(11) NOT NULL,
  `goods_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`g_id`, `goods_name`) VALUES
(1, 'welding machine');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `invoice_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `a_c_id` int(11) NOT NULL DEFAULT 0,
  `c_id` int(11) DEFAULT NULL,
  `invoice_no` varchar(50) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `delivery_note` varchar(100) DEFAULT NULL,
  `mode_or_terms_of_payment` varchar(100) DEFAULT NULL,
  `reference_no_date` varchar(100) DEFAULT NULL,
  `other_references` varchar(100) DEFAULT NULL,
  `buyers_order_no` varchar(100) DEFAULT NULL,
  `buyers_order_date` date DEFAULT NULL,
  `dispatch_doc_no` varchar(100) DEFAULT NULL,
  `delivery_note_date` date DEFAULT NULL,
  `dispatched_through` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `terms_of_delivery` text DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cgst_percent` int(11) DEFAULT NULL,
  `sgst_percent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`invoice_id`, `a_id`, `a_c_id`, `c_id`, `invoice_no`, `invoice_date`, `delivery_note`, `mode_or_terms_of_payment`, `reference_no_date`, `other_references`, `buyers_order_no`, `buyers_order_date`, `dispatch_doc_no`, `delivery_note_date`, `dispatched_through`, `destination`, `terms_of_delivery`, `status`, `created_at`, `cgst_percent`, `sgst_percent`) VALUES
(1, 1, 1, 1, '1/25', '2025-08-24', '', '', '', '', '', NULL, '', NULL, '', '', '', 'Active', '2025-08-24 15:31:13', 6, 6),
(2, 1, 2, 2, '2/25', '2025-08-24', '', '', '', '', '', NULL, '', NULL, '', '', '', 'Active', '2025-08-24 15:49:47', 9, 9),
(3, 1, 3, 3, '3/25', '2025-08-24', '', '', '', '', '', NULL, '', NULL, '', '', '', 'Active', '2025-08-24 15:55:20', 9, 9),
(4, 1, 4, 4, '4/25', '2025-08-24', '', '', '', '', '', NULL, '', NULL, '', '', '', 'Active', '2025-08-24 16:11:41', 6, 6),
(5, 1, 5, 5, '5/25', '2025-08-24', '', '', '', '', '', NULL, '', NULL, '', '', '', 'Active', '2025-08-24 16:25:24', 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `store_goods`
--

CREATE TABLE `store_goods` (
  `id` int(11) NOT NULL,
  `a_id` int(11) DEFAULT NULL,
  `a_c_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `g_id` int(11) DEFAULT NULL,
  `goods_name` varchar(255) DEFAULT NULL,
  `hsn_sac` varchar(50) DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `discount_percent` decimal(5,2) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'active',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_goods`
--

INSERT INTO `store_goods` (`id`, `a_id`, `a_c_id`, `c_id`, `invoice_id`, `g_id`, `goods_name`, `hsn_sac`, `quantity`, `rate`, `discount_percent`, `amount`, `status`, `created_at`) VALUES
(1, 1, 1, 1, 1, 1, 'welding machine', '123456', 12.00, 12.00, 0.00, 144.00, 'active', '2025-08-24 21:02:21'),
(2, 1, 3, 3, 3, 1, 'welding machine', '123', 2.00, 12.00, 0.00, 24.00, 'active', '2025-08-24 21:34:10'),
(3, 1, 4, 4, 4, 1, 'welding machine', '123456', 9.00, 9.00, 0.00, 81.00, 'active', '2025-08-24 21:41:59'),
(4, 1, 5, 5, 5, 1, 'welding machine', '23', 3.00, 2.00, 0.00, 6.00, 'active', '2025-08-24 21:55:48'),
(5, 1, 2, 2, 2, 1, 'welding machine', '2339', 9.00, 99.00, 0.00, 891.00, 'active', '2025-08-24 23:06:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `store_goods`
--
ALTER TABLE `store_goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store_goods`
--
ALTER TABLE `store_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customers` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
