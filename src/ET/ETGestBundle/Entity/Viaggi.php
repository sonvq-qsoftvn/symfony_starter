<?php

namespace ET\ETGestBundle\Entity;

/**
 * Viaggi
 */
class Viaggi
{
    /**
     * @var string
     */
    private $idAnagrafica = '';

    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var string
     */
    private $tipologia = '';

    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var boolean
     */
    private $valutazione = '0';

    /**
     * @var string
     */
    private $destinazionetext;

    /**
     * @var string
     */
    private $destinazioneIso;

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var \DateTime
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $datamodifica;

    /**
     * @var \DateTime
     */
    private $datacompleto = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dataviaggio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $datainizioviaggio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $datafineviaggio = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $avesRisposta;

    /**
     * @var string
     */
    private $agenzia = 'ETIta';

    /**
     * @var string
     */
    private $valuta;

    /**
     * @var boolean
     */
    private $versione = '1';

    /**
     * @var float
     */
    private $margineminimo = '0';

    /**
     * @var float
     */
    private $margineconsigliato = '0';

    /**
     * @var string
     */
    private $regime;

    /**
     * @var string
     */
    private $titoloIt;

    /**
     * @var string
     */
    private $titoloEs;

    /**
     * @var string
     */
    private $titoloEn;

    /**
     * @var string
     */
    private $titolotext;

    /**
     * @var string
     */
    private $erroriviaggio;

    /**
     * @var string
     */
    private $apikey;

    /**
     * @var string
     */
    private $apisiapkey;

    /**
     * @var boolean
     */
    private $apistatus = '0';

    /**
     * @var boolean
     */
    private $apisiapstatus = '0';

    /**
     * @var boolean
     */
    private $apiesportato = '0';

    /**
     * @var boolean
     */
    private $apisiapesportato = '0';

    /**
     * @var string
     */
    private $viaggiototale = '0.00';

    /**
     * @var string
     */
    private $viaggiototaledovuto = '0.00';

    /**
     * @var string
     */
    private $viaggiototaleoperatore = '0.00';

    /**
     * @var string
     */
    private $viaggiototalecosti = '0.00';

    /**
     * @var string
     */
    private $viaggiototaleimposte = '0.00';

    /**
     * @var string
     */
    private $viaggiomargine = '0.00';

    /**
     * @var string
     */
    private $listascorpori;

    /**
     * @var integer
     */
    private $ngiornipratica;

    /**
     * @var integer
     */
    private $nnottipratica;

    /**
     * @var string
     */
    private $quota;

    /**
     * @var boolean
     */
    private $tipoivapratica = '0';

    /**
     * @var integer
     */
    private $idViaggio;


