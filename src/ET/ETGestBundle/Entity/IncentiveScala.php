<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncentiveScala
 *
 * @ORM\Table(name="incentive_scala")
 * @ORM\Entity
 */
class IncentiveScala
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vp", type="smallint", nullable=false)
     */
    private $vp = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="percentuale", type="boolean", nullable=false)
     */
    private $percentuale = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set vp
     *
     * @param integer $vp
     *
     * @return IncentiveScala
     */
    public function setVp($vp)
    {
        $this->vp = $vp;

        return $this;
    }

    /**
     * Get vp
     *
     * @return integer
     */
    public function getVp()
    {
        return $this->vp;
    }

    /**
     * Set percentuale
     *
     * @param boolean $percentuale
     *
     * @return IncentiveScala
     */
    public function setPercentuale($percentuale)
    {
        $this->percentuale = $percentuale;

        return $this;
    }

    /**
     * Get percentuale
     *
     * @return boolean
     */
    public function getPercentuale()
    {
        return $this->percentuale;
    }

    /**
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return IncentiveScala
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
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
