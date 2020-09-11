-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 10:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyumbani`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `pass`, `email`) VALUES
('Brian Yator', 'c4ca4238a0b923820dcc509a6f75849b', 'yatoriz24@gmail.com'),
('yator', 'c4ca4238a0b923820dcc509a6f75849b', 'brian@email.com'),
('Harry', '2510c39011c5be704182423e3a695e91', 'h@harry.com');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `location` varchar(40) NOT NULL,
  `contract_type` varchar(40) NOT NULL,
  `agent` varchar(50) NOT NULL,
  `area` int(30) NOT NULL,
  `rooms` int(30) NOT NULL,
  `bedrooms` int(10) NOT NULL,
  `bathrooms` int(20) NOT NULL,
  `garages` int(10) NOT NULL,
  `parking_lots` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `property_type`, `location`, `contract_type`, `agent`, `area`, `rooms`, `bedrooms`, `bathrooms`, `garages`, `parking_lots`, `price`, `city`) VALUES
(1, 'Merick Way', 'House', '3 Winchendron Rd, NH 03463', 'Rent', 'Mwemusi', 1100, 9, 4, 3, 1, 2, 300, 'Nairobi'),
(2, 'Maskville', 'house', 'Kiambu Road near village market', 'rent', 'Sandra', 900, 10, 3, 4, 1, 2, 1000, 'nairobi'),
(3, 'Yogamat', 'villa', 'Thika Rd', 'rent', 'Brian Yator', 21002, 10, 3, 2, 4, 10, 100000, 'Thika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
