<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodicicontabiliRelTiposervizi
 *
 * @ORM\Table(name="codicicontabili_rel_tiposervizi")
 * @ORM\Entity
 */
class CodicicontabiliRelTiposervizi
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipoServizio", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tiposervizio;

    /**
     * @var string
     *
     * @ORM\Column(name="codiceContabile", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codicecontabile;



    /**
     * Set tiposervizio
     *
     * @param string $tiposervizio
     *
     * @return CodicicontabiliRelTiposervizi
     */
    public function setTiposervizio($tiposervizio)
    {
        $this->tiposervizio = $tiposervizio;

        return $this;
    }

    /**
     * Get tiposervizio
     *
     * @return string
     */
    public function getTiposervizio()
    {
        return $this->tiposervizio;
    }

    /**
     * Set codicecontabile
     *
     * @param string $codicecontabile
     *
     * @return CodicicontabiliRelTiposervizi
     */
    public function setCodicecontabile($codicecontabile)
    {
        $this->codicecontabile = $codicecontabile;

        return $this;
    }

    /**
     * Get codicecontabile
     *
     * @return string
     */
    public function getCodicecontabile()
    {
        return $this->codicecontabile;
    }
}
