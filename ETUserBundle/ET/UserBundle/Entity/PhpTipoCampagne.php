<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpTipoCampagne
 *
 * @ORM\Table(name="php_tipo_campagne", indexes={@ORM\Index(name="visibile", columns={"visibile"}), @ORM\Index(name="attiva", columns={"attiva"}), @ORM\Index(name="tipologia", columns={"tipologia"}), @ORM\Index(name="userCreazione", columns={"userCreazione"})})
 * @ORM\Entity
 */
class PhpTipoCampagne
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomeCampagna", type="string", length=50, nullable=false)
     */
    private $nomecampagna = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ridistribuzione_net", type="smallint", nullable=false)
     */
    private $ridistribuzioneNet = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attiva", type="boolean", nullable=false)
     */
    private $attiva = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibile", type="boolean", nullable=false)
     */
    private $visibile = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filtro", type="string", length=30, nullable=false)
     */
    private $filtro = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="default", type="boolean", nullable=false)
     */
    private $default = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="frase_agente", type="text", length=65535, nullable=false)
     */
    private $fraseAgente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notifica_fine", type="boolean", nullable=false)
     */
    private $notificaFine = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commento", type="text", length=255, nullable=false)
     */
    private $commento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipologia", type="boolean", nullable=false)
     */
    private $tipologia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userCreazione", type="integer", nullable=false)
     */
    private $usercreazione = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idPortale", type="smallint", nullable=false)
     */
    private $idportale = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GoogleConversionId", type="integer", nullable=false)
     */
    private $googleconversionid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoCampagna", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipocampagna;


}

