-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 07:47 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hash`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE IF NOT EXISTS tbl_notice (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  post text NOT NULL,
  time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO tbl_notice (id, title, post, time) VALUES
(4, 'Rapsberry Pie', 'A class will be held on 30 March,2018 on Rapsberry Pie. Class instructors will be Tusher Mondal & Hasib Iqbal', '2018-04-01 07:43:59'),
(5, 'Arduino Workshop', 'A workshop will be held on Arduino for 2k16', '2018-04-01 09:06:54'),
(7, 'HACK Committee-2018', 'New Committee has been given', '2018-04-02 08:20:35'),
(8, 'Workshop On Sonar Censor', 'A brief discussion will be held on sonar censor', '2018-04-12 05:38:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
