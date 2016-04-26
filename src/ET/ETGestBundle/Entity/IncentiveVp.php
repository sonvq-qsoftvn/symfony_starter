<?php

namespace ET\ETGestBundle\Entity;

/**
 * IncentiveVp
 */
class IncentiveVp
{
    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var integer
     */
    private $gruppo = '0';

    /**
     * @var boolean
     */
    private $tipo;

    /**
     * @var boolean
     */
    private $demeritoPersonale;

    /**
     * @var boolean
     */
    private $demeritoGruppo;

    /**
     * @var string
     */
    private $punti = '0.00';

    /**
     * @var string
     */
    private $fatturato = '0.00';

    /**
     * @var integer
     */
    private $moduli = '0';

    /**
     * @var string
     */
    private $data = '';

    /**
     * @var string
     */
    private $incentiveLocation;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return IncentiveVp
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
     * Set gruppo
     *
     * @param integer $gruppo
     *
     * @return IncentiveVp
     */
    public function setGruppo($gruppo)
    {
        $this->gruppo = $gruppo;

        return $this;
    }

    /**
     * Get gruppo
     *
     * @return integer
     */
    public function getGruppo()
    {
        return $this->gruppo;
    }

    /**
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return IncentiveVp
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set demeritoPersonale
     *
     * @param boolean $demeritoPersonale
     *
     * @return IncentiveVp
     */
    public function setDemeritoPersonale($demeritoPersonale)
    {
        $this->demeritoPersonale = $demeritoPersonale;

        return $this;
    }

    /**
     * Get demeritoPersonale
     *
     * @return boolean
     */
    public function getDemeritoPersonale()
    {
        return $this->demeritoPersonale;
    }

    /**
     * Set demeritoGruppo
     *
     * @param boolean $demeritoGruppo
     *
     * @return IncentiveVp
     */
    public function setDemeritoGruppo($demeritoGruppo)
    {
        $this->demeritoGruppo = $demeritoGruppo;

        return $this;
    }

    /**
     * Get demeritoGruppo
     *
     * @return boolean
     */
    public function getDemeritoGruppo()
    {
        return $this->demeritoGruppo;
    }

    /**
     * Set punti
     *
     * @param string $punti
     *
     * @return IncentiveVp
     */
    public function setPunti($punti)
    {
        $this->punti = $punti;

        return $this;
    }

    /**
     * Get punti
     *
     * @return string
     */
    public function getPunti()
    {
        return $this->punti;
    }

    /**
     * Set fatturato
     *
     * @param string $fatturato
     *
     * @return IncentiveVp
     */
    public function setFatturato($fatturato)
    {
        $this->fatturato = $fatturato;

        return $this;
    }

    /**
     * Get fatturato
     *
     * @return string
     */
    public function getFatturato()
    {
        return $this->fatturato;
    }

    /**
     * Set moduli
     *
     * @param integer $moduli
     *
     * @return IncentiveVp
     */
    public function setModuli($moduli)
    {
        $this->moduli = $moduli;

        return $this;
    }

    /**
     * Get moduli
     *
     * @return integer
     */
    public function getModuli()
    {
        return $this->moduli;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return IncentiveVp
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set incentiveLocation
     *
     * @param string $incentiveLocation
     *
     * @return IncentiveVp
     */
    public function setIncentiveLocation($incentiveLocation)
    {
        $this->incentiveLocation = $incentiveLocation;

        return $this;
    }

    /**
     * Get incentiveLocation
     *
     * @return string
     */
    public function getIncentiveLocation()
    {
        return $this->incentiveLocation;
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

