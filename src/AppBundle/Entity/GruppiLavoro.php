<?php

namespace AppBundle\Entity;

/**
 * GruppiLavoro
 */
class GruppiLavoro
{
    /**
     * @var string
     */
    private $nomeGruppo = '';

    /**
     * @var integer
     */
    private $leaderGruppo = '0';

    /**
     * @var integer
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
