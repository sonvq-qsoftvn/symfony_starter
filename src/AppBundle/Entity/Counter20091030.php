<?php

namespace AppBundle\Entity;

/**
 * Counter20091030
 */
class Counter20091030
{
    /**
     * @var integer
     */
    private $totaleassegnatodirette = '0';

    /**
     * @var integer
     */
    private $totaleassegnateappalto = '0';

    /**
     * @var integer
     */
    private $totaleappaltate = '0';

    /**
     * @var integer
     */
    private $totalelavoratedirette = '0';

    /**
     * @var integer
     */
    private $totalelavorateappalto = '0';

    /**
     * @var integer
     */
    private $totalechiusedirette = '0';

    /**
     * @var integer
     */
    private $totalechiuseappalto = '0';

    /**
     * @var integer
     */
    private $promotoreId;

    /**
     * @var string
     */
    private $portale;

    /**
     * @var string
     */
    private $lingua;


    /**
     * Set totaleassegnatodirette
     *
     * @param integer $totaleassegnatodirette
     *
     * @return Counter20091030
     */
    public function setTotaleassegnatodirette($totaleassegnatodirette)
    {
        $this->totaleassegnatodirette = $totaleassegnatodirette;

        return $this;
    }

    /**
     * Get totaleassegnatodirette
     *
     * @return integer
     */
    public function getTotaleassegnatodirette()
    {
        return $this->totaleassegnatodirette;
    }

    /**
     * Set totaleassegnateappalto
     *
     * @param integer $totaleassegnateappalto
     *
     * @return Counter20091030
     */
    public function setTotaleassegnateappalto($totaleassegnateappalto)
    {
        $this->totaleassegnateappalto = $totaleassegnateappalto;

        return $this;
    }

    /**
     * Get totaleassegnateappalto
     *
     * @return integer
     */
    public function getTotaleassegnateappalto()
    {
        return $this->totaleassegnateappalto;
    }

    /**
     * Set totaleappaltate
     *
     * @param integer $totaleappaltate
     *
     * @return Counter20091030
     */
    public function setTotaleappaltate($totaleappaltate)
    {
        $this->totaleappaltate = $totaleappaltate;

        return $this;
    }

    /**
     * Get totaleappaltate
     *
     * @return integer
     */
    public function getTotaleappaltate()
    {
        return $this->totaleappaltate;
    }

    /**
     * Set totalelavoratedirette
     *
     * @param integer $totalelavoratedirette
     *
     * @return Counter20091030
     */
    public function setTotalelavoratedirette($totalelavoratedirette)
    {
        $this->totalelavoratedirette = $totalelavoratedirette;

        return $this;
    }

    /**
     * Get totalelavoratedirette
     *
     * @return integer
     */
    public function getTotalelavoratedirette()
    {
        return $this->totalelavoratedirette;
    }

    /**
     * Set totalelavorateappalto
     *
     * @param integer $totalelavorateappalto
     *
     * @return Counter20091030
     */
    public function setTotalelavorateappalto($totalelavorateappalto)
    {
        $this->totalelavorateappalto = $totalelavorateappalto;

        return $this;
    }

    /**
     * Get totalelavorateappalto
     *
     * @return integer
     */
    public function getTotalelavorateappalto()
    {
        return $this->totalelavorateappalto;
    }

    /**
     * Set totalechiusedirette
     *
     * @param integer $totalechiusedirette
     *
     * @return Counter20091030
     */
    public function setTotalechiusedirette($totalechiusedirette)
    {
        $this->totalechiusedirette = $totalechiusedirette;

        return $this;
    }

    /**
     * Get totalechiusedirette
     *
     * @return integer
     */
    public function getTotalechiusedirette()
    {
        return $this->totalechiusedirette;
    }

    /**
     * Set totalechiuseappalto
     *
     * @param integer $totalechiuseappalto
     *
     * @return Counter20091030
     */
    public function setTotalechiuseappalto($totalechiuseappalto)
    {
        $this->totalechiuseappalto = $totalechiuseappalto;

        return $this;
    }

    /**
     * Get totalechiuseappalto
     *
     * @return integer
     */
    public function getTotalechiuseappalto()
    {
        return $this->totalechiuseappalto;
    }

    /**
     * Set promotoreId
     *
     * @param integer $promotoreId
     *
     * @return Counter20091030
     */
    public function setPromotoreId($promotoreId)
    {
        $this->promotoreId = $promotoreId;

        return $this;
    }

    /**
     * Get promotoreId
     *
     * @return integer
     */
    public function getPromotoreId()
    {
        return $this->promotoreId;
    }

    /**
     * Set portale
     *
     * @param string $portale
     *
     * @return Counter20091030
     */
    public function setPortale($portale)
    {
        $this->portale = $portale;

        return $this;
    }

    /**
     * Get portale
     *
     * @return string
     */
    public function getPortale()
    {
        return $this->portale;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return Counter20091030
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }
}
