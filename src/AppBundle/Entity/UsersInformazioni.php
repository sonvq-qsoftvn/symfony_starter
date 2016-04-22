<?php

namespace AppBundle\Entity;

/**
 * UsersInformazioni
 */
class UsersInformazioni
{
    /**
     * @var string
     */
    private $motivazione;

    /**
     * @var string
     */
    private $aspettative;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $iduser;


    /**
     * Set motivazione
     *
     * @param string $motivazione
     *
     * @return UsersInformazioni
     */
    public function setMotivazione($motivazione)
    {
        $this->motivazione = $motivazione;

        return $this;
    }

    /**
     * Get motivazione
     *
     * @return string
     */
    public function getMotivazione()
    {
        return $this->motivazione;
    }

    /**
     * Set aspettative
     *
     * @param string $aspettative
     *
     * @return UsersInformazioni
     */
    public function setAspettative($aspettative)
    {
        $this->aspettative = $aspettative;

        return $this;
    }

    /**
     * Get aspettative
     *
     * @return string
     */
    public function getAspettative()
    {
        return $this->aspettative;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return UsersInformazioni
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
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
}
