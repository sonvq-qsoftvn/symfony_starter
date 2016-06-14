<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Iso
 *
 * @ORM\Table(name="iso", uniqueConstraints={@ORM\UniqueConstraint(name="codice", columns={"codice"})})
 * @ORM\Entity
 */
class Iso
{
    /**
     * @var string
     *
     * @ORM\Column(name="codice", type="string", length=4, nullable=false)
     */
    private $codice = '';

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=100, nullable=false)
     */
    private $stato = '';

    /**
     * @var string
     *
     * @ORM\Column(name="opzioni", type="text", length=65535, nullable=false)
     */
    private $opzioni;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comunitaria", type="boolean", nullable=false)
     */
    private $comunitaria = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipologiaNazione", type="boolean", nullable=false)
     */
    private $tipologianazione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prefissoInternazionale", type="string", length=15, nullable=true)
     */
    private $prefissointernazionale;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=4, nullable=true)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
