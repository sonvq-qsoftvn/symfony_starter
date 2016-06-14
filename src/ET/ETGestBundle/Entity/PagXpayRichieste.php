<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagXpayRichieste
 *
 * @ORM\Table(name="pag_xpay_richieste", indexes={@ORM\Index(name="id_op", columns={"id_op"})})
 * @ORM\Entity
 */
class PagXpayRichieste
{
    /**
     * @var string
     *
     * @ORM\Column(name="action_code", type="string", length=8, nullable=false)
     */
    private $actionCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=3, nullable=false)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_order", type="string", length=200, nullable=false)
     */
    private $descOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="option_fields", type="text", length=16777215, nullable=false)
     */
    private $optionFields;

    /**
     * @var string
     *
     * @ORM\Column(name="message_type", type="string", length=3, nullable=false)
     */
    private $messageType;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=15, nullable=false)
     */
    private $response;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_code", type="string", length=10, nullable=false)
     */
    private $authCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="transaction_date", type="datetime", nullable=false)
     */
    private $transactionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="card_type", type="string", length=10, nullable=false)
     */
    private $cardType;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_type", type="string", length=20, nullable=false)
     */
    private $transactionType;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=50, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="product_type", type="string", length=50, nullable=false)
     */
    private $productType;

    /**
     * @var string
     *
     * @ORM\Column(name="liability_shift", type="string", length=1, nullable=false)
     */
    private $liabilityShift;

    /**
     * @var string
     *
     * @ORM\Column(name="request_type", type="string", length=2, nullable=false)
     */
    private $requestType;

    /**
     * @var string
     *
     * @ORM\Column(name="type_op", type="string", length=1, nullable=false)
     */
    private $typeOp;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_op", type="integer", nullable=false)
     */
    private $amountOp;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=20, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $transactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="id_op", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOp;



    /**
     * Set actionCode
     *
     * @param string $actionCode
     *
     * @return PagXpayRichieste
     */
    public function setActionCode($actionCode)
    {
        $this->actionCode = $actionCode;

        return $this;
    }

    /**
     * Get actionCode
     *
     * @return string
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return PagXpayRichieste
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return PagXpayRichieste
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return PagXpayRichieste
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return PagXpayRichieste
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set descOrder
     *
     * @param string $descOrder
     *
     * @return PagXpayRichieste
     */
    public function setDescOrder($descOrder)
    {
        $this->descOrder = $descOrder;

        return $this;
    }

    /**
     * Get descOrder
     *
     * @return string
     */
    public function getDescOrder()
    {
        return $this->descOrder;
    }

    /**
     * Set optionFields
     *
     * @param string $optionFields
     *
     * @return PagXpayRichieste
     */
    public function setOptionFields($optionFields)
    {
        $this->optionFields = $optionFields;

        return $this;
    }

    /**
     * Get optionFields
     *
     * @return string
     */
    public function getOptionFields()
    {
        return $this->optionFields;
    }

    /**
     * Set messageType
     *
     * @param string $messageType
     *
     * @return PagXpayRichieste
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * Get messageType
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return PagXpayRichieste
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set authCode
     *
     * @param string $authCode
     *
     * @return PagXpayRichieste
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;

        return $this;
    }

    /**
     * Get authCode
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * Set transactionDate
     *
     * @param \DateTime $transactionDate
     *
     * @return PagXpayRichieste
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;

        return $this;
    }

    /**
     * Get transactionDate
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Set cardType
     *
     * @param string $cardType
     *
     * @return PagXpayRichieste
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * Get cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Set transactionType
     *
     * @param string $transactionType
     *
     * @return PagXpayRichieste
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Get transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return PagXpayRichieste
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return PagXpayRichieste
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set productType
     *
     * @param string $productType
     *
     * @return PagXpayRichieste
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Set liabilityShift
     *
     * @param string $liabilityShift
     *
     * @return PagXpayRichieste
     */
    public function setLiabilityShift($liabilityShift)
    {
        $this->liabilityShift = $liabilityShift;

        return $this;
    }

    /**
     * Get liabilityShift
     *
     * @return string
     */
    public function getLiabilityShift()
    {
        return $this->liabilityShift;
    }

    /**
     * Set requestType
     *
     * @param string $requestType
     *
     * @return PagXpayRichieste
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Get requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Set typeOp
     *
     * @param string $typeOp
     *
     * @return PagXpayRichieste
     */
    public function setTypeOp($typeOp)
    {
        $this->typeOp = $typeOp;

        return $this;
    }

    /**
     * Get typeOp
     *
     * @return string
     */
    public function getTypeOp()
    {
        return $this->typeOp;
    }

    /**
     * Set amountOp
     *
     * @param integer $amountOp
     *
     * @return PagXpayRichieste
     */
    public function setAmountOp($amountOp)
    {
        $this->amountOp = $amountOp;

        return $this;
    }

    /**
     * Get amountOp
     *
     * @return integer
     */
    public function getAmountOp()
    {
        return $this->amountOp;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return PagXpayRichieste
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     *
     * @return PagXpayRichieste
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set idOp
     *
     * @param string $idOp
     *
     * @return PagXpayRichieste
     */
    public function setIdOp($idOp)
    {
        $this->idOp = $idOp;

        return $this;
    }

    /**
     * Get idOp
     *
     * @return string
     */
    public function getIdOp()
    {
        return $this->idOp;
    }
}
