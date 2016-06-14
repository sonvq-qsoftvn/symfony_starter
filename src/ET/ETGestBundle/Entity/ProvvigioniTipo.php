<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProvvigioniTipo
 *
 * @ORM\Table(name="provvigioni_tipo", indexes={@ORM\Index(name="padre", columns={"padre"})})
 * @ORM\Entity
 */
class ProvvigioniTipo
{
    /**
     * @var float
     *
     * @ORM\Column(name="percentuale", type="float", precision=10, scale=0, nullable=false)
     */
    private $percentuale = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ordine", type="boolean", nullable=false)
     */
    private $ordine = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="padre", type="string", length=20, nullable=false)
     */
    private $padre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nome_variabile_id", type="string", length=20, nullable=false)
     */
    private $nomeVariabileId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="callback", type="string", length=255, nullable=false)
     */
    private $callback = '';

    /**
     * @var string
     *
     * @ORM\Column(name="etichetta", type="string", length=255, nullable=false)
     */
    private $etichetta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
