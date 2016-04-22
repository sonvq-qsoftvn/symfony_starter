<?php

namespace AppBundle\Entity;

/**
 * RedazioneRedazionali
 */
class RedazioneRedazionali
{
    /**
     * @var string
     */
    private $titolo = '';

    /**
     * @var string
     */
    private $autore = '';

    /**
     * @var string
     */
    private $nazione = '';

    /**
     * @var string
     */
    private $regione = '';

    /**
     * @var string
     */
    private $comune = '';

    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $tema1 = '';

    /**
     * @var string
     */
    private $tema2 = '';

    /**
     * @var string
     */
    private $tema3 = '';

    /**
     * @var string
     */
    private $fotoHome = '';

    /**
     * @var string
     */
    private $foto1 = '';

    /**
     * @var string
     */
    private $foto2 = '';

    /**
     * @var string
     */
    private $foto3 = '';

    /**
     * @var string
     */
    private $foto4 = '';

    /**
     * @var string
     */
    private $foto5 = '';

    /**
     * @var string
     */
    private $testo;

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
     * @var \DateTime
     */
    private $dataOnline = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $zona = '';

    /**
     * @var string
     */
    private $lingua = '';

    /**
     * @var \DateTime
     */
    private $inizioPub = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $finePub = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $inizioHome = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $fineHome = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $inizioTema = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $fineTema = '0000-00-00';

    /**
     * @var string
     */
    private $pubTema = '';

    /**
     * @var string
     */
    private $parola = '';

    /**
     * @var string
     */
    private $collocazione = '';

    /**
     * @var string
     */
    private $tipoRedazionale = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return RedazioneRedazionali
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
     * Set autore
     *
     * @param string $autore
     *
     * @return RedazioneRedazionali
     */
    public function setAutore($autore)
    {
        $this->autore = $autore;

        return $this;
    }

    /**
     * Get autore
     *
     * @return string
     */
    public function getAutore()
    {
        return $this->autore;
    }

    /**
     * Set nazione
     *
     * @param string $nazione
     *
     * @return RedazioneRedazionali
     */
    public function setNazione($nazione)
    {
        $this->nazione = $nazione;

        return $this;
    }

    /**
     * Get nazione
     *
     * @return string
     */
    public function getNazione()
    {
        return $this->nazione;
    }

    /**
     * Set regione
     *
     * @param string $regione
     *
     * @return RedazioneRedazionali
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string
     */
    public function getRegione()
    {
        return $this->regione;
    }

    /**
     * Set comune
     *
     * @param string $comune
     *
     * @return RedazioneRedazionali
     */
    public function setComune($comune)
    {
        $this->comune = $comune;

        return $this;
    }

