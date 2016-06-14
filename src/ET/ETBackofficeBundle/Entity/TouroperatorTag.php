<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * TouroperatorTag
 */
class TouroperatorTag
{
    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return TouroperatorTag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return TouroperatorTag
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

