<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * Offertebackup
 */
class Offertebackup
{
    /**
     * @var string
     */
    private $destinazione;

    /**
     * @var \DateTime
     */
    private $dataPartenza1;

    /**
     * @var \DateTime
     */
    private $dataPartenza2;

    /**
     * @var \DateTime
     */
    private $dataPartenza3;

    /**
     * @var \DateTime
     */
    private $dataPartenza4;

    /**
     * @var \DateTime
     */
    private $dataPartenza5;

    /**
     * @var string
     */
    private $cittaPartenza1;

    /**
     * @var string
     */
    private $cittaPartenza2;

    /**
     * @var string
     */
    private $cittaPartenza3;

    /**
     * @var string
     */
    private $cittaPartenza4;

    /**
     * @var string
     */
    private $cittaPartenza5;

    /**
     * @var string
     */
    private $tipoOfferta;

    /**
     * @var integer
     */
    private $prezzoDa;

    /**
     * @var integer
     */
    private $prezzoA;

    /**
     * @var string
     */
    private $tour;

    /**
     * @var \DateTime
     */
    private $dataScadenza;

    /**
     * @var \DateTime
     */
    private $dataInserimento;

    /**
     * @var \DateTime
     */
    private $dataModifica = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $migliore;

    /**
     * @var string
     */
    private $img1;

    /**
     * @var string
     */
    private $img2;

    /**
     * @var string
     */
    private $img3;

    /**
     * @var string
     */
    private $durata;

    /**
     * @var string
     */
    private $nomeInserimento;

    /**
     * @var string
     */
    private $modificato;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return Offertebackup
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
     * Set dataPartenza1
     *
     * @param \DateTime $dataPartenza1
     *
     * @return Offertebackup
     */
    public function setDataPartenza1($dataPartenza1)
    {
        $this->dataPartenza1 = $dataPartenza1;

        return $this;
    }

    /**
     * Get dataPartenza1
     *
     * @return \DateTime
     */
    public function getDataPartenza1()
    {
        return $this->dataPartenza1;
    }

    /**
     * Set dataPartenza2
     *
     * @param \DateTime $dataPartenza2
     *
     * @return Offertebackup
     */
    public function setDataPartenza2($dataPartenza2)
    {
        $this->dataPartenza2 = $dataPartenza2;

        return $this;
    }

    /**
     * Get dataPartenza2
     *
     * @return \DateTime
     */
    public function getDataPartenza2()
    {
        return $this->dataPartenza2;
    }

    /**
     * Set dataPartenza3
     *
     * @param \DateTime $dataPartenza3
     *
     * @return Offertebackup
     */
    public function setDataPartenza3($dataPartenza3)
    {
        $this->dataPartenza3 = $dataPartenza3;

        return $this;
    }

    /**
     * Get dataPartenza3
     *
     * @return \DateTime
     */
    public function getDataPartenza3()
    {
        return $this->dataPartenza3;
    }

    /**
     * Set dataPartenza4
     *
     * @param \DateTime $dataPartenza4
     *
     * @return Offertebackup
     */
    public function setDataPartenza4($dataPartenza4)
    {
        $this->dataPartenza4 = $dataPartenza4;

        return $this;
    }

    /**
     * Get dataPartenza4
     *
     * @return \DateTime
     */
    public function getDataPartenza4()
    {
        return $this->dataPartenza4;
    }

    /**
     * Set dataPartenza5
     *
     * @param \DateTime $dataPartenza5
     *
     * @return Offertebackup
     */
    public function setDataPartenza5($dataPartenza5)
    {
        $this->dataPartenza5 = $dataPartenza5;

        return $this;
    }

    /**
     * Get dataPartenza5
     *
     * @return \DateTime
     */
    public function getDataPartenza5()
    {
        return $this->dataPartenza5;
    }

    /**
     * Set cittaPartenza1
     *
     * @param string $cittaPartenza1
     *
     * @return Offertebackup
     */
    public function setCittaPartenza1($cittaPartenza1)
    {
        $this->cittaPartenza1 = $cittaPartenza1;

        return $this;
    }

    /**
     * Get cittaPartenza1
     *
     * @return string
     */
    public function getCittaPartenza1()
    {
        return $this->cittaPartenza1;
    }

    /**
     * Set cittaPartenza2
     *
     * @param string $cittaPartenza2
     *
     * @return Offertebackup
     */
    public function setCittaPartenza2($cittaPartenza2)
    {
        $this->cittaPartenza2 = $cittaPartenza2;

        return $this;
    }

    /**
     * Get cittaPartenza2
     *
     * @return string
     */
    public function getCittaPartenza2()
    {
        return $this->cittaPartenza2;
    }

    /**
     * Set cittaPartenza3
     *
     * @param string $cittaPartenza3
     *
     * @return Offertebackup
     */
    public function setCittaPartenza3($cittaPartenza3)
    {
        $this->cittaPartenza3 = $cittaPartenza3;

        return $this;
    }

