<?php

namespace AppBundle\Entity;

/**
 * Catalogue
 */
class Catalogue
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $sourceLang = '';

    /**
     * @var string
     */
    private $targetLang = '';

    /**
     * @var integer
     */
    private $dateCreated = '0';

    /**
     * @var integer
     */
    private $dateModified = '0';

    /**
     * @var string
     */
    private $author = '';

    /**
     * @var integer
     */
    private $catId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Catalogue
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sourceLang
     *
     * @param string $sourceLang
     *
     * @return Catalogue
     */
    public function setSourceLang($sourceLang)
    {
        $this->sourceLang = $sourceLang;

        return $this;
    }

    /**
     * Get sourceLang
     *
     * @return string
     */
    public function getSourceLang()
    {
        return $this->sourceLang;
    }

    /**
     * Set targetLang
     *
     * @param string $targetLang
     *
     * @return Catalogue
     */
    public function setTargetLang($targetLang)
    {
        $this->targetLang = $targetLang;

        return $this;
    }

    /**
     * Get targetLang
     *
     * @return string
     */
    public function getTargetLang()
    {
        return $this->targetLang;
    }

    /**
     * Set dateCreated
     *
     * @param integer $dateCreated
     *
     * @return Catalogue
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return integer
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param integer $dateModified
     *
     * @return Catalogue
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return integer
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Catalogue
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get catId
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->catId;
    }
}
