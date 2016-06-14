<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use ET\ETTicketBundle\Entity\Request as ETRequest;
use ET\ETTicketBundle\Form\RequestType as ETRequestForm;

use AppBundle\Helpers\Pagination;
use AppBundle\Helpers\Utils;

use \DateTime;

class ManageCustomerReceiptsController extends Controller
{
    /**
     * Rewrite the page amministrazione/etgest/amm_saldi.php
     * @Route("/etgest/manage_customer_receipts", name="etgest_manage_customer_receipts")
     * @Method("GET")
     */
    public function manageCustomerReceiptsAction(Request $request)
    {
        return $this->render('etgest/customer-receipts/etgest_manage_customer_receipts.html.twig', array(
                'formToken' => Utils::randomString(10)
        ));
    }

    /**
     * Ajax to search the receipts, rewrite the page amministrazione/etgest/amm_saldi.php
     * @Route("/etgest/manage_customer_receipts/ajax", name="etgest_manage_customer_receipts_ajax")
     * @Method("POST")
     */
    public function manageCustomerReceiptsAjaxAction(Request $request) 
    {
        $return = array(
            'success' => false
        );

        $currentUser = $this->container->get('security.token_storage')->getToken()->getUser();
        $statusViaggioAves = $this->container->getParameter('status_viaggio_aves');

        if($request->request->get('client_lastname')) {
            $lastName = trim($request->request->get('client_lastname'));
            $clients = $this->get('doctrine')->getRepository('ETGestBundle:Anagrafiche', 'idetus')->findRegisteredClientsByLastName($lastName);  

            foreach($clients as $key=>$val) {
                $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName((int)$val['codpromotore']);
                $clients[$key]['promoter'] = $user[1];
            }

            if(!empty($clients)) {
                $return = array(
                    'success' => true,
                    'clients' => $clients
                );
            }
        }

        if($request->request->get('nominativo')) {
            $travels = $this->get('doctrine')->getRepository('ETGestBundle:ModuloStorno', 'idetus')->findTravelWithPaymentStatusSettledByTravelStatusAndRegistryId($statusViaggioAves['errore'], $request->request->get('nominativo'));

            $countryCodes = $this->get('doctrine')->getRepository('ETGestBundle:Iso', 'idetus')->findAllCountryCode(true);

            if($travels) {
                foreach($travels as $key=>$val) {
                    if($countryCodes and isset($countryCodes['chiave'])) {
                        if( $return = array_search($val['descrizione'], $countryCodes['chiave']) ) {
                            $travels[$key]['descrizione'] = $countryCodes['chiave'][$return];
                        }
                    }

                    $client = $this->get('doctrine')->getRepository('ETGestBundle:Anagrafiche', 'idetus')->findClientNameByRegistryId($val['id_anagrafica']);
                    $travels[$key]['client'] = $client[0];

                    $travels[$key]['statusViaggioAves'] = array_search($val['status'], array_flip($statusViaggioAves));
                }

                $return = array(
                    'success' => true,
                    'travels' => $travels
                );
            }
        }

        if($request->request->get('vid')) {
            $documentService = $this->container->get('et_gest.documents_manager');
            $documentsList = array();

            foreach($documentService->getConfigByProperty( array('entity', 'eccezioni', 'accesso_lettura', 'union' => true) ) as $type => $document) {

                if(!isset($document['entity']) or !$document['entity']) continue;

                if(is_array($document['eccezioni']) and in_array($currentUser->getId(), $document['eccezioni'])) continue;

                $result = $this->get('doctrine')->getRepository('ETGestBundle:'.$document['entity'], 'idetus')->findModuleByTravelIdAndDocumentType($request->request->get('vid'), $type);

                foreach($result as $key => $val) {
                    if( isset($result[$key]['tipodocumento']) )
                        $result[$key]['property'] = $result[$key]['tipodocumento'];

                    if( isset($result[$key]['utente']) ) {
                        $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($result[$key]['utente']);
                        $result[$key]['utenteNome'] = $user[1];
                    }

                    if( isset($result[$key]['codpromotoremodifica']) and $result[$key]['codpromotoremodifica']!='' ) {
                        $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($result[$key]['codpromotoremodifica']);
                        $result[$key]['promotoremodifica'] = $user[1];
                    }

                    if( isset($result[$key]['idModulo']) and isset($result[$key]['tipodocumento']) ) {
                        $attachments = $this->get('doctrine')->getRepository('ETGestBundle:Allegati', 'idetus')->findAttachmentsByDocumentTypeAndModuleId($result[$key]['tipodocumento'], $result[$key]['idModulo']);

                        if($attachments) $result[$key]['allegati'] = $attachments;
                    }
                }

                if(!empty($result)) {
                    $documentsList  = array_merge($documentsList, $result);
                }
            }

            $return['documentsList'] = $documentsList;

            $travel = $this->get('doctrine')->getRepository('ETGestBundle:Viaggi', 'idetus')->findTravelById($request->request->get('vid'));
            if(!$travel) {
                $return['success'] = false;
            }

            foreach($documentService->getConfigByProperty( array('importi') ) as $document) {
                if( isset($document['importi']) and is_array($document['importi']) ) {
                    foreach($document['importi'] as $key => $val) {
                        $alias = explode('|', $val);
                        if(count($alias) > 1)
                            list(, $many['alias']) = explode('|', $val);
                        else
                            $many['alias'] = null;
                        $fieldList[$key] = $many['alias'] ? $many['alias'] : $key;
                    }
                }
            }

            $prices = '';
            $result = array();
            $listDocument = $documentService->getConfigByProperty( array('entity','importi','tabella','eccezioni') );
            foreach($listDocument as $document) {
                if (((isset($document['importi'])) && ($document['importi'])) && (isset($document['tabella'])) && (($document['tabella']) && !isset($document['eccezioni']) || (isset($document['eccezioni']) && (!is_array($document['eccezioni'])) || (!in_array($currentUser->getId(), $document['eccezioni']))))) {

                    foreach($fieldList as $key => $alias) {
                        if(!isset($document['importi'][$key])) {
                            $prices .= "0 AS {$alias}, ";
                        } else {
                            list($many['sign'],) = explode('|', $document['importi'][$key]);
                            switch($many['sign']) {
                                case '+':
                                case '-':
                                $prices .= '(' . $many['sign'] . '1 * ' . 'm.' . strtolower($key) . ') AS ' . $alias . ', ';
                                break;
                                case '':
                                $prices .= 'm.' . strtolower($key) . ', ';
                                break;
                            }
                        }
                    }

                    $tmp = $this->get('doctrine')->getRepository('ETGestBundle:'.$document['entity'], 'idetus')->findModulePricesByTravelId($prices, $request->request->get('vid'));
                    if($tmp) 
                        $result = array_merge($result, $tmp);

                    $prices = '';
                }
            }

            foreach($result as $res) {
                $k = (int)$res['TipoDoc'] . '-' . $res['idModulo'];
                foreach($res as $key => $val) {
                    switch ($key) {
                        case 'TipoDoc':
                            $report[$key][$k] =  $documentService->getConfig((int)$val, 'descBreve');
                            break;
                        case 'idModulo':
                            $invisible[$key][$k] = $val;
                            break;
                        case 'nPartecipanti':
                            if($travel['nPartecipanti'] < $val) {
                                $travel['nPartecipanti'] = $val;
                            }
                            break;
                        case 'partecipanti':
                            if (($tmp = unserialize($val)) && (is_array($tmp))) {
                                if (!is_array($travel['partecipanti'])) {
                                    $travel['partecipanti'] = array();
                                }
                                $travel['partecipanti'] = array_merge_recursive($travel['partecipanti'], $tmp);
                            }
                            break;
                        case 'erroriviaggio':
                            $travel['erroriviaggio'] .= $val;
                            break;
                        case 'acconto':
                            $travel[$key][$k] = $val;
                            break;
                        case 'totale':
                            $travel['totale'] += $val;
                            break;
                        default:
                            if(in_array($key, $fieldList)) {
                                $travel['totale'] += $val;
                            }
                            if(is_numeric($val)) {
                                if($val!=0) {
                                    $report[$key][$k] = round($val, 2);
                                    $invisible['totModulo'][$k] += $val;
                                }
                            } else {
                                $report[$key][$k] = $val;
                            }
                            break;
                    }
                }
            }

            $clientName = $this->get('doctrine')->getRepository('ETGestBundle:Viaggi', 'idetus')->findClientNameByTravelId($request->request->get('vid'));

            $travel['report'] = $report;
            $travel['invisible'] = $invisible;
            $return['clientName'] = $clientName[1];
            $return['travel'] = $travel;
            $return['success'] = true;
        }

        if($request->request->get('vid') and $request->request->get('total')) {
            $payments = $this->get('doctrine')->getRepository('ETGestBundle:Pagamenti', 'idetus')->findPaymentsByTravelId($request->request->get('vid'));
            if($payments) {
                foreach($payments as $key => $payment) {
                    $payments[$key]['dataeffettiva'] = $payment['dataeffettiva']->format('d/m/Y');
                }
            }
            $return['success'] = true;
            $return['payments'] = $payments;
            $return['total'] = (float)$request->request->get('total');
        }

        if($request->request->get('action')) {

            //Delete Payment
            if($request->request->get('action')=='delete') {
                $travel = $this->get('doctrine')->getRepository('ETGestBundle:Viaggi', 'idetus')->findTravelById($request->request->get('vid'));
                $userName = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($travel['codpromotore']);
                $userEmail = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterEmailById($travel['codpromotore']);

                $message = \Swift_Message::newInstance()
                ->setSubject($this->get('translator')->trans('EvolutionTravel - Cancellation payment'))
                ->setFrom(array('assistenza.amministrativa@evolutiontravel.it'=>'Assistenza Amministrativa'))
                ->setTo($userEmail['email'])
                ->setBody(
                    $this->renderView(
                        // app/Resources/views/emails/pagamento_cancellazione_en.html.twig
                        'emails/etgest/pagamento_cancellazione_en.html.twig',
                        array('vid' => $request->request->get('vid'), 'userName' => $userName[1])
                    ),
                    'text/html'
                );

                $this->get('doctrine')->getRepository('ETGestBundle:Pagamenti', 'idetus')->deletePaymentById($request->request->get('idpag'));
                $this->get('mailer')->send($message);

                $return['success'] = true;
            }

            //Insert Payment
            if($request->request->get('action')=='insert') {
                $paymentDate = 
                $newPayment = $this->get('doctrine')->getRepository('ETGestBundle:Pagamenti', 'idetus')->addNewPayment(array(
                                                                                'idViaggio' => (int)$request->request->get('vid'),
                                                                                'dataeffettiva' => new DateTime($request->request->get('dataEffettiva')),
                                                                                'importo' => $request->request->get('importo'),
                                                                                'metodopag' => $request->request->get('metodoPag'),
                                                                                'descrizione' => $request->request->get('descrizione'),
                                                                                'codpromotorecreazione' => $currentUser->getId(),
                                                                                'rimborso' => $request->request->get('rimborso')
                                                                            ));
                if($newPayment) {
                    $userName = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($travel['codpromotore']);
                    $userEmail = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterEmailById($travel['codpromotore']);

                    $message = \Swift_Message::newInstance()
                    ->setSubject($this->get('translator')->trans('EvolutionTravel - New payment registration'))
                    ->setFrom(array('assistenza.amministrativa@evolutiontravel.it'=>'Assistenza Amministrativa'))
                    ->setTo($userEmail['email'])
                    ->setBody(
                        $this->renderView(
                            // app/Resources/views/emails/pagamento_cancellazione_en.html.twig
                            'emails/etgest/pagamento_registrazione_en.html.twig',
                            array('vid' => $request->request->get('vid'), 'userName' => $userName[1], 'total' => $request->request->get('total'), 'importo' => $request->request->get('importo'), 'descrizione' => $request->request->get('descrizione'))
                        ),
                        'text/html'
                    );
                    $this->get('mailer')->send($message);

                    $return['success'] = true;
                    $return['travelId'] = $request->request->get('vid');
                }
            }
        }

        if($request->request->get('idviaggio') or $request->request->get('acconto')) {
            $travelId = $request->request->get('idviaggio')?$request->request->get('idviaggio'):$request->request->get('acconto');
            $travels = array();
            $travels[] = $this->get('doctrine')->getRepository('ETGestBundle:Viaggi', 'idetus')->findTravelById($travelId);
            $countryCodes = $this->get('doctrine')->getRepository('ETGestBundle:Iso', 'idetus')->findAllCountryCode(true);

             if($travels) {
                foreach($travels as $key=>$val) {
                    if($countryCodes and isset($countryCodes['chiave'])) {
                        if( $return = array_search($val['descrizione'], $countryCodes['chiave']) ) {
                            $travels[$key]['descrizione'] = $countryCodes['chiave'][$return];
                        }
                    }

                    $client = $this->get('doctrine')->getRepository('ETGestBundle:Anagrafiche', 'idetus')->findClientNameByRegistryId($val['id_anagrafica']);
                    $travels[$key]['client'] = $client[0];

                    $travels[$key]['statusViaggioAves'] = array_search($val['status'], $statusViaggioAves);
                }

                $return = array(
                    'success' => true,
                    'travels' => $travels
                );
            }
        }

        if($request->request->get('amount')) {
            $clients = $this->get('doctrine')->getRepository('ETGestBundle:Anagrafiche', 'idetus')->findClientsByPaymentAmount($request->request->get('amount'));

            foreach($clients as $key=>$val) {
                $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName((int)$val['codpromotore']);
                $clients[$key]['promoter'] = $user[1];
            }

            $return = array(
                'success' => true,
                'clients' => $clients
            );
        }

        if($request->request->get('datefrom') or $request->request->get('dateto')) {
            $engine = $this->container->get('templating');
            $filters = array('datefrom' => $request->request->get('datefrom'));
            if($request->request->get('dateto')) {
                $filters['dateto'] = $request->request->get('dateto');
            }

            $payments = $this->get('doctrine')->getRepository('ETGestBundle:Pagamenti', 'idetus')->findAllPaymentsFromTo($filters);
            foreach($payments as $key => $payment) {
                $user = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($payments[$key]['codpromotorecreazione']);
                $payments[$key]['promotore'] = $user[1];
            }

            $content = $engine->render('etgest/customer-receipts/payment_search_by_date.html.twig', array('payments'=>$payments));

            $return = array(
                'success' => true,
                'html' => $content
            );
        }

        if($request->request->get('unimport')) {
            $engine = $this->container->get('templating');
            $totalAmount = 0; 
            $bigSum = 0;
            $current = false;

            $payments = $this->get('doctrine')->getRepository('ETGestBundle:Pagamenti', 'idetus')->findPaymentDetailsEtgest();

            foreach($payments as $key => $payment) {
                $payments[$key]['status'] = array_search($payment['status'], $statusViaggioAves);

                if($current!==false && ($payment['metodopag']!==$current)) {
                    $bigSum+=$totalAmount;
                    $totalAmount = 0.0;
                }
                $current = $payment['metodopag'];
                $totalAmount += $payment['importo'];
            }

            $countPayments = $this->get('doctrine')->getRepository('ETGestBundle:Pagamenti', 'idetus')->countPaymentDetailsEtgest();
            $page = $request->request->get('page', 1);
            $size = $request->request->get('size', 50);
            $offset = ((int)$page - 1) * $size;

            $pagination = new Pagination($countPayments['total'], $size, $page, 10, '');
            $payments = $this->get('doctrine')->getRepository('ETGestBundle:Pagamenti', 'idetus')->findPaymentDetailsEtgest($offset, $size);

            $content = $engine->render('etgest/customer-receipts/unimport_payments.html.twig', array('pagination'=>$pagination->renderPaginator(),'payments'=>$payments, 'totalAmount'=>$totalAmount, 'bigSum'=>number_format($bigSum, 2)));

            if($request->request->get('page')) {
                $return = array(
                    'success' => true,
                    'payments' => $payments,
                    'totalAmount' => $totalAmount,
                    'bigSum' => number_format($bigSum, 2)
                );
            } else {
                $return = array(
                    'success' => true,
                    'html' => $content
                );
            }
        }

        $return['pagMethods'] = array(
                'A'=>'ABBUONO ATTIVO',
                'A2'=>'ABBUONO PASSIVO',
                'C'=>'CASSA',
                'B'=>'BANCA 1 - CARIPARO',
                'D'=>'BANCA 2 - UNICREDIT',
                'T'=>'BANCA 3 - ASSEGNI E VAGLIA',
                'I'=>'BANCA 4 - BANCA SELLA',
                'J'=>'BANCA 5 - UNICREDIT 2',
                'H'=>'GCAC - GIROCONTO',
                'R'=>'CARTA DI CREDITO'
            );
        $return['statusViaggioAves'] = array_search(array_flip($statusViaggioAves));

        return new JsonResponse($return);
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
}
