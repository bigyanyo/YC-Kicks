-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 04:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yc_kicks`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(2, 'bigyan', 'bigyan@mail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2'),
(3, 'ananta', 'ananta@mail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2'),
(4, 'ashim1', 'ashim@mail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2'),
(5, 'sachin', 'sachin@mail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2'),
(6, 'susant', 'susant@mail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2'),
(7, 'user123', 'user@mail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2'),
(8, 'Sushant', 'sushantrahapal@gmail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2'),
(9, 'sususu', 'sususu@gmail.com', '$2y$10$sNycwAfVfoUbWJCJheGq7eJsARfA7wObWoIXC.G8MUkqrj21Ktsi2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
