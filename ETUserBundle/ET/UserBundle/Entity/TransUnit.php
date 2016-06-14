<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransUnit
 *
 * @ORM\Table(name="trans_unit")
 * @ORM\Entity
 */
class TransUnit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     */
    private $id = '';

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text", length=65535, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="text", length=65535, nullable=false)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=false)
     */
    private $comments;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_added", type="integer", nullable=false)
     */
    private $dateAdded = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_modified", type="integer", nullable=false)
     */
    private $dateModified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=false)
     */
    private $author = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="translated", type="boolean", nullable=false)
     */
    private $translated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;


}

