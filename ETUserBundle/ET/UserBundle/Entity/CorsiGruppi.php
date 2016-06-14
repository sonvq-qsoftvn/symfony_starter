<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsiGruppi
 *
 * @ORM\Table(name="corsi_gruppi")
 * @ORM\Entity
 */
class CorsiGruppi
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=30, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="evidenza", type="boolean", nullable=false)
     */
    private $evidenza = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="idGruppo", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgruppo;


}

