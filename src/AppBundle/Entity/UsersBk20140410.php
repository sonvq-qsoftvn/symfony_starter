<?php

namespace AppBundle\Entity;

/**
 * UsersBk20140410
 */
class UsersBk20140410
{
    /**
     * @var string
     */
    private $iduser = '';

    /**
     * @var string
     */
    private $username = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var \DateTime
     */
    private $dataPassword = '0000-00-00';

    /**
     * @var boolean
     */
    private $incentive = '0';

    /**
     * @var integer
     */
    private $gruppoLavoro = '0';

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $lname = '';

    /**
     * @var string
     */
    private $contrattoNome = '';

    /**
     * @var string
     */
    private $contrattoCognome = '';

    /**
     * @var string
     */
    private $noteutente = '';

    /**
     * @var string
     */
    private $sesso = '';

    /**
     * @var \DateTime
     */
    private $dataNascita;

    /**
     * @var string
     */
    private $luogoNascita = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var string
     */
    private $cell = '';

    /**
     * @var string
     */
    private $celllavoro;

    /**
     * @var string
     */
    private $address = '';

    /**
     * @var string
     */
    private $emailbox = '';

    /**
     * @var string
     */
    private $town = '';

    /**
     * @var string
     */
    private $cap = '';

    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $regione = '';

    /**
     * @var string
     */
    private $nazione = 'ITA';

    /**
     * @var string
     */
    private $codiceFiscale = '';

    /**
     * @var string
     */
    private $partitaIva = '';

    /**
     * @var string
     */
    private $disp = '';

    /**
     * @var string
     */
    private $photo = '';

    /**
     * @var string
     */
    private $url1 = '';

    /**
     * @var string
     */
    private $url2 = '';

    /**
     * @var string
     */
    private $url3 = '';

    /**
     * @var string
     */
    private $url4 = '';

    /**
     * @var string
     */
    private $url5 = '';

    /**
     * @var string
     */
    private $url6 = '';

    /**
     * @var string
     */
    private $url7 = '';

    /**
     * @var string
     */
    private $url8 = '';

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dateUpdateAt;

    /**
     * @var string
     */
    private $status = '';

    /**
     * @var string
     */
    private $imk = '0';

    /**
     * @var string
     */
    private $chat = '';

    /**
     * @var boolean
     */
    private $totaldayclick = '0';

    /**
     * @var string
     */
    private $ferie = '';

    /**
     * @var integer
     */
    private $ckchat = '0';

    /**
     * @var string
     */
    private $noteferie = '';

    /**
     * @var \DateTime
     */
    private $inizioferie = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $fineferie = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $hotel = '';

    /**
     * @var string
     */
    private $banned = 'si';

    /**
     * @var string
     */
    private $skype = '';

    /**
     * @var string
     */
    private $msn = '';

    /**
     * @var string
     */
    private $facebook = '';

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $emailpersonale = '';

    /**
     * @var string
     */
    private $clearPasswd = '';

    /**
     * @var string
     */
    private $imkPasswd = '';

    /**
     * @var string
     */
    private $imkAttivo;

    /**
     * @var string
     */
    private $mailAttivazione = '';

    /**
     * @var string
     */
    private $vuoto = '';

    /**
     * @var integer
     */
    private $gid = '6';

    /**
     * @var integer
     */
    private $idcom = '0';

    /**
     * @var boolean
     */
    private $promotoreriferimento = '0';

    /**
     * @var integer
     */
    private $strutture = '0';

    /**
     * @var integer
     */
    private $redazionali = '0';

    /**
     * @var boolean
     */
    private $gestionecampagne = '0';

    /**
     * @var float
     */
    private $latitudine = '0';

    /**
     * @var float
     */
    private $longitudine = '0';

    /**
     * @var string
     */
    private $adwords = '';

    /**
     * @var string
     */
    private $adwordsLabel;

    /**
     * @var string
     */
    private $analytics = '';

    /**
     * @var string
     */
    private $chisonoita;

    /**
     * @var string
     */
    private $provvigioniaves = '';

    /**
     * @var string
     */
    private $idaves = '';

    /**
     * @var string
     */
    private $linguaPannelli = 'it_IT';

    /**
     * @var \DateTime
     */
    private $iscrittiNewsletterRiassegnati;

    /**
     * @var integer
     */
    private $limiteProdottiMarketplace = '5';

    /**
     * @var string
     */
    private $tipocontrattoPto = '';

    /**
     * @var boolean
     */
    private $maToupdate = '0';

    /**
     * @var integer
     */
    private $multiagenziaId;

    /**
     * @var \DateTime
     */
    private $maSincronizzatoAl;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * @return UsersBk20140410
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
