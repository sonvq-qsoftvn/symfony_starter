<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziTerra
 *
 * @ORM\Table(name="servizi_terra")
 * @ORM\Entity
 */
class ServiziTerra
{
    /**
     * @var string
     *
     * @ORM\Column(name="partenzaaereoporto", type="string", length=50, nullable=true)
     */
    private $partenzaaereoporto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set partenzaaereoporto
     *
     * @param string $partenzaaereoporto
     *
     * @return ServiziTerra
     */
    public function setPartenzaaereoporto($partenzaaereoporto)
    {
        $this->partenzaaereoporto = $partenzaaereoporto;

        return $this;
    }

    /**
     * Get partenzaaereoporto
     *
     * @return string
     */
    public function getPartenzaaereoporto()
    {
        return $this->partenzaaereoporto;
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
