<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioPonthieuxController extends AbstractController{
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('portfolio_ponthieux/home.html.twig', [
            'controller_name' => 'PortfolioPonthieuxController',
        ]);
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

}

