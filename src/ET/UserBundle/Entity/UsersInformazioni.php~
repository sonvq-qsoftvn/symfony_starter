<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersInformazioni
 *
 * @ORM\Table(name="users_informazioni")
 * @ORM\Entity
 */
class UsersInformazioni
{
    /**
     * @var string
     *
     * @ORM\Column(name="motivazione", type="text", length=16777215, nullable=false)
     */
    private $motivazione;

    /**
     * @var string
     *
     * @ORM\Column(name="aspettative", type="text", length=16777215, nullable=false)
     */
    private $aspettative;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=16777215, nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
