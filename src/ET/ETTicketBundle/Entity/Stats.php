<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Stats
 */
class Stats
{
    /**
     * @var integer
     */
    private $statUserId = '0';

    /**
     * @var integer
     */
    private $statRequestId = '0';

    /**
     * @var \DateTime
     */
    private $statDate;

    /**
     * @var \DateTime
     */
    private $statRequestDate;

    /**
     * @var string
     */
    private $statAction;

    /**
     * @var integer
     */
    private $statLinkUserId = '0';

    /**
     * @var boolean
     */
    private $statParsed = '0';

    /**
     * @var integer
     */
    private $statId;


    /**
     * Set statUserId
     *
     * @param integer $statUserId
     *
     * @return Stats
     */
    public function setStatUserId($statUserId)
    {
        $this->statUserId = $statUserId;

        return $this;
    }

    /**
     * Get statUserId
     *
     * @return integer
     */
    public function getStatUserId()
    {
        return $this->statUserId;
    }

    /**
     * Set statRequestId
     *
     * @param integer $statRequestId
     *
     * @return Stats
     */
    public function setStatRequestId($statRequestId)
    {
        $this->statRequestId = $statRequestId;

        return $this;
    }

    /**
     * Get statRequestId
     *
     * @return integer
     */
    public function getStatRequestId()
    {
        return $this->statRequestId;
    }

    /**
     * Set statDate
     *
     * @param \DateTime $statDate
     *
     * @return Stats
     */
    public function setStatDate($statDate)
    {
        $this->statDate = $statDate;

        return $this;
    }

    /**
     * Get statDate
     *
     * @return \DateTime
     */
    public function getStatDate()
    {
        return $this->statDate;
    }

    /**
     * Set statRequestDate
     *
     * @param \DateTime $statRequestDate
     *
     * @return Stats
     */
    public function setStatRequestDate($statRequestDate)
    {
        $this->statRequestDate = $statRequestDate;

        return $this;
    }

    /**
     * Get statRequestDate
     *
     * @return \DateTime
     */
    public function getStatRequestDate()
    {
        return $this->statRequestDate;
    }

    /**
     * Set statAction
     *
     * @param string $statAction
     *
     * @return Stats
     */
    public function setStatAction($statAction)
    {
        $this->statAction = $statAction;

        return $this;
    }

    /**
     * Get statAction
     *
     * @return string
     */
    public function getStatAction()
    {
        return $this->statAction;
    }

    /**
     * Set statLinkUserId
     *
     * @param integer $statLinkUserId
     *
     * @return Stats
     */
    public function setStatLinkUserId($statLinkUserId)
    {
        $this->statLinkUserId = $statLinkUserId;

        return $this;
    }

    /**
     * Get statLinkUserId
     *
     * @return integer
     */
    public function getStatLinkUserId()
    {
        return $this->statLinkUserId;
    }

    /**
     * Set statParsed
     *
     * @param boolean $statParsed
     *
     * @return Stats
     */
    public function setStatParsed($statParsed)
    {
        $this->statParsed = $statParsed;

        return $this;
    }

    /**
     * Get statParsed
     *
     * @return boolean
     */
    public function getStatParsed()
    {
        return $this->statParsed;
    }

    /**
     * Get statId
     *
     * @return integer
     */
    public function getStatId()
    {
        return $this->statId;
    }
}

