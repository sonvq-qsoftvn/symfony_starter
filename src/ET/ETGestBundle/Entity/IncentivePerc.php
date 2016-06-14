<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncentivePerc
 *
 * @ORM\Table(name="incentive_perc")
 * @ORM\Entity
 */
class IncentivePerc
{
    /**
     * @var string
     *
     * @ORM\Column(name="percorso", type="string", length=50, nullable=false)
     */
    private $percorso = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="perc", type="integer", nullable=false)
     */
    private $perc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromDest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codpromdest;

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromPart", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @param integer $perc
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
     * @return integer
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
