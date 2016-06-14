<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentiNotaviaggio
 *
 * @ORM\Table(name="documenti_notaviaggio", indexes={@ORM\Index(name="destinatario_idx", columns={"destinatario"})})
 * @ORM\Entity
 */
class DocumentiNotaviaggio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="destinatario", type="integer", nullable=false)
     */
    private $destinatario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
