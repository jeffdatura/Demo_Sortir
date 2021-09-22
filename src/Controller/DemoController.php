<?php

namespace App\Controller;

use App\Repository\SortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/", name="demo_liste")
     */
    public function liste(SortieRepository $sortieRepository): Response
    {
        return $this->render('demo/index.html.twig', [
            'liste' => $sortieRepository->listeSortie(),
        ]);
    }
}
