-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 06:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` varchar(20) NOT NULL,
  `lecture_firstname` varchar(50) NOT NULL,
  `lecture_lastname` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `option` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `course_times` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time_in` varchar(20) NOT NULL,
  `time_out` varchar(20) NOT NULL,
  `range` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecture_firstname`, `lecture_lastname`, `phone_number`, `email`, `password`, `department`, `option`, `level`, `course`, `course_times`, `date`, `time_in`, `time_out`, `range`, `status`) VALUES
('1', 'john ', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level1', 'ICT101', '6', '12/09/2022', '08:50', '09:40', '1hr', 'present'),
('10', 'will ', 'smith', '0797860851', 'willsmith22@gmail.com', 'smith22', 'ICT', 'IT', 'level1', 'ICT105', '7', '30/09/2022', '10:50', '11:40', '2hr', 'absent'),
('11', 'john', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level1', 'ICT101', '6', '6/10/2022', '11:40', '12:30', '1hr', 'absent'),
('12', 'john ', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level1', 'ICT101', '6', '13/09/2022', '08:00', '10:30', '3hr', 'present'),
('13', 'john ', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level2', 'ICT205', '11', '13/09/2022', '11:40', '12:30', '1hr', 'present'),
('14', 'john', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level3', 'ICT310', '6', '7/10/2022', '11:40', '12:30', '1hr', 'present'),
('15', 'john', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level1', 'ICT103', '5', '08/10/2022', '08:00', '09:40', '2hr', 'present'),
('16', 'john', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level1', 'ICT103', '5', '9/10/2022', '14:00', '14:50', '1hr', 'absent'),
('2', 'peter ', 'paker', '0789923654', 'peterparker33@gmail.com', 'peter3', 'ICT', 'IT', 'level1', 'ICT102', '8', '29/09/2022', '14:00', '16:30', '3hr', 'present'),
('3', 'zack ', 'williams', '0782239054', 'zackwilliams44@gmail.com', 'zack44', 'ICT', 'IT', 'level2', 'ICT202', '5', '29/09/2022', '08:00', '09:40', '2hr', 'absent'),
('4', 'kevin ', 'durant', '0787055820', 'kevindurant55@gmail.com', 'kd7', 'ICT', 'IT', 'level2', 'ICT210', '10', '29/09/2022', '09:40', '12:30', '3hr', 'absent'),
('5', 'will ', 'smith', '0797860851', 'willsmith22@gmail.com', 'smith22', 'ICT', 'IT', 'level3', 'ICT304', '12', '30/09/2022', '09:40', '10:30', '1hr', 'present'),
('6', 'justin ', 'smith', '0733237849', 'justinsmith66@gmail.com', 'justin6', 'ICT', 'IT', 'level3', 'ICT312', '9', '29/09/2022', '10:50', '12:30', '2hr', 'present'),
('8', 'john ', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level2', 'ICT205', '11', '29/09/2022', '09:40', '10:30', '1hr', 'present'),
('9', 'john ', 'mark', '0782762816', 'johnmark11@gmail.com', 'john11', 'ICT', 'IT', 'level3', 'ICT310', '6', '29/09/2022', '10:50', '12:30', '2hr', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(20) NOT NULL,
  `reg_number` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `option` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time_in` varchar(20) NOT NULL,
  `time_out` varchar(20) NOT NULL,
  `ranges` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `reg_number`, `first_name`, `last_name`, `password`, `department`, `option`, `level`, `course`, `date`, `time_in`, `time_out`, `ranges`, `status`) VALUES
('1', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT101', '12/09/2022', '08:30', '09:30', '1hr', 'present'),
('10', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT101', '15/09/2022', '09:40', '10:30', '1hr', 'absent'),
('11', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT101', '18/09/2022', '11:40', '12:30', '1hr', 'present'),
('12', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT101', '20/09/2022', '14:00', '16:30', '3hr', 'absent'),
('13', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT101', '21/09/2022', '08:00', '10:30', '3hr', 'present'),
('14', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT102', '14/10/2022', '08:00', '10:30', '3hr', 'absent'),
('15', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT101', '14/10/2022', '08:00', '10:30', '3hr', 'present'),
('2', '19RP06709', 'abizera', 'emery', 'mcgrizzy', 'ICT', 'IT', 'level2', 'ICT202', '02/08/2022', '11:30', '12:00', '30min', 'absent'),
('3', '19RP03090', 'bahati', 'marriam', 'bahati1212', 'ICT', 'IT', 'level3', 'ICT303', '04/10/2021', '04:50', '07:00', '5hr', 'present'),
('4', '19RP06709', 'abizera', 'emery', 'mcgrizzy', 'ICT', 'IT', 'level2', 'ICT203', '02/08/2022', '12:00', '14:00', '2hr', 'present'),
('5', '19RP03090', 'bahati', 'marriam', 'bahati1212', 'ICT', 'IT', 'level3', 'ICT302', '03/08/2022', '08:00', '10:00', '3hr', 'absent'),
('6', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT102', '03/08/2022', '08:50', '10:30', '2hr', 'present'),
('7', '19RP01278', 'cyiza', 'Louise', 'louise111', 'ICT', 'IT', 'level1', 'ICT101', '12/09/2022', '08:30', '09:30', '1hr', 'present'),
('8', '19RP03097', 'shema', 'Herbez', 'herbo', 'ICT', 'IT', 'level2', 'ICT203', '02/08/2022\r\n', '12:00', '14:00', '2hr', 'present'),
('9', '19RP08509', 'janvier', 'niyimurera', 'janv123', 'ICT', 'IT', 'level1', 'ICT101', '14/09/2022', '08:00', '10:30', '3hr', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `study_id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `lecturer_id` varchar(20) NOT NULL,
  `student_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`study_id`, `date`, `lecturer_id`, `student_id`) VALUES
('1', '', '1', '1'),
('2', '', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `department`, `username`, `password`) VALUES
(1, 'Niyokwizerwa Jean Paul', 'ICT', 'hodpaul', 'paul123'),
(2, 'Byukusenga Emmanuel', 'CIVIL', 'hodsenga', 'senga321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`study_id`),
  ADD KEY `lecturer_id` (`lecturer_id`,`student_id`),
  ADD KEY `lecturer_id_2` (`lecturer_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `study`
--
ALTER TABLE `study`
  ADD CONSTRAINT `study_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`lecturer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `study_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
