<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsiTipoPermessi
 *
 * @ORM\Table(name="corsi_tipo_permessi", indexes={@ORM\Index(name="idCorsiTipo", columns={"idCorsiTipo"})})
 * @ORM\Entity
 */
class CorsiTipoPermessi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCorsiTipo", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcorsitipo;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return CorsiTipoPermessi
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set idcorsitipo
     *
     * @param integer $idcorsitipo
     *
     * @return CorsiTipoPermessi
     */
    public function setIdcorsitipo($idcorsitipo)
    {
        $this->idcorsitipo = $idcorsitipo;

        return $this;
    }

    /**
     * Get idcorsitipo
     *
     * @return integer
     */
    public function getIdcorsitipo()
    {
        return $this->idcorsitipo;
    }
}
