<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valutazioni
 *
 * @ORM\Table(name="valutazioni")
 * @ORM\Entity
 */
class Valutazioni
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=30, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="valutazione", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
