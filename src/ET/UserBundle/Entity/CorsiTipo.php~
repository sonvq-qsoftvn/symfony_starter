<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsiTipo
 *
 * @ORM\Table(name="corsi_tipo")
 * @ORM\Entity
 */
class CorsiTipo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizioneTipo", type="string", length=120, nullable=false)
     */
    private $descrizionetipo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="restrizioni", type="string", length=100, nullable=false)
     */
    private $restrizioni = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gruppo", type="string", length=50, nullable=false)
     */
    private $gruppo = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="evidenza", type="boolean", nullable=false)
     */
    private $evidenza = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ripetibile", type="boolean", nullable=false)
     */
    private $ripetibile = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="notificaTipo", type="string", length=10, nullable=false)
     */
    private $notificatipo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descrizioneEstesa", type="string", length=255, nullable=false)
     */
    private $descrizioneestesa = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="punteggio", type="smallint", nullable=false)
     */
    private $punteggio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idCorsiTipo", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorsitipo;



    /**
     * Set descrizionetipo
     *
     * @param string $descrizionetipo
     *
     * @return CorsiTipo
     */
    public function setDescrizionetipo($descrizionetipo)
    {
        $this->descrizionetipo = $descrizionetipo;

        return $this;
    }

    /**
     * Get descrizionetipo
     *
     * @return string
     */
    public function getDescrizionetipo()
    {
        return $this->descrizionetipo;
    }

    /**
     * Set restrizioni
     *
     * @param string $restrizioni
     *
     * @return CorsiTipo
     */
    public function setRestrizioni($restrizioni)
    {
        $this->restrizioni = $restrizioni;

        return $this;
    }

    /**
     * Get restrizioni
     *
     * @return string
     */
    public function getRestrizioni()
    {
        return $this->restrizioni;
    }

    /**
     * Set gruppo
     *
     * @param string $gruppo
     *
     * @return CorsiTipo
     */
    public function setGruppo($gruppo)
    {
        $this->gruppo = $gruppo;

        return $this;
    }

    /**
     * Get gruppo
     *
     * @return string
     */
    public function getGruppo()
    {
        return $this->gruppo;
    }

    /**
     * Set evidenza
     *
     * @param boolean $evidenza
     *
     * @return CorsiTipo
     */
    public function setEvidenza($evidenza)
    {
        $this->evidenza = $evidenza;

        return $this;
    }

    /**
     * Get evidenza
     *
     * @return boolean
     */
    public function getEvidenza()
    {
        return $this->evidenza;
    }

    /**
     * Set ripetibile
     *
     * @param boolean $ripetibile
     *
     * @return CorsiTipo
     */
    public function setRipetibile($ripetibile)
    {
        $this->ripetibile = $ripetibile;

        return $this;
    }

    /**
     * Get ripetibile
     *
     * @return boolean
     */
    public function getRipetibile()
    {
        return $this->ripetibile;
    }

    /**
     * Set notificatipo
     *
     * @param string $notificatipo
     *
     * @return CorsiTipo
     */
    public function setNotificatipo($notificatipo)
    {
        $this->notificatipo = $notificatipo;

        return $this;
    }

    /**
     * Get notificatipo
     *
     * @return string
     */
    public function getNotificatipo()
    {
        return $this->notificatipo;
    }

    /**
     * Set descrizioneestesa
     *
     * @param string $descrizioneestesa
     *
     * @return CorsiTipo
     */
    public function setDescrizioneestesa($descrizioneestesa)
    {
        $this->descrizioneestesa = $descrizioneestesa;

        return $this;
    }

    /**
     * Get descrizioneestesa
     *
     * @return string
     */
    public function getDescrizioneestesa()
    {
        return $this->descrizioneestesa;
    }

    /**
     * Set punteggio
     *
     * @param integer $punteggio
     *
     * @return CorsiTipo
     */
    public function setPunteggio($punteggio)
    {
        $this->punteggio = $punteggio;

        return $this;
    }

    /**
     * Get punteggio
     *
     * @return integer
     */
    public function getPunteggio()
    {
        return $this->punteggio;
    }

    /**
     * Get idcorsitipo
     *
     * @return integer
     */
    public function getIdcorsitipo()
    {
        return $this->idcorsitipo;
    }
}