    /**
     * Get comune
     *
     * @return string
     */
    public function getComune()
    {
        return $this->comune;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return RedazioneRedazionali
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set tema1
     *
     * @param string $tema1
     *
     * @return RedazioneRedazionali
     */
    public function setTema1($tema1)
    {
        $this->tema1 = $tema1;

        return $this;
    }

    /**
     * Get tema1
     *
     * @return string
     */
    public function getTema1()
    {
        return $this->tema1;
    }

    /**
     * Set tema2
     *
     * @param string $tema2
     *
     * @return RedazioneRedazionali
     */
    public function setTema2($tema2)
    {
        $this->tema2 = $tema2;

        return $this;
    }

    /**
     * Get tema2
     *
     * @return string
     */
    public function getTema2()
    {
        return $this->tema2;
    }

    /**
     * Set tema3
     *
     * @param string $tema3
     *
     * @return RedazioneRedazionali
     */
    public function setTema3($tema3)
    {
        $this->tema3 = $tema3;

        return $this;
    }

    /**
     * Get tema3
     *
     * @return string
     */
    public function getTema3()
    {
        return $this->tema3;
    }

    /**
     * Set fotoHome
     *
     * @param string $fotoHome
     *
     * @return RedazioneRedazionali
     */
    public function setFotoHome($fotoHome)
    {
        $this->fotoHome = $fotoHome;

        return $this;
    }

    /**
     * Get fotoHome
     *
     * @return string
     */
    public function getFotoHome()
    {
        return $this->fotoHome;
    }

    /**
     * Set foto1
     *
     * @param string $foto1
     *
     * @return RedazioneRedazionali
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
     * Set foto2
     *
     * @param string $foto2
     *
     * @return RedazioneRedazionali
     */
    public function setFoto2($foto2)
    {
        $this->foto2 = $foto2;

        return $this;
    }

    /**
     * Get foto2
     *
     * @return string
     */
    public function getFoto2()
    {
        return $this->foto2;
    }

    /**
     * Set foto3
     *
     * @param string $foto3
     *
     * @return RedazioneRedazionali
     */
    public function setFoto3($foto3)
    {
        $this->foto3 = $foto3;

        return $this;
    }

    /**
     * Get foto3
     *
     * @return string
     */
    public function getFoto3()
    {
        return $this->foto3;
    }

    /**
     * Set foto4
     *
     * @param string $foto4
     *
     * @return RedazioneRedazionali
     */
    public function setFoto4($foto4)
    {
        $this->foto4 = $foto4;

        return $this;
    }

    /**
     * Get foto4
     *
     * @return string
     */
    public function getFoto4()
    {
        return $this->foto4;
    }

    /**
     * Set foto5
     *
     * @param string $foto5
     *
     * @return RedazioneRedazionali
     */
    public function setFoto5($foto5)
    {
        $this->foto5 = $foto5;

        return $this;
    }

    /**
     * Get foto5
     *
     * @return string
     */
    public function getFoto5()
    {
        return $this->foto5;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return RedazioneRedazionali
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
     * Set dataInserimento
     *
     * @param \DateTime $dataInserimento
     *
     * @return RedazioneRedazionali
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
     * @return RedazioneRedazionali
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
     * @return RedazioneRedazionali
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
     * @return RedazioneRedazionali
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
     * @return RedazioneRedazionali
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
     * Set dataOnline
     *
     * @param \DateTime $dataOnline
     *
     * @return RedazioneRedazionali
     */
    public function setDataOnline($dataOnline)
    {
        $this->dataOnline = $dataOnline;

        return $this;
    }

    /**
     * Get dataOnline
     *
     * @return \DateTime
     */
    public function getDataOnline()
    {
        return $this->dataOnline;
    }

    /**
     * Set zona
     *
     * @param string $zona
     *
     * @return RedazioneRedazionali
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return RedazioneRedazionali
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }

    /**
     * Set inizioPub
     *
     * @param \DateTime $inizioPub
     *
     * @return RedazioneRedazionali
     */
    public function setInizioPub($inizioPub)
    {
        $this->inizioPub = $inizioPub;

        return $this;
    }

    /**
     * Get inizioPub
     *
     * @return \DateTime
     */
    public function getInizioPub()
    {
        return $this->inizioPub;
    }

    /**
     * Set finePub
     *
     * @param \DateTime $finePub
     *
     * @return RedazioneRedazionali
     */
    public function setFinePub($finePub)
    {
        $this->finePub = $finePub;

        return $this;
    }

    /**
     * Get finePub
     *
     * @return \DateTime
     */
    public function getFinePub()
    {
        return $this->finePub;
    }

    /**
     * Set inizioHome
     *
     * @param \DateTime $inizioHome
     *
     * @return RedazioneRedazionali
     */
    public function setInizioHome($inizioHome)
    {
        $this->inizioHome = $inizioHome;

        return $this;
    }

    /**
     * Get inizioHome
     *
     * @return \DateTime
     */
    public function getInizioHome()
    {
        return $this->inizioHome;
    }

    /**
     * Set fineHome
     *
     * @param \DateTime $fineHome
     *
     * @return RedazioneRedazionali
     */
    public function setFineHome($fineHome)
    {
        $this->fineHome = $fineHome;

        return $this;
    }

    /**
     * Get fineHome
     *
     * @return \DateTime
     */
    public function getFineHome()
    {
        return $this->fineHome;
    }

    /**
     * Set inizioTema
     *
     * @param \DateTime $inizioTema
     *
     * @return RedazioneRedazionali
     */
    public function setInizioTema($inizioTema)
    {
        $this->inizioTema = $inizioTema;

        return $this;
    }

    /**
     * Get inizioTema
     *
     * @return \DateTime
     */
    public function getInizioTema()
    {
        return $this->inizioTema;
    }

    /**
     * Set fineTema
     *
     * @param \DateTime $fineTema
     *
     * @return RedazioneRedazionali
     */
    public function setFineTema($fineTema)
    {
        $this->fineTema = $fineTema;

        return $this;
    }

    /**
     * Get fineTema
     *
     * @return \DateTime
     */
    public function getFineTema()
    {
        return $this->fineTema;
    }

    /**
     * Set pubTema
     *
     * @param string $pubTema
     *
     * @return RedazioneRedazionali
     */
    public function setPubTema($pubTema)
    {
        $this->pubTema = $pubTema;

        return $this;
    }

    /**
     * Get pubTema
     *
     * @return string
     */
    public function getPubTema()
    {
        return $this->pubTema;
    }

    /**
     * Set parola
     *
     * @param string $parola
     *
     * @return RedazioneRedazionali
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
     * Set collocazione
     *
     * @param string $collocazione
     *
     * @return RedazioneRedazionali
     */
    public function setCollocazione($collocazione)
    {
        $this->collocazione = $collocazione;

        return $this;
    }

    /**
     * Get collocazione
     *
     * @return string
     */
    public function getCollocazione()
    {
        return $this->collocazione;
    }

    /**
     * Set tipoRedazionale
     *
     * @param string $tipoRedazionale
     *
     * @return RedazioneRedazionali
     */
    public function setTipoRedazionale($tipoRedazionale)
    {
        $this->tipoRedazionale = $tipoRedazionale;

        return $this;
    }

    /**
     * Get tipoRedazionale
     *
     * @return string
     */
    public function getTipoRedazionale()
    {
        return $this->tipoRedazionale;
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
