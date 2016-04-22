<?php

namespace AppBundle\Entity;

/**
 * Comuni
 */
class Comuni
{
    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $catasto = '';

    /**
     * @var string
     */
    private $regione = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Comuni
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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Comuni
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set catasto
     *
     * @param string $catasto
     *
     * @return Comuni
     */
    public function setCatasto($catasto)
    {
        $this->catasto = $catasto;

        return $this;
    }

    /**
     * Get catasto
     *
     * @return string
     */
    public function getCatasto()
    {
        return $this->catasto;
    }

    /**
     * Set regione
     *
     * @param string $regione
     *
     * @return Comuni
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string
     */
    public function getRegione()
    {
        return $this->regione;
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
