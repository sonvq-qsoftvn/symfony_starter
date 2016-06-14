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


}

