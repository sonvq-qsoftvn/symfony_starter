<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Message
 */
class Message
{
    /**
     * @var \DateTime
     */
    private $messageDate;

    /**
     * @var string
     */
    private $messageSubject;

    /**
     * @var string
     */
    private $messageBody;

    /**
     * @var integer
     */
    private $messageConversationid;

    /**
     * @var integer
     */
    private $messageType;

    /**
     * @var integer
     */
    private $messageId;


    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     *
     * @return Message
     */
    public function setMessageDate($messageDate)
    {
        $this->messageDate = $messageDate;

        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime
     */
    public function getMessageDate()
    {
        return $this->messageDate;
    }

    /**
     * Set messageSubject
     *
     * @param string $messageSubject
     *
     * @return Message
     */
    public function setMessageSubject($messageSubject)
    {
        $this->messageSubject = $messageSubject;

        return $this;
    }

    /**
     * Get messageSubject
     *
     * @return string
     */
    public function getMessageSubject()
    {
        return $this->messageSubject;
    }

    /**
     * Set messageBody
     *
     * @param string $messageBody
     *
     * @return Message
     */
    public function setMessageBody($messageBody)
    {
        $this->messageBody = $messageBody;

        return $this;
    }

    /**
     * Get messageBody
     *
     * @return string
     */
    public function getMessageBody()
    {
        return $this->messageBody;
    }

    /**
     * Set messageConversationid
     *
     * @param integer $messageConversationid
     *
     * @return Message
     */
    public function setMessageConversationid($messageConversationid)
    {
        $this->messageConversationid = $messageConversationid;

        return $this;
    }

    /**
     * Get messageConversationid
     *
     * @return integer
     */
    public function getMessageConversationid()
    {
        return $this->messageConversationid;
    }

    /**
     * Set messageType
     *
     * @param integer $messageType
     *
     * @return Message
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * Get messageType
     *
     * @return integer
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Get messageId
     *
     * @return integer
     */
    public function getMessageId()
    {
        return $this->messageId;
    }
}
