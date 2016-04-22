<?php

namespace AppBundle\Entity;

/**
 * BkRequest
 */
class BkRequest
{
    /**
     * @var string
     */
    private $requestPackage;

    /**
     * @var string
     */
    private $requestPeriodfrom;

    /**
     * @var string
     */
    private $requestPeriodto;

    /**
     * @var string
     */
    private $requestCost;

    /**
     * @var string
     */
    private $requestName;

    /**
     * @var string
     */
    private $requestSurname;

    /**
     * @var string
     */
    private $requestEmail;

    /**
     * @var integer
     */
    private $requestAdults;

    /**
     * @var integer
     */
    private $requestChildren;

    /**
     * @var string
     */
    private $requestTel;

    /**
     * @var string
     */
    private $requestCell;

    /**
     * @var string
     */
    private $requestOffice;

    /**
     * @var string
     */
    private $requestRepfrom;

    /**
     * @var string
     */
    private $requestRepto;

    /**
     * @var string
     */
    private $requestOther;

    /**
     * @var string
     */
    private $requestFcd;

    /**
     * @var string
     */
    private $requestFmt;

    /**
     * @var string
     */
    private $requestMaildest;

    /**
     * @var string
     */
    private $requestMailrif;

    /**
     * @var string
     */
    private $requestFsu;

    /**
     * @var string
     */
    private $requestPid;

    /**
     * @var string
     */
    private $requestPacchetonome;

    /**
     * @var string
     */
    private $requestChildrendetails;

    /**
     * @var integer
     */
    private $requestAssignedPromotoreId;

    /**
     * @var string
     */
    private $requestStatus;

    /**
     * @var string
     */
    private $requestComment;

    /**
     * @var \DateTime
     */
    private $requestDate;

    /**
     * @var string
     */
    private $requestPrpname;

    /**
     * @var integer
     */
    private $requestPrpid;

    /**
     * @var string
     */
    private $requestPrpmail;

    /**
     * @var integer
     */
    private $requestLoggedUsers = '0';

    /**
     * @var integer
     */
    private $requestPromotoreid;

    /**
     * @var integer
     */
    private $requestTimeLeft;

    /**
     * @var string
     */
    private $requestAnagraficaId = '';

    /**
     * @var integer
     */
    private $requestAnagraficaPromotoreId = '0';

    /**
     * @var string
     */
    private $requestCode = '';

    /**
     * @var integer
     */
    private $requestId;


    /**
     * Set requestPackage
     *
     * @param string $requestPackage
     *
     * @return BkRequest
     */
    public function setRequestPackage($requestPackage)
    {
        $this->requestPackage = $requestPackage;

        return $this;
    }

    /**
     * Get requestPackage
     *
     * @return string
     */
    public function getRequestPackage()
    {
        return $this->requestPackage;
    }

    /**
     * Set requestPeriodfrom
     *
     * @param string $requestPeriodfrom
     *
     * @return BkRequest
     */
    public function setRequestPeriodfrom($requestPeriodfrom)
    {
        $this->requestPeriodfrom = $requestPeriodfrom;

        return $this;
    }

    /**
     * Get requestPeriodfrom
     *
     * @return string
     */
    public function getRequestPeriodfrom()
    {
        return $this->requestPeriodfrom;
    }

    /**
     * Set requestPeriodto
     *
     * @param string $requestPeriodto
     *
     * @return BkRequest
     */
    public function setRequestPeriodto($requestPeriodto)
    {
        $this->requestPeriodto = $requestPeriodto;

        return $this;
    }

    /**
     * Get requestPeriodto
     *
     * @return string
     */
    public function getRequestPeriodto()
    {
        return $this->requestPeriodto;
    }

    /**
     * Set requestCost
     *
     * @param string $requestCost
     *
     * @return BkRequest
     */
    public function setRequestCost($requestCost)
    {
        $this->requestCost = $requestCost;

        return $this;
    }

    /**
     * Get requestCost
     *
     * @return string
     */
    public function getRequestCost()
    {
        return $this->requestCost;
    }

