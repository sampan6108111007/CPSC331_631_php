-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 06:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_fname` varchar(20) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_lname` varchar(100) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_phone` varchar(20) NOT NULL,
  `m_level` varchar(10) NOT NULL,
  `m_datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`m_id`, `m_username`, `m_password`, `m_fname`, `m_name`, `m_lname`, `m_email`, `m_phone`, `m_level`, `m_datesave`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'นาย', 'rrrr', 'rrrr', 'samrrrrpan@gmail.com', '12345678', 'admin', '2020-09-23 18:31:08'),
(2, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'นาย', 'ffffrrr', 'ggggrrrr', 'sampan@gmail.com', '123456799', 'member', '2020-09-23 18:35:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
