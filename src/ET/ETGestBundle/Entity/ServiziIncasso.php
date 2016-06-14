<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziIncasso
 *
 * @ORM\Table(name="servizi_incasso")
 * @ORM\Entity
 */
class ServiziIncasso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipologia", type="bigint", nullable=true)
     */
    private $idTipologia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="incassato", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $incassato = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idTipologia
     *
     * @param integer $idTipologia
     *
     * @return ServiziIncasso
     */
    public function setIdTipologia($idTipologia)
    {
        $this->idTipologia = $idTipologia;

        return $this;
    }

    /**
     * Get idTipologia
     *
     * @return integer
     */
    public function getIdTipologia()
    {
        return $this->idTipologia;
    }

    /**
     * Set incassato
     *
     * @param string $incassato
     *
     * @return ServiziIncasso
     */
    public function setIncassato($incassato)
    {
        $this->incassato = $incassato;

        return $this;
    }

    /**
     * Get incassato
     *
     * @return string
     */
    public function getIncassato()
    {
        return $this->incassato;
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