    /**
     * Get cittaPartenza3
     *
     * @return string
     */
    public function getCittaPartenza3()
    {
        return $this->cittaPartenza3;
    }

    /**
     * Set cittaPartenza4
     *
     * @param string $cittaPartenza4
     *
     * @return Offertebackup
     */
    public function setCittaPartenza4($cittaPartenza4)
    {
        $this->cittaPartenza4 = $cittaPartenza4;

        return $this;
    }

    /**
     * Get cittaPartenza4
     *
     * @return string
     */
    public function getCittaPartenza4()
    {
        return $this->cittaPartenza4;
    }

    /**
     * Set cittaPartenza5
     *
     * @param string $cittaPartenza5
     *
     * @return Offertebackup
     */
    public function setCittaPartenza5($cittaPartenza5)
    {
        $this->cittaPartenza5 = $cittaPartenza5;

        return $this;
    }

    /**
     * Get cittaPartenza5
     *
     * @return string
     */
    public function getCittaPartenza5()
    {
        return $this->cittaPartenza5;
    }

    /**
     * Set tipoOfferta
     *
     * @param string $tipoOfferta
     *
     * @return Offertebackup
     */
    public function setTipoOfferta($tipoOfferta)
    {
        $this->tipoOfferta = $tipoOfferta;

        return $this;
    }

    /**
     * Get tipoOfferta
     *
     * @return string
     */
    public function getTipoOfferta()
    {
        return $this->tipoOfferta;
    }

    /**
     * Set prezzoDa
     *
     * @param integer $prezzoDa
     *
     * @return Offertebackup
     */
    public function setPrezzoDa($prezzoDa)
    {
        $this->prezzoDa = $prezzoDa;

        return $this;
    }

    /**
     * Get prezzoDa
     *
     * @return integer
     */
    public function getPrezzoDa()
    {
        return $this->prezzoDa;
    }

    /**
     * Set prezzoA
     *
     * @param integer $prezzoA
     *
     * @return Offertebackup
     */
    public function setPrezzoA($prezzoA)
    {
        $this->prezzoA = $prezzoA;

        return $this;
    }

    /**
     * Get prezzoA
     *
     * @return integer
     */
    public function getPrezzoA()
    {
        return $this->prezzoA;
    }

    /**
     * Set tour
     *
     * @param string $tour
     *
     * @return Offertebackup
     */
    public function setTour($tour)
    {
        $this->tour = $tour;

        return $this;
    }

    /**
     * Get tour
     *
     * @return string
     */
    public function getTour()
    {
        return $this->tour;
    }

    /**
     * Set dataScadenza
     *
     * @param \DateTime $dataScadenza
     *
     * @return Offertebackup
     */
    public function setDataScadenza($dataScadenza)
    {
        $this->dataScadenza = $dataScadenza;

        return $this;
    }

    /**
     * Get dataScadenza
     *
     * @return \DateTime
     */
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }

    /**
     * Set dataInserimento
     *
     * @param \DateTime $dataInserimento
     *
     * @return Offertebackup
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
     * Set dataModifica
     *
     * @param \DateTime $dataModifica
     *
     * @return Offertebackup
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
     * Set migliore
     *
     * @param string $migliore
     *
     * @return Offertebackup
     */
    public function setMigliore($migliore)
    {
        $this->migliore = $migliore;

        return $this;
    }

    /**
     * Get migliore
     *
     * @return string
     */
    public function getMigliore()
    {
        return $this->migliore;
    }

    /**
     * Set img1
     *
     * @param string $img1
     *
     * @return Offertebackup
     */
    public function setImg1($img1)
    {
        $this->img1 = $img1;

        return $this;
    }

    /**
     * Get img1
     *
     * @return string
     */
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * Set img2
     *
     * @param string $img2
     *
     * @return Offertebackup
     */
    public function setImg2($img2)
    {
        $this->img2 = $img2;

        return $this;
    }

    /**
     * Get img2
     *
     * @return string
     */
    public function getImg2()
    {
        return $this->img2;
    }

    /**
     * Set img3
     *
     * @param string $img3
     *
     * @return Offertebackup
     */
    public function setImg3($img3)
    {
        $this->img3 = $img3;

        return $this;
    }

    /**
     * Get img3
     *
     * @return string
     */
    public function getImg3()
    {
        return $this->img3;
    }

    /**
     * Set durata
     *
     * @param string $durata
     *
     * @return Offertebackup
     */
    public function setDurata($durata)
    {
        $this->durata = $durata;

        return $this;
    }

    /**
     * Get durata
     *
     * @return string
     */
    public function getDurata()
    {
        return $this->durata;
    }

    /**
     * Set nomeInserimento
     *
     * @param string $nomeInserimento
     *
     * @return Offertebackup
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
     * Set modificato
     *
     * @param string $modificato
     *
     * @return Offertebackup
     */
    public function setModificato($modificato)
    {
        $this->modificato = $modificato;

        return $this;
    }

    /**
     * Get modificato
     *
     * @return string
     */
    public function getModificato()
    {
        return $this->modificato;
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

