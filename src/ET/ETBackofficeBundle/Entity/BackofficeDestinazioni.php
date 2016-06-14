<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeDestinazioni
 */
class BackofficeDestinazioni
{
    /**
     * @var string
     */
    private $tipo = 'dest';

    /**
     * @var string
     */
    private $nazione = '';

    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $citta = '';

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var integer
     */
    private $iddestinazione;


    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return BackofficeDestinazioni
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
     * Set nazione
     *
     * @param string $nazione
     *
     * @return BackofficeDestinazioni
     */
    public function setNazione($nazione)
    {
        $this->nazione = $nazione;

        return $this;
    }

    /**
     * Get nazione
     *
     * @return string
     */
    public function getNazione()
    {
        return $this->nazione;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return BackofficeDestinazioni
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return BackofficeDestinazioni
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
     * Set status
     *
     * @param boolean $status
     *
     * @return BackofficeDestinazioni
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
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

