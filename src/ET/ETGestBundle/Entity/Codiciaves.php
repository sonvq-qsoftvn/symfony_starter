<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codiciaves
 *
 * @ORM\Table(name="codiciaves", indexes={@ORM\Index(name="codice", columns={"codiceAves"}), @ORM\Index(name="agenzia", columns={"agenzia"})})
 * @ORM\Entity
 */
class Codiciaves
{
    /**
     * @var string
     *
     * @ORM\Column(name="codiceAves", type="string", length=255, nullable=false)
     */
    private $codiceaves = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $iva = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="codice", type="string", length=20, nullable=false)
     */
    private $codice = '';

    /**
     * @var string
     *
     * @ORM\Column(name="moduli", type="string", length=20, nullable=false)
     */
    private $moduli = '';

    /**
     * @var string
     *
     * @ORM\Column(name="php", type="text", length=65535, nullable=false)
     */
    private $php;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=255, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="deslunga", type="text", length=65535, nullable=false)
     */
    private $deslunga;

    /**
     * @var string
     *
     * @ORM\Column(name="regimeIva", type="string", length=100, nullable=false)
     */
    private $regimeiva = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regime", type="string", length=100, nullable=false)
     */
    private $regime;

    /**
     * @var string
     *
     * @ORM\Column(name="commissioneAssicurazione", type="decimal", precision=8, scale=5, nullable=false)
     */
    private $commissioneassicurazione = '0.00000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoDestinazione", type="boolean", nullable=false)
     */
    private $tipodestinazione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="agenzia", type="string", length=10, nullable=false)
     */
    private $agenzia = 'ETIta';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false)
     */
    private $deletedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_iva", type="string", length=50, nullable=true)
     */
    private $codiceIva;

    /**
     * @var boolean
     *
     * @ORM\Column(name="netta", type="boolean", nullable=false)
     */
    private $netta = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set codiceaves
     *
     * @param string $codiceaves
     *
     * @return Codiciaves
     */
    public function setCodiceaves($codiceaves)
    {
        $this->codiceaves = $codiceaves;

        return $this;
    }

    /**
     * Get codiceaves
     *
     * @return string
     */
    public function getCodiceaves()
    {
        return $this->codiceaves;
    }

    /**
     * Set iva
     *
     * @param string $iva
     *
     * @return Codiciaves
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set codice
     *
     * @param string $codice
     *
     * @return Codiciaves
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
     * Set moduli
     *
     * @param string $moduli
     *
     * @return Codiciaves
     */
    public function setModuli($moduli)
    {
        $this->moduli = $moduli;

        return $this;
    }

    /**
     * Get moduli
     *
     * @return string
     */
    public function getModuli()
    {
        return $this->moduli;
    }

    /**
     * Set php
     *
     * @param string $php
     *
     * @return Codiciaves
     */
    public function setPhp($php)
    {
        $this->php = $php;

        return $this;
    }

    /**
     * Get php
     *
     * @return string
     */
    public function getPhp()
    {
        return $this->php;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Codiciaves
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
     * Set deslunga
     *
     * @param string $deslunga
     *
     * @return Codiciaves
     */
    public function setDeslunga($deslunga)
    {
        $this->deslunga = $deslunga;

        return $this;
    }

    /**
     * Get deslunga
     *
     * @return string
     */
    public function getDeslunga()
    {
        return $this->deslunga;
    }

    /**
     * Set regimeiva
     *
     * @param string $regimeiva
     *
     * @return Codiciaves
     */
    public function setRegimeiva($regimeiva)
    {
        $this->regimeiva = $regimeiva;

        return $this;
    }

    /**
     * Get regimeiva
     *
     * @return string
     */
    public function getRegimeiva()
    {
        return $this->regimeiva;
    }

    /**
     * Set regime
     *
     * @param string $regime
     *
     * @return Codiciaves
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
     * Set commissioneassicurazione
     *
     * @param string $commissioneassicurazione
     *
     * @return Codiciaves
     */
    public function setCommissioneassicurazione($commissioneassicurazione)
    {
        $this->commissioneassicurazione = $commissioneassicurazione;

        return $this;
    }

    /**
     * Get commissioneassicurazione
     *
     * @return string
     */
    public function getCommissioneassicurazione()
    {
        return $this->commissioneassicurazione;
    }

    /**
     * Set tipodestinazione
     *
     * @param boolean $tipodestinazione
     *
     * @return Codiciaves
     */
    public function setTipodestinazione($tipodestinazione)
    {
        $this->tipodestinazione = $tipodestinazione;

        return $this;
    }

    /**
     * Get tipodestinazione
     *
     * @return boolean
     */
    public function getTipodestinazione()
    {
        return $this->tipodestinazione;
    }

    /**
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return Codiciaves
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Codiciaves
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set codiceIva
     *
     * @param string $codiceIva
     *
     * @return Codiciaves
     */
    public function setCodiceIva($codiceIva)
    {
        $this->codiceIva = $codiceIva;

        return $this;
    }

    /**
     * Get codiceIva
     *
     * @return string
     */
    public function getCodiceIva()
    {
        return $this->codiceIva;
    }

    /**
     * Set netta
     *
     * @param boolean $netta
     *
     * @return Codiciaves
     */
    public function setNetta($netta)
    {
        $this->netta = $netta;

        return $this;
    }

    /**
     * Get netta
     *
     * @return boolean
     */
    public function getNetta()
    {
        return $this->netta;
    }

    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }
}