    /**
     * Set requestName
     *
     * @param string $requestName
     *
     * @return BkRequest
     */
    public function setRequestName($requestName)
    {
        $this->requestName = $requestName;

        return $this;
    }

    /**
     * Get requestName
     *
     * @return string
     */
    public function getRequestName()
    {
        return $this->requestName;
    }

    /**
     * Set requestSurname
     *
     * @param string $requestSurname
     *
     * @return BkRequest
     */
    public function setRequestSurname($requestSurname)
    {
        $this->requestSurname = $requestSurname;

        return $this;
    }

    /**
     * Get requestSurname
     *
     * @return string
     */
    public function getRequestSurname()
    {
        return $this->requestSurname;
    }

    /**
     * Set requestEmail
     *
     * @param string $requestEmail
     *
     * @return BkRequest
     */
    public function setRequestEmail($requestEmail)
    {
        $this->requestEmail = $requestEmail;

        return $this;
    }

    /**
     * Get requestEmail
     *
     * @return string
     */
    public function getRequestEmail()
    {
        return $this->requestEmail;
    }

    /**
     * Set requestAdults
     *
     * @param integer $requestAdults
     *
     * @return BkRequest
     */
    public function setRequestAdults($requestAdults)
    {
        $this->requestAdults = $requestAdults;

        return $this;
    }

    /**
     * Get requestAdults
     *
     * @return integer
     */
    public function getRequestAdults()
    {
        return $this->requestAdults;
    }

    /**
     * Set requestChildren
     *
     * @param integer $requestChildren
     *
     * @return BkRequest
     */
    public function setRequestChildren($requestChildren)
    {
        $this->requestChildren = $requestChildren;

        return $this;
    }

    /**
     * Get requestChildren
     *
     * @return integer
     */
    public function getRequestChildren()
    {
        return $this->requestChildren;
    }

    /**
     * Set requestTel
     *
     * @param string $requestTel
     *
     * @return BkRequest
     */
    public function setRequestTel($requestTel)
    {
        $this->requestTel = $requestTel;

        return $this;
    }

    /**
     * Get requestTel
     *
     * @return string
     */
    public function getRequestTel()
    {
        return $this->requestTel;
    }

    /**
     * Set requestCell
     *
     * @param string $requestCell
     *
     * @return BkRequest
     */
    public function setRequestCell($requestCell)
    {
        $this->requestCell = $requestCell;

        return $this;
    }

    /**
     * Get requestCell
     *
     * @return string
     */
    public function getRequestCell()
    {
        return $this->requestCell;
    }

    /**
     * Set requestOffice
     *
     * @param string $requestOffice
     *
     * @return BkRequest
     */
    public function setRequestOffice($requestOffice)
    {
        $this->requestOffice = $requestOffice;

        return $this;
    }

    /**
     * Get requestOffice
     *
     * @return string
     */
    public function getRequestOffice()
    {
        return $this->requestOffice;
    }

    /**
     * Set requestRepfrom
     *
     * @param string $requestRepfrom
     *
     * @return BkRequest
     */
    public function setRequestRepfrom($requestRepfrom)
    {
        $this->requestRepfrom = $requestRepfrom;

        return $this;
    }

    /**
     * Get requestRepfrom
     *
     * @return string
     */
    public function getRequestRepfrom()
    {
        return $this->requestRepfrom;
    }

    /**
     * Set requestRepto
     *
     * @param string $requestRepto
     *
     * @return BkRequest
     */
    public function setRequestRepto($requestRepto)
    {
        $this->requestRepto = $requestRepto;

        return $this;
    }

    /**
     * Get requestRepto
     *
     * @return string
     */
    public function getRequestRepto()
    {
        return $this->requestRepto;
    }

    /**
     * Set requestOther
     *
     * @param string $requestOther
     *
     * @return BkRequest
     */
    public function setRequestOther($requestOther)
    {
        $this->requestOther = $requestOther;

        return $this;
    }

    /**
     * Get requestOther
     *
     * @return string
     */
    public function getRequestOther()
    {
        return $this->requestOther;
    }

    /**
     * Set requestFcd
     *
     * @param string $requestFcd
     *
     * @return BkRequest
     */
    public function setRequestFcd($requestFcd)
    {
        $this->requestFcd = $requestFcd;

        return $this;
    }

