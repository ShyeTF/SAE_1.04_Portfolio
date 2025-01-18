<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; // Ajout ou vérification
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioPonthieuxController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('portfolio_ponthieux/home.html.twig', [
            'controller_name' => 'PortfolioPonthieuxController',
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('portfolio_ponthieux/cv.html.twig');
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function monportfolio(): Response
    {
        return $this->render('portfolio_ponthieux/portfolio.html.twig', [
            'controller_name' => 'PortfolioPonthieuxController',
        ]);
    }

    #[Route('/passions', name: 'passions')]
    public function passions(): Response
    {
        return $this->render('portfolio_ponthieux/passions.html.twig');
    }

    #[Route('/projets', name: 'projets')]
    public function projets(): Response
    {
        return $this->render('portfolio_ponthieux/projets.html.twig', [
            'controller_name' => 'PortfolioPonthieuxController',
        ]);
    }

    #[Route('/loisirs', name: 'loisirs')]
    public function loisirs(): Response
    {
        return $this->render('portfolio_ponthieux/loisirs.html.twig', [
            'controller_name' => 'PortfolioPonthieuxController',
        ]);
    }

    #[Route('/cv_form', name: 'cv_form')]
    public function cv_form(): Response
    {
        return $this->render('portfolio_ponthieux/cv_form.html.twig', [
            'controller_name' => 'PortfolioPonthieuxController',
        ]);
    }

}