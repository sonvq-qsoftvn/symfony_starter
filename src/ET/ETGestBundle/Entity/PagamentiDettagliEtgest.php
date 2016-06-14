<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagamentiDettagliEtgest
 *
 * @ORM\Table(name="pagamenti_dettagli_etgest", indexes={@ORM\Index(name="idPag", columns={"idPag"})})
 * @ORM\Entity
 */
class PagamentiDettagliEtgest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPag", type="integer", nullable=false)
     */
    private $idpag = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idRif", type="string", length=255, nullable=false)
     */
    private $idrif = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="idDettagli", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddettagli;



    /**
     * Set idpag
     *
     * @param integer $idpag
     *
     * @return PagamentiDettagliEtgest
     */
    public function setIdpag($idpag)
    {
        $this->idpag = $idpag;

        return $this;
    }

    /**
     * Get idpag
     *
     * @return integer
     */
    public function getIdpag()
    {
        return $this->idpag;
    }

    /**
     * Set idrif
     *
     * @param string $idrif
     *
     * @return PagamentiDettagliEtgest
     */
    public function setIdrif($idrif)
    {
        $this->idrif = $idrif;

        return $this;
    }

    /**
     * Get idrif
     *
     * @return string
     */
    public function getIdrif()
    {
        return $this->idrif;
    }

    /**
     * Get iddettagli
     *
     * @return integer
     */
    public function getIddettagli()
    {
        return $this->iddettagli;
    }
}
