<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommissionController extends Controller
{
    
    /**
     * Rewrite page Provvigioni (amministrazione/etgest/provvigioni.php)
     * 
     * @Route("/etgest/commissions", name="etgest_commissions")
     */
    public function indexAction(Request $request)
    {    
        $date = $request->query->get('date', date("y-m"));
        
        $currentDate = \DateTime::createFromFormat('y-m', $date)->format('Y-m-d');
        
        $nextMonthTimestamp = strtotime("$currentDate +1 month");
        $previousMonthTimestamp = strtotime("$currentDate -1 month");

        $nextMonth = date('m/Y', $nextMonthTimestamp);
        $nextMonthQuery = date('y-m', $nextMonthTimestamp);
        $prevMonth = date('m/Y', $previousMonthTimestamp);
        $prevMonthQuery = date('y-m', $previousMonthTimestamp);
        
        
        $userRepository = $this->get('doctrine')
                ->getRepository('\ET\UserBundle\Entity\Users', 'agenti');        
        
        $commissionsArray = $this->get('doctrine')
                ->getRepository('\ET\ETGestBundle\Entity\Provvigioni', 'idetus')
                ->getProvvigioniList($date, $userRepository);        
        
        return $this->render('etgest/commissions.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'commissionsArray' => $commissionsArray,
            'date' => $date,
            'nextMonth' => $nextMonth,
            'nextMonthQuery' => $nextMonthQuery,
            'prevMonth' => $prevMonth,
            'prevMonthQuery' => $prevMonthQuery                
        ]);
    }
    
}
