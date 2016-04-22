<?php

namespace AppBundle\Entity;

/**
 * IncentivePerc
 */
class IncentivePerc
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
     * @return IncentivePerc
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
     * @return IncentivePerc
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
     * @return IncentivePerc
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
     * @return IncentivePerc
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
     * @return IncentivePerc
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
