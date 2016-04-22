<?php

namespace AppBundle\Entity;

/**
 * ServiziAdeguamento
 */
class ServiziAdeguamento
{
    /**
     * @var string
     */
    private $tipologia;

    /**
     * @var integer
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
