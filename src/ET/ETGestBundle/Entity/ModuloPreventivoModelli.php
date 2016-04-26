<?php

namespace ET\ETGestBundle\Entity;

/**
 * ModuloPreventivoModelli
 */
class ModuloPreventivoModelli
{
    /**
     * @var integer
     */
    private $idPromotore = '0';

    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var string
     */
    private $intestazione;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $comprende;

    /**
     * @var string
     */
    private $nonComprende;

    /**
     * @var string
     */
    private $operativoVoli;

    /**
     * @var string
     */
    private $conclusioni;

    /**
     * @var boolean
     */
    private $predefinito = '0';

    /**
     * @var boolean
     */
    private $pubblico = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idPromotore
     *
     * @param integer $idPromotore
     *
     * @return ModuloPreventivoModelli
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return ModuloPreventivoModelli
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
     * Set intestazione
     *
     * @param string $intestazione
     *
     * @return ModuloPreventivoModelli
     */
    public function setIntestazione($intestazione)
    {
        $this->intestazione = $intestazione;

        return $this;
    }

    /**
     * Get intestazione
     *
     * @return string
     */
    public function getIntestazione()
    {
        return $this->intestazione;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return ModuloPreventivoModelli
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set comprende
     *
     * @param string $comprende
     *
     * @return ModuloPreventivoModelli
     */
    public function setComprende($comprende)
    {
        $this->comprende = $comprende;

        return $this;
    }

    /**
     * Get comprende
     *
     * @return string
     */
    public function getComprende()
    {
        return $this->comprende;
    }

    /**
     * Set nonComprende
     *
     * @param string $nonComprende
     *
     * @return ModuloPreventivoModelli
     */
    public function setNonComprende($nonComprende)
    {
        $this->nonComprende = $nonComprende;

        return $this;
    }

    /**
     * Get nonComprende
     *
     * @return string
     */
    public function getNonComprende()
    {
        return $this->nonComprende;
    }

    /**
     * Set operativoVoli
     *
     * @param string $operativoVoli
     *
     * @return ModuloPreventivoModelli
     */
    public function setOperativoVoli($operativoVoli)
    {
        $this->operativoVoli = $operativoVoli;

        return $this;
    }

    /**
     * Get operativoVoli
     *
     * @return string
     */
    public function getOperativoVoli()
    {
        return $this->operativoVoli;
    }

    /**
     * Set conclusioni
     *
     * @param string $conclusioni
     *
     * @return ModuloPreventivoModelli
     */
    public function setConclusioni($conclusioni)
    {
        $this->conclusioni = $conclusioni;

        return $this;
    }

    /**
     * Get conclusioni
     *
     * @return string
     */
    public function getConclusioni()
    {
        return $this->conclusioni;
    }

    /**
     * Set predefinito
     *
     * @param boolean $predefinito
     *
     * @return ModuloPreventivoModelli
     */
    public function setPredefinito($predefinito)
    {
        $this->predefinito = $predefinito;

        return $this;
    }

    /**
     * Get predefinito
     *
     * @return boolean
     */
    public function getPredefinito()
    {
        return $this->predefinito;
    }

    /**
     * Set pubblico
     *
     * @param boolean $pubblico
     *
     * @return ModuloPreventivoModelli
     */
    public function setPubblico($pubblico)
    {
        $this->pubblico = $pubblico;

        return $this;
    }

    /**
     * Get pubblico
     *
     * @return boolean
     */
    public function getPubblico()
    {
        return $this->pubblico;
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

