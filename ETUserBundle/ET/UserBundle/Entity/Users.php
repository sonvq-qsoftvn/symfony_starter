<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="ferie", columns={"ferie"}), @ORM\Index(name="username", columns={"username"})})
 * @ORM\Entity(repositoryClass="ET\UserBundle\Repository\UsersRepository")
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=15, nullable=false)
     */
    private $iduser = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_password", type="date", nullable=false)
     */
    private $dataPassword = '0000-00-00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="incentive", type="boolean", nullable=false)
     */
    private $incentive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppo_lavoro", type="integer", nullable=false)
     */
    private $gruppoLavoro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=500, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=500, nullable=true)
     */
    private $lname;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_nome", type="string", length=500, nullable=true)
     */
    private $contrattoNome;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_cognome", type="string", length=500, nullable=true)
     */
    private $contrattoCognome;

    /**
     * @var string
     *
     * @ORM\Column(name="noteutente", type="string", length=95, nullable=false)
     */
    private $noteutente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sesso", type="string", length=1, nullable=false)
     */
    private $sesso = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascita", type="date", nullable=true)
     */
    private $dataNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="luogo_nascita", type="string", length=32, nullable=false)
     */
    private $luogoNascita = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=500, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=500, nullable=true)
     */
    private $cell;

    /**
     * @var string
     *
     * @ORM\Column(name="celllavoro", type="string", length=500, nullable=true)
     */
    private $celllavoro;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=false)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="emailbox", type="string", length=35, nullable=false)
     */
    private $emailbox = '';

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=25, nullable=false)
     */
    private $town = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cap", type="string", length=5, nullable=false)
     */
    private $cap = '';

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=4, nullable=false)
     */
    private $provincia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione", type="string", length=30, nullable=false)
     */
    private $regione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nazione", type="string", length=3, nullable=false)
     */
    private $nazione = 'ITA';

    /**
     * @var string
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=16, nullable=false)
     */
    private $codiceFiscale = '';

    /**
     * @var string
     *
     * @ORM\Column(name="partita_iva", type="string", length=13, nullable=false)
     */
    private $partitaIva = '';

    /**
     * @var string
     *
     * @ORM\Column(name="disp", type="string", length=100, nullable=true)
     */
    private $disp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url1", type="string", length=255, nullable=true)
     */
    private $url1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url2", type="string", length=255, nullable=false)
     */
    private $url2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url3", type="string", length=255, nullable=false)
     */
    private $url3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url4", type="string", length=255, nullable=false)
     */
    private $url4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url5", type="string", length=255, nullable=false)
     */
    private $url5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url6", type="string", length=255, nullable=false)
     */
    private $url6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url7", type="string", length=255, nullable=false)
     */
    private $url7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url8", type="string", length=255, nullable=false)
     */
    private $url8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=255, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_update_at", type="datetime", nullable=true)
     */
    private $dateUpdateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=11, nullable=false)
     */
    private $status = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imk", type="string", length=1, nullable=false)
     */
    private $imk = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="chat", type="string", length=255, nullable=false)
     */
    private $chat = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="totaldayclick", type="boolean", nullable=false)
     */
    private $totaldayclick = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ferie", type="string", length=15, nullable=false)
     */
    private $ferie = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ckchat", type="integer", nullable=false)
     */
    private $ckchat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="noteferie", type="string", length=100, nullable=false)
     */
    private $noteferie = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inizioferie", type="datetime", nullable=false)
     */
    private $inizioferie = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fineferie", type="datetime", nullable=false)
     */
    private $fineferie = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="hotel", type="string", length=15, nullable=false)
     */
    private $hotel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="banned", type="string", length=5, nullable=false)
     */
    private $banned = 'si';

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=255, nullable=false)
     */
    private $skype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="msn", type="string", length=200, nullable=false)
     */
    private $msn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=100, nullable=false)
     */
    private $facebook = '';

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=false)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="emailPersonale", type="string", length=255, nullable=false)
     */
    private $emailpersonale = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clear_passwd", type="string", length=20, nullable=false)
     */
    private $clearPasswd = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imk_passwd", type="string", length=20, nullable=false)
     */
    private $imkPasswd = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imk_attivo", type="string", nullable=true)
     */
    private $imkAttivo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_attivazione", type="string", length=2, nullable=false)
     */
    private $mailAttivazione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="vuoto", type="string", length=18, nullable=false)
     */
    private $vuoto = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     */
    private $gid = '6';

    /**
     * @var integer
     *
     * @ORM\Column(name="idCom", type="integer", nullable=false)
     */
    private $idcom = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="promotoreRiferimento", type="boolean", nullable=false)
     */
    private $promotoreriferimento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="strutture", type="integer", nullable=false)
     */
    private $strutture = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="redazionali", type="integer", nullable=false)
     */
    private $redazionali = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gestioneCampagne", type="boolean", nullable=false)
     */
    private $gestionecampagne = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="latitudine", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitudine = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="longitudine", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitudine = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="adwords", type="string", length=100, nullable=false)
     */
    private $adwords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="adwords_label", type="string", length=255, nullable=false)
     */
    private $adwordsLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="analytics", type="string", length=255, nullable=false)
     */
    private $analytics = '';

    /**
     * @var string
     *
     * @ORM\Column(name="chiSonoIta", type="text", length=255, nullable=false)
     */
    private $chisonoita;

    /**
     * @var string
     *
     * @ORM\Column(name="provvigioniAves", type="string", length=50, nullable=false)
     */
    private $provvigioniaves = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idAves", type="string", length=50, nullable=false)
     */
    private $idaves = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lingua_pannelli", type="string", length=5, nullable=false)
     */
    private $linguaPannelli = 'it_IT';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="iscritti_newsletter_riassegnati", type="datetime", nullable=true)
     */
    private $iscrittiNewsletterRiassegnati;

    /**
     * @var integer
     *
     * @ORM\Column(name="limite_prodotti_marketplace", type="smallint", nullable=false)
     */
    private $limiteProdottiMarketplace = '5';

    /**
     * @var string
     *
     * @ORM\Column(name="tipocontratto_pto", type="string", length=50, nullable=false)
     */
    private $tipocontrattoPto = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ma_toupdate", type="boolean", nullable=false)
     */
    private $maToupdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="multiagenzia_id", type="integer", nullable=true)
     */
    private $multiagenziaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ma_sincronizzato_al", type="datetime", nullable=true)
     */
    private $maSincronizzatoAl;

    /**
     * @var string
     *
     * @ORM\Column(name="nominativo", type="string", length=500, nullable=true)
     */
    private $nominativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

