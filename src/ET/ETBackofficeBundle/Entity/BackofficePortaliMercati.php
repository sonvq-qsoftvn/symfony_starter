<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficePortaliMercati
 */
class BackofficePortaliMercati
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
     * @var boolean
     */
    private $attivo = '0';

    /**
     * @var boolean
     */
    private $visualizzato = '1';

    /**
     * @var string
     */
    private $mercato = 'ITA';

    /**
     * @var integer
     */
    private $idportale;


    /**
     * Set nomeportale
     *
     * @param string $nomeportale
     *
     * @return BackofficePortaliMercati
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
     * @return BackofficePortaliMercati
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
     * @return BackofficePortaliMercati
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
     * @return BackofficePortaliMercati
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
     * @return BackofficePortaliMercati
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
     * Set attivo
     *
     * @param boolean $attivo
     *
     * @return BackofficePortaliMercati
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
     * Set visualizzato
     *
     * @param boolean $visualizzato
     *
     * @return BackofficePortaliMercati
     */
    public function setVisualizzato($visualizzato)
    {
        $this->visualizzato = $visualizzato;

        return $this;
    }

    /**
     * Get visualizzato
     *
     * @return boolean
     */
    public function getVisualizzato()
    {
        return $this->visualizzato;
    }

    /**
     * Set mercato
     *
     * @param string $mercato
     *
     * @return BackofficePortaliMercati
     */
    public function setMercato($mercato)
    {
        $this->mercato = $mercato;

        return $this;
    }

    /**
     * Get mercato
     *
     * @return string
     */
    public function getMercato()
    {
        return $this->mercato;
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

