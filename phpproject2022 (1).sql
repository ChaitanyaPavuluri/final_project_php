-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 10:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phnumber` int(11) NOT NULL,
  `email` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `fname`, `lname`, `phnumber`, `email`, `comments`) VALUES(6, 'Chaitanya', 'Pavuluri', 2147483647, 'chaitu7511@gmail.com', ' These my comments');
INSERT INTO `contactform` (`id`, `fname`, `lname`, `phnumber`, `email`, `comments`) VALUES(7, 'Chaitu', 'P', 2147483647, 'pavan@gmail.com', ' Food is very good');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `itemName` text NOT NULL,
  `itemPrice` int(11) NOT NULL,
  `orderedTime` datetime NOT NULL,
  `orderStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `itemName`, `itemPrice`, `orderedTime`, `orderStatus`) VALUES(15, 'Biryani', 17, '2019-04-22 11:25:04', 'Cancelled');
INSERT INTO `orders` (`orderId`, `itemName`, `itemPrice`, `orderedTime`, `orderStatus`) VALUES(16, 'Biryani', 17, '2020-04-22 09:23:30', 'preparing');

-- --------------------------------------------------------

--
-- Table structure for table `usercredentials`
--

CREATE TABLE `usercredentials` (
  `userId` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercredentials`
--

INSERT INTO `usercredentials` (`userId`, `password`) VALUES('user1', '$2y$10$a.h1NqiGPqh5prOjzetfyeu1jQbjPgU0uxcY9WBpjjVaxuI0PbqRe');
INSERT INTO `usercredentials` (`userId`, `password`) VALUES('user2', '$2y$10$a.h1NqiGPqh5prOjzetfyeu1jQbjPgU0uxcY9WBpjjVaxuI0PbqRe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
