<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziAssicurazioneobbligatoria
 *
 * @ORM\Table(name="servizi_assicurazioneobbligatoria")
 * @ORM\Entity
 */
class ServiziAssicurazioneobbligatoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="accettazione", type="string", length=255, nullable=true)
     */
    private $accettazione;

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
     * Set accettazione
     *
     * @param string $accettazione
     *
     * @return ServiziAssicurazioneobbligatoria
     */
    public function setAccettazione($accettazione)
    {
        $this->accettazione = $accettazione;

        return $this;
    }

    /**
     * Get accettazione
     *
     * @return string
     */
    public function getAccettazione()
    {
        return $this->accettazione;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ServiziAssicurazioneobbligatoria
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
     * @return ServiziAssicurazioneobbligatoria
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
