<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BannerProva
 */
class BannerProva
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $testoClick;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $titolo = '5487';

    /**
     * @var string
     */
    private $target;

    /**
     * @var string
     */
    private $alt;

    /**
     * @var \DateTime
     */
    private $dataInizio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dataFine;

    /**
     * @var string
     */
    private $tabella = 'banner';

    /**
     * @var string
     */
    private $codAgenti;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return BannerProva
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return BannerProva
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return BannerProva
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return BannerProva
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return BannerProva
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
     * Set testoClick
     *
     * @param string $testoClick
     *
     * @return BannerProva
     */
    public function setTestoClick($testoClick)
    {
        $this->testoClick = $testoClick;

        return $this;
    }

    /**
     * Get testoClick
     *
     * @return string
     */
    public function getTestoClick()
    {
        return $this->testoClick;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return BannerProva
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
     * Set titolo
     *
     * @param string $titolo
     *
     * @return BannerProva
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return BannerProva
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return BannerProva
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     *
     * @return BannerProva
     */
    public function setDataInizio($dataInizio)
    {
        $this->dataInizio = $dataInizio;

        return $this;
    }

    /**
     * Get dataInizio
     *
     * @return \DateTime
     */
    public function getDataInizio()
    {
        return $this->dataInizio;
    }

    /**
     * Set dataFine
     *
     * @param \DateTime $dataFine
     *
     * @return BannerProva
     */
    public function setDataFine($dataFine)
    {
        $this->dataFine = $dataFine;

        return $this;
    }

    /**
     * Get dataFine
     *
     * @return \DateTime
     */
    public function getDataFine()
    {
        return $this->dataFine;
    }

    /**
     * Set tabella
     *
     * @param string $tabella
     *
     * @return BannerProva
     */
    public function setTabella($tabella)
    {
        $this->tabella = $tabella;

        return $this;
    }

    /**
     * Get tabella
     *
     * @return string
     */
    public function getTabella()
    {
        return $this->tabella;
    }

    /**
     * Set codAgenti
     *
     * @param string $codAgenti
     *
     * @return BannerProva
     */
    public function setCodAgenti($codAgenti)
    {
        $this->codAgenti = $codAgenti;

        return $this;
    }

    /**
     * Get codAgenti
     *
     * @return string
     */
    public function getCodAgenti()
    {
        return $this->codAgenti;
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

