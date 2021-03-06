<?php

namespace AppBundle\Entity;

/**
 * ModuloAttesaPreventivo
 */
class ModuloAttesaPreventivo
{
    /**
     * @var integer
     */
    private $idViaggio = '0';

    /**
     * @var \DateTime
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var integer
     */
    private $codpromotorecreazione = '0';

    /**
     * @var string
     */
    private $titolo = '';

    /**
     * @var string
     */
    private $nota;

    /**
     * @var boolean
     */
    private $tipodocumento = '0';

    /**
     * @var \DateTime
     */
    private $datamodifica = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $codpromotoremodifica = '0';

    /**
     * @var integer
     */
    private $promorif = '0';

    /**
     * @var boolean
     */
    private $bookingStato = '0';

    /**
     * @var integer
     */
    private $bookingCodpromotorestato = '0';

    /**
     * @var integer
     */
    private $bookingCodpromotorelavorazione = '0';

    /**
     * @var boolean
     */
    private $bookingLetto = '0';

    /**
     * @var boolean
     */
    private $ecStato = '0';

    /**
     * @var integer
     */
    private $ecCodpromotorestato = '0';

    /**
     * @var integer
     */
    private $ecCodpromotorelavorazione = '0';

    /**
     * @var string
     */
    private $testa;

    /**
     * @var string
     */
    private $intestazione;

    /**
     * @var string
     */
    private $conclusioni;

    /**
     * @var \DateTime
     */
    private $datapreventivo = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $datainvio;

    /**
     * @var boolean
     */
    private $ecLetto = '0';

    /**
     * @var integer
     */
    private $idModulo;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return ModuloAttesaPreventivo
     */
    public function setIdViaggio($idViaggio)
    {
        $this->idViaggio = $idViaggio;

        return $this;
    }

