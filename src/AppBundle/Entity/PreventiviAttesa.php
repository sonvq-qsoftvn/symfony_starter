<?php

namespace AppBundle\Entity;

/**
 * PreventiviAttesa
 */
class PreventiviAttesa
{
    /**
     * @var integer
     */
    private $idViaggio;

    /**
     * @var integer
     */
    private $codpromotore;

    /**
     * @var integer
     */
    private $codpromotorecreazione;

    /**
     * @var integer
     */
    private $codpromotoremodifica;

    /**
     * @var string
     */
    private $destinatari;

    /**
     * @var string
     */
    private $destinataricopia;

    /**
     * @var string
     */
    private $destinatarinascosti;

    /**
     * @var string
     */
    private $prprichiesta;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $corpo;

    /**
     * @var \DateTime
     */
    private $datainvio;

    /**
     * @var \DateTime
     */
    private $datapreventivo;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $datamodifica;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return PreventiviAttesa
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
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return PreventiviAttesa
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
     * @return PreventiviAttesa
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
     * @return PreventiviAttesa
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
     * Set destinatari
     *
     * @param string $destinatari
     *
     * @return PreventiviAttesa
     */
    public function setDestinatari($destinatari)
    {
        $this->destinatari = $destinatari;

        return $this;
    }

    /**
     * Get destinatari
     *
     * @return string
     */
    public function getDestinatari()
    {
        return $this->destinatari;
    }

    /**
     * Set destinataricopia
     *
     * @param string $destinataricopia
     *
     * @return PreventiviAttesa
     */
    public function setDestinataricopia($destinataricopia)
    {
        $this->destinataricopia = $destinataricopia;

        return $this;
    }

    /**
     * Get destinataricopia
     *
     * @return string
     */
    public function getDestinataricopia()
    {
        return $this->destinataricopia;
    }

    /**
     * Set destinatarinascosti
     *
     * @param string $destinatarinascosti
     *
     * @return PreventiviAttesa
     */
    public function setDestinatarinascosti($destinatarinascosti)
    {
        $this->destinatarinascosti = $destinatarinascosti;

        return $this;
    }

    /**
     * Get destinatarinascosti
     *
     * @return string
     */
    public function getDestinatarinascosti()
    {
        return $this->destinatarinascosti;
    }

    /**
     * Set prprichiesta
     *
     * @param string $prprichiesta
     *
     * @return PreventiviAttesa
     */
    public function setPrprichiesta($prprichiesta)
    {
        $this->prprichiesta = $prprichiesta;

        return $this;
    }

    /**
     * Get prprichiesta
     *
     * @return string
     */
    public function getPrprichiesta()
    {
        return $this->prprichiesta;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return PreventiviAttesa
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
     * Set corpo
     *
     * @param string $corpo
     *
     * @return PreventiviAttesa
     */
    public function setCorpo($corpo)
    {
        $this->corpo = $corpo;

        return $this;
    }

    /**
     * Get corpo
     *
     * @return string
     */
    public function getCorpo()
    {
        return $this->corpo;
    }

    /**
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return PreventiviAttesa
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
     * Set datapreventivo
     *
     * @param \DateTime $datapreventivo
     *
     * @return PreventiviAttesa
     */
    public function setDatapreventivo($datapreventivo)
    {
        $this->datapreventivo = $datapreventivo;

        return $this;
    }

    /**
     * Get datapreventivo
     *
     * @return \DateTime
     */
    public function getDatapreventivo()
    {
        return $this->datapreventivo;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return PreventiviAttesa
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
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return PreventiviAttesa
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
