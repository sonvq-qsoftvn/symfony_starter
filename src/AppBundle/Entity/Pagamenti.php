<?php

namespace AppBundle\Entity;

/**
 * Pagamenti
 */
class Pagamenti
{
    /**
     * @var integer
     */
    private $idViaggio = '0';

    /**
     * @var \DateTime
     */
    private $datapag = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dataeffettiva = '0000-00-00';

    /**
     * @var string
     */
    private $importo = '0.00';

    /**
     * @var boolean
     */
    private $pagato = '0';

    /**
     * @var string
     */
    private $metodopag = '';

    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var integer
     */
    private $codpromotorecreazione = '0';

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
    private $avesRisposta;

    /**
     * @var string
     */
    private $tipo = '';

    /**
     * @var boolean
     */
    private $rimborso = '0';

    /**
     * @var integer
     */
    private $siapRegNumber;

    /**
     * @var \DateTime
     */
    private $siapRegDate = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $idpag;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return Pagamenti
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
     * Set datapag
     *
     * @param \DateTime $datapag
     *
     * @return Pagamenti
     */
    public function setDatapag($datapag)
    {
        $this->datapag = $datapag;

        return $this;
    }

    /**
     * Get datapag
     *
     * @return \DateTime
     */
    public function getDatapag()
    {
        return $this->datapag;
    }

    /**
     * Set dataeffettiva
     *
     * @param \DateTime $dataeffettiva
     *
     * @return Pagamenti
     */
    public function setDataeffettiva($dataeffettiva)
    {
        $this->dataeffettiva = $dataeffettiva;

        return $this;
    }

    /**
     * Get dataeffettiva
     *
     * @return \DateTime
     */
    public function getDataeffettiva()
    {
        return $this->dataeffettiva;
    }

    /**
     * Set importo
     *
     * @param string $importo
     *
     * @return Pagamenti
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;

        return $this;
    }

    /**
     * Get importo
     *
     * @return string
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * Set pagato
     *
     * @param boolean $pagato
     *
     * @return Pagamenti
     */
    public function setPagato($pagato)
    {
        $this->pagato = $pagato;

        return $this;
    }

    /**
     * Get pagato
     *
     * @return boolean
     */
    public function getPagato()
    {
        return $this->pagato;
    }

    /**
     * Set metodopag
     *
     * @param string $metodopag
     *
     * @return Pagamenti
     */
    public function setMetodopag($metodopag)
    {
        $this->metodopag = $metodopag;

        return $this;
    }

    /**
     * Get metodopag
     *
     * @return string
     */
    public function getMetodopag()
    {
        return $this->metodopag;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Pagamenti
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set codpromotorecreazione
     *
     * @param integer $codpromotorecreazione
     *
     * @return Pagamenti
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
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return Pagamenti
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
     * @return Pagamenti
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
     * Set avesRisposta
     *
     * @param string $avesRisposta
     *
     * @return Pagamenti
     */
    public function setAvesRisposta($avesRisposta)
    {
        $this->avesRisposta = $avesRisposta;

        return $this;
    }

    /**
     * Get avesRisposta
     *
     * @return string
     */
    public function getAvesRisposta()
    {
        return $this->avesRisposta;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Pagamenti
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set rimborso
     *
     * @param boolean $rimborso
     *
     * @return Pagamenti
     */
    public function setRimborso($rimborso)
    {
        $this->rimborso = $rimborso;

        return $this;
    }

    /**
     * Get rimborso
     *
     * @return boolean
     */
    public function getRimborso()
    {
        return $this->rimborso;
    }

    /**
     * Set siapRegNumber
     *
     * @param integer $siapRegNumber
     *
     * @return Pagamenti
     */
    public function setSiapRegNumber($siapRegNumber)
    {
        $this->siapRegNumber = $siapRegNumber;

        return $this;
    }

    /**
     * Get siapRegNumber
     *
     * @return integer
     */
    public function getSiapRegNumber()
    {
        return $this->siapRegNumber;
    }

    /**
     * Set siapRegDate
     *
     * @param \DateTime $siapRegDate
     *
     * @return Pagamenti
     */
    public function setSiapRegDate($siapRegDate)
    {
        $this->siapRegDate = $siapRegDate;

        return $this;
    }

    /**
     * Get siapRegDate
     *
     * @return \DateTime
     */
    public function getSiapRegDate()
    {
        return $this->siapRegDate;
    }

    /**
     * Get idpag
     *
     * @return integer
     */
    public function getIdpag()
    {
        return $this->idpag;
    }
}
