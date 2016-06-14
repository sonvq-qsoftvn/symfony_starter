<?php

namespace ET\ETTicketBundle\Entity;

/**
 * Prpconversation
 */
class Prpconversation
{
    /**
     * @var integer
     */
    private $prpconversationPromotoreid;

    /**
     * @var integer
     */
    private $prpconversationRequestid;

    /**
     * @var integer
     */
    private $prpconversationPrpid;

    /**
     * @var integer
     */
    private $prpconversationId;


    /**
     * Set prpconversationPromotoreid
     *
     * @param integer $prpconversationPromotoreid
     *
     * @return Prpconversation
     */
    public function setPrpconversationPromotoreid($prpconversationPromotoreid)
    {
        $this->prpconversationPromotoreid = $prpconversationPromotoreid;

        return $this;
    }

    /**
     * Get prpconversationPromotoreid
     *
     * @return integer
     */
    public function getPrpconversationPromotoreid()
    {
        return $this->prpconversationPromotoreid;
    }

    /**
     * Set prpconversationRequestid
     *
     * @param integer $prpconversationRequestid
     *
     * @return Prpconversation
     */
    public function setPrpconversationRequestid($prpconversationRequestid)
    {
        $this->prpconversationRequestid = $prpconversationRequestid;

        return $this;
    }

    /**
     * Get prpconversationRequestid
     *
     * @return integer
     */
    public function getPrpconversationRequestid()
    {
        return $this->prpconversationRequestid;
    }

    /**
     * Set prpconversationPrpid
     *
     * @param integer $prpconversationPrpid
     *
     * @return Prpconversation
     */
    public function setPrpconversationPrpid($prpconversationPrpid)
    {
        $this->prpconversationPrpid = $prpconversationPrpid;

        return $this;
    }

    /**
     * Get prpconversationPrpid
     *
     * @return integer
     */
    public function getPrpconversationPrpid()
    {
        return $this->prpconversationPrpid;
    }

    /**
     * Get prpconversationId
     *
     * @return integer
     */
    public function getPrpconversationId()
    {
        return $this->prpconversationId;
    }
}
