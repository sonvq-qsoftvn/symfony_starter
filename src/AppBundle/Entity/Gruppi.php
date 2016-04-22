<?php

namespace AppBundle\Entity;

/**
 * Gruppi
 */
class Gruppi
{
    /**
     * @var string
     */
    private $nomeGruppo = '';

    /**
     * @var integer
     */
    private $gruppoReale = '0';

    /**
     * @var boolean
     */
    private $admin = '0';

    /**
     * @var boolean
     */
    private $fax = '0';

    /**
     * @var boolean
     */
    private $redazionali = '0';

    /**
     * @var boolean
     */
    private $strutture = '0';

    /**
     * @var boolean
     */
    private $prodotti = '0';

    /**
     * @var boolean
     */
    private $redattore = '0';

    /**
     * @var boolean
     */
    private $agenziaOnline = '0';

    /**
     * @var integer
     */
    private $backOffice = '0';

    /**
     * @var boolean
     */
    private $pannelloAgenti = '0';

    /**
     * @var boolean
     */
    private $pannelloAdmAgenti = '0';

    /**
     * @var boolean
     */
    private $pannelloAdmCampagne = '0';

    /**
     * @var boolean
     */
    private $pannelloAdmPoslavorativa = '0';

    /**
     * @var boolean
     */
    private $gruppoLink = '0';

    /**
     * @var boolean
     */
    private $idetus = '0';

    /**
     * @var boolean
     */
    private $log = '0';

    /**
     * @var boolean
     */
    private $gestioneCorsi = '0';

    /**
     * @var boolean
     */
    private $confermaPrenotazione = '0';

    /**
     * @var boolean
     */
    private $prenota = '0';

    /**
     * @var boolean
     */
    private $ettarget = '0';

    /**
     * @var boolean
     */
    private $changeUser = '0';

    /**
     * @var boolean
     */
    private $gestioneAppaltoClienti = '0';

    /**
     * @var boolean
     */
    private $gestioneAppaltoRichieste = '0';

    /**
     * @var boolean
     */
    private $etmarketplace = '0';

    /**
     * @var boolean
     */
    private $demo = '0';

    /**
     * @var string
     */
    private $credenzialeGruppo;

    /**
     * @var boolean
     */
    private $etgestVersione = '1';

    /**
     * @var integer
     */
    private $gid;


    /**
     * Set nomeGruppo
     *
     * @param string $nomeGruppo
     *
     * @return Gruppi
     */
    public function setNomeGruppo($nomeGruppo)
    {
        $this->nomeGruppo = $nomeGruppo;

        return $this;
    }

    /**
     * Get nomeGruppo
     *
     * @return string
     */
    public function getNomeGruppo()
    {
        return $this->nomeGruppo;
    }

    /**
     * Set gruppoReale
     *
     * @param integer $gruppoReale
     *
     * @return Gruppi
     */
    public function setGruppoReale($gruppoReale)
    {
        $this->gruppoReale = $gruppoReale;

        return $this;
    }

