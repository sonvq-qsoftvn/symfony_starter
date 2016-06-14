<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuloTraghetto
 *
 * @ORM\Table(name="modulo_traghetto", indexes={@ORM\Index(name="id_viaggio", columns={"id_viaggio"}), @ORM\Index(name="tipoDocumento", columns={"tipoDocumento"}), @ORM\Index(name="data", columns={"data"}), @ORM\Index(name="statusAves", columns={"statusAves"}), @ORM\Index(name="booking_stato", columns={"booking_stato"})})
 * @ORM\Entity
 */
class ModuloTraghetto
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
     * @ORM\Column(name="compagnia", type="string", length=100, nullable=false)
     */
    private $compagnia = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataIN", type="datetime", nullable=false)
     */
    private $datain = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="partenzaLuogo", type="string", length=100, nullable=false)
     */
    private $partenzaluogo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="partenzaOre", type="string", length=5, nullable=false)
     */
    private $partenzaore = '';

    /**
     * @var string
     *
     * @ORM\Column(name="partenza", type="string", length=3, nullable=false)
     */
    private $partenza = '';

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
     * @ORM\Column(name="partenzaArrivoOre", type="string", length=5, nullable=false)
     */
    private $partenzaarrivoore = '';

    /**
     * @var string
     *
     * @ORM\Column(name="partenzaSistemazione", type="string", length=100, nullable=false)
     */
    private $partenzasistemazione = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataOUT", type="datetime", nullable=false)
     */
    private $dataout = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoLuogo", type="string", length=100, nullable=false)
     */
    private $ritornoluogo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoOre", type="string", length=5, nullable=false)
     */
    private $ritornoore = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoArrivoLuogo", type="string", length=100, nullable=false)
     */
    private $ritornoarrivoluogo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoArrivoOre", type="string", length=5, nullable=false)
     */
    private $ritornoarrivoore = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoSistemazione", type="string", length=100, nullable=false)
     */
    private $ritornosistemazione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoMezzo", type="string", length=20, nullable=true)
     */
    private $tipomezzo = '00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="modello", type="string", length=100, nullable=false)
     */
    private $modello = '';

    /**
     * @var string
     *
     * @ORM\Column(name="targa", type="string", length=20, nullable=true)
     */
    private $targa = '00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="dimensione", type="string", length=10, nullable=false)
     */
    private $dimensione = '';

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
     * @ORM\Column(name="totale", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $totale = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="scontoAgenzia", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $scontoagenzia = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="agencyfee", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $agencyfee = '0.00';

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
     * @ORM\Column(name="commissioneCarta", type="decimal", precision=8, scale=2, nullable=false)
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
     * @ORM\Column(name="codiceAves_fornitori", type="string", length=20, nullable=false)
     */
    private $codiceavesFornitori;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statusAves", type="boolean", nullable=false)
     */
    private $statusaves = '0';

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
