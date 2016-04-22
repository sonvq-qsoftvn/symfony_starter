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
-- Database: `vacanzev_romano1_eu`
--

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_agencyfee`
--

CREATE TABLE IF NOT EXISTS `backoffice_agencyfee` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(100) NOT NULL DEFAULT '',
  `importo` double NOT NULL DEFAULT '0',
  `iva` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `tipo` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_bannerhome`
--

CREATE TABLE IF NOT EXISTS `backoffice_bannerhome` (
  `idBannerHome` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `NomeBannerH` varchar(100) NOT NULL DEFAULT '',
  `ImageBannerH` varchar(255) NOT NULL DEFAULT '',
  `LinkBannerH` varchar(255) NOT NULL DEFAULT '',
  `posizione` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idBannerHome`),
  KEY `posizione` (`posizione`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_categorie`
--

CREATE TABLE IF NOT EXISTS `backoffice_categorie` (
  `idCategoria` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idCategoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_circolari`
--

CREATE TABLE IF NOT EXISTS `backoffice_circolari` (
  `IDCircolare` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `TitoloCircolare` varchar(255) NOT NULL DEFAULT '',
  `TitolareCircolare` varchar(100) NOT NULL DEFAULT '',
  `DataCircolare` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `NumeroCircolare` varchar(50) NOT NULL DEFAULT '',
  `FileCircolare` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`IDCircolare`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_destinazioni`
--

CREATE TABLE IF NOT EXISTS `backoffice_destinazioni` (
  `idDestinazione` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` enum('dest','part') NOT NULL DEFAULT 'dest',
  `nazione` varchar(20) NOT NULL DEFAULT '',
  `provincia` char(2) NOT NULL DEFAULT '',
  `citta` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`idDestinazione`),
  KEY `tipo` (`tipo`),
  KEY `nazione` (`nazione`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_fornitori_agenzie`
--

CREATE TABLE IF NOT EXISTS `backoffice_fornitori_agenzie` (
  `idFornitore` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ragione_sociale` varchar(255) CHARACTER SET latin1 NOT NULL,
  `descrizione` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `indirizzo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `cap` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `citta` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `provincia` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `cod_stato` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `piva` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `cod_fiscale` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `fk_pagamento` mediumint(9) DEFAULT NULL,
  `aves` tinyint(1) NOT NULL DEFAULT '1',
  `aves_risposta` text CHARACTER SET latin1,
  `statoVerificato` tinyint(1) NOT NULL DEFAULT '0',
  `assicurazioneObbligatoria` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent` mediumint(8) unsigned DEFAULT NULL,
  `note` text CHARACTER SET latin1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `agenzia` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT 'ETIta',
  `visibile_pannello_to` tinyint(3) unsigned NOT NULL,
  `siap_code` char(13) DEFAULT NULL,
  `default_valuta` varchar(3) DEFAULT 'EUR',
  PRIMARY KEY (`idFornitore`),
  KEY `ragione_sociale_idx` (`ragione_sociale`(10)),
  KEY `cod_stato_idx` (`cod_stato`),
  KEY `parent_idx` (`parent`),
  KEY `fk_pagamento_idx` (`fk_pagamento`),
  KEY `agenzia` (`agenzia`),
  KEY `visibile_pannello_to` (`visibile_pannello_to`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_fornitori_agenzie_bk`
--

CREATE TABLE IF NOT EXISTS `backoffice_fornitori_agenzie_bk` (
  `idFornitore` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ragione_sociale` varchar(255) CHARACTER SET latin1 NOT NULL,
  `descrizione` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `indirizzo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `cap` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `citta` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `provincia` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `cod_stato` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `piva` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `cod_fiscale` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `fk_pagamento` mediumint(9) DEFAULT NULL,
  `aves` tinyint(1) DEFAULT NULL,
  `aves_risposta` text CHARACTER SET latin1,
  `statoVerificato` tinyint(1) NOT NULL DEFAULT '0',
  `assicurazioneObbligatoria` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent` mediumint(8) unsigned DEFAULT NULL,
  `note` text CHARACTER SET latin1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `agenzia` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT 'ETIta',
  PRIMARY KEY (`idFornitore`),
  KEY `ragione_sociale_idx` (`ragione_sociale`(10)),
  KEY `cod_stato_idx` (`cod_stato`),
  KEY `parent_idx` (`parent`),
  KEY `fk_pagamento_idx` (`fk_pagamento`),
  KEY `agenzia` (`agenzia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_fornitori_contatti`
--

CREATE TABLE IF NOT EXISTS `backoffice_fornitori_contatti` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fornitori_id` int(7) unsigned NOT NULL,
  `contact` varchar(255) NOT NULL,
  `typecontact` varchar(10) DEFAULT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fornitori_id_idx` (`fornitori_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_fornitori_import`
--

CREATE TABLE IF NOT EXISTS `backoffice_fornitori_import` (
  `Cod record` int(7) NOT NULL DEFAULT '0',
  `Cortesia` varchar(10) DEFAULT '',
  `Ricerca` varchar(10) DEFAULT '',
  `Nominativo` varchar(255) DEFAULT '',
  `Estensione` varchar(255) DEFAULT '',
  `Indirizzo` varchar(255) DEFAULT '',
  `Cap` varchar(255) DEFAULT '',
  `Citta'` varchar(255) DEFAULT '',
  `Prov` varchar(255) DEFAULT '',
  `Cod stato estero` varchar(255) DEFAULT '',
  `Des stato estero` varchar(255) DEFAULT '',
  `Naz Blacklist` varchar(255) DEFAULT '',
  `Cod zona` varchar(10) DEFAULT '',
  `Des zona` varchar(255) DEFAULT '',
  `Cod categoria` varchar(10) DEFAULT '',
  `Des categoria` varchar(255) DEFAULT '',
  `Cod attivita'` varchar(10) DEFAULT '',
  `Des attivita'` varchar(255) DEFAULT '',
  `Gruppo` varchar(10) DEFAULT '',
  `Des gruppo` varchar(255) DEFAULT '',
  `Prefisso` varchar(20) DEFAULT '',
  `Telefono 1` varchar(50) DEFAULT '',
  `Telefono 2` varchar(50) DEFAULT '',
  `Fax` varchar(50) DEFAULT '',
  `Telex` varchar(50) DEFAULT '',
  `Data ultimo contatto` date DEFAULT NULL,
  `Partita iva` varchar(50) DEFAULT '',
  `Cod fiscale` varchar(50) DEFAULT '',
  `Sesso` varchar(5) DEFAULT '',
  `Luogo nascita` varchar(50) DEFAULT '',
  `Prov nascita` varchar(50) DEFAULT '',
  `Data nascita` date DEFAULT NULL,
  `Spedizione` varchar(20) DEFAULT '',
  `Esclusione stampa reg` varchar(5) DEFAULT '',
  `Esclusione posta` varchar(5) DEFAULT '',
  `Accettazione privacy` varchar(5) DEFAULT '',
  `Url internet` varchar(255) DEFAULT '',
  `E-Mail internet` varchar(255) DEFAULT '',
  `Cod cat sconti cl` varchar(20) DEFAULT '',
  `Des cat sconti cl` varchar(20) DEFAULT '',
  `Cod cat sconti op` varchar(20) DEFAULT '',
  `Des cat sconti op` varchar(20) DEFAULT '',
  `Cod anag pag OP` varchar(20) DEFAULT '',
  `Des anag pag OP` varchar(255) DEFAULT '',
  `Cod tipo vet` text,
  `Des tipo vettore` text,
  `Cmp` text,
  `Cmp num` text,
  `Assoc BSP` text,
  `Numero Card` text,
  `Invia Cat` text,
  `Data tess` date DEFAULT NULL,
  `Num Tessera` text,
  `Scad Tessera` varchar(255) DEFAULT '',
  `Cod trib 1` varchar(20) DEFAULT '',
  `Cod trib 2` varchar(20) DEFAULT '',
  `Cod trib 3` varchar(20) DEFAULT '',
  `Cod trib 4` varchar(20) DEFAULT '',
  `Cod trib 5` varchar(20) DEFAULT '',
  `Cod pag prat CL` varchar(20) DEFAULT '',
  `Des pag prat CL` varchar(20) DEFAULT '',
  `Cod pag prat OP` varchar(20) DEFAULT '',
  `Des pag prat OP` varchar(20) DEFAULT '',
  `Cod pag fatt CL` varchar(20) DEFAULT '',
  `Des pag fatt CL` varchar(20) DEFAULT '',
  `Cod pag fatt OP` varchar(20) DEFAULT '',
  `Des pag fatt OP` varchar(20) DEFAULT '',
  `Banca appoggio` varchar(255) DEFAULT '',
  `Filiale BN` varchar(255) DEFAULT '',
  `Localita BN` varchar(20) DEFAULT '',
  `Prov BN` varchar(20) DEFAULT '',
  `CAP BN` varchar(20) DEFAULT '',
  `IBAN` varchar(255) DEFAULT '',
  `BBAN` varchar(255) DEFAULT '',
  `SWIFT` varchar(255) DEFAULT '',
  `Valuta importi` varchar(20) DEFAULT '',
  `Fido CL` varchar(20) DEFAULT '',
  `Insoluti CL` varchar(20) DEFAULT '',
  `Tipo doc` varchar(20) DEFAULT '',
  `Num doc` varchar(20) DEFAULT '',
  `Data emis doc` date DEFAULT NULL,
  `Luogo emis doc` varchar(255) DEFAULT '',
  `Provv emis doc` varchar(20) DEFAULT '',
  `Scad doc` varchar(255) DEFAULT '',
  `Lingua` varchar(20) DEFAULT '',
  `Tipologia c/c Cl` varchar(20) DEFAULT '',
  `Numero c/c Cl` varchar(255) DEFAULT '',
  `Data scadenza c/c Cl` date DEFAULT NULL,
  `Tipo utilizzo c/c Cl` varchar(255) DEFAULT '',
  `Des Lingua per stampe` varchar(255) DEFAULT '',
  `Password` varchar(20) DEFAULT '',
  `Listino prz` varchar(20) DEFAULT '',
  `Listino cst` varchar(20) DEFAULT '',
  `Listino provv pass` varchar(20) DEFAULT '',
  `Listino provv att` varchar(20) DEFAULT '',
  `Cod fat CL` varchar(20) DEFAULT '',
  `Des fat CL` varchar(255) DEFAULT '',
  `Cod Collettore CL` varchar(20) DEFAULT '',
  `Des Collettore CL` varchar(255) DEFAULT '',
  `Cod promotore CL` varchar(20) DEFAULT '',
  `Des promotore CL` varchar(255) DEFAULT '',
  `Cod voucher OP` varchar(20) DEFAULT '',
  `Des voucher OP` varchar(255) DEFAULT '',
  `Cod operatore` varchar(20) DEFAULT '',
  `Des operatore` varchar(255) DEFAULT '',
  `Cod fat OP` varchar(20) DEFAULT '',
  `Des fatt OP` varchar(255) DEFAULT '',
  `Val operaz` varchar(255) DEFAULT '',
  `Tipo riscossione` varchar(20) DEFAULT '',
  `Des tipo risc` varchar(255) DEFAULT '',
  `Mezzo risc` varchar(20) DEFAULT '',
  `Tipo pagamento` varchar(20) DEFAULT '',
  `Des tipo pag` varchar(255) DEFAULT '',
  `Mezzo pag` varchar(255) DEFAULT '',
  `Banca/altro ope fin` varchar(255) DEFAULT '',
  `Rif p/conti` varchar(255) DEFAULT '',
  `File gener.riscossioni` varchar(255) DEFAULT '',
  `Cod oper altern` varchar(20) DEFAULT '',
  `Se fuori tempo` varchar(20) DEFAULT '',
  `Cod filiale` varchar(20) DEFAULT '',
  `Des filiale` varchar(255) DEFAULT '',
  `Sequenza CL` varchar(20) DEFAULT '',
  `Sequenza OP` varchar(20) DEFAULT '',
  `Logo` varchar(20) DEFAULT '',
  `Flag Blacklist` varchar(20) DEFAULT '',
  `PCONTI_C_M` varchar(20) DEFAULT '',
  `PCONTI_C_C` varchar(20) DEFAULT '',
  `PCONTI_F_M` varchar(20) DEFAULT '',
  `PCONTI_F_C` varchar(20) DEFAULT '',
  `Accetta c/c airPlus Op` varchar(20) DEFAULT '',
  `Accetta c/c American express Op` varchar(20) DEFAULT '',
  `Accetta c/c Diners club Op` varchar(20) DEFAULT '',
  `Data creazione` date DEFAULT NULL,
  `Data ultima modifica` date DEFAULT NULL,
  PRIMARY KEY (`Cod record`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_fornitori_old`
--

CREATE TABLE IF NOT EXISTS `backoffice_fornitori_old` (
  `idFornitore` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `ragione_sociale` varchar(255) NOT NULL DEFAULT '',
  `indirizzo` varchar(255) NOT NULL DEFAULT '',
  `cap` varchar(10) NOT NULL DEFAULT '',
  `citta` varchar(20) NOT NULL DEFAULT '',
  `provincia` varchar(20) NOT NULL DEFAULT '',
  `cod_stato` varchar(4) NOT NULL DEFAULT '',
  `pre` varchar(6) NOT NULL DEFAULT '',
  `tel1` varchar(20) NOT NULL DEFAULT '',
  `tel2` varchar(20) NOT NULL DEFAULT '',
  `fax` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `cod_fiscale` varchar(20) NOT NULL DEFAULT '',
  `piva` varchar(13) NOT NULL DEFAULT '0',
  `note` text NOT NULL,
  `aves` smallint(1) unsigned NOT NULL DEFAULT '0',
  `aves_risposta` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `statoVerificato` tinyint(1) NOT NULL DEFAULT '0',
  `fk_pagamento` int(3) NOT NULL DEFAULT '0',
  `verificato` varchar(255) NOT NULL DEFAULT '',
  `assicurazioneObbligatoria` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idFornitore`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_fornitori_rel_port`
--

CREATE TABLE IF NOT EXISTS `backoffice_fornitori_rel_port` (
  `idFornitore` smallint(4) unsigned NOT NULL DEFAULT '0',
  `idPortale` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idFornitore`,`idPortale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_news`
--

CREATE TABLE IF NOT EXISTS `backoffice_news` (
  `IDNews` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `TitoloNews` varchar(34) NOT NULL DEFAULT '',
  `TestoNews` text NOT NULL,
  `DataNews` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataInizio` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dataFine` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LinkNews` varchar(255) NOT NULL DEFAULT '',
  `TestoLinkNews` varchar(100) NOT NULL DEFAULT '',
  `TipoLinkNews` varchar(50) NOT NULL DEFAULT '',
  `tipoNews` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`IDNews`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_pagamenti_agenzie`
--

CREATE TABLE IF NOT EXISTS `backoffice_pagamenti_agenzie` (
  `id_pagamento` int(3) NOT NULL AUTO_INCREMENT,
  `cod` varchar(64) NOT NULL DEFAULT '',
  `descrizione` varchar(255) NOT NULL DEFAULT '',
  `agenzia` varchar(10) NOT NULL DEFAULT 'ETIta',
  `pagamenti_siap` varchar(255) DEFAULT '',
  PRIMARY KEY (`id_pagamento`),
  KEY `agenzia` (`agenzia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_portali_backup`
--

CREATE TABLE IF NOT EXISTS `backoffice_portali_backup` (
  `idPortale` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nomePortale` varchar(200) NOT NULL DEFAULT '',
  `fcd` varchar(30) NOT NULL DEFAULT '',
  `tempo_accettazione` int(11) unsigned NOT NULL DEFAULT '0',
  `tempo_lavorazione` int(11) unsigned NOT NULL DEFAULT '0',
  `attesa_preventivo` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`idPortale`),
  KEY `fcd` (`fcd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_portali_mercati`
--

CREATE TABLE IF NOT EXISTS `backoffice_portali_mercati` (
  `idPortale` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nomePortale` varchar(200) NOT NULL DEFAULT '',
  `fcd` varchar(30) NOT NULL DEFAULT '',
  `tempo_accettazione` int(11) unsigned NOT NULL DEFAULT '0',
  `tempo_lavorazione` int(11) unsigned NOT NULL DEFAULT '0',
  `attesa_preventivo` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attivo` tinyint(1) NOT NULL DEFAULT '0',
  `visualizzato` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `mercato` varchar(45) NOT NULL DEFAULT 'ITA',
  PRIMARY KEY (`idPortale`),
  KEY `fcd` (`fcd`),
  KEY `mercato` (`mercato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_provvigioni`
--

CREATE TABLE IF NOT EXISTS `backoffice_provvigioni` (
  `ProvvigioneID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Provvigione` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`ProvvigioneID`),
  KEY `ProvvigioneID` (`ProvvigioneID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_servizi_dettagli`
--

CREATE TABLE IF NOT EXISTS `backoffice_servizi_dettagli` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) NOT NULL DEFAULT 'sistemazione',
  `attivo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `backoffice_servizi_dettagli_tipo_idx` (`tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_sistemazioni`
--

CREATE TABLE IF NOT EXISTS `backoffice_sistemazioni` (
  `id` varchar(4) NOT NULL DEFAULT '',
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `descrizione_en` varchar(50) NOT NULL DEFAULT '',
  `descrizione_es` varchar(50) NOT NULL DEFAULT '',
  `descrizione_de` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_sistemazioni_dettaglio`
--

CREATE TABLE IF NOT EXISTS `backoffice_sistemazioni_dettaglio` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `descrizione_en` varchar(50) NOT NULL DEFAULT '',
  `descrizione_es` varchar(50) NOT NULL DEFAULT '',
  `descrizione_de` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_strutture`
--

CREATE TABLE IF NOT EXISTS `backoffice_strutture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `struttura` tinytext NOT NULL,
  `telefono` varchar(255) NOT NULL DEFAULT '',
  `dominio` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `struttura` (`struttura`),
  FULLTEXT KEY `telefono` (`telefono`),
  FULLTEXT KEY `dominio` (`dominio`),
  FULLTEXT KEY `ricerca_tutto` (`struttura`,`telefono`,`dominio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_to`
--

CREATE TABLE IF NOT EXISTS `backoffice_to` (
  `idTo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `ToNome` varchar(100) NOT NULL DEFAULT '',
  `ToUrl` varchar(255) NOT NULL DEFAULT '',
  `ToCodice` varchar(50) NOT NULL DEFAULT '',
  `ToTelefono` text NOT NULL,
  `ToDescrizioneBreve` text NOT NULL,
  `ToParoleChiave` text NOT NULL,
  `ToConvenzionato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `operatore_consigliato` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `note_operatore_consigliato` tinytext NOT NULL,
  `UserAdm` varchar(50) NOT NULL DEFAULT '',
  `accesso_to` text NOT NULL,
  PRIMARY KEY (`idTo`),
  KEY `ToNome` (`ToNome`),
  KEY `ToConvenzionato` (`ToConvenzionato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_to_rel_cat`
--

CREATE TABLE IF NOT EXISTS `backoffice_to_rel_cat` (
  `idTo` int(6) NOT NULL DEFAULT '0',
  `idCategoria` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTo`,`idCategoria`),
  KEY `idCategoria` (`idCategoria`),
  KEY `idTo` (`idTo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_to_rel_dest`
--

CREATE TABLE IF NOT EXISTS `backoffice_to_rel_dest` (
  `idTo` int(6) unsigned NOT NULL DEFAULT '0',
  `idDestinazione` int(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTo`,`idDestinazione`),
  KEY `idTo` (`idTo`),
  KEY `idDestinazione` (`idDestinazione`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_to_rel_forn`
--

CREATE TABLE IF NOT EXISTS `backoffice_to_rel_forn` (
  `idTo` int(6) unsigned NOT NULL DEFAULT '0',
  `idFornitore` int(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTo`,`idFornitore`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_to_rel_prov`
--

CREATE TABLE IF NOT EXISTS `backoffice_to_rel_prov` (
  `ToID` int(6) unsigned NOT NULL DEFAULT '0',
  `ProvvigioneID` int(6) unsigned NOT NULL DEFAULT '0',
  `ProvvigioneNote` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ToID`,`ProvvigioneID`),
  KEY `ToID` (`ToID`),
  KEY `ProvvigioneID` (`ProvvigioneID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backoffice_trattamenti`
--

CREATE TABLE IF NOT EXISTS `backoffice_trattamenti` (
  `id` varchar(4) NOT NULL DEFAULT '',
  `descrizione` varchar(50) NOT NULL DEFAULT '',
  `descrizione_en` varchar(50) NOT NULL DEFAULT '',
  `descrizione_es` varchar(50) NOT NULL DEFAULT '',
  `descrizione_de` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner',
  `cod_agenti` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_fine` (`data_fine`),
  KEY `data_inizio` (`data_inizio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner2`
--

CREATE TABLE IF NOT EXISTS `banner2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner2',
  `cod_agenti` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_fine` (`data_fine`),
  KEY `data_inizio` (`data_inizio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner3`
--

CREATE TABLE IF NOT EXISTS `banner3` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner3',
  `cod_agenti` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_inizio` (`data_inizio`),
  KEY `data_fine` (`data_fine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner4`
--

CREATE TABLE IF NOT EXISTS `banner4` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner4',
  `cod_agenti` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_fine` (`data_fine`),
  KEY `data_inizio` (`data_inizio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner5`
--

CREATE TABLE IF NOT EXISTS `banner5` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner5',
  `cod_agenti` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_inizio` (`data_inizio`),
  KEY `data_fine` (`data_fine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner6`
--

CREATE TABLE IF NOT EXISTS `banner6` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner6',
  `cod_agenti` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_inizio` (`data_inizio`),
  KEY `data_fine` (`data_fine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner7`
--

CREATE TABLE IF NOT EXISTS `banner7` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner7',
  `cod_agenti` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_fine` (`data_fine`),
  KEY `data_inizio` (`data_inizio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner8`
--

CREATE TABLE IF NOT EXISTS `banner8` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner8',
  `cod_agenti` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_fine` (`data_fine`),
  KEY `data_inizio` (`data_inizio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner_prova`
--

CREATE TABLE IF NOT EXISTS `banner_prova` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `testo` text,
  `testo_click` text,
  `url` text,
  `titolo` varchar(50) DEFAULT '5487',
  `target` varchar(10) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_inizio` datetime DEFAULT '0000-00-00 00:00:00',
  `data_fine` date DEFAULT NULL,
  `tabella` varchar(10) NOT NULL DEFAULT 'banner',
  `cod_agenti` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner_vetrina1`
--

CREATE TABLE IF NOT EXISTS `banner_vetrina1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `etichetta` varchar(20) NOT NULL DEFAULT '',
  `nomePortale` varchar(50) NOT NULL DEFAULT '',
  `urlPortale` varchar(150) NOT NULL DEFAULT '',
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `offerte_localita` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner_vetrina2`
--

CREATE TABLE IF NOT EXISTS `banner_vetrina2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `etichetta` varchar(20) NOT NULL DEFAULT '',
  `nomePortale` varchar(50) NOT NULL DEFAULT '',
  `urlPortale` varchar(150) NOT NULL DEFAULT '',
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL,
  `offerte_localita` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `citta`
--

CREATE TABLE IF NOT EXISTS `citta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL DEFAULT '',
  `citta` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `etcontact`
--

CREATE TABLE IF NOT EXISTS `etcontact` (
  `id_etcontact` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL DEFAULT '0000-00-00',
  `reparto` varchar(15) NOT NULL DEFAULT '',
  `nome` varchar(20) NOT NULL DEFAULT '',
  `cognome` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `oggetto` varchar(250) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  PRIMARY KEY (`id_etcontact`),
  KEY `data` (`data`,`reparto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `reparto` varchar(50) NOT NULL DEFAULT '',
  `categoria` varchar(50) NOT NULL DEFAULT '',
  `domanda` text NOT NULL,
  `risposta` text NOT NULL,
  `keyword` text NOT NULL,
  PRIMARY KEY (`id_faq`),
  FULLTEXT KEY `ricerca` (`keyword`,`domanda`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gopl`
--

CREATE TABLE IF NOT EXISTS `gopl` (
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rotazioni` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gopl2`
--

CREATE TABLE IF NOT EXISTS `gopl2` (
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rotazioni` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` varchar(20) DEFAULT NULL,
  `sez_id` varchar(50) DEFAULT NULL,
  `pag_id` varchar(20) DEFAULT NULL,
  `help_text` text,
  `help_title` text NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `riffaq` varchar(255) NOT NULL DEFAULT '',
  `add_id` varchar(64) NOT NULL DEFAULT '',
  `position` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `app_pag_sez` (`app_id`,`pag_id`,`sez_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe` varchar(255) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `addr` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_2005`
--

CREATE TABLE IF NOT EXISTS `log_2005` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe` varchar(255) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `addr` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_2006`
--

CREATE TABLE IF NOT EXISTS `log_2006` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe` varchar(255) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `addr` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_2007`
--

CREATE TABLE IF NOT EXISTS `log_2007` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe` varchar(255) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `addr` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_2008`
--

CREATE TABLE IF NOT EXISTS `log_2008` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe` varchar(255) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `addr` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_2009`
--

CREATE TABLE IF NOT EXISTS `log_2009` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe` varchar(255) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `addr` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_2010`
--

CREATE TABLE IF NOT EXISTS `log_2010` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe` varchar(255) NOT NULL DEFAULT '',
  `messaggio` text NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `addr` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `luca_articoli`
--

CREATE TABLE IF NOT EXISTS `luca_articoli` (
  `idArticolo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `destinazione` varchar(50) NOT NULL DEFAULT '',
  `tipologia` varchar(50) NOT NULL DEFAULT '',
  `feedback` text NOT NULL,
  `dataInserimento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `operator` varchar(50) NOT NULL DEFAULT '',
  `viaggiatore` varchar(50) NOT NULL DEFAULT '',
  `mail` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`idArticolo`),
  KEY `destinazione` (`destinazione`),
  KEY `tipologia` (`tipologia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `luca_immagini`
--

CREATE TABLE IF NOT EXISTS `luca_immagini` (
  `idImmagine` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `idArticolo` int(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idImmagine`),
  KEY `idArticolo` (`idArticolo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offertebackup`
--

CREATE TABLE IF NOT EXISTS `offertebackup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `destinazione` varchar(50) DEFAULT NULL,
  `data_partenza1` date DEFAULT NULL,
  `data_partenza2` date DEFAULT NULL,
  `data_partenza3` date DEFAULT NULL,
  `data_partenza4` date DEFAULT NULL,
  `data_partenza5` date DEFAULT NULL,
  `citta_partenza1` varchar(50) DEFAULT NULL,
  `citta_partenza2` varchar(50) DEFAULT NULL,
  `citta_partenza3` varchar(50) DEFAULT NULL,
  `citta_partenza4` varchar(50) DEFAULT NULL,
  `citta_partenza5` varchar(50) DEFAULT NULL,
  `tipo_offerta` varchar(50) DEFAULT NULL,
  `prezzo_da` smallint(12) DEFAULT NULL,
  `prezzo_a` smallint(12) DEFAULT NULL,
  `tour` varchar(50) DEFAULT NULL,
  `data_scadenza` date DEFAULT NULL,
  `data_inserimento` datetime DEFAULT NULL,
  `data_modifica` datetime DEFAULT '0000-00-00 00:00:00',
  `migliore` varchar(10) DEFAULT NULL,
  `img1` varchar(50) DEFAULT NULL,
  `img2` varchar(50) DEFAULT NULL,
  `img3` varchar(50) DEFAULT NULL,
  `durata` varchar(50) DEFAULT NULL,
  `nome_inserimento` varchar(20) DEFAULT NULL,
  `modificato` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offertefax`
--

CREATE TABLE IF NOT EXISTS `offertefax` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `destinazione` varchar(50) DEFAULT NULL,
  `data_partenza1` date DEFAULT NULL,
  `data_partenza2` date DEFAULT NULL,
  `data_partenza3` date DEFAULT NULL,
  `data_partenza4` date DEFAULT NULL,
  `data_partenza5` date DEFAULT NULL,
  `data_partenza6` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza7` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza8` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza9` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza10` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza11` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza12` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza13` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza14` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza15` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza16` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza17` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza18` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza19` date NOT NULL DEFAULT '0000-00-00',
  `data_partenza20` date NOT NULL DEFAULT '0000-00-00',
  `citta_partenza1` varchar(50) DEFAULT NULL,
  `citta_partenza2` varchar(50) DEFAULT NULL,
  `citta_partenza3` varchar(50) DEFAULT NULL,
  `citta_partenza4` varchar(50) DEFAULT NULL,
  `citta_partenza5` varchar(50) DEFAULT NULL,
  `citta_partenza6` varchar(50) DEFAULT NULL,
  `citta_partenza7` varchar(50) DEFAULT NULL,
  `citta_partenza8` varchar(50) DEFAULT NULL,
  `citta_partenza9` varchar(50) DEFAULT NULL,
  `citta_partenza10` varchar(50) DEFAULT NULL,
  `tipo_offerta` varchar(50) DEFAULT NULL,
  `prezzo_da` smallint(12) DEFAULT NULL,
  `prezzo_a` smallint(12) DEFAULT NULL,
  `tour` varchar(50) DEFAULT NULL,
  `data_scadenza` date DEFAULT NULL,
  `data_inserimento` datetime DEFAULT NULL,
  `data_modifica` datetime DEFAULT '0000-00-00 00:00:00',
  `migliore` varchar(10) DEFAULT NULL,
  `img1` varchar(50) DEFAULT NULL,
  `img2` varchar(50) DEFAULT NULL,
  `img3` varchar(50) DEFAULT NULL,
  `durata` varchar(50) DEFAULT NULL,
  `nome_inserimento` varchar(20) DEFAULT NULL,
  `modificato` varchar(20) DEFAULT NULL,
  `agenti` varchar(10) NOT NULL DEFAULT 'false',
  `dalal` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(25) NOT NULL DEFAULT '',
  `passwd` varchar(25) NOT NULL DEFAULT '',
  `fax` varchar(5) NOT NULL DEFAULT '',
  `redazionali` varchar(5) NOT NULL DEFAULT '',
  `redattore` varchar(5) NOT NULL DEFAULT '',
  `num_redazionali` int(4) NOT NULL DEFAULT '0',
  `strutture` varchar(5) NOT NULL DEFAULT '',
  `num_strutture` int(4) NOT NULL DEFAULT '0',
  `prodotti` varchar(5) NOT NULL DEFAULT '',
  `ricerca` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`,`passwd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promuovi_struttura`
--

CREATE TABLE IF NOT EXISTS `promuovi_struttura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL,
  `sito` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `data_inserimento` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `redazione_prodotti`
--

CREATE TABLE IF NOT EXISTS `redazione_prodotti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_scheda` varchar(50) NOT NULL DEFAULT '',
  `piatto` varchar(50) NOT NULL DEFAULT '',
  `titolo` varchar(100) NOT NULL DEFAULT '',
  `prodotto_tipico` varchar(50) NOT NULL DEFAULT '',
  `testo` text NOT NULL,
  `foto1` varchar(50) NOT NULL DEFAULT '',
  `data_inserimento` date NOT NULL DEFAULT '0000-00-00',
  `nome_inserimento` varchar(50) NOT NULL DEFAULT '',
  `data_modifica` date NOT NULL DEFAULT '0000-00-00',
  `nome_modifica` varchar(50) NOT NULL DEFAULT '',
  `on_line` varchar(10) NOT NULL DEFAULT '',
  `parola` varchar(30) NOT NULL DEFAULT '',
  `associa` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`on_line`,`associa`),
  KEY `prodotto_tipico` (`prodotto_tipico`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `redazione_redazionali`
--

CREATE TABLE IF NOT EXISTS `redazione_redazionali` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(70) NOT NULL DEFAULT '',
  `autore` varchar(50) NOT NULL DEFAULT '',
  `nazione` varchar(50) NOT NULL DEFAULT '',
  `regione` varchar(50) NOT NULL DEFAULT '',
  `comune` varchar(50) NOT NULL DEFAULT '',
  `provincia` varchar(50) NOT NULL DEFAULT '',
  `tema1` varchar(50) NOT NULL DEFAULT '',
  `tema2` varchar(50) NOT NULL DEFAULT '',
  `tema3` varchar(50) NOT NULL DEFAULT '',
  `foto_home` varchar(50) NOT NULL DEFAULT '',
  `foto_1` varchar(50) NOT NULL DEFAULT '',
  `foto_2` varchar(50) NOT NULL DEFAULT '',
  `foto_3` varchar(50) NOT NULL DEFAULT '',
  `foto_4` varchar(50) NOT NULL DEFAULT '',
  `foto_5` varchar(50) NOT NULL DEFAULT '',
  `testo` text NOT NULL,
  `data_inserimento` date NOT NULL DEFAULT '0000-00-00',
  `nome_inserimento` varchar(50) NOT NULL DEFAULT '',
  `data_modifica` date NOT NULL DEFAULT '0000-00-00',
  `nome_modifica` varchar(50) NOT NULL DEFAULT '',
  `on_line` varchar(10) NOT NULL DEFAULT '',
  `data_online` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zona` varchar(50) NOT NULL DEFAULT '',
  `lingua` varchar(50) NOT NULL DEFAULT '',
  `inizio_pub` date NOT NULL DEFAULT '0000-00-00',
  `fine_pub` date NOT NULL DEFAULT '0000-00-00',
  `inizio_home` date NOT NULL DEFAULT '0000-00-00',
  `fine_home` date NOT NULL DEFAULT '0000-00-00',
  `inizio_tema` date NOT NULL DEFAULT '0000-00-00',
  `fine_tema` date NOT NULL DEFAULT '0000-00-00',
  `pub_tema` varchar(50) NOT NULL DEFAULT '',
  `parola` varchar(50) NOT NULL DEFAULT '',
  `collocazione` varchar(50) NOT NULL DEFAULT '',
  `tipo_redazionale` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `comune` (`comune`),
  KEY `provincia` (`provincia`(20)),
  KEY `id` (`id`,`lingua`,`tema1`,`tema2`,`tema3`),
  FULLTEXT KEY `fulltext` (`testo`,`titolo`),
  FULLTEXT KEY `titolo` (`titolo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `redazione_struttura`
--

CREATE TABLE IF NOT EXISTS `redazione_struttura` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(50) NOT NULL DEFAULT '',
  `autore` varchar(50) NOT NULL DEFAULT '',
  `nazione` varchar(50) NOT NULL DEFAULT '',
  `regione` varchar(50) NOT NULL DEFAULT '',
  `via` varchar(100) NOT NULL DEFAULT '',
  `provincia` varchar(50) NOT NULL DEFAULT '',
  `comune` varchar(50) NOT NULL DEFAULT '',
  `lingua` varchar(50) NOT NULL DEFAULT '',
  `struttura` varchar(50) NOT NULL DEFAULT '',
  `caratteristica` varchar(20) NOT NULL DEFAULT '',
  `collocazione` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(50) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `cel` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `testo` text NOT NULL,
  `testo3` text NOT NULL,
  `foto1` varchar(50) NOT NULL DEFAULT '',
  `foto2` varchar(50) NOT NULL DEFAULT '',
  `foto3` varchar(50) NOT NULL DEFAULT '',
  `foto4` varchar(50) NOT NULL DEFAULT '',
  `foto5` varchar(50) NOT NULL DEFAULT '',
  `nome_foto1` varchar(50) NOT NULL DEFAULT '',
  `nome_foto2` varchar(50) NOT NULL DEFAULT '',
  `nome_foto3` varchar(50) NOT NULL DEFAULT '',
  `nome_foto4` varchar(50) NOT NULL DEFAULT '',
  `nome_foto5` varchar(50) NOT NULL DEFAULT '',
  `data_inserimento` date NOT NULL DEFAULT '0000-00-00',
  `nome_inserimento` varchar(50) NOT NULL DEFAULT '',
  `data_modifica` date NOT NULL DEFAULT '0000-00-00',
  `nome_modifica` varchar(50) NOT NULL DEFAULT '',
  `on_line` varchar(10) NOT NULL DEFAULT '',
  `inizio_home1` date NOT NULL DEFAULT '0000-00-00',
  `fine_home1` date NOT NULL DEFAULT '0000-00-00',
  `parola` varchar(30) NOT NULL DEFAULT '',
  `associa` int(11) NOT NULL DEFAULT '0',
  `link_promotore` varchar(5) NOT NULL DEFAULT '',
  `prodotto_tipico1` varchar(50) NOT NULL DEFAULT '',
  `prodotto_tipico2` varchar(50) NOT NULL DEFAULT '',
  `prodotto_tipico3` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`lingua`,`on_line`,`associa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `session_data`
--

CREATE TABLE IF NOT EXISTS `session_data` (
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

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(120) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `touroperator`
--

CREATE TABLE IF NOT EXISTS `touroperator` (
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `codice_agenzia` varchar(255) DEFAULT NULL,
  `descrizione` text,
  `note` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `codpromotorecreazione` int(10) unsigned DEFAULT '0',
  `codpromotoremodifica` int(10) unsigned DEFAULT '0',
  `agenzia` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codpromotorecreazione_idx` (`codpromotorecreazione`),
  KEY `codpromotoremodifica_idx` (`codpromotoremodifica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `touroperator_commissioni`
--

CREATE TABLE IF NOT EXISTS `touroperator_commissioni` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `touroperator_id` mediumint(8) unsigned NOT NULL,
  `commissione` varchar(50) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`),
  KEY `touroperator_id_idx` (`touroperator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `touroperator_iso`
--

CREATE TABLE IF NOT EXISTS `touroperator_iso` (
  `tourOperator_id` int(11) NOT NULL,
  `iso_id` char(4) NOT NULL,
  `consigliato` int(1) unsigned NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`tourOperator_id`,`iso_id`),
  KEY `dev_romano1_tourOperator_iso_iso_id_iso_codice` (`iso_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `touroperator_portale`
--

CREATE TABLE IF NOT EXISTS `touroperator_portale` (
  `tourOperator_id` int(4) NOT NULL,
  `portale_id` int(2) NOT NULL,
  `consigliato` tinyint(1) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`tourOperator_id`,`portale_id`),
  KEY `tpbi` (`portale_id`),
  KEY `tourOperator_portale_touroperator_id_tourOperator_id` (`tourOperator_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `touroperator_rel_tag`
--

CREATE TABLE IF NOT EXISTS `touroperator_rel_tag` (
  `touroperator_id` int(10) unsigned NOT NULL DEFAULT '0',
  `tagto_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `note` text,
  PRIMARY KEY (`touroperator_id`,`tagto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `touroperator_tag`
--

CREATE TABLE IF NOT EXISTS `touroperator_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
