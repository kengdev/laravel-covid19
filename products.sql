-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 04:07 AM
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
-- Database: `laraveltutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'แก้วน้ำเก็บความเย็น (ใหญ่)', '299.00', '2022-12-21 02:09:07', '2022-12-21 02:09:07'),
(2, 'หูฟังไร้สาย', '899.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(3, 'สมาร์ทวอทช์', '2900.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(4, 'แท่นชาร์จไร้สาย', '899.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(5, 'ปากกาสไตลัส', '1250.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(6, 'คีย์บอร์ดและเมาส์บลูทูธ', '499.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(7, 'ลำโพงบลูทูธ', '899.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(8, 'โปรเจคเตอร์', '3620.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(9, 'ขาตั้งกล้องมือถือ', '199.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(10, 'กล่องฆ่าเชื้อโรค', '219.00', '2023-03-22 02:27:00', '2023-03-29 01:35:01'),
(11, 'เครื่องฟอกอากาศ', '950.00', '2023-03-22 02:27:00', '2023-03-22 02:27:00'),
(12, 'สาย HDMI', '450.00', '2023-03-29 01:33:07', '2023-03-29 01:33:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
