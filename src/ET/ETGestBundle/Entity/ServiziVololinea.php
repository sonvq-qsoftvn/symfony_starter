<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziVololinea
 *
 * @ORM\Table(name="servizi_vololinea")
 * @ORM\Entity
 */
class ServiziVololinea
{
    /**
     * @var string
     *
     * @ORM\Column(name="numPrenotazione", type="string", length=100, nullable=true)
     */
    private $numprenotazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataIN", type="date", nullable=true)
     */
    private $datain;

    /**
     * @var string
     *
     * @ORM\Column(name="partenza", type="string", length=3, nullable=true)
     */
    private $partenza;

    /**
     * @var string
     *
     * @ORM\Column(name="partenzaAereoporto", type="string", length=50, nullable=true)
     */
    private $partenzaaereoporto;

    /**
     * @var string
     *
     * @ORM\Column(name="partenzaAereoportoArrivo", type="string", length=50, nullable=false)
     */
    private $partenzaaereoportoarrivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataOUT", type="date", nullable=true)
     */
    private $dataout;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivo", type="string", length=3, nullable=true)
     */
    private $arrivo;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivoAereoporto", type="string", length=50, nullable=true)
     */
    private $arrivoaereoporto;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivoAereoportoArrivo", type="string", length=50, nullable=false)
     */
    private $arrivoaereoportoarrivo;

    /**
     * @var string
     *
     * @ORM\Column(name="nominativoCartaCC", type="string", length=100, nullable=true)
     */
    private $nominativocartacc;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoBiglietto", type="string", length=255, nullable=true)
     */
    private $tipobiglietto;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzoBigliettoCartaceo", type="text", length=65535, nullable=true)
     */
    private $indirizzobigliettocartaceo;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set numprenotazione
     *
     * @param string $numprenotazione
     *
     * @return ServiziVololinea
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
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ServiziVololinea
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
     * Set partenza
     *
     * @param string $partenza
     *
     * @return ServiziVololinea
     */
    public function setPartenza($partenza)
    {
        $this->partenza = $partenza;

        return $this;
    }

    /**
     * Get partenza
     *
     * @return string
     */
    public function getPartenza()
    {
        return $this->partenza;
    }

    /**
     * Set partenzaaereoporto
     *
     * @param string $partenzaaereoporto
     *
     * @return ServiziVololinea
     */
    public function setPartenzaaereoporto($partenzaaereoporto)
    {
        $this->partenzaaereoporto = $partenzaaereoporto;

        return $this;
    }

    /**
     * Get partenzaaereoporto
     *
     * @return string
     */
    public function getPartenzaaereoporto()
    {
        return $this->partenzaaereoporto;
    }

    /**
     * Set partenzaaereoportoarrivo
     *
     * @param string $partenzaaereoportoarrivo
     *
     * @return ServiziVololinea
     */
    public function setPartenzaaereoportoarrivo($partenzaaereoportoarrivo)
    {
        $this->partenzaaereoportoarrivo = $partenzaaereoportoarrivo;

        return $this;
    }

    /**
     * Get partenzaaereoportoarrivo
     *
     * @return string
     */
    public function getPartenzaaereoportoarrivo()
    {
        return $this->partenzaaereoportoarrivo;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ServiziVololinea
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
     * Set arrivo
     *
     * @param string $arrivo
     *
     * @return ServiziVololinea
     */
    public function setArrivo($arrivo)
    {
        $this->arrivo = $arrivo;

        return $this;
    }

    /**
     * Get arrivo
     *
     * @return string
     */
    public function getArrivo()
    {
        return $this->arrivo;
    }

    /**
     * Set arrivoaereoporto
     *
     * @param string $arrivoaereoporto
     *
     * @return ServiziVololinea
     */
    public function setArrivoaereoporto($arrivoaereoporto)
    {
        $this->arrivoaereoporto = $arrivoaereoporto;

        return $this;
    }

    /**
     * Get arrivoaereoporto
     *
     * @return string
     */
    public function getArrivoaereoporto()
    {
        return $this->arrivoaereoporto;
    }

    /**
     * Set arrivoaereoportoarrivo
     *
     * @param string $arrivoaereoportoarrivo
     *
     * @return ServiziVololinea
     */
    public function setArrivoaereoportoarrivo($arrivoaereoportoarrivo)
    {
        $this->arrivoaereoportoarrivo = $arrivoaereoportoarrivo;

        return $this;
    }

    /**
     * Get arrivoaereoportoarrivo
     *
     * @return string
     */
    public function getArrivoaereoportoarrivo()
    {
        return $this->arrivoaereoportoarrivo;
    }

    /**
     * Set nominativocartacc
     *
     * @param string $nominativocartacc
     *
     * @return ServiziVololinea
     */
    public function setNominativocartacc($nominativocartacc)
    {
        $this->nominativocartacc = $nominativocartacc;

        return $this;
    }

    /**
     * Get nominativocartacc
     *
     * @return string
     */
    public function getNominativocartacc()
    {
        return $this->nominativocartacc;
    }

    /**
     * Set tipobiglietto
     *
     * @param string $tipobiglietto
     *
     * @return ServiziVololinea
     */
    public function setTipobiglietto($tipobiglietto)
    {
        $this->tipobiglietto = $tipobiglietto;

        return $this;
    }

    /**
     * Get tipobiglietto
     *
     * @return string
     */
    public function getTipobiglietto()
    {
        return $this->tipobiglietto;
    }

    /**
     * Set indirizzobigliettocartaceo
     *
     * @param string $indirizzobigliettocartaceo
     *
     * @return ServiziVololinea
     */
    public function setIndirizzobigliettocartaceo($indirizzobigliettocartaceo)
    {
        $this->indirizzobigliettocartaceo = $indirizzobigliettocartaceo;

        return $this;
    }

    /**
     * Get indirizzobigliettocartaceo
     *
     * @return string
     */
    public function getIndirizzobigliettocartaceo()
    {
        return $this->indirizzobigliettocartaceo;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return ServiziVololinea
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
