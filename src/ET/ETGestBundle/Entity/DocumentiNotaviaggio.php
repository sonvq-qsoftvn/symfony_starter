<?php

namespace ET\ETGestBundle\Entity;

/**
 * DocumentiNotaviaggio
 */
class DocumentiNotaviaggio
{
    /**
     * @var integer
     */
    private $destinatario;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set destinatario
     *
     * @param integer $destinatario
     *
     * @return DocumentiNotaviaggio
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return integer
     */
    public function getDestinatario()
    {
        return $this->destinatario;
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

