<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeToRelForn
 */
class BackofficeToRelForn
{
    /**
     * @var integer
     */
    private $idto;

    /**
     * @var integer
     */
    private $idfornitore;


    /**
     * Set idto
     *
     * @param integer $idto
     *
     * @return BackofficeToRelForn
     */
    public function setIdto($idto)
    {
        $this->idto = $idto;

        return $this;
    }

    /**
     * Get idto
     *
     * @return integer
     */
    public function getIdto()
    {
        return $this->idto;
    }

    /**
     * Set idfornitore
     *
     * @param integer $idfornitore
     *
     * @return BackofficeToRelForn
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
}

