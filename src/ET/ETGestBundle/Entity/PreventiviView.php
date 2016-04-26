<?php

namespace ET\ETGestBundle\Entity;

/**
 * PreventiviView
 */
class PreventiviView
{
    /**
     * @var string
     */
    private $idpreventivo = '';

    /**
     * @var \DateTime
     */
    private $dataview = '0000-00-00 00:00:00';

    /**
     * @var boolean
     */
    private $tipo = '0';

    /**
     * @var integer
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

