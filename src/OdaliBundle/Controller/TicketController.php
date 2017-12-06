<?php

namespace OdaliBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TicketController extends Controller
{
    /**
     * @Route("/usuario",name="create_ticket_vi", options={"expose"=true})
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {   //dump($request);
        //die;
        return $this->render('OdaliBundle:Ticket:ticket.html.twig');
    }
}
