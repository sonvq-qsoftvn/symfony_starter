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

class DefaultController extends Controller
{
    
    /**
     * Rewrite Client List amministrazione/etgest/index.php
     * 
     * @Route("/etgest/", name="etgest_client_list")
     */
    public function indexAction()
    {        
        return $this->render('etgest/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..')
        ]);
    }
    
}
