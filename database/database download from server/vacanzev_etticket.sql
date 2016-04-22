-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `bk_request`;
CREATE TABLE `bk_request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_package` text,
  `request_periodFrom` text,
  `request_periodTo` text,
  `request_cost` text,
  `request_name` text,
  `request_surname` text,
  `request_email` text,
  `request_adults` int(3) DEFAULT NULL,
  `request_children` int(3) DEFAULT NULL,
  `request_tel` text,
  `request_cell` text,
  `request_office` text,
  `request_repFrom` text,
  `request_repTo` text,
  `request_other` text,
  `request_fcd` text,
  `request_fmt` text,
  `request_maildest` text,
  `request_mailrif` text,
  `request_fsu` text,
  `request_pid` text,
  `request_pacchetonome` text,
  `request_childrendetails` text,
  `request_assigned_promotore_id` int(11) DEFAULT NULL,
  `request_status` varchar(20) DEFAULT NULL,
  `request_comment` text,
  `request_date` datetime DEFAULT NULL,
  `request_prpname` text,
  `request_prpid` int(11) DEFAULT NULL,
  `request_prpmail` text,
  `request_logged_users` int(11) DEFAULT '0',
  `request_promotoreid` int(11) DEFAULT NULL,
  `request_time_left` int(11) DEFAULT NULL,
  `request_anagrafica_id` varchar(18) NOT NULL DEFAULT '',
  `request_anagrafica_promotore_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `request_code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`request_id`),
  KEY `request_assigned_promotore_id` (`request_assigned_promotore_id`),
  KEY `request_prpid` (`request_prpid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `clientconversation`;
CREATE TABLE `clientconversation` (
  `clientconversation_id` int(11) NOT NULL AUTO_INCREMENT,
  `clientconversation_promotoreId` int(11) DEFAULT NULL,
  `clientconversation_requestId` int(11) DEFAULT NULL,
  PRIMARY KEY (`clientconversation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `counter`;
CREATE TABLE `counter` (
  `promotore_id` int(11) unsigned NOT NULL DEFAULT '0',
  `portale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lingua` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `collegato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnatoDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAppaltate` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnate` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`promotore_id`,`portale`,`lingua`,`collegato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `counter2`;
CREATE TABLE `counter2` (
  `promotore_id` int(11) unsigned NOT NULL DEFAULT '0',
  `portale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lingua` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `totaleAssegnatoDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAppaltate` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`promotore_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `counter_20091030`;
CREATE TABLE `counter_20091030` (
  `promotore_id` int(11) unsigned NOT NULL DEFAULT '0',
  `portale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lingua` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `totaleAssegnatoDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAppaltate` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`promotore_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `counter_20091105`;
CREATE TABLE `counter_20091105` (
  `promotore_id` int(11) unsigned NOT NULL DEFAULT '0',
  `portale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lingua` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `totaleAssegnatoDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAppaltate` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`promotore_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `counter_ADESSO`;
CREATE TABLE `counter_ADESSO` (
  `promotore_id` int(11) unsigned NOT NULL DEFAULT '0',
  `portale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lingua` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `totaleAssegnatoDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAppaltate` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`promotore_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `counter_OK`;
CREATE TABLE `counter_OK` (
  `promotore_id` int(11) unsigned NOT NULL DEFAULT '0',
  `portale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lingua` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `totaleAssegnatoDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAppaltate` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`promotore_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `counter_orig`;
CREATE TABLE `counter_orig` (
  `promotore_id` int(11) unsigned NOT NULL DEFAULT '0',
  `portale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lingua` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `totaleAssegnatoDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAssegnateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleAppaltate` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleLavorateAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseDirette` int(10) unsigned NOT NULL DEFAULT '0',
  `totaleChiuseAppalto` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`promotore_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `et_portali_prodotti`;
CREATE TABLE `et_portali_prodotti` (
  `Prod_ID` int(10) unsigned NOT NULL DEFAULT '0',
  `Dominio` varchar(255) NOT NULL,
  PRIMARY KEY (`Prod_ID`,`Dominio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `exchange`;
CREATE TABLE `exchange` (
  `exchange_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `exchange_requestId` int(11) unsigned NOT NULL DEFAULT '0',
  `exchange_mittenteId` int(11) unsigned NOT NULL DEFAULT '0',
  `exchange_destinatarioId` int(11) unsigned NOT NULL DEFAULT '0',
  `exchange_provvigione` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `exchange_status` varchar(20) NOT NULL DEFAULT '',
  `exchange_date` datetime DEFAULT NULL,
  `exchange_status_date` datetime DEFAULT NULL,
  `exchange_comment` text NOT NULL,
  `exchange_filterId` int(11) unsigned NOT NULL DEFAULT '0',
  `exchange_create_appalto_cliente` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `exchange_assign_destinatario` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `exchange_etravelerId` smallint(4) unsigned NOT NULL DEFAULT '0',
  `exchange_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`exchange_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `filter`;
CREATE TABLE `filter` (
  `filter_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filter_date` datetime DEFAULT NULL,
  `filter_status` varchar(20) NOT NULL DEFAULT '',
  `filter_status_date` datetime DEFAULT NULL,
  `filter_userId` int(11) unsigned NOT NULL DEFAULT '0',
  `filter_fcd` varchar(100) NOT NULL DEFAULT '',
  `filter_forward_userId` int(11) unsigned NOT NULL DEFAULT '0',
  `filter_exchange_provvigione` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `filter_request_status` varchar(20) NOT NULL DEFAULT '',
  `filter_create_appalto_cliente` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `filter_lingua` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '*',
  `filter_exchange_etravelerId` smallint(4) unsigned NOT NULL DEFAULT '0',
  `filter_exchange_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`filter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_date` datetime DEFAULT NULL,
  `message_subject` text,
  `message_body` text,
  `message_conversationId` int(11) DEFAULT NULL,
  `message_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `parameter`;
CREATE TABLE `parameter` (
  `parameter_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parameter_name` varchar(255) NOT NULL DEFAULT '',
  `parameter_value` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`parameter_id`),
  KEY `parameter_name` (`parameter_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `php_campagne`;
CREATE TABLE `php_campagne` (
  `idCampagna` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` varchar(15) NOT NULL DEFAULT '',
  `language` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tipo_campagna` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `clickTotali` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `clickgg` smallint(5) unsigned NOT NULL DEFAULT '0',
  `clicktotaliunici` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `clickggunici` smallint(5) unsigned NOT NULL DEFAULT '0',
  `clickModifiche` smallint(5) unsigned NOT NULL DEFAULT '0',
  `maxClickgg` smallint(5) unsigned NOT NULL DEFAULT '0',
  `maxClick` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `giornoAttivazione` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data_inizio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data_fine` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ggAttivita` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCampagna`),
  KEY `iduser` (`iduser`),
  KEY `tipo_campagna` (`tipo_campagna`),
  KEY `language` (`language`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `prpconversation`;
CREATE TABLE `prpconversation` (
  `prpconversation_id` int(11) NOT NULL AUTO_INCREMENT,
  `prpconversation_promotoreId` int(11) DEFAULT NULL,
  `prpconversation_requestId` int(11) DEFAULT NULL,
  `prpconversation_prpId` int(11) DEFAULT NULL,
  PRIMARY KEY (`prpconversation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating` (
  `rating_user_id` int(11) NOT NULL DEFAULT '0',
  `rating_r1` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r2` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r3` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `n_assigned_requests` int(11) DEFAULT NULL,
  `n_accepted_requests` int(11) DEFAULT NULL,
  `n_worked_requests` int(11) DEFAULT NULL,
  `n_closed_requests` int(11) DEFAULT NULL,
  `lingua` varchar(10) NOT NULL DEFAULT 'it_IT',
  `is_bestrate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rating_user_id`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_details`;
CREATE TABLE `rating_details` (
  `rating_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rating_user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `rating_request_id` int(11) unsigned NOT NULL DEFAULT '0',
  `rating_request_status` varchar(20) NOT NULL DEFAULT '',
  `rating_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`rating_id`),
  KEY `rating_user_id` (`rating_user_id`),
  KEY `rating_request_id` (`rating_request_id`),
  KEY `rating_request_status` (`rating_request_status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_products`;
CREATE TABLE `rating_products` (
  `rating_user_id` int(11) NOT NULL DEFAULT '0',
  `rating_r1` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r2` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r3` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `n_assigned_requests` int(11) DEFAULT NULL,
  `n_accepted_requests` int(11) DEFAULT NULL,
  `n_worked_requests` int(11) DEFAULT NULL,
  `n_closed_requests` int(11) DEFAULT NULL,
  `portale` varchar(100) NOT NULL,
  `lingua` varchar(10) NOT NULL,
  `is_bestrate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rating_user_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_products_test`;
CREATE TABLE `rating_products_test` (
  `rating_user_id` int(11) NOT NULL DEFAULT '0',
  `rating_r1` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r2` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r3` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `n_assigned_requests` int(11) DEFAULT NULL,
  `n_accepted_requests` int(11) DEFAULT NULL,
  `n_worked_requests` int(11) DEFAULT NULL,
  `n_closed_requests` int(11) DEFAULT NULL,
  `portale` varchar(100) NOT NULL,
  `lingua` varchar(10) NOT NULL,
  `is_bestrate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rating_user_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_products_test_20120924`;
CREATE TABLE `rating_products_test_20120924` (
  `rating_user_id` int(11) NOT NULL DEFAULT '0',
  `rating_r1` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r2` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r3` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `n_assigned_requests` int(11) DEFAULT NULL,
  `n_accepted_requests` int(11) DEFAULT NULL,
  `n_worked_requests` int(11) DEFAULT NULL,
  `n_closed_requests` int(11) DEFAULT NULL,
  `portale` varchar(100) NOT NULL,
  `lingua` varchar(10) NOT NULL,
  `is_bestrate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rating_user_id`,`portale`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_request_products`;
CREATE TABLE `rating_request_products` (
  `request_id` int(11) unsigned NOT NULL DEFAULT '0',
  `product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`request_id`,`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `rating_request_products_20140203`;
CREATE TABLE `rating_request_products_20140203` (
  `request_id` int(11) unsigned NOT NULL DEFAULT '0',
  `product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`request_id`,`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `rating_settings`;
CREATE TABLE `rating_settings` (
  `portale_fcd` varchar(30) NOT NULL DEFAULT '',
  `worked_min_required_requests` int(11) DEFAULT '0',
  `worked_min_required_ratio` tinyint(4) DEFAULT '0',
  `closed_min_required_requests` int(11) DEFAULT '0',
  `closed_min_required_ratio` tinyint(4) DEFAULT '0',
  `min_rating_required` int(11) DEFAULT '0',
  `days_included` int(11) DEFAULT '0',
  `reserved` tinyint(1) DEFAULT '0',
  `agenzia` varchar(10) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`portale_fcd`),
  KEY `agency_idx` (`agenzia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_test`;
CREATE TABLE `rating_test` (
  `rating_user_id` int(11) NOT NULL DEFAULT '0',
  `rating_r1` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r2` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r3` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `n_assigned_requests` int(11) DEFAULT NULL,
  `n_accepted_requests` int(11) DEFAULT NULL,
  `n_worked_requests` int(11) DEFAULT NULL,
  `n_closed_requests` int(11) DEFAULT NULL,
  `lingua` varchar(10) NOT NULL DEFAULT 'it_IT',
  `is_bestrate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rating_user_id`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_test_20120924`;
CREATE TABLE `rating_test_20120924` (
  `rating_user_id` int(11) NOT NULL DEFAULT '0',
  `rating_r1` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r2` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r3` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_r` float(8,5) NOT NULL DEFAULT '0.00000',
  `rating_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `n_assigned_requests` int(11) DEFAULT NULL,
  `n_accepted_requests` int(11) DEFAULT NULL,
  `n_worked_requests` int(11) DEFAULT NULL,
  `n_closed_requests` int(11) DEFAULT NULL,
  `lingua` varchar(10) NOT NULL DEFAULT 'it_IT',
  `is_bestrate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rating_user_id`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `request`;
CREATE TABLE `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_package` text,
  `request_periodFrom` varchar(50) DEFAULT NULL,
  `request_periodTo` varchar(50) DEFAULT NULL,
  `request_cost` varchar(255) DEFAULT NULL,
  `request_name` varchar(100) DEFAULT NULL,
  `request_surname` varchar(100) DEFAULT NULL,
  `request_email` varchar(255) DEFAULT NULL,
  `request_adults` int(3) DEFAULT NULL,
  `request_children` int(3) DEFAULT NULL,
  `request_tel` varchar(30) DEFAULT NULL,
  `request_cell` varchar(30) DEFAULT NULL,
  `request_office` varchar(30) DEFAULT NULL,
  `request_repFrom` varchar(30) DEFAULT NULL,
  `request_repTo` varchar(30) DEFAULT NULL,
  `request_other` text,
  `request_fcd` varchar(100) DEFAULT NULL,
  `request_fmt` varchar(255) DEFAULT NULL,
  `request_maildest` varchar(255) DEFAULT NULL,
  `request_mailrif` varchar(255) DEFAULT NULL,
  `request_fsu` varchar(100) DEFAULT NULL,
  `request_pid` varchar(20) DEFAULT NULL,
  `request_pacchetonome` varchar(255) DEFAULT NULL,
  `request_childrendetails` varchar(100) DEFAULT NULL,
  `request_assigned_promotore_id` int(11) DEFAULT NULL,
  `request_status` varchar(20) DEFAULT NULL,
  `request_comment` text,
  `request_date` datetime DEFAULT NULL,
  `request_prpname` varchar(100) DEFAULT NULL,
  `request_prpid` int(11) DEFAULT NULL,
  `request_prpmail` varchar(255) DEFAULT NULL,
  `request_logged_users` int(11) DEFAULT '0',
  `request_promotoreid` int(11) DEFAULT NULL,
  `request_time_left` int(11) DEFAULT NULL,
  `request_anagrafica_id` varchar(18) NOT NULL DEFAULT '',
  `request_anagrafica_promotore_id` int(10) unsigned NOT NULL DEFAULT '0',
  `request_code` varchar(10) NOT NULL DEFAULT '',
  `request_linked_request_id` int(11) NOT NULL DEFAULT '0',
  `request_can_link` tinyint(1) NOT NULL DEFAULT '0',
  `request_campagna` int(6) unsigned NOT NULL DEFAULT '0',
  `request_date_assigned_promotore` datetime NOT NULL,
  `request_lingua` varchar(10) NOT NULL,
  `request_agenzia` varchar(20) NOT NULL DEFAULT 'ETita',
  `request_dominio_promotore` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `request_newsletter` tinyint(1) DEFAULT NULL,
  `request_country` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`request_id`),
  KEY `request_prpid` (`request_prpid`),
  KEY `request_email` (`request_email`),
  KEY `request_tel` (`request_tel`),
  KEY `request_cell` (`request_cell`),
  KEY `request_office` (`request_office`),
  KEY `request_code` (`request_code`),
  KEY `request_status` (`request_status`),
  KEY `request_assigned_promotore_id` (`request_assigned_promotore_id`,`request_status`,`request_date`),
  KEY `ix_request_anagrafica_id` (`request_anagrafica_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `request_assignment_reason`;
CREATE TABLE `request_assignment_reason` (
  `assignment_reason` int(11) NOT NULL,
  `assignment_code` varchar(255) DEFAULT NULL,
  `assignment_descr` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`assignment_reason`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Mappatura degli assignement reasons da codice per le query';


DROP TABLE IF EXISTS `request_changelog`;
CREATE TABLE `request_changelog` (
  `request_id` int(11) NOT NULL DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `program_name` varchar(50) DEFAULT NULL,
  `modified_field` varchar(30) DEFAULT NULL,
  `original_value` text,
  `new_value` text,
  `assignment_reason` tinyint(2) unsigned NOT NULL DEFAULT '0',
  KEY `user_id` (`user_id`),
  KEY `modified_field` (`modified_field`),
  KEY `request_id` (`request_id`,`user_id`,`program_name`,`modified_field`,`original_value`(32),`new_value`(32))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rights`;
CREATE TABLE `rights` (
  `right_id` int(11) NOT NULL AUTO_INCREMENT,
  `right_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`right_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `stats`;
CREATE TABLE `stats` (
  `stat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stat_user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `stat_request_id` int(11) unsigned NOT NULL DEFAULT '0',
  `stat_date` datetime NOT NULL,
  `stat_request_date` datetime NOT NULL,
  `stat_action` varchar(255) NOT NULL,
  `stat_link_user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `stat_parsed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`stat_id`),
  KEY `stat_user_id,stat_request_date,stat_action` (`stat_user_id`,`stat_request_date`,`stat_action`),
  KEY `stat_request_date,stat_action` (`stat_request_date`,`stat_action`),
  KEY `stat_link_user_id,stat_request_date,stat_action` (`stat_link_user_id`,`stat_request_date`,`stat_action`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tmpcronelab`;
CREATE TABLE `tmpcronelab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `code` varchar(10) NOT NULL,
  `pmitt_id` int(11) NOT NULL,
  `pdest_id` int(11) NOT NULL,
  `invalid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_typeid` int(11) DEFAULT '3',
  `user_forward_user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `user_typeid` (`user_typeid`),
  KEY `user_forward_user_id` (`user_forward_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `usertype`;
CREATE TABLE `usertype` (
  `usertype_id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usertype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `usertypestorights`;
CREATE TABLE `usertypestorights` (
  `usertypeid` int(11) NOT NULL DEFAULT '0',
  `rightid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user_assignments`;
CREATE TABLE `user_assignments` (
  `user_id` int(11) NOT NULL,
  `lingua` varchar(10) NOT NULL,
  `n_reassigned` int(10) unsigned NOT NULL DEFAULT '0',
  `last_reassigned_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user_assignments_20120605`;
CREATE TABLE `user_assignments_20120605` (
  `user_id` int(11) NOT NULL,
  `lingua` varchar(10) NOT NULL,
  `n_reassigned` int(10) unsigned NOT NULL DEFAULT '0',
  `last_reassigned_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- 2016-04-21 04:23:42
