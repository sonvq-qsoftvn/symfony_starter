<?php

namespace AppBundle\Entity;

/**
 * BackofficeFornitoriImport
 */
class BackofficeFornitoriImport
{
    /**
     * @var string
     */
    private $cortesia = '';

    /**
     * @var string
     */
    private $ricerca = '';

    /**
     * @var string
     */
    private $nominativo = '';

    /**
     * @var string
     */
    private $estensione = '';

    /**
     * @var string
     */
    private $indirizzo = '';

    /**
     * @var string
     */
    private $cap = '';

    /**
     * @var string
     */
    private $citta' = '';

    /**
     * @var string
     */
    private $prov = '';

    /**
     * @var string
     */
    private $codStatoEstero = '';

    /**
     * @var string
     */
    private $desStatoEstero = '';

    /**
     * @var string
     */
    private $nazBlacklist = '';

    /**
     * @var string
     */
    private $codZona = '';

    /**
     * @var string
     */
    private $desZona = '';

    /**
     * @var string
     */
    private $codCategoria = '';

    /**
     * @var string
     */
    private $desCategoria = '';

    /**
     * @var string
     */
    private $codAttivita' = '';

    /**
     * @var string
     */
    private $desAttivita' = '';

    /**
     * @var string
     */
    private $gruppo = '';

    /**
     * @var string
     */
    private $desGruppo = '';

    /**
     * @var string
     */
    private $prefisso = '';

    /**
     * @var string
     */
    private $telefono1 = '';

    /**
     * @var string
     */
    private $telefono2 = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $telex = '';

    /**
     * @var \DateTime
     */
    private $dataUltimoContatto;

    /**
     * @var string
     */
    private $partitaIva = '';

    /**
     * @var string
     */
    private $codFiscale = '';

    /**
     * @var string
     */
    private $sesso = '';

    /**
     * @var string
     */
    private $luogoNascita = '';

    /**
     * @var string
     */
    private $provNascita = '';

    /**
     * @var \DateTime
     */
    private $dataNascita;

    /**
     * @var string
     */
    private $spedizione = '';

    /**
     * @var string
     */
    private $esclusioneStampaReg = '';

    /**
     * @var string
     */
    private $esclusionePosta = '';

    /**
     * @var string
     */
    private $accettazionePrivacy = '';

    /**
     * @var string
     */
    private $urlInternet = '';

    /**
     * @var string
     */
    private $eMailInternet = '';

    /**
     * @var string
     */
    private $codCatScontiCl = '';

    /**
     * @var string
     */
    private $desCatScontiCl = '';

    /**
     * @var string
     */
    private $codCatScontiOp = '';

    /**
     * @var string
     */
    private $desCatScontiOp = '';

    /**
     * @var string
     */
    private $codAnagPagOp = '';

    /**
     * @var string
     */
    private $desAnagPagOp = '';

    /**
     * @var string
     */
    private $codTipoVet;

    /**
     * @var string
     */
    private $desTipoVettore;

    /**
     * @var string
     */
    private $cmp;

    /**
     * @var string
     */
    private $cmpNum;

    /**
     * @var string
     */
    private $assocBsp;

    /**
     * @var string
     */
    private $numeroCard;

    /**
     * @var string
     */
    private $inviaCat;

    /**
     * @var \DateTime
     */
    private $dataTess;

    /**
     * @var string
     */
    private $numTessera;

    /**
     * @var string
     */
    private $scadTessera = '';

    /**
     * @var string
     */
    private $codTrib1 = '';

    /**
     * @var string
     */
    private $codTrib2 = '';

    /**
     * @var string
     */
    private $codTrib3 = '';

    /**
     * @var string
     */
    private $codTrib4 = '';

    /**
     * @var string
     */
    private $codTrib5 = '';

    /**
     * @var string
     */
    private $codPagPratCl = '';

    /**
     * @var string
     */
    private $desPagPratCl = '';

    /**
     * @var string
     */
    private $codPagPratOp = '';

    /**
     * @var string
     */
    private $desPagPratOp = '';

    /**
     * @var string
     */
    private $codPagFattCl = '';

    /**
     * @var string
     */
    private $desPagFattCl = '';

    /**
     * @var string
     */
    private $codPagFattOp = '';

    /**
     * @var string
     */
    private $desPagFattOp = '';

    /**
     * @var string
     */
    private $bancaAppoggio = '';

    /**
     * @var string
     */
    private $filialeBn = '';

    /**
     * @var string
     */
    private $localitaBn = '';

    /**
     * @var string
     */
    private $provBn = '';

    /**
     * @var string
     */
    private $capBn = '';

    /**
     * @var string
     */
    private $iban = '';

    /**
     * @var string
     */
    private $bban = '';

    /**
     * @var string
     */
    private $swift = '';

    /**
     * @var string
     */
    private $valutaImporti = '';

    /**
     * @var string
     */
    private $fidoCl = '';

    /**
     * @var string
     */
    private $insolutiCl = '';

    /**
     * @var string
     */
    private $tipoDoc = '';

    /**
     * @var string
     */
    private $numDoc = '';

    /**
     * @var \DateTime
     */
    private $dataEmisDoc;

    /**
     * @var string
     */
    private $luogoEmisDoc = '';

    /**
     * @var string
     */
    private $provvEmisDoc = '';

    /**
     * @var string
     */
    private $scadDoc = '';

    /**
     * @var string
     */
    private $lingua = '';

    /**
     * @var string
     */
    private $tipologiaC/cCl = '';

    /**
     * @var string
     */
    private $numeroC/cCl = '';

    /**
     * @var \DateTime
     */
    private $dataScadenzaC/cCl;

    /**
     * @var string
     */
    private $tipoUtilizzoC/cCl = '';

    /**
     * @var string
     */
    private $desLinguaPerStampe = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var string
     */
    private $listinoPrz = '';

    /**
     * @var string
     */
    private $listinoCst = '';

    /**
     * @var string
     */
    private $listinoProvvPass = '';

    /**
     * @var string
     */
    private $listinoProvvAtt = '';

    /**
     * @var string
     */
    private $codFatCl = '';

    /**
     * @var string
     */
    private $desFatCl = '';

    /**
     * @var string
     */
    private $codCollettoreCl = '';

    /**
     * @var string
     */
    private $desCollettoreCl = '';

    /**
     * @var string
     */
    private $codPromotoreCl = '';

    /**
     * @var string
     */
    private $desPromotoreCl = '';

    /**
     * @var string
     */
    private $codVoucherOp = '';

    /**
     * @var string
     */
    private $desVoucherOp = '';

    /**
     * @var string
     */
    private $codOperatore = '';

    /**
     * @var string
     */
    private $desOperatore = '';

    /**
     * @var string
     */
    private $codFatOp = '';

    /**
     * @var string
     */
    private $desFattOp = '';

    /**
     * @var string
     */
    private $valOperaz = '';

    /**
     * @var string
     */
    private $tipoRiscossione = '';

    /**
     * @var string
     */
    private $desTipoRisc = '';

    /**
     * @var string
     */
    private $mezzoRisc = '';

    /**
     * @var string
     */
    private $tipoPagamento = '';

    /**
     * @var string
     */
    private $desTipoPag = '';

    /**
     * @var string
     */
    private $mezzoPag = '';

    /**
     * @var string
     */
    private $banca/altroOpeFin = '';

    /**
     * @var string
     */
    private $rifP/conti = '';

    /**
     * @var string
     */
    private $fileGener.riscossioni = '';

    /**
     * @var string
     */
    private $codOperAltern = '';

    /**
     * @var string
     */
    private $seFuoriTempo = '';

    /**
     * @var string
     */
    private $codFiliale = '';

    /**
     * @var string
     */
    private $desFiliale = '';

    /**
     * @var string
     */
    private $sequenzaCl = '';

    /**
     * @var string
     */
    private $sequenzaOp = '';

    /**
     * @var string
     */
    private $logo = '';

    /**
     * @var string
     */
    private $flagBlacklist = '';

    /**
     * @var string
     */
    private $pcontiCM = '';

    /**
     * @var string
     */
    private $pcontiCC = '';

    /**
     * @var string
     */
    private $pcontiFM = '';

    /**
     * @var string
     */
    private $pcontiFC = '';

    /**
     * @var string
     */
    private $accettaC/cAirplusOp = '';

    /**
     * @var string
     */
    private $accettaC/cAmericanExpressOp = '';

    /**
     * @var string
     */
    private $accettaC/cDinersClubOp = '';

    /**
     * @var \DateTime
     */
    private $dataCreazione;

    /**
     * @var \DateTime
     */
    private $dataUltimaModifica;

    /**
     * @var integer
     */
    private $codRecord;


    /**
     * Set cortesia
     *
     * @param string $cortesia
     *
     * @return BackofficeFornitoriImport
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;

        return $this;
    }

    /**
     * Get cortesia
     *
     * @return string
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }

    /**
     * Set ricerca
     *
     * @param string $ricerca
     *
     * @return BackofficeFornitoriImport
     */
    public function setRicerca($ricerca)
    {
        $this->ricerca = $ricerca;

        return $this;
    }

    /**
     * Get ricerca
     *
     * @return string
     */
    public function getRicerca()
    {
        return $this->ricerca;
    }

    /**
     * Set nominativo
     *
     * @param string $nominativo
     *
     * @return BackofficeFornitoriImport
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set estensione
     *
     * @param string $estensione
     *
     * @return BackofficeFornitoriImport
     */
    public function setEstensione($estensione)
    {
        $this->estensione = $estensione;

        return $this;
    }

