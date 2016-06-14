<?php

namespace ET\ETBackofficeBundle\Entity;

/**
 * SessionData
 */
class SessionData
{
    /**
     * @var string
     */
    private $httpUserAgent = '';

    /**
     * @var string
     */
    private $sessionData;

    /**
     * @var integer
     */
    private $sessionExpire = '0';

    /**
     * @var string
     */
    private $serverName = '';

    /**
     * @var string
     */
    private $path = '';

    /**
     * @var string
     */
    private $param = '';

    /**
     * @var string
     */
    private $remoteAddr = '';

    /**
     * @var integer
     */
    private $loggeduser = '0';

    /**
     * @var string
     */
    private $sessionId;


    /**
     * Set httpUserAgent
     *
     * @param string $httpUserAgent
     *
     * @return SessionData
     */
    public function setHttpUserAgent($httpUserAgent)
    {
        $this->httpUserAgent = $httpUserAgent;

        return $this;
    }

    /**
     * Get httpUserAgent
     *
     * @return string
     */
    public function getHttpUserAgent()
    {
        return $this->httpUserAgent;
    }

    /**
     * Set sessionData
     *
     * @param string $sessionData
     *
     * @return SessionData
     */
    public function setSessionData($sessionData)
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    /**
     * Get sessionData
     *
     * @return string
     */
    public function getSessionData()
    {
        return $this->sessionData;
    }

    /**
     * Set sessionExpire
     *
     * @param integer $sessionExpire
     *
     * @return SessionData
     */
    public function setSessionExpire($sessionExpire)
    {
        $this->sessionExpire = $sessionExpire;

        return $this;
    }

    /**
     * Get sessionExpire
     *
     * @return integer
     */
    public function getSessionExpire()
    {
        return $this->sessionExpire;
    }

    /**
     * Set serverName
     *
     * @param string $serverName
     *
     * @return SessionData
     */
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;

        return $this;
    }

    /**
     * Get serverName
     *
     * @return string
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return SessionData
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set param
     *
     * @param string $param
     *
     * @return SessionData
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set remoteAddr
     *
     * @param string $remoteAddr
     *
     * @return SessionData
     */
    public function setRemoteAddr($remoteAddr)
    {
        $this->remoteAddr = $remoteAddr;

        return $this;
    }

    /**
     * Get remoteAddr
     *
     * @return string
     */
    public function getRemoteAddr()
    {
        return $this->remoteAddr;
    }

    /**
     * Set loggeduser
     *
     * @param integer $loggeduser
     *
     * @return SessionData
     */
    public function setLoggeduser($loggeduser)
    {
        $this->loggeduser = $loggeduser;

        return $this;
    }

    /**
     * Get loggeduser
     *
     * @return integer
     */
    public function getLoggeduser()
    {
        return $this->loggeduser;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
}

