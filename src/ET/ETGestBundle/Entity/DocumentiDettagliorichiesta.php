<?php

namespace ET\ETGestBundle\Entity;

/**
 * DocumentiDettagliorichiesta
 */
class DocumentiDettagliorichiesta
{
    /**
     * @var string
     */
    private $richiestacodice;

    /**
     * @var \DateTime
     */
    private $richiestadatacreazione;

    /**
     * @var string
     */
    private $richiestapacchettodescrizione;

    /**
     * @var string
     */
    private $richiestapacchettoid;

    /**
     * @var string
     */
    private $richiestapacchettocosto;

    /**
     * @var string
     */
    private $richiestapartenzadal;

    /**
     * @var string
     */
    private $richiestapartenzaal;

    /**
     * @var integer
     */
    private $richiestaadultinumero;

    /**
     * @var integer
     */
    private $richiestabambininumero;

    /**
     * @var string
     */
    private $richiestabambinieta;

    /**
     * @var string
     */
    private $richiestareperibileda;

    /**
     * @var string
     */
    private $richiestareperibilea;

    /**
     * @var string
     */
    private $richiestarecapitoemail;

    /**
     * @var string
     */
    private $richiestarecapitotelefonocasa;

    /**
     * @var string
     */
    private $richiestarecapitotelefonoufficio;

    /**
     * @var string
     */
    private $richiestarecapitotelefonocellulare;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set richiestacodice
     *
     * @param string $richiestacodice
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestacodice($richiestacodice)
    {
        $this->richiestacodice = $richiestacodice;

        return $this;
    }

    /**
     * Get richiestacodice
     *
     * @return string
     */
    public function getRichiestacodice()
    {
        return $this->richiestacodice;
    }

    /**
     * Set richiestadatacreazione
     *
     * @param \DateTime $richiestadatacreazione
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestadatacreazione($richiestadatacreazione)
    {
        $this->richiestadatacreazione = $richiestadatacreazione;

        return $this;
    }

    /**
     * Get richiestadatacreazione
     *
     * @return \DateTime
     */
    public function getRichiestadatacreazione()
    {
        return $this->richiestadatacreazione;
    }

    /**
     * Set richiestapacchettodescrizione
     *
     * @param string $richiestapacchettodescrizione
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestapacchettodescrizione($richiestapacchettodescrizione)
    {
        $this->richiestapacchettodescrizione = $richiestapacchettodescrizione;

        return $this;
    }

    /**
     * Get richiestapacchettodescrizione
     *
     * @return string
     */
    public function getRichiestapacchettodescrizione()
    {
        return $this->richiestapacchettodescrizione;
    }

    /**
     * Set richiestapacchettoid
     *
     * @param string $richiestapacchettoid
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestapacchettoid($richiestapacchettoid)
    {
        $this->richiestapacchettoid = $richiestapacchettoid;

        return $this;
    }

    /**
     * Get richiestapacchettoid
     *
     * @return string
     */
    public function getRichiestapacchettoid()
    {
        return $this->richiestapacchettoid;
    }

    /**
     * Set richiestapacchettocosto
     *
     * @param string $richiestapacchettocosto
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestapacchettocosto($richiestapacchettocosto)
    {
        $this->richiestapacchettocosto = $richiestapacchettocosto;

        return $this;
    }

    /**
     * Get richiestapacchettocosto
     *
     * @return string
     */
    public function getRichiestapacchettocosto()
    {
        return $this->richiestapacchettocosto;
    }

    /**
     * Set richiestapartenzadal
     *
     * @param string $richiestapartenzadal
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestapartenzadal($richiestapartenzadal)
    {
        $this->richiestapartenzadal = $richiestapartenzadal;

        return $this;
    }

    /**
     * Get richiestapartenzadal
     *
     * @return string
     */
    public function getRichiestapartenzadal()
    {
        return $this->richiestapartenzadal;
    }

    /**
     * Set richiestapartenzaal
     *
     * @param string $richiestapartenzaal
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestapartenzaal($richiestapartenzaal)
    {
        $this->richiestapartenzaal = $richiestapartenzaal;

        return $this;
    }

    /**
     * Get richiestapartenzaal
     *
     * @return string
     */
    public function getRichiestapartenzaal()
    {
        return $this->richiestapartenzaal;
    }

