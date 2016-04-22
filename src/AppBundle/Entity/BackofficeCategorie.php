<?php

namespace AppBundle\Entity;

/**
 * BackofficeCategorie
 */
class BackofficeCategorie
{
    /**
     * @var string
     */
    private $categoria = '';

    /**
     * @var integer
     */
    private $idcategoria;


    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return BackofficeCategorie
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
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
