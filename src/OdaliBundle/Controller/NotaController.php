<?php

namespace OdaliBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NotaController extends Controller
{
    /**
     * @Route("/nota",name="create_nota_vi", options={"expose"=true})
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {   //dump($request);
        //die;
        return $this->render('OdaliBundle:Nota:nota.html.twig');
    }
}
