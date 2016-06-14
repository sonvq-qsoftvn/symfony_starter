<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adv3
 *
 * @ORM\Table(name="adv3", indexes={@ORM\Index(name="click", columns={"click"}), @ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Adv3
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
     * @ORM\Column(name="tmpnumclick", type="smallint", nullable=false)
     */
    private $tmpnumclick = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="numclick", type="integer", nullable=false)
     */
    private $numclick = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxdayclick", type="integer", nullable=false)
     */
    private $maxdayclick = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxclick", type="integer", nullable=false)
     */
    private $maxclick = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="typepromo", type="string", length=10, nullable=false)
     */
    private $typepromo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="statuspromo", type="string", length=1, nullable=false)
     */
    private $statuspromo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dataactive", type="integer", nullable=false)
     */
    private $dataactive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dayactive", type="integer", nullable=false)
     */
    private $dayactive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

