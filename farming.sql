-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2023 at 05:04 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farming`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `farmer_fname` varchar(50) NOT NULL,
  `farmer_lname` varchar(50) NOT NULL,
  `farmer_address` varchar(100) NOT NULL,
  `farmer_phone` bigint(20) NOT NULL,
  `farmer_district` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `farmer_phone` (`farmer_phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `farmer_fname`, `farmer_lname`, `farmer_address`, `farmer_phone`, `farmer_district`) VALUES
(1, 'as', 'dd', 'ff', 123445, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `user_type`, `comment`, `uid`) VALUES
(1, 'admin', 'sdsd', 1),
(2, 'Farmer', 'ss', 1),
(3, 'Farmer', 'good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `reg_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `username`, `password`, `user_type`, `reg_id`, `status`) VALUES
(1, 'farmer', 'farmer', 'Farmer', 1, 1),
(2, 'retailer', 'retailer', 'Retailer', 3, 1),
(3, 'admin', 'admin', 'Admin', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_pdt`
--

CREATE TABLE IF NOT EXISTS `order_pdt` (
  `or_id` int(5) NOT NULL AUTO_INCREMENT,
  `f_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_rate` int(5) NOT NULL,
  `p_qty` int(5) NOT NULL,
  `p_total` int(5) NOT NULL,
  `p_status` int(3) NOT NULL,
  PRIMARY KEY (`or_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_pdt`
--

INSERT INTO `order_pdt` (`or_id`, `f_id`, `p_id`, `p_name`, `p_rate`, `p_qty`, `p_total`, `p_status`) VALUES
(1, 1, 1, 'jaya rice', 5, 60, 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `pdt_name` varchar(25) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `pdt_name`, `desc`, `price`, `f_id`) VALUES
(1, 'jaya rice', 'best one', 60, 1),
(3, 'ss', 'dd', 23, 1),
(4, 'kappa', 'nalla kappa', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE IF NOT EXISTS `retailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` bigint(11) NOT NULL,
  `user_district` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_phone` (`user_phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`id`, `user_fname`, `user_lname`, `user_address`, `user_phone`, `user_district`) VALUES
(1, 's', 'f', 'ad', 444566, 'dd'),
(2, 'aa', 'dd', 'asdf', 67887, 'asd'),
(3, 'asd', 'ddd', 'df', 456, 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adv`
--

CREATE TABLE IF NOT EXISTS `tbl_adv` (
  `ad_id` int(5) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(20) NOT NULL,
  `desc` varchar(40) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `r_id` int(5) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_adv`
--

INSERT INTO `tbl_adv` (`ad_id`, `ad_name`, `desc`, `photo`, `r_id`) VALUES
(1, 'tractor', 'tractors sale', 'ksrtc.png', 3);
