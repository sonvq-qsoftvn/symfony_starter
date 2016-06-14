<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history", indexes={@ORM\Index(name="id_agent", columns={"id_agent"})})
 * @ORM\Entity
 */
class History
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_agent", type="string", length=10, nullable=false)
     */
    private $idAgent = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="numclick", type="integer", nullable=false)
     */
    private $numclick = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

