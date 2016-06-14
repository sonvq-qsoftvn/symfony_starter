<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Helpers\Utils;

class AccountExtractController extends Controller
{
    
    /**
     * Rewrite the page amministrazione/etgest/estratti_conto_v2.php
     * @Route("/etgest/account_extract", name="etgest_account_extract")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('etgest/account_extract.html.twig', array(
                'formToken' => Utils::randomString(10)
            ));
    }

    /**
     * Ajax to search account, rewrite the page amministrazione/etgest/estratti_conto_v2.php
     * @Route("/etgest/account_extract/ajax", name="etgest_account_extract_ajax")
     * @Method("POST")
     */
    public function searchAction(Request $request)
    {
        if($request->request->get('form_token')) {
            if($request->request->get('status') and !$request->request->get('show')) {
                $status = $this->retrieveStatus(array($request->request->get('status')));
                $avesStatus = $this->retrieveAvesStatus();

                $departures = $this->get('doctrine')->getRepository('ETGestBundle:Documenti', 'idetus')->findDocumentsByStatus($avesStatus);
                foreach($departures as $key => $departure) {
                    $departures[$key]['weeks'] = Utils::weekListInMonth((int)$departure['mese'], $departure['anno']);
                    $departures[$key]['mese'] = Utils::convertNumericMonthToName($departure['mese']);
                    $departures[$key]['anno'] = substr($departures[$key]['anno'], 2);
                }

                $modules = $this->get('doctrine')->getRepository('ETGestBundle:Documenti', 'idetus')->findTravelDocumentByStatus(array('vgStatus'=>$avesStatus, 'ecStato'=>$status));
                $listModules = array();
                if($modules) {
                    $listModules = $this->initAttachmentModules($modules);
                }

                return new JsonResponse(array(
                    'listModules' => $listModules,
                    'departures' => $departures,
                    'success' => true
                ));
                
            }

            if($request->request->get('show') and $request->request->get('show')=='filter') {
                $status = $this->retrieveStatus(array($request->request->get('status')));
                $avesStatus = $this->retrieveAvesStatus();

                $start =  $request->request->get('year').'-'.Utils::convertMonthNameToNumeric($request->request->get('month'), true).'-'.$request->request->get('date_start');
                $end = $request->request->get('year').'-'.Utils::convertMonthNameToNumeric($request->request->get('month'), true).'-'.$request->request->get('date_end');
                
                $modules = $this->get('doctrine')->getRepository('ETGestBundle:Documenti', 'idetus')->findTravelDocumentByStatus(array('vgStatus'=>$avesStatus, 'ecStato'=>$status), $start, $end);
                $listModules = array();
                if($modules) {
                    $listModules = $this->initAttachmentModules($modules);
                }

                return new JsonResponse(array(
                    'listModules' => $listModules,
                    'success' => true
                ));

            }
                
            if($request->request->get('id')) {
                $id = (int)$request->request->get('id');
                $attachments = $this->get('doctrine')->getRepository('ETGestBundle:AllegatiV2', 'idetus')->findAttachmentsPathByParentId($id);

                return new JsonResponse(array(
                    'attachments' => $attachments,
                    'success' => true
                ));
            }

            if($request->request->get('pannello') and $request->request->get('pannello') == 'estratticonto') {
                $avesStatus = $this->retrieveAvesStatus();
                $modules = $this->get('doctrine')->getRepository('ETGestBundle:Documenti', 'idetus')->findTravelDocumentNoteByStatus(array('vgStatus'=>$avesStatus));
                if($modules) {
                    $listModules = array();
                    $listModules['letti'] = 0;
                    $listModules['nonletti'] = 0;
                    $listModules['viaggi'] = array();
                    $listModuleAttachments = array();
                    $listModuleAttachmentsIndex = array();

                    foreach($modules as $module) {
                        $keyModule = $module['tipoDocumento'] . '.' . $module['id_modulo'];

                        $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($module['codPromotoreViaggio']);
                        $client = array(
                            'id' => $module['id_anagrafica'],
                            'cognome' => $module['cognome'],
                            'nome' => $module['nome'],
                            'codPromotore' => $module['codPromotoreViaggio'],
                            'promotore' => $user[1]
                        );

                        $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($module['utente']);
                        $newModule = array(
                            'id' => $module['id_modulo'],
                            'tipologia' => $module['tipoDocumento'],
                            'data' => Utils::convertStringToDateTimeObject($module['data'], 'd/m/Y H:i'),
                            'utente' => $user[1],
                            'titolo' => $module['titolo'],
                            'nota' => $module['nota'],
                            'letto' => $module['letto'],
                            'codPromotoreLetto' => $module['codPromotoreLetto'],
                            'dataLetto' => $module['dataLetto'],
                            'allegati' => false,
                        );

                        $listModules['viaggi'][$module['id_viaggio']]['id'] = $module['id_viaggio'];
                        $listModules['viaggi'][$module['id_viaggio']]['versione'] = $module['versione'];
                        $listModules['viaggi'][$module['id_viaggio']]['descrizione'] = $listModules[$module['id_viaggio']]['descrizione'] = sprintf("%s %s (%s - %s)", $module['tipologia'], $module['descrizione'], Utils::convertStringToDateTimeObject($module['dataInizioViaggio']), Utils::convertStringToDateTimeObject($module['dataFineViaggio']));
                        $listModules['viaggi'][$module['id_viaggio']]['client'] = $client;
                        $listModules['viaggi'][$module['id_viaggio']]['module'][$keyModule] = $newModule;

                        $listModuleAttachmentsIndex[$keyModule] = $module['id_viaggio'];

                        if (!isset($listModuleAttachments[$module['versione']])) {
                            $listModuleAttachments[$module['versione']] = array();
                        }
                        if (!isset($listModuleAttachments[$module['versione']][$module['tipoDocumento']])) {
                            $listModuleAttachments[$module['versione']][$module['tipoDocumento']] = array();
                        }

                        $listModuleAttachments[$module['versione']][$module['tipoDocumento']][$module['id_modulo']] = $module['id_modulo'];
                    }

                    $attachments = array();
                    foreach($listModuleAttachments[2] as $key => $types) {
                        $attachments = array_merge($attachments, $this->get('doctrine')->getRepository('ETGestBundle:AllegatiV2', 'idetus')->findAttachmentsTypeByParentId($key, $types));
                    }

                    if(!empty($attachments)) {
                        foreach($attachments as $attach) {
                            $keyModule = $attach['tipo'] . '.' . $attach['id_modulo'];
                            $idViaggio = $listModuleAttachmentsIndex[$keyModule];
                            $listModules[$idViaggio]['module'][$keyModule]['attachment'] = true; 
                        }
                    }

                    return new JsonResponse(array(
                        'listModules' => $listModules,
                        'success' => true
                    ));
                }
            }

        }

        return new JsonResponse(array(
            'success' => false
        ));
    }

