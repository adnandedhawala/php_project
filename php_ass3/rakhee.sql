-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 09:14 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rakhee`
--

-- --------------------------------------------------------

--
-- Table structure for table `mo_area`
--

CREATE TABLE IF NOT EXISTS `mo_area` (
`area_id` int(11) NOT NULL,
  `area_name` varchar(100) DEFAULT NULL,
  `area_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mo_area`
--

INSERT INTO `mo_area` (`area_id`, `area_name`, `area_time`) VALUES
(5, 'mulund', '2016-09-28 14:58:38'),
(6, 'thane', '2016-09-28 14:58:47'),
(7, 'bhandup', '2016-09-28 14:58:53'),
(8, 'dadar', '2016-09-28 14:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `mo_cinema`
--

CREATE TABLE IF NOT EXISTS `mo_cinema` (
`cin_id` int(11) NOT NULL,
  `cin_name` varchar(100) DEFAULT NULL,
  `cin_areaid` int(11) DEFAULT NULL,
  `cin_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mo_cinema`
--

INSERT INTO `mo_cinema` (`cin_id`, `cin_name`, `cin_areaid`, `cin_time`) VALUES
(5, 'PVR Mulund', 5, '2016-09-28 14:59:11'),
(6, 'RMALL Thane', 6, '2016-09-28 14:59:23'),
(7, 'Bhandup PVR', 7, '2016-09-28 14:59:44'),
(8, 'Dadar Plaza', 8, '2016-09-28 15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mo_movie`
--

