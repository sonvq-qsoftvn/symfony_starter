<?php

namespace AppBundle\Entity;

/**
 * Tmpcronelab
 */
class Tmpcronelab
{
    /**
     * @var \DateTime
     */
    private $dt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $code;

    /**
     * @var integer
     */
    private $pmittId;

    /**
     * @var integer
     */
    private $pdestId;

    /**
     * @var integer
     */
    private $invalid = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set dt
     *
     * @param \DateTime $dt
     *
     * @return Tmpcronelab
     */
    public function setDt($dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Get dt
     *
     * @return \DateTime
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Tmpcronelab
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set pmittId
     *
     * @param integer $pmittId
     *
     * @return Tmpcronelab
     */
    public function setPmittId($pmittId)
    {
        $this->pmittId = $pmittId;

        return $this;
    }

    /**
     * Get pmittId
     *
     * @return integer
     */
    public function getPmittId()
    {
        return $this->pmittId;
    }

    /**
     * Set pdestId
     *
     * @param integer $pdestId
     *
     * @return Tmpcronelab
     */
    public function setPdestId($pdestId)
    {
        $this->pdestId = $pdestId;

        return $this;
    }

    /**
     * Get pdestId
     *
     * @return integer
     */
    public function getPdestId()
    {
        return $this->pdestId;
    }

    /**
     * Set invalid
     *
     * @param integer $invalid
     *
     * @return Tmpcronelab
     */
    public function setInvalid($invalid)
    {
        $this->invalid = $invalid;

        return $this;
    }

    /**
     * Get invalid
     *
     * @return integer
     */
    public function getInvalid()
    {
        return $this->invalid;
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
