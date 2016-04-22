<?php

namespace AppBundle\Entity;

/**
 * RedazioneProdotti
 */
class RedazioneProdotti
{
    /**
     * @var string
     */
    private $tipoScheda = '';

    /**
     * @var string
     */
    private $piatto = '';

    /**
     * @var string
     */
    private $titolo = '';

    /**
     * @var string
     */
    private $prodottoTipico = '';

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $foto1 = '';

    /**
     * @var \DateTime
     */
    private $dataInserimento = '0000-00-00';

    /**
     * @var string
     */
    private $nomeInserimento = '';

    /**
     * @var \DateTime
     */
    private $dataModifica = '0000-00-00';

    /**
     * @var string
     */
    private $nomeModifica = '';

    /**
     * @var string
     */
    private $onLine = '';

    /**
     * @var string
     */
    private $parola = '';

    /**
     * @var integer
     */
    private $associa = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set tipoScheda
     *
     * @param string $tipoScheda
     *
     * @return RedazioneProdotti
     */
    public function setTipoScheda($tipoScheda)
    {
        $this->tipoScheda = $tipoScheda;

        return $this;
    }

    /**
     * Get tipoScheda
     *
     * @return string
     */
    public function getTipoScheda()
    {
        return $this->tipoScheda;
    }

    /**
     * Set piatto
     *
     * @param string $piatto
     *
     * @return RedazioneProdotti
     */
    public function setPiatto($piatto)
    {
        $this->piatto = $piatto;

        return $this;
    }

    /**
     * Get piatto
     *
     * @return string
     */
    public function getPiatto()
    {
        return $this->piatto;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return RedazioneProdotti
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
     * Set prodottoTipico
     *
     * @param string $prodottoTipico
     *
     * @return RedazioneProdotti
     */
    public function setProdottoTipico($prodottoTipico)
    {
        $this->prodottoTipico = $prodottoTipico;

        return $this;
    }

    /**
     * Get prodottoTipico
     *
     * @return string
     */
    public function getProdottoTipico()
    {
        return $this->prodottoTipico;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return RedazioneProdotti
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
     * Set foto1
     *
     * @param string $foto1
     *
     * @return RedazioneProdotti
     */
    public function setFoto1($foto1)
    {
        $this->foto1 = $foto1;

        return $this;
    }

    /**
     * Get foto1
     *
     * @return string
     */
    public function getFoto1()
    {
        return $this->foto1;
    }

    /**
     * Set dataInserimento
     *
     * @param \DateTime $dataInserimento
     *
     * @return RedazioneProdotti
     */
    public function setDataInserimento($dataInserimento)
    {
        $this->dataInserimento = $dataInserimento;

        return $this;
    }

    /**
     * Get dataInserimento
     *
     * @return \DateTime
     */
    public function getDataInserimento()
    {
        return $this->dataInserimento;
    }

    /**
     * Set nomeInserimento
     *
     * @param string $nomeInserimento
     *
     * @return RedazioneProdotti
     */
    public function setNomeInserimento($nomeInserimento)
    {
        $this->nomeInserimento = $nomeInserimento;

        return $this;
    }

    /**
     * Get nomeInserimento
     *
     * @return string
     */
    public function getNomeInserimento()
    {
        return $this->nomeInserimento;
    }

    /**
     * Set dataModifica
     *
     * @param \DateTime $dataModifica
     *
     * @return RedazioneProdotti
     */
    public function setDataModifica($dataModifica)
    {
        $this->dataModifica = $dataModifica;

        return $this;
    }

    /**
     * Get dataModifica
     *
     * @return \DateTime
     */
    public function getDataModifica()
    {
        return $this->dataModifica;
    }

    /**
     * Set nomeModifica
     *
     * @param string $nomeModifica
     *
     * @return RedazioneProdotti
     */
    public function setNomeModifica($nomeModifica)
    {
        $this->nomeModifica = $nomeModifica;

        return $this;
    }

    /**
     * Get nomeModifica
     *
     * @return string
     */
    public function getNomeModifica()
    {
        return $this->nomeModifica;
    }

    /**
     * Set onLine
     *
     * @param string $onLine
     *
     * @return RedazioneProdotti
     */
    public function setOnLine($onLine)
    {
        $this->onLine = $onLine;

        return $this;
    }

    /**
     * Get onLine
     *
     * @return string
     */
    public function getOnLine()
    {
        return $this->onLine;
    }

    /**
     * Set parola
     *
     * @param string $parola
     *
     * @return RedazioneProdotti
     */
    public function setParola($parola)
    {
        $this->parola = $parola;

        return $this;
    }

    /**
     * Get parola
     *
     * @return string
     */
    public function getParola()
    {
        return $this->parola;
    }

    /**
     * Set associa
     *
     * @param integer $associa
     *
     * @return RedazioneProdotti
     */
    public function setAssocia($associa)
    {
        $this->associa = $associa;

        return $this;
    }

    /**
     * Get associa
     *
     * @return integer
     */
    public function getAssocia()
    {
        return $this->associa;
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
