<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpTipoCampagne
 *
 * @ORM\Table(name="php_tipo_campagne", indexes={@ORM\Index(name="visibile", columns={"visibile"}), @ORM\Index(name="attiva", columns={"attiva"}), @ORM\Index(name="tipologia", columns={"tipologia"}), @ORM\Index(name="userCreazione", columns={"userCreazione"})})
 * @ORM\Entity
 */
class PhpTipoCampagne
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomeCampagna", type="string", length=50, nullable=false)
     */
    private $nomecampagna = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ridistribuzione_net", type="smallint", nullable=false)
     */
    private $ridistribuzioneNet = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attiva", type="boolean", nullable=false)
     */
    private $attiva = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibile", type="boolean", nullable=false)
     */
    private $visibile = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filtro", type="string", length=30, nullable=false)
     */
    private $filtro = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="default", type="boolean", nullable=false)
     */
    private $default = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="frase_agente", type="text", length=65535, nullable=false)
     */
    private $fraseAgente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notifica_fine", type="boolean", nullable=false)
     */
    private $notificaFine = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commento", type="text", length=255, nullable=false)
     */
    private $commento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipologia", type="boolean", nullable=false)
     */
    private $tipologia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userCreazione", type="integer", nullable=false)
     */
    private $usercreazione = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idPortale", type="smallint", nullable=false)
     */
    private $idportale = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GoogleConversionId", type="integer", nullable=false)
     */
    private $googleconversionid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoCampagna", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipocampagna;



    /**
     * Set nomecampagna
     *
     * @param string $nomecampagna
     *
     * @return PhpTipoCampagne
     */
    public function setNomecampagna($nomecampagna)
    {
        $this->nomecampagna = $nomecampagna;

        return $this;
    }

    /**
     * Get nomecampagna
     *
     * @return string
     */
    public function getNomecampagna()
    {
        return $this->nomecampagna;
    }

    /**
     * Set ridistribuzioneNet
     *
     * @param integer $ridistribuzioneNet
     *
     * @return PhpTipoCampagne
     */
    public function setRidistribuzioneNet($ridistribuzioneNet)
    {
        $this->ridistribuzioneNet = $ridistribuzioneNet;

        return $this;
    }

    /**
     * Get ridistribuzioneNet
     *
     * @return integer
     */
    public function getRidistribuzioneNet()
    {
        return $this->ridistribuzioneNet;
    }

    /**
     * Set attiva
     *
     * @param boolean $attiva
     *
     * @return PhpTipoCampagne
     */
    public function setAttiva($attiva)
    {
        $this->attiva = $attiva;

        return $this;
    }

    /**
     * Get attiva
     *
     * @return boolean
     */
    public function getAttiva()
    {
        return $this->attiva;
    }

    /**
     * Set visibile
     *
     * @param boolean $visibile
     *
     * @return PhpTipoCampagne
     */
    public function setVisibile($visibile)
    {
        $this->visibile = $visibile;

        return $this;
    }

    /**
     * Get visibile
     *
     * @return boolean
     */
    public function getVisibile()
    {
        return $this->visibile;
    }

    /**
     * Set filtro
     *
     * @param string $filtro
     *
     * @return PhpTipoCampagne
     */
    public function setFiltro($filtro)
    {
        $this->filtro = $filtro;

        return $this;
    }

    /**
     * Get filtro
     *
     * @return string
     */
    public function getFiltro()
    {
        return $this->filtro;
    }

    /**
     * Set default
     *
     * @param boolean $default
     *
     * @return PhpTipoCampagne
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return boolean
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set fraseAgente
     *
     * @param string $fraseAgente
     *
     * @return PhpTipoCampagne
     */
    public function setFraseAgente($fraseAgente)
    {
        $this->fraseAgente = $fraseAgente;

        return $this;
    }

    /**
     * Get fraseAgente
     *
     * @return string
     */
    public function getFraseAgente()
    {
        return $this->fraseAgente;
    }

    /**
     * Set notificaFine
     *
     * @param boolean $notificaFine
     *
     * @return PhpTipoCampagne
     */
    public function setNotificaFine($notificaFine)
    {
        $this->notificaFine = $notificaFine;

        return $this;
    }

    /**
     * Get notificaFine
     *
     * @return boolean
     */
    public function getNotificaFine()
    {
        return $this->notificaFine;
    }

    /**
     * Set commento
     *
     * @param string $commento
     *
     * @return PhpTipoCampagne
     */
    public function setCommento($commento)
    {
        $this->commento = $commento;

        return $this;
    }

    /**
     * Get commento
     *
     * @return string
     */
    public function getCommento()
    {
        return $this->commento;
    }

    /**
     * Set tipologia
     *
     * @param boolean $tipologia
     *
     * @return PhpTipoCampagne
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return boolean
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set usercreazione
     *
     * @param integer $usercreazione
     *
     * @return PhpTipoCampagne
     */
    public function setUsercreazione($usercreazione)
    {
        $this->usercreazione = $usercreazione;

        return $this;
    }

    /**
     * Get usercreazione
     *
     * @return integer
     */
    public function getUsercreazione()
    {
        return $this->usercreazione;
    }

    /**
     * Set idportale
     *
     * @param integer $idportale
     *
     * @return PhpTipoCampagne
     */
    public function setIdportale($idportale)
    {
        $this->idportale = $idportale;

        return $this;
    }

    /**
     * Get idportale
     *
     * @return integer
     */
    public function getIdportale()
    {
        return $this->idportale;
    }

    /**
     * Set googleconversionid
     *
     * @param integer $googleconversionid
     *
     * @return PhpTipoCampagne
     */
    public function setGoogleconversionid($googleconversionid)
    {
        $this->googleconversionid = $googleconversionid;

        return $this;
    }

    /**
     * Get googleconversionid
     *
     * @return integer
     */
    public function getGoogleconversionid()
    {
        return $this->googleconversionid;
    }

    /**
     * Get idtipocampagna
     *
     * @return integer
     */
    public function getIdtipocampagna()
    {
        return $this->idtipocampagna;
    }
}
