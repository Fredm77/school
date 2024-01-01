-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 05:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `aid` bigint(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `official` varchar(20) DEFAULT NULL,
  `official_num` varchar(25) DEFAULT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`aid`, `email`, `official`, `official_num`, `sid`) VALUES
(1, 'mukizafred@gmail.com', 'passport', '78647864375', 1),
(11, 'bajenezavalentin@gmail.com', 'Passport', '4678889765', 62),
(13, 'mukizafred7@gmail.com', 'Passport', '4678889765', 64);

-- --------------------------------------------------------

--
-- Table structure for table `dob`
--

CREATE TABLE `dob` (
  `dobid` bigint(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `village` varchar(20) NOT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dob`
--

INSERT INTO `dob` (`dobid`, `province`, `district`, `sector`, `cell`, `village`, `sid`) VALUES
(1, 'eastern', 'ngoma', 'sake ', 'rukoma', 'nyagasozi', 1),
(25, 'eastern', 'ngoma', 'sake', 'rukoma', 'nyagasozi', 62),
(27, 'eastern', 'ngoma', 'sake', 'rukoma', 'nyagasozi', 64);

-- --------------------------------------------------------

--
-- Table structure for table `fathers`
--

CREATE TABLE `fathers` (
  `fid` bigint(20) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `fnid` varchar(25) DEFAULT NULL,
  `ftel` varchar(15) DEFAULT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fathers`
--

INSERT INTO `fathers` (`fid`, `fname`, `fnid`, `ftel`, `sid`) VALUES
(1, 'NGIRABAKUNZI DEO', '11963865657645', '072689786', 1),
(14, 'NGIRABAKUNZI Deo', '119638765654587', '+25072876557', 62),
(16, 'NGIRABAKUNZI Deo', '119638765654587', '+25072876557', 64);

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `gid` int(11) NOT NULL,
  `gname` varchar(40) DEFAULT NULL,
  `gnid` varchar(25) DEFAULT NULL,
  `gtel` varchar(15) DEFAULT NULL,
  `sid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`gid`, `gname`, `gnid`, `gtel`, `sid`) VALUES
(13, '', '', '', 62),
(15, '', '', '', 64);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `infoid` bigint(20) NOT NULL,
  `insurance` varchar(30) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `sport` varchar(40) DEFAULT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`infoid`, `insurance`, `religion`, `sport`, `sid`) VALUES
(1, 'rssb', 'catholic', 'football', 1),
(4, 'rssb', 'catholic', 'football', 62),
(6, 'rssb', 'catholic', 'football', 64);

-- --------------------------------------------------------

--
-- Table structure for table `mothers`
--

CREATE TABLE `mothers` (
  `mid` bigint(20) NOT NULL,
  `mname` varchar(40) DEFAULT NULL,
  `mnid` varchar(25) DEFAULT NULL,
  `mtel` varchar(15) DEFAULT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mothers`
--

INSERT INTO `mothers` (`mid`, `mname`, `mnid`, `mtel`, `sid`) VALUES
(1, 'MUKANDEREYIMANA EPIPHANIE', '1196874567675', '0728878895', 1),
(14, 'MUKANDEREYIMANA Epiphanie', '11968875447827', '+25072894234', 62),
(16, 'MUKANDEREYIMANA Epiphanie', '11968875447827', '+25072894234', 64);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `sid` bigint(20) NOT NULL,
  `names` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `disability` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`sid`, `names`, `gender`, `dob`, `nationality`, `disability`) VALUES
(1, 'MUKIZA Fred ', 'M', '2016-12-23', 'rwandan', NULL),
(18, 'MUKIZA Fred', 'male', '2023-12-02', 'rwandan', ''),
(62, 'BAJENEZA Valentin', 'M', '2023-12-23', 'rwandan', ''),
(64, 'MUKIZA Fred', 'M', '2024-01-01', 'rwandan', '');

-- --------------------------------------------------------

--
-- Table structure for table `prev_school`
--

CREATE TABLE `prev_school` (
  `pid` bigint(20) NOT NULL,
  `district` varchar(20) DEFAULT NULL,
  `sector` varchar(20) DEFAULT NULL,
  `schoolName` varchar(40) NOT NULL,
  `class` varchar(15) NOT NULL,
  `aYear` varchar(15) DEFAULT NULL,
  `agg` int(11) NOT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prev_school`
--

INSERT INTO `prev_school` (`pid`, `district`, `sector`, `schoolName`, `class`, `aYear`, `agg`, `sid`) VALUES
(1, 'karongi', 'murambi', 'es kirinda', 's3', '2020-2021', 8, 1),
(6, 'huye', 'huye', 'gso butare', 's3', '2015', 9, 62),
(8, 'karongi', 'murambi', 'es kirinda', 's3', '2020-2021', 8, 64);

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE `residence` (
  `rid` bigint(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `village` varchar(20) NOT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residence`
--

INSERT INTO `residence` (`rid`, `district`, `sector`, `cell`, `village`, `sid`) VALUES
(1, 'karongi', 'murambi', 'shyembe', 'kirinda', 1),
(8, 'ngoma', 'sake', 'rukoma', 'nyagasozi', 62),
(10, 'ngoma', 'sake', 'rukoma', 'nyagasozi', 64);

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

CREATE TABLE `sponsorship` (
  `spid` bigint(20) NOT NULL,
  `stype` varchar(30) DEFAULT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsorship`
--

INSERT INTO `sponsorship` (`spid`, `stype`, `sid`) VALUES
(1, 'self-sponsored', 1),
(7, 'KOICA', 62),
(9, 'self-sponsored', 64);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pasword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pasword`) VALUES
(1, 'mukiza', 'fred');

-- --------------------------------------------------------

--
-- Table structure for table `vistors`
--

CREATE TABLE `vistors` (
  `vid` bigint(20) NOT NULL,
  `names` varchar(40) NOT NULL,
  `relation` varchar(20) DEFAULT NULL,
  `sid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vistors`
--

INSERT INTO `vistors` (`vid`, `names`, `relation`, `sid`) VALUES
(1, 'ngirabakunzi deo', 'father', 1),
(2, 'ndizihiwe laurent', 'brother', 1),
(3, 'mukamasabo odette', 'sister', 1),
(30, 'NDIZIHIWE Laurent', 'brother', 62),
(31, 'MUKAMASABO Odette', 'sister', 62),
(32, 'NGIRABAKUNZI Deo', 'Father', 62),
(36, 'NDIZIHIWE Laurent', 'brother', 64),
(37, 'MUKAMASABO Odette', 'sister', 64),
(38, 'NGIRABAKUNZI Deo', 'Father', 64);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `dob`
--
ALTER TABLE `dob`
  ADD PRIMARY KEY (`dobid`);

--
-- Indexes for table `fathers`
--
ALTER TABLE `fathers`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`infoid`);

--
-- Indexes for table `mothers`
--
ALTER TABLE `mothers`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `prev_school`
--
ALTER TABLE `prev_school`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `residence`
--
ALTER TABLE `residence`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vistors`
--
ALTER TABLE `vistors`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `aid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dob`
--
ALTER TABLE `dob`
  MODIFY `dobid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `fathers`
--
ALTER TABLE `fathers`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `infoid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mothers`
--
ALTER TABLE `mothers`
  MODIFY `mid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `sid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `prev_school`
--
ALTER TABLE `prev_school`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `residence`
--
ALTER TABLE `residence`
  MODIFY `rid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sponsorship`
--
ALTER TABLE `sponsorship`
  MODIFY `spid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vistors`
--
ALTER TABLE `vistors`
  MODIFY `vid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
