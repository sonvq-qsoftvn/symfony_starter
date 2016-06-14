<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class TaskController extends Controller
{
    
    /**
     * Rewrite Attività da Svolgere (Performing tasks) in Client List amministrazione/etgest/index.php
     * 
     * @Route("/etgest/tasks", name="etgest_client_tasks")
     */
    public function indexAction()
    {        
        return $this->render('etgest/tasks.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..')
        ]);
    }
    
    /**
     * Ajax to get tasks list 
     * 
     * @Route("/etgest/ajax-task-list/", name="etgest_task_list_ajax")
     * @Method("GET")
     */
    public function ajaxAction(Request $request)
    {
        // Get parameter from get request including page, size, column, filter
        $page = $request->query->get('page', 0);
        $size = $request->query->get('size', 50);        
        $columnSort = $request->query->get('column', null);      
        $columnFilter = $request->query->get('filter', null);                          
        $currentDate = date('Ymd');
        
        // TODO: currently hardcode need to fix like the old code
        $arrayTipoPromemoria = array("0", "2", "4", "5");
        
        // Initial the query total count for pagination
        $queryTotalCount = $this->get('doctrine')
            ->getRepository('\ET\ETGestBundle\Entity\Promemoria', 'idetus')
            ->createQueryBuilder('a')
//            ->leftJoin('a.viaggi', 'r')
            ->select('COUNT(a.idPromemoria)')
            ->where("a.status = 0")
            ->andWhere("a.datainizio <= $currentDate")
            ->andWhere("(a.datafine='00000000') OR (a.datafine >= $currentDate)")
            ->andWhere("a.tipopromemoria NOT IN (:arrayTipoPromemoria)");

        // Initial the query get client for table sorter
        $queryGetTasks = $this->get('doctrine')
            ->getRepository('\ET\ETGestBundle\Entity\Promemoria', 'idetus')
            ->createQueryBuilder('a')
            ->setMaxResults($size)
            ->setFirstResult($page * $size)
            ->where("a.status = 0")
            ->andWhere("a.datainizio <= $currentDate")
            ->andWhere("(a.datafine='00000000') OR (a.datafine >= $currentDate)")
            ->andWhere("a.tipopromemoria NOT IN (:arrayTipoPromemoria)");
        
        $queryTotalCount->setParameter('arrayTipoPromemoria', $arrayTipoPromemoria);                
        $queryGetTasks->setParameter('arrayTipoPromemoria', $arrayTipoPromemoria);   
                
        // Check if there is sort variable in the get request, then add the orderby to get client query
        $arraySortField = array ('datainizio', 'datainizioviaggio', 'idAnagrafica', 'titolo', 'tipopromemoria');
        $arraySortOrder = array('desc', 'asc');
        if(is_array($columnSort) && count($columnSort) > 0) {
            foreach ($columnSort as $key => $value) {
                $queryGetTasks->orderBy('a.'.$arraySortField[$key], $arraySortOrder[$value]);                
            }
        }
        
        // Check if there is filter variable in the get request, then add where LIKE filter  to client and total count query
        $arrayFilterField = array ('datainizio', 'datainizioviaggio', 'idAnagrafica', 'titolo', 'tipopromemoria');
        if(is_array($columnFilter) && count($columnFilter) > 0) {
            foreach ($columnFilter as $key => $value) {                
                $fieldForFilter = $arrayFilterField[$key];
                // If filter by codpromotore or codpromotoreproprietario, firstly, get the promotoreId from users table by the search value
                // secondly, add the query where in to client and get total query
                if ($fieldForFilter == 'datainizio') {
                    if (strpos($value, '<=') !== false) {
                        // case <= a date
                        $endTimeStamp = substr($value, 2, 10);
                        $endDate = date("Y-m-d 00:00:00", $endTimeStamp);
                        $queryTotalCount->andWhere("a.$fieldForFilter <= :placeholder")->setParameter('placeholder', $endDate);                
                        $queryGetTasks->andWhere("a.$fieldForFilter <= :placeholder")->setParameter('placeholder', $endDate); 
                    } else if (strpos($value, '>=') !== false) {
                        // case >=
                        $startTimeStamp = substr($value, 2, 10);                        
                        $startDate = date("Y-m-d 00:00:00", strtotime(date("Y-m-d 00:00:00", $startTimeStamp) . "+1 days"));                        
                        $queryTotalCount->andWhere("a.$fieldForFilter >= :placeholder")->setParameter('placeholder', $startDate);                
                        $queryGetTasks->andWhere("a.$fieldForFilter >= :placeholder")->setParameter('placeholder', $startDate);                         
                    } else {
                        // case A - B
                        $arrayStartEndTimeStamp = explode(" - ", $value);
                        $startTimeStamp = substr($arrayStartEndTimeStamp[0], 0, 10);   
                        $startDate = date("Y-m-d 00:00:00", strtotime(date("Y-m-d 00:00:00", $startTimeStamp) . "+1 days"));
                        $endTimeStamp = substr($arrayStartEndTimeStamp[1], 0, 10);
                        $endDate = date("Y-m-d 00:00:00", $endTimeStamp);

                        $queryTotalCount->andWhere("a.$fieldForFilter BETWEEN :placeholder1 AND :placeholder2")
                                ->setParameter('placeholder1', $startDate)
                                ->setParameter('placeholder2', $endDate);                
                        $queryGetTasks->andWhere("a.$fieldForFilter BETWEEN :placeholder1 AND :placeholder2")
                                ->setParameter('placeholder1', $startDate)
                                ->setParameter('placeholder2', $endDate);                         
                    }
                } elseif($fieldForFilter == 'datainizioviaggio') {
                    // Query viaggi by date range
                    $arrayQueryViaggiId = $this->get('doctrine')
                        ->getRepository('\ET\ETGestBundle\Entity\Viaggi', 'idetus')
                        ->getArrayViaggiIdByField('datainizioviaggio', $value);
                                 
                    $arrayViaggiId = array();
                    if (($arrayQueryViaggiId != null) && (count($arrayQueryViaggiId) > 0)) {
                        foreach ($arrayQueryViaggiId as $singleViaggiArray) {
                            $arrayViaggiId[] = $singleViaggiArray['idViaggio'];
                        }
                    }
                    
                    if (count($arrayViaggiId) > 0) {
                        $queryTotalCount->andWhere("a.idViaggio IN (:idViaggio)")->setParameter('idViaggio', $arrayViaggiId);              
                        $queryGetTasks->andWhere("a.idViaggio IN (:idViaggio)")->setParameter('idViaggio', $arrayViaggiId);
                    }
                    
                } elseif ($fieldForFilter == 'idAnagrafica') {
                    $arrayResultClientId = $this->get('doctrine')
                        ->getRepository('\ET\ETGestBundle\Entity\Anagrafiche', 'idetus')
                        ->searchClientIdByName($value);
                                            
                    $arrayClientId = array();
                    
                    if (($arrayResultClientId != null) && (count($arrayResultClientId) > 0)) {
                        foreach ($arrayResultClientId as $singleClient) {
                            $arrayClientId[] = $singleClient['idAnagrafica'];
                        }
                    }
                    
                    if (count($arrayClientId) > 0) {
                        $queryTotalCount->andWhere("a.idAnagrafica IN (:idAnagrafica)")->setParameter('idAnagrafica', $arrayClientId);              
                        $queryGetTasks->andWhere("a.idAnagrafica IN (:idAnagrafica)")->setParameter('idAnagrafica', $arrayClientId);
                    }
                    
                } else {                
                    $queryTotalCount->andWhere("a.$fieldForFilter LIKE :placeholder")->setParameter('placeholder', '%'.$value.'%');                
                    $queryGetTasks->andWhere("a.$fieldForFilter LIKE :placeholder")->setParameter('placeholder', '%'.$value.'%');   
                }
            }            
        }
        
        $totalCount = $queryTotalCount->getQuery()->getSingleScalarResult();
        
        $tasks = $queryGetTasks->getQuery()->getResult(); 
        
        $arrayColumn = array();
        $arraySingleColumn = array();
        $arrayViaggiId = array();
        $arrayClientId = array();
        $arrayType = array(
            $this->get('translator')->trans('Personale'),
            $this->get('translator')->trans('Sollecito saldo'),
            $this->get('translator')->trans('Riscontro vacanza'),
            $this->get('translator')->trans('Booking'),
            $this->get('translator')->trans('ET-TICKET Richiesta'),
            $this->get('translator')->trans('ET-TICKET Richiesta'),
            $this->get('translator')->trans('Sollecito saldo automatico cliente')
        );
        
        foreach ($tasks as $singleTask) {
            
            $startDateObject = $singleTask->getDatainizio();
            $startDateString = $startDateObject->format('d/m/Y');            
            $textClass = "";
            
            if ($singleTask->getTipoPromemoria() == 1) {
                $textClass = 'text-danger';
            } elseif ($singleTask->getTipoPromemoria() == 2) {
                $textClass = 'text-success';
            } else {
                $textClass = "";    
            }                        
            
            $arraySingleColumn['StartDate'] = $startDateString;           
            $arraySingleColumn['StartTravelDate'] = $singleTask->getIdViaggio();
            $arraySingleColumn['Title'] = "<span class='$textClass'>" . $singleTask->getTitolo() . '</span>';            
            $arraySingleColumn['Client'] = $singleTask->getIdAnagrafica();
            $arraySingleColumn['Type'] = "<span class='$textClass'>" . $arrayType[$singleTask->getTipoPromemoria()]  . '</span>';
            
            if(!in_array($singleTask->getIdViaggio(), $arrayViaggiId) && ($singleTask->getIdViaggio() != 0)) {
                $arrayViaggiId[] = $singleTask->getIdViaggio();
            }
            
            if(!in_array($singleTask->getIdAnagrafica(), $arrayClientId) && ($singleTask->getIdAnagrafica() != "")) {
                $arrayClientId[] = $singleTask->getIdAnagrafica();
            }
            
            $arrayColumn[] = $arraySingleColumn;
        }                      
        
        // Get viaggi
        $arrayViaggiDate = array();
        $arrayViaggi = $this->get('doctrine')
            ->getRepository('\ET\ETGestBundle\Entity\Viaggi', 'idetus')
            ->getViaggiArrayById($arrayViaggiId);                
        
        if (($arrayViaggi != null) && (count($arrayViaggi) > 0)) {
            foreach ($arrayViaggi as $key => $singleViaggi) {
                $arrayViaggiDate[$singleViaggi['idViaggio']] = $singleViaggi['datainizioviaggio'];
            }   
        }        
        
        // Get client
        $arrayClientName = array();
        $arrayClient = $this->get('doctrine')
            ->getRepository('\ET\ETGestBundle\Entity\Anagrafiche', 'idetus')
            ->getClientById($arrayClientId);        
        
        if (($arrayClient != null) && (count($arrayClient) > 0)) {
            foreach ($arrayClient as $key => $singleClient) {
                $arrayClientName[$singleClient['idAnagrafica']] = $singleClient['cognome'] . " " . $singleClient['nome'];
                if (($arrayClientName[$singleClient['idAnagrafica']] == " ") && ($singleClient['ragionesociale'] != "")) {
                    $arrayClientName[$singleClient['idAnagrafica']] = $singleClient['ragionesociale'];
                }
            }   
        }        
        
        foreach ($arrayColumn as &$singleColumn) {
            $viaggiId = $singleColumn['StartTravelDate'];
            $clientId = $singleColumn['Client'];

            $singleColumn['StartTravelDate'] = isset($arrayViaggiDate[$viaggiId]) ? $arrayViaggiDate[$viaggiId]->format('d/m/Y') : '';
            $singleColumn['Client'] = isset($arrayClientName[$clientId]) ? $arrayClientName[$clientId] : '';
        }    
        
        $arrayHeaders = array("StartDate", "StartTravelDate", "Client", "Title", "Type");
        $data = [
            'total_rows' => $totalCount,
            'rows' => $arrayColumn,
            'headers' => $arrayHeaders
        ];

        return new JsonResponse($data);
    }
    
}
