<?php

namespace AppBundle\Entity;

/**
 * PreventiviV2
 */
class PreventiviV2
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
     * @var boolean
     */
    private $prpincopia = '1';

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $corpo;

    /**
     * @var string
     */
    private $nota;

    /**
     * @var \DateTime
     */
    private $datainvio;

    /**
     * @var string
     */
    private $tipoinvio;

    /**
     * @var \DateTime
     */
    private $dataaccettato;

    /**
     * @var \DateTime
     */
    private $dataaccettatoannullato;

    /**
     * @var \DateTime
     */
    private $dataletto;

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
    private $duplicato = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * Set prpincopia
     *
     * @param boolean $prpincopia
     *
     * @return PreventiviV2
     */
    public function setPrpincopia($prpincopia)
    {
        $this->prpincopia = $prpincopia;

        return $this;
    }

    /**
     * Get prpincopia
     *
     * @return boolean
     */
    public function getPrpincopia()
    {
        return $this->prpincopia;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * Set nota
     *
     * @param string $nota
     *
     * @return PreventiviV2
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
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return PreventiviV2
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
     * Set tipoinvio
     *
     * @param string $tipoinvio
     *
     * @return PreventiviV2
     */
    public function setTipoinvio($tipoinvio)
    {
        $this->tipoinvio = $tipoinvio;

        return $this;
    }

    /**
     * Get tipoinvio
     *
     * @return string
     */
    public function getTipoinvio()
    {
        return $this->tipoinvio;
    }

    /**
     * Set dataaccettato
     *
     * @param \DateTime $dataaccettato
     *
     * @return PreventiviV2
     */
    public function setDataaccettato($dataaccettato)
    {
        $this->dataaccettato = $dataaccettato;

        return $this;
    }

    /**
     * Get dataaccettato
     *
     * @return \DateTime
     */
    public function getDataaccettato()
    {
        return $this->dataaccettato;
    }

    /**
     * Set dataaccettatoannullato
     *
     * @param \DateTime $dataaccettatoannullato
     *
     * @return PreventiviV2
     */
    public function setDataaccettatoannullato($dataaccettatoannullato)
    {
        $this->dataaccettatoannullato = $dataaccettatoannullato;

        return $this;
    }

    /**
     * Get dataaccettatoannullato
     *
     * @return \DateTime
     */
    public function getDataaccettatoannullato()
    {
        return $this->dataaccettatoannullato;
    }

    /**
     * Set dataletto
     *
     * @param \DateTime $dataletto
     *
     * @return PreventiviV2
     */
    public function setDataletto($dataletto)
    {
        $this->dataletto = $dataletto;

        return $this;
    }

    /**
     * Get dataletto
     *
     * @return \DateTime
     */
    public function getDataletto()
    {
        return $this->dataletto;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return PreventiviV2
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
     * @return PreventiviV2
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
     * Set duplicato
     *
     * @param integer $duplicato
     *
     * @return PreventiviV2
     */
    public function setDuplicato($duplicato)
    {
        $this->duplicato = $duplicato;

        return $this;
    }

    /**
     * Get duplicato
     *
     * @return integer
     */
    public function getDuplicato()
    {
        return $this->duplicato;
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
