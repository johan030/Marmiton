<?php

namespace App\Controller;

use App\Form\SearchRecetteType;
use App\Repository\RecetteRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function searchRecette( Request $request,RecetteRepository $recetteRepository)
    {
        $searchRecetteForm = $this->createform(SearchRecetteType::class);
        if($searchRecetteForm->handleRequest($request)->isSubmitted() && $searchRecetteForm->isValid())
        { 
            $data = $searchRecetteForm->getData();
         
            //$recettes = $recetteRepository->findBySearch($data);
            $recettes = $recetteRepository->search($searchRecetteForm->getData());


        
        }
        return $this->render('search/index.html.twig', [
            'recettes' => $recettes ?? $recetteRepository->findAll()
        ]);
    }

    #[Route('/search_form', name: 'app_search_form')]
    public function form( Request $request)
    {
        $searchRecetteForm = $this->createform(SearchRecetteType::class);

        return $this->render('_partials/_searchform.html.twig', [
            'search_form' => $searchRecetteForm->createView(),
        ]);
    }
}
