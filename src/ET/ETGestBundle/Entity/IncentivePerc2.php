<?php

namespace ET\ETGestBundle\Entity;

/**
 * IncentivePerc2
 */
class IncentivePerc2
{
    /**
     * @var string
     */
    private $percorso = '';

    /**
     * @var boolean
     */
    private $perc = '0';

    /**
     * @var string
     */
    private $data;

    /**
     * @var integer
     */
    private $codpromdest;

    /**
     * @var integer
     */
    private $codprompart;


    /**
     * Set percorso
     *
     * @param string $percorso
     *
     * @return IncentivePerc2
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
     * Set perc
     *
     * @param boolean $perc
     *
     * @return IncentivePerc2
     */
    public function setPerc($perc)
    {
        $this->perc = $perc;

        return $this;
    }

    /**
     * Get perc
     *
     * @return boolean
     */
    public function getPerc()
    {
        return $this->perc;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return IncentivePerc2
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set codpromdest
     *
     * @param integer $codpromdest
     *
     * @return IncentivePerc2
     */
    public function setCodpromdest($codpromdest)
    {
        $this->codpromdest = $codpromdest;

        return $this;
    }

    /**
     * Get codpromdest
     *
     * @return integer
     */
    public function getCodpromdest()
    {
        return $this->codpromdest;
    }

    /**
     * Set codprompart
     *
     * @param integer $codprompart
     *
     * @return IncentivePerc2
     */
    public function setCodprompart($codprompart)
    {
        $this->codprompart = $codprompart;

        return $this;
    }

    /**
     * Get codprompart
     *
     * @return integer
     */
    public function getCodprompart()
    {
        return $this->codprompart;
    }
}
