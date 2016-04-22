<?php

namespace AppBundle\Entity;

/**
 * TravelDescription
 */
class TravelDescription
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var string
     */
    private $coupleName;

    /**
     * @var string
     */
    private $finishMessage;

    /**
     * @var integer
     */
    private $travelId;

    /**
     * @var string
     */
    private $coupleEmail;

    /**
     * @var boolean
     */
    private $hidetot = '0';

    /**
     * @var string
     */
    private $photos;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return TravelDescription
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TravelDescription
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
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return TravelDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set coupleName
     *
     * @param string $coupleName
     *
     * @return TravelDescription
     */
    public function setCoupleName($coupleName)
    {
        $this->coupleName = $coupleName;

        return $this;
    }

    /**
     * Get coupleName
     *
     * @return string
     */
    public function getCoupleName()
    {
        return $this->coupleName;
    }

    /**
     * Set finishMessage
     *
     * @param string $finishMessage
     *
     * @return TravelDescription
     */
    public function setFinishMessage($finishMessage)
    {
        $this->finishMessage = $finishMessage;

        return $this;
    }

    /**
     * Get finishMessage
     *
     * @return string
     */
    public function getFinishMessage()
    {
        return $this->finishMessage;
    }

    /**
     * Set travelId
     *
     * @param integer $travelId
     *
     * @return TravelDescription
     */
    public function setTravelId($travelId)
    {
        $this->travelId = $travelId;

        return $this;
    }

    /**
     * Get travelId
     *
     * @return integer
     */
    public function getTravelId()
    {
        return $this->travelId;
    }

    /**
     * Set coupleEmail
     *
     * @param string $coupleEmail
     *
     * @return TravelDescription
     */
    public function setCoupleEmail($coupleEmail)
    {
        $this->coupleEmail = $coupleEmail;

        return $this;
    }

    /**
     * Get coupleEmail
     *
     * @return string
     */
    public function getCoupleEmail()
    {
        return $this->coupleEmail;
    }

    /**
     * Set hidetot
     *
     * @param boolean $hidetot
     *
     * @return TravelDescription
     */
    public function setHidetot($hidetot)
    {
        $this->hidetot = $hidetot;

        return $this;
    }

    /**
     * Get hidetot
     *
     * @return boolean
     */
    public function getHidetot()
    {
        return $this->hidetot;
    }

    /**
     * Set photos
     *
     * @param string $photos
     *
     * @return TravelDescription
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return string
     */
    public function getPhotos()
    {
        return $this->photos;
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
