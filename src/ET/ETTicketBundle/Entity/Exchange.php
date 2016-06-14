<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Exchange
 */
class Exchange
{
    /**
     * @var integer
     */
    private $exchangeRequestid = '0';

    /**
     * @var integer
     */
    private $exchangeMittenteid = '0';

    /**
     * @var integer
     */
    private $exchangeDestinatarioid = '0';

    /**
     * @var boolean
     */
    private $exchangeProvvigione = '0';

    /**
     * @var string
     */
    private $exchangeStatus = '';

    /**
     * @var \DateTime
     */
    private $exchangeDate;

    /**
     * @var \DateTime
     */
    private $exchangeStatusDate;

    /**
     * @var string
     */
    private $exchangeComment;

    /**
     * @var integer
     */
    private $exchangeFilterid = '0';

    /**
     * @var boolean
     */
    private $exchangeCreateAppaltoCliente = '0';

    /**
     * @var boolean
     */
    private $exchangeAssignDestinatario = '0';

    /**
     * @var integer
     */
    private $exchangeEtravelerid = '0';

    /**
     * @var string
     */
    private $exchangeType;

    /**
     * @var integer
     */
    private $exchangeId;


    /**
     * Set exchangeRequestid
     *
     * @param integer $exchangeRequestid
     *
     * @return Exchange
     */
    public function setExchangeRequestid($exchangeRequestid)
    {
        $this->exchangeRequestid = $exchangeRequestid;

        return $this;
    }

    /**
     * Get exchangeRequestid
     *
     * @return integer
     */
    public function getExchangeRequestid()
    {
        return $this->exchangeRequestid;
    }

    /**
     * Set exchangeMittenteid
     *
     * @param integer $exchangeMittenteid
     *
     * @return Exchange
     */
    public function setExchangeMittenteid($exchangeMittenteid)
    {
        $this->exchangeMittenteid = $exchangeMittenteid;

        return $this;
    }

    /**
     * Get exchangeMittenteid
     *
     * @return integer
     */
    public function getExchangeMittenteid()
    {
        return $this->exchangeMittenteid;
    }

    /**
     * Set exchangeDestinatarioid
     *
     * @param integer $exchangeDestinatarioid
     *
     * @return Exchange
     */
    public function setExchangeDestinatarioid($exchangeDestinatarioid)
    {
        $this->exchangeDestinatarioid = $exchangeDestinatarioid;

        return $this;
    }

    /**
     * Get exchangeDestinatarioid
     *
     * @return integer
     */
    public function getExchangeDestinatarioid()
    {
        return $this->exchangeDestinatarioid;
    }

    /**
     * Set exchangeProvvigione
     *
     * @param boolean $exchangeProvvigione
     *
     * @return Exchange
     */
    public function setExchangeProvvigione($exchangeProvvigione)
    {
        $this->exchangeProvvigione = $exchangeProvvigione;

        return $this;
    }

    /**
     * Get exchangeProvvigione
     *
     * @return boolean
     */
    public function getExchangeProvvigione()
    {
        return $this->exchangeProvvigione;
    }

    /**
     * Set exchangeStatus
     *
     * @param string $exchangeStatus
     *
     * @return Exchange
     */
    public function setExchangeStatus($exchangeStatus)
    {
        $this->exchangeStatus = $exchangeStatus;

        return $this;
    }

    /**
     * Get exchangeStatus
     *
     * @return string
     */
    public function getExchangeStatus()
    {
        return $this->exchangeStatus;
    }

    /**
     * Set exchangeDate
     *
     * @param \DateTime $exchangeDate
     *
     * @return Exchange
     */
    public function setExchangeDate($exchangeDate)
    {
        $this->exchangeDate = $exchangeDate;

        return $this;
    }

    /**
     * Get exchangeDate
     *
     * @return \DateTime
     */
    public function getExchangeDate()
    {
        return $this->exchangeDate;
    }

    /**
     * Set exchangeStatusDate
     *
     * @param \DateTime $exchangeStatusDate
     *
     * @return Exchange
     */
    public function setExchangeStatusDate($exchangeStatusDate)
    {
        $this->exchangeStatusDate = $exchangeStatusDate;

        return $this;
    }

    /**
     * Get exchangeStatusDate
     *
     * @return \DateTime
     */
    public function getExchangeStatusDate()
    {
        return $this->exchangeStatusDate;
    }

    /**
     * Set exchangeComment
     *
     * @param string $exchangeComment
     *
     * @return Exchange
     */
    public function setExchangeComment($exchangeComment)
    {
        $this->exchangeComment = $exchangeComment;

        return $this;
    }

    /**
     * Get exchangeComment
     *
     * @return string
     */
    public function getExchangeComment()
    {
        return $this->exchangeComment;
    }

    /**
     * Set exchangeFilterid
     *
     * @param integer $exchangeFilterid
     *
     * @return Exchange
     */
    public function setExchangeFilterid($exchangeFilterid)
    {
        $this->exchangeFilterid = $exchangeFilterid;

        return $this;
    }

    /**
     * Get exchangeFilterid
     *
     * @return integer
     */
    public function getExchangeFilterid()
    {
        return $this->exchangeFilterid;
    }

    /**
     * Set exchangeCreateAppaltoCliente
     *
     * @param boolean $exchangeCreateAppaltoCliente
     *
     * @return Exchange
     */
    public function setExchangeCreateAppaltoCliente($exchangeCreateAppaltoCliente)
    {
        $this->exchangeCreateAppaltoCliente = $exchangeCreateAppaltoCliente;

        return $this;
    }

    /**
     * Get exchangeCreateAppaltoCliente
     *
     * @return boolean
     */
    public function getExchangeCreateAppaltoCliente()
    {
        return $this->exchangeCreateAppaltoCliente;
    }

    /**
     * Set exchangeAssignDestinatario
     *
     * @param boolean $exchangeAssignDestinatario
     *
     * @return Exchange
     */
    public function setExchangeAssignDestinatario($exchangeAssignDestinatario)
    {
        $this->exchangeAssignDestinatario = $exchangeAssignDestinatario;

        return $this;
    }

    /**
     * Get exchangeAssignDestinatario
     *
     * @return boolean
     */
    public function getExchangeAssignDestinatario()
    {
        return $this->exchangeAssignDestinatario;
    }

    /**
     * Set exchangeEtravelerid
     *
     * @param integer $exchangeEtravelerid
     *
     * @return Exchange
     */
    public function setExchangeEtravelerid($exchangeEtravelerid)
    {
        $this->exchangeEtravelerid = $exchangeEtravelerid;

        return $this;
    }

    /**
     * Get exchangeEtravelerid
     *
     * @return integer
     */
    public function getExchangeEtravelerid()
    {
        return $this->exchangeEtravelerid;
    }

    /**
     * Set exchangeType
     *
     * @param string $exchangeType
     *
     * @return Exchange
     */
    public function setExchangeType($exchangeType)
    {
        $this->exchangeType = $exchangeType;

        return $this;
    }

    /**
     * Get exchangeType
     *
     * @return string
     */
    public function getExchangeType()
    {
        return $this->exchangeType;
    }

    /**
     * Get exchangeId
     *
     * @return integer
     */
    public function getExchangeId()
    {
        return $this->exchangeId;
    }
}
