<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adv3
 *
 * @ORM\Table(name="adv3", indexes={@ORM\Index(name="click", columns={"click"}), @ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Adv3
{
    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=10, nullable=false)
     */
    private $iduser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=1, nullable=false)
     */
    private $language = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="click", type="integer", nullable=false)
     */
    private $click = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tmpnumclick", type="smallint", nullable=false)
     */
    private $tmpnumclick = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="numclick", type="integer", nullable=false)
     */
    private $numclick = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxdayclick", type="integer", nullable=false)
     */
    private $maxdayclick = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxclick", type="integer", nullable=false)
     */
    private $maxclick = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="typepromo", type="string", length=10, nullable=false)
     */
    private $typepromo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="statuspromo", type="string", length=1, nullable=false)
     */
    private $statuspromo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dataactive", type="integer", nullable=false)
     */
    private $dataactive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dayactive", type="integer", nullable=false)
     */
    private $dayactive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return Adv3
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
     * @return Adv3
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
     * @return Adv3
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
     * Set tmpnumclick
     *
     * @param integer $tmpnumclick
     *
     * @return Adv3
     */
    public function setTmpnumclick($tmpnumclick)
    {
        $this->tmpnumclick = $tmpnumclick;

        return $this;
    }

    /**
     * Get tmpnumclick
     *
     * @return integer
     */
    public function getTmpnumclick()
    {
        return $this->tmpnumclick;
    }

    /**
     * Set numclick
     *
     * @param integer $numclick
     *
     * @return Adv3
     */
    public function setNumclick($numclick)
    {
        $this->numclick = $numclick;

        return $this;
    }

    /**
     * Get numclick
     *
     * @return integer
     */
    public function getNumclick()
    {
        return $this->numclick;
    }

    /**
     * Set maxdayclick
     *
     * @param integer $maxdayclick
     *
     * @return Adv3
     */
    public function setMaxdayclick($maxdayclick)
    {
        $this->maxdayclick = $maxdayclick;

        return $this;
    }

    /**
     * Get maxdayclick
     *
     * @return integer
     */
    public function getMaxdayclick()
    {
        return $this->maxdayclick;
    }

    /**
     * Set maxclick
     *
     * @param integer $maxclick
     *
     * @return Adv3
     */
    public function setMaxclick($maxclick)
    {
        $this->maxclick = $maxclick;

        return $this;
    }

    /**
     * Get maxclick
     *
     * @return integer
     */
    public function getMaxclick()
    {
        return $this->maxclick;
    }

    /**
     * Set typepromo
     *
     * @param string $typepromo
     *
     * @return Adv3
     */
    public function setTypepromo($typepromo)
    {
        $this->typepromo = $typepromo;

        return $this;
    }

    /**
     * Get typepromo
     *
     * @return string
     */
    public function getTypepromo()
    {
        return $this->typepromo;
    }

    /**
     * Set statuspromo
     *
     * @param string $statuspromo
     *
     * @return Adv3
     */
    public function setStatuspromo($statuspromo)
    {
        $this->statuspromo = $statuspromo;

        return $this;
    }

    /**
     * Get statuspromo
     *
     * @return string
     */
    public function getStatuspromo()
    {
        return $this->statuspromo;
    }

    /**
     * Set dataactive
     *
     * @param integer $dataactive
     *
     * @return Adv3
     */
    public function setDataactive($dataactive)
    {
        $this->dataactive = $dataactive;

        return $this;
    }

    /**
     * Get dataactive
     *
     * @return integer
     */
    public function getDataactive()
    {
        return $this->dataactive;
    }

    /**
     * Set dayactive
     *
     * @param integer $dayactive
     *
     * @return Adv3
     */
    public function setDayactive($dayactive)
    {
        $this->dayactive = $dayactive;

        return $this;
    }

    /**
     * Get dayactive
     *
     * @return integer
     */
    public function getDayactive()
    {
        return $this->dayactive;
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
