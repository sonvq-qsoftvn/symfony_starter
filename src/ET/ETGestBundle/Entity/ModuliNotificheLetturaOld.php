<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuliNotificheLetturaOld
 *
 * @ORM\Table(name="moduli_notifiche_lettura_old")
 * @ORM\Entity
 */
class ModuliNotificheLetturaOld
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer", nullable=false)
     */
    private $codpromotore = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataLettura", type="datetime", nullable=false)
     */
    private $datalettura = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stato", type="boolean", nullable=false)
     */
    private $stato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModulo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoDocumento", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipodocumento;



    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return ModuliNotificheLetturaOld
     */
    public function setCodpromotore($codpromotore)
    {
        $this->codpromotore = $codpromotore;

        return $this;
    }

    /**
     * Get codpromotore
     *
     * @return integer
     */
    public function getCodpromotore()
    {
        return $this->codpromotore;
    }

    /**
     * Set datalettura
     *
     * @param \DateTime $datalettura
     *
     * @return ModuliNotificheLetturaOld
     */
    public function setDatalettura($datalettura)
    {
        $this->datalettura = $datalettura;

        return $this;
    }

    /**
     * Get datalettura
     *
     * @return \DateTime
     */
    public function getDatalettura()
    {
        return $this->datalettura;
    }

    /**
     * Set stato
     *
     * @param boolean $stato
     *
     * @return ModuliNotificheLetturaOld
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return boolean
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set idModulo
     *
     * @param integer $idModulo
     *
     * @return ModuliNotificheLetturaOld
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
     * Set tipodocumento
     *
     * @param boolean $tipodocumento
     *
     * @return ModuliNotificheLetturaOld
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
}
