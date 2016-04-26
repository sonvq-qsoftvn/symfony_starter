<?php

namespace ET\ETTicketBundle\Entity;

/**
 * PhpCampagne
 */
class PhpCampagne
{
    /**
     * @var string
     */
    private $iduser = '';

    /**
     * @var boolean
     */
    private $language = '0';

    /**
     * @var integer
     */
    private $tipoCampagna = '0';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $clicktotali = '0';

    /**
     * @var integer
     */
    private $clickgg = '0';

    /**
     * @var integer
     */
    private $clicktotaliunici = '0';

    /**
     * @var integer
     */
    private $clickggunici = '0';

    /**
     * @var integer
     */
    private $clickmodifiche = '0';

    /**
     * @var integer
     */
    private $maxclickgg = '0';

    /**
     * @var integer
     */
    private $maxclick = '0';

    /**
     * @var \DateTime
     */
    private $giornoattivazione = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dataInizio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dataFine = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $ggattivita = '0';

    /**
     * @var integer
     */
    private $idcampagna;


    /**
     * Set iduser
     *
     * @param string $iduser
     *
     * @return PhpCampagne
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return string
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set language
     *
     * @param boolean $language
     *
     * @return PhpCampagne
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return boolean
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set tipoCampagna
     *
     * @param integer $tipoCampagna
     *
     * @return PhpCampagne
     */
    public function setTipoCampagna($tipoCampagna)
    {
        $this->tipoCampagna = $tipoCampagna;

        return $this;
    }

    /**
     * Get tipoCampagna
     *
     * @return integer
     */
    public function getTipoCampagna()
    {
        return $this->tipoCampagna;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PhpCampagne
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
     * Set clicktotali
     *
     * @param integer $clicktotali
     *
     * @return PhpCampagne
     */
    public function setClicktotali($clicktotali)
    {
        $this->clicktotali = $clicktotali;

        return $this;
    }

    /**
     * Get clicktotali
     *
     * @return integer
     */
    public function getClicktotali()
    {
        return $this->clicktotali;
    }

    /**
     * Set clickgg
     *
     * @param integer $clickgg
     *
     * @return PhpCampagne
     */
    public function setClickgg($clickgg)
    {
        $this->clickgg = $clickgg;

        return $this;
    }

    /**
     * Get clickgg
     *
     * @return integer
     */
    public function getClickgg()
    {
        return $this->clickgg;
    }

    /**
     * Set clicktotaliunici
     *
     * @param integer $clicktotaliunici
     *
     * @return PhpCampagne
     */
    public function setClicktotaliunici($clicktotaliunici)
    {
        $this->clicktotaliunici = $clicktotaliunici;

        return $this;
    }

    /**
     * Get clicktotaliunici
     *
     * @return integer
     */
    public function getClicktotaliunici()
    {
        return $this->clicktotaliunici;
    }

    /**
     * Set clickggunici
     *
     * @param integer $clickggunici
     *
     * @return PhpCampagne
     */
    public function setClickggunici($clickggunici)
    {
        $this->clickggunici = $clickggunici;

        return $this;
    }

    /**
     * Get clickggunici
     *
     * @return integer
     */
    public function getClickggunici()
    {
        return $this->clickggunici;
    }

    /**
     * Set clickmodifiche
     *
     * @param integer $clickmodifiche
     *
     * @return PhpCampagne
     */
    public function setClickmodifiche($clickmodifiche)
    {
        $this->clickmodifiche = $clickmodifiche;

        return $this;
    }

    /**
     * Get clickmodifiche
     *
     * @return integer
     */
    public function getClickmodifiche()
    {
        return $this->clickmodifiche;
    }

    /**
     * Set maxclickgg
     *
     * @param integer $maxclickgg
     *
     * @return PhpCampagne
     */
    public function setMaxclickgg($maxclickgg)
    {
        $this->maxclickgg = $maxclickgg;

        return $this;
    }

    /**
     * Get maxclickgg
     *
     * @return integer
     */
    public function getMaxclickgg()
    {
        return $this->maxclickgg;
    }

    /**
     * Set maxclick
     *
     * @param integer $maxclick
     *
     * @return PhpCampagne
     */
    public function setMaxclick($maxclick)
    {
        $this->maxclick = $maxclick;

        return $this;
    }

    /**
     * Get maxclick
     *
     * @return integer
     */
    public function getMaxclick()
    {
        return $this->maxclick;
    }

    /**
     * Set giornoattivazione
     *
     * @param \DateTime $giornoattivazione
     *
     * @return PhpCampagne
     */
    public function setGiornoattivazione($giornoattivazione)
    {
        $this->giornoattivazione = $giornoattivazione;

        return $this;
    }

    /**
     * Get giornoattivazione
     *
     * @return \DateTime
     */
    public function getGiornoattivazione()
    {
        return $this->giornoattivazione;
    }

    /**
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     *
     * @return PhpCampagne
     */
    public function setDataInizio($dataInizio)
    {
        $this->dataInizio = $dataInizio;

        return $this;
    }

    /**
     * Get dataInizio
     *
     * @return \DateTime
     */
    public function getDataInizio()
    {
        return $this->dataInizio;
    }

    /**
     * Set dataFine
     *
     * @param \DateTime $dataFine
     *
     * @return PhpCampagne
     */
    public function setDataFine($dataFine)
    {
        $this->dataFine = $dataFine;

        return $this;
    }

    /**
     * Get dataFine
     *
     * @return \DateTime
     */
    public function getDataFine()
    {
        return $this->dataFine;
    }

    /**
     * Set ggattivita
     *
     * @param integer $ggattivita
     *
     * @return PhpCampagne
     */
    public function setGgattivita($ggattivita)
    {
        $this->ggattivita = $ggattivita;

        return $this;
    }

    /**
     * Get ggattivita
     *
     * @return integer
     */
    public function getGgattivita()
    {
        return $this->ggattivita;
    }

    /**
     * Get idcampagna
     *
     * @return integer
     */
    public function getIdcampagna()
    {
        return $this->idcampagna;
    }
}

