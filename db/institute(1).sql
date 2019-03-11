-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2017 at 02:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `id` int(11) NOT NULL,
  `caste_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`id`, `caste_name`) VALUES
(1, 'General'),
(2, 'OBC');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_fee` int(11) NOT NULL,
  `course_duration` varchar(200) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `course_fee`, `course_duration`, `create_date`, `modify_date`) VALUES
(1, 'c32323', 'PHP Training', 2000, '2 Months', '2017-08-01 02:34:58', '2017-08-04 11:50:55'),
(2, 'c32323d', 'Computer Fundamental and programmer', 2000, '', '2017-08-01 02:37:38', '2017-08-01 02:37:38'),
(3, 'c32323ds', 'Computer Fundamental and C Programming', 2000, '2 Months', '2017-08-01 02:37:51', '2017-08-04 11:51:41'),
(4, 'c32323dsd', 'C Programmer', 2000, 'Adc90', '2017-08-01 02:38:06', '2017-08-02 01:03:01'),
(5, 'zcsc', 'Computer Fundamental and programmerss', 6000, 'sdfsdfsfsf', '2017-08-01 02:39:17', '2017-08-02 01:02:07'),
(6, 'Adc90', 'PHP Programming', 11000, '', '2017-08-01 02:43:27', '2017-08-01 02:43:27'),
(7, 'Adc901', 'Java trainingh', 8000, '6 months', '2017-08-01 02:50:50', '2017-08-04 11:51:57'),
(8, 'xxxx', 'sdfsf', 1222, 'sfsf', '2017-08-03 06:41:41', '2017-08-03 06:41:41'),
(9, 'A00xl', 'Advanced Excel C', 300, '1 Month', '2017-08-04 01:14:35', '2017-08-04 01:14:35'),
(10, 'AT01', 'Advanced Tally Course ful', 4500, '2 Month', '2017-08-04 01:15:36', '2017-08-04 01:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `education` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `reffer_by` varchar(50) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `modify_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `student_name`, `address`, `mobile`, `education`, `course`, `reffer_by`, `remark`, `create_date`, `modify_date`) VALUES
(1, 'Manjo', 'Pune', '9729602051', 'B.Tech', 'Adc90', 'Friend', 'I am new', '2017-08-03 09:08:10', '2017-08-03 09:08:10'),
(2, 'Kanhaiya', 'hodal', '9991141485', 'M.Tech', 'c32323d', 'None', 'I am new', '2017-08-03 11:51:17', '2017-08-03 11:51:17'),
(3, 'Sangeeta', 'Faridabad', '8989898989', 'MCA', 'c32323d', 'None', 'I am new', '2017-08-03 09:08:38', '2017-08-03 09:08:38'),
(4, 'Rajbir Sehrawat', 'Gehlab', '9991141485', 'M.Tech, Phd', 'Adc901', 'Friend', 'I am new to this course', '2017-08-03 09:06:43', '2017-08-03 09:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `enrollment` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `deposite_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `enrollment`, `amount`, `remark`, `due_date`, `deposite_date`) VALUES
(1, 'ECR20170804040414', 500, '', '', '2017-07-01'),
(2, 'ECR20170804040414', 700, '', '', '2017-08-01'),
(3, 'ECR20170805102217', 2000, '2nd will be paid on after one month', '', '2017-08-05'),
(4, 'ECR20170805102217', 4000, '2nd payment', '', '2017-08-05'),
(5, 'ECR20170804040414', 300, 'test', '', '2017-08-05'),
(6, 'ECR20170804040414', 70, 'test', '2017-09-05', '2017-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `reffer_by`
--

CREATE TABLE `reffer_by` (
  `id` int(11) NOT NULL,
  `reffer_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reffer_by`
--

INSERT INTO `reffer_by` (`id`, `reffer_by`) VALUES
(1, 'None'),
(2, 'Friend');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `enrollment` varchar(200) NOT NULL,
  `aadhar_no` varchar(200) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `caste` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `course_fee` int(11) NOT NULL,
  `tax_amount` int(11) NOT NULL,
  `course_duration` varchar(200) NOT NULL,
  `course_discount` int(11) NOT NULL,
  `join_date` varchar(100) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `modify_date` varchar(200) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `enrollment`, `aadhar_no`, `student_name`, `father_name`, `caste`, `dob`, `address`, `phone`, `email`, `course_code`, `course_fee`, `tax_amount`, `course_duration`, `course_discount`, `join_date`, `create_date`, `modify_date`, `remark`, `tax`) VALUES
(1, 'ECR20170804113507', 'RSFSFD', 'Rajbir Singhs', 'Bijender Singh s', 'General', '1989-04-02', 'Gehlab', '9991141485', 'mypalwal@gmail.com', 'c32323', 2000, 0, '2 Months', 20, '2017-08-03', '2017-08-04 11:35:39', '2017-08-04 01:13:49', 'sdsdf', 18),
(2, 'ECR20170804115438', '-', 'Ajay Singh', 'Bansi lal', 'General', '1995-08-08', 'Palwal', '9720602051', '9720602051', 'c32323', 2000, 0, '2 Months', 10, '2017-08-10', '2017-08-04 11:56:03', '2017-08-04 11:56:03', '', 18),
(3, 'ECR20170804115751', '', 'sdfsdf', 'sfsd', 'General', '2017-08-14', 'sdfsf', '9991141485', '9991141485', 'c32323', 2000, 0, '2 Months', 0, '2017-08-16', '2017-08-04 11:57:55', '2017-08-04 11:57:55', '', 18),
(4, 'ECR20170804035928', 'sfsdf', 'Anupam', 'Web Seekers', 'General', '2017-08-02', 'Palwal', '9991141485', 'mypalwal@gmail.com', 'A00xl', 300, 54, '1 Month', 10, '2017-08-04', '2017-08-04 04:00:16', '2017-08-04 04:23:21', 'Tesing is best', 18),
(5, 'ECR20170804040414', 'Shailza', 'Shailza', 'Kumari', 'OBC', '2017-08-02', 'Faridabad', '9991141485', 'mypalwal@gmail.com', 'c32323ds', 2000, 360, '2 Months', 25, '2017-08-04', '2017-08-04 04:04:56', '2017-08-04 04:04:56', 'test', 18),
(6, 'ECR20170805102217', 'jkjljk', 'Narender', 'ABC', 'General', '2017-08-01', 'Jaipur', '9898989898', 'bdm@webseekers.in', 'Adc901', 8000, 1440, '6 months', 20, '2017-08-12', '2017-08-05 10:23:29', '2017-08-05 10:24:24', 'good to see you', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` varchar(200) NOT NULL,
  `login_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `last_login`, `login_ip`) VALUES
(1, 'Rajbir', 'mypalwal@gmail.com', '123', '2017-08-01 01:12:39', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reffer_by`
--
ALTER TABLE `reffer_by`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reffer_by`
--
ALTER TABLE `reffer_by`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
