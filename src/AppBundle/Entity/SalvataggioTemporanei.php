<?php

namespace AppBundle\Entity;

/**
 * SalvataggioTemporanei
 */
class SalvataggioTemporanei
{
    /**
     * @var boolean
     */
    private $tipomodulo = '0';

    /**
     * @var string
     */
    private $url = '';

    /**
     * @var string
     */
    private $contenuto;

    /**
     * @var string
     */
    private $idCliente;

    /**
     * @var integer
     */
    private $idPromotore;

    /**
     * @var integer
     */
    private $idViaggio;

    /**
     * @var integer
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
