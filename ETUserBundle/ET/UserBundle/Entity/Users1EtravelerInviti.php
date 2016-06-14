<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1EtravelerInviti
 *
 * @ORM\Table(name="users1_etraveler_inviti")
 * @ORM\Entity
 */
class Users1EtravelerInviti
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_etraveler_mittente", type="integer", nullable=false)
     */
    private $idEtravelerMittente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInvito", type="datetime", nullable=false)
     */
    private $datainvito;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etraveler", type="integer", nullable=false)
     */
    private $idEtraveler = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataIscritto", type="datetime", nullable=false)
     */
    private $dataiscritto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="saldato", type="boolean", nullable=false)
     */
    private $saldato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

