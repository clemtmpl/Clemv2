<?php

namespace App\Controller;

use App\Entity\Formations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $formations = $this->getDoctrine()->getRepository(Formations::class)->findAll();
        return $this->render("home.html.twig",['formations' => $formations]);

    }
}