<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Province
 *
 * @ORM\Table(name="province")
 * @ORM\Entity
 */
class Province
{
    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=30, nullable=false)
     */
    private $provincia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione", type="string", length=30, nullable=false)
     */
    private $regione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sigla", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sigla;


}

