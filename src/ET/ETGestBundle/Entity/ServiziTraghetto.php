<?php

namespace ET\ETGestBundle\Entity;

/**
 * ServiziTraghetto
 */
class ServiziTraghetto
{
    /**
     * @var string
     */
    private $partenzanazione;

    /**
     * @var string
     */
    private $destinazionenazione;

    /**
     * @var \DateTime
     */
    private $datain;

    /**
     * @var string
     */
    private $andataluogo;

    /**
     * @var \DateTime
     */
    private $andataore;

    /**
     * @var string
     */
    private $andataarrivoluogo;

    /**
     * @var \DateTime
     */
    private $andataarrivoore;

    /**
     * @var string
     */
    private $andatasistemazioni;

    /**
     * @var string
     */
    private $andatasistemazionitext;

    /**
     * @var \DateTime
     */
    private $dataout;

    /**
     * @var string
     */
    private $ritornoluogo;

    /**
     * @var \DateTime
     */
    private $ritornoore;

    /**
     * @var string
     */
    private $ritornoarrivoluogo;

    /**
     * @var \DateTime
     */
    private $ritornoarrivoore;

    /**
     * @var string
     */
    private $ritornosistemazioni;

    /**
     * @var string
     */
    private $ritornosistemazionitext;

    /**
     * @var string
     */
    private $mezzotipo;

    /**
     * @var string
     */
    private $mezzomodello;

    /**
     * @var string
     */
    private $mezzotarga;

    /**
     * @var string
     */
    private $mezzodimensione = '0';

    /**
     * @var boolean
     */
    private $confermaprenotazione = '0';

    /**
     * @var integer
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

