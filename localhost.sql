-- phpMyAdmin SQL Dump
-- version 4.7.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2017 at 10:27 AM
-- Server version: 10.2.6-MariaDB
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_rick_and_morty`
--
CREATE DATABASE IF NOT EXISTS `php_rick_and_morty` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `php_rick_and_morty`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(11, 'admin2', 'efzefezf@ezfez.fr', 'test'),
(18, 'admin21769821891', 'efzefezf@ezfez.fr172565508', 'test'),
(19, 'admin2340423271', 'efzefezf@ezfez.fr1975302885', 'test'),
(20, 'admin21758773099', 'efzefezf@ezfez.fr1507230044', 'test'),
(21, 'admin2321440430', 'efzefezf@ezfez.fr1462357612', 'test'),
(22, 'admin21487209782', 'efzefezf@ezfez.fr1918249962', 'test'),
(23, 'admin21455692601', 'efzefezf@ezfez.fr1014566552', 'test'),
(24, 'admin2340755334', 'efzefezf@ezfez.fr1461920533', 'test'),
(25, 'admin296539101', 'efzefezf@ezfez.fr1482478029', 'test'),
(26, 'admin2883040751', 'efzefezf@ezfez.fr1562612324', 'test'),
(27, 'admin21634576097', 'efzefezf@ezfez.fr641661395', 'test'),
(28, 'admin21324358560', 'efzefezf@ezfez.fr1205434277', 'test'),
(29, 'admin2281366164', 'efzefezf@ezfez.fr1859424481', 'test'),
(30, 'admin2810586653', 'efzefezf@ezfez.fr1256252114', 'test'),
(31, 'admin22132704335', 'efzefezf@ezfez.fr1916525641', 'test'),
(32, 'admin21184427097', 'efzefezf@ezfez.fr656737259', 'test'),
(33, 'admin21499868269', 'efzefezf@ezfez.fr597196702', 'test'),
(34, 'admin21507392451', 'efzefezf@ezfez.fr311789216', 'test'),
(35, 'john.doe', 'john.doe@noreply.fr', '$2y$10$iUPXlivku7V0O3mYlq5y8.8JUQhYtdzC/5bN33NbUsf9AxpFXHMQy'),
(38, 'iim', 'iim@iim.fr', '$2y$10$Yl5u8dsbEH38ZBBVlJQFgeab3an9a1zog/ytHa/glZTZN7FNspBnq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
