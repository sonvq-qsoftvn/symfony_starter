<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ViaggiInconformita
 *
 * @ORM\Table(name="viaggi_inconformita")
 * @ORM\Entity
 */
class ViaggiInconformita
{
    /**
     * @var string
     *
     * @ORM\Column(name="messaggio", type="text", length=65535, nullable=true)
     */
    private $messaggio;

    /**
     * @var string
     *
     * @ORM\Column(name="regime", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $regime;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposervizio", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tiposervizio;

    /**
     * @var string
     *
     * @ORM\Column(name="noncompatible", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $noncompatible;



    /**
     * Set messaggio
     *
     * @param string $messaggio
     *
     * @return ViaggiInconformita
     */
    public function setMessaggio($messaggio)
    {
        $this->messaggio = $messaggio;

        return $this;
    }

    /**
     * Get messaggio
     *
     * @return string
     */
    public function getMessaggio()
    {
        return $this->messaggio;
    }

    /**
     * Set regime
     *
     * @param string $regime
     *
     * @return ViaggiInconformita
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return string
     */
    public function getRegime()
    {
        return $this->regime;
    }

    /**
     * Set tiposervizio
     *
     * @param string $tiposervizio
     *
     * @return ViaggiInconformita
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
     * Set noncompatible
     *
     * @param string $noncompatible
     *
     * @return ViaggiInconformita
     */
    public function setNoncompatible($noncompatible)
    {
        $this->noncompatible = $noncompatible;

        return $this;
    }

    /**
     * Get noncompatible
     *
     * @return string
     */
    public function getNoncompatible()
    {
        return $this->noncompatible;
    }
}
