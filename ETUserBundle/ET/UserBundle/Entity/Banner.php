<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banner
 *
 * @ORM\Table(name="banner", indexes={@ORM\Index(name="iduser", columns={"iduser", "idbanner"})})
 * @ORM\Entity
 */
class Banner
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
     * @ORM\Column(name="idbanner", type="string", length=1, nullable=false)
     */
    private $idbanner = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="banner", type="string", length=100, nullable=false)
     */
    private $banner = '';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

