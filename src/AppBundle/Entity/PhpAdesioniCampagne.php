<?php

namespace AppBundle\Entity;

/**
 * PhpAdesioniCampagne
 */
class PhpAdesioniCampagne
{
    /**
     * @var \DateTime
     */
    private $datacreazione = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $mittente = '0';

    /**
     * @var integer
     */
    private $destinatario = '0';

    /**
     * @var integer
     */
    private $idtipocampagna = '0';

    /**
     * @var \DateTime
     */
    private $datarisposta = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $idadesione;


    /**
     * Set datacreazione
     *
     * @param \DateTime $datacreazione
     *
     * @return PhpAdesioniCampagne
     */
    public function setDatacreazione($datacreazione)
    {
        $this->datacreazione = $datacreazione;

        return $this;
    }

    /**
     * Get datacreazione
     *
     * @return \DateTime
     */
    public function getDatacreazione()
    {
        return $this->datacreazione;
    }

    /**
     * Set mittente
     *
     * @param integer $mittente
     *
     * @return PhpAdesioniCampagne
     */
    public function setMittente($mittente)
    {
        $this->mittente = $mittente;

        return $this;
    }

    /**
     * Get mittente
     *
     * @return integer
     */
    public function getMittente()
    {
        return $this->mittente;
    }

    /**
     * Set destinatario
     *
     * @param integer $destinatario
     *
     * @return PhpAdesioniCampagne
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return integer
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Set idtipocampagna
     *
     * @param integer $idtipocampagna
     *
     * @return PhpAdesioniCampagne
     */
    public function setIdtipocampagna($idtipocampagna)
    {
        $this->idtipocampagna = $idtipocampagna;

        return $this;
    }

    /**
     * Get idtipocampagna
     *
     * @return integer
     */
    public function getIdtipocampagna()
    {
        return $this->idtipocampagna;
    }

    /**
     * Set datarisposta
     *
     * @param \DateTime $datarisposta
     *
     * @return PhpAdesioniCampagne
     */
    public function setDatarisposta($datarisposta)
    {
        $this->datarisposta = $datarisposta;

        return $this;
    }

    /**
     * Get datarisposta
     *
     * @return \DateTime
     */
    public function getDatarisposta()
    {
        return $this->datarisposta;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return PhpAdesioniCampagne
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
     * Get idadesione
     *
     * @return integer
     */
    public function getIdadesione()
    {
        return $this->idadesione;
    }
}
