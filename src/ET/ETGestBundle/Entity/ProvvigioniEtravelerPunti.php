<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProvvigioniEtravelerPunti
 *
 * @ORM\Table(name="provvigioni_etraveler_punti")
 * @ORM\Entity
 */
class ProvvigioniEtravelerPunti
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ticket", type="integer", nullable=false)
     */
    private $idTicket = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="punteggio", type="integer", nullable=false)
     */
    private $punteggio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var boolean
     *
     * @ORM\Column(name="saldato", type="boolean", nullable=false)
     */
    private $saldato = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataSaldato", type="datetime", nullable=true)
     */
    private $datasaldato;

    /**
     * @var float
     *
     * @ORM\Column(name="valorePunto", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorepunto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ticket", type="datetime", nullable=true)
     */
    private $dataTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idViaggio;

    /**
     * @var string
     *
     * @ORM\Column(name="provvigione", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $provvigione;

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotore", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codpromotore;



    /**
     * Set idTicket
     *
     * @param integer $idTicket
     *
     * @return ProvvigioniEtravelerPunti
     */
    public function setIdTicket($idTicket)
    {
        $this->idTicket = $idTicket;

        return $this;
    }

    /**
     * Get idTicket
     *
     * @return integer
     */
    public function getIdTicket()
    {
        return $this->idTicket;
    }

    /**
     * Set punteggio
     *
     * @param integer $punteggio
     *
     * @return ProvvigioniEtravelerPunti
     */
    public function setPunteggio($punteggio)
    {
        $this->punteggio = $punteggio;

        return $this;
    }

    /**
     * Get punteggio
     *
     * @return integer
     */
    public function getPunteggio()
    {
        return $this->punteggio;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return ProvvigioniEtravelerPunti
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
     * Set saldato
     *
     * @param boolean $saldato
     *
     * @return ProvvigioniEtravelerPunti
     */
    public function setSaldato($saldato)
    {
        $this->saldato = $saldato;

        return $this;
    }

    /**
     * Get saldato
     *
     * @return boolean
     */
    public function getSaldato()
    {
        return $this->saldato;
    }

    /**
     * Set datasaldato
     *
     * @param \DateTime $datasaldato
     *
     * @return ProvvigioniEtravelerPunti
     */
    public function setDatasaldato($datasaldato)
    {
        $this->datasaldato = $datasaldato;

        return $this;
    }

    /**
     * Get datasaldato
     *
     * @return \DateTime
     */
    public function getDatasaldato()
    {
        return $this->datasaldato;
    }

    /**
     * Set valorepunto
     *
     * @param float $valorepunto
     *
     * @return ProvvigioniEtravelerPunti
     */
    public function setValorepunto($valorepunto)
    {
        $this->valorepunto = $valorepunto;

        return $this;
    }

    /**
     * Get valorepunto
     *
     * @return float
     */
    public function getValorepunto()
    {
        return $this->valorepunto;
    }

    /**
     * Set dataTicket
     *
     * @param \DateTime $dataTicket
     *
     * @return ProvvigioniEtravelerPunti
     */
    public function setDataTicket($dataTicket)
    {
        $this->dataTicket = $dataTicket;

        return $this;
    }

    /**
     * Get dataTicket
     *
     * @return \DateTime
     */
    public function getDataTicket()
    {
        return $this->dataTicket;
    }

    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return ProvvigioniEtravelerPunti
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
     * Set provvigione
     *
     * @param string $provvigione
     *
     * @return ProvvigioniEtravelerPunti
     */
    public function setProvvigione($provvigione)
    {
        $this->provvigione = $provvigione;

        return $this;
    }

    /**
     * Get provvigione
     *
     * @return string
     */
    public function getProvvigione()
    {
        return $this->provvigione;
    }

    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return ProvvigioniEtravelerPunti
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
}