    /**
     * Set idAnagrafica
     *
     * @param string $idAnagrafica
     *
     * @return Viaggi
     */
    public function setIdAnagrafica($idAnagrafica)
    {
        $this->idAnagrafica = $idAnagrafica;

        return $this;
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

    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return Viaggi
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
     * Set tipologia
     *
     * @param string $tipologia
     *
     * @return Viaggi
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return string
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Viaggi
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
     * Set valutazione
     *
     * @param boolean $valutazione
     *
     * @return Viaggi
     */
    public function setValutazione($valutazione)
    {
        $this->valutazione = $valutazione;

        return $this;
    }

    /**
     * Get valutazione
     *
     * @return boolean
     */
    public function getValutazione()
    {
        return $this->valutazione;
    }

    /**
     * Set destinazionetext
     *
     * @param string $destinazionetext
     *
     * @return Viaggi
     */
    public function setDestinazionetext($destinazionetext)
    {
        $this->destinazionetext = $destinazionetext;

        return $this;
    }

    /**
     * Get destinazionetext
     *
     * @return string
     */
    public function getDestinazionetext()
    {
        return $this->destinazionetext;
    }

    /**
     * Set destinazioneIso
     *
     * @param string $destinazioneIso
     *
     * @return Viaggi
     */
    public function setDestinazioneIso($destinazioneIso)
    {
        $this->destinazioneIso = $destinazioneIso;

        return $this;
    }

    /**
     * Get destinazioneIso
     *
     * @return string
     */
    public function getDestinazioneIso()
    {
        return $this->destinazioneIso;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Viaggi
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Viaggi
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
     * @return Viaggi
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
     * Set datacompleto
     *
     * @param \DateTime $datacompleto
     *
     * @return Viaggi
     */
    public function setDatacompleto($datacompleto)
    {
        $this->datacompleto = $datacompleto;

        return $this;
    }

    /**
     * Get datacompleto
     *
     * @return \DateTime
     */
    public function getDatacompleto()
    {
        return $this->datacompleto;
    }

    /**
     * Set dataviaggio
     *
     * @param \DateTime $dataviaggio
     *
     * @return Viaggi
     */
    public function setDataviaggio($dataviaggio)
    {
        $this->dataviaggio = $dataviaggio;

        return $this;
    }

    /**
     * Get dataviaggio
     *
     * @return \DateTime
     */
    public function getDataviaggio()
    {
        return $this->dataviaggio;
    }

    /**
     * Set datainizioviaggio
     *
     * @param \DateTime $datainizioviaggio
     *
     * @return Viaggi
     */
    public function setDatainizioviaggio($datainizioviaggio)
    {
        $this->datainizioviaggio = $datainizioviaggio;

        return $this;
    }

    /**
     * Get datainizioviaggio
     *
     * @return \DateTime
     */
    public function getDatainizioviaggio()
    {
        return $this->datainizioviaggio;
    }

    /**
     * Set datafineviaggio
     *
     * @param \DateTime $datafineviaggio
     *
     * @return Viaggi
     */
    public function setDatafineviaggio($datafineviaggio)
    {
        $this->datafineviaggio = $datafineviaggio;

        return $this;
    }

    /**
     * Get datafineviaggio
     *
     * @return \DateTime
     */
    public function getDatafineviaggio()
    {
        return $this->datafineviaggio;
    }

    /**
     * Set avesRisposta
     *
     * @param string $avesRisposta
     *
     * @return Viaggi
     */
    public function setAvesRisposta($avesRisposta)
    {
        $this->avesRisposta = $avesRisposta;

        return $this;
    }

    /**
     * Get avesRisposta
     *
     * @return string
     */
    public function getAvesRisposta()
    {
        return $this->avesRisposta;
    }

    /**
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return Viaggi
     */
    public function setAgenzia($agenzia)
    {
        $this->agenzia = $agenzia;

        return $this;
    }

    /**
     * Get agenzia
     *
     * @return string
     */
    public function getAgenzia()
    {
        return $this->agenzia;
    }

    /**
     * Set valuta
     *
     * @param string $valuta
     *
     * @return Viaggi
     */
    public function setValuta($valuta)
    {
        $this->valuta = $valuta;

        return $this;
    }

    /**
     * Get valuta
     *
     * @return string
     */
    public function getValuta()
    {
        return $this->valuta;
    }

    /**
     * Set versione
     *
     * @param boolean $versione
     *
     * @return Viaggi
     */
    public function setVersione($versione)
    {
        $this->versione = $versione;

        return $this;
    }

    /**
     * Get versione
     *
     * @return boolean
     */
    public function getVersione()
    {
        return $this->versione;
    }

    /**
     * Set margineminimo
     *
     * @param float $margineminimo
     *
     * @return Viaggi
     */
    public function setMargineminimo($margineminimo)
    {
        $this->margineminimo = $margineminimo;

        return $this;
    }

    /**
     * Get margineminimo
     *
     * @return float
     */
    public function getMargineminimo()
    {
        return $this->margineminimo;
    }

    /**
     * Set margineconsigliato
     *
     * @param float $margineconsigliato
     *
     * @return Viaggi
     */
    public function setMargineconsigliato($margineconsigliato)
    {
        $this->margineconsigliato = $margineconsigliato;

        return $this;
    }

    /**
     * Get margineconsigliato
     *
     * @return float
     */
    public function getMargineconsigliato()
    {
        return $this->margineconsigliato;
    }

    /**
     * Set regime
     *
     * @param string $regime
     *
     * @return Viaggi
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return string
     */
    public function getRegime()
    {
        return $this->regime;
    }

    /**
     * Set titoloIt
     *
     * @param string $titoloIt
     *
     * @return Viaggi
     */
    public function setTitoloIt($titoloIt)
    {
        $this->titoloIt = $titoloIt;

        return $this;
    }

    /**
     * Get titoloIt
     *
     * @return string
     */
    public function getTitoloIt()
    {
        return $this->titoloIt;
    }

    /**
     * Set titoloEs
     *
     * @param string $titoloEs
     *
     * @return Viaggi
     */
    public function setTitoloEs($titoloEs)
    {
        $this->titoloEs = $titoloEs;

        return $this;
    }

    /**
     * Get titoloEs
     *
     * @return string
     */
    public function getTitoloEs()
    {
        return $this->titoloEs;
    }

    /**
     * Set titoloEn
     *
     * @param string $titoloEn
     *
     * @return Viaggi
     */
    public function setTitoloEn($titoloEn)
    {
        $this->titoloEn = $titoloEn;

        return $this;
    }

    /**
     * Get titoloEn
     *
     * @return string
     */
    public function getTitoloEn()
    {
        return $this->titoloEn;
    }

    /**
     * Set titolotext
     *
     * @param string $titolotext
     *
     * @return Viaggi
     */
    public function setTitolotext($titolotext)
    {
        $this->titolotext = $titolotext;

        return $this;
    }

    /**
     * Get titolotext
     *
     * @return string
     */
    public function getTitolotext()
    {
        return $this->titolotext;
    }

    /**
     * Set erroriviaggio
     *
     * @param string $erroriviaggio
     *
     * @return Viaggi
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
     * Set apikey
     *
     * @param string $apikey
     *
     * @return Viaggi
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
     * Set apisiapkey
     *
     * @param string $apisiapkey
     *
     * @return Viaggi
     */
    public function setApisiapkey($apisiapkey)
    {
        $this->apisiapkey = $apisiapkey;

        return $this;
    }

    /**
     * Get apisiapkey
     *
     * @return string
     */
    public function getApisiapkey()
    {
        return $this->apisiapkey;
    }

    /**
     * Set apistatus
     *
     * @param boolean $apistatus
     *
     * @return Viaggi
     */
    public function setApistatus($apistatus)
    {
        $this->apistatus = $apistatus;

        return $this;
    }

    /**
     * Get apistatus
     *
     * @return boolean
     */
    public function getApistatus()
    {
        return $this->apistatus;
    }

    /**
     * Set apisiapstatus
     *
     * @param boolean $apisiapstatus
     *
     * @return Viaggi
     */
    public function setApisiapstatus($apisiapstatus)
    {
        $this->apisiapstatus = $apisiapstatus;

        return $this;
    }

    /**
     * Get apisiapstatus
     *
     * @return boolean
     */
    public function getApisiapstatus()
    {
        return $this->apisiapstatus;
    }

    /**
     * Set apiesportato
     *
     * @param boolean $apiesportato
     *
     * @return Viaggi
     */
    public function setApiesportato($apiesportato)
    {
        $this->apiesportato = $apiesportato;

        return $this;
    }

    /**
     * Get apiesportato
     *
     * @return boolean
     */
    public function getApiesportato()
    {
        return $this->apiesportato;
    }

    /**
     * Set apisiapesportato
     *
     * @param boolean $apisiapesportato
     *
     * @return Viaggi
     */
    public function setApisiapesportato($apisiapesportato)
    {
        $this->apisiapesportato = $apisiapesportato;

        return $this;
    }

    /**
     * Get apisiapesportato
     *
     * @return boolean
     */
    public function getApisiapesportato()
    {
        return $this->apisiapesportato;
    }

    /**
     * Set viaggiototale
     *
     * @param string $viaggiototale
     *
     * @return Viaggi
     */
    public function setViaggiototale($viaggiototale)
    {
        $this->viaggiototale = $viaggiototale;

        return $this;
    }

    /**
     * Get viaggiototale
     *
     * @return string
     */
    public function getViaggiototale()
    {
        return $this->viaggiototale;
    }

    /**
     * Set viaggiototaledovuto
     *
     * @param string $viaggiototaledovuto
     *
     * @return Viaggi
     */
    public function setViaggiototaledovuto($viaggiototaledovuto)
    {
        $this->viaggiototaledovuto = $viaggiototaledovuto;

        return $this;
    }

    /**
     * Get viaggiototaledovuto
     *
     * @return string
     */
    public function getViaggiototaledovuto()
    {
        return $this->viaggiototaledovuto;
    }

    /**
     * Set viaggiototaleoperatore
     *
     * @param string $viaggiototaleoperatore
     *
     * @return Viaggi
     */
    public function setViaggiototaleoperatore($viaggiototaleoperatore)
    {
        $this->viaggiototaleoperatore = $viaggiototaleoperatore;

        return $this;
    }

    /**
     * Get viaggiototaleoperatore
     *
     * @return string
     */
    public function getViaggiototaleoperatore()
    {
        return $this->viaggiototaleoperatore;
    }

    /**
     * Set viaggiototalecosti
     *
     * @param string $viaggiototalecosti
     *
     * @return Viaggi
     */
    public function setViaggiototalecosti($viaggiototalecosti)
    {
        $this->viaggiototalecosti = $viaggiototalecosti;

        return $this;
    }

    /**
     * Get viaggiototalecosti
     *
     * @return string
     */
    public function getViaggiototalecosti()
    {
        return $this->viaggiototalecosti;
    }

    /**
     * Set viaggiototaleimposte
     *
     * @param string $viaggiototaleimposte
     *
     * @return Viaggi
     */
    public function setViaggiototaleimposte($viaggiototaleimposte)
    {
        $this->viaggiototaleimposte = $viaggiototaleimposte;

        return $this;
    }

    /**
     * Get viaggiototaleimposte
     *
     * @return string
     */
    public function getViaggiototaleimposte()
    {
        return $this->viaggiototaleimposte;
    }

    /**
     * Set viaggiomargine
     *
     * @param string $viaggiomargine
     *
     * @return Viaggi
     */
    public function setViaggiomargine($viaggiomargine)
    {
        $this->viaggiomargine = $viaggiomargine;

        return $this;
    }

    /**
     * Get viaggiomargine
     *
     * @return string
     */
    public function getViaggiomargine()
    {
        return $this->viaggiomargine;
    }

    /**
     * Set listascorpori
     *
     * @param string $listascorpori
     *
     * @return Viaggi
     */
    public function setListascorpori($listascorpori)
    {
        $this->listascorpori = $listascorpori;

        return $this;
    }

    /**
     * Get listascorpori
     *
     * @return string
     */
    public function getListascorpori()
    {
        return $this->listascorpori;
    }

    /**
     * Set ngiornipratica
     *
     * @param integer $ngiornipratica
     *
     * @return Viaggi
     */
    public function setNgiornipratica($ngiornipratica)
    {
        $this->ngiornipratica = $ngiornipratica;

        return $this;
    }

    /**
     * Get ngiornipratica
     *
     * @return integer
     */
    public function getNgiornipratica()
    {
        return $this->ngiornipratica;
    }

    /**
     * Set nnottipratica
     *
     * @param integer $nnottipratica
     *
     * @return Viaggi
     */
    public function setNnottipratica($nnottipratica)
    {
        $this->nnottipratica = $nnottipratica;

        return $this;
    }

    /**
     * Get nnottipratica
     *
     * @return integer
     */
    public function getNnottipratica()
    {
        return $this->nnottipratica;
    }

    /**
     * Set quota
     *
     * @param string $quota
     *
     * @return Viaggi
     */
    public function setQuota($quota)
    {
        $this->quota = $quota;

        return $this;
    }

    /**
     * Get quota
     *
     * @return string
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * Set tipoivapratica
     *
     * @param boolean $tipoivapratica
     *
     * @return Viaggi
     */
    public function setTipoivapratica($tipoivapratica)
    {
        $this->tipoivapratica = $tipoivapratica;

        return $this;
    }

    /**
     * Get tipoivapratica
     *
     * @return boolean
     */
    public function getTipoivapratica()
    {
        return $this->tipoivapratica;
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
}

