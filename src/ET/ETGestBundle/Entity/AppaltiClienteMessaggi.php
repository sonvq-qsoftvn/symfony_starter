<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppaltiClienteMessaggi
 *
 * @ORM\Table(name="appalti_cliente_messaggi")
 * @ORM\Entity
 */
class AppaltiClienteMessaggi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_appalto", type="integer", nullable=false)
     */
    private $idAppalto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=20, nullable=false)
     */
    private $stato = '';

    /**
     * @var string
     *
     * @ORM\Column(name="messaggio", type="text", length=65535, nullable=false)
     */
    private $messaggio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idAppalto
     *
     * @param integer $idAppalto
     *
     * @return AppaltiClienteMessaggi
     */
    public function setIdAppalto($idAppalto)
    {
        $this->idAppalto = $idAppalto;

        return $this;
    }

    /**
     * Get idAppalto
     *
     * @return integer
     */
    public function getIdAppalto()
    {
        return $this->idAppalto;
    }

    /**
     * Set stato
     *
     * @param string $stato
     *
     * @return AppaltiClienteMessaggi
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return string
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set messaggio
     *
     * @param string $messaggio
     *
     * @return AppaltiClienteMessaggi
     */
    public function setMessaggio($messaggio)
    {
        $this->messaggio = $messaggio;

        return $this;
    }

    /**
     * Get messaggio
     *
     * @return string
     */
    public function getMessaggio()
    {
        return $this->messaggio;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return AppaltiClienteMessaggi
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
