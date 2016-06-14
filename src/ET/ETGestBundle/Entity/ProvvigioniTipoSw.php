<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProvvigioniTipoSw
 *
 * @ORM\Table(name="provvigioni_tipo_sw", indexes={@ORM\Index(name="padre", columns={"padre"})})
 * @ORM\Entity
 */
class ProvvigioniTipoSw
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
     * @ORM\Column(name="nome", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nome;



    /**
     * Set percentuale
     *
     * @param float $percentuale
     *
     * @return ProvvigioniTipoSw
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
     * @return ProvvigioniTipoSw
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
     * @return ProvvigioniTipoSw
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
     * @return ProvvigioniTipoSw
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
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }
}
