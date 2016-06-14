<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziPaxRelation
 *
 * @ORM\Table(name="servizi_pax_relation")
 * @ORM\Entity
 */
class ServiziPaxRelation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pax_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $paxId;

    /**
     * @var integer
     *
     * @ORM\Column(name="servizio_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
