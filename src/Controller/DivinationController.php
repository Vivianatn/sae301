<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DivinationController extends AbstractController
{
    #[Route('/divination', name: 'app_divination')]
    public function index(): Response
    {
        return $this->render('divination/index.html.twig', [
            'controller_name' => 'DivinationController',
        ]);
    }
}
