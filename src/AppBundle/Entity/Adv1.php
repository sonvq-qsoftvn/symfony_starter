<?php

namespace AppBundle\Entity;

/**
 * Adv1
 */
class Adv1
{
    /**
     * @var string
     */
    private $iduser = '';

    /**
     * @var string
     */
    private $language = '';

    /**
     * @var integer
     */
    private $click = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return Adv1
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return string
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Adv1
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set click
     *
     * @param integer $click
     *
     * @return Adv1
     */
    public function setClick($click)
    {
        $this->click = $click;

        return $this;
    }

    /**
     * Get click
     *
     * @return integer
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
