<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DdivinationController extends AbstractController
{
    #[Route('/ddivination', name: 'app_ddivination')]
    public function index(): Response
    {
        return $this->render('ddivination/index.html.twig', [
            'controller_name' => 'DdivinationController',
        ]);
    }
}
