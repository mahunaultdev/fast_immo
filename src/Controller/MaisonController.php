<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaisonController extends AbstractController
{
    /**
     * @Route("/maison", name="maison")
     */
    public function index(AnnoncesRepository $annoncesRepository): Response
    {
        $listAnnonces = $annoncesRepository->findAll();
        return $this->render('maison/index.html.twig', [
            "annonces" => $listAnnonces,
        ]);
    }
    
    /**
     * @Route("/maison/detail/{id}", name="maison_detail")
     */
    public function maison(AnnoncesRepository $annoncesRepository, $id)
    {
        $annonce = $annoncesRepository->find($id);

        return $this->render('maison/maison.html.twig', [
           "annonce" => $annonce 
        ]);


    }

}
