<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traduzioni
 *
 * @ORM\Table(name="traduzioni")
 * @ORM\Entity(repositoryClass="ET\UserBundle\Repository\TraduzioniRepository")
 */
class Traduzioni
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="text", length=65535, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua_it_IT", type="text", length=65535, nullable=true)
     */
    private $linguaItIt;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua_en_US", type="text", length=65535, nullable=true)
     */
    private $linguaEnUs;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua_es_ES", type="text", length=65535, nullable=false)
     */
    private $linguaEsEs;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua_de_DE", type="text", length=65535, nullable=false)
     */
    private $linguaDeDe;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=false)
     */
    private $file;

    /**
     * @var integer
     *
     * @ORM\Column(name="linea", type="integer", nullable=false)
     */
    private $linea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

