<?php

namespace AppBundle\Entity;

/**
 * Documenti
 */
class Documenti
{
    /**
     * @var integer
     */
    private $idViaggio;

    /**
     * @var integer
     */
    private $codpromotore;

    /**
     * @var integer
     */
    private $codpromotorecreazione;

    /**
     * @var integer
     */
    private $codpromotoremodifica;

    /**
     * @var string
     */
    private $tipo = 'generico';

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var \DateTime
     */
    private $datainvio;

    /**
     * @var integer
     */
    private $bookingStato;

    /**
     * @var integer
     */
    private $bookingCodpromotorestato;

    /**
     * @var integer
     */
    private $bookingCodpromotorelavorazione;

    /**
     * @var boolean
     */
    private $bookingLetto;

    /**
     * @var integer
     */
    private $ecStato = '1';

    /**
     * @var integer
     */
    private $ecCodpromotorestato;

    /**
     * @var integer
     */
    private $ecCodpromotorelavorazione;

    /**
     * @var boolean
     */
    private $ecLetto;

    /**
     * @var \DateTime
     */
    private $prenotazioniLetturadata;

    /**
     * @var integer
     */
    private $prenotazioniLetturacodpromotore;

    /**
     * @var boolean
     */
    private $prenotazioniLetturastato = '0';

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $datamodifica;

    /**
     * @var string
     */
    private $tipoinvio;

    /**
     * @var string
     */
    private $linkSupplier;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return Documenti
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
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return Documenti
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
     * @return Documenti
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
     * Set codpromotoremodifica
     *
     * @param integer $codpromotoremodifica
     *
     * @return Documenti
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Documenti
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return Documenti
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Documenti
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return Documenti
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
     * Set bookingStato
     *
     * @param integer $bookingStato
     *
     * @return Documenti
     */
    public function setBookingStato($bookingStato)
    {
        $this->bookingStato = $bookingStato;

        return $this;
    }

    /**
     * Get bookingStato
     *
     * @return integer
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
     * @return Documenti
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
     * @return Documenti
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
     * @return Documenti
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
     * @param integer $ecStato
     *
     * @return Documenti
     */
    public function setEcStato($ecStato)
    {
        $this->ecStato = $ecStato;

        return $this;
    }

    /**
     * Get ecStato
     *
     * @return integer
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
     * @return Documenti
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
     * @return Documenti
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
     * Set ecLetto
     *
     * @param boolean $ecLetto
     *
     * @return Documenti
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
     * Set prenotazioniLetturadata
     *
     * @param \DateTime $prenotazioniLetturadata
     *
     * @return Documenti
     */
    public function setPrenotazioniLetturadata($prenotazioniLetturadata)
    {
        $this->prenotazioniLetturadata = $prenotazioniLetturadata;

        return $this;
    }

    /**
     * Get prenotazioniLetturadata
     *
     * @return \DateTime
     */
    public function getPrenotazioniLetturadata()
    {
        return $this->prenotazioniLetturadata;
    }

    /**
     * Set prenotazioniLetturacodpromotore
     *
     * @param integer $prenotazioniLetturacodpromotore
     *
     * @return Documenti
     */
    public function setPrenotazioniLetturacodpromotore($prenotazioniLetturacodpromotore)
    {
        $this->prenotazioniLetturacodpromotore = $prenotazioniLetturacodpromotore;

        return $this;
    }

    /**
     * Get prenotazioniLetturacodpromotore
     *
     * @return integer
     */
    public function getPrenotazioniLetturacodpromotore()
    {
        return $this->prenotazioniLetturacodpromotore;
    }

    /**
     * Set prenotazioniLetturastato
     *
     * @param boolean $prenotazioniLetturastato
     *
     * @return Documenti
     */
    public function setPrenotazioniLetturastato($prenotazioniLetturastato)
    {
        $this->prenotazioniLetturastato = $prenotazioniLetturastato;

        return $this;
    }

    /**
     * Get prenotazioniLetturastato
     *
     * @return boolean
     */
    public function getPrenotazioniLetturastato()
    {
        return $this->prenotazioniLetturastato;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Documenti
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
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return Documenti
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
     * Set tipoinvio
     *
     * @param string $tipoinvio
     *
     * @return Documenti
     */
    public function setTipoinvio($tipoinvio)
    {
        $this->tipoinvio = $tipoinvio;

        return $this;
    }

    /**
     * Get tipoinvio
     *
     * @return string
     */
    public function getTipoinvio()
    {
        return $this->tipoinvio;
    }

    /**
     * Set linkSupplier
     *
     * @param string $linkSupplier
     *
     * @return Documenti
     */
    public function setLinkSupplier($linkSupplier)
    {
        $this->linkSupplier = $linkSupplier;

        return $this;
    }

    /**
     * Get linkSupplier
     *
     * @return string
     */
    public function getLinkSupplier()
    {
        return $this->linkSupplier;
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
