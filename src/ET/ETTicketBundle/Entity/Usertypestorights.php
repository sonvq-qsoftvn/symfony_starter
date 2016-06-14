<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Usertypestorights
 */
class Usertypestorights
{
    /**
     * @var integer
     */
    private $usertypeid = '0';

    /**
     * @var integer
     */
    private $rightid = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set usertypeid
     *
     * @param integer $usertypeid
     *
     * @return Usertypestorights
     */
    public function setUsertypeid($usertypeid)
    {
        $this->usertypeid = $usertypeid;

        return $this;
    }

    /**
     * Get usertypeid
     *
     * @return integer
     */
    public function getUsertypeid()
    {
        return $this->usertypeid;
    }

    /**
     * Set rightid
     *
     * @param integer $rightid
     *
     * @return Usertypestorights
     */
    public function setRightid($rightid)
    {
        $this->rightid = $rightid;

        return $this;
    }

    /**
     * Get rightid
     *
     * @return integer
     */
    public function getRightid()
    {
        return $this->rightid;
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
