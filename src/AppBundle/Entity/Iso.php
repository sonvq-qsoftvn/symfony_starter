<?php

namespace AppBundle\Entity;

/**
 * Iso
 */
class Iso
{
    /**
     * @var string
     */
    private $codice = '';

    /**
     * @var string
     */
    private $stato = '';

    /**
     * @var string
     */
    private $opzioni;

    /**
     * @var boolean
     */
    private $comunitaria = '0';

    /**
     * @var boolean
     */
    private $tipologianazione = '0';

    /**
     * @var string
     */
    private $prefissointernazionale;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set codice
     *
     * @param string $codice
     *
     * @return Iso
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
     * Set stato
     *
     * @param string $stato
     *
     * @return Iso
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return string
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set opzioni
     *
     * @param string $opzioni
     *
     * @return Iso
     */
    public function setOpzioni($opzioni)
    {
        $this->opzioni = $opzioni;

        return $this;
    }

    /**
     * Get opzioni
     *
     * @return string
     */
    public function getOpzioni()
    {
        return $this->opzioni;
    }

    /**
     * Set comunitaria
     *
     * @param boolean $comunitaria
     *
     * @return Iso
     */
    public function setComunitaria($comunitaria)
    {
        $this->comunitaria = $comunitaria;

        return $this;
    }

    /**
     * Get comunitaria
     *
     * @return boolean
     */
    public function getComunitaria()
    {
        return $this->comunitaria;
    }

    /**
     * Set tipologianazione
     *
     * @param boolean $tipologianazione
     *
     * @return Iso
     */
    public function setTipologianazione($tipologianazione)
    {
        $this->tipologianazione = $tipologianazione;

        return $this;
    }

    /**
     * Get tipologianazione
     *
     * @return boolean
     */
    public function getTipologianazione()
    {
        return $this->tipologianazione;
    }

    /**
     * Set prefissointernazionale
     *
     * @param string $prefissointernazionale
     *
     * @return Iso
     */
    public function setPrefissointernazionale($prefissointernazionale)
    {
        $this->prefissointernazionale = $prefissointernazionale;

        return $this;
    }

    /**
     * Get prefissointernazionale
     *
     * @return string
     */
    public function getPrefissointernazionale()
    {
        return $this->prefissointernazionale;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return Iso
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
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
