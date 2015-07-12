-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 12, 2015 at 04:50 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+08:00";

--
-- Database: `bookingsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `email`) VALUES
(1, 'abcd1234', 'e19d5cd5af0378da05f63f891c7467af', 'Dania Rushkan', 'drushkhan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `facid` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `facid`) VALUES
(1, 'Bilik Persatuan 1', 'f01'),
(2, 'Bilik Persatuan 2', 'f02'),
(3, 'Bilik Persatuan 3', 'f03'),
(4, 'Bilik Persatuan 4', 'f04'),
(5, 'Bilik Persatuan 5', 'f05'),
(6, 'Bilik Persatuan 6', 'f06'),
(7, 'Bilik Seminar 1', 'f07'),
(8, 'Bilik Seminar 2', 'f08'),
(9, 'Pingpong table court', 'f09'),
(10, 'Futsal court', 'f10'),
(11, 'Basketball court', 'f11'),
(12, 'Volleyball court', 'f12'),
(13, 'Takraw court', 'f13'),
(14, 'Tennis court', 'f14'),
(15, 'Netball court', 'f15'),
(16, 'Football field', 'f16');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(15) NOT NULL,
  `datetimefrom` datetime NOT NULL,
  `datetimeto` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `facid` varchar(3) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Dalam proses',
  `ischeckin` varchar(5) NOT NULL DEFAULT 'false',
  `poster` varchar(100) NOT NULL,
  `isread` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `noic` varchar(15) NOT NULL,
  `nomatrik` varchar(10) NOT NULL,
  `notel` varchar(15) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
