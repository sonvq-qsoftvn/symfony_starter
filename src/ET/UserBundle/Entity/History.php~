<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history", indexes={@ORM\Index(name="id_agent", columns={"id_agent"})})
 * @ORM\Entity
 */
class History
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_agent", type="string", length=10, nullable=false)
     */
    private $idAgent = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="numclick", type="integer", nullable=false)
     */
    private $numclick = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
