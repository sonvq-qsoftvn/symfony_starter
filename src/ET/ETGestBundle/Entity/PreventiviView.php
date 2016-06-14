<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreventiviView
 *
 * @ORM\Table(name="preventivi_view", indexes={@ORM\Index(name="tipo", columns={"tipo"}), @ORM\Index(name="idPreventivo", columns={"idPreventivo"})})
 * @ORM\Entity
 */
class PreventiviView
{
    /**
     * @var string
     *
     * @ORM\Column(name="idPreventivo", type="string", length=20, nullable=false)
     */
    private $idpreventivo = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataView", type="datetime", nullable=false)
     */
    private $dataview = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idpreventivo
     *
     * @param string $idpreventivo
     *
     * @return PreventiviView
     */
    public function setIdpreventivo($idpreventivo)
    {
        $this->idpreventivo = $idpreventivo;

        return $this;
    }

    /**
     * Get idpreventivo
     *
     * @return string
     */
    public function getIdpreventivo()
    {
        return $this->idpreventivo;
    }

    /**
     * Set dataview
     *
     * @param \DateTime $dataview
     *
     * @return PreventiviView
     */
    public function setDataview($dataview)
    {
        $this->dataview = $dataview;

        return $this;
    }

    /**
     * Get dataview
     *
     * @return \DateTime
     */
    public function getDataview()
    {
        return $this->dataview;
    }

    /**
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return PreventiviView
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
