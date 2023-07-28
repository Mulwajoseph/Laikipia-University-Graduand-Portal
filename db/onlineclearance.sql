-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 02:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '1a1dc91c907325c69271ddf0c944bc72',
  `dept` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `password`, `dept`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clearance_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `is_faculty_approval` int(11) NOT NULL,
  `is_library_approval` int(11) NOT NULL,
  `is_halls_approval` int(11) NOT NULL,
  `is_catering_approval` int(11) NOT NULL,
  `is_security_approval` int(11) NOT NULL,
  `is_games_approval` int(11) NOT NULL,
  `is_medical_approval` int(11) NOT NULL,
  `is_dean_approval` int(11) NOT NULL,
  `is_finance_approval` int(11) NOT NULL,
  `is_vp_admin_approval` int(11) NOT NULL,
  `until` varchar(15) NOT NULL,
  `mailing_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `id`, `is_faculty_approval`, `is_library_approval`, `is_halls_approval`, `is_catering_approval`, `is_security_approval`, `is_games_approval`, `is_medical_approval`, `is_dean_approval`, `is_finance_approval`, `is_vp_admin_approval`, `until`, `mailing_address`) VALUES
(1, 65, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, '', ''),
(2, 66, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(3, 68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(4, 73, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, '', ''),
(5, 74, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '', ''),
(6, 75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(7, 76, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(8, 77, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1,'', ''),
(9, 78, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(10, 79, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', ''),
(11, 80, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,'07/24/2016', 'Carmella Valley Home'),
(12, 81, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,'', '');

-- --------------------------------------------------------

--
-- Table structure for table `cleared_graduand`
--

CREATE TABLE `cleared_graduand` (
  `cleared_graduand_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleared_graduand`
--

INSERT INTO `cleared_graduand` (`cleared_graduand_id`, `id`) VALUES
(1, 80),
(2, 117),
(3, 117),
(4, 117),
(5, 117),
(6, 118),
(7, 117);

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `id` int(20) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`id`, `d_date`, `status`) VALUES
(2, '2018-07-15', 0),
(3, '2018-08-28', 0),
(4, '2018-09-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `dep_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `req_id` int(10) NOT NULL,
  `graduand_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `username`, `password`) VALUES
(1, 'Librarian', 'librarian', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Halls', 'halls', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Catering', 'catering', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Security', 'security', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Games', 'games', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Medical', 'medical', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Dean of Student', 'dean', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Finance Officer', 'finance', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Dean of the Faculty', 'faculty', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Admission Officer', 'vp admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `graduand` (
  `id` int(10) NOT NULL,
  `graduand_id` int(15) NOT NULL,
  `graduand_Fname` varchar(20) NOT NULL,
  `graduand_Mname` varchar(20) NOT NULL,
  `graduand_Lname` varchar(20) NOT NULL,
  `Contact_num` int(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Department` varchar(5) NOT NULL,
  `req_id` int(20) NOT NULL,
  `dep_id` int(20) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `graduand_picture` varchar(120) NOT NULL,
  `Campus` varchar(15) NOT NULL COMMENT '1 = talisay, 2 = alijis, 3 = fortune town, 4 = binalbagan',
  `course_program` varchar(15) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduand`
--

INSERT INTO `graduand` (`id`, `graduand_id`, `graduand_Fname`, `graduand_Mname`, `graduand_Lname`, `Contact_num`, `Email`, `Department`, `req_id`, `dep_id`, `password`, `graduand_picture`, `Campus`, `course_program`, `status`) VALUES
(129, 12, 'John', 'Kimanzi', 'Solomon', 0713133471, 'doctorjohnkey.js@gmail.com', 'Computer Science', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Njoro', 'Regular', 0),
(130, 13, 'David', 'Bravo', 'Mwamba', 0718337417, 'david@gmail.com', 'Maths', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Njoro', 'Regular', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `message_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `staff_id`, `id`, `message_content`, `message_status`) VALUES
(32, 7, 66, 'all cleared', 1),
(33, 7, 65, 'be cleared first', 1);


--
-- Table structure for table `pds_personal_information`
--

CREATE TABLE `pds_personal_information` (
  `personal_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `name_extension` varchar(10) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `place_of_birth` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `civil_status` int(5) NOT NULL,
  `other_civil_status` varchar(20) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `residential_address` text NOT NULL,
  `residential_zipcode` int(15) NOT NULL,
  `residential_tel_no` varchar(15) NOT NULL,
  `permanent_address` text NOT NULL,
  `permanent_zipcode` int(15) NOT NULL,
  `permanent_tel_no` varchar(15) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `cellphone_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_personal_information`
--

INSERT INTO `pds_personal_information` (`personal_id`, `id`, `surname`, `firstname`, `middlename`, `name_extension`, `birthday`, `place_of_birth`, `sex`, `civil_status`, `other_civil_status`, `citizenship`, `residential_address`, `residential_zipcode`, `residential_tel_no`, `permanent_address`, `permanent_zipcode`, `permanent_tel_no`, `email_address`, `cellphone_no`) VALUES
(1, 79, 'test', 'test', 'test', 'Sr.', '11/11/1111', 'test', '', 6, 'test', 'Filipino', 'test', 111111111, '(111) 111-1111', 'test', 2222222, '(222) 222-2222', 'test@test.test', 2147483647),
(4, 100, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '');

-- --------------------------------------------------------


--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `req_id` int(10) NOT NULL,
  `req_content` text NOT NULL,
  `staff_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`req_id`, `req_content`, `staff_id`) VALUES
