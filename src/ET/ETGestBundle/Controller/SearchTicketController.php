<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Helpers\Utils;

class SearchTicketController extends Controller
{
    
    /**
     * Rewrite page search ticket: amministrazione/etgest/cerca_ticket.php
     * 
     * @Route("/etgest/search_ticket", name="etgest_ticket_search")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('etgest/search_ticket.html.twig', array(
                'formToken' => Utils::randomString(10)
            ));
    }

    /**
     * Ajax to get data for search ticket page, rewrite page amministrazione/etgest/cerca_ticket.php
     * 
     * @Route("/etgest/search_ticket/ajax", name="etgest_ticket_ajax_search")
     * @Method("POST")
     */
    public function ajaxAction(Request $request)
    {
        if($request->request->get('form_token')) {

            if($request->request->get('request_code')) {
                $filters = array();

                if($request->request->get('request_code') and $request->request->get('request_code')!='') {
                    $filters['requestCode'] = trim($request->request->get('request_code'));
                }

                $requests = $this->get('doctrine')->getRepository('ETTicketBundle:Request', 'etticket')->findRequestBy($filters, true);
                foreach($requests as $key => $val) {
                    $requests[$key]['requestInputPromotore'] = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($requests[$key]['requestPromotoreid']);
                    $requests[$key]['requestAssignedPromotore'] = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($requests[$key]['requestAssignedPromotoreId']);
                    $requests[$key]['requestReferencePromoter'] = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($requests[$key]['requestPrpid']);
                    $requests[$key]['requestTravelId'] =  $this->get('doctrine')->getRepository('ETGestBundle:Ticket', 'idetus')->findTicketsBy(array('idTicket'=>(int)$requests[$key]['requestId']), true);
                    $requests[$key]['requestChangeLogs'] = $this->get('doctrine')->getRepository('ETTicketBundle:RequestChangelog', 'etticket')->findChangeLogsBy(array('requestId'=>(int)$requests[$key]['requestId']), true);

                    foreach($requests[$key]['requestChangeLogs'] as $key2 => $log) {
                        if($log['req_modifiedField'] == 'assignment_reason') {
                            $requests[$key]['requestChangeLogs'][$key2]['assigedPromotore'] = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName((int)$log['req_newValue']);
                        }
                    }
                }

                $requests['success'] = true;

                return new JsonResponse($requests);
            }

        }

        return new JsonResponse(array(
            'success' => false
        ));
    }

}
