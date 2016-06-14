<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpCampagne
 *
 * @ORM\Table(name="php_campagne", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="tipo_campagna", columns={"tipo_campagna"}), @ORM\Index(name="language", columns={"language"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class PhpCampagne
{
    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=15, nullable=false)
     */
    private $iduser = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="language", type="boolean", nullable=false)
     */
    private $language = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_campagna", type="smallint", nullable=false)
     */
    private $tipoCampagna = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clickTotali", type="integer", nullable=false)
     */
    private $clicktotali = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clickgg", type="smallint", nullable=false)
     */
    private $clickgg = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clicktotaliunici", type="integer", nullable=false)
     */
    private $clicktotaliunici = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clickggunici", type="smallint", nullable=false)
     */
    private $clickggunici = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clickModifiche", type="smallint", nullable=false)
     */
    private $clickmodifiche = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxClickgg", type="smallint", nullable=false)
     */
    private $maxclickgg = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxClick", type="integer", nullable=false)
     */
    private $maxclick = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="giornoAttivazione", type="datetime", nullable=false)
     */
    private $giornoattivazione = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio", type="datetime", nullable=false)
     */
    private $dataInizio = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine", type="datetime", nullable=false)
     */
    private $dataFine = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="ggAttivita", type="smallint", nullable=false)
     */
    private $ggattivita = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idCampagna", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcampagna;


}

