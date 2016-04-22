<?php

namespace AppBundle\Entity;

/**
 * SicRisposte
 */
class SicRisposte
{
    /**
     * @var integer
     */
    private $idUsers = '0';

    /**
     * @var integer
     */
    private $iddomanda = '0';

    /**
     * @var string
     */
    private $risposta;

    /**
     * @var integer
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
