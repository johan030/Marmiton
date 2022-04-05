<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Repository\RecetteRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'main', methods: ['GET'])]
    
    public function index(Request $request, RecetteRepository $recetteRepository, PaginatorInterface $paginator): Response
    {   
        $donnees = $recetteRepository->findBy([],['created_at' => 'desc']);

        $recettes = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );
        return $this->render('main/index.html.twig', [
            'recettes' => $recettes,
        ]);
    }
}
