<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreventiviV2Md5
 *
 * @ORM\Table(name="preventivi_v2_md5", uniqueConstraints={@ORM\UniqueConstraint(name="idx_preventivi_v2_md5", columns={"codice_md5"})})
 * @ORM\Entity
 */
class PreventiviV2Md5
{
    /**
     * @var integer
     *
     * @ORM\Column(name="preventivo_id", type="bigint", nullable=false)
     */
    private $preventivoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="viaggio_id", type="bigint", nullable=false)
     */
    private $viaggioId;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_md5", type="string", length=50, nullable=false)
     */
    private $codiceMd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set preventivoId
     *
     * @param integer $preventivoId
     *
     * @return PreventiviV2Md5
     */
    public function setPreventivoId($preventivoId)
    {
        $this->preventivoId = $preventivoId;

        return $this;
    }

    /**
     * Get preventivoId
     *
     * @return integer
     */
    public function getPreventivoId()
    {
        return $this->preventivoId;
    }

    /**
     * Set viaggioId
     *
     * @param integer $viaggioId
     *
     * @return PreventiviV2Md5
     */
    public function setViaggioId($viaggioId)
    {
        $this->viaggioId = $viaggioId;

        return $this;
    }

    /**
     * Get viaggioId
     *
     * @return integer
     */
    public function getViaggioId()
    {
        return $this->viaggioId;
    }

    /**
     * Set codiceMd5
     *
     * @param string $codiceMd5
     *
     * @return PreventiviV2Md5
     */
    public function setCodiceMd5($codiceMd5)
    {
        $this->codiceMd5 = $codiceMd5;

        return $this;
    }

    /**
     * Get codiceMd5
     *
     * @return string
     */
    public function getCodiceMd5()
    {
        return $this->codiceMd5;
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
