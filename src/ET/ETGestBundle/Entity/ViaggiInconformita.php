<?php

namespace ET\ETGestBundle\Entity;

/**
 * ViaggiInconformita
 */
class ViaggiInconformita
{
    /**
     * @var string
     */
    private $messaggio;

    /**
     * @var string
     */
    private $regime;

    /**
     * @var string
     */
    private $tiposervizio;

    /**
     * @var string
     */
    private $noncompatible;


    /**
     * Set messaggio
     *
     * @param string $messaggio
     *
     * @return ViaggiInconformita
     */
    public function setMessaggio($messaggio)
    {
        $this->messaggio = $messaggio;

        return $this;
    }

    /**
     * Get messaggio
     *
     * @return string
     */
    public function getMessaggio()
    {
        return $this->messaggio;
    }

    /**
     * Set regime
     *
     * @param string $regime
     *
     * @return ViaggiInconformita
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
     * Set tiposervizio
     *
     * @param string $tiposervizio
     *
     * @return ViaggiInconformita
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
     * Set noncompatible
     *
     * @param string $noncompatible
     *
     * @return ViaggiInconformita
     */
    public function setNoncompatible($noncompatible)
    {
        $this->noncompatible = $noncompatible;

        return $this;
    }

    /**
     * Get noncompatible
     *
     * @return string
     */
    public function getNoncompatible()
    {
        return $this->noncompatible;
    }
}

