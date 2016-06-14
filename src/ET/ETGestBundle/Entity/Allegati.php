<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allegati
 *
 * @ORM\Table(name="allegati", indexes={@ORM\Index(name="id_modulo", columns={"id_modulo", "tipoDocumento"})})
 * @ORM\Entity
 */
class Allegati
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="percorso", type="string", length=100, nullable=false)
     */
    private $percorso = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nomeFile", type="string", length=100, nullable=false)
     */
    private $nomefile = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoDocumento", type="integer", nullable=false)
     */
    private $tipodocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer", nullable=false)
     */
    private $idModulo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idAllegato", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
