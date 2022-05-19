<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/', name: 'app_project')]
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    #[Route('/start', name: 'start')]
    public function start(): Response
    {
        return $this->render('project/start.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    #[Route('/gallery', name: 'gallery')]
    public function gallary(): Response
    {
        return $this->render('project/gallery.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}