    /**
     * Get idViaggio
     *
     * @return integer
     */
    public function getIdViaggio()
    {
        return $this->idViaggio;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return ModuloAttesaPreventivo
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
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return ModuloAttesaPreventivo
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
     * Set codpromotorecreazione
     *
     * @param integer $codpromotorecreazione
     *
     * @return ModuloAttesaPreventivo
     */
    public function setCodpromotorecreazione($codpromotorecreazione)
    {
        $this->codpromotorecreazione = $codpromotorecreazione;

        return $this;
    }

    /**
     * Get codpromotorecreazione
     *
     * @return integer
     */
    public function getCodpromotorecreazione()
    {
        return $this->codpromotorecreazione;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return ModuloAttesaPreventivo
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set nota
     *
     * @param string $nota
     *
     * @return ModuloAttesaPreventivo
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set tipodocumento
     *
     * @param boolean $tipodocumento
     *
     * @return ModuloAttesaPreventivo
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return boolean
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return ModuloAttesaPreventivo
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
     * Set codpromotoremodifica
     *
     * @param integer $codpromotoremodifica
     *
     * @return ModuloAttesaPreventivo
     */
    public function setCodpromotoremodifica($codpromotoremodifica)
    {
        $this->codpromotoremodifica = $codpromotoremodifica;

        return $this;
    }

    /**
     * Get codpromotoremodifica
     *
     * @return integer
     */
    public function getCodpromotoremodifica()
    {
        return $this->codpromotoremodifica;
    }

    /**
     * Set promorif
     *
     * @param integer $promorif
     *
     * @return ModuloAttesaPreventivo
     */
    public function setPromorif($promorif)
    {
        $this->promorif = $promorif;

        return $this;
    }

    /**
     * Get promorif
     *
     * @return integer
     */
    public function getPromorif()
    {
        return $this->promorif;
    }

    /**
     * Set bookingStato
     *
     * @param boolean $bookingStato
     *
     * @return ModuloAttesaPreventivo
     */
    public function setBookingStato($bookingStato)
    {
        $this->bookingStato = $bookingStato;

        return $this;
    }

    /**
     * Get bookingStato
     *
     * @return boolean
     */
    public function getBookingStato()
    {
        return $this->bookingStato;
    }

    /**
     * Set bookingCodpromotorestato
     *
     * @param integer $bookingCodpromotorestato
     *
     * @return ModuloAttesaPreventivo
     */
    public function setBookingCodpromotorestato($bookingCodpromotorestato)
    {
        $this->bookingCodpromotorestato = $bookingCodpromotorestato;

        return $this;
    }

    /**
     * Get bookingCodpromotorestato
     *
     * @return integer
     */
    public function getBookingCodpromotorestato()
    {
        return $this->bookingCodpromotorestato;
    }

    /**
     * Set bookingCodpromotorelavorazione
     *
     * @param integer $bookingCodpromotorelavorazione
     *
     * @return ModuloAttesaPreventivo
     */
    public function setBookingCodpromotorelavorazione($bookingCodpromotorelavorazione)
    {
        $this->bookingCodpromotorelavorazione = $bookingCodpromotorelavorazione;

        return $this;
    }

    /**
     * Get bookingCodpromotorelavorazione
     *
     * @return integer
     */
    public function getBookingCodpromotorelavorazione()
    {
        return $this->bookingCodpromotorelavorazione;
    }

    /**
     * Set bookingLetto
     *
     * @param boolean $bookingLetto
     *
     * @return ModuloAttesaPreventivo
     */
    public function setBookingLetto($bookingLetto)
    {
        $this->bookingLetto = $bookingLetto;

        return $this;
    }

    /**
     * Get bookingLetto
     *
     * @return boolean
     */
    public function getBookingLetto()
    {
        return $this->bookingLetto;
    }

    /**
     * Set ecStato
     *
     * @param boolean $ecStato
     *
     * @return ModuloAttesaPreventivo
     */
    public function setEcStato($ecStato)
    {
        $this->ecStato = $ecStato;

        return $this;
    }

    /**
     * Get ecStato
     *
     * @return boolean
     */
    public function getEcStato()
    {
        return $this->ecStato;
    }

    /**
     * Set ecCodpromotorestato
     *
     * @param integer $ecCodpromotorestato
     *
     * @return ModuloAttesaPreventivo
     */
    public function setEcCodpromotorestato($ecCodpromotorestato)
    {
        $this->ecCodpromotorestato = $ecCodpromotorestato;

        return $this;
    }

    /**
     * Get ecCodpromotorestato
     *
     * @return integer
     */
    public function getEcCodpromotorestato()
    {
        return $this->ecCodpromotorestato;
    }

    /**
     * Set ecCodpromotorelavorazione
     *
     * @param integer $ecCodpromotorelavorazione
     *
     * @return ModuloAttesaPreventivo
     */
    public function setEcCodpromotorelavorazione($ecCodpromotorelavorazione)
    {
        $this->ecCodpromotorelavorazione = $ecCodpromotorelavorazione;

        return $this;
    }

    /**
     * Get ecCodpromotorelavorazione
     *
     * @return integer
     */
    public function getEcCodpromotorelavorazione()
    {
        return $this->ecCodpromotorelavorazione;
    }

    /**
     * Set testa
     *
     * @param string $testa
     *
     * @return ModuloAttesaPreventivo
     */
    public function setTesta($testa)
    {
        $this->testa = $testa;

        return $this;
    }

    /**
     * Get testa
     *
     * @return string
     */
    public function getTesta()
    {
        return $this->testa;
    }

    /**
     * Set intestazione
     *
     * @param string $intestazione
     *
     * @return ModuloAttesaPreventivo
     */
    public function setIntestazione($intestazione)
    {
        $this->intestazione = $intestazione;

        return $this;
    }

    /**
     * Get intestazione
     *
     * @return string
     */
    public function getIntestazione()
    {
        return $this->intestazione;
    }

    /**
     * Set conclusioni
     *
     * @param string $conclusioni
     *
     * @return ModuloAttesaPreventivo
     */
    public function setConclusioni($conclusioni)
    {
        $this->conclusioni = $conclusioni;

        return $this;
    }

    /**
     * Get conclusioni
     *
     * @return string
     */
    public function getConclusioni()
    {
        return $this->conclusioni;
    }

    /**
     * Set datapreventivo
     *
     * @param \DateTime $datapreventivo
     *
     * @return ModuloAttesaPreventivo
     */
    public function setDatapreventivo($datapreventivo)
    {
        $this->datapreventivo = $datapreventivo;

        return $this;
    }

    /**
     * Get datapreventivo
     *
     * @return \DateTime
     */
    public function getDatapreventivo()
    {
        return $this->datapreventivo;
    }

    /**
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return ModuloAttesaPreventivo
     */
    public function setDatainvio($datainvio)
    {
        $this->datainvio = $datainvio;

        return $this;
    }

    /**
     * Get datainvio
     *
     * @return \DateTime
     */
    public function getDatainvio()
    {
        return $this->datainvio;
    }

    /**
     * Set ecLetto
     *
     * @param boolean $ecLetto
     *
     * @return ModuloAttesaPreventivo
     */
    public function setEcLetto($ecLetto)
    {
        $this->ecLetto = $ecLetto;

        return $this;
    }

    /**
     * Get ecLetto
     *
     * @return boolean
     */
    public function getEcLetto()
    {
        return $this->ecLetto;
    }

    /**
     * Get idModulo
     *
     * @return integer
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }
}
