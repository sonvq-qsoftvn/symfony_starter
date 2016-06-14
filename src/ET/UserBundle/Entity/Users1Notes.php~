<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1Notes
 *
 * @ORM\Table(name="users1_notes")
 * @ORM\Entity
 */
class Users1Notes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_id", type="integer", nullable=false)
     */
    private $fkId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_id_crea", type="integer", nullable=false)
     */
    private $fkIdCrea = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text", length=65535, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_nota", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNota;



    /**
     * Set fkId
     *
     * @param integer $fkId
     *
     * @return Users1Notes
     */
    public function setFkId($fkId)
    {
        $this->fkId = $fkId;

        return $this;
    }

    /**
     * Get fkId
     *
     * @return integer
     */
    public function getFkId()
    {
        return $this->fkId;
    }

    /**
     * Set fkIdCrea
     *
     * @param integer $fkIdCrea
     *
     * @return Users1Notes
     */
    public function setFkIdCrea($fkIdCrea)
    {
        $this->fkIdCrea = $fkIdCrea;

        return $this;
    }

    /**
     * Get fkIdCrea
     *
     * @return integer
     */
    public function getFkIdCrea()
    {
        return $this->fkIdCrea;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Users1Notes
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
     * Set nota
     *
     * @param string $nota
     *
     * @return Users1Notes
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Get idNota
     *
     * @return integer
     */
    public function getIdNota()
    {
        return $this->idNota;
    }
}
