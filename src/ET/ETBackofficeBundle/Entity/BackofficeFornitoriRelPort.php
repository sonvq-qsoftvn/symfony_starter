<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeFornitoriRelPort
 */
class BackofficeFornitoriRelPort
{
    /**
     * @var integer
     */
    private $idfornitore;

    /**
     * @var integer
     */
    private $idportale;


    /**
     * Set idfornitore
     *
     * @param integer $idfornitore
     *
     * @return BackofficeFornitoriRelPort
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
     * Set idportale
     *
     * @param integer $idportale
     *
     * @return BackofficeFornitoriRelPort
     */
    public function setIdportale($idportale)
    {
        $this->idportale = $idportale;

        return $this;
    }

    /**
     * Get idportale
     *
     * @return integer
     */
    public function getIdportale()
    {
        return $this->idportale;
    }
}

