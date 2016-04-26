<?php

namespace ET\ETGestBundle\Entity;

/**
 * Anagrafiche
 */
class Anagrafiche
{
    /**
     * @var \DateTime
     */
    private $datacreazione = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $datanascita = '0000-00-00';

    /**
     * @var string
     */
    private $cognome = '';

    /**
     * @var string
     */
    private $nome = '';

    /**
     * @var string
     */
    private $sesso = 'M';

    /**
     * @var string
     */
    private $codfisc = '';

    /**
     * @var string
     */
    private $telcasa = '';

    /**
     * @var string
     */
    private $cell = '';

    /**
     * @var string
     */
    private $telluff = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $email2 = '';

    /**
     * @var string
     */
    private $indirizzo = '';

    /**
     * @var string
     */
    private $numcivico = '';

    /**
     * @var string
     */
    private $cap = '';

    /**
     * @var string
     */
    private $comune = '';

    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $nazione = '';

    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var integer
     */
    private $codpromotoreprec = '0';

    /**
     * @var string
     */
    private $noteCliente;

    /**
     * @var boolean
     */
    private $temporaneo = '0';

    /**
     * @var string
     */
    private $tipoanagrafica = '';

    /**
     * @var string
     */
    private $ragionesociale = '';

    /**
     * @var string
     */
    private $partitaiva = '';

    /**
     * @var string
     */
    private $luogonascita = '';

    /**
     * @var string
     */
    private $indirizzoazienda = '';

    /**
     * @var integer
     */
    private $codpromotoreproprietario = '0';

    /**
     * @var boolean
     */
    private $provvigioneappaltocliente = '0';

    /**
     * @var \DateTime
     */
    private $datamodifica;

    /**
     * @var string
     */
    private $lingua = 'it_IT';

    /**
     * @var boolean
     */
    private $updated = '0';

    /**
     * @var string
     */
    private $codicecliente = '';

    /**
     * @var string
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

