-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 01:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `published_at` date NOT NULL,
  `created_post_at` datetime NOT NULL,
  `updated_post_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `parent_cat_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `meta_title` varchar(80) NOT NULL,
  `url` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created_cat_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_id` int(11) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `login_at` varchar(30) NOT NULL,
  `information` varchar(100) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `prefix`, `fname`, `lname`, `mobile`, `email`, `password`, `login_at`, `information`, `created_at`, `updated_at`) VALUES
(1, 'Mr', 'Hariom', 'Rathor', 2147483647, 'rajsensa99@gmail.com', ' ', '', 'jb kj b', 'Mon/Feb/2020 || 11:39:00 ', ''),
(2, '', '', '', 0, '', '', '', '', 'Mon/Feb/2020 || 11:39:01 ', ''),
(3, '', '', '', 0, 'rajsensa99@gmail.com', ' 123', '', '', 'Mon/Feb/2020 || 11:45:28 ', ''),
(4, '', '', '', 0, 'rajsensa99@gmail.com', ' 123', '', '', 'Mon/Feb/2020 || 11:45:53 ', ''),
(5, '', '', '', 0, 'rajsensa99@gmail.com', ' 1234', '', '', 'Mon/Feb/2020 || 11:46:05 ', ''),
(6, '', '', '', 0, 'rajsensa99@gmail.com', ' 1234', '', '', 'Mon/Feb/2020 || 11:47:11 ', ''),
(7, '', '', '', 0, 'rajsensa99@gmail.com', ' 123', '', '', 'Mon/Feb/2020 || 11:47:20 ', ''),
(8, '', '', '', 0, '', '', '', '', 'Mon/Feb/2020 || 12:32:02 ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
