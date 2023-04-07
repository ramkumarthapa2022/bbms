-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 08:55 AM
-- Server version: 8.0.32
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donatetheblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `blood_group` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `blood_group`, `gender`, `birth_date`, `email`, `contact_no`, `city`, `password`, `role_id`) VALUES
(5, 'Ram Thapa', 'A+', 'Male', '1972-08-14', 'ram@gmail.com', '9865656565', 'ranipauwa', '123456', 1),
(6, 'prasanna banstola', 'B+', 'Male', '1969-02-13', 'prasanna@gmail.com', '9876465456', 'sitapaila', '987456', 1),
(7, 'ram', 'A-', 'Male', '1959-06-05', 'ramk@gmail.com', '9865656565', 'kritipur', '147258', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int UNSIGNED NOT NULL,
  `role_id` int NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `can_view` tinyint(1) NOT NULL DEFAULT '0',
  `can_edit` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `page_name`, `can_view`, `can_edit`, `can_delete`) VALUES
(7, 1, 'dashboard.php', 1, 0, 0),
(8, 1, 'profile.php', 1, 1, 1),
(9, 1, 'donations.php', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `role_id` int NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `name`, `email`, `password`, `blood_type`, `role_id`) VALUES
(1, 'safhj', 'gautamhari332@gmail.com', 'Ram@12', 'AB+', 3),
(2, 'safhj', 'gautamhari332@gmail.com', 'Ram@12', 'AB+', 3),
(3, 'safhj', 'gautamhari332@gmail.com', 'Ram@12', 'AB+', 3),
(4, 'safhjakfh', 'gautamhahfri332@gmail.com', 'Ram@12ashfa', 'B-', 3),
(5, 'safhjakfh', 'gautamhahfri332@gmail.com', 'Ram@12ashfa', 'B-', 3),
(6, 'kumar', 'kumar@gmail.com', '$2y$10$DkZR.NoWH84fDH4MpfOHy.1qQnEIVEy8g8T2Rh5/brMIZaYgnv/QW', 'A+', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `description`, `role_id`) VALUES
(1, 'Donor', 'A regular donor with limited access', 1),
(2, 'Staff', 'A staff member with access to additional features', 2),
(3, 'Receptionist', 'Responsible for managing front desk operations and assisting visitors', 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fullname`, `email`, `password`, `role_id`) VALUES
(1, 'bkhn', 'jhbkhbkn@gj.vom', '$2y$10$vNAUl72uJqxWs.QV71QY/eEc0fHr2sGLXrXTEU/uxdOtmPR4cJ/jO', 2),
(3, 'ram thapa', 'ram@gmail.com', '$2y$10$ZbERXaZ4eoCS1L8E1KuYH.RQQfkSVcOuTorEuDxc76.BQh9SpmD7G', 2),
(5, 'ram thapa', 'ramk@gmail.com', '$2y$10$vVmT/WO6El.wz3yrecCdWuWU4xJhyLIN3TO/aRqT9OwFQNWzNJdEm', 2),
(7, 'ram thapa', 'ramku@gmail.com', '$2y$10$cc6RGIUTwlbm7wKACt39aeJSfVme2PUOaWck9CMPOrso8ya3s4J8K', 2),
(8, 'ram thapa', 'ramkum@gmail.com', '$2y$10$3hZtvFhCpYPr8tHo3vVw9uvbeoH.pXKJatidASY6cfyMkfxAXIjZG', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donor_role` (`role_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_permissions_role` (`role_id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_receptionists_role_new` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_staff_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_donor_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `fk_permissions_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD CONSTRAINT `fk_receptionists_role_new` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_staff_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
