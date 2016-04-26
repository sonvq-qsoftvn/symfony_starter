<?php

namespace ET\ETGestBundle\Entity;

/**
 * ServiziPaxRelation
 */
class ServiziPaxRelation
{
    /**
     * @var integer
     */
    private $paxId;

    /**
     * @var integer
     */
    private $servizioId;


    /**
     * Set paxId
     *
     * @param integer $paxId
     *
     * @return ServiziPaxRelation
     */
    public function setPaxId($paxId)
    {
        $this->paxId = $paxId;

        return $this;
    }

    /**
     * Get paxId
     *
     * @return integer
     */
    public function getPaxId()
    {
        return $this->paxId;
    }

    /**
     * Set servizioId
     *
     * @param integer $servizioId
     *
     * @return ServiziPaxRelation
     */
    public function setServizioId($servizioId)
    {
        $this->servizioId = $servizioId;

        return $this;
    }

    /**
     * Get servizioId
     *
     * @return integer
     */
    public function getServizioId()
    {
        return $this->servizioId;
    }
}

