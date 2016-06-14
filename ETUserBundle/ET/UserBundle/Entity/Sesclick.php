<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sesclick
 *
 * @ORM\Table(name="sesclick", indexes={@ORM\Index(name="adv", columns={"adv"})})
 * @ORM\Entity
 */
class Sesclick
{
    /**
     * @var string
     *
     * @ORM\Column(name="adv", type="string", length=1, nullable=false)
     */
    private $adv = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=1, nullable=false)
     */
    private $language = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

