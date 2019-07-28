<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('home.html.twig', [
            'title' => 'Home page'
        ]);
    }
}