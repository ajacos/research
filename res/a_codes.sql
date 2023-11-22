-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 12:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_codes`
--

CREATE TABLE `a_codes` (
  `id` int(11) NOT NULL,
  `sec` varchar(4) NOT NULL,
  `sec_name` varchar(255) NOT NULL,
  `group_num` varchar(255) NOT NULL,
  `a_code` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_codes`
--

INSERT INTO `a_codes` (`id`, `sec`, `sec_name`, `group_num`, `a_code`, `status`) VALUES
(1, '1011', 'Archimedes', '1', 'f3rEOziQ', 0),
(2, '1011', 'Archimedes', '2', 'pND5302I', 0),
(3, '1011', 'Archimedes', '3', '3CABUvob', 0),
(4, '1011', 'Archimedes', '4', '0EVcGaPz', 0),
(5, '1011', 'Archimedes', '5', 'KbDzC5H2', 0),
(6, '1012', 'Bernoulli', '1', 'Z6rW7UuL', 0),
(7, '1012', 'Bernoulli', '2', 'ItrpVxoS', 0),
(8, '1012', 'Bernoulli', '3', 'ycOlrxiM', 0),
(9, '1012', 'Bernoulli', '4', '2XVh7lvR', 0),
(10, '1012', 'Bernoulli', '5', 'yhcW3215', 0),
(11, '1013', 'Edison', '1', 'iK3VuskU', 0),
(12, '1013', 'Edison', '2', '7g8Kclw0', 0),
(13, '1013', 'Edison', '3', 'Ud1wqLHS', 0),
(14, '1013', 'Edison', '4', 'KfCh49vA', 0),
(15, '1013', 'Edison', '5', 'VT7WN1L3', 0),
(16, '1014', 'Einstein', '1', 'G3tyQwbR', 0),
(17, '1014', 'Einstein', '2', 'tTNKG5Sa', 0),
(18, '1014', 'Einstein', '3', 'hQjNqJ0A', 0),
(19, '1014', 'Einstein', '4', 'pBskDCve', 0),
(20, '1014', 'Einstein', '5', '4O13lWU9', 0),
(21, '1015', 'Faraday', '1', 'vJOmGLgV', 0),
(22, '1015', 'Faraday', '2', 'ehDNaLwU', 0),
(23, '1015', 'Faraday', '3', '1t5jbhYc', 0),
(24, '1015', 'Faraday', '4', 'ukVTw9Lc', 0),
(25, '1015', 'Faraday', '5', 'cIUOy4vm', 0),
(26, '1016', 'Maxwell', '1', 'w2pLhl7J', 0),
(27, '1016', 'Maxwell', '2', 'HyQ4uj9z', 0),
(28, '1016', 'Maxwell', '3', 'BJeyoUdr', 0),
(29, '1016', 'Maxwell', '4', 'Br2kIXGg', 0),
(30, '1016', 'Maxwell', '5', 'BIea109W', 0),
(31, '1017', 'Newton', '1', 'T18qEMSQ', 0),
(32, '1017', 'Newton', '2', 'asda2133', 0),
(33, '1017', 'Newton', '3', 'j83HdX7I', 0),
(34, '1017', 'Newton', '4', '9jmSD1EX', 0),
(35, '1017', 'Newton', '5', 'FHv1W6Rj', 0),
(36, '1018', 'Pascal', '1', 'GK4au9sW', 0),
(37, '1018', 'Pascal', '2', 'gdVXo751', 0),
(38, '1018', 'Pascal', '3', 'jcwXYsGr', 0),
(39, '1018', 'Pascal', '4', 'wOPBMYZb', 0),
(40, '1018', 'Pascal', '5', 'IlLU2ip3', 0),
(41, '1019', 'Thomson', '1', 'MwBj0Ux7', 0),
(42, '1019', 'Thomson', '2', 'wy0JKvmf', 0),
(43, '1019', 'Thomson', '3', 'p42EvGKS', 0),
(44, '1019', 'Thomson', '4', 'Ptfy4E8N', 0),
(45, '1019', 'Thomson', '5', '0SWqukQy', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_codes`
--
ALTER TABLE `a_codes`
  ADD UNIQUE KEY `1` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_codes`
--
ALTER TABLE `a_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
