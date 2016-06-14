<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SicRisposte
 *
 * @ORM\Table(name="sic_risposte")
 * @ORM\Entity
 */
class SicRisposte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_users", type="smallint", nullable=false)
     */
    private $idUsers = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idDomanda", type="smallint", nullable=false)
     */
    private $iddomanda = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="risposta", type="text", length=65535, nullable=false)
     */
    private $risposta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRisposta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrisposta;



    /**
     * Set idUsers
     *
     * @param integer $idUsers
     *
     * @return SicRisposte
     */
    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    /**
     * Get idUsers
     *
     * @return integer
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set iddomanda
     *
     * @param integer $iddomanda
     *
     * @return SicRisposte
     */
    public function setIddomanda($iddomanda)
    {
        $this->iddomanda = $iddomanda;

        return $this;
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

    /**
     * Set risposta
     *
     * @param string $risposta
     *
     * @return SicRisposte
     */
    public function setRisposta($risposta)
    {
        $this->risposta = $risposta;

        return $this;
    }

    /**
     * Get risposta
     *
     * @return string
     */
    public function getRisposta()
    {
        return $this->risposta;
    }

    /**
     * Get idrisposta
     *
     * @return integer
     */
    public function getIdrisposta()
    {
        return $this->idrisposta;
    }
}
