<?php

namespace AppBundle\Entity;

/**
 * BannerVetrina2
 */
class BannerVetrina2
{
    /**
     * @var string
     */
    private $etichetta = '';

    /**
     * @var string
     */
    private $nomeportale = '';

    /**
     * @var string
     */
    private $urlportale = '';

    /**
     * @var \DateTime
     */
    private $dataInizio;

    /**
     * @var \DateTime
     */
    private $dataFine;

    /**
     * @var boolean
     */
    private $offerteLocalita = '1';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set etichetta
     *
     * @param string $etichetta
     *
     * @return BannerVetrina2
     */
    public function setEtichetta($etichetta)
    {
        $this->etichetta = $etichetta;

        return $this;
    }

    /**
     * Get etichetta
     *
     * @return string
     */
    public function getEtichetta()
    {
        return $this->etichetta;
    }

    /**
     * Set nomeportale
     *
     * @param string $nomeportale
     *
     * @return BannerVetrina2
     */
    public function setNomeportale($nomeportale)
    {
        $this->nomeportale = $nomeportale;

        return $this;
    }

    /**
     * Get nomeportale
     *
     * @return string
     */
    public function getNomeportale()
    {
        return $this->nomeportale;
    }

    /**
     * Set urlportale
     *
     * @param string $urlportale
     *
     * @return BannerVetrina2
     */
    public function setUrlportale($urlportale)
    {
        $this->urlportale = $urlportale;

        return $this;
    }

    /**
     * Get urlportale
     *
     * @return string
     */
    public function getUrlportale()
    {
        return $this->urlportale;
    }

    /**
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     *
     * @return BannerVetrina2
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
     * @return BannerVetrina2
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
     * Set offerteLocalita
     *
     * @param boolean $offerteLocalita
     *
     * @return BannerVetrina2
     */
    public function setOfferteLocalita($offerteLocalita)
    {
        $this->offerteLocalita = $offerteLocalita;

        return $this;
    }

    /**
     * Get offerteLocalita
     *
     * @return boolean
     */
    public function getOfferteLocalita()
    {
        return $this->offerteLocalita;
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
