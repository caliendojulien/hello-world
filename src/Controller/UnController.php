<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UnController extends AbstractController
{
    #[Route('/un', name: 'app_un')]
    public function index(): Response
    {
        return $this->render('un/index.html.twig', [
            'controller_name' => 'UnController',
        ]);
    }
}
