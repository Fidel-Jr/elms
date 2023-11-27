-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 04:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptedtbl`
--

CREATE TABLE `acceptedtbl` (
  `id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `acceptedAt` date NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `declinedtbl`
--

CREATE TABLE `declinedtbl` (
  `id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `declinedAt` date NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departmenttbl`
--

CREATE TABLE `departmenttbl` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `department_short_name` varchar(50) NOT NULL,
  `department_code` varchar(255) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departmenttbl`
--

INSERT INTO `departmenttbl` (`id`, `department`, `department_short_name`, `department_code`, `creation_date`) VALUES
(1, 'Information System', 'IS', 'IS707', '2023-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `employeetbl`
--

CREATE TABLE `employeetbl` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(50) NOT NULL,
  `dob` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `regDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeetbl`
--

INSERT INTO `employeetbl` (`id`, `emp_id`, `firstname`, `lastname`, `email`, `password`, `gender`, `dob`, `department`, `address`, `phone_no`, `regDate`) VALUES
(3, '2022-00289', 'Fidel', 'Colinares', 'fidelsalongacolinares04@gmail.com', '$2y$10$O9WXmZaM339FF.sSvLTIvuaCsP8dyI8rntw2ePTDunZCpObxitTKK', 'M', '2004-05-04', 'Information Technology', 'Crossing Licanan Lasang Davao City', '09673561791', '2023-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `leavetbl`
--

CREATE TABLE `leavetbl` (
  `id` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `isRead` char(50) NOT NULL,
  `status` char(50) NOT NULL,
  `date_requested` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leavetypetbl`
--

CREATE TABLE `leavetypetbl` (
  `id` int(11) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leavetypetbl`
--

INSERT INTO `leavetypetbl` (`id`, `leave_type`, `description`, `creation_date`) VALUES
(1, 'Sick Leave', 'For not feeling well.', '2023-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `managertbl`
--

CREATE TABLE `managertbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managertbl`
--

INSERT INTO `managertbl` (`id`, `username`, `password`, `fullname`, `email`, `regDate`) VALUES
(55, 'Daise', '$2y$10$UqcwsjcOH8i3L2I1070cUexLfNBiv40XEXduM6BTfTAisB.M9hf1a', 'Wangjo Daise', 'wangjodaise04@gmail.com', '2023-11-04 12:02:08'),
(56, 'Gojo', '$2y$10$mWDAj3XgnIfQCJ0oq3hX8.D9zcpJCuNnxfh.X1m/0MkNf7wieCUU.', 'Satoru Gojo', 'gojosatoru@gmail.com', '2023-11-04 12:04:13'),
(57, 'Fidel', '$2y$10$ZMSX1GY2wPpEuuXoV1ZxkucP7tgoeghOsSo2M0h3l9unSdlt9hz7O', 'Fidel Salonga Colinares Jr.', 'fidelsalongacolinares04@gmail.com', '2023-11-05 17:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `notificationtbl`
--

CREATE TABLE `notificationtbl` (
  `notif_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `status` char(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptedtbl`
--
ALTER TABLE `acceptedtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declinedtbl`
--
ALTER TABLE `declinedtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departmenttbl`
--
ALTER TABLE `departmenttbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeetbl`
--
ALTER TABLE `employeetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavetbl`
--
ALTER TABLE `leavetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavetypetbl`
--
ALTER TABLE `leavetypetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managertbl`
--
ALTER TABLE `managertbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `notificationtbl`
--
ALTER TABLE `notificationtbl`
  ADD PRIMARY KEY (`notif_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptedtbl`
--
ALTER TABLE `acceptedtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `declinedtbl`
--
ALTER TABLE `declinedtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departmenttbl`
--
ALTER TABLE `departmenttbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeetbl`
--
ALTER TABLE `employeetbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leavetbl`
--
ALTER TABLE `leavetbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leavetypetbl`
--
ALTER TABLE `leavetypetbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `managertbl`
--
ALTER TABLE `managertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `notificationtbl`
--
ALTER TABLE `notificationtbl`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
