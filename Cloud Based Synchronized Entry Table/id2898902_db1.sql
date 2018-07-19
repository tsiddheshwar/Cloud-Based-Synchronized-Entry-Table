-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 12:49 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2898902_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('gate1', 'gate1'),
('gate2', 'gate2');

-- --------------------------------------------------------

--
-- Table structure for table `boys`
--

CREATE TABLE `boys` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hostel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mob_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boys`
--

INSERT INTO `boys` (`id`, `name`, `hostel`, `dept`, `mob_no`) VALUES
(11, 'H', 'None', 'Information Technology', '8483798454'),
(82, 'Someshwar Suresh Terkar', 'C', 'Information Technology', '9767972476'),
(85, 'Vaidya sachin', 'Boys hoste', 'Information Technology', '7038574798'),
(124, 'Nadaf Sikandar', 'C', 'Information Technology', '1234567891'),
(1733018, 'Nikhil Wasudeo Borle', '', 'Information Technology', '9112476595'),
(1733067, 'Abhijeet Panchal', 'boys hoste', 'Information Technology', '8605348251'),
(1733081, 'siddheshwar tekale', 'boys c', 'Information Technology', '8484089662'),
(1733087, 'harshal', 'boys hoste', 'Information Technology', '8381025958');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entryn` int(11) NOT NULL,
  `id` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `in_time` timestamp NULL DEFAULT NULL,
  `out_time` timestamp NULL DEFAULT NULL,
  `in_gate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `out_gate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entryn`, `id`, `type`, `in_time`, `out_time`, `in_gate`, `out_gate`) VALUES
(1, '.Enter.', 'G/B', '2017-10-01 13:16:50', NULL, 'a', 'b'),
(2, '.Enter.', 'G/B', '2017-10-01 13:17:02', NULL, 'a', 'b'),
(3, 'Enter', 'G/B', '2017-10-01 13:18:40', NULL, 'a', 'b'),
(4, '141414', 'G/B', '2017-10-01 13:21:59', '2017-10-04 07:15:10', 'a', 'b'),
(5, '1733086', 'G/B', '2017-10-01 13:22:55', '2017-10-02 04:47:46', 'a', 'b'),
(6, '1733074', 'G/B', '2017-10-01 13:23:08', '2017-10-01 13:55:16', 'a', 'b'),
(7, NULL, NULL, NULL, '2017-10-01 13:23:08', NULL, NULL),
(8, '1733085', 'G/B', '2017-10-02 04:49:39', NULL, 'a', 'b'),
(9, '151515', 'G/B', '2017-10-04 07:15:19', NULL, 'a', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `girls`
--

CREATE TABLE `girls` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hostel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mob_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `girls`
--

INSERT INTO `girls` (`id`, `name`, `hostel`, `dept`, `mob_no`) VALUES
(54, 'gdgs', 'c', 'Information Technology', '1234567890'),
(68, 'Pathan samreen', 'D', 'Information Technology', '8888913665'),
(74, 'shah tejashree', 'D', 'Information Technology', '8796832117'),
(1733011, 'Srushti Kalyan Bhagwat', 'D', 'Information Technology', '9922456881'),
(1733089, 'sukanya', 'd', 'Information Technology', '8989898989');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `g_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mob_no` int(10) NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mob_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boys`
--
ALTER TABLE `boys`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entryn`);

--
-- Indexes for table `girls`
--
ALTER TABLE `girls`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD KEY `index` (`g_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entryn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
