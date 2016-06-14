<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SicDomande
 *
 * @ORM\Table(name="sic_domande")
 * @ORM\Entity
 */
class SicDomande
{
    /**
     * @var string
     *
     * @ORM\Column(name="domanda", type="text", length=65535, nullable=false)
     */
    private $domanda;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDomanda", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddomanda;


}

