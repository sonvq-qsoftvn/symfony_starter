<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Residence
 *
 * @ORM\Table(name="residence", indexes={@ORM\Index(name="idresidence", columns={"idresidence"})})
 * @ORM\Entity
 */
class Residence
{
    /**
     * @var string
     *
     * @ORM\Column(name="idresidence", type="string", length=8, nullable=false)
     */
    private $idresidence = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="regione1", type="string", length=100, nullable=false)
     */
    private $regione1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione2", type="string", length=100, nullable=false)
     */
    private $regione2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione3", type="string", length=100, nullable=false)
     */
    private $regione3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione4", type="string", length=100, nullable=false)
     */
    private $regione4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione5", type="string", length=100, nullable=false)
     */
    private $regione5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione6", type="string", length=100, nullable=false)
     */
    private $regione6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione7", type="string", length=100, nullable=false)
     */
    private $regione7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione8", type="string", length=100, nullable=false)
     */
    private $regione8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita1", type="string", length=150, nullable=false)
     */
    private $localita1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita2", type="string", length=150, nullable=false)
     */
    private $localita2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita3", type="string", length=150, nullable=false)
     */
    private $localita3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita4", type="string", length=150, nullable=false)
     */
    private $localita4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita5", type="string", length=150, nullable=false)
     */
    private $localita5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita6", type="string", length=150, nullable=false)
     */
    private $localita6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita7", type="string", length=150, nullable=false)
     */
    private $localita7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita8", type="string", length=150, nullable=false)
     */
    private $localita8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura1", type="string", length=150, nullable=false)
     */
    private $struttura1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura2", type="string", length=150, nullable=false)
     */
    private $struttura2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura3", type="string", length=150, nullable=false)
     */
    private $struttura3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura4", type="string", length=150, nullable=false)
     */
    private $struttura4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura5", type="string", length=150, nullable=false)
     */
    private $struttura5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura6", type="string", length=150, nullable=false)
     */
    private $struttura6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura7", type="string", length=150, nullable=false)
     */
    private $struttura7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura8", type="string", length=150, nullable=false)
     */
    private $struttura8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note1", type="text", length=65535, nullable=false)
     */
    private $note1;

    /**
     * @var string
     *
     * @ORM\Column(name="note2", type="text", length=65535, nullable=false)
     */
    private $note2;

    /**
     * @var string
     *
     * @ORM\Column(name="note3", type="text", length=65535, nullable=false)
     */
    private $note3;

    /**
     * @var string
     *
     * @ORM\Column(name="note4", type="text", length=65535, nullable=false)
     */
    private $note4;

    /**
     * @var string
     *
     * @ORM\Column(name="note5", type="text", length=65535, nullable=false)
     */
    private $note5;

    /**
     * @var string
     *
     * @ORM\Column(name="note6", type="text", length=65535, nullable=false)
     */
    private $note6;

    /**
     * @var string
     *
     * @ORM\Column(name="note7", type="string", length=150, nullable=false)
     */
    private $note7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note8", type="string", length=150, nullable=false)
     */
    private $note8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="offerte", type="text", length=65535, nullable=false)
     */
    private $offerte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

