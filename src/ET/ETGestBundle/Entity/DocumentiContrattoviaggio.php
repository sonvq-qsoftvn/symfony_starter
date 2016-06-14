<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentiContrattoviaggio
 *
 * @ORM\Table(name="documenti_contrattoviaggio")
 * @ORM\Entity
 */
class DocumentiContrattoviaggio
{
    /**
     * @var string
     *
     * @ORM\Column(name="acconto", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $acconto = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="accontoData", type="date", nullable=true)
     */
    private $accontodata;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $saldo = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saldoData", type="date", nullable=true)
     */
    private $saldodata;

    /**
     * @var string
     *
     * @ORM\Column(name="documenti_note", type="text", length=65535, nullable=true)
     */
    private $documentiNote;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="partenza_luogo", type="string", length=50, nullable=true)
     */
    private $partenzaLuogo;

    /**
     * @var string
     *
     * @ORM\Column(name="ritorno_luogo", type="string", length=50, nullable=true)
     */
    private $ritornoLuogo;

    /**
     * @var string
     *
     * @ORM\Column(name="denominazione", type="string", length=255, nullable=true)
     */
    private $denominazione;

    /**
     * @var boolean
     *
     * @ORM\Column(name="saldato", type="boolean", nullable=false)
     */
    private $saldato = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="regime", type="string", length=255, nullable=true)
     */
    private $regime;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set acconto
     *
     * @param string $acconto
     *
     * @return DocumentiContrattoviaggio
     */
    public function setAcconto($acconto)
    {
        $this->acconto = $acconto;

        return $this;
    }

    /**
     * Get acconto
     *
     * @return string
     */
    public function getAcconto()
    {
        return $this->acconto;
    }

    /**
     * Set accontodata
     *
     * @param \DateTime $accontodata
     *
     * @return DocumentiContrattoviaggio
     */
    public function setAccontodata($accontodata)
    {
        $this->accontodata = $accontodata;

        return $this;
    }

    /**
     * Get accontodata
     *
     * @return \DateTime
     */
    public function getAccontodata()
    {
        return $this->accontodata;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     *
     * @return DocumentiContrattoviaggio
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set saldodata
     *
     * @param \DateTime $saldodata
     *
     * @return DocumentiContrattoviaggio
     */
    public function setSaldodata($saldodata)
    {
        $this->saldodata = $saldodata;

        return $this;
    }

    /**
     * Get saldodata
     *
     * @return \DateTime
     */
    public function getSaldodata()
    {
        return $this->saldodata;
    }

    /**
     * Set documentiNote
     *
     * @param string $documentiNote
     *
     * @return DocumentiContrattoviaggio
     */
    public function setDocumentiNote($documentiNote)
    {
        $this->documentiNote = $documentiNote;

        return $this;
    }

    /**
     * Get documentiNote
     *
     * @return string
     */
    public function getDocumentiNote()
    {
        return $this->documentiNote;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return DocumentiContrattoviaggio
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
     * Set partenzaLuogo
     *
     * @param string $partenzaLuogo
     *
     * @return DocumentiContrattoviaggio
     */
    public function setPartenzaLuogo($partenzaLuogo)
    {
        $this->partenzaLuogo = $partenzaLuogo;

        return $this;
    }

    /**
     * Get partenzaLuogo
     *
     * @return string
     */
    public function getPartenzaLuogo()
    {
        return $this->partenzaLuogo;
    }

    /**
     * Set ritornoLuogo
     *
     * @param string $ritornoLuogo
     *
     * @return DocumentiContrattoviaggio
     */
    public function setRitornoLuogo($ritornoLuogo)
    {
        $this->ritornoLuogo = $ritornoLuogo;

        return $this;
    }

    /**
     * Get ritornoLuogo
     *
     * @return string
     */
    public function getRitornoLuogo()
    {
        return $this->ritornoLuogo;
    }

    /**
     * Set denominazione
     *
     * @param string $denominazione
     *
     * @return DocumentiContrattoviaggio
     */
    public function setDenominazione($denominazione)
    {
        $this->denominazione = $denominazione;

        return $this;
    }

    /**
     * Get denominazione
     *
     * @return string
     */
    public function getDenominazione()
    {
        return $this->denominazione;
    }

    /**
     * Set saldato
     *
     * @param boolean $saldato
     *
     * @return DocumentiContrattoviaggio
     */
    public function setSaldato($saldato)
    {
        $this->saldato = $saldato;

        return $this;
    }

    /**
     * Get saldato
     *
     * @return boolean
     */
    public function getSaldato()
    {
        return $this->saldato;
    }

    /**
     * Set regime
     *
     * @param string $regime
     *
     * @return DocumentiContrattoviaggio
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return string
     */
    public function getRegime()
    {
        return $this->regime;
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
