<?php

namespace AppBundle\Entity;

/**
 * PhpTipoCampagne
 */
class PhpTipoCampagne
{
    /**
     * @var string
     */
    private $nomecampagna = '';

    /**
     * @var integer
     */
    private $ridistribuzioneNet = '0';

    /**
     * @var boolean
     */
    private $attiva = '0';

    /**
     * @var boolean
     */
    private $visibile = '0';

    /**
     * @var string
     */
    private $filtro = '';

    /**
     * @var boolean
     */
    private $default = '0';

    /**
     * @var string
     */
    private $fraseAgente;

    /**
     * @var boolean
     */
    private $notificaFine = '0';

    /**
     * @var string
     */
    private $commento;

    /**
     * @var boolean
     */
    private $tipologia = '0';

    /**
     * @var integer
     */
    private $usercreazione = '0';

    /**
     * @var integer
     */
    private $idportale = '0';

    /**
     * @var integer
     */
    private $googleconversionid = '0';

    /**
     * @var integer
     */
    private $idtipocampagna;


    /**
     * Set nomecampagna
     *
     * @param string $nomecampagna
     *
     * @return PhpTipoCampagne
     */
    public function setNomecampagna($nomecampagna)
    {
        $this->nomecampagna = $nomecampagna;

        return $this;
    }

    /**
     * Get nomecampagna
     *
     * @return string
     */
    public function getNomecampagna()
    {
        return $this->nomecampagna;
    }

    /**
     * Set ridistribuzioneNet
     *
     * @param integer $ridistribuzioneNet
     *
     * @return PhpTipoCampagne
     */
    public function setRidistribuzioneNet($ridistribuzioneNet)
    {
        $this->ridistribuzioneNet = $ridistribuzioneNet;

        return $this;
    }

    /**
     * Get ridistribuzioneNet
     *
     * @return integer
     */
    public function getRidistribuzioneNet()
    {
        return $this->ridistribuzioneNet;
    }

    /**
     * Set attiva
     *
     * @param boolean $attiva
     *
     * @return PhpTipoCampagne
     */
    public function setAttiva($attiva)
    {
        $this->attiva = $attiva;

        return $this;
    }

    /**
     * Get attiva
     *
     * @return boolean
     */
    public function getAttiva()
    {
        return $this->attiva;
    }

    /**
     * Set visibile
     *
     * @param boolean $visibile
     *
     * @return PhpTipoCampagne
     */
    public function setVisibile($visibile)
    {
        $this->visibile = $visibile;

        return $this;
    }

    /**
     * Get visibile
     *
     * @return boolean
     */
    public function getVisibile()
    {
        return $this->visibile;
    }

    /**
     * Set filtro
     *
     * @param string $filtro
     *
     * @return PhpTipoCampagne
     */
    public function setFiltro($filtro)
    {
        $this->filtro = $filtro;

        return $this;
    }

    /**
     * Get filtro
     *
     * @return string
     */
    public function getFiltro()
    {
        return $this->filtro;
    }

    /**
     * Set default
     *
     * @param boolean $default
     *
     * @return PhpTipoCampagne
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return boolean
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set fraseAgente
     *
     * @param string $fraseAgente
     *
     * @return PhpTipoCampagne
     */
    public function setFraseAgente($fraseAgente)
    {
        $this->fraseAgente = $fraseAgente;

        return $this;
    }

    /**
     * Get fraseAgente
     *
     * @return string
     */
    public function getFraseAgente()
    {
        return $this->fraseAgente;
    }

    /**
     * Set notificaFine
     *
     * @param boolean $notificaFine
     *
     * @return PhpTipoCampagne
     */
    public function setNotificaFine($notificaFine)
    {
        $this->notificaFine = $notificaFine;

        return $this;
    }

    /**
     * Get notificaFine
     *
     * @return boolean
     */
    public function getNotificaFine()
    {
        return $this->notificaFine;
    }

    /**
     * Set commento
     *
     * @param string $commento
     *
     * @return PhpTipoCampagne
     */
    public function setCommento($commento)
    {
        $this->commento = $commento;

        return $this;
    }

    /**
     * Get commento
     *
     * @return string
     */
    public function getCommento()
    {
        return $this->commento;
    }

    /**
     * Set tipologia
     *
     * @param boolean $tipologia
     *
     * @return PhpTipoCampagne
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return boolean
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set usercreazione
     *
     * @param integer $usercreazione
     *
     * @return PhpTipoCampagne
     */
    public function setUsercreazione($usercreazione)
    {
        $this->usercreazione = $usercreazione;

        return $this;
    }

    /**
     * Get usercreazione
     *
     * @return integer
     */
    public function getUsercreazione()
    {
        return $this->usercreazione;
    }

    /**
     * Set idportale
     *
     * @param integer $idportale
     *
     * @return PhpTipoCampagne
     */
    public function setIdportale($idportale)
    {
        $this->idportale = $idportale;

        return $this;
    }

    /**
     * Get idportale
     *
     * @return integer
     */
    public function getIdportale()
    {
        return $this->idportale;
    }

    /**
     * Set googleconversionid
     *
     * @param integer $googleconversionid
     *
     * @return PhpTipoCampagne
     */
    public function setGoogleconversionid($googleconversionid)
    {
        $this->googleconversionid = $googleconversionid;

        return $this;
    }

    /**
     * Get googleconversionid
     *
     * @return integer
     */
    public function getGoogleconversionid()
    {
        return $this->googleconversionid;
    }

    /**
     * Get idtipocampagna
     *
     * @return integer
     */
    public function getIdtipocampagna()
    {
        return $this->idtipocampagna;
    }
}
