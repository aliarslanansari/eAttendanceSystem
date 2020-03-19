-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 01:23 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(5) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `sub_code` int(10) NOT NULL,
  `attendance` text NOT NULL,
  `shift` int(5) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `slot` varchar(15) NOT NULL,
  `head` varchar(4) NOT NULL,
  `year` varchar(5) NOT NULL DEFAULT 'FYDC'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `staff_id`, `date`, `sub_code`, `attendance`, `shift`, `branch`, `slot`, `head`, `year`) VALUES
(1, 104, '2018-01-31', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(2, 104, '2018-02-01', 17401, 'AAAAAAAAAA', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(3, 104, '2018-02-20', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(4, 104, '2018-02-01', 17401, 'PPPPPPPPPP', 59, 'CO', '11:00-12:00', 'TH', 'SYDC'),
(5, 104, '2018-02-03', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(6, 104, '2018-02-14', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(7, 104, '2018-02-14', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(8, 104, '2018-02-14', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(9, 104, '2018-02-14', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(10, 101, '2018-02-14', 17601, 'PPPPPPPPPPPPPPPPPPPPPPPPPPPP', 59, 'CO', '07:30-09:30', 'PR', 'TYDC'),
(11, 104, '2018-02-14', 17625, 'PPPPP', 1100, 'CO', '12:10-01:10', 'TH', 'TYDC'),
(12, 104, '2018-02-14', 17515, 'PPPPPPPPPPPP', 59, 'IF', '07:30-08:30', 'TH', 'TYDC'),
(13, 104, '2018-02-15', 17515, 'PPPPPPPPPPPP', 59, 'IF', '10:00-12:00', 'PR', 'TYDC'),
(14, 101, '2018-02-22', 17512, 'PPPAPPPPPPPPPPPPPPPPPPPPPPPA', 59, 'CO', '01:10-02:10', 'TH', 'TYDC'),
(15, 101, '2018-02-17', 17514, 'PAAAAAAAAAAAAAAAAAAAAAAAAAAA', 59, 'CO', '12:10-02:10', 'PR', 'TYDC'),
(16, 103, '2018-02-22', 17624, 'PPPPPPPPPPPPPPPPPPPPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'TYDC'),
(17, 103, '2018-02-21', 17624, 'APPPAPPAPPPPPPPAPPPAPPPPPAPP', 59, 'CO', '07:30-09:30', 'PR', 'TYDC'),
(18, 104, '2018-02-22', 17401, 'PPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'SYDC'),
(19, 101, '2018-02-22', 17512, 'PPPPPPPPPPPPPPPPPPPPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'TYDC'),
(20, 101, '2018-02-23', 17514, 'PPPAPPAAPPPPPPAPPPPPPPPPAPPP', 59, 'CO', '07:30-08:30', 'TH', 'TYDC'),
(21, 104, '2018-02-24', 17625, 'PPPPPPPPPP', 1100, 'CO', '12:10-01:10', 'TH', 'TYDC'),
(22, 104, '2018-02-24', 17512, 'PPPPPPPPPPPPPPPPPPPPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'TYDC'),
(23, 104, '2018-02-23', 17512, 'PPPPPPPPPPPPPPPPPPPPPPPPPPPP', 59, 'CO', '07:30-08:30', 'TH', 'TYDC'),
(24, 104, '2018-02-22', 17624, 'PPPPPPPPPPPPAPPPPPPPPPPPPAPP', 59, 'CO', '07:30-08:30', 'TH', 'TYDC'),
(25, 104, '2018-02-17', 17625, 'AAPPPPPPPP', 1100, 'CO', '12:10-01:10', 'PR', 'TYDC'),
(26, 104, '2018-02-18', 17625, 'PPPPPPPPPP', 1100, 'CO', '12:10-01:10', 'PR', 'TYDC'),
(27, 104, '2018-02-21', 17624, 'PPPAPPPAPPPPPPPPPPPPPPPPPPPP', 59, 'CO', '07:30-09:30', 'PR', 'TYDC'),
(28, 104, '2018-02-24', 17515, 'PPAPPAPPAPPP', 59, 'IF', '12:10-01:10', 'TH', 'TYDC'),
(29, 104, '2018-02-24', 17428, 'PPAPPAPPPPP', 59, 'CO', '11:00-12:00', 'TH', 'SYDC'),
(30, 104, '2018-03-05', 17625, 'PAPAPAPAAA', 1100, 'CO', '12:10-01:10', 'PR', 'TYDC'),
(31, 101, '2018-03-05', 17512, 'PPAPPAPPPAPPAPPPPPPPPPPPPPPP', 59, 'CO', '07:30-09:30', 'PR', 'TYDC'),
(32, 101, '2018-03-05', 17512, 'PPPPAPPAPPPPPPPPPPPPPPPPPPPP', 59, 'CO', '12:10-02:10', 'PR', 'TYDC');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(5) NOT NULL,
  `year` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `term` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `year`, `start_date`, `end_date`, `term`) VALUES
(1, '2017-2018', '2017-12-11', '2018-03-22', 'even'),
(2, '2017-2018', '2017-06-01', '2017-10-25', 'odd'),
(3, '2018-2019', '2018-06-01', '2018-10-23', 'odd'),
(4, '', '1970-01-01', '1970-01-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `shift` int(5) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `fname`, `mname`, `lname`, `shift`, `branch`, `type`) VALUES
(101, 'Nishad', 'D', 'Patel', 59, 'CO', 'HOD'),
(102, 'Abhishek', 'P', 'Jain', 59, 'IF', 'STAFF'),
(103, 'dushyant', 'S', 'potdar', 59, 'CO', 'STAFF'),
(104, 'Tukaram', 'H', 'Pawar', 1100, 'CO', 'STAFF'),
(105, 'Ritesh', 'D', 'Desale', 59, 'CO', 'STAFF'),
(106, 'Himesh', 'D', 'Patel', 59, 'CO', 'CLERK'),
(107, 'Neha', 'D', 'Patil', 1100, 'CO', 'STAFF'),
(108, 'Mrudula', 'S', 'Karande', 59, 'CO', 'STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrl_no` decimal(20,0) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `shift` int(5) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `year` varchar(5) NOT NULL,
  `scheme` varchar(2) NOT NULL,
  `roll` int(2) NOT NULL,
  `admit_year` varchar(10) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'reg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrl_no`, `fname`, `mname`, `lname`, `shift`, `branch`, `year`, `scheme`, `roll`, `admit_year`, `status`) VALUES
('900590291', 'Mohd Salman', 'Ashraf Ali', 'Siddiqui', 59, 'IF', 'TYDC', 'G', 1, '2010-2011', 'reg'),
('1200590304', 'Harshal', 'Vilas', 'Mahale', 59, 'IF', 'TYDC', 'G', 2, '2012-2013', 'reg'),
('1214325646', 'ALI AMAAN', 'ALI IMRAN', 'ANSARI', 59, 'CO', 'TYDC', 'E', 9, '2010-2011', 'reg'),
('1223432422', 'dsf', 'sdf', 'df', 59, 'CO', 'TYDC', 'G', 12, '2015-2016', 'reg'),
('1223432423', 'dsf', 'sdf', 'df', 59, 'CO', 'TYDC', 'G', 14, '2015-2016', 'reg'),
('1232432435', 'sjd', 'sjhj', 'sdjhg', 1100, 'CO', 'TYDC', 'G', 6, '2015-2016', 'reg'),
('1233456782', 'Ali Arslan', 'Ali Imran', 'Ansari', 59, 'CO', 'TYDC', 'G', 15, '2014-2015', 'reg'),
('1233456789', 'Ali Arslan', 'Ali Imran', 'Ansari', 59, 'CO', 'TYDC', 'G', 16, '2014-2015', 'reg'),
('1234555784', 'Durgesh', 'Gopal', 'Ozarkar', 59, 'CO', 'TYDC', 'G', 18, '2014-2015', 'reg'),
('1234566645', 'ali', 'dfgdf', 'asgg', 59, 'CO', 'TYDC', 'G', 4, '2013-2014', 'reg'),
('1234566666', 'ali', 'dfgdf', 'asgg', 59, 'CO', 'TYDC', 'G', 3, '2013-2014', 'reg'),
('1234567890', 'Himesh', 'Rakesh', 'Potdar', 59, 'CO', 'TYDC', 'G', 6, '2010-2011', 'reg'),
('1234567891', 'c', 'c', 'c', 59, 'CO', 'TYDC', 'G', 21, '2016-2017', 'reg'),
('1234567892', 'a', 'a', 'a', 59, 'CO', 'TYDC', 'G', 23, '2016-2017', 'reg'),
('1234567893', 'b', 'b', 'b', 59, 'CO', 'TYDC', 'G', 24, '2016-2017', 'reg'),
('1234567897', 'abhishek', 'cddd', 'dfg', 59, 'IE', 'SYDC', 'G', 1, '2015-2016', 'reg'),
('1245678905', 'hii', 'hhf', 'ytfty', 59, 'CO', 'TYDC', 'G', 2, '2013-2014', 'reg'),
('1300590223', 'Aniket', 'Ramkrushna', 'Bhavsar', 59, 'IF', 'TYDC', 'G', 3, '2013-2014', 'reg'),
('1300590239', 'Vipul', 'Ajay', 'Joshi', 59, 'IF', 'TYDC', 'G', 4, '2013-2014', 'reg'),
('1300590243', 'Shubham', 'Devidas', 'Kasture', 59, 'IF', 'TYDC', 'G', 5, '2013-2014', 'reg'),
('1300590259', 'Saurabh', 'Rajendra', 'Patkar', 59, 'IF', 'TYDC', 'G', 6, '2013-2014', 'reg'),
('1300590263', 'Truptee', 'Jagadish', 'Saundankar', 59, 'IF', 'TYDC', 'G', 7, '2013-2014', 'reg'),
('1400590158', 'Himani', 'Sandeep', 'Kapure', 59, 'IF', 'TYDC', 'G', 8, '2014-2015', 'reg'),
('1400590174', 'Akansha', 'Vijay', 'Neve', 59, 'IF', 'TYDC', 'G', 9, '2014-2015', 'reg'),
('1400590192', 'Shivani', 'Diwakar', 'Sharma', 59, 'IF', 'TYDC', 'G', 10, '2014-2015', 'reg'),
('1411000059', 'Kalyani', 'Arun', 'Bagul', 1100, 'CO', 'SYDC', 'G', 1, '2014-2015', 'reg'),
('1411000098', 'Sarthak', 'Prafulla', 'Relan', 59, 'IF', 'SYDC', 'G', 1, '2014-2015', 'reg'),
('1500590105', 'Pallavi', 'Narendra', 'Chaudhari', 59, 'CO', 'SYDC', 'G', 11, '2015-2016', 'reg'),
('1500590142', 'Aditi', 'Dinesh', 'Thorat', 59, 'CO', 'SYDC', 'G', 12, '2015-2016', 'reg'),
('1500590160', 'Tanmay', 'Kishor', 'Ahirrao', 59, 'CO', 'SYDC', 'G', 13, '2015-2016', 'reg'),
('1500590162', 'Prajakta', 'Sanjay', 'Baviskar', 59, 'IF', 'TYDC', 'G', 11, '2015-2016', 'reg'),
('1500590167', 'Pooja', 'Arun', 'Kelkar', 59, 'IF', 'TYDC', 'G', 12, '2015-2016', 'reg'),
('1500590169', 'Sreeja', 'Subir', 'Kundu', 59, 'IF', 'SYDC', 'G', 2, '2015-2016', 'reg'),
('1500590177', 'Dhanashree', 'Ravindra', 'Wagh', 59, 'IF', 'SYDC', 'G', 3, '2015-2016', 'reg'),
('1511000057', 'Ali Arslan', 'Imran', 'Ansari', 1100, 'CO', 'TYDC', 'G', 1, '2015-2016', 'reg'),
('1511000058', 'Siddeshwar', 'Vijay', 'Bhadak', 1100, 'CO', 'TYDC', 'G', 2, '2015-2016', 'reg'),
('1511000059', 'Nishigandha', 'Vijay', 'Bhadane', 1100, 'CO', 'TYDC', 'G', 3, '2015-2016', 'reg'),
('1511000060', 'Swati', 'Vijay', 'Chaudhari', 1100, 'CO', 'TYDC', 'G', 4, '2015-2016', 'reg'),
('1511000061', 'Harsh', 'Mahendra', 'Chaudhari', 1100, 'CO', 'TYDC', 'G', 1, '2015-2016', 'reg'),
('1511000062', 'Tilesh', 'Ravindra', 'Deshmukh', 1100, 'CO', 'TYDC', 'G', 2, '2015-2016', 'reg'),
('1511000063', 'Shlok', 'Dinesh', 'Khandelwal', 1100, 'CO', 'TYDC', 'G', 3, '2015-2016', 'reg'),
('1511000064', 'Kajal', 'Dinesh', 'Khankari', 1100, 'CO', 'TYDC', 'G', 4, '2015-2016', 'reg'),
('1511000065', 'Ffs', 'Gggzh', 'Hhs', 59, 'CE', 'SYDC', 'G', 58, '2010-2011', 'reg'),
('1511000073', 'Sagar', 'Vijaykumar', 'Patil', 1100, 'CO', 'SYDC', 'G', 2, '2015-2016', 'reg'),
('1511000078', 'Mayanka', 'Anil', 'Rote', 1100, 'CO', 'TYDC', 'G', 5, '2015-2016', 'reg'),
('1511008090', 'Ramesh', 'Ravindra', 'Rathod', 1100, 'CO', 'FYDC', 'G', 1, '2017-2018', 'reg'),
('1511008091', 'Krush', 'Ravi', 'Rathod', 1100, 'CO', 'FYDC', 'G', 2, '2017-2018', 'reg'),
('1511008092', 'Karan', 'Ram', 'Rane', 1100, 'CO', 'FYDC', 'G', 3, '2017-2018', 'reg'),
('1511008093', 'Sai', 'Ramakant', 'Bhosale', 1100, 'CO', 'FYDC', 'G', 4, '2017-2018', 'reg'),
('1511008094', 'Swami', 'Ramakant', 'Bhosale', 1100, 'CO', 'FYDC', 'G', 5, '2017-2018', 'reg'),
('1600590036', 'Jinendra', 'Vijaykumar', 'Jain', 59, 'CO', 'SYDC', 'G', 14, '2016-2017', 'reg'),
('1600590079', 'Siddharth', 'Dipak', 'Ahire', 59, 'CO', 'SYDC', 'G', 15, '2016-2017', 'reg'),
('1600590080', 'Vaishnavi', 'Atul', 'Ahirrao', 59, 'CO', 'SYDC', 'G', 16, '2016-2017', 'reg'),
('1600590081', 'Rushikesh', 'Sunil', 'Bagul', 59, 'CO', 'SYDC', 'G', 17, '2016-2017', 'reg'),
('1600590082', 'Neha', 'Prabhakar', 'Bavishkar', 59, 'CO', 'SYDC', 'G', 18, '2016-2017', 'reg'),
('1600590083', 'Yamini', 'Hemant', 'Bhosale', 59, 'CO', 'SYDC', 'G', 19, '2016-2017', 'reg'),
('1600590087', 'Lalit', 'Santosh', 'Chaudhari', 59, 'CO', 'SYDC', 'G', 10, '2016-2017', 'reg'),
('1600590134', 'Jagruti', 'Bhagvan', 'Badgujar', 59, 'IF', 'SYDC', 'G', 4, '2016-2017', 'reg'),
('1600590135', 'Niraj', 'Narendra', 'Bhavsar', 59, 'IF', 'SYDC', 'G', 5, '2016-2017', 'reg'),
('1600590136', 'Manasi', 'Dilip', 'Bhoi', 59, 'IF', 'SYDC', 'G', 6, '2016-2017', 'reg'),
('1600590137', 'Vishaka', 'Vijay', 'Chavan', 59, 'IF', 'SYDC', 'G', 7, '2016-2017', 'reg'),
('1600590138', 'Kirti', 'Narendra', 'Deore', 59, 'IF', 'SYDC', 'G', 8, '2016-2017', 'reg'),
('1600590139', 'Akshay', 'Bhikan', 'Gujar', 59, 'IF', 'SYDC', 'G', 9, '2016-2017', 'reg'),
('1600590140', 'Harshal', 'Sanjay', 'Ghode', 59, 'IF', 'SYDC', 'G', 10, '2016-2017', 'reg'),
('1600590156', 'Ali', 'Arslan', 'Ansari', 59, 'IE', 'FYDC', 'G', 1, '2016-2017', 'reg'),
('1600780076', 'Suyog', 'S', 'Dhoot', 59, 'CO', 'SYDC', 'I', 20, '2017-2018', 'reg'),
('1600780077', 'Rakesh', 'S', 'Yeole', 59, 'CO', 'SYDC', 'I', 21, '2017-2018', 'reg'),
('1611000048', 'Abhaya', 'Mahesh', 'Ahirrao', 1100, 'CO', 'SYDC', 'G', 3, '2015-2016', 'reg'),
('1611000049', 'Sayali', 'Dyaneshwar', 'Borse', 1100, 'CO', 'SYDC', 'G', 4, '2015-2016', 'reg'),
('1611000050', 'Ashiwini', 'Rupsing', 'Girase', 1100, 'CO', 'SYDC', 'G', 5, '2015-2016', 'reg'),
('2342344352', 'aaaaaaaaa', 'zzzzzz', 'ab', 59, 'CO', 'TYDC', 'G', 10, '2015-2016', 'reg'),
('2343256543', 'zzzzz', 'zzzzzz', 'bbbb', 59, 'CO', 'TYDC', 'G', 7, '2015-2016', 'reg'),
('2343522222', 'aaaaa', 'zzzzzz', 'aaaa', 59, 'CO', 'TYDC', 'G', 8, '2015-2016', 'reg'),
('2343556677', 'zzzzzzzzz', 'zzzzzz', 'zzzzzzzz', 59, 'CO', 'TYDC', 'G', 5, '2015-2016', 'reg'),
('2445678943', 'bbbb', 'zzzzzz', 'aaaa', 59, 'CO', 'TYDC', 'G', 11, '2015-2016', 'reg'),
('5165646462', 'All', 'All', 'Gm', 1100, 'CO', 'FYDC', 'G', 7, '2019-2020', 'reg'),
('5165646465', 'All', 'All', 'Gm', 1100, 'CO', 'FYDC', 'G', 6, '2019-2020', 'reg'),
('5165646485', 'All', 'All', 'Gm', 1100, 'CO', 'FYDC', 'G', 8, '2019-2020', 'reg'),
('5165646547', 'All', 'All', 'Gm', 1100, 'CO', 'FYDC', 'G', 10, '2019-2020', 'reg'),
('5165646566', 'All', 'All', 'Gm', 1100, 'CO', 'FYDC', 'G', 9, '2019-2020', 'reg'),
('11111111110', 'Fndkdjjd', 'DJX', 'Jddksk', 59, 'CO', 'TYDC', 'G', 13, '2015-2016', 'reg'),
('11111111111', 'Sjshsjdj', 'DJX', 'Jddkskd', 59, 'CO', 'TYDC', 'G', 25, '2015-2016', 'reg'),
('11111111112', 'Sjshsjd', 'DJ', 'Jddkskdf', 59, 'CO', 'TYDC', 'G', 19, '2015-2016', 'reg'),
('11111111113', 'Sjshsj', 'D', 'Jddkskd', 59, 'CO', 'TYDC', 'G', 17, '2015-2016', 'reg'),
('11111111114', 'Sjshs', 'Dl', 'Jddksk', 59, 'CO', 'TYDC', 'G', 20, '2015-2016', 'reg'),
('11111111115', 'Darshan', 'Ali', 'Ansari', 59, 'CO', 'TYDC', 'G', 22, '2015-2016', 'reg'),
('11111111116', 'Neha', 'Alip', 'Patil', 59, 'CO', 'TYDC', 'G', 26, '2015-2016', 'reg'),
('11111111117', 'Durgesh', 'Ali', 'Ansari', 59, 'CO', 'TYDC', 'G', 27, '2015-2016', 'reg'),
('11111111118', 'Dur', 'Gopal', 'Ozarkar', 59, 'CO', 'TYDC', 'G', 28, '2015-2016', 'reg'),
('11111111119', 'Harsh', 'Mahendra', 'Bahubali', 59, 'CO', 'TYDC', 'G', 1, '2015-2016', 'reg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(5) NOT NULL,
  `sub_name` varchar(60) NOT NULL,
  `sub_abbr` varchar(5) NOT NULL,
  `sub_branch` varchar(5) NOT NULL,
  `sub_sem` int(2) NOT NULL,
  `sub_scheme` varchar(2) NOT NULL,
  `staff_id` int(5) NOT NULL DEFAULT '0',
  `shift` int(5) NOT NULL,
  `sub_code` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`, `sub_abbr`, `sub_branch`, `sub_sem`, `sub_scheme`, `staff_id`, `shift`, `sub_code`) VALUES
(1, 'Operating System', 'OSY', 'CO', 5, 'G', 101, 59, 17512),
(3, 'Computer Security', 'CSE', 'CO', 5, 'G', 101, 59, 17514),
(5, 'Java Programming', 'AJP', 'IF', 5, 'G', 104, 59, 17515),
(6, 'Management', 'MAN', 'CO', 6, 'G', 104, 59, 17601),
(7, 'Software Testing', 'STE', 'CO', 6, 'G', 105, 59, 17624),
(8, 'Software Testing', 'STE', 'IF', 6, 'G', 103, 59, 17624),
(9, 'Environmental Studies', 'EST', 'CO', 4, 'G', 104, 59, 17401),
(10, 'Computer Hardware And Maintena', 'CHM', 'CO', 4, 'G', 104, 59, 17428),
(11, 'Advanced Java Programming', 'AJP', 'CO', 6, 'G', 104, 1100, 17625),
(12, 'Microprocessor and Assembly Programming', 'MAP', 'CO', 4, 'G', 107, 1100, 17412);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `staff_id` int(5) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`staff_id`, `user_email`, `user_password`, `type`) VALUES
(10, 'admin', 'admin', 'ADMIN'),
(101, 'ndp1100', '12345678', 'HOD'),
(102, 'apj1100', '12345678', 'STAFF'),
(103, 'dsp1100', '12345678', 'STAFF'),
(104, 'thp1100', 'thp@1100', 'STAFF'),
(105, 'rdd0059', 'rdd@0059', 'STAFF'),
(106, 'hdp0059', '12345678', 'CLERK'),
(107, 'Neha1100', '12345678', 'STAFF'),
(108, 'mrudula', '12345678', 'STAFF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrl_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
