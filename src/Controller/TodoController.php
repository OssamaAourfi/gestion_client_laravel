<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        if($session->has('todos')){
            $todos=[
                'achat'=>'clé usb',
                'cours' => 'Finalisez mon cours',
                'correction' => 'corrigez mes examens'
            ];
            $session->set('todos',$todos);
        }
        
        return $this->render('todo/index.html.twig');
    }
}