<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpAdesioniCampagne
 *
 * @ORM\Table(name="php_adesioni_campagne", indexes={@ORM\Index(name="mittente", columns={"mittente"}), @ORM\Index(name="destinatario", columns={"destinatario"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="idTipoCampagna", columns={"idTipoCampagna"})})
 * @ORM\Entity
 */
class PhpAdesioniCampagne
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=false)
     */
    private $datacreazione = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="mittente", type="integer", nullable=false)
     */
    private $mittente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="destinatario", type="integer", nullable=false)
     */
    private $destinatario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoCampagna", type="smallint", nullable=false)
     */
    private $idtipocampagna = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataRisposta", type="datetime", nullable=false)
     */
    private $datarisposta = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idAdesione", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadesione;


}

