<?php

namespace AppBundle\Entity;

/**
 * BackofficePortaliBackup
 */
class BackofficePortaliBackup
{
    /**
     * @var string
     */
    private $nomeportale = '';

    /**
     * @var string
     */
    private $fcd = '';

    /**
     * @var integer
     */
    private $tempoAccettazione = '0';

    /**
     * @var integer
     */
    private $tempoLavorazione = '0';

    /**
     * @var boolean
     */
    private $attesaPreventivo = '1';

    /**
     * @var integer
     */
    private $idportale;


    /**
     * Set nomeportale
     *
     * @param string $nomeportale
     *
     * @return BackofficePortaliBackup
     */
    public function setNomeportale($nomeportale)
    {
        $this->nomeportale = $nomeportale;

        return $this;
    }

    /**
     * Get nomeportale
     *
     * @return string
     */
    public function getNomeportale()
    {
        return $this->nomeportale;
    }

    /**
     * Set fcd
     *
     * @param string $fcd
     *
     * @return BackofficePortaliBackup
     */
    public function setFcd($fcd)
    {
        $this->fcd = $fcd;

        return $this;
    }

    /**
     * Get fcd
     *
     * @return string
     */
    public function getFcd()
    {
        return $this->fcd;
    }

    /**
     * Set tempoAccettazione
     *
     * @param integer $tempoAccettazione
     *
     * @return BackofficePortaliBackup
     */
    public function setTempoAccettazione($tempoAccettazione)
    {
        $this->tempoAccettazione = $tempoAccettazione;

        return $this;
    }

    /**
     * Get tempoAccettazione
     *
     * @return integer
     */
    public function getTempoAccettazione()
    {
        return $this->tempoAccettazione;
    }

    /**
     * Set tempoLavorazione
     *
     * @param integer $tempoLavorazione
     *
     * @return BackofficePortaliBackup
     */
    public function setTempoLavorazione($tempoLavorazione)
    {
        $this->tempoLavorazione = $tempoLavorazione;

        return $this;
    }

    /**
     * Get tempoLavorazione
     *
     * @return integer
     */
    public function getTempoLavorazione()
    {
        return $this->tempoLavorazione;
    }

    /**
     * Set attesaPreventivo
     *
     * @param boolean $attesaPreventivo
     *
     * @return BackofficePortaliBackup
     */
    public function setAttesaPreventivo($attesaPreventivo)
    {
        $this->attesaPreventivo = $attesaPreventivo;

        return $this;
    }

    /**
     * Get attesaPreventivo
     *
     * @return boolean
     */
    public function getAttesaPreventivo()
    {
        return $this->attesaPreventivo;
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
