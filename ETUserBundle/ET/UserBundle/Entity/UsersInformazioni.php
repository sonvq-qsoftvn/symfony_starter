<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersInformazioni
 *
 * @ORM\Table(name="users_informazioni")
 * @ORM\Entity
 */
class UsersInformazioni
{
    /**
     * @var string
     *
     * @ORM\Column(name="motivazione", type="text", length=16777215, nullable=false)
     */
    private $motivazione;

    /**
     * @var string
     *
     * @ORM\Column(name="aspettative", type="text", length=16777215, nullable=false)
     */
    private $aspettative;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=16777215, nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;


}

