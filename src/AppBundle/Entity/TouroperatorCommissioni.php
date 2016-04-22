<?php

namespace AppBundle\Entity;

/**
 * TouroperatorCommissioni
 */
class TouroperatorCommissioni
{
    /**
     * @var integer
     */
    private $touroperatorId;

    /**
     * @var string
     */
    private $commissione;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set touroperatorId
     *
     * @param integer $touroperatorId
     *
     * @return TouroperatorCommissioni
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

    /**
     * Set commissione
     *
     * @param string $commissione
     *
     * @return TouroperatorCommissioni
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
     * Set note
     *
     * @param string $note
     *
     * @return TouroperatorCommissioni
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
