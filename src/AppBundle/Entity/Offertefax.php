<?php

namespace AppBundle\Entity;

/**
 * Offertefax
 */
class Offertefax
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
     * @var \DateTime
     */
    private $dataPartenza6 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza7 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza8 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza9 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza10 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza11 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza12 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza13 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza14 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza15 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza16 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza17 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza18 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza19 = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dataPartenza20 = '0000-00-00';

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
    private $cittaPartenza6;

    /**
     * @var string
     */
    private $cittaPartenza7;

    /**
     * @var string
     */
    private $cittaPartenza8;

    /**
     * @var string
     */
    private $cittaPartenza9;

    /**
     * @var string
     */
    private $cittaPartenza10;

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
     * @var string
     */
    private $agenti = 'false';

    /**
     * @var string
     */
    private $dalal = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * Set dataPartenza6
     *
     * @param \DateTime $dataPartenza6
     *
     * @return Offertefax
     */
    public function setDataPartenza6($dataPartenza6)
    {
        $this->dataPartenza6 = $dataPartenza6;

        return $this;
    }

    /**
     * Get dataPartenza6
     *
     * @return \DateTime
     */
    public function getDataPartenza6()
    {
        return $this->dataPartenza6;
    }

    /**
     * Set dataPartenza7
     *
     * @param \DateTime $dataPartenza7
     *
     * @return Offertefax
     */
    public function setDataPartenza7($dataPartenza7)
    {
        $this->dataPartenza7 = $dataPartenza7;

        return $this;
    }

    /**
     * Get dataPartenza7
     *
     * @return \DateTime
     */
    public function getDataPartenza7()
    {
        return $this->dataPartenza7;
    }

    /**
     * Set dataPartenza8
     *
     * @param \DateTime $dataPartenza8
     *
     * @return Offertefax
     */
    public function setDataPartenza8($dataPartenza8)
    {
        $this->dataPartenza8 = $dataPartenza8;

        return $this;
    }

    /**
     * Get dataPartenza8
     *
     * @return \DateTime
     */
    public function getDataPartenza8()
    {
        return $this->dataPartenza8;
    }

    /**
     * Set dataPartenza9
     *
     * @param \DateTime $dataPartenza9
     *
     * @return Offertefax
     */
    public function setDataPartenza9($dataPartenza9)
    {
        $this->dataPartenza9 = $dataPartenza9;

        return $this;
    }

    /**
     * Get dataPartenza9
     *
     * @return \DateTime
     */
    public function getDataPartenza9()
    {
        return $this->dataPartenza9;
    }

    /**
     * Set dataPartenza10
     *
     * @param \DateTime $dataPartenza10
     *
     * @return Offertefax
     */
    public function setDataPartenza10($dataPartenza10)
    {
        $this->dataPartenza10 = $dataPartenza10;

        return $this;
    }

    /**
     * Get dataPartenza10
     *
     * @return \DateTime
     */
    public function getDataPartenza10()
    {
        return $this->dataPartenza10;
    }

    /**
     * Set dataPartenza11
     *
     * @param \DateTime $dataPartenza11
     *
     * @return Offertefax
     */
    public function setDataPartenza11($dataPartenza11)
    {
        $this->dataPartenza11 = $dataPartenza11;

        return $this;
    }

    /**
     * Get dataPartenza11
     *
     * @return \DateTime
     */
    public function getDataPartenza11()
    {
        return $this->dataPartenza11;
    }

    /**
     * Set dataPartenza12
     *
     * @param \DateTime $dataPartenza12
     *
     * @return Offertefax
     */
    public function setDataPartenza12($dataPartenza12)
    {
        $this->dataPartenza12 = $dataPartenza12;

        return $this;
    }

    /**
     * Get dataPartenza12
     *
     * @return \DateTime
     */
    public function getDataPartenza12()
    {
        return $this->dataPartenza12;
    }

    /**
     * Set dataPartenza13
     *
     * @param \DateTime $dataPartenza13
     *
     * @return Offertefax
     */
    public function setDataPartenza13($dataPartenza13)
    {
        $this->dataPartenza13 = $dataPartenza13;

        return $this;
    }

    /**
     * Get dataPartenza13
     *
     * @return \DateTime
     */
    public function getDataPartenza13()
    {
        return $this->dataPartenza13;
    }

    /**
     * Set dataPartenza14
     *
     * @param \DateTime $dataPartenza14
     *
     * @return Offertefax
     */
    public function setDataPartenza14($dataPartenza14)
    {
        $this->dataPartenza14 = $dataPartenza14;

        return $this;
    }

    /**
     * Get dataPartenza14
     *
     * @return \DateTime
     */
    public function getDataPartenza14()
    {
        return $this->dataPartenza14;
    }

    /**
     * Set dataPartenza15
     *
     * @param \DateTime $dataPartenza15
     *
     * @return Offertefax
     */
    public function setDataPartenza15($dataPartenza15)
    {
        $this->dataPartenza15 = $dataPartenza15;

        return $this;
    }

    /**
     * Get dataPartenza15
     *
     * @return \DateTime
     */
    public function getDataPartenza15()
    {
        return $this->dataPartenza15;
    }

    /**
     * Set dataPartenza16
     *
     * @param \DateTime $dataPartenza16
     *
     * @return Offertefax
     */
    public function setDataPartenza16($dataPartenza16)
    {
        $this->dataPartenza16 = $dataPartenza16;

        return $this;
    }

    /**
     * Get dataPartenza16
     *
     * @return \DateTime
     */
    public function getDataPartenza16()
    {
        return $this->dataPartenza16;
    }

    /**
     * Set dataPartenza17
     *
     * @param \DateTime $dataPartenza17
     *
     * @return Offertefax
     */
    public function setDataPartenza17($dataPartenza17)
    {
        $this->dataPartenza17 = $dataPartenza17;

        return $this;
    }

    /**
     * Get dataPartenza17
     *
     * @return \DateTime
     */
    public function getDataPartenza17()
    {
        return $this->dataPartenza17;
    }

    /**
     * Set dataPartenza18
     *
     * @param \DateTime $dataPartenza18
     *
     * @return Offertefax
     */
    public function setDataPartenza18($dataPartenza18)
    {
        $this->dataPartenza18 = $dataPartenza18;

        return $this;
    }

    /**
     * Get dataPartenza18
     *
     * @return \DateTime
     */
    public function getDataPartenza18()
    {
        return $this->dataPartenza18;
    }

    /**
     * Set dataPartenza19
     *
     * @param \DateTime $dataPartenza19
     *
     * @return Offertefax
     */
    public function setDataPartenza19($dataPartenza19)
    {
        $this->dataPartenza19 = $dataPartenza19;

        return $this;
    }

    /**
     * Get dataPartenza19
     *
     * @return \DateTime
     */
    public function getDataPartenza19()
    {
        return $this->dataPartenza19;
    }

    /**
     * Set dataPartenza20
     *
     * @param \DateTime $dataPartenza20
     *
     * @return Offertefax
     */
    public function setDataPartenza20($dataPartenza20)
    {
        $this->dataPartenza20 = $dataPartenza20;

        return $this;
    }

    /**
     * Get dataPartenza20
     *
     * @return \DateTime
     */
    public function getDataPartenza20()
    {
        return $this->dataPartenza20;
    }

    /**
     * Set cittaPartenza1
     *
     * @param string $cittaPartenza1
     *
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * Set cittaPartenza6
     *
     * @param string $cittaPartenza6
     *
     * @return Offertefax
     */
    public function setCittaPartenza6($cittaPartenza6)
    {
        $this->cittaPartenza6 = $cittaPartenza6;

        return $this;
    }

    /**
     * Get cittaPartenza6
     *
     * @return string
     */
    public function getCittaPartenza6()
    {
        return $this->cittaPartenza6;
    }

    /**
     * Set cittaPartenza7
     *
     * @param string $cittaPartenza7
     *
     * @return Offertefax
     */
    public function setCittaPartenza7($cittaPartenza7)
    {
        $this->cittaPartenza7 = $cittaPartenza7;

        return $this;
    }

    /**
     * Get cittaPartenza7
     *
     * @return string
     */
    public function getCittaPartenza7()
    {
        return $this->cittaPartenza7;
    }

    /**
     * Set cittaPartenza8
     *
     * @param string $cittaPartenza8
     *
     * @return Offertefax
     */
    public function setCittaPartenza8($cittaPartenza8)
    {
        $this->cittaPartenza8 = $cittaPartenza8;

        return $this;
    }

    /**
     * Get cittaPartenza8
     *
     * @return string
     */
    public function getCittaPartenza8()
    {
        return $this->cittaPartenza8;
    }

    /**
     * Set cittaPartenza9
     *
     * @param string $cittaPartenza9
     *
     * @return Offertefax
     */
    public function setCittaPartenza9($cittaPartenza9)
    {
        $this->cittaPartenza9 = $cittaPartenza9;

        return $this;
    }

    /**
     * Get cittaPartenza9
     *
     * @return string
     */
    public function getCittaPartenza9()
    {
        return $this->cittaPartenza9;
    }

    /**
     * Set cittaPartenza10
     *
     * @param string $cittaPartenza10
     *
     * @return Offertefax
     */
    public function setCittaPartenza10($cittaPartenza10)
    {
        $this->cittaPartenza10 = $cittaPartenza10;

        return $this;
    }

    /**
     * Get cittaPartenza10
     *
     * @return string
     */
    public function getCittaPartenza10()
    {
        return $this->cittaPartenza10;
    }

    /**
     * Set tipoOfferta
     *
     * @param string $tipoOfferta
     *
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * @return Offertefax
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
     * Set agenti
     *
     * @param string $agenti
     *
     * @return Offertefax
     */
    public function setAgenti($agenti)
    {
        $this->agenti = $agenti;

        return $this;
    }

    /**
     * Get agenti
     *
     * @return string
     */
    public function getAgenti()
    {
        return $this->agenti;
    }

    /**
     * Set dalal
     *
     * @param string $dalal
     *
     * @return Offertefax
     */
    public function setDalal($dalal)
    {
        $this->dalal = $dalal;

        return $this;
    }

    /**
     * Get dalal
     *
     * @return string
     */
    public function getDalal()
    {
        return $this->dalal;
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
