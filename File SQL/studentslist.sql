-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 07:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentslist`
--

--
-- Dumping data for table `attendance_slots`
--

INSERT INTO `attendance_slots` (`id`, `slotid`, `date`, `classId`, `subject`, `created_at`, `updated_at`) VALUES
(1, '22222', '8h-12h', 'T1707M', 'PHP', NULL, NULL),
(2, 'ASF2', '20655', 'T1708A', '13h30-17h30', NULL, NULL),
(3, 'EJB', '20656', 'T1608E', '17h30-21h', NULL, NULL);

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classId`, `start`, `status`, `created_at`, `updated_at`) VALUES
(1, 'T1707M', '20-10-2017', 1, NULL, NULL),
(2, 'T1708D', '20-11-2017', 1, NULL, NULL),
(3, 'T1709H', '20-12-2017', 1, NULL, NULL);

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_30_040724_create_students_table', 1),
(4, '2018_05_30_041554_create_attendance_slots_table', 2);

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `rollnumber`, `created_at`, `updated_at`) VALUES
(1, 'Ngọc Huy', 'A001', NULL, NULL),
(2, 'Vũ Hoàng', 'A001', NULL, NULL),
(3, 'Quỳnh Anh', 'A002', NULL, NULL),
(4, 'Ngô Lộc', 'A003', NULL, NULL),
(5, 'Bình Minh', 'A004', NULL, NULL),
(6, 'Phan Hùng', 'A005', NULL, NULL),
(7, 'Ngọc Thảo', 'A006', NULL, NULL),
(8, 'Đình Thái', 'A007', NULL, NULL);

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`id`, `rollnumber`, `classId`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A001', 'T1707M', '20-10-2017', 1, NULL, NULL),
(2, 'A002', 'T1707M', '20-10-2017', 1, NULL, NULL),
(3, 'A003', 'T1707M', '20-10-2017', 1, NULL, NULL),
(4, 'A004', 'T1707M', '20-10-2017', 1, NULL, NULL),
(5, 'A005', 'T1707M', '20-10-2017', 1, NULL, NULL),
(6, 'A006', 'T1707M', '20-10-2017', 1, NULL, NULL);

--
-- Dumping data for table `timeslots`
--

INSERT INTO `timeslots` (`id`, `slotId`, `timeslot`, `created_at`, `updated_at`) VALUES
(1, '1', '8h-12h', NULL, NULL),
(2, '2', '13h-17h', NULL, NULL),
(3, '3', '18h-21h', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
