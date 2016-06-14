<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeToRelDest
 */
class BackofficeToRelDest
{
    /**
     * @var integer
     */
    private $idto;

    /**
     * @var integer
     */
    private $iddestinazione;


    /**
     * Set idto
     *
     * @param integer $idto
     *
     * @return BackofficeToRelDest
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
     * Set iddestinazione
     *
     * @param integer $iddestinazione
     *
     * @return BackofficeToRelDest
     */
    public function setIddestinazione($iddestinazione)
    {
        $this->iddestinazione = $iddestinazione;

        return $this;
    }

    /**
     * Get iddestinazione
     *
     * @return integer
     */
    public function getIddestinazione()
    {
        return $this->iddestinazione;
    }
}

