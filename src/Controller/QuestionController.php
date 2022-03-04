<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
public function homepage(){
    return $this->render('question/homepage.html.twig');
}

    /**
     * @Route ("/questions/{slug}", name="app_question_show")
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