<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeSistemazioniDettaglio
 */
class BackofficeSistemazioniDettaglio
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
     * @var boolean
     */
    private $id;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return BackofficeSistemazioniDettaglio
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
     * @return BackofficeSistemazioniDettaglio
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
     * @return BackofficeSistemazioniDettaglio
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
     * @return BackofficeSistemazioniDettaglio
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
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }
}

