-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2017 at 08:59 AM
-- Server version: 5.5.57-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autumn_rohan`
--

-- --------------------------------------------------------

--
-- Table structure for table `share_random_image`
--

CREATE TABLE `share_random_image` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `description` varchar(160) NOT NULL,
  `image` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share_random_image`
--

INSERT INTO `share_random_image` (`id`, `title`, `description`, `image`, `url`) VALUES
(1, 'title one', 'description one', 'one.jpg', ''),
(2, 'title two', 'description two', 'two.jpg', ''),
(3, 'title three', 'description three', 'three.jpg', ''),
(4, 'title four', 'description four', 'four.jpg', ''),
(5, 'title five', 'description five', 'five.jpg', ''),
(6, 'title six', 'description six', 'six.jpg', ''),
(7, 'title seven', 'description seven', 'seven.jpg', ''),
(8, 'title eight', 'description eight', 'eight.jpg', ''),
(9, 'title nine', 'description nine', 'nine.jpg', ''),
(10, 'title ten', 'description ten', 'ten.jpg', ''),
(11, 'title eleven', 'description eleven', 'eleven.jpg', ''),
(12, 'title twelve', 'description twelve', 'twelve.jpg', ''),
(13, 'title thirteen', 'description thirteen', 'thirteen.jpg', ''),
(14, 'title fourteen', 'description fourteen', 'fourteen.jpg', ''),
(15, 'title fifteen', 'description fifteen', 'fifteen.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `share_random_image`
--
ALTER TABLE `share_random_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `share_random_image`
--
ALTER TABLE `share_random_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
