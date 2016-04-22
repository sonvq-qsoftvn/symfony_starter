<?php

namespace AppBundle\Entity;

/**
 * BackofficeBannerhome
 */
class BackofficeBannerhome
{
    /**
     * @var string
     */
    private $nomebannerh = '';

    /**
     * @var string
     */
    private $imagebannerh = '';

    /**
     * @var string
     */
    private $linkbannerh = '';

    /**
     * @var boolean
     */
    private $posizione = '0';

    /**
     * @var integer
     */
    private $idbannerhome;


    /**
     * Set nomebannerh
     *
     * @param string $nomebannerh
     *
     * @return BackofficeBannerhome
     */
    public function setNomebannerh($nomebannerh)
    {
        $this->nomebannerh = $nomebannerh;

        return $this;
    }

    /**
     * Get nomebannerh
     *
     * @return string
     */
    public function getNomebannerh()
    {
        return $this->nomebannerh;
    }

    /**
     * Set imagebannerh
     *
     * @param string $imagebannerh
     *
     * @return BackofficeBannerhome
     */
    public function setImagebannerh($imagebannerh)
    {
        $this->imagebannerh = $imagebannerh;

        return $this;
    }

    /**
     * Get imagebannerh
     *
     * @return string
     */
    public function getImagebannerh()
    {
        return $this->imagebannerh;
    }

    /**
     * Set linkbannerh
     *
     * @param string $linkbannerh
     *
     * @return BackofficeBannerhome
     */
    public function setLinkbannerh($linkbannerh)
    {
        $this->linkbannerh = $linkbannerh;

        return $this;
    }

    /**
     * Get linkbannerh
     *
     * @return string
     */
    public function getLinkbannerh()
    {
        return $this->linkbannerh;
    }

    /**
     * Set posizione
     *
     * @param boolean $posizione
     *
     * @return BackofficeBannerhome
     */
    public function setPosizione($posizione)
    {
        $this->posizione = $posizione;

        return $this;
    }

    /**
     * Get posizione
     *
     * @return boolean
     */
    public function getPosizione()
    {
        return $this->posizione;
    }

    /**
     * Get idbannerhome
     *
     * @return integer
     */
    public function getIdbannerhome()
    {
        return $this->idbannerhome;
    }
}