    /**
     * Get requestFcd
     *
     * @return string
     */
    public function getRequestFcd()
    {
        return $this->requestFcd;
    }

    /**
     * Set requestFmt
     *
     * @param string $requestFmt
     *
     * @return BkRequest
     */
    public function setRequestFmt($requestFmt)
    {
        $this->requestFmt = $requestFmt;

        return $this;
    }

    /**
     * Get requestFmt
     *
     * @return string
     */
    public function getRequestFmt()
    {
        return $this->requestFmt;
    }

    /**
     * Set requestMaildest
     *
     * @param string $requestMaildest
     *
     * @return BkRequest
     */
    public function setRequestMaildest($requestMaildest)
    {
        $this->requestMaildest = $requestMaildest;

        return $this;
    }

    /**
     * Get requestMaildest
     *
     * @return string
     */
    public function getRequestMaildest()
    {
        return $this->requestMaildest;
    }

    /**
     * Set requestMailrif
     *
     * @param string $requestMailrif
     *
     * @return BkRequest
     */
    public function setRequestMailrif($requestMailrif)
    {
        $this->requestMailrif = $requestMailrif;

        return $this;
    }

    /**
     * Get requestMailrif
     *
     * @return string
     */
    public function getRequestMailrif()
    {
        return $this->requestMailrif;
    }

    /**
     * Set requestFsu
     *
     * @param string $requestFsu
     *
     * @return BkRequest
     */
    public function setRequestFsu($requestFsu)
    {
        $this->requestFsu = $requestFsu;

        return $this;
    }

    /**
     * Get requestFsu
     *
     * @return string
     */
    public function getRequestFsu()
    {
        return $this->requestFsu;
    }

    /**
     * Set requestPid
     *
     * @param string $requestPid
     *
     * @return BkRequest
     */
    public function setRequestPid($requestPid)
    {
        $this->requestPid = $requestPid;

        return $this;
    }

    /**
     * Get requestPid
     *
     * @return string
     */
    public function getRequestPid()
    {
        return $this->requestPid;
    }

    /**
     * Set requestPacchetonome
     *
     * @param string $requestPacchetonome
     *
     * @return BkRequest
     */
    public function setRequestPacchetonome($requestPacchetonome)
    {
        $this->requestPacchetonome = $requestPacchetonome;

        return $this;
    }

    /**
     * Get requestPacchetonome
     *
     * @return string
     */
    public function getRequestPacchetonome()
    {
        return $this->requestPacchetonome;
    }

    /**
     * Set requestChildrendetails
     *
     * @param string $requestChildrendetails
     *
     * @return BkRequest
     */
    public function setRequestChildrendetails($requestChildrendetails)
    {
        $this->requestChildrendetails = $requestChildrendetails;

        return $this;
    }

    /**
     * Get requestChildrendetails
     *
     * @return string
     */
    public function getRequestChildrendetails()
    {
        return $this->requestChildrendetails;
    }

    /**
     * Set requestAssignedPromotoreId
     *
     * @param integer $requestAssignedPromotoreId
     *
     * @return BkRequest
     */
    public function setRequestAssignedPromotoreId($requestAssignedPromotoreId)
    {
        $this->requestAssignedPromotoreId = $requestAssignedPromotoreId;

        return $this;
    }

    /**
     * Get requestAssignedPromotoreId
     *
     * @return integer
     */
    public function getRequestAssignedPromotoreId()
    {
        return $this->requestAssignedPromotoreId;
    }

    /**
     * Set requestStatus
     *
     * @param string $requestStatus
     *
     * @return BkRequest
     */
    public function setRequestStatus($requestStatus)
    {
        $this->requestStatus = $requestStatus;

        return $this;
    }

    /**
     * Get requestStatus
     *
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    /**
     * Set requestComment
     *
     * @param string $requestComment
     *
     * @return BkRequest
     */
    public function setRequestComment($requestComment)
    {
        $this->requestComment = $requestComment;

        return $this;
    }

    /**
     * Get requestComment
     *
     * @return string
     */
    public function getRequestComment()
    {
        return $this->requestComment;
    }

