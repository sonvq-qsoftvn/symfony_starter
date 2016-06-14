<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Helpers\Pagination;

class ClientController extends Controller
{
    
    /**
     * Ajax to get client list for page (amministrazione/etgest/index.php)
     * 
     * @Route("/etgest/ajax-client-list/", name="etgest_client_list_ajax")
     * @Method("GET")
     */
    public function ajaxAction(Request $request)
    {
        // Get parameter from get request including page, size, column, filter
        $page = $request->query->get('page', 0);
        $size = $request->query->get('size', 50);        
        $columnSort = $request->query->get('column', null);      
        $columnFilter = $request->query->get('filter', null);                          
        
        // Initial the query total count for pagination
        $queryTotalCount = $this->get('doctrine')
            ->getRepository('ETGestBundle:Anagrafiche', 'idetus')
            ->createQueryBuilder('a')
            ->select('COUNT(a.idAnagrafica)');                     

        // Initial the query get client for table sorter
        $queryGetClient = $this->get('doctrine')
            ->getRepository('ETGestBundle:Anagrafiche', 'idetus')
            ->createQueryBuilder('a')
            ->setMaxResults($size)
            ->setFirstResult($page * $size);            
        
        // Check if there is sort variable in the get request, then add the orderby to get client query
        $arraySortField = array ('ragionesociale', 'cognome', 'nome', 'email', 'codpromotore', 'codpromotoreproprietario', 'sesso');
        $arraySortOrder = array('desc', 'asc');
        if(is_array($columnSort) && count($columnSort) > 0) {
            foreach ($columnSort as $key => $value) {
                $queryGetClient->orderBy('a.'.$arraySortField[$key], $arraySortOrder[$value]);                
            }
        }
        
        // Check if there is filter variable in the get request, then add where LIKE filter  to client and total count query
        $arrayFilterField = array ('ragionesociale', 'cognome', 'nome', 'email', 'codpromotore', 'codpromotoreproprietario', 'sesso');
        if(is_array($columnFilter) && count($columnFilter) > 0) {
            foreach ($columnFilter as $key => $value) {
                $fieldForFilter = $arrayFilterField[$key];
                // If filter by codpromotore or codpromotoreproprietario, firstly, get the promotoreId from users table by the search value
                // secondly, add the query where in to client and get total query
                if ($fieldForFilter == 'codpromotore' || $fieldForFilter == 'codpromotoreproprietario') {
                    // search codpromotore by name first to find array codpromotore
                    // Get promotore name
                    $arrayResultPromotoreId = $this->get('doctrine')
                        ->getRepository('ETUserBundle:Users', 'agenti')
                        ->searchPromoterByName($value);
                                                            
                    $arrayPromotoreId = array();
                    if (($arrayResultPromotoreId != null) && (count($arrayResultPromotoreId) > 0)) {
                        foreach ($arrayResultPromotoreId as $key => $singleResult) {
                            $arrayPromotoreId[] = $singleResult['id'];
                        }                          
                    }
                    $queryTotalCount->andWhere("a.$fieldForFilter IN (:$fieldForFilter)")->setParameter($fieldForFilter, $arrayPromotoreId);                
                    $queryGetClient->andWhere("a.$fieldForFilter IN (:$fieldForFilter)")->setParameter($fieldForFilter, $arrayPromotoreId);                                   
                } else {
                    $queryTotalCount->andWhere("a.$fieldForFilter LIKE :placeholder")->setParameter('placeholder', '%'.$value.'%');                
                    $queryGetClient->andWhere("a.$fieldForFilter LIKE :placeholder")->setParameter('placeholder', '%'.$value.'%');   
                }               
            }            
        }
        
        $totalCount = $queryTotalCount->getQuery()->getSingleScalarResult();
        
        $clients = $queryGetClient->getQuery()->getResult(); 
        
        $arrayColumn = array();
        $arraySingleColumn = array();
        $arrayCodPromotoreId = array();
        
        foreach ($clients as $singleClient) {

            $arraySingleColumn['BusinessName'] = $singleClient->getRagioneSociale();
            $arraySingleColumn['Lastname'] = $singleClient->getCognome();
            $arraySingleColumn['Firstname'] = $singleClient->getNome();
            $arraySingleColumn['Email'] = '<a href="mailto:' . $singleClient->getEmail() . '">' . $singleClient->getEmail() . '</a>';
            $clientGender = '';
            if ($singleClient->getSesso() == 'M') {
                $clientGender = 'Male';
            } else if ($singleClient->getSesso() == 'F') {
                $clientGender = 'Female';
            }
            
            $arraySingleColumn['Assignee'] = $singleClient->getCodpromotore();
            if(!in_array($singleClient->getCodpromotore(), $arrayCodPromotoreId) && ($singleClient->getCodpromotore() != 0)) {
                $arrayCodPromotoreId[] = $singleClient->getCodpromotore();
            }
            
            $arraySingleColumn['Owner'] = $singleClient->getCodPromotoreProprietario();
            if(!in_array($singleClient->getCodPromotoreProprietario(), $arrayCodPromotoreId) && ($singleClient->getCodPromotoreProprietario() != 0)) {
                $arrayCodPromotoreId[] = $singleClient->getCodPromotoreProprietario();
            }
            
            $arraySingleColumn['Gender'] = $clientGender;
            
            $arrayColumn[] = $arraySingleColumn;
        }
                
        $arrayPromoter = $this->get('doctrine')
                ->getRepository('ETUserBundle:Users', 'agenti')
                ->getPromotoreListByArrayId($arrayCodPromotoreId);          
        
        $arrayPromotoreName = array();
        foreach ($arrayPromoter as $singlePromoter) {
            $arrayPromotoreName[$singlePromoter['id']] = $singlePromoter['contrattoNome'] . ' ' . $singlePromoter['contrattoCognome'];
        }
        $arrayPromotoreName[0] = " ";

        foreach ($arrayColumn as &$singleColumn) {
            $promotoreId = $singleColumn['Assignee'];
            $promotoreProprietarioId = $singleColumn['Owner'];

            $singleColumn['Assignee'] = isset($arrayPromotoreName[$promotoreId]) ? $arrayPromotoreName[$promotoreId] : '';
            $singleColumn['Owner'] = $arrayPromotoreName[$promotoreProprietarioId];
        }        
        
        $arrayHeaders = array("Business Name", "Lastname", "Firstname", "Email", "Assignee", "Owner", "Gender");
        $data = [
            'total_rows' => $totalCount,
            'rows' => $arrayColumn,
            'headers' => $arrayHeaders
        ];

        return new JsonResponse($data);
    }

