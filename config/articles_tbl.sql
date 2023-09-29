-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles_tbl`
--

DROP DATABASE IF EXISTS `pdo_articles`;
CREATE DATABASE IF NOT EXISTS `pdo_articles` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pdo_articles`;

DROP TABLE IF EXISTS `articles_tbl`;
CREATE TABLE IF NOT EXISTS `articles_tbl` (
  `article_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles_tbl`
--

INSERT INTO `articles_tbl` (`article_id`, `author_id`, `article_title`, `article_body`, `created_at`) VALUES
(1, 1, 'Article 1', 'This is the first article that was written by the first user', '2023-09-29 11:23:49'),
(2, 1, 'Article 2', 'This is the second article written by the first user still', '2023-09-29 11:24:54'),
(3, 2, 'Third articles', 'This is the third article', '2023-09-29 15:01:25'),
(4, 1, 'Fourth article', 'this article is awesome read it tomorrow not today for it will help you tomorrow', '2023-09-29 17:06:43'),
(8, 2, 'Article #5', 'This is the last article posted by user #2 for final testing it was a pleasure.', '2023-09-29 18:21:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles_tbl`
--
ALTER TABLE `articles_tbl`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles_tbl`
--
ALTER TABLE `articles_tbl`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
