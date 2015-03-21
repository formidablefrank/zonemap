-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2015 at 07:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upcsi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `point_id` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `point_id` (`point_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `point_id`, `comment`, `username`, `date_created`) VALUES
(1, 1, 'This is a comment', 'user1', '2015-03-21 05:14:20'),
(2, 1, 'This is a comment too', 'user2', '2015-03-21 05:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `point_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `address` text NOT NULL,
  `policepoint` int(1) NOT NULL,
  PRIMARY KEY (`point_id`),
  UNIQUE KEY `lat` (`lat`),
  UNIQUE KEY `lng` (`lng`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`point_id`, `date_created`, `lat`, `lng`, `address`, `policepoint`) VALUES
(1, '2015-03-21 03:02:21', 12, 121, 'Address1', 0),
(2, '2015-03-21 03:02:21', 12.5, 121.54000091552734, 'Address2', 0),
(3, '2015-03-21 03:55:46', 12.010000228881836, 121.12000274658203, 'address4', 0),
(6, '2015-03-21 03:59:05', 12.00100040435791, 121.01200103759766, 'address5', 0),
(8, '2015-03-21 04:02:06', 12.031000137329102, 121.03199768066406, 'address6', 0),
(9, '2015-03-21 04:03:47', 12.201000213623047, 122.21199798583984, 'address5', 0),
(10, '2015-03-21 04:06:38', 12.710000038146973, 120.12000274658203, 'address8', 0),
(11, '2015-03-21 04:07:13', 13.00100040435791, 123.01200103759766, 'address5', 0),
(12, '2015-03-21 04:08:09', 10.710000038146973, 119.12000274658203, 'address8', 0),
(14, '2015-03-21 04:08:59', 10.791000366210938, 119.12100219726562, 'address8', 0),
(16, '2015-03-21 04:10:38', 15.791000366210938, 125.12100219726562, 'address8', 1),
(17, '2015-03-21 04:11:48', 1, 12, 'address10', 1),
(19, '2015-03-21 04:13:27', 1.0010000467300415, 132, 'address5', 1),
(20, '2015-03-21 04:13:42', 1.100100040435791, 12.109999656677246, 'address5', 0),
(22, '2015-03-21 04:30:46', 14.579999923706055, 121.0000991821289, 'manila', 0),
(23, '2015-03-21 04:34:39', 14.550000190734863, 121.0333023071289, 'makati', 0),
(24, '2015-03-21 04:37:25', 14.843299865722656, 120.8114013671875, 'malolos', 0);

-- --------------------------------------------------------

--
-- Table structure for table `policepoints`
--

CREATE TABLE IF NOT EXISTS `policepoints` (
  `policepoint_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  PRIMARY KEY (`policepoint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `policepoints`
--

INSERT INTO `policepoints` (`policepoint_id`, `date_created`, `lat`, `lng`, `address`, `phonenumber`) VALUES
(1, '2015-03-21 05:36:09', 14.5513579, 121.0297277, 'Makati Central Police Headquarters', ''),
(2, '2015-03-21 05:36:09', 14.5600393, 121.0280111, 'F. Banag Police Station', '');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `point_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`),
  KEY `point_id` (`point_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `point_id`, `date_created`, `rate`) VALUES
(1, 24, '2015-03-21 05:02:32', 5),
(2, 24, '2015-03-21 05:02:32', 4),
(3, 1, '2015-03-21 05:03:58', 5),
(4, 1, '2015-03-21 05:03:58', 1);

-- --------------------------------------------------------

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`point_id`) REFERENCES `points` (`point_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`point_id`) REFERENCES `points` (`point_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
