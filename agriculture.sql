-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2018 at 06:58 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminselectedcrops_details`
--

CREATE TABLE IF NOT EXISTS `adminselectedcrops_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `crops_admin` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminselectedcrops_details`
--

INSERT INTO `adminselectedcrops_details` (`id`, `crops_admin`) VALUES
(1, 'pumpkin');

-- --------------------------------------------------------

--
-- Table structure for table `advisablecrop_details`
--

CREATE TABLE IF NOT EXISTS `advisablecrop_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_advisablecrop` varchar(50) NOT NULL,
  `month_advisablecrop` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `advisablecrop_details`
--

INSERT INTO `advisablecrop_details` (`id`, `name_advisablecrop`, `month_advisablecrop`) VALUES
(1, 'cabbage', 'January-December'),
(2, 'carrots', 'January-December'),
(3, 'cherry tomatoes', 'January-December'),
(4, 'Chinese eggplants', 'January-December'),
(5, 'black radish', 'January-December'),
(6, 'green beans', 'March-April-May'),
(7, 'butter lettuce', 'March-April-May'),
(8, 'cactus', 'March-April-May'),
(9, 'corn', 'March-April-May'),
(10, 'fennel', 'March-April-May'),
(11, 'peas', 'March-April-May'),
(12, 'acorn squash', 'September-October-November'),
(13, 'black salisfy', 'September-October-November'),
(14, 'cauliflower', 'September-October-November'),
(15, 'garlic', 'September-October-November'),
(16, 'delicata squash', 'September-October-November'),
(17, 'butternut squash', 'September-October-November');

-- --------------------------------------------------------

--
-- Table structure for table `advisableupload_details`
--

CREATE TABLE IF NOT EXISTS `advisableupload_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `advisable_pdf` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advisableupload_details`
--

INSERT INTO `advisableupload_details` (`id`, `advisable_pdf`) VALUES
(1, 'PhotoshopPDF.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE IF NOT EXISTS `contact_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contact_name` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_subject` text NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(1, 'jophsina', 'jophsina@gmail.com', 'Regarding Clarification', 'need to know disease details');

-- --------------------------------------------------------

--
-- Table structure for table `flowers_details`
--

