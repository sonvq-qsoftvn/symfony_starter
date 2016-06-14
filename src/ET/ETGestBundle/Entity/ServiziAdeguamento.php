<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziAdeguamento
 *
 * @ORM\Table(name="servizi_adeguamento")
 * @ORM\Entity
 */
class ServiziAdeguamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipologia", type="string", length=255, nullable=true)
     */
    private $tipologia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tipologia
     *
     * @param string $tipologia
     *
     * @return ServiziAdeguamento
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return string
     */
    public function getTipologia()
    {
        return $this->tipologia;
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
