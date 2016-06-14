<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller
{
    
    /**
     * Rewrite page Booking Management - GESTIONE PRENOTAZIONI ETGEST (amministrazione/etgest/booking_v2.php)
     * 
     * @Route("/etgest/booking-management", name="etgest_booking_management")
     */
    public function indexAction(Request $request)
    {          
        $statusModulo = $this->container->getParameter('statusModulo');
        echo '<pre>';
        var_dump($statusModulo);die;
        return $this->render('etgest/booking-management.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),                         
        ]);
    }
    
}