CREATE TABLE IF NOT EXISTS `mo_movie` (
`mov_id` int(11) NOT NULL,
  `mov_name` varchar(100) DEFAULT NULL,
  `mov_desc` text,
  `mov_path` text,
  `mov_start` date DEFAULT NULL,
  `mov_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mo_movie`
--

INSERT INTO `mo_movie` (`mov_id`, `mov_name`, `mov_desc`, `mov_path`, `mov_start`, `mov_time`) VALUES
(2, 'Awargi', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076084awargi.jpg', '2016-09-12', '2016-09-28 15:40:56'),
(3, 'Devdas', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076108devdas.jpg', '2016-09-15', '2016-09-28 15:21:48'),
(4, 'Balwaan', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076126balwaan.jpg', '2016-09-15', '2016-09-28 15:22:06'),
(5, 'Barsaat', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076135barsaat.jpg', '2016-09-15', '2016-09-28 15:22:15'),
(6, 'Border', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076144border.jpg', '2016-09-15', '2016-09-28 15:22:24'),
(7, 'Deedar', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076154deedar.jpg', '2016-09-15', '2016-09-28 15:22:34'),
(8, 'Gharwali Bharwali', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076168gharwali.jpg', '2016-09-15', '2016-09-28 15:22:48'),
(9, 'KillDil', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076179killdil.jpg', '2016-09-15', '2016-09-28 15:22:59'),
(10, 'Krish', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076191krish.jpg', '2016-09-15', '2016-09-28 15:23:11'),
(11, 'Laggan', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076203lagaan.jpg', '2016-09-15', '2016-09-28 15:23:23'),
(12, 'Superman', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076221superman.jpg', '2016-09-15', '2016-09-28 15:23:41'),
(13, 'Vastu Shastra', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076234vastushastra.jpg', '2016-09-15', '2016-09-28 15:23:54'),
(14, 'Vijay Path', 'Shekhar goes to Simrans house to convince her to take his case. Simran tells Shekhar that she will defend him only if she is convinced that he is innocent. Simran is battling inner demons over a case in which she got a man convicted for crime he had not committed. Her guilt increases when she learns that the innocent man had committed suicide in custody.', 'upload/1475076248vijaypath.jpg', '2016-09-15', '2016-09-28 15:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `mo_movie_screen`
--

CREATE TABLE IF NOT EXISTS `mo_movie_screen` (
`ms_id` int(11) NOT NULL,
  `ms_screen_time_id` int(11) DEFAULT NULL,
  `ms_screen_movie_id` int(11) DEFAULT NULL,
  `ms_enddate` date DEFAULT NULL,
  `ms_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mo_movie_screen`
--

INSERT INTO `mo_movie_screen` (`ms_id`, `ms_screen_time_id`, `ms_screen_movie_id`, `ms_enddate`, `ms_time`) VALUES
(3, 6, 2, '2016-10-31', '2016-09-28 15:25:09'),
(4, 8, 3, '2016-10-30', '2016-09-28 15:25:21'),
(5, 7, 4, '2016-10-25', '2016-09-28 15:25:36'),
(6, 16, 4, '2016-10-25', '2016-09-28 15:25:52'),
(7, 14, 6, '2016-10-25', '2016-09-28 15:26:02'),
(8, 15, 11, '2016-10-25', '2016-09-28 15:26:08'),
(9, 18, 13, '2016-10-22', '2016-09-28 15:28:25'),
(10, 19, 8, '2016-10-22', '2016-09-28 15:28:33'),
(11, 20, 7, '2016-10-22', '2016-09-28 15:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `mo_screen`
--

CREATE TABLE IF NOT EXISTS `mo_screen` (
`screen_id` int(11) NOT NULL,
  `screen_name` varchar(100) DEFAULT NULL,
  `screen_cin_id` int(11) DEFAULT NULL,
  `screen_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `mo_screen`
--

INSERT INTO `mo_screen` (`screen_id`, `screen_name`, `screen_cin_id`, `screen_time`) VALUES
(8, 'Screen A', 5, '2016-09-28 15:00:17'),
(9, 'Screen B', 5, '2016-09-28 15:00:20'),
(10, 'Screen B', 6, '2016-09-28 15:00:24'),
(11, 'Screen A', 6, '2016-09-28 15:00:27'),
(12, 'Screen B', 7, '2016-09-28 15:00:35'),
(13, 'Screen A', 8, '2016-09-28 15:00:41'),
(14, 'Screen B', 8, '2016-09-28 15:00:44'),
(15, 'Screen A', 7, '2016-09-28 15:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `mo_screen_seat`
--

CREATE TABLE IF NOT EXISTS `mo_screen_seat` (
`seat_id` int(11) NOT NULL,
  `seat_screen_id` int(11) DEFAULT NULL,
  `seatno` int(11) DEFAULT NULL,
  `seat_amount` decimal(8,2) DEFAULT NULL,
  `seat_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=407 ;

--
-- Dumping data for table `mo_screen_seat`
--

INSERT INTO `mo_screen_seat` (`seat_id`, `seat_screen_id`, `seatno`, `seat_amount`, `seat_time`) VALUES
(77, 11, 1, '100.00', '2016-09-28 15:13:35'),
(78, 11, 2, '100.00', '2016-09-28 15:13:35'),
(79, 11, 3, '100.00', '2016-09-28 15:13:35'),
(80, 11, 4, '100.00', '2016-09-28 15:13:35'),
(81, 11, 5, '100.00', '2016-09-28 15:13:35'),
(82, 11, 6, '100.00', '2016-09-28 15:13:35'),
(83, 11, 7, '100.00', '2016-09-28 15:13:35'),
(84, 11, 8, '100.00', '2016-09-28 15:13:35'),
(85, 11, 9, '100.00', '2016-09-28 15:13:35'),
(86, 11, 10, '100.00', '2016-09-28 15:13:36'),
(87, 11, 11, '100.00', '2016-09-28 15:13:36'),
(88, 11, 12, '100.00', '2016-09-28 15:13:36'),
(89, 11, 13, '100.00', '2016-09-28 15:13:36'),
(90, 11, 14, '100.00', '2016-09-28 15:13:36'),
(91, 11, 15, '100.00', '2016-09-28 15:13:36'),
(92, 11, 16, '100.00', '2016-09-28 15:13:36'),
(93, 11, 17, '100.00', '2016-09-28 15:13:36'),
(94, 11, 18, '100.00', '2016-09-28 15:13:36'),
(95, 11, 19, '100.00', '2016-09-28 15:13:36'),
(96, 11, 20, '100.00', '2016-09-28 15:13:36'),
(97, 11, 21, '100.00', '2016-09-28 15:13:36'),
(98, 11, 22, '100.00', '2016-09-28 15:13:36'),
(99, 11, 23, '100.00', '2016-09-28 15:13:36'),
(100, 11, 24, '100.00', '2016-09-28 15:13:36'),
(101, 11, 25, '100.00', '2016-09-28 15:13:36'),
(102, 11, 26, '100.00', '2016-09-28 15:13:36'),
(103, 11, 27, '100.00', '2016-09-28 15:13:36'),
(104, 11, 28, '100.00', '2016-09-28 15:13:36'),
(105, 11, 29, '100.00', '2016-09-28 15:13:36'),
(106, 11, 30, '100.00', '2016-09-28 15:13:36'),
(107, 11, 31, '100.00', '2016-09-28 15:13:36'),
(108, 11, 32, '100.00', '2016-09-28 15:13:36'),
(109, 11, 33, '100.00', '2016-09-28 15:13:36'),
(110, 11, 34, '100.00', '2016-09-28 15:13:36'),
(111, 11, 35, '100.00', '2016-09-28 15:13:36'),
(112, 11, 36, '100.00', '2016-09-28 15:13:36'),
(113, 11, 37, '100.00', '2016-09-28 15:13:37'),
(114, 11, 38, '100.00', '2016-09-28 15:13:37'),
(115, 11, 39, '100.00', '2016-09-28 15:13:37'),
(116, 11, 40, '100.00', '2016-09-28 15:13:37'),
(117, 11, 41, '100.00', '2016-09-28 15:13:37'),
(118, 11, 42, '100.00', '2016-09-28 15:13:37'),
(119, 11, 43, '100.00', '2016-09-28 15:13:37'),
(120, 11, 44, '100.00', '2016-09-28 15:13:37'),
(121, 11, 45, '100.00', '2016-09-28 15:13:37'),
(122, 11, 46, '100.00', '2016-09-28 15:13:37'),
(123, 11, 47, '100.00', '2016-09-28 15:13:37'),
(124, 11, 48, '100.00', '2016-09-28 15:13:37'),
(125, 11, 49, '100.00', '2016-09-28 15:13:37'),
(126, 11, 50, '100.00', '2016-09-28 15:13:37'),
(127, 10, 1, '100.00', '2016-09-28 15:13:40'),
(128, 10, 2, '100.00', '2016-09-28 15:13:40'),
(129, 10, 3, '100.00', '2016-09-28 15:13:40'),
(130, 10, 4, '100.00', '2016-09-28 15:13:40'),
(131, 10, 5, '100.00', '2016-09-28 15:13:40'),
(132, 10, 6, '100.00', '2016-09-28 15:13:40'),
(133, 10, 7, '100.00', '2016-09-28 15:13:40'),
(134, 10, 8, '100.00', '2016-09-28 15:13:40'),
(135, 10, 9, '100.00', '2016-09-28 15:13:40'),
(136, 10, 10, '100.00', '2016-09-28 15:13:40'),
(137, 10, 11, '100.00', '2016-09-28 15:13:40'),
(138, 10, 12, '100.00', '2016-09-28 15:13:40'),
(139, 10, 13, '100.00', '2016-09-28 15:13:40'),
(140, 10, 14, '100.00', '2016-09-28 15:13:40'),
(141, 10, 15, '100.00', '2016-09-28 15:13:41'),
(142, 10, 16, '100.00', '2016-09-28 15:13:41'),
(143, 10, 17, '100.00', '2016-09-28 15:13:41'),
(144, 10, 18, '100.00', '2016-09-28 15:13:41'),
(145, 10, 19, '100.00', '2016-09-28 15:13:41'),
(146, 10, 20, '100.00', '2016-09-28 15:13:41'),
(147, 10, 21, '100.00', '2016-09-28 15:13:41'),
(148, 10, 22, '100.00', '2016-09-28 15:13:41'),
(149, 10, 23, '100.00', '2016-09-28 15:13:41'),
(150, 10, 24, '100.00', '2016-09-28 15:13:41'),
(151, 10, 25, '100.00', '2016-09-28 15:13:41'),
(152, 10, 26, '100.00', '2016-09-28 15:13:41'),
(153, 10, 27, '100.00', '2016-09-28 15:13:41'),
(154, 10, 28, '100.00', '2016-09-28 15:13:41'),
(155, 10, 29, '100.00', '2016-09-28 15:13:41'),
(156, 10, 30, '100.00', '2016-09-28 15:13:41'),
(157, 10, 31, '100.00', '2016-09-28 15:13:41'),
(158, 10, 32, '100.00', '2016-09-28 15:13:41'),
(159, 10, 33, '100.00', '2016-09-28 15:13:41'),
(160, 10, 34, '100.00', '2016-09-28 15:13:41'),
(161, 10, 35, '100.00', '2016-09-28 15:13:41'),
(162, 10, 36, '100.00', '2016-09-28 15:13:41'),
(163, 10, 37, '100.00', '2016-09-28 15:13:41'),
(164, 10, 38, '100.00', '2016-09-28 15:13:41'),
(165, 10, 39, '100.00', '2016-09-28 15:13:41'),
(166, 10, 40, '100.00', '2016-09-28 15:13:41'),
(167, 10, 41, '100.00', '2016-09-28 15:13:42'),
(168, 10, 42, '100.00', '2016-09-28 15:13:42'),
(169, 10, 43, '100.00', '2016-09-28 15:13:42'),
(170, 10, 44, '100.00', '2016-09-28 15:13:42'),
(171, 10, 45, '100.00', '2016-09-28 15:13:42'),
(172, 10, 46, '100.00', '2016-09-28 15:13:42'),
(173, 10, 47, '100.00', '2016-09-28 15:13:42'),
(174, 10, 48, '100.00', '2016-09-28 15:13:42'),
(175, 10, 49, '100.00', '2016-09-28 15:13:42'),
(176, 10, 50, '100.00', '2016-09-28 15:13:42'),
(177, 8, 1, '200.00', '2016-09-28 15:13:48'),
(178, 8, 2, '200.00', '2016-09-28 15:13:48'),
(179, 8, 3, '200.00', '2016-09-28 15:13:48'),
(180, 8, 4, '200.00', '2016-09-28 15:13:48'),
(181, 8, 5, '200.00', '2016-09-28 15:13:48'),
(182, 8, 6, '200.00', '2016-09-28 15:13:48'),
(183, 8, 7, '200.00', '2016-09-28 15:13:48'),
(184, 8, 8, '200.00', '2016-09-28 15:13:48'),
(185, 8, 9, '200.00', '2016-09-28 15:13:48'),
(186, 8, 10, '200.00', '2016-09-28 15:13:49'),
(187, 8, 11, '200.00', '2016-09-28 15:13:49'),
(188, 8, 12, '200.00', '2016-09-28 15:13:49'),
(189, 8, 13, '200.00', '2016-09-28 15:13:49'),
(190, 8, 14, '200.00', '2016-09-28 15:13:49'),
(191, 8, 15, '200.00', '2016-09-28 15:13:49'),
(192, 8, 16, '200.00', '2016-09-28 15:13:49'),
(193, 8, 17, '200.00', '2016-09-28 15:13:49'),
(194, 8, 18, '200.00', '2016-09-28 15:13:49'),
(195, 8, 19, '200.00', '2016-09-28 15:13:49'),
(196, 8, 20, '200.00', '2016-09-28 15:13:49'),
(197, 8, 21, '200.00', '2016-09-28 15:13:49'),
(198, 8, 22, '200.00', '2016-09-28 15:13:49'),
(199, 8, 23, '200.00', '2016-09-28 15:13:49'),
(200, 8, 24, '200.00', '2016-09-28 15:13:49'),
(201, 8, 25, '200.00', '2016-09-28 15:13:49'),
(202, 8, 26, '200.00', '2016-09-28 15:13:49'),
(203, 8, 27, '200.00', '2016-09-28 15:13:49'),
(204, 8, 28, '200.00', '2016-09-28 15:13:49'),
(205, 8, 29, '200.00', '2016-09-28 15:13:49'),
(206, 8, 30, '200.00', '2016-09-28 15:13:49'),
(207, 8, 31, '200.00', '2016-09-28 15:13:49'),
(208, 8, 32, '200.00', '2016-09-28 15:13:49'),
(209, 8, 33, '200.00', '2016-09-28 15:13:49'),
(210, 8, 34, '200.00', '2016-09-28 15:13:49'),
(211, 8, 35, '200.00', '2016-09-28 15:13:49'),
(212, 8, 36, '200.00', '2016-09-28 15:13:49'),
(213, 8, 37, '200.00', '2016-09-28 15:13:49'),
(214, 8, 38, '200.00', '2016-09-28 15:13:50'),
(215, 8, 39, '200.00', '2016-09-28 15:13:50'),
(216, 8, 40, '200.00', '2016-09-28 15:13:50'),
(217, 8, 41, '200.00', '2016-09-28 15:13:50'),
(218, 8, 42, '200.00', '2016-09-28 15:13:50'),
(219, 8, 43, '200.00', '2016-09-28 15:13:50'),
(220, 8, 44, '200.00', '2016-09-28 15:13:50'),
(221, 8, 45, '200.00', '2016-09-28 15:13:50'),
(222, 8, 46, '200.00', '2016-09-28 15:13:50'),
(223, 8, 47, '200.00', '2016-09-28 15:13:50'),
(224, 8, 48, '200.00', '2016-09-28 15:13:50'),
(225, 8, 49, '200.00', '2016-09-28 15:13:50'),
(226, 8, 50, '200.00', '2016-09-28 15:13:50'),
(227, 9, 1, '200.00', '2016-09-28 15:13:53'),
(228, 9, 2, '200.00', '2016-09-28 15:13:53'),
(229, 9, 3, '200.00', '2016-09-28 15:13:53'),
(230, 9, 4, '200.00', '2016-09-28 15:13:53'),
(231, 9, 5, '200.00', '2016-09-28 15:13:53'),
(232, 9, 6, '200.00', '2016-09-28 15:13:53'),
(233, 9, 7, '200.00', '2016-09-28 15:13:53'),
(234, 9, 8, '200.00', '2016-09-28 15:13:53'),
(235, 9, 9, '200.00', '2016-09-28 15:13:53'),
(236, 9, 10, '200.00', '2016-09-28 15:13:53'),
(237, 9, 11, '200.00', '2016-09-28 15:13:53'),
(238, 9, 12, '200.00', '2016-09-28 15:13:53'),
(239, 9, 13, '200.00', '2016-09-28 15:13:53'),
(240, 9, 14, '200.00', '2016-09-28 15:13:53'),
(241, 9, 15, '200.00', '2016-09-28 15:13:53'),
(242, 9, 16, '200.00', '2016-09-28 15:13:53'),
(243, 9, 17, '200.00', '2016-09-28 15:13:53'),
(244, 9, 18, '200.00', '2016-09-28 15:13:53'),
(245, 9, 19, '200.00', '2016-09-28 15:13:53'),
(246, 9, 20, '200.00', '2016-09-28 15:13:53'),
(247, 9, 21, '200.00', '2016-09-28 15:13:53'),
(248, 9, 22, '200.00', '2016-09-28 15:13:53'),
(249, 9, 23, '200.00', '2016-09-28 15:13:53'),
(250, 9, 24, '200.00', '2016-09-28 15:13:53'),
(251, 9, 25, '200.00', '2016-09-28 15:13:54'),
(252, 9, 26, '200.00', '2016-09-28 15:13:54'),
(253, 9, 27, '200.00', '2016-09-28 15:13:54'),
(254, 9, 28, '200.00', '2016-09-28 15:13:54'),
(255, 9, 29, '200.00', '2016-09-28 15:13:54'),
(256, 9, 30, '200.00', '2016-09-28 15:13:54'),
(257, 9, 31, '200.00', '2016-09-28 15:13:54'),
(258, 9, 32, '200.00', '2016-09-28 15:13:54'),
(259, 9, 33, '200.00', '2016-09-28 15:13:54'),
(260, 9, 34, '200.00', '2016-09-28 15:13:54'),
(261, 9, 35, '200.00', '2016-09-28 15:13:54'),
(262, 9, 36, '200.00', '2016-09-28 15:13:54'),
(263, 9, 37, '200.00', '2016-09-28 15:13:54'),
(264, 9, 38, '200.00', '2016-09-28 15:13:54'),
(265, 9, 39, '200.00', '2016-09-28 15:13:54'),
(266, 9, 40, '200.00', '2016-09-28 15:13:54'),
(267, 9, 41, '200.00', '2016-09-28 15:13:54'),
(268, 9, 42, '200.00', '2016-09-28 15:13:54'),
(269, 9, 43, '200.00', '2016-09-28 15:13:54'),
(270, 9, 44, '200.00', '2016-09-28 15:13:54'),
(271, 9, 45, '200.00', '2016-09-28 15:13:54'),
(272, 9, 46, '200.00', '2016-09-28 15:13:54'),
(273, 9, 47, '200.00', '2016-09-28 15:13:54'),
(274, 9, 48, '200.00', '2016-09-28 15:13:54'),
(275, 9, 49, '200.00', '2016-09-28 15:13:54'),
(276, 9, 50, '200.00', '2016-09-28 15:13:54'),
(277, 12, 1, '50.00', '2016-09-28 15:14:02'),
(278, 12, 2, '50.00', '2016-09-28 15:14:02'),
(279, 12, 3, '50.00', '2016-09-28 15:14:02'),
(280, 12, 4, '50.00', '2016-09-28 15:14:02'),
(281, 12, 5, '50.00', '2016-09-28 15:14:02'),
(282, 12, 6, '50.00', '2016-09-28 15:14:02'),
(283, 12, 7, '50.00', '2016-09-28 15:14:02'),
(284, 12, 8, '50.00', '2016-09-28 15:14:02'),
(285, 12, 9, '50.00', '2016-09-28 15:14:02'),
(286, 12, 10, '50.00', '2016-09-28 15:14:02'),
(287, 12, 11, '50.00', '2016-09-28 15:14:02'),
(288, 12, 12, '50.00', '2016-09-28 15:14:02'),
(289, 12, 13, '50.00', '2016-09-28 15:14:02'),
(290, 12, 14, '50.00', '2016-09-28 15:14:02'),
(291, 12, 15, '50.00', '2016-09-28 15:14:02'),
(292, 12, 16, '50.00', '2016-09-28 15:14:02'),
(293, 12, 17, '50.00', '2016-09-28 15:14:02'),
(294, 12, 18, '50.00', '2016-09-28 15:14:02'),
(295, 12, 19, '50.00', '2016-09-28 15:14:02'),
(296, 12, 20, '50.00', '2016-09-28 15:14:02'),
(297, 12, 21, '50.00', '2016-09-28 15:14:03'),
(298, 12, 22, '50.00', '2016-09-28 15:14:03'),
(299, 12, 23, '50.00', '2016-09-28 15:14:03'),
(300, 12, 24, '50.00', '2016-09-28 15:14:03'),
(301, 12, 25, '50.00', '2016-09-28 15:14:03'),
(302, 12, 26, '50.00', '2016-09-28 15:14:03'),
(303, 12, 27, '50.00', '2016-09-28 15:14:03'),
(304, 12, 28, '50.00', '2016-09-28 15:14:03'),
(305, 12, 29, '50.00', '2016-09-28 15:14:03'),
(306, 12, 30, '50.00', '2016-09-28 15:14:03'),
(307, 12, 31, '50.00', '2016-09-28 15:14:03'),
(308, 12, 32, '50.00', '2016-09-28 15:14:03'),
(309, 12, 33, '50.00', '2016-09-28 15:14:03'),
(310, 12, 34, '50.00', '2016-09-28 15:14:03'),
(311, 12, 35, '50.00', '2016-09-28 15:14:03'),
(312, 12, 36, '50.00', '2016-09-28 15:14:03'),
(313, 12, 37, '50.00', '2016-09-28 15:14:03'),
(314, 12, 38, '50.00', '2016-09-28 15:14:03'),
(315, 12, 39, '50.00', '2016-09-28 15:14:03'),
(316, 12, 40, '50.00', '2016-09-28 15:14:03'),
(317, 12, 41, '50.00', '2016-09-28 15:14:03'),
(318, 12, 42, '50.00', '2016-09-28 15:14:03'),
(319, 12, 43, '50.00', '2016-09-28 15:14:03'),
(320, 12, 44, '50.00', '2016-09-28 15:14:03'),
(321, 12, 45, '50.00', '2016-09-28 15:14:03'),
(322, 12, 46, '50.00', '2016-09-28 15:14:03'),
(323, 12, 47, '50.00', '2016-09-28 15:14:03'),
(324, 12, 48, '50.00', '2016-09-28 15:14:03'),
(325, 12, 49, '50.00', '2016-09-28 15:14:04'),
(326, 12, 50, '50.00', '2016-09-28 15:14:04'),
(327, 13, 1, '500.00', '2016-09-28 15:14:15'),
(328, 13, 2, '500.00', '2016-09-28 15:14:15'),
(329, 13, 3, '500.00', '2016-09-28 15:14:15'),
(330, 13, 4, '500.00', '2016-09-28 15:14:15'),
(331, 13, 5, '500.00', '2016-09-28 15:14:15'),
(332, 13, 6, '500.00', '2016-09-28 15:14:15'),
(333, 13, 7, '500.00', '2016-09-28 15:14:15'),
(334, 13, 8, '500.00', '2016-09-28 15:14:15'),
(335, 13, 9, '500.00', '2016-09-28 15:14:15'),
(336, 13, 10, '500.00', '2016-09-28 15:14:15'),
(337, 13, 11, '500.00', '2016-09-28 15:14:15'),
(338, 13, 12, '500.00', '2016-09-28 15:14:15'),
(339, 13, 13, '500.00', '2016-09-28 15:14:15'),
(340, 13, 14, '500.00', '2016-09-28 15:14:15'),
(341, 13, 15, '500.00', '2016-09-28 15:14:15'),
(342, 13, 16, '500.00', '2016-09-28 15:14:15'),
(343, 13, 17, '500.00', '2016-09-28 15:14:16'),
(344, 13, 18, '500.00', '2016-09-28 15:14:16'),
(345, 13, 19, '500.00', '2016-09-28 15:14:16'),
(346, 13, 20, '500.00', '2016-09-28 15:14:16'),
(347, 14, 1, '250.00', '2016-09-28 15:14:27'),
(348, 14, 2, '250.00', '2016-09-28 15:14:27'),
(349, 14, 3, '250.00', '2016-09-28 15:14:27'),
(350, 14, 4, '250.00', '2016-09-28 15:14:27'),
(351, 14, 5, '250.00', '2016-09-28 15:14:27'),
(352, 14, 6, '250.00', '2016-09-28 15:14:27'),
(353, 14, 7, '250.00', '2016-09-28 15:14:27'),
(354, 14, 8, '250.00', '2016-09-28 15:14:27'),
(355, 14, 9, '250.00', '2016-09-28 15:14:27'),
(356, 14, 10, '250.00', '2016-09-28 15:14:27'),
(357, 14, 11, '250.00', '2016-09-28 15:14:27'),
(358, 14, 12, '250.00', '2016-09-28 15:14:27'),
(359, 14, 13, '250.00', '2016-09-28 15:14:27'),
(360, 14, 14, '250.00', '2016-09-28 15:14:27'),
(361, 14, 15, '250.00', '2016-09-28 15:14:27'),
(362, 14, 16, '250.00', '2016-09-28 15:14:27'),
(363, 14, 17, '250.00', '2016-09-28 15:14:27'),
(364, 14, 18, '250.00', '2016-09-28 15:14:27'),
(365, 14, 19, '250.00', '2016-09-28 15:14:28'),
(366, 14, 20, '250.00', '2016-09-28 15:14:28'),
(367, 14, 21, '250.00', '2016-09-28 15:14:28'),
(368, 14, 22, '250.00', '2016-09-28 15:14:28'),
(369, 14, 23, '250.00', '2016-09-28 15:14:28'),
(370, 14, 24, '250.00', '2016-09-28 15:14:28'),
(371, 14, 25, '250.00', '2016-09-28 15:14:28'),
(372, 14, 26, '250.00', '2016-09-28 15:14:28'),
(373, 14, 27, '250.00', '2016-09-28 15:14:28'),
(374, 14, 28, '250.00', '2016-09-28 15:14:28'),
(375, 14, 29, '250.00', '2016-09-28 15:14:28'),
(376, 14, 30, '250.00', '2016-09-28 15:14:28'),
(377, 15, 1, '101.00', '2016-09-28 15:27:42'),
(378, 15, 2, '101.00', '2016-09-28 15:27:43'),
(379, 15, 3, '101.00', '2016-09-28 15:27:43'),
(380, 15, 4, '101.00', '2016-09-28 15:27:43'),
(381, 15, 5, '101.00', '2016-09-28 15:27:43'),
(382, 15, 6, '101.00', '2016-09-28 15:27:43'),
(383, 15, 7, '101.00', '2016-09-28 15:27:43'),
(384, 15, 8, '101.00', '2016-09-28 15:27:43'),
(385, 15, 9, '101.00', '2016-09-28 15:27:43'),
(386, 15, 10, '101.00', '2016-09-28 15:27:43'),
(387, 15, 11, '101.00', '2016-09-28 15:27:43'),
(388, 15, 12, '101.00', '2016-09-28 15:27:43'),
(389, 15, 13, '101.00', '2016-09-28 15:27:43'),
(390, 15, 14, '101.00', '2016-09-28 15:27:43'),
(391, 15, 15, '101.00', '2016-09-28 15:27:43'),
(392, 15, 16, '101.00', '2016-09-28 15:27:43'),
(393, 15, 17, '101.00', '2016-09-28 15:27:43'),
(394, 15, 18, '101.00', '2016-09-28 15:27:43'),
(395, 15, 19, '101.00', '2016-09-28 15:27:43'),
(396, 15, 20, '101.00', '2016-09-28 15:27:43'),
(397, 15, 21, '101.00', '2016-09-28 15:27:43'),
(398, 15, 22, '101.00', '2016-09-28 15:27:43'),
(399, 15, 23, '101.00', '2016-09-28 15:27:43'),
(400, 15, 24, '101.00', '2016-09-28 15:27:44'),
(401, 15, 25, '101.00', '2016-09-28 15:27:44'),
(402, 15, 26, '101.00', '2016-09-28 15:27:44'),
(403, 15, 27, '101.00', '2016-09-28 15:27:44'),
(404, 15, 28, '101.00', '2016-09-28 15:27:44'),
(405, 15, 29, '101.00', '2016-09-28 15:27:44'),
(406, 15, 30, '101.00', '2016-09-28 15:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `mo_screen_time`
--

CREATE TABLE IF NOT EXISTS `mo_screen_time` (
`sc_time_id` int(11) NOT NULL,
  `sc_time_name` varchar(100) DEFAULT NULL,
  `sc_screen_id` int(11) DEFAULT NULL,
  `sc_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mo_screen_time`
--

INSERT INTO `mo_screen_time` (`sc_time_id`, `sc_time_name`, `sc_screen_id`, `sc_time`) VALUES
(6, '9:00', 11, '2016-09-28 15:01:16'),
(7, '12:00', 11, '2016-09-28 15:01:23'),
(8, '5:00', 10, '2016-09-28 15:01:29'),
(9, '6:00', 8, '2016-09-28 15:01:38'),
(10, '9:00', 8, '2016-09-28 15:01:41'),
(11, '3:00', 9, '2016-09-28 15:01:51'),
(12, '9:00', 12, '2016-09-28 15:02:01'),
(13, '4:00', 12, '2016-09-28 15:02:09'),
(14, '4:00', 13, '2016-09-28 15:02:20'),
(15, '9:00', 13, '2016-09-28 15:02:24'),
(16, '5:00', 14, '2016-09-28 15:02:29'),
(17, '2:00', 12, '2016-09-28 15:27:10'),
(18, '4:00', 15, '2016-09-28 15:27:56'),
(19, '9:00', 15, '2016-09-28 15:28:01'),
(20, '2:00', 15, '2016-09-28 15:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
`pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pmobile` bigint(20) NOT NULL,
  `pgender` int(11) NOT NULL,
  `pemailid` varchar(100) NOT NULL,
  `ppass` varchar(100) NOT NULL,
  `ptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`pid`, `pname`, `pmobile`, `pgender`, `pemailid`, `ppass`, `ptime`) VALUES
(1, 'amit', 5623523564, 1, 'amit@gmail.com', '76af7efae0d034d1e3335ed1b90f24b6cadf2bf1', '2016-09-19 14:49:52'),
(2, 'amitt', 8965896525, 1, 'amitt@gmail.com', '76af7efae0d034d1e3335ed1b90f24b6cadf2bf1', '2016-09-21 14:40:35'),
(3, 'admin', 9865498745, 2, 'admin@gmail.com', 'ebfd31053412f138d196c8d39cd79a2ed1464c50', '2016-09-27 14:03:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mo_area`
--
ALTER TABLE `mo_area`
 ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `mo_cinema`
--
ALTER TABLE `mo_cinema`
 ADD PRIMARY KEY (`cin_id`);

--
-- Indexes for table `mo_movie`
--
ALTER TABLE `mo_movie`
 ADD PRIMARY KEY (`mov_id`);

--
-- Indexes for table `mo_movie_screen`
--
ALTER TABLE `mo_movie_screen`
 ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `mo_screen`
--
ALTER TABLE `mo_screen`
 ADD PRIMARY KEY (`screen_id`);

--
-- Indexes for table `mo_screen_seat`
--
ALTER TABLE `mo_screen_seat`
 ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `mo_screen_time`
--
ALTER TABLE `mo_screen_time`
 ADD PRIMARY KEY (`sc_time_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
 ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mo_area`
--
ALTER TABLE `mo_area`
MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mo_cinema`
--
ALTER TABLE `mo_cinema`
MODIFY `cin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mo_movie`
--
ALTER TABLE `mo_movie`
MODIFY `mov_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `mo_movie_screen`
--
ALTER TABLE `mo_movie_screen`
MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mo_screen`
--
ALTER TABLE `mo_screen`
MODIFY `screen_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `mo_screen_seat`
--
ALTER TABLE `mo_screen_seat`
MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=407;
--
-- AUTO_INCREMENT for table `mo_screen_time`
--
ALTER TABLE `mo_screen_time`
MODIFY `sc_time_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
