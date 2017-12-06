<?php

namespace OdaliBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller
{
    /**
     * @Route("/usuario",name="create_user_vi", options={"expose"=true})
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {   //dump($request);
        //die;
        return $this->render('OdaliBundle:Usuario:usuario.html.twig');
    }
}
