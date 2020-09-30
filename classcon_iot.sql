-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 09:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classcon_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_appliance`
--

CREATE TABLE `home_appliance` (
  `ha_id` int(2) NOT NULL,
  `ha_name` varchar(10) NOT NULL,
  `ha_status_code` int(1) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ha_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_appliance`
--

INSERT INTO `home_appliance` (`ha_id`, `ha_name`, `ha_status_code`, `submit_time`, `ha_status`) VALUES
(1, 'Fridge-A', 0, '2020-09-29 07:35:59', 0),
(2, 'Fan-A', 1, '2020-09-30 04:49:26', 0),
(3, 'Bulb', 1, '2020-09-30 04:49:27', 0),
(4, 'sds', 0, '2020-09-30 04:49:22', 0),
(5, 'Fridge', 1, '2020-09-30 04:49:23', 0),
(6, 'Fridge9', 0, '2020-09-29 07:36:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `led`
--

CREATE TABLE `led` (
  `led_id` int(2) NOT NULL,
  `led_name` varchar(10) NOT NULL,
  `led_status_code` int(1) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `led_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `led`
--

INSERT INTO `led` (`led_id`, `led_name`, `led_status_code`, `submit_time`, `led_status`) VALUES
(1, 'Fridge-A', 1, '2020-09-29 13:32:02', 0),
(2, 'Fan-A', 1, '2020-09-27 11:30:04', 0),
(3, 'Bulb', 0, '2020-09-27 12:20:30', 0),
(4, 'sds', 0, '2020-09-27 11:29:50', 0),
(5, 'Fridge', 1, '2020-09-27 11:30:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `scroll_text`
--

CREATE TABLE `scroll_text` (
  `st_id` int(5) NOT NULL,
  `st_text` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `st_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scroll_text`
--

INSERT INTO `scroll_text` (`st_id`, `st_text`, `st_status`) VALUES
(1, '2', 0),
(2, '5', 0),
(3, '9', 0),
(4, '11', 0),
(5, '12098', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_type` int(1) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `student_id` int(5) NOT NULL,
  `user_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_type`, `staff_id`, `student_id`, `user_status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, 0, 'A'),
(2, '9530781100', '0214ed4ffa92f00cf8f76bfedc50270addf006ed', 2, 16, 0, 'A'),
(3, '9417071100', '5827b05b3c4314203eb9e6205fa8253d1020c575', 2, 17, 0, 'A'),
(4, '9646190286', '5e31a6f16bf126a8c59b569f5b8261adb3f3c158', 2, 23, 0, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_appliance`
--
ALTER TABLE `home_appliance`
  ADD PRIMARY KEY (`ha_id`);

--
-- Indexes for table `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`led_id`);

--
-- Indexes for table `scroll_text`
--
ALTER TABLE `scroll_text`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_appliance`
--
ALTER TABLE `home_appliance`
  MODIFY `ha_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `led`
--
ALTER TABLE `led`
  MODIFY `led_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scroll_text`
--
ALTER TABLE `scroll_text`
  MODIFY `st_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