    /**
     * Ajax to search Client, rewrite the page amministrazione/etgest/cerca.php
     * 
     * @Route("/etgest/search_client", name="etgest_client_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $currentUser = $this->container->get('security.token_storage')->getToken()->getUser();
        $templateParameters = array('base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'));

        $promoters = $this->get('doctrine')
                          ->getRepository('ETUserBundle:Users')
                          ->findPromotersNotInHoliday();

        if(isset($_GET['submitSearchClient'])) {
            $queryData = $request->query->all();
            $filters = array();
            $codpromotore = array();
            $codpromotoreproprietario = array();
            $queryParams = '';
            $currentPage = $request->query->get('page', 1);
            $perpage = (int) $request->query->get('perpage', 100);

            if(isset($queryData['page']) and !empty($queryData['page'])) {
                unset($queryData['page']);
            }

            unset($queryData['perpage']);

            $queryData = array_unique($queryData);

            if($request->query->get('name') and $request->query->get('name')!='') {
                $filters['nome'] = trim($request->query->get('name'));
            }
            if($request->query->get('lastname') and $request->query->get('lastname')!='') {
                $filters['cognome'] = trim($request->query->get('lastname'));
            }
            if($request->query->get('email') and $request->query->get('email')!='') {
                $filters['email'] = trim($request->query->get('email'));
                $filters['email2'] = trim($request->query->get('email'));
            }
            if($request->query->get('ragioneSociale') and $request->query->get('ragioneSociale')!='') {
                $filters['ragionesociale'] = trim($request->query->get('ragioneSociale'));
            }
            if($request->query->get('ana_codPromotore') and $request->query->get('ana_codPromotore')!='') {
                $filters['codpromotore'] = (int) trim($request->query->get('ana_codPromotore'));
            }
            if($request->query->get('ana_codPromotoreProprietario') and $request->query->get('ana_codPromotoreProprietario')!='') {
                $filters['codpromotoreproprietario'] = (int) trim($request->query->get('ana_codPromotoreProprietario'));
            }
            if($request->query->get('phone') and $request->query->get('phone')!='') {
                $filters['telcasa'] = trim($request->query->get('phone'));
                $filters['cell'] = trim($request->query->get('phone'));
                $filters['telluff'] = trim($request->query->get('phone'));
                $filters['fax'] = trim($request->query->get('phone'));
            }
            if($request->query->get('viaggi_id') and $request->query->get('viaggi_id')!='') {
                $filters['idViaggio'] = $request->query->get('viaggi_id');
                $filters['tipologia'] = 'Importazione Lotus';
            }

            $clients = $this->get('doctrine')->getRepository('ETGestBundle:Anagrafiche', 'idetus')->findRegisteredClientsBy($filters, ($currentPage-1)*$perpage, $perpage);
            foreach($clients as $key => $val) {
                $clients[$key]['assegnatario'] = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($clients[$key]['codpromotore']);
                $clients[$key]['proprietario'] = $this->get('doctrine')->getRepository('ETUserBundle:Users')->findPromoterContractName($clients[$key]['codpromotoreproprietario']);
            }
            $countClient = $this->get('doctrine')->getRepository('ETGestBundle:Anagrafiche', 'idetus')->countTotalClient($filters);

            $index = 0;
            foreach($queryData as $key=>$val) { 
                $index++;
                $queryParams .= $key.'='.$val;
                if($index<count($queryData)) $queryParams .= '&';
            }

            $templateParameters['clients'] = $clients;

            $pagination = new Pagination($countClient, $perpage, $currentPage, 10, $queryParams);
            $templateParameters['pagination'] = $pagination->renderPaginator();

        }

        $templateParameters['promoters'] = $promoters;

        $contracts = $this->get('doctrine')
                          ->getRepository('ETGestBundle:AppaltiClienteTestate', 'idetus')
                          ->findRecipientUserContracts($currentUser->getId());

        $senderPromoters = array();
        foreach ($contracts as $contract) {
            $senderPromoters[$contract->getCodpromotoremittente()] = $this->get('doctrine')
                                                                          ->getRepository('ETUserBundle:Users')
                                                                          ->findPromotersRegisteredName($contract->getCodpromotoremittente());
        }
        $templateParameters['senderPromoters'] = $senderPromoters;

        return $this->render('etgest/search_client.html.twig', $templateParameters);
    }

}
