<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncassiTipologie
 *
 * @ORM\Table(name="incassi_tipologie")
 * @ORM\Entity
 */
class IncassiTipologie
{
    /**
     * @var string
     *
     * @ORM\Column(name="codice", type="string", length=10, nullable=true)
     */
    private $codice;

    /**
     * @var string
     *
     * @ORM\Column(name="agenzia", type="string", length=10, nullable=true)
     */
    private $agenzia;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="credenziali", type="text", length=65535, nullable=true)
     */
    private $credenziali;

    /**
     * @var string
     *
     * @ORM\Column(name="commissione", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $commissione = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allegatoRichiesto", type="boolean", nullable=false)
     */
    private $allegatorichiesto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="esportabile", type="boolean", nullable=false)
     */
    private $esportabile = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set codice
     *
     * @param string $codice
     *
     * @return IncassiTipologie
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
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return IncassiTipologie
     */
    public function setAgenzia($agenzia)
    {
        $this->agenzia = $agenzia;

        return $this;
    }

    /**
     * Get agenzia
     *
     * @return string
     */
    public function getAgenzia()
    {
        return $this->agenzia;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return IncassiTipologie
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
     * Set credenziali
     *
     * @param string $credenziali
     *
     * @return IncassiTipologie
     */
    public function setCredenziali($credenziali)
    {
        $this->credenziali = $credenziali;

        return $this;
    }

    /**
     * Get credenziali
     *
     * @return string
     */
    public function getCredenziali()
    {
        return $this->credenziali;
    }

    /**
     * Set commissione
     *
     * @param string $commissione
     *
     * @return IncassiTipologie
     */
    public function setCommissione($commissione)
    {
        $this->commissione = $commissione;

        return $this;
    }

    /**
     * Get commissione
     *
     * @return string
     */
    public function getCommissione()
    {
        return $this->commissione;
    }

    /**
     * Set allegatorichiesto
     *
     * @param boolean $allegatorichiesto
     *
     * @return IncassiTipologie
     */
    public function setAllegatorichiesto($allegatorichiesto)
    {
        $this->allegatorichiesto = $allegatorichiesto;

        return $this;
    }

    /**
     * Get allegatorichiesto
     *
     * @return boolean
     */
    public function getAllegatorichiesto()
    {
        return $this->allegatorichiesto;
    }

    /**
     * Set esportabile
     *
     * @param boolean $esportabile
     *
     * @return IncassiTipologie
     */
    public function setEsportabile($esportabile)
    {
        $this->esportabile = $esportabile;

        return $this;
    }

    /**
     * Get esportabile
     *
     * @return boolean
     */
    public function getEsportabile()
    {
        return $this->esportabile;
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
