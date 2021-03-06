<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentiDettagliorichiesta
 *
 * @ORM\Table(name="documenti_dettagliorichiesta")
 * @ORM\Entity
 */
class DocumentiDettagliorichiesta
{
    /**
     * @var string
     *
     * @ORM\Column(name="richiestacodice", type="string", length=10, nullable=true)
     */
    private $richiestacodice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="richiestadatacreazione", type="datetime", nullable=true)
     */
    private $richiestadatacreazione;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestapacchettodescrizione", type="string", length=255, nullable=true)
     */
    private $richiestapacchettodescrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestapacchettoid", type="string", length=20, nullable=true)
     */
    private $richiestapacchettoid;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestapacchettocosto", type="string", length=255, nullable=true)
     */
    private $richiestapacchettocosto;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestapartenzadal", type="string", length=50, nullable=true)
     */
    private $richiestapartenzadal;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestapartenzaal", type="string", length=50, nullable=true)
     */
    private $richiestapartenzaal;

    /**
     * @var integer
     *
     * @ORM\Column(name="richiestaadultinumero", type="smallint", nullable=true)
     */
    private $richiestaadultinumero;

    /**
     * @var integer
     *
     * @ORM\Column(name="richiestabambininumero", type="smallint", nullable=true)
     */
    private $richiestabambininumero;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestabambinieta", type="string", length=100, nullable=true)
     */
    private $richiestabambinieta;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestareperibileda", type="string", length=30, nullable=true)
     */
    private $richiestareperibileda;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestareperibilea", type="string", length=30, nullable=true)
     */
    private $richiestareperibilea;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestarecapitoemail", type="string", length=255, nullable=false)
     */
    private $richiestarecapitoemail;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestarecapitotelefonocasa", type="string", length=30, nullable=false)
     */
    private $richiestarecapitotelefonocasa;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestarecapitotelefonoufficio", type="string", length=30, nullable=false)
     */
    private $richiestarecapitotelefonoufficio;

    /**
     * @var string
     *
     * @ORM\Column(name="richiestarecapitotelefonocellulare", type="string", length=30, nullable=false)
     */
    private $richiestarecapitotelefonocellulare;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
