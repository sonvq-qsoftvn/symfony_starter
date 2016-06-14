<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodiciavesRelFornitori
 *
 * @ORM\Table(name="codiciaves_rel_fornitori", indexes={@ORM\Index(name="codiceAves", columns={"codiceAves"})})
 * @ORM\Entity
 */
class CodiciavesRelFornitori
{
    /**
     * @var string
     *
     * @ORM\Column(name="approvanti", type="text", length=65535, nullable=false)
     */
    private $approvanti;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approvato", type="boolean", nullable=false)
     */
    private $approvato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idFornitore", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idfornitore;

    /**
     * @var string
     *
     * @ORM\Column(name="codiceAves", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codiceaves;



    /**
     * Set approvanti
     *
     * @param string $approvanti
     *
     * @return CodiciavesRelFornitori
     */
    public function setApprovanti($approvanti)
    {
        $this->approvanti = $approvanti;

        return $this;
    }

    /**
     * Get approvanti
     *
     * @return string
     */
    public function getApprovanti()
    {
        return $this->approvanti;
    }

    /**
     * Set approvato
     *
     * @param boolean $approvato
     *
     * @return CodiciavesRelFornitori
     */
    public function setApprovato($approvato)
    {
        $this->approvato = $approvato;

        return $this;
    }

    /**
     * Get approvato
     *
     * @return boolean
     */
    public function getApprovato()
    {
        return $this->approvato;
    }

    /**
     * Set idfornitore
     *
     * @param integer $idfornitore
     *
     * @return CodiciavesRelFornitori
     */
    public function setIdfornitore($idfornitore)
    {
        $this->idfornitore = $idfornitore;

        return $this;
    }

    /**
     * Get idfornitore
     *
     * @return integer
     */
    public function getIdfornitore()
    {
        return $this->idfornitore;
    }

    /**
     * Set codiceaves
     *
     * @param string $codiceaves
     *
     * @return CodiciavesRelFornitori
     */
    public function setCodiceaves($codiceaves)
    {
        $this->codiceaves = $codiceaves;

        return $this;
    }

    /**
     * Get codiceaves
     *
     * @return string
     */
    public function getCodiceaves()
    {
        return $this->codiceaves;
    }
}
