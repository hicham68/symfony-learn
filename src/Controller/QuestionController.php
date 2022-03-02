<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
public function homepage(){
    return new Response('hello');
}

    /**
     * @Route ("/questions/{slug}")
     */
public function  show($slug){

    $answers=[
        'reponse 1',
        'reponse 2',
        'reponse 3',
    ];
    return $this->render('question/show.html.twig', [
        'question'=> ucwords(str_ireplace('-',' ',$slug)),
        'answers'=>$answers
    ]);
}
}