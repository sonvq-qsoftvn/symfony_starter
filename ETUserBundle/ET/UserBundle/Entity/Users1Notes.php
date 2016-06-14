<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1Notes
 *
 * @ORM\Table(name="users1_notes")
 * @ORM\Entity
 */
class Users1Notes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_id", type="integer", nullable=false)
     */
    private $fkId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_id_crea", type="integer", nullable=false)
     */
    private $fkIdCrea = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text", length=65535, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_nota", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNota;


}

