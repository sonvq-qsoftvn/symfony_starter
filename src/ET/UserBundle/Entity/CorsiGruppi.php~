<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsiGruppi
 *
 * @ORM\Table(name="corsi_gruppi")
 * @ORM\Entity
 */
class CorsiGruppi
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=30, nullable=false)
     */
    private $descrizione = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="evidenza", type="boolean", nullable=false)
     */
    private $evidenza = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="idGruppo", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgruppo;



    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return CorsiGruppi
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
     * Set evidenza
     *
     * @param boolean $evidenza
     *
     * @return CorsiGruppi
     */
    public function setEvidenza($evidenza)
    {
        $this->evidenza = $evidenza;

        return $this;
    }

    /**
     * Get evidenza
     *
     * @return boolean
     */
    public function getEvidenza()
    {
        return $this->evidenza;
    }

    /**
     * Get idgruppo
     *
     * @return boolean
     */
    public function getIdgruppo()
    {
        return $this->idgruppo;
    }
}
