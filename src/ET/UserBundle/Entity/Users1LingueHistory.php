<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users1LingueHistory
 *
 * @ORM\Table(name="users1_lingue_history")
 * @ORM\Entity
 */
class Users1LingueHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="lingua", type="string", length=5, nullable=false)
     */
    private $lingua = '';

    /**
     * @var string
     *
     * @ORM\Column(name="history_action", type="string", length=10, nullable=true)
     */
    private $historyAction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="history_action_at", type="datetime", nullable=true)
     */
    private $historyActionAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Users1LingueHistory
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return Users1LingueHistory
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }

    /**
     * Set historyAction
     *
     * @param string $historyAction
     *
     * @return Users1LingueHistory
     */
    public function setHistoryAction($historyAction)
    {
        $this->historyAction = $historyAction;

        return $this;
    }

    /**
     * Get historyAction
     *
     * @return string
     */
    public function getHistoryAction()
    {
        return $this->historyAction;
    }

    /**
     * Set historyActionAt
     *
     * @param \DateTime $historyActionAt
     *
     * @return Users1LingueHistory
     */
    public function setHistoryActionAt($historyActionAt)
    {
        $this->historyActionAt = $historyActionAt;

        return $this;
    }

    /**
     * Get historyActionAt
     *
     * @return \DateTime
     */
    public function getHistoryActionAt()
    {
        return $this->historyActionAt;
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
