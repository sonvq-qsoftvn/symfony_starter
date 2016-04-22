<?php

namespace AppBundle\Entity;

/**
 * Province
 */
class Province
{
    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $regione = '';

    /**
     * @var string
     */
    private $sigla;


    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Province
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
     * Set regione
     *
     * @param string $regione
     *
     * @return Province
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
     * Get sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }
}
