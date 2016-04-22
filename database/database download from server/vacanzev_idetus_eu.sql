-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `allegati`;
CREATE TABLE `allegati` (
  `idAllegato` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `percorso` varchar(100) NOT NULL DEFAULT '',
  `nomeFile` varchar(100) NOT NULL DEFAULT '',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idAllegato`),
  KEY `id_modulo` (`id_modulo`,`tipoDocumento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `allegati_v2`;
CREATE TABLE `allegati_v2` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `allegati_type_idx` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `anagrafiche`;
CREATE TABLE `anagrafiche` (
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `dataCreazione` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataNascita` date DEFAULT '0000-00-00',
  `cognome` varchar(50) NOT NULL DEFAULT '',
  `nome` varchar(30) NOT NULL DEFAULT '',
  `sesso` enum('M','F') NOT NULL DEFAULT 'M',
  `codFisc` varchar(16) NOT NULL DEFAULT '',
  `telCasa` varchar(20) NOT NULL DEFAULT '',
  `cell` varchar(20) NOT NULL DEFAULT '',
  `tellUff` varchar(20) NOT NULL DEFAULT '',
  `fax` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `email2` varchar(100) NOT NULL DEFAULT '',
  `indirizzo` varchar(100) NOT NULL DEFAULT '',
  `numCivico` varchar(10) NOT NULL DEFAULT '',
  `cap` varchar(5) NOT NULL DEFAULT '',
  `comune` varchar(100) NOT NULL DEFAULT '',
  `provincia` varchar(50) NOT NULL DEFAULT '',
  `nazione` char(3) NOT NULL DEFAULT '',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotorePrec` int(10) unsigned NOT NULL DEFAULT '0',
  `note_cliente` text NOT NULL,
  `temporaneo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tipoAnagrafica` char(1) NOT NULL DEFAULT '',
  `ragioneSociale` varchar(100) NOT NULL DEFAULT '',
  `partitaIva` varchar(13) NOT NULL DEFAULT '',
  `luogoNascita` varchar(100) NOT NULL DEFAULT '',
  `indirizzoAzienda` varchar(100) NOT NULL DEFAULT '',
  `codPromotoreProprietario` int(10) unsigned NOT NULL DEFAULT '0',
  `provvigioneAppaltoCliente` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime DEFAULT NULL,
  `lingua` varchar(5) NOT NULL DEFAULT 'it_IT',
  `updated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `codiceCliente` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_anagrafica`),
  KEY `email` (`email`),
  KEY `codPromotore` (`codPromotore`),
  KEY `email2` (`email2`),
  KEY `telCasa` (`telCasa`),
  KEY `cell` (`cell`),
  KEY `cognome` (`cognome`),
  KEY `tellUff` (`tellUff`),
  KEY `fax` (`fax`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `anagrafiche_contatti`;
CREATE TABLE `anagrafiche_contatti` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_anagrafica` varchar(18) NOT NULL,
  `tipocontatto` varchar(10) NOT NULL DEFAULT '',
  `contatto` varchar(255) DEFAULT NULL,
  `descrizione` varchar(255) NOT NULL,
  `datacreazione` datetime DEFAULT NULL,
  `datamodifica` datetime DEFAULT NULL,
  `versione` tinyint(2) unsigned NOT NULL DEFAULT '2',
  `principale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sola_lettura` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `contatto_idx` (`contatto`),
  KEY `id_anagrafica_idx` (`id_anagrafica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `anagrafiche_note`;
CREATE TABLE `anagrafiche_note` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_anagrafica`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `anagrafiche_v2_old`;
CREATE TABLE `anagrafiche_v2_old` (
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `dataNascita` date DEFAULT NULL,
  `cognome` varchar(50) NOT NULL DEFAULT '',
  `nome` varchar(30) NOT NULL DEFAULT '',
  `sesso` varchar(1) DEFAULT 'M',
  `codFisc` varchar(16) NOT NULL DEFAULT '',
  `indirizzo` varchar(100) NOT NULL DEFAULT '',
  `numCivico` varchar(10) NOT NULL DEFAULT '',
  `cap` varchar(5) NOT NULL DEFAULT '',
  `comune` varchar(100) NOT NULL DEFAULT '',
  `provincia` varchar(50) NOT NULL DEFAULT '',
  `nazione` varchar(3) NOT NULL DEFAULT '',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotorePrec` int(10) unsigned NOT NULL DEFAULT '0',
  `note_cliente` text NOT NULL,
  `temporaneo` tinyint(1) DEFAULT '0',
  `tipoAnagrafica` varchar(1) DEFAULT 'P',
  `ragioneSociale` varchar(100) NOT NULL DEFAULT '',
  `partitaIva` varchar(13) NOT NULL DEFAULT '',
  `luogoNascita` varchar(100) NOT NULL DEFAULT '',
  `indirizzoAzienda` varchar(100) NOT NULL DEFAULT '',
  `codPromotoreProprietario` int(10) unsigned NOT NULL DEFAULT '0',
  `provvigioneAppaltoCliente` mediumint(9) DEFAULT '0',
  `lingua` varchar(5) NOT NULL DEFAULT 'it_IT',
  `dataCreazione` datetime NOT NULL,
  `dataModifica` datetime NOT NULL,
  PRIMARY KEY (`id_anagrafica`),
  KEY `codpromotore_idx` (`codPromotore`),
  KEY `codpromotoreprec_idx` (`codPromotorePrec`),
  KEY `codpromotoreproprietario_idx` (`codPromotoreProprietario`),
  KEY `nazione_idx` (`nazione`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP VIEW IF EXISTS `anagrafiche_view`;
CREATE TABLE `anagrafiche_view` (`id_anagrafica` varchar(18), `dataCreazione` datetime, `dataNascita` date, `cognome` varchar(50), `nome` varchar(30), `sesso` enum('M','F'), `codFisc` varchar(16), `telCasa` varchar(20), `cell` varchar(20), `tellUff` varchar(20), `fax` varchar(20), `email` varchar(100), `email2` varchar(100), `indirizzo` varchar(100), `numCivico` varchar(10), `cap` varchar(5), `comune` varchar(100), `provincia` varchar(50), `nazione` char(3), `codPromotore` int(10) unsigned, `codPromotorePrec` int(10) unsigned, `note_cliente` text, `temporaneo` tinyint(1) unsigned, `tipoAnagrafica` char(1), `ragioneSociale` varchar(100), `partitaIva` varchar(13), `luogoNascita` varchar(100), `indirizzoAzienda` varchar(100), `codPromotoreProprietario` int(10) unsigned, `provvigioneAppaltoCliente` tinyint(3) unsigned, `dataModifica` datetime, `lingua` varchar(5), `isCliente` bigint(1), `dataCliente` datetime);


DROP TABLE IF EXISTS `appalti_cliente_anagrafiche`;
CREATE TABLE `appalti_cliente_anagrafiche` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_appalto` int(6) unsigned NOT NULL DEFAULT '0',
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `attivo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `appalti_cliente_messaggi`;
CREATE TABLE `appalti_cliente_messaggi` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_appalto` int(6) unsigned NOT NULL DEFAULT '0',
  `stato` varchar(20) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `appalti_cliente_testate`;
CREATE TABLE `appalti_cliente_testate` (
  `id_appalto` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreMittente` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreDestinatario` int(10) unsigned NOT NULL DEFAULT '0',
  `stato` varchar(20) NOT NULL DEFAULT '',
  `dataStato` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descrizione` text NOT NULL,
  `risposta` text NOT NULL,
  `provvigione` tinyint(3) NOT NULL DEFAULT '0',
  `codice` varchar(10) NOT NULL DEFAULT '',
  `id_appalto_riferimento` int(6) unsigned NOT NULL DEFAULT '0',
  `id_ticket_creazione` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_appalto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `appalti_cliente_viaggi`;
CREATE TABLE `appalti_cliente_viaggi` (
  `id_appalto` int(6) unsigned NOT NULL DEFAULT '0',
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_appalto`,`id_viaggio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `codiciAves`;
CREATE TABLE `codiciAves` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `codiceAves` varchar(255) NOT NULL DEFAULT '',
  `iva` decimal(5,2) NOT NULL DEFAULT '0.00',
  `codice` varchar(20) NOT NULL DEFAULT '',
  `moduli` varchar(20) NOT NULL DEFAULT '',
  `php` text NOT NULL,
  `descrizione` varchar(255) NOT NULL DEFAULT '',
  `deslunga` text NOT NULL,
  `regimeIva` varchar(100) NOT NULL DEFAULT '',
  `regime` varchar(100) NOT NULL,
  `commissioneAssicurazione` decimal(8,5) NOT NULL DEFAULT '0.00000',
  `tipoDestinazione` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agenzia` varchar(10) NOT NULL DEFAULT 'ETIta',
  `deleted_at` datetime NOT NULL,
  `codice_iva` varchar(50) DEFAULT NULL,
  `netta` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `codice` (`codiceAves`),
  KEY `agenzia` (`agenzia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `codiciaves_rel_fornitori`;
CREATE TABLE `codiciaves_rel_fornitori` (
  `idFornitore` int(11) NOT NULL DEFAULT '0',
  `codiceAves` varchar(20) NOT NULL DEFAULT '',
  `approvanti` text NOT NULL,
  `approvato` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idFornitore`,`codiceAves`),
  KEY `codiceAves` (`codiceAves`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `codicicontabili_rel_tiposervizi`;
CREATE TABLE `codicicontabili_rel_tiposervizi` (
  `tipoServizio` varchar(50) NOT NULL,
  `codiceContabile` varchar(50) NOT NULL,
  PRIMARY KEY (`tipoServizio`,`codiceContabile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `documenti`;
CREATE TABLE `documenti` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` bigint(20) unsigned DEFAULT NULL,
  `codpromotore` int(10) unsigned DEFAULT NULL,
  `codpromotorecreazione` int(10) unsigned DEFAULT NULL,
  `codpromotoremodifica` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(50) NOT NULL DEFAULT 'generico',
  `titolo` varchar(255) DEFAULT NULL,
  `descrizione` text,
  `datainvio` datetime DEFAULT NULL,
  `booking_stato` bigint(20) DEFAULT NULL,
  `booking_codPromotoreStato` bigint(20) DEFAULT NULL,
  `booking_codPromotoreLavorazione` bigint(20) DEFAULT NULL,
  `booking_letto` tinyint(1) DEFAULT NULL,
  `ec_stato` bigint(20) DEFAULT '1',
  `ec_codPromotoreStato` bigint(20) DEFAULT NULL,
  `ec_codPromotoreLavorazione` bigint(20) DEFAULT NULL,
  `ec_letto` tinyint(1) DEFAULT NULL,
  `prenotazioni_letturaData` datetime DEFAULT NULL,
  `prenotazioni_letturaCodPromotore` bigint(20) unsigned DEFAULT NULL,
  `prenotazioni_letturaStato` tinyint(1) DEFAULT '0',
  `data` datetime NOT NULL,
  `datamodifica` datetime NOT NULL,
  `tipoInvio` varchar(50) DEFAULT NULL,
  `link_supplier` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `myindex_idx` (`id`,`id_viaggio`),
  KEY `documenti_tipo_idx` (`tipo`),
  KEY `codpromotore_idx` (`codpromotore`),
  KEY `codpromotorecreazione_idx` (`codpromotorecreazione`),
  KEY `codpromotoremodifica_idx` (`codpromotoremodifica`),
  KEY `id_viaggio_idx` (`id_viaggio`),
  KEY `tipoInvio_idx` (`tipoInvio`,`data`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `documenti_contrattoViaggio`;
CREATE TABLE `documenti_contrattoViaggio` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `acconto` decimal(7,2) DEFAULT '0.00',
  `accontoData` date DEFAULT NULL,
  `saldo` decimal(7,2) DEFAULT '0.00',
  `saldoData` date DEFAULT NULL,
  `documenti_note` text,
  `note` text,
  `partenza_luogo` varchar(50) DEFAULT NULL,
  `ritorno_luogo` varchar(50) DEFAULT NULL,
  `denominazione` varchar(255) DEFAULT NULL,
  `saldato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `regime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `documenti_dettaglioRichiesta`;
CREATE TABLE `documenti_dettaglioRichiesta` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `richiestacodice` varchar(10) DEFAULT NULL,
  `richiestadatacreazione` datetime DEFAULT NULL,
  `richiestapacchettodescrizione` varchar(255) DEFAULT NULL,
  `richiestapacchettoid` varchar(20) DEFAULT NULL,
  `richiestapacchettocosto` varchar(255) DEFAULT NULL,
  `richiestapartenzadal` varchar(50) DEFAULT NULL,
  `richiestapartenzaal` varchar(50) DEFAULT NULL,
  `richiestaadultinumero` smallint(6) DEFAULT NULL,
  `richiestabambininumero` smallint(6) DEFAULT NULL,
  `richiestabambinieta` varchar(100) DEFAULT NULL,
  `richiestareperibileda` varchar(30) DEFAULT NULL,
  `richiestareperibilea` varchar(30) DEFAULT NULL,
  `richiestarecapitoemail` varchar(255) NOT NULL,
  `richiestarecapitotelefonocasa` varchar(30) NOT NULL,
  `richiestarecapitotelefonoufficio` varchar(30) NOT NULL,
  `richiestarecapitotelefonocellulare` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `documenti_notaViaggio`;
CREATE TABLE `documenti_notaViaggio` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `destinatario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `destinatario_idx` (`destinatario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incassi_tipologie`;
CREATE TABLE `incassi_tipologie` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codice` varchar(10) DEFAULT NULL,
  `agenzia` varchar(10) DEFAULT NULL,
  `descrizione` varchar(255) DEFAULT NULL,
  `credenziali` text,
  `commissione` decimal(5,2) DEFAULT '0.00',
  `allegatoRichiesto` tinyint(1) NOT NULL DEFAULT '0',
  `esportabile` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incentive_perc`;
CREATE TABLE `incentive_perc` (
  `codPromDest` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromPart` int(10) unsigned NOT NULL DEFAULT '0',
  `data` varchar(6) NOT NULL DEFAULT '',
  `percorso` varchar(50) NOT NULL DEFAULT '',
  `perc` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`codPromDest`,`codPromPart`,`data`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incentive_perc2`;
CREATE TABLE `incentive_perc2` (
  `codPromDest` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromPart` int(10) unsigned NOT NULL DEFAULT '0',
  `data` varchar(6) NOT NULL DEFAULT '',
  `percorso` varchar(50) NOT NULL DEFAULT '',
  `perc` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`codPromDest`,`codPromPart`,`data`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incentive_provvigioni`;
CREATE TABLE `incentive_provvigioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `provvigione` varchar(50) NOT NULL DEFAULT '',
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `importo` decimal(7,2) NOT NULL DEFAULT '0.00',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `promotoreSaldato` int(10) unsigned NOT NULL DEFAULT '0',
  `dataSaldato` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `agenzia` varchar(20) NOT NULL DEFAULT 'ETIta',
  `manuale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `codPromotore` (`codPromotore`),
  KEY `provigione` (`provvigione`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `id_modulo` (`id_modulo`),
  KEY `data` (`data`),
  KEY `agenzia` (`agenzia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incentive_scala`;
CREATE TABLE `incentive_scala` (
  `vp` smallint(4) unsigned NOT NULL DEFAULT '0',
  `percentuale` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `tipo` tinyint(2) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incentive_users`;
CREATE TABLE `incentive_users` (
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `gruppo` int(10) unsigned NOT NULL DEFAULT '0',
  `tipo` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataSottoscrizione` date NOT NULL DEFAULT '0000-00-00',
  `demerito_personale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `demerito_gruppo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`codPromotore`),
  KEY `cpp` (`gruppo`),
  KEY `dataSottoscrizione` (`dataSottoscrizione`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incentive_users_history`;
CREATE TABLE `incentive_users_history` (
  `codPromotore` smallint(4) unsigned NOT NULL DEFAULT '0',
  `gruppo` smallint(4) unsigned NOT NULL DEFAULT '0',
  `tipo` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataSottoscrizione` date NOT NULL DEFAULT '0000-00-00',
  `demerito_personale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `demerito_gruppo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `operation_type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `incentive_vp`;
CREATE TABLE `incentive_vp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codPromotore` int(4) unsigned NOT NULL DEFAULT '0',
  `gruppo` int(4) unsigned NOT NULL DEFAULT '0',
  `tipo` tinyint(4) NOT NULL,
  `demerito_personale` tinyint(4) NOT NULL,
  `demerito_gruppo` tinyint(4) NOT NULL,
  `punti` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `fatturato` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `moduli` smallint(4) unsigned NOT NULL DEFAULT '0',
  `data` char(6) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `incentive_location` char(7) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gruppo` (`gruppo`),
  KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `incentive_vp2`;
CREATE TABLE `incentive_vp2` (
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `gruppo` int(10) unsigned NOT NULL DEFAULT '0',
  `punti` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `fatturato` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `moduli` smallint(4) unsigned NOT NULL DEFAULT '0',
  `data` char(6) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`codPromotore`,`data`),
  KEY `gruppo` (`gruppo`),
  KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `iso`;
CREATE TABLE `iso` (
  `codice` varchar(4) NOT NULL DEFAULT '',
  `stato` varchar(100) NOT NULL DEFAULT '',
  `opzioni` text NOT NULL,
  `comunitaria` tinyint(1) NOT NULL DEFAULT '0',
  `tipologiaNazione` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prefissoInternazionale` varchar(15) DEFAULT NULL,
  `currency` varchar(4) DEFAULT NULL,
  UNIQUE KEY `codice` (`codice`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `moduli_notifiche_lettura`;
CREATE TABLE `moduli_notifiche_lettura` (
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `dataLettura` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`,`tipoDocumento`),
  KEY `stato` (`stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP VIEW IF EXISTS `moduli_notifiche_lettura_nonLetto`;
CREATE TABLE `moduli_notifiche_lettura_nonLetto` (`id_modulo` int(6) unsigned, `tipoDocumento` tinyint(2) unsigned, `codPromotore` int(10) unsigned, `dataLettura` datetime, `stato` tinyint(1) unsigned);


DROP TABLE IF EXISTS `moduli_notifiche_lettura_old`;
CREATE TABLE `moduli_notifiche_lettura_old` (
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `dataLettura` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`,`tipoDocumento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_annullamentoTO`;
CREATE TABLE `modulo_annullamentoTO` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `to` varchar(100) NOT NULL DEFAULT '',
  `numPrenotazione` varchar(20) NOT NULL DEFAULT '',
  `destinazione` varchar(20) NOT NULL DEFAULT '',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_assicurazione`;
CREATE TABLE `modulo_assicurazione` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `destinazione` char(3) NOT NULL DEFAULT '',
  `fornitore` smallint(4) unsigned NOT NULL DEFAULT '0',
  `numeroPreventivo` varchar(255) NOT NULL,
  `dataIN` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataOUT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codice_fiscale` varchar(16) NOT NULL DEFAULT '',
  `nascitaNazione` char(3) NOT NULL DEFAULT '',
  `nascitaProvincia` varchar(4) NOT NULL DEFAULT '',
  `nascitaComune` varchar(100) NOT NULL DEFAULT '',
  `nPartecipanti` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `partecipanti` longtext NOT NULL,
  `erroriViaggio` varchar(255) NOT NULL DEFAULT '',
  `noteModulo` text NOT NULL,
  `totale` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `pagamento` varchar(20) NOT NULL DEFAULT '',
  `statoPagamento` varchar(20) NOT NULL DEFAULT '',
  `modo_pagamento` int(3) NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `numPrenotazione` varchar(20) NOT NULL DEFAULT '',
  `commissioneLorda` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneCarta` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `speseCorriere` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneNetta` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `iva` decimal(6,2) NOT NULL DEFAULT '0.00',
  `codPromotoreIVA` smallint(4) unsigned NOT NULL DEFAULT '0',
  `codiceAves` varchar(20) NOT NULL DEFAULT '',
  `iscrizione` decimal(6,2) NOT NULL DEFAULT '0.00',
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `statusAves` (`statusAves`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_attesa_preventivo`;
CREATE TABLE `modulo_attesa_preventivo` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `promoRif` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ec_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `testa` text NOT NULL,
  `intestazione` text NOT NULL,
  `conclusioni` text NOT NULL,
  `dataPreventivo` datetime DEFAULT '0000-00-00 00:00:00',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `booking_stato` (`booking_stato`),
  KEY `ec_stato` (`ec_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_contratto_mail`;
CREATE TABLE `modulo_contratto_mail` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` mediumtext NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `documentiAggregati` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ec_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `data` (`data`),
  KEY `booking_stato` (`booking_stato`),
  KEY `ec_stato` (`ec_stato`),
  KEY `tipoDocumento` (`tipoDocumento`,`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `modulo_donazione`;
CREATE TABLE `modulo_donazione` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` mediumtext NOT NULL,
  `totale` decimal(8,2) NOT NULL DEFAULT '0.00',
  `erroriViaggio` varchar(255) NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `statoPagamento` varchar(20) NOT NULL,
  `codiceAves` varchar(20) NOT NULL,
  `onlus` varchar(100) NOT NULL,
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ec_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `data` (`data`),
  KEY `booking_stato` (`booking_stato`),
  KEY `ec_stato` (`ec_stato`),
  KEY `tipoDocumento` (`tipoDocumento`,`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `modulo_note`;
CREATE TABLE `modulo_note` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ec_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `ec_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `data` (`data`),
  KEY `booking_stato` (`booking_stato`),
  KEY `ec_stato` (`ec_stato`),
  KEY `tipoDocumento` (`tipoDocumento`,`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_note_lotus`;
CREATE TABLE `modulo_note_lotus` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` smallint(4) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` smallint(4) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` smallint(4) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_preventivo`;
CREATE TABLE `modulo_preventivo` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `testa` text NOT NULL,
  `intestazione` blob NOT NULL,
  `link` text NOT NULL,
  `comprende` blob NOT NULL,
  `non_comprende` blob NOT NULL,
  `operativo_voli` blob NOT NULL,
  `conclusioni` blob NOT NULL,
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_preventivo_modelli`;
CREATE TABLE `modulo_preventivo_modelli` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_promotore` int(10) unsigned NOT NULL DEFAULT '0',
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `intestazione` text NOT NULL,
  `link` text NOT NULL,
  `comprende` text NOT NULL,
  `non_comprende` text NOT NULL,
  `operativo_voli` text NOT NULL,
  `conclusioni` text NOT NULL,
  `predefinito` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pubblico` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_promotore` (`id_promotore`),
  KEY `descrizione` (`descrizione`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_preventivo_modelli_new`;
CREATE TABLE `modulo_preventivo_modelli_new` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_promotore` int(10) unsigned NOT NULL DEFAULT '0',
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `corpo` text NOT NULL,
  `predefinito` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pubblico` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `promoRif` int(11) NOT NULL,
  `lingua` varchar(5) NOT NULL DEFAULT 'it_IT',
  PRIMARY KEY (`id`),
  KEY `id_promotore` (`id_promotore`),
  KEY `descrizione` (`descrizione`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_preventivo_new`;
CREATE TABLE `modulo_preventivo_new` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `testa` text NOT NULL,
  `corpo` text NOT NULL,
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `counterClient` int(4) NOT NULL,
  `clientLastVisit` datetime NOT NULL,
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_serviziWeb`;
CREATE TABLE `modulo_serviziWeb` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `servizio` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataIN` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataOUT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `localita` varchar(100) NOT NULL DEFAULT '',
  `erroriViaggio` varchar(255) NOT NULL DEFAULT '',
  `totale` decimal(8,2) NOT NULL DEFAULT '0.00',
  `scontoAgenzia` decimal(6,2) NOT NULL DEFAULT '0.00',
  `pagamento` varchar(20) NOT NULL DEFAULT '',
  `statoPagamento` varchar(20) NOT NULL DEFAULT '',
  `noteModulo` text NOT NULL,
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `commissioneLorda` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneCarta` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneNetta` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `iva` decimal(6,2) NOT NULL DEFAULT '0.00',
  `codiceAves` varchar(20) NOT NULL DEFAULT '',
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `statusAves` (`statusAves`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_storno`;
CREATE TABLE `modulo_storno` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `importo` decimal(6,2) NOT NULL DEFAULT '0.00',
  `statoPagamento` varchar(20) NOT NULL DEFAULT '',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `id_modulo_riferimento` int(6) unsigned NOT NULL DEFAULT '0',
  `tipoDocumento_riferimento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_to`;
CREATE TABLE `modulo_to` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `to` varchar(100) NOT NULL DEFAULT '0',
  `portale` smallint(4) NOT NULL DEFAULT '0',
  `promoRif` varchar(100) NOT NULL DEFAULT '',
  `idOfferta` varchar(20) NOT NULL DEFAULT '',
  `nrOpzione` varchar(20) NOT NULL DEFAULT '',
  `destinazione` char(3) NOT NULL DEFAULT '',
  `localita` varchar(100) NOT NULL DEFAULT '',
  `aeroportoPartenza` varchar(100) NOT NULL DEFAULT '',
  `nomeStruttura` varchar(100) NOT NULL DEFAULT '',
  `tipoStruttura` varchar(255) NOT NULL DEFAULT '',
  `tipoSistemazione_old` varchar(100) NOT NULL DEFAULT '',
  `tipoSistemazione` text NOT NULL,
  `trattamento` varchar(100) NOT NULL DEFAULT '',
  `dataIN` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataOUT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nPartecipanti` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `partecipanti` longtext NOT NULL,
  `tipoServizio` varchar(20) NOT NULL DEFAULT '',
  `erroriViaggio` varchar(255) NOT NULL DEFAULT '',
  `totale` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `assicurazione` decimal(6,2) NOT NULL DEFAULT '0.00',
  `assFacoltativa` char(1) NOT NULL DEFAULT '',
  `carburante` decimal(6,2) NOT NULL DEFAULT '0.00',
  `scontoAgenzia` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `acconto` decimal(8,2) NOT NULL DEFAULT '0.00',
  `pagamento` varchar(20) NOT NULL DEFAULT '',
  `statoPagamento` varchar(20) NOT NULL DEFAULT '',
  `modo_pagamento` int(3) unsigned NOT NULL DEFAULT '0',
  `noteModulo` text NOT NULL,
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `numPrenotazione` varchar(20) NOT NULL DEFAULT '',
  `commissioneLorda` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneCarta` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `speseCorriere` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `speseBonifico` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneNetta` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `iva` decimal(6,2) NOT NULL DEFAULT '0.00',
  `codPromotoreIVA` int(10) unsigned NOT NULL DEFAULT '0',
  `codiceAves` varchar(20) NOT NULL DEFAULT '',
  `iscrizione` decimal(6,2) NOT NULL DEFAULT '0.00',
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `noteContratto` varchar(200) NOT NULL DEFAULT '',
  `conferma_prenotazione` char(1) NOT NULL DEFAULT '',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `commissioneAssicurazione` decimal(6,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `statusAves` (`statusAves`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_traghetto`;
CREATE TABLE `modulo_traghetto` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `compagnia` varchar(100) NOT NULL DEFAULT '',
  `dataIN` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partenzaLuogo` varchar(100) NOT NULL DEFAULT '',
  `partenzaOre` varchar(5) NOT NULL DEFAULT '',
  `partenza` char(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `destinazione` char(3) NOT NULL DEFAULT '',
  `localita` varchar(100) NOT NULL DEFAULT '',
  `partenzaArrivoOre` varchar(5) NOT NULL DEFAULT '',
  `partenzaSistemazione` varchar(100) NOT NULL DEFAULT '',
  `dataOUT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ritornoLuogo` varchar(100) NOT NULL DEFAULT '',
  `ritornoOre` varchar(5) NOT NULL DEFAULT '',
  `ritornoArrivoLuogo` varchar(100) NOT NULL DEFAULT '',
  `ritornoArrivoOre` varchar(5) NOT NULL DEFAULT '',
  `ritornoSistemazione` varchar(100) NOT NULL DEFAULT '',
  `tipoMezzo` varchar(20) DEFAULT '00000000',
  `modello` varchar(100) NOT NULL DEFAULT '',
  `targa` varchar(20) DEFAULT '00000000',
  `dimensione` varchar(10) NOT NULL DEFAULT '',
  `nPartecipanti` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `partecipanti` longtext NOT NULL,
  `erroriViaggio` varchar(255) NOT NULL DEFAULT '',
  `totale` decimal(8,2) NOT NULL DEFAULT '0.00',
  `scontoAgenzia` decimal(6,2) NOT NULL DEFAULT '0.00',
  `agencyfee` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `pagamento` varchar(20) NOT NULL DEFAULT '',
  `statoPagamento` varchar(20) NOT NULL DEFAULT '',
  `modo_pagamento` int(3) unsigned NOT NULL DEFAULT '0',
  `noteModulo` text NOT NULL,
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `numPrenotazione` varchar(20) NOT NULL DEFAULT '',
  `commissioneLorda` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneCarta` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `speseCorriere` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneNetta` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `iva` decimal(6,2) NOT NULL DEFAULT '0.00',
  `codPromotoreIVA` int(10) unsigned NOT NULL DEFAULT '0',
  `codiceAves` varchar(20) NOT NULL DEFAULT '',
  `codiceAves_fornitori` varchar(20) NOT NULL,
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `conferma_prenotazione` char(1) NOT NULL DEFAULT '',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `statusAves` (`statusAves`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_voloLinea`;
CREATE TABLE `modulo_voloLinea` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `numPrenotazione` varchar(100) NOT NULL DEFAULT '',
  `dataIN` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataOUT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partenzaAereoporto` varchar(40) NOT NULL DEFAULT '',
  `compagnia` varchar(100) NOT NULL DEFAULT '',
  `partenza` char(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `destinazione` char(3) NOT NULL DEFAULT '',
  `localita` varchar(100) NOT NULL DEFAULT '',
  `nominativoCarta` varchar(100) NOT NULL DEFAULT '',
  `tipoBiglietto` varchar(20) NOT NULL DEFAULT '',
  `indirizzoBigliettoCartaceo` text NOT NULL,
  `nPartecipanti` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `partecipanti` longtext NOT NULL,
  `erroriViaggio` varchar(255) NOT NULL DEFAULT '',
  `totale` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `scontoAgenzia` decimal(6,2) NOT NULL DEFAULT '0.00',
  `agencyfee` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `speseCorriere` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `pagamento` varchar(20) NOT NULL DEFAULT '',
  `statoPagamento` varchar(20) NOT NULL DEFAULT '',
  `modo_pagamento` int(3) unsigned NOT NULL DEFAULT '0',
  `incasso_pagamento` varchar(20) NOT NULL DEFAULT '',
  `noteModulo` text NOT NULL,
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `commissioneLorda` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneCarta` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneAggiuntiva` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneNetta` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `iva` decimal(6,2) NOT NULL DEFAULT '0.00',
  `codPromotoreIVA` int(10) unsigned NOT NULL DEFAULT '0',
  `codiceAves` varchar(20) NOT NULL DEFAULT '',
  `codiceAves_fornitori` varchar(20) NOT NULL DEFAULT '',
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(6) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `statusAves` (`statusAves`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `modulo_voloLowCost`;
CREATE TABLE `modulo_voloLowCost` (
  `id_modulo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `titolo` varchar(200) NOT NULL DEFAULT '',
  `nota` text NOT NULL,
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `numPrenotazione` varchar(100) NOT NULL DEFAULT '',
  `dataIN` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataOUT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partenzaAereoporto` varchar(40) NOT NULL DEFAULT '',
  `compagnia` varchar(100) NOT NULL DEFAULT '',
  `partenza` char(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `destinazione` char(3) NOT NULL DEFAULT '',
  `nPartecipanti` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `erroriViaggio` varchar(255) NOT NULL DEFAULT '',
  `localita` varchar(100) NOT NULL DEFAULT '',
  `nominativoCarta` varchar(100) NOT NULL DEFAULT '',
  `totale` decimal(8,2) NOT NULL DEFAULT '0.00',
  `scontoAgenzia` decimal(6,2) NOT NULL DEFAULT '0.00',
  `agencyfee` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `pagamento` varchar(20) NOT NULL DEFAULT '',
  `statoPagamento` varchar(20) NOT NULL DEFAULT '',
  `modo_pagamento` int(3) unsigned NOT NULL DEFAULT '0',
  `incasso_pagamento` varchar(20) NOT NULL DEFAULT '',
  `noteModulo` text NOT NULL,
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `commissioneLorda` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneCarta` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `commissioneNetta` decimal(8,2) unsigned NOT NULL DEFAULT '0.00',
  `iva` decimal(6,2) NOT NULL DEFAULT '0.00',
  `codPromotoreIVA` int(10) unsigned NOT NULL DEFAULT '0',
  `codiceAves` varchar(20) NOT NULL DEFAULT '',
  `codiceAves_fornitori` varchar(20) NOT NULL DEFAULT '',
  `statusAves` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `booking_stato` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreStato` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_codPromotoreLavorazione` int(10) unsigned NOT NULL DEFAULT '0',
  `booking_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataInvio` datetime DEFAULT NULL,
  `ec_letto` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_modulo`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `tipoDocumento` (`tipoDocumento`),
  KEY `data` (`data`),
  KEY `statusAves` (`statusAves`),
  KEY `booking_stato` (`booking_stato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pagamenti`;
CREATE TABLE `pagamenti` (
  `idPag` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `dataPag` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataEffettiva` date NOT NULL DEFAULT '0000-00-00',
  `importo` decimal(8,2) NOT NULL DEFAULT '0.00',
  `pagato` tinyint(1) NOT NULL DEFAULT '0',
  `metodoPag` varchar(30) NOT NULL DEFAULT '',
  `descrizione` varchar(255) NOT NULL DEFAULT '',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codPromotoreModifica` int(10) unsigned NOT NULL DEFAULT '0',
  `aves_risposta` text NOT NULL,
  `tipo` varchar(50) NOT NULL DEFAULT '',
  `rimborso` tinyint(4) NOT NULL DEFAULT '0',
  `siap_reg_number` int(11) unsigned NOT NULL,
  `siap_reg_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idPag`),
  KEY `importo` (`importo`),
  KEY `id_importo` (`id_viaggio`,`importo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pagamenti_dettagli_campagne`;
CREATE TABLE `pagamenti_dettagli_campagne` (
  `idDettagli` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idpromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `idRif` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idDettagli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pagamenti_dettagli_ebook`;
CREATE TABLE `pagamenti_dettagli_ebook` (
  `idDettagli` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idDettagli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pagamenti_dettagli_etgest`;
CREATE TABLE `pagamenti_dettagli_etgest` (
  `idDettagli` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idPag` int(8) unsigned NOT NULL DEFAULT '0',
  `idRif` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idDettagli`),
  KEY `idPag` (`idPag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pagamenti_dettagli_rinnovi`;
CREATE TABLE `pagamenti_dettagli_rinnovi` (
  `idDettagli` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idpromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `idRif` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idDettagli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pagamenti_dettagli_servizi`;
CREATE TABLE `pagamenti_dettagli_servizi` (
  `idDettagli` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idpromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `idRif` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idDettagli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pagamenti_metodi`;
CREATE TABLE `pagamenti_metodi` (
  `codice` varchar(20) NOT NULL,
  `titolo` varchar(255) DEFAULT NULL,
  `descrizione` varchar(255) DEFAULT NULL,
  `agenzia` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pag_bkps_richieste`;
CREATE TABLE `pag_bkps_richieste` (
  `reqrefnum` varchar(32) NOT NULL DEFAULT '',
  `numord` varchar(50) NOT NULL DEFAULT '',
  `idnegozio` varchar(15) NOT NULL DEFAULT '',
  `importo` int(8) unsigned NOT NULL DEFAULT '0',
  `valuta` int(3) unsigned NOT NULL DEFAULT '0',
  `tcontab` char(1) NOT NULL DEFAULT '',
  `tautor` char(1) NOT NULL DEFAULT '',
  `operazione` varchar(50) NOT NULL DEFAULT '',
  `timestamp` varchar(23) NOT NULL DEFAULT '',
  `operatore` varchar(8) NOT NULL DEFAULT '',
  `datainizio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `datafine` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `filtro` int(1) unsigned NOT NULL DEFAULT '0',
  `idtrans` varchar(25) NOT NULL DEFAULT '',
  `orainizio` varchar(5) NOT NULL DEFAULT '',
  `orafine` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`reqrefnum`,`numord`),
  KEY `numord` (`numord`),
  KEY `reqrefnum` (`reqrefnum`),
  KEY `operazione` (`operazione`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pag_dettagli`;
CREATE TABLE `pag_dettagli` (
  `chiave` varchar(255) NOT NULL DEFAULT '',
  `campo` varchar(255) NOT NULL DEFAULT '',
  `valore` varchar(255) NOT NULL DEFAULT '',
  KEY `campo` (`campo`),
  KEY `valore` (`valore`),
  KEY `chiave` (`chiave`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pag_xpay_richieste`;
CREATE TABLE `pag_xpay_richieste` (
  `transaction_id` varchar(20) NOT NULL,
  `id_op` char(10) NOT NULL,
  `action_code` varchar(8) NOT NULL,
  `amount` int(9) NOT NULL,
  `currency` char(3) NOT NULL,
  `language` char(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `desc_order` varchar(200) NOT NULL,
  `option_fields` mediumtext NOT NULL,
  `message_type` char(3) NOT NULL,
  `response` varchar(15) NOT NULL,
  `auth_code` varchar(10) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `card_type` varchar(10) NOT NULL,
  `transaction_type` varchar(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `liability_shift` char(1) NOT NULL,
  `request_type` char(2) NOT NULL,
  `type_op` char(1) NOT NULL,
  `amount_op` int(9) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`transaction_id`,`id_op`),
  KEY `id_op` (`id_op`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `preventivi`;
CREATE TABLE `preventivi` (
  `idPreventivo` varchar(20) NOT NULL DEFAULT '',
  `dataCreazione` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_Viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `testo` text NOT NULL,
  `dataModifica` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idPreventivo`),
  KEY `id_Viaggio` (`id_Viaggio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `preventivi_attesa`;
CREATE TABLE `preventivi_attesa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` bigint(20) unsigned DEFAULT NULL,
  `codpromotore` int(10) unsigned DEFAULT NULL,
  `codpromotorecreazione` int(10) unsigned DEFAULT NULL,
  `codpromotoremodifica` int(10) unsigned DEFAULT NULL,
  `destinatari` longtext,
  `destinataricopia` longtext,
  `destinatarinascosti` longtext,
  `prpRichiesta` varchar(255) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `corpo` longtext NOT NULL,
  `datainvio` datetime DEFAULT NULL,
  `datapreventivo` datetime DEFAULT NULL,
  `data` datetime NOT NULL,
  `datamodifica` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codpromotore_idx` (`codpromotore`),
  KEY `codpromotorecreazione_idx` (`codpromotorecreazione`),
  KEY `codpromotoremodifica_idx` (`codpromotoremodifica`),
  KEY `id_viaggio_idx` (`id_viaggio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `preventivi_temporanei`;
CREATE TABLE `preventivi_temporanei` (
  `id` bigint(20) unsigned NOT NULL,
  `id_anagrafica` varchar(18) NOT NULL,
  `id_viaggio` bigint(20) unsigned NOT NULL,
  `codpromotore` int(10) unsigned NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `corpo` longtext NOT NULL,
  `nota` longtext,
  PRIMARY KEY (`id`,`id_anagrafica`,`id_viaggio`,`codpromotore`),
  KEY `codpromotore_idx` (`codpromotore`),
  KEY `id_viaggio_idx` (`id_viaggio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `preventivi_v2`;
CREATE TABLE `preventivi_v2` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` bigint(20) unsigned DEFAULT NULL,
  `codPromotore` int(10) unsigned DEFAULT NULL,
  `codPromotoreCreazione` int(10) unsigned DEFAULT NULL,
  `codPromotoreModifica` int(10) unsigned DEFAULT NULL,
  `destinatari` longtext,
  `destinatariCopia` longtext,
  `destinatariNascosti` longtext,
  `prpRichiesta` varchar(255) NOT NULL,
  `prpInCopia` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `titolo` varchar(255) NOT NULL,
  `corpo` longtext NOT NULL,
  `nota` longtext,
  `dataInvio` datetime DEFAULT NULL,
  `tipoInvio` varchar(50) DEFAULT NULL,
  `dataAccettato` datetime DEFAULT NULL,
  `dataAccettatoAnnullato` datetime DEFAULT NULL,
  `dataLetto` datetime DEFAULT NULL,
  `data` datetime NOT NULL,
  `dataModifica` datetime NOT NULL,
  `duplicato` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `codpromotore_idx` (`codPromotore`),
  KEY `codpromotorecreazione_idx` (`codPromotoreCreazione`),
  KEY `codpromotoremodifica_idx` (`codPromotoreModifica`),
  KEY `id_viaggio_idx` (`id_viaggio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `preventivi_v2_md5`;
CREATE TABLE `preventivi_v2_md5` (
  `preventivo_id` bigint(20) NOT NULL,
  `viaggio_id` bigint(20) NOT NULL,
  `codice_md5` varchar(50) NOT NULL,
  UNIQUE KEY `idx_preventivi_v2_md5` (`codice_md5`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `preventivi_view`;
CREATE TABLE `preventivi_view` (
  `idPreventivo` char(20) NOT NULL DEFAULT '',
  `dataView` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tipo` tinyint(2) unsigned NOT NULL DEFAULT '0',
  KEY `tipo` (`tipo`),
  KEY `idPreventivo` (`idPreventivo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `promemoria`;
CREATE TABLE `promemoria` (
  `id_promemoria` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `dataCreazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dataInizio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataFine` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titolo` varchar(100) NOT NULL DEFAULT '',
  `testo` text NOT NULL,
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `codPromotoreCreazione` int(10) unsigned NOT NULL DEFAULT '0',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tipoPromemoria` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dataTermine` datetime DEFAULT '0000-00-00 00:00:00',
  `notifica_mail` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pannello` varchar(50) NOT NULL DEFAULT 'cliente',
  `dataModifica` datetime DEFAULT NULL,
  PRIMARY KEY (`id_promemoria`),
  KEY `notifica_mail` (`notifica_mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `provvigioni`;
CREATE TABLE `provvigioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `provvigione` varchar(50) NOT NULL DEFAULT '',
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `importo` decimal(7,2) NOT NULL DEFAULT '0.00',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `promotoreSaldato` int(10) unsigned NOT NULL DEFAULT '0',
  `dataSaldato` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `agenzia` varchar(20) NOT NULL DEFAULT 'ETIta',
  `manuale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `codPromotore` (`codPromotore`),
  KEY `provigione` (`provvigione`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `id_modulo` (`id_modulo`),
  KEY `data` (`data`),
  KEY `agenzia` (`agenzia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `provvigioni_20140704`;
CREATE TABLE `provvigioni_20140704` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `provvigione` varchar(50) NOT NULL DEFAULT '',
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  `tipoDocumento` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `importo` decimal(7,2) NOT NULL DEFAULT '0.00',
  `data` datetime DEFAULT '0000-00-00 00:00:00',
  `promotoreSaldato` int(10) unsigned NOT NULL DEFAULT '0',
  `dataSaldato` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `agenzia` varchar(20) NOT NULL DEFAULT 'ETIta',
  `manuale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `codPromotore` (`codPromotore`),
  KEY `provigione` (`provvigione`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `id_modulo` (`id_modulo`),
  KEY `data` (`data`),
  KEY `agenzia` (`agenzia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `provvigioni_etraveler_punti`;
CREATE TABLE `provvigioni_etraveler_punti` (
  `codPromotore` int(10) unsigned NOT NULL,
  `id_viaggio` int(8) unsigned NOT NULL,
  `provvigione` varchar(20) NOT NULL,
  `id_ticket` int(11) unsigned NOT NULL DEFAULT '0',
  `punteggio` int(6) NOT NULL DEFAULT '0',
  `data` datetime DEFAULT NULL,
  `saldato` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `dataSaldato` datetime DEFAULT NULL,
  `valorePunto` float NOT NULL DEFAULT '0',
  `data_ticket` datetime DEFAULT NULL,
  PRIMARY KEY (`codPromotore`,`id_viaggio`,`provvigione`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `provvigioni_tipo`;
CREATE TABLE `provvigioni_tipo` (
  `nome` varchar(20) NOT NULL DEFAULT '',
  `percentuale` double NOT NULL DEFAULT '0',
  `ordine` tinyint(1) NOT NULL DEFAULT '0',
  `padre` varchar(20) NOT NULL DEFAULT '',
  `nome_variabile_id` varchar(20) NOT NULL DEFAULT '',
  `tipo` varchar(10) NOT NULL DEFAULT '',
  `callback` varchar(255) NOT NULL DEFAULT '',
  `etichetta` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`nome`,`tipo`),
  KEY `padre` (`padre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `provvigioni_tipo_Sw`;
CREATE TABLE `provvigioni_tipo_Sw` (
  `nome` varchar(20) NOT NULL DEFAULT '',
  `percentuale` double NOT NULL DEFAULT '0',
  `ordine` tinyint(1) NOT NULL DEFAULT '0',
  `padre` varchar(20) NOT NULL DEFAULT '',
  `nome_variabile_id` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`nome`),
  KEY `padre` (`padre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `salvataggio_temporanei`;
CREATE TABLE `salvataggio_temporanei` (
  `id_cliente` varchar(18) NOT NULL DEFAULT '0',
  `id_promotore` int(10) unsigned NOT NULL DEFAULT '0',
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `id_modulo` int(6) unsigned NOT NULL DEFAULT '0',
  `tipoModulo` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL DEFAULT '',
  `contenuto` text NOT NULL,
  PRIMARY KEY (`id_cliente`,`id_promotore`,`id_viaggio`,`id_modulo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi`;
CREATE TABLE `servizi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_viaggio` bigint(20) unsigned DEFAULT NULL,
  `codpromotore` int(10) unsigned DEFAULT NULL,
  `codpromotorecreazione` int(10) unsigned DEFAULT NULL,
  `codpromotoremodifica` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `titolo` varchar(255) DEFAULT NULL,
  `descrizione` text,
  `idfornitore` smallint(5) unsigned DEFAULT NULL,
  `fornitoreText` text,
  `costo` decimal(10,2) DEFAULT NULL,
  `ricavo` decimal(10,2) DEFAULT NULL,
  `commissione` decimal(10,2) DEFAULT NULL,
  `imposta` decimal(10,2) DEFAULT NULL,
  `pagatodirettooperatore` tinyint(1) DEFAULT NULL,
  `erroriespletamento` longtext,
  `conferma_prenotazione` tinyint(1) DEFAULT NULL,
  `booking_stato` bigint(20) DEFAULT NULL,
  `booking_codPromotoreStato` bigint(20) DEFAULT NULL,
  `booking_codPromotoreLavorazione` bigint(20) DEFAULT NULL,
  `booking_letto` tinyint(1) DEFAULT NULL,
  `ec_stato` bigint(20) DEFAULT '1',
  `ec_codPromotoreStato` bigint(20) DEFAULT NULL,
  `ec_codPromotoreLavorazione` bigint(20) DEFAULT NULL,
  `ec_letto` tinyint(1) DEFAULT NULL,
  `prenotazioni_letturaData` datetime DEFAULT NULL,
  `prenotazioni_letturaCodPromotore` int(10) DEFAULT NULL,
  `prenotazioni_letturaStato` tinyint(1) DEFAULT '0',
  `codiceContabile` varchar(50) DEFAULT NULL,
  `codicePagamento` varchar(64) DEFAULT NULL,
  `apiStato` varchar(255) DEFAULT NULL,
  `apiSiapStato` varchar(255) DEFAULT 'nuovo',
  `apiStatoData` datetime DEFAULT NULL,
  `apiSiapStatoData` datetime DEFAULT NULL,
  `apiKey` varchar(255) DEFAULT NULL,
  `data` datetime NOT NULL,
  `datamodifica` datetime NOT NULL,
  `datainvio` datetime DEFAULT NULL,
  `tipoinvio` varchar(50) DEFAULT NULL,
  `stornato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `duplicato` bigint(20) unsigned NOT NULL DEFAULT '0',
  `incentive_at` datetime DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `selected_valuta` varchar(3) DEFAULT NULL,
  `cambio_costo` decimal(10,2) DEFAULT '0.00',
  `link_supplier` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `myindex_idx` (`id`,`id_viaggio`),
  KEY `servizi_tipo_servizio_idx` (`tipo`),
  KEY `codpromotore_idx` (`codpromotore`),
  KEY `codpromotorecreazione_idx` (`codpromotorecreazione`),
  KEY `codpromotoremodifica_idx` (`codpromotoremodifica`),
  KEY `id_viaggio_idx` (`id_viaggio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_adeguamento`;
CREATE TABLE `servizi_adeguamento` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `tipologia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_assicurazione`;
CREATE TABLE `servizi_assicurazione` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `nropzione` varchar(20) DEFAULT NULL,
  `datain` date DEFAULT NULL,
  `dataout` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_assicurazioneobbligatoria`;
CREATE TABLE `servizi_assicurazioneobbligatoria` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `accettazione` varchar(255) DEFAULT NULL,
  `datain` date DEFAULT NULL,
  `dataout` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_incasso`;
CREATE TABLE `servizi_incasso` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `id_tipologia` bigint(20) DEFAULT '0',
  `incassato` decimal(7,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_noleggio`;
CREATE TABLE `servizi_noleggio` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `datain` date DEFAULT NULL,
  `ritiro_luogo` varchar(50) DEFAULT NULL,
  `ritiro_ore` time DEFAULT NULL,
  `dataout` date DEFAULT NULL,
  `consegna_luogo` varchar(50) DEFAULT NULL,
  `consegna_ore` time DEFAULT NULL,
  `mezzo_tipo` varchar(255) DEFAULT NULL,
  `mezzo_modello` varchar(255) DEFAULT NULL,
  `mezzo_targa` varchar(20) DEFAULT NULL,
  `guidatore` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_pacchetto`;
CREATE TABLE `servizi_pacchetto` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `portale_id` smallint(6) DEFAULT NULL,
  `idofferta` varchar(20) DEFAULT NULL,
  `nropzione` varchar(20) DEFAULT NULL,
  `datain` date DEFAULT NULL,
  `dataout` date DEFAULT NULL,
  `destinazione` char(3) DEFAULT NULL,
  `localita` varchar(255) DEFAULT NULL,
  `nomestruttura` varchar(255) DEFAULT NULL,
  `tipostruttura` varchar(255) DEFAULT NULL,
  `sistemazioni` longtext,
  `numprenotazione` varchar(20) DEFAULT NULL,
  `notecontratto` varchar(255) DEFAULT NULL,
  `aeroportopartenza` varchar(255) DEFAULT NULL,
  `aeroportopartenzaarrivo` varchar(255) NOT NULL,
  `aeroportoarrivo` varchar(255) DEFAULT NULL,
  `aeroportoarrivoarrivo` varchar(255) NOT NULL,
  `codpromotorepromorif` int(10) unsigned DEFAULT '0',
  `accettazioneAssicurazione` varchar(255) DEFAULT NULL,
  `startDepartureLocation` varchar(255) DEFAULT NULL,
  `startArrivalLocation` varchar(255) DEFAULT NULL,
  `returnDepartureLocation` varchar(255) DEFAULT NULL,
  `returnArrivalLocation` varchar(255) DEFAULT NULL,
  `transportType` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `portale_id_idx` (`portale_id`),
  KEY `destinazione_idx` (`destinazione`),
  KEY `codpromotorepromorif_idx` (`codpromotorepromorif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_pax`;
CREATE TABLE `servizi_pax` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL,
  `datanascita` date DEFAULT NULL,
  `id_anagrafica` varchar(18) NOT NULL,
  `tipo_passeggero_field` int(6) unsigned DEFAULT NULL,
  `sesso_passeggero` char(1) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id_anagrafica_idx` (`id_anagrafica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_pax_relation`;
CREATE TABLE `servizi_pax_relation` (
  `pax_id` bigint(20) NOT NULL,
  `servizio_id` bigint(20) NOT NULL,
  PRIMARY KEY (`pax_id`,`servizio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_prenotazione`;
CREATE TABLE `servizi_prenotazione` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `portale_id` smallint(6) DEFAULT NULL,
  `idofferta` varchar(20) DEFAULT NULL,
  `nropzione` varchar(20) DEFAULT NULL,
  `datain` date DEFAULT NULL,
  `dataout` date DEFAULT NULL,
  `destinazione` char(3) DEFAULT NULL,
  `localita` varchar(255) DEFAULT NULL,
  `nomestruttura` varchar(255) DEFAULT NULL,
  `tipostruttura` varchar(255) DEFAULT NULL,
  `sistemazioni` longtext,
  `numprenotazione` varchar(20) DEFAULT NULL,
  `notecontratto` varchar(255) DEFAULT NULL,
  `codpromotorepromorif` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `portale_id_idx` (`portale_id`),
  KEY `destinazione_idx` (`destinazione`),
  KEY `codpromotorepromorif_idx` (`codpromotorepromorif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_terra`;
CREATE TABLE `servizi_terra` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `partenzaaereoporto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_traghetto`;
CREATE TABLE `servizi_traghetto` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `partenzaNazione` varchar(4) DEFAULT NULL,
  `destinazioneNazione` varchar(4) DEFAULT NULL,
  `dataIN` date DEFAULT NULL,
  `andataLuogo` varchar(50) DEFAULT NULL,
  `andataOre` time DEFAULT NULL,
  `andataArrivoLuogo` varchar(50) DEFAULT NULL,
  `andataArrivoOre` time DEFAULT NULL,
  `andataSistemazioni` longtext,
  `andataSistemazioniText` text NOT NULL,
  `dataOUT` date DEFAULT NULL,
  `ritornoLuogo` varchar(50) DEFAULT NULL,
  `ritornoOre` time DEFAULT NULL,
  `ritornoArrivoLuogo` varchar(50) DEFAULT NULL,
  `ritornoArrivoOre` time DEFAULT NULL,
  `ritornoSistemazioni` longtext,
  `ritornoSistemazioniText` text NOT NULL,
  `mezzoTipo` varchar(255) DEFAULT NULL,
  `mezzoModello` varchar(255) DEFAULT NULL,
  `mezzoTarga` varchar(20) DEFAULT NULL,
  `mezzoDimensione` varchar(255) DEFAULT '0',
  `confermaPrenotazione` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `partenzanazione_idx` (`partenzaNazione`),
  KEY `destinazionenazione_idx` (`destinazioneNazione`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP VIEW IF EXISTS `servizi_v1`;
CREATE TABLE `servizi_v1` (`id_modulo` int(11) unsigned, `id_viaggio` int(11) unsigned, `data` datetime, `codPromotore` int(11) unsigned, `codPromotoreCreazione` int(11) unsigned, `titolo` varchar(200), `nota` text, `importo` decimal(8,2), `statoPagamento` varchar(20), `tipoDocumento` tinyint(4) unsigned, `dataModifica` datetime, `codPromotoreModifica` int(11) unsigned, `booking_stato` tinyint(4) unsigned, `booking_codPromotoreStato` int(11) unsigned, `booking_codPromotoreLavorazione` int(11) unsigned, `booking_letto` tinyint(4) unsigned, `dataInvio` datetime, `ec_letto` tinyint(4) unsigned);


DROP TABLE IF EXISTS `servizi_voloLinea`;
CREATE TABLE `servizi_voloLinea` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `numPrenotazione` varchar(100) DEFAULT NULL,
  `dataIN` date DEFAULT NULL,
  `partenza` char(3) DEFAULT NULL,
  `partenzaAereoporto` varchar(50) DEFAULT NULL,
  `partenzaAereoportoArrivo` varchar(50) NOT NULL,
  `dataOUT` date DEFAULT NULL,
  `arrivo` char(3) DEFAULT NULL,
  `arrivoAereoporto` varchar(50) DEFAULT NULL,
  `arrivoAereoportoArrivo` varchar(50) NOT NULL,
  `nominativoCartaCC` varchar(100) DEFAULT NULL,
  `tipoBiglietto` varchar(255) DEFAULT NULL,
  `indirizzoBigliettoCartaceo` text,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `servizi_voloLowCost`;
CREATE TABLE `servizi_voloLowCost` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `numPrenotazione` varchar(100) DEFAULT NULL,
  `dataIN` date DEFAULT NULL,
  `partenza` char(3) DEFAULT NULL,
  `partenzaAereoporto` varchar(50) DEFAULT NULL,
  `partenzaAereoportoArrivo` varchar(50) NOT NULL,
  `dataOUT` date DEFAULT NULL,
  `arrivo` char(3) DEFAULT NULL,
  `arrivoAereoporto` varchar(50) DEFAULT NULL,
  `arrivoAereoportoArrivo` varchar(50) NOT NULL,
  `nominativoCartaCC` varchar(100) DEFAULT NULL,
  `indirizzoBigliettoCartaceo` text,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `status` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_ticket` int(11) unsigned NOT NULL DEFAULT '0',
  `id_promotore` int(4) unsigned NOT NULL DEFAULT '0',
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `id_viaggio` int(8) unsigned NOT NULL DEFAULT '0',
  `tipo_riferimento` varchar(255) DEFAULT 'ticket',
  `riferimento` bigint(20) unsigned DEFAULT NULL,
  `data_creazione` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id_promotore` (`id_promotore`),
  KEY `id_anagrafica` (`id_anagrafica`),
  KEY `id_viaggio` (`id_viaggio`),
  KEY `id_ticket` (`id_ticket`,`id_promotore`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tipo_passeggero`;
CREATE TABLE `tipo_passeggero` (
  `idTipoPasseggero` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(100) NOT NULL DEFAULT '',
  `datacreazione` datetime DEFAULT NULL,
  `datamodifica` datetime DEFAULT NULL,
  PRIMARY KEY (`idTipoPasseggero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `v1_codiciAves`;
CREATE TABLE `v1_codiciAves` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `codiceAves` varchar(255) NOT NULL DEFAULT '',
  `iva` decimal(5,2) NOT NULL DEFAULT '0.00',
  `codice` varchar(20) NOT NULL DEFAULT '',
  `moduli` varchar(255) NOT NULL DEFAULT '',
  `php` text NOT NULL,
  `descrizione` varchar(255) NOT NULL DEFAULT '',
  `deslunga` text NOT NULL,
  `regimeIva` varchar(100) NOT NULL DEFAULT '',
  `regime` varchar(100) NOT NULL,
  `commissioneAssicurazione` decimal(8,5) NOT NULL DEFAULT '0.00000',
  `tipoDestinazione` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agenzia` varchar(10) NOT NULL DEFAULT 'ETIta',
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codiceAves` (`codiceAves`),
  KEY `codice` (`codiceAves`),
  KEY `agenzia` (`agenzia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `valutazioni`;
CREATE TABLE `valutazioni` (
  `valutazione` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`valutazione`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `viaggi`;
CREATE TABLE `viaggi` (
  `id_viaggio` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_anagrafica` varchar(18) NOT NULL DEFAULT '',
  `codPromotore` int(10) unsigned NOT NULL DEFAULT '0',
  `tipologia` varchar(50) NOT NULL DEFAULT '',
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `valutazione` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `destinazioneText` varchar(255) NOT NULL,
  `destinazione_iso` varchar(4) NOT NULL,
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataModifica` datetime DEFAULT NULL,
  `dataCompleto` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataViaggio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataInizioViaggio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataFineViaggio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `aves_risposta` text NOT NULL,
  `agenzia` varchar(20) NOT NULL DEFAULT 'ETIta',
  `valuta` varchar(10) NOT NULL,
  `versione` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `margineMinimo` float NOT NULL DEFAULT '0',
  `margineConsigliato` float NOT NULL DEFAULT '0',
  `regime` varchar(255) NOT NULL,
  `titolo_it` text NOT NULL,
  `titolo_es` text NOT NULL,
  `titolo_en` text NOT NULL,
  `titoloText` text NOT NULL,
  `erroriviaggio` longtext NOT NULL,
  `apiKey` varchar(255) NOT NULL,
  `apiSiapKey` varchar(255) NOT NULL,
  `apiStatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `apiSiapStatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `apiEsportato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `apiSiapEsportato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `viaggioTotale` decimal(10,2) NOT NULL DEFAULT '0.00',
  `viaggioTotaleDovuto` decimal(10,2) NOT NULL DEFAULT '0.00',
  `viaggioTotaleOperatore` decimal(10,2) NOT NULL DEFAULT '0.00',
  `viaggioTotaleCosti` decimal(10,2) NOT NULL DEFAULT '0.00',
  `viaggioTotaleImposte` decimal(10,2) NOT NULL DEFAULT '0.00',
  `viaggioMargine` decimal(10,2) NOT NULL DEFAULT '0.00',
  `listaScorpori` text,
  `ngiorniPratica` int(2) NOT NULL,
  `nnottiPratica` int(2) NOT NULL,
  `quota` varchar(20) DEFAULT NULL,
  `tipoIVAPratica` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_viaggio`),
  KEY `codPromotore` (`codPromotore`),
  KEY `id_anagrafica` (`id_anagrafica`,`codPromotore`),
  KEY `tipologia` (`tipologia`),
  KEY `status` (`status`,`id_viaggio`),
  KEY `agenzia` (`agenzia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `viaggi_inconformita`;
CREATE TABLE `viaggi_inconformita` (
  `regime` varchar(255) NOT NULL DEFAULT '',
  `tiposervizio` varchar(50) NOT NULL DEFAULT '',
  `noncompatible` varchar(50) NOT NULL DEFAULT '',
  `messaggio` text,
  PRIMARY KEY (`regime`,`tiposervizio`,`noncompatible`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2016-04-21 04:20:43
