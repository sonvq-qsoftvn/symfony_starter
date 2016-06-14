<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeCircolari
 */
class BackofficeCircolari
{
    /**
     * @var string
     */
    private $titolocircolare = '';

    /**
     * @var string
     */
    private $titolarecircolare = '';

    /**
     * @var \DateTime
     */
    private $datacircolare = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $numerocircolare = '';

    /**
     * @var string
     */
    private $filecircolare = '';

    /**
     * @var integer
     */
    private $idcircolare;


    /**
     * Set titolocircolare
     *
     * @param string $titolocircolare
     *
     * @return BackofficeCircolari
     */
    public function setTitolocircolare($titolocircolare)
    {
        $this->titolocircolare = $titolocircolare;

        return $this;
    }

    /**
     * Get titolocircolare
     *
     * @return string
     */
    public function getTitolocircolare()
    {
        return $this->titolocircolare;
    }

    /**
     * Set titolarecircolare
     *
     * @param string $titolarecircolare
     *
     * @return BackofficeCircolari
     */
    public function setTitolarecircolare($titolarecircolare)
    {
        $this->titolarecircolare = $titolarecircolare;

        return $this;
    }

    /**
     * Get titolarecircolare
     *
     * @return string
     */
    public function getTitolarecircolare()
    {
        return $this->titolarecircolare;
    }

    /**
     * Set datacircolare
     *
     * @param \DateTime $datacircolare
     *
     * @return BackofficeCircolari
     */
    public function setDatacircolare($datacircolare)
    {
        $this->datacircolare = $datacircolare;

        return $this;
    }

    /**
     * Get datacircolare
     *
     * @return \DateTime
     */
    public function getDatacircolare()
    {
        return $this->datacircolare;
    }

    /**
     * Set numerocircolare
     *
     * @param string $numerocircolare
     *
     * @return BackofficeCircolari
     */
    public function setNumerocircolare($numerocircolare)
    {
        $this->numerocircolare = $numerocircolare;

        return $this;
    }

    /**
     * Get numerocircolare
     *
     * @return string
     */
    public function getNumerocircolare()
    {
        return $this->numerocircolare;
    }

    /**
     * Set filecircolare
     *
     * @param string $filecircolare
     *
     * @return BackofficeCircolari
     */
    public function setFilecircolare($filecircolare)
    {
        $this->filecircolare = $filecircolare;

        return $this;
    }

    /**
     * Get filecircolare
     *
     * @return string
     */
    public function getFilecircolare()
    {
        return $this->filecircolare;
    }

    /**
     * Get idcircolare
     *
     * @return integer
     */
    public function getIdcircolare()
    {
        return $this->idcircolare;
    }
}

