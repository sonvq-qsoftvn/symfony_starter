<?php

namespace AppBundle\Entity;

/**
 * Users1Note
 */
class Users1Note
{
    /**
     * @var \DateTime
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Users1Note
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
     * Set note
     *
     * @param string $note
     *
     * @return Users1Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
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
