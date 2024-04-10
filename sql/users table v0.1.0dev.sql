-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 07:37 AM
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
  `user_password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_name_first`, `user_name_last`, `user_name_middle`, `user_date_of_birth`, `user_gender`, `user_password`) VALUES
(8, 'asdf', 'asdf@gmail.com', 'asdf', 'asdf', 'asdf', '2024-04-06', 'male', '$2y$10$7v1w/Ykov2aN1D0iHpPCM.9tPfl1rda4TP3hgsWXRqf0bPRiJUrD2'),
(9, 'testusername', 'test.email@gmail.com', 'test', 'user', 'n.', '2024-04-06', 'male', '$2y$10$rEzQ4B02UGZ0pUwZUbQbNu8ueymiwLPB9KZRsStVuLsZYXvu7KKMK'),
(10, 'tanga', 'tanga@gmail.com', 'tanga tanga', 'tanga', 't.', '2024-12-31', 'male', '$2y$10$XLMz7ZdrzRe6ubF7vVrGfeiJ0Rxe4GcLZP3NW7wRvX/V5KfuSN74S'),
(12, 'vegan', 'vegan@gmail.com', 'vegan', 'teacher', 'lol', '2024-12-31', 'female', '$2y$10$iEcqjgECYhXmKJne22/Pj.ta7swn1LWhRaU32ttz6NdGMT1JPDWlG'),
(14, 'meerah', 'ameersibuma@gmail.com', 'ameer', 'sibuma', 'n/a', '2024-12-31', 'male', '$2y$10$lLqvUo2oOmiFrAa1fRJ/Heb0dOXdrl50b8IgBGpGf8OW53K3YNaBm'),
(15, 'topG', 'andrewtate@gmail.com', 'Andrew', 'Tate', 'G.', '2010-01-01', 'male', '$2y$10$kACc5enkDbq7o3onKM/gx.yUd3kQVOwbgpbfIV2g413Wmv0CttDFy'),
(16, 'Meerah29', 'ameersibuma29@gmail.com', 'Syed Ameer', 'Sibuma', 'N/A', '2001-06-16', 'male', '$2y$10$hRdaKXMSxbTUgpcnPSAk4uWeSDNvVGeJMv7bL35ji4ntIkEiQ8C5a'),
(17, 'inna', 'inna.sibuma@gmail.com', 'Filipina', 'Sibuma', 'Serrano', '2024-01-01', 'female', '$2y$10$.SIe.olLLSzFZrt3vPJZP.Plpct6lRkO7GPz0rXbh5GKVUSqCCCei'),
(18, 'adminjimel', 'jimel.admin@gmail.com', 'Jimel', 'Basco', 'Magsanoc', '2002-08-02', 'female', '$2y$10$L3CLbDPRkiQyeu4aLZ.Oseuhb5VuXHiNZyDCZasWpY09iQ/xa2g5y'),
(19, 'asdfg', 'gmail@gmail.com', 'asdf', 'asdf', 'asdf', '2024-01-31', 'female', '$2y$10$MgQK6GKfhyJUaIR5dsn5r.HPxntHp20QZmfG99pV45eLaeHvDjyi.'),
(20, 'carissa', 'carissa.admin@gmai.com', 'Carissa', 'Gonzales', 'Sembrano', '1998-12-21', 'female', '$2y$10$4IBBV53uKLeXPGdfR45RsuHrReQAltZOJBOW0Fy/d60tq8tMGMMZS'),
(21, 'john', 'johnray@gmail.com', 'john', 'john', 'john', '2024-12-31', 'male', '$2y$10$D8B5OZzQOOFWGIIpHVOplect40ZRs13u41yyghAtMOIRtPaB1.dDG');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
