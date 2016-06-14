<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IncentiveController extends Controller
{
    
    /**
     * Rewrite Incentive Ita page: amministrazione/etgest/incentive.php
     * 
     * @Route("/etgest/incentive/ita", name="etgest_incentive_ita")
     */
    public function incentiveItaAction()
    {        
        return $this->render('etgest/incentive-ita.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..')
        ]);
    }
    
    /**
     * Rewrite Incentive Malta page: amministrazione/etgest/incentivemalta.php
     * 
     * @Route("/etgest/incentive/malta", name="etgest_incentive_malta")
     */
    public function incentiveMaltaAction(Request $request)
    {        
        $date = $request->query->get('date', date("Y-m"));
        
        $userRepository = $this->get('doctrine')
                ->getRepository('\ET\UserBundle\Entity\Users', 'agenti'); 
        
        $incentiveArray = $this->get('doctrine')
                ->getRepository('\ET\ETGestBundle\Entity\IncentivePerc', 'idetus')
                ->getDetailVP($date, $userRepository);     
        
        return $this->render('etgest/incentive-malta.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'incentiveArray' => $incentiveArray
        ]);
    }
    
}
