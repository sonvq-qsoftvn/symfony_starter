<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * LucaImmagini
 */
class LucaImmagini
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var integer
     */
    private $idarticolo = '0';

    /**
     * @var integer
     */
    private $idimmagine;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return LucaImmagini
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set idarticolo
     *
     * @param integer $idarticolo
     *
     * @return LucaImmagini
     */
    public function setIdarticolo($idarticolo)
    {
        $this->idarticolo = $idarticolo;

        return $this;
    }

    /**
     * Get idarticolo
     *
     * @return integer
     */
    public function getIdarticolo()
    {
        return $this->idarticolo;
    }

    /**
     * Get idimmagine
     *
     * @return integer
     */
    public function getIdimmagine()
    {
        return $this->idimmagine;
    }
}

