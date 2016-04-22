<?php

namespace AppBundle\Entity;

/**
 * BackofficeFornitoriAgenzie
 */
class BackofficeFornitoriAgenzie
{
    /**
     * @var string
     */
    private $ragioneSociale;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $citta;

    /**
     * @var string
     */
    private $provincia;

    /**
     * @var string
     */
    private $codStato;

    /**
     * @var string
     */
    private $piva;

    /**
     * @var string
     */
    private $codFiscale;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $fkPagamento;

    /**
     * @var boolean
     */
    private $aves = '1';

    /**
     * @var string
     */
    private $avesRisposta;

    /**
     * @var boolean
     */
    private $statoverificato = '0';

    /**
     * @var boolean
     */
    private $assicurazioneobbligatoria = '0';

    /**
     * @var integer
     */
    private $parent;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $deletedAt;

    /**
     * @var string
     */
    private $agenzia = 'ETIta';

    /**
     * @var boolean
     */
    private $visibilePannelloTo;

    /**
     * @var string
     */
    private $siapCode;

    /**
     * @var string
     */
    private $defaultValuta = 'EUR';

    /**
     * @var integer
     */
    private $idfornitore;


    /**
     * Set ragioneSociale
     *
     * @param string $ragioneSociale
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setRagioneSociale($ragioneSociale)
    {
        $this->ragioneSociale = $ragioneSociale;

        return $this;
    }

    /**
     * Get ragioneSociale
     *
     * @return string
     */
    public function getRagioneSociale()
    {
        return $this->ragioneSociale;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return BackofficeFornitoriAgenzie
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
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set codStato
     *
     * @param string $codStato
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setCodStato($codStato)
    {
        $this->codStato = $codStato;

        return $this;
    }

    /**
     * Get codStato
     *
     * @return string
     */
    public function getCodStato()
    {
        return $this->codStato;
    }

    /**
     * Set piva
     *
     * @param string $piva
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setPiva($piva)
    {
        $this->piva = $piva;

        return $this;
    }

    /**
     * Get piva
     *
     * @return string
     */
    public function getPiva()
    {
        return $this->piva;
    }

    /**
     * Set codFiscale
     *
     * @param string $codFiscale
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setCodFiscale($codFiscale)
    {
        $this->codFiscale = $codFiscale;

        return $this;
    }

    /**
     * Get codFiscale
     *
     * @return string
     */
    public function getCodFiscale()
    {
        return $this->codFiscale;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set fkPagamento
     *
     * @param integer $fkPagamento
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setFkPagamento($fkPagamento)
    {
        $this->fkPagamento = $fkPagamento;

        return $this;
    }

    /**
     * Get fkPagamento
     *
     * @return integer
     */
    public function getFkPagamento()
    {
        return $this->fkPagamento;
    }

    /**
     * Set aves
     *
     * @param boolean $aves
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setAves($aves)
    {
        $this->aves = $aves;

        return $this;
    }

    /**
     * Get aves
     *
     * @return boolean
     */
    public function getAves()
    {
        return $this->aves;
    }

    /**
     * Set avesRisposta
     *
     * @param string $avesRisposta
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setAvesRisposta($avesRisposta)
    {
        $this->avesRisposta = $avesRisposta;

        return $this;
    }

    /**
     * Get avesRisposta
     *
     * @return string
     */
    public function getAvesRisposta()
    {
        return $this->avesRisposta;
    }

    /**
     * Set statoverificato
     *
     * @param boolean $statoverificato
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setStatoverificato($statoverificato)
    {
        $this->statoverificato = $statoverificato;

        return $this;
    }

    /**
     * Get statoverificato
     *
     * @return boolean
     */
    public function getStatoverificato()
    {
        return $this->statoverificato;
    }

    /**
     * Set assicurazioneobbligatoria
     *
     * @param boolean $assicurazioneobbligatoria
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setAssicurazioneobbligatoria($assicurazioneobbligatoria)
    {
        $this->assicurazioneobbligatoria = $assicurazioneobbligatoria;

        return $this;
    }

    /**
     * Get assicurazioneobbligatoria
     *
     * @return boolean
     */
    public function getAssicurazioneobbligatoria()
    {
        return $this->assicurazioneobbligatoria;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set agenzia
     *
     * @param string $agenzia
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setAgenzia($agenzia)
    {
        $this->agenzia = $agenzia;

        return $this;
    }

    /**
     * Get agenzia
     *
     * @return string
     */
    public function getAgenzia()
    {
        return $this->agenzia;
    }

    /**
     * Set visibilePannelloTo
     *
     * @param boolean $visibilePannelloTo
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setVisibilePannelloTo($visibilePannelloTo)
    {
        $this->visibilePannelloTo = $visibilePannelloTo;

        return $this;
    }

    /**
     * Get visibilePannelloTo
     *
     * @return boolean
     */
    public function getVisibilePannelloTo()
    {
        return $this->visibilePannelloTo;
    }

    /**
     * Set siapCode
     *
     * @param string $siapCode
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setSiapCode($siapCode)
    {
        $this->siapCode = $siapCode;

        return $this;
    }

    /**
     * Get siapCode
     *
     * @return string
     */
    public function getSiapCode()
    {
        return $this->siapCode;
    }

    /**
     * Set defaultValuta
     *
     * @param string $defaultValuta
     *
     * @return BackofficeFornitoriAgenzie
     */
    public function setDefaultValuta($defaultValuta)
    {
        $this->defaultValuta = $defaultValuta;

        return $this;
    }

    /**
     * Get defaultValuta
     *
     * @return string
     */
    public function getDefaultValuta()
    {
        return $this->defaultValuta;
    }

    /**
     * Get idfornitore
     *
     * @return integer
     */
    public function getIdfornitore()
    {
        return $this->idfornitore;
    }
}
