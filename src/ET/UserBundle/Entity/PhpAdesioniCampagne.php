<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpAdesioniCampagne
 *
 * @ORM\Table(name="php_adesioni_campagne", indexes={@ORM\Index(name="mittente", columns={"mittente"}), @ORM\Index(name="destinatario", columns={"destinatario"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="idTipoCampagna", columns={"idTipoCampagna"})})
 * @ORM\Entity
 */
class PhpAdesioniCampagne
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=false)
     */
    private $datacreazione = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="mittente", type="integer", nullable=false)
     */
    private $mittente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="destinatario", type="integer", nullable=false)
     */
    private $destinatario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoCampagna", type="smallint", nullable=false)
     */
    private $idtipocampagna = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataRisposta", type="datetime", nullable=false)
     */
    private $datarisposta = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idAdesione", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
