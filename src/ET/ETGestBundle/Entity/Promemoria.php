<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promemoria
 *
 * @ORM\Table(name="promemoria", indexes={@ORM\Index(name="notifica_mail", columns={"notifica_mail"})})
 * @ORM\Entity
 */
class Promemoria
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=false)
     */
    private $datacreazione = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInizio", type="datetime", nullable=false)
     */
    private $datainizio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataFine", type="datetime", nullable=false)
     */
    private $datafine = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=100, nullable=false)
     */
    private $titolo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="testo", type="text", length=65535, nullable=false)
     */
    private $testo;

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer", nullable=false)
     */
    private $codpromotore = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreCreazione", type="integer", nullable=false)
     */
    private $codpromotorecreazione = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tipoDocumento", type="integer", nullable=false)
     */
    private $tipodocumento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="integer", nullable=false)
     */
    private $idViaggio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer", nullable=false)
     */
    private $idModulo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id_anagrafica", type="string", length=18, nullable=false)
     */
    private $idAnagrafica = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tipoPromemoria", type="integer", nullable=false)
     */
    private $tipopromemoria = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataTermine", type="datetime", nullable=true)
     */
    private $datatermine = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notifica_mail", type="boolean", nullable=false)
     */
    private $notificaMail = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pannello", type="string", length=50, nullable=false)
     */
    private $pannello = 'cliente';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataModifica", type="datetime", nullable=true)
     */
    private $datamodifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_promemoria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @param integer $tipodocumento
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
     * @return integer
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
     * @param integer $status
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
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tipopromemoria
     *
     * @param integer $tipopromemoria
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
     * @return integer
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
