<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preventivi
 *
 * @ORM\Table(name="preventivi", indexes={@ORM\Index(name="id_Viaggio", columns={"id_Viaggio"})})
 * @ORM\Entity
 */
class Preventivi
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=false)
     */
    private $datacreazione = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Viaggio", type="integer", nullable=false)
     */
    private $idViaggio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="testo", type="text", length=65535, nullable=false)
     */
    private $testo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataModifica", type="datetime", nullable=false)
     */
    private $datamodifica = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="idPreventivo", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpreventivo;



    /**
     * Set datacreazione
     *
     * @param \DateTime $datacreazione
     *
     * @return Preventivi
     */
    public function setDatacreazione($datacreazione)
    {
        $this->datacreazione = $datacreazione;

        return $this;
    }

    /**
     * Get datacreazione
     *
     * @return \DateTime
     */
    public function getDatacreazione()
    {
        return $this->datacreazione;
    }

    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return Preventivi
     */
    public function setIdViaggio($idViaggio)
    {
        $this->idViaggio = $idViaggio;

        return $this;
    }

    /**
     * Get idViaggio
     *
     * @return integer
     */
    public function getIdViaggio()
    {
        return $this->idViaggio;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return Preventivi
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return Preventivi
     */
    public function setDatamodifica($datamodifica)
    {
        $this->datamodifica = $datamodifica;

        return $this;
    }

    /**
     * Get datamodifica
     *
     * @return \DateTime
     */
    public function getDatamodifica()
    {
        return $this->datamodifica;
    }

    /**
     * Get idpreventivo
     *
     * @return string
     */
    public function getIdpreventivo()
    {
        return $this->idpreventivo;
    }
}
