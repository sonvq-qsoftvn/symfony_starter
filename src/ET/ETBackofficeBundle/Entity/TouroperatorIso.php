<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * TouroperatorIso
 */
class TouroperatorIso
{
    /**
     * @var integer
     */
    private $consigliato;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $isoId;

    /**
     * @var integer
     */
    private $touroperatorId;


    /**
     * Set consigliato
     *
     * @param integer $consigliato
     *
     * @return TouroperatorIso
     */
    public function setConsigliato($consigliato)
    {
        $this->consigliato = $consigliato;

        return $this;
    }

    /**
     * Get consigliato
     *
     * @return integer
     */
    public function getConsigliato()
    {
        return $this->consigliato;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return TouroperatorIso
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set isoId
     *
     * @param string $isoId
     *
     * @return TouroperatorIso
     */
    public function setIsoId($isoId)
    {
        $this->isoId = $isoId;

        return $this;
    }

    /**
     * Get isoId
     *
     * @return string
     */
    public function getIsoId()
    {
        return $this->isoId;
    }

    /**
     * Set touroperatorId
     *
     * @param integer $touroperatorId
     *
     * @return TouroperatorIso
     */
    public function setTouroperatorId($touroperatorId)
    {
        $this->touroperatorId = $touroperatorId;

        return $this;
    }

    /**
     * Get touroperatorId
     *
     * @return integer
     */
    public function getTouroperatorId()
    {
        return $this->touroperatorId;
    }
}

