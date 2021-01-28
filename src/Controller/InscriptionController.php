<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class InscriptionController extends AbstractController
{
    /** @var UserPasswordEncoderInterface */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(): Response
    {
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
        ]);
    }

    /**
     * @Route("/add_user", name="add_user")
     */
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        // creates a task object and initializes some data for this example
        $user = new User();
        $user->setRoles(['ROLE_USER']);

        if( $request->request->has("nom") ){
            $user->setNom($request->request->get("nom"));
        }
        if( $request->request->has("prenom") ){
            $user->setPrenom($request->request->get("prenom"));
        }
        if( $request->request->has("username") ){
            $user->setUsername($request->request->get("username"));
        }
        if( $request->request->has("email") ){
            $user->setEmail($request->request->get("email"));
        }
        if( $request->request->has("tel") ){
            $user->setTelephone($request->request->get("tel"));
        }
        if( $request->request->has("mdp") ){
            $user->setPlainPassword($request->request->get("mdp"));
            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPlainPassword()));
        }

        if(!empty($user)){
            //La methode 'persist' prepare la requet 'insert into' et la met en attente
            $em->persist($user);
            //La methode 'flush' execute les requetes en attente edt donc modifie la bdd
            $em->flush();
            return $this->render("accueil/index.html.twig");
        }

        //dump($request);
        return $this->render("inscription/index.html.twig");

    }

     /**
     * @Route("/connexion", name="app_connexion")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('inscription/connexion.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
}
