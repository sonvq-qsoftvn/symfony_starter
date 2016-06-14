<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersHistory
 *
 * @ORM\Table(name="users_history", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="ferie", columns={"ferie"})})
 * @ORM\Entity
 */
class UsersHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=15, nullable=false)
     */
    private $iduser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=120, nullable=false)
     */
    private $password = '';

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
     * @ORM\Column(name="name", type="string", length=35, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=50, nullable=false)
     */
    private $lname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_nome", type="string", length=35, nullable=false)
     */
    private $contrattoNome = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_cognome", type="string", length=50, nullable=false)
     */
    private $contrattoCognome = '';

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
     * @ORM\Column(name="tel", type="string", length=15, nullable=false)
     */
    private $tel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=50, nullable=false)
     */
    private $cell = '';

    /**
     * @var string
     *
     * @ORM\Column(name="celllavoro", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="msn", type="string", length=35, nullable=false)
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
     * @ORM\Column(name="adwords", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="history_action", type="string", length=10, nullable=true)
     */
    private $historyAction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="history_action_at", type="datetime", nullable=true)
     */
    private $historyActionAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return UsersHistory
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
     * Set username
     *
     * @param string $username
     *
     * @return UsersHistory
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return UsersHistory
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dataPassword
     *
     * @param \DateTime $dataPassword
     *
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * Set email
     *
     * @param string $email
     *
     * @return UsersHistory
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * @return UsersHistory
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
     * Set multiagenziaId
     *
     * @param integer $multiagenziaId
     *
     * @return UsersHistory
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
     * @return UsersHistory
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
     * Set historyAction
     *
     * @param string $historyAction
     *
     * @return UsersHistory
     */
    public function setHistoryAction($historyAction)
    {
        $this->historyAction = $historyAction;

        return $this;
    }

    /**
     * Get historyAction
     *
     * @return string
     */
    public function getHistoryAction()
    {
        return $this->historyAction;
    }

    /**
     * Set historyActionAt
     *
     * @param \DateTime $historyActionAt
     *
     * @return UsersHistory
     */
    public function setHistoryActionAt($historyActionAt)
    {
        $this->historyActionAt = $historyActionAt;

        return $this;
    }

    /**
     * Get historyActionAt
     *
     * @return \DateTime
     */
    public function getHistoryActionAt()
    {
        return $this->historyActionAt;
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
}
