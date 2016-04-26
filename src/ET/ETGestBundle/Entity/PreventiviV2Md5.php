<?php

namespace ET\ETGestBundle\Entity;

/**
 * PreventiviV2Md5
 */
class PreventiviV2Md5
{
    /**
     * @var integer
     */
    private $preventivoId;

    /**
     * @var integer
     */
    private $viaggioId;

    /**
     * @var string
     */
    private $codiceMd5;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set preventivoId
     *
     * @param integer $preventivoId
     *
     * @return PreventiviV2Md5
     */
    public function setPreventivoId($preventivoId)
    {
        $this->preventivoId = $preventivoId;

        return $this;
    }

    /**
     * Get preventivoId
     *
     * @return integer
     */
    public function getPreventivoId()
    {
        return $this->preventivoId;
    }

    /**
     * Set viaggioId
     *
     * @param integer $viaggioId
     *
     * @return PreventiviV2Md5
     */
    public function setViaggioId($viaggioId)
    {
        $this->viaggioId = $viaggioId;

        return $this;
    }

    /**
     * Get viaggioId
     *
     * @return integer
     */
    public function getViaggioId()
    {
        return $this->viaggioId;
    }

    /**
     * Set codiceMd5
     *
     * @param string $codiceMd5
     *
     * @return PreventiviV2Md5
     */
    public function setCodiceMd5($codiceMd5)
    {
        $this->codiceMd5 = $codiceMd5;

        return $this;
    }

    /**
     * Get codiceMd5
     *
     * @return string
     */
    public function getCodiceMd5()
    {
        return $this->codiceMd5;
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

