-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 06:44 AM
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
-- Table structure for table `inqtb`
--

CREATE TABLE `inqtb` (
  `school_name` varchar(250) NOT NULL,
  `school_id` int(100) NOT NULL,
  `district` varchar(250) NOT NULL,
  `division` varchar(250) NOT NULL,
  `region` varchar(250) NOT NULL,
  `grade_level` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `school_year` varchar(250) NOT NULL,
  `track` varchar(200) NOT NULL,
  `strand` varchar(200) NOT NULL,
  `track1` varchar(200) NOT NULL,
  `strand1` varchar(200) NOT NULL,
  `grade` int(11) NOT NULL,
  `lrn` bigint(11) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `extension_name` varchar(250) NOT NULL,
  `middle_name` varchar(250) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `religion` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_maidenname` varchar(250) NOT NULL,
  `guardian_name` varchar(250) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inqtb`
--

INSERT INTO `inqtb` (`school_name`, `school_id`, `district`, `division`, `region`, `grade_level`, `section`, `school_year`, `track`, `strand`, `track1`, `strand1`, `grade`, `lrn`, `last_name`, `first_name`, `extension_name`, `middle_name`, `sex`, `birthdate`, `age`, `religion`, `address`, `father_name`, `mother_maidenname`, `guardian_name`, `contact`, `id`, `pic`) VALUES
('Iloilo National High School', 30509, 'Leganes', 'Iloilo', '6-Western Visayas', 'Grade 10', 'STEM C', '232   ', 'Arts and Design', 'Arts and Design', 'TVL', 'ICT', 31, 116473050042, 'weqw   ', 'qweqw   ', 'e   ', 'qeq   ', 'Male', '2018-12-31', 123, 'Iglesia ni Cristo   ', 'ewqeq   ', 'wqeqwe   ', 'eqw   ', 'qeq   ', 12321315321, 20, 'edison2.jpg'),
('Iloilo National High School', 30509, 'Leganes', 'Iloilo', '6-Western Visayas', '', 'HE B', '2017-2018       ', 'TVL', 'ICT', 'Academic', 'ABM', 96, 444444444444, 'qwqwe       ', 'ewqewq       ', 'qw       ', 'ewq       ', 'Male', '2013-12-01', 4, 'Others       ', 'qfef       ', 'dqw       ', 'fef       ', 'fqef       ', 47194812792, 21, ''),
('Iloilo National High School', 30509, 'Leganes', 'Iloilo', '6-Western Visayas', 'Grade 10', 'STEM A', '2018-2019', 'TVL', 'HE', 'Arts and Design', 'Arts and Design', 61, 116473050043, 'rrandom', 'random', 'random', 'random', 'Male', '2001-12-01', 16, 'Roman Catholic', 'random', 'random', 'random', 'random', 31232132132, 22, 'Alexander_Graham_Bell.jpg'),
('Iloilo National High School', 30509, 'Leganes', 'Iloilo', '6-Western Visayas', 'Grade 10', 'ICT B', '2017-2018', 'TVL', 'ICT', 'Academic', 'STEM', 12, 117597050076, 'wqdq', 'rty', 'yu', 'p', 'Male', '2000-02-12', 18, 'Roman Catholic', 'm1lky way', 'tatay', 'nanay', 'guard1ans 0f the galaxy', 87000870087, 23, '');

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
-- Indexes for table `inqtb`
--
ALTER TABLE `inqtb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lrn` (`lrn`),
  ADD KEY `lrn_2` (`lrn`);

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
-- AUTO_INCREMENT for table `inqtb`
--
ALTER TABLE `inqtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
