-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2025 at 07:27 PM
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
-- Database: `crud_operation`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_project`
--

CREATE TABLE `st_project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `st_project`
--

INSERT INTO `st_project` (`id`, `name`, `email`, `phone`, `address`, `department`) VALUES
(5, 'Lata akter', 'lata@gmail.com', '10001', 'Munshiganj', 'Computer'),
(7, 'Manal Tabasum', 'manal@gmail.com', '10002', 'Rampal, Munshiganj Sadar , Munshiganj', 'Computer'),
(8, 'Tina', 'tina@gmail.com', '10003', 'Munshiganj', 'Civil'),
(9, 'Shima', 'sima@gmail.com', '10004', 'Dhaka', 'Mechanic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_project`
--
ALTER TABLE `st_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_project`
--
ALTER TABLE `st_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
