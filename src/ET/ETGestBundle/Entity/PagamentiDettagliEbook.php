<?php

namespace ET\ETGestBundle\Entity;

/**
 * PagamentiDettagliEbook
 */
class PagamentiDettagliEbook
{
    /**
     * @var string
     */
    private $mail = '';

    /**
     * @var integer
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

