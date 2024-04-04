-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2024 at 01:37 PM
-- Server version: 11.4.0-MariaDB
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vbstscale_usecure`
--

-- --------------------------------------------------------

--
-- Table structure for table `geovisitors`
--

CREATE TABLE `geovisitors` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `latitude` varchar(40) NOT NULL,
  `longitude` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `geovisitors`
--

INSERT INTO `geovisitors` (`id`, `ip_address`, `city`, `state`, `country`, `latitude`, `longitude`, `date`, `time`) VALUES
(1, '67.22.192.50', 'Sioux Center', 'Iowa', 'United States', '43.082', '-96.1747', '2024-03-19', '10:28:04.000000');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL COMMENT 'user_id',
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phonenumber` varchar(35) NOT NULL,
  `lastlogin` date NOT NULL,
  `userlevel` varchar(30) NOT NULL,
  `sessionid` varchar(50) NOT NULL,
  `loggedin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `phonenumber`, `lastlogin`, `userlevel`, `sessionid`, `loggedin`) VALUES
(2, 'Brian', 'Boothe', 'brianb', 'core@varlogix.net', 'goobers', '712-539-8064', '2024-03-27', '3', '0', '0'),
(3, 'Kyle', 'Reiesma', 'kyle', 'kyle@vbssys.com', 'vbsinc1', '712-539-8883', '2024-03-29', '6', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `otp-sessions`
--

CREATE TABLE `otp-sessions` (
  `otpid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otpvalue` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='OTP Varification';

-- --------------------------------------------------------

--
-- Table structure for table `seclevels`
--

CREATE TABLE `seclevels` (
  `secid` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `seclevel` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seclevels`
--

INSERT INTO `seclevels` (`secid`, `Name`, `seclevel`) VALUES
(1, ' Employee', '6'),
(2, ' Supervisor', '5'),
(3, ' Management', '4'),
(4, 'Officemngr', '3'),
(5, 'FrontOffice', '2'),
(6, 'Admin', '1'),
(7, 'grover', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userlevel` varchar(30) NOT NULL,
  `sessionid` varchar(100) NOT NULL,
  `lastlogin` varchar(50) NOT NULL,
  `loggedin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `phonenumber`, `email`, `userlevel`, `sessionid`, `lastlogin`, `loggedin`) VALUES
(5, 'Nick', 'wattenville', 'nickw', 'vbsinc1', '7125397865', 'nick@vbssys.com', 'Supervisor', '', '0', '0'),
(7, 'Isaac', 'bandstra', 'isaacb', '0d900790e1ab3ab12c695b00d570a609', '7125391234', 'issacc@vbssys.com', 'Supervisor', '', '0', '0'),
(8, 'gale', 'smith', 'gails', '0d900790e1ab3ab12c695b00d570a609', '7125397678', 'sales@vbsys.com', 'Officemanager', '', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geovisitors`
--
ALTER TABLE `geovisitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp-sessions`
--
ALTER TABLE `otp-sessions`
  ADD PRIMARY KEY (`otpid`) USING BTREE;

--
-- Indexes for table `seclevels`
--
ALTER TABLE `seclevels`
  ADD PRIMARY KEY (`secid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geovisitors`
--
ALTER TABLE `geovisitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user_id', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `otp-sessions`
--
ALTER TABLE `otp-sessions`
  MODIFY `otpid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seclevels`
--
ALTER TABLE `seclevels`
  MODIFY `secid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
