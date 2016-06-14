<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeToRelCat
 */
class BackofficeToRelCat
{
    /**
     * @var integer
     */
    private $idto;

    /**
     * @var integer
     */
    private $idcategoria;


    /**
     * Set idto
     *
     * @param integer $idto
     *
     * @return BackofficeToRelCat
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
     * Set idcategoria
     *
     * @param integer $idcategoria
     *
     * @return BackofficeToRelCat
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}

