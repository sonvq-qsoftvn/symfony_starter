<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corsi
 *
 * @ORM\Table(name="corsi", indexes={@ORM\Index(name="idCorsiTipo", columns={"idCorsiTipo"}), @ORM\Index(name="proprietario", columns={"proprietario"}), @ORM\Index(name="stato", columns={"stato"}), @ORM\Index(name="dataCorso", columns={"data"})})
 * @ORM\Entity
 */
class Corsi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCorsiTipo", type="smallint", nullable=false)
     */
    private $idcorsitipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="proprietario", type="smallint", nullable=false)
     */
    private $proprietario = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataFine", type="datetime", nullable=false)
     */
    private $datafine = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="luogo", type="string", length=50, nullable=false)
     */
    private $luogo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="limite", type="smallint", nullable=false)
     */
    private $limite = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="postiMinimi", type="smallint", nullable=false)
     */
    private $postiminimi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="collaboratori", type="string", length=200, nullable=false)
     */
    private $collaboratori = '';

    /**
     * @var string
     *
     * @ORM\Column(name="durata", type="string", length=50, nullable=false)
     */
    private $durata = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descrizioneAgg", type="string", length=200, nullable=false)
     */
    private $descrizioneagg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="programma", type="text", length=65535, nullable=false)
     */
    private $programma;

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=10, nullable=false)
     */
    private $stato = '';

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", length=65535, nullable=false)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="punteggio", type="smallint", nullable=false)
     */
    private $punteggio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idCorso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorso;


}

