<?php

namespace ET\ETGestBundle\Entity;

/**
 * Provvigioni20140704
 */
class Provvigioni20140704
{
    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var string
     */
    private $provvigione = '';

    /**
     * @var integer
     */
    private $idViaggio = '0';

    /**
     * @var integer
     */
    private $idModulo = '0';

    /**
     * @var boolean
     */
    private $tipodocumento = '0';

    /**
     * @var string
     */
    private $importo = '0.00';

    /**
     * @var \DateTime
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $promotoresaldato = '0';

    /**
     * @var \DateTime
     */
    private $datasaldato = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $status = '1';

    /**
     * @var string
     */
    private $agenzia = 'ETIta';

    /**
     * @var boolean
     */
    private $manuale = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return Provvigioni20140704
     */
    public function setCodpromotore($codpromotore)
    {
        $this->codpromotore = $codpromotore;

        return $this;
    }

    /**
     * Get codpromotore
     *
     * @return integer
     */
    public function getCodpromotore()
    {
        return $this->codpromotore;
    }

    /**
     * Set provvigione
     *
     * @param string $provvigione
     *
     * @return Provvigioni20140704
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
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return Provvigioni20140704
     */
    public function setIdViaggio($idViaggio)
    {
        $this->idViaggio = $idViaggio;

        return $this;
    }

    /**
     * Get idViaggio
     *
     * @return integer
     */
    public function getIdViaggio()
    {
        return $this->idViaggio;
    }

    /**
     * Set idModulo
     *
     * @param integer $idModulo
     *
     * @return Provvigioni20140704
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return integer
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set tipodocumento
     *
     * @param boolean $tipodocumento
     *
     * @return Provvigioni20140704
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return boolean
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set importo
     *
     * @param string $importo
     *
     * @return Provvigioni20140704
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;

        return $this;
    }

    /**
     * Get importo
     *
     * @return string
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Provvigioni20140704
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set promotoresaldato
     *
     * @param integer $promotoresaldato
     *
     * @return Provvigioni20140704
     */
    public function setPromotoresaldato($promotoresaldato)
    {
        $this->promotoresaldato = $promotoresaldato;

        return $this;
    }

    /**
     * Get promotoresaldato
     *
     * @return integer
     */
    public function getPromotoresaldato()
    {
        return $this->promotoresaldato;
    }

    /**
     * Set datasaldato
     *
     * @param \DateTime $datasaldato
     *
     * @return Provvigioni20140704
     */
    public function setDatasaldato($datasaldato)
    {
        $this->datasaldato = $datasaldato;

        return $this;
    }

    /**
     * Get datasaldato
     *
     * @return \DateTime
     */
    public function getDatasaldato()
    {
        return $this->datasaldato;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Provvigioni20140704
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return Provvigioni20140704
     */
    public function setAgenzia($agenzia)
    {
        $this->agenzia = $agenzia;

        return $this;
    }

    /**
     * Get agenzia
     *
     * @return string
     */
    public function getAgenzia()
    {
        return $this->agenzia;
    }

    /**
     * Set manuale
     *
     * @param boolean $manuale
     *
     * @return Provvigioni20140704
     */
    public function setManuale($manuale)
    {
        $this->manuale = $manuale;

        return $this;
    }

    /**
     * Get manuale
     *
     * @return boolean
     */
    public function getManuale()
    {
        return $this->manuale;
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

