<?php

namespace AppBundle\Entity;

/**
 * ServiziPacchetto
 */
class ServiziPacchetto
{
    /**
     * @var integer
     */
    private $portaleId;

    /**
     * @var string
     */
    private $idofferta;

    /**
     * @var string
     */
    private $nropzione;

    /**
     * @var \DateTime
     */
    private $datain;

    /**
     * @var \DateTime
     */
    private $dataout;

    /**
     * @var string
     */
    private $destinazione;

    /**
     * @var string
     */
    private $localita;

    /**
     * @var string
     */
    private $nomestruttura;

    /**
     * @var string
     */
    private $tipostruttura;

    /**
     * @var string
     */
    private $sistemazioni;

    /**
     * @var string
     */
    private $numprenotazione;

    /**
     * @var string
     */
    private $notecontratto;

    /**
     * @var string
     */
    private $aeroportopartenza;

    /**
     * @var string
     */
    private $aeroportopartenzaarrivo;

    /**
     * @var string
     */
    private $aeroportoarrivo;

    /**
     * @var string
     */
    private $aeroportoarrivoarrivo;

    /**
     * @var integer
     */
    private $codpromotorepromorif = '0';

    /**
     * @var string
     */
    private $accettazioneassicurazione;

    /**
     * @var string
     */
    private $startdeparturelocation;

    /**
     * @var string
     */
    private $startarrivallocation;

    /**
     * @var string
     */
    private $returndeparturelocation;

    /**
     * @var string
     */
    private $returnarrivallocation;

    /**
     * @var boolean
     */
    private $transporttype = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set portaleId
     *
     * @param integer $portaleId
     *
     * @return ServiziPacchetto
     */
    public function setPortaleId($portaleId)
    {
        $this->portaleId = $portaleId;

        return $this;
    }

    /**
     * Get portaleId
     *
     * @return integer
     */
    public function getPortaleId()
    {
        return $this->portaleId;
    }

    /**
     * Set idofferta
     *
     * @param string $idofferta
     *
     * @return ServiziPacchetto
     */
    public function setIdofferta($idofferta)
    {
        $this->idofferta = $idofferta;

        return $this;
    }

    /**
     * Get idofferta
     *
     * @return string
     */
    public function getIdofferta()
    {
        return $this->idofferta;
    }

    /**
     * Set nropzione
     *
     * @param string $nropzione
     *
     * @return ServiziPacchetto
     */
    public function setNropzione($nropzione)
    {
        $this->nropzione = $nropzione;

        return $this;
    }

