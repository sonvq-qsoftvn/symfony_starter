<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comuni
 *
 * @ORM\Table(name="comuni")
 * @ORM\Entity
 */
class Comuni
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=128, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=4, nullable=false)
     */
    private $provincia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="catasto", type="string", length=8, nullable=false)
     */
    private $catasto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione", type="string", length=128, nullable=false)
     */
    private $regione = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

