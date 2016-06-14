<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppaltiClienteTestate
 *
 * @ORM\Table(name="appalti_cliente_testate")
 * @ORM\Entity(repositoryClass="ET\ETGestBundle\Repository\AppaltiClienteTestateRepository")
 */
class AppaltiClienteTestate
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreMittente", type="integer", nullable=false)
     */
    private $codpromotoremittente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codPromotoreDestinatario", type="integer", nullable=false)
     */
    private $codpromotoredestinatario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=20, nullable=false)
     */
    private $stato = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataStato", type="datetime", nullable=false)
     */
    private $datastato = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text", length=65535, nullable=false)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="risposta", type="text", length=65535, nullable=false)
     */
    private $risposta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="provvigione", type="boolean", nullable=false)
     */
    private $provvigione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codice", type="string", length=10, nullable=false)
     */
    private $codice = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_appalto_riferimento", type="integer", nullable=false)
     */
    private $idAppaltoRiferimento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ticket_creazione", type="integer", nullable=false)
     */
    private $idTicketCreazione = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_appalto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAppalto;



    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return AppaltiClienteTestate
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
     * Set codpromotoremittente
     *
     * @param integer $codpromotoremittente
     *
     * @return AppaltiClienteTestate
     */
    public function setCodpromotoremittente($codpromotoremittente)
    {
        $this->codpromotoremittente = $codpromotoremittente;

        return $this;
    }

    /**
     * Get codpromotoremittente
     *
     * @return integer
     */
    public function getCodpromotoremittente()
    {
        return $this->codpromotoremittente;
    }

    /**
     * Set codpromotoredestinatario
     *
     * @param integer $codpromotoredestinatario
     *
     * @return AppaltiClienteTestate
     */
    public function setCodpromotoredestinatario($codpromotoredestinatario)
    {
        $this->codpromotoredestinatario = $codpromotoredestinatario;

        return $this;
    }

    /**
     * Get codpromotoredestinatario
     *
     * @return integer
     */
    public function getCodpromotoredestinatario()
    {
        return $this->codpromotoredestinatario;
    }

    /**
     * Set stato
     *
     * @param string $stato
     *
     * @return AppaltiClienteTestate
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return string
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set datastato
     *
     * @param \DateTime $datastato
     *
     * @return AppaltiClienteTestate
     */
    public function setDatastato($datastato)
    {
        $this->datastato = $datastato;

        return $this;
    }

    /**
     * Get datastato
     *
     * @return \DateTime
     */
    public function getDatastato()
    {
        return $this->datastato;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return AppaltiClienteTestate
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set risposta
     *
     * @param string $risposta
     *
     * @return AppaltiClienteTestate
     */
    public function setRisposta($risposta)
    {
        $this->risposta = $risposta;

        return $this;
    }

    /**
     * Get risposta
     *
     * @return string
     */
    public function getRisposta()
    {
        return $this->risposta;
    }

    /**
     * Set provvigione
     *
     * @param boolean $provvigione
     *
     * @return AppaltiClienteTestate
     */
    public function setProvvigione($provvigione)
    {
        $this->provvigione = $provvigione;

        return $this;
    }

    /**
     * Get provvigione
     *
     * @return boolean
     */
    public function getProvvigione()
    {
        return $this->provvigione;
    }

    /**
     * Set codice
     *
     * @param string $codice
     *
     * @return AppaltiClienteTestate
     */
    public function setCodice($codice)
    {
        $this->codice = $codice;

        return $this;
    }

    /**
     * Get codice
     *
     * @return string
     */
    public function getCodice()
    {
        return $this->codice;
    }

    /**
     * Set idAppaltoRiferimento
     *
     * @param integer $idAppaltoRiferimento
     *
     * @return AppaltiClienteTestate
     */
    public function setIdAppaltoRiferimento($idAppaltoRiferimento)
    {
        $this->idAppaltoRiferimento = $idAppaltoRiferimento;

        return $this;
    }

    /**
     * Get idAppaltoRiferimento
     *
     * @return integer
     */
    public function getIdAppaltoRiferimento()
    {
        return $this->idAppaltoRiferimento;
    }

    /**
     * Set idTicketCreazione
     *
     * @param integer $idTicketCreazione
     *
     * @return AppaltiClienteTestate
     */
    public function setIdTicketCreazione($idTicketCreazione)
    {
        $this->idTicketCreazione = $idTicketCreazione;

        return $this;
    }

    /**
     * Get idTicketCreazione
     *
     * @return integer
     */
    public function getIdTicketCreazione()
    {
        return $this->idTicketCreazione;
    }

    /**
     * Get idAppalto
     *
     * @return integer
     */
    public function getIdAppalto()
    {
        return $this->idAppalto;
    }
}
