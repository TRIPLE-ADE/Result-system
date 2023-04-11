-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 10:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summit`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_unit` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `course_code`, `course_unit`, `created_at`, `updated_at`) VALUES
(1, 'Computer Application', 'CSC 101', '3', '2023-04-11 06:40:11', '2023-04-11 06:40:11'),
(2, 'Computer Programming', 'CSC 109', '2', '2023-04-11 06:40:11', '2023-04-11 06:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(150) NOT NULL,
  `hod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `hod_id`) VALUES
(1, 'Computer Science', 1),
(2, 'Economics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `matric` varchar(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  `ca_score` int(100) NOT NULL,
  `exam_score` int(100) NOT NULL,
  `total_score` int(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `matric`, `course_id`, `department_id`, `ca_score`, `exam_score`, `total_score`, `semester`, `level`, `session`, `created_at`, `updated_at`) VALUES
(1, '3jf0404', 1, 1, 12, 20, 32, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(2, '3jf0405', 1, 1, 13, 21, 34, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(3, '3jf0406', 1, 1, 14, 22, 36, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(4, '3jf0407', 1, 1, 15, 23, 38, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(5, '3jf0408', 1, 1, 16, 24, 40, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(6, '3jf0409', 1, 1, 17, 25, 42, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(7, '3jf0410', 1, 1, 18, 26, 44, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(8, '3jf0411', 1, 1, 19, 27, 46, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51'),
(9, '3jf0415', 1, 1, 20, 28, 48, '1', '200', '2022/2023', '2023-04-11 08:47:51', '2023-04-11 08:47:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
