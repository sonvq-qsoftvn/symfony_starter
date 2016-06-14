<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * Template
 */
class Template
{
    /**
     * @var string
     */
    private $titolo = '';

    /**
     * @var string
     */
    private $template;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return Template
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
     * Set template
     *
     * @param string $template
     *
     * @return Template
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
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

