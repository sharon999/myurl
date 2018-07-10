-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 04:36 PM
-- Server version: 5.5.39
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myurl`
--

-- --------------------------------------------------------

--
-- Table structure for table `mylinks`
--

CREATE TABLE `mylinks` (
  `short_url` varchar(11) COLLATE utf8_bin NOT NULL,
  `url` varchar(30) COLLATE utf8_bin NOT NULL,
  `datecreated` date NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mylinks`
--

INSERT INTO `mylinks` (`short_url`, `url`, `datecreated`, `id`) VALUES
('RH', 'https://www.ynet.co.il', '2018-07-10', 2),
('wj', 'https://www.walla.co.il', '2018-07-10', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mylinks`
--
ALTER TABLE `mylinks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mylinks`
--
ALTER TABLE `mylinks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
