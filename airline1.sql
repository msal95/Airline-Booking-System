-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 09:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airline1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_company`
--

CREATE TABLE IF NOT EXISTS `add_company` (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `about` longtext NOT NULL,
  PRIMARY KEY (`fc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_company`
--

INSERT INTO `add_company` (`fc_id`, `name`, `photo`, `about`) VALUES
(1, 'Shaheen', 'uploads/9483116241_Amazing Windows 8 Wallpaper (3).jpg', 'njmv bnmv bnmj vghj bhn'),
(2, 'PIA', 'uploads/9483116241_Amazing Windows 8 Wallpaper (3).jpg', 'njmv bnmv bnmj vghj bhn');

-- --------------------------------------------------------

--
-- Table structure for table `add_route`
--

CREATE TABLE IF NOT EXISTS `add_route` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_company` varchar(100) NOT NULL,
  `from_city` varchar(100) NOT NULL,
  `to_city` varchar(100) NOT NULL,
  `d_time` time NOT NULL,
  `a_time` time NOT NULL,
  `eco_price` varchar(100) NOT NULL,
  `bu_price` varchar(100) NOT NULL,
  `air_id` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_route`
--

INSERT INTO `add_route` (`r_id`, `s_company`, `from_city`, `to_city`, `d_time`, `a_time`, `eco_price`, `bu_price`, `air_id`) VALUES
(1, 'PIA', 'Multan', 'Islamabad', '14:00:00', '15:00:00', '8000', '12000', 1),
(2, 'Shaheen', 'Multan', 'Karachi', '14:00:00', '15:30:00', '9000', '15000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'saleem malik', 'saleemmalik@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE IF NOT EXISTS `airlines` (
  `air_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_id` int(11) NOT NULL,
  `air_type` varchar(100) NOT NULL,
  `flight_name` varchar(100) NOT NULL,
  `flight_number` varchar(100) NOT NULL,
  `from_city` varchar(100) NOT NULL,
  `to_city` varchar(100) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `total_travel` varchar(100) NOT NULL,
  `distance` varchar(100) NOT NULL,
  PRIMARY KEY (`air_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`air_id`, `fc_id`, `air_type`, `flight_name`, `flight_number`, `from_city`, `to_city`, `departure`, `arrival`, `total_travel`, `distance`) VALUES
(1, 1, 'Private Air Line', 'Shaheen', 'PK-1234', 'Multan', 'Karachi', '14:06:00', '15:30:00', '90 minits', '120 KM'),
(2, 2, 'Pakistan Air Line', 'PIA', 'PK-1778', 'Multan', 'Islamabad', '10:00:00', '11:00:00', '60 minits', '700 KM');

-- --------------------------------------------------------

--
-- Table structure for table `booked_ticket`
--

CREATE TABLE IF NOT EXISTS `booked_ticket` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `contact_person` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `c_number` varchar(100) NOT NULL,
  `ex_date` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `gender1` varchar(100) NOT NULL,
  `age1` varchar(100) NOT NULL,
  `cname1` varchar(100) NOT NULL,
  `cgender1` varchar(100) NOT NULL,
  `cage1` varchar(100) NOT NULL,
  `iname1` varchar(100) NOT NULL,
  `igender1` varchar(100) NOT NULL,
  `iage1` varchar(100) NOT NULL,
  `flight_name` varchar(100) NOT NULL,
  `flight_number` varchar(100) NOT NULL,
  `dep_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `duration` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `booked_ticket`
--

INSERT INTO `booked_ticket` (`cid`, `contact_person`, `phone`, `email`, `c_number`, `ex_date`, `pin_code`, `name1`, `gender1`, `age1`, `cname1`, `cgender1`, `cage1`, `iname1`, `igender1`, `iage1`, `flight_name`, `flight_number`, `dep_time`, `arr_time`, `duration`) VALUES
(1, 'Saleem Malik', '03236277477', 'malik2557@yahoo.com', '907207507170', '2017-08-09', '258', '', '', '', '', '', '', '', '', '', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(2, 'Saleem Malik', '03236277477', 'malik2557@yahoo.com', '876289764981', '2017-08-16', '255', '', '', '', '', '', '', '', '', '', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(3, 'Saleem Malik', '03236277477', 'malik2557@yahoo.com', '907207507170', '2017-08-09', '258', '', '', '', '', '', '', '', '', '', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(4, 'Saleem Malik', '03236277477', 'malik2557@yahoo.com', '886868076872', '2017-08-09', '258', '', 'Female', '20', 'naeem', 'Male', '5', 'fiaz', 'Male', '25', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(5, 'Saleem Malik', '03236277477', 'malik2557@yahoo.com', '886868076872', '2017-08-09', '258', 'k', 'Female', '20', 'naeem', 'Male', '5', 'fiaz', 'Male', '25', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(6, 'Saleem Malik', '03236277477', 'malik2557@yahoo.com', '886868076872', '2017-08-09', '258', 'k', 'Female', '20', 'naeem', 'Male', '5', 'fiaz', 'Male', '25', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(7, 'Saleem Malik', '03236277477', 'shah@gmail.com', '03255452215', '2017-08-31', '258', 'Shahid', 'Male', '22', 'tahir', 'Male', '7', 'sidra', 'Female', '14', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(8, 'Saleem Malik', '03236277477', 'shah@gmail.com', '03255452215', '2017-08-31', '258', 'Shahid', 'Male', '22', 'tahir', 'Male', '7', 'sidra', 'Female', '14', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(9, 'Saleem Malik', '03236277477', 'shah@gmail.com', '03255452215', '2017-08-31', '258', '', '', '', '', '', '', '', '', '', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(10, 'Saleem Malik', '03236277477', 'shah@gmail.com', '907207507170', '2017-08-16', '285', 'dgfg,xgbng', 'Male,Male', '86,52', 'fytd,dyjtyj', 'Male,Male', '56,536', 'xdthgs,dyjdf,dytjd', 'Female,Male,Male', '63,53,53', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(11, 'Saleem Malik', '03236277477', 'shah@gmail.com', '05265055', '2017-08-16', '555', 'dgfg', 'Female', '86', 'fytd', 'Male', '56', 'xdthgs', 'Female', '63', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits'),
(12, 'ahmad', '032520252256', 'shah@gmail.com', '21551026', '2017-08-18', '285', 'hamad', 'Male', '20', 'ali', 'Male', '22', 'aima', 'Female', '26', 'Shaheen', 'PK-1234', '14:06:00', '15:30:00', '90 minits');

-- --------------------------------------------------------

--
-- Table structure for table `book_ticket`
--

CREATE TABLE IF NOT EXISTS `book_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_city` varchar(255) NOT NULL,
  `to_city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `infants` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `book_ticket`
