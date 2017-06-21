-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 07:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd_ci`
--
CREATE DATABASE IF NOT EXISTS `curd_ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `curd_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `title`, `author`, `category`, `description`) VALUES
(15, 17, 'dsfsad', 'sfsasfd', 'Bollywood', 'sfasfdsfd'),
(16, 18, 'sffsfasa', 'fsfafs', 'Weather', 'fsfsfsfs'),
(17, 18, 'fssffsfs', 'sfasffs', 'Weather', 'fassfsfsf'),
(19, 19, 'gdfgd', 'gdsgd', 'Sports', 'gsdgd'),
(20, 19, 'danger', 'gdsgd', 'Weather', 'gsdgd'),
(21, 19, 'danger', 'clear', 'Hollywood', 'sfsffsfsfs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE latin1_bin NOT NULL,
  `password` varchar(100) COLLATE latin1_bin NOT NULL,
  `mobile` varchar(100) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mobile`) VALUES
(17, 'Paras', '87985799d410ead3564453e2d9371ad5', '8950511496'),
(18, 'rocks', '2f7b22bac3f5542bb48fb08b04141ecb', '97867576'),
(19, 'paras', '87985799d410ead3564453e2d9371ad5', 'paras'),
(20, 'paras', '2f7b22bac3f5542bb48fb08b04141ecb', 'cool');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
