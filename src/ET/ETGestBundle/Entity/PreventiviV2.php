<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreventiviV2
 *
 * @ORM\Table(name="preventivi_v2", indexes={@ORM\Index(name="codpromotore_idx", columns={"codPromotore"}), @ORM\Index(name="codpromotorecreazione_idx", columns={"codPromotoreCreazione"}), @ORM\Index(name="codpromotoremodifica_idx", columns={"codPromotoreModifica"}), @ORM\Index(name="id_viaggio_idx", columns={"id_viaggio"})})
 * @ORM\Entity
 */
class PreventiviV2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="bigint", nullable=true)
     */
    private $idViaggio;

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer", nullable=true)
     */
    private $codpromotore;

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreCreazione", type="integer", nullable=true)
     */
    private $codpromotorecreazione;

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreModifica", type="integer", nullable=true)
     */
    private $codpromotoremodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatari", type="text", nullable=true)
     */
    private $destinatari;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatariCopia", type="text", nullable=true)
     */
    private $destinataricopia;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatariNascosti", type="text", nullable=true)
     */
    private $destinatarinascosti;

    /**
     * @var string
     *
     * @ORM\Column(name="prpRichiesta", type="string", length=255, nullable=false)
     */
    private $prprichiesta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prpInCopia", type="boolean", nullable=false)
     */
    private $prpincopia = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=255, nullable=false)
     */
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="corpo", type="text", nullable=false)
     */
    private $corpo;

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text", nullable=true)
     */
    private $nota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInvio", type="datetime", nullable=true)
     */
    private $datainvio;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoInvio", type="string", length=50, nullable=true)
     */
    private $tipoinvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAccettato", type="datetime", nullable=true)
     */
    private $dataaccettato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAccettatoAnnullato", type="datetime", nullable=true)
     */
    private $dataaccettatoannullato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataLetto", type="datetime", nullable=true)
     */
    private $dataletto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataModifica", type="datetime", nullable=false)
     */
    private $datamodifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="duplicato", type="bigint", nullable=false)
     */
    private $duplicato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
