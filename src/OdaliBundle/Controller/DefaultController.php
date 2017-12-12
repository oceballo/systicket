<?php

namespace OdaliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {   //dump($request);
        //die;
        return $this->render('OdaliBundle:Default:index.html.twig',array('hola'=>"Hola klk"));
    }
}
