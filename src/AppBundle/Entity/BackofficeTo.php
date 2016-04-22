<?php

namespace AppBundle\Entity;

/**
 * BackofficeTo
 */
class BackofficeTo
{
    /**
     * @var string
     */
    private $tonome = '';

    /**
     * @var string
     */
    private $tourl = '';

    /**
     * @var string
     */
    private $tocodice = '';

    /**
     * @var string
     */
    private $totelefono;

    /**
     * @var string
     */
    private $todescrizionebreve;

    /**
     * @var string
     */
    private $toparolechiave;

    /**
     * @var boolean
     */
    private $toconvenzionato = '0';

    /**
     * @var boolean
     */
    private $operatoreConsigliato = '0';

    /**
     * @var string
     */
    private $noteOperatoreConsigliato;

    /**
     * @var string
     */
    private $useradm = '';

    /**
     * @var string
     */
    private $accessoTo;

    /**
     * @var integer
     */
    private $idto;


    /**
     * Set tonome
     *
     * @param string $tonome
     *
     * @return BackofficeTo
     */
    public function setTonome($tonome)
    {
        $this->tonome = $tonome;

        return $this;
    }

    /**
     * Get tonome
     *
     * @return string
     */
    public function getTonome()
    {
        return $this->tonome;
    }

    /**
     * Set tourl
     *
     * @param string $tourl
     *
     * @return BackofficeTo
     */
    public function setTourl($tourl)
    {
        $this->tourl = $tourl;

        return $this;
    }

    /**
     * Get tourl
     *
     * @return string
     */
    public function getTourl()
    {
        return $this->tourl;
    }

    /**
     * Set tocodice
     *
     * @param string $tocodice
     *
     * @return BackofficeTo
     */
    public function setTocodice($tocodice)
    {
        $this->tocodice = $tocodice;

        return $this;
    }

    /**
     * Get tocodice
     *
     * @return string
     */
    public function getTocodice()
    {
        return $this->tocodice;
    }

    /**
     * Set totelefono
     *
     * @param string $totelefono
     *
     * @return BackofficeTo
     */
    public function setTotelefono($totelefono)
    {
        $this->totelefono = $totelefono;

        return $this;
    }

    /**
     * Get totelefono
     *
     * @return string
     */
    public function getTotelefono()
    {
        return $this->totelefono;
    }

    /**
     * Set todescrizionebreve
     *
     * @param string $todescrizionebreve
     *
     * @return BackofficeTo
     */
    public function setTodescrizionebreve($todescrizionebreve)
    {
        $this->todescrizionebreve = $todescrizionebreve;

        return $this;
    }

    /**
     * Get todescrizionebreve
     *
     * @return string
     */
    public function getTodescrizionebreve()
    {
        return $this->todescrizionebreve;
    }

    /**
     * Set toparolechiave
     *
     * @param string $toparolechiave
     *
     * @return BackofficeTo
     */
    public function setToparolechiave($toparolechiave)
    {
        $this->toparolechiave = $toparolechiave;

        return $this;
    }

    /**
     * Get toparolechiave
     *
     * @return string
     */
    public function getToparolechiave()
    {
        return $this->toparolechiave;
    }

    /**
     * Set toconvenzionato
     *
     * @param boolean $toconvenzionato
     *
     * @return BackofficeTo
     */
    public function setToconvenzionato($toconvenzionato)
    {
        $this->toconvenzionato = $toconvenzionato;

        return $this;
    }

    /**
     * Get toconvenzionato
     *
     * @return boolean
     */
    public function getToconvenzionato()
    {
        return $this->toconvenzionato;
    }

    /**
     * Set operatoreConsigliato
     *
     * @param boolean $operatoreConsigliato
     *
     * @return BackofficeTo
     */
    public function setOperatoreConsigliato($operatoreConsigliato)
    {
        $this->operatoreConsigliato = $operatoreConsigliato;

        return $this;
    }

    /**
     * Get operatoreConsigliato
     *
     * @return boolean
     */
    public function getOperatoreConsigliato()
    {
        return $this->operatoreConsigliato;
    }

    /**
     * Set noteOperatoreConsigliato
     *
     * @param string $noteOperatoreConsigliato
     *
     * @return BackofficeTo
     */
    public function setNoteOperatoreConsigliato($noteOperatoreConsigliato)
    {
        $this->noteOperatoreConsigliato = $noteOperatoreConsigliato;

        return $this;
    }

    /**
     * Get noteOperatoreConsigliato
     *
     * @return string
     */
    public function getNoteOperatoreConsigliato()
    {
        return $this->noteOperatoreConsigliato;
    }

    /**
     * Set useradm
     *
     * @param string $useradm
     *
     * @return BackofficeTo
     */
    public function setUseradm($useradm)
    {
        $this->useradm = $useradm;

        return $this;
    }

    /**
     * Get useradm
     *
     * @return string
     */
    public function getUseradm()
    {
        return $this->useradm;
    }

    /**
     * Set accessoTo
     *
     * @param string $accessoTo
     *
     * @return BackofficeTo
     */
    public function setAccessoTo($accessoTo)
    {
        $this->accessoTo = $accessoTo;

        return $this;
    }

    /**
     * Get accessoTo
     *
     * @return string
     */
    public function getAccessoTo()
    {
        return $this->accessoTo;
    }

    /**
     * Get idto
     *
     * @return integer
     */
    public function getIdto()
    {
        return $this->idto;
    }
}
