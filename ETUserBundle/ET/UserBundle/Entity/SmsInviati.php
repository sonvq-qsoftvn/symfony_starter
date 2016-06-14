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


}

