<?php

namespace ET\ETGestBundle\Entity;

/**
 * ModuloPreventivo
 */
class ModuloPreventivo
{
    /**
     * @var integer
     */
    private $idViaggio = '0';

    /**
     * @var \DateTime
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var integer
     */
    private $codpromotorecreazione = '0';

    /**
     * @var string
     */
    private $titolo = '';

    /**
     * @var string
     */
    private $nota;

    /**
     * @var boolean
     */
    private $tipodocumento = '0';

    /**
     * @var \DateTime
     */
    private $datamodifica = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $codpromotoremodifica = '0';

    /**
     * @var string
     */
    private $testa;

    /**
     * @var string
     */
    private $intestazione;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $comprende;

    /**
     * @var string
     */
    private $nonComprende;

    /**
     * @var string
     */
    private $operativoVoli;

    /**
     * @var string
     */
    private $conclusioni;

    /**
     * @var boolean
     */
    private $statusaves = '0';

    /**
     * @var \DateTime
     */
    private $datainvio;

    /**
     * @var boolean
     */
    private $ecLetto = '0';

    /**
     * @var integer
     */
    private $idModulo;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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
     * Set testa
     *
     * @param string $testa
     *
     * @return ModuloPreventivo
     */
    public function setTesta($testa)
    {
        $this->testa = $testa;

        return $this;
    }

    /**
     * Get testa
     *
     * @return string
     */
    public function getTesta()
    {
        return $this->testa;
    }

    /**
     * Set intestazione
     *
     * @param string $intestazione
     *
     * @return ModuloPreventivo
     */
    public function setIntestazione($intestazione)
    {
        $this->intestazione = $intestazione;

        return $this;
    }

    /**
     * Get intestazione
     *
     * @return string
     */
    public function getIntestazione()
    {
        return $this->intestazione;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return ModuloPreventivo
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set comprende
     *
     * @param string $comprende
     *
     * @return ModuloPreventivo
     */
    public function setComprende($comprende)
    {
        $this->comprende = $comprende;

        return $this;
    }

    /**
     * Get comprende
     *
     * @return string
     */
    public function getComprende()
    {
        return $this->comprende;
    }

    /**
     * Set nonComprende
     *
     * @param string $nonComprende
     *
     * @return ModuloPreventivo
     */
    public function setNonComprende($nonComprende)
    {
        $this->nonComprende = $nonComprende;

        return $this;
    }

    /**
     * Get nonComprende
     *
     * @return string
     */
    public function getNonComprende()
    {
        return $this->nonComprende;
    }

    /**
     * Set operativoVoli
     *
     * @param string $operativoVoli
     *
     * @return ModuloPreventivo
     */
    public function setOperativoVoli($operativoVoli)
    {
        $this->operativoVoli = $operativoVoli;

        return $this;
    }

    /**
     * Get operativoVoli
     *
     * @return string
     */
    public function getOperativoVoli()
    {
        return $this->operativoVoli;
    }

    /**
     * Set conclusioni
     *
     * @param string $conclusioni
     *
     * @return ModuloPreventivo
     */
    public function setConclusioni($conclusioni)
    {
        $this->conclusioni = $conclusioni;

        return $this;
    }

    /**
     * Get conclusioni
     *
     * @return string
     */
    public function getConclusioni()
    {
        return $this->conclusioni;
    }

    /**
     * Set statusaves
     *
     * @param boolean $statusaves
     *
     * @return ModuloPreventivo
     */
    public function setStatusaves($statusaves)
    {
        $this->statusaves = $statusaves;

        return $this;
    }

    /**
     * Get statusaves
     *
     * @return boolean
     */
    public function getStatusaves()
    {
        return $this->statusaves;
    }

    /**
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return ModuloPreventivo
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
     * @return ModuloPreventivo
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

