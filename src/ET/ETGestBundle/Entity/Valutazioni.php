<?php

namespace ET\ETGestBundle\Entity;

/**
 * Valutazioni
 */
class Valutazioni
{
    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var boolean
     */
    private $valutazione;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Valutazioni
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
     * Get valutazione
     *
     * @return boolean
     */
    public function getValutazione()
    {
        return $this->valutazione;
    }
}

