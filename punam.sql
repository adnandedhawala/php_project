-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 11:15 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `punam`
--

-- --------------------------------------------------------++

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`br_id` int(11) NOT NULL,
  `br_name` varchar(100) NOT NULL,
  `br_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`br_id`, `br_name`, `br_time`) VALUES
(1, 'Nike', '2018-01-04 06:58:07'),
(2, 'Adidas', '2018-01-04 06:58:07'),
(3, 'Puma', '2018-01-04 06:58:17'),
(4, 'Killer Jeans', '2018-01-04 06:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`ca_id` int(11) NOT NULL,
  `ca_name` varchar(100) NOT NULL,
  `ca_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ca_id`, `ca_name`, `ca_time`) VALUES
(1, 'Mens Wear', '2018-01-04 07:47:52'),
(2, 'Womens Wear', '2018-01-04 07:47:52'),
(3, 'Kids Wear', '2018-01-04 07:48:03'),
(4, 'Accessories', '2018-01-04 07:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `salary`) VALUES
(9, 'ajay', 600);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  `pro_price` decimal(8,2) DEFAULT NULL,
  `pro_discount` tinyint(4) DEFAULT NULL,
  `pro_description` longtext,
  `pro_caid` int(11) DEFAULT NULL,
  `pro_brid` int(11) DEFAULT NULL,
  `pro_path` text,
  `pro_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_discount`, `pro_description`, `pro_caid`, `pro_brid`, `pro_path`, `pro_time`) VALUES
(1, 'Mens Light blue Formal Tshirt', '2560.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, 3, 'products/product1.jpg', '2018-01-08 07:11:54'),
(2, 'Office Wear Formal Mens Tshirt', '3560.00', 36, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, 2, 'products/product2.jpg', '2018-01-08 07:12:59'),
(3, 'Womens Party Wear Dress', '4500.00', 50, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2, 4, 'products/product3.jpg', '2018-01-08 07:13:39'),
(4, 'Womans Casual Wear', '8900.00', 30, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 2, 1, 'products/product4.jpg', '2018-01-08 07:14:57'),
(5, 'Kids Casual Shoes', '4700.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 3, 4, 'products/product5.jpg', '2018-01-08 07:14:57'),
(6, 'Kids Casual Tshirt', '1500.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 3, 2, 'products/product6.jpg', '2018-01-08 07:16:26'),
(7, 'Sunglass For All', '1200.00', 40, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 4, 1, 'products/product7.jpg', '2018-01-08 07:16:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
