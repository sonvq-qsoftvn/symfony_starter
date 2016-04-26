<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/etgest/", name="etgest_client_list")
     */
    public function indexAction()
    {
        // Retrieves a repository managed by the "default" em
        $client = $this->get('doctrine')
            ->getRepository('ETGestBundle:Anagrafiche')
            ->findAll();       
        
        return $this->render('dashboard/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'client' => $client
        ]);
    }
}
