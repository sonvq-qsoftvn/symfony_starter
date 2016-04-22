<?php

namespace AppBundle\Entity;

/**
 * Request
 */
class Request
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
    private $requestLinkedRequestId = '0';

    /**
     * @var boolean
     */
    private $requestCanLink = '0';

    /**
     * @var integer
     */
    private $requestCampagna = '0';

    /**
     * @var \DateTime
     */
    private $requestDateAssignedPromotore;

    /**
     * @var string
     */
    private $requestLingua;

    /**
     * @var string
     */
    private $requestAgenzia = 'ETita';

    /**
     * @var string
     */
    private $requestDominioPromotore;

    /**
     * @var boolean
     */
    private $requestNewsletter;

    /**
     * @var string
     */
    private $requestCountry;

    /**
     * @var integer
     */
    private $requestId;


    /**
     * Set requestPackage
     *
     * @param string $requestPackage
     *
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * @return Request
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
     * Set requestLinkedRequestId
     *
     * @param integer $requestLinkedRequestId
     *
     * @return Request
     */
    public function setRequestLinkedRequestId($requestLinkedRequestId)
    {
        $this->requestLinkedRequestId = $requestLinkedRequestId;

        return $this;
    }

    /**
     * Get requestLinkedRequestId
     *
     * @return integer
     */
    public function getRequestLinkedRequestId()
    {
        return $this->requestLinkedRequestId;
    }

    /**
     * Set requestCanLink
     *
     * @param boolean $requestCanLink
     *
     * @return Request
     */
    public function setRequestCanLink($requestCanLink)
    {
        $this->requestCanLink = $requestCanLink;

        return $this;
    }

    /**
     * Get requestCanLink
     *
     * @return boolean
     */
    public function getRequestCanLink()
    {
        return $this->requestCanLink;
    }

    /**
     * Set requestCampagna
     *
     * @param integer $requestCampagna
     *
     * @return Request
     */
    public function setRequestCampagna($requestCampagna)
    {
        $this->requestCampagna = $requestCampagna;

        return $this;
    }

    /**
     * Get requestCampagna
     *
     * @return integer
     */
    public function getRequestCampagna()
    {
        return $this->requestCampagna;
    }

    /**
     * Set requestDateAssignedPromotore
     *
     * @param \DateTime $requestDateAssignedPromotore
     *
     * @return Request
     */
    public function setRequestDateAssignedPromotore($requestDateAssignedPromotore)
    {
        $this->requestDateAssignedPromotore = $requestDateAssignedPromotore;

        return $this;
    }

    /**
     * Get requestDateAssignedPromotore
     *
     * @return \DateTime
     */
    public function getRequestDateAssignedPromotore()
    {
        return $this->requestDateAssignedPromotore;
    }

    /**
     * Set requestLingua
     *
     * @param string $requestLingua
     *
     * @return Request
     */
    public function setRequestLingua($requestLingua)
    {
        $this->requestLingua = $requestLingua;

        return $this;
    }

    /**
     * Get requestLingua
     *
     * @return string
     */
    public function getRequestLingua()
    {
        return $this->requestLingua;
    }

    /**
     * Set requestAgenzia
     *
     * @param string $requestAgenzia
     *
     * @return Request
     */
    public function setRequestAgenzia($requestAgenzia)
    {
        $this->requestAgenzia = $requestAgenzia;

        return $this;
    }

    /**
     * Get requestAgenzia
     *
     * @return string
     */
    public function getRequestAgenzia()
    {
        return $this->requestAgenzia;
    }

    /**
     * Set requestDominioPromotore
     *
     * @param string $requestDominioPromotore
     *
     * @return Request
     */
    public function setRequestDominioPromotore($requestDominioPromotore)
    {
        $this->requestDominioPromotore = $requestDominioPromotore;

        return $this;
    }

    /**
     * Get requestDominioPromotore
     *
     * @return string
     */
    public function getRequestDominioPromotore()
    {
        return $this->requestDominioPromotore;
    }

    /**
     * Set requestNewsletter
     *
     * @param boolean $requestNewsletter
     *
     * @return Request
     */
    public function setRequestNewsletter($requestNewsletter)
    {
        $this->requestNewsletter = $requestNewsletter;

        return $this;
    }

    /**
     * Get requestNewsletter
     *
     * @return boolean
     */
    public function getRequestNewsletter()
    {
        return $this->requestNewsletter;
    }

    /**
     * Set requestCountry
     *
     * @param string $requestCountry
     *
     * @return Request
     */
    public function setRequestCountry($requestCountry)
    {
        $this->requestCountry = $requestCountry;

        return $this;
    }

    /**
     * Get requestCountry
     *
     * @return string
     */
    public function getRequestCountry()
    {
        return $this->requestCountry;
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
