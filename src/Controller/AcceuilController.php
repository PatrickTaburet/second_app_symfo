<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/acceuil", name="acceuil", methods={"GET"})
     */
    public function index(): Response
    {
        $nom = "steph";
        return $this->render('acceuil/index.html.twig', [
            'leNom' => $nom,
            'controller_name' => 'AcceuilController'
        ]);
    }
}
