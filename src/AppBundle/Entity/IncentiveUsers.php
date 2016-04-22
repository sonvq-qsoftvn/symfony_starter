<?php

namespace AppBundle\Entity;

/**
 * IncentiveUsers
 */
class IncentiveUsers
{
    /**
     * @var integer
     */
    private $gruppo = '0';

    /**
     * @var boolean
     */
    private $tipo = '0';

    /**
     * @var \DateTime
     */
    private $datasottoscrizione = '0000-00-00';

    /**
     * @var boolean
     */
    private $demeritoPersonale = '0';

    /**
     * @var boolean
     */
    private $demeritoGruppo = '0';

    /**
     * @var integer
     */
    private $codpromotore;


    /**
     * Set gruppo
     *
     * @param integer $gruppo
     *
     * @return IncentiveUsers
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
     * @return IncentiveUsers
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
     * Set datasottoscrizione
     *
     * @param \DateTime $datasottoscrizione
     *
     * @return IncentiveUsers
     */
    public function setDatasottoscrizione($datasottoscrizione)
    {
        $this->datasottoscrizione = $datasottoscrizione;

        return $this;
    }

    /**
     * Get datasottoscrizione
     *
     * @return \DateTime
     */
    public function getDatasottoscrizione()
    {
        return $this->datasottoscrizione;
    }

    /**
     * Set demeritoPersonale
     *
     * @param boolean $demeritoPersonale
     *
     * @return IncentiveUsers
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
     * @return IncentiveUsers
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
     * Get codpromotore
     *
     * @return integer
     */
    public function getCodpromotore()
    {
        return $this->codpromotore;
    }
}
