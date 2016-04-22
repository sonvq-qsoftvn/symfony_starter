-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 09:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `listanozze_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `amount` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `description` varchar(100) DEFAULT NULL,
  `travel_id` int(10) unsigned DEFAULT NULL,
  `status` tinyint(3) unsigned DEFAULT '1',
  `is_same` tinyint(3) unsigned DEFAULT '0',
  `email` varchar(200) DEFAULT NULL,
  `message` text,
  `postcard_path` varchar(200) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `date_booking` datetime DEFAULT NULL,
  `date_payment` datetime DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rates2`
--

CREATE TABLE IF NOT EXISTS `rates2` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `amount` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `description` varchar(100) DEFAULT NULL,
  `travel_id` int(10) unsigned DEFAULT NULL,
  `status` tinyint(3) unsigned DEFAULT '1',
  `is_same` tinyint(3) unsigned DEFAULT '0',
  `email` varchar(200) DEFAULT NULL,
  `message` text,
  `postcard_path` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `travel_description`
--

CREATE TABLE IF NOT EXISTS `travel_description` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` text,
  `short_description` text,
  `couple_name` varchar(100) DEFAULT NULL,
  `finish_message` text,
  `travel_id` int(10) unsigned DEFAULT NULL,
  `couple_email` varchar(200) DEFAULT NULL,
  `hideTot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `photos` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `postcard_id` tinyint(3) unsigned DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `type` tinyint(3) unsigned DEFAULT NULL,
  `travel_id` int(10) unsigned DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_type` (`username`,`type`),
  KEY `travel_id` (`travel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `viaggi`
--

CREATE TABLE IF NOT EXISTS `viaggi` (
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `codPromotore` smallint(4) unsigned NOT NULL DEFAULT '0',
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `importo` decimal(8,2) NOT NULL DEFAULT '0.00',
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(120) NOT NULL DEFAULT '',
  `cognome` varchar(50) NOT NULL DEFAULT '',
  `nome` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_viaggio`),
  KEY `NewIndex` (`id_anagrafica`,`codPromotore`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
