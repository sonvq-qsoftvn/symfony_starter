<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Filter
 */
class Filter
{
    /**
     * @var \DateTime
     */
    private $filterDate;

    /**
     * @var string
     */
    private $filterStatus = '';

    /**
     * @var \DateTime
     */
    private $filterStatusDate;

    /**
     * @var integer
     */
    private $filterUserid = '0';

    /**
     * @var string
     */
    private $filterFcd = '';

    /**
     * @var integer
     */
    private $filterForwardUserid = '0';

    /**
     * @var boolean
     */
    private $filterExchangeProvvigione = '0';

    /**
     * @var string
     */
    private $filterRequestStatus = '';

    /**
     * @var boolean
     */
    private $filterCreateAppaltoCliente = '0';

    /**
     * @var string
     */
    private $filterLingua = '*';

    /**
     * @var integer
     */
    private $filterExchangeEtravelerid = '0';

    /**
     * @var string
     */
    private $filterExchangeType;

    /**
     * @var integer
     */
    private $filterId;


    /**
     * Set filterDate
     *
     * @param \DateTime $filterDate
     *
     * @return Filter
     */
    public function setFilterDate($filterDate)
    {
        $this->filterDate = $filterDate;

        return $this;
    }

    /**
     * Get filterDate
     *
     * @return \DateTime
     */
    public function getFilterDate()
    {
        return $this->filterDate;
    }

    /**
     * Set filterStatus
     *
     * @param string $filterStatus
     *
     * @return Filter
     */
    public function setFilterStatus($filterStatus)
    {
        $this->filterStatus = $filterStatus;

        return $this;
    }

    /**
     * Get filterStatus
     *
     * @return string
     */
    public function getFilterStatus()
    {
        return $this->filterStatus;
    }

    /**
     * Set filterStatusDate
     *
     * @param \DateTime $filterStatusDate
     *
     * @return Filter
     */
    public function setFilterStatusDate($filterStatusDate)
    {
        $this->filterStatusDate = $filterStatusDate;

        return $this;
    }

    /**
     * Get filterStatusDate
     *
     * @return \DateTime
     */
    public function getFilterStatusDate()
    {
        return $this->filterStatusDate;
    }

    /**
     * Set filterUserid
     *
     * @param integer $filterUserid
     *
     * @return Filter
     */
    public function setFilterUserid($filterUserid)
    {
        $this->filterUserid = $filterUserid;

        return $this;
    }

    /**
     * Get filterUserid
     *
     * @return integer
     */
    public function getFilterUserid()
    {
        return $this->filterUserid;
    }

    /**
     * Set filterFcd
     *
     * @param string $filterFcd
     *
     * @return Filter
     */
    public function setFilterFcd($filterFcd)
    {
        $this->filterFcd = $filterFcd;

        return $this;
    }

    /**
     * Get filterFcd
     *
     * @return string
     */
    public function getFilterFcd()
    {
        return $this->filterFcd;
    }

    /**
     * Set filterForwardUserid
     *
     * @param integer $filterForwardUserid
     *
     * @return Filter
     */
    public function setFilterForwardUserid($filterForwardUserid)
    {
        $this->filterForwardUserid = $filterForwardUserid;

        return $this;
    }

    /**
     * Get filterForwardUserid
     *
     * @return integer
     */
    public function getFilterForwardUserid()
    {
        return $this->filterForwardUserid;
    }

    /**
     * Set filterExchangeProvvigione
     *
     * @param boolean $filterExchangeProvvigione
     *
     * @return Filter
     */
    public function setFilterExchangeProvvigione($filterExchangeProvvigione)
    {
        $this->filterExchangeProvvigione = $filterExchangeProvvigione;

        return $this;
    }

    /**
     * Get filterExchangeProvvigione
     *
     * @return boolean
     */
    public function getFilterExchangeProvvigione()
    {
        return $this->filterExchangeProvvigione;
    }

    /**
     * Set filterRequestStatus
     *
     * @param string $filterRequestStatus
     *
     * @return Filter
     */
    public function setFilterRequestStatus($filterRequestStatus)
    {
        $this->filterRequestStatus = $filterRequestStatus;

        return $this;
    }

    /**
     * Get filterRequestStatus
     *
     * @return string
     */
    public function getFilterRequestStatus()
    {
        return $this->filterRequestStatus;
    }

    /**
     * Set filterCreateAppaltoCliente
     *
     * @param boolean $filterCreateAppaltoCliente
     *
     * @return Filter
     */
    public function setFilterCreateAppaltoCliente($filterCreateAppaltoCliente)
    {
        $this->filterCreateAppaltoCliente = $filterCreateAppaltoCliente;

        return $this;
    }

    /**
     * Get filterCreateAppaltoCliente
     *
     * @return boolean
     */
    public function getFilterCreateAppaltoCliente()
    {
        return $this->filterCreateAppaltoCliente;
    }

    /**
     * Set filterLingua
     *
     * @param string $filterLingua
     *
     * @return Filter
     */
    public function setFilterLingua($filterLingua)
    {
        $this->filterLingua = $filterLingua;

        return $this;
    }

    /**
     * Get filterLingua
     *
     * @return string
     */
    public function getFilterLingua()
    {
        return $this->filterLingua;
    }

    /**
     * Set filterExchangeEtravelerid
     *
     * @param integer $filterExchangeEtravelerid
     *
     * @return Filter
     */
    public function setFilterExchangeEtravelerid($filterExchangeEtravelerid)
    {
        $this->filterExchangeEtravelerid = $filterExchangeEtravelerid;

        return $this;
    }

    /**
     * Get filterExchangeEtravelerid
     *
     * @return integer
     */
    public function getFilterExchangeEtravelerid()
    {
        return $this->filterExchangeEtravelerid;
    }

    /**
     * Set filterExchangeType
     *
     * @param string $filterExchangeType
     *
     * @return Filter
     */
    public function setFilterExchangeType($filterExchangeType)
    {
        $this->filterExchangeType = $filterExchangeType;

        return $this;
    }

    /**
     * Get filterExchangeType
     *
     * @return string
     */
    public function getFilterExchangeType()
    {
        return $this->filterExchangeType;
    }

    /**
     * Get filterId
     *
     * @return integer
     */
    public function getFilterId()
    {
        return $this->filterId;
    }
}
