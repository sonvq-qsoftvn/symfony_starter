<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * Password
 */
class Password
{
    /**
     * @var string
     */
    private $userid = '';

    /**
     * @var string
     */
    private $passwd = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $redazionali = '';

    /**
     * @var string
     */
    private $redattore = '';

    /**
     * @var integer
     */
    private $numRedazionali = '0';

    /**
     * @var string
     */
    private $strutture = '';

    /**
     * @var integer
     */
    private $numStrutture = '0';

    /**
     * @var string
     */
    private $prodotti = '';

    /**
     * @var string
     */
    private $ricerca = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userid
     *
     * @param string $userid
     *
     * @return Password
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     *
     * @return Password
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Password
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
     * Set redazionali
     *
     * @param string $redazionali
     *
     * @return Password
     */
    public function setRedazionali($redazionali)
    {
        $this->redazionali = $redazionali;

        return $this;
    }

    /**
     * Get redazionali
     *
     * @return string
     */
    public function getRedazionali()
    {
        return $this->redazionali;
    }

    /**
     * Set redattore
     *
     * @param string $redattore
     *
     * @return Password
     */
    public function setRedattore($redattore)
    {
        $this->redattore = $redattore;

        return $this;
    }

    /**
     * Get redattore
     *
     * @return string
     */
    public function getRedattore()
    {
        return $this->redattore;
    }

    /**
     * Set numRedazionali
     *
     * @param integer $numRedazionali
     *
     * @return Password
     */
    public function setNumRedazionali($numRedazionali)
    {
        $this->numRedazionali = $numRedazionali;

        return $this;
    }

    /**
     * Get numRedazionali
     *
     * @return integer
     */
    public function getNumRedazionali()
    {
        return $this->numRedazionali;
    }

    /**
     * Set strutture
     *
     * @param string $strutture
     *
     * @return Password
     */
    public function setStrutture($strutture)
    {
        $this->strutture = $strutture;

        return $this;
    }

    /**
     * Get strutture
     *
     * @return string
     */
    public function getStrutture()
    {
        return $this->strutture;
    }

    /**
     * Set numStrutture
     *
     * @param integer $numStrutture
     *
     * @return Password
     */
    public function setNumStrutture($numStrutture)
    {
        $this->numStrutture = $numStrutture;

        return $this;
    }

    /**
     * Get numStrutture
     *
     * @return integer
     */
    public function getNumStrutture()
    {
        return $this->numStrutture;
    }

    /**
     * Set prodotti
     *
     * @param string $prodotti
     *
     * @return Password
     */
    public function setProdotti($prodotti)
    {
        $this->prodotti = $prodotti;

        return $this;
    }

    /**
     * Get prodotti
     *
     * @return string
     */
    public function getProdotti()
    {
        return $this->prodotti;
    }

    /**
     * Set ricerca
     *
     * @param string $ricerca
     *
     * @return Password
     */
    public function setRicerca($ricerca)
    {
        $this->ricerca = $ricerca;

        return $this;
    }

    /**
     * Get ricerca
     *
     * @return string
     */
    public function getRicerca()
    {
        return $this->ricerca;
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

