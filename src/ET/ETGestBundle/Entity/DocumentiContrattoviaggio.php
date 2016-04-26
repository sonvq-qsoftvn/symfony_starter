<?php

namespace ET\ETGestBundle\Entity;

/**
 * DocumentiContrattoviaggio
 */
class DocumentiContrattoviaggio
{
    /**
     * @var string
     */
    private $acconto = '0.00';

    /**
     * @var \DateTime
     */
    private $accontodata;

    /**
     * @var string
     */
    private $saldo = '0.00';

    /**
     * @var \DateTime
     */
    private $saldodata;

    /**
     * @var string
     */
    private $documentiNote;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $partenzaLuogo;

    /**
     * @var string
     */
    private $ritornoLuogo;

    /**
     * @var string
     */
    private $denominazione;

    /**
     * @var boolean
     */
    private $saldato = '0';

    /**
     * @var string
     */
    private $regime;

    /**
     * @var integer
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

