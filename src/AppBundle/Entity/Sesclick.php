<?php

namespace AppBundle\Entity;

/**
 * Sesclick
 */
class Sesclick
{
    /**
     * @var string
     */
    private $adv = '';

    /**
     * @var string
     */
    private $language = '';

    /**
     * @var \DateTime
     */
    private $data = '0000-00-00';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set adv
     *
     * @param string $adv
     *
     * @return Sesclick
     */
    public function setAdv($adv)
    {
        $this->adv = $adv;

        return $this;
    }

    /**
     * Get adv
     *
     * @return string
     */
    public function getAdv()
    {
        return $this->adv;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Sesclick
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Sesclick
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
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
