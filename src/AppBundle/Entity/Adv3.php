<?php

namespace AppBundle\Entity;

/**
 * Adv3
 */
class Adv3
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
    private $tmpnumclick = '0';

    /**
     * @var integer
     */
    private $numclick = '0';

    /**
     * @var integer
     */
    private $maxdayclick = '0';

    /**
     * @var integer
     */
    private $maxclick = '0';

    /**
     * @var string
     */
    private $typepromo = '';

    /**
     * @var string
     */
    private $statuspromo = '0';

    /**
     * @var integer
     */
    private $dataactive = '0';

    /**
     * @var integer
     */
    private $dayactive = '0';

    /**
     * @var integer
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
