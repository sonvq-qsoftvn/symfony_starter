<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreventiviTemporanei
 *
 * @ORM\Table(name="preventivi_temporanei", indexes={@ORM\Index(name="codpromotore_idx", columns={"codpromotore"}), @ORM\Index(name="id_viaggio_idx", columns={"id_viaggio"})})
 * @ORM\Entity
 */
class PreventiviTemporanei
{
    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=255, nullable=false)
     */
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="corpo", type="text", nullable=false)
     */
    private $corpo;

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text", nullable=true)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_anagrafica", type="string", length=18)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAnagrafica;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_viaggio", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idViaggio;

    /**
     * @var integer
     *
     * @ORM\Column(name="codpromotore", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codpromotore;



    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return PreventiviTemporanei
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set corpo
     *
     * @param string $corpo
     *
     * @return PreventiviTemporanei
     */
    public function setCorpo($corpo)
    {
        $this->corpo = $corpo;

        return $this;
    }

    /**
     * Get corpo
     *
     * @return string
     */
    public function getCorpo()
    {
        return $this->corpo;
    }

    /**
     * Set nota
     *
     * @param string $nota
     *
     * @return PreventiviTemporanei
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return PreventiviTemporanei
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set idAnagrafica
     *
     * @param string $idAnagrafica
     *
     * @return PreventiviTemporanei
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
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return PreventiviTemporanei
     */
    public function setIdViaggio($idViaggio)
    {
        $this->idViaggio = $idViaggio;

        return $this;
    }

    /**
     * Get idViaggio
     *
     * @return integer
     */
    public function getIdViaggio()
    {
        return $this->idViaggio;
    }

    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return PreventiviTemporanei
     */
    public function setCodpromotore($codpromotore)
    {
        $this->codpromotore = $codpromotore;

        return $this;
    }

    /**
     * Get codpromotore
     *
     * @return integer
     */
    public function getCodpromotore()
    {
        return $this->codpromotore;
    }
}
