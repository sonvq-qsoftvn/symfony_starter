<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppaltiClienteViaggi
 *
 * @ORM\Table(name="appalti_cliente_viaggi")
 * @ORM\Entity
 */
class AppaltiClienteViaggi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_appalto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAppalto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
