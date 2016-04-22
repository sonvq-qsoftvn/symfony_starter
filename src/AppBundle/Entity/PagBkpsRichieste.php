<?php

namespace AppBundle\Entity;

/**
 * PagBkpsRichieste
 */
class PagBkpsRichieste
{
    /**
     * @var string
     */
    private $idnegozio = '';

    /**
     * @var integer
     */
    private $importo = '0';

    /**
     * @var integer
     */
    private $valuta = '0';

    /**
     * @var string
     */
    private $tcontab = '';

    /**
     * @var string
     */
    private $tautor = '';

    /**
     * @var string
     */
    private $operazione = '';

    /**
     * @var string
     */
    private $timestamp = '';

    /**
     * @var string
     */
    private $operatore = '';

    /**
     * @var \DateTime
     */
    private $datainizio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $datafine = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $filtro = '0';

    /**
     * @var string
     */
    private $idtrans = '';

    /**
     * @var string
     */
    private $orainizio = '';

    /**
     * @var string
     */
    private $orafine = '';

    /**
     * @var string
     */
    private $reqrefnum;

    /**
     * @var string
     */
    private $numord;


    /**
     * Set idnegozio
     *
     * @param string $idnegozio
     *
     * @return PagBkpsRichieste
     */
    public function setIdnegozio($idnegozio)
    {
        $this->idnegozio = $idnegozio;

        return $this;
    }

    /**
     * Get idnegozio
     *
     * @return string
     */
    public function getIdnegozio()
    {
        return $this->idnegozio;
    }

    /**
     * Set importo
     *
     * @param integer $importo
     *
     * @return PagBkpsRichieste
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;

        return $this;
    }

    /**
     * Get importo
     *
     * @return integer
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * Set valuta
     *
     * @param integer $valuta
     *
     * @return PagBkpsRichieste
     */
    public function setValuta($valuta)
    {
        $this->valuta = $valuta;

        return $this;
    }

    /**
     * Get valuta
     *
     * @return integer
     */
    public function getValuta()
    {
        return $this->valuta;
    }

    /**
     * Set tcontab
     *
     * @param string $tcontab
     *
     * @return PagBkpsRichieste
     */
    public function setTcontab($tcontab)
    {
        $this->tcontab = $tcontab;

        return $this;
    }

    /**
     * Get tcontab
     *
     * @return string
     */
    public function getTcontab()
    {
        return $this->tcontab;
    }

    /**
     * Set tautor
     *
     * @param string $tautor
     *
     * @return PagBkpsRichieste
     */
    public function setTautor($tautor)
    {
        $this->tautor = $tautor;

        return $this;
    }

    /**
     * Get tautor
     *
     * @return string
     */
    public function getTautor()
    {
        return $this->tautor;
    }

    /**
     * Set operazione
     *
     * @param string $operazione
     *
     * @return PagBkpsRichieste
     */
    public function setOperazione($operazione)
    {
        $this->operazione = $operazione;

        return $this;
    }

    /**
     * Get operazione
     *
     * @return string
     */
    public function getOperazione()
    {
        return $this->operazione;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     *
     * @return PagBkpsRichieste
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set operatore
     *
     * @param string $operatore
     *
     * @return PagBkpsRichieste
     */
    public function setOperatore($operatore)
    {
        $this->operatore = $operatore;

        return $this;
    }

    /**
     * Get operatore
     *
     * @return string
     */
    public function getOperatore()
    {
        return $this->operatore;
    }

    /**
     * Set datainizio
     *
     * @param \DateTime $datainizio
     *
     * @return PagBkpsRichieste
     */
    public function setDatainizio($datainizio)
    {
        $this->datainizio = $datainizio;

        return $this;
    }

    /**
     * Get datainizio
     *
     * @return \DateTime
     */
    public function getDatainizio()
    {
        return $this->datainizio;
    }

    /**
     * Set datafine
     *
     * @param \DateTime $datafine
     *
     * @return PagBkpsRichieste
     */
    public function setDatafine($datafine)
    {
        $this->datafine = $datafine;

        return $this;
    }

    /**
     * Get datafine
     *
     * @return \DateTime
     */
    public function getDatafine()
    {
        return $this->datafine;
    }

    /**
     * Set filtro
     *
     * @param integer $filtro
     *
     * @return PagBkpsRichieste
     */
    public function setFiltro($filtro)
    {
        $this->filtro = $filtro;

        return $this;
    }

    /**
     * Get filtro
     *
     * @return integer
     */
    public function getFiltro()
    {
        return $this->filtro;
    }

    /**
     * Set idtrans
     *
     * @param string $idtrans
     *
     * @return PagBkpsRichieste
     */
    public function setIdtrans($idtrans)
    {
        $this->idtrans = $idtrans;

        return $this;
    }

    /**
     * Get idtrans
     *
     * @return string
     */
    public function getIdtrans()
    {
        return $this->idtrans;
    }

    /**
     * Set orainizio
     *
     * @param string $orainizio
     *
     * @return PagBkpsRichieste
     */
    public function setOrainizio($orainizio)
    {
        $this->orainizio = $orainizio;

        return $this;
    }

    /**
     * Get orainizio
     *
     * @return string
     */
    public function getOrainizio()
    {
        return $this->orainizio;
    }

    /**
     * Set orafine
     *
     * @param string $orafine
     *
     * @return PagBkpsRichieste
     */
    public function setOrafine($orafine)
    {
        $this->orafine = $orafine;

        return $this;
    }

    /**
     * Get orafine
     *
     * @return string
     */
    public function getOrafine()
    {
        return $this->orafine;
    }

    /**
     * Set reqrefnum
     *
     * @param string $reqrefnum
     *
     * @return PagBkpsRichieste
     */
    public function setReqrefnum($reqrefnum)
    {
        $this->reqrefnum = $reqrefnum;

        return $this;
    }

    /**
     * Get reqrefnum
     *
     * @return string
     */
    public function getReqrefnum()
    {
        return $this->reqrefnum;
    }

    /**
     * Set numord
     *
     * @param string $numord
     *
     * @return PagBkpsRichieste
     */
    public function setNumord($numord)
    {
        $this->numord = $numord;

        return $this;
    }

    /**
     * Get numord
     *
     * @return string
     */
    public function getNumord()
    {
        return $this->numord;
    }
}
