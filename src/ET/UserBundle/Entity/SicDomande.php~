<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SicDomande
 *
 * @ORM\Table(name="sic_domande")
 * @ORM\Entity
 */
class SicDomande
{
    /**
     * @var string
     *
     * @ORM\Column(name="domanda", type="text", length=65535, nullable=false)
     */
    private $domanda;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDomanda", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddomanda;



    /**
     * Set domanda
     *
     * @param string $domanda
     *
     * @return SicDomande
     */
    public function setDomanda($domanda)
    {
        $this->domanda = $domanda;

        return $this;
    }

    /**
     * Get domanda
     *
     * @return string
     */
    public function getDomanda()
    {
        return $this->domanda;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return SicDomande
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Get iddomanda
     *
     * @return integer
     */
    public function getIddomanda()
    {
        return $this->iddomanda;
    }
}
