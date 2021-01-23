<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaisonController extends AbstractController
{
    /**
     * @Route("/maison", name="maison")
     */
    public function index(): Response
    {
        return $this->render('maison/index.html.twig', [
            'controller_name' => 'MaisonController',
        ]);
    }
    /**
     * @Route("/maison/detail", name="maison_detail")
     */
    public function maison(): Response
    {
        return $this->render('maison/maison.html.twig', [
            'controller_name' => 'MaisonController',
        ]);
    }
}
