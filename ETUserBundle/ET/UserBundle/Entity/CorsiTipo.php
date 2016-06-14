<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsiTipo
 *
 * @ORM\Table(name="corsi_tipo")
 * @ORM\Entity
 */
class CorsiTipo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizioneTipo", type="string", length=120, nullable=false)
     */
    private $descrizionetipo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="restrizioni", type="string", length=100, nullable=false)
     */
    private $restrizioni = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gruppo", type="string", length=50, nullable=false)
     */
    private $gruppo = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="evidenza", type="boolean", nullable=false)
     */
    private $evidenza = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ripetibile", type="boolean", nullable=false)
     */
    private $ripetibile = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="notificaTipo", type="string", length=10, nullable=false)
     */
    private $notificatipo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descrizioneEstesa", type="string", length=255, nullable=false)
     */
    private $descrizioneestesa = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="punteggio", type="smallint", nullable=false)
     */
    private $punteggio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idCorsiTipo", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorsitipo;


}

