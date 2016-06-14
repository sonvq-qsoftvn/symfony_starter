<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionData
 *
 * @ORM\Table(name="session_data")
 * @ORM\Entity
 */
class SessionData
{
    /**
     * @var string
     *
     * @ORM\Column(name="http_user_agent", type="string", length=32, nullable=false)
     */
    private $httpUserAgent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="session_data", type="blob", length=65535, nullable=false)
     */
    private $sessionData;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_expire", type="integer", nullable=false)
     */
    private $sessionExpire = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="server_name", type="string", length=50, nullable=false)
     */
    private $serverName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path = '';

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=255, nullable=false)
     */
    private $param = '';

    /**
     * @var string
     *
     * @ORM\Column(name="remote_addr", type="string", length=15, nullable=false)
     */
    private $remoteAddr = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="loggedUser", type="integer", nullable=false)
     */
    private $loggeduser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
