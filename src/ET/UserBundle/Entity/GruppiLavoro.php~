<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GruppiLavoro
 *
 * @ORM\Table(name="gruppi_lavoro")
 * @ORM\Entity
 */
class GruppiLavoro
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_gruppo", type="string", length=30, nullable=false)
     */
    private $nomeGruppo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="leader_gruppo", type="integer", nullable=false)
     */
    private $leaderGruppo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nomeGruppo
     *
     * @param string $nomeGruppo
     *
     * @return GruppiLavoro
     */
    public function setNomeGruppo($nomeGruppo)
    {
        $this->nomeGruppo = $nomeGruppo;

        return $this;
    }

    /**
     * Get nomeGruppo
     *
     * @return string
     */
    public function getNomeGruppo()
    {
        return $this->nomeGruppo;
    }

    /**
     * Set leaderGruppo
     *
     * @param integer $leaderGruppo
     *
     * @return GruppiLavoro
     */
    public function setLeaderGruppo($leaderGruppo)
    {
        $this->leaderGruppo = $leaderGruppo;

        return $this;
    }

    /**
     * Get leaderGruppo
     *
     * @return integer
     */
    public function getLeaderGruppo()
    {
        return $this->leaderGruppo;
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
