<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagDettagli
 *
 * @ORM\Table(name="pag_dettagli", indexes={@ORM\Index(name="campo", columns={"campo"}), @ORM\Index(name="valore", columns={"valore"}), @ORM\Index(name="chiave", columns={"chiave"})})
 * @ORM\Entity
 */
class PagDettagli
{
    /**
     * @var string
     *
     * @ORM\Column(name="chiave", type="string", length=255, nullable=false)
     */
    private $chiave = '';

    /**
     * @var string
     *
     * @ORM\Column(name="campo", type="string", length=255, nullable=false)
     */
    private $campo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="valore", type="string", length=255, nullable=false)
     */
    private $valore = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set chiave
     *
     * @param string $chiave
     *
     * @return PagDettagli
     */
    public function setChiave($chiave)
    {
        $this->chiave = $chiave;

        return $this;
    }

    /**
     * Get chiave
     *
     * @return string
     */
    public function getChiave()
    {
        return $this->chiave;
    }

    /**
     * Set campo
     *
     * @param string $campo
     *
     * @return PagDettagli
     */
    public function setCampo($campo)
    {
        $this->campo = $campo;

        return $this;
    }

    /**
     * Get campo
     *
     * @return string
     */
    public function getCampo()
    {
        return $this->campo;
    }

    /**
     * Set valore
     *
     * @param string $valore
     *
     * @return PagDettagli
     */
    public function setValore($valore)
    {
        $this->valore = $valore;

        return $this;
    }

    /**
     * Get valore
     *
     * @return string
     */
    public function getValore()
    {
        return $this->valore;
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
