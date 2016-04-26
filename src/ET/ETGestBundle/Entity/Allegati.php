<?php

namespace ET\ETGestBundle\Entity;

/**
 * Allegati
 */
class Allegati
{
    /**
     * @var \DateTime
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $percorso = '';

    /**
     * @var string
     */
    private $nomefile = '';

    /**
     * @var boolean
     */
    private $tipodocumento = '0';

    /**
     * @var integer
     */
    private $idModulo = '0';

    /**
     * @var integer
     */
    private $idallegato;


    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Allegati
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set percorso
     *
     * @param string $percorso
     *
     * @return Allegati
     */
    public function setPercorso($percorso)
    {
        $this->percorso = $percorso;

        return $this;
    }

    /**
     * Get percorso
     *
     * @return string
     */
    public function getPercorso()
    {
        return $this->percorso;
    }

    /**
     * Set nomefile
     *
     * @param string $nomefile
     *
     * @return Allegati
     */
    public function setNomefile($nomefile)
    {
        $this->nomefile = $nomefile;

        return $this;
    }

    /**
     * Get nomefile
     *
     * @return string
     */
    public function getNomefile()
    {
        return $this->nomefile;
    }

    /**
     * Set tipodocumento
     *
     * @param boolean $tipodocumento
     *
     * @return Allegati
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return boolean
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set idModulo
     *
     * @param integer $idModulo
     *
     * @return Allegati
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return integer
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Get idallegato
     *
     * @return integer
     */
    public function getIdallegato()
    {
        return $this->idallegato;
    }
}

