<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/useradd', name: 'app_user_add')]
//    public function addUser(): Response
//    {
//        $user =new user;
//        $userForm = $this->createForm(User::class,data:$user);
//
//        return $this->render('user/index.html.twig', [
//            'userForm' => $userForm->createView(),
//            'controller_name' => 'UserController',
//        ]);
//    }
    public function addUser(Request $request): Response
    {
        $user = new User();
        $submitted = false;
        $userForm = $this->createForm(UserType::class, $user);
        $userForm->handleRequest($request);

        //dump($userForm->isSubmitted());
        //dump($userForm->isValid());
        //dump($request->request->all());

        return $this->render('user/index.html.twig', [
            'userForm' => $userForm->createView(),
            'user' => $user,
            'submitted' => $submitted,
            'controller_name' => 'UserController',
            'view_name' => 'User View'
        ]);
    }


}
