<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue")
 * @ORM\Entity
 */
class Catalogue
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="source_lang", type="string", length=100, nullable=false)
     */
    private $sourceLang = '';

    /**
     * @var string
     *
     * @ORM\Column(name="target_lang", type="string", length=100, nullable=false)
     */
    private $targetLang = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_created", type="integer", nullable=false)
     */
    private $dateCreated = '0';

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
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catId;


}

