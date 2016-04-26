<?php

namespace ET\ETGestBundle\Entity;

/**
 * ServiziVololowcost
 */
class ServiziVololowcost
{
    /**
     * @var string
     */
    private $numprenotazione;

    /**
     * @var \DateTime
     */
    private $datain;

    /**
     * @var string
     */
    private $partenza;

    /**
     * @var string
     */
    private $partenzaaereoporto;

    /**
     * @var string
     */
    private $partenzaaereoportoarrivo;

    /**
     * @var \DateTime
     */
    private $dataout;

    /**
     * @var string
     */
    private $arrivo;

    /**
     * @var string
     */
    private $arrivoaereoporto;

    /**
     * @var string
     */
    private $arrivoaereoportoarrivo;

    /**
     * @var string
     */
    private $nominativocartacc;

    /**
     * @var string
     */
    private $indirizzobigliettocartaceo;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set numprenotazione
     *
     * @param string $numprenotazione
     *
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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
     * Set indirizzobigliettocartaceo
     *
     * @param string $indirizzobigliettocartaceo
     *
     * @return ServiziVololowcost
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
     * @return ServiziVololowcost
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

