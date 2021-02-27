-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 05:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prayaas`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry_details`
--

CREATE TABLE `entry_details` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry_details`
--

INSERT INTO `entry_details` (`first_name`, `last_name`, `email`, `feedback`) VALUES
('Jayesh', 'Mahale', 'jayeshmahale94@gmail.com', 'hello'),
('Jayesh', 'Mahale', 'jayeshmahale94@gmail.com', 'hello'),
('Jayesh', 'Mahale', 'jayeshmahale94@gmail.com', 'hello123'),
('jayesh', 'mahale', 'jayeshmahale94@gmail.com', 'hello 123'),
('Jayesh', 'Mahale', 'jayeshmahale94@gmail.com', '12hee4'),
('Jayesh', 'Mahale', 'jayeshmahale94@gmail.com', 'abc'),
('abns', '', '', ''),
('dsfsf', 'sda ', 'dsfsdsd@gmail.com', 'abcd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
