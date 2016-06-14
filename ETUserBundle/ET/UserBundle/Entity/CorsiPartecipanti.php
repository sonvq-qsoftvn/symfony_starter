<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsiPartecipanti
 *
 * @ORM\Table(name="corsi_partecipanti", indexes={@ORM\Index(name="dataIscrizione", columns={"dataIscrizione"}), @ORM\Index(name="statoIscrizione", columns={"statoIscrizione"}), @ORM\Index(name="idCorso", columns={"idCorso"})})
 * @ORM\Entity
 */
class CorsiPartecipanti
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataIscrizione", type="datetime", nullable=false)
     */
    private $dataiscrizione = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="statoIscrizione", type="string", length=10, nullable=false)
     */
    private $statoiscrizione = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="posti", type="boolean", nullable=false)
     */
    private $posti = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="partecipanti", type="text", length=65535, nullable=false)
     */
    private $partecipanti;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", length=65535, nullable=false)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPartecipante", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpartecipante;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCorso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcorso;


}

