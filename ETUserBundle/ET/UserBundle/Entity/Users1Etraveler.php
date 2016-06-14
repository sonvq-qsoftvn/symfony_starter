<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1Etraveler
 *
 * @ORM\Table(name="users1_etraveler", indexes={@ORM\Index(name="users1_id", columns={"users1_id"}), @ORM\Index(name="username", columns={"username"})})
 * @ORM\Entity
 */
class Users1Etraveler
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_nome", type="string", length=255, nullable=false)
     */
    private $contrattoNome;

    /**
     * @var string
     *
     * @ORM\Column(name="contratto_cognome", type="string", length=255, nullable=false)
     */
    private $contrattoCognome;

    /**
     * @var integer
     *
     * @ORM\Column(name="users1_id", type="integer", nullable=false)
     */
    private $users1Id = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_scadenza", type="datetime", nullable=true)
     */
    private $dataScadenza;

    /**
     * @var string
     *
     * @ORM\Column(name="tipologia", type="string", length=20, nullable=false)
     */
    private $tipologia;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua", type="string", length=5, nullable=false)
     */
    private $lingua = 'it_IT';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ferie", type="string", length=15, nullable=false)
     */
    private $ferie;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotore_id", type="smallint", nullable=false)
     */
    private $promotoreId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="cap", type="string", length=5, nullable=false)
     */
    private $cap;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=25, nullable=false)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=4, nullable=false)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="nazione", type="string", length=3, nullable=false)
     */
    private $nazione;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=50, nullable=false)
     */
    private $cell;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=16, nullable=false)
     */
    private $codiceFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="partita_iva", type="string", length=13, nullable=false)
     */
    private $partitaIva;

    /**
     * @var string
     *
     * @ORM\Column(name="pagamento_modo", type="string", length=25, nullable=false)
     */
    private $pagamentoModo;

    /**
     * @var string
     *
     * @ORM\Column(name="pagamento_descrizione", type="text", length=65535, nullable=false)
     */
    private $pagamentoDescrizione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pagamento_privacy_accettata", type="date", nullable=true)
     */
    private $pagamentoPrivacyAccettata;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

