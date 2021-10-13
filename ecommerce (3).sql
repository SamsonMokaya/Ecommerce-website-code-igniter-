-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 06:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `password`, `gender`, `email`, `userid`) VALUES
('Samson', 'samson', 'samson', 'male', 'samson.ongera@strathmore.edu', 31),
('Boaz', 'Ongera', 'boaz', 'male', 'boaz.ongera@strathmore.edu', 32),
('Samson', 'Ongera', 'boaz', 'male', 'k.ongera@strathmore.edu', 33),
('Samson', 'Ongera', 'hhhh', 'male', 'samso.ongera@strathmore.edu', 34),
('Samson', 'Ongera', 'gigi', 'male', 'sam.ongera@strathmore.edu', 35),
('Samson', 'Ongera', 'ssss', 'male', 'sson.ongera@strathmore.edu', 36),
('Samson', 'Ongera', 'sdsd', 'male', 'saon.ongera@strathmore.edu', 37),
('Samson', 'Ongera', 'mokaya', 'male', 'mokayasamson950@gmail.com', 38),
('Samson', 'Ongera', 'samson', 'male', 'ssamson.ongera@strathmore.edu', 39),
('Samson', 'Ongera', '$2y$10$sQ.4nWomd70hCzOv39xw3.h1twew7JmXcnIk..WUdvY3d7aL8p3Oi', 'male', 'ongera@strathmore.edu', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
