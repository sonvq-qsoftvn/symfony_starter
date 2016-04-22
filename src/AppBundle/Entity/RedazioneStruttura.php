<?php

namespace AppBundle\Entity;

/**
 * RedazioneStruttura
 */
class RedazioneStruttura
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
    private $via = '';

    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $comune = '';

    /**
     * @var string
     */
    private $lingua = '';

    /**
     * @var string
     */
    private $struttura = '';

    /**
     * @var string
     */
    private $caratteristica = '';

    /**
     * @var string
     */
    private $collocazione = '';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $cel = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $testo3;

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
    private $nomeFoto1 = '';

    /**
     * @var string
     */
    private $nomeFoto2 = '';

    /**
     * @var string
     */
    private $nomeFoto3 = '';

    /**
     * @var string
     */
    private $nomeFoto4 = '';

    /**
     * @var string
     */
    private $nomeFoto5 = '';

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
    private $inizioHome1 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $fineHome1 = '0000-00-00';

    /**
     * @var string
     */
    private $parola = '';

    /**
     * @var integer
     */
    private $associa = '0';

    /**
     * @var string
     */
    private $linkPromotore = '';

    /**
     * @var string
     */
    private $prodottoTipico1 = '';

    /**
     * @var string
     */
    private $prodottoTipico2 = '';

    /**
     * @var string
     */
    private $prodottoTipico3 = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * Set via
     *
     * @param string $via
     *
     * @return RedazioneStruttura
     */
    public function setVia($via)
    {
        $this->via = $via;

        return $this;
    }

    /**
     * Get via
     *
     * @return string
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return RedazioneStruttura
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
     * Set comune
     *
     * @param string $comune
     *
     * @return RedazioneStruttura
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
     * Set lingua
     *
     * @param string $lingua
     *
     * @return RedazioneStruttura
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
     * Set struttura
     *
     * @param string $struttura
     *
     * @return RedazioneStruttura
     */
    public function setStruttura($struttura)
    {
        $this->struttura = $struttura;

        return $this;
    }

    /**
     * Get struttura
     *
     * @return string
     */
    public function getStruttura()
    {
        return $this->struttura;
    }

    /**
     * Set caratteristica
     *
     * @param string $caratteristica
     *
     * @return RedazioneStruttura
     */
    public function setCaratteristica($caratteristica)
    {
        $this->caratteristica = $caratteristica;

        return $this;
    }

    /**
     * Get caratteristica
     *
     * @return string
     */
    public function getCaratteristica()
    {
        return $this->caratteristica;
    }

    /**
     * Set collocazione
     *
     * @param string $collocazione
     *
     * @return RedazioneStruttura
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
     * Set tel
     *
     * @param string $tel
     *
     * @return RedazioneStruttura
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return RedazioneStruttura
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set cel
     *
     * @param string $cel
     *
     * @return RedazioneStruttura
     */
    public function setCel($cel)
    {
        $this->cel = $cel;

        return $this;
    }

    /**
     * Get cel
     *
     * @return string
     */
    public function getCel()
    {
        return $this->cel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return RedazioneStruttura
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return RedazioneStruttura
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
     * Set testo3
     *
     * @param string $testo3
     *
     * @return RedazioneStruttura
     */
    public function setTesto3($testo3)
    {
        $this->testo3 = $testo3;

        return $this;
    }

    /**
     * Get testo3
     *
     * @return string
     */
    public function getTesto3()
    {
        return $this->testo3;
    }

    /**
     * Set foto1
     *
     * @param string $foto1
     *
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * Set nomeFoto1
     *
     * @param string $nomeFoto1
     *
     * @return RedazioneStruttura
     */
    public function setNomeFoto1($nomeFoto1)
    {
        $this->nomeFoto1 = $nomeFoto1;

        return $this;
    }

    /**
     * Get nomeFoto1
     *
     * @return string
     */
    public function getNomeFoto1()
    {
        return $this->nomeFoto1;
    }

    /**
     * Set nomeFoto2
     *
     * @param string $nomeFoto2
     *
     * @return RedazioneStruttura
     */
    public function setNomeFoto2($nomeFoto2)
    {
        $this->nomeFoto2 = $nomeFoto2;

        return $this;
    }

    /**
     * Get nomeFoto2
     *
     * @return string
     */
    public function getNomeFoto2()
    {
        return $this->nomeFoto2;
    }

    /**
     * Set nomeFoto3
     *
     * @param string $nomeFoto3
     *
     * @return RedazioneStruttura
     */
    public function setNomeFoto3($nomeFoto3)
    {
        $this->nomeFoto3 = $nomeFoto3;

        return $this;
    }

    /**
     * Get nomeFoto3
     *
     * @return string
     */
    public function getNomeFoto3()
    {
        return $this->nomeFoto3;
    }

    /**
     * Set nomeFoto4
     *
     * @param string $nomeFoto4
     *
     * @return RedazioneStruttura
     */
    public function setNomeFoto4($nomeFoto4)
    {
        $this->nomeFoto4 = $nomeFoto4;

        return $this;
    }

    /**
     * Get nomeFoto4
     *
     * @return string
     */
    public function getNomeFoto4()
    {
        return $this->nomeFoto4;
    }

    /**
     * Set nomeFoto5
     *
     * @param string $nomeFoto5
     *
     * @return RedazioneStruttura
     */
    public function setNomeFoto5($nomeFoto5)
    {
        $this->nomeFoto5 = $nomeFoto5;

        return $this;
    }

    /**
     * Get nomeFoto5
     *
     * @return string
     */
    public function getNomeFoto5()
    {
        return $this->nomeFoto5;
    }

    /**
     * Set dataInserimento
     *
     * @param \DateTime $dataInserimento
     *
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * Set inizioHome1
     *
     * @param \DateTime $inizioHome1
     *
     * @return RedazioneStruttura
     */
    public function setInizioHome1($inizioHome1)
    {
        $this->inizioHome1 = $inizioHome1;

        return $this;
    }

    /**
     * Get inizioHome1
     *
     * @return \DateTime
     */
    public function getInizioHome1()
    {
        return $this->inizioHome1;
    }

    /**
     * Set fineHome1
     *
     * @param \DateTime $fineHome1
     *
     * @return RedazioneStruttura
     */
    public function setFineHome1($fineHome1)
    {
        $this->fineHome1 = $fineHome1;

        return $this;
    }

    /**
     * Get fineHome1
     *
     * @return \DateTime
     */
    public function getFineHome1()
    {
        return $this->fineHome1;
    }

    /**
     * Set parola
     *
     * @param string $parola
     *
     * @return RedazioneStruttura
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
     * @return RedazioneStruttura
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
     * Set linkPromotore
     *
     * @param string $linkPromotore
     *
     * @return RedazioneStruttura
     */
    public function setLinkPromotore($linkPromotore)
    {
        $this->linkPromotore = $linkPromotore;

        return $this;
    }

    /**
     * Get linkPromotore
     *
     * @return string
     */
    public function getLinkPromotore()
    {
        return $this->linkPromotore;
    }

    /**
     * Set prodottoTipico1
     *
     * @param string $prodottoTipico1
     *
     * @return RedazioneStruttura
     */
    public function setProdottoTipico1($prodottoTipico1)
    {
        $this->prodottoTipico1 = $prodottoTipico1;

        return $this;
    }

    /**
     * Get prodottoTipico1
     *
     * @return string
     */
    public function getProdottoTipico1()
    {
        return $this->prodottoTipico1;
    }

    /**
     * Set prodottoTipico2
     *
     * @param string $prodottoTipico2
     *
     * @return RedazioneStruttura
     */
    public function setProdottoTipico2($prodottoTipico2)
    {
        $this->prodottoTipico2 = $prodottoTipico2;

        return $this;
    }

    /**
     * Get prodottoTipico2
     *
     * @return string
     */
    public function getProdottoTipico2()
    {
        return $this->prodottoTipico2;
    }

    /**
     * Set prodottoTipico3
     *
     * @param string $prodottoTipico3
     *
     * @return RedazioneStruttura
     */
    public function setProdottoTipico3($prodottoTipico3)
    {
        $this->prodottoTipico3 = $prodottoTipico3;

        return $this;
    }

    /**
     * Get prodottoTipico3
     *
     * @return string
     */
    public function getProdottoTipico3()
    {
        return $this->prodottoTipico3;
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
