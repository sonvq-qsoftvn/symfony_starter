<?php

namespace AppBundle\Entity;

/**
 * History
 */
class History
{
    /**
     * @var string
     */
    private $idAgent = '';

    /**
     * @var integer
     */
    private $numclick = '0';

    /**
     * @var \DateTime
     */
    private $data = '0000-00-00';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idAgent
     *
     * @param string $idAgent
     *
     * @return History
     */
    public function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;

        return $this;
    }

    /**
     * Get idAgent
     *
     * @return string
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set numclick
     *
     * @param integer $numclick
     *
     * @return History
     */
    public function setNumclick($numclick)
    {
        $this->numclick = $numclick;

        return $this;
    }

    /**
     * Get numclick
     *
     * @return integer
     */
    public function getNumclick()
    {
        return $this->numclick;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return History
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
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
