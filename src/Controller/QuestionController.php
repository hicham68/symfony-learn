<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
public function  show(){
    return new Response('future page of questions');
}
}