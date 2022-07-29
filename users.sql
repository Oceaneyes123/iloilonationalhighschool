-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 07:05 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inqdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` enum('Admin','Guest','Any') NOT NULL DEFAULT 'Guest',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `type`, `id`) VALUES
('admin', 'admin', 'Admin', 1),
('q', 'qbb', 'Guest', 23),
('user', 'user', 'Guest', 24),
('user2', 'user', 'Guest', 25),
('user3', 'user', 'Guest', 26),
('adm', 'adm', 'Guest', 27),
('116473050042', 'user', 'Guest', 28),
('1234567', 'qwert', 'Guest', 29),
('user4', 'user1', 'Guest', 30),
('117597050077', '123', 'Guest', 31),
('117629050133', 'rafasciol', 'Guest', 32),
('111111111111', 'user', 'Guest', 33),
('222222222222', 'user', 'Guest', 34),
('333333333333', 'user', 'Guest', 35),
('gdhsjkdkdrft', '12345', 'Guest', 36),
('123456789012', '12345', 'Guest', 37),
('772367126372', '123', 'Guest', 38),
('555555555555', '12345678', 'Guest', 40),
('987654321123', 'user', 'Guest', 44),
('123123123123', '123', 'Guest', 46),
('116813050254', 'vinbooo', 'Guest', 47),
('117597050217', 'sodusta', 'Guest', 48),
('444444444444', 'USER', 'Guest', 50),
('117597050076', 'we', 'Guest', 52),
('', '', 'Guest', 55);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
