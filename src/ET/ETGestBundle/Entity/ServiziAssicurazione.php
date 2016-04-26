<?php

namespace ET\ETGestBundle\Entity;

/**
 * ServiziAssicurazione
 */
class ServiziAssicurazione
{
    /**
     * @var string
     */
    private $nropzione;

    /**
     * @var \DateTime
     */
    private $datain;

    /**
     * @var \DateTime
     */
    private $dataout;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nropzione
     *
     * @param string $nropzione
     *
     * @return ServiziAssicurazione
     */
    public function setNropzione($nropzione)
    {
        $this->nropzione = $nropzione;

        return $this;
    }

    /**
     * Get nropzione
     *
     * @return string
     */
    public function getNropzione()
    {
        return $this->nropzione;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ServiziAssicurazione
     */
    public function setDatain($datain)
    {
        $this->datain = $datain;

        return $this;
    }

    /**
     * Get datain
     *
     * @return \DateTime
     */
    public function getDatain()
    {
        return $this->datain;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ServiziAssicurazione
     */
    public function setDataout($dataout)
    {
        $this->dataout = $dataout;

        return $this;
    }

    /**
     * Get dataout
     *
     * @return \DateTime
     */
    public function getDataout()
    {
        return $this->dataout;
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
}

