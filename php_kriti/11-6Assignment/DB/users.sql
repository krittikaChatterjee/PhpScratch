-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 07:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'regular',
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cname`, `phone`, `email`, `pass1`, `pic`, `role`, `created`) VALUES
(2, 'Ritwik Chatterjee', '06290184198', 'CHAT.RITWIK@GMAIL.COM', '*E6CC90B878B948C35E92B003C792C46C58C4AF40', 'uploads/user3.jpg', 'regular', '2021-06-10 14:11:50'),
(3, 'KRITTIKA CHATTERJEE', '9836383776', 'chat.krittika@gmail.com', '*1B57E7884DC117C5BEFF9AFD9EBB22607DB24562', 'uploads/user4.jpg', 'regular', '2021-06-11 07:43:46'),
(4, '1', '1', '1', '*E6CC90B878B948C35E92B003C792C46C58C4AF40', 'uploads/user4.jpg', 'regular', '2021-06-12 18:26:58'),
(5, '5', '5', '5', '*7534F9EAEE5B69A586D1E9C1ACE3E3F9F6FCC446', 'uploads/user2.jpg', 'admin', '2021-06-12 18:31:17'),
(7, 'k', 'k', 'k', '*69A7BAE3D37A83849ECEF8F3FF9260B35E01555D', 'uploads/sunglasses.jpg', 'admin', '2021-06-13 16:15:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
