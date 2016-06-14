<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncentiveUsers
 *
 * @ORM\Table(name="incentive_users", indexes={@ORM\Index(name="cpp", columns={"gruppo"}), @ORM\Index(name="dataSottoscrizione", columns={"dataSottoscrizione"})})
 * @ORM\Entity
 */
class IncentiveUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gruppo", type="integer", nullable=false)
     */
    private $gruppo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataSottoscrizione", type="date", nullable=false)
     */
    private $datasottoscrizione = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="demerito_personale", type="integer", nullable=false)
     */
    private $demeritoPersonale = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="demerito_gruppo", type="integer", nullable=false)
     */
    private $demeritoGruppo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @param integer $tipo
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
     * @return integer
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
     * @param integer $demeritoPersonale
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
     * @return integer
     */
    public function getDemeritoPersonale()
    {
        return $this->demeritoPersonale;
    }

    /**
     * Set demeritoGruppo
     *
     * @param integer $demeritoGruppo
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
     * @return integer
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
