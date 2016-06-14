<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1LingueHistory
 *
 * @ORM\Table(name="users1_lingue_history")
 * @ORM\Entity
 */
class Users1LingueHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua", type="string", length=5, nullable=false)
     */
    private $lingua = '';

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
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

