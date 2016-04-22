<?php

namespace AppBundle\Entity;

/**
 * Citta
 */
class Citta
{
    /**
     * @var string
     */
    private $tipo = '';

    /**
     * @var string
     */
    private $citta = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Citta
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return Citta
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
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
