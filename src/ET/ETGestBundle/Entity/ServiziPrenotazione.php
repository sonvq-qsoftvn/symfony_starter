<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziPrenotazione
 *
 * @ORM\Table(name="servizi_prenotazione", indexes={@ORM\Index(name="portale_id_idx", columns={"portale_id"}), @ORM\Index(name="destinazione_idx", columns={"destinazione"}), @ORM\Index(name="codpromotorepromorif_idx", columns={"codpromotorepromorif"})})
 * @ORM\Entity
 */
class ServiziPrenotazione
{
    /**
     * @var integer
     *
     * @ORM\Column(name="portale_id", type="smallint", nullable=true)
     */
    private $portaleId;

    /**
     * @var string
     *
     * @ORM\Column(name="idofferta", type="string", length=20, nullable=true)
     */
    private $idofferta;

    /**
     * @var string
     *
     * @ORM\Column(name="nropzione", type="string", length=20, nullable=true)
     */
    private $nropzione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datain", type="date", nullable=true)
     */
    private $datain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataout", type="date", nullable=true)
     */
    private $dataout;

    /**
     * @var string
     *
     * @ORM\Column(name="destinazione", type="string", length=3, nullable=true)
     */
    private $destinazione;

    /**
     * @var string
     *
     * @ORM\Column(name="localita", type="string", length=255, nullable=true)
     */
    private $localita;

    /**
     * @var string
     *
     * @ORM\Column(name="nomestruttura", type="string", length=255, nullable=true)
     */
    private $nomestruttura;

    /**
     * @var string
     *
     * @ORM\Column(name="tipostruttura", type="string", length=255, nullable=true)
     */
    private $tipostruttura;

    /**
     * @var string
     *
     * @ORM\Column(name="sistemazioni", type="text", nullable=true)
     */
    private $sistemazioni;

    /**
     * @var string
     *
     * @ORM\Column(name="numprenotazione", type="string", length=20, nullable=true)
     */
    private $numprenotazione;

    /**
     * @var string
     *
     * @ORM\Column(name="notecontratto", type="string", length=255, nullable=true)
     */
    private $notecontratto;

    /**
     * @var integer
     *
     * @ORM\Column(name="codpromotorepromorif", type="integer", nullable=true)
     */
    private $codpromotorepromorif = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set portaleId
     *
     * @param integer $portaleId
     *
     * @return ServiziPrenotazione
     */
    public function setPortaleId($portaleId)
    {
        $this->portaleId = $portaleId;

        return $this;
    }

    /**
     * Get portaleId
     *
     * @return integer
     */
    public function getPortaleId()
    {
        return $this->portaleId;
    }

    /**
     * Set idofferta
     *
     * @param string $idofferta
     *
     * @return ServiziPrenotazione
     */
    public function setIdofferta($idofferta)
    {
        $this->idofferta = $idofferta;

        return $this;
    }

    /**
     * Get idofferta
     *
     * @return string
     */
    public function getIdofferta()
    {
        return $this->idofferta;
    }

    /**
     * Set nropzione
     *
     * @param string $nropzione
     *
     * @return ServiziPrenotazione
     */
    public function setNropzione($nropzione)
    {
        $this->nropzione = $nropzione;

        return $this;
    }

    /**
     * Get nropzione
     *
     * @return string
     */
    public function getNropzione()
    {
        return $this->nropzione;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ServiziPrenotazione
     */
    public function setDatain($datain)
    {
        $this->datain = $datain;

        return $this;
    }

    /**
     * Get datain
     *
     * @return \DateTime
     */
    public function getDatain()
    {
        return $this->datain;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ServiziPrenotazione
     */
    public function setDataout($dataout)
    {
        $this->dataout = $dataout;

        return $this;
    }

    /**
     * Get dataout
     *
     * @return \DateTime
     */
    public function getDataout()
    {
        return $this->dataout;
    }

    /**
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return ServiziPrenotazione
     */
    public function setDestinazione($destinazione)
    {
        $this->destinazione = $destinazione;

        return $this;
    }

    /**
     * Get destinazione
     *
     * @return string
     */
    public function getDestinazione()
    {
        return $this->destinazione;
    }

    /**
     * Set localita
     *
     * @param string $localita
     *
     * @return ServiziPrenotazione
     */
    public function setLocalita($localita)
    {
        $this->localita = $localita;

        return $this;
    }

    /**
     * Get localita
     *
     * @return string
     */
    public function getLocalita()
    {
        return $this->localita;
    }

    /**
     * Set nomestruttura
     *
     * @param string $nomestruttura
     *
     * @return ServiziPrenotazione
     */
    public function setNomestruttura($nomestruttura)
    {
        $this->nomestruttura = $nomestruttura;

        return $this;
    }

    /**
     * Get nomestruttura
     *
     * @return string
     */
    public function getNomestruttura()
    {
        return $this->nomestruttura;
    }

    /**
     * Set tipostruttura
     *
     * @param string $tipostruttura
     *
     * @return ServiziPrenotazione
     */
    public function setTipostruttura($tipostruttura)
    {
        $this->tipostruttura = $tipostruttura;

        return $this;
    }

    /**
     * Get tipostruttura
     *
     * @return string
     */
    public function getTipostruttura()
    {
        return $this->tipostruttura;
    }

    /**
     * Set sistemazioni
     *
     * @param string $sistemazioni
     *
     * @return ServiziPrenotazione
     */
    public function setSistemazioni($sistemazioni)
    {
        $this->sistemazioni = $sistemazioni;

        return $this;
    }

    /**
     * Get sistemazioni
     *
     * @return string
     */
    public function getSistemazioni()
    {
        return $this->sistemazioni;
    }

    /**
     * Set numprenotazione
     *
     * @param string $numprenotazione
     *
     * @return ServiziPrenotazione
     */
    public function setNumprenotazione($numprenotazione)
    {
        $this->numprenotazione = $numprenotazione;

        return $this;
    }

    /**
     * Get numprenotazione
     *
     * @return string
     */
    public function getNumprenotazione()
    {
        return $this->numprenotazione;
    }

    /**
     * Set notecontratto
     *
     * @param string $notecontratto
     *
     * @return ServiziPrenotazione
     */
    public function setNotecontratto($notecontratto)
    {
        $this->notecontratto = $notecontratto;

        return $this;
    }

    /**
     * Get notecontratto
     *
     * @return string
     */
    public function getNotecontratto()
    {
        return $this->notecontratto;
    }

    /**
     * Set codpromotorepromorif
     *
     * @param integer $codpromotorepromorif
     *
     * @return ServiziPrenotazione
     */
    public function setCodpromotorepromorif($codpromotorepromorif)
    {
        $this->codpromotorepromorif = $codpromotorepromorif;

        return $this;
    }

    /**
     * Get codpromotorepromorif
     *
     * @return integer
     */
    public function getCodpromotorepromorif()
    {
        return $this->codpromotorepromorif;
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
