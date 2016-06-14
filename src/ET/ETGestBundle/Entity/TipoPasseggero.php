<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPasseggero
 *
 * @ORM\Table(name="tipo_passeggero")
 * @ORM\Entity
 */
class TipoPasseggero
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=100, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datacreazione", type="datetime", nullable=true)
     */
    private $datacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datamodifica", type="datetime", nullable=true)
     */
    private $datamodifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoPasseggero", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipopasseggero;



    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return TipoPasseggero
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set datacreazione
     *
     * @param \DateTime $datacreazione
     *
     * @return TipoPasseggero
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
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return TipoPasseggero
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
     * Get idtipopasseggero
     *
     * @return integer
     */
    public function getIdtipopasseggero()
    {
        return $this->idtipopasseggero;
    }
}
