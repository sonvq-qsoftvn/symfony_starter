<?php

namespace ET\ETGestBundle\Entity;

/**
 * ModuloTraghetto
 */
class ModuloTraghetto
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
     * @var string
     */
    private $compagnia = '';

    /**
     * @var \DateTime
     */
    private $datain = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $partenzaluogo = '';

    /**
     * @var string
     */
    private $partenzaore = '';

    /**
     * @var string
     */
    private $partenza = '';

    /**
     * @var string
     */
    private $destinazione = '';

    /**
     * @var string
     */
    private $localita = '';

    /**
     * @var string
     */
    private $partenzaarrivoore = '';

    /**
     * @var string
     */
    private $partenzasistemazione = '';

    /**
     * @var \DateTime
     */
    private $dataout = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $ritornoluogo = '';

    /**
     * @var string
     */
    private $ritornoore = '';

    /**
     * @var string
     */
    private $ritornoarrivoluogo = '';

    /**
     * @var string
     */
    private $ritornoarrivoore = '';

    /**
     * @var string
     */
    private $ritornosistemazione = '';

    /**
     * @var string
     */
    private $tipomezzo = '00000000';

    /**
     * @var string
     */
    private $modello = '';

    /**
     * @var string
     */
    private $targa = '00000000';

    /**
     * @var string
     */
    private $dimensione = '';

    /**
     * @var boolean
     */
    private $npartecipanti = '0';

    /**
     * @var string
     */
    private $partecipanti;

    /**
     * @var string
     */
    private $erroriviaggio = '';

    /**
     * @var string
     */
    private $totale = '0.00';

    /**
     * @var string
     */
    private $scontoagenzia = '0.00';

    /**
     * @var string
     */
    private $agencyfee = '0.00';

    /**
     * @var string
     */
    private $pagamento = '';

    /**
     * @var string
     */
    private $statopagamento = '';

    /**
     * @var integer
     */
    private $modoPagamento = '0';

    /**
     * @var string
     */
    private $notemodulo;

    /**
     * @var \DateTime
     */
    private $datamodifica = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $codpromotoremodifica = '0';

    /**
     * @var string
     */
    private $numprenotazione = '';

    /**
     * @var string
     */
    private $commissionelorda = '0.00';

    /**
     * @var string
     */
    private $commissionecarta = '0.00';

    /**
     * @var string
     */
    private $spesecorriere = '0.00';

    /**
     * @var string
     */
    private $commissionenetta = '0.00';

    /**
     * @var string
     */
    private $iva = '0.00';

    /**
     * @var integer
     */
    private $codpromotoreiva = '0';

    /**
     * @var string
     */
    private $codiceaves = '';

    /**
     * @var string
     */
    private $codiceavesFornitori;

    /**
     * @var boolean
     */
    private $statusaves = '0';

    /**
     * @var string
     */
    private $confermaPrenotazione = '';

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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * Set compagnia
     *
     * @param string $compagnia
     *
     * @return ModuloTraghetto
     */
    public function setCompagnia($compagnia)
    {
        $this->compagnia = $compagnia;

        return $this;
    }

    /**
     * Get compagnia
     *
     * @return string
     */
    public function getCompagnia()
    {
        return $this->compagnia;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ModuloTraghetto
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
     * Set partenzaluogo
     *
     * @param string $partenzaluogo
     *
     * @return ModuloTraghetto
     */
    public function setPartenzaluogo($partenzaluogo)
    {
        $this->partenzaluogo = $partenzaluogo;

        return $this;
    }

    /**
     * Get partenzaluogo
     *
     * @return string
     */
    public function getPartenzaluogo()
    {
        return $this->partenzaluogo;
    }

    /**
     * Set partenzaore
     *
     * @param string $partenzaore
     *
     * @return ModuloTraghetto
     */
    public function setPartenzaore($partenzaore)
    {
        $this->partenzaore = $partenzaore;

        return $this;
    }

    /**
     * Get partenzaore
     *
     * @return string
     */
    public function getPartenzaore()
    {
        return $this->partenzaore;
    }

    /**
     * Set partenza
     *
     * @param string $partenza
     *
     * @return ModuloTraghetto
     */
    public function setPartenza($partenza)
    {
        $this->partenza = $partenza;

        return $this;
    }

    /**
     * Get partenza
     *
     * @return string
     */
    public function getPartenza()
    {
        return $this->partenza;
    }

    /**
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * Set partenzaarrivoore
     *
     * @param string $partenzaarrivoore
     *
     * @return ModuloTraghetto
     */
    public function setPartenzaarrivoore($partenzaarrivoore)
    {
        $this->partenzaarrivoore = $partenzaarrivoore;

        return $this;
    }

    /**
     * Get partenzaarrivoore
     *
     * @return string
     */
    public function getPartenzaarrivoore()
    {
        return $this->partenzaarrivoore;
    }

    /**
     * Set partenzasistemazione
     *
     * @param string $partenzasistemazione
     *
     * @return ModuloTraghetto
     */
    public function setPartenzasistemazione($partenzasistemazione)
    {
        $this->partenzasistemazione = $partenzasistemazione;

        return $this;
    }

    /**
     * Get partenzasistemazione
     *
     * @return string
     */
    public function getPartenzasistemazione()
    {
        return $this->partenzasistemazione;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ModuloTraghetto
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
     * Set ritornoluogo
     *
     * @param string $ritornoluogo
     *
     * @return ModuloTraghetto
     */
    public function setRitornoluogo($ritornoluogo)
    {
        $this->ritornoluogo = $ritornoluogo;

        return $this;
    }

    /**
     * Get ritornoluogo
     *
     * @return string
     */
    public function getRitornoluogo()
    {
        return $this->ritornoluogo;
    }

    /**
     * Set ritornoore
     *
     * @param string $ritornoore
     *
     * @return ModuloTraghetto
     */
    public function setRitornoore($ritornoore)
    {
        $this->ritornoore = $ritornoore;

        return $this;
    }

    /**
     * Get ritornoore
     *
     * @return string
     */
    public function getRitornoore()
    {
        return $this->ritornoore;
    }

    /**
     * Set ritornoarrivoluogo
     *
     * @param string $ritornoarrivoluogo
     *
     * @return ModuloTraghetto
     */
    public function setRitornoarrivoluogo($ritornoarrivoluogo)
    {
        $this->ritornoarrivoluogo = $ritornoarrivoluogo;

        return $this;
    }

    /**
     * Get ritornoarrivoluogo
     *
     * @return string
     */
    public function getRitornoarrivoluogo()
    {
        return $this->ritornoarrivoluogo;
    }

    /**
     * Set ritornoarrivoore
     *
     * @param string $ritornoarrivoore
     *
     * @return ModuloTraghetto
     */
    public function setRitornoarrivoore($ritornoarrivoore)
    {
        $this->ritornoarrivoore = $ritornoarrivoore;

        return $this;
    }

    /**
     * Get ritornoarrivoore
     *
     * @return string
     */
    public function getRitornoarrivoore()
    {
        return $this->ritornoarrivoore;
    }

    /**
     * Set ritornosistemazione
     *
     * @param string $ritornosistemazione
     *
     * @return ModuloTraghetto
     */
    public function setRitornosistemazione($ritornosistemazione)
    {
        $this->ritornosistemazione = $ritornosistemazione;

        return $this;
    }

    /**
     * Get ritornosistemazione
     *
     * @return string
     */
    public function getRitornosistemazione()
    {
        return $this->ritornosistemazione;
    }

    /**
     * Set tipomezzo
     *
     * @param string $tipomezzo
     *
     * @return ModuloTraghetto
     */
    public function setTipomezzo($tipomezzo)
    {
        $this->tipomezzo = $tipomezzo;

        return $this;
    }

    /**
     * Get tipomezzo
     *
     * @return string
     */
    public function getTipomezzo()
    {
        return $this->tipomezzo;
    }

    /**
     * Set modello
     *
     * @param string $modello
     *
     * @return ModuloTraghetto
     */
    public function setModello($modello)
    {
        $this->modello = $modello;

        return $this;
    }

    /**
     * Get modello
     *
     * @return string
     */
    public function getModello()
    {
        return $this->modello;
    }

    /**
     * Set targa
     *
     * @param string $targa
     *
     * @return ModuloTraghetto
     */
    public function setTarga($targa)
    {
        $this->targa = $targa;

        return $this;
    }

    /**
     * Get targa
     *
     * @return string
     */
    public function getTarga()
    {
        return $this->targa;
    }

    /**
     * Set dimensione
     *
     * @param string $dimensione
     *
     * @return ModuloTraghetto
     */
    public function setDimensione($dimensione)
    {
        $this->dimensione = $dimensione;

        return $this;
    }

    /**
     * Get dimensione
     *
     * @return string
     */
    public function getDimensione()
    {
        return $this->dimensione;
    }

    /**
     * Set npartecipanti
     *
     * @param boolean $npartecipanti
     *
     * @return ModuloTraghetto
     */
    public function setNpartecipanti($npartecipanti)
    {
        $this->npartecipanti = $npartecipanti;

        return $this;
    }

    /**
     * Get npartecipanti
     *
     * @return boolean
     */
    public function getNpartecipanti()
    {
        return $this->npartecipanti;
    }

    /**
     * Set partecipanti
     *
     * @param string $partecipanti
     *
     * @return ModuloTraghetto
     */
    public function setPartecipanti($partecipanti)
    {
        $this->partecipanti = $partecipanti;

        return $this;
    }

    /**
     * Get partecipanti
     *
     * @return string
     */
    public function getPartecipanti()
    {
        return $this->partecipanti;
    }

    /**
     * Set erroriviaggio
     *
     * @param string $erroriviaggio
     *
     * @return ModuloTraghetto
     */
    public function setErroriviaggio($erroriviaggio)
    {
        $this->erroriviaggio = $erroriviaggio;

        return $this;
    }

    /**
     * Get erroriviaggio
     *
     * @return string
     */
    public function getErroriviaggio()
    {
        return $this->erroriviaggio;
    }

    /**
     * Set totale
     *
     * @param string $totale
     *
     * @return ModuloTraghetto
     */
    public function setTotale($totale)
    {
        $this->totale = $totale;

        return $this;
    }

    /**
     * Get totale
     *
     * @return string
     */
    public function getTotale()
    {
        return $this->totale;
    }

    /**
     * Set scontoagenzia
     *
     * @param string $scontoagenzia
     *
     * @return ModuloTraghetto
     */
    public function setScontoagenzia($scontoagenzia)
    {
        $this->scontoagenzia = $scontoagenzia;

        return $this;
    }

    /**
     * Get scontoagenzia
     *
     * @return string
     */
    public function getScontoagenzia()
    {
        return $this->scontoagenzia;
    }

    /**
     * Set agencyfee
     *
     * @param string $agencyfee
     *
     * @return ModuloTraghetto
     */
    public function setAgencyfee($agencyfee)
    {
        $this->agencyfee = $agencyfee;

        return $this;
    }

    /**
     * Get agencyfee
     *
     * @return string
     */
    public function getAgencyfee()
    {
        return $this->agencyfee;
    }

    /**
     * Set pagamento
     *
     * @param string $pagamento
     *
     * @return ModuloTraghetto
     */
    public function setPagamento($pagamento)
    {
        $this->pagamento = $pagamento;

        return $this;
    }

    /**
     * Get pagamento
     *
     * @return string
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }

    /**
     * Set statopagamento
     *
     * @param string $statopagamento
     *
     * @return ModuloTraghetto
     */
    public function setStatopagamento($statopagamento)
    {
        $this->statopagamento = $statopagamento;

        return $this;
    }

    /**
     * Get statopagamento
     *
     * @return string
     */
    public function getStatopagamento()
    {
        return $this->statopagamento;
    }

    /**
     * Set modoPagamento
     *
     * @param integer $modoPagamento
     *
     * @return ModuloTraghetto
     */
    public function setModoPagamento($modoPagamento)
    {
        $this->modoPagamento = $modoPagamento;

        return $this;
    }

    /**
     * Get modoPagamento
     *
     * @return integer
     */
    public function getModoPagamento()
    {
        return $this->modoPagamento;
    }

    /**
     * Set notemodulo
     *
     * @param string $notemodulo
     *
     * @return ModuloTraghetto
     */
    public function setNotemodulo($notemodulo)
    {
        $this->notemodulo = $notemodulo;

        return $this;
    }

    /**
     * Get notemodulo
     *
     * @return string
     */
    public function getNotemodulo()
    {
        return $this->notemodulo;
    }

    /**
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * Set numprenotazione
     *
     * @param string $numprenotazione
     *
     * @return ModuloTraghetto
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
     * Set commissionelorda
     *
     * @param string $commissionelorda
     *
     * @return ModuloTraghetto
     */
    public function setCommissionelorda($commissionelorda)
    {
        $this->commissionelorda = $commissionelorda;

        return $this;
    }

    /**
     * Get commissionelorda
     *
     * @return string
     */
    public function getCommissionelorda()
    {
        return $this->commissionelorda;
    }

    /**
     * Set commissionecarta
     *
     * @param string $commissionecarta
     *
     * @return ModuloTraghetto
     */
    public function setCommissionecarta($commissionecarta)
    {
        $this->commissionecarta = $commissionecarta;

        return $this;
    }

    /**
     * Get commissionecarta
     *
     * @return string
     */
    public function getCommissionecarta()
    {
        return $this->commissionecarta;
    }

    /**
     * Set spesecorriere
     *
     * @param string $spesecorriere
     *
     * @return ModuloTraghetto
     */
    public function setSpesecorriere($spesecorriere)
    {
        $this->spesecorriere = $spesecorriere;

        return $this;
    }

    /**
     * Get spesecorriere
     *
     * @return string
     */
    public function getSpesecorriere()
    {
        return $this->spesecorriere;
    }

    /**
     * Set commissionenetta
     *
     * @param string $commissionenetta
     *
     * @return ModuloTraghetto
     */
    public function setCommissionenetta($commissionenetta)
    {
        $this->commissionenetta = $commissionenetta;

        return $this;
    }

    /**
     * Get commissionenetta
     *
     * @return string
     */
    public function getCommissionenetta()
    {
        return $this->commissionenetta;
    }

    /**
     * Set iva
     *
     * @param string $iva
     *
     * @return ModuloTraghetto
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set codpromotoreiva
     *
     * @param integer $codpromotoreiva
     *
     * @return ModuloTraghetto
     */
    public function setCodpromotoreiva($codpromotoreiva)
    {
        $this->codpromotoreiva = $codpromotoreiva;

        return $this;
    }

    /**
     * Get codpromotoreiva
     *
     * @return integer
     */
    public function getCodpromotoreiva()
    {
        return $this->codpromotoreiva;
    }

    /**
     * Set codiceaves
     *
     * @param string $codiceaves
     *
     * @return ModuloTraghetto
     */
    public function setCodiceaves($codiceaves)
    {
        $this->codiceaves = $codiceaves;

        return $this;
    }

    /**
     * Get codiceaves
     *
     * @return string
     */
    public function getCodiceaves()
    {
        return $this->codiceaves;
    }

    /**
     * Set codiceavesFornitori
     *
     * @param string $codiceavesFornitori
     *
     * @return ModuloTraghetto
     */
    public function setCodiceavesFornitori($codiceavesFornitori)
    {
        $this->codiceavesFornitori = $codiceavesFornitori;

        return $this;
    }

    /**
     * Get codiceavesFornitori
     *
     * @return string
     */
    public function getCodiceavesFornitori()
    {
        return $this->codiceavesFornitori;
    }

    /**
     * Set statusaves
     *
     * @param boolean $statusaves
     *
     * @return ModuloTraghetto
     */
    public function setStatusaves($statusaves)
    {
        $this->statusaves = $statusaves;

        return $this;
    }

    /**
     * Get statusaves
     *
     * @return boolean
     */
    public function getStatusaves()
    {
        return $this->statusaves;
    }

    /**
     * Set confermaPrenotazione
     *
     * @param string $confermaPrenotazione
     *
     * @return ModuloTraghetto
     */
    public function setConfermaPrenotazione($confermaPrenotazione)
    {
        $this->confermaPrenotazione = $confermaPrenotazione;

        return $this;
    }

    /**
     * Get confermaPrenotazione
     *
     * @return string
     */
    public function getConfermaPrenotazione()
    {
        return $this->confermaPrenotazione;
    }

    /**
     * Set bookingStato
     *
     * @param boolean $bookingStato
     *
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return ModuloTraghetto
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
     * @return ModuloTraghetto
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

