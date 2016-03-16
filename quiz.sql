-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 01:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE IF NOT EXISTS `mst_user` (
  `user_id` varchar(5) NOT NULL,
  `login` varchar(10) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `phone`, `email`) VALUES
('1', 'neha', 'neha', 'neha', 'deogarh', 12345, 'neha.deogarh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
 ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
