<?php

namespace ET\ETTicketBundle\Entity;

/**
 * RequestChangelog
 */
class RequestChangelog
{
    /**
     * @var integer
     */
    private $requestId = '0';

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $programName;

    /**
     * @var string
     */
    private $modifiedField;

    /**
     * @var string
     */
    private $originalValue;

    /**
     * @var string
     */
    private $newValue;

    /**
     * @var boolean
     */
    private $assignmentReason = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set requestId
     *
     * @param integer $requestId
     *
     * @return RequestChangelog
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }

    /**
     * Get requestId
     *
     * @return integer
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return RequestChangelog
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return RequestChangelog
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set programName
     *
     * @param string $programName
     *
     * @return RequestChangelog
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;

        return $this;
    }

    /**
     * Get programName
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Set modifiedField
     *
     * @param string $modifiedField
     *
     * @return RequestChangelog
     */
    public function setModifiedField($modifiedField)
    {
        $this->modifiedField = $modifiedField;

        return $this;
    }

    /**
     * Get modifiedField
     *
     * @return string
     */
    public function getModifiedField()
    {
        return $this->modifiedField;
    }

    /**
     * Set originalValue
     *
     * @param string $originalValue
     *
     * @return RequestChangelog
     */
    public function setOriginalValue($originalValue)
    {
        $this->originalValue = $originalValue;

        return $this;
    }

    /**
     * Get originalValue
     *
     * @return string
     */
    public function getOriginalValue()
    {
        return $this->originalValue;
    }

    /**
     * Set newValue
     *
     * @param string $newValue
     *
     * @return RequestChangelog
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * Get newValue
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * Set assignmentReason
     *
     * @param boolean $assignmentReason
     *
     * @return RequestChangelog
     */
    public function setAssignmentReason($assignmentReason)
    {
        $this->assignmentReason = $assignmentReason;

        return $this;
    }

    /**
     * Get assignmentReason
     *
     * @return boolean
     */
    public function getAssignmentReason()
    {
        return $this->assignmentReason;
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

