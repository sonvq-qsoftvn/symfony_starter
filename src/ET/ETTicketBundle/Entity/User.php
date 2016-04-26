<?php

namespace ET\ETTicketBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $userTypeid = '3';

    /**
     * @var integer
     */
    private $userForwardUserId = '0';

    /**
     * @var integer
     */
    private $userId;


    /**
     * Set userTypeid
     *
     * @param integer $userTypeid
     *
     * @return User
     */
    public function setUserTypeid($userTypeid)
    {
        $this->userTypeid = $userTypeid;

        return $this;
    }

    /**
     * Get userTypeid
     *
     * @return integer
     */
    public function getUserTypeid()
    {
        return $this->userTypeid;
    }

    /**
     * Set userForwardUserId
     *
     * @param integer $userForwardUserId
     *
     * @return User
     */
    public function setUserForwardUserId($userForwardUserId)
    {
        $this->userForwardUserId = $userForwardUserId;

        return $this;
    }

    /**
     * Get userForwardUserId
     *
     * @return integer
     */
    public function getUserForwardUserId()
    {
        return $this->userForwardUserId;
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
}

