<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/marathon', name: 'workinprogress')]
    public function index(): Response
    {
        return $this->render('workinprogress/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
