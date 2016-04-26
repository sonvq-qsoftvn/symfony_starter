<?php

namespace ET\ETTicketBundle\Entity;

/**
 * UserAssignments20120605
 */
class UserAssignments20120605
{
    /**
     * @var integer
     */
    private $nReassigned = '0';

    /**
     * @var \DateTime
     */
    private $lastReassignedDate;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $lingua;


    /**
     * Set nReassigned
     *
     * @param integer $nReassigned
     *
     * @return UserAssignments20120605
     */
    public function setNReassigned($nReassigned)
    {
        $this->nReassigned = $nReassigned;

        return $this;
    }

    /**
     * Get nReassigned
     *
     * @return integer
     */
    public function getNReassigned()
    {
        return $this->nReassigned;
    }

    /**
     * Set lastReassignedDate
     *
     * @param \DateTime $lastReassignedDate
     *
     * @return UserAssignments20120605
     */
    public function setLastReassignedDate($lastReassignedDate)
    {
        $this->lastReassignedDate = $lastReassignedDate;

        return $this;
    }

    /**
     * Get lastReassignedDate
     *
     * @return \DateTime
     */
    public function getLastReassignedDate()
    {
        return $this->lastReassignedDate;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return UserAssignments20120605
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return UserAssignments20120605
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }
}

