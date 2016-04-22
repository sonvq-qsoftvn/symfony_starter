<?php

namespace AppBundle\Entity;

/**
 * Promoip
 */
class Promoip
{
    /**
     * @var string
     */
    private $iduser = '';

    /**
     * @var string
     */
    private $ip = '';

    /**
     * @var integer
     */
    private $timeVisit = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return Promoip
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return string
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Promoip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set timeVisit
     *
     * @param integer $timeVisit
     *
     * @return Promoip
     */
    public function setTimeVisit($timeVisit)
    {
        $this->timeVisit = $timeVisit;

        return $this;
    }

    /**
     * Get timeVisit
     *
     * @return integer
     */
    public function getTimeVisit()
    {
        return $this->timeVisit;
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
