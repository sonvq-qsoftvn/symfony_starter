<?php

namespace AppBundle\Entity;

/**
 * AnagraficheV2Old
 */
class AnagraficheV2Old
{
    /**
     * @var \DateTime
     */
    private $datanascita;

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
    private $tipoanagrafica = 'P';

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
     * @var integer
     */
    private $provvigioneappaltocliente = '0';

    /**
     * @var string
     */
    private $lingua = 'it_IT';

    /**
     * @var \DateTime
     */
    private $datacreazione;

    /**
     * @var \DateTime
     */
    private $datamodifica;

    /**
     * @var string
     */
    private $idAnagrafica;


    /**
     * Set datanascita
     *
     * @param \DateTime $datanascita
     *
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @return AnagraficheV2Old
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
     * @param integer $provvigioneappaltocliente
     *
     * @return AnagraficheV2Old
     */
    public function setProvvigioneappaltocliente($provvigioneappaltocliente)
    {
        $this->provvigioneappaltocliente = $provvigioneappaltocliente;

        return $this;
    }

    /**
     * Get provvigioneappaltocliente
     *
     * @return integer
     */
    public function getProvvigioneappaltocliente()
    {
        return $this->provvigioneappaltocliente;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return AnagraficheV2Old
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
     * Set datacreazione
     *
     * @param \DateTime $datacreazione
     *
     * @return AnagraficheV2Old
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
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return AnagraficheV2Old
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
     * Get idAnagrafica
     *
     * @return string
     */
    public function getIdAnagrafica()
    {
        return $this->idAnagrafica;
    }
}
