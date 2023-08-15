-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 12:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_bill`
--

CREATE TABLE `add_bill` (
  `bill_id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `ammount` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_bill`
--

INSERT INTO `add_bill` (`bill_id`, `member_id`, `invoice_no`, `ammount`, `Status`) VALUES
(18, '8', '64d5eeb84480e16917418807262', '5000', '1'),
(19, '1', '64d5eebeca82116917418864459', '5000', '0'),
(20, '1', '64d5eee97307a1691741929638', '5000', '0'),
(21, '8', '64d5eeedbc4df1691741933370', '4000', '0'),
(22, '18', '64d73743edd7f1691825987878', '4000', '0'),
(23, '18', '64d7375502d9f1691826005647', '4000', '0'),
(24, '6', '64d73758e09cd1691826008597', '4000', '0'),
(25, '6', '64d73774c51381691826036878', '4000', '0'),
(26, '6', '64d73789356461691826057128', '4000', '0'),
(27, '6', '64d7379b11f551691826075326', '4000', '0'),
(28, '6', '64d737a0b51901691826080370', '5000', '0'),
(29, '6', '64d737cddf7531691826125604', '5000', '0'),
(43, '7', '64d73a173bbaf1691826711321', '4000', '0'),
(44, '7', '64d73a32886a71691826738932', '4000', '0'),
(45, '17', '64d73a3c9c6b01691826748270', '2389', '0'),
(46, '1', '64d73a50f18b91691826768858', '5000', '1'),
(47, '1', '64d73a5d02baa1691826781518', '5000', '1'),
(48, '1', '64d73a78c667c1691826808822', '5000', '1'),
(49, '8', '64d73bc141b001691827137715', '5000', '0'),
(50, '7', '64d73dc82b9021691827656312', '4000', '0'),
(51, '8', '64d73de574f1f1691827685635', '5000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_member`
--

CREATE TABLE `add_member` (
  `Member_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_member`
--

INSERT INTO `add_member` (`Member_id`, `Name`, `Gender`, `Age`, `Contact`) VALUES
(1, 'Syed Junaid Ul hassan', 'male', '23', '03041601795'),
(6, 'Umair', 'male', '23', '030425252678'),
(7, 'Aysha', 'female', '21', '03056272885'),
(8, 'AMina', 'female', '19', '03041601795');

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `notice_id` int(11) NOT NULL,
  `notice` varchar(100) NOT NULL,
  `notice_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_notice`
--

INSERT INTO `add_notice` (`notice_id`, `notice`, `notice_date`) VALUES
(5, 'hello,there', '08/24/2023'),
(6, 'hello,there', '08/24/2023'),
(8, 'Monday is off because of independence day.', '08/14/2023');

-- --------------------------------------------------------

--
-- Table structure for table `assign_bed`
--

CREATE TABLE `assign_bed` (
  `bed_id` int(11) NOT NULL,
  `Member_id` varchar(100) NOT NULL,
  `Room_no` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `assign_bed`
--

INSERT INTO `assign_bed` (`bed_id`, `Member_id`, `Room_no`, `Category`) VALUES
(1, '6', '124', 'Standard'),
(2, '18', '132', 'Standard'),
(3, '8', '101', 'Bussiness'),
(4, '7', '132', 'Bussiness'),
(5, '6', '101', 'Bussiness'),
(6, '7', '101', 'Bussiness');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'junaid', 'junaid@4xportal.com', '124'),
(2, 'Ali', 'Ali@gmail.com', '123'),
(3, 'Umair', 'umair@gmail.com', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(100) NOT NULL,
  `meet_person` varchar(100) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `visitor_name`, `meet_person`, `check_in`, `check_out`) VALUES
(1, 'umar Ali', 'Syed Junaid Ul hassan', '2023-08-11 11:14:10', '2023-08-11 11:14:10'),
(12, 'Awais', 'Umair', '2023-08-11 14:22:00', '2023-08-11 11:54:18'),
(16, 'Haseeb', 'Ali', '2023-08-08 06:10:10', '2023-08-11 11:58:26'),
(18, 'shahussain', 'umm', '2023-08-16 05:32:00', '2023-08-12 07:48:53'),
(19, 'Qamar', 'Haseeb', '2023-08-16 11:24:00', ''),
(20, 'Haseeb', 'Umair', '2023-08-14 08:22:00', '2023-08-11 11:54:24'),
(22, 'umar Ali', 'Mubashir', '2023-08-13 11:22:20', '2023-08-11 12:00:20'),
(26, 'umair', 'Aysha', '2023-08-14 02:16:00', '2023-08-11 14:29:50'),
(27, 'umar Ali', 'Umair', '2023-08-16 05:32:00', ''),
(28, 'umar Ali', 'Umair', '2023-08-16 05:32:00', ''),
(30, 'umar Ali', 'Umair', '2023-08-16 05:32:00', ''),
(31, 'umar Ali', 'AMina', '2023-08-16 05:32:00', '2023-08-12 12:05:45'),
(32, 'umar Ali', 'AMina', '2023-08-16 05:32:00', ''),
(39, 'umar Ali', 'Umair', '2023-08-12 13:26:10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_bill`
--
ALTER TABLE `add_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `add_member`
--
ALTER TABLE `add_member`
  ADD PRIMARY KEY (`Member_id`);

--
-- Indexes for table `add_notice`
--
ALTER TABLE `add_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `assign_bed`
--
ALTER TABLE `assign_bed`
  ADD PRIMARY KEY (`bed_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_bill`
--
ALTER TABLE `add_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `add_member`
--
ALTER TABLE `add_member`
  MODIFY `Member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assign_bed`
--
ALTER TABLE `assign_bed`
  MODIFY `bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
