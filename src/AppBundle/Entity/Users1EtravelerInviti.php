<?php

namespace AppBundle\Entity;

/**
 * Users1EtravelerInviti
 */
class Users1EtravelerInviti
{
    /**
     * @var integer
     */
    private $idEtravelerMittente = '0';

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $datainvito;

    /**
     * @var integer
     */
    private $idEtraveler = '0';

    /**
     * @var \DateTime
     */
    private $dataiscritto;

    /**
     * @var boolean
     */
    private $saldato = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idEtravelerMittente
     *
     * @param integer $idEtravelerMittente
     *
     * @return Users1EtravelerInviti
     */
    public function setIdEtravelerMittente($idEtravelerMittente)
    {
        $this->idEtravelerMittente = $idEtravelerMittente;

        return $this;
    }

    /**
     * Get idEtravelerMittente
     *
     * @return integer
     */
    public function getIdEtravelerMittente()
    {
        return $this->idEtravelerMittente;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users1EtravelerInviti
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
     * Set datainvito
     *
     * @param \DateTime $datainvito
     *
     * @return Users1EtravelerInviti
     */
    public function setDatainvito($datainvito)
    {
        $this->datainvito = $datainvito;

        return $this;
    }

    /**
     * Get datainvito
     *
     * @return \DateTime
     */
    public function getDatainvito()
    {
        return $this->datainvito;
    }

    /**
     * Set idEtraveler
     *
     * @param integer $idEtraveler
     *
     * @return Users1EtravelerInviti
     */
    public function setIdEtraveler($idEtraveler)
    {
        $this->idEtraveler = $idEtraveler;

        return $this;
    }

    /**
     * Get idEtraveler
     *
     * @return integer
     */
    public function getIdEtraveler()
    {
        return $this->idEtraveler;
    }

    /**
     * Set dataiscritto
     *
     * @param \DateTime $dataiscritto
     *
     * @return Users1EtravelerInviti
     */
    public function setDataiscritto($dataiscritto)
    {
        $this->dataiscritto = $dataiscritto;

        return $this;
    }

    /**
     * Get dataiscritto
     *
     * @return \DateTime
     */
    public function getDataiscritto()
    {
        return $this->dataiscritto;
    }

    /**
     * Set saldato
     *
     * @param boolean $saldato
     *
     * @return Users1EtravelerInviti
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
