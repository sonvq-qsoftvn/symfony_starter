<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsInviati
 *
 * @ORM\Table(name="sms_inviati")
 * @ORM\Entity
 */
class SmsInviati
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_users", type="smallint", nullable=false)
     */
    private $idUsers = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="numeroDest", type="string", length=20, nullable=false)
     */
    private $numerodest = '';

    /**
     * @var string
     *
     * @ORM\Column(name="testo", type="string", length=160, nullable=false)
     */
    private $testo = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoSms", type="boolean", nullable=false)
     */
    private $tiposms = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idSms", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsms;



    /**
     * Set idUsers
     *
     * @param integer $idUsers
     *
     * @return SmsInviati
     */
    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    /**
     * Get idUsers
     *
     * @return integer
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return SmsInviati
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set numerodest
     *
     * @param string $numerodest
     *
     * @return SmsInviati
     */
    public function setNumerodest($numerodest)
    {
        $this->numerodest = $numerodest;

        return $this;
    }

    /**
     * Get numerodest
     *
     * @return string
     */
    public function getNumerodest()
    {
        return $this->numerodest;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return SmsInviati
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set tiposms
     *
     * @param boolean $tiposms
     *
     * @return SmsInviati
     */
    public function setTiposms($tiposms)
    {
        $this->tiposms = $tiposms;

        return $this;
    }

    /**
     * Get tiposms
     *
     * @return boolean
     */
    public function getTiposms()
    {
        return $this->tiposms;
    }

    /**
     * Get idsms
     *
     * @return integer
     */
    public function getIdsms()
    {
        return $this->idsms;
    }
}
