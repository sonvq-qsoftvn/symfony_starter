<?php

namespace AppBundle\Entity;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var integer
     */
    private $idTicket = '0';

    /**
     * @var integer
     */
    private $idPromotore = '0';

    /**
     * @var string
     */
    private $idAnagrafica = '';

    /**
     * @var integer
     */
    private $idViaggio = '0';

    /**
     * @var string
     */
    private $tipoRiferimento = 'ticket';

    /**
     * @var integer
     */
    private $riferimento;

    /**
     * @var \DateTime
     */
    private $dataCreazione = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idTicket
     *
     * @param integer $idTicket
     *
     * @return Ticket
     */
    public function setIdTicket($idTicket)
    {
        $this->idTicket = $idTicket;

        return $this;
    }

    /**
     * Get idTicket
     *
     * @return integer
     */
    public function getIdTicket()
    {
        return $this->idTicket;
    }

    /**
     * Set idPromotore
     *
     * @param integer $idPromotore
     *
     * @return Ticket
     */
    public function setIdPromotore($idPromotore)
    {
        $this->idPromotore = $idPromotore;

        return $this;
    }

    /**
     * Get idPromotore
     *
     * @return integer
     */
    public function getIdPromotore()
    {
        return $this->idPromotore;
    }

    /**
     * Set idAnagrafica
     *
     * @param string $idAnagrafica
     *
     * @return Ticket
     */
    public function setIdAnagrafica($idAnagrafica)
    {
        $this->idAnagrafica = $idAnagrafica;

        return $this;
    }

    /**
     * Get idAnagrafica
     *
     * @return string
     */
    public function getIdAnagrafica()
    {
        return $this->idAnagrafica;
    }

    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return Ticket
     */
    public function setIdViaggio($idViaggio)
    {
        $this->idViaggio = $idViaggio;

        return $this;
    }

    /**
     * Get idViaggio
     *
     * @return integer
     */
    public function getIdViaggio()
    {
        return $this->idViaggio;
    }

    /**
     * Set tipoRiferimento
     *
     * @param string $tipoRiferimento
     *
     * @return Ticket
     */
    public function setTipoRiferimento($tipoRiferimento)
    {
        $this->tipoRiferimento = $tipoRiferimento;

        return $this;
    }

    /**
     * Get tipoRiferimento
     *
     * @return string
     */
    public function getTipoRiferimento()
    {
        return $this->tipoRiferimento;
    }

    /**
     * Set riferimento
     *
     * @param integer $riferimento
     *
     * @return Ticket
     */
    public function setRiferimento($riferimento)
    {
        $this->riferimento = $riferimento;

        return $this;
    }

    /**
     * Get riferimento
     *
     * @return integer
     */
    public function getRiferimento()
    {
        return $this->riferimento;
    }

    /**
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return Ticket
     */
    public function setDataCreazione($dataCreazione)
    {
        $this->dataCreazione = $dataCreazione;

        return $this;
    }

    /**
     * Get dataCreazione
     *
     * @return \DateTime
     */
    public function getDataCreazione()
    {
        return $this->dataCreazione;
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
