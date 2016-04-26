<?php

namespace ET\ETGestBundle\Entity;

/**
 * ServiziPax
 */
class ServiziPax
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $cognome;

    /**
     * @var \DateTime
     */
    private $datanascita;

    /**
     * @var string
     */
    private $idAnagrafica;

    /**
     * @var integer
     */
    private $tipoPasseggeroField;

    /**
     * @var string
     */
    private $sessoPasseggero = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return ServiziPax
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return ServiziPax
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set datanascita
     *
     * @param \DateTime $datanascita
     *
     * @return ServiziPax
     */
    public function setDatanascita($datanascita)
    {
        $this->datanascita = $datanascita;

        return $this;
    }

    /**
     * Get datanascita
     *
     * @return \DateTime
     */
    public function getDatanascita()
    {
        return $this->datanascita;
    }

    /**
     * Set idAnagrafica
     *
     * @param string $idAnagrafica
     *
     * @return ServiziPax
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
     * Set tipoPasseggeroField
     *
     * @param integer $tipoPasseggeroField
     *
     * @return ServiziPax
     */
    public function setTipoPasseggeroField($tipoPasseggeroField)
    {
        $this->tipoPasseggeroField = $tipoPasseggeroField;

        return $this;
    }

    /**
     * Get tipoPasseggeroField
     *
     * @return integer
     */
    public function getTipoPasseggeroField()
    {
        return $this->tipoPasseggeroField;
    }

    /**
     * Set sessoPasseggero
     *
     * @param string $sessoPasseggero
     *
     * @return ServiziPax
     */
    public function setSessoPasseggero($sessoPasseggero)
    {
        $this->sessoPasseggero = $sessoPasseggero;

        return $this;
    }

    /**
     * Get sessoPasseggero
     *
     * @return string
     */
    public function getSessoPasseggero()
    {
        return $this->sessoPasseggero;
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

