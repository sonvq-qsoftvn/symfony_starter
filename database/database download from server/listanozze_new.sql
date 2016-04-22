-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `rates`;
CREATE TABLE `rates` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `rates2`;
CREATE TABLE `rates2` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `travel_description`;
CREATE TABLE `travel_description` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `viaggi`;
CREATE TABLE `viaggi` (
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


-- 2016-04-21 04:24:46