    /**
     * Get nropzione
     *
     * @return string
     */
    public function getNropzione()
    {
        return $this->nropzione;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ServiziPacchetto
     */
    public function setDatain($datain)
    {
        $this->datain = $datain;

        return $this;
    }

    /**
     * Get datain
     *
     * @return \DateTime
     */
    public function getDatain()
    {
        return $this->datain;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ServiziPacchetto
     */
    public function setDataout($dataout)
    {
        $this->dataout = $dataout;

        return $this;
    }

    /**
     * Get dataout
     *
     * @return \DateTime
     */
    public function getDataout()
    {
        return $this->dataout;
    }

    /**
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return ServiziPacchetto
     */
    public function setDestinazione($destinazione)
    {
        $this->destinazione = $destinazione;

        return $this;
    }

    /**
     * Get destinazione
     *
     * @return string
     */
    public function getDestinazione()
    {
        return $this->destinazione;
    }

    /**
     * Set localita
     *
     * @param string $localita
     *
     * @return ServiziPacchetto
     */
    public function setLocalita($localita)
    {
        $this->localita = $localita;

        return $this;
    }

    /**
     * Get localita
     *
     * @return string
     */
    public function getLocalita()
    {
        return $this->localita;
    }

    /**
     * Set nomestruttura
     *
     * @param string $nomestruttura
     *
     * @return ServiziPacchetto
     */
    public function setNomestruttura($nomestruttura)
    {
        $this->nomestruttura = $nomestruttura;

        return $this;
    }

    /**
     * Get nomestruttura
     *
     * @return string
     */
    public function getNomestruttura()
    {
        return $this->nomestruttura;
    }

    /**
     * Set tipostruttura
     *
     * @param string $tipostruttura
     *
     * @return ServiziPacchetto
     */
    public function setTipostruttura($tipostruttura)
    {
        $this->tipostruttura = $tipostruttura;

        return $this;
    }

    /**
     * Get tipostruttura
     *
     * @return string
     */
    public function getTipostruttura()
    {
        return $this->tipostruttura;
    }

    /**
     * Set sistemazioni
     *
     * @param string $sistemazioni
     *
     * @return ServiziPacchetto
     */
    public function setSistemazioni($sistemazioni)
    {
        $this->sistemazioni = $sistemazioni;

        return $this;
    }

    /**
     * Get sistemazioni
     *
     * @return string
     */
    public function getSistemazioni()
    {
        return $this->sistemazioni;
    }

    /**
     * Set numprenotazione
     *
     * @param string $numprenotazione
     *
     * @return ServiziPacchetto
     */
    public function setNumprenotazione($numprenotazione)
    {
        $this->numprenotazione = $numprenotazione;

        return $this;
    }

    /**
     * Get numprenotazione
     *
     * @return string
     */
    public function getNumprenotazione()
    {
        return $this->numprenotazione;
    }

    /**
     * Set notecontratto
     *
     * @param string $notecontratto
     *
     * @return ServiziPacchetto
     */
    public function setNotecontratto($notecontratto)
    {
        $this->notecontratto = $notecontratto;

        return $this;
    }

    /**
     * Get notecontratto
     *
     * @return string
     */
    public function getNotecontratto()
    {
        return $this->notecontratto;
    }

    /**
     * Set aeroportopartenza
     *
     * @param string $aeroportopartenza
     *
     * @return ServiziPacchetto
     */
    public function setAeroportopartenza($aeroportopartenza)
    {
        $this->aeroportopartenza = $aeroportopartenza;

        return $this;
    }

    /**
     * Get aeroportopartenza
     *
     * @return string
     */
    public function getAeroportopartenza()
    {
        return $this->aeroportopartenza;
    }

    /**
     * Set aeroportopartenzaarrivo
     *
     * @param string $aeroportopartenzaarrivo
     *
     * @return ServiziPacchetto
     */
    public function setAeroportopartenzaarrivo($aeroportopartenzaarrivo)
    {
        $this->aeroportopartenzaarrivo = $aeroportopartenzaarrivo;

        return $this;
    }

    /**
     * Get aeroportopartenzaarrivo
     *
     * @return string
     */
    public function getAeroportopartenzaarrivo()
    {
        return $this->aeroportopartenzaarrivo;
    }

    /**
     * Set aeroportoarrivo
     *
     * @param string $aeroportoarrivo
     *
     * @return ServiziPacchetto
     */
    public function setAeroportoarrivo($aeroportoarrivo)
    {
        $this->aeroportoarrivo = $aeroportoarrivo;

        return $this;
    }

    /**
     * Get aeroportoarrivo
     *
     * @return string
     */
    public function getAeroportoarrivo()
    {
        return $this->aeroportoarrivo;
    }

    /**
     * Set aeroportoarrivoarrivo
     *
     * @param string $aeroportoarrivoarrivo
     *
     * @return ServiziPacchetto
     */
    public function setAeroportoarrivoarrivo($aeroportoarrivoarrivo)
    {
        $this->aeroportoarrivoarrivo = $aeroportoarrivoarrivo;

        return $this;
    }

    /**
     * Get aeroportoarrivoarrivo
     *
     * @return string
     */
    public function getAeroportoarrivoarrivo()
    {
        return $this->aeroportoarrivoarrivo;
    }

    /**
     * Set codpromotorepromorif
     *
     * @param integer $codpromotorepromorif
     *
     * @return ServiziPacchetto
     */
    public function setCodpromotorepromorif($codpromotorepromorif)
    {
        $this->codpromotorepromorif = $codpromotorepromorif;

        return $this;
    }

    /**
     * Get codpromotorepromorif
     *
     * @return integer
     */
    public function getCodpromotorepromorif()
    {
        return $this->codpromotorepromorif;
    }

    /**
     * Set accettazioneassicurazione
     *
     * @param string $accettazioneassicurazione
     *
     * @return ServiziPacchetto
     */
    public function setAccettazioneassicurazione($accettazioneassicurazione)
    {
        $this->accettazioneassicurazione = $accettazioneassicurazione;

        return $this;
    }

    /**
     * Get accettazioneassicurazione
     *
     * @return string
     */
    public function getAccettazioneassicurazione()
    {
        return $this->accettazioneassicurazione;
    }

    /**
     * Set startdeparturelocation
     *
     * @param string $startdeparturelocation
     *
     * @return ServiziPacchetto
     */
    public function setStartdeparturelocation($startdeparturelocation)
    {
        $this->startdeparturelocation = $startdeparturelocation;

        return $this;
    }

    /**
     * Get startdeparturelocation
     *
     * @return string
     */
    public function getStartdeparturelocation()
    {
        return $this->startdeparturelocation;
    }

    /**
     * Set startarrivallocation
     *
     * @param string $startarrivallocation
     *
     * @return ServiziPacchetto
     */
    public function setStartarrivallocation($startarrivallocation)
    {
        $this->startarrivallocation = $startarrivallocation;

        return $this;
    }

    /**
     * Get startarrivallocation
     *
     * @return string
     */
    public function getStartarrivallocation()
    {
        return $this->startarrivallocation;
    }

    /**
     * Set returndeparturelocation
     *
     * @param string $returndeparturelocation
     *
     * @return ServiziPacchetto
     */
    public function setReturndeparturelocation($returndeparturelocation)
    {
        $this->returndeparturelocation = $returndeparturelocation;

        return $this;
    }

    /**
     * Get returndeparturelocation
     *
     * @return string
     */
    public function getReturndeparturelocation()
    {
        return $this->returndeparturelocation;
    }

    /**
     * Set returnarrivallocation
     *
     * @param string $returnarrivallocation
     *
     * @return ServiziPacchetto
     */
    public function setReturnarrivallocation($returnarrivallocation)
    {
        $this->returnarrivallocation = $returnarrivallocation;

        return $this;
    }

    /**
     * Get returnarrivallocation
     *
     * @return string
     */
    public function getReturnarrivallocation()
    {
        return $this->returnarrivallocation;
    }

    /**
     * Set transporttype
     *
     * @param boolean $transporttype
     *
     * @return ServiziPacchetto
     */
    public function setTransporttype($transporttype)
    {
        $this->transporttype = $transporttype;

        return $this;
    }

    /**
     * Get transporttype
     *
     * @return boolean
     */
    public function getTransporttype()
    {
        return $this->transporttype;
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
