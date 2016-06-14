<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuloPreventivoModelli
 *
 * @ORM\Table(name="modulo_preventivo_modelli", indexes={@ORM\Index(name="id_promotore", columns={"id_promotore"}), @ORM\Index(name="descrizione", columns={"descrizione"})})
 * @ORM\Entity
 */
class ModuloPreventivoModelli
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
     * @ORM\Column(name="intestazione", type="text", length=65535, nullable=false)
     */
    private $intestazione;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", length=65535, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="comprende", type="text", length=65535, nullable=false)
     */
    private $comprende;

    /**
     * @var string
     *
     * @ORM\Column(name="non_comprende", type="text", length=65535, nullable=false)
     */
    private $nonComprende;

    /**
     * @var string
     *
     * @ORM\Column(name="operativo_voli", type="text", length=65535, nullable=false)
     */
    private $operativoVoli;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusioni", type="text", length=65535, nullable=false)
     */
    private $conclusioni;

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
