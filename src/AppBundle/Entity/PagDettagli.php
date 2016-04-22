<?php

namespace AppBundle\Entity;

/**
 * PagDettagli
 */
class PagDettagli
{
    /**
     * @var string
     */
    private $chiave = '';

    /**
     * @var string
     */
    private $campo = '';

    /**
     * @var string
     */
    private $valore = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set chiave
     *
     * @param string $chiave
     *
     * @return PagDettagli
     */
    public function setChiave($chiave)
    {
        $this->chiave = $chiave;

        return $this;
    }

    /**
     * Get chiave
     *
     * @return string
     */
    public function getChiave()
    {
        return $this->chiave;
    }

    /**
     * Set campo
     *
     * @param string $campo
     *
     * @return PagDettagli
     */
    public function setCampo($campo)
    {
        $this->campo = $campo;

        return $this;
    }

    /**
     * Get campo
     *
     * @return string
     */
    public function getCampo()
    {
        return $this->campo;
    }

    /**
     * Set valore
     *
     * @param string $valore
     *
     * @return PagDettagli
     */
    public function setValore($valore)
    {
        $this->valore = $valore;

        return $this;
    }

    /**
     * Get valore
     *
     * @return string
     */
    public function getValore()
    {
        return $this->valore;
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
