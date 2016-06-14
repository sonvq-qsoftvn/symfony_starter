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


}

