<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuloContrattoMail
 *
 * @ORM\Table(name="modulo_contratto_mail", indexes={@ORM\Index(name="id_viaggio", columns={"id_viaggio"}), @ORM\Index(name="data", columns={"data"}), @ORM\Index(name="booking_stato", columns={"booking_stato"}), @ORM\Index(name="ec_stato", columns={"ec_stato"}), @ORM\Index(name="tipoDocumento", columns={"tipoDocumento", "booking_stato"})})
 * @ORM\Entity
 */
class ModuloContrattoMail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="integer", nullable=false)
     */
    private $idViaggio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data = '0000-00-00 00:00:00';

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
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=200, nullable=false)
     */
    private $titolo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text", length=16777215, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoDocumento", type="integer", nullable=false)
     */
    private $tipodocumento = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="documentiAggregati", type="boolean", nullable=false)
     */
    private $documentiaggregati = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataModifica", type="datetime", nullable=false)
     */
    private $datamodifica = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreModifica", type="integer", nullable=false)
     */
    private $codpromotoremodifica = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="booking_stato", type="boolean", nullable=false)
     */
    private $bookingStato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="booking_codPromotoreStato", type="integer", nullable=false)
     */
    private $bookingCodpromotorestato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="booking_codPromotoreLavorazione", type="integer", nullable=false)
     */
    private $bookingCodpromotorelavorazione = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="booking_letto", type="boolean", nullable=false)
     */
    private $bookingLetto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ec_stato", type="boolean", nullable=false)
     */
    private $ecStato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ec_codPromotoreStato", type="integer", nullable=false)
     */
    private $ecCodpromotorestato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ec_codPromotoreLavorazione", type="integer", nullable=false)
     */
    private $ecCodpromotorelavorazione = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInvio", type="datetime", nullable=true)
     */
    private $datainvio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ec_letto", type="boolean", nullable=false)
     */
    private $ecLetto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulo;



    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return ModuloContrattoMail
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return ModuloContrattoMail
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
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return ModuloContrattoMail
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
     * @return ModuloContrattoMail
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
     * Set titolo
     *
     * @param string $titolo
     *
     * @return ModuloContrattoMail
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
     * Set nota
     *
     * @param string $nota
     *
     * @return ModuloContrattoMail
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set tipodocumento
     *
     * @param boolean $tipodocumento
     *
     * @return ModuloContrattoMail
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
     * Set documentiaggregati
     *
     * @param boolean $documentiaggregati
     *
     * @return ModuloContrattoMail
     */
    public function setDocumentiaggregati($documentiaggregati)
    {
        $this->documentiaggregati = $documentiaggregati;

        return $this;
    }

    /**
     * Get documentiaggregati
     *
     * @return boolean
     */
    public function getDocumentiaggregati()
    {
        return $this->documentiaggregati;
    }

    /**
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return ModuloContrattoMail
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
     * Set codpromotoremodifica
     *
     * @param integer $codpromotoremodifica
     *
     * @return ModuloContrattoMail
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
     * Set bookingStato
     *
     * @param boolean $bookingStato
     *
     * @return ModuloContrattoMail
     */
    public function setBookingStato($bookingStato)
    {
        $this->bookingStato = $bookingStato;

        return $this;
    }

    /**
     * Get bookingStato
     *
     * @return boolean
     */
    public function getBookingStato()
    {
        return $this->bookingStato;
    }

    /**
     * Set bookingCodpromotorestato
     *
     * @param integer $bookingCodpromotorestato
     *
     * @return ModuloContrattoMail
     */
    public function setBookingCodpromotorestato($bookingCodpromotorestato)
    {
        $this->bookingCodpromotorestato = $bookingCodpromotorestato;

        return $this;
    }

    /**
     * Get bookingCodpromotorestato
     *
     * @return integer
     */
    public function getBookingCodpromotorestato()
    {
        return $this->bookingCodpromotorestato;
    }

    /**
     * Set bookingCodpromotorelavorazione
     *
     * @param integer $bookingCodpromotorelavorazione
     *
     * @return ModuloContrattoMail
     */
    public function setBookingCodpromotorelavorazione($bookingCodpromotorelavorazione)
    {
        $this->bookingCodpromotorelavorazione = $bookingCodpromotorelavorazione;

        return $this;
    }

    /**
     * Get bookingCodpromotorelavorazione
     *
     * @return integer
     */
    public function getBookingCodpromotorelavorazione()
    {
        return $this->bookingCodpromotorelavorazione;
    }

    /**
     * Set bookingLetto
     *
     * @param boolean $bookingLetto
     *
     * @return ModuloContrattoMail
     */
    public function setBookingLetto($bookingLetto)
    {
        $this->bookingLetto = $bookingLetto;

        return $this;
    }

    /**
     * Get bookingLetto
     *
     * @return boolean
     */
    public function getBookingLetto()
    {
        return $this->bookingLetto;
    }

    /**
     * Set ecStato
     *
     * @param boolean $ecStato
     *
     * @return ModuloContrattoMail
     */
    public function setEcStato($ecStato)
    {
        $this->ecStato = $ecStato;

        return $this;
    }

    /**
     * Get ecStato
     *
     * @return boolean
     */
    public function getEcStato()
    {
        return $this->ecStato;
    }

    /**
     * Set ecCodpromotorestato
     *
     * @param integer $ecCodpromotorestato
     *
     * @return ModuloContrattoMail
     */
    public function setEcCodpromotorestato($ecCodpromotorestato)
    {
        $this->ecCodpromotorestato = $ecCodpromotorestato;

        return $this;
    }

    /**
     * Get ecCodpromotorestato
     *
     * @return integer
     */
    public function getEcCodpromotorestato()
    {
        return $this->ecCodpromotorestato;
    }

    /**
     * Set ecCodpromotorelavorazione
     *
     * @param integer $ecCodpromotorelavorazione
     *
     * @return ModuloContrattoMail
     */
    public function setEcCodpromotorelavorazione($ecCodpromotorelavorazione)
    {
        $this->ecCodpromotorelavorazione = $ecCodpromotorelavorazione;

        return $this;
    }

    /**
     * Get ecCodpromotorelavorazione
     *
     * @return integer
     */
    public function getEcCodpromotorelavorazione()
    {
        return $this->ecCodpromotorelavorazione;
    }

    /**
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return ModuloContrattoMail
     */
    public function setDatainvio($datainvio)
    {
        $this->datainvio = $datainvio;

        return $this;
    }

    /**
     * Get datainvio
     *
     * @return \DateTime
     */
    public function getDatainvio()
    {
        return $this->datainvio;
    }

    /**
     * Set ecLetto
     *
     * @param boolean $ecLetto
     *
     * @return ModuloContrattoMail
     */
    public function setEcLetto($ecLetto)
    {
        $this->ecLetto = $ecLetto;

        return $this;
    }

    /**
     * Get ecLetto
     *
     * @return boolean
     */
    public function getEcLetto()
    {
        return $this->ecLetto;
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
}
