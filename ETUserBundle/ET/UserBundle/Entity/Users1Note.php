<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1Note
 *
 * @ORM\Table(name="users1_note")
 * @ORM\Entity
 */
class Users1Note
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=255, nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

