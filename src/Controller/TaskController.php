<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TaskController extends AbstractController
{

    #[Route('/task', name: 'app_task')]
    public function index(Request $request): Response
    {
        $name = $request->request->get('name');
        $date = $request->request->get('date');
        $task = $request->request->get('task');

        return $this->render('task/index.html.twig', [
            'name' => $name,
            'date' => $date,
            'task' => $task,
            'controller_name' => 'TaskController',
            'view_name' => 'Task View'
        ]);
    }
}
