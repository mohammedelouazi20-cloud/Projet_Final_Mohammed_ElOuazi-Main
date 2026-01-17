<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
   #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


//    #[Route('/welcome', name: 'app_welcome')]
//    public function welcome(): Response
//    {
//        return new Response('welcome');
//    }
//
//        #[Route('/hello/{haytam}', name: 'app_hello')]
//    public function hello(string $haytam): Response
//    {
//        return new Response('hello ' . $haytam);
//    }
//
//
////    #[Route('/name/{name}/{age}', name: 'app_name' , requirements: ['name'=>'[a-zA-Z]+','age'=>'\d+'])]
//    public function name(string $name, int $age): Response
//    {
//        return new Response("hello $name, tu as $age ans");
//    }
}
