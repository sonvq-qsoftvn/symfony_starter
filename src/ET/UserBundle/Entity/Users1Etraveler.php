<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1Etraveler
 *
 * @ORM\Table(name="users1_etraveler", indexes={@ORM\Index(name="users1_id", columns={"users1_id"}), @ORM\Index(name="username", columns={"username"})})
 * @ORM\Entity
 */
class Users1Etraveler
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_nome", type="string", length=255, nullable=false)
     */
    private $contrattoNome;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_cognome", type="string", length=255, nullable=false)
     */
    private $contrattoCognome;

    /**
     * @var integer
     *
     * @ORM\Column(name="users1_id", type="integer", nullable=false)
     */
    private $users1Id = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_scadenza", type="datetime", nullable=true)
     */
    private $dataScadenza;

    /**
     * @var string
     *
     * @ORM\Column(name="tipologia", type="string", length=20, nullable=false)
     */
    private $tipologia;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua", type="string", length=5, nullable=false)
     */
    private $lingua = 'it_IT';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ferie", type="string", length=15, nullable=false)
     */
    private $ferie;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotore_id", type="smallint", nullable=false)
     */
    private $promotoreId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="cap", type="string", length=5, nullable=false)
     */
    private $cap;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=25, nullable=false)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=4, nullable=false)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="nazione", type="string", length=3, nullable=false)
     */
    private $nazione;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=50, nullable=false)
     */
    private $cell;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=16, nullable=false)
     */
    private $codiceFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="partita_iva", type="string", length=13, nullable=false)
     */
    private $partitaIva;

    /**
     * @var string
     *
     * @ORM\Column(name="pagamento_modo", type="string", length=25, nullable=false)
     */
    private $pagamentoModo;

    /**
     * @var string
     *
     * @ORM\Column(name="pagamento_descrizione", type="text", length=65535, nullable=false)
     */
    private $pagamentoDescrizione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pagamento_privacy_accettata", type="date", nullable=true)
     */
    private $pagamentoPrivacyAccettata;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
