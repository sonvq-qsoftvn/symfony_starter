<?php

namespace AppBundle\Entity;

/**
 * ModuloPreventivoModelliNew
 */
class ModuloPreventivoModelliNew
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
    private $corpo;

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
    private $promorif;

    /**
     * @var string
     */
    private $lingua = 'it_IT';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idPromotore
     *
     * @param integer $idPromotore
     *
     * @return ModuloPreventivoModelliNew
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
     * @return ModuloPreventivoModelliNew
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
     * Set corpo
     *
     * @param string $corpo
     *
     * @return ModuloPreventivoModelliNew
     */
    public function setCorpo($corpo)
    {
        $this->corpo = $corpo;

        return $this;
    }

    /**
     * Get corpo
     *
     * @return string
     */
    public function getCorpo()
    {
        return $this->corpo;
    }

    /**
     * Set predefinito
     *
     * @param boolean $predefinito
     *
     * @return ModuloPreventivoModelliNew
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
     * @return ModuloPreventivoModelliNew
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
     * Set promorif
     *
     * @param integer $promorif
     *
     * @return ModuloPreventivoModelliNew
     */
    public function setPromorif($promorif)
    {
        $this->promorif = $promorif;

        return $this;
    }

    /**
     * Get promorif
     *
     * @return integer
     */
    public function getPromorif()
    {
        return $this->promorif;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return ModuloPreventivoModelliNew
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
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
