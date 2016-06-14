<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuloAssicurazione
 *
 * @ORM\Table(name="modulo_assicurazione", indexes={@ORM\Index(name="id_viaggio", columns={"id_viaggio"}), @ORM\Index(name="tipoDocumento", columns={"tipoDocumento"}), @ORM\Index(name="data", columns={"data"}), @ORM\Index(name="statusAves", columns={"statusAves"}), @ORM\Index(name="booking_stato", columns={"booking_stato"})})
 * @ORM\Entity
 */
class ModuloAssicurazione
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="integer", nullable=false)
     */
    private $idViaggio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer", nullable=false)
     */
    private $codpromotore = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreCreazione", type="integer", nullable=false)
     */
    private $codpromotorecreazione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=200, nullable=false)
     */
    private $titolo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text", length=65535, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoDocumento", type="integer", nullable=false)
     */
    private $tipodocumento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="destinazione", type="string", length=3, nullable=false)
     */
    private $destinazione = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="fornitore", type="smallint", nullable=false)
     */
    private $fornitore = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="numeroPreventivo", type="string", length=255, nullable=false)
     */
    private $numeropreventivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataIN", type="datetime", nullable=false)
     */
    private $datain = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataOUT", type="datetime", nullable=false)
     */
    private $dataout = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=16, nullable=false)
     */
    private $codiceFiscale = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nascitaNazione", type="string", length=3, nullable=false)
     */
    private $nascitanazione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nascitaProvincia", type="string", length=4, nullable=false)
     */
    private $nascitaprovincia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nascitaComune", type="string", length=100, nullable=false)
     */
    private $nascitacomune = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="nPartecipanti", type="boolean", nullable=false)
     */
    private $npartecipanti = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="partecipanti", type="text", nullable=false)
     */
    private $partecipanti;

    /**
     * @var string
     *
     * @ORM\Column(name="erroriViaggio", type="string", length=255, nullable=false)
     */
    private $erroriviaggio = '';

    /**
     * @var string
     *
     * @ORM\Column(name="noteModulo", type="text", length=65535, nullable=false)
     */
    private $notemodulo;

    /**
     * @var string
     *
     * @ORM\Column(name="totale", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $totale = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pagamento", type="string", length=20, nullable=false)
     */
    private $pagamento = '';

    /**
     * @var string
     *
     * @ORM\Column(name="statoPagamento", type="string", length=20, nullable=false)
     */
    private $statopagamento = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="modo_pagamento", type="integer", nullable=false)
     */
    private $modoPagamento = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataModifica", type="datetime", nullable=false)
     */
    private $datamodifica = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreModifica", type="integer", nullable=false)
     */
    private $codpromotoremodifica = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="numPrenotazione", type="string", length=20, nullable=false)
     */
    private $numprenotazione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="commissioneLorda", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $commissionelorda = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="commissioneCarta", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $commissionecarta = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="speseCorriere", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $spesecorriere = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="commissioneNetta", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $commissionenetta = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $iva = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreIVA", type="smallint", nullable=false)
     */
    private $codpromotoreiva = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codiceAves", type="string", length=20, nullable=false)
     */
    private $codiceaves = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iscrizione", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $iscrizione = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="statusAves", type="boolean", nullable=false)
     */
    private $statusaves = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="booking_stato", type="boolean", nullable=false)
     */
    private $bookingStato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="booking_codPromotoreStato", type="integer", nullable=false)
     */
    private $bookingCodpromotorestato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="booking_codPromotoreLavorazione", type="integer", nullable=false)
     */
    private $bookingCodpromotorelavorazione = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="booking_letto", type="boolean", nullable=false)
     */
    private $bookingLetto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInvio", type="datetime", nullable=true)
     */
    private $datainvio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ec_letto", type="boolean", nullable=false)
     */
    private $ecLetto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulo;



    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return ModuloAssicurazione
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
     * Set fornitore
     *
     * @param integer $fornitore
     *
     * @return ModuloAssicurazione
     */
    public function setFornitore($fornitore)
    {
        $this->fornitore = $fornitore;

        return $this;
    }

    /**
     * Get fornitore
     *
     * @return integer
     */
    public function getFornitore()
    {
        return $this->fornitore;
    }

    /**
     * Set numeropreventivo
     *
     * @param string $numeropreventivo
     *
     * @return ModuloAssicurazione
     */
    public function setNumeropreventivo($numeropreventivo)
    {
        $this->numeropreventivo = $numeropreventivo;

        return $this;
    }

    /**
     * Get numeropreventivo
     *
     * @return string
     */
    public function getNumeropreventivo()
    {
        return $this->numeropreventivo;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * Set codiceFiscale
     *
     * @param string $codiceFiscale
     *
     * @return ModuloAssicurazione
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
     * Set nascitanazione
     *
     * @param string $nascitanazione
     *
     * @return ModuloAssicurazione
     */
    public function setNascitanazione($nascitanazione)
    {
        $this->nascitanazione = $nascitanazione;

        return $this;
    }

    /**
     * Get nascitanazione
     *
     * @return string
     */
    public function getNascitanazione()
    {
        return $this->nascitanazione;
    }

    /**
     * Set nascitaprovincia
     *
     * @param string $nascitaprovincia
     *
     * @return ModuloAssicurazione
     */
    public function setNascitaprovincia($nascitaprovincia)
    {
        $this->nascitaprovincia = $nascitaprovincia;

        return $this;
    }

    /**
     * Get nascitaprovincia
     *
     * @return string
     */
    public function getNascitaprovincia()
    {
        return $this->nascitaprovincia;
    }

    /**
     * Set nascitacomune
     *
     * @param string $nascitacomune
     *
     * @return ModuloAssicurazione
     */
    public function setNascitacomune($nascitacomune)
    {
        $this->nascitacomune = $nascitacomune;

        return $this;
    }

    /**
     * Get nascitacomune
     *
     * @return string
     */
    public function getNascitacomune()
    {
        return $this->nascitacomune;
    }

    /**
     * Set npartecipanti
     *
     * @param boolean $npartecipanti
     *
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * Set notemodulo
     *
     * @param string $notemodulo
     *
     * @return ModuloAssicurazione
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
     * Set totale
     *
     * @param string $totale
     *
     * @return ModuloAssicurazione
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
     * Set pagamento
     *
     * @param string $pagamento
     *
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * Set bookingStato
     *
     * @param boolean $bookingStato
     *
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
     * @return ModuloAssicurazione
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
