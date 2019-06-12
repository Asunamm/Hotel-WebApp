-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2019 at 01:22 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1-log
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2201713130113`
--

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`id`, `name`) VALUES
(1, 'Engineer'),
(2, 'Concierge'),
(3, 'Housekeep'),
(4, 'Bistro'),
(5, 'Tao’s Hotpot'),
(6, ' Landscap'),
(7, 'Spa'),
(8, 'Gym'),
(9, 'Aquatic pool');

-- --------------------------------------------------------

--
-- Table structure for table `Facilities`
--

CREATE TABLE `Facilities` (
  `id` int(11) NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Facilities`
--

INSERT INTO `Facilities` (`id`, `category`, `name`, `description`) VALUES
(1, 'facility', 'Olympic Size Swimming Pool', 'A luxurious olympic size swimming pool complete with diving board.'),
(2, 'facility', 'Lap Pool', 'A lane divided swimming pool for all your aquatic exercise needs '),
(3, 'facility', 'Al’s Gym', 'A full gym, complete with personal trainers and all the equipment a gym should have.'),
(4, 'facility', 'Al’s Spa', 'A luxurious full spa service, where you can feel pampered, and cared for.'),
(5, 'facility', 'Golf Course', 'An 18 course gulf course! Book your time well in advance! This is a very popular course!'),
(6, 'food', 'Italian Bistro', 'A bistro like no other! With lavish flavors and amazing culinary dishes!'),
(7, 'food', 'In House Kitchen', 'Try our unique dishes, made in our in house kitchen, exclusively for room service. Service to guest rooms, poolside, and so on.'),
(8, 'Lodgings', '20 Single bed room', 'Complete with a minibar, 52” TV, desk, balcony, full bath (with jacuzzi)'),
(9, 'Lodgings', '10 Deluxe Rooms', 'These rooms come complete with all amenitites of the single bed rooms, but with an added second room, which can be conerted to a bedroom, meeting room, or other upon customer request. (24 hour notice is required to make changes to second room)\r\n\r\n'),
(10, 'Lodgings', 'three Presidential Suites', 'These are the pride and joy of the hotel. Complete with their own hottub, direct access to the pool (via a private hallway), 3 seperate rooms which can all be configured in any way the customer requests, full suite of channels, and much much more.\r\n'),
(11, 'Meeting halls', 'three Convention Halls', 'Each convention hall has an area of 2,000 square meters, as well as access to tables, chairs, podiums, stages, etc as needed! As well as access to a full PA\r\nsystem.\r\n'),
(12, 'Meeting Halls', 'five meeting halls', 'These meeting halls are smaller, yet useful facilities for hosting your professional meetings, and for spill over from a major convetion in the convention halls! With an area of 150s quare meters, there is still plenty of room for all of your meeting needs!'),
(13, 'food', 'Tao’s Hotpot', ' Treat yourself to a Sezchuan classic, hotpot! With a bit of spice and some\r\nfriends, you’re in for a great evening!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Finace`
--

CREATE TABLE `Finace` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prince` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Finace`
--

INSERT INTO `Finace` (`id`, `type`, `prince`, `quantity`, `date`) VALUES
(1, 'steer', '500', 10, '2017-06-21'),
(2, 'tires', '1500', 6, '2017-07-15'),
(3, 'brakes', '800', 12, '2017-07-20'),
(4, 'steer', '1200', 8, '2017-08-03'),
(5, 'tires', '2000', 4, '2017-08-10'),
(6, 'brakes', '600', 8, '2017-06-20'),
(7, 'steer', '1400', 6, '2017-08-23'),
(8, 'tires', '3000', 2, '2017-09-03'),
(9, 'brakes', '400', 6, '2017-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`id`, `name`, `department_no`) VALUES
(1, ' Malcom', 1),
(2, 'Steven Zhang', 2),
(3, 'Elizabeth Chen', 3),
(4, 'Alejandro Guillermo', 4),
(5, 'Chen Baizhang', 5),
(6, 'Donald Allen', 6),
(7, 'Ella Castilla', 7),
(8, 'Ella Castilla', 8),
(9, 'Shia Black', 9);

-- --------------------------------------------------------

--
-- Table structure for table `Order_list`
--

CREATE TABLE `Order_list` (
  `id` int(11) NOT NULL,
  `room` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_time_start` date NOT NULL,
  `order_time_end` date NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Order_list`
--

INSERT INTO `Order_list` (`id`, `room`, `order_time_start`, `order_time_end`, `category`, `staff_id`) VALUES
(1, 'D105', '2019-05-01', '2019-05-03', 'Deluxe Room', 8),
(2, 'D303', '2019-05-04', '2019-05-05', 'Deluxe Room', 7),
(3, 'S305', '2019-05-02', '2019-05-08', 'Single bed room', 4),
(4, 'P201', '2019-05-14', '2019-05-15', 'Presidential Suite', 2),
(5, 'S406', '2019-05-13', '2019-05-20', 'Single bed room', 12),
(6, 'P401', '2019-05-09', '2019-05-11', 'Presidential Suite', 2),
(7, 'P201', '2019-05-22', '2019-05-25', 'Presidential Suite', 3),
(8, 'S204', '2019-05-22', '2019-05-28', 'Single bed room', 6),
(9, 'S204', '2019-05-27', '2019-05-31', 'Single bed room', 11),
(10, 'P101', '2019-05-29', '2019-05-31', 'Presidential Suite', 16),
(11, 'D301', '2019-05-09', '2019-05-13', 'Deluxe Room', 9),
(12, 'D306', '2019-05-15', '2019-05-21', 'Deluxe Room', 8),
(13, 'D105', '2019-05-12', '2019-05-18', 'Deluxe Room', 7),
(14, 'D303', '2019-05-27', '2019-05-31', 'Deluxe Room', 9),
(15, 'D303', '2019-05-04', '2019-05-13', 'Deluxe Room', 8),
(16, 'D303', '2019-05-07', '2019-05-15', 'Deluxe Room', 7),
(17, 'D105', '2019-05-15', '2019-05-20', 'Deluxe Room', 8),
(18, 'D301', '2019-05-14', '2019-05-25', 'Deluxe Room', 7);

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_no` int(11) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`id`, `name`, `post`, `department_no`, `location`) VALUES
(1, 'Shamus', 'Lead', 1, 12),
(2, 'Li Bai', 'Assistant', 1, 10),
(3, 'Lisa Smith', 'service', 1, 8),
(4, 'Allan Shepard', 'service', 1, 9),
(5, 'Shane Johnson', 'Bellhop', 2, 9),
(6, 'Ian Takishi', 'Bellhop', 2, 10),
(7, 'Mary Banderas', 'service', 3, 12),
(8, 'Trond Micheals', 'service', 3, 10),
(9, 'Carry Wood', 'service', 3, 11),
(10, 'Antonio Carmicheal', 'chef', 4, 6),
(11, 'Mia Nguyen', 'waiter', 4, 6),
(12, 'Ray Liotta', 'dish washer', 4, 6),
(13, 'Jason Lee', 'food prep', 5, 13),
(14, 'Michelle Huang', 'waitress', 5, 13),
(15, 'James Traun', 'chef', 5, 13),
(16, 'Chu Fei', 'landscaper', 6, 5),
(17, 'Michelle Rodriguez', 'services', 7, 4),
(18, 'Rayne Ortega', 'massage therapy', 7, 4),
(19, 'Hanna Hang', 'massage therapy', 7, 4),
(20, 'Kiki Watson', 'services', 8, 3),
(21, 'Josh Hutchinson', 'trainer', 8, 3),
(22, 'Ashlee Huang', 'trainer', 8, 3),
(23, 'Matthew Kane', 'services', 9, 1),
(24, 'Micah Thompson', 'Safety-lifeguard', 9, 2),
(25, 'Sarah Long', 'Safety-lifeguard', 9, 1),
(26, 'Li Bai', 'Assistant', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `schedule` date NOT NULL,
  `weekday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `staffNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `schedule`, `weekday`, `time_start`, `time_end`, `staffNo`) VALUES
(1, '2019-05-16', 'Thursday', '08:00:00', '16:00:00', 24),
(2, '2019-05-13', 'Monday', '14:00:00', '22:00:00', 5),
(3, '2019-05-13', 'Monday', '22:00:00', '08:00:00', 8),
(4, '2019-05-15', 'Wednesday', '08:00:00', '16:00:00', 6),
(5, '2019-05-17', 'Friday', '14:00:00', '22:00:00', 10),
(6, '2019-05-13', 'Monday', '08:00:00', '16:00:00', 12),
(7, '2019-05-13', 'Monday', '14:00:00', '22:00:00', 8),
(8, '2019-05-14', 'Tuesday', '16:00:00', '22:00:00', 4),
(9, '2019-05-14', 'Tuesday', '22:00:00', '08:00:00', 7),
(10, '2019-05-15', 'Wednesday', '08:00:00', '16:00:00', 13),
(11, '2019-05-15', 'Wednesday', '08:00:00', '16:00:00', 16),
(12, '2019-05-16', 'Thursday', '14:00:00', '22:00:00', 25),
(13, '2019-05-16', 'Thursday', '08:00:00', '16:00:00', 24),
(14, '2019-05-17', 'Friday', '08:00:00', '16:00:00', 16),
(15, '2019-05-17', 'Friday', '16:00:00', '22:00:00', 18),
(16, '2019-05-14', 'Tuesday', '22:00:00', '08:00:00', 25),
(17, '2019-05-16', 'Thursday', '14:00:00', '22:00:00', 23),
(18, '2019-05-20', 'Monday', '08:00:00', '16:00:00', 20),
(19, '2019-05-16', 'Thursday', '22:00:00', '08:00:00', 25),
(20, '2019-05-20', 'Monday', '14:00:00', '22:00:00', 23),
(21, '2019-05-20', 'Monday', '06:00:00', '14:00:00', 18),
(22, '2019-05-21', 'Tuesday', '14:00:00', '22:00:00', 21),
(23, '2019-05-21', 'Tuesday', '06:00:00', '14:00:00', 20),
(24, '2019-05-22', 'Wednesday', '08:00:00', '14:00:00', 22),
(25, '2019-05-22', 'Thursday', '14:00:00', '22:00:00', 23),
(26, '2019-05-23', 'Thursday', '08:00:00', '16:00:00', 14),
(27, '2019-05-23', 'Thursday', '06:00:00', '14:00:00', 13),
(28, '2019-05-23', 'Thursday', '14:00:00', '22:00:00', 14),
(29, '2019-05-23', 'Thursday', '22:00:00', '08:00:00', 25),
(30, '2019-05-24', 'Friday', '06:00:00', '14:00:00', 17),
(31, '2019-05-24', 'Friday', '14:00:00', '22:00:00', 18),
(32, '2019-05-21', 'Thursday', '22:00:00', '08:00:00', 15),
(33, '2019-05-22', 'Wednesday', '14:00:00', '22:00:00', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Facilities`
--
ALTER TABLE `Facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Finace`
--
ALTER TABLE `Finace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_no` (`department_no`);

--
-- Indexes for table `Order_list`
--
ALTER TABLE `Order_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_no` (`department_no`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffNo` (`staffNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Facilities`
--
ALTER TABLE `Facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Finace`
--
ALTER TABLE `Finace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Manager`
--
ALTER TABLE `Manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Order_list`
--
ALTER TABLE `Order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Manager`
--
ALTER TABLE `Manager`
  ADD CONSTRAINT `Manager_ibfk_1` FOREIGN KEY (`department_no`) REFERENCES `Department` (`id`);

--
-- Constraints for table `Order_list`
--
ALTER TABLE `Order_list`
  ADD CONSTRAINT `Order_list_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `Staff` (`id`);

--
-- Constraints for table `Staff`
--
ALTER TABLE `Staff`
  ADD CONSTRAINT `Staff_ibfk_1` FOREIGN KEY (`department_no`) REFERENCES `Department` (`id`),
  ADD CONSTRAINT `Staff_ibfk_2` FOREIGN KEY (`location`) REFERENCES `Facilities` (`id`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`staffNo`) REFERENCES `Staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
