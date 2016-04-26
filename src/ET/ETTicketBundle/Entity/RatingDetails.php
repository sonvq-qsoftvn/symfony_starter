<?php

namespace ET\ETTicketBundle\Entity;

/**
 * RatingDetails
 */
class RatingDetails
{
    /**
     * @var integer
     */
    private $ratingUserId = '0';

    /**
     * @var integer
     */
    private $ratingRequestId = '0';

    /**
     * @var string
     */
    private $ratingRequestStatus = '';

    /**
     * @var \DateTime
     */
    private $ratingDate = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $ratingId;


    /**
     * Set ratingUserId
     *
     * @param integer $ratingUserId
     *
     * @return RatingDetails
     */
    public function setRatingUserId($ratingUserId)
    {
        $this->ratingUserId = $ratingUserId;

        return $this;
    }

    /**
     * Get ratingUserId
     *
     * @return integer
     */
    public function getRatingUserId()
    {
        return $this->ratingUserId;
    }

    /**
     * Set ratingRequestId
     *
     * @param integer $ratingRequestId
     *
     * @return RatingDetails
     */
    public function setRatingRequestId($ratingRequestId)
    {
        $this->ratingRequestId = $ratingRequestId;

        return $this;
    }

    /**
     * Get ratingRequestId
     *
     * @return integer
     */
    public function getRatingRequestId()
    {
        return $this->ratingRequestId;
    }

    /**
     * Set ratingRequestStatus
     *
     * @param string $ratingRequestStatus
     *
     * @return RatingDetails
     */
    public function setRatingRequestStatus($ratingRequestStatus)
    {
        $this->ratingRequestStatus = $ratingRequestStatus;

        return $this;
    }

    /**
     * Get ratingRequestStatus
     *
     * @return string
     */
    public function getRatingRequestStatus()
    {
        return $this->ratingRequestStatus;
    }

    /**
     * Set ratingDate
     *
     * @param \DateTime $ratingDate
     *
     * @return RatingDetails
     */
    public function setRatingDate($ratingDate)
    {
        $this->ratingDate = $ratingDate;

        return $this;
    }

    /**
     * Get ratingDate
     *
     * @return \DateTime
     */
    public function getRatingDate()
    {
        return $this->ratingDate;
    }

    /**
     * Get ratingId
     *
     * @return integer
     */
    public function getRatingId()
    {
        return $this->ratingId;
    }
}

