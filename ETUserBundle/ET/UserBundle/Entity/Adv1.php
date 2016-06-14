<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adv1
 *
 * @ORM\Table(name="adv1")
 * @ORM\Entity
 */
class Adv1
{
    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=10, nullable=false)
     */
    private $iduser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=1, nullable=false)
     */
    private $language = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="click", type="integer", nullable=false)
     */
    private $click = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

