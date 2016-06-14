<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreventiviAttesa
 *
 * @ORM\Table(name="preventivi_attesa", indexes={@ORM\Index(name="codpromotore_idx", columns={"codpromotore"}), @ORM\Index(name="codpromotorecreazione_idx", columns={"codpromotorecreazione"}), @ORM\Index(name="codpromotoremodifica_idx", columns={"codpromotoremodifica"}), @ORM\Index(name="id_viaggio_idx", columns={"id_viaggio"})})
 * @ORM\Entity
 */
class PreventiviAttesa
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
     * @ORM\Column(name="codpromotore", type="integer", nullable=true)
     */
    private $codpromotore;

    /**
     * @var integer
     *
     * @ORM\Column(name="codpromotorecreazione", type="integer", nullable=true)
     */
    private $codpromotorecreazione;

    /**
     * @var integer
     *
     * @ORM\Column(name="codpromotoremodifica", type="integer", nullable=true)
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
     * @ORM\Column(name="destinataricopia", type="text", nullable=true)
     */
    private $destinataricopia;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatarinascosti", type="text", nullable=true)
     */
    private $destinatarinascosti;

    /**
     * @var string
     *
     * @ORM\Column(name="prpRichiesta", type="string", length=255, nullable=false)
     */
    private $prprichiesta;

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
     * @var \DateTime
     *
     * @ORM\Column(name="datainvio", type="datetime", nullable=true)
     */
    private $datainvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datapreventivo", type="datetime", nullable=true)
     */
    private $datapreventivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datamodifica", type="datetime", nullable=false)
     */
    private $datamodifica;

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
