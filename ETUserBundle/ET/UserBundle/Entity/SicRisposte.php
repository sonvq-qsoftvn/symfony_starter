<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SicRisposte
 *
 * @ORM\Table(name="sic_risposte")
 * @ORM\Entity
 */
class SicRisposte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_users", type="smallint", nullable=false)
     */
    private $idUsers = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idDomanda", type="smallint", nullable=false)
     */
    private $iddomanda = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="risposta", type="text", length=65535, nullable=false)
     */
    private $risposta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRisposta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrisposta;


}

