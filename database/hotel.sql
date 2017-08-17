-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 12:34 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilities_id` int(11) NOT NULL,
  `facilities_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilities_id`, `facilities_name`) VALUES
(1, 'TV'),
(2, 'Bed');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `fullname`, `email`, `message`) VALUES
(1, 'asd', 'asdas@gmail.com', 'asdasd'),
(2, 'asdadss', 'asdas@gmail.com', 'asdasdsad'),
(3, 'sdfsdf', 'asdas@gmail.com', 'asda dasdasdas asd asdas dsa das\r\n das\r\nasd a\r\nd sa\r\n\r\nasd asda\r\nasd asdsa dsa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` varchar(30) NOT NULL,
  `check_out` varchar(30) NOT NULL,
  `room_rate` varchar(30) NOT NULL,
  `number_of_person` int(11) NOT NULL,
  `r_code` varchar(50) NOT NULL,
  `date_reserved` varchar(20) NOT NULL,
  `reservation_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `city`, `gender`, `room_id`, `check_in`, `check_out`, `room_rate`, `number_of_person`, `r_code`, `date_reserved`, `reservation_status`) VALUES
(1, 'Kenneth', 'Aboy', 'red_izen10@yahoo.com', '09995747988', 'Tres Fuentes Street Barangay Rizal', 'Silay City', 'Male', 1, '08/23/2017', '08/24/2017', '120', 3, 'NgxyVd3M7tR', '2017-08-04', 'Pending'),
(2, '', '', '', '', '', '', '', 0, '', '', '', 0, 'iWLOE7TE9n4', '2017-08-04', ''),
(3, 'sdfdsf', 'dsfdsfdsf', 'asdas@gmail.com', '123213213213', 'sdasdasd', 'asdasd', 'Male', 1, '08/19/2017', '08/26/2017', '120', 12, 'y7SQsPmgT8i', '2017-08-04', 'Pending'),
(4, 'sdfdsf', 'dsfdsfdsf', 'asdas@gmail.com', '123213213213', 'asdasda', 'asdasd', 'Male', 1, '09/08/2017', '09/09/2017', '120', 0, 'FS8pnbDyhYf', '2017-08-04', 'Pending'),
(5, 'sdfdsf', 'dsfdsfdsf', 'asdas@gmail.com', '123213213213', 'asd', 'sad', 'Male', 1, '08/26/2017', '08/18/2017', '120', 12, 'Udk09kqmApT', '2017-08-04', 'Pending'),
(6, 'sdfdsf', 'dsfdsfdsf', 'asdas@gmail.com', '123213213213', 'asdsa', 'sdasd', 'Male', 3, '08/24/2017', '08/25/2017', '300', 0, 'Elhazeig73j', '2017-08-04', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_category_id` int(11) NOT NULL,
  `room_number` varchar(50) NOT NULL,
  `room_desc` varchar(300) NOT NULL,
  `room_rate` decimal(11,0) NOT NULL,
  `room_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_category_id`, `room_number`, `room_desc`, `room_rate`, `room_pic`) VALUES
(1, 1, '105', 'Aircondition with Television', '120', 'IMG_2560.JPG'),
(2, 2, '104', 'This is a Decription', '500', 'IMG_2555.JPG'),
(3, 1, '102', 'This is a description', '300', 'IMG_2558.JPG'),
(4, 2, '103', 'This is a description', '1500', 'new.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `room_category_id` int(11) NOT NULL,
  `category_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`room_category_id`, `category_name`) VALUES
(1, 'Deluxe'),
(2, 'Standard'),
(7, 'Superior');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `username`, `password`, `status`) VALUES
(1, 'Administrator', 'admin', 'admin', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`room_category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `room_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
