<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuloTo
 *
 * @ORM\Table(name="modulo_to", indexes={@ORM\Index(name="id_viaggio", columns={"id_viaggio"}), @ORM\Index(name="tipoDocumento", columns={"tipoDocumento"}), @ORM\Index(name="data", columns={"data"}), @ORM\Index(name="statusAves", columns={"statusAves"}), @ORM\Index(name="booking_stato", columns={"booking_stato"})})
 * @ORM\Entity
 */
class ModuloTo
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
     * @ORM\Column(name="to", type="string", length=100, nullable=false)
     */
    private $to = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="portale", type="smallint", nullable=false)
     */
    private $portale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promoRif", type="string", length=100, nullable=false)
     */
    private $promorif = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idOfferta", type="string", length=20, nullable=false)
     */
    private $idofferta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nrOpzione", type="string", length=20, nullable=false)
     */
    private $nropzione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="destinazione", type="string", length=3, nullable=false)
     */
    private $destinazione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita", type="string", length=100, nullable=false)
     */
    private $localita = '';

    /**
     * @var string
     *
     * @ORM\Column(name="aeroportoPartenza", type="string", length=100, nullable=false)
     */
    private $aeroportopartenza = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nomeStruttura", type="string", length=100, nullable=false)
     */
    private $nomestruttura = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoStruttura", type="string", length=255, nullable=false)
     */
    private $tipostruttura = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoSistemazione_old", type="string", length=100, nullable=false)
     */
    private $tiposistemazioneOld = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoSistemazione", type="text", length=65535, nullable=false)
     */
    private $tiposistemazione;

    /**
     * @var string
     *
     * @ORM\Column(name="trattamento", type="string", length=100, nullable=false)
     */
    private $trattamento = '';

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
     * @ORM\Column(name="tipoServizio", type="string", length=20, nullable=false)
     */
    private $tiposervizio = '';

    /**
     * @var string
     *
     * @ORM\Column(name="erroriViaggio", type="string", length=255, nullable=false)
     */
    private $erroriviaggio = '';

    /**
     * @var string
     *
     * @ORM\Column(name="totale", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $totale = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="assicurazione", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $assicurazione = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="assFacoltativa", type="string", length=1, nullable=false)
     */
    private $assfacoltativa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="carburante", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $carburante = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="scontoAgenzia", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $scontoagenzia = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="acconto", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $acconto = '0.00';

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
     * @var string
     *
     * @ORM\Column(name="noteModulo", type="text", length=65535, nullable=false)
     */
    private $notemodulo;

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
     * @ORM\Column(name="speseBonifico", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $spesebonifico = '0.00';

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
     * @ORM\Column(name="codPromotoreIVA", type="integer", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="noteContratto", type="string", length=200, nullable=false)
     */
    private $notecontratto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conferma_prenotazione", type="string", length=1, nullable=false)
     */
    private $confermaPrenotazione = '';

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
     * @var string
     *
     * @ORM\Column(name="commissioneAssicurazione", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $commissioneassicurazione = '0.00';

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
