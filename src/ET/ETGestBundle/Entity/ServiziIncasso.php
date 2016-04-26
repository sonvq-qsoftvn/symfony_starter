<?php

namespace ET\ETGestBundle\Entity;

/**
 * ServiziIncasso
 */
class ServiziIncasso
{
    /**
     * @var integer
     */
    private $idTipologia = '0';

    /**
     * @var string
     */
    private $incassato = '0.00';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idTipologia
     *
     * @param integer $idTipologia
     *
     * @return ServiziIncasso
     */
    public function setIdTipologia($idTipologia)
    {
        $this->idTipologia = $idTipologia;

        return $this;
    }

    /**
     * Get idTipologia
     *
     * @return integer
     */
    public function getIdTipologia()
    {
        return $this->idTipologia;
    }

    /**
     * Set incassato
     *
     * @param string $incassato
     *
     * @return ServiziIncasso
     */
    public function setIncassato($incassato)
    {
        $this->incassato = $incassato;

        return $this;
    }

    /**
     * Get incassato
     *
     * @return string
     */
    public function getIncassato()
    {
        return $this->incassato;
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

