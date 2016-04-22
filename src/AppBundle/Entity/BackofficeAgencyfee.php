<?php

namespace AppBundle\Entity;

/**
 * BackofficeAgencyfee
 */
class BackofficeAgencyfee
{
    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var float
     */
    private $importo = '0';

    /**
     * @var boolean
     */
    private $iva = '0';

    /**
     * @var string
     */
    private $tipo = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return BackofficeAgencyfee
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set importo
     *
     * @param float $importo
     *
     * @return BackofficeAgencyfee
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;

        return $this;
    }

    /**
     * Get importo
     *
     * @return float
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * Set iva
     *
     * @param boolean $iva
     *
     * @return BackofficeAgencyfee
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return boolean
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return BackofficeAgencyfee
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
