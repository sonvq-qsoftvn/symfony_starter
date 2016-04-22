<?php

namespace AppBundle\Entity;

/**
 * Users1Lingue
 */
class Users1Lingue
{
    /**
     * @var integer
     */
    private $idUser;

    /**
     * @var string
     */
    private $lingua;


    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Users1Lingue
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return Users1Lingue
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }
}
