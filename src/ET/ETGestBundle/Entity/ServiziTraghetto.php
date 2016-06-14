<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziTraghetto
 *
 * @ORM\Table(name="servizi_traghetto", indexes={@ORM\Index(name="partenzanazione_idx", columns={"partenzaNazione"}), @ORM\Index(name="destinazionenazione_idx", columns={"destinazioneNazione"})})
 * @ORM\Entity
 */
class ServiziTraghetto
{
    /**
     * @var string
     *
     * @ORM\Column(name="partenzaNazione", type="string", length=4, nullable=true)
     */
    private $partenzanazione;

    /**
     * @var string
     *
     * @ORM\Column(name="destinazioneNazione", type="string", length=4, nullable=true)
     */
    private $destinazionenazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataIN", type="date", nullable=true)
     */
    private $datain;

    /**
     * @var string
     *
     * @ORM\Column(name="andataLuogo", type="string", length=50, nullable=true)
     */
    private $andataluogo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="andataOre", type="time", nullable=true)
     */
    private $andataore;

    /**
     * @var string
     *
     * @ORM\Column(name="andataArrivoLuogo", type="string", length=50, nullable=true)
     */
    private $andataarrivoluogo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="andataArrivoOre", type="time", nullable=true)
     */
    private $andataarrivoore;

    /**
     * @var string
     *
     * @ORM\Column(name="andataSistemazioni", type="text", nullable=true)
     */
    private $andatasistemazioni;

    /**
     * @var string
     *
     * @ORM\Column(name="andataSistemazioniText", type="text", length=65535, nullable=false)
     */
    private $andatasistemazionitext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataOUT", type="date", nullable=true)
     */
    private $dataout;

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoLuogo", type="string", length=50, nullable=true)
     */
    private $ritornoluogo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ritornoOre", type="time", nullable=true)
     */
    private $ritornoore;

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoArrivoLuogo", type="string", length=50, nullable=true)
     */
    private $ritornoarrivoluogo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ritornoArrivoOre", type="time", nullable=true)
     */
    private $ritornoarrivoore;

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoSistemazioni", type="text", nullable=true)
     */
    private $ritornosistemazioni;

    /**
     * @var string
     *
     * @ORM\Column(name="ritornoSistemazioniText", type="text", length=65535, nullable=false)
     */
    private $ritornosistemazionitext;

    /**
     * @var string
     *
     * @ORM\Column(name="mezzoTipo", type="string", length=255, nullable=true)
     */
    private $mezzotipo;

    /**
     * @var string
     *
     * @ORM\Column(name="mezzoModello", type="string", length=255, nullable=true)
     */
    private $mezzomodello;

    /**
     * @var string
     *
     * @ORM\Column(name="mezzoTarga", type="string", length=20, nullable=true)
     */
    private $mezzotarga;

    /**
     * @var string
     *
     * @ORM\Column(name="mezzoDimensione", type="string", length=255, nullable=true)
     */
    private $mezzodimensione = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="confermaPrenotazione", type="boolean", nullable=true)
     */
    private $confermaprenotazione = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set partenzanazione
     *
     * @param string $partenzanazione
     *
     * @return ServiziTraghetto
     */
    public function setPartenzanazione($partenzanazione)
    {
        $this->partenzanazione = $partenzanazione;

        return $this;
    }

    /**
     * Get partenzanazione
     *
     * @return string
     */
    public function getPartenzanazione()
    {
        return $this->partenzanazione;
    }

    /**
     * Set destinazionenazione
     *
     * @param string $destinazionenazione
     *
     * @return ServiziTraghetto
     */
    public function setDestinazionenazione($destinazionenazione)
    {
        $this->destinazionenazione = $destinazionenazione;

        return $this;
    }

    /**
     * Get destinazionenazione
     *
     * @return string
     */
    public function getDestinazionenazione()
    {
        return $this->destinazionenazione;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ServiziTraghetto
     */
    public function setDatain($datain)
    {
        $this->datain = $datain;

        return $this;
    }

    /**
     * Get datain
     *
     * @return \DateTime
     */
    public function getDatain()
    {
        return $this->datain;
    }

    /**
     * Set andataluogo
     *
     * @param string $andataluogo
     *
     * @return ServiziTraghetto
     */
    public function setAndataluogo($andataluogo)
    {
        $this->andataluogo = $andataluogo;

        return $this;
    }

    /**
     * Get andataluogo
     *
     * @return string
     */
    public function getAndataluogo()
    {
        return $this->andataluogo;
    }

    /**
     * Set andataore
     *
     * @param \DateTime $andataore
     *
     * @return ServiziTraghetto
     */
    public function setAndataore($andataore)
    {
        $this->andataore = $andataore;

        return $this;
    }

    /**
     * Get andataore
     *
     * @return \DateTime
     */
    public function getAndataore()
    {
        return $this->andataore;
    }

    /**
     * Set andataarrivoluogo
     *
     * @param string $andataarrivoluogo
     *
     * @return ServiziTraghetto
     */
    public function setAndataarrivoluogo($andataarrivoluogo)
    {
        $this->andataarrivoluogo = $andataarrivoluogo;

        return $this;
    }

    /**
     * Get andataarrivoluogo
     *
     * @return string
     */
    public function getAndataarrivoluogo()
    {
        return $this->andataarrivoluogo;
    }

    /**
     * Set andataarrivoore
     *
     * @param \DateTime $andataarrivoore
     *
     * @return ServiziTraghetto
     */
    public function setAndataarrivoore($andataarrivoore)
    {
        $this->andataarrivoore = $andataarrivoore;

        return $this;
    }

    /**
     * Get andataarrivoore
     *
     * @return \DateTime
     */
    public function getAndataarrivoore()
    {
        return $this->andataarrivoore;
    }

    /**
     * Set andatasistemazioni
     *
     * @param string $andatasistemazioni
     *
     * @return ServiziTraghetto
     */
    public function setAndatasistemazioni($andatasistemazioni)
    {
        $this->andatasistemazioni = $andatasistemazioni;

        return $this;
    }

    /**
     * Get andatasistemazioni
     *
     * @return string
     */
    public function getAndatasistemazioni()
    {
        return $this->andatasistemazioni;
    }

    /**
     * Set andatasistemazionitext
     *
     * @param string $andatasistemazionitext
     *
     * @return ServiziTraghetto
     */
    public function setAndatasistemazionitext($andatasistemazionitext)
    {
        $this->andatasistemazionitext = $andatasistemazionitext;

        return $this;
    }

    /**
     * Get andatasistemazionitext
     *
     * @return string
     */
    public function getAndatasistemazionitext()
    {
        return $this->andatasistemazionitext;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ServiziTraghetto
     */
    public function setDataout($dataout)
    {
        $this->dataout = $dataout;

        return $this;
    }

    /**
     * Get dataout
     *
     * @return \DateTime
     */
    public function getDataout()
    {
        return $this->dataout;
    }

    /**
     * Set ritornoluogo
     *
     * @param string $ritornoluogo
     *
     * @return ServiziTraghetto
     */
    public function setRitornoluogo($ritornoluogo)
    {
        $this->ritornoluogo = $ritornoluogo;

        return $this;
    }

    /**
     * Get ritornoluogo
     *
     * @return string
     */
    public function getRitornoluogo()
    {
        return $this->ritornoluogo;
    }

    /**
     * Set ritornoore
     *
     * @param \DateTime $ritornoore
     *
     * @return ServiziTraghetto
     */
    public function setRitornoore($ritornoore)
    {
        $this->ritornoore = $ritornoore;

        return $this;
    }

    /**
     * Get ritornoore
     *
     * @return \DateTime
     */
    public function getRitornoore()
    {
        return $this->ritornoore;
    }

    /**
     * Set ritornoarrivoluogo
     *
     * @param string $ritornoarrivoluogo
     *
     * @return ServiziTraghetto
     */
    public function setRitornoarrivoluogo($ritornoarrivoluogo)
    {
        $this->ritornoarrivoluogo = $ritornoarrivoluogo;

        return $this;
    }

    /**
     * Get ritornoarrivoluogo
     *
     * @return string
     */
    public function getRitornoarrivoluogo()
    {
        return $this->ritornoarrivoluogo;
    }

    /**
     * Set ritornoarrivoore
     *
     * @param \DateTime $ritornoarrivoore
     *
     * @return ServiziTraghetto
     */
    public function setRitornoarrivoore($ritornoarrivoore)
    {
        $this->ritornoarrivoore = $ritornoarrivoore;

        return $this;
    }

    /**
     * Get ritornoarrivoore
     *
     * @return \DateTime
     */
    public function getRitornoarrivoore()
    {
        return $this->ritornoarrivoore;
    }

    /**
     * Set ritornosistemazioni
     *
     * @param string $ritornosistemazioni
     *
     * @return ServiziTraghetto
     */
    public function setRitornosistemazioni($ritornosistemazioni)
    {
        $this->ritornosistemazioni = $ritornosistemazioni;

        return $this;
    }

    /**
     * Get ritornosistemazioni
     *
     * @return string
     */
    public function getRitornosistemazioni()
    {
        return $this->ritornosistemazioni;
    }

    /**
     * Set ritornosistemazionitext
     *
     * @param string $ritornosistemazionitext
     *
     * @return ServiziTraghetto
     */
    public function setRitornosistemazionitext($ritornosistemazionitext)
    {
        $this->ritornosistemazionitext = $ritornosistemazionitext;

        return $this;
    }

    /**
     * Get ritornosistemazionitext
     *
     * @return string
     */
    public function getRitornosistemazionitext()
    {
        return $this->ritornosistemazionitext;
    }

    /**
     * Set mezzotipo
     *
     * @param string $mezzotipo
     *
     * @return ServiziTraghetto
     */
    public function setMezzotipo($mezzotipo)
    {
        $this->mezzotipo = $mezzotipo;

        return $this;
    }

    /**
     * Get mezzotipo
     *
     * @return string
     */
    public function getMezzotipo()
    {
        return $this->mezzotipo;
    }

    /**
     * Set mezzomodello
     *
     * @param string $mezzomodello
     *
     * @return ServiziTraghetto
     */
    public function setMezzomodello($mezzomodello)
    {
        $this->mezzomodello = $mezzomodello;

        return $this;
    }

    /**
     * Get mezzomodello
     *
     * @return string
     */
    public function getMezzomodello()
    {
        return $this->mezzomodello;
    }

    /**
     * Set mezzotarga
     *
     * @param string $mezzotarga
     *
     * @return ServiziTraghetto
     */
    public function setMezzotarga($mezzotarga)
    {
        $this->mezzotarga = $mezzotarga;

        return $this;
    }

    /**
     * Get mezzotarga
     *
     * @return string
     */
    public function getMezzotarga()
    {
        return $this->mezzotarga;
    }

    /**
     * Set mezzodimensione
     *
     * @param string $mezzodimensione
     *
     * @return ServiziTraghetto
     */
    public function setMezzodimensione($mezzodimensione)
    {
        $this->mezzodimensione = $mezzodimensione;

        return $this;
    }

    /**
     * Get mezzodimensione
     *
     * @return string
     */
    public function getMezzodimensione()
    {
        return $this->mezzodimensione;
    }

    /**
     * Set confermaprenotazione
     *
     * @param boolean $confermaprenotazione
     *
     * @return ServiziTraghetto
     */
    public function setConfermaprenotazione($confermaprenotazione)
    {
        $this->confermaprenotazione = $confermaprenotazione;

        return $this;
    }

    /**
     * Get confermaprenotazione
     *
     * @return boolean
     */
    public function getConfermaprenotazione()
    {
        return $this->confermaprenotazione;
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
