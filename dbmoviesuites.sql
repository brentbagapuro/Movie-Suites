-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2017 at 06:08 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmoviesuites`
--
CREATE DATABASE IF NOT EXISTS `dbmoviesuites` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbmoviesuites`;

-- --------------------------------------------------------

--
-- Table structure for table `tblbilling`
--

CREATE TABLE IF NOT EXISTS `tblbilling` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `room` varchar(50) NOT NULL,
  `movies` varchar(50) NOT NULL,
  `num_of_persons` int(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblblacklist`
--

CREATE TABLE IF NOT EXISTS `tblblacklist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblblacklist`
--

INSERT INTO `tblblacklist` (`id`, `cust_id`, `status`) VALUES
(6, '€\0\0€\0\0', ''),
(7, '€\0\0€', ''),
(8, '€\0\0€', ''),
(9, '€\0\0€', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `cust_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact_num` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`cust_id`, `fname`, `mname`, `lname`, `contact_num`, `username`, `password`, `status`) VALUES
(2, 'Ivan', 'Sorino', 'Villahermosa', '09090157997', 'ivan', 'ivan', 'ACTIVE'),
(5, 'Brent', 'Samuel', 'Bagapuro', '09091284884', 'brent', 'brent', 'ACTIVE'),
(6, 'Jerome ', 'A', 'Pueblos', '091293892', 'jerome', 'jerome', 'ACTIVE'),
(7, 'Neil', 'A.', 'Aliling', '0912345679', 'neil', 'neil', 'ACTIVE'),
(8, 'Hans', 'Dale', 'Pactol', '09127117384', 'hans', 'hans', 'ACTIVE'),
(9, 'Chandria', 'Liz', 'Ates', '0924914919', 'chaichai', 'chai', 'ACTIVE'),
(17, 'Christian', 'g', 'Eurango', '0926418514', 'chan', 'chan', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE IF NOT EXISTS `tblemployee` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact_num` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `fname`, `mname`, `lname`, `contact_num`, `uname`, `pword`, `position`, `status`) VALUES
(1, 'Kylie', 'Noblefranca', 'Ates', '0912983288', 'kylie', 'kylie', 'Receptionist', 'ACTIVE'),
(3, 'Ronald', 'an', 'Tiauson', '0909128384', 'ronald', 'ronald', 'admin', 'ACTIVE'),
(4, 'Brent', 'L', 'Bagapuro', '090516239', 'brent', ' brent', 'Receptionist', 'ACTIVE'),
(5, 'Ivans', 'Sorino', 'Villahermosa', '0909015799', 'ivan', ' ivan', 'Receptionist', 'ACTIVE'),
(12, 'kylie', 'k', 'esss', '00', 'root', 'usbw', 'Receptionist', 'ACTIVE'),
(14, 'Brent', 'lobitana', 'bagapuro', '0912345678', 'user', 'pass', 'Receptionist', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tblmovie`
--

CREATE TABLE IF NOT EXISTS `tblmovie` (
  `movie_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `director` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_uploaded` varchar(50) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tblmovie`
--

INSERT INTO `tblmovie` (`movie_id`, `title`, `genre`, `duration`, `year`, `artist`, `director`, `description`, `image`, `date_uploaded`) VALUES
(1, 'Fantastic Beasts and Where to Find them', 'Action,Adventure,Comedy', '00:02:50', 2016, 'Eddie Redmayne, Katherine Waterstone', 'David Yates', ' Fantastic Beasts purports to be a reproduction of ', 'fantastic-beasts-2000x3000.jpg', '08/10/2017'),
(5, ' Moana', 'Action,Comedy', '00:02:50', 2017, ' John Musker', ' John Dwayne', ' An adventurous teenager sails out on a daring mission to save her people. During her journey, Moana meets the once-mighty demigod Maui, who guides her in her quest to become a master way-finder.', 'moana-2000x3000.jpg', '08/11/2017'),
(6, 'Brimstone', 'Action,Comedy,Drama,Thriller', '00:01:50', 2016, 'David Yates', 'John Dwayne', 'During her journey who guides her in her quest to become a master.', 'brimstone-2000x3000-800x1200.jpg', '08/12/2017'),
(7, 'Jackie', 'Action,Adventure,Drama,Romance', '00:01:50', 2016, 'Jackie', 'Jackie', 'Jackie meets the once might demigo Maui.', 'jackie-2000x3000-800x1200.jpg', '08/13/2017'),
(8, 'The Passengers', 'Action,Adventure,Drama,Romance', '00:02:50', 2017, 'Jennifer Lawrence, Chris Pratt, Michael Sheen', 'Morten Tyldum', 'On a routine journey through space to a new home, two passengers, sleeping in suspended animation, are awakened 90 years too early when their ship malfunctions.', 'passengers-2000x3000.jpg', '08/14/2017'),
(13, 'Collateral Beauty', 'Action,Adventure,Comedy,Drama', '00:01:50', 2016, 'Will Smith', 'David Frankel', 'When a successful New York advertising executive (Will Smith) suffers a great tragedy, he retreats from life. While his concerned friends try desperately to reconnect with him, he seeks answers from t', 'collateral-2000x3000.jpg', '08/15/2017'),
(14, 'Harry Potter 2', 'Action,Adventure,Drama,Romance', '00:01:50', 2002, 'Daniel Radcliffe', 'Chris Columbus', 'The followup to Harry Potter and the Sorcerers Stone finds young wizard Harry Potter and his friends, Ron and Hermione facing new challenges during their second year at Hogwarts School of Witchcraft', 'harrypotter.jpg', '08/16/2017'),
(20, 'Collateral Beauty', 'Adventure,Comedy,Drama', '00:02:50', 2017, 'Will Smith', 'John Musker', 'This is a sample only', 'collateral-2000x3000-800x1200.jpg', '09/27/2017'),
(21, 'a', 'Action,Adventure', '12:1:1', 2017, 'a', 'a', 'aefaef', '965daa186a91a7f48dceb048da475575.jpg', '10/01/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tblreservation`
--

CREATE TABLE IF NOT EXISTS `tblreservation` (
  `reserve_id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(50) NOT NULL,
  `movie_id` varchar(50) NOT NULL,
  `num_of_persons` int(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date_reserved` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`reserve_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblreservation`
--

INSERT INTO `tblreservation` (`reserve_id`, `cust_id`, `movie_id`, `num_of_persons`, `time`, `date_reserved`, `status`) VALUES
(1, '2', '1', 1, '22:00', '2017-09-29', 'PENDING'),
(2, '2', '8', 1, '22:00', '01-01-1970', 'PENDING'),
(3, '2', '13', 1, '22:00', '01-01-1970', 'PENDING'),
(4, '2', '8', 1, '22:00', '2017-10-31', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `tblrooms`
--

CREATE TABLE IF NOT EXISTS `tblrooms` (
  `room_id` int(10) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `max_occupancy` int(10) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tblrooms`
--

INSERT INTO `tblrooms` (`room_id`, `room_name`, `status`, `max_occupancy`) VALUES
(1, 'Room 1', 'available', 20),
(2, 'Room 2', 'available', 20),
(3, 'Room 3', 'available', 15),
(4, 'Room 4', 'available', 10),
(5, 'Room 5', 'available', 10),
(6, 'Room 6', 'available', 10),
(7, 'Room 7', 'available', 10),
(8, 'Room 8', 'available', 10),
(9, 'Room 9 ', 'available', 10),
(10, 'Room 10', 'available', 10),
(11, 'Room 11', 'available', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbltempcust`
--

CREATE TABLE IF NOT EXISTS `tbltempcust` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbltempcust`
--

INSERT INTO `tbltempcust` (`cid`, `cust_id`, `fname`, `mname`, `lname`) VALUES
(18, '7', 'Neil', 'A.', 'lname');

-- --------------------------------------------------------

--
-- Table structure for table `tbltempmovies`
--

CREATE TABLE IF NOT EXISTS `tbltempmovies` (
  `mid` int(50) NOT NULL AUTO_INCREMENT,
  `movie_id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransactions`
--

CREATE TABLE IF NOT EXISTS `tbltransactions` (
  `transaction_id` int(50) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(50) NOT NULL,
  `emp_id` int(50) NOT NULL,
  `num_of_persons` varchar(50) NOT NULL,
  `movies` varchar(50) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `trans_date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbltransactions`
--

INSERT INTO `tbltransactions` (`transaction_id`, `cust_id`, `emp_id`, `num_of_persons`, `movies`, `room_id`, `room_name`, `duration`, `end_time`, `amount`, `trans_date`, `time`) VALUES
(1, 'asdf', 1, '12', 'Fantastic Beasts and Where to Find them,Jackie, Mo', '', 'Room 2', '0:9:20', '10:04 PM', '1000', '10/01/2017', '9:55 PM'),
(2, 'ah', 1, '12', 'Fantastic Beasts and Where to Find them', '2', 'Room 2', '0:2:50', '10:01 PM', '250', '10/01/2017', '9:58 PM'),
(3, 'asdf', 1, '12', 'Fantastic Beasts and Where to Find them', '3', 'Room 3', '0:2:50', '10:01 PM', '250', '10/01/2017', '9:59 PM'),
(4, '7', 1, '12', 'Harry Potter 2', '1', 'Room 1', '0:1:50', '10:02 PM', '250', '10/01/2017', '10:00 PM'),
(5, '', 1, '3', 'The Passengers', '', 'Room 1', '0:2:50', '11:22 PM', '250', '10/01/2017', '11:19 PM'),
(6, '', 1, '', 'Fantastic Beasts and Where to Find them', '', '', '0:2:50', '11:26 PM', '250', '10/01/2017', '11:23 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tblwatchlist`
--

CREATE TABLE IF NOT EXISTS `tblwatchlist` (
  `watchlist_id` int(5) NOT NULL AUTO_INCREMENT,
  `movie_id` int(5) NOT NULL,
  `cust_id` int(5) NOT NULL,
  PRIMARY KEY (`watchlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
