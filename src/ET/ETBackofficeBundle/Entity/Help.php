<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * Help
 */
class Help
{
    /**
     * @var string
     */
    private $appId;

    /**
     * @var string
     */
    private $sezId;

    /**
     * @var string
     */
    private $pagId;

    /**
     * @var string
     */
    private $helpText;

    /**
     * @var string
     */
    private $helpTitle;

    /**
     * @var string
     */
    private $media;

    /**
     * @var string
     */
    private $riffaq = '';

    /**
     * @var string
     */
    private $addId = '';

    /**
     * @var string
     */
    private $position = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set appId
     *
     * @param string $appId
     *
     * @return Help
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Get appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Set sezId
     *
     * @param string $sezId
     *
     * @return Help
     */
    public function setSezId($sezId)
    {
        $this->sezId = $sezId;

        return $this;
    }

    /**
     * Get sezId
     *
     * @return string
     */
    public function getSezId()
    {
        return $this->sezId;
    }

    /**
     * Set pagId
     *
     * @param string $pagId
     *
     * @return Help
     */
    public function setPagId($pagId)
    {
        $this->pagId = $pagId;

        return $this;
    }

    /**
     * Get pagId
     *
     * @return string
     */
    public function getPagId()
    {
        return $this->pagId;
    }

    /**
     * Set helpText
     *
     * @param string $helpText
     *
     * @return Help
     */
    public function setHelpText($helpText)
    {
        $this->helpText = $helpText;

        return $this;
    }

    /**
     * Get helpText
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->helpText;
    }

    /**
     * Set helpTitle
     *
     * @param string $helpTitle
     *
     * @return Help
     */
    public function setHelpTitle($helpTitle)
    {
        $this->helpTitle = $helpTitle;

        return $this;
    }

    /**
     * Get helpTitle
     *
     * @return string
     */
    public function getHelpTitle()
    {
        return $this->helpTitle;
    }

    /**
     * Set media
     *
     * @param string $media
     *
     * @return Help
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set riffaq
     *
     * @param string $riffaq
     *
     * @return Help
     */
    public function setRiffaq($riffaq)
    {
        $this->riffaq = $riffaq;

        return $this;
    }

    /**
     * Get riffaq
     *
     * @return string
     */
    public function getRiffaq()
    {
        return $this->riffaq;
    }

    /**
     * Set addId
     *
     * @param string $addId
     *
     * @return Help
     */
    public function setAddId($addId)
    {
        $this->addId = $addId;

        return $this;
    }

    /**
     * Get addId
     *
     * @return string
     */
    public function getAddId()
    {
        return $this->addId;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Help
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
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

