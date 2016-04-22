<?php

namespace AppBundle\Entity;

/**
 * ProvvigioniTipo
 */
class ProvvigioniTipo
{
    /**
     * @var float
     */
    private $percentuale = '0';

    /**
     * @var boolean
     */
    private $ordine = '0';

    /**
     * @var string
     */
    private $padre = '';

    /**
     * @var string
     */
    private $nomeVariabileId = '';

    /**
     * @var string
     */
    private $callback = '';

    /**
     * @var string
     */
    private $etichetta = '';

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $tipo;


    /**
     * Set percentuale
     *
     * @param float $percentuale
     *
     * @return ProvvigioniTipo
     */
    public function setPercentuale($percentuale)
    {
        $this->percentuale = $percentuale;

        return $this;
    }

    /**
     * Get percentuale
     *
     * @return float
     */
    public function getPercentuale()
    {
        return $this->percentuale;
    }

    /**
     * Set ordine
     *
     * @param boolean $ordine
     *
     * @return ProvvigioniTipo
     */
    public function setOrdine($ordine)
    {
        $this->ordine = $ordine;

        return $this;
    }

    /**
     * Get ordine
     *
     * @return boolean
     */
    public function getOrdine()
    {
        return $this->ordine;
    }

    /**
     * Set padre
     *
     * @param string $padre
     *
     * @return ProvvigioniTipo
     */
    public function setPadre($padre)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return string
     */
    public function getPadre()
    {
        return $this->padre;
    }

    /**
     * Set nomeVariabileId
     *
     * @param string $nomeVariabileId
     *
     * @return ProvvigioniTipo
     */
    public function setNomeVariabileId($nomeVariabileId)
    {
        $this->nomeVariabileId = $nomeVariabileId;

        return $this;
    }

    /**
     * Get nomeVariabileId
     *
     * @return string
     */
    public function getNomeVariabileId()
    {
        return $this->nomeVariabileId;
    }

    /**
     * Set callback
     *
     * @param string $callback
     *
     * @return ProvvigioniTipo
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;

        return $this;
    }

    /**
     * Get callback
     *
     * @return string
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set etichetta
     *
     * @param string $etichetta
     *
     * @return ProvvigioniTipo
     */
    public function setEtichetta($etichetta)
    {
        $this->etichetta = $etichetta;

        return $this;
    }

    /**
     * Get etichetta
     *
     * @return string
     */
    public function getEtichetta()
    {
        return $this->etichetta;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return ProvvigioniTipo
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return ProvvigioniTipo
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
}