    /**
     * Get estensione
     *
     * @return string
     */
    public function getEstensione()
    {
        return $this->estensione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return BackofficeFornitoriImport
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return BackofficeFornitoriImport
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta'
     *
     * @param string $citta'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCitta'($citta')
    {
        $this->citta' = $citta';

        return $this;
    }

    /**
     * Get citta'
     *
     * @return string
     */
    public function getCitta'()
    {
        return $this->citta';
    }

    /**
     * Set prov
     *
     * @param string $prov
     *
     * @return BackofficeFornitoriImport
     */
    public function setProv($prov)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return string
     */
    public function getProv()
    {
        return $this->prov;
    }

    /**
     * Set codStatoEstero
     *
     * @param string $codStatoEstero
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodStatoEstero($codStatoEstero)
    {
        $this->codStatoEstero = $codStatoEstero;

        return $this;
    }

    /**
     * Get codStatoEstero
     *
     * @return string
     */
    public function getCodStatoEstero()
    {
        return $this->codStatoEstero;
    }

    /**
     * Set desStatoEstero
     *
     * @param string $desStatoEstero
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesStatoEstero($desStatoEstero)
    {
        $this->desStatoEstero = $desStatoEstero;

        return $this;
    }

    /**
     * Get desStatoEstero
     *
     * @return string
     */
    public function getDesStatoEstero()
    {
        return $this->desStatoEstero;
    }

    /**
     * Set nazBlacklist
     *
     * @param string $nazBlacklist
     *
     * @return BackofficeFornitoriImport
     */
    public function setNazBlacklist($nazBlacklist)
    {
        $this->nazBlacklist = $nazBlacklist;

        return $this;
    }

    /**
     * Get nazBlacklist
     *
     * @return string
     */
    public function getNazBlacklist()
    {
        return $this->nazBlacklist;
    }

    /**
     * Set codZona
     *
     * @param string $codZona
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodZona($codZona)
    {
        $this->codZona = $codZona;

        return $this;
    }

    /**
     * Get codZona
     *
     * @return string
     */
    public function getCodZona()
    {
        return $this->codZona;
    }

    /**
     * Set desZona
     *
     * @param string $desZona
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesZona($desZona)
    {
        $this->desZona = $desZona;

        return $this;
    }

    /**
     * Get desZona
     *
     * @return string
     */
    public function getDesZona()
    {
        return $this->desZona;
    }

    /**
     * Set codCategoria
     *
     * @param string $codCategoria
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodCategoria($codCategoria)
    {
        $this->codCategoria = $codCategoria;

        return $this;
    }

    /**
     * Get codCategoria
     *
     * @return string
     */
    public function getCodCategoria()
    {
        return $this->codCategoria;
    }

    /**
     * Set desCategoria
     *
     * @param string $desCategoria
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesCategoria($desCategoria)
    {
        $this->desCategoria = $desCategoria;

        return $this;
    }

    /**
     * Get desCategoria
     *
     * @return string
     */
    public function getDesCategoria()
    {
        return $this->desCategoria;
    }

    /**
     * Set codAttivita'
     *
     * @param string $codAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodAttivita'($codAttivita')
    {
        $this->codAttivita' = $codAttivita';

        return $this;
    }

    /**
     * Get codAttivita'
     *
     * @return string
     */
    public function getCodAttivita'()
    {
        return $this->codAttivita';
    }

    /**
     * Set desAttivita'
     *
     * @param string $desAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesAttivita'($desAttivita')
    {
        $this->desAttivita' = $desAttivita';

        return $this;
    }

    /**
     * Get desAttivita'
     *
     * @return string
     */
    public function getDesAttivita'()
    {
        return $this->desAttivita';
    }

    /**
     * Set gruppo
     *
     * @param string $gruppo
     *
     * @return BackofficeFornitoriImport
     */
    public function setGruppo($gruppo)
    {
        $this->gruppo = $gruppo;

        return $this;
    }

    /**
     * Get gruppo
     *
     * @return string
     */
    public function getGruppo()
    {
        return $this->gruppo;
    }

    /**
     * Set desGruppo
     *
     * @param string $desGruppo
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesGruppo($desGruppo)
    {
        $this->desGruppo = $desGruppo;

        return $this;
    }

    /**
     * Get desGruppo
     *
     * @return string
     */
    public function getDesGruppo()
    {
        return $this->desGruppo;
    }

    /**
     * Set prefisso
     *
     * @param string $prefisso
     *
     * @return BackofficeFornitoriImport
     */
    public function setPrefisso($prefisso)
    {
        $this->prefisso = $prefisso;

        return $this;
    }

    /**
     * Get prefisso
     *
     * @return string
     */
    public function getPrefisso()
    {
        return $this->prefisso;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     *
     * @return BackofficeFornitoriImport
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return BackofficeFornitoriImport
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return BackofficeFornitoriImport
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set telex
     *
     * @param string $telex
     *
     * @return BackofficeFornitoriImport
     */
    public function setTelex($telex)
    {
        $this->telex = $telex;

        return $this;
    }

    /**
     * Get telex
     *
     * @return string
     */
    public function getTelex()
    {
        return $this->telex;
    }

    /**
     * Set dataUltimoContatto
     *
     * @param \DateTime $dataUltimoContatto
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataUltimoContatto($dataUltimoContatto)
    {
        $this->dataUltimoContatto = $dataUltimoContatto;

        return $this;
    }

    /**
     * Get dataUltimoContatto
     *
     * @return \DateTime
     */
    public function getDataUltimoContatto()
    {
        return $this->dataUltimoContatto;
    }

    /**
     * Set partitaIva
     *
     * @param string $partitaIva
     *
     * @return BackofficeFornitoriImport
     */
    public function setPartitaIva($partitaIva)
    {
        $this->partitaIva = $partitaIva;

        return $this;
    }

    /**
     * Get partitaIva
     *
     * @return string
     */
    public function getPartitaIva()
    {
        return $this->partitaIva;
    }

    /**
     * Set codFiscale
     *
     * @param string $codFiscale
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodFiscale($codFiscale)
    {
        $this->codFiscale = $codFiscale;

        return $this;
    }

    /**
     * Get codFiscale
     *
     * @return string
     */
    public function getCodFiscale()
    {
        return $this->codFiscale;
    }

    /**
     * Set sesso
     *
     * @param string $sesso
     *
     * @return BackofficeFornitoriImport
     */
    public function setSesso($sesso)
    {
        $this->sesso = $sesso;

        return $this;
    }

    /**
     * Get sesso
     *
     * @return string
     */
    public function getSesso()
    {
        return $this->sesso;
    }

    /**
     * Set luogoNascita
     *
     * @param string $luogoNascita
     *
     * @return BackofficeFornitoriImport
     */
    public function setLuogoNascita($luogoNascita)
    {
        $this->luogoNascita = $luogoNascita;

        return $this;
    }

    /**
     * Get luogoNascita
     *
     * @return string
     */
    public function getLuogoNascita()
    {
        return $this->luogoNascita;
    }

    /**
     * Set provNascita
     *
     * @param string $provNascita
     *
     * @return BackofficeFornitoriImport
     */
    public function setProvNascita($provNascita)
    {
        $this->provNascita = $provNascita;

        return $this;
    }

    /**
     * Get provNascita
     *
     * @return string
     */
    public function getProvNascita()
    {
        return $this->provNascita;
    }

    /**
     * Set dataNascita
     *
     * @param \DateTime $dataNascita
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;

        return $this;
    }

    /**
     * Get dataNascita
     *
     * @return \DateTime
     */
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

    /**
     * Set spedizione
     *
     * @param string $spedizione
     *
     * @return BackofficeFornitoriImport
     */
    public function setSpedizione($spedizione)
    {
        $this->spedizione = $spedizione;

        return $this;
    }

    /**
     * Get spedizione
     *
     * @return string
     */
    public function getSpedizione()
    {
        return $this->spedizione;
    }

    /**
     * Set esclusioneStampaReg
     *
     * @param string $esclusioneStampaReg
     *
     * @return BackofficeFornitoriImport
     */
    public function setEsclusioneStampaReg($esclusioneStampaReg)
    {
        $this->esclusioneStampaReg = $esclusioneStampaReg;

        return $this;
    }

    /**
     * Get esclusioneStampaReg
     *
     * @return string
     */
    public function getEsclusioneStampaReg()
    {
        return $this->esclusioneStampaReg;
    }

    /**
     * Set esclusionePosta
     *
     * @param string $esclusionePosta
     *
     * @return BackofficeFornitoriImport
     */
    public function setEsclusionePosta($esclusionePosta)
    {
        $this->esclusionePosta = $esclusionePosta;

        return $this;
    }

    /**
     * Get esclusionePosta
     *
     * @return string
     */
    public function getEsclusionePosta()
    {
        return $this->esclusionePosta;
    }

    /**
     * Set accettazionePrivacy
     *
     * @param string $accettazionePrivacy
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettazionePrivacy($accettazionePrivacy)
    {
        $this->accettazionePrivacy = $accettazionePrivacy;

        return $this;
    }

    /**
     * Get accettazionePrivacy
     *
     * @return string
     */
    public function getAccettazionePrivacy()
    {
        return $this->accettazionePrivacy;
    }

    /**
     * Set urlInternet
     *
     * @param string $urlInternet
     *
     * @return BackofficeFornitoriImport
     */
    public function setUrlInternet($urlInternet)
    {
        $this->urlInternet = $urlInternet;

        return $this;
    }

    /**
     * Get urlInternet
     *
     * @return string
     */
    public function getUrlInternet()
    {
        return $this->urlInternet;
    }

    /**
     * Set eMailInternet
     *
     * @param string $eMailInternet
     *
     * @return BackofficeFornitoriImport
     */
    public function setEMailInternet($eMailInternet)
    {
        $this->eMailInternet = $eMailInternet;

        return $this;
    }

    /**
     * Get eMailInternet
     *
     * @return string
     */
    public function getEMailInternet()
    {
        return $this->eMailInternet;
    }

    /**
     * Set codCatScontiCl
     *
     * @param string $codCatScontiCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodCatScontiCl($codCatScontiCl)
    {
        $this->codCatScontiCl = $codCatScontiCl;

        return $this;
    }

    /**
     * Get codCatScontiCl
     *
     * @return string
     */
    public function getCodCatScontiCl()
    {
        return $this->codCatScontiCl;
    }

    /**
     * Set desCatScontiCl
     *
     * @param string $desCatScontiCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesCatScontiCl($desCatScontiCl)
    {
        $this->desCatScontiCl = $desCatScontiCl;

        return $this;
    }

    /**
     * Get desCatScontiCl
     *
     * @return string
     */
    public function getDesCatScontiCl()
    {
        return $this->desCatScontiCl;
    }

    /**
     * Set codCatScontiOp
     *
     * @param string $codCatScontiOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodCatScontiOp($codCatScontiOp)
    {
        $this->codCatScontiOp = $codCatScontiOp;

        return $this;
    }

    /**
     * Get codCatScontiOp
     *
     * @return string
     */
    public function getCodCatScontiOp()
    {
        return $this->codCatScontiOp;
    }

    /**
     * Set desCatScontiOp
     *
     * @param string $desCatScontiOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesCatScontiOp($desCatScontiOp)
    {
        $this->desCatScontiOp = $desCatScontiOp;

        return $this;
    }

    /**
     * Get desCatScontiOp
     *
     * @return string
     */
    public function getDesCatScontiOp()
    {
        return $this->desCatScontiOp;
    }

    /**
     * Set codAnagPagOp
     *
     * @param string $codAnagPagOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodAnagPagOp($codAnagPagOp)
    {
        $this->codAnagPagOp = $codAnagPagOp;

        return $this;
    }

    /**
     * Get codAnagPagOp
     *
     * @return string
     */
    public function getCodAnagPagOp()
    {
        return $this->codAnagPagOp;
    }

    /**
     * Set desAnagPagOp
     *
     * @param string $desAnagPagOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesAnagPagOp($desAnagPagOp)
    {
        $this->desAnagPagOp = $desAnagPagOp;

        return $this;
    }

    /**
     * Get desAnagPagOp
     *
     * @return string
     */
    public function getDesAnagPagOp()
    {
        return $this->desAnagPagOp;
    }

    /**
     * Set codTipoVet
     *
     * @param string $codTipoVet
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodTipoVet($codTipoVet)
    {
        $this->codTipoVet = $codTipoVet;

        return $this;
    }

    /**
     * Get codTipoVet
     *
     * @return string
     */
    public function getCodTipoVet()
    {
        return $this->codTipoVet;
    }

    /**
     * Set desTipoVettore
     *
     * @param string $desTipoVettore
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesTipoVettore($desTipoVettore)
    {
        $this->desTipoVettore = $desTipoVettore;

        return $this;
    }

    /**
     * Get desTipoVettore
     *
     * @return string
     */
    public function getDesTipoVettore()
    {
        return $this->desTipoVettore;
    }

    /**
     * Set cmp
     *
     * @param string $cmp
     *
     * @return BackofficeFornitoriImport
     */
    public function setCmp($cmp)
    {
        $this->cmp = $cmp;

        return $this;
    }

    /**
     * Get cmp
     *
     * @return string
     */
    public function getCmp()
    {
        return $this->cmp;
    }

    /**
     * Set cmpNum
     *
     * @param string $cmpNum
     *
     * @return BackofficeFornitoriImport
     */
    public function setCmpNum($cmpNum)
    {
        $this->cmpNum = $cmpNum;

        return $this;
    }

    /**
     * Get cmpNum
     *
     * @return string
     */
    public function getCmpNum()
    {
        return $this->cmpNum;
    }

    /**
     * Set assocBsp
     *
     * @param string $assocBsp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAssocBsp($assocBsp)
    {
        $this->assocBsp = $assocBsp;

        return $this;
    }

    /**
     * Get assocBsp
     *
     * @return string
     */
    public function getAssocBsp()
    {
        return $this->assocBsp;
    }

    /**
     * Set numeroCard
     *
     * @param string $numeroCard
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumeroCard($numeroCard)
    {
        $this->numeroCard = $numeroCard;

        return $this;
    }

    /**
     * Get numeroCard
     *
     * @return string
     */
    public function getNumeroCard()
    {
        return $this->numeroCard;
    }

    /**
     * Set inviaCat
     *
     * @param string $inviaCat
     *
     * @return BackofficeFornitoriImport
     */
    public function setInviaCat($inviaCat)
    {
        $this->inviaCat = $inviaCat;

        return $this;
    }

    /**
     * Get inviaCat
     *
     * @return string
     */
    public function getInviaCat()
    {
        return $this->inviaCat;
    }

    /**
     * Set dataTess
     *
     * @param \DateTime $dataTess
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataTess($dataTess)
    {
        $this->dataTess = $dataTess;

        return $this;
    }

    /**
     * Get dataTess
     *
     * @return \DateTime
     */
    public function getDataTess()
    {
        return $this->dataTess;
    }

    /**
     * Set numTessera
     *
     * @param string $numTessera
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumTessera($numTessera)
    {
        $this->numTessera = $numTessera;

        return $this;
    }

    /**
     * Get numTessera
     *
     * @return string
     */
    public function getNumTessera()
    {
        return $this->numTessera;
    }

    /**
     * Set scadTessera
     *
     * @param string $scadTessera
     *
     * @return BackofficeFornitoriImport
     */
    public function setScadTessera($scadTessera)
    {
        $this->scadTessera = $scadTessera;

        return $this;
    }

    /**
     * Get scadTessera
     *
     * @return string
     */
    public function getScadTessera()
    {
        return $this->scadTessera;
    }

    /**
     * Set codTrib1
     *
     * @param string $codTrib1
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodTrib1($codTrib1)
    {
        $this->codTrib1 = $codTrib1;

        return $this;
    }

    /**
     * Get codTrib1
     *
     * @return string
     */
    public function getCodTrib1()
    {
        return $this->codTrib1;
    }

    /**
     * Set codTrib2
     *
     * @param string $codTrib2
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodTrib2($codTrib2)
    {
        $this->codTrib2 = $codTrib2;

        return $this;
    }

    /**
     * Get codTrib2
     *
     * @return string
     */
    public function getCodTrib2()
    {
        return $this->codTrib2;
    }

    /**
     * Set codTrib3
     *
     * @param string $codTrib3
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodTrib3($codTrib3)
    {
        $this->codTrib3 = $codTrib3;

        return $this;
    }

    /**
     * Get codTrib3
     *
     * @return string
     */
    public function getCodTrib3()
    {
        return $this->codTrib3;
    }

    /**
     * Set codTrib4
     *
     * @param string $codTrib4
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodTrib4($codTrib4)
    {
        $this->codTrib4 = $codTrib4;

        return $this;
    }

    /**
     * Get codTrib4
     *
     * @return string
     */
    public function getCodTrib4()
    {
        return $this->codTrib4;
    }

    /**
     * Set codTrib5
     *
     * @param string $codTrib5
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodTrib5($codTrib5)
    {
        $this->codTrib5 = $codTrib5;

        return $this;
    }

    /**
     * Get codTrib5
     *
     * @return string
     */
    public function getCodTrib5()
    {
        return $this->codTrib5;
    }

    /**
     * Set codPagPratCl
     *
     * @param string $codPagPratCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodPagPratCl($codPagPratCl)
    {
        $this->codPagPratCl = $codPagPratCl;

        return $this;
    }

    /**
     * Get codPagPratCl
     *
     * @return string
     */
    public function getCodPagPratCl()
    {
        return $this->codPagPratCl;
    }

    /**
     * Set desPagPratCl
     *
     * @param string $desPagPratCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesPagPratCl($desPagPratCl)
    {
        $this->desPagPratCl = $desPagPratCl;

        return $this;
    }

    /**
     * Get desPagPratCl
     *
     * @return string
     */
    public function getDesPagPratCl()
    {
        return $this->desPagPratCl;
    }

    /**
     * Set codPagPratOp
     *
     * @param string $codPagPratOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodPagPratOp($codPagPratOp)
    {
        $this->codPagPratOp = $codPagPratOp;

        return $this;
    }

    /**
     * Get codPagPratOp
     *
     * @return string
     */
    public function getCodPagPratOp()
    {
        return $this->codPagPratOp;
    }

    /**
     * Set desPagPratOp
     *
     * @param string $desPagPratOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesPagPratOp($desPagPratOp)
    {
        $this->desPagPratOp = $desPagPratOp;

        return $this;
    }

    /**
     * Get desPagPratOp
     *
     * @return string
     */
    public function getDesPagPratOp()
    {
        return $this->desPagPratOp;
    }

    /**
     * Set codPagFattCl
     *
     * @param string $codPagFattCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodPagFattCl($codPagFattCl)
    {
        $this->codPagFattCl = $codPagFattCl;

        return $this;
    }

    /**
     * Get codPagFattCl
     *
     * @return string
     */
    public function getCodPagFattCl()
    {
        return $this->codPagFattCl;
    }

    /**
     * Set desPagFattCl
     *
     * @param string $desPagFattCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesPagFattCl($desPagFattCl)
    {
        $this->desPagFattCl = $desPagFattCl;

        return $this;
    }

    /**
     * Get desPagFattCl
     *
     * @return string
     */
    public function getDesPagFattCl()
    {
        return $this->desPagFattCl;
    }

    /**
     * Set codPagFattOp
     *
     * @param string $codPagFattOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodPagFattOp($codPagFattOp)
    {
        $this->codPagFattOp = $codPagFattOp;

        return $this;
    }

    /**
     * Get codPagFattOp
     *
     * @return string
     */
    public function getCodPagFattOp()
    {
        return $this->codPagFattOp;
    }

    /**
     * Set desPagFattOp
     *
     * @param string $desPagFattOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesPagFattOp($desPagFattOp)
    {
        $this->desPagFattOp = $desPagFattOp;

        return $this;
    }

    /**
     * Get desPagFattOp
     *
     * @return string
     */
    public function getDesPagFattOp()
    {
        return $this->desPagFattOp;
    }

    /**
     * Set bancaAppoggio
     *
     * @param string $bancaAppoggio
     *
     * @return BackofficeFornitoriImport
     */
    public function setBancaAppoggio($bancaAppoggio)
    {
        $this->bancaAppoggio = $bancaAppoggio;

        return $this;
    }

    /**
     * Get bancaAppoggio
     *
     * @return string
     */
    public function getBancaAppoggio()
    {
        return $this->bancaAppoggio;
    }

    /**
     * Set filialeBn
     *
     * @param string $filialeBn
     *
     * @return BackofficeFornitoriImport
     */
    public function setFilialeBn($filialeBn)
    {
        $this->filialeBn = $filialeBn;

        return $this;
    }

    /**
     * Get filialeBn
     *
     * @return string
     */
    public function getFilialeBn()
    {
        return $this->filialeBn;
    }

    /**
     * Set localitaBn
     *
     * @param string $localitaBn
     *
     * @return BackofficeFornitoriImport
     */
    public function setLocalitaBn($localitaBn)
    {
        $this->localitaBn = $localitaBn;

        return $this;
    }

    /**
     * Get localitaBn
     *
     * @return string
     */
    public function getLocalitaBn()
    {
        return $this->localitaBn;
    }

    /**
     * Set provBn
     *
     * @param string $provBn
     *
     * @return BackofficeFornitoriImport
     */
    public function setProvBn($provBn)
    {
        $this->provBn = $provBn;

        return $this;
    }

    /**
     * Get provBn
     *
     * @return string
     */
    public function getProvBn()
    {
        return $this->provBn;
    }

    /**
     * Set capBn
     *
     * @param string $capBn
     *
     * @return BackofficeFornitoriImport
     */
    public function setCapBn($capBn)
    {
        $this->capBn = $capBn;

        return $this;
    }

    /**
     * Get capBn
     *
     * @return string
     */
    public function getCapBn()
    {
        return $this->capBn;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return BackofficeFornitoriImport
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set bban
     *
     * @param string $bban
     *
     * @return BackofficeFornitoriImport
     */
    public function setBban($bban)
    {
        $this->bban = $bban;

        return $this;
    }

    /**
     * Get bban
     *
     * @return string
     */
    public function getBban()
    {
        return $this->bban;
    }

    /**
     * Set swift
     *
     * @param string $swift
     *
     * @return BackofficeFornitoriImport
     */
    public function setSwift($swift)
    {
        $this->swift = $swift;

        return $this;
    }

    /**
     * Get swift
     *
     * @return string
     */
    public function getSwift()
    {
        return $this->swift;
    }

    /**
     * Set valutaImporti
     *
     * @param string $valutaImporti
     *
     * @return BackofficeFornitoriImport
     */
    public function setValutaImporti($valutaImporti)
    {
        $this->valutaImporti = $valutaImporti;

        return $this;
    }

    /**
     * Get valutaImporti
     *
     * @return string
     */
    public function getValutaImporti()
    {
        return $this->valutaImporti;
    }

    /**
     * Set fidoCl
     *
     * @param string $fidoCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setFidoCl($fidoCl)
    {
        $this->fidoCl = $fidoCl;

        return $this;
    }

    /**
     * Get fidoCl
     *
     * @return string
     */
    public function getFidoCl()
    {
        return $this->fidoCl;
    }

    /**
     * Set insolutiCl
     *
     * @param string $insolutiCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setInsolutiCl($insolutiCl)
    {
        $this->insolutiCl = $insolutiCl;

        return $this;
    }

    /**
     * Get insolutiCl
     *
     * @return string
     */
    public function getInsolutiCl()
    {
        return $this->insolutiCl;
    }

    /**
     * Set tipoDoc
     *
     * @param string $tipoDoc
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get tipoDoc
     *
     * @return string
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set numDoc
     *
     * @param string $numDoc
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumDoc($numDoc)
    {
        $this->numDoc = $numDoc;

        return $this;
    }

    /**
     * Get numDoc
     *
     * @return string
     */
    public function getNumDoc()
    {
        return $this->numDoc;
    }

    /**
     * Set dataEmisDoc
     *
     * @param \DateTime $dataEmisDoc
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataEmisDoc($dataEmisDoc)
    {
        $this->dataEmisDoc = $dataEmisDoc;

        return $this;
    }

    /**
     * Get dataEmisDoc
     *
     * @return \DateTime
     */
    public function getDataEmisDoc()
    {
        return $this->dataEmisDoc;
    }

    /**
     * Set luogoEmisDoc
     *
     * @param string $luogoEmisDoc
     *
     * @return BackofficeFornitoriImport
     */
    public function setLuogoEmisDoc($luogoEmisDoc)
    {
        $this->luogoEmisDoc = $luogoEmisDoc;

        return $this;
    }

    /**
     * Get luogoEmisDoc
     *
     * @return string
     */
    public function getLuogoEmisDoc()
    {
        return $this->luogoEmisDoc;
    }

    /**
     * Set provvEmisDoc
     *
     * @param string $provvEmisDoc
     *
     * @return BackofficeFornitoriImport
     */
    public function setProvvEmisDoc($provvEmisDoc)
    {
        $this->provvEmisDoc = $provvEmisDoc;

        return $this;
    }

    /**
     * Get provvEmisDoc
     *
     * @return string
     */
    public function getProvvEmisDoc()
    {
        return $this->provvEmisDoc;
    }

    /**
     * Set scadDoc
     *
     * @param string $scadDoc
     *
     * @return BackofficeFornitoriImport
     */
    public function setScadDoc($scadDoc)
    {
        $this->scadDoc = $scadDoc;

        return $this;
    }

    /**
     * Get scadDoc
     *
     * @return string
     */
    public function getScadDoc()
    {
        return $this->scadDoc;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     *
     * @return BackofficeFornitoriImport
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

    /**
     * Set tipologiaC/cCl
     *
     * @param string $tipologiaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipologiaC/cCl($tipologiaC/cCl)
    {
        $this->tipologiaC/cCl = $tipologiaC/cCl;

        return $this;
    }

    /**
     * Get tipologiaC/cCl
     *
     * @return string
     */
    public function getTipologiaC/cCl()
    {
        return $this->tipologiaC/cCl;
    }

    /**
     * Set numeroC/cCl
     *
     * @param string $numeroC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumeroC/cCl($numeroC/cCl)
    {
        $this->numeroC/cCl = $numeroC/cCl;

        return $this;
    }

    /**
     * Get numeroC/cCl
     *
     * @return string
     */
    public function getNumeroC/cCl()
    {
        return $this->numeroC/cCl;
    }

    /**
     * Set dataScadenzaC/cCl
     *
     * @param \DateTime $dataScadenzaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataScadenzaC/cCl($dataScadenzaC/cCl)
    {
        $this->dataScadenzaC/cCl = $dataScadenzaC/cCl;

        return $this;
    }

    /**
     * Get dataScadenzaC/cCl
     *
     * @return \DateTime
     */
    public function getDataScadenzaC/cCl()
    {
        return $this->dataScadenzaC/cCl;
    }

    /**
     * Set tipoUtilizzoC/cCl
     *
     * @param string $tipoUtilizzoC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoUtilizzoC/cCl($tipoUtilizzoC/cCl)
    {
        $this->tipoUtilizzoC/cCl = $tipoUtilizzoC/cCl;

        return $this;
    }

    /**
     * Get tipoUtilizzoC/cCl
     *
     * @return string
     */
    public function getTipoUtilizzoC/cCl()
    {
        return $this->tipoUtilizzoC/cCl;
    }

    /**
     * Set desLinguaPerStampe
     *
     * @param string $desLinguaPerStampe
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesLinguaPerStampe($desLinguaPerStampe)
    {
        $this->desLinguaPerStampe = $desLinguaPerStampe;

        return $this;
    }

    /**
     * Get desLinguaPerStampe
     *
     * @return string
     */
    public function getDesLinguaPerStampe()
    {
        return $this->desLinguaPerStampe;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return BackofficeFornitoriImport
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set listinoPrz
     *
     * @param string $listinoPrz
     *
     * @return BackofficeFornitoriImport
     */
    public function setListinoPrz($listinoPrz)
    {
        $this->listinoPrz = $listinoPrz;

        return $this;
    }

    /**
     * Get listinoPrz
     *
     * @return string
     */
    public function getListinoPrz()
    {
        return $this->listinoPrz;
    }

    /**
     * Set listinoCst
     *
     * @param string $listinoCst
     *
     * @return BackofficeFornitoriImport
     */
    public function setListinoCst($listinoCst)
    {
        $this->listinoCst = $listinoCst;

        return $this;
    }

    /**
     * Get listinoCst
     *
     * @return string
     */
    public function getListinoCst()
    {
        return $this->listinoCst;
    }

    /**
     * Set listinoProvvPass
     *
     * @param string $listinoProvvPass
     *
     * @return BackofficeFornitoriImport
     */
    public function setListinoProvvPass($listinoProvvPass)
    {
        $this->listinoProvvPass = $listinoProvvPass;

        return $this;
    }

    /**
     * Get listinoProvvPass
     *
     * @return string
     */
    public function getListinoProvvPass()
    {
        return $this->listinoProvvPass;
    }

    /**
     * Set listinoProvvAtt
     *
     * @param string $listinoProvvAtt
     *
     * @return BackofficeFornitoriImport
     */
    public function setListinoProvvAtt($listinoProvvAtt)
    {
        $this->listinoProvvAtt = $listinoProvvAtt;

        return $this;
    }

    /**
     * Get listinoProvvAtt
     *
     * @return string
     */
    public function getListinoProvvAtt()
    {
        return $this->listinoProvvAtt;
    }

    /**
     * Set codFatCl
     *
     * @param string $codFatCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodFatCl($codFatCl)
    {
        $this->codFatCl = $codFatCl;

        return $this;
    }

    /**
     * Get codFatCl
     *
     * @return string
     */
    public function getCodFatCl()
    {
        return $this->codFatCl;
    }

    /**
     * Set desFatCl
     *
     * @param string $desFatCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesFatCl($desFatCl)
    {
        $this->desFatCl = $desFatCl;

        return $this;
    }

    /**
     * Get desFatCl
     *
     * @return string
     */
    public function getDesFatCl()
    {
        return $this->desFatCl;
    }

    /**
     * Set codCollettoreCl
     *
     * @param string $codCollettoreCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodCollettoreCl($codCollettoreCl)
    {
        $this->codCollettoreCl = $codCollettoreCl;

        return $this;
    }

    /**
     * Get codCollettoreCl
     *
     * @return string
     */
    public function getCodCollettoreCl()
    {
        return $this->codCollettoreCl;
    }

    /**
     * Set desCollettoreCl
     *
     * @param string $desCollettoreCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesCollettoreCl($desCollettoreCl)
    {
        $this->desCollettoreCl = $desCollettoreCl;

        return $this;
    }

    /**
     * Get desCollettoreCl
     *
     * @return string
     */
    public function getDesCollettoreCl()
    {
        return $this->desCollettoreCl;
    }

    /**
     * Set codPromotoreCl
     *
     * @param string $codPromotoreCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodPromotoreCl($codPromotoreCl)
    {
        $this->codPromotoreCl = $codPromotoreCl;

        return $this;
    }

    /**
     * Get codPromotoreCl
     *
     * @return string
     */
    public function getCodPromotoreCl()
    {
        return $this->codPromotoreCl;
    }

    /**
     * Set desPromotoreCl
     *
     * @param string $desPromotoreCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesPromotoreCl($desPromotoreCl)
    {
        $this->desPromotoreCl = $desPromotoreCl;

        return $this;
    }

    /**
     * Get desPromotoreCl
     *
     * @return string
     */
    public function getDesPromotoreCl()
    {
        return $this->desPromotoreCl;
    }

    /**
     * Set codVoucherOp
     *
     * @param string $codVoucherOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodVoucherOp($codVoucherOp)
    {
        $this->codVoucherOp = $codVoucherOp;

        return $this;
    }

    /**
     * Get codVoucherOp
     *
     * @return string
     */
    public function getCodVoucherOp()
    {
        return $this->codVoucherOp;
    }

    /**
     * Set desVoucherOp
     *
     * @param string $desVoucherOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesVoucherOp($desVoucherOp)
    {
        $this->desVoucherOp = $desVoucherOp;

        return $this;
    }

    /**
     * Get desVoucherOp
     *
     * @return string
     */
    public function getDesVoucherOp()
    {
        return $this->desVoucherOp;
    }

    /**
     * Set codOperatore
     *
     * @param string $codOperatore
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodOperatore($codOperatore)
    {
        $this->codOperatore = $codOperatore;

        return $this;
    }

    /**
     * Get codOperatore
     *
     * @return string
     */
    public function getCodOperatore()
    {
        return $this->codOperatore;
    }

    /**
     * Set desOperatore
     *
     * @param string $desOperatore
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesOperatore($desOperatore)
    {
        $this->desOperatore = $desOperatore;

        return $this;
    }

    /**
     * Get desOperatore
     *
     * @return string
     */
    public function getDesOperatore()
    {
        return $this->desOperatore;
    }

    /**
     * Set codFatOp
     *
     * @param string $codFatOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodFatOp($codFatOp)
    {
        $this->codFatOp = $codFatOp;

        return $this;
    }

    /**
     * Get codFatOp
     *
     * @return string
     */
    public function getCodFatOp()
    {
        return $this->codFatOp;
    }

    /**
     * Set desFattOp
     *
     * @param string $desFattOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesFattOp($desFattOp)
    {
        $this->desFattOp = $desFattOp;

        return $this;
    }

    /**
     * Get desFattOp
     *
     * @return string
     */
    public function getDesFattOp()
    {
        return $this->desFattOp;
    }

    /**
     * Set valOperaz
     *
     * @param string $valOperaz
     *
     * @return BackofficeFornitoriImport
     */
    public function setValOperaz($valOperaz)
    {
        $this->valOperaz = $valOperaz;

        return $this;
    }

    /**
     * Get valOperaz
     *
     * @return string
     */
    public function getValOperaz()
    {
        return $this->valOperaz;
    }

    /**
     * Set tipoRiscossione
     *
     * @param string $tipoRiscossione
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoRiscossione($tipoRiscossione)
    {
        $this->tipoRiscossione = $tipoRiscossione;

        return $this;
    }

    /**
     * Get tipoRiscossione
     *
     * @return string
     */
    public function getTipoRiscossione()
    {
        return $this->tipoRiscossione;
    }

    /**
     * Set desTipoRisc
     *
     * @param string $desTipoRisc
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesTipoRisc($desTipoRisc)
    {
        $this->desTipoRisc = $desTipoRisc;

        return $this;
    }

    /**
     * Get desTipoRisc
     *
     * @return string
     */
    public function getDesTipoRisc()
    {
        return $this->desTipoRisc;
    }

    /**
     * Set mezzoRisc
     *
     * @param string $mezzoRisc
     *
     * @return BackofficeFornitoriImport
     */
    public function setMezzoRisc($mezzoRisc)
    {
        $this->mezzoRisc = $mezzoRisc;

        return $this;
    }

    /**
     * Get mezzoRisc
     *
     * @return string
     */
    public function getMezzoRisc()
    {
        return $this->mezzoRisc;
    }

    /**
     * Set tipoPagamento
     *
     * @param string $tipoPagamento
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    /**
     * Get tipoPagamento
     *
     * @return string
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set desTipoPag
     *
     * @param string $desTipoPag
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesTipoPag($desTipoPag)
    {
        $this->desTipoPag = $desTipoPag;

        return $this;
    }

    /**
     * Get desTipoPag
     *
     * @return string
     */
    public function getDesTipoPag()
    {
        return $this->desTipoPag;
    }

    /**
     * Set mezzoPag
     *
     * @param string $mezzoPag
     *
     * @return BackofficeFornitoriImport
     */
    public function setMezzoPag($mezzoPag)
    {
        $this->mezzoPag = $mezzoPag;

        return $this;
    }

    /**
     * Get mezzoPag
     *
     * @return string
     */
    public function getMezzoPag()
    {
        return $this->mezzoPag;
    }

    /**
     * Set banca/altroOpeFin
     *
     * @param string $banca/altroOpeFin
     *
     * @return BackofficeFornitoriImport
     */
    public function setBanca/altroOpeFin($banca/altroOpeFin)
    {
        $this->banca/altroOpeFin = $banca/altroOpeFin;

        return $this;
    }

    /**
     * Get banca/altroOpeFin
     *
     * @return string
     */
    public function getBanca/altroOpeFin()
    {
        return $this->banca/altroOpeFin;
    }

    /**
     * Set rifP/conti
     *
     * @param string $rifP/conti
     *
     * @return BackofficeFornitoriImport
     */
    public function setRifP/conti($rifP/conti)
    {
        $this->rifP/conti = $rifP/conti;

        return $this;
    }

    /**
     * Get rifP/conti
     *
     * @return string
     */
    public function getRifP/conti()
    {
        return $this->rifP/conti;
    }

    /**
     * Set fileGener.riscossioni
     *
     * @param string $fileGener.riscossioni
     *
     * @return BackofficeFornitoriImport
     */
    public function setFileGener.riscossioni($fileGener.riscossioni)
    {
        $this->fileGener.riscossioni = $fileGener.riscossioni;

        return $this;
    }

    /**
     * Get fileGener.riscossioni
     *
     * @return string
     */
    public function getFileGener.riscossioni()
    {
        return $this->fileGener.riscossioni;
    }

    /**
     * Set codOperAltern
     *
     * @param string $codOperAltern
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodOperAltern($codOperAltern)
    {
        $this->codOperAltern = $codOperAltern;

        return $this;
    }

    /**
     * Get codOperAltern
     *
     * @return string
     */
    public function getCodOperAltern()
    {
        return $this->codOperAltern;
    }

    /**
     * Set seFuoriTempo
     *
     * @param string $seFuoriTempo
     *
     * @return BackofficeFornitoriImport
     */
    public function setSeFuoriTempo($seFuoriTempo)
    {
        $this->seFuoriTempo = $seFuoriTempo;

        return $this;
    }

    /**
     * Get seFuoriTempo
     *
     * @return string
     */
    public function getSeFuoriTempo()
    {
        return $this->seFuoriTempo;
    }

    /**
     * Set codFiliale
     *
     * @param string $codFiliale
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodFiliale($codFiliale)
    {
        $this->codFiliale = $codFiliale;

        return $this;
    }

    /**
     * Get codFiliale
     *
     * @return string
     */
    public function getCodFiliale()
    {
        return $this->codFiliale;
    }

    /**
     * Set desFiliale
     *
     * @param string $desFiliale
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesFiliale($desFiliale)
    {
        $this->desFiliale = $desFiliale;

        return $this;
    }

    /**
     * Get desFiliale
     *
     * @return string
     */
    public function getDesFiliale()
    {
        return $this->desFiliale;
    }

    /**
     * Set sequenzaCl
     *
     * @param string $sequenzaCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setSequenzaCl($sequenzaCl)
    {
        $this->sequenzaCl = $sequenzaCl;

        return $this;
    }

    /**
     * Get sequenzaCl
     *
     * @return string
     */
    public function getSequenzaCl()
    {
        return $this->sequenzaCl;
    }

    /**
     * Set sequenzaOp
     *
     * @param string $sequenzaOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setSequenzaOp($sequenzaOp)
    {
        $this->sequenzaOp = $sequenzaOp;

        return $this;
    }

    /**
     * Get sequenzaOp
     *
     * @return string
     */
    public function getSequenzaOp()
    {
        return $this->sequenzaOp;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return BackofficeFornitoriImport
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set flagBlacklist
     *
     * @param string $flagBlacklist
     *
     * @return BackofficeFornitoriImport
     */
    public function setFlagBlacklist($flagBlacklist)
    {
        $this->flagBlacklist = $flagBlacklist;

        return $this;
    }

    /**
     * Get flagBlacklist
     *
     * @return string
     */
    public function getFlagBlacklist()
    {
        return $this->flagBlacklist;
    }

    /**
     * Set pcontiCM
     *
     * @param string $pcontiCM
     *
     * @return BackofficeFornitoriImport
     */
    public function setPcontiCM($pcontiCM)
    {
        $this->pcontiCM = $pcontiCM;

        return $this;
    }

    /**
     * Get pcontiCM
     *
     * @return string
     */
    public function getPcontiCM()
    {
        return $this->pcontiCM;
    }

    /**
     * Set pcontiCC
     *
     * @param string $pcontiCC
     *
     * @return BackofficeFornitoriImport
     */
    public function setPcontiCC($pcontiCC)
    {
        $this->pcontiCC = $pcontiCC;

        return $this;
    }

    /**
     * Get pcontiCC
     *
     * @return string
     */
    public function getPcontiCC()
    {
        return $this->pcontiCC;
    }

    /**
     * Set pcontiFM
     *
     * @param string $pcontiFM
     *
     * @return BackofficeFornitoriImport
     */
    public function setPcontiFM($pcontiFM)
    {
        $this->pcontiFM = $pcontiFM;

        return $this;
    }

    /**
     * Get pcontiFM
     *
     * @return string
     */
    public function getPcontiFM()
    {
        return $this->pcontiFM;
    }

    /**
     * Set pcontiFC
     *
     * @param string $pcontiFC
     *
     * @return BackofficeFornitoriImport
     */
    public function setPcontiFC($pcontiFC)
    {
        $this->pcontiFC = $pcontiFC;

        return $this;
    }

    /**
     * Get pcontiFC
     *
     * @return string
     */
    public function getPcontiFC()
    {
        return $this->pcontiFC;
    }

    /**
     * Set accettaC/cAirplusOp
     *
     * @param string $accettaC/cAirplusOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAirplusOp($accettaC/cAirplusOp)
    {
        $this->accettaC/cAirplusOp = $accettaC/cAirplusOp;

        return $this;
    }

    /**
     * Get accettaC/cAirplusOp
     *
     * @return string
     */
    public function getAccettaC/cAirplusOp()
    {
        return $this->accettaC/cAirplusOp;
    }

    /**
     * Set accettaC/cAmericanExpressOp
     *
     * @param string $accettaC/cAmericanExpressOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAmericanExpressOp($accettaC/cAmericanExpressOp)
    {
        $this->accettaC/cAmericanExpressOp = $accettaC/cAmericanExpressOp;

        return $this;
    }

    /**
     * Get accettaC/cAmericanExpressOp
     *
     * @return string
     */
    public function getAccettaC/cAmericanExpressOp()
    {
        return $this->accettaC/cAmericanExpressOp;
    }

    /**
     * Set accettaC/cDinersClubOp
     *
     * @param string $accettaC/cDinersClubOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cDinersClubOp($accettaC/cDinersClubOp)
    {
        $this->accettaC/cDinersClubOp = $accettaC/cDinersClubOp;

        return $this;
    }

    /**
     * Get accettaC/cDinersClubOp
     *
     * @return string
     */
    public function getAccettaC/cDinersClubOp()
    {
        return $this->accettaC/cDinersClubOp;
    }

    /**
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataCreazione($dataCreazione)
    {
        $this->dataCreazione = $dataCreazione;

        return $this;
    }

    /**
     * Get dataCreazione
     *
     * @return \DateTime
     */
    public function getDataCreazione()
    {
        return $this->dataCreazione;
    }

    /**
     * Set dataUltimaModifica
     *
     * @param \DateTime $dataUltimaModifica
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataUltimaModifica($dataUltimaModifica)
    {
        $this->dataUltimaModifica = $dataUltimaModifica;

        return $this;
    }

    /**
     * Get dataUltimaModifica
     *
     * @return \DateTime
     */
    public function getDataUltimaModifica()
    {
        return $this->dataUltimaModifica;
    }

    /**
     * Get codRecord
     *
     * @return integer
     */
    public function getCodRecord()
    {
        return $this->codRecord;
    }
    /**
     * @var string
     */
    private $citta' = '';

    /**
     * @var string
     */
    private $prov = '';

    /**
     * @var string
     */
    private $codStatoEstero = '';

    /**
     * @var string
     */
    private $desStatoEstero = '';

    /**
     * @var string
     */
    private $nazBlacklist = '';

    /**
     * @var string
     */
    private $codZona = '';

    /**
     * @var string
     */
    private $desZona = '';

    /**
     * @var string
     */
    private $codCategoria = '';

    /**
     * @var string
     */
    private $desCategoria = '';

    /**
     * @var string
     */
    private $codAttivita' = '';

    /**
     * @var string
     */
    private $desAttivita' = '';

    /**
     * @var string
     */
    private $gruppo = '';

    /**
     * @var string
     */
    private $desGruppo = '';

    /**
     * @var string
     */
    private $prefisso = '';

    /**
     * @var string
     */
    private $telefono1 = '';

    /**
     * @var string
     */
    private $telefono2 = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $telex = '';

    /**
     * @var \DateTime
     */
    private $dataUltimoContatto;

    /**
     * @var string
     */
    private $partitaIva = '';

    /**
     * @var string
     */
    private $codFiscale = '';

    /**
     * @var string
     */
    private $sesso = '';

    /**
     * @var string
     */
    private $luogoNascita = '';

    /**
     * @var string
     */
    private $provNascita = '';

    /**
     * @var \DateTime
     */
    private $dataNascita;

    /**
     * @var string
     */
    private $spedizione = '';

    /**
     * @var string
     */
    private $esclusioneStampaReg = '';

    /**
     * @var string
     */
    private $esclusionePosta = '';

    /**
     * @var string
     */
    private $accettazionePrivacy = '';

    /**
     * @var string
     */
    private $urlInternet = '';

    /**
     * @var string
     */
    private $eMailInternet = '';

    /**
     * @var string
     */
    private $codCatScontiCl = '';

    /**
     * @var string
     */
    private $desCatScontiCl = '';

    /**
     * @var string
     */
    private $codCatScontiOp = '';

    /**
     * @var string
     */
    private $desCatScontiOp = '';

    /**
     * @var string
     */
    private $codAnagPagOp = '';

    /**
     * @var string
     */
    private $desAnagPagOp = '';

    /**
     * @var string
     */
    private $codTipoVet;

    /**
     * @var string
     */
    private $desTipoVettore;

    /**
     * @var string
     */
    private $cmp;

    /**
     * @var string
     */
    private $cmpNum;

    /**
     * @var string
     */
    private $assocBsp;

    /**
     * @var string
     */
    private $numeroCard;

    /**
     * @var string
     */
    private $inviaCat;

    /**
     * @var \DateTime
     */
    private $dataTess;

    /**
     * @var string
     */
    private $numTessera;

    /**
     * @var string
     */
    private $scadTessera = '';

    /**
     * @var string
     */
    private $codTrib1 = '';

    /**
     * @var string
     */
    private $codTrib2 = '';

    /**
     * @var string
     */
    private $codTrib3 = '';

    /**
     * @var string
     */
    private $codTrib4 = '';

    /**
     * @var string
     */
    private $codTrib5 = '';

    /**
     * @var string
     */
    private $codPagPratCl = '';

    /**
     * @var string
     */
    private $desPagPratCl = '';

    /**
     * @var string
     */
    private $codPagPratOp = '';

    /**
     * @var string
     */
    private $desPagPratOp = '';

    /**
     * @var string
     */
    private $codPagFattCl = '';

    /**
     * @var string
     */
    private $desPagFattCl = '';

    /**
     * @var string
     */
    private $codPagFattOp = '';

    /**
     * @var string
     */
    private $desPagFattOp = '';

    /**
     * @var string
     */
    private $bancaAppoggio = '';

    /**
     * @var string
     */
    private $filialeBn = '';

    /**
     * @var string
     */
    private $localitaBn = '';

    /**
     * @var string
     */
    private $provBn = '';

    /**
     * @var string
     */
    private $capBn = '';

    /**
     * @var string
     */
    private $iban = '';

    /**
     * @var string
     */
    private $bban = '';

    /**
     * @var string
     */
    private $swift = '';

    /**
     * @var string
     */
    private $valutaImporti = '';

    /**
     * @var string
     */
    private $fidoCl = '';

    /**
     * @var string
     */
    private $insolutiCl = '';

    /**
     * @var string
     */
    private $tipoDoc = '';

    /**
     * @var string
     */
    private $numDoc = '';

    /**
     * @var \DateTime
     */
    private $dataEmisDoc;

    /**
     * @var string
     */
    private $luogoEmisDoc = '';

    /**
     * @var string
     */
    private $provvEmisDoc = '';

    /**
     * @var string
     */
    private $scadDoc = '';

    /**
     * @var string
     */
    private $lingua = '';

    /**
     * @var string
     */
    private $tipologiaC/cCl = '';

    /**
     * @var string
     */
    private $numeroC/cCl = '';

    /**
     * @var \DateTime
     */
    private $dataScadenzaC/cCl;

    /**
     * @var string
     */
    private $tipoUtilizzoC/cCl = '';

    /**
     * @var string
     */
    private $desLinguaPerStampe = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var string
     */
    private $listinoPrz = '';

    /**
     * @var string
     */
    private $listinoCst = '';

    /**
     * @var string
     */
    private $listinoProvvPass = '';

    /**
     * @var string
     */
    private $listinoProvvAtt = '';

    /**
     * @var string
     */
    private $codFatCl = '';

    /**
     * @var string
     */
    private $desFatCl = '';

    /**
     * @var string
     */
    private $codCollettoreCl = '';

    /**
     * @var string
     */
    private $desCollettoreCl = '';

    /**
     * @var string
     */
    private $codPromotoreCl = '';

    /**
     * @var string
     */
    private $desPromotoreCl = '';

    /**
     * @var string
     */
    private $codVoucherOp = '';

    /**
     * @var string
     */
    private $desVoucherOp = '';

    /**
     * @var string
     */
    private $codOperatore = '';

    /**
     * @var string
     */
    private $desOperatore = '';

    /**
     * @var string
     */
    private $codFatOp = '';

    /**
     * @var string
     */
    private $desFattOp = '';

    /**
     * @var string
     */
    private $valOperaz = '';

    /**
     * @var string
     */
    private $tipoRiscossione = '';

    /**
     * @var string
     */
    private $desTipoRisc = '';

    /**
     * @var string
     */
    private $mezzoRisc = '';

    /**
     * @var string
     */
    private $tipoPagamento = '';

    /**
     * @var string
     */
    private $desTipoPag = '';

    /**
     * @var string
     */
    private $mezzoPag = '';

    /**
     * @var string
     */
    private $banca/altroOpeFin = '';

    /**
     * @var string
     */
    private $rifP/conti = '';

    /**
     * @var string
     */
    private $fileGener.riscossioni = '';

    /**
     * @var string
     */
    private $codOperAltern = '';

    /**
     * @var string
     */
    private $seFuoriTempo = '';

    /**
     * @var string
     */
    private $codFiliale = '';

    /**
     * @var string
     */
    private $desFiliale = '';

    /**
     * @var string
     */
    private $sequenzaCl = '';

    /**
     * @var string
     */
    private $sequenzaOp = '';

    /**
     * @var string
     */
    private $logo = '';

    /**
     * @var string
     */
    private $flagBlacklist = '';

    /**
     * @var string
     */
    private $pcontiCM = '';

    /**
     * @var string
     */
    private $pcontiCC = '';

    /**
     * @var string
     */
    private $pcontiFM = '';

    /**
     * @var string
     */
    private $pcontiFC = '';

    /**
     * @var string
     */
    private $accettaC/cAirplusOp = '';

    /**
     * @var string
     */
    private $accettaC/cAmericanExpressOp = '';

    /**
     * @var string
     */
    private $accettaC/cDinersClubOp = '';

    /**
     * @var \DateTime
     */
    private $dataCreazione;

    /**
     * @var \DateTime
     */
    private $dataUltimaModifica;

    /**
     * @var integer
     */
    private $codRecord;


    /**
     * Set cortesia
     *
     * @param string $cortesia
     *
     * @return BackofficeFornitoriImport
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;

        return $this;
    }

    /**
     * Get cortesia
     *
     * @return string
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }

    /**
     * Set ricerca
     *
     * @param string $ricerca
     *
     * @return BackofficeFornitoriImport
     */
    public function setRicerca($ricerca)
    {
        $this->ricerca = $ricerca;

        return $this;
    }

    /**
     * Get ricerca
     *
     * @return string
     */
    public function getRicerca()
    {
        return $this->ricerca;
    }

    /**
     * Set nominativo
     *
     * @param string $nominativo
     *
     * @return BackofficeFornitoriImport
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set estensione
     *
     * @param string $estensione
     *
     * @return BackofficeFornitoriImport
     */
    public function setEstensione($estensione)
    {
        $this->estensione = $estensione;

        return $this;
    }

    /**
     * Get estensione
     *
     * @return string
     */
    public function getEstensione()
    {
        return $this->estensione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return BackofficeFornitoriImport
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return BackofficeFornitoriImport
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta'
     *
     * @param string $citta'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCitta'($citta')
    {
        $this->citta' = $citta';

        return $this;
    }

    /**
     * Get citta'
     *
     * @return string
     */
    public function getCitta'()
    {
        return $this->citta';
    }

    /**
     * Set codAttivita'
     *
     * @param string $codAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodAttivita'($codAttivita')
    {
        $this->codAttivita' = $codAttivita';

        return $this;
    }

    /**
     * Get codAttivita'
     *
     * @return string
     */
    public function getCodAttivita'()
    {
        return $this->codAttivita';
    }

    /**
     * Set desAttivita'
     *
     * @param string $desAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesAttivita'($desAttivita')
    {
        $this->desAttivita' = $desAttivita';

        return $this;
    }

    /**
     * Get desAttivita'
     *
     * @return string
     */
    public function getDesAttivita'()
    {
        return $this->desAttivita';
    }

    /**
     * Set tipologiaC/cCl
     *
     * @param string $tipologiaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipologiaC/cCl($tipologiaC/cCl)
    {
        $this->tipologiaC/cCl = $tipologiaC/cCl;

        return $this;
    }

    /**
     * Get tipologiaC/cCl
     *
     * @return string
     */
    public function getTipologiaC/cCl()
    {
        return $this->tipologiaC/cCl;
    }

    /**
     * Set numeroC/cCl
     *
     * @param string $numeroC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumeroC/cCl($numeroC/cCl)
    {
        $this->numeroC/cCl = $numeroC/cCl;

        return $this;
    }

    /**
     * Get numeroC/cCl
     *
     * @return string
     */
    public function getNumeroC/cCl()
    {
        return $this->numeroC/cCl;
    }

    /**
     * Set dataScadenzaC/cCl
     *
     * @param \DateTime $dataScadenzaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataScadenzaC/cCl($dataScadenzaC/cCl)
    {
        $this->dataScadenzaC/cCl = $dataScadenzaC/cCl;

        return $this;
    }

    /**
     * Get dataScadenzaC/cCl
     *
     * @return \DateTime
     */
    public function getDataScadenzaC/cCl()
    {
        return $this->dataScadenzaC/cCl;
    }

    /**
     * Set tipoUtilizzoC/cCl
     *
     * @param string $tipoUtilizzoC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoUtilizzoC/cCl($tipoUtilizzoC/cCl)
    {
        $this->tipoUtilizzoC/cCl = $tipoUtilizzoC/cCl;

        return $this;
    }

    /**
     * Get tipoUtilizzoC/cCl
     *
     * @return string
     */
    public function getTipoUtilizzoC/cCl()
    {
        return $this->tipoUtilizzoC/cCl;
    }

    /**
     * Set banca/altroOpeFin
     *
     * @param string $banca/altroOpeFin
     *
     * @return BackofficeFornitoriImport
     */
    public function setBanca/altroOpeFin($banca/altroOpeFin)
    {
        $this->banca/altroOpeFin = $banca/altroOpeFin;

        return $this;
    }

    /**
     * Get banca/altroOpeFin
     *
     * @return string
     */
    public function getBanca/altroOpeFin()
    {
        return $this->banca/altroOpeFin;
    }

    /**
     * Set rifP/conti
     *
     * @param string $rifP/conti
     *
     * @return BackofficeFornitoriImport
     */
    public function setRifP/conti($rifP/conti)
    {
        $this->rifP/conti = $rifP/conti;

        return $this;
    }

    /**
     * Get rifP/conti
     *
     * @return string
     */
    public function getRifP/conti()
    {
        return $this->rifP/conti;
    }

    /**
     * Set fileGener.riscossioni
     *
     * @param string $fileGener.riscossioni
     *
     * @return BackofficeFornitoriImport
     */
    public function setFileGener.riscossioni($fileGener.riscossioni)
    {
        $this->fileGener.riscossioni = $fileGener.riscossioni;

        return $this;
    }

    /**
     * Get fileGener.riscossioni
     *
     * @return string
     */
    public function getFileGener.riscossioni()
    {
        return $this->fileGener.riscossioni;
    }

    /**
     * Set accettaC/cAirplusOp
     *
     * @param string $accettaC/cAirplusOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAirplusOp($accettaC/cAirplusOp)
    {
        $this->accettaC/cAirplusOp = $accettaC/cAirplusOp;

        return $this;
    }

    /**
     * Get accettaC/cAirplusOp
     *
     * @return string
     */
    public function getAccettaC/cAirplusOp()
    {
        return $this->accettaC/cAirplusOp;
    }

    /**
     * Set accettaC/cAmericanExpressOp
     *
     * @param string $accettaC/cAmericanExpressOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAmericanExpressOp($accettaC/cAmericanExpressOp)
    {
        $this->accettaC/cAmericanExpressOp = $accettaC/cAmericanExpressOp;

        return $this;
    }

    /**
     * Get accettaC/cAmericanExpressOp
     *
     * @return string
     */
    public function getAccettaC/cAmericanExpressOp()
    {
        return $this->accettaC/cAmericanExpressOp;
    }

    /**
     * Set accettaC/cDinersClubOp
     *
     * @param string $accettaC/cDinersClubOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cDinersClubOp($accettaC/cDinersClubOp)
    {
        $this->accettaC/cDinersClubOp = $accettaC/cDinersClubOp;

        return $this;
    }

    /**
     * Get accettaC/cDinersClubOp
     *
     * @return string
     */
    public function getAccettaC/cDinersClubOp()
    {
        return $this->accettaC/cDinersClubOp;
    }
    /**
     * @var string
     */
    private $citta' = '';

    /**
     * @var string
     */
    private $prov = '';

    /**
     * @var string
     */
    private $codStatoEstero = '';

    /**
     * @var string
     */
    private $desStatoEstero = '';

    /**
     * @var string
     */
    private $nazBlacklist = '';

    /**
     * @var string
     */
    private $codZona = '';

    /**
     * @var string
     */
    private $desZona = '';

    /**
     * @var string
     */
    private $codCategoria = '';

    /**
     * @var string
     */
    private $desCategoria = '';

    /**
     * @var string
     */
    private $codAttivita' = '';

    /**
     * @var string
     */
    private $desAttivita' = '';

    /**
     * @var string
     */
    private $gruppo = '';

    /**
     * @var string
     */
    private $desGruppo = '';

    /**
     * @var string
     */
    private $prefisso = '';

    /**
     * @var string
     */
    private $telefono1 = '';

    /**
     * @var string
     */
    private $telefono2 = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $telex = '';

    /**
     * @var \DateTime
     */
    private $dataUltimoContatto;

    /**
     * @var string
     */
    private $partitaIva = '';

    /**
     * @var string
     */
    private $codFiscale = '';

    /**
     * @var string
     */
    private $sesso = '';

    /**
     * @var string
     */
    private $luogoNascita = '';

    /**
     * @var string
     */
    private $provNascita = '';

    /**
     * @var \DateTime
     */
    private $dataNascita;

    /**
     * @var string
     */
    private $spedizione = '';

    /**
     * @var string
     */
    private $esclusioneStampaReg = '';

    /**
     * @var string
     */
    private $esclusionePosta = '';

    /**
     * @var string
     */
    private $accettazionePrivacy = '';

    /**
     * @var string
     */
    private $urlInternet = '';

    /**
     * @var string
     */
    private $eMailInternet = '';

    /**
     * @var string
     */
    private $codCatScontiCl = '';

    /**
     * @var string
     */
    private $desCatScontiCl = '';

    /**
     * @var string
     */
    private $codCatScontiOp = '';

    /**
     * @var string
     */
    private $desCatScontiOp = '';

    /**
     * @var string
     */
    private $codAnagPagOp = '';

    /**
     * @var string
     */
    private $desAnagPagOp = '';

    /**
     * @var string
     */
    private $codTipoVet;

    /**
     * @var string
     */
    private $desTipoVettore;

    /**
     * @var string
     */
    private $cmp;

    /**
     * @var string
     */
    private $cmpNum;

    /**
     * @var string
     */
    private $assocBsp;

    /**
     * @var string
     */
    private $numeroCard;

    /**
     * @var string
     */
    private $inviaCat;

    /**
     * @var \DateTime
     */
    private $dataTess;

    /**
     * @var string
     */
    private $numTessera;

    /**
     * @var string
     */
    private $scadTessera = '';

    /**
     * @var string
     */
    private $codTrib1 = '';

    /**
     * @var string
     */
    private $codTrib2 = '';

    /**
     * @var string
     */
    private $codTrib3 = '';

    /**
     * @var string
     */
    private $codTrib4 = '';

    /**
     * @var string
     */
    private $codTrib5 = '';

    /**
     * @var string
     */
    private $codPagPratCl = '';

    /**
     * @var string
     */
    private $desPagPratCl = '';

    /**
     * @var string
     */
    private $codPagPratOp = '';

    /**
     * @var string
     */
    private $desPagPratOp = '';

    /**
     * @var string
     */
    private $codPagFattCl = '';

    /**
     * @var string
     */
    private $desPagFattCl = '';

    /**
     * @var string
     */
    private $codPagFattOp = '';

    /**
     * @var string
     */
    private $desPagFattOp = '';

    /**
     * @var string
     */
    private $bancaAppoggio = '';

    /**
     * @var string
     */
    private $filialeBn = '';

    /**
     * @var string
     */
    private $localitaBn = '';

    /**
     * @var string
     */
    private $provBn = '';

    /**
     * @var string
     */
    private $capBn = '';

    /**
     * @var string
     */
    private $iban = '';

    /**
     * @var string
     */
    private $bban = '';

    /**
     * @var string
     */
    private $swift = '';

    /**
     * @var string
     */
    private $valutaImporti = '';

    /**
     * @var string
     */
    private $fidoCl = '';

    /**
     * @var string
     */
    private $insolutiCl = '';

    /**
     * @var string
     */
    private $tipoDoc = '';

    /**
     * @var string
     */
    private $numDoc = '';

    /**
     * @var \DateTime
     */
    private $dataEmisDoc;

    /**
     * @var string
     */
    private $luogoEmisDoc = '';

    /**
     * @var string
     */
    private $provvEmisDoc = '';

    /**
     * @var string
     */
    private $scadDoc = '';

    /**
     * @var string
     */
    private $lingua = '';

    /**
     * @var string
     */
    private $tipologiaC/cCl = '';

    /**
     * @var string
     */
    private $numeroC/cCl = '';

    /**
     * @var \DateTime
     */
    private $dataScadenzaC/cCl;

    /**
     * @var string
     */
    private $tipoUtilizzoC/cCl = '';

    /**
     * @var string
     */
    private $desLinguaPerStampe = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var string
     */
    private $listinoPrz = '';

    /**
     * @var string
     */
    private $listinoCst = '';

    /**
     * @var string
     */
    private $listinoProvvPass = '';

    /**
     * @var string
     */
    private $listinoProvvAtt = '';

    /**
     * @var string
     */
    private $codFatCl = '';

    /**
     * @var string
     */
    private $desFatCl = '';

    /**
     * @var string
     */
    private $codCollettoreCl = '';

    /**
     * @var string
     */
    private $desCollettoreCl = '';

    /**
     * @var string
     */
    private $codPromotoreCl = '';

    /**
     * @var string
     */
    private $desPromotoreCl = '';

    /**
     * @var string
     */
    private $codVoucherOp = '';

    /**
     * @var string
     */
    private $desVoucherOp = '';

    /**
     * @var string
     */
    private $codOperatore = '';

    /**
     * @var string
     */
    private $desOperatore = '';

    /**
     * @var string
     */
    private $codFatOp = '';

    /**
     * @var string
     */
    private $desFattOp = '';

    /**
     * @var string
     */
    private $valOperaz = '';

    /**
     * @var string
     */
    private $tipoRiscossione = '';

    /**
     * @var string
     */
    private $desTipoRisc = '';

    /**
     * @var string
     */
    private $mezzoRisc = '';

    /**
     * @var string
     */
    private $tipoPagamento = '';

    /**
     * @var string
     */
    private $desTipoPag = '';

    /**
     * @var string
     */
    private $mezzoPag = '';

    /**
     * @var string
     */
    private $banca/altroOpeFin = '';

    /**
     * @var string
     */
    private $rifP/conti = '';

    /**
     * @var string
     */
    private $fileGener.riscossioni = '';

    /**
     * @var string
     */
    private $codOperAltern = '';

    /**
     * @var string
     */
    private $seFuoriTempo = '';

    /**
     * @var string
     */
    private $codFiliale = '';

    /**
     * @var string
     */
    private $desFiliale = '';

    /**
     * @var string
     */
    private $sequenzaCl = '';

    /**
     * @var string
     */
    private $sequenzaOp = '';

    /**
     * @var string
     */
    private $logo = '';

    /**
     * @var string
     */
    private $flagBlacklist = '';

    /**
     * @var string
     */
    private $pcontiCM = '';

    /**
     * @var string
     */
    private $pcontiCC = '';

    /**
     * @var string
     */
    private $pcontiFM = '';

    /**
     * @var string
     */
    private $pcontiFC = '';

    /**
     * @var string
     */
    private $accettaC/cAirplusOp = '';

    /**
     * @var string
     */
    private $accettaC/cAmericanExpressOp = '';

    /**
     * @var string
     */
    private $accettaC/cDinersClubOp = '';

    /**
     * @var \DateTime
     */
    private $dataCreazione;

    /**
     * @var \DateTime
     */
    private $dataUltimaModifica;

    /**
     * @var integer
     */
    private $codRecord;


    /**
     * Set cortesia
     *
     * @param string $cortesia
     *
     * @return BackofficeFornitoriImport
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;

        return $this;
    }

    /**
     * Get cortesia
     *
     * @return string
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }

    /**
     * Set ricerca
     *
     * @param string $ricerca
     *
     * @return BackofficeFornitoriImport
     */
    public function setRicerca($ricerca)
    {
        $this->ricerca = $ricerca;

        return $this;
    }

    /**
     * Get ricerca
     *
     * @return string
     */
    public function getRicerca()
    {
        return $this->ricerca;
    }

    /**
     * Set nominativo
     *
     * @param string $nominativo
     *
     * @return BackofficeFornitoriImport
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set estensione
     *
     * @param string $estensione
     *
     * @return BackofficeFornitoriImport
     */
    public function setEstensione($estensione)
    {
        $this->estensione = $estensione;

        return $this;
    }

    /**
     * Get estensione
     *
     * @return string
     */
    public function getEstensione()
    {
        return $this->estensione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return BackofficeFornitoriImport
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return BackofficeFornitoriImport
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta'
     *
     * @param string $citta'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCitta'($citta')
    {
        $this->citta' = $citta';

        return $this;
    }

    /**
     * Get citta'
     *
     * @return string
     */
    public function getCitta'()
    {
        return $this->citta';
    }

    /**
     * Set codAttivita'
     *
     * @param string $codAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodAttivita'($codAttivita')
    {
        $this->codAttivita' = $codAttivita';

        return $this;
    }

    /**
     * Get codAttivita'
     *
     * @return string
     */
    public function getCodAttivita'()
    {
        return $this->codAttivita';
    }

    /**
     * Set desAttivita'
     *
     * @param string $desAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesAttivita'($desAttivita')
    {
        $this->desAttivita' = $desAttivita';

        return $this;
    }

    /**
     * Get desAttivita'
     *
     * @return string
     */
    public function getDesAttivita'()
    {
        return $this->desAttivita';
    }

    /**
     * Set tipologiaC/cCl
     *
     * @param string $tipologiaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipologiaC/cCl($tipologiaC/cCl)
    {
        $this->tipologiaC/cCl = $tipologiaC/cCl;

        return $this;
    }

    /**
     * Get tipologiaC/cCl
     *
     * @return string
     */
    public function getTipologiaC/cCl()
    {
        return $this->tipologiaC/cCl;
    }

    /**
     * Set numeroC/cCl
     *
     * @param string $numeroC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumeroC/cCl($numeroC/cCl)
    {
        $this->numeroC/cCl = $numeroC/cCl;

        return $this;
    }

    /**
     * Get numeroC/cCl
     *
     * @return string
     */
    public function getNumeroC/cCl()
    {
        return $this->numeroC/cCl;
    }

    /**
     * Set dataScadenzaC/cCl
     *
     * @param \DateTime $dataScadenzaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataScadenzaC/cCl($dataScadenzaC/cCl)
    {
        $this->dataScadenzaC/cCl = $dataScadenzaC/cCl;

        return $this;
    }

    /**
     * Get dataScadenzaC/cCl
     *
     * @return \DateTime
     */
    public function getDataScadenzaC/cCl()
    {
        return $this->dataScadenzaC/cCl;
    }

    /**
     * Set tipoUtilizzoC/cCl
     *
     * @param string $tipoUtilizzoC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoUtilizzoC/cCl($tipoUtilizzoC/cCl)
    {
        $this->tipoUtilizzoC/cCl = $tipoUtilizzoC/cCl;

        return $this;
    }

    /**
     * Get tipoUtilizzoC/cCl
     *
     * @return string
     */
    public function getTipoUtilizzoC/cCl()
    {
        return $this->tipoUtilizzoC/cCl;
    }

    /**
     * Set banca/altroOpeFin
     *
     * @param string $banca/altroOpeFin
     *
     * @return BackofficeFornitoriImport
     */
    public function setBanca/altroOpeFin($banca/altroOpeFin)
    {
        $this->banca/altroOpeFin = $banca/altroOpeFin;

        return $this;
    }

    /**
     * Get banca/altroOpeFin
     *
     * @return string
     */
    public function getBanca/altroOpeFin()
    {
        return $this->banca/altroOpeFin;
    }

    /**
     * Set rifP/conti
     *
     * @param string $rifP/conti
     *
     * @return BackofficeFornitoriImport
     */
    public function setRifP/conti($rifP/conti)
    {
        $this->rifP/conti = $rifP/conti;

        return $this;
    }

    /**
     * Get rifP/conti
     *
     * @return string
     */
    public function getRifP/conti()
    {
        return $this->rifP/conti;
    }

    /**
     * Set fileGener.riscossioni
     *
     * @param string $fileGener.riscossioni
     *
     * @return BackofficeFornitoriImport
     */
    public function setFileGener.riscossioni($fileGener.riscossioni)
    {
        $this->fileGener.riscossioni = $fileGener.riscossioni;

        return $this;
    }

    /**
     * Get fileGener.riscossioni
     *
     * @return string
     */
    public function getFileGener.riscossioni()
    {
        return $this->fileGener.riscossioni;
    }

    /**
     * Set accettaC/cAirplusOp
     *
     * @param string $accettaC/cAirplusOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAirplusOp($accettaC/cAirplusOp)
    {
        $this->accettaC/cAirplusOp = $accettaC/cAirplusOp;

        return $this;
    }

    /**
     * Get accettaC/cAirplusOp
     *
     * @return string
     */
    public function getAccettaC/cAirplusOp()
    {
        return $this->accettaC/cAirplusOp;
    }

    /**
     * Set accettaC/cAmericanExpressOp
     *
     * @param string $accettaC/cAmericanExpressOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAmericanExpressOp($accettaC/cAmericanExpressOp)
    {
        $this->accettaC/cAmericanExpressOp = $accettaC/cAmericanExpressOp;

        return $this;
    }

    /**
     * Get accettaC/cAmericanExpressOp
     *
     * @return string
     */
    public function getAccettaC/cAmericanExpressOp()
    {
        return $this->accettaC/cAmericanExpressOp;
    }

    /**
     * Set accettaC/cDinersClubOp
     *
     * @param string $accettaC/cDinersClubOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cDinersClubOp($accettaC/cDinersClubOp)
    {
        $this->accettaC/cDinersClubOp = $accettaC/cDinersClubOp;

        return $this;
    }

    /**
     * Get accettaC/cDinersClubOp
     *
     * @return string
     */
    public function getAccettaC/cDinersClubOp()
    {
        return $this->accettaC/cDinersClubOp;
    }
    /**
     * @var string
     */
    private $citta' = '';

    /**
     * @var string
     */
    private $prov = '';

    /**
     * @var string
     */
    private $codStatoEstero = '';

    /**
     * @var string
     */
    private $desStatoEstero = '';

    /**
     * @var string
     */
    private $nazBlacklist = '';

    /**
     * @var string
     */
    private $codZona = '';

    /**
     * @var string
     */
    private $desZona = '';

    /**
     * @var string
     */
    private $codCategoria = '';

    /**
     * @var string
     */
    private $desCategoria = '';

    /**
     * @var string
     */
    private $codAttivita' = '';

    /**
     * @var string
     */
    private $desAttivita' = '';

    /**
     * @var string
     */
    private $gruppo = '';

    /**
     * @var string
     */
    private $desGruppo = '';

    /**
     * @var string
     */
    private $prefisso = '';

    /**
     * @var string
     */
    private $telefono1 = '';

    /**
     * @var string
     */
    private $telefono2 = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $telex = '';

    /**
     * @var \DateTime
     */
    private $dataUltimoContatto;

    /**
     * @var string
     */
    private $partitaIva = '';

    /**
     * @var string
     */
    private $codFiscale = '';

    /**
     * @var string
     */
    private $sesso = '';

    /**
     * @var string
     */
    private $luogoNascita = '';

    /**
     * @var string
     */
    private $provNascita = '';

    /**
     * @var \DateTime
     */
    private $dataNascita;

    /**
     * @var string
     */
    private $spedizione = '';

    /**
     * @var string
     */
    private $esclusioneStampaReg = '';

    /**
     * @var string
     */
    private $esclusionePosta = '';

    /**
     * @var string
     */
    private $accettazionePrivacy = '';

    /**
     * @var string
     */
    private $urlInternet = '';

    /**
     * @var string
     */
    private $eMailInternet = '';

    /**
     * @var string
     */
    private $codCatScontiCl = '';

    /**
     * @var string
     */
    private $desCatScontiCl = '';

    /**
     * @var string
     */
    private $codCatScontiOp = '';

    /**
     * @var string
     */
    private $desCatScontiOp = '';

    /**
     * @var string
     */
    private $codAnagPagOp = '';

    /**
     * @var string
     */
    private $desAnagPagOp = '';

    /**
     * @var string
     */
    private $codTipoVet;

    /**
     * @var string
     */
    private $desTipoVettore;

    /**
     * @var string
     */
    private $cmp;

    /**
     * @var string
     */
    private $cmpNum;

    /**
     * @var string
     */
    private $assocBsp;

    /**
     * @var string
     */
    private $numeroCard;

    /**
     * @var string
     */
    private $inviaCat;

    /**
     * @var \DateTime
     */
    private $dataTess;

    /**
     * @var string
     */
    private $numTessera;

    /**
     * @var string
     */
    private $scadTessera = '';

    /**
     * @var string
     */
    private $codTrib1 = '';

    /**
     * @var string
     */
    private $codTrib2 = '';

    /**
     * @var string
     */
    private $codTrib3 = '';

    /**
     * @var string
     */
    private $codTrib4 = '';

    /**
     * @var string
     */
    private $codTrib5 = '';

    /**
     * @var string
     */
    private $codPagPratCl = '';

    /**
     * @var string
     */
    private $desPagPratCl = '';

    /**
     * @var string
     */
    private $codPagPratOp = '';

    /**
     * @var string
     */
    private $desPagPratOp = '';

    /**
     * @var string
     */
    private $codPagFattCl = '';

    /**
     * @var string
     */
    private $desPagFattCl = '';

    /**
     * @var string
     */
    private $codPagFattOp = '';

    /**
     * @var string
     */
    private $desPagFattOp = '';

    /**
     * @var string
     */
    private $bancaAppoggio = '';

    /**
     * @var string
     */
    private $filialeBn = '';

    /**
     * @var string
     */
    private $localitaBn = '';

    /**
     * @var string
     */
    private $provBn = '';

    /**
     * @var string
     */
    private $capBn = '';

    /**
     * @var string
     */
    private $iban = '';

    /**
     * @var string
     */
    private $bban = '';

    /**
     * @var string
     */
    private $swift = '';

    /**
     * @var string
     */
    private $valutaImporti = '';

    /**
     * @var string
     */
    private $fidoCl = '';

    /**
     * @var string
     */
    private $insolutiCl = '';

    /**
     * @var string
     */
    private $tipoDoc = '';

    /**
     * @var string
     */
    private $numDoc = '';

    /**
     * @var \DateTime
     */
    private $dataEmisDoc;

    /**
     * @var string
     */
    private $luogoEmisDoc = '';

    /**
     * @var string
     */
    private $provvEmisDoc = '';

    /**
     * @var string
     */
    private $scadDoc = '';

    /**
     * @var string
     */
    private $lingua = '';

    /**
     * @var string
     */
    private $tipologiaC/cCl = '';

    /**
     * @var string
     */
    private $numeroC/cCl = '';

    /**
     * @var \DateTime
     */
    private $dataScadenzaC/cCl;

    /**
     * @var string
     */
    private $tipoUtilizzoC/cCl = '';

    /**
     * @var string
     */
    private $desLinguaPerStampe = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var string
     */
    private $listinoPrz = '';

    /**
     * @var string
     */
    private $listinoCst = '';

    /**
     * @var string
     */
    private $listinoProvvPass = '';

    /**
     * @var string
     */
    private $listinoProvvAtt = '';

    /**
     * @var string
     */
    private $codFatCl = '';

    /**
     * @var string
     */
    private $desFatCl = '';

    /**
     * @var string
     */
    private $codCollettoreCl = '';

    /**
     * @var string
     */
    private $desCollettoreCl = '';

    /**
     * @var string
     */
    private $codPromotoreCl = '';

    /**
     * @var string
     */
    private $desPromotoreCl = '';

    /**
     * @var string
     */
    private $codVoucherOp = '';

    /**
     * @var string
     */
    private $desVoucherOp = '';

    /**
     * @var string
     */
    private $codOperatore = '';

    /**
     * @var string
     */
    private $desOperatore = '';

    /**
     * @var string
     */
    private $codFatOp = '';

    /**
     * @var string
     */
    private $desFattOp = '';

    /**
     * @var string
     */
    private $valOperaz = '';

    /**
     * @var string
     */
    private $tipoRiscossione = '';

    /**
     * @var string
     */
    private $desTipoRisc = '';

    /**
     * @var string
     */
    private $mezzoRisc = '';

    /**
     * @var string
     */
    private $tipoPagamento = '';

    /**
     * @var string
     */
    private $desTipoPag = '';

    /**
     * @var string
     */
    private $mezzoPag = '';

    /**
     * @var string
     */
    private $banca/altroOpeFin = '';

    /**
     * @var string
     */
    private $rifP/conti = '';

    /**
     * @var string
     */
    private $fileGener.riscossioni = '';

    /**
     * @var string
     */
    private $codOperAltern = '';

    /**
     * @var string
     */
    private $seFuoriTempo = '';

    /**
     * @var string
     */
    private $codFiliale = '';

    /**
     * @var string
     */
    private $desFiliale = '';

    /**
     * @var string
     */
    private $sequenzaCl = '';

    /**
     * @var string
     */
    private $sequenzaOp = '';

    /**
     * @var string
     */
    private $logo = '';

    /**
     * @var string
     */
    private $flagBlacklist = '';

    /**
     * @var string
     */
    private $pcontiCM = '';

    /**
     * @var string
     */
    private $pcontiCC = '';

    /**
     * @var string
     */
    private $pcontiFM = '';

    /**
     * @var string
     */
    private $pcontiFC = '';

    /**
     * @var string
     */
    private $accettaC/cAirplusOp = '';

    /**
     * @var string
     */
    private $accettaC/cAmericanExpressOp = '';

    /**
     * @var string
     */
    private $accettaC/cDinersClubOp = '';

    /**
     * @var \DateTime
     */
    private $dataCreazione;

    /**
     * @var \DateTime
     */
    private $dataUltimaModifica;

    /**
     * @var integer
     */
    private $codRecord;


    /**
     * Set cortesia
     *
     * @param string $cortesia
     *
     * @return BackofficeFornitoriImport
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;

        return $this;
    }

    /**
     * Get cortesia
     *
     * @return string
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }

    /**
     * Set ricerca
     *
     * @param string $ricerca
     *
     * @return BackofficeFornitoriImport
     */
    public function setRicerca($ricerca)
    {
        $this->ricerca = $ricerca;

        return $this;
    }

    /**
     * Get ricerca
     *
     * @return string
     */
    public function getRicerca()
    {
        return $this->ricerca;
    }

    /**
     * Set nominativo
     *
     * @param string $nominativo
     *
     * @return BackofficeFornitoriImport
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set estensione
     *
     * @param string $estensione
     *
     * @return BackofficeFornitoriImport
     */
    public function setEstensione($estensione)
    {
        $this->estensione = $estensione;

        return $this;
    }

    /**
     * Get estensione
     *
     * @return string
     */
    public function getEstensione()
    {
        return $this->estensione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return BackofficeFornitoriImport
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return BackofficeFornitoriImport
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta'
     *
     * @param string $citta'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCitta'($citta')
    {
        $this->citta' = $citta';

        return $this;
    }

    /**
     * Get citta'
     *
     * @return string
     */
    public function getCitta'()
    {
        return $this->citta';
    }

    /**
     * Set codAttivita'
     *
     * @param string $codAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodAttivita'($codAttivita')
    {
        $this->codAttivita' = $codAttivita';

        return $this;
    }

    /**
     * Get codAttivita'
     *
     * @return string
     */
    public function getCodAttivita'()
    {
        return $this->codAttivita';
    }

    /**
     * Set desAttivita'
     *
     * @param string $desAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesAttivita'($desAttivita')
    {
        $this->desAttivita' = $desAttivita';

        return $this;
    }

    /**
     * Get desAttivita'
     *
     * @return string
     */
    public function getDesAttivita'()
    {
        return $this->desAttivita';
    }

    /**
     * Set tipologiaC/cCl
     *
     * @param string $tipologiaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipologiaC/cCl($tipologiaC/cCl)
    {
        $this->tipologiaC/cCl = $tipologiaC/cCl;

        return $this;
    }

    /**
     * Get tipologiaC/cCl
     *
     * @return string
     */
    public function getTipologiaC/cCl()
    {
        return $this->tipologiaC/cCl;
    }

    /**
     * Set numeroC/cCl
     *
     * @param string $numeroC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumeroC/cCl($numeroC/cCl)
    {
        $this->numeroC/cCl = $numeroC/cCl;

        return $this;
    }

    /**
     * Get numeroC/cCl
     *
     * @return string
     */
    public function getNumeroC/cCl()
    {
        return $this->numeroC/cCl;
    }

    /**
     * Set dataScadenzaC/cCl
     *
     * @param \DateTime $dataScadenzaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataScadenzaC/cCl($dataScadenzaC/cCl)
    {
        $this->dataScadenzaC/cCl = $dataScadenzaC/cCl;

        return $this;
    }

    /**
     * Get dataScadenzaC/cCl
     *
     * @return \DateTime
     */
    public function getDataScadenzaC/cCl()
    {
        return $this->dataScadenzaC/cCl;
    }

    /**
     * Set tipoUtilizzoC/cCl
     *
     * @param string $tipoUtilizzoC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoUtilizzoC/cCl($tipoUtilizzoC/cCl)
    {
        $this->tipoUtilizzoC/cCl = $tipoUtilizzoC/cCl;

        return $this;
    }

    /**
     * Get tipoUtilizzoC/cCl
     *
     * @return string
     */
    public function getTipoUtilizzoC/cCl()
    {
        return $this->tipoUtilizzoC/cCl;
    }

    /**
     * Set banca/altroOpeFin
     *
     * @param string $banca/altroOpeFin
     *
     * @return BackofficeFornitoriImport
     */
    public function setBanca/altroOpeFin($banca/altroOpeFin)
    {
        $this->banca/altroOpeFin = $banca/altroOpeFin;

        return $this;
    }

    /**
     * Get banca/altroOpeFin
     *
     * @return string
     */
    public function getBanca/altroOpeFin()
    {
        return $this->banca/altroOpeFin;
    }

    /**
     * Set rifP/conti
     *
     * @param string $rifP/conti
     *
     * @return BackofficeFornitoriImport
     */
    public function setRifP/conti($rifP/conti)
    {
        $this->rifP/conti = $rifP/conti;

        return $this;
    }

    /**
     * Get rifP/conti
     *
     * @return string
     */
    public function getRifP/conti()
    {
        return $this->rifP/conti;
    }

    /**
     * Set fileGener.riscossioni
     *
     * @param string $fileGener.riscossioni
     *
     * @return BackofficeFornitoriImport
     */
    public function setFileGener.riscossioni($fileGener.riscossioni)
    {
        $this->fileGener.riscossioni = $fileGener.riscossioni;

        return $this;
    }

    /**
     * Get fileGener.riscossioni
     *
     * @return string
     */
    public function getFileGener.riscossioni()
    {
        return $this->fileGener.riscossioni;
    }

    /**
     * Set accettaC/cAirplusOp
     *
     * @param string $accettaC/cAirplusOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAirplusOp($accettaC/cAirplusOp)
    {
        $this->accettaC/cAirplusOp = $accettaC/cAirplusOp;

        return $this;
    }

    /**
     * Get accettaC/cAirplusOp
     *
     * @return string
     */
    public function getAccettaC/cAirplusOp()
    {
        return $this->accettaC/cAirplusOp;
    }

    /**
     * Set accettaC/cAmericanExpressOp
     *
     * @param string $accettaC/cAmericanExpressOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAmericanExpressOp($accettaC/cAmericanExpressOp)
    {
        $this->accettaC/cAmericanExpressOp = $accettaC/cAmericanExpressOp;

        return $this;
    }

    /**
     * Get accettaC/cAmericanExpressOp
     *
     * @return string
     */
    public function getAccettaC/cAmericanExpressOp()
    {
        return $this->accettaC/cAmericanExpressOp;
    }

    /**
     * Set accettaC/cDinersClubOp
     *
     * @param string $accettaC/cDinersClubOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cDinersClubOp($accettaC/cDinersClubOp)
    {
        $this->accettaC/cDinersClubOp = $accettaC/cDinersClubOp;

        return $this;
    }

    /**
     * Get accettaC/cDinersClubOp
     *
     * @return string
     */
    public function getAccettaC/cDinersClubOp()
    {
        return $this->accettaC/cDinersClubOp;
    }
    /**
     * @var string
     */
    private $citta' = '';

    /**
     * @var string
     */
    private $prov = '';

    /**
     * @var string
     */
    private $codStatoEstero = '';

    /**
     * @var string
     */
    private $desStatoEstero = '';

    /**
     * @var string
     */
    private $nazBlacklist = '';

    /**
     * @var string
     */
    private $codZona = '';

    /**
     * @var string
     */
    private $desZona = '';

    /**
     * @var string
     */
    private $codCategoria = '';

    /**
     * @var string
     */
    private $desCategoria = '';

    /**
     * @var string
     */
    private $codAttivita' = '';

    /**
     * @var string
     */
    private $desAttivita' = '';

    /**
     * @var string
     */
    private $gruppo = '';

    /**
     * @var string
     */
    private $desGruppo = '';

    /**
     * @var string
     */
    private $prefisso = '';

    /**
     * @var string
     */
    private $telefono1 = '';

    /**
     * @var string
     */
    private $telefono2 = '';

    /**
     * @var string
     */
    private $fax = '';

    /**
     * @var string
     */
    private $telex = '';

    /**
     * @var \DateTime
     */
    private $dataUltimoContatto;

    /**
     * @var string
     */
    private $partitaIva = '';

    /**
     * @var string
     */
    private $codFiscale = '';

    /**
     * @var string
     */
    private $sesso = '';

    /**
     * @var string
     */
    private $luogoNascita = '';

    /**
     * @var string
     */
    private $provNascita = '';

    /**
     * @var \DateTime
     */
    private $dataNascita;

    /**
     * @var string
     */
    private $spedizione = '';

    /**
     * @var string
     */
    private $esclusioneStampaReg = '';

    /**
     * @var string
     */
    private $esclusionePosta = '';

    /**
     * @var string
     */
    private $accettazionePrivacy = '';

    /**
     * @var string
     */
    private $urlInternet = '';

    /**
     * @var string
     */
    private $eMailInternet = '';

    /**
     * @var string
     */
    private $codCatScontiCl = '';

    /**
     * @var string
     */
    private $desCatScontiCl = '';

    /**
     * @var string
     */
    private $codCatScontiOp = '';

    /**
     * @var string
     */
    private $desCatScontiOp = '';

    /**
     * @var string
     */
    private $codAnagPagOp = '';

    /**
     * @var string
     */
    private $desAnagPagOp = '';

    /**
     * @var string
     */
    private $codTipoVet;

    /**
     * @var string
     */
    private $desTipoVettore;

    /**
     * @var string
     */
    private $cmp;

    /**
     * @var string
     */
    private $cmpNum;

    /**
     * @var string
     */
    private $assocBsp;

    /**
     * @var string
     */
    private $numeroCard;

    /**
     * @var string
     */
    private $inviaCat;

    /**
     * @var \DateTime
     */
    private $dataTess;

    /**
     * @var string
     */
    private $numTessera;

    /**
     * @var string
     */
    private $scadTessera = '';

    /**
     * @var string
     */
    private $codTrib1 = '';

    /**
     * @var string
     */
    private $codTrib2 = '';

    /**
     * @var string
     */
    private $codTrib3 = '';

    /**
     * @var string
     */
    private $codTrib4 = '';

    /**
     * @var string
     */
    private $codTrib5 = '';

    /**
     * @var string
     */
    private $codPagPratCl = '';

    /**
     * @var string
     */
    private $desPagPratCl = '';

    /**
     * @var string
     */
    private $codPagPratOp = '';

    /**
     * @var string
     */
    private $desPagPratOp = '';

    /**
     * @var string
     */
    private $codPagFattCl = '';

    /**
     * @var string
     */
    private $desPagFattCl = '';

    /**
     * @var string
     */
    private $codPagFattOp = '';

    /**
     * @var string
     */
    private $desPagFattOp = '';

    /**
     * @var string
     */
    private $bancaAppoggio = '';

    /**
     * @var string
     */
    private $filialeBn = '';

    /**
     * @var string
     */
    private $localitaBn = '';

    /**
     * @var string
     */
    private $provBn = '';

    /**
     * @var string
     */
    private $capBn = '';

    /**
     * @var string
     */
    private $iban = '';

    /**
     * @var string
     */
    private $bban = '';

    /**
     * @var string
     */
    private $swift = '';

    /**
     * @var string
     */
    private $valutaImporti = '';

    /**
     * @var string
     */
    private $fidoCl = '';

    /**
     * @var string
     */
    private $insolutiCl = '';

    /**
     * @var string
     */
    private $tipoDoc = '';

    /**
     * @var string
     */
    private $numDoc = '';

    /**
     * @var \DateTime
     */
    private $dataEmisDoc;

    /**
     * @var string
     */
    private $luogoEmisDoc = '';

    /**
     * @var string
     */
    private $provvEmisDoc = '';

    /**
     * @var string
     */
    private $scadDoc = '';

    /**
     * @var string
     */
    private $lingua = '';

    /**
     * @var string
     */
    private $tipologiaC/cCl = '';

    /**
     * @var string
     */
    private $numeroC/cCl = '';

    /**
     * @var \DateTime
     */
    private $dataScadenzaC/cCl;

    /**
     * @var string
     */
    private $tipoUtilizzoC/cCl = '';

    /**
     * @var string
     */
    private $desLinguaPerStampe = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var string
     */
    private $listinoPrz = '';

    /**
     * @var string
     */
    private $listinoCst = '';

    /**
     * @var string
     */
    private $listinoProvvPass = '';

    /**
     * @var string
     */
    private $listinoProvvAtt = '';

    /**
     * @var string
     */
    private $codFatCl = '';

    /**
     * @var string
     */
    private $desFatCl = '';

    /**
     * @var string
     */
    private $codCollettoreCl = '';

    /**
     * @var string
     */
    private $desCollettoreCl = '';

    /**
     * @var string
     */
    private $codPromotoreCl = '';

    /**
     * @var string
     */
    private $desPromotoreCl = '';

    /**
     * @var string
     */
    private $codVoucherOp = '';

    /**
     * @var string
     */
    private $desVoucherOp = '';

    /**
     * @var string
     */
    private $codOperatore = '';

    /**
     * @var string
     */
    private $desOperatore = '';

    /**
     * @var string
     */
    private $codFatOp = '';

    /**
     * @var string
     */
    private $desFattOp = '';

    /**
     * @var string
     */
    private $valOperaz = '';

    /**
     * @var string
     */
    private $tipoRiscossione = '';

    /**
     * @var string
     */
    private $desTipoRisc = '';

    /**
     * @var string
     */
    private $mezzoRisc = '';

    /**
     * @var string
     */
    private $tipoPagamento = '';

    /**
     * @var string
     */
    private $desTipoPag = '';

    /**
     * @var string
     */
    private $mezzoPag = '';

    /**
     * @var string
     */
    private $banca/altroOpeFin = '';

    /**
     * @var string
     */
    private $rifP/conti = '';

    /**
     * @var string
     */
    private $fileGener.riscossioni = '';

    /**
     * @var string
     */
    private $codOperAltern = '';

    /**
     * @var string
     */
    private $seFuoriTempo = '';

    /**
     * @var string
     */
    private $codFiliale = '';

    /**
     * @var string
     */
    private $desFiliale = '';

    /**
     * @var string
     */
    private $sequenzaCl = '';

    /**
     * @var string
     */
    private $sequenzaOp = '';

    /**
     * @var string
     */
    private $logo = '';

    /**
     * @var string
     */
    private $flagBlacklist = '';

    /**
     * @var string
     */
    private $pcontiCM = '';

    /**
     * @var string
     */
    private $pcontiCC = '';

    /**
     * @var string
     */
    private $pcontiFM = '';

    /**
     * @var string
     */
    private $pcontiFC = '';

    /**
     * @var string
     */
    private $accettaC/cAirplusOp = '';

    /**
     * @var string
     */
    private $accettaC/cAmericanExpressOp = '';

    /**
     * @var string
     */
    private $accettaC/cDinersClubOp = '';

    /**
     * @var \DateTime
     */
    private $dataCreazione;

    /**
     * @var \DateTime
     */
    private $dataUltimaModifica;

    /**
     * @var integer
     */
    private $codRecord;


    /**
     * Set cortesia
     *
     * @param string $cortesia
     *
     * @return BackofficeFornitoriImport
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;

        return $this;
    }

    /**
     * Get cortesia
     *
     * @return string
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }

    /**
     * Set ricerca
     *
     * @param string $ricerca
     *
     * @return BackofficeFornitoriImport
     */
    public function setRicerca($ricerca)
    {
        $this->ricerca = $ricerca;

        return $this;
    }

    /**
     * Get ricerca
     *
     * @return string
     */
    public function getRicerca()
    {
        return $this->ricerca;
    }

    /**
     * Set nominativo
     *
     * @param string $nominativo
     *
     * @return BackofficeFornitoriImport
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set estensione
     *
     * @param string $estensione
     *
     * @return BackofficeFornitoriImport
     */
    public function setEstensione($estensione)
    {
        $this->estensione = $estensione;

        return $this;
    }

    /**
     * Get estensione
     *
     * @return string
     */
    public function getEstensione()
    {
        return $this->estensione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return BackofficeFornitoriImport
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return BackofficeFornitoriImport
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta'
     *
     * @param string $citta'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCitta'($citta')
    {
        $this->citta' = $citta';

        return $this;
    }

    /**
     * Get citta'
     *
     * @return string
     */
    public function getCitta'()
    {
        return $this->citta';
    }

    /**
     * Set codAttivita'
     *
     * @param string $codAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setCodAttivita'($codAttivita')
    {
        $this->codAttivita' = $codAttivita';

        return $this;
    }

    /**
     * Get codAttivita'
     *
     * @return string
     */
    public function getCodAttivita'()
    {
        return $this->codAttivita';
    }

    /**
     * Set desAttivita'
     *
     * @param string $desAttivita'
     *
     * @return BackofficeFornitoriImport
     */
    public function setDesAttivita'($desAttivita')
    {
        $this->desAttivita' = $desAttivita';

        return $this;
    }

    /**
     * Get desAttivita'
     *
     * @return string
     */
    public function getDesAttivita'()
    {
        return $this->desAttivita';
    }

    /**
     * Set tipologiaC/cCl
     *
     * @param string $tipologiaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipologiaC/cCl($tipologiaC/cCl)
    {
        $this->tipologiaC/cCl = $tipologiaC/cCl;

        return $this;
    }

    /**
     * Get tipologiaC/cCl
     *
     * @return string
     */
    public function getTipologiaC/cCl()
    {
        return $this->tipologiaC/cCl;
    }

    /**
     * Set numeroC/cCl
     *
     * @param string $numeroC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setNumeroC/cCl($numeroC/cCl)
    {
        $this->numeroC/cCl = $numeroC/cCl;

        return $this;
    }

    /**
     * Get numeroC/cCl
     *
     * @return string
     */
    public function getNumeroC/cCl()
    {
        return $this->numeroC/cCl;
    }

    /**
     * Set dataScadenzaC/cCl
     *
     * @param \DateTime $dataScadenzaC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setDataScadenzaC/cCl($dataScadenzaC/cCl)
    {
        $this->dataScadenzaC/cCl = $dataScadenzaC/cCl;

        return $this;
    }

    /**
     * Get dataScadenzaC/cCl
     *
     * @return \DateTime
     */
    public function getDataScadenzaC/cCl()
    {
        return $this->dataScadenzaC/cCl;
    }

    /**
     * Set tipoUtilizzoC/cCl
     *
     * @param string $tipoUtilizzoC/cCl
     *
     * @return BackofficeFornitoriImport
     */
    public function setTipoUtilizzoC/cCl($tipoUtilizzoC/cCl)
    {
        $this->tipoUtilizzoC/cCl = $tipoUtilizzoC/cCl;

        return $this;
    }

    /**
     * Get tipoUtilizzoC/cCl
     *
     * @return string
     */
    public function getTipoUtilizzoC/cCl()
    {
        return $this->tipoUtilizzoC/cCl;
    }

    /**
     * Set banca/altroOpeFin
     *
     * @param string $banca/altroOpeFin
     *
     * @return BackofficeFornitoriImport
     */
    public function setBanca/altroOpeFin($banca/altroOpeFin)
    {
        $this->banca/altroOpeFin = $banca/altroOpeFin;

        return $this;
    }

    /**
     * Get banca/altroOpeFin
     *
     * @return string
     */
    public function getBanca/altroOpeFin()
    {
        return $this->banca/altroOpeFin;
    }

    /**
     * Set rifP/conti
     *
     * @param string $rifP/conti
     *
     * @return BackofficeFornitoriImport
     */
    public function setRifP/conti($rifP/conti)
    {
        $this->rifP/conti = $rifP/conti;

        return $this;
    }

    /**
     * Get rifP/conti
     *
     * @return string
     */
    public function getRifP/conti()
    {
        return $this->rifP/conti;
    }

    /**
     * Set fileGener.riscossioni
     *
     * @param string $fileGener.riscossioni
     *
     * @return BackofficeFornitoriImport
     */
    public function setFileGener.riscossioni($fileGener.riscossioni)
    {
        $this->fileGener.riscossioni = $fileGener.riscossioni;

        return $this;
    }

    /**
     * Get fileGener.riscossioni
     *
     * @return string
     */
    public function getFileGener.riscossioni()
    {
        return $this->fileGener.riscossioni;
    }

    /**
     * Set accettaC/cAirplusOp
     *
     * @param string $accettaC/cAirplusOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAirplusOp($accettaC/cAirplusOp)
    {
        $this->accettaC/cAirplusOp = $accettaC/cAirplusOp;

        return $this;
    }

    /**
     * Get accettaC/cAirplusOp
     *
     * @return string
     */
    public function getAccettaC/cAirplusOp()
    {
        return $this->accettaC/cAirplusOp;
    }

    /**
     * Set accettaC/cAmericanExpressOp
     *
     * @param string $accettaC/cAmericanExpressOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cAmericanExpressOp($accettaC/cAmericanExpressOp)
    {
        $this->accettaC/cAmericanExpressOp = $accettaC/cAmericanExpressOp;

        return $this;
    }

    /**
     * Get accettaC/cAmericanExpressOp
     *
     * @return string
     */
    public function getAccettaC/cAmericanExpressOp()
    {
        return $this->accettaC/cAmericanExpressOp;
    }

    /**
     * Set accettaC/cDinersClubOp
     *
     * @param string $accettaC/cDinersClubOp
     *
     * @return BackofficeFornitoriImport
     */
    public function setAccettaC/cDinersClubOp($accettaC/cDinersClubOp)
    {
        $this->accettaC/cDinersClubOp = $accettaC/cDinersClubOp;

        return $this;
    }

    /**
     * Get accettaC/cDinersClubOp
     *
     * @return string
     */
    public function getAccettaC/cDinersClubOp()
    {
        return $this->accettaC/cDinersClubOp;
    }
}
