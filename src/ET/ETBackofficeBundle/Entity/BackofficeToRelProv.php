<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeToRelProv
 */
class BackofficeToRelProv
{
    /**
     * @var string
     */
    private $provvigionenote = '';

    /**
     * @var integer
     */
    private $toid;

    /**
     * @var integer
     */
    private $provvigioneid;


    /**
     * Set provvigionenote
     *
     * @param string $provvigionenote
     *
     * @return BackofficeToRelProv
     */
    public function setProvvigionenote($provvigionenote)
    {
        $this->provvigionenote = $provvigionenote;

        return $this;
    }

    /**
     * Get provvigionenote
     *
     * @return string
     */
    public function getProvvigionenote()
    {
        return $this->provvigionenote;
    }

    /**
     * Set toid
     *
     * @param integer $toid
     *
     * @return BackofficeToRelProv
     */
    public function setToid($toid)
    {
        $this->toid = $toid;

        return $this;
    }

    /**
     * Get toid
     *
     * @return integer
     */
    public function getToid()
    {
        return $this->toid;
    }

    /**
     * Set provvigioneid
     *
     * @param integer $provvigioneid
     *
     * @return BackofficeToRelProv
     */
    public function setProvvigioneid($provvigioneid)
    {
        $this->provvigioneid = $provvigioneid;

        return $this;
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