    /**
     * Get gruppoReale
     *
     * @return integer
     */
    public function getGruppoReale()
    {
        return $this->gruppoReale;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     *
     * @return Gruppi
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set fax
     *
     * @param boolean $fax
     *
     * @return Gruppi
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return boolean
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set redazionali
     *
     * @param boolean $redazionali
     *
     * @return Gruppi
     */
    public function setRedazionali($redazionali)
    {
        $this->redazionali = $redazionali;

        return $this;
    }

    /**
     * Get redazionali
     *
     * @return boolean
     */
    public function getRedazionali()
    {
        return $this->redazionali;
    }

    /**
     * Set strutture
     *
     * @param boolean $strutture
     *
     * @return Gruppi
     */
    public function setStrutture($strutture)
    {
        $this->strutture = $strutture;

        return $this;
    }

    /**
     * Get strutture
     *
     * @return boolean
     */
    public function getStrutture()
    {
        return $this->strutture;
    }

    /**
     * Set prodotti
     *
     * @param boolean $prodotti
     *
     * @return Gruppi
     */
    public function setProdotti($prodotti)
    {
        $this->prodotti = $prodotti;

        return $this;
    }

    /**
     * Get prodotti
     *
     * @return boolean
     */
    public function getProdotti()
    {
        return $this->prodotti;
    }

    /**
     * Set redattore
     *
     * @param boolean $redattore
     *
     * @return Gruppi
     */
    public function setRedattore($redattore)
    {
        $this->redattore = $redattore;

        return $this;
    }

    /**
     * Get redattore
     *
     * @return boolean
     */
    public function getRedattore()
    {
        return $this->redattore;
    }

    /**
     * Set agenziaOnline
     *
     * @param boolean $agenziaOnline
     *
     * @return Gruppi
     */
    public function setAgenziaOnline($agenziaOnline)
    {
        $this->agenziaOnline = $agenziaOnline;

        return $this;
    }

    /**
     * Get agenziaOnline
     *
     * @return boolean
     */
    public function getAgenziaOnline()
    {
        return $this->agenziaOnline;
    }

    /**
     * Set backOffice
     *
     * @param integer $backOffice
     *
     * @return Gruppi
     */
    public function setBackOffice($backOffice)
    {
        $this->backOffice = $backOffice;

        return $this;
    }

    /**
     * Get backOffice
     *
     * @return integer
     */
    public function getBackOffice()
    {
        return $this->backOffice;
    }

    /**
     * Set pannelloAgenti
     *
     * @param boolean $pannelloAgenti
     *
     * @return Gruppi
     */
    public function setPannelloAgenti($pannelloAgenti)
    {
        $this->pannelloAgenti = $pannelloAgenti;

        return $this;
    }

    /**
     * Get pannelloAgenti
     *
     * @return boolean
     */
    public function getPannelloAgenti()
    {
        return $this->pannelloAgenti;
    }

    /**
     * Set pannelloAdmAgenti
     *
     * @param boolean $pannelloAdmAgenti
     *
     * @return Gruppi
     */
    public function setPannelloAdmAgenti($pannelloAdmAgenti)
    {
        $this->pannelloAdmAgenti = $pannelloAdmAgenti;

        return $this;
    }

    /**
     * Get pannelloAdmAgenti
     *
     * @return boolean
     */
    public function getPannelloAdmAgenti()
    {
        return $this->pannelloAdmAgenti;
    }

    /**
     * Set pannelloAdmCampagne
     *
     * @param boolean $pannelloAdmCampagne
     *
     * @return Gruppi
     */
    public function setPannelloAdmCampagne($pannelloAdmCampagne)
    {
        $this->pannelloAdmCampagne = $pannelloAdmCampagne;

        return $this;
    }

    /**
     * Get pannelloAdmCampagne
     *
     * @return boolean
     */
    public function getPannelloAdmCampagne()
    {
        return $this->pannelloAdmCampagne;
    }

    /**
     * Set pannelloAdmPoslavorativa
     *
     * @param boolean $pannelloAdmPoslavorativa
     *
     * @return Gruppi
     */
    public function setPannelloAdmPoslavorativa($pannelloAdmPoslavorativa)
    {
        $this->pannelloAdmPoslavorativa = $pannelloAdmPoslavorativa;

        return $this;
    }

    /**
     * Get pannelloAdmPoslavorativa
     *
     * @return boolean
     */
    public function getPannelloAdmPoslavorativa()
    {
        return $this->pannelloAdmPoslavorativa;
    }

    /**
     * Set gruppoLink
     *
     * @param boolean $gruppoLink
     *
     * @return Gruppi
     */
    public function setGruppoLink($gruppoLink)
    {
        $this->gruppoLink = $gruppoLink;

        return $this;
    }

    /**
     * Get gruppoLink
     *
     * @return boolean
     */
    public function getGruppoLink()
    {
        return $this->gruppoLink;
    }

    /**
     * Set idetus
     *
     * @param boolean $idetus
     *
     * @return Gruppi
     */
    public function setIdetus($idetus)
    {
        $this->idetus = $idetus;

        return $this;
    }

    /**
     * Get idetus
     *
     * @return boolean
     */
    public function getIdetus()
    {
        return $this->idetus;
    }

    /**
     * Set log
     *
     * @param boolean $log
     *
     * @return Gruppi
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return boolean
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set gestioneCorsi
     *
     * @param boolean $gestioneCorsi
     *
     * @return Gruppi
     */
    public function setGestioneCorsi($gestioneCorsi)
    {
        $this->gestioneCorsi = $gestioneCorsi;

        return $this;
    }

    /**
     * Get gestioneCorsi
     *
     * @return boolean
     */
    public function getGestioneCorsi()
    {
        return $this->gestioneCorsi;
    }

    /**
     * Set confermaPrenotazione
     *
     * @param boolean $confermaPrenotazione
     *
     * @return Gruppi
     */
    public function setConfermaPrenotazione($confermaPrenotazione)
    {
        $this->confermaPrenotazione = $confermaPrenotazione;

        return $this;
    }

    /**
     * Get confermaPrenotazione
     *
     * @return boolean
     */
    public function getConfermaPrenotazione()
    {
        return $this->confermaPrenotazione;
    }

    /**
     * Set prenota
     *
     * @param boolean $prenota
     *
     * @return Gruppi
     */
    public function setPrenota($prenota)
    {
        $this->prenota = $prenota;

        return $this;
    }

    /**
     * Get prenota
     *
     * @return boolean
     */
    public function getPrenota()
    {
        return $this->prenota;
    }

    /**
     * Set ettarget
     *
     * @param boolean $ettarget
     *
     * @return Gruppi
     */
    public function setEttarget($ettarget)
    {
        $this->ettarget = $ettarget;

        return $this;
    }

    /**
     * Get ettarget
     *
     * @return boolean
     */
    public function getEttarget()
    {
        return $this->ettarget;
    }

    /**
     * Set changeUser
     *
     * @param boolean $changeUser
     *
     * @return Gruppi
     */
    public function setChangeUser($changeUser)
    {
        $this->changeUser = $changeUser;

        return $this;
    }

    /**
     * Get changeUser
     *
     * @return boolean
     */
    public function getChangeUser()
    {
        return $this->changeUser;
    }

    /**
     * Set gestioneAppaltoClienti
     *
     * @param boolean $gestioneAppaltoClienti
     *
     * @return Gruppi
     */
    public function setGestioneAppaltoClienti($gestioneAppaltoClienti)
    {
        $this->gestioneAppaltoClienti = $gestioneAppaltoClienti;

        return $this;
    }

    /**
     * Get gestioneAppaltoClienti
     *
     * @return boolean
     */
    public function getGestioneAppaltoClienti()
    {
        return $this->gestioneAppaltoClienti;
    }

    /**
     * Set gestioneAppaltoRichieste
     *
     * @param boolean $gestioneAppaltoRichieste
     *
     * @return Gruppi
     */
    public function setGestioneAppaltoRichieste($gestioneAppaltoRichieste)
    {
        $this->gestioneAppaltoRichieste = $gestioneAppaltoRichieste;

        return $this;
    }

    /**
     * Get gestioneAppaltoRichieste
     *
     * @return boolean
     */
    public function getGestioneAppaltoRichieste()
    {
        return $this->gestioneAppaltoRichieste;
    }

    /**
     * Set etmarketplace
     *
     * @param boolean $etmarketplace
     *
     * @return Gruppi
     */
    public function setEtmarketplace($etmarketplace)
    {
        $this->etmarketplace = $etmarketplace;

        return $this;
    }

    /**
     * Get etmarketplace
     *
     * @return boolean
     */
    public function getEtmarketplace()
    {
        return $this->etmarketplace;
    }

    /**
     * Set demo
     *
     * @param boolean $demo
     *
     * @return Gruppi
     */
    public function setDemo($demo)
    {
        $this->demo = $demo;

        return $this;
    }

    /**
     * Get demo
     *
     * @return boolean
     */
    public function getDemo()
    {
        return $this->demo;
    }

    /**
     * Set credenzialeGruppo
     *
     * @param string $credenzialeGruppo
     *
     * @return Gruppi
     */
    public function setCredenzialeGruppo($credenzialeGruppo)
    {
        $this->credenzialeGruppo = $credenzialeGruppo;

        return $this;
    }

    /**
     * Get credenzialeGruppo
     *
     * @return string
     */
    public function getCredenzialeGruppo()
    {
        return $this->credenzialeGruppo;
    }

    /**
     * Set etgestVersione
     *
     * @param boolean $etgestVersione
     *
     * @return Gruppi
     */
    public function setEtgestVersione($etgestVersione)
    {
        $this->etgestVersione = $etgestVersione;

        return $this;
    }

    /**
     * Get etgestVersione
     *
     * @return boolean
     */
    public function getEtgestVersione()
    {
        return $this->etgestVersione;
    }

    /**
     * Get gid
     *
     * @return integer
     */
    public function getGid()
    {
        return $this->gid;
    }
}
