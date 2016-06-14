<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comuni
 *
 * @ORM\Table(name="comuni")
 * @ORM\Entity
 */
class Comuni
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=128, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=4, nullable=false)
     */
    private $provincia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="catasto", type="string", length=8, nullable=false)
     */
    private $catasto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione", type="string", length=128, nullable=false)
     */
    private $regione = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
