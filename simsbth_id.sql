-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2025 at 11:54 AM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simsbth_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_directory`
--

CREATE TABLE `admin_directory` (
  `id` int NOT NULL,
  `admin_phone` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `passcode` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_directory`
--

INSERT INTO `admin_directory` (`id`, `admin_phone`, `admin_name`, `passcode`, `registration_date`) VALUES
(1, '9264453821', 'Robin', '1961', '2025-04-27 14:47:50'),
(2, '9199450345', 'Vijy', '7261', '2025-04-27 15:02:25'),
(3, '8754060365', 'Sivaraman', '1995', '2025-04-28 10:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `students_directory`
--

CREATE TABLE `students_directory` (
  `id` int NOT NULL,
  `student_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `register_number` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `studentID` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `blood_group` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `father_guardian_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `emergency_contact` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `students_image` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_directory`
--

INSERT INTO `students_directory` (`id`, `student_name`, `register_number`, `studentID`, `date_of_birth`, `gender`, `blood_group`, `class`, `father_guardian_name`, `mother_name`, `address`, `emergency_contact`, `students_image`) VALUES
(5, 'Anil Kumar Sharma', '2058', '1', '2020-06-10', 'Male', '-', 'UKG', 'Manoj Sharma', 'Mina Devi', 'Sah Tola Gurwalia', '9060903053', 'http://localhost/simsbthid/images/students/68144f196b480_stud1.jpg'),
(6, 'Siddharth Gupta', '2061', '2', '2020-04-23', 'male', '-', 'UKG', 'Subodh Kumar Gupta', 'Durgesh Nandini Devi', 'Heera Pakar, Gurwalia', '7739677092', 'http://localhost/simsbthid/images/students/681458aef0752_stud2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_directory`
--

CREATE TABLE `teachers_directory` (
  `id` int NOT NULL,
  `teacher_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `blood_group` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `employeeID` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `father_spouse_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `emer_contact_person` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `relation` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `emergency_contact` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `teachers_image` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers_directory`
--

INSERT INTO `teachers_directory` (`id`, `teacher_name`, `date_of_birth`, `gender`, `blood_group`, `employeeID`, `designation`, `father_spouse_name`, `address`, `contact_no`, `email`, `emer_contact_person`, `relation`, `emergency_contact`, `teachers_image`, `update_date`) VALUES
(1, 'Suman Kumari', '2005-06-02', 'Female', 'B+', 'NA', 'Teacher', 'Ramesh Sah', 'West Kargaiya, Bettiah', '7739094650', 'abc@gmail.com', 'Ramesh Sah', 'Father', '7739094650', 'http://localhost/simsbthid/images/teachers/6819a4cb9ad84_1.jpg', '2025-05-06 05:57:31'),
(2, 'Aditi Kumari', '2005-01-01', 'Female', 'B+', 'NA', 'Teacher', 'Raj Kumar', 'West Kargaiya, Bettiah', '7667699048', 'abc@gmail.com', 'Raj Kumar', 'Father', '7667699048', 'http://localhost/simsbthid/images/teachers/6819a4dc0b769_3.jpg', '2025-05-06 05:57:48'),
(3, 'Kirti Barnwal', '2002-10-29', 'Female', 'A+', 'NA', 'Teacher', 'Suresh Prasad', 'Naya Bazar Chowk, Bettiah, West Champaran', '7323894003', 'abc@gmail.com', 'Suresh Prasad', 'Father', '9031280550', 'http://localhost/simsbthid/images/teachers/6819a4e8265dc_6.jpg', '2025-05-06 05:58:00'),
(4, 'Anamika Kumari', '1999-04-28', 'Female', 'B+', 'NA', 'Teacher', 'Nandu Jee Prasad', 'Naya Bazar, Bulaki Singh Chowk, Bettiah', '8538910744', 'abc@gmail.com', 'Nandu Jee Prasad', 'Father', '8538910744', 'http://localhost/simsbthid/images/teachers/6819a4f51f1aa_9.jpg', '2025-05-06 05:58:13'),
(5, 'Rishi Kumar', '1974-12-10', 'Male', 'B+', 'NA', 'Teacher', 'Kameshwar Prasad', 'Anand Nagar, Ward No. 18, Bettiah', '7352749758', 'abc@gmail.com', 'Kameshwar Prasad', 'Father', '7352749758', 'http://localhost/simsbthid/images/teachers/6819a4fe7744a_10.jpg', '2025-05-06 05:58:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_directory`
--
ALTER TABLE `admin_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_directory`
--
ALTER TABLE `students_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_directory`
--
ALTER TABLE `teachers_directory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_directory`
--
ALTER TABLE `admin_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students_directory`
--
ALTER TABLE `students_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers_directory`
--
ALTER TABLE `teachers_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