    /**
     * Set requestDate
     *
     * @param \DateTime $requestDate
     *
     * @return BkRequest
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set requestPrpname
     *
     * @param string $requestPrpname
     *
     * @return BkRequest
     */
    public function setRequestPrpname($requestPrpname)
    {
        $this->requestPrpname = $requestPrpname;

        return $this;
    }

    /**
     * Get requestPrpname
     *
     * @return string
     */
    public function getRequestPrpname()
    {
        return $this->requestPrpname;
    }

    /**
     * Set requestPrpid
     *
     * @param integer $requestPrpid
     *
     * @return BkRequest
     */
    public function setRequestPrpid($requestPrpid)
    {
        $this->requestPrpid = $requestPrpid;

        return $this;
    }

    /**
     * Get requestPrpid
     *
     * @return integer
     */
    public function getRequestPrpid()
    {
        return $this->requestPrpid;
    }

    /**
     * Set requestPrpmail
     *
     * @param string $requestPrpmail
     *
     * @return BkRequest
     */
    public function setRequestPrpmail($requestPrpmail)
    {
        $this->requestPrpmail = $requestPrpmail;

        return $this;
    }

    /**
     * Get requestPrpmail
     *
     * @return string
     */
    public function getRequestPrpmail()
    {
        return $this->requestPrpmail;
    }

    /**
     * Set requestLoggedUsers
     *
     * @param integer $requestLoggedUsers
     *
     * @return BkRequest
     */
    public function setRequestLoggedUsers($requestLoggedUsers)
    {
        $this->requestLoggedUsers = $requestLoggedUsers;

        return $this;
    }

    /**
     * Get requestLoggedUsers
     *
     * @return integer
     */
    public function getRequestLoggedUsers()
    {
        return $this->requestLoggedUsers;
    }

    /**
     * Set requestPromotoreid
     *
     * @param integer $requestPromotoreid
     *
     * @return BkRequest
     */
    public function setRequestPromotoreid($requestPromotoreid)
    {
        $this->requestPromotoreid = $requestPromotoreid;

        return $this;
    }

    /**
     * Get requestPromotoreid
     *
     * @return integer
     */
    public function getRequestPromotoreid()
    {
        return $this->requestPromotoreid;
    }

    /**
     * Set requestTimeLeft
     *
     * @param integer $requestTimeLeft
     *
     * @return BkRequest
     */
    public function setRequestTimeLeft($requestTimeLeft)
    {
        $this->requestTimeLeft = $requestTimeLeft;

        return $this;
    }

    /**
     * Get requestTimeLeft
     *
     * @return integer
     */
    public function getRequestTimeLeft()
    {
        return $this->requestTimeLeft;
    }

    /**
     * Set requestAnagraficaId
     *
     * @param string $requestAnagraficaId
     *
     * @return BkRequest
     */
    public function setRequestAnagraficaId($requestAnagraficaId)
    {
        $this->requestAnagraficaId = $requestAnagraficaId;

        return $this;
    }

    /**
     * Get requestAnagraficaId
     *
     * @return string
     */
    public function getRequestAnagraficaId()
    {
        return $this->requestAnagraficaId;
    }

    /**
     * Set requestAnagraficaPromotoreId
     *
     * @param integer $requestAnagraficaPromotoreId
     *
     * @return BkRequest
     */
    public function setRequestAnagraficaPromotoreId($requestAnagraficaPromotoreId)
    {
        $this->requestAnagraficaPromotoreId = $requestAnagraficaPromotoreId;

        return $this;
    }

    /**
     * Get requestAnagraficaPromotoreId
     *
     * @return integer
     */
    public function getRequestAnagraficaPromotoreId()
    {
        return $this->requestAnagraficaPromotoreId;
    }

    /**
     * Set requestCode
     *
     * @param string $requestCode
     *
     * @return BkRequest
     */
    public function setRequestCode($requestCode)
    {
        $this->requestCode = $requestCode;

        return $this;
    }

    /**
     * Get requestCode
     *
     * @return string
     */
    public function getRequestCode()
    {
        return $this->requestCode;
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
}
