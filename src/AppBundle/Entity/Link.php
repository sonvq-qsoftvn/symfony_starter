<?php

namespace AppBundle\Entity;

/**
 * Link
 */
class Link
{
    /**
     * @var string
     */
    private $iduser = '';

    /**
     * @var string
     */
    private $textlink = '';

    /**
     * @var string
     */
    private $urllink = '';

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $date = '0000-00-00';

    /**
     * @var string
     */
    private $status = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return Link
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
     * Set textlink
     *
     * @param string $textlink
     *
     * @return Link
     */
    public function setTextlink($textlink)
    {
        $this->textlink = $textlink;

        return $this;
    }

    /**
     * Get textlink
     *
     * @return string
     */
    public function getTextlink()
    {
        return $this->textlink;
    }

    /**
     * Set urllink
     *
     * @param string $urllink
     *
     * @return Link
     */
    public function setUrllink($urllink)
    {
        $this->urllink = $urllink;

        return $this;
    }

    /**
     * Get urllink
     *
     * @return string
     */
    public function getUrllink()
    {
        return $this->urllink;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Link
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Link
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Link
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
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
