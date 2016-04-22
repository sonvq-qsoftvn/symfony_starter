<?php

namespace AppBundle\Entity;

/**
 * TransUnit
 */
class TransUnit
{
    /**
     * @var integer
     */
    private $catId = '1';

    /**
     * @var string
     */
    private $id = '';

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $target;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var integer
     */
    private $dateAdded = '0';

    /**
     * @var integer
     */
    private $dateModified = '0';

    /**
     * @var string
     */
    private $author = '';

    /**
     * @var boolean
     */
    private $translated = '0';

    /**
     * @var integer
     */
    private $msgId;


    /**
     * Set catId
     *
     * @param integer $catId
     *
     * @return TransUnit
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
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

    /**
     * Set id
     *
     * @param string $id
     *
     * @return TransUnit
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return TransUnit
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return TransUnit
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return TransUnit
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set dateAdded
     *
     * @param integer $dateAdded
     *
     * @return TransUnit
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return integer
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified
     *
     * @param integer $dateModified
     *
     * @return TransUnit
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
     * @return TransUnit
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
     * Set translated
     *
     * @param boolean $translated
     *
     * @return TransUnit
     */
    public function setTranslated($translated)
    {
        $this->translated = $translated;

        return $this;
    }

    /**
     * Get translated
     *
     * @return boolean
     */
    public function getTranslated()
    {
        return $this->translated;
    }

    /**
     * Get msgId
     *
     * @return integer
     */
    public function getMsgId()
    {
        return $this->msgId;
    }
}
