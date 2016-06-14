<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gruppi
 *
 * @ORM\Table(name="gruppi")
 * @ORM\Entity
 */
class Gruppi
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_gruppo", type="string", length=50, nullable=false)
     */
    private $nomeGruppo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppo_reale", type="integer", nullable=false)
     */
    private $gruppoReale = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    private $admin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fax", type="boolean", nullable=false)
     */
    private $fax = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="redazionali", type="boolean", nullable=false)
     */
    private $redazionali = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="strutture", type="boolean", nullable=false)
     */
    private $strutture = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="prodotti", type="boolean", nullable=false)
     */
    private $prodotti = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="redattore", type="boolean", nullable=false)
     */
    private $redattore = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="agenzia_online", type="boolean", nullable=false)
     */
    private $agenziaOnline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="back_office", type="integer", nullable=false)
     */
    private $backOffice = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pannello_agenti", type="boolean", nullable=false)
     */
    private $pannelloAgenti = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pannello_adm_agenti", type="boolean", nullable=false)
     */
    private $pannelloAdmAgenti = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pannello_adm_campagne", type="boolean", nullable=false)
     */
    private $pannelloAdmCampagne = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pannello_adm_poslavorativa", type="boolean", nullable=false)
     */
    private $pannelloAdmPoslavorativa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gruppo_link", type="boolean", nullable=false)
     */
    private $gruppoLink = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="idetus", type="boolean", nullable=false)
     */
    private $idetus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="log", type="boolean", nullable=false)
     */
    private $log = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gestione_corsi", type="boolean", nullable=false)
     */
    private $gestioneCorsi = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conferma_prenotazione", type="boolean", nullable=false)
     */
    private $confermaPrenotazione = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="prenota", type="boolean", nullable=false)
     */
    private $prenota = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ettarget", type="boolean", nullable=false)
     */
    private $ettarget = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="change_user", type="boolean", nullable=false)
     */
    private $changeUser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gestione_appalto_clienti", type="boolean", nullable=false)
     */
    private $gestioneAppaltoClienti = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gestione_appalto_richieste", type="boolean", nullable=false)
     */
    private $gestioneAppaltoRichieste = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="etmarketplace", type="boolean", nullable=false)
     */
    private $etmarketplace = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="demo", type="boolean", nullable=false)
     */
    private $demo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="credenziale_gruppo", type="string", length=50, nullable=true)
     */
    private $credenzialeGruppo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etgest_versione", type="boolean", nullable=false)
     */
    private $etgestVersione = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gid;


}

