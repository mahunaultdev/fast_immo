<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(AnnoncesRepository $annoncesRepository): Response
    {
        $listAnnonces = $annoncesRepository->findAll();
        return $this->render('accueil/index.html.twig', [
            'annonces' => $listAnnonces,
        ]);
    }
}
