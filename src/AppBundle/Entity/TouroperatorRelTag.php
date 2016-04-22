<?php

namespace AppBundle\Entity;

/**
 * TouroperatorRelTag
 */
class TouroperatorRelTag
{
    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $touroperatorId;

    /**
     * @var integer
     */
    private $tagtoId;


    /**
     * Set note
     *
     * @param string $note
     *
     * @return TouroperatorRelTag
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
     * Set touroperatorId
     *
     * @param integer $touroperatorId
     *
     * @return TouroperatorRelTag
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
     * Set tagtoId
     *
     * @param integer $tagtoId
     *
     * @return TouroperatorRelTag
     */
    public function setTagtoId($tagtoId)
    {
        $this->tagtoId = $tagtoId;

        return $this;
    }

    /**
     * Get tagtoId
     *
     * @return integer
     */
    public function getTagtoId()
    {
        return $this->tagtoId;
    }
}
