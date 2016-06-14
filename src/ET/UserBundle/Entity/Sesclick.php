<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sesclick
 *
 * @ORM\Table(name="sesclick", indexes={@ORM\Index(name="adv", columns={"adv"})})
 * @ORM\Entity
 */
class Sesclick
{
    /**
     * @var string
     *
     * @ORM\Column(name="adv", type="string", length=1, nullable=false)
     */
    private $adv = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=1, nullable=false)
     */
    private $language = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
