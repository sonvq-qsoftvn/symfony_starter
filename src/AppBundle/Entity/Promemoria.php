<?php

namespace AppBundle\Entity;

/**
 * Promemoria
 */
class Promemoria
{
    /**
     * @var \DateTime
     */
    private $datacreazione = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $datainizio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $datafine = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $titolo = '';

    /**
     * @var string
     */
    private $testo;

    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var integer
     */
    private $codpromotorecreazione = '0';

    /**
     * @var boolean
     */
    private $tipodocumento = '0';

    /**
     * @var integer
     */
    private $idViaggio = '0';

    /**
     * @var integer
     */
    private $idModulo = '0';

    /**
     * @var string
     */
    private $idAnagrafica = '';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var boolean
     */
    private $tipopromemoria = '0';

    /**
     * @var \DateTime
     */
    private $datatermine = '0000-00-00 00:00:00';

    /**
     * @var boolean
     */
    private $notificaMail = '0';

    /**
     * @var string
     */
    private $pannello = 'cliente';

    /**
     * @var \DateTime
     */
    private $datamodifica;

    /**
     * @var integer
     */
    private $idPromemoria;


    /**
     * Set datacreazione
     *
     * @param \DateTime $datacreazione
     *
     * @return Promemoria
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
     * Set datainizio
     *
     * @param \DateTime $datainizio
     *
     * @return Promemoria
     */
    public function setDatainizio($datainizio)
    {
        $this->datainizio = $datainizio;

        return $this;
    }

    /**
     * Get datainizio
     *
     * @return \DateTime
     */
    public function getDatainizio()
    {
        return $this->datainizio;
    }

    /**
     * Set datafine
     *
     * @param \DateTime $datafine
     *
     * @return Promemoria
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
     * Set titolo
     *
     * @param string $titolo
     *
     * @return Promemoria
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return Promemoria
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return Promemoria
     */
    public function setCodpromotore($codpromotore)
    {
        $this->codpromotore = $codpromotore;

        return $this;
    }

    /**
     * Get codpromotore
     *
     * @return integer
     */
    public function getCodpromotore()
    {
        return $this->codpromotore;
    }

    /**
     * Set codpromotorecreazione
     *
     * @param integer $codpromotorecreazione
     *
     * @return Promemoria
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
     * Set tipodocumento
     *
     * @param boolean $tipodocumento
     *
     * @return Promemoria
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return boolean
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return Promemoria
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
     * Set idModulo
     *
     * @param integer $idModulo
     *
     * @return Promemoria
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return integer
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set idAnagrafica
     *
     * @param string $idAnagrafica
     *
     * @return Promemoria
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
     * Set status
     *
     * @param boolean $status
     *
     * @return Promemoria
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tipopromemoria
     *
     * @param boolean $tipopromemoria
     *
     * @return Promemoria
     */
    public function setTipopromemoria($tipopromemoria)
    {
        $this->tipopromemoria = $tipopromemoria;

        return $this;
    }

    /**
     * Get tipopromemoria
     *
     * @return boolean
     */
    public function getTipopromemoria()
    {
        return $this->tipopromemoria;
    }

    /**
     * Set datatermine
     *
     * @param \DateTime $datatermine
     *
     * @return Promemoria
     */
    public function setDatatermine($datatermine)
    {
        $this->datatermine = $datatermine;

        return $this;
    }

    /**
     * Get datatermine
     *
     * @return \DateTime
     */
    public function getDatatermine()
    {
        return $this->datatermine;
    }

    /**
     * Set notificaMail
     *
     * @param boolean $notificaMail
     *
     * @return Promemoria
     */
    public function setNotificaMail($notificaMail)
    {
        $this->notificaMail = $notificaMail;

        return $this;
    }

    /**
     * Get notificaMail
     *
     * @return boolean
     */
    public function getNotificaMail()
    {
        return $this->notificaMail;
    }

    /**
     * Set pannello
     *
     * @param string $pannello
     *
     * @return Promemoria
     */
    public function setPannello($pannello)
    {
        $this->pannello = $pannello;

        return $this;
    }

    /**
     * Get pannello
     *
     * @return string
     */
    public function getPannello()
    {
        return $this->pannello;
    }

    /**
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return Promemoria
     */
    public function setDatamodifica($datamodifica)
    {
        $this->datamodifica = $datamodifica;

        return $this;
    }

    /**
     * Get datamodifica
     *
     * @return \DateTime
     */
    public function getDatamodifica()
    {
        return $this->datamodifica;
    }

    /**
     * Get idPromemoria
     *
     * @return integer
     */
    public function getIdPromemoria()
    {
        return $this->idPromemoria;
    }
}
