<?php

namespace ET\ETGestBundle\Entity;

/**
 * IncassiTipologie
 */
class IncassiTipologie
{
    /**
     * @var string
     */
    private $codice;

    /**
     * @var string
     */
    private $agenzia;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $credenziali;

    /**
     * @var string
     */
    private $commissione = '0.00';

    /**
     * @var boolean
     */
    private $allegatorichiesto = '0';

    /**
     * @var boolean
     */
    private $esportabile = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set codice
     *
     * @param string $codice
     *
     * @return IncassiTipologie
     */
    public function setCodice($codice)
    {
        $this->codice = $codice;

        return $this;
    }

    /**
     * Get codice
     *
     * @return string
     */
    public function getCodice()
    {
        return $this->codice;
    }

    /**
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return IncassiTipologie
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return IncassiTipologie
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
     * Set credenziali
     *
     * @param string $credenziali
     *
     * @return IncassiTipologie
     */
    public function setCredenziali($credenziali)
    {
        $this->credenziali = $credenziali;

        return $this;
    }

    /**
     * Get credenziali
     *
     * @return string
     */
    public function getCredenziali()
    {
        return $this->credenziali;
    }

    /**
     * Set commissione
     *
     * @param string $commissione
     *
     * @return IncassiTipologie
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
     * Set allegatorichiesto
     *
     * @param boolean $allegatorichiesto
     *
     * @return IncassiTipologie
     */
    public function setAllegatorichiesto($allegatorichiesto)
    {
        $this->allegatorichiesto = $allegatorichiesto;

        return $this;
    }

    /**
     * Get allegatorichiesto
     *
     * @return boolean
     */
    public function getAllegatorichiesto()
    {
        return $this->allegatorichiesto;
    }

    /**
     * Set esportabile
     *
     * @param boolean $esportabile
     *
     * @return IncassiTipologie
     */
    public function setEsportabile($esportabile)
    {
        $this->esportabile = $esportabile;

        return $this;
    }

    /**
     * Get esportabile
     *
     * @return boolean
     */
    public function getEsportabile()
    {
        return $this->esportabile;
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

