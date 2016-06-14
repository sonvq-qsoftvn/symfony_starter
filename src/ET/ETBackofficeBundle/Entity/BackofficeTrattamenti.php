<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeTrattamenti
 */
class BackofficeTrattamenti
{
    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var string
     */
    private $descrizioneEn = '';

    /**
     * @var string
     */
    private $descrizioneEs = '';

    /**
     * @var string
     */
    private $descrizioneDe = '';

    /**
     * @var string
     */
    private $id;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return BackofficeTrattamenti
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
     * Set descrizioneEn
     *
     * @param string $descrizioneEn
     *
     * @return BackofficeTrattamenti
     */
    public function setDescrizioneEn($descrizioneEn)
    {
        $this->descrizioneEn = $descrizioneEn;

        return $this;
    }

    /**
     * Get descrizioneEn
     *
     * @return string
     */
    public function getDescrizioneEn()
    {
        return $this->descrizioneEn;
    }

    /**
     * Set descrizioneEs
     *
     * @param string $descrizioneEs
     *
     * @return BackofficeTrattamenti
     */
    public function setDescrizioneEs($descrizioneEs)
    {
        $this->descrizioneEs = $descrizioneEs;

        return $this;
    }

    /**
     * Get descrizioneEs
     *
     * @return string
     */
    public function getDescrizioneEs()
    {
        return $this->descrizioneEs;
    }

    /**
     * Set descrizioneDe
     *
     * @param string $descrizioneDe
     *
     * @return BackofficeTrattamenti
     */
    public function setDescrizioneDe($descrizioneDe)
    {
        $this->descrizioneDe = $descrizioneDe;

        return $this;
    }

    /**
     * Get descrizioneDe
     *
     * @return string
     */
    public function getDescrizioneDe()
    {
        return $this->descrizioneDe;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}

