<?php

namespace AppBundle\Entity;

/**
 * UsersContratti
 */
class UsersContratti
{
    /**
     * @var string
     */
    private $contrattoTipo;

    /**
     * @var string
     */
    private $contrattoRinnovo;

    /**
     * @var \DateTime
     */
    private $contrattoData;

    /**
     * @var boolean
     */
    private $principale = '0';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
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
