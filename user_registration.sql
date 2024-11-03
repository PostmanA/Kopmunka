-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 06:45 PM
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
-- Database: `user_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'DavidBukris', '$2y$10$fxN1yp7KmcUk/rF0.MIExuXJCBXzCIshjqvrhyc0B9Jz7Avh8v1CG', '2024-11-03 14:58:26'),
(2, 'test', '$2y$10$80CE.eksnvfpW4yDCHIWcOlPbaBmEBP5UDw79GQL0vDl5CiFfadSS', '2024-11-03 15:07:19'),
(3, 'SKIBIDY', '$2y$10$qjFtXKxy0EdqZVEbYSHNb.nnMxaqcW77gtZUVSc7oMA.dfZCWghy.', '2024-11-03 17:02:47'),
(4, 'valami', '$2y$10$XSmbO7FDgEP7PbhLAMW8/.lN5yIAeWK9NBGWKKI0ISr2Tm7./P54u', '2024-11-03 17:04:19'),
(5, 'davidosz', '$2y$10$7G38zL3uoJFL4axpb85pO.G84LBWoVc3sb/9bPaAGbe2pN6E.d2E6', '2024-11-03 17:10:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
