-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 02:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countrydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `capital`, `code`, `created_at`, `updated_at`) VALUES
(1, 'sawat', 'laod', 12, '2024-10-09 03:19:28', '2024-10-09 03:19:28'),
(2, 'sawat', 'laod', 1, '2024-10-09 03:43:56', '2024-10-09 03:43:56'),
(3, 'sawat', 'laod', 2, '2024-10-09 04:16:45', '2024-10-09 04:16:45'),
(4, 'sawat', 'laod', 5, '2024-10-09 04:29:06', '2024-10-09 04:29:06'),
(5, 'sawat', 'laod', 4, '2024-10-09 04:30:27', '2024-10-09 04:30:27'),
(6, 'sawat', 'daya', 5, '2024-10-09 04:31:33', '2024-10-09 04:31:33'),
(7, 'sawatcfr', 'laod', 23, '2024-10-09 04:32:48', '2024-10-09 04:32:48'),
(8, 'pacac', 'daya', 2, '2024-10-09 04:36:30', '2024-10-09 04:36:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
