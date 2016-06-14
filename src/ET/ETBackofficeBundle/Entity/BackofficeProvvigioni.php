<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeProvvigioni
 */
class BackofficeProvvigioni
{
    /**
     * @var string
     */
    private $provvigione = '';

    /**
     * @var integer
     */
    private $provvigioneid;


    /**
     * Set provvigione
     *
     * @param string $provvigione
     *
     * @return BackofficeProvvigioni
     */
    public function setProvvigione($provvigione)
    {
        $this->provvigione = $provvigione;

        return $this;
    }

    /**
     * Get provvigione
     *
     * @return string
     */
    public function getProvvigione()
    {
        return $this->provvigione;
    }

    /**
     * Get provvigioneid
     *
     * @return integer
     */
    public function getProvvigioneid()
    {
        return $this->provvigioneid;
    }
}

