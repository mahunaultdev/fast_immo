<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulairecontactController extends AbstractController
{
    /**
     * @Route("/formulairecontact", name="formulairecontact")
     */
    public function index(): Response
    {
        return $this->render('formulairecontact/index.html.twig', [
            'controller_name' => 'FormulairecontactController',
        ]);
    }
}
