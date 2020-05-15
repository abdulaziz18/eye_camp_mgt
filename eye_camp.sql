-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 11:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eye_camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id` int(11) NOT NULL,
  `pname` varchar(11) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `caste` varchar(11) NOT NULL,
  `age` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `cnic` varchar(11) NOT NULL,
  `city` varchar(11) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id`, `pname`, `fname`, `caste`, `age`, `gender`, `cnic`, `city`, `contact`, `date`) VALUES
(2, 'زبير', 'جبار', 'ميراڻي', '22', 'مرد', '', 'ٽنڊو م خان', '', '2020-04-23 12:39:31'),
(3, 'زبيده', 'ولي خان', 'لغاري', '35', 'عورت', '', 'حيدرآباد', '03516546', '2020-04-23 12:40:41'),
(5, 'حليم', 'خان', 'لغاري', '33', 'مرد', '', 'پيرواه', '', '2020-04-23 17:44:34'),
(6, 'جميل', 'ڪمال', 'ٻرڙو', '35', 'مرد', '', 'حيدرآباد', '', '2020-04-23 17:45:04'),
(7, 'زاهده', 'ڪريم', 'ٻرڙو', '33', 'عورت', '', '', '', '2020-05-10 16:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `opt_id` int(11) NOT NULL,
  `pname` varchar(11) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `age` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `cnic` varchar(11) NOT NULL,
  `allowed_name` varchar(11) NOT NULL,
  `relation` varchar(11) NOT NULL,
  `right_eye` varchar(11) NOT NULL,
  `left_eye` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`opt_id`, `pname`, `fname`, `age`, `gender`, `cnic`, `allowed_name`, `relation`, `right_eye`, `left_eye`, `date`) VALUES
(1, 'اسد احمد', 'ولي خان', '35', 'مرد', '', 'وليد', 'چاچو', 'True', '', '2020-04-23 12:38:24'),
(2, 'زبير', 'جبار', '22', 'مرد', '', 'شان', 'ڀاء', '', 'True', '2020-04-23 16:21:20'),
(3, 'زبيده', 'ولي خان', '35', 'مرد', '', '', '', '', '', '2020-05-10 16:32:50'),
(4, 'زبيده', 'ولي خان', '35', 'مرد', '', '', '', '', '', '2020-05-10 16:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
