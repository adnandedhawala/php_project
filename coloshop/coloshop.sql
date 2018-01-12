-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 09:51 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coloshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ca_id` int(11) NOT NULL,
  `ca_name` varchar(100) NOT NULL,
  `ca_imgpath` varchar(100) DEFAULT NULL,
  `ca_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ca_id`, `ca_name`, `ca_imgpath`, `ca_time`) VALUES
(1, 'Men', 'images/banner_3.jpg', '2018-01-12 03:49:28'),
(2, 'Women', 'images/banner_1.jpg', '2018-01-12 03:49:50'),
(3, 'Kids', 'images/banner_4.jpg', '2018-01-12 03:50:00'),
(4, 'Accessories', 'images/banner_2.jpg', '2018-01-12 03:50:11'),
(9, 'Sweets', 'images/banner_5.jpg', '2018-01-12 19:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  `pro_price` decimal(8,2) DEFAULT NULL,
  `pro_discount` tinyint(4) DEFAULT NULL,
  `pro_description` longtext,
  `pro_caid` int(11) DEFAULT NULL,
  `pro_path` text,
  `pro_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_discount`, `pro_description`, `pro_caid`, `pro_path`, `pro_time`) VALUES
(1, 'Mens Light blue Formal Tshirt', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, 'images/product_1.png', '2018-01-12 07:00:30'),
(2, 'Accessories for all.', '2560.00', 36, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 4, 'images/product_2.png', '2018-01-12 07:15:05'),
(3, 'Womens Party Wear Dress', '2560.00', 50, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, 'images/product_3.png', '2018-01-12 07:09:30'),
(4, 'Accessories for all.', '2560.00', 30, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 4, 'images/product_4.png', '2018-01-12 07:15:19'),
(5, 'Kids Casual Shoes', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, 'images/product_5.png', '2018-01-12 07:10:08'),
(6, 'Accessories for all.', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 4, 'images/product_6.png', '2018-01-12 07:15:33'),
(7, 'Womens Party Wear Dress', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2, 'images/product_7.png', '2018-01-12 07:16:53'),
(8, 'Accessories for all.', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 4, 'images/product_8.png', '2018-01-12 07:15:44'),
(9, 'Womens Party Wear Dress', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2, 'images/product_9.png', '2018-01-12 07:12:26'),
(10, 'Womens Party Wear Dress', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2, 'images/product_10.png', '2018-01-12 07:12:43'),
(11, 'Kids Casual Tshirt', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 3, 'images/product_11.png', '2018-01-12 07:02:53'),
(12, 'Kids Casual Tshirt', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 3, 'images/product_12.png', '2018-01-12 07:03:02'),
(13, 'Kids Casual Tshirt', '2560.00', 40, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 3, 'images/product_13.png', '2018-01-12 07:16:13'),
(14, 'Rasgulla', '250.00', 10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 9, 'images/product_14.png', '2018-01-12 20:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `log_id` int(11) NOT NULL,
  `log_name` varchar(100) DEFAULT NULL,
  `log_mobile` bigint(20) DEFAULT NULL,
  `log_email` varchar(100) DEFAULT NULL,
  `log_password` varchar(100) DEFAULT NULL,
  `log_status` int(11) DEFAULT '1',
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`log_id`, `log_name`, `log_mobile`, `log_email`, `log_password`, `log_status`, `log_time`) VALUES
(1, 'Adnan', 7894561231, 'abc@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, '2018-01-12 17:59:32'),
(2, 'aman', 1324567970, 'yolo@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, '2018-01-12 18:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