    /**
     * @Route("/etgest/account_extract/detail", name="etgest_account_extract_view_detail")
     * @Method("GET")
     */
    public function detailAction(Request $request)
    {
        if(!$request->query->get('pannello')) return;

        $currentUser = $this->container->get('security.token_storage')->getToken()->getUser();
        $typePannel = ($request->query->get('pannello')=='estratticonto')?'documenti':'servizi';

        if($request->query->get('in_lavorazione') !== null) {
            if($request->query->get('in_lavorazione') == 1)
                $uid = (int)$currentUser->getId();
            else
                $uid = 0;

            $promoter = $this->get('doctrine')->getRepository('ETGestBundle:Documenti', 'idetus')->updateProcessingPromoterId($typePannel, $uid, (int)$request->query->get('d'));

            return new JsonResponse($promoter);

        } else {
            $promoter = $this->get('doctrine')->getRepository('ETGestBundle:Documenti', 'idetus')->findProcessingPromoterId($typePannel, (int)$request->query->get('d'));
            $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($promoter['codPromotoreLavorazione']);

            return new JsonResponse(array(
                'id' => (int)$promoter['codPromotoreLavorazione'],
                'nominativo' => $user[1]
            ));
        }

        return new JsonResponse(array(
            'error' => true
        ));
    }
    
