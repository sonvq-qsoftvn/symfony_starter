<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeFornitoriOld
 */
class BackofficeFornitoriOld
{
    /**
     * @var string
     */
    private $descrizione = '';

    /**
     * @var string
     */
    private $ragioneSociale = '';

    /**
     * @var string
     */
    private $indirizzo = '';

    /**
     * @var string
     */
    private $cap = '';

    /**
     * @var string
     */
    private $citta = '';

    /**
     * @var string
     */
    private $provincia = '';

    /**
     * @var string
     */
    private $codStato = '';

    /**
     * @var string
     */
    private $pre = '';

    /**
     * @var string
     */
    private $tel1 = '';

    /**
     * @var string
     */
    private $tel2 = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $codFiscale = '';

    /**
     * @var string
     */
    private $piva = '0';

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $aves = '0';

    /**
     * @var string
     */
    private $avesRisposta = '';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var boolean
     */
    private $statoverificato = '0';

    /**
     * @var integer
     */
    private $fkPagamento = '0';

    /**
     * @var string
     */
    private $verificato = '';

    /**
     * @var boolean
     */
    private $assicurazioneobbligatoria = '0';

    /**
     * @var integer
     */
    private $idfornitore;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return BackofficeFornitoriOld
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
     * Set ragioneSociale
     *
     * @param string $ragioneSociale
     *
     * @return BackofficeFornitoriOld
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
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return BackofficeFornitoriOld
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
     * @return BackofficeFornitoriOld
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
     * @return BackofficeFornitoriOld
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
     * @return BackofficeFornitoriOld
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
     * @return BackofficeFornitoriOld
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
     * Set pre
     *
     * @param string $pre
     *
     * @return BackofficeFornitoriOld
     */
    public function setPre($pre)
    {
        $this->pre = $pre;

        return $this;
    }

    /**
     * Get pre
     *
     * @return string
     */
    public function getPre()
    {
        return $this->pre;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     *
     * @return BackofficeFornitoriOld
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return BackofficeFornitoriOld
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return BackofficeFornitoriOld
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
     * Set email
     *
     * @param string $email
     *
     * @return BackofficeFornitoriOld
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
     * Set codFiscale
     *
     * @param string $codFiscale
     *
     * @return BackofficeFornitoriOld
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
     * Set piva
     *
     * @param string $piva
     *
     * @return BackofficeFornitoriOld
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
     * Set note
     *
     * @param string $note
     *
     * @return BackofficeFornitoriOld
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
     * Set aves
     *
     * @param integer $aves
     *
     * @return BackofficeFornitoriOld
     */
    public function setAves($aves)
    {
        $this->aves = $aves;

        return $this;
    }

    /**
     * Get aves
     *
     * @return integer
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
     * @return BackofficeFornitoriOld
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
     * Set status
     *
     * @param boolean $status
     *
     * @return BackofficeFornitoriOld
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statoverificato
     *
     * @param boolean $statoverificato
     *
     * @return BackofficeFornitoriOld
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
     * Set fkPagamento
     *
     * @param integer $fkPagamento
     *
     * @return BackofficeFornitoriOld
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
     * Set verificato
     *
     * @param string $verificato
     *
     * @return BackofficeFornitoriOld
     */
    public function setVerificato($verificato)
    {
        $this->verificato = $verificato;

        return $this;
    }

    /**
     * Get verificato
     *
     * @return string
     */
    public function getVerificato()
    {
        return $this->verificato;
    }

    /**
     * Set assicurazioneobbligatoria
     *
     * @param boolean $assicurazioneobbligatoria
     *
     * @return BackofficeFornitoriOld
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
     * Get idfornitore
     *
     * @return integer
     */
    public function getIdfornitore()
    {
        return $this->idfornitore;
    }
}

