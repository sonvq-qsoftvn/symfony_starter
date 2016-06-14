<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsiPartecipanti
 *
 * @ORM\Table(name="corsi_partecipanti", indexes={@ORM\Index(name="dataIscrizione", columns={"dataIscrizione"}), @ORM\Index(name="statoIscrizione", columns={"statoIscrizione"}), @ORM\Index(name="idCorso", columns={"idCorso"})})
 * @ORM\Entity
 */
class CorsiPartecipanti
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataIscrizione", type="datetime", nullable=false)
     */
    private $dataiscrizione = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="statoIscrizione", type="string", length=10, nullable=false)
     */
    private $statoiscrizione = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="posti", type="boolean", nullable=false)
     */
    private $posti = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="partecipanti", type="text", length=65535, nullable=false)
     */
    private $partecipanti;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", length=65535, nullable=false)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPartecipante", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpartecipante;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCorso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcorso;



    /**
     * Set dataiscrizione
     *
     * @param \DateTime $dataiscrizione
     *
     * @return CorsiPartecipanti
     */
    public function setDataiscrizione($dataiscrizione)
    {
        $this->dataiscrizione = $dataiscrizione;

        return $this;
    }

    /**
     * Get dataiscrizione
     *
     * @return \DateTime
     */
    public function getDataiscrizione()
    {
        return $this->dataiscrizione;
    }

    /**
     * Set statoiscrizione
     *
     * @param string $statoiscrizione
     *
     * @return CorsiPartecipanti
     */
    public function setStatoiscrizione($statoiscrizione)
    {
        $this->statoiscrizione = $statoiscrizione;

        return $this;
    }

    /**
     * Get statoiscrizione
     *
     * @return string
     */
    public function getStatoiscrizione()
    {
        return $this->statoiscrizione;
    }

    /**
     * Set posti
     *
     * @param boolean $posti
     *
     * @return CorsiPartecipanti
     */
    public function setPosti($posti)
    {
        $this->posti = $posti;

        return $this;
    }

    /**
     * Get posti
     *
     * @return boolean
     */
    public function getPosti()
    {
        return $this->posti;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return CorsiPartecipanti
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set partecipanti
     *
     * @param string $partecipanti
     *
     * @return CorsiPartecipanti
     */
    public function setPartecipanti($partecipanti)
    {
        $this->partecipanti = $partecipanti;

        return $this;
    }

    /**
     * Get partecipanti
     *
     * @return string
     */
    public function getPartecipanti()
    {
        return $this->partecipanti;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     *
     * @return CorsiPartecipanti
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
     * Set idpartecipante
     *
     * @param integer $idpartecipante
     *
     * @return CorsiPartecipanti
     */
    public function setIdpartecipante($idpartecipante)
    {
        $this->idpartecipante = $idpartecipante;

        return $this;
    }

    /**
     * Get idpartecipante
     *
     * @return integer
     */
    public function getIdpartecipante()
    {
        return $this->idpartecipante;
    }

    /**
     * Set idcorso
     *
     * @param integer $idcorso
     *
     * @return CorsiPartecipanti
     */
    public function setIdcorso($idcorso)
    {
        $this->idcorso = $idcorso;

        return $this;
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
