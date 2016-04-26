<?php

namespace ET\ETGestBundle\Entity;

/**
 * CodiciavesRelFornitori
 */
class CodiciavesRelFornitori
{
    /**
     * @var string
     */
    private $approvanti;

    /**
     * @var boolean
     */
    private $approvato = '0';

    /**
     * @var integer
     */
    private $idfornitore;

    /**
     * @var string
     */
    private $codiceaves;


    /**
     * Set approvanti
     *
     * @param string $approvanti
     *
     * @return CodiciavesRelFornitori
     */
    public function setApprovanti($approvanti)
    {
        $this->approvanti = $approvanti;

        return $this;
    }

    /**
     * Get approvanti
     *
     * @return string
     */
    public function getApprovanti()
    {
        return $this->approvanti;
    }

    /**
     * Set approvato
     *
     * @param boolean $approvato
     *
     * @return CodiciavesRelFornitori
     */
    public function setApprovato($approvato)
    {
        $this->approvato = $approvato;

        return $this;
    }

    /**
     * Get approvato
     *
     * @return boolean
     */
    public function getApprovato()
    {
        return $this->approvato;
    }

    /**
     * Set idfornitore
     *
     * @param integer $idfornitore
     *
     * @return CodiciavesRelFornitori
     */
    public function setIdfornitore($idfornitore)
    {
        $this->idfornitore = $idfornitore;

        return $this;
    }

    /**
     * Get idfornitore
     *
     * @return integer
     */
    public function getIdfornitore()
    {
        return $this->idfornitore;
    }

    /**
     * Set codiceaves
     *
     * @param string $codiceaves
     *
     * @return CodiciavesRelFornitori
     */
    public function setCodiceaves($codiceaves)
    {
        $this->codiceaves = $codiceaves;

        return $this;
    }

    /**
     * Get codiceaves
     *
     * @return string
     */
    public function getCodiceaves()
    {
        return $this->codiceaves;
    }
}

