-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 03:59 PM
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
-- Database: `wheelwise_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_name_first` varchar(255) NOT NULL,
  `user_name_last` varchar(255) NOT NULL,
  `user_name_middle` varchar(255) DEFAULT NULL,
  `user_date_of_birth` date NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_address_province` varchar(255) NOT NULL,
  `user_address_municipality` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_name_first`, `user_name_last`, `user_name_middle`, `user_date_of_birth`, `user_gender`, `user_password`, `user_address_province`, `user_address_municipality`, `user_type`) VALUES
(23, 'admin', 'admin@gmail.com', 'adminF', 'adminL', 'adminS', '2001-01-01', 'male', '$2y$10$oQTPBli/OZotmxEHwg3XS.kEqXqaID2Q6TgUGiIo9cC.vk5O2BmNK', 'adminP', 'adminM', 0),
(26, 'test', 'test.email@gmail.com', 'testF', 'testL', 'testS', '2024-01-01', 'male', '$2y$10$FFk7JydB9uv2WLDIRQ9H8OpSK.401wd99mhPSnOMw2XQaUir9.sJa', 'testP', 'testM', 0),
(34, 'meerah', 'ameersibuma29@gmail.com', 'Syed Ameer', 'Sibuma', '', '2001-06-16', 'male', '$2y$10$.As6edVnHQh5vQjLEKyZLuNHmJV6WxgARINeDwOegv4lXDVWijof2', 'Nueva Ecija', 'Llanera', 0),
(35, 'chefy', 'chefy@gmail.com', 'Chef', 'Chef', 'Chef', '2024-12-31', 'male', '$2y$10$n18WOpWjmNrE2EFtS9DvZOffW/OO/ujdFCl7issDmkO3w6RR.UJLm', 'Nueva Ecija', 'Llanera', 0),
(46, 'rigos', 'rigos@gmail.com', 'Rigos', 'Rigos', 'Rigos', '2023-12-31', 'male', '$2y$10$BTU1rbt1OuJejYEhFBFN..4sy6s6NZFWsFT9r0vC918yP.ZsUbs/m', 'rigos', 'rigos', 0),
(47, 'vegan', 'vegan@gmail.com', 'Vegan', 'Vegan', 'Vegan', '2024-12-31', 'male', '$2y$10$JldfDcAdFhGCtruNPq1D8.cIcxxn0gCmZVwdQqM1zodNFKGMrcXge', 'vegan', 'vegan', 0),
(48, 'ralph', 'ralph@gmail.com', 'Ralph', 'Ariola', 'The Great', '2024-12-31', 'male', '$2y$10$pKl/yaKr5qTog3UVWAtbI.nAZ2m9plpVHwHmXIDNiIfNg1B9Ni/xC', 'nueva ecija', 'palayan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_password` (`user_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
