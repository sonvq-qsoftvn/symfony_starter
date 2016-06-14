<?php

namespace ET\ETGestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppaltiClienteAnagrafiche
 *
 * @ORM\Table(name="appalti_cliente_anagrafiche")
 * @ORM\Entity
 */
class AppaltiClienteAnagrafiche
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_appalto", type="integer", nullable=false)
     */
    private $idAppalto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id_anagrafica", type="string", length=18, nullable=false)
     */
    private $idAnagrafica = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attivo", type="boolean", nullable=false)
     */
    private $attivo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idAppalto
     *
     * @param integer $idAppalto
     *
     * @return AppaltiClienteAnagrafiche
     */
    public function setIdAppalto($idAppalto)
    {
        $this->idAppalto = $idAppalto;

        return $this;
    }

    /**
     * Get idAppalto
     *
     * @return integer
     */
    public function getIdAppalto()
    {
        return $this->idAppalto;
    }

    /**
     * Set idAnagrafica
     *
     * @param string $idAnagrafica
     *
     * @return AppaltiClienteAnagrafiche
     */
    public function setIdAnagrafica($idAnagrafica)
    {
        $this->idAnagrafica = $idAnagrafica;

        return $this;
    }

    /**
     * Get idAnagrafica
     *
     * @return string
     */
    public function getIdAnagrafica()
    {
        return $this->idAnagrafica;
    }

    /**
     * Set attivo
     *
     * @param boolean $attivo
     *
     * @return AppaltiClienteAnagrafiche
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;

        return $this;
    }

    /**
     * Get attivo
     *
     * @return boolean
     */
    public function getAttivo()
    {
        return $this->attivo;
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
