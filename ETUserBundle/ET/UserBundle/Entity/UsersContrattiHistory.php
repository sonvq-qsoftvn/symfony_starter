<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersContrattiHistory
 *
 * @ORM\Table(name="users_contratti_history")
 * @ORM\Entity
 */
class UsersContrattiHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="contratto_tipo", type="string", length=20, nullable=false)
     */
    private $contrattoTipo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_rinnovo", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $contrattoRinnovo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contratto_data", type="date", nullable=true)
     */
    private $contrattoData;

    /**
     * @var boolean
     *
     * @ORM\Column(name="principale", type="boolean", nullable=false)
     */
    private $principale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="history_action", type="string", length=10, nullable=true)
     */
    private $historyAction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="history_action_at", type="datetime", nullable=true)
     */
    private $historyActionAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="agenzia", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $agenzia;


}