    /**
     * Set richiestaadultinumero
     *
     * @param integer $richiestaadultinumero
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestaadultinumero($richiestaadultinumero)
    {
        $this->richiestaadultinumero = $richiestaadultinumero;

        return $this;
    }

    /**
     * Get richiestaadultinumero
     *
     * @return integer
     */
    public function getRichiestaadultinumero()
    {
        return $this->richiestaadultinumero;
    }

    /**
     * Set richiestabambininumero
     *
     * @param integer $richiestabambininumero
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestabambininumero($richiestabambininumero)
    {
        $this->richiestabambininumero = $richiestabambininumero;

        return $this;
    }

    /**
     * Get richiestabambininumero
     *
     * @return integer
     */
    public function getRichiestabambininumero()
    {
        return $this->richiestabambininumero;
    }

    /**
     * Set richiestabambinieta
     *
     * @param string $richiestabambinieta
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestabambinieta($richiestabambinieta)
    {
        $this->richiestabambinieta = $richiestabambinieta;

        return $this;
    }

    /**
     * Get richiestabambinieta
     *
     * @return string
     */
    public function getRichiestabambinieta()
    {
        return $this->richiestabambinieta;
    }

    /**
     * Set richiestareperibileda
     *
     * @param string $richiestareperibileda
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestareperibileda($richiestareperibileda)
    {
        $this->richiestareperibileda = $richiestareperibileda;

        return $this;
    }

    /**
     * Get richiestareperibileda
     *
     * @return string
     */
    public function getRichiestareperibileda()
    {
        return $this->richiestareperibileda;
    }

    /**
     * Set richiestareperibilea
     *
     * @param string $richiestareperibilea
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestareperibilea($richiestareperibilea)
    {
        $this->richiestareperibilea = $richiestareperibilea;

        return $this;
    }

    /**
     * Get richiestareperibilea
     *
     * @return string
     */
    public function getRichiestareperibilea()
    {
        return $this->richiestareperibilea;
    }

    /**
     * Set richiestarecapitoemail
     *
     * @param string $richiestarecapitoemail
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestarecapitoemail($richiestarecapitoemail)
    {
        $this->richiestarecapitoemail = $richiestarecapitoemail;

        return $this;
    }

    /**
     * Get richiestarecapitoemail
     *
     * @return string
     */
    public function getRichiestarecapitoemail()
    {
        return $this->richiestarecapitoemail;
    }

    /**
     * Set richiestarecapitotelefonocasa
     *
     * @param string $richiestarecapitotelefonocasa
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestarecapitotelefonocasa($richiestarecapitotelefonocasa)
    {
        $this->richiestarecapitotelefonocasa = $richiestarecapitotelefonocasa;

        return $this;
    }

    /**
     * Get richiestarecapitotelefonocasa
     *
     * @return string
     */
    public function getRichiestarecapitotelefonocasa()
    {
        return $this->richiestarecapitotelefonocasa;
    }

    /**
     * Set richiestarecapitotelefonoufficio
     *
     * @param string $richiestarecapitotelefonoufficio
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestarecapitotelefonoufficio($richiestarecapitotelefonoufficio)
    {
        $this->richiestarecapitotelefonoufficio = $richiestarecapitotelefonoufficio;

        return $this;
    }

    /**
     * Get richiestarecapitotelefonoufficio
     *
     * @return string
     */
    public function getRichiestarecapitotelefonoufficio()
    {
        return $this->richiestarecapitotelefonoufficio;
    }

    /**
     * Set richiestarecapitotelefonocellulare
     *
     * @param string $richiestarecapitotelefonocellulare
     *
     * @return DocumentiDettagliorichiesta
     */
    public function setRichiestarecapitotelefonocellulare($richiestarecapitotelefonocellulare)
    {
        $this->richiestarecapitotelefonocellulare = $richiestarecapitotelefonocellulare;

        return $this;
    }

    /**
     * Get richiestarecapitotelefonocellulare
     *
     * @return string
     */
    public function getRichiestarecapitotelefonocellulare()
    {
        return $this->richiestarecapitotelefonocellulare;
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

