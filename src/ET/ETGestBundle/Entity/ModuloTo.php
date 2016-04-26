<?php

namespace ET\ETGestBundle\Entity;

/**
 * ModuloTo
 */
class ModuloTo
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
    private $to = '0';

    /**
     * @var integer
     */
    private $portale = '0';

    /**
     * @var string
     */
    private $promorif = '';

    /**
     * @var string
     */
    private $idofferta = '';

    /**
     * @var string
     */
    private $nropzione = '';

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
    private $aeroportopartenza = '';

    /**
     * @var string
     */
    private $nomestruttura = '';

    /**
     * @var string
     */
    private $tipostruttura = '';

    /**
     * @var string
     */
    private $tiposistemazioneOld = '';

    /**
     * @var string
     */
    private $tiposistemazione;

    /**
     * @var string
     */
    private $trattamento = '';

    /**
     * @var \DateTime
     */
    private $datain = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dataout = '0000-00-00 00:00:00';

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
    private $tiposervizio = '';

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
    private $assicurazione = '0.00';

    /**
     * @var string
     */
    private $assfacoltativa = '';

    /**
     * @var string
     */
    private $carburante = '0.00';

    /**
     * @var string
     */
    private $scontoagenzia = '0.00';

    /**
     * @var string
     */
    private $acconto = '0.00';

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
    private $spesebonifico = '0.00';

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
    private $iscrizione = '0.00';

    /**
     * @var boolean
     */
    private $statusaves = '0';

    /**
     * @var string
     */
    private $notecontratto = '';

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
     * @var string
     */
    private $commissioneassicurazione = '0.00';

    /**
     * @var integer
     */
    private $idModulo;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set to
     *
     * @param string $to
     *
     * @return ModuloTo
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set portale
     *
     * @param integer $portale
     *
     * @return ModuloTo
     */
    public function setPortale($portale)
    {
        $this->portale = $portale;

        return $this;
    }

    /**
     * Get portale
     *
     * @return integer
     */
    public function getPortale()
    {
        return $this->portale;
    }

    /**
     * Set promorif
     *
     * @param string $promorif
     *
     * @return ModuloTo
     */
    public function setPromorif($promorif)
    {
        $this->promorif = $promorif;

        return $this;
    }

    /**
     * Get promorif
     *
     * @return string
     */
    public function getPromorif()
    {
        return $this->promorif;
    }

    /**
     * Set idofferta
     *
     * @param string $idofferta
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set aeroportopartenza
     *
     * @param string $aeroportopartenza
     *
     * @return ModuloTo
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
     * Set nomestruttura
     *
     * @param string $nomestruttura
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set tiposistemazioneOld
     *
     * @param string $tiposistemazioneOld
     *
     * @return ModuloTo
     */
    public function setTiposistemazioneOld($tiposistemazioneOld)
    {
        $this->tiposistemazioneOld = $tiposistemazioneOld;

        return $this;
    }

    /**
     * Get tiposistemazioneOld
     *
     * @return string
     */
    public function getTiposistemazioneOld()
    {
        return $this->tiposistemazioneOld;
    }

    /**
     * Set tiposistemazione
     *
     * @param string $tiposistemazione
     *
     * @return ModuloTo
     */
    public function setTiposistemazione($tiposistemazione)
    {
        $this->tiposistemazione = $tiposistemazione;

        return $this;
    }

    /**
     * Get tiposistemazione
     *
     * @return string
     */
    public function getTiposistemazione()
    {
        return $this->tiposistemazione;
    }

    /**
     * Set trattamento
     *
     * @param string $trattamento
     *
     * @return ModuloTo
     */
    public function setTrattamento($trattamento)
    {
        $this->trattamento = $trattamento;

        return $this;
    }

    /**
     * Get trattamento
     *
     * @return string
     */
    public function getTrattamento()
    {
        return $this->trattamento;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set npartecipanti
     *
     * @param boolean $npartecipanti
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set tiposervizio
     *
     * @param string $tiposervizio
     *
     * @return ModuloTo
     */
    public function setTiposervizio($tiposervizio)
    {
        $this->tiposervizio = $tiposervizio;

        return $this;
    }

    /**
     * Get tiposervizio
     *
     * @return string
     */
    public function getTiposervizio()
    {
        return $this->tiposervizio;
    }

    /**
     * Set erroriviaggio
     *
     * @param string $erroriviaggio
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set assicurazione
     *
     * @param string $assicurazione
     *
     * @return ModuloTo
     */
    public function setAssicurazione($assicurazione)
    {
        $this->assicurazione = $assicurazione;

        return $this;
    }

    /**
     * Get assicurazione
     *
     * @return string
     */
    public function getAssicurazione()
    {
        return $this->assicurazione;
    }

    /**
     * Set assfacoltativa
     *
     * @param string $assfacoltativa
     *
     * @return ModuloTo
     */
    public function setAssfacoltativa($assfacoltativa)
    {
        $this->assfacoltativa = $assfacoltativa;

        return $this;
    }

    /**
     * Get assfacoltativa
     *
     * @return string
     */
    public function getAssfacoltativa()
    {
        return $this->assfacoltativa;
    }

    /**
     * Set carburante
     *
     * @param string $carburante
     *
     * @return ModuloTo
     */
    public function setCarburante($carburante)
    {
        $this->carburante = $carburante;

        return $this;
    }

    /**
     * Get carburante
     *
     * @return string
     */
    public function getCarburante()
    {
        return $this->carburante;
    }

    /**
     * Set scontoagenzia
     *
     * @param string $scontoagenzia
     *
     * @return ModuloTo
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
     * Set acconto
     *
     * @param string $acconto
     *
     * @return ModuloTo
     */
    public function setAcconto($acconto)
    {
        $this->acconto = $acconto;

        return $this;
    }

    /**
     * Get acconto
     *
     * @return string
     */
    public function getAcconto()
    {
        return $this->acconto;
    }

    /**
     * Set pagamento
     *
     * @param string $pagamento
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set spesebonifico
     *
     * @param string $spesebonifico
     *
     * @return ModuloTo
     */
    public function setSpesebonifico($spesebonifico)
    {
        $this->spesebonifico = $spesebonifico;

        return $this;
    }

    /**
     * Get spesebonifico
     *
     * @return string
     */
    public function getSpesebonifico()
    {
        return $this->spesebonifico;
    }

    /**
     * Set commissionenetta
     *
     * @param string $commissionenetta
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set iscrizione
     *
     * @param string $iscrizione
     *
     * @return ModuloTo
     */
    public function setIscrizione($iscrizione)
    {
        $this->iscrizione = $iscrizione;

        return $this;
    }

    /**
     * Get iscrizione
     *
     * @return string
     */
    public function getIscrizione()
    {
        return $this->iscrizione;
    }

    /**
     * Set statusaves
     *
     * @param boolean $statusaves
     *
     * @return ModuloTo
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
     * Set notecontratto
     *
     * @param string $notecontratto
     *
     * @return ModuloTo
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
     * Set confermaPrenotazione
     *
     * @param string $confermaPrenotazione
     *
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * @return ModuloTo
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
     * Set commissioneassicurazione
     *
     * @param string $commissioneassicurazione
     *
     * @return ModuloTo
     */
    public function setCommissioneassicurazione($commissioneassicurazione)
    {
        $this->commissioneassicurazione = $commissioneassicurazione;

        return $this;
    }

    /**
     * Get commissioneassicurazione
     *
     * @return string
     */
    public function getCommissioneassicurazione()
    {
        return $this->commissioneassicurazione;
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

