<?php

namespace OdaliBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/usuario")
 */

class UsuarioController extends Controller
{
    /**
     * @Route("/",name="guardar_usuario", options={"expose"=true})
     * @Method({"POST"})
     * @return JsonResponse
     */
    public function postUser(Request $request)
    {

        dump($request);
        die;

        $data = json_decode($request->getContent(), true);
        dump($data);
        die;

        $user = new user();
        $form = $this->createForm(userType::class, $user);

        $form->submit($data);
        $user->setFecharegistro(new \DateTime());
        if ($form->isValid()) {
            $em = $this->$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            //dump("Es valido");
            //dump($user);
        } else {
            //dump("No es valido");
            //dump($this->>getFormErrors($form));
        }

        $newUser = json_decode($this->get('serialize')->serialize($user, 'json'), true);
        return new JsonResponse($newUser);
    }
}
