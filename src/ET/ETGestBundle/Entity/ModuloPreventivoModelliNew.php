<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuloPreventivoModelliNew
 *
 * @ORM\Table(name="modulo_preventivo_modelli_new", indexes={@ORM\Index(name="id_promotore", columns={"id_promotore"}), @ORM\Index(name="descrizione", columns={"descrizione"})})
 * @ORM\Entity
 */
class ModuloPreventivoModelliNew
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_promotore", type="integer", nullable=false)
     */
    private $idPromotore = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=50, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var string
     *
     * @ORM\Column(name="corpo", type="text", length=65535, nullable=false)
     */
    private $corpo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="predefinito", type="boolean", nullable=false)
     */
    private $predefinito = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pubblico", type="boolean", nullable=false)
     */
    private $pubblico = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="promoRif", type="integer", nullable=false)
     */
    private $promorif;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua", type="string", length=5, nullable=false)
     */
    private $lingua = 'it_IT';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
