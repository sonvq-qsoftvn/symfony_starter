<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GruppiLavoro
 *
 * @ORM\Table(name="gruppi_lavoro")
 * @ORM\Entity
 */
class GruppiLavoro
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_gruppo", type="string", length=30, nullable=false)
     */
    private $nomeGruppo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="leader_gruppo", type="integer", nullable=false)
     */
    private $leaderGruppo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

