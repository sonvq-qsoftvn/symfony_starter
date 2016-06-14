<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagamentiDettagliRinnovi
 *
 * @ORM\Table(name="pagamenti_dettagli_rinnovi")
 * @ORM\Entity
 */
class PagamentiDettagliRinnovi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromotore", type="integer", nullable=false)
     */
    private $idpromotore = '0';

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
     * Set idpromotore
     *
     * @param integer $idpromotore
     *
     * @return PagamentiDettagliRinnovi
     */
    public function setIdpromotore($idpromotore)
    {
        $this->idpromotore = $idpromotore;

        return $this;
    }

    /**
     * Get idpromotore
     *
     * @return integer
     */
    public function getIdpromotore()
    {
        return $this->idpromotore;
    }

    /**
     * Set idrif
     *
     * @param string $idrif
     *
     * @return PagamentiDettagliRinnovi
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
