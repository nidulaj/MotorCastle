-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 12:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motorcastle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'mc.admin@123'),
(3, 'reservation manager', 'reservationmanager@gmail.com', 'mc.rm@123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `ReservationID` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `entry_time` varchar(10) NOT NULL,
  `exit_time` varchar(10) NOT NULL,
  `vehicle_type` varchar(5) NOT NULL,
  `package_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`ReservationID`, `username`, `date`, `entry_time`, `exit_time`, `vehicle_type`, `package_type`) VALUES
(19, 'imasha', '2024-10-08', '11:23', '00:23', 'car', 'General'),
(21, 'imasha', '2024-09-13', '13:07', '13:07', 'cab', 'Premium'),
(22, 'dineth', '2024-10-10', '16:15', '15:15', 'car', 'General'),
(23, 'lakshani', '2024-09-13', '14:57', '14:58', 'car', 'General'),
(24, 'sahani', '2024-09-13', '14:59', '14:00', 'jeep', 'VIP'),
(25, 'shehani', '2024-09-12', '15:03', '15:05', 'car', 'General'),
(27, 'kk', '2024-09-12', '15:07', '15:08', 'car', 'General'),
(28, 'anura kuma', '2024-09-14', '15:10', '15:12', 'car', 'General'),
(29, 'kasun', '2024-09-06', '15:16', '15:16', 'car', 'General'),
(30, 'shehan', '2024-09-06', '15:23', '15:25', 'car', 'General'),
(31, 'asdasd', '2024-09-06', '15:26', '15:27', 'car', 'General'),
(32, 'ima', '2024-09-05', '17:20', '18:17', 'car', 'General'),
(34, 'imasha', '2024-06-09', '17:00', '23:00', 'car', 'General'),
(35, 'imasha', '2024-06-09', '17:00', '23:00', 'car', 'General'),
(36, 'chathurma', '2024-09-28', '23:44', '02:44', 'car', 'Premium'),
(37, 'chathurma', '2024-09-01', '22:50', '14:50', 'car', 'Premium'),
(38, 'Imasha Net', '2024-09-04', '11:11', '23:11', 'car', 'General'),
(39, 'sahan ', '2024-09-05', '11:11', '16:16', 'car', 'General'),
(40, 'abhisheka', '2024-09-30', '11:30', '02:30', 'car', 'General'),
(45, 'Nithumi', '2024-01-05', '11:11', '18:30', 'cab', 'General'),
(46, 'Nithumi', '2024-01-05', '11:11', '18:30', 'cab', 'General'),
(50, 'Nirmal', '2024-09-03', '05:30', '18:30', 'car', 'General'),
(53, 'Kasun', '2024-09-04', '23:30', '17:30', 'jeep', 'General'),
(54, 'Dewdula', '2024-09-05', '15:30', '17:30', 'car', 'General'),
(55, 'kavindu', '2024-10-25', '14:04', '14:04', 'car', 'General'),
(56, 'sadisa', '2024-10-07', '12:11', '18:30', 'jeep', 'Premium'),
(58, 'imasha', '2024-10-09', '10:39', '00:39', 'car', 'General'),
(60, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(61, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(62, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(63, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(64, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(65, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(66, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(67, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(68, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(69, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(70, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(71, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(72, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(73, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(74, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(75, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(76, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(77, 'I.L.N.Guna', '2024-10-05', '22:08', '01:08', 'car', 'General'),
(78, '', '0000-00-00', '', '', '', ''),
(79, 'supuna', '2024-10-09', '20:58', '22:58', 'car', 'Premium'),
(80, '', '2024-10-07', '10:00', '00:00', 'car', 'General'),
(81, '', '2024-10-07', '10:00', '00:00', 'car', 'General'),
(82, 'imeth12', '2024-10-07', '01:00', '03:00', 'car', 'General'),
(83, 'imasha', '2024-10-09', '11:22', '00:22', 'car', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirmed_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `Name`, `Contact_no`, `Email`, `DOB`, `Gender`, `Address`, `Username`, `Password`, `Confirmed_Password`) VALUES
(2, 'aaaaa', 714109600, 'nidula@gmail.com', '2024-10-25', 'male', 'gampaha', 'nidula', 'Password@123', 'Password@123'),
(3, 'Supun', 714109600, 'nidula@gmail.com', '2024-10-25', 'male', 'gampaha', 'nidula', 'Password@123', 'Password@123');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(5) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(5) NOT NULL,
  `package_name` varchar(30) NOT NULL,
  `package_description` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `package_unit` varchar(10) NOT NULL,
  `unit_price` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `available_vehicle_types` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_description`, `features`, `package_unit`, `unit_price`, `total_price`, `available_vehicle_types`) VALUES
