<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Rights
 */
class Rights
{
    /**
     * @var string
     */
    private $rightName;

    /**
     * @var integer
     */
    private $rightId;


    /**
     * Set rightName
     *
     * @param string $rightName
     *
     * @return Rights
     */
    public function setRightName($rightName)
    {
        $this->rightName = $rightName;

        return $this;
    }

    /**
     * Get rightName
     *
     * @return string
     */
    public function getRightName()
    {
        return $this->rightName;
    }

    /**
     * Get rightId
     *
     * @return integer
     */
    public function getRightId()
    {
        return $this->rightId;
    }
}
