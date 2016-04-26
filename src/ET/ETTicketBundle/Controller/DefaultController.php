<?php

namespace ET\ETTicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ETTicketBundle:Default:index.html.twig');
    }
}
