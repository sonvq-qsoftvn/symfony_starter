<?php

namespace AppBundle\Entity;

/**
 * AppaltiClienteAnagrafiche
 */
class AppaltiClienteAnagrafiche
{
    /**
     * @var integer
     */
    private $idAppalto = '0';

    /**
     * @var string
     */
    private $idAnagrafica = '';

    /**
     * @var boolean
     */
    private $attivo = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idAppalto
     *
     * @param integer $idAppalto
     *
     * @return AppaltiClienteAnagrafiche
     */
    public function setIdAppalto($idAppalto)
    {
        $this->idAppalto = $idAppalto;

        return $this;
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

    /**
     * Set idAnagrafica
     *
     * @param string $idAnagrafica
     *
     * @return AppaltiClienteAnagrafiche
     */
    public function setIdAnagrafica($idAnagrafica)
    {
        $this->idAnagrafica = $idAnagrafica;

        return $this;
    }

    /**
     * Get idAnagrafica
     *
     * @return string
     */
    public function getIdAnagrafica()
    {
        return $this->idAnagrafica;
    }

    /**
     * Set attivo
     *
     * @param boolean $attivo
     *
     * @return AppaltiClienteAnagrafiche
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;

        return $this;
    }

    /**
     * Get attivo
     *
     * @return boolean
     */
    public function getAttivo()
    {
        return $this->attivo;
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
