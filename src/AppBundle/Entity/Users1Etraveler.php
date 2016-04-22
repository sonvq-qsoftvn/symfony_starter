<?php

namespace AppBundle\Entity;

/**
 * Users1Etraveler
 */
class Users1Etraveler
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $contrattoNome;

    /**
     * @var string
     */
    private $contrattoCognome;

    /**
     * @var integer
     */
    private $users1Id = '0';

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $dataScadenza;

    /**
     * @var string
     */
    private $tipologia;

    /**
     * @var string
     */
    private $lingua = 'it_IT';

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $ferie;

    /**
     * @var integer
     */
    private $promotoreId = '0';

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $provincia;

    /**
     * @var string
     */
    private $nazione;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $cell;

    /**
     * @var string
     */
    private $codiceFiscale;

    /**
     * @var string
     */
    private $partitaIva;

    /**
     * @var string
     */
    private $pagamentoModo;

    /**
     * @var string
     */
    private $pagamentoDescrizione;

    /**
     * @var \DateTime
     */
    private $pagamentoPrivacyAccettata;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users1Etraveler
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
     * @return Users1Etraveler
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
     * Set contrattoNome
     *
     * @param string $contrattoNome
     *
     * @return Users1Etraveler
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
     * @return Users1Etraveler
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
     * Set users1Id
     *
     * @param integer $users1Id
     *
     * @return Users1Etraveler
     */
    public function setUsers1Id($users1Id)
    {
        $this->users1Id = $users1Id;

        return $this;
    }

    /**
     * Get users1Id
     *
     * @return integer
     */
    public function getUsers1Id()
    {
        return $this->users1Id;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Users1Etraveler
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set dataScadenza
     *
     * @param \DateTime $dataScadenza
     *
     * @return Users1Etraveler
     */
    public function setDataScadenza($dataScadenza)
    {
        $this->dataScadenza = $dataScadenza;

        return $this;
    }

    /**
     * Get dataScadenza
     *
     * @return \DateTime
     */
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }

    /**
     * Set tipologia
     *
     * @param string $tipologia
     *
     * @return Users1Etraveler
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return string
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return Users1Etraveler
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users1Etraveler
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
     * Set ferie
     *
     * @param string $ferie
     *
     * @return Users1Etraveler
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
     * Set promotoreId
     *
     * @param integer $promotoreId
     *
     * @return Users1Etraveler
     */
    public function setPromotoreId($promotoreId)
    {
        $this->promotoreId = $promotoreId;

        return $this;
    }

    /**
     * Get promotoreId
     *
     * @return integer
     */
    public function getPromotoreId()
    {
        return $this->promotoreId;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Users1Etraveler
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
     * Set cap
     *
     * @param string $cap
     *
     * @return Users1Etraveler
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
     * Set town
     *
     * @param string $town
     *
     * @return Users1Etraveler
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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Users1Etraveler
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
     * Set nazione
     *
     * @param string $nazione
     *
     * @return Users1Etraveler
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
     * Set tel
     *
     * @param string $tel
     *
     * @return Users1Etraveler
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
     * @return Users1Etraveler
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
     * Set codiceFiscale
     *
     * @param string $codiceFiscale
     *
     * @return Users1Etraveler
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
     * @return Users1Etraveler
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
     * Set pagamentoModo
     *
     * @param string $pagamentoModo
     *
     * @return Users1Etraveler
     */
    public function setPagamentoModo($pagamentoModo)
    {
        $this->pagamentoModo = $pagamentoModo;

        return $this;
    }

    /**
     * Get pagamentoModo
     *
     * @return string
     */
    public function getPagamentoModo()
    {
        return $this->pagamentoModo;
    }

    /**
     * Set pagamentoDescrizione
     *
     * @param string $pagamentoDescrizione
     *
     * @return Users1Etraveler
     */
    public function setPagamentoDescrizione($pagamentoDescrizione)
    {
        $this->pagamentoDescrizione = $pagamentoDescrizione;

        return $this;
    }

    /**
     * Get pagamentoDescrizione
     *
     * @return string
     */
    public function getPagamentoDescrizione()
    {
        return $this->pagamentoDescrizione;
    }

    /**
     * Set pagamentoPrivacyAccettata
     *
     * @param \DateTime $pagamentoPrivacyAccettata
     *
     * @return Users1Etraveler
     */
    public function setPagamentoPrivacyAccettata($pagamentoPrivacyAccettata)
    {
        $this->pagamentoPrivacyAccettata = $pagamentoPrivacyAccettata;

        return $this;
    }

    /**
     * Get pagamentoPrivacyAccettata
     *
     * @return \DateTime
     */
    public function getPagamentoPrivacyAccettata()
    {
        return $this->pagamentoPrivacyAccettata;
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
