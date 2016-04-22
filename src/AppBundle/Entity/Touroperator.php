<?php

namespace AppBundle\Entity;

/**
 * Touroperator
 */
class Touroperator
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $codiceAgenzia;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $codpromotorecreazione = '0';

    /**
     * @var integer
     */
    private $codpromotoremodifica = '0';

    /**
     * @var string
     */
    private $agenzia;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Touroperator
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set codiceAgenzia
     *
     * @param string $codiceAgenzia
     *
     * @return Touroperator
     */
    public function setCodiceAgenzia($codiceAgenzia)
    {
        $this->codiceAgenzia = $codiceAgenzia;

        return $this;
    }

    /**
     * Get codiceAgenzia
     *
     * @return string
     */
    public function getCodiceAgenzia()
    {
        return $this->codiceAgenzia;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Touroperator
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Touroperator
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Touroperator
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Touroperator
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
     * Set codpromotorecreazione
     *
     * @param integer $codpromotorecreazione
     *
     * @return Touroperator
     */
    public function setCodpromotorecreazione($codpromotorecreazione)
    {
        $this->codpromotorecreazione = $codpromotorecreazione;

        return $this;
    }

    /**
     * Get codpromotorecreazione
     *
     * @return integer
     */
    public function getCodpromotorecreazione()
    {
        return $this->codpromotorecreazione;
    }

    /**
     * Set codpromotoremodifica
     *
     * @param integer $codpromotoremodifica
     *
     * @return Touroperator
     */
    public function setCodpromotoremodifica($codpromotoremodifica)
    {
        $this->codpromotoremodifica = $codpromotoremodifica;

        return $this;
    }

    /**
     * Get codpromotoremodifica
     *
     * @return integer
     */
    public function getCodpromotoremodifica()
    {
        return $this->codpromotoremodifica;
    }

    /**
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return Touroperator
     */
    public function setAgenzia($agenzia)
    {
        $this->agenzia = $agenzia;

        return $this;
    }

    /**
     * Get agenzia
     *
     * @return string
     */
    public function getAgenzia()
    {
        return $this->agenzia;
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
