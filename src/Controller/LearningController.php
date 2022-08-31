<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/learning', name: 'app_learning')]
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    #[Route('/about-me', name: 'app_about_me')]
    public function aboutMe(): Response
    {
        $greeting = "lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut";

        return $this->render('learning/example.html.twig', [
            'name' => 'Cédric',
            'lorem' => $greeting,
        ]);
    }

}