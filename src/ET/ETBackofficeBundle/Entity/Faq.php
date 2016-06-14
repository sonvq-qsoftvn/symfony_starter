<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * Faq
 */
class Faq
{
    /**
     * @var integer
     */
    private $parentId = '0';

    /**
     * @var string
     */
    private $reparto = '';

    /**
     * @var string
     */
    private $categoria = '';

    /**
     * @var string
     */
    private $domanda;

    /**
     * @var string
     */
    private $risposta;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var integer
     */
    private $idFaq;


    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Faq
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set reparto
     *
     * @param string $reparto
     *
     * @return Faq
     */
    public function setReparto($reparto)
    {
        $this->reparto = $reparto;

        return $this;
    }

    /**
     * Get reparto
     *
     * @return string
     */
    public function getReparto()
    {
        return $this->reparto;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Faq
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set domanda
     *
     * @param string $domanda
     *
     * @return Faq
     */
    public function setDomanda($domanda)
    {
        $this->domanda = $domanda;

        return $this;
    }

    /**
     * Get domanda
     *
     * @return string
     */
    public function getDomanda()
    {
        return $this->domanda;
    }

    /**
     * Set risposta
     *
     * @param string $risposta
     *
     * @return Faq
     */
    public function setRisposta($risposta)
    {
        $this->risposta = $risposta;

        return $this;
    }

    /**
     * Get risposta
     *
     * @return string
     */
    public function getRisposta()
    {
        return $this->risposta;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return Faq
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Get idFaq
     *
     * @return integer
     */
    public function getIdFaq()
    {
        return $this->idFaq;
    }
}

