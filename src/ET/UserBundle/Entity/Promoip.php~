<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promoip
 *
 * @ORM\Table(name="promoip", indexes={@ORM\Index(name="ip", columns={"ip"})})
 * @ORM\Entity
 */
class Promoip
{
    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=10, nullable=false)
     */
    private $iduser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="time_visit", type="integer", nullable=false)
     */
    private $timeVisit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
