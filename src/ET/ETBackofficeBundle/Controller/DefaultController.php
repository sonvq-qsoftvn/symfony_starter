<?php

namespace ET\ETBackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ETBackofficeBundle:Default:index.html.twig');
    }
}
