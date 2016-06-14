<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziPax
 *
 * @ORM\Table(name="servizi_pax", indexes={@ORM\Index(name="id_anagrafica_idx", columns={"id_anagrafica"})})
 * @ORM\Entity
 */
class ServiziPax
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=50, nullable=true)
     */
    private $cognome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datanascita", type="date", nullable=true)
     */
    private $datanascita;

    /**
     * @var string
     *
     * @ORM\Column(name="id_anagrafica", type="string", length=18, nullable=false)
     */
    private $idAnagrafica;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_passeggero_field", type="integer", nullable=true)
     */
    private $tipoPasseggeroField;

    /**
     * @var string
     *
     * @ORM\Column(name="sesso_passeggero", type="string", length=1, nullable=true)
     */
    private $sessoPasseggero = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
