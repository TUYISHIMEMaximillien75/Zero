-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 10:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zero`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `description` varchar(250) NOT NULL,
  `u_id` int(11) NOT NULL,
  `decision` varchar(255) NOT NULL,
  `important` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `category`, `due`, `description`, `u_id`, `decision`, `important`) VALUES
(1, 'taskinking', 'Hobby', '04/16/2024', 'giving', 5, 'nyc', 'yes'),
(2, 'Front-end development', '', '', '', 5, 'complete', 'no'),
(3, 'Back-end developer', '', '04/09/2024', '', 5, 'nyc', 'no'),
(4, 'taking child to school', 'Education', '04/15/2024', 'qwerty', 5, 'complete', 'no'),
(5, 'going home', 'Hobby', '04/25/2024', 'hhhhhhhhh', 5, 'nyc', 'yes'),
(6, 'calling chr', 'Hobby', '04/26/2024', 'query ok?', 5, 'nyc', 'no'),
(7, ' a trip to america', 'Education', '04/28/2024', 'none', 5, 'nyc', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
