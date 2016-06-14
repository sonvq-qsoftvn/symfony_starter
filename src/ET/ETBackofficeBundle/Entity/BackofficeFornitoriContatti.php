<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * BackofficeFornitoriContatti
 */
class BackofficeFornitoriContatti
{
    /**
     * @var integer
     */
    private $fornitoriId;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $typecontact;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set fornitoriId
     *
     * @param integer $fornitoriId
     *
     * @return BackofficeFornitoriContatti
     */
    public function setFornitoriId($fornitoriId)
    {
        $this->fornitoriId = $fornitoriId;

        return $this;
    }

    /**
     * Get fornitoriId
     *
     * @return integer
     */
    public function getFornitoriId()
    {
        return $this->fornitoriId;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return BackofficeFornitoriContatti
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set typecontact
     *
     * @param string $typecontact
     *
     * @return BackofficeFornitoriContatti
     */
    public function setTypecontact($typecontact)
    {
        $this->typecontact = $typecontact;

        return $this;
    }

    /**
     * Get typecontact
     *
     * @return string
     */
    public function getTypecontact()
    {
        return $this->typecontact;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return BackofficeFornitoriContatti
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

