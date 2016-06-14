<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncentiveUsersHistory
 *
 * @ORM\Table(name="incentive_users_history")
 * @ORM\Entity
 */
class IncentiveUsersHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="smallint", nullable=false)
     */
    private $codpromotore = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppo", type="smallint", nullable=false)
     */
    private $gruppo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataSottoscrizione", type="date", nullable=false)
     */
    private $datasottoscrizione = '0000-00-00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="demerito_personale", type="boolean", nullable=false)
     */
    private $demeritoPersonale = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="demerito_gruppo", type="boolean", nullable=false)
     */
    private $demeritoGruppo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_type", type="string", length=50, nullable=false)
     */
    private $operationType;

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
     * @return IncentiveUsersHistory
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
     * @return IncentiveUsersHistory
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
     * @return IncentiveUsersHistory
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
     * @return IncentiveUsersHistory
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
     * @return IncentiveUsersHistory
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
     * @return IncentiveUsersHistory
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return IncentiveUsersHistory
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return IncentiveUsersHistory
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set operationType
     *
     * @param string $operationType
     *
     * @return IncentiveUsersHistory
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * Get operationType
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
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
