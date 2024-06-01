-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 11:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logbook_entries`
--

CREATE TABLE `logbook_entries` (
  `id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` int(100) NOT NULL,
  `days` int(100) NOT NULL,
  `week` int(100) NOT NULL,
  `activity_description` text NOT NULL,
  `working_hour` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logbook_entries`
--

INSERT INTO `logbook_entries` (`id`, `entry_date`, `entry_time`, `days`, `week`, `activity_description`, `working_hour`, `created_at`) VALUES
(2, '2024-05-02', 0, 0, 0, 'hsdfadsfhdas', '2024-05-30', '0000-00-00'),
(3, '2024-05-09', 9, 8, 6, 'uifoieqwyfuwe', '2024-05-19', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`id`, `Username`, `password`, `email`, `created_at`) VALUES
(2, 'babou', 12345, 'babou@gmail.com', 'Nyabihu'),
(3, 'prince', 0, 'prince@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbook_entries`
--
ALTER TABLE `logbook_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook_entries`
--
ALTER TABLE `logbook_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_student`
--
ALTER TABLE `user_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
