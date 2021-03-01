-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 05:05 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(70) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `userName`, `password`, `name`, `phone`, `role`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Dorian Jenkins', '+1 (457) 132-889', 'admin'),
(6, 'ashik', '665f216444d0235a567667bad2c09e11', 'Cheryl Dixon', '+1 (825) 371-277', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Old Age Home'),
(2, 'Orphanages'),
(3, 'Physically Challenged Persons'),
(4, 'Sick Persons');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `donation_amount` text NOT NULL,
  `method_name` text NOT NULL,
  `transection_no` text NOT NULL,
  `user_email` text,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `donation_amount`, `method_name`, `transection_no`, `user_email`, `event_id`, `status`) VALUES
(18, '5000', 'Bkash', '123654', 'cosmic@gmail.com', 14, 1),
(19, '5000', 'Bkash', '123654', 'cosmic@gmail.com', 14, 0),
(20, '5000', 'Bkash', '123654', 'ashik2@gmail.com', 14, 0),
(21, '2000', 'DBBL/ROCKET', '123654234', 'ashik2@gmail.com', 14, 1),
(22, '2000', 'DBBL/ROCKET', '123654234', 'ashik2@gmail.com', 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `donation_amount` text NOT NULL,
  `expire_date` text NOT NULL,
  `image` text NOT NULL,
  `pdf` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `user_email` text,
  `verify_emp_id` int(11) NOT NULL,
  `emp_comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `cat_id`, `title`, `description`, `donation_amount`, `expire_date`, `image`, `pdf`, `status`, `user_email`, `verify_emp_id`, `emp_comment`) VALUES
(13, 1, 'à¦¤à¦¾à¦®à¦¬à¦¿à¦° à¦•à§‡ à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯ à¦•à¦°à§à¦¨ ', '<p>à¦‰à¦œà§à¦œà§à¦¬à¦² à¦¬à§ˆà¦°à¦¾à¦—à§€ à¦†à¦®à¦¾à¦¦à§‡à¦° MCT à¦¡à¦¿à¦ªà¦¾à¦°à§à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦à¦° à¦à¦•à¦œà¦¨ à¦›à¦¾à¦¤à§à¦°à¥¤ à¦“à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¬à§œ à¦ªà¦°à¦¿à¦šà§Ÿ, à¦¸à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦œà¦¾à¦¤à§€à§Ÿ à¦¹à§à¦‡à¦²à¦šà§‡à§Ÿà¦¾à¦° à¦•à§à¦°à¦¿à¦•à§‡à¦Ÿ à¦¦à¦²à§‡à¦° à¦à¦•à¦œà¦¨ à¦…à¦ªà¦°à¦¿à¦¹à¦¾à¦°à§à¦¯ à¦–à§‡à¦²à§‹à§Ÿà¦¾à¦°à¥¤<br />\r\nà¦¸à§‡ à¦à¦•à¦¦à¦¿à¦¨ à¦§à¦¾à¦¨à¦®à¦¨à§à¦¡à¦¿ à§©à§¨ à¦¨à¦‚ à¦ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà§‡à¦²à§‹ à¦¤à¦¾à¦®à¦¬à¦¿à¦° à¦¨à¦¾à¦®à§‡ à¦à¦• à¦›à§‡à¦²à§‡à¦•à§‡; à¦¯à§‡ à¦•à¦¿à¦¨à¦¾ à¦¹à§à¦‡à¦²à¦šà§‡à§Ÿà¦¾à¦°à§‡ à¦•à¦°à§‡ à¦«à§à¦² à¦¬à¦¿à¦•à§à¦°à¦¿ à¦•à¦°à§‡à¥¤ à¦¤à¦¾à¦®à¦¬à¦¿à¦° à¦à¦° à¦­à¦¾à¦™à§à¦—à¦¾ à¦¹à§à¦‡à¦²à¦šà§‡à§Ÿà¦¾à¦°à¦Ÿà¦¿ à¦†à¦°à§‹ à¦­à§‡à¦™à§à¦—à§‡ à¦¯à¦¾à§Ÿ à¦à¦•à¦Ÿà¦¾ à¦®à§‹à¦Ÿà¦°à¦¸à¦¾à¦‡à¦•à§‡à¦² à¦à¦° à¦§à¦¾à¦•à§à¦•à¦¾à§Ÿà¥¤ à¦¤à¦¾à¦‡ à¦‰à¦œà§à¦œà§à¦¬à¦² à¦¬à§ˆà¦°à¦¾à¦—à§€à¦•à§‡ à¦¯à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ (à¦‹à¦¶à¦¿à¦²à§à¦ªà§€ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦…à¦¨à¦²à§à¦¸) à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯ à¦•à¦°à§‡ à¦†à¦¸à¦›à§‡ à¦¤à¦¾à¦° à¦²à§‡à¦–à¦¾à¦ªà§œà¦¾à¦° à¦œà¦¨à§à¦¯; à¦¸à§‡à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡à¦° à¦•à¦¾à¦›à§‡ à¦¸à§‡ à¦¶à¦°à¦¨à¦¾à¦ªà¦¨à§à¦¨ à¦¹à§Ÿ, à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯ à¦šà¦¾à§Ÿ à¦¤à¦¾à¦®à¦¬à¦¿à¦°à§‡à¦° à¦œà¦¨à§à¦¯ à¦à¦•à¦Ÿà¦¾ à¦¹à§à¦‡à¦²à¦šà§‡à§Ÿà¦¾à¦°à§‡à¦°à¥¤ à¦‹à¦¶à¦¿à¦²à§à¦ªà§€ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦…à¦¨à¦²à§à¦¸ à¦¸à¦¾à¦¤à¦•à§à¦·à§€à¦°à¦¾ à¦¥à§‡à¦•à§‡ à¦•à§à¦°à¦¿à§Ÿà¦¾à¦° à¦•à¦°à§‡ à¦à¦•à¦Ÿà¦¿ à¦¹à§à¦‡à¦² à¦šà§‡à§Ÿà¦¾à¦° à¦ªà¦¾à¦ à¦¿à§Ÿà§‡ à¦¦à§‡à§Ÿ à¦¤à¦¾à¦®à¦¬à¦¿à¦°à§‡à¦° à¦œà¦¨à§à¦¯à¥¤<br />\r\nà¦à¦•à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦• à¦¹à¦¿à¦¸à§‡à¦¬à§‡ à¦†à¦œ à¦†à¦®à¦¾à¦° à¦–à§à¦¬ à¦—à¦°à§à¦¬ à¦¹à¦šà§à¦›à§‡à¥¤ à¦†à¦®à¦¾à¦° à¦›à¦¾à¦¤à§à¦° à¦®à¦¾à¦¨à§à¦· à¦¹à§Ÿà§‡ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦ªà¦¾à¦¶à§‡ à¦¦à¦¾à¦à§œà¦¿à§Ÿà§‡à¦›à§‡à¥¤ à¦‰à¦œà§à¦œà§à¦¬à¦² à¦¤à§à¦®à¦¿ à¦¸à¦¤à§à¦¯à¦‡ à¦à¦•à¦œà¦¨ à¦‰à¦œà§à¦œà§à¦¬à¦² à¦®à¦¾à¦¨à§à¦·à¥¤ à¦¤à§à¦®à¦¿ à¦¬à§œ à¦¹à¦“à¥¤<br />\r\nà¦†à¦®à¦¿ à¦§à¦¨à§à¦¯à¦¬à¦¾à¦¦ à¦œà¦¾à¦¨à¦¾à¦‡ à¦‹à¦¶à¦¿à¦²à§à¦ªà§€ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦…à¦¨à¦²à§à¦¸ à¦•à§‡à¥¤ à¦à¦­à¦¾à¦¬à§‡ à¦ªà¦¾à¦¶à§‡ à¦¥à¦¾à¦•à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à¦†à¦°à§‹ à¦§à¦¨à§à¦¯à¦¬à¦¾à¦¦ à¦œà¦¾à¦¨à¦¾à¦‡ Daffodil International University à¦à¦° à¦Ÿà§à¦°à§‡à¦œà¦¾à¦°à¦¾à¦° à¦¸à§à¦¯à¦¾à¦° à¦œà¦¨à¦¾à¦¬ à¦¹à¦¾à¦®à¦¿à¦¦à§à¦² à¦¹à¦• à¦–à¦¾à¦¨ à¦•à§‡, à¦¯à¦¿à¦¨à¦¿ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà¦¾à¦¶à§‡ à¦›à¦¿à¦²à§‡à¦¨à¥¤</p>\r\n', '50000', '2019-10-31', '5d809e71b792f9.89971428.jpg', '5d809e71b8ae13.25579899.pdf', 1, 'admin', 6, 'hhhhhhhh'),
(14, 2, 'à¦œà§€à¦¬à¦¨ à¦¬à¦¾à¦šà¦¾à¦¤à§‡ à¦à¦—à¦¿à§Ÿà§‡ à¦†à¦¸à§à¦¨ ', '<p>à¦‰à¦®à§à¦®à§‡ à¦«à¦¾à¦¤à¦¿à¦®à¦¾(à¦ªà§à¦°à¦®à¦¿) à¦à¦•à¦œà¦¨ à¦à¦•à§à¦¸ à¦®à¦¾à¦‡à¦²à¦¸à§à¦Ÿà§‹à¦¨à¦¿à§Ÿà¦¾à¦¨ à¦à¦¬à¦‚ à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦¤à¦¿à¦¤à§à¦®à§€à¦° à¦•à¦²à§‡à¦œà§‡à¦° à¦‰à¦¦à§à¦­à¦¿à¦¦à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à§©à§Ÿ à¦¬à¦°à§à¦·à§‡à¦° à¦®à§‡à¦§à¦¾à¦¬à§€ à¦›à¦¾à¦¤à§à¦°à§€à¥¤<br />\r\nà¦¸à§‡ à¦†à¦œ à¦ªà¦¾à¦•à¦¸à§à¦¥à¦²à§€à¦° à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦°à§‡ à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¹à§Ÿà§‡ à¦‰à¦¤à§à¦¤à¦°à¦¾à¦° à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦«à¦° à¦‰à¦‡à¦®à§‡à¦¨ à¦à¦¨à§à¦¡ à¦¹à¦¸à¦ªà¦¿à¦Ÿà¦¾à¦²à§‡ à¦®à§ƒà¦¤à§à¦¯à§à¦° à¦¸à¦¾à¦¥à§‡ à¦ªà¦¾à¦žà§à¦œà¦¾ à¦²à§œà¦›à§‡à¥¤<br />\r\nà¦‰à¦•à§à¦¤ à¦¹à¦¸à¦ªà¦¿à¦Ÿà¦¾à¦²à§‡ à¦‡à¦¤à¦¿à¦®à¦§à§à¦¯à§‡ à¦“à¦° à¦¤à¦¿à¦¨à¦Ÿà¦¿ à¦…à¦ªà¦¾à¦°à§‡à¦¶à¦¨ à¦¸à¦®à§à¦ªà¦¨à§à¦¨ à¦¹à¦²à§‡à¦“ à¦“à¦° à¦…à¦¬à¦¸à§à¦¥à¦¾à¦° à¦•à§‹à¦¨à§‹ à¦‰à¦¨à§à¦¨à¦¤à¦¿ à¦¹à§Ÿà¦¨à¦¿à¥¤à¦‰à¦•à§à¦¤ à¦¹à¦¸à¦ªà¦¿à¦Ÿà¦¾à¦²à§‡à¦° à¦¡à¦¾à¦•à§à¦¤à¦¾à¦°à¦—à¦¨ à¦“à¦•à§‡ à¦­à¦¾à¦°à¦¤à§‡à¦° The Christian Medical College, Vellore à¦ à¦‰à¦¨à§à¦¨à¦¤ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾à¦°<br />\r\nà¦œà¦¨à§à¦¯ à¦ªà¦°à¦¾à¦®à¦°à§à¦¶ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¦¨à¥¤ à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾à¦° à¦œà¦¨à§à¦¯ à¦ªà§à¦°à¦¾à§Ÿ 30(+)à¦²à¦•à§à¦· à¦Ÿà¦¾à¦•à¦¾à¦° à¦¦à¦°à¦•à¦¾à¦°à¥¤à¦ªà§à¦°à¦®à¦¿à¦° à¦¬à¦¾à¦¬à¦¾ à¦…à¦¬à¦¸à¦° à¦ªà§à¦°à¦¾à¦ªà§à¦¤ à¦à¦•à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦• à¦à¦¬à¦‚ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦¬à¦¾à¦°à§à¦§à¦•à§à¦¯ à¦œà¦¨à¦¿à¦¤ à¦•à¦¾à¦°à¦¨à§‡ à¦…à¦¸à§à¦¸à§à¦¥à¥¤à¦‡à¦¤à¦¿à¦®à¦§à§à¦¯à§‡ à¦ªà§à¦°à¦®à¦¿à¦° à¦ªà¦°à¦¿à¦¬à¦¾à¦° à¦¤à¦¾à¦¦à§‡à¦° à¦œà¦®à¦¿ à¦œà¦®à¦¾ à¦¬à¦¿à¦•à§à¦°à¦¿ à¦•à¦°à§‡ à¦¦à¦¿à§Ÿà§‡à¦“ à¦Ÿà¦¾à¦•à¦¾ à¦œà§‹à¦—à¦¾à§œ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¦¿à¥¤<br />\r\nà¦†à¦®à¦°à¦¾ à¦šà¦¾à¦‡ à¦¨à¦¾ à¦Ÿà¦¾à¦•à¦¾à¦° à¦œà¦¨à§à¦¯ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà§à¦°à¦®à¦¿ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦®à¦§à§à¦¯ à¦¥à§‡à¦•à§‡ à¦šà¦²à§‡ à¦¯à¦¾à¦•à¥¤ à¦¸à¦¬à¦¾à¦‡ à¦…à¦²à§à¦ª à¦…à¦²à§à¦ª à¦•à¦°à§‡ à¦¦à¦¿à¦²à§‡à¦“ à¦…à¦¨à§‡à¦• à¦Ÿà¦¾à¦•à¦¾ à¦¹à¦¬à§‡, à¦…à¦²à§à¦ª à¦¥à§‡à¦•à§‡à¦‡ à¦¬à§ƒà¦¹à§Ž à¦à¦° à¦¸à§ƒà¦·à§à¦Ÿà¦¿ à¥¤à¦†à¦° à¦¬à¦¿à¦¶à§‡à¦· à¦•à¦°à§‡ à¦†à¦®à¦¾à¦° à¦•à¦¾à¦›à§‡à¦° à¦°à¦¿à¦²à§‡à¦Ÿà¦¿à¦­ à¦“ à¦¬à¦¨à§à¦§à§à¦¦à§‡à¦°à¦¦ à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯ à¦†à¦¶à¦¾ à¦•à¦°à¦›à¦¿à¥¤ à¦¸à¦¬à¦¾à¦‡ à¦†à¦¨à§à¦¤à¦°à¦¿à¦•à¦¾à¦° à¦¸à¦¾à¦¥à§‡ à¦à¦•à¦Ÿà§ à¦à¦—à¦¿à§Ÿà§‡ à¦†à¦¸à¦¿à¥¤à¦†à¦®à¦¾à¦¦à§‡à¦° à¦†à¦¨à§à¦¤à¦°à¦¿à¦•à¦¤à¦¾à¦‡ à¦ªà§à¦°à¦®à¦¿à¦•à§‡ à¦¸à§à¦¸à§à¦¥ à¦•à¦°à§‡ à¦«à¦¿à¦°à¦¿à§Ÿà§‡ à¦†à¦¨à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¥¤<br />\r\nà¦¸à¦¬à¦¾à¦‡ à¦¸à¦¬à¦¾à¦° DBBL à¦¬à¦¾ à¦¬à¦¿à¦•à¦¾à¦¶ à¦¥à§‡à¦•à§‡ à¦…à¦²à§à¦ª à¦•à¦¿à¦›à§ à¦•à¦°à§‡ à¦¸à§‡à¦¨à§à¦Ÿ à¦•à¦°à¦²à§‡à¦“ à¦…à¦¨à§‡à¦• à¦‰à¦ªà¦•à¦¾à¦° à¦¹à¦¬à§‡ à¦®à§‡à§Ÿà§‡à¦Ÿà¦¾à¦°à¥¤<br />\r\nà¦¬à¦¿à¦•à¦¾à¦¶ : à§¦à§§à§­à§©à§§à§¦à§¦à§¨à§§à§¨à§©<br />\r\nDBBL: 01931652476<br />\r\nà¦•à§‹à¦¨ à¦¤à¦¥à§à¦¯à§‡à¦° à¦œà¦¨à§à¦¯ à¦¬à¦¾ à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡à¦° à¦œà¦¨à§à¦¯ à¦¯à§‹à¦—à¦¾à¦¯à§‹à¦— à¦•à¦°à§à¦¨à¦ƒ</p>\r\n', '100000', '2019-11-20', '5d809f5e8f4cf5.99073726.jpg', '5d809f5e8f5022.38751615.pdf', 0, 'admin', 6, 'tt'),
(16, 2, 'à¦à¦—à¦¿à§Ÿà§‡ à¦†à¦¸à§à¦¨ ', '<p>à¦›à§‹à¦Ÿà§à¦Ÿ à¦›à§‡à¦²à§‡à¦Ÿà¦¾à¦° à¦®à¦¾à§Ÿà§‡à¦° à¦ªà§à¦°à¦¤à¦¿ à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¾ à¦¦à§‡à¦–à§‡ à¦†à¦®à¦°à¦¾ à¦¸à¦¤à§à¦¯à¦¿à¦‡ à¦…à¦¬à¦¾à¦• à¦¹à§Ÿà§‡ à¦›à¦¿à¦²à¦¾à¦®à¥¤<br />\r\nà¦¸à¦¬à¦¾à¦‡ à¦šà¦¾à§Ÿà§‡à¦° à¦¦à§‹à¦•à¦¾à¦¨à§‡à¦° à¦¸à¦¾à¦®à¦¨à§‡ à¦¦à¦¾à¦à§œà¦¿à§Ÿà§‡ à¦†à¦¡à§à¦¡à¦¾ à¦¦à¦¿à¦šà§à¦›à¦¿à¦²à¦¾à¦® à¦•à§à¦²à¦¾à¦¸ à¦¶à§‡à¦·à§‡à¥¤ à¦¹à¦ à¦¾à§Ž à¦›à§‹à¦Ÿà§à¦Ÿ à¦à¦•à¦Ÿà¦¾ à¦›à§‡à¦²à§‡ à¦†à¦¸à¦²à§‹, à¦¦à¦¶à¦Ÿà¦¾ à¦Ÿà¦¾à¦•à¦¾ à¦¦à§‡à¦¨, à¦–à¦¿à¦¦à¦¾ à¦²à¦¾à¦—à¦›à§‡, à¦­à¦¾à¦¤ à¦–à¦¾à¦®à§à¥¤<br />\r\nà¦†à¦¶à¦¿à¦•(<a href=\"https://www.facebook.com/aashikurr?__tn__=%2CdK-R-R&amp;eid=ARAOqoSju-xeIewM0XahGqz_agM27bTIpqBKkJ-sJVuIraJYLDcdhDEIFO77_OvqYU5nc9Ul12K-FfLW&amp;fref=mentions\">Ashik</a>) - à¦®à¦¿à¦œà§, à¦“à¦°à§‡ à¦¦à§‹à¦•à¦¾à¦¨ à¦¥à§‡à¦•à§‡ à¦à¦•à¦Ÿà¦¾ à¦¬à¦¿à¦¸à§à¦•à§à¦Ÿ à¦•à¦¿à¦¨à§‡ à¦¦à¦¾à¦“à¥¤<br />\r\n-à¦¨à¦¾ à¦†à¦®à¦¿ à¦­à¦¾à¦¤ à¦–à¦¾à¦®à§à¥¤<br />\r\n<a href=\"https://www.facebook.com/masumvog?__tn__=%2CdK-R-R&amp;eid=ARAlENyXmQFgn5lZmBcgP-0wjVcqUboBVwVokLvzwyqr6zH2WRGZdViX6J8wZu92yTTsDrn-oW_62r64&amp;fref=mentions\">à¦¬à¦¿à¦²à§à¦²à¦¾à¦¹à§</a>- à¦¦à¦¶ à¦Ÿà¦¾à¦•à¦¾à§Ÿ à¦­à¦¾à¦¤ à¦ªà¦¾à¦¬à¦¿ à¦¨à¦¾à¦•à¦¿? à¦…à¦¨à§à¦¯ à¦•à¦¿à¦›à§ à¦–à¦¾à¦?<br />\r\n-à¦¨à¦¾, à¦†à¦®à¦¿ à¦­à¦¾à¦¤ à¦–à¦¾à¦®à§à¥¤<br />\r\nà¦®à¦¿à¦œà§(<a href=\"https://www.facebook.com/mdmijuahamed.shourov?__tn__=%2CdK-R-R&amp;eid=ARBorLNFsGTGeXUIZqLcTVS5oYTre4MBCXUt8mOv8Or6NwQjdnr5RaA-u8-GLlYuYJP8pUeEXpduquO-&amp;fref=mentions\">Miju</a>) - à¦¨à¦¿à¦°à§à¦¬à¦¾à¦• à¦­à¦¾à¦¬à§‡ à¦¶à§à¦§à§ à¦¦à§‡à¦–à¦›à¦¿à¦²à§‹, à¦¬à¦°à¦¾à¦¬à¦°à§‡à¦° à¦®à¦¤ à¦¸à§‡ à¦šà§à¦ªà¥¤<br />\r\nà¦¨à¦¿à¦ªà¦¾(<a href=\"https://www.facebook.com/mahmuda.nipa.52?__tn__=%2CdK-R-R&amp;eid=ARDSR7Ct5cfO_bH19i5zsqT6QNI6ff6GXxqyyssunEbfPAhGoJaK2Fg6ww74Ej3fDzo8gE4qUBqIol6l&amp;fref=mentions\">Nipa</a>) - à¦¸à§à¦œà§Ÿ à¦¤à¦¾à¦‡à¦²à§‡ à¦“à¦°à§‡ à¦­à¦¾à¦¤ à¦–à¦¾à¦“à§Ÿà¦¾à¦‡ à¦šà¦² à¦¸à¦¬à¦¾à¦‡ à¦®à¦¿à¦²à§‡à¥¤<br />\r\nà¦¸à§à¦œà§Ÿ(<a href=\"https://www.facebook.com/sujoydeymishuk?__tn__=%2CdK-R-R&amp;eid=ARBWx0voFyqioxxg5rtShMiSKpftTrP9S8X_3otnoekTiB50BCFIyo99elscfTaRZts14mIHUh98mIqo&amp;fref=mentions\">Sujoy</a>)- à¦†à¦šà§à¦›à¦¾ à¦“à¦°à§‡ à¦¨à¦¿à§Ÿà¦¾ à¦¹à§‹à¦Ÿà§‡à¦²à§‡ à¦¯à¦¾ à¦à¦•à¦œà¦¨, à¦¬à¦¿à¦² à¦¸à¦¬à¦¾à¦‡ à¦®à¦¿à¦²à§‡à¦‡ à¦¦à¦¿à¦šà§à¦›à¦¿, à¦•à¦¤à¦Ÿà§à¦•à§à¦‡ à¦†à¦° à¦–à¦¾à¦¬à§‡à¥¤<br />\r\nà¦®à¦¾à¦¸à§à¦®(<a href=\"https://www.facebook.com/profile.php?id=100007272455951&amp;__tn__=%2CdK-R-R&amp;eid=ARAEUPeegO08yQc92kvR6vzmgfqIWogPC5THpk2mdaJ78rSDd0EhYm1zx4_7DG5kYX_i3JfoarOywnUL&amp;fref=mentions\">Masum</a>)- à¦†à¦šà§à¦›à¦¾ à¦†à¦®à¦¿ à¦“à¦°à§‡ à¦¬à¦¿à¦°à¦¿à§Ÿà¦¾à¦¨à§€ à¦–à¦¾à¦“à§Ÿà¦¾à¦‡ à¦†à¦œ, à¦•à¦¤ à¦Ÿà¦¾à¦•à¦¾à¦‡à¦¤à§‹ à¦¨à¦·à§à¦Ÿ à¦•à¦°à¦¿à¥¤ à¦šà¦² à¦¤à§‹à¦•à§‡ à¦¬à¦¿à¦°à¦¿à§Ÿà¦¾à¦¨à§€ à¦–à¦¾à¦“à§Ÿà¦¾à¦®à§ à¥¤<br />\r\nà¦­à¦¾à¦‡ à¦†à¦®à¦¾à¦° à¦†à¦®à§à¦®à¦¾ à¦†à¦° à¦¬à§‹à¦‡à¦¨à¦Ÿà¦¾à¦“ à¦¨à¦¾ à¦–à¦¾à¦‡à§Ÿà¦¾ à¦†à¦›à§‡...<br />\r\nà¦¸à¦¬à¦¾à¦‡ à¦šà§à¦ª à¦¤à¦–à¦¨à¥¤ à¦¹à§Ÿà¦¤à§‹ à¦°à¦¾à¦— à¦•à¦°à¦¾à¦° à¦•à¦¥à¦¾ à¦›à¦¿à¦²à§‹ à¦•à¦¿à¦¨à§à¦¤à§ à¦¤à¦¾ à¦¹à¦šà§à¦›à§‡ à¦¨à¦¾ à¦•à¦¾à¦°à¦£ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦†à¦®à¦°à¦¾ à¦–à¦¾à¦“à§Ÿà¦¾à¦° à¦¸à¦®à§Ÿ à¦–à§‹à¦à¦œ à¦¨à§‡à¦‡ à¦¨à¦¾ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦®à¦¾ à¦¬à¦¾à¦¸à¦¾à§Ÿ à¦–à§‡à§Ÿà§‡à¦›à§‡ à¦•à¦¿à¦¨à¦¾ à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦à¦‡ à¦›à§‹à¦Ÿà§à¦Ÿ à¦®à§‡à§Ÿà§‡à¦Ÿà¦¾ à¦¯à¦–à¦¨à¦‡ à¦­à¦¾à¦²à§‹ à¦•à¦¿à¦›à§ à¦–à¦¾à¦“à§Ÿà¦¾à¦° à¦œà¦¨à§à¦¯ à¦…à¦«à¦¾à¦° à¦ªà§‡à§Ÿà§‡à¦›à§‡ à¦¤à¦–à¦¨à¦‡ à¦¸à§‡ à¦¤à¦¾à¦° à¦®à¦¾ à¦†à¦° à¦¬à§‹à¦¨à§‡à¦° à¦•à¦¥à¦¾ à¦¬à¦²à§‡à¦›à§‡à¥¤ à¦•à¦¾à¦°à¦£ à¦¤à¦¾à¦°à¦¾à¦“ à¦¨à¦¾ à¦–à§‡à§Ÿà§‡ à¦†à¦›à§‡ à¦†à¦° à¦¸à§‡ à¦¤à¦¾à¦¦à§‡à¦° à¦°à§‡à¦–à§‡ à¦–à¦¾à¦¬à§‡ à¦¨à¦¾à¥¤<br />\r\nà¦†à¦®à¦¾à¦¦à§‡à¦° à¦®à¦¾à¦¸à§à¦® à¦®à§‹à¦²à§à¦²à¦¾ à¦šà¦²à§‡ à¦—à§‡à¦²à§‹ à¦¦à§‹à¦•à¦¾à¦¨à§‡ à¦–à¦¾à¦¬à¦¾à¦° à¦•à¦¿à¦¨à¦¤à§‡à¥¤<br />\r\nà¦à¦° à¦®à¦¾à¦à§‡ à¦°à¦¾à¦•à¦¿à¦¬à¦¾(<a href=\"https://www.facebook.com/megherkole.rod.12?__tn__=%2CdK-R-R&amp;eid=ARAHSMKj9Q6wI9ehNlo9olvViRRY6ogck-MeaZRzutBOfYkKJaGQWT8TS15x3FH-55ebtzl9bQ_HV9mb&amp;fref=mentions\">Rakiba</a>) à¦†à¦¸à¦²à§‹, à¦¸à¦¬ à¦¶à§‹à¦¨à§‡ à¦¸à§‡ à¦…à¦¨à§‡à¦• à¦–à§à¦¶à¦¿ à¦†à¦° à¦¬à¦²à¦² à¦†à¦®à¦¿à¦“ à¦¤à¦¾à¦¹à¦²à§‡ à¦•à¦¿à¦›à§ à¦Ÿà¦¾à¦•à¦¾ à¦¦à§‡à¦‡à¥¤ à¦•à¦¿à¦›à§à¦•à§à¦·à¦¨ à¦ªà¦° à¦®à¦¾à¦¸à§à¦® à¦¦à§à¦‡à¦Ÿà¦¾ à¦¬à¦¿à¦°à¦¿à§Ÿà¦¾à¦¨à§€ à¦ªà§‡à¦•à§‡à¦Ÿ à¦†à¦° à¦¸à¦¾à¦¥à§‡ à¦à¦•à¦Ÿà¦¾ à¦ à¦¾à¦¨à§à¦¡à¦¾ à¦¡à§à¦°à¦¿à¦™à§à¦•à¦¸ à¦à¦° à¦¬à§‹à¦¤à¦² à¦¨à¦¿à§Ÿà§‡ à¦«à¦¿à¦°à¦²à§‹ à¦†à¦° à¦®à§‡à§Ÿà§‡à¦Ÿà¦¾à¦•à§‡ à¦¦à¦¿à¦²à§‹à¥¤ à¦¸à§‡ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¥à§‡à¦•à§‡ à¦†à¦° à¦Ÿà¦¾à¦•à¦¾ à¦¨à§‡à§Ÿà¦¨à¦¿ à¥¤<br />\r\nà¦¸à§‡à¦¦à¦¿à¦¨ à¦¦à§‡à¦–à§‡à¦›à¦¿ à¦®à¦¾à§Ÿà§‡à¦° à¦ªà§à¦°à¦¤à¦¿ à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¾, à¦¯à¦¾ à¦¥à§‡à¦•à§‡ à¦¹à§Ÿà¦¤à§‹ à¦†à¦®à¦°à¦¾ à¦…à¦¨à§‡à¦• à¦•à¦¿à¦›à§à¦‡ à¦¶à¦¿à¦–à¦¤à§‡ à¦ªà¦¾à¦°à¦¿à¥¤<br />\r\nà¦•à¦¥à¦¾à¦—à§à¦²à§‹ à¦¬à¦²à§‡ à¦à¦Ÿà¦¾ à¦¬à§‹à¦à¦¤à§‡ à¦šà¦¾à¦šà§à¦›à¦¿ à¦¨à¦¾ à¦®à¦¾à¦¨à§à¦·à¦—à§à¦²à§‹ à¦•à¦¤ à¦­à¦¾à¦²à§‹ à¦¬à¦¾ à¦¤à¦¾à¦¦à§‡à¦° à¦®à¦¹à¦¾à¦¨à¦“ à¦¬à¦¾à¦¨à¦¾à¦¤à§‡ à¦šà¦¾à¦šà§à¦›à¦¿ à¦¨à¦¾, à¦¯à§‡à¦Ÿà¦¾ à¦¬à¦²à¦¤à§‡ à¦šà¦¾à¦šà§à¦›à¦¿ à¦¤à¦¾ à¦¹à¦² à¦†à¦®à¦°à¦¾ à¦›à§‹à¦Ÿ à¦œà¦¿à¦¨à¦¿à¦¸ à¦¥à§‡à¦•à§‡ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à¦¿, à¦†à¦° à¦à¦•à¦Ÿà§ à¦‡à¦šà§à¦›à¦¾ à¦•à¦°à¦²à§‡ à¦à¦‡ à¦¨à¦¾ à¦–à¦¾à¦“à§Ÿà¦¾ à¦¬à¦¾à¦šà§à¦šà¦¾à¦¦à§‡à¦° à¦à¦•à¦¬à§‡à¦²à¦¾à¦¤à§‹ à¦–à¦¾à¦“à§Ÿà¦¾à¦¤à§‡ à¦ªà¦¾à¦°à¦¿ à¦®à¦¾à¦à§‡ à¦®à¦¾à¦à§‡à¥¤ à¦¸à¦¬à¦¾à¦‡ à¦¯à¦¦à¦¿ à¦à¦•à¦œà¦¨ à¦•à¦°à§‡ à¦¬à¦¾à¦šà§à¦šà¦¾ à¦•à§‡à¦“ à¦à¦•à¦Ÿà§ à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯ à¦•à¦°à¦¿ à¦¤à¦¾à¦¹à¦²à§‡ à¦¹à§Ÿà¦¤à§‹ à¦…à¦¨à§‡à¦• à¦¬à¦¾à¦šà§à¦šà¦¾à¦‡ à¦à¦•à¦Ÿà¦¿ à¦¬à§‡à¦²à¦¾ à¦à¦•à¦Ÿà§ à¦–à§‡à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¥¤ à¦¤à¦¾à¦à¦°à¦¾ à¦¬à¦¿à¦°à¦¿à§Ÿà¦¾à¦¨à§€ à¦šà¦¾à§Ÿ à¦¨à¦¾ à¦®à¦°à¦¿à¦š à¦­à¦¾à¦¤ à¦¹à¦²à§‡à¦‡ à¦–à§à¦¶à§€à¥¤</p>\r\n', '100000', '2019-09-27', '5d80a0c5e948b2.89808417.jpg', '5d80a0c5e94c94.58954251.pdf', 1, 'admin', 6, 'ttttttttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text,
  `image3` text,
  `image4` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image1`, `image2`, `image3`, `image4`) VALUES
(10, '5d80a3ef1d6460.89403798.jpg', '5d80a3ef1d6645.09270304.jpg', '5d80a3ef1d6713.69080022.jpg', '5d80a3ef1d67c9.61185169.jpg'),
(9, '5d80a3b9d0a183.57253063.jpg', '5d80a3b9d0acd4.85343249.jpg', '5d80a3b9d0ae34.08303318.jpg', '5d80a3b9d0aff5.26214243.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nid` text NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `name`, `email`, `phone`, `password`, `nid`, `image`) VALUES
(1, 'Cocmic', 'cosmic@gmail.com', '01974013732', '202cb962ac59075b964b07152d234b70', '101', 'user.jpg'),
(2, 'ashik', 'ashik2@gmail.com', '01731002125', '81dc9bdb52d04dc20036dbd8313ed055', '19975645882542345', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
