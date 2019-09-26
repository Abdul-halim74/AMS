-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 03:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `roll` int(7) NOT NULL,
  `sub` varchar(200) NOT NULL,
  `attendance` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `semester`, `dept`, `roll`, `sub`, `attendance`, `date`) VALUES
(83, 'hasan khan', '8th', 'CSE', 869775, 'Bangla', 'present', '2019-03-14'),
(84, 'Mahmudul Hassan', '8th', 'CSE', 965522, 'Bangla', 'present', '2019-03-14'),
(85, 'Aditto', '8th', 'CSE', 7441555, 'Bangla', 'present', '2019-03-14'),
(86, 'Rajib miah', '8th', 'CSE', 7411477, 'Bangla', 'present', '2019-03-14'),
(87, 'hasan khan', '8th', 'CSE', 869775, 'Programming Language', 'present', '2019-03-14'),
(88, 'Mahmudul Hassan', '8th', 'CSE', 965522, 'Programming Language', 'absent', '2019-03-14'),
(89, 'Aditto', '8th', 'CSE', 7441555, 'Programming Language', 'present', '2019-03-14'),
(90, 'Rajib miah', '8th', 'CSE', 7411477, 'Programming Language', 'absent', '2019-03-14'),
(91, 'Arup Paul', '7th', 'Civil', 447895, 'English', 'present', '2019-03-14'),
(92, 'Tarun ', '7th', 'Civil', 447898, 'English', 'absent', '2019-03-14'),
(93, 'Arup Paul', '7th', 'Civil', 447895, 'English', 'absent', '2019-03-15'),
(94, 'Tarun ', '7th', 'Civil', 447898, 'English', 'absent', '2019-03-15'),
(95, 'hasan khan', '8th', 'CSE', 869775, 'Bangla', 'present', '2019-03-15'),
(96, 'Mahmudul Hassan', '8th', 'CSE', 965522, 'Bangla', 'absent', '2019-03-15'),
(97, 'Aditto', '8th', 'CSE', 7441555, 'Bangla', 'present', '2019-03-15'),
(98, 'Rajib miah', '8th', 'CSE', 7411477, 'Bangla', 'absent', '2019-03-15'),
(99, 'MD Ariful Islam', '8th', 'Civil', 516124, 'Bangla', 'present', '2019-03-15'),
(100, 'MD Ariful Islam', '8th', 'Civil', 516124, 'Bangla', 'present', '2019-03-15'),
(101, 'MD Ariful Islam', '8th', 'Civil', 516124, 'Bangla', 'present', '2019-03-15'),
(102, 'MD Ariful Islam', '8th', 'Civil', 516124, 'Bangla', 'present', '2019-03-15'),
(103, 'Arup Paul', '7th', 'Civil', 447895, 'English', 'present', '2019-03-16'),
(104, 'Tarun ', '7th', 'Civil', 447898, 'English', 'absent', '2019-03-16'),
(105, 'MD Ariful Islam', '8th', 'Civil', 516124, 'Programming Language', 'present', '2019-03-17'),
(106, 'MD Ariful Islam', '8th', 'Civil', 516124, 'English', 'absent', '2019-03-17'),
(123, 'hasan khan', '8th', 'CSE', 869775, 'Math', 'present', '2019-03-17'),
(124, 'Mahmudul Hassan', '8th', 'CSE', 965522, 'Math', 'absent', '2019-03-17'),
(125, 'Aditto', '8th', 'CSE', 7441555, 'Math', 'absent', '2019-03-17'),
(126, 'Rajib miah', '8th', 'CSE', 7411477, 'Math', 'present', '2019-03-17'),
(127, 'hasan khan', '8th', 'CSE', 869775, 'Bangla', 'absent', '2019-03-17'),
(128, 'Mahmudul Hassan', '8th', 'CSE', 965522, 'Bangla', 'present', '2019-03-17'),
(129, 'Aditto', '8th', 'CSE', 7441555, 'Bangla', 'absent', '2019-03-17'),
(130, 'Rajib miah', '8th', 'CSE', 7411477, 'Bangla', 'absent', '2019-03-17'),
(131, 'Arup Paul', '7th', 'Civil', 447895, 'Cnstruction', 'present', '2019-04-06'),
(132, 'Tarun ', '7th', 'Civil', 447898, 'Cnstruction', 'absent', '2019-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `trash` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `trash`) VALUES
(75, 'Civil', 0),
(76, 'Electrical', 0),
(77, 'Electronics', 0),
(78, 'CSE', 0),
(79, 'Mechanical', 0),
(80, 'Architecture', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Roll` int(7) NOT NULL,
  `Dept` varchar(100) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Reg` int(7) NOT NULL,
  `trash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `Roll`, `Dept`, `Semester`, `Reg`, `trash`) VALUES
(1, 'MD Ariful ', 516122, 'Civil', '7th', 447489, 0),
(2, 'Arup Paul ', 447880, 'Civil', '7th', 558333, 0),
(4, 'Khorshed Alam', 35465, 'CSE', '7th', 668746, 0),
(5, 'Tarun ', 447898, 'Civil', '7th', 558769, 0),
(9, 'hasan khan 12', 869775, 'CSE', '8th', 720630, 0),
(10, 'Mahmudul Hassan', 965522, 'CSE', '8th', 4742545, 0),
(11, 'Aditto', 7441555, 'CSE', '8th', 7115555, 0),
(12, 'Rajib miah', 789954, 'Electrical', '8th', 5485123, 0),
(14, 'Kaji emon', 8996555, 'CSE', '8th', 147852144, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `phone`) VALUES
(1, 'Iqbal tuhin', '01477'),
(2, 'Rajib chowdhury', '119865'),
(3, 'Masud alam', '017785'),
(5, 'Rased  khan roman', '016330'),
(6, 'Imran mahmudul', '014758');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '1234', 1),
(2, 'aedsmin', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'Arup', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(4, 'gygyg', '4746bbbd02bb590f379be8945e5da5cd', 1),
(5, 'halim', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