--

INSERT INTO `book_ticket` (`id`, `from_city`, `to_city`, `date`, `adult`, `child`, `infants`, `class`) VALUES
(1, 'Pakistan', 'Australia', '2017-07-26', '1', '2', '3', 'on'),
(2, 'Pakistan', 'Australia', '2017-07-26', '1', '2', '3', 'on'),
(3, 'Bahawalpur', 'Oman', '2017-07-18', '2', '', '', 'on'),
(4, 'Islamabad', 'Canada', '2017-07-14', '2', '3', '3', 'on'),
(5, 'Karachi', 'Canada', '2017-07-14', '2', '2', '2', 'on'),
(6, 'Karachi', 'Canada', '2017-07-14', '2', '2', '2', 'on'),
(7, 'Karachi', 'Canada', '2017-07-14', '2', '2', '2', 'on'),
(8, '', '', '2017-07-21', '', '', '', 'on'),
(9, '', '', '2017-07-11', '', '', '', 'on'),
(10, '', '', '2017-07-20', '', '', '', 'on'),
(11, 'Multan', 'Pakistan', '2017-07-18', '2', '2', '2', 'on'),
(12, 'Multan', 'Pakistan', '2017-07-19', '3', '3', '2', 'on'),
(13, 'Bahawalpur', 'America', '2017-07-19', '3', '3', '2', 'on'),
(14, 'Bahawalpur', 'Canada', '2017-07-19', '2', '3', '2', 'on'),
(15, 'Bahawalpur', 'America', '2017-07-20', '2', '3', '1', 'on'),
(16, 'Bahawalpur', 'Oman', '2017-07-19', '2', '2', '1', 'on'),
(17, 'Bahawalpur', 'America', '2017-07-19', '2', '3', '1', 'on'),
(18, 'Bahawalpur', 'Oman', '2017-07-20', '3', '3', '1', 'on'),
(19, 'Bahawalpur', 'Oman', '2017-07-20', '1', '2', '1', 'on'),
(20, 'Bahawalpur', 'America', '2017-07-19', '2', '3', '2', 'on'),
(21, 'multan', 'karachi', '2017-08-17', '4', '1', '2', 'Buisness');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `c_type` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `cw_num` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `c_number`, `name`, `c_type`, `month`, `year`, `cw_num`, `amount`) VALUES
(1, '0310251', 'jytd', 'payoneer', 'March', '2022', '.2515', '2141841'),
(2, '234234234234', 'Saleem Malik', '', '', '', '234234', '1500'),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `system_reg`
--

CREATE TABLE IF NOT EXISTS `system_reg` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `system_reg`
--

INSERT INTO `system_reg` (`u_id`, `name`, `u_name`, `user`, `pass`, `mobile`, `email`, `dob`, `address1`, `address2`, `city`, `state`, `country`, `photo`) VALUES
(1, 'Saleem Malik', 'Saleem Malik', 'Admin', '03445265602e8e193e7a3382d489cc8d1b1bfc44', '03236277477', 'malik2557@yahoo.com', '1991-08-14', 'jatoi janubi', 'distt. M. Garh', 'Multan', 'Pakistan', 'Pakistan', 'uploads/7286607289_-2135191473.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `c_role` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `adress1` varchar(100) NOT NULL,
  `adress2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `c_role`, `u_name`, `pass`, `phone`, `email`, `dob`, `adress1`, `adress2`, `city`, `state`, `country`, `photo`) VALUES
(1, 'Shahid Ahmad', 'Admin', 'Ahmad', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '03088159827', 'shah@gmail.com', '2017-07-07', 'jppw', 'Islamabad', 'Dubai', 'Oman', 'Iran', 'uploads/8416564707_best-watches-of-baselworld-2016-gear-patrol-feature-v2.jpg'),
(2, 'Shahid Ahmad', 'Customer', 'Ahmad', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '03088159827', 'shah@gmail.com', '2017-07-07', 'jppw', 'Multan', 'Dubai', 'Oman', 'Iran', 'uploads/4629114415_best-watches-of-baselworld-2016-gear-patrol-feature-v2.jpg'),
(3, 'saleem malik', 'Customer', 'saleem', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '03236277477', 'saleemmalik@gmail.com', '14-08-1991', 'jatoi', 'multan', 'multan', 'punjab', 'pakistan', 'uploads/884668230_2017-Honda-Ridgeline-front-three-quarter-in-motion-2-e1462556160342.jpg'),
(4, 'Muhammad Arif', 'Customer', 'Arif', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '03036692491', 'arifali@gmail.com', '14-08-1991', 'jatoi', 'multan', 'multan', 'punjab', 'pakistan', 'uploads/5726897914_Amazing Windows 8 Wallpaper (7).jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
