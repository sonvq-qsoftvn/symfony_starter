<?php

namespace ET\ETGestBundle\Entity;

/**
 * IncentiveVp2
 */
class IncentiveVp2
{
    /**
     * @var integer
     */
    private $gruppo = '0';

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
    private $data;

    /**
     * @var integer
     */
    private $codpromotore;


    /**
     * Set gruppo
     *
     * @param integer $gruppo
     *
     * @return IncentiveVp2
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
     * Set punti
     *
     * @param string $punti
     *
     * @return IncentiveVp2
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
     * @return IncentiveVp2
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
     * @return IncentiveVp2
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
     * @return IncentiveVp2
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
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return IncentiveVp2
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
}
