<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'first')]
    public function index(): Response
    {
        
        return $this->render('first/index.html.twig', [
            'name'=>'ossama',
            'age'=>24
        ]);
    }
    #[Route('/hello/{name}/{age}' , name:'hello')]
    public function hello(Request $request ,$name,$age): Response
    {
        dd($request);
        return $this->render('first/hello.html.twig',[
            'nom'=>$name,
            'age'=>$age
        ]);
        
    }
}