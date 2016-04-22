<?php

namespace AppBundle\Entity;

/**
 * IncentiveScala
 */
class IncentiveScala
{
    /**
     * @var integer
     */
    private $vp = '0';

    /**
     * @var boolean
     */
    private $percentuale = '0';

    /**
     * @var boolean
     */
    private $tipo = '0';

    /**
     * @var integer
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
