<?php

namespace ET\ETTicketBundle\Entity;

/**
 * RatingRequestProducts20140203
 */
class RatingRequestProducts20140203
{
    /**
     * @var integer
     */
    private $requestId;

    /**
     * @var string
     */
    private $product;


    /**
     * Set requestId
     *
     * @param integer $requestId
     *
     * @return RatingRequestProducts20140203
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
     * Set product
     *
     * @param string $product
     *
     * @return RatingRequestProducts20140203
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }
}

