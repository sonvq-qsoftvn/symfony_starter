<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersContratti
 *
 * @ORM\Table(name="users_contratti")
 * @ORM\Entity
 */
class UsersContratti
{
    /**
     * @var string
     *
     * @ORM\Column(name="contratto_tipo", type="string", length=20, nullable=false)
     */
    private $contrattoTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_rinnovo", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $contrattoRinnovo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contratto_data", type="date", nullable=true)
     */
    private $contrattoData;

    /**
     * @var boolean
     *
     * @ORM\Column(name="principale", type="boolean", nullable=false)
     */
    private $principale = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="agenzia", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $agenzia;



    /**
     * Set contrattoTipo
     *
     * @param string $contrattoTipo
     *
     * @return UsersContratti
     */
    public function setContrattoTipo($contrattoTipo)
    {
        $this->contrattoTipo = $contrattoTipo;

        return $this;
    }

    /**
     * Get contrattoTipo
     *
     * @return string
     */
    public function getContrattoTipo()
    {
        return $this->contrattoTipo;
    }

    /**
     * Set contrattoRinnovo
     *
     * @param string $contrattoRinnovo
     *
     * @return UsersContratti
     */
    public function setContrattoRinnovo($contrattoRinnovo)
    {
        $this->contrattoRinnovo = $contrattoRinnovo;

        return $this;
    }

    /**
     * Get contrattoRinnovo
     *
     * @return string
     */
    public function getContrattoRinnovo()
    {
        return $this->contrattoRinnovo;
    }

    /**
     * Set contrattoData
     *
     * @param \DateTime $contrattoData
     *
     * @return UsersContratti
     */
    public function setContrattoData($contrattoData)
    {
        $this->contrattoData = $contrattoData;

        return $this;
    }

    /**
     * Get contrattoData
     *
     * @return \DateTime
     */
    public function getContrattoData()
    {
        return $this->contrattoData;
    }

    /**
     * Set principale
     *
     * @param boolean $principale
     *
     * @return UsersContratti
     */
    public function setPrincipale($principale)
    {
        $this->principale = $principale;

        return $this;
    }

    /**
     * Get principale
     *
     * @return boolean
     */
    public function getPrincipale()
    {
        return $this->principale;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return UsersContratti
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
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return UsersContratti
     */
    public function setAgenzia($agenzia)
    {
        $this->agenzia = $agenzia;

        return $this;
    }

    /**
     * Get agenzia
     *
     * @return string
     */
    public function getAgenzia()
    {
        return $this->agenzia;
    }
}