(1, 'Clear all faculty stuff', 1),
(2, 'Return all borrowed books', 2),
(3, 'Clear from the hostels and pay any demages.', 3),
(4, 'Clear from catering department', 4),
(5, 'Clear all cases with security', 5),
(6, 'Return all games items and pay for losses', 6),
(7, 'Clear with the medical department', 7),
(8, 'Be cleared by the deans office', 8),
(9, 'Be cleared of all outstanding balances by the student finance office.', 9),
(10, 'Be certified that you have been cleared by all necessary offices', 10);

-- --------------------------------------------------------

--
-- Table structure for table `requirementstatus`
--

CREATE TABLE `requirementstatus` (
  `reqstat_id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `req_id` int(10) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `file` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirementstatus`
--

INSERT INTO `requirementstatus` (`reqstat_id`, `status`, `id`, `req_id`, `staff_id`, `file`) VALUES
(1, 0, 79, 11, 2, 'ceres.jpg'),
(2, 0, 79, 11, 2, 'ceres.jpg'),
(3, 0, 79, 11, 2, 'ceres.jpg'),
(4, 0, 79, 11, 2, 'ceres.jpg'),
(5, 0, 79, 11, 2, 'ceres.jpg'),
(6, 0, 79, 11, 2, 'ceres.jpg'),
(7, 0, 79, 11, 2, 'ceres.jpg'),
(8, 0, 79, 11, 2, 'ceres.jpg'),
(9, 0, 79, 11, 2, 'ceres.jpg'),
(10, 0, 79, 11, 2, 'ceres.jpg'),
(11, 0, 79, 11, 2, 'ceres.jpg'),
(12, 0, 79, 11, 2, 'ceres.jpg'),
(13, 0, 79, 13, 3, 'cap.png'),
(14, 0, 79, 13, 3, 'cap.png'),
(15, 0, 79, 13, 3, 'cap.png'),
(16, 0, 79, 13, 3, 'cap.png'),
(17, 0, 79, 13, 3, 'cap.png'),
(18, 0, 79, 13, 3, 'cap.png'),
(19, 0, 79, 13, 3, 'cap.png'),
(20, 0, 79, 13, 3, 'cap.png'),
(21, 0, 79, 13, 3, 'cap.png'),
(22, 0, 79, 13, 3, 'cap.png'),
(23, 0, 79, 13, 3, 'cap.png'),
(24, 0, 79, 13, 3, 'cap.png'),
(25, 0, 79, 1, 7, '43.jpg'),
(26, 0, 79, 14, 9, 'l;.jpg'),
(27, 0, 81, 11, 2, 'nybl.xlsx'),
(28, 1, 80, 11, 2, 'nybl.xlsx'),
(30, 1, 80, 12, 2, 'pds-jo-2014.xls'),
(31, 1, 117, 11, 2, '6a00d83451c73369e20162fcddf9ab970d-600wi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `usertype` int(1) NOT NULL COMMENT '1 = admin, 2 = department, 3 = graduand'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'faculty', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(3, 'library', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(4, 'halls', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(5, 'catering', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(6, 'security', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(7, 'games', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(8, 'medical', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(9, 'dean', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(10, 'finance', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(11, 'vp admin', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(20, 'John', '81dc9bdb52d04dc20036dbd8313ed055', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`clearance_id`);

--
-- Indexes for table `cleared_graduand`
--
ALTER TABLE `cleared_graduand`
  ADD PRIMARY KEY (`cleared_graduand_id`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `graduand`
--
ALTER TABLE `graduand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);


--
-- Indexes for table `pds_personal_information`
--
ALTER TABLE `pds_personal_information`
  ADD PRIMARY KEY (`personal_id`);


--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `requirementstatus`
--
ALTER TABLE `requirementstatus`
  ADD PRIMARY KEY (`reqstat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `cleared_graduand`
--
ALTER TABLE `cleared_graduand`
  MODIFY `cleared_graduand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `deadline`
--
ALTER TABLE `deadline`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `graduand`
--
ALTER TABLE `graduand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pds_personal_information`
--
ALTER TABLE `pds_personal_information`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `requirementstatus`
--
ALTER TABLE `requirementstatus`
  MODIFY `reqstat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
