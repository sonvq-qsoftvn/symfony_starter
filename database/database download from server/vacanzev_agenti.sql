-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `adv1`;
CREATE TABLE `adv1` (
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `language` char(1) NOT NULL DEFAULT '',
  `click` mediumint(8) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `adv2`;
CREATE TABLE `adv2` (
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `language` char(1) NOT NULL DEFAULT '',
  `click` mediumint(8) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `adv3`;
CREATE TABLE `adv3` (
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `language` char(1) NOT NULL DEFAULT '',
  `click` mediumint(4) unsigned NOT NULL DEFAULT '0',
  `tmpnumclick` smallint(4) NOT NULL DEFAULT '0',
  `numclick` mediumint(4) unsigned NOT NULL DEFAULT '0',
  `maxdayclick` mediumint(4) unsigned NOT NULL DEFAULT '0',
  `maxclick` mediumint(4) unsigned NOT NULL DEFAULT '0',
  `typepromo` varchar(10) NOT NULL DEFAULT '',
  `statuspromo` char(1) NOT NULL DEFAULT '0',
  `dataactive` int(10) unsigned NOT NULL DEFAULT '0',
  `dayactive` int(5) unsigned NOT NULL DEFAULT '0',
  KEY `click` (`click`),
  KEY `iduser` (`iduser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `idbanner` char(1) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `banner` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`,`idbanner`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE `catalogue` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `source_lang` varchar(100) NOT NULL DEFAULT '',
  `target_lang` varchar(100) NOT NULL DEFAULT '',
  `date_created` int(11) NOT NULL DEFAULT '0',
  `date_modified` int(11) NOT NULL DEFAULT '0',
  `author` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `comuni`;
CREATE TABLE `comuni` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(128) NOT NULL DEFAULT '',
  `provincia` varchar(4) NOT NULL DEFAULT '',
  `catasto` varchar(8) NOT NULL DEFAULT '',
  `regione` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `corsi`;
CREATE TABLE `corsi` (
  `idCorso` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `idCorsiTipo` smallint(4) unsigned NOT NULL DEFAULT '0',
  `proprietario` smallint(4) unsigned NOT NULL DEFAULT '0',
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataFine` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `luogo` varchar(50) NOT NULL DEFAULT '',
  `limite` smallint(4) unsigned NOT NULL DEFAULT '0',
  `postiMinimi` smallint(4) unsigned NOT NULL DEFAULT '0',
  `collaboratori` varchar(200) NOT NULL DEFAULT '',
  `durata` varchar(50) NOT NULL DEFAULT '',
  `descrizioneAgg` varchar(200) NOT NULL DEFAULT '',
  `programma` text NOT NULL,
  `stato` varchar(10) NOT NULL DEFAULT '',
  `feedback` text NOT NULL,
  `punteggio` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCorso`),
  KEY `idCorsiTipo` (`idCorsiTipo`),
  KEY `proprietario` (`proprietario`),
  KEY `stato` (`stato`),
  KEY `dataCorso` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `corsi_gruppi`;
CREATE TABLE `corsi_gruppi` (
  `idGruppo` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(30) NOT NULL DEFAULT '',
  `evidenza` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`idGruppo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `corsi_partecipanti`;
CREATE TABLE `corsi_partecipanti` (
  `idPartecipante` smallint(4) unsigned NOT NULL DEFAULT '0',
  `idCorso` int(6) unsigned NOT NULL DEFAULT '0',
  `dataIscrizione` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statoIscrizione` varchar(10) NOT NULL DEFAULT '',
  `posti` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `note` text NOT NULL,
  `partecipanti` text NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`idPartecipante`,`idCorso`),
  KEY `dataIscrizione` (`dataIscrizione`),
  KEY `statoIscrizione` (`statoIscrizione`),
  KEY `idCorso` (`idCorso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `corsi_tipo`;
CREATE TABLE `corsi_tipo` (
  `idCorsiTipo` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `descrizioneTipo` varchar(120) NOT NULL DEFAULT '',
  `restrizioni` varchar(100) NOT NULL DEFAULT '',
  `gruppo` varchar(50) NOT NULL DEFAULT '',
  `evidenza` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ripetibile` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `notificaTipo` varchar(10) NOT NULL DEFAULT '',
  `descrizioneEstesa` varchar(255) NOT NULL DEFAULT '',
  `punteggio` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCorsiTipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `corsi_tipo_permessi`;
CREATE TABLE `corsi_tipo_permessi` (
  `id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `idCorsiTipo` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`idCorsiTipo`),
  KEY `idCorsiTipo` (`idCorsiTipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `dwh_users_login`;
CREATE TABLE `dwh_users_login` (
  `iduser` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `nominativo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `url1` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `gruppi`;
CREATE TABLE `gruppi` (
  `gid` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome_gruppo` varchar(50) NOT NULL DEFAULT '',
  `gruppo_reale` int(3) unsigned NOT NULL DEFAULT '0',
  `admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `fax` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `redazionali` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `strutture` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prodotti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `redattore` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agenzia_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `back_office` int(4) unsigned NOT NULL DEFAULT '0',
  `pannello_agenti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pannello_adm_agenti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pannello_adm_campagne` tinyint(1) NOT NULL DEFAULT '0',
  `pannello_adm_poslavorativa` tinyint(1) NOT NULL DEFAULT '0',
  `gruppo_link` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `idetus` tinyint(1) NOT NULL DEFAULT '0',
  `log` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gestione_corsi` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `conferma_prenotazione` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prenota` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ettarget` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `change_user` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gestione_appalto_clienti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gestione_appalto_richieste` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `etmarketplace` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `demo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `credenziale_gruppo` varchar(50) DEFAULT NULL,
  `etgest_versione` tinyint(2) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `gruppi_bk`;
CREATE TABLE `gruppi_bk` (
  `gid` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome_gruppo` varchar(50) NOT NULL DEFAULT '',
  `gruppo_reale` int(3) unsigned NOT NULL DEFAULT '0',
  `admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `fax` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `redazionali` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `strutture` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prodotti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `redattore` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agenzia_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `back_office` int(4) unsigned NOT NULL DEFAULT '0',
  `pannello_agenti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pannello_adm_agenti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pannello_adm_campagne` tinyint(1) NOT NULL DEFAULT '0',
  `pannello_adm_poslavorativa` tinyint(1) NOT NULL DEFAULT '0',
  `gruppo_link` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `idetus` tinyint(1) NOT NULL DEFAULT '0',
  `log` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gestione_corsi` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `conferma_prenotazione` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prenota` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ettarget` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `change_user` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gestione_appalto_clienti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gestione_appalto_richieste` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `etmarketplace` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `demo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `credenziale_gruppo` varchar(50) DEFAULT NULL,
  `etgest_versione` tinyint(2) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `gruppi_lavoro`;
CREATE TABLE `gruppi_lavoro` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome_gruppo` varchar(30) NOT NULL DEFAULT '',
  `leader_gruppo` int(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_agent` varchar(10) NOT NULL DEFAULT '',
  `numclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `data` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`),
  KEY `id_agent` (`id_agent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `textlink` varchar(255) NOT NULL DEFAULT '',
  `urllink` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `status` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` tinytext NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `status` char(1) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `php_adesioni_campagne`;
CREATE TABLE `php_adesioni_campagne` (
  `idAdesione` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `dataCreazione` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mittente` int(4) unsigned NOT NULL DEFAULT '0',
  `destinatario` int(4) unsigned NOT NULL DEFAULT '0',
  `idTipoCampagna` smallint(5) unsigned NOT NULL DEFAULT '0',
  `dataRisposta` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('0','1','2') NOT NULL DEFAULT '0',
  PRIMARY KEY (`idAdesione`),
  KEY `mittente` (`mittente`),
  KEY `destinatario` (`destinatario`),
  KEY `status` (`status`),
  KEY `idTipoCampagna` (`idTipoCampagna`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `php_tipo_campagne`;
CREATE TABLE `php_tipo_campagne` (
  `idTipoCampagna` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomeCampagna` varchar(50) NOT NULL DEFAULT '',
  `ridistribuzione_net` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attiva` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `visibile` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `filtro` varchar(30) NOT NULL DEFAULT '',
  `default` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `frase_agente` text NOT NULL,
  `notifica_fine` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `commento` tinytext NOT NULL,
  `tipologia` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `userCreazione` int(4) unsigned NOT NULL DEFAULT '0',
  `idPortale` smallint(4) unsigned NOT NULL DEFAULT '0',
  `GoogleConversionId` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTipoCampagna`),
  KEY `visibile` (`visibile`),
  KEY `attiva` (`attiva`),
  KEY `tipologia` (`tipologia`),
  KEY `userCreazione` (`userCreazione`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `promoip`;
CREATE TABLE `promoip` (
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `time_visit` int(5) unsigned NOT NULL DEFAULT '0',
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `sigla` varchar(4) NOT NULL DEFAULT '',
  `provincia` varchar(30) NOT NULL DEFAULT '',
  `regione` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`sigla`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `residence`;
CREATE TABLE `residence` (
  `idresidence` varchar(8) NOT NULL DEFAULT '0',
  `regione1` varchar(100) NOT NULL DEFAULT '',
  `regione2` varchar(100) NOT NULL DEFAULT '',
  `regione3` varchar(100) NOT NULL DEFAULT '',
  `regione4` varchar(100) NOT NULL DEFAULT '',
  `regione5` varchar(100) NOT NULL DEFAULT '',
  `regione6` varchar(100) NOT NULL DEFAULT '',
  `regione7` varchar(100) NOT NULL DEFAULT '',
  `regione8` varchar(100) NOT NULL DEFAULT '',
  `localita1` varchar(150) NOT NULL DEFAULT '',
  `localita2` varchar(150) NOT NULL DEFAULT '',
  `localita3` varchar(150) NOT NULL DEFAULT '',
  `localita4` varchar(150) NOT NULL DEFAULT '',
  `localita5` varchar(150) NOT NULL DEFAULT '',
  `localita6` varchar(150) NOT NULL DEFAULT '',
  `localita7` varchar(150) NOT NULL DEFAULT '',
  `localita8` varchar(150) NOT NULL DEFAULT '',
  `struttura1` varchar(150) NOT NULL DEFAULT '',
  `struttura2` varchar(150) NOT NULL DEFAULT '',
  `struttura3` varchar(150) NOT NULL DEFAULT '',
  `struttura4` varchar(150) NOT NULL DEFAULT '',
  `struttura5` varchar(150) NOT NULL DEFAULT '',
  `struttura6` varchar(150) NOT NULL DEFAULT '',
  `struttura7` varchar(150) NOT NULL DEFAULT '',
  `struttura8` varchar(150) NOT NULL DEFAULT '',
  `note1` text NOT NULL,
  `note2` text NOT NULL,
  `note3` text NOT NULL,
  `note4` text NOT NULL,
  `note5` text NOT NULL,
  `note6` text NOT NULL,
  `note7` varchar(150) NOT NULL DEFAULT '',
  `note8` varchar(150) NOT NULL DEFAULT '',
  `offerte` text NOT NULL,
  KEY `idresidence` (`idresidence`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `sesclick`;
CREATE TABLE `sesclick` (
  `adv` char(1) NOT NULL DEFAULT '',
  `language` char(1) NOT NULL DEFAULT '',
  `data` date NOT NULL DEFAULT '0000-00-00',
  KEY `adv` (`adv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `sesip`;
CREATE TABLE `sesip` (
  `ip` varchar(15) NOT NULL DEFAULT '',
  `iduser` varchar(10) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `time` int(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `agent` varchar(255) NOT NULL DEFAULT '',
  `engine` varchar(255) NOT NULL DEFAULT '',
  `param` varchar(255) NOT NULL DEFAULT '',
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `session_data`;
CREATE TABLE `session_data` (
  `session_id` varchar(255) NOT NULL DEFAULT '',
  `http_user_agent` varchar(32) NOT NULL DEFAULT '',
  `session_data` blob NOT NULL,
  `session_expire` int(11) NOT NULL DEFAULT '0',
  `server_name` varchar(50) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `param` varchar(255) NOT NULL DEFAULT '',
  `remote_addr` varchar(15) NOT NULL DEFAULT '',
  `loggedUser` int(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `sic_domande`;
CREATE TABLE `sic_domande` (
  `idDomanda` smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  `domanda` text NOT NULL,
  `idUser` int(6) NOT NULL,
  PRIMARY KEY (`idDomanda`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `sic_risposte`;
CREATE TABLE `sic_risposte` (
  `idRisposta` int(6) NOT NULL AUTO_INCREMENT,
  `id_users` smallint(4) unsigned NOT NULL DEFAULT '0',
  `idDomanda` smallint(2) unsigned NOT NULL DEFAULT '0',
  `risposta` text NOT NULL,
  PRIMARY KEY (`idRisposta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `sms_inviati`;
CREATE TABLE `sms_inviati` (
  `idSms` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` smallint(4) unsigned NOT NULL DEFAULT '0',
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `numeroDest` varchar(20) NOT NULL DEFAULT '',
  `testo` varchar(160) NOT NULL DEFAULT '',
  `tipoSms` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idSms`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `traduzioni`;
CREATE TABLE `traduzioni` (
  `id` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `lingua_it_IT` text COLLATE utf8_unicode_ci,
  `lingua_en_US` text COLLATE utf8_unicode_ci,
  `lingua_es_ES` text COLLATE utf8_unicode_ci NOT NULL,
  `lingua_de_DE` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linea` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `trans_unit`;
CREATE TABLE `trans_unit` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL DEFAULT '1',
  `id` varchar(255) NOT NULL DEFAULT '',
  `source` text NOT NULL,
  `target` text NOT NULL,
  `comments` text NOT NULL,
  `date_added` int(11) NOT NULL DEFAULT '0',
  `date_modified` int(11) NOT NULL DEFAULT '0',
  `author` varchar(255) NOT NULL DEFAULT '',
  `translated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` varchar(15) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(120) NOT NULL DEFAULT '',
  `data_password` date NOT NULL DEFAULT '0000-00-00',
  `incentive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gruppo_lavoro` int(2) unsigned NOT NULL DEFAULT '0',
  `name` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `contratto_nome` varchar(500) DEFAULT NULL,
  `contratto_cognome` varchar(500) DEFAULT NULL,
  `noteutente` varchar(95) NOT NULL DEFAULT '',
  `sesso` char(1) NOT NULL DEFAULT '',
  `data_nascita` date DEFAULT NULL,
  `luogo_nascita` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(500) DEFAULT NULL,
  `cell` varchar(500) DEFAULT NULL,
  `celllavoro` varchar(500) DEFAULT NULL,
  `address` varchar(50) NOT NULL DEFAULT '',
  `emailbox` varchar(35) NOT NULL DEFAULT '',
  `town` varchar(25) NOT NULL DEFAULT '',
  `cap` varchar(5) NOT NULL DEFAULT '',
  `provincia` varchar(4) NOT NULL DEFAULT '',
  `regione` varchar(30) NOT NULL DEFAULT '',
  `nazione` char(3) NOT NULL DEFAULT 'ITA',
  `codice_fiscale` varchar(16) NOT NULL DEFAULT '',
  `partita_iva` varchar(13) NOT NULL DEFAULT '',
  `disp` varchar(100) DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `url1` varchar(255) DEFAULT '',
  `url2` varchar(255) NOT NULL DEFAULT '',
  `url3` varchar(255) NOT NULL DEFAULT '',
  `url4` varchar(255) NOT NULL DEFAULT '',
  `url5` varchar(255) NOT NULL DEFAULT '',
  `url6` varchar(255) NOT NULL DEFAULT '',
  `url7` varchar(255) NOT NULL DEFAULT '',
  `url8` varchar(255) NOT NULL DEFAULT '',
  `note` tinytext,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_update_at` datetime DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT '',
  `imk` char(1) NOT NULL DEFAULT '0',
  `chat` varchar(255) NOT NULL DEFAULT '',
  `totaldayclick` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `ferie` varchar(15) NOT NULL DEFAULT '',
  `ckchat` int(10) unsigned NOT NULL DEFAULT '0',
  `noteferie` varchar(100) NOT NULL DEFAULT '',
  `inizioferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fineferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hotel` varchar(15) NOT NULL DEFAULT '',
  `banned` varchar(5) NOT NULL DEFAULT 'si',
  `skype` varchar(255) NOT NULL DEFAULT '',
  `msn` varchar(200) NOT NULL DEFAULT '',
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(255) NOT NULL,
  `emailPersonale` varchar(255) NOT NULL DEFAULT '',
  `clear_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_attivo` enum('0','1') DEFAULT NULL,
  `mail_attivazione` char(2) NOT NULL DEFAULT '',
  `vuoto` varchar(18) NOT NULL DEFAULT '',
  `gid` int(3) unsigned NOT NULL DEFAULT '6',
  `idCom` int(4) unsigned NOT NULL DEFAULT '0',
  `promotoreRiferimento` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `strutture` int(4) unsigned NOT NULL DEFAULT '0',
  `redazionali` int(4) unsigned NOT NULL DEFAULT '0',
  `gestioneCampagne` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `latitudine` float NOT NULL DEFAULT '0',
  `longitudine` float NOT NULL DEFAULT '0',
  `adwords` varchar(100) NOT NULL DEFAULT '',
  `adwords_label` varchar(255) NOT NULL,
  `analytics` varchar(255) NOT NULL DEFAULT '',
  `chiSonoIta` tinytext NOT NULL,
  `provvigioniAves` varchar(50) NOT NULL DEFAULT '',
  `idAves` varchar(50) NOT NULL DEFAULT '',
  `lingua_pannelli` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `iscritti_newsletter_riassegnati` datetime DEFAULT NULL,
  `limite_prodotti_marketplace` smallint(5) unsigned NOT NULL DEFAULT '5',
  `tipocontratto_pto` varchar(50) NOT NULL DEFAULT '',
  `ma_toupdate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `multiagenzia_id` int(11) DEFAULT NULL,
  `ma_sincronizzato_al` datetime DEFAULT NULL,
  `nominativo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`),
  KEY `status` (`status`),
  KEY `ferie` (`ferie`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP VIEW IF EXISTS `users1`;
CREATE TABLE `users1` (`id` int(4) unsigned, `iduser` varchar(15), `username` varchar(255), `password` varchar(120), `data_password` date, `incentive` tinyint(1) unsigned, `gruppo_lavoro` int(2) unsigned, `name` varchar(500), `lname` varchar(500), `contratto_nome` varchar(500), `contratto_cognome` varchar(500), `noteutente` varchar(95), `sesso` char(1), `data_nascita` date, `luogo_nascita` varchar(32), `email` varchar(50), `tel` varchar(500), `cell` varchar(500), `celllavoro` varchar(500), `address` varchar(50), `emailbox` varchar(35), `town` varchar(25), `cap` varchar(5), `provincia` varchar(4), `regione` varchar(30), `nazione` char(3), `codice_fiscale` varchar(16), `partita_iva` varchar(13), `disp` varchar(100), `photo` varchar(255), `url1` varchar(255), `url2` varchar(255), `url3` varchar(255), `url4` varchar(255), `url5` varchar(255), `url6` varchar(255), `url7` varchar(255), `url8` varchar(255), `note` tinytext, `date` datetime, `date_update_at` datetime, `status` varchar(11), `imk` char(1), `chat` varchar(255), `totaldayclick` tinyint(4) unsigned, `ferie` varchar(15), `ckchat` int(10) unsigned, `noteferie` varchar(100), `inizioferie` datetime, `fineferie` datetime, `hotel` varchar(15), `banned` varchar(5), `skype` varchar(255), `msn` varchar(200), `facebook` varchar(100), `twitter` varchar(255), `emailPersonale` varchar(255), `clear_passwd` varchar(20), `imk_passwd` varchar(20), `imk_attivo` enum('0','1'), `mail_attivazione` char(2), `vuoto` varchar(18), `gid` int(3) unsigned, `idCom` int(4) unsigned, `promotoreRiferimento` tinyint(1) unsigned, `strutture` int(4) unsigned, `redazionali` int(4) unsigned, `gestioneCampagne` tinyint(1) unsigned, `latitudine` float, `longitudine` float, `adwords` varchar(100), `adwords_label` varchar(255), `analytics` varchar(255), `chiSonoIta` tinytext, `provvigioniAves` varchar(50), `idAves` varchar(50), `lingua_pannelli` varchar(5), `iscritti_newsletter_riassegnati` datetime, `limite_prodotti_marketplace` smallint(5) unsigned, `tipocontratto_pto` varchar(50), `ma_toupdate` tinyint(1) unsigned, `multiagenzia_id` int(11), `ma_sincronizzato_al` datetime, `contratto_tipo` varchar(20), `contratto_rinnovo` decimal(7,2), `contratto_data` date, `nominativo` varchar(500));


DROP TABLE IF EXISTS `users1_etraveler`;
CREATE TABLE `users1_etraveler` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contratto_nome` varchar(255) NOT NULL,
  `contratto_cognome` varchar(255) NOT NULL,
  `users1_id` int(4) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT NULL,
  `data_scadenza` datetime DEFAULT NULL,
  `tipologia` varchar(20) NOT NULL,
  `lingua` char(5) NOT NULL DEFAULT 'it_IT',
  `email` varchar(255) NOT NULL,
  `ferie` varchar(15) NOT NULL,
  `promotore_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL,
  `cap` varchar(5) NOT NULL,
  `town` varchar(25) NOT NULL,
  `provincia` varchar(4) NOT NULL,
  `nazione` varchar(3) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `codice_fiscale` varchar(16) NOT NULL,
  `partita_iva` varchar(13) NOT NULL,
  `pagamento_modo` varchar(25) NOT NULL,
  `pagamento_descrizione` text NOT NULL,
  `pagamento_privacy_accettata` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users1_id` (`users1_id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users1_etraveler_inviti`;
CREATE TABLE `users1_etraveler_inviti` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_etraveler_mittente` int(11) unsigned NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `dataInvito` datetime NOT NULL,
  `id_etraveler` int(11) unsigned NOT NULL DEFAULT '0',
  `dataIscritto` datetime NOT NULL,
  `saldato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users1_lingue`;
CREATE TABLE `users1_lingue` (
  `id_user` int(4) unsigned NOT NULL DEFAULT '0',
  `lingua` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  PRIMARY KEY (`id_user`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `users1_lingue_bk_20140409`;
CREATE TABLE `users1_lingue_bk_20140409` (
  `id_user` int(4) unsigned NOT NULL DEFAULT '0',
  `lingua` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  PRIMARY KEY (`id_user`,`lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `users1_lingue_history`;
CREATE TABLE `users1_lingue_history` (
  `id_user` int(4) unsigned NOT NULL,
  `lingua` varchar(5) NOT NULL DEFAULT '',
  `history_action` varchar(10) DEFAULT NULL,
  `history_action_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users1_note`;
CREATE TABLE `users1_note` (
  `id` int(4) unsigned NOT NULL DEFAULT '0',
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `note` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users1_notes`;
CREATE TABLE `users1_notes` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id` int(11) NOT NULL DEFAULT '0',
  `fk_id_crea` int(4) NOT NULL DEFAULT '0',
  `data` date NOT NULL DEFAULT '0000-00-00',
  `nota` text NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users_bk_20140409`;
CREATE TABLE `users_bk_20140409` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` varchar(15) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(120) NOT NULL DEFAULT '',
  `data_password` date NOT NULL DEFAULT '0000-00-00',
  `incentive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gruppo_lavoro` int(2) unsigned NOT NULL DEFAULT '0',
  `name` varchar(35) NOT NULL DEFAULT '',
  `lname` varchar(50) NOT NULL DEFAULT '',
  `contratto_nome` varchar(35) NOT NULL DEFAULT '',
  `contratto_cognome` varchar(50) NOT NULL DEFAULT '',
  `noteutente` varchar(95) NOT NULL DEFAULT '',
  `sesso` char(1) NOT NULL DEFAULT '',
  `data_nascita` date DEFAULT NULL,
  `luogo_nascita` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(15) NOT NULL DEFAULT '',
  `cell` varchar(50) NOT NULL DEFAULT '',
  `celllavoro` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL DEFAULT '',
  `emailbox` varchar(35) NOT NULL DEFAULT '',
  `town` varchar(25) NOT NULL DEFAULT '',
  `cap` varchar(5) NOT NULL DEFAULT '',
  `provincia` varchar(4) NOT NULL DEFAULT '',
  `regione` varchar(30) NOT NULL DEFAULT '',
  `nazione` char(3) NOT NULL DEFAULT 'ITA',
  `codice_fiscale` varchar(16) NOT NULL DEFAULT '',
  `partita_iva` varchar(13) NOT NULL DEFAULT '',
  `disp` varchar(100) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `url1` varchar(255) DEFAULT '',
  `url2` varchar(255) NOT NULL DEFAULT '',
  `url3` varchar(255) NOT NULL DEFAULT '',
  `url4` varchar(255) NOT NULL DEFAULT '',
  `url5` varchar(255) NOT NULL DEFAULT '',
  `url6` varchar(255) NOT NULL DEFAULT '',
  `url7` varchar(255) NOT NULL DEFAULT '',
  `url8` varchar(255) NOT NULL DEFAULT '',
  `note` tinytext,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_update_at` datetime DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT '',
  `imk` char(1) NOT NULL DEFAULT '0',
  `chat` varchar(255) NOT NULL DEFAULT '',
  `totaldayclick` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `ferie` varchar(15) NOT NULL DEFAULT '',
  `ckchat` int(10) unsigned NOT NULL DEFAULT '0',
  `noteferie` varchar(100) NOT NULL DEFAULT '',
  `inizioferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fineferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hotel` varchar(15) NOT NULL DEFAULT '',
  `banned` varchar(5) NOT NULL DEFAULT 'si',
  `skype` varchar(255) NOT NULL DEFAULT '',
  `msn` varchar(35) NOT NULL DEFAULT '',
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(255) NOT NULL,
  `emailPersonale` varchar(255) NOT NULL DEFAULT '',
  `clear_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_attivo` enum('0','1') DEFAULT NULL,
  `mail_attivazione` char(2) NOT NULL DEFAULT '',
  `vuoto` varchar(18) NOT NULL DEFAULT '',
  `gid` int(3) unsigned NOT NULL DEFAULT '6',
  `idCom` int(4) unsigned NOT NULL DEFAULT '0',
  `promotoreRiferimento` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `strutture` int(4) unsigned NOT NULL DEFAULT '0',
  `redazionali` int(4) unsigned NOT NULL DEFAULT '0',
  `gestioneCampagne` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `latitudine` float NOT NULL DEFAULT '0',
  `longitudine` float NOT NULL DEFAULT '0',
  `adwords` varchar(20) NOT NULL DEFAULT '',
  `adwords_label` varchar(255) NOT NULL,
  `analytics` varchar(255) NOT NULL DEFAULT '',
  `chiSonoIta` tinytext NOT NULL,
  `provvigioniAves` varchar(50) NOT NULL DEFAULT '',
  `idAves` varchar(50) NOT NULL DEFAULT '',
  `lingua_pannelli` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `iscritti_newsletter_riassegnati` datetime DEFAULT NULL,
  `limite_prodotti_marketplace` smallint(5) unsigned NOT NULL DEFAULT '5',
  `tipocontratto_pto` varchar(50) NOT NULL DEFAULT '',
  `ma_toupdate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `multiagenzia_id` int(11) NOT NULL DEFAULT '0',
  `ma_sincronizzato_al` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `iduser` (`iduser`),
  KEY `status` (`status`),
  KEY `ferie` (`ferie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users_bk_2014_04_10`;
CREATE TABLE `users_bk_2014_04_10` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` varchar(15) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(120) NOT NULL DEFAULT '',
  `data_password` date NOT NULL DEFAULT '0000-00-00',
  `incentive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gruppo_lavoro` int(2) unsigned NOT NULL DEFAULT '0',
  `name` varchar(35) NOT NULL DEFAULT '',
  `lname` varchar(50) NOT NULL DEFAULT '',
  `contratto_nome` varchar(35) NOT NULL DEFAULT '',
  `contratto_cognome` varchar(50) NOT NULL DEFAULT '',
  `noteutente` varchar(95) NOT NULL DEFAULT '',
  `sesso` char(1) NOT NULL DEFAULT '',
  `data_nascita` date DEFAULT NULL,
  `luogo_nascita` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(15) NOT NULL DEFAULT '',
  `cell` varchar(50) NOT NULL DEFAULT '',
  `celllavoro` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL DEFAULT '',
  `emailbox` varchar(35) NOT NULL DEFAULT '',
  `town` varchar(25) NOT NULL DEFAULT '',
  `cap` varchar(5) NOT NULL DEFAULT '',
  `provincia` varchar(4) NOT NULL DEFAULT '',
  `regione` varchar(30) NOT NULL DEFAULT '',
  `nazione` char(3) NOT NULL DEFAULT 'ITA',
  `codice_fiscale` varchar(16) NOT NULL DEFAULT '',
  `partita_iva` varchar(13) NOT NULL DEFAULT '',
  `disp` varchar(100) DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `url1` varchar(255) DEFAULT '',
  `url2` varchar(255) NOT NULL DEFAULT '',
  `url3` varchar(255) NOT NULL DEFAULT '',
  `url4` varchar(255) NOT NULL DEFAULT '',
  `url5` varchar(255) NOT NULL DEFAULT '',
  `url6` varchar(255) NOT NULL DEFAULT '',
  `url7` varchar(255) NOT NULL DEFAULT '',
  `url8` varchar(255) NOT NULL DEFAULT '',
  `note` tinytext,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_update_at` datetime DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT '',
  `imk` char(1) NOT NULL DEFAULT '0',
  `chat` varchar(255) NOT NULL DEFAULT '',
  `totaldayclick` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `ferie` varchar(15) NOT NULL DEFAULT '',
  `ckchat` int(10) unsigned NOT NULL DEFAULT '0',
  `noteferie` varchar(100) NOT NULL DEFAULT '',
  `inizioferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fineferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hotel` varchar(15) NOT NULL DEFAULT '',
  `banned` varchar(5) NOT NULL DEFAULT 'si',
  `skype` varchar(255) NOT NULL DEFAULT '',
  `msn` varchar(35) NOT NULL DEFAULT '',
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(255) NOT NULL,
  `emailPersonale` varchar(255) NOT NULL DEFAULT '',
  `clear_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_attivo` enum('0','1') DEFAULT NULL,
  `mail_attivazione` char(2) NOT NULL DEFAULT '',
  `vuoto` varchar(18) NOT NULL DEFAULT '',
  `gid` int(3) unsigned NOT NULL DEFAULT '6',
  `idCom` int(4) unsigned NOT NULL DEFAULT '0',
  `promotoreRiferimento` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `strutture` int(4) unsigned NOT NULL DEFAULT '0',
  `redazionali` int(4) unsigned NOT NULL DEFAULT '0',
  `gestioneCampagne` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `latitudine` float NOT NULL DEFAULT '0',
  `longitudine` float NOT NULL DEFAULT '0',
  `adwords` varchar(20) NOT NULL DEFAULT '',
  `adwords_label` varchar(255) NOT NULL,
  `analytics` varchar(255) NOT NULL DEFAULT '',
  `chiSonoIta` tinytext NOT NULL,
  `provvigioniAves` varchar(50) NOT NULL DEFAULT '',
  `idAves` varchar(50) NOT NULL DEFAULT '',
  `lingua_pannelli` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `iscritti_newsletter_riassegnati` datetime DEFAULT NULL,
  `limite_prodotti_marketplace` smallint(5) unsigned NOT NULL DEFAULT '5',
  `tipocontratto_pto` varchar(50) NOT NULL DEFAULT '',
  `ma_toupdate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `multiagenzia_id` int(11) DEFAULT NULL,
  `ma_sincronizzato_al` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `iduser` (`iduser`),
  KEY `status` (`status`),
  KEY `ferie` (`ferie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users_contratti`;
CREATE TABLE `users_contratti` (
  `id` int(4) NOT NULL,
  `agenzia` varchar(20) NOT NULL,
  `contratto_tipo` varchar(20) NOT NULL,
  `contratto_rinnovo` decimal(7,2) NOT NULL,
  `contratto_data` date DEFAULT NULL,
  `principale` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`agenzia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users_contratti_bk_20140409`;
CREATE TABLE `users_contratti_bk_20140409` (
  `id` int(4) NOT NULL,
  `agenzia` varchar(20) NOT NULL,
  `contratto_tipo` varchar(20) NOT NULL,
  `contratto_rinnovo` decimal(7,2) NOT NULL,
  `contratto_data` date DEFAULT NULL,
  `principale` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`agenzia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users_contratti_history`;
CREATE TABLE `users_contratti_history` (
  `id` int(4) unsigned NOT NULL,
  `agenzia` varchar(20) NOT NULL DEFAULT '',
  `contratto_tipo` varchar(20) NOT NULL DEFAULT '',
  `contratto_rinnovo` decimal(7,2) NOT NULL,
  `contratto_data` date DEFAULT NULL,
  `principale` tinyint(1) NOT NULL DEFAULT '0',
  `history_action` varchar(10) DEFAULT NULL,
  `history_action_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users_history`;
CREATE TABLE `users_history` (
  `id` int(4) unsigned NOT NULL,
  `iduser` varchar(15) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(120) NOT NULL DEFAULT '',
  `data_password` date NOT NULL DEFAULT '0000-00-00',
  `incentive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gruppo_lavoro` int(2) unsigned NOT NULL DEFAULT '0',
  `name` varchar(35) NOT NULL DEFAULT '',
  `lname` varchar(50) NOT NULL DEFAULT '',
  `contratto_nome` varchar(35) NOT NULL DEFAULT '',
  `contratto_cognome` varchar(50) NOT NULL DEFAULT '',
  `noteutente` varchar(95) NOT NULL DEFAULT '',
  `sesso` char(1) NOT NULL DEFAULT '',
  `data_nascita` date DEFAULT NULL,
  `luogo_nascita` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(15) NOT NULL DEFAULT '',
  `cell` varchar(50) NOT NULL DEFAULT '',
  `celllavoro` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL DEFAULT '',
  `emailbox` varchar(35) NOT NULL DEFAULT '',
  `town` varchar(25) NOT NULL DEFAULT '',
  `cap` varchar(5) NOT NULL DEFAULT '',
  `provincia` varchar(4) NOT NULL DEFAULT '',
  `regione` varchar(30) NOT NULL DEFAULT '',
  `nazione` char(3) NOT NULL DEFAULT 'ITA',
  `codice_fiscale` varchar(16) NOT NULL DEFAULT '',
  `partita_iva` varchar(13) NOT NULL DEFAULT '',
  `disp` varchar(100) DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `url1` varchar(255) DEFAULT '',
  `url2` varchar(255) NOT NULL DEFAULT '',
  `url3` varchar(255) NOT NULL DEFAULT '',
  `url4` varchar(255) NOT NULL DEFAULT '',
  `url5` varchar(255) NOT NULL DEFAULT '',
  `url6` varchar(255) NOT NULL DEFAULT '',
  `url7` varchar(255) NOT NULL DEFAULT '',
  `url8` varchar(255) NOT NULL DEFAULT '',
  `note` tinytext,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_update_at` datetime DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT '',
  `imk` char(1) NOT NULL DEFAULT '0',
  `chat` varchar(255) NOT NULL DEFAULT '',
  `totaldayclick` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `ferie` varchar(15) NOT NULL DEFAULT '',
  `ckchat` int(10) unsigned NOT NULL DEFAULT '0',
  `noteferie` varchar(100) NOT NULL DEFAULT '',
  `inizioferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fineferie` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hotel` varchar(15) NOT NULL DEFAULT '',
  `banned` varchar(5) NOT NULL DEFAULT 'si',
  `skype` varchar(255) NOT NULL DEFAULT '',
  `msn` varchar(35) NOT NULL DEFAULT '',
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(255) NOT NULL,
  `emailPersonale` varchar(255) NOT NULL DEFAULT '',
  `clear_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_passwd` varchar(20) NOT NULL DEFAULT '',
  `imk_attivo` enum('0','1') DEFAULT NULL,
  `mail_attivazione` char(2) NOT NULL DEFAULT '',
  `vuoto` varchar(18) NOT NULL DEFAULT '',
  `gid` int(3) unsigned NOT NULL DEFAULT '6',
  `idCom` int(4) unsigned NOT NULL DEFAULT '0',
  `promotoreRiferimento` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `strutture` int(4) unsigned NOT NULL DEFAULT '0',
  `redazionali` int(4) unsigned NOT NULL DEFAULT '0',
  `gestioneCampagne` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `latitudine` float NOT NULL DEFAULT '0',
  `longitudine` float NOT NULL DEFAULT '0',
  `adwords` varchar(20) NOT NULL DEFAULT '',
  `adwords_label` varchar(255) NOT NULL,
  `analytics` varchar(255) NOT NULL DEFAULT '',
  `chiSonoIta` tinytext NOT NULL,
  `provvigioniAves` varchar(50) NOT NULL DEFAULT '',
  `idAves` varchar(50) NOT NULL DEFAULT '',
  `lingua_pannelli` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it_IT',
  `iscritti_newsletter_riassegnati` datetime DEFAULT NULL,
  `limite_prodotti_marketplace` smallint(5) unsigned NOT NULL DEFAULT '5',
  `tipocontratto_pto` varchar(50) NOT NULL DEFAULT '',
  `multiagenzia_id` int(11) DEFAULT NULL,
  `ma_sincronizzato_al` datetime DEFAULT NULL,
  `history_action` varchar(10) DEFAULT NULL,
  `history_action_at` datetime DEFAULT NULL,
  KEY `iduser` (`iduser`),
  KEY `status` (`status`),
  KEY `ferie` (`ferie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users_informazioni`;
CREATE TABLE `users_informazioni` (
  `idUser` int(4) NOT NULL DEFAULT '0',
  `motivazione` mediumtext NOT NULL,
  `aspettative` mediumtext NOT NULL,
  `note` mediumtext NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 2016-04-21 04:07:09
