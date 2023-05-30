-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 08:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `Phone`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 9876543210, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `lab_Name` varchar(1000) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `lab_email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `test_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `lab_boy_email` varchar(500) NOT NULL,
  `time` varchar(100) NOT NULL,
  `b_date` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `lab_updations` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`) VALUES
(1, 'Blood Test', '1672129091.jpg'),
(2, 'Thyroid Test', '1672129133.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `lab_id` int(11) NOT NULL,
  `lab_name` varchar(1000) NOT NULL,
  `lab_email` varchar(1000) NOT NULL,
  `lab_phone` varchar(100) NOT NULL,
  `lab_experience` varchar(100) NOT NULL,
  `lab_boy` varchar(500) NOT NULL,
  `lab_boy_email` varchar(500) NOT NULL,
  `lab_boy_pass` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `experience_certificate` varchar(500) NOT NULL,
  `Lab_status` varchar(500) NOT NULL,
  `Lab_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lab_id`, `lab_name`, `lab_email`, `lab_phone`, `lab_experience`, `lab_boy`, `lab_boy_email`, `lab_boy_pass`, `image`, `experience_certificate`, `Lab_status`, `Lab_type`) VALUES
(1, 'Hi tech Labouratory', 'hitech@gmail.com', '9952365428', '2', 'clinto', 'clinto@gmail.com', 'clinto', '1672126276.jpg', '1672126276.pdf', 'Approve', 'Admin'),
(2, 'Care Diagnostic  Lab', 'carelab@gmail.com', '9952365428', '8', 'Arul k', 'arul@gmail.com', 'arul', '1672126499.jpg', '1672126500.pdf', 'Approve', 'Admin'),
(5, 'Doctors Lab', 'doctors_lab@gmail.com', '9952365428', '2', 'anzil k', 'anzil@gmail.com', 'anzil', '1673443292.jpg', '1673443292.pdf', 'Approve', 'Lab');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `lab_email` varchar(100) NOT NULL,
  `test_id` int(11) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `carh_holder_name` varchar(500) NOT NULL,
  `card_number` varchar(500) NOT NULL,
  `cvv` varchar(500) NOT NULL,
  `expiry_date` varchar(200) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Anjana V', 'anjana@gmail.com', '123', 9847077635);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `test_name` varchar(300) NOT NULL,
  `test_price` varchar(600) NOT NULL,
  `test_description` varchar(400) NOT NULL,
  `test_image` varchar(110) NOT NULL,
  `lab_email` varchar(700) NOT NULL,
  `lab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `cat_id`, `test_name`, `test_price`, `test_description`, `test_image`, `lab_email`, `lab_id`) VALUES
(1, 1, 'Complete blood count, also called a CBC', '400', 'A complete blood count, also known as a full blood count, is a set of medical laboratory tests that provide information about the cells in a person\'s blood. The CBC indicates the counts of white blood cells, red blood cells and platelets, the concentration of hemoglobin, and the hematocrit.', '1672159099.jpg', 'hitech@gmail.com', 1),
(2, 2, 'T4', '480', 'A thyroxine test is a blood test that helps diagnose thyroid conditions. The thyroid is a small, butterfly-shaped gland at the base of your throat. Your thyroid makes hormones that control the way your body uses energy. These hormones affect your weight, heart, body temperature, muscle strength, and even your mood. In children, thyroid hormones affect growth, too.\r\n\r\nThyroxine, also known as T4, i', '1672159348.jpg', 'hitech@gmail.com', 1),
(4, 1, 'Allergy Panel Test', '400', 'An allergy is a hypersensitivity disorder of the immune system that causes undesirable reactions to certain substances like food, dust, pollen, drugs or even animal dander. These reactions normally do not occur in others. The substance causing the reaction is an allergen. Immunoglobin E is an antibody that the body produces in case of an allergic reaction. Total IgE test is a blood test used to me', '1673600988.jpg', 'hitech@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

CREATE TABLE `test_result` (
  `test_result_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `lab_Name` varchar(100) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `lab_email` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `test_name` varchar(500) NOT NULL,
  `report` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `test_result`
--
ALTER TABLE `test_result`
  ADD PRIMARY KEY (`test_result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_result`
--
ALTER TABLE `test_result`
  MODIFY `test_result_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