CREATE TABLE IF NOT EXISTS `flowers_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_flowers` text NOT NULL,
  `name_flowers` text NOT NULL,
  `marketcost_flowers` int(10) NOT NULL,
  `fixedcost_flowers` int(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `flowers_details`
--

INSERT INTO `flowers_details` (`id`, `type_flowers`, `name_flowers`, `marketcost_flowers`, `fixedcost_flowers`, `image`) VALUES
(1, 'Flowers', 'jasmine', 60, 65, 'images/11jasmin.png'),
(2, 'Flowers', 'lilly', 50, 55, 'images/89lilly.jpg'),
(3, 'Flowers', 'lotus', 60, 60, 'images/5lotus.jpg'),
(4, 'Flowers', 'rose', 65, 70, 'images/18rose.jpg'),
(5, 'Flowers', 'rosespray', 100, 150, 'images/71rosespray.png'),
(6, 'Flowers', 'sunflower', 80, 85, 'images/5sunflower.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grains_details`
--

CREATE TABLE IF NOT EXISTS `grains_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_grains` text NOT NULL,
  `name_grains` text NOT NULL,
  `marketcost_grains` int(10) NOT NULL,
  `fixedcost_grains` int(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `grains_details`
--

INSERT INTO `grains_details` (`id`, `type_grains`, `name_grains`, `marketcost_grains`, `fixedcost_grains`, `image`) VALUES
(1, 'Grians', 'dal', 40, 45, 'images/87dal.jpg'),
(2, 'Grians', 'corn', 70, 75, 'images/69corn.jpg'),
(3, 'Grians', 'millet', 80, 90, 'images/98millet.jpg'),
(5, 'Grians', 'oats', 60, 65, 'images/56oats.jpg'),
(6, 'Grians', 'rice', 70, 75, 'images/97rice.jpg'),
(7, 'Grians', 'rye', 40, 50, 'images/18rye.jpg'),
(8, 'Grians', 'wheat', 70, 75, 'images/99wheat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nonadvisablecrop_details`
--

CREATE TABLE IF NOT EXISTS `nonadvisablecrop_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_nonadvisablecrop` text NOT NULL,
  `month_nonadvisablecrop` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `nonadvisablecrop_details`
--

INSERT INTO `nonadvisablecrop_details` (`id`, `name_nonadvisablecrop`, `month_nonadvisablecrop`) VALUES
(1, 'green beans', 'January-february'),
(2, 'butter lettuce', 'January-february'),
(3, 'cactus', 'January-february'),
(4, 'corn', 'January-february'),
(5, 'fennel', 'January-february'),
(6, 'peas', 'January-february');

-- --------------------------------------------------------

--
-- Table structure for table `nonadvisableupload_details`
--

CREATE TABLE IF NOT EXISTS `nonadvisableupload_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nonadvisable_pdf` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nonadvisableupload_details`
--

INSERT INTO `nonadvisableupload_details` (`id`, `nonadvisable_pdf`) VALUES
(1, 'images/94PhotoshopPDF.pdf'),
(2, 'PhotoshopPDF.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `precaution_details`
--

CREATE TABLE IF NOT EXISTS `precaution_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `disease_precaution` text NOT NULL,
  `precaution_precaution` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `precaution_details`
--

INSERT INTO `precaution_details` (`id`, `disease_precaution`, `precaution_precaution`) VALUES
(1, 'Anthracnose', 'tomato-Anthracnose. By using pesticides the precaution will be solved.'),
(2, 'Botrytis (gray mould)', 'pumpkin-Botrytis (gray mould). by using pesticides the precaution problem can be solved.'),
(3, 'potato brown fleck', 'potato-potato	potato brown fleck. by using pesticides the precaution problem can be solved.'),
(4, 'tomato yellow leaf curl virus. ', 'tomato leaf-tomato yellow leaf curl virus. by using pesticides the precaution problem can be solved.'),
(5, 'Bacterial soft rot.', 'califlower-Bacterial soft rot. by using pesticides the precaution problem can be solved.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `confirmpassword` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `confirmpassword`) VALUES
(1, 'praveena', 'praveena@gmail.com', '123', '123'),
(2, 'a', 'a@gmail.com', '11', '11'),
(3, 'josephina', 'jos@gmail.com', 'admin', 'admin'),
(4, 'shoba', 'shoba@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `selectedcrops_details`
--

CREATE TABLE IF NOT EXISTS `selectedcrops_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_selectedcrop` int(10) NOT NULL,
  `cropname_selectedcrop` text NOT NULL,
  `disease_selectedcrop` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `selectedcrops_details`
--

INSERT INTO `selectedcrops_details` (`id`, `id_selectedcrop`, `cropname_selectedcrop`, `disease_selectedcrop`) VALUES
(1, 1, 'tomoto', 'Anthracnose'),
(2, 123, 'beans', 'bacterial disease'),
(4, 22, 'potato', 'Potato spindle tuber viroid'),
(5, 78, 'ragi', 'fungus'),
(6, 123, 'vv', 'vv'),
(7, 123, 'tomato', 'hdf');

-- --------------------------------------------------------

--
-- Table structure for table `sendingcrops_details`
--

CREATE TABLE IF NOT EXISTS `sendingcrops_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_sendingcrop` int(10) NOT NULL,
  `cropname_sendingcrop` text NOT NULL,
  `disease_sendingcrop` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sendingcrops_details`
--

INSERT INTO `sendingcrops_details` (`id`, `id_sendingcrop`, `cropname_sendingcrop`, `disease_sendingcrop`) VALUES
(1, 1, 'tomato', 'Anthracnose. By using pesticides the precaution will be solved.'),
(2, 2, 'pumpkin', 'Botrytis (gray mould). by using pesticides the precaution problem can be solved.'),
(3, 3, 'potato', 'potato brown fleck. by using pesticides the precaution problem can be solved.'),
(4, 4, 'tomato leaf', 'tomato yellow leaf curl virus. by using pesticides the precaution problem can be solved.'),
(5, 5, 'califlower', 'Bacterial soft rot. by using pesticides the precaution problem can be solved.');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_details`
--

CREATE TABLE IF NOT EXISTS `subscribe_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_subscribe` text NOT NULL,
  `mail_subscribe` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subscribe_details`
--

INSERT INTO `subscribe_details` (`id`, `name_subscribe`, `mail_subscribe`) VALUES
(1, 'suresh', 'suresh@gmail.com'),
(2, 'jo', 'jo@gmail.com'),
(3, 'pra', 'pra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vegitable_details`
--

CREATE TABLE IF NOT EXISTS `vegitable_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_vegitable` text NOT NULL,
  `name_vegitable` text NOT NULL,
  `marketcost_vegitable` int(10) NOT NULL,
  `fixedcost_vegitable` int(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vegitable_details`
--

INSERT INTO `vegitable_details` (`id`, `type_vegitable`, `name_vegitable`, `marketcost_vegitable`, `fixedcost_vegitable`, `image`) VALUES
(1, 'Vegitables', 'beans', 40, 45, 'images/38beans.jpg'),
(2, 'Vegitables', 'cabbage', 50, 55, 'images/82cabbage.png'),
(3, 'Vegitables', 'carrot', 50, 50, 'images/52carrot.png'),
(4, 'Vegitables', 'potato', 40, 45, 'images/20potato.jpg'),
(5, 'Vegitables', 'pumpkin', 50, 55, 'images/49pumpkin.png'),
(6, 'Vegitables', 'tomato', 80, 85, 'images/70tomoto.jpg');
