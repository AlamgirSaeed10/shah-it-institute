-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 05:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shah_it_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses`(
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `courses_detail` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_category`) VALUES
('gfx-001', 'gd', 'Graphics 1'),
('gfx-002', 'gd', 'Graphics 2' ),
('web-002', 'wd', 'Development');

INSERT INTO `courses_detail` (`course_id`, `course_name`, `course_category`) VALUES
( 'gfx-001', 'gd', 'Graphics 1'),
( 'gfx-002', 'gd', 'Graphics 2' ),
( 'gfx-003', 'gd', 'Graphics 3'),
( 'gfx-004', 'gd', 'Graphics 4'),
('gfx-005', 'gd', 'Graphics 5' ),
( 'gfx-006', 'gd', 'Graphics 6'),
( 'gfx-007', 'gd', 'Graphics 7'),
( 'gfx-008', 'gd', 'Graphics 8'),
( 'gfx-009', 'gd', 'Graphics 9'),
( 'gfx-010', 'gd', 'Graphics 10'),
( 'gfx-011', 'gd', 'Graphics 11'),
( 'gfx-012', 'gd', 'Graphics 12'),
( 'web-002', 'wd', 'Development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
