<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traduzioni
 *
 * @ORM\Entity(repositoryClass="ET\UserBundle\Repository\TraduzioniRepository")
 * @ORM\Table(name="traduzioni")
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



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Traduzioni
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set linguaItIt
     *
     * @param string $linguaItIt
     *
     * @return Traduzioni
     */
    public function setLinguaItIt($linguaItIt)
    {
        $this->linguaItIt = $linguaItIt;

        return $this;
    }

    /**
     * Get linguaItIt
     *
     * @return string
     */
    public function getLinguaItIt()
    {
        return $this->linguaItIt;
    }

    /**
     * Set linguaEnUs
     *
     * @param string $linguaEnUs
     *
     * @return Traduzioni
     */
    public function setLinguaEnUs($linguaEnUs)
    {
        $this->linguaEnUs = $linguaEnUs;

        return $this;
    }

    /**
     * Get linguaEnUs
     *
     * @return string
     */
    public function getLinguaEnUs()
    {
        return $this->linguaEnUs;
    }

    /**
     * Set linguaEsEs
     *
     * @param string $linguaEsEs
     *
     * @return Traduzioni
     */
    public function setLinguaEsEs($linguaEsEs)
    {
        $this->linguaEsEs = $linguaEsEs;

        return $this;
    }

    /**
     * Get linguaEsEs
     *
     * @return string
     */
    public function getLinguaEsEs()
    {
        return $this->linguaEsEs;
    }

    /**
     * Set linguaDeDe
     *
     * @param string $linguaDeDe
     *
     * @return Traduzioni
     */
    public function setLinguaDeDe($linguaDeDe)
    {
        $this->linguaDeDe = $linguaDeDe;

        return $this;
    }

    /**
     * Get linguaDeDe
     *
     * @return string
     */
    public function getLinguaDeDe()
    {
        return $this->linguaDeDe;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Traduzioni
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set linea
     *
     * @param integer $linea
     *
     * @return Traduzioni
     */
    public function setLinea($linea)
    {
        $this->linea = $linea;

        return $this;
    }

    /**
     * Get linea
     *
     * @return integer
     */
    public function getLinea()
    {
        return $this->linea;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
