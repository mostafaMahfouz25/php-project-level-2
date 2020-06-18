-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 11:06 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'mostafa mahfouz', 'm@m.com', '$2y$10$dVxjEsh0PTkHS65UxWyi0eCotNhayFL4fdULfe9WBAUI6mX0/1h26'),
(2, 'alaa ali', 'a@a.com', '$2y$10$TzJ7cNWY3syWHsnPi3JMve.TEroNXAIwGXbCk8pDB1EGcpw.vUNUu');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(12, 'Web Development'),
(13, 'Programming'),
(14, 'Design'),
(15, 'Arts'),
(16, 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `co_id` int(11) NOT NULL,
  `co_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_category_id` int(11) NOT NULL,
  `co_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`co_id`, `co_title`, `co_category_id`, `co_description`, `co_image`, `co_created_at`) VALUES
(8, 'First Course', 12, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '1592427456108909.jpg', '2020-06-17 19:07:48'),
(9, 'Second Course', 12, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '1592438079406050.jpg', '2020-06-17 19:08:10'),
(10, 'Third Course', 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '159242445473464.png', '2020-06-17 19:08:25'),
(11, 'Fourth Course', 13, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '159242744525775.jpg', '2020-06-17 19:08:40'),
(12, 'New Data', 12, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '1592438105295036.jpg', '2020-06-17 19:08:55'),
(13, 'Another Course', 12, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '1592437488181538.jpg', '2020-06-17 23:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mes_id` int(11) NOT NULL,
  `mes_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mes_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mes_subject` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mes_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mes_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mes_id`, `mes_name`, `mes_email`, `mes_subject`, `mes_message`, `mes_created_at`) VALUES
(1, 'mostafa mahfouz', 'm@m.com', 'new message', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '2020-06-17 15:27:01'),
(3, 'Nader Ahmad', 'n@n.com', 'New Subject', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2020-06-18 00:22:25'),
(4, 'naglaa ahmad', 'naglaa@n.com', 'another subject', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2020-06-18 00:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `res_co_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `res_status` tinyint(1) NOT NULL,
  `res_created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`res_id`, `res_co_id`, `name`, `phone`, `email`, `res_status`, `res_created_at`) VALUES
(1, 9, 'mostafa mahfouz', '01025265899', 'mahfouzm25@gmail.com', 0, 0),
(4, 12, 'alaa ali', '01142568591', 'alaa@a.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `co_category_id` (`co_category_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mes_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`co_category_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
