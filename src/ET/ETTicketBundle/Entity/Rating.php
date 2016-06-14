<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Rating
 */
class Rating
{
    /**
     * @var float
     */
    private $ratingR1 = '0.00000';

    /**
     * @var float
     */
    private $ratingR2 = '0.00000';

    /**
     * @var float
     */
    private $ratingR3 = '0.00000';

    /**
     * @var float
     */
    private $ratingR = '0.00000';

    /**
     * @var \DateTime
     */
    private $ratingDate = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $nAssignedRequests;

    /**
     * @var integer
     */
    private $nAcceptedRequests;

    /**
     * @var integer
     */
    private $nWorkedRequests;

    /**
     * @var integer
     */
    private $nClosedRequests;

    /**
     * @var boolean
     */
    private $isBestrate = '0';

    /**
     * @var integer
     */
    private $ratingUserId;

    /**
     * @var string
     */
    private $lingua;


    /**
     * Set ratingR1
     *
     * @param float $ratingR1
     *
     * @return Rating
     */
    public function setRatingR1($ratingR1)
    {
        $this->ratingR1 = $ratingR1;

        return $this;
    }

    /**
     * Get ratingR1
     *
     * @return float
     */
    public function getRatingR1()
    {
        return $this->ratingR1;
    }

    /**
     * Set ratingR2
     *
     * @param float $ratingR2
     *
     * @return Rating
     */
    public function setRatingR2($ratingR2)
    {
        $this->ratingR2 = $ratingR2;

        return $this;
    }

    /**
     * Get ratingR2
     *
     * @return float
     */
    public function getRatingR2()
    {
        return $this->ratingR2;
    }

    /**
     * Set ratingR3
     *
     * @param float $ratingR3
     *
     * @return Rating
     */
    public function setRatingR3($ratingR3)
    {
        $this->ratingR3 = $ratingR3;

        return $this;
    }

    /**
     * Get ratingR3
     *
     * @return float
     */
    public function getRatingR3()
    {
        return $this->ratingR3;
    }

    /**
     * Set ratingR
     *
     * @param float $ratingR
     *
     * @return Rating
     */
    public function setRatingR($ratingR)
    {
        $this->ratingR = $ratingR;

        return $this;
    }

    /**
     * Get ratingR
     *
     * @return float
     */
    public function getRatingR()
    {
        return $this->ratingR;
    }

    /**
     * Set ratingDate
     *
     * @param \DateTime $ratingDate
     *
     * @return Rating
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
     * Set nAssignedRequests
     *
     * @param integer $nAssignedRequests
     *
     * @return Rating
     */
    public function setNAssignedRequests($nAssignedRequests)
    {
        $this->nAssignedRequests = $nAssignedRequests;

        return $this;
    }

    /**
     * Get nAssignedRequests
     *
     * @return integer
     */
    public function getNAssignedRequests()
    {
        return $this->nAssignedRequests;
    }

    /**
     * Set nAcceptedRequests
     *
     * @param integer $nAcceptedRequests
     *
     * @return Rating
     */
    public function setNAcceptedRequests($nAcceptedRequests)
    {
        $this->nAcceptedRequests = $nAcceptedRequests;

        return $this;
    }

    /**
     * Get nAcceptedRequests
     *
     * @return integer
     */
    public function getNAcceptedRequests()
    {
        return $this->nAcceptedRequests;
    }

    /**
     * Set nWorkedRequests
     *
     * @param integer $nWorkedRequests
     *
     * @return Rating
     */
    public function setNWorkedRequests($nWorkedRequests)
    {
        $this->nWorkedRequests = $nWorkedRequests;

        return $this;
    }

    /**
     * Get nWorkedRequests
     *
     * @return integer
     */
    public function getNWorkedRequests()
    {
        return $this->nWorkedRequests;
    }

    /**
     * Set nClosedRequests
     *
     * @param integer $nClosedRequests
     *
     * @return Rating
     */
    public function setNClosedRequests($nClosedRequests)
    {
        $this->nClosedRequests = $nClosedRequests;

        return $this;
    }

    /**
     * Get nClosedRequests
     *
     * @return integer
     */
    public function getNClosedRequests()
    {
        return $this->nClosedRequests;
    }

    /**
     * Set isBestrate
     *
     * @param boolean $isBestrate
     *
     * @return Rating
     */
    public function setIsBestrate($isBestrate)
    {
        $this->isBestrate = $isBestrate;

        return $this;
    }

    /**
     * Get isBestrate
     *
     * @return boolean
     */
    public function getIsBestrate()
    {
        return $this->isBestrate;
    }

    /**
     * Set ratingUserId
     *
     * @param integer $ratingUserId
     *
     * @return Rating
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
     * Set lingua
     *
     * @param string $lingua
     *
     * @return Rating
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }
}
