<?php

namespace ET\ETGestBundle\Entity;

/**
 * Servizi
 */
class Servizi
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
    private $tipo;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var integer
     */
    private $idfornitore;

    /**
     * @var string
     */
    private $fornitoretext;

    /**
     * @var string
     */
    private $costo;

    /**
     * @var string
     */
    private $ricavo;

    /**
     * @var string
     */
    private $commissione;

    /**
     * @var string
     */
    private $imposta;

    /**
     * @var boolean
     */
    private $pagatodirettooperatore;

    /**
     * @var string
     */
    private $erroriespletamento;

    /**
     * @var boolean
     */
    private $confermaPrenotazione;

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
     * @var string
     */
    private $codicecontabile;

    /**
     * @var string
     */
    private $codicepagamento;

    /**
     * @var string
     */
    private $apistato;

    /**
     * @var string
     */
    private $apisiapstato = 'nuovo';

    /**
     * @var \DateTime
     */
    private $apistatodata;

    /**
     * @var \DateTime
     */
    private $apisiapstatodata;

    /**
     * @var string
     */
    private $apikey;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $datamodifica;

    /**
     * @var \DateTime
     */
    private $datainvio;

    /**
     * @var string
     */
    private $tipoinvio;

    /**
     * @var boolean
     */
    private $stornato = '0';

    /**
     * @var integer
     */
    private $duplicato = '0';

    /**
     * @var \DateTime
     */
    private $incentiveAt;

    /**
     * @var boolean
     */
    private $approved = '0';

    /**
     * @var string
     */
    private $selectedValuta;

    /**
     * @var string
     */
    private $cambioCosto = '0.00';

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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * Set idfornitore
     *
     * @param integer $idfornitore
     *
     * @return Servizi
     */
    public function setIdfornitore($idfornitore)
    {
        $this->idfornitore = $idfornitore;

        return $this;
    }

    /**
     * Get idfornitore
     *
     * @return integer
     */
    public function getIdfornitore()
    {
        return $this->idfornitore;
    }

    /**
     * Set fornitoretext
     *
     * @param string $fornitoretext
     *
     * @return Servizi
     */
    public function setFornitoretext($fornitoretext)
    {
        $this->fornitoretext = $fornitoretext;

        return $this;
    }

    /**
     * Get fornitoretext
     *
     * @return string
     */
    public function getFornitoretext()
    {
        return $this->fornitoretext;
    }

    /**
     * Set costo
     *
     * @param string $costo
     *
     * @return Servizi
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set ricavo
     *
     * @param string $ricavo
     *
     * @return Servizi
     */
    public function setRicavo($ricavo)
    {
        $this->ricavo = $ricavo;

        return $this;
    }

    /**
     * Get ricavo
     *
     * @return string
     */
    public function getRicavo()
    {
        return $this->ricavo;
    }

    /**
     * Set commissione
     *
     * @param string $commissione
     *
     * @return Servizi
     */
    public function setCommissione($commissione)
    {
        $this->commissione = $commissione;

        return $this;
    }

    /**
     * Get commissione
     *
     * @return string
     */
    public function getCommissione()
    {
        return $this->commissione;
    }

    /**
     * Set imposta
     *
     * @param string $imposta
     *
     * @return Servizi
     */
    public function setImposta($imposta)
    {
        $this->imposta = $imposta;

        return $this;
    }

    /**
     * Get imposta
     *
     * @return string
     */
    public function getImposta()
    {
        return $this->imposta;
    }

    /**
     * Set pagatodirettooperatore
     *
     * @param boolean $pagatodirettooperatore
     *
     * @return Servizi
     */
    public function setPagatodirettooperatore($pagatodirettooperatore)
    {
        $this->pagatodirettooperatore = $pagatodirettooperatore;

        return $this;
    }

    /**
     * Get pagatodirettooperatore
     *
     * @return boolean
     */
    public function getPagatodirettooperatore()
    {
        return $this->pagatodirettooperatore;
    }

    /**
     * Set erroriespletamento
     *
     * @param string $erroriespletamento
     *
     * @return Servizi
     */
    public function setErroriespletamento($erroriespletamento)
    {
        $this->erroriespletamento = $erroriespletamento;

        return $this;
    }

    /**
     * Get erroriespletamento
     *
     * @return string
     */
    public function getErroriespletamento()
    {
        return $this->erroriespletamento;
    }

    /**
     * Set confermaPrenotazione
     *
     * @param boolean $confermaPrenotazione
     *
     * @return Servizi
     */
    public function setConfermaPrenotazione($confermaPrenotazione)
    {
        $this->confermaPrenotazione = $confermaPrenotazione;

        return $this;
    }

    /**
     * Get confermaPrenotazione
     *
     * @return boolean
     */
    public function getConfermaPrenotazione()
    {
        return $this->confermaPrenotazione;
    }

    /**
     * Set bookingStato
     *
     * @param integer $bookingStato
     *
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * @return Servizi
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
     * Set codicecontabile
     *
     * @param string $codicecontabile
     *
     * @return Servizi
     */
    public function setCodicecontabile($codicecontabile)
    {
        $this->codicecontabile = $codicecontabile;

        return $this;
    }

    /**
     * Get codicecontabile
     *
     * @return string
     */
    public function getCodicecontabile()
    {
        return $this->codicecontabile;
    }

    /**
     * Set codicepagamento
     *
     * @param string $codicepagamento
     *
     * @return Servizi
     */
    public function setCodicepagamento($codicepagamento)
    {
        $this->codicepagamento = $codicepagamento;

        return $this;
    }

    /**
     * Get codicepagamento
     *
     * @return string
     */
    public function getCodicepagamento()
    {
        return $this->codicepagamento;
    }

    /**
     * Set apistato
     *
     * @param string $apistato
     *
     * @return Servizi
     */
    public function setApistato($apistato)
    {
        $this->apistato = $apistato;

        return $this;
    }

    /**
     * Get apistato
     *
     * @return string
     */
    public function getApistato()
    {
        return $this->apistato;
    }

    /**
     * Set apisiapstato
     *
     * @param string $apisiapstato
     *
     * @return Servizi
     */
    public function setApisiapstato($apisiapstato)
    {
        $this->apisiapstato = $apisiapstato;

        return $this;
    }

    /**
     * Get apisiapstato
     *
     * @return string
     */
    public function getApisiapstato()
    {
        return $this->apisiapstato;
    }

    /**
     * Set apistatodata
     *
     * @param \DateTime $apistatodata
     *
     * @return Servizi
     */
    public function setApistatodata($apistatodata)
    {
        $this->apistatodata = $apistatodata;

        return $this;
    }

    /**
     * Get apistatodata
     *
     * @return \DateTime
     */
    public function getApistatodata()
    {
        return $this->apistatodata;
    }

    /**
     * Set apisiapstatodata
     *
     * @param \DateTime $apisiapstatodata
     *
     * @return Servizi
     */
    public function setApisiapstatodata($apisiapstatodata)
    {
        $this->apisiapstatodata = $apisiapstatodata;

        return $this;
    }

    /**
     * Get apisiapstatodata
     *
     * @return \DateTime
     */
    public function getApisiapstatodata()
    {
        return $this->apisiapstatodata;
    }

    /**
     * Set apikey
     *
     * @param string $apikey
     *
     * @return Servizi
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;

        return $this;
    }

    /**
     * Get apikey
     *
     * @return string
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Servizi
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
     * @return Servizi
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
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return Servizi
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
     * Set tipoinvio
     *
     * @param string $tipoinvio
     *
     * @return Servizi
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
     * Set stornato
     *
     * @param boolean $stornato
     *
     * @return Servizi
     */
    public function setStornato($stornato)
    {
        $this->stornato = $stornato;

        return $this;
    }

    /**
     * Get stornato
     *
     * @return boolean
     */
    public function getStornato()
    {
        return $this->stornato;
    }

    /**
     * Set duplicato
     *
     * @param integer $duplicato
     *
     * @return Servizi
     */
    public function setDuplicato($duplicato)
    {
        $this->duplicato = $duplicato;

        return $this;
    }

    /**
     * Get duplicato
     *
     * @return integer
     */
    public function getDuplicato()
    {
        return $this->duplicato;
    }

    /**
     * Set incentiveAt
     *
     * @param \DateTime $incentiveAt
     *
     * @return Servizi
     */
    public function setIncentiveAt($incentiveAt)
    {
        $this->incentiveAt = $incentiveAt;

        return $this;
    }

    /**
     * Get incentiveAt
     *
     * @return \DateTime
     */
    public function getIncentiveAt()
    {
        return $this->incentiveAt;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     *
     * @return Servizi
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set selectedValuta
     *
     * @param string $selectedValuta
     *
     * @return Servizi
     */
    public function setSelectedValuta($selectedValuta)
    {
        $this->selectedValuta = $selectedValuta;

        return $this;
    }

    /**
     * Get selectedValuta
     *
     * @return string
     */
    public function getSelectedValuta()
    {
        return $this->selectedValuta;
    }

    /**
     * Set cambioCosto
     *
     * @param string $cambioCosto
     *
     * @return Servizi
     */
    public function setCambioCosto($cambioCosto)
    {
        $this->cambioCosto = $cambioCosto;

        return $this;
    }

    /**
     * Get cambioCosto
     *
     * @return string
     */
    public function getCambioCosto()
    {
        return $this->cambioCosto;
    }

    /**
     * Set linkSupplier
     *
     * @param string $linkSupplier
     *
     * @return Servizi
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

