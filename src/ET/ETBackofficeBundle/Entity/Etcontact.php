<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * Etcontact
 */
class Etcontact
{
    /**
     * @var \DateTime
     */
    private $data = '0000-00-00';

    /**
     * @var string
     */
    private $reparto = '';

    /**
     * @var string
     */
    private $nome = '';

    /**
     * @var string
     */
    private $cognome = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $oggetto = '';

    /**
     * @var string
     */
    private $body;

    /**
     * @var integer
     */
    private $idEtcontact;


    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Etcontact
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
     * Set reparto
     *
     * @param string $reparto
     *
     * @return Etcontact
     */
    public function setReparto($reparto)
    {
        $this->reparto = $reparto;

        return $this;
    }

    /**
     * Get reparto
     *
     * @return string
     */
    public function getReparto()
    {
        return $this->reparto;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Etcontact
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Etcontact
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etcontact
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
     * Set oggetto
     *
     * @param string $oggetto
     *
     * @return Etcontact
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;

        return $this;
    }

    /**
     * Get oggetto
     *
     * @return string
     */
    public function getOggetto()
    {
        return $this->oggetto;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Etcontact
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get idEtcontact
     *
     * @return integer
     */
    public function getIdEtcontact()
    {
        return $this->idEtcontact;
    }
}

