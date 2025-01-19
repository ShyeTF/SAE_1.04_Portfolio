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

    
    #[Route('/cv_form', name: 'form_page', methods: ['GET'])]
    public function form(): Response
    {
        // Affiche le formulaire
        return $this->render('portfolio_ponthieux/cv_form.html.twig');
    }

    #[Route('/download', name: 'cv_download', methods: ['POST'])]
public function download(Request $request): Response
{
    // Récupération des données du formulaire
    $lastName = $request->request->get('last_name'); // Nom
    $firstName = $request->request->get('first_name'); // Prénom
    $email = $request->request->get('email');
    $fileType = $request->request->get('file_type'); // pdf ou docx

    // Validation des champs
    if (!$lastName || !$firstName || !$email) {
        $this->addFlash('error', 'Tous les champs sont obligatoires.');
        return $this->redirectToRoute('form_page');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->addFlash('error', 'Adresse email invalide.');
        return $this->redirectToRoute('form_page');
    }

    // Chemin vers le fichier basé sur le type
    $fileName = $fileType === 'docx' ? 'CV_Ponthieux_Léo.docx' : 'CV_Ponthieux_Léo.pdf';
    $filePath = $this->getParameter('kernel.project_dir') . '/public/upload/' . $fileName;

    // Vérifie si le fichier existe
    if (!file_exists($filePath)) {
        $this->addFlash('error', 'Le fichier demandé est introuvable.');
        return $this->redirectToRoute('form_page');
    }

    // Envoi du fichier pour téléchargement
    return $this->file($filePath, $fileName);
}
    
}