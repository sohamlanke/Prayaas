-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 06:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `cid` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description1` longtext NOT NULL,
  `description2` longtext NOT NULL,
  `filename` varchar(100) NOT NULL,
  `status` text NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`cid`, `title`, `description1`, `description2`, `filename`, `status`) VALUES
(32, 'Rally for Rivers', 'The Rally for Rivers is an awareness campaign initiated by Jaggi Vasudev of Isha Foundation. ... In simple terms, the premise of the policy is to increase the amount of water flow in the rivers through tree plantation for a minimum of one kilometre width on either side of rivers and half a kilometre for tributaries.', 'tp', 'unnamed.png', 'Active'),
(35, 'green india', 'Increase forest cover on 5 mha of forest/non-forest lands\r\n•Improve quality of forest cover on another 5 mha\r\n•Improve ecosystem services including biodiversity,\r\nhydrological services, provisioning of fuel, fodder, timber\r\nand NTFP\r\n', 'tp', 'download.jpg', 'Deactive'),
(36, 'Sample Campaign', 'hbdshbifsbj', 'tp', '3.png', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `did` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`did`, `cid`, `name`, `amount`, `email`) VALUES
(17, 32, 'Prasad', '5001.00', 'prasad@gmail.com'),
(18, 32, 'Soham', '1001.00', 'soham@gmail.com'),
(19, 35, 'Rahul', '1002.00', 'rahul@gmail.com'),
(20, 32, 'arjun', '5001.00', 'arjun@gmail.com'),
(21, 32, 'Pce', '5001.00', 'pce@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `email`, `mobile`, `date`) VALUES
(1, 'Rahul', '', 0, '0000-00-00'),
(2, 'Rahul', '', 0, '0000-00-00'),
(3, 'dxhjbasj', 'sdjcbs', 2147483647, '0000-00-00'),
(4, 'dxhjbasj', 'sdjcbs', 98215648, '0000-00-00'),
(5, 'dxhjbasj', 'sdjcbs', 2147483647, '2000-08-01'),
(10, 'dxhjbasj', 'sdjcbs', 2147483647, '2000-08-01'),
(200, 'hvhbhj', 'gcvghvh', 85222, '2000-08-01'),
(201, 'hvhbhj', 'gcvghvh', 85222, '2000-08-01'),
(205, 'hvhbhj', 'gcvghvh', 85222, '2000-08-01'),
(206, 'hvhbhj', 'gcvghvh', 85222, '2000-08-01'),
(207, 'hvhbhj', 'gcvghvh', 85222, '2000-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `emailUsers`, `pwdUsers`) VALUES
(26, 'example@gmail.com', '$2y$10$JUfVCqee/nEtHOsN5S4AIuwZTTQWWWc.mtYS19ZtuSmHrri/CHJte');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `age` int(11) NOT NULL,
  `location` mediumtext NOT NULL,
  `checkbox` tinytext NOT NULL DEFAULT '\'no\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vid`, `name`, `email`, `age`, `location`, `checkbox`) VALUES
(1, 'Soham Lanke', 'soham@gmail.com', 20, 'Mumbai', 'yes'),
(2, 'Arjun', 'arjun@gmail.com', 20, 'Pune', 'yes'),
(10, 'Hrishi', 'hrishi@gmail.com', 20, 'Mumbai', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
