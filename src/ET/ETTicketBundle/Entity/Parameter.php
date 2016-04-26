<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Parameter
 */
class Parameter
{
    /**
     * @var string
     */
    private $parameterName = '';

    /**
     * @var string
     */
    private $parameterValue = '';

    /**
     * @var boolean
     */
    private $parameterId;


    /**
     * Set parameterName
     *
     * @param string $parameterName
     *
     * @return Parameter
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;

        return $this;
    }

    /**
     * Get parameterName
     *
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * Set parameterValue
     *
     * @param string $parameterValue
     *
     * @return Parameter
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;

        return $this;
    }

    /**
     * Get parameterValue
     *
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }

    /**
     * Get parameterId
     *
     * @return boolean
     */
    public function getParameterId()
    {
        return $this->parameterId;
    }
}

