-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 08:13 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swn_project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(11) NOT NULL,
  `a_user` varchar(20) NOT NULL,
  `a_pass` varchar(20) NOT NULL,
  `a_nameF` varchar(100) NOT NULL,
  `a_nameL` varchar(100) NOT NULL,
  `a_department` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_user`, `a_pass`, `a_nameF`, `a_nameL`, `a_department`, `datesave`) VALUES
(1, '111', '111', 'Peeraphon', 'Sayyot', 'improvement', '2018-11-16 05:34:50'),
(8, 'natdanai', '6321', 'Natdanai', 'Iamsaad', 'improvement', '2021-06-30 05:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `His_ID` int(11) NOT NULL,
  `His_Line` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `His_tag` varchar(100) NOT NULL,
  `His_cause` varchar(100) NOT NULL,
  `His_symptom` varchar(100) NOT NULL,
  `His_correction` varchar(100) NOT NULL,
  `His_who` varchar(100) NOT NULL,
  `His_Status` varchar(100) NOT NULL,
  `His_Status_count` varchar(100) NOT NULL,
  `His_date_S` date NOT NULL DEFAULT current_timestamp(),
  `His_date_F` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`His_ID`, `His_Line`, `His_tag`, `His_cause`, `His_symptom`, `His_correction`, `His_who`, `His_Status`, `His_Status_count`, `His_date_S`, `His_date_F`) VALUES
(31, 'PT907', 'HHNCBS2', 'dsadsad', 'asdsadsad', 'dasdad', 'wdsad', 'Service รับของแล้ว', '0', '2021-06-30', '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_line`
--

CREATE TABLE `tbl_line` (
  `Line_ID` int(11) NOT NULL,
  `Line_code` varchar(100) NOT NULL,
  `Line_mfg` varchar(100) NOT NULL,
  `Line_Status_count` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_line`
--

INSERT INTO `tbl_line` (`Line_ID`, `Line_code`, `Line_mfg`, `Line_Status_count`, `datesave`) VALUES
(10, 'PT907', '1', '0', '2021-06-30 04:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `Tag_ID` int(11) NOT NULL,
  `Tag_Line` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Tag_Line_code` varchar(100) NOT NULL,
  `Tag_SN` varchar(100) NOT NULL,
  `Tag_ESC` varchar(100) NOT NULL,
  `Tag_Status_count` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`Tag_ID`, `Tag_Line`, `Tag_Line_code`, `Tag_SN`, `Tag_ESC`, `Tag_Status_count`, `datesave`) VALUES
(12, '', 'PT907', 'HHNCBS2', '35406830169', '0', '2021-06-30 04:08:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`His_ID`);

--
-- Indexes for table `tbl_line`
--
ALTER TABLE `tbl_line`
  ADD PRIMARY KEY (`Line_ID`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`Tag_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `His_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_line`
--
ALTER TABLE `tbl_line`
  MODIFY `Line_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `Tag_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
