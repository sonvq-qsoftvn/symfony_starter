<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziNoleggio
 *
 * @ORM\Table(name="servizi_noleggio")
 * @ORM\Entity
 */
class ServiziNoleggio
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datain", type="date", nullable=true)
     */
    private $datain;

    /**
     * @var string
     *
     * @ORM\Column(name="ritiro_luogo", type="string", length=50, nullable=true)
     */
    private $ritiroLuogo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ritiro_ore", type="time", nullable=true)
     */
    private $ritiroOre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataout", type="date", nullable=true)
     */
    private $dataout;

    /**
     * @var string
     *
     * @ORM\Column(name="consegna_luogo", type="string", length=50, nullable=true)
     */
    private $consegnaLuogo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="consegna_ore", type="time", nullable=true)
     */
    private $consegnaOre;

    /**
     * @var string
     *
     * @ORM\Column(name="mezzo_tipo", type="string", length=255, nullable=true)
     */
    private $mezzoTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="mezzo_modello", type="string", length=255, nullable=true)
     */
    private $mezzoModello;

    /**
     * @var string
     *
     * @ORM\Column(name="mezzo_targa", type="string", length=20, nullable=true)
     */
    private $mezzoTarga;

    /**
     * @var string
     *
     * @ORM\Column(name="guidatore", type="string", length=255, nullable=false)
     */
    private $guidatore;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ServiziNoleggio
     */
    public function setDatain($datain)
    {
        $this->datain = $datain;

        return $this;
    }

    /**
     * Get datain
     *
     * @return \DateTime
     */
    public function getDatain()
    {
        return $this->datain;
    }

    /**
     * Set ritiroLuogo
     *
     * @param string $ritiroLuogo
     *
     * @return ServiziNoleggio
     */
    public function setRitiroLuogo($ritiroLuogo)
    {
        $this->ritiroLuogo = $ritiroLuogo;

        return $this;
    }

    /**
     * Get ritiroLuogo
     *
     * @return string
     */
    public function getRitiroLuogo()
    {
        return $this->ritiroLuogo;
    }

    /**
     * Set ritiroOre
     *
     * @param \DateTime $ritiroOre
     *
     * @return ServiziNoleggio
     */
    public function setRitiroOre($ritiroOre)
    {
        $this->ritiroOre = $ritiroOre;

        return $this;
    }

    /**
     * Get ritiroOre
     *
     * @return \DateTime
     */
    public function getRitiroOre()
    {
        return $this->ritiroOre;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ServiziNoleggio
     */
    public function setDataout($dataout)
    {
        $this->dataout = $dataout;

        return $this;
    }

    /**
     * Get dataout
     *
     * @return \DateTime
     */
    public function getDataout()
    {
        return $this->dataout;
    }

    /**
     * Set consegnaLuogo
     *
     * @param string $consegnaLuogo
     *
     * @return ServiziNoleggio
     */
    public function setConsegnaLuogo($consegnaLuogo)
    {
        $this->consegnaLuogo = $consegnaLuogo;

        return $this;
    }

    /**
     * Get consegnaLuogo
     *
     * @return string
     */
    public function getConsegnaLuogo()
    {
        return $this->consegnaLuogo;
    }

    /**
     * Set consegnaOre
     *
     * @param \DateTime $consegnaOre
     *
     * @return ServiziNoleggio
     */
    public function setConsegnaOre($consegnaOre)
    {
        $this->consegnaOre = $consegnaOre;

        return $this;
    }

    /**
     * Get consegnaOre
     *
     * @return \DateTime
     */
    public function getConsegnaOre()
    {
        return $this->consegnaOre;
    }

    /**
     * Set mezzoTipo
     *
     * @param string $mezzoTipo
     *
     * @return ServiziNoleggio
     */
    public function setMezzoTipo($mezzoTipo)
    {
        $this->mezzoTipo = $mezzoTipo;

        return $this;
    }

    /**
     * Get mezzoTipo
     *
     * @return string
     */
    public function getMezzoTipo()
    {
        return $this->mezzoTipo;
    }

    /**
     * Set mezzoModello
     *
     * @param string $mezzoModello
     *
     * @return ServiziNoleggio
     */
    public function setMezzoModello($mezzoModello)
    {
        $this->mezzoModello = $mezzoModello;

        return $this;
    }

    /**
     * Get mezzoModello
     *
     * @return string
     */
    public function getMezzoModello()
    {
        return $this->mezzoModello;
    }

    /**
     * Set mezzoTarga
     *
     * @param string $mezzoTarga
     *
     * @return ServiziNoleggio
     */
    public function setMezzoTarga($mezzoTarga)
    {
        $this->mezzoTarga = $mezzoTarga;

        return $this;
    }

    /**
     * Get mezzoTarga
     *
     * @return string
     */
    public function getMezzoTarga()
    {
        return $this->mezzoTarga;
    }

    /**
     * Set guidatore
     *
     * @param string $guidatore
     *
     * @return ServiziNoleggio
     */
    public function setGuidatore($guidatore)
    {
        $this->guidatore = $guidatore;

        return $this;
    }

    /**
     * Get guidatore
     *
     * @return string
     */
    public function getGuidatore()
    {
        return $this->guidatore;
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