    private function initAttachmentModules($modules)
    {
        $listModules = array();
        $listModuleAttachments = array();
        $listModuleAttachmentsIndex = array();
        foreach($modules as $module) {
            $keyModule = $module['tipoDocumento'] . '.' . $module['id_modulo'];

            $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($module['codPromotoreViaggio']);
            $client = array(
                'id' => $module['id_anagrafica'],
                'cognome' => $module['cognome'],
                'nome' => $module['nome'],
                'codPromotore' => $module['codPromotoreViaggio'],
                'promotore' => $user[1]
            );

            $newModule = array(
                'id' => $module['id_modulo'],
                'tipologia' => $module['tipoDocumento'],
                'data' => ($module['data'] < $module['dataModulo']) ? Utils::convertStringToDateTimeObject($module['dataModulo'], 'd/m/Y H:i') : Utils::convertStringToDateTimeObject($module['data'], 'd/m/Y H:i'),
                'titolo' => $module['titolo'] ? $module['tipoDocumento'] . ' - ' . $module['titolo'] : $module['tipoDocumento'],
                'nota' => $module['nota'],
                'dataModifica' => $module['datamodifica'],
                'codPromotore' => $module['codpromotore'],
                'codPromotoreModifica' => $module['codpromotoremodifica'],
                'codPromotoreLavorazione' => $module['codPromotoreLavorazione'],
                'codPromotoreStato' => $module['codPromotoreStato'],
                'promotore' => $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($module['codpromotore']),
                'promotoreModifica' => $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($module['codpromotoremodifica']),
                'promotoreLavorazione' => $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($module['codPromotoreLavorazione']),
                'promotoreStato' => $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($module['codPromotoreStato']),
                'stato' => $module['stato_modulo'],
                'stato_etichetta' => 'Da prendere in carico',
                'stato_chiave' => 'non_in_carico',
                'letto' => $module['letto'],
                'codPromotoreLetto' => $module['codPromotoreLetto'],
                'dataLetto' => $module['dataLetto'],
                'inlavorazione' => true,
                'allegati' => false,
                'conferma_prenotazione' => $module['conferma_prenotazione']
            );
            
            $listModules[$module['id_viaggio']]['id'] = $module['id_viaggio'];
            $listModules[$module['id_viaggio']]['versione'] = $module['versione'];
            $listModules[$module['id_viaggio']]['descrizione'] = sprintf("%s %s (%s - %s)", $module['tipologia'], $module['descrizione'], Utils::convertStringToDateTimeObject($module['dataInizioViaggio']), Utils::convertStringToDateTimeObject($module['dataFineViaggio']));
            $listModules[$module['id_viaggio']]['client'] = $client;
            $listModules[$module['id_viaggio']]['module'][$keyModule] = $newModule;

            $listModuleAttachmentsIndex[$keyModule] = $module['id_viaggio'];

            if (!isset($listModuleAttachments[$module['versione']])) {
                $listModuleAttachments[$module['versione']] = array();
            }
            if (!isset($listModuleAttachments[$module['versione']][$module['tipoDocumento']])) {
                $listModuleAttachments[$module['versione']][$module['tipoDocumento']] = array();
            }

            $listModuleAttachments[$module['versione']][$module['tipoDocumento']][$module['id_modulo']] = $module['id_modulo'];
        }

        $attachments = array();
        foreach($listModuleAttachments[2] as $key => $types) {
            $attachments = array_merge($attachments, $this->get('doctrine')->getRepository('ETGestBundle:AllegatiV2', 'idetus')->findAttachmentsTypeByParentId($key, $types));
        }

        if(!empty($attachments)) {
            foreach($attachments as $attach) {
                $keyModule = $attach['tipo'] . '.' . $attach['id_modulo'];
                $idViaggio = $listModuleAttachmentsIndex[$keyModule];
                $listModules[$idViaggio]['module'][$keyModule]['attachment'] = true; 
            }
        }

        return $listModules;
    }
    
    private function retrieveStatus($statusArr)
    {
        if(!$statusArr) return null;

        $statusModuloEstrattoConto = $this->container->getParameter('status_modulo_estratto_conto');

        $status = array();
        foreach ($statusModuloEstrattoConto as $value) {
            if (in_array($value['gruppo'], $statusArr)) {
                $status[] = $value['id'];
            }
        }

        return $status;
    }
    
    private function retrieveAvesStatus()
    {
        $etichetteViaggio = $this->container->getParameter('etichette_viaggio');
        $statusViaggioAves = $this->container->getParameter('status_viaggio_aves');

        $status = array();
        foreach (array_keys($etichetteViaggio, 'prenotazione') as $key) {
            $status[] = $statusViaggioAves[$key];
        }

        //V2 AGGIUNGO LO STATO SALDATO
        $status[] = '9';
        $status[] = '10';

        return $status;
    }

}
