<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anagrafiche
 *
 * @ORM\Table(name="anagrafiche", indexes={@ORM\Index(name="email", columns={"email"}), @ORM\Index(name="codPromotore", columns={"codPromotore"}), @ORM\Index(name="email2", columns={"email2"}), @ORM\Index(name="telCasa", columns={"telCasa"}), @ORM\Index(name="cell", columns={"cell"}), @ORM\Index(name="cognome", columns={"cognome"}), @ORM\Index(name="tellUff", columns={"tellUff"}), @ORM\Index(name="fax", columns={"fax"})})
 * @ORM\Entity
 */
class Anagrafiche
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=false)
     */
    private $datacreazione = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataNascita", type="date", nullable=true)
     */
    private $datanascita = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=50, nullable=false)
     */
    private $cognome = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=30, nullable=false)
     */
    private $nome = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sesso", type="string", nullable=false)
     */
    private $sesso = 'M';

    /**
     * @var string
     *
     * @ORM\Column(name="codFisc", type="string", length=16, nullable=false)
     */
    private $codfisc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telCasa", type="string", length=20, nullable=false)
     */
    private $telcasa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=20, nullable=false)
     */
    private $cell = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tellUff", type="string", length=20, nullable=false)
     */
    private $telluff = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=100, nullable=false)
     */
    private $email2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="string", length=100, nullable=false)
     */
    private $indirizzo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="numCivico", type="string", length=10, nullable=false)
     */
    private $numcivico = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cap", type="string", length=5, nullable=false)
     */
    private $cap = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comune", type="string", length=100, nullable=false)
     */
    private $comune = '';

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=false)
     */
    private $provincia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nazione", type="string", length=3, nullable=false)
     */
    private $nazione = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer", nullable=false)
     */
    private $codpromotore = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotorePrec", type="integer", nullable=false)
     */
    private $codpromotoreprec = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="note_cliente", type="text", length=65535, nullable=false)
     */
    private $noteCliente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="temporaneo", type="boolean", nullable=false)
     */
    private $temporaneo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoAnagrafica", type="string", length=1, nullable=false)
     */
    private $tipoanagrafica = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ragioneSociale", type="string", length=100, nullable=false)
     */
    private $ragionesociale = '';

    /**
     * @var string
     *
     * @ORM\Column(name="partitaIva", type="string", length=13, nullable=false)
     */
    private $partitaiva = '';

    /**
     * @var string
     *
     * @ORM\Column(name="luogoNascita", type="string", length=100, nullable=false)
     */
    private $luogonascita = '';

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzoAzienda", type="string", length=100, nullable=false)
     */
    private $indirizzoazienda = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreProprietario", type="integer", nullable=false)
     */
    private $codpromotoreproprietario = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="provvigioneAppaltoCliente", type="boolean", nullable=false)
     */
    private $provvigioneappaltocliente = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataModifica", type="datetime", nullable=true)
     */
    private $datamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua", type="string", length=5, nullable=false)
     */
    private $lingua = 'it_IT';

    /**
     * @var boolean
     *
     * @ORM\Column(name="updated", type="boolean", nullable=false)
     */
    private $updated = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codiceCliente", type="string", length=12, nullable=false)
     */
    private $codicecliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="id_anagrafica", type="string", length=18)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnagrafica;



    /**
     * Set datacreazione
     *
     * @param \DateTime $datacreazione
     *
     * @return Anagrafiche
     */
    public function setDatacreazione($datacreazione)
    {
        $this->datacreazione = $datacreazione;

        return $this;
    }

    /**
     * Get datacreazione
     *
     * @return \DateTime
     */
    public function getDatacreazione()
    {
        return $this->datacreazione;
    }

    /**
     * Set datanascita
     *
     * @param \DateTime $datanascita
     *
     * @return Anagrafiche
     */
    public function setDatanascita($datanascita)
    {
        $this->datanascita = $datanascita;

        return $this;
    }

    /**
     * Get datanascita
     *
     * @return \DateTime
     */
    public function getDatanascita()
    {
        return $this->datanascita;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Anagrafiche
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Anagrafiche
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set sesso
     *
     * @param string $sesso
     *
     * @return Anagrafiche
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
     * Set codfisc
     *
     * @param string $codfisc
     *
     * @return Anagrafiche
     */
    public function setCodfisc($codfisc)
    {
        $this->codfisc = $codfisc;

        return $this;
    }

    /**
     * Get codfisc
     *
     * @return string
     */
    public function getCodfisc()
    {
        return $this->codfisc;
    }

    /**
     * Set telcasa
     *
     * @param string $telcasa
     *
     * @return Anagrafiche
     */
    public function setTelcasa($telcasa)
    {
        $this->telcasa = $telcasa;

        return $this;
    }

    /**
     * Get telcasa
     *
     * @return string
     */
    public function getTelcasa()
    {
        return $this->telcasa;
    }

    /**
     * Set cell
     *
     * @param string $cell
     *
     * @return Anagrafiche
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
     * Set telluff
     *
     * @param string $telluff
     *
     * @return Anagrafiche
     */
    public function setTelluff($telluff)
    {
        $this->telluff = $telluff;

        return $this;
    }

    /**
     * Get telluff
     *
     * @return string
     */
    public function getTelluff()
    {
        return $this->telluff;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Anagrafiche
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Anagrafiche
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
     * Set email2
     *
     * @param string $email2
     *
     * @return Anagrafiche
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return Anagrafiche
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set numcivico
     *
     * @param string $numcivico
     *
     * @return Anagrafiche
     */
    public function setNumcivico($numcivico)
    {
        $this->numcivico = $numcivico;

        return $this;
    }

    /**
     * Get numcivico
     *
     * @return string
     */
    public function getNumcivico()
    {
        return $this->numcivico;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return Anagrafiche
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
     * Set comune
     *
     * @param string $comune
     *
     * @return Anagrafiche
     */
    public function setComune($comune)
    {
        $this->comune = $comune;

        return $this;
    }

    /**
     * Get comune
     *
     * @return string
     */
    public function getComune()
    {
        return $this->comune;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Anagrafiche
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
     * @return Anagrafiche
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
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return Anagrafiche
     */
    public function setCodpromotore($codpromotore)
    {
        $this->codpromotore = $codpromotore;

        return $this;
    }

    /**
     * Get codpromotore
     *
     * @return integer
     */
    public function getCodpromotore()
    {
        return $this->codpromotore;
    }

    /**
     * Set codpromotoreprec
     *
     * @param integer $codpromotoreprec
     *
     * @return Anagrafiche
     */
    public function setCodpromotoreprec($codpromotoreprec)
    {
        $this->codpromotoreprec = $codpromotoreprec;

        return $this;
    }

    /**
     * Get codpromotoreprec
     *
     * @return integer
     */
    public function getCodpromotoreprec()
    {
        return $this->codpromotoreprec;
    }

    /**
     * Set noteCliente
     *
     * @param string $noteCliente
     *
     * @return Anagrafiche
     */
    public function setNoteCliente($noteCliente)
    {
        $this->noteCliente = $noteCliente;

        return $this;
    }

    /**
     * Get noteCliente
     *
     * @return string
     */
    public function getNoteCliente()
    {
        return $this->noteCliente;
    }

    /**
     * Set temporaneo
     *
     * @param boolean $temporaneo
     *
     * @return Anagrafiche
     */
    public function setTemporaneo($temporaneo)
    {
        $this->temporaneo = $temporaneo;

        return $this;
    }

    /**
     * Get temporaneo
     *
     * @return boolean
     */
    public function getTemporaneo()
    {
        return $this->temporaneo;
    }

    /**
     * Set tipoanagrafica
     *
     * @param string $tipoanagrafica
     *
     * @return Anagrafiche
     */
    public function setTipoanagrafica($tipoanagrafica)
    {
        $this->tipoanagrafica = $tipoanagrafica;

        return $this;
    }

    /**
     * Get tipoanagrafica
     *
     * @return string
     */
    public function getTipoanagrafica()
    {
        return $this->tipoanagrafica;
    }

    /**
     * Set ragionesociale
     *
     * @param string $ragionesociale
     *
     * @return Anagrafiche
     */
    public function setRagionesociale($ragionesociale)
    {
        $this->ragionesociale = $ragionesociale;

        return $this;
    }

    /**
     * Get ragionesociale
     *
     * @return string
     */
    public function getRagionesociale()
    {
        return $this->ragionesociale;
    }

    /**
     * Set partitaiva
     *
     * @param string $partitaiva
     *
     * @return Anagrafiche
     */
    public function setPartitaiva($partitaiva)
    {
        $this->partitaiva = $partitaiva;

        return $this;
    }

    /**
     * Get partitaiva
     *
     * @return string
     */
    public function getPartitaiva()
    {
        return $this->partitaiva;
    }

    /**
     * Set luogonascita
     *
     * @param string $luogonascita
     *
     * @return Anagrafiche
     */
    public function setLuogonascita($luogonascita)
    {
        $this->luogonascita = $luogonascita;

        return $this;
    }

    /**
     * Get luogonascita
     *
     * @return string
     */
    public function getLuogonascita()
    {
        return $this->luogonascita;
    }

    /**
     * Set indirizzoazienda
     *
     * @param string $indirizzoazienda
     *
     * @return Anagrafiche
     */
    public function setIndirizzoazienda($indirizzoazienda)
    {
        $this->indirizzoazienda = $indirizzoazienda;

        return $this;
    }

    /**
     * Get indirizzoazienda
     *
     * @return string
     */
    public function getIndirizzoazienda()
    {
        return $this->indirizzoazienda;
    }

    /**
     * Set codpromotoreproprietario
     *
     * @param integer $codpromotoreproprietario
     *
     * @return Anagrafiche
     */
    public function setCodpromotoreproprietario($codpromotoreproprietario)
    {
        $this->codpromotoreproprietario = $codpromotoreproprietario;

        return $this;
    }

    /**
     * Get codpromotoreproprietario
     *
     * @return integer
     */
    public function getCodpromotoreproprietario()
    {
        return $this->codpromotoreproprietario;
    }

    /**
     * Set provvigioneappaltocliente
     *
     * @param boolean $provvigioneappaltocliente
     *
     * @return Anagrafiche
     */
    public function setProvvigioneappaltocliente($provvigioneappaltocliente)
    {
        $this->provvigioneappaltocliente = $provvigioneappaltocliente;

        return $this;
    }

    /**
     * Get provvigioneappaltocliente
     *
     * @return boolean
     */
    public function getProvvigioneappaltocliente()
    {
        return $this->provvigioneappaltocliente;
    }

    /**
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return Anagrafiche
     */
    public function setDatamodifica($datamodifica)
    {
        $this->datamodifica = $datamodifica;

        return $this;
    }

    /**
     * Get datamodifica
     *
     * @return \DateTime
     */
    public function getDatamodifica()
    {
        return $this->datamodifica;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return Anagrafiche
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
     * Set updated
     *
     * @param boolean $updated
     *
     * @return Anagrafiche
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return boolean
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set codicecliente
     *
     * @param string $codicecliente
     *
     * @return Anagrafiche
     */
    public function setCodicecliente($codicecliente)
    {
        $this->codicecliente = $codicecliente;

        return $this;
    }

    /**
     * Get codicecliente
     *
     * @return string
     */
    public function getCodicecliente()
    {
        return $this->codicecliente;
    }

    /**
     * Get idAnagrafica
     *
     * @return string
     */
    public function getIdAnagrafica()
    {
        return $this->idAnagrafica;
    }
}
