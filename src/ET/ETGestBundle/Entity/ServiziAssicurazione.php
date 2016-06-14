<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziAssicurazione
 *
 * @ORM\Table(name="servizi_assicurazione")
 * @ORM\Entity
 */
class ServiziAssicurazione
{
    /**
     * @var string
     *
     * @ORM\Column(name="nropzione", type="string", length=20, nullable=true)
     */
    private $nropzione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datain", type="date", nullable=true)
     */
    private $datain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataout", type="date", nullable=true)
     */
    private $dataout;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
