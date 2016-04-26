<?php

namespace ET\ETGestBundle\Entity;

/**
 * Status
 */
class Status
{
    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var boolean
     */
    private $status;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Status
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
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}

