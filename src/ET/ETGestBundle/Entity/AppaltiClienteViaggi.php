<?php

namespace ET\ETGestBundle\Entity;

/**
 * AppaltiClienteViaggi
 */
class AppaltiClienteViaggi
{
    /**
     * @var integer
     */
    private $idAppalto;

    /**
     * @var integer
     */
    private $idViaggio;


    /**
     * Set idAppalto
     *
     * @param integer $idAppalto
     *
     * @return AppaltiClienteViaggi
     */
    public function setIdAppalto($idAppalto)
    {
        $this->idAppalto = $idAppalto;

        return $this;
    }

    /**
     * Get idAppalto
     *
     * @return integer
     */
    public function getIdAppalto()
    {
        return $this->idAppalto;
    }

    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return AppaltiClienteViaggi
     */
    public function setIdViaggio($idViaggio)
    {
        $this->idViaggio = $idViaggio;

        return $this;
    }

    /**
     * Get idViaggio
     *
     * @return integer
     */
    public function getIdViaggio()
    {
        return $this->idViaggio;
    }
}

