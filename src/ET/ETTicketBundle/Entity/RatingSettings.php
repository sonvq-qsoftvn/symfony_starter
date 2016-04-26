<?php

namespace ET\ETTicketBundle\Entity;

/**
 * RatingSettings
 */
class RatingSettings
{
    /**
     * @var integer
     */
    private $workedMinRequiredRequests = '0';

    /**
     * @var boolean
     */
    private $workedMinRequiredRatio = '0';

    /**
     * @var integer
     */
    private $closedMinRequiredRequests = '0';

    /**
     * @var boolean
     */
    private $closedMinRequiredRatio = '0';

    /**
     * @var integer
     */
    private $minRatingRequired = '0';

    /**
     * @var integer
     */
    private $daysIncluded = '0';

    /**
     * @var boolean
     */
    private $reserved = '0';

    /**
     * @var string
     */
    private $agenzia;

    /**
     * @var \DateTime
     */
    private $deletedAt;

    /**
     * @var string
     */
    private $portaleFcd;


    /**
     * Set workedMinRequiredRequests
     *
     * @param integer $workedMinRequiredRequests
     *
     * @return RatingSettings
     */
    public function setWorkedMinRequiredRequests($workedMinRequiredRequests)
    {
        $this->workedMinRequiredRequests = $workedMinRequiredRequests;

        return $this;
    }

    /**
     * Get workedMinRequiredRequests
     *
     * @return integer
     */
    public function getWorkedMinRequiredRequests()
    {
        return $this->workedMinRequiredRequests;
    }

    /**
     * Set workedMinRequiredRatio
     *
     * @param boolean $workedMinRequiredRatio
     *
     * @return RatingSettings
     */
    public function setWorkedMinRequiredRatio($workedMinRequiredRatio)
    {
        $this->workedMinRequiredRatio = $workedMinRequiredRatio;

        return $this;
    }

    /**
     * Get workedMinRequiredRatio
     *
     * @return boolean
     */
    public function getWorkedMinRequiredRatio()
    {
        return $this->workedMinRequiredRatio;
    }

    /**
     * Set closedMinRequiredRequests
     *
     * @param integer $closedMinRequiredRequests
     *
     * @return RatingSettings
     */
    public function setClosedMinRequiredRequests($closedMinRequiredRequests)
    {
        $this->closedMinRequiredRequests = $closedMinRequiredRequests;

        return $this;
    }

    /**
     * Get closedMinRequiredRequests
     *
     * @return integer
     */
    public function getClosedMinRequiredRequests()
    {
        return $this->closedMinRequiredRequests;
    }

    /**
     * Set closedMinRequiredRatio
     *
     * @param boolean $closedMinRequiredRatio
     *
     * @return RatingSettings
     */
    public function setClosedMinRequiredRatio($closedMinRequiredRatio)
    {
        $this->closedMinRequiredRatio = $closedMinRequiredRatio;

        return $this;
    }

    /**
     * Get closedMinRequiredRatio
     *
     * @return boolean
     */
    public function getClosedMinRequiredRatio()
    {
        return $this->closedMinRequiredRatio;
    }

    /**
     * Set minRatingRequired
     *
     * @param integer $minRatingRequired
     *
     * @return RatingSettings
     */
    public function setMinRatingRequired($minRatingRequired)
    {
        $this->minRatingRequired = $minRatingRequired;

        return $this;
    }

    /**
     * Get minRatingRequired
     *
     * @return integer
     */
    public function getMinRatingRequired()
    {
        return $this->minRatingRequired;
    }

    /**
     * Set daysIncluded
     *
     * @param integer $daysIncluded
     *
     * @return RatingSettings
     */
    public function setDaysIncluded($daysIncluded)
    {
        $this->daysIncluded = $daysIncluded;

        return $this;
    }

    /**
     * Get daysIncluded
     *
     * @return integer
     */
    public function getDaysIncluded()
    {
        return $this->daysIncluded;
    }

    /**
     * Set reserved
     *
     * @param boolean $reserved
     *
     * @return RatingSettings
     */
    public function setReserved($reserved)
    {
        $this->reserved = $reserved;

        return $this;
    }

    /**
     * Get reserved
     *
     * @return boolean
     */
    public function getReserved()
    {
        return $this->reserved;
    }

    /**
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return RatingSettings
     */
    public function setAgenzia($agenzia)
    {
        $this->agenzia = $agenzia;

        return $this;
    }

    /**
     * Get agenzia
     *
     * @return string
     */
    public function getAgenzia()
    {
        return $this->agenzia;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return RatingSettings
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Get portaleFcd
     *
     * @return string
     */
    public function getPortaleFcd()
    {
        return $this->portaleFcd;
    }
}

