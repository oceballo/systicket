<?php

namespace OdaliBundle\Controller;

use DateTime;
use OdaliBundle\Entity\user;
use OdaliBundle\Form\userType;
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
     * @Route("/list", name="users_list")
     */
    public function listUsersAction(Request $request)
    {
        $users = $this->getDoctrine()->getRepository(user::class)->findAll();
        return $this->render('OdaliBundle:Usuario:user_list.html.twig', array(
            'users' => $users
        ));
    }


    /**
     * @Route("/", name="lista_usuario")
     * @Method("GET")
     * @param Request $request
     * @return JsonResponse
     */
    public function indexAction(Request $request)
    {
        $users = $this->getDoctrine()->getRepository(user::class)->findAll();
        $usersD = json_decode($this->get('serializer')->serialize($users, 'json'), true);

        return new JsonResponse($usersD);
    }



    /**
     * @Route("/{id}", name="get_usuario", requirements={"id"="\d+"} )
     * @Method("GET")
     * @param Request $request
     * @param User $user
     * @return JsonResponse
     */
    public function getUsuario(Request $request, user $user)
    {
        $userJ = json_decode($this->get('serializer')->serialize($user, 'json'), true);
        return new JsonResponse($userJ);
    }

    /**
     * @Route("/{id}/edit", name="edit_usuario", requirements={"id"="\d+"} )
     * @Method("GET")
     * @param Request $request
     * @param User $user
     * @return JsonResponse
     */
    public function editUsuario(Request $request, user $user)
    {
        return $this->render('OdaliBundle:Usuario:user_edit.html.twig', array(
            'user' => $user
        ));
    }




    /**
     * @Route("/",name="guardar_usuario", options={"expose"=true})
     * @Method({"POST"})
     * @return JsonResponse
     */
    public function postUser(Request $request)
    {

        //dump($request);
        //die;

        $data = json_decode($request->getContent(), true);
        //dump($data);
        //die;

        $user = new user();
        $form = $this->createForm(userType::class, $user);

        $form->submit($data);
        $user->setFecharegistro(new DateTime());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            //dump("Es valido");
            //dump($user);
        } else {
            dump("No es valido");
            //dump($this->>getFormErrors($form));
        }

        $newUser = json_decode($this->get('serializer')->serialize($user, 'json'), true);
        return new JsonResponse($newUser);
    }


}
