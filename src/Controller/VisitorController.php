<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisitorController extends AbstractController
{
    /**
     * @Route("/", name="visitor_homepage")
     */
    public function index() : Response
    {
        return $this->render('Visitor/homepage.html.twig');
    }
}
