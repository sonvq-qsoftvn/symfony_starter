<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Usertype
 */
class Usertype
{
    /**
     * @var string
     */
    private $usertypeName;

    /**
     * @var integer
     */
    private $usertypeId;


    /**
     * Set usertypeName
     *
     * @param string $usertypeName
     *
     * @return Usertype
     */
    public function setUsertypeName($usertypeName)
    {
        $this->usertypeName = $usertypeName;

        return $this;
    }

    /**
     * Get usertypeName
     *
     * @return string
     */
    public function getUsertypeName()
    {
        return $this->usertypeName;
    }

    /**
     * Get usertypeId
     *
     * @return integer
     */
    public function getUsertypeId()
    {
        return $this->usertypeId;
    }
}

