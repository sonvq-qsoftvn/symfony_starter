<?php

namespace ET\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Residence
 *
 * @ORM\Table(name="residence", indexes={@ORM\Index(name="idresidence", columns={"idresidence"})})
 * @ORM\Entity
 */
class Residence
{
    /**
     * @var string
     *
     * @ORM\Column(name="idresidence", type="string", length=8, nullable=false)
     */
    private $idresidence = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="regione1", type="string", length=100, nullable=false)
     */
    private $regione1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione2", type="string", length=100, nullable=false)
     */
    private $regione2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione3", type="string", length=100, nullable=false)
     */
    private $regione3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione4", type="string", length=100, nullable=false)
     */
    private $regione4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione5", type="string", length=100, nullable=false)
     */
    private $regione5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione6", type="string", length=100, nullable=false)
     */
    private $regione6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione7", type="string", length=100, nullable=false)
     */
    private $regione7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="regione8", type="string", length=100, nullable=false)
     */
    private $regione8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita1", type="string", length=150, nullable=false)
     */
    private $localita1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita2", type="string", length=150, nullable=false)
     */
    private $localita2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita3", type="string", length=150, nullable=false)
     */
    private $localita3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita4", type="string", length=150, nullable=false)
     */
    private $localita4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita5", type="string", length=150, nullable=false)
     */
    private $localita5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita6", type="string", length=150, nullable=false)
     */
    private $localita6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita7", type="string", length=150, nullable=false)
     */
    private $localita7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="localita8", type="string", length=150, nullable=false)
     */
    private $localita8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura1", type="string", length=150, nullable=false)
     */
    private $struttura1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura2", type="string", length=150, nullable=false)
     */
    private $struttura2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura3", type="string", length=150, nullable=false)
     */
    private $struttura3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura4", type="string", length=150, nullable=false)
     */
    private $struttura4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura5", type="string", length=150, nullable=false)
     */
    private $struttura5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura6", type="string", length=150, nullable=false)
     */
    private $struttura6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura7", type="string", length=150, nullable=false)
     */
    private $struttura7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="struttura8", type="string", length=150, nullable=false)
     */
    private $struttura8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note1", type="text", length=65535, nullable=false)
     */
    private $note1;

    /**
     * @var string
     *
     * @ORM\Column(name="note2", type="text", length=65535, nullable=false)
     */
    private $note2;

    /**
     * @var string
     *
     * @ORM\Column(name="note3", type="text", length=65535, nullable=false)
     */
    private $note3;

    /**
     * @var string
     *
     * @ORM\Column(name="note4", type="text", length=65535, nullable=false)
     */
    private $note4;

    /**
     * @var string
     *
     * @ORM\Column(name="note5", type="text", length=65535, nullable=false)
     */
    private $note5;

    /**
     * @var string
     *
     * @ORM\Column(name="note6", type="text", length=65535, nullable=false)
     */
    private $note6;

    /**
     * @var string
     *
     * @ORM\Column(name="note7", type="string", length=150, nullable=false)
     */
    private $note7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note8", type="string", length=150, nullable=false)
     */
    private $note8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="offerte", type="text", length=65535, nullable=false)
     */
    private $offerte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idresidence
     *
     * @param string $idresidence
     *
     * @return Residence
     */
    public function setIdresidence($idresidence)
    {
        $this->idresidence = $idresidence;

        return $this;
    }

    /**
     * Get idresidence
     *
     * @return string
     */
    public function getIdresidence()
    {
        return $this->idresidence;
    }

    /**
     * Set regione1
     *
     * @param string $regione1
     *
     * @return Residence
     */
    public function setRegione1($regione1)
    {
        $this->regione1 = $regione1;

        return $this;
    }

    /**
     * Get regione1
     *
     * @return string
     */
    public function getRegione1()
    {
        return $this->regione1;
    }

    /**
     * Set regione2
     *
     * @param string $regione2
     *
     * @return Residence
     */
    public function setRegione2($regione2)
    {
        $this->regione2 = $regione2;

        return $this;
    }

    /**
     * Get regione2
     *
     * @return string
     */
    public function getRegione2()
    {
        return $this->regione2;
    }

    /**
     * Set regione3
     *
     * @param string $regione3
     *
     * @return Residence
     */
    public function setRegione3($regione3)
    {
        $this->regione3 = $regione3;

        return $this;
    }

    /**
     * Get regione3
     *
     * @return string
     */
    public function getRegione3()
    {
        return $this->regione3;
    }

    /**
     * Set regione4
     *
     * @param string $regione4
     *
     * @return Residence
     */
    public function setRegione4($regione4)
    {
        $this->regione4 = $regione4;

        return $this;
    }

    /**
     * Get regione4
     *
     * @return string
     */
    public function getRegione4()
    {
        return $this->regione4;
    }

    /**
     * Set regione5
     *
     * @param string $regione5
     *
     * @return Residence
     */
    public function setRegione5($regione5)
    {
        $this->regione5 = $regione5;

        return $this;
    }

    /**
     * Get regione5
     *
     * @return string
     */
    public function getRegione5()
    {
        return $this->regione5;
    }

    /**
     * Set regione6
     *
     * @param string $regione6
     *
     * @return Residence
     */
    public function setRegione6($regione6)
    {
        $this->regione6 = $regione6;

        return $this;
    }

    /**
     * Get regione6
     *
     * @return string
     */
    public function getRegione6()
    {
        return $this->regione6;
    }

    /**
     * Set regione7
     *
     * @param string $regione7
     *
     * @return Residence
     */
    public function setRegione7($regione7)
    {
        $this->regione7 = $regione7;

        return $this;
    }

    /**
     * Get regione7
     *
     * @return string
     */
    public function getRegione7()
    {
        return $this->regione7;
    }

    /**
     * Set regione8
     *
     * @param string $regione8
     *
     * @return Residence
     */
    public function setRegione8($regione8)
    {
        $this->regione8 = $regione8;

        return $this;
    }

    /**
     * Get regione8
     *
     * @return string
     */
    public function getRegione8()
    {
        return $this->regione8;
    }

    /**
     * Set localita1
     *
     * @param string $localita1
     *
     * @return Residence
     */
    public function setLocalita1($localita1)
    {
        $this->localita1 = $localita1;

        return $this;
    }

    /**
     * Get localita1
     *
     * @return string
     */
    public function getLocalita1()
    {
        return $this->localita1;
    }

    /**
     * Set localita2
     *
     * @param string $localita2
     *
     * @return Residence
     */
    public function setLocalita2($localita2)
    {
        $this->localita2 = $localita2;

        return $this;
    }

    /**
     * Get localita2
     *
     * @return string
     */
    public function getLocalita2()
    {
        return $this->localita2;
    }

    /**
     * Set localita3
     *
     * @param string $localita3
     *
     * @return Residence
     */
    public function setLocalita3($localita3)
    {
        $this->localita3 = $localita3;

        return $this;
    }

    /**
     * Get localita3
     *
     * @return string
     */
    public function getLocalita3()
    {
        return $this->localita3;
    }

    /**
     * Set localita4
     *
     * @param string $localita4
     *
     * @return Residence
     */
    public function setLocalita4($localita4)
    {
        $this->localita4 = $localita4;

        return $this;
    }

    /**
     * Get localita4
     *
     * @return string
     */
    public function getLocalita4()
    {
        return $this->localita4;
    }

    /**
     * Set localita5
     *
     * @param string $localita5
     *
     * @return Residence
     */
    public function setLocalita5($localita5)
    {
        $this->localita5 = $localita5;

        return $this;
    }

    /**
     * Get localita5
     *
     * @return string
     */
    public function getLocalita5()
    {
        return $this->localita5;
    }

    /**
     * Set localita6
     *
     * @param string $localita6
     *
     * @return Residence
     */
    public function setLocalita6($localita6)
    {
        $this->localita6 = $localita6;

        return $this;
    }

    /**
     * Get localita6
     *
     * @return string
     */
    public function getLocalita6()
    {
        return $this->localita6;
    }

    /**
     * Set localita7
     *
     * @param string $localita7
     *
     * @return Residence
     */
    public function setLocalita7($localita7)
    {
        $this->localita7 = $localita7;

        return $this;
    }

    /**
     * Get localita7
     *
     * @return string
     */
    public function getLocalita7()
    {
        return $this->localita7;
    }

    /**
     * Set localita8
     *
     * @param string $localita8
     *
     * @return Residence
     */
    public function setLocalita8($localita8)
    {
        $this->localita8 = $localita8;

        return $this;
    }

    /**
     * Get localita8
     *
     * @return string
     */
    public function getLocalita8()
    {
        return $this->localita8;
    }

    /**
     * Set struttura1
     *
     * @param string $struttura1
     *
     * @return Residence
     */
    public function setStruttura1($struttura1)
    {
        $this->struttura1 = $struttura1;

        return $this;
    }

    /**
     * Get struttura1
     *
     * @return string
     */
    public function getStruttura1()
    {
        return $this->struttura1;
    }

    /**
     * Set struttura2
     *
     * @param string $struttura2
     *
     * @return Residence
     */
    public function setStruttura2($struttura2)
    {
        $this->struttura2 = $struttura2;

        return $this;
    }

    /**
     * Get struttura2
     *
     * @return string
     */
    public function getStruttura2()
    {
        return $this->struttura2;
    }

    /**
     * Set struttura3
     *
     * @param string $struttura3
     *
     * @return Residence
     */
    public function setStruttura3($struttura3)
    {
        $this->struttura3 = $struttura3;

        return $this;
    }

    /**
     * Get struttura3
     *
     * @return string
     */
    public function getStruttura3()
    {
        return $this->struttura3;
    }

    /**
     * Set struttura4
     *
     * @param string $struttura4
     *
     * @return Residence
     */
    public function setStruttura4($struttura4)
    {
        $this->struttura4 = $struttura4;

        return $this;
    }

    /**
     * Get struttura4
     *
     * @return string
     */
    public function getStruttura4()
    {
        return $this->struttura4;
    }

    /**
     * Set struttura5
     *
     * @param string $struttura5
     *
     * @return Residence
     */
    public function setStruttura5($struttura5)
    {
        $this->struttura5 = $struttura5;

        return $this;
    }

    /**
     * Get struttura5
     *
     * @return string
     */
    public function getStruttura5()
    {
        return $this->struttura5;
    }

    /**
     * Set struttura6
     *
     * @param string $struttura6
     *
     * @return Residence
     */
    public function setStruttura6($struttura6)
    {
        $this->struttura6 = $struttura6;

        return $this;
    }

    /**
     * Get struttura6
     *
     * @return string
     */
    public function getStruttura6()
    {
        return $this->struttura6;
    }

    /**
     * Set struttura7
     *
     * @param string $struttura7
     *
     * @return Residence
     */
    public function setStruttura7($struttura7)
    {
        $this->struttura7 = $struttura7;

        return $this;
    }

    /**
     * Get struttura7
     *
     * @return string
     */
    public function getStruttura7()
    {
        return $this->struttura7;
    }

    /**
     * Set struttura8
     *
     * @param string $struttura8
     *
     * @return Residence
     */
    public function setStruttura8($struttura8)
    {
        $this->struttura8 = $struttura8;

        return $this;
    }

    /**
     * Get struttura8
     *
     * @return string
     */
    public function getStruttura8()
    {
        return $this->struttura8;
    }

    /**
     * Set note1
     *
     * @param string $note1
     *
     * @return Residence
     */
    public function setNote1($note1)
    {
        $this->note1 = $note1;

        return $this;
    }

    /**
     * Get note1
     *
     * @return string
     */
    public function getNote1()
    {
        return $this->note1;
    }

    /**
     * Set note2
     *
     * @param string $note2
     *
     * @return Residence
     */
    public function setNote2($note2)
    {
        $this->note2 = $note2;

        return $this;
    }

    /**
     * Get note2
     *
     * @return string
     */
    public function getNote2()
    {
        return $this->note2;
    }

    /**
     * Set note3
     *
     * @param string $note3
     *
     * @return Residence
     */
    public function setNote3($note3)
    {
        $this->note3 = $note3;

        return $this;
    }

    /**
     * Get note3
     *
     * @return string
     */
    public function getNote3()
    {
        return $this->note3;
    }

    /**
     * Set note4
     *
     * @param string $note4
     *
     * @return Residence
     */
    public function setNote4($note4)
    {
        $this->note4 = $note4;

        return $this;
    }

    /**
     * Get note4
     *
     * @return string
     */
    public function getNote4()
    {
        return $this->note4;
    }

    /**
     * Set note5
     *
     * @param string $note5
     *
     * @return Residence
     */
    public function setNote5($note5)
    {
        $this->note5 = $note5;

        return $this;
    }

    /**
     * Get note5
     *
     * @return string
     */
    public function getNote5()
    {
        return $this->note5;
    }

    /**
     * Set note6
     *
     * @param string $note6
     *
     * @return Residence
     */
    public function setNote6($note6)
    {
        $this->note6 = $note6;

        return $this;
    }

    /**
     * Get note6
     *
     * @return string
     */
    public function getNote6()
    {
        return $this->note6;
    }

    /**
     * Set note7
     *
     * @param string $note7
     *
     * @return Residence
     */
    public function setNote7($note7)
    {
        $this->note7 = $note7;

        return $this;
    }

    /**
     * Get note7
     *
     * @return string
     */
    public function getNote7()
    {
        return $this->note7;
    }

    /**
     * Set note8
     *
     * @param string $note8
     *
     * @return Residence
     */
    public function setNote8($note8)
    {
        $this->note8 = $note8;

        return $this;
    }

    /**
     * Get note8
     *
     * @return string
     */
    public function getNote8()
    {
        return $this->note8;
    }

    /**
     * Set offerte
     *
     * @param string $offerte
     *
     * @return Residence
     */
    public function setOfferte($offerte)
    {
        $this->offerte = $offerte;

        return $this;
    }

    /**
     * Get offerte
     *
     * @return string
     */
    public function getOfferte()
    {
        return $this->offerte;
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
