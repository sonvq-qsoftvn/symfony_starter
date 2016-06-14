<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagamentiDettagliEbook
 *
 * @ORM\Table(name="pagamenti_dettagli_ebook")
 * @ORM\Entity
 */
class PagamentiDettagliEbook
{
    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="idDettagli", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddettagli;



    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return PagamentiDettagliEbook
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Get iddettagli
     *
     * @return integer
     */
    public function getIddettagli()
    {
        return $this->iddettagli;
    }
}
