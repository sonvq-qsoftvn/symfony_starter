<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeServiziDettagli
 */
class BackofficeServiziDettagli
{
    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $tipo = 'sistemazione';

    /**
     * @var boolean
     */
    private $attivo = '1';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return BackofficeServiziDettagli
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return BackofficeServiziDettagli
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
     * Set attivo
     *
     * @param boolean $attivo
     *
     * @return BackofficeServiziDettagli
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;

        return $this;
    }

    /**
     * Get attivo
     *
     * @return boolean
     */
    public function getAttivo()
    {
        return $this->attivo;
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

