<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalvataggioTemporanei
 *
 * @ORM\Table(name="salvataggio_temporanei")
 * @ORM\Entity
 */
class SalvataggioTemporanei
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoModulo", type="boolean", nullable=false)
     */
    private $tipomodulo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contenuto", type="text", length=65535, nullable=false)
     */
    private $contenuto;

    /**
     * @var string
     *
     * @ORM\Column(name="id_cliente", type="string", length=18)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_promotore", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPromotore;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idViaggio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModulo;



    /**
     * Set tipomodulo
     *
     * @param boolean $tipomodulo
     *
     * @return SalvataggioTemporanei
     */
    public function setTipomodulo($tipomodulo)
    {
        $this->tipomodulo = $tipomodulo;

        return $this;
    }

    /**
     * Get tipomodulo
     *
     * @return boolean
     */
    public function getTipomodulo()
    {
        return $this->tipomodulo;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return SalvataggioTemporanei
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set contenuto
     *
     * @param string $contenuto
     *
     * @return SalvataggioTemporanei
     */
    public function setContenuto($contenuto)
    {
        $this->contenuto = $contenuto;

        return $this;
    }

    /**
     * Get contenuto
     *
     * @return string
     */
    public function getContenuto()
    {
        return $this->contenuto;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     *
     * @return SalvataggioTemporanei
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idPromotore
     *
     * @param integer $idPromotore
     *
     * @return SalvataggioTemporanei
     */
    public function setIdPromotore($idPromotore)
    {
        $this->idPromotore = $idPromotore;

        return $this;
    }

    /**
     * Get idPromotore
     *
     * @return integer
     */
    public function getIdPromotore()
    {
        return $this->idPromotore;
    }

    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return SalvataggioTemporanei
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
     * Set idModulo
     *
     * @param integer $idModulo
     *
     * @return SalvataggioTemporanei
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
}
