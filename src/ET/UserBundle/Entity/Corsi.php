<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corsi
 *
 * @ORM\Table(name="corsi", indexes={@ORM\Index(name="idCorsiTipo", columns={"idCorsiTipo"}), @ORM\Index(name="proprietario", columns={"proprietario"}), @ORM\Index(name="stato", columns={"stato"}), @ORM\Index(name="dataCorso", columns={"data"})})
 * @ORM\Entity
 */
class Corsi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCorsiTipo", type="smallint", nullable=false)
     */
    private $idcorsitipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="proprietario", type="smallint", nullable=false)
     */
    private $proprietario = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataFine", type="datetime", nullable=false)
     */
    private $datafine;

    /**
     * @var string
     *
     * @ORM\Column(name="luogo", type="string", length=50, nullable=false)
     */
    private $luogo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="limite", type="smallint", nullable=false)
     */
    private $limite = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="postiMinimi", type="smallint", nullable=false)
     */
    private $postiminimi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="collaboratori", type="string", length=200, nullable=false)
     */
    private $collaboratori = '';

    /**
     * @var string
     *
     * @ORM\Column(name="durata", type="string", length=50, nullable=false)
     */
    private $durata = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descrizioneAgg", type="string", length=200, nullable=false)
     */
    private $descrizioneagg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="programma", type="text", length=65535, nullable=false)
     */
    private $programma;

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=10, nullable=false)
     */
    private $stato = '';

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", length=65535, nullable=false)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="punteggio", type="smallint", nullable=false)
     */
    private $punteggio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idCorso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorso;



    /**
     * Set idcorsitipo
     *
     * @param integer $idcorsitipo
     *
     * @return Corsi
     */
    public function setIdcorsitipo($idcorsitipo)
    {
        $this->idcorsitipo = $idcorsitipo;

        return $this;
    }

    /**
     * Get idcorsitipo
     *
     * @return integer
     */
    public function getIdcorsitipo()
    {
        return $this->idcorsitipo;
    }

    /**
     * Set proprietario
     *
     * @param integer $proprietario
     *
     * @return Corsi
     */
    public function setProprietario($proprietario)
    {
        $this->proprietario = $proprietario;

        return $this;
    }

    /**
     * Get proprietario
     *
     * @return integer
     */
    public function getProprietario()
    {
        return $this->proprietario;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Corsi
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set datafine
     *
     * @param \DateTime $datafine
     *
     * @return Corsi
     */
    public function setDatafine($datafine)
    {
        $this->datafine = $datafine;

        return $this;
    }

    /**
     * Get datafine
     *
     * @return \DateTime
     */
    public function getDatafine()
    {
        return $this->datafine;
    }

    /**
     * Set luogo
     *
     * @param string $luogo
     *
     * @return Corsi
     */
    public function setLuogo($luogo)
    {
        $this->luogo = $luogo;

        return $this;
    }

    /**
     * Get luogo
     *
     * @return string
     */
    public function getLuogo()
    {
        return $this->luogo;
    }

    /**
     * Set limite
     *
     * @param integer $limite
     *
     * @return Corsi
     */
    public function setLimite($limite)
    {
        $this->limite = $limite;

        return $this;
    }

    /**
     * Get limite
     *
     * @return integer
     */
    public function getLimite()
    {
        return $this->limite;
    }

    /**
     * Set postiminimi
     *
     * @param integer $postiminimi
     *
     * @return Corsi
     */
    public function setPostiminimi($postiminimi)
    {
        $this->postiminimi = $postiminimi;

        return $this;
    }

    /**
     * Get postiminimi
     *
     * @return integer
     */
    public function getPostiminimi()
    {
        return $this->postiminimi;
    }

    /**
     * Set collaboratori
     *
     * @param string $collaboratori
     *
     * @return Corsi
     */
    public function setCollaboratori($collaboratori)
    {
        $this->collaboratori = $collaboratori;

        return $this;
    }

    /**
     * Get collaboratori
     *
     * @return string
     */
    public function getCollaboratori()
    {
        return $this->collaboratori;
    }

    /**
     * Set durata
     *
     * @param string $durata
     *
     * @return Corsi
     */
    public function setDurata($durata)
    {
        $this->durata = $durata;

        return $this;
    }

    /**
     * Get durata
     *
     * @return string
     */
    public function getDurata()
    {
        return $this->durata;
    }

    /**
     * Set descrizioneagg
     *
     * @param string $descrizioneagg
     *
     * @return Corsi
     */
    public function setDescrizioneagg($descrizioneagg)
    {
        $this->descrizioneagg = $descrizioneagg;

        return $this;
    }

    /**
     * Get descrizioneagg
     *
     * @return string
     */
    public function getDescrizioneagg()
    {
        return $this->descrizioneagg;
    }

    /**
     * Set programma
     *
     * @param string $programma
     *
     * @return Corsi
     */
    public function setProgramma($programma)
    {
        $this->programma = $programma;

        return $this;
    }

    /**
     * Get programma
     *
     * @return string
     */
    public function getProgramma()
    {
        return $this->programma;
    }

    /**
     * Set stato
     *
     * @param string $stato
     *
     * @return Corsi
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return string
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     *
     * @return Corsi
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set punteggio
     *
     * @param integer $punteggio
     *
     * @return Corsi
     */
    public function setPunteggio($punteggio)
    {
        $this->punteggio = $punteggio;

        return $this;
    }

    /**
     * Get punteggio
     *
     * @return integer
     */
    public function getPunteggio()
    {
        return $this->punteggio;
    }

    /**
     * Get idcorso
     *
     * @return integer
     */
    public function getIdcorso()
    {
        return $this->idcorso;
    }
}
