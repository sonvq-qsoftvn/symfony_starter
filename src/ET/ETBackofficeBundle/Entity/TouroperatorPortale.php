<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * TouroperatorPortale
 */
class TouroperatorPortale
{
    /**
     * @var boolean
     */
    private $consigliato;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $portaleId;

    /**
     * @var integer
     */
    private $touroperatorId;


    /**
     * Set consigliato
     *
     * @param boolean $consigliato
     *
     * @return TouroperatorPortale
     */
    public function setConsigliato($consigliato)
    {
        $this->consigliato = $consigliato;

        return $this;
    }

    /**
     * Get consigliato
     *
     * @return boolean
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
     * @return TouroperatorPortale
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
     * Set portaleId
     *
     * @param integer $portaleId
     *
     * @return TouroperatorPortale
     */
    public function setPortaleId($portaleId)
    {
        $this->portaleId = $portaleId;

        return $this;
    }

    /**
     * Get portaleId
     *
     * @return integer
     */
    public function getPortaleId()
    {
        return $this->portaleId;
    }

    /**
     * Set touroperatorId
     *
     * @param integer $touroperatorId
     *
     * @return TouroperatorPortale
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

