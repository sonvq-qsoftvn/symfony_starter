<?php

namespace ET\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use \DateTime;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="ferie", columns={"ferie"}), @ORM\Index(name="username", columns={"username"})})
 * @ORM\Entity(repositoryClass="ET\UserBundle\Repository\UsersRepository")
 */
class Users extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=15, nullable=false)
     */
    protected $iduser = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_password", type="date", nullable=false)
     */
    protected $dataPassword;

    /**
     * @var boolean
     *
     * @ORM\Column(name="incentive", type="boolean", nullable=false)
     */
    protected $incentive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppo_lavoro", type="integer", nullable=false)
     */
    protected $gruppoLavoro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=500, nullable=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=500, nullable=true)
     */
    protected $lname;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_nome", type="string", length=500, nullable=true)
     */
    protected $contrattoNome;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_cognome", type="string", length=500, nullable=true)
     */
    protected $contrattoCognome;

    /**
     * @var string
     *
     * @ORM\Column(name="noteutente", type="string", length=95, nullable=false)
     */
    protected $noteutente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sesso", type="string", length=1, nullable=false)
     */
    protected $sesso = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascita", type="date", nullable=true)
     */
    protected $dataNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="luogo_nascita", type="string", length=32, nullable=false)
     */
    protected $luogoNascita = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=500, nullable=true)
     */
    protected $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=500, nullable=true)
     */
    protected $cell;

    /**
     * @var string
     *
     * @ORM\Column(name="celllavoro", type="string", length=500, nullable=true)
     */
    protected $celllavoro;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=false)
     */
    protected $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="emailbox", type="string", length=35, nullable=false)
     */
    protected $emailbox = '';

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=25, nullable=false)
     */
    protected $town = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cap", type="string", length=5, nullable=false)
     */
    protected $cap = '';

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=4, nullable=false)
     */
    protected $provincia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione", type="string", length=30, nullable=false)
     */
    protected $regione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nazione", type="string", length=3, nullable=false)
     */
    protected $nazione = 'ITA';

    /**
     * @var string
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=16, nullable=false)
     */
    protected $codiceFiscale = '';

    /**
     * @var string
     *
     * @ORM\Column(name="partita_iva", type="string", length=13, nullable=false)
     */
    protected $partitaIva = '';

    /**
     * @var string
     *
     * @ORM\Column(name="disp", type="string", length=100, nullable=true)
     */
    protected $disp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    protected $photo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url1", type="string", length=255, nullable=true)
     */
    protected $url1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url2", type="string", length=255, nullable=false)
     */
    protected $url2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url3", type="string", length=255, nullable=false)
     */
    protected $url3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url4", type="string", length=255, nullable=false)
     */
    protected $url4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url5", type="string", length=255, nullable=false)
     */
    protected $url5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url6", type="string", length=255, nullable=false)
     */
    protected $url6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url7", type="string", length=255, nullable=false)
     */
    protected $url7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url8", type="string", length=255, nullable=false)
     */
    protected $url8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=255, nullable=true)
     */
    protected $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    protected $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_update_at", type="datetime", nullable=true)
     */
    protected $dateUpdateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=11, nullable=false)
     */
    protected $status = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imk", type="string", length=1, nullable=false)
     */
    protected $imk = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="chat", type="string", length=255, nullable=false)
     */
    protected $chat = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="totaldayclick", type="boolean", nullable=false)
     */
    protected $totaldayclick = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ferie", type="string", length=15, nullable=false)
     */
    protected $ferie = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ckchat", type="integer", nullable=false)
     */
    protected $ckchat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="noteferie", type="string", length=100, nullable=false)
     */
    protected $noteferie = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inizioferie", type="datetime", nullable=false)
     */
    protected $inizioferie = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fineferie", type="datetime", nullable=false)
     */
    protected $fineferie = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="hotel", type="string", length=15, nullable=false)
     */
    protected $hotel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="banned", type="string", length=5, nullable=false)
     */
    protected $banned = 'si';

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=255, nullable=false)
     */
    protected $skype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="msn", type="string", length=200, nullable=false)
     */
    protected $msn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=100, nullable=false)
     */
    protected $facebook = '';

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=false)
     */
    protected $twitter = '';

    /**
     * @var string
     *
     * @ORM\Column(name="emailPersonale", type="string", length=255, nullable=false)
     */
    protected $emailpersonale = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clear_passwd", type="string", length=20, nullable=false)
     */
    protected $clearPasswd = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imk_passwd", type="string", length=20, nullable=false)
     */
    protected $imkPasswd = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imk_attivo", type="string", nullable=true)
     */
    protected $imkAttivo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_attivazione", type="string", length=2, nullable=false)
     */
    protected $mailAttivazione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="vuoto", type="string", length=18, nullable=false)
     */
    protected $vuoto = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     */
    protected $gid = '6';

    /**
     * @var integer
     *
     * @ORM\Column(name="idCom", type="integer", nullable=false)
     */
    protected $idcom = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="promotoreRiferimento", type="boolean", nullable=false)
     */
    protected $promotoreriferimento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="strutture", type="integer", nullable=false)
     */
    protected $strutture = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="redazionali", type="integer", nullable=false)
     */
    protected $redazionali = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gestioneCampagne", type="boolean", nullable=false)
     */
    protected $gestionecampagne = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="latitudine", type="float", precision=10, scale=0, nullable=false)
     */
    protected $latitudine = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="longitudine", type="float", precision=10, scale=0, nullable=false)
     */
    protected $longitudine = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="adwords", type="string", length=100, nullable=false)
     */
    protected $adwords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="adwords_label", type="string", length=255, nullable=false)
     */
    protected $adwordsLabel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="analytics", type="string", length=255, nullable=false)
     */
    protected $analytics = '';

    /**
     * @var string
     *
     * @ORM\Column(name="chiSonoIta", type="text", length=255, nullable=false)
     */
    protected $chisonoita;

    /**
     * @var string
     *
     * @ORM\Column(name="provvigioniAves", type="string", length=50, nullable=false)
     */
    protected $provvigioniaves = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idAves", type="string", length=50, nullable=false)
     */
    protected $idaves = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lingua_pannelli", type="string", length=5, nullable=false)
     */
    protected $linguaPannelli = 'it_IT';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="iscritti_newsletter_riassegnati", type="datetime", nullable=true)
     */
    protected $iscrittiNewsletterRiassegnati;

    /**
     * @var integer
     *
     * @ORM\Column(name="limite_prodotti_marketplace", type="smallint", nullable=false)
     */
    protected $limiteProdottiMarketplace = '5';

    /**
     * @var string
     *
     * @ORM\Column(name="tipocontratto_pto", type="string", length=50, nullable=false)
     */
    protected $tipocontrattoPto = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ma_toupdate", type="boolean", nullable=false)
     */
    protected $maToupdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="multiagenzia_id", type="integer", nullable=true)
     */
    protected $multiagenziaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ma_sincronizzato_al", type="datetime", nullable=true)
     */
    protected $maSincronizzatoAl;

    /**
     * @var string
     *
     * @ORM\Column(name="nominativo", type="string", length=500, nullable=true)
     */
    protected $nominativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;



    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return Users
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return string
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set dataPassword
     *
     * @param \DateTime $dataPassword
     *
     * @return Users
     */
    public function setDataPassword($dataPassword)
    {
        $this->dataPassword = $dataPassword;

        return $this;
    }

    /**
     * Get dataPassword
     *
     * @return \DateTime
     */
    public function getDataPassword()
    {
        return $this->dataPassword;
    }

    /**
     * Set incentive
     *
     * @param boolean $incentive
     *
     * @return Users
     */
    public function setIncentive($incentive)
    {
        $this->incentive = $incentive;

        return $this;
    }

    /**
     * Get incentive
     *
     * @return boolean
     */
    public function getIncentive()
    {
        return $this->incentive;
    }

    /**
     * Set gruppoLavoro
     *
     * @param integer $gruppoLavoro
     *
     * @return Users
     */
    public function setGruppoLavoro($gruppoLavoro)
    {
        $this->gruppoLavoro = $gruppoLavoro;

        return $this;
    }

    /**
     * Get gruppoLavoro
     *
     * @return integer
     */
    public function getGruppoLavoro()
    {
        return $this->gruppoLavoro;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lname
     *
     * @param string $lname
     *
     * @return Users
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set contrattoNome
     *
     * @param string $contrattoNome
     *
     * @return Users
     */
    public function setContrattoNome($contrattoNome)
    {
        $this->contrattoNome = $contrattoNome;

        return $this;
    }

    /**
     * Get contrattoNome
     *
     * @return string
     */
    public function getContrattoNome()
    {
        return $this->contrattoNome;
    }

    /**
     * Set contrattoCognome
     *
     * @param string $contrattoCognome
     *
     * @return Users
     */
    public function setContrattoCognome($contrattoCognome)
    {
        $this->contrattoCognome = $contrattoCognome;

        return $this;
    }

    /**
     * Get contrattoCognome
     *
     * @return string
     */
    public function getContrattoCognome()
    {
        return $this->contrattoCognome;
    }

    /**
     * Set noteutente
     *
     * @param string $noteutente
     *
     * @return Users
     */
    public function setNoteutente($noteutente)
    {
        $this->noteutente = $noteutente;

        return $this;
    }

    /**
     * Get noteutente
     *
     * @return string
     */
    public function getNoteutente()
    {
        return $this->noteutente;
    }

    /**
     * Set sesso
     *
     * @param string $sesso
     *
     * @return Users
     */
    public function setSesso($sesso)
    {
        $this->sesso = $sesso;

        return $this;
    }

    /**
     * Get sesso
     *
     * @return string
     */
    public function getSesso()
    {
        return $this->sesso;
    }

    /**
     * Set dataNascita
     *
     * @param \DateTime $dataNascita
     *
     * @return Users
     */
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;

        return $this;
    }

    /**
     * Get dataNascita
     *
     * @return \DateTime
     */
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

    /**
     * Set luogoNascita
     *
     * @param string $luogoNascita
     *
     * @return Users
     */
    public function setLuogoNascita($luogoNascita)
    {
        $this->luogoNascita = $luogoNascita;

        return $this;
    }

    /**
     * Get luogoNascita
     *
     * @return string
     */
    public function getLuogoNascita()
    {
        return $this->luogoNascita;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Users
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set cell
     *
     * @param string $cell
     *
     * @return Users
     */
    public function setCell($cell)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get cell
     *
     * @return string
     */
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set celllavoro
     *
     * @param string $celllavoro
     *
     * @return Users
     */
    public function setCelllavoro($celllavoro)
    {
        $this->celllavoro = $celllavoro;

        return $this;
    }

    /**
     * Get celllavoro
     *
     * @return string
     */
    public function getCelllavoro()
    {
        return $this->celllavoro;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Users
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set emailbox
     *
     * @param string $emailbox
     *
     * @return Users
     */
    public function setEmailbox($emailbox)
    {
        $this->emailbox = $emailbox;

        return $this;
    }

    /**
     * Get emailbox
     *
     * @return string
     */
    public function getEmailbox()
    {
        return $this->emailbox;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return Users
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return Users
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Users
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set regione
     *
     * @param string $regione
     *
     * @return Users
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string
     */
    public function getRegione()
    {
        return $this->regione;
    }

    /**
     * Set nazione
     *
     * @param string $nazione
     *
     * @return Users
     */
    public function setNazione($nazione)
    {
        $this->nazione = $nazione;

        return $this;
    }

    /**
     * Get nazione
     *
     * @return string
     */
    public function getNazione()
    {
        return $this->nazione;
    }

    /**
     * Set codiceFiscale
     *
     * @param string $codiceFiscale
     *
     * @return Users
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;

        return $this;
    }

    /**
     * Get codiceFiscale
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * Set partitaIva
     *
     * @param string $partitaIva
     *
     * @return Users
     */
    public function setPartitaIva($partitaIva)
    {
        $this->partitaIva = $partitaIva;

        return $this;
    }

    /**
     * Get partitaIva
     *
     * @return string
     */
    public function getPartitaIva()
    {
        return $this->partitaIva;
    }

    /**
     * Set disp
     *
     * @param string $disp
     *
     * @return Users
     */
    public function setDisp($disp)
    {
        $this->disp = $disp;

        return $this;
    }

    /**
     * Get disp
     *
     * @return string
     */
    public function getDisp()
    {
        return $this->disp;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Users
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set url1
     *
     * @param string $url1
     *
     * @return Users
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;

        return $this;
    }

    /**
     * Get url1
     *
     * @return string
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * Set url2
     *
     * @param string $url2
     *
     * @return Users
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;

        return $this;
    }

    /**
     * Get url2
     *
     * @return string
     */
    public function getUrl2()
    {
        return $this->url2;
    }

    /**
     * Set url3
     *
     * @param string $url3
     *
     * @return Users
     */
    public function setUrl3($url3)
    {
        $this->url3 = $url3;

        return $this;
    }

    /**
     * Get url3
     *
     * @return string
     */
    public function getUrl3()
    {
        return $this->url3;
    }

    /**
     * Set url4
     *
     * @param string $url4
     *
     * @return Users
     */
    public function setUrl4($url4)
    {
        $this->url4 = $url4;

        return $this;
    }

    /**
     * Get url4
     *
     * @return string
     */
    public function getUrl4()
    {
        return $this->url4;
    }

    /**
     * Set url5
     *
     * @param string $url5
     *
     * @return Users
     */
    public function setUrl5($url5)
    {
        $this->url5 = $url5;

        return $this;
    }

    /**
     * Get url5
     *
     * @return string
     */
    public function getUrl5()
    {
        return $this->url5;
    }

    /**
     * Set url6
     *
     * @param string $url6
     *
     * @return Users
     */
    public function setUrl6($url6)
    {
        $this->url6 = $url6;

        return $this;
    }

    /**
     * Get url6
     *
     * @return string
     */
    public function getUrl6()
    {
        return $this->url6;
    }

    /**
     * Set url7
     *
     * @param string $url7
     *
     * @return Users
     */
    public function setUrl7($url7)
    {
        $this->url7 = $url7;

        return $this;
    }

    /**
     * Get url7
     *
     * @return string
     */
    public function getUrl7()
    {
        return $this->url7;
    }

    /**
     * Set url8
     *
     * @param string $url8
     *
     * @return Users
     */
    public function setUrl8($url8)
    {
        $this->url8 = $url8;

        return $this;
    }

    /**
     * Get url8
     *
     * @return string
     */
    public function getUrl8()
    {
        return $this->url8;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Users
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Users
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateUpdateAt
     *
     * @param \DateTime $dateUpdateAt
     *
     * @return Users
     */
    public function setDateUpdateAt($dateUpdateAt)
    {
        $this->dateUpdateAt = $dateUpdateAt;

        return $this;
    }

    /**
     * Get dateUpdateAt
     *
     * @return \DateTime
     */
    public function getDateUpdateAt()
    {
        return $this->dateUpdateAt;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Users
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set imk
     *
     * @param string $imk
     *
     * @return Users
     */
    public function setImk($imk)
    {
        $this->imk = $imk;

        return $this;
    }

    /**
     * Get imk
     *
     * @return string
     */
    public function getImk()
    {
        return $this->imk;
    }

    /**
     * Set chat
     *
     * @param string $chat
     *
     * @return Users
     */
    public function setChat($chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return string
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Set totaldayclick
     *
     * @param boolean $totaldayclick
     *
     * @return Users
     */
    public function setTotaldayclick($totaldayclick)
    {
        $this->totaldayclick = $totaldayclick;

        return $this;
    }

    /**
     * Get totaldayclick
     *
     * @return boolean
     */
    public function getTotaldayclick()
    {
        return $this->totaldayclick;
    }

    /**
     * Set ferie
     *
     * @param string $ferie
     *
     * @return Users
     */
    public function setFerie($ferie)
    {
        $this->ferie = $ferie;

        return $this;
    }

    /**
     * Get ferie
     *
     * @return string
     */
    public function getFerie()
    {
        return $this->ferie;
    }

    /**
     * Set ckchat
     *
     * @param integer $ckchat
     *
     * @return Users
     */
    public function setCkchat($ckchat)
    {
        $this->ckchat = $ckchat;

        return $this;
    }

    /**
     * Get ckchat
     *
     * @return integer
     */
    public function getCkchat()
    {
        return $this->ckchat;
    }

    /**
     * Set noteferie
     *
     * @param string $noteferie
     *
     * @return Users
     */
    public function setNoteferie($noteferie)
    {
        $this->noteferie = $noteferie;

        return $this;
    }

    /**
     * Get noteferie
     *
     * @return string
     */
    public function getNoteferie()
    {
        return $this->noteferie;
    }

    /**
     * Set inizioferie
     *
     * @param \DateTime $inizioferie
     *
     * @return Users
     */
    public function setInizioferie($inizioferie)
    {
        $this->inizioferie = $inizioferie;

        return $this;
    }

    /**
     * Get inizioferie
     *
     * @return \DateTime
     */
    public function getInizioferie()
    {
        return $this->inizioferie;
    }

    /**
     * Set fineferie
     *
     * @param \DateTime $fineferie
     *
     * @return Users
     */
    public function setFineferie($fineferie)
    {
        $this->fineferie = $fineferie;

        return $this;
    }

    /**
     * Get fineferie
     *
     * @return \DateTime
     */
    public function getFineferie()
    {
        return $this->fineferie;
    }

    /**
     * Set hotel
     *
     * @param string $hotel
     *
     * @return Users
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get hotel
     *
     * @return string
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set banned
     *
     * @param string $banned
     *
     * @return Users
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Get banned
     *
     * @return string
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return Users
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set msn
     *
     * @param string $msn
     *
     * @return Users
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Users
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Users
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set emailpersonale
     *
     * @param string $emailpersonale
     *
     * @return Users
     */
    public function setEmailpersonale($emailpersonale)
    {
        $this->emailpersonale = $emailpersonale;

        return $this;
    }

    /**
     * Get emailpersonale
     *
     * @return string
     */
    public function getEmailpersonale()
    {
        return $this->emailpersonale;
    }

    /**
     * Set clearPasswd
     *
     * @param string $clearPasswd
     *
     * @return Users
     */
    public function setClearPasswd($clearPasswd)
    {
        $this->clearPasswd = $clearPasswd;

        return $this;
    }

    /**
     * Get clearPasswd
     *
     * @return string
     */
    public function getClearPasswd()
    {
        return $this->clearPasswd;
    }

    /**
     * Set imkPasswd
     *
     * @param string $imkPasswd
     *
     * @return Users
     */
    public function setImkPasswd($imkPasswd)
    {
        $this->imkPasswd = $imkPasswd;

        return $this;
    }

    /**
     * Get imkPasswd
     *
     * @return string
     */
    public function getImkPasswd()
    {
        return $this->imkPasswd;
    }

    /**
     * Set imkAttivo
     *
     * @param string $imkAttivo
     *
     * @return Users
     */
    public function setImkAttivo($imkAttivo)
    {
        $this->imkAttivo = $imkAttivo;

        return $this;
    }

    /**
     * Get imkAttivo
     *
     * @return string
     */
    public function getImkAttivo()
    {
        return $this->imkAttivo;
    }

    /**
     * Set mailAttivazione
     *
     * @param string $mailAttivazione
     *
     * @return Users
     */
    public function setMailAttivazione($mailAttivazione)
    {
        $this->mailAttivazione = $mailAttivazione;

        return $this;
    }

    /**
     * Get mailAttivazione
     *
     * @return string
     */
    public function getMailAttivazione()
    {
        return $this->mailAttivazione;
    }

    /**
     * Set vuoto
     *
     * @param string $vuoto
     *
     * @return Users
     */
    public function setVuoto($vuoto)
    {
        $this->vuoto = $vuoto;

        return $this;
    }

    /**
     * Get vuoto
     *
     * @return string
     */
    public function getVuoto()
    {
        return $this->vuoto;
    }

    /**
     * Set gid
     *
     * @param integer $gid
     *
     * @return Users
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return integer
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set idcom
     *
     * @param integer $idcom
     *
     * @return Users
     */
    public function setIdcom($idcom)
    {
        $this->idcom = $idcom;

        return $this;
    }

    /**
     * Get idcom
     *
     * @return integer
     */
    public function getIdcom()
    {
        return $this->idcom;
    }

    /**
     * Set promotoreriferimento
     *
     * @param boolean $promotoreriferimento
     *
     * @return Users
     */
    public function setPromotoreriferimento($promotoreriferimento)
    {
        $this->promotoreriferimento = $promotoreriferimento;

        return $this;
    }

    /**
     * Get promotoreriferimento
     *
     * @return boolean
     */
    public function getPromotoreriferimento()
    {
        return $this->promotoreriferimento;
    }

    /**
     * Set strutture
     *
     * @param integer $strutture
     *
     * @return Users
     */
    public function setStrutture($strutture)
    {
        $this->strutture = $strutture;

        return $this;
    }

    /**
     * Get strutture
     *
     * @return integer
     */
    public function getStrutture()
    {
        return $this->strutture;
    }

    /**
     * Set redazionali
     *
     * @param integer $redazionali
     *
     * @return Users
     */
    public function setRedazionali($redazionali)
    {
        $this->redazionali = $redazionali;

        return $this;
    }

    /**
     * Get redazionali
     *
     * @return integer
     */
    public function getRedazionali()
    {
        return $this->redazionali;
    }

    /**
     * Set gestionecampagne
     *
     * @param boolean $gestionecampagne
     *
     * @return Users
     */
    public function setGestionecampagne($gestionecampagne)
    {
        $this->gestionecampagne = $gestionecampagne;

        return $this;
    }

    /**
     * Get gestionecampagne
     *
     * @return boolean
     */
    public function getGestionecampagne()
    {
        return $this->gestionecampagne;
    }

    /**
     * Set latitudine
     *
     * @param float $latitudine
     *
     * @return Users
     */
    public function setLatitudine($latitudine)
    {
        $this->latitudine = $latitudine;

        return $this;
    }

    /**
     * Get latitudine
     *
     * @return float
     */
    public function getLatitudine()
    {
        return $this->latitudine;
    }

    /**
     * Set longitudine
     *
     * @param float $longitudine
     *
     * @return Users
     */
    public function setLongitudine($longitudine)
    {
        $this->longitudine = $longitudine;

        return $this;
    }

    /**
     * Get longitudine
     *
     * @return float
     */
    public function getLongitudine()
    {
        return $this->longitudine;
    }

    /**
     * Set adwords
     *
     * @param string $adwords
     *
     * @return Users
     */
    public function setAdwords($adwords)
    {
        $this->adwords = $adwords;

        return $this;
    }

    /**
     * Get adwords
     *
     * @return string
     */
    public function getAdwords()
    {
        return $this->adwords;
    }

    /**
     * Set adwordsLabel
     *
     * @param string $adwordsLabel
     *
     * @return Users
     */
    public function setAdwordsLabel($adwordsLabel)
    {
        $this->adwordsLabel = $adwordsLabel;

        return $this;
    }

    /**
     * Get adwordsLabel
     *
     * @return string
     */
    public function getAdwordsLabel()
    {
        return $this->adwordsLabel;
    }

    /**
     * Set analytics
     *
     * @param string $analytics
     *
     * @return Users
     */
    public function setAnalytics($analytics)
    {
        $this->analytics = $analytics;

        return $this;
    }

    /**
     * Get analytics
     *
     * @return string
     */
    public function getAnalytics()
    {
        return $this->analytics;
    }

    /**
     * Set chisonoita
     *
     * @param string $chisonoita
     *
     * @return Users
     */
    public function setChisonoita($chisonoita)
    {
        $this->chisonoita = $chisonoita;

        return $this;
    }

    /**
     * Get chisonoita
     *
     * @return string
     */
    public function getChisonoita()
    {
        return $this->chisonoita;
    }

    /**
     * Set provvigioniaves
     *
     * @param string $provvigioniaves
     *
     * @return Users
     */
    public function setProvvigioniaves($provvigioniaves)
    {
        $this->provvigioniaves = $provvigioniaves;

        return $this;
    }

    /**
     * Get provvigioniaves
     *
     * @return string
     */
    public function getProvvigioniaves()
    {
        return $this->provvigioniaves;
    }

    /**
     * Set idaves
     *
     * @param string $idaves
     *
     * @return Users
     */
    public function setIdaves($idaves)
    {
        $this->idaves = $idaves;

        return $this;
    }

    /**
     * Get idaves
     *
     * @return string
     */
    public function getIdaves()
    {
        return $this->idaves;
    }

    /**
     * Set linguaPannelli
     *
     * @param string $linguaPannelli
     *
     * @return Users
     */
    public function setLinguaPannelli($linguaPannelli)
    {
        $this->linguaPannelli = $linguaPannelli;

        return $this;
    }

    /**
     * Get linguaPannelli
     *
     * @return string
     */
    public function getLinguaPannelli()
    {
        return $this->linguaPannelli;
    }

    /**
     * Set iscrittiNewsletterRiassegnati
     *
     * @param \DateTime $iscrittiNewsletterRiassegnati
     *
     * @return Users
     */
    public function setIscrittiNewsletterRiassegnati($iscrittiNewsletterRiassegnati)
    {
        $this->iscrittiNewsletterRiassegnati = $iscrittiNewsletterRiassegnati;

        return $this;
    }

    /**
     * Get iscrittiNewsletterRiassegnati
     *
     * @return \DateTime
     */
    public function getIscrittiNewsletterRiassegnati()
    {
        return $this->iscrittiNewsletterRiassegnati;
    }

    /**
     * Set limiteProdottiMarketplace
     *
     * @param integer $limiteProdottiMarketplace
     *
     * @return Users
     */
    public function setLimiteProdottiMarketplace($limiteProdottiMarketplace)
    {
        $this->limiteProdottiMarketplace = $limiteProdottiMarketplace;

        return $this;
    }

    /**
     * Get limiteProdottiMarketplace
     *
     * @return integer
     */
    public function getLimiteProdottiMarketplace()
    {
        return $this->limiteProdottiMarketplace;
    }

    /**
     * Set tipocontrattoPto
     *
     * @param string $tipocontrattoPto
     *
     * @return Users
     */
    public function setTipocontrattoPto($tipocontrattoPto)
    {
        $this->tipocontrattoPto = $tipocontrattoPto;

        return $this;
    }

    /**
     * Get tipocontrattoPto
     *
     * @return string
     */
    public function getTipocontrattoPto()
    {
        return $this->tipocontrattoPto;
    }

    /**
     * Set maToupdate
     *
     * @param boolean $maToupdate
     *
     * @return Users
     */
    public function setMaToupdate($maToupdate)
    {
        $this->maToupdate = $maToupdate;

        return $this;
    }

    /**
     * Get maToupdate
     *
     * @return boolean
     */
    public function getMaToupdate()
    {
        return $this->maToupdate;
    }

    /**
     * Set multiagenziaId
     *
     * @param integer $multiagenziaId
     *
     * @return Users
     */
    public function setMultiagenziaId($multiagenziaId)
    {
        $this->multiagenziaId = $multiagenziaId;

        return $this;
    }

    /**
     * Get multiagenziaId
     *
     * @return integer
     */
    public function getMultiagenziaId()
    {
        return $this->multiagenziaId;
    }

    /**
     * Set maSincronizzatoAl
     *
     * @param \DateTime $maSincronizzatoAl
     *
     * @return Users
     */
    public function setMaSincronizzatoAl($maSincronizzatoAl)
    {
        $this->maSincronizzatoAl = $maSincronizzatoAl;

        return $this;
    }

    /**
     * Get maSincronizzatoAl
     *
     * @return \DateTime
     */
    public function getMaSincronizzatoAl()
    {
        return $this->maSincronizzatoAl;
    }

    /**
     * Set nominativo
     *
     * @param string $nominativo
     *
     * @return Users
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /*
     * Create a random string
     * @author  XEWeb <>
     * @param $length the length of the string to create
     * @return $str the string
     */
    protected function randomString($length = 6) 
    {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    public function __construct() 
    {
        parent::__construct();

        $idUser = $this->randomString();
        $this->setIduser($idUser);

        $date = new DateTime();
        $this->setDataPassword($date);
        $this->setDate($date);
        $this->setDateUpdateAt($date);
        $date = new DateTime('1900-01-01');
        $this->setDataNascita($date);
        $this->setInizioferie($date);
        $this->setFineferie($date);
    }
}