(2, 'asadasdasd', 'sdasdasd', 'sadasdasd', 'none', 0, 100, 'Sedans'),
(3, 'sadsdasdsd', 'sadasdasdasdasd', 'zxxcdsscsd', 'daily', 20, 0, 'Compact cars');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Payment_method` varchar(10) NOT NULL,
  `Card_Number` int(10) NOT NULL,
  `Card_Name` varchar(10) NOT NULL,
  `Expiry_date` int(10) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`Payment_method`, `Card_Number`, `Card_Name`, `Expiry_date`, `cvv`) VALUES
('visa', 424353, 'hgjg', 12, 956),
('visa', 12345, '789', 90, 123),
('master', 3456, '9089', 9, 111),
('visa', 4567, 'kavin', 12, 109),
('visa', 4567, 'kavin', 12, 109),
('visa', 703881351, 'sadisa ras', 34, 888),
('visa', 2147483647, 'dineyh gsm', 1, 122),
('visa', 2147483647, 'dineyh gsm', 1, 122),
('visa', 1223, '34', 22, 434),
('visa', 123, 'asd', 90, 343),
('visa', 8645123, 'ima', 22, 789),
('visa', 8645123, 'ima', 22, 789),
('visa', 2147483647, 'chathurma ', 11, 111),
('visa', 11111111, 'chathurma', 11, 111),
('visa', 11111111, 'chathurma', 11, 111),
('visa', 465312, 'ima', 11, 222),
('visa', 654351246, 'sahan', 6, 456),
('visa', 123456789, 'A.Wijesing', 11, 123),
('visa', 2147483647, 'dew', 11, 555),
('visa', 96453213, 'ima', 11, 456),
('visa', 2147483647, 'nethmi', 11, 123),
('visa', 2147483647, 'K.D.Athapa', 11, 456),
('visa', 2147483647, 'K.D.Athapa', 11, 456),
('visa', 2147483647, 'nirmal', 12, 789),
('visa', 2147483647, 'amal', 11, 456),
('visa', 2147483647, 'koffy', 11, 123),
('master', 2147483647, 'dew', 11, 789),
('visa', 1234, 'ima', 23, 123),
('visa', 2147483647, 'sadii', 11, 456),
('master', 1111111111, 'Dinujaya', 11, 898),
('master', 1111111111, 'Dinujaya', 11, 898),
('master', 1111111111, 'Dinujaya', 11, 898),
('master', 1111111111, 'Dinujaya', 11, 898),
('visa', 123213123, 'cxzcxzc', 2, 111),
('visa', 123213123, 'cxzcxzc', 2, 111),
('visa', 123213123, 'cxzcxzc', 2, 111),
('visa', 123444, 'asdasdas', 2, 123),
('visa', 2147483647, 'supun', 9, 80),
('master', 2147483647, 'blah blah', 224, 22),
('visa', 11222, 'nidula', 2, 111);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Vehicletype` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Address`, `Age`, `Gender`, `Vehicletype`, `Email`, `Username`, `Password`) VALUES
(1, 'nidula', 'gampaha', 21, 'male', 'car', 'nidulajayalath@gmail.com', 'nidula', '12345'),
(2, 'luhith', 'Delgoda', 20, 'male', 'motorcycle', 'luhith.himsara04@gmail.com', 'luhith', 'luhith3420'),
(3, 'Tharindu', 'Deniyaya, Matara', 20, 'male', 'car', 'agiliyagetharindu@gmail.com', 'tharindu18', 'TharinduDT18++'),
(4, 'tharushi', '36/3 kolamunna, piliyandala', 24, 'female', 'car', 'tharushinimnadi3@gmail.com', 'tharushi', '0714166689tr'),
(6, 'kiven', 'no.23/,mahara,kadawatha.', 21, 'male', 'car', 'kiven@gmail.com', 'Kiven', 'kiven@123'),
(7, 'dasu', 'udanaluwela, balangoda', 22, 'female', 'car', 'dasunika@gmail.com', 'abc', '12345'),
(8, 'lakshi', '9/A, dutugamunu mawathe, lewalle, kandy', 22, 'female', 'motorcycle', 'lakshikookie@gmail.com', 'I.L.N.Gunarathne', 'lakshi123'),
(9, 'Mihan', 'Malabe', 22, 'male', 'car', 'mihanmaneth2019@gmail.com', 'mihan', '321'),
(10, 'dinujaya', 'maharagama', 22, 'male', 'van', 'mdsupunananda@gmail.com', 'dinujaya', 'Password@234'),
(11, 'Dinujaya', 'highlevel rd, Maharagama', 22, 'male', 'car', 'ds@gmail.com', 'supuna', 'Pass'),
(12, 'Imeth', 'main street ,malabe.', 21, 'male', 'car', 'imeth@gmail.com', 'imeth12', 'Imeth1212'),
(13, 'test', '12/test addr/12', 17, 'male', 'car', 'test@test.com', 'test', 'test@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`ReservationID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `ReservationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
