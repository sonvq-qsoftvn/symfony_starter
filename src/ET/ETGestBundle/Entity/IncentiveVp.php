<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncentiveVp
 *
 * @ORM\Table(name="incentive_vp", indexes={@ORM\Index(name="gruppo", columns={"gruppo"}), @ORM\Index(name="data", columns={"data"})})
 * @ORM\Entity
 */
class IncentiveVp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer", nullable=false)
     */
    private $codpromotore = '0';

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
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="demerito_personale", type="integer", nullable=false)
     */
    private $demeritoPersonale;

    /**
     * @var integer
     *
     * @ORM\Column(name="demerito_gruppo", type="integer", nullable=false)
     */
    private $demeritoGruppo;

    /**
     * @var string
     *
     * @ORM\Column(name="punti", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $punti = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="fatturato", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $fatturato = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="moduli", type="smallint", nullable=false)
     */
    private $moduli = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=6, nullable=false)
     */
    private $data = '';

    /**
     * @var string
     *
     * @ORM\Column(name="incentive_location", type="string", length=7, nullable=true)
     */
    private $incentiveLocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @param integer $tipo
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
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set demeritoPersonale
     *
     * @param integer $demeritoPersonale
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
     * @return integer
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
