<?php

namespace AppBundle\Entity;

/**
 * Rates
 */
class Rates
{
    /**
     * @var string
     */
    private $amount = '0.00';

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $travelId;

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var boolean
     */
    private $isSame = '0';

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $postcardPath;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var \DateTime
     */
    private $dateBooking;

    /**
     * @var \DateTime
     */
    private $datePayment;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Rates
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Rates
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set travelId
     *
     * @param integer $travelId
     *
     * @return Rates
     */
    public function setTravelId($travelId)
    {
        $this->travelId = $travelId;

        return $this;
    }

    /**
     * Get travelId
     *
     * @return integer
     */
    public function getTravelId()
    {
        return $this->travelId;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Rates
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isSame
     *
     * @param boolean $isSame
     *
     * @return Rates
     */
    public function setIsSame($isSame)
    {
        $this->isSame = $isSame;

        return $this;
    }

    /**
     * Get isSame
     *
     * @return boolean
     */
    public function getIsSame()
    {
        return $this->isSame;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Rates
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
     * Set message
     *
     * @param string $message
     *
     * @return Rates
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set postcardPath
     *
     * @param string $postcardPath
     *
     * @return Rates
     */
    public function setPostcardPath($postcardPath)
    {
        $this->postcardPath = $postcardPath;

        return $this;
    }

    /**
     * Get postcardPath
     *
     * @return string
     */
    public function getPostcardPath()
    {
        return $this->postcardPath;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Rates
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Rates
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Rates
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set dateBooking
     *
     * @param \DateTime $dateBooking
     *
     * @return Rates
     */
    public function setDateBooking($dateBooking)
    {
        $this->dateBooking = $dateBooking;

        return $this;
    }

    /**
     * Get dateBooking
     *
     * @return \DateTime
     */
    public function getDateBooking()
    {
        return $this->dateBooking;
    }

    /**
     * Set datePayment
     *
     * @param \DateTime $datePayment
     *
     * @return Rates
     */
    public function setDatePayment($datePayment)
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    /**
     * Get datePayment
     *
     * @return \DateTime
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return Rates
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
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
